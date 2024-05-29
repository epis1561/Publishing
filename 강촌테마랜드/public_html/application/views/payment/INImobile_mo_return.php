<?php
 
     $P_STATUS    = $_REQUEST["P_STATUS"];
     $P_RMESG1    = $_REQUEST["P_RMESG1"];
     $P_TID       = $_REQUEST["P_TID"];
     $P_REQ_URL   = $_REQUEST["P_REQ_URL"];
     $P_NOTI      = $_REQUEST["P_NOTI"];
     $P_AMT       = $_REQUEST["P_AMT"];

     $merchantData = $P_NOTI;

     $pay_result = "11";
 
  
   if ($_REQUEST["P_STATUS"] === "00") {             // 인증이 P_STATUS===00 일 경우만 승인 요청
 
        $id_merchant = substr($P_TID,'10','10');     // P_TID 내 MID 구분
        $data = array(
        
         'P_MID' => $id_merchant,         // P_MID
         'P_TID' => $P_TID                // P_TID
        );
 
 
        // curl 통신 시작 
        
        $ch = curl_init();                                                //curl 초기화
        curl_setopt($ch, CURLOPT_URL, $_REQUEST["P_REQ_URL"]);            //URL 지정하기
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                   //요청 결과를 문자열로 반환 
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);                     //connection timeout 10초 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);                      //원격 서버의 인증서가 유효한지 검사 안함
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));    //POST 로 $data 를 보냄
        curl_setopt($ch, CURLOPT_POST, 1);                                //true시 post 전송 
 
 
        $response = curl_exec($ch);
        curl_close($ch);
    
    parse_str($response, $out);

//print_r($out);
    

    $pay_result = $_REQUEST["P_STATUS"];
    $res_data_arr = explode(";", $merchantData);
                        
    $name = $res_data_arr[5];
    $phone = $res_data_arr[4];
    $price = $P_AMT;

    $sql = "SELECT * FROM `goods` WHERE `seq` = $res_data_arr[0]";
    $data['slist'] = $this -> data_model -> getList($sql, 'DB');

    foreach ($data['slist'] as $row)
    {
        $goodName = $row['name'];
    }

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
                        <h3>모바일 일반결제</h3>
                    </div>

                    <!-- 유의사항 -->
                    <!-- //유의사항 -->


                    <form name="" id="result" method="post" class="mt-5" action=check2>

                    <input type="hidden" name="strTelList" value="<?php echo $phone ?>">    
                    <input type="hidden" name="strData" value=""> 
                    <input type="hidden" name="res_no" value=""> 
                    <input type="hidden" name="name" value=""> 

                </form>
									
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
        "■ 강촌레져 https://gcleisure.com/ \r\n" +
        "■ 강촌글램핑&숙박 http://www.gangchonfarm.com \r\n" +
        "■ 문의 010-4535-8214 \r\n\r\n" +
        "감사합니다"
        ;

        $(document).ready(function(){

            <?php
                echo "var pay_result = '$pay_result';";
            ?>
            if(pay_result == "00" )
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