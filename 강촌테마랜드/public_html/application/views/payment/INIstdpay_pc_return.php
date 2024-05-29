<?php
        require_once('libs/INIStdPayUtil.php');
        require_once('libs/HttpClient.php');
 
        $util = new INIStdPayUtil();
        $pay_result = 0;
 
        try {
 
            //#############################
            // 인증결과 파라미터 수신
            //#############################

            if (strcmp("0000", $_REQUEST["resultCode"]) == 0) {
 
                //############################################
                // 1.전문 필드 값 설정(***가맹점 개발수정***)
                //############################################
 
                $mid        = $_REQUEST["mid"];
                $timestamp  = $util->getTimestamp();
                $charset    = "UTF-8";
                $format     = "JSON";
                $authToken  = $_REQUEST["authToken"]; 
                $authUrl    = $_REQUEST["authUrl"];
                $netCancel  = $_REQUEST["netCancelUrl"];        
                $merchantData = $_REQUEST["merchantData"];

                $result_str = "";
 
                //#####################
                // 2.signature 생성
                //#####################
                $signParam["authToken"] = $authToken;   // 필수
                $signParam["timestamp"] = $timestamp;   // 필수
                // signature 데이터 생성 (모듈에서 자동으로 signParam을 알파벳 순으로 정렬후 NVP 방식으로 나열해 hash)
                $signature = $util->makeSignature($signParam);
 
 
                //#####################
                // 3.API 요청 전문 생성
                //#####################
                $authMap["mid"]        = $mid;       // 필수
                $authMap["authToken"]  = $authToken; // 필수
                $authMap["signature"]  = $signature; // 필수
                $authMap["timestamp"]  = $timestamp; // 필수
                $authMap["charset"]    = $charset;   // default=UTF-8
                $authMap["format"]     = $format;    // default=XML
 
                try {
 
                    $httpUtil = new HttpClient();
 
                    //#####################
                    // 4.API 통신 시작
                    //#####################
 
                    $authResultString = "";
                    if ($httpUtil->processHTTP($authUrl, $authMap)) {
                        $authResultString = $httpUtil->body;
 
                    } else {
                        echo "Http Connect Error\n";
                        echo $httpUtil->errormsg;
 
                        throw new Exception("Http Connect Error");
                    }
 
                    //############################################################
                    //5.API 통신결과 처리(***가맹점 개발수정***)
                    //############################################################
                    
                    $resultMap = json_decode($authResultString, true);
                    $pay_result = 1;
                    
                    $name = $resultMap["buyerName"];
                    $phone = $resultMap["buyerTel"];
                    $price = $resultMap["TotPrice"];
//                    $goodName = $resultMap["goodName"];

                    $res_data_arr = explode(";", $merchantData);

                    $sql = "SELECT * FROM `goods` WHERE `seq` = $res_data_arr[0]";
                    $data['slist'] = $this -> data_model -> getList($sql, 'DB');
            
                    foreach ($data['slist'] as $row)
                    {
                        $goodName = $row['name'];
                    }
 
                } catch (Exception $e) {
                    //    $s = $e->getMessage() . ' (오류코드:' . $e->getCode() . ')';
                    //####################################
                    // 실패시 처리(***가맹점 개발수정***)
                    //####################################
                    //---- db 저장 실패시 등 예외처리----//
                    $s = $e->getMessage() . ' (오류코드:' . $e->getCode() . ')';
                    echo $s;
                    $pay_result = 0;
 
                    //#####################
                    // 망취소 API
                    //#####################
 
                    $netcancelResultString = ""; // 망취소 요청 API url(고정, 임의 세팅 금지)
                    if ($httpUtil->processHTTP($netCancel, $authMap)) {
                        $netcancelResultString = $httpUtil->body;
                    } else {
                        echo "Http Connect Error\n";
                        echo $httpUtil->errormsg;
 
                        throw new Exception("Http Connect Error");
                    }
 
                    echo "<br/>## 망취소 API 결과 ##<br/>";
                    
                    /*##XML output##*/
                    //$netcancelResultString = str_replace("<", "&lt;", $$netcancelResultString);
                    //$netcancelResultString = str_replace(">", "&gt;", $$netcancelResultString);
 
                    // 취소 결과 확인
                    echo "<p>". $netcancelResultString . "</p>";
                }
            } else {
 
            }
        } catch (Exception $e) {
            $s = $e->getMessage() . ' (오류코드:' . $e->getCode() . ')';
            $pay_result = 0;
            echo $s;
        }
?> 
<!DOCTYPE html>
<html lang="ko">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>강촌 테마랜드 예약 결제</title>
        <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

    <body class="wrap">

        <!-- 본문 -->
        <main class="col-8 cont" id="bill-01">

            <!-- 카드CONTENTS -->
            <section class="menu_cont mb-5">
                <div class="card">
                    <div class="card_tit">
                        <h3>예약 안내</h3>
                    </div>

                    <form name="" id="result" method="post" class="mt-5" action=check2>
                    <input type="hidden" name="strTelList" value="<?php echo @(in_array($resultMap["buyerTel"] , $resultMap) ? $resultMap["buyerTel"] : "null" ) ?>">    
                    <input type="hidden" name="strData" value=""> 
                    <input type="hidden" name="res_no" value=""> 
                    <input type="hidden" name="name" value=""> 

                    <div class="row g-3 justify-content-between" style="--bs-gutter-x:0rem;">

                        <label class="col-10 col-sm-2 input param" style="border:none;">예약 결과: </label>
                        <label class="col-10 col-sm-9 reinput">
                            <?php echo @(in_array($resultMap["resultMsg"] , $resultMap) ? $resultMap["resultMsg"] : $_REQUEST["resultMsg"] ) ?>
                        </label>
						
						<label class="col-10 col-sm-2 input param" style="border:none;">결제 금액: </label>
                        <label class="col-10 col-sm-9 reinput">
                            <?php echo @(in_array($resultMap["TotPrice"] , $resultMap) ? $resultMap["TotPrice"] : "null" ) ?> 원
                        </label>
						
						<label class="col-10 col-sm-2 input param" style="border:none;">상품명 : </label>
                        <label class="col-10 col-sm-9 reinput">
                            <?php echo @(in_array($resultMap["goodName"] , $resultMap) ? $resultMap["goodName"] : "null" ) ?>
                        </label>
						
                        <label class="col-10 col-sm-2 input param" style="border:none;">예약자 번호 : </label>
                        <label class="col-10 col-sm-9 reinput">
                            <?php echo @(in_array($resultMap["buyerTel"] , $resultMap) ? $resultMap["buyerTel"] : "null" ) ?>
                        </label>

                        <label class="col-10 col-sm-2 input param" style="border:none;">예약 번호 : </label>
                        <label class="col-10 col-sm-9 reinput">
                            <?php echo $res_data_arr[3] ?>
                        </label>
						
						<?php
						
						if (isset($resultMap["payMethod"]) && strcmp("VBank", $resultMap["payMethod"]) == 0) { //가상계좌
                            echo "
							<label class='col-10 col-sm-2 input param' style='border:none;'>VACT_Num</label>
                            <label class='col-10 col-sm-9 reinput'>".@(in_array($resultMap["VACT_Num"] , $resultMap) ? $resultMap["VACT_Num"] : "null" ).
                            "</label>
							
							<label class='col-10 col-sm-2 input param' style='border:none;'>VACT_BankCode</label>
                            <label class='col-10 col-sm-9 reinput'>".@(in_array($resultMap["VACT_BankCode"] , $resultMap) ? $resultMap["VACT_BankCode"] : "null" ).
                            "</label>
							
							<label class='col-10 col-sm-2 input param' style='border:none;'>VACT_Date</label>
                            <label class='col-10 col-sm-9 reinput'>".@(in_array($resultMap["VACT_Date"] , $resultMap) ? $resultMap["VACT_Date"] : "null" ).
                            "</label>"
							;
                        } 						
						?>
 
                    </div>
                </form>
				<button onclick="submit()" class="btn_solid_pri col-6 mx-auto btn_lg" style="margin-top:50px">돌아가기</button>
                </div>
            </section>
			
        </main>
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script>

    var res_no = "<?php echo $res_data_arr[3]; ?>";
    var name = "<?php echo $name; ?>";
    var phone = "<?php echo $phone; ?>";
	var goods = <?php echo $res_data_arr[0]; ?>;
    var leisure_time = "<?php echo $res_data_arr[1]; ?>";
	var headcount = <?php echo $res_data_arr[2]; ?>;
    var price = <?php echo $price; ?>;
    var goodName = "<?php echo $goodName; ?>";
    var strData ="[강촌테마랜드]\r\n"+
    "ATV, 레이싱카트, 서바이벌 및 바비큐, 숙박까지 가능한 액티비티 강촌테마랜드를 찾아주셔서 감사합니다. \r\n\r\n"+
    "■ 예약안내\r\n"+
    "예약번호 : " +res_no+ "\r\n" + 
    "예약일 : " +leisure_time+ "\r\n" + 
    "예약자명 : " +name+ "\r\n" + 
    "상품명 : " +goodName+ "\r\n" + 
    "인원 : " +headcount+ " 명\r\n" + 
    "결제금액 : " +price+ " 원 \r\n\r\n" + 
    "패키지 상품 이용시 더 많은 혜택을 받으실 수 있습니다! \r\n"+
    "자세한 내용은 아래 홈페이지 참고 부탁드립니다.\r\n\r\n" +
    "■ 강촌레져 https://gcleisure.com \r\n" +
    "■ 강촌글램핑&숙박 http://www.gangchonfarm.com \r\n" +
    "■ 문의 010-4535-8214 \r\n\r\n" +
    "감사합니다"
    ;

	$(document).ready(function(){
        <?php
            echo "var pay_result = '$pay_result';";
        ?>
        if(pay_result == 1 )
            save_db();    
    });    

    function save_db() {

        $('input[name=res_no]').attr('value',res_no);
        $('input[name=name]').attr('value',name);

        $.ajax({
            url: "Database/save_reserve",
            type: "post",
                data: {
                    res_no: res_no,
                    name: name,
					phone: phone,
					goods: goods,
					leisure_time : leisure_time+":00",
					headcount : headcount,
					price : price

                }
            }).done(function(data) {
                send_sms();

            });
    }

    function send_sms(){
        $.ajax({
            url: "sms",
            type: "post",
                data: {
                    strTelList: phone,
                    strData: strData
                }
            }).done(function(data) {
                submit();

            });        
    }

    function submit(){
	    document.forms[0].submit();
    }
    </script>
		
    </body>
</html>