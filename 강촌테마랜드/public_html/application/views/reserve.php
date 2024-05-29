<!DOCTYPE html>
<html lang="en">

<?php
$mobile = "pc";
if( $this->agent->is_mobile() ) {
    $mobile = $this->agent->mobile();
}

require_once('payment/libs/INIStdPayUtil.php');
$SignatureUtil = new INIStdPayUtil();

//$mid 			= "INIpayTest";  								// 테스트 상점아이디		
$mid 			= "gangchon01";  								// 상점아이디		

$signKey 		= "T2xxVG5nVDdMaGNLS1BYU3poblgvQT09"; 			// 웹 결제 signkey	
//$signKey 		= "SU5JTElURV9UUklQTEVERVNfS0VZU1RS"; 			// 테스트 웹 결제 signkey



$mKey 	= $SignatureUtil->makeHash($signKey, "sha256");

//$timestamp 		= $SignatureUtil->getTimestamp();
$timestamp 		= date("YmdHis");   			// util에 의해서 자동생성
$orderNumber 	= $mid . "_" . $timestamp; 						// 가맹점 주문번호(가맹점에서 직접 설정)
//$orderNumber 	= $timestamp; 
$price 			= "1000";        								// 상품가격(특수기호 제외, 가맹점에서 직접 설정)

$params = array(
    "oid" => $orderNumber,
    "price" => $price,
    "timestamp" => $timestamp
);

$sign   = $SignatureUtil->makeSignature($params);

?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>강촌테마랜드 예약</title>
	<link rel="stylesheet" href="../../CSS/reserve.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/CSS/nav.css"> 
	<link rel="stylesheet" href="/CSS/footer.css">
	<link href="../../libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
	<link href="../../libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />

	<!-- <link rel="stylesheet" href="./application/views/css/style.css">
	<link rel="stylesheet" href="./application/views/css/bootstrap.min.css"> -->
	<!--테스트 JS<script language="javascript" type="text/javascript" src="https://stgstdpay.inicis.com/stdjs/INIStdPay.js" charset="UTF-8"></script>-->
	<script language="javascript" type="text/javascript" src="https://stdpay.inicis.com/stdjs/INIStdPay.js" charset="UTF-8"></script>

</head>
<?php
include('nav.php');
?>
<body>
<script> 
	function on_pay() { 
		myform = document.SendPayForm_id; 
		myform.action = "https://mobile.inicis.com/smart/payment/";
		myform.target = "_self";
		myform.submit(); 
	}
</script> 
<div class="main-wrap">
		<div class="logo"><a href="/welcome" id="logo"></a></div>
		<div class="textbox">
			<h1>예약</h1>
			<p>|&nbsp&nbsp Reservation &nbsp&nbsp|</p>
		</div>
		<div class="menu-btn">
				<a href="#"><img src="/images/common/nav-bar.png" alt=""></i></a>
			</div>
		
	</div>

	<div class="gnbwrap">
		<div class="gnb">
			<ul>
				<li><a href="#">예약하기</a></li>
				<li><a href="/check">예약확인 및 취소</a></li>
			</ul>
		</div>
	</div>

<form method="post" name="formPvt" id="SendPayForm_id" action = "https://mobile.inicis.com/smart/payment/" targeg="_self" accept-charset="euc-kr">	
	<div class="container first_con">
		<div class="reser-menu">
			<div class="userinfo">
				<h3>1. 예약자 정보 입력</h3>
				<p><span>*</span>표기된 항목은 필수입력사항입니다.</p>
					<div class="user_name">
						<label for="user_name">예약자명<span>*</span></label>
						<input type="text" id="user_name">
					</div>
					<div class="user_num">
						<label for="user_num" method="post">예약자 전화번호<span>*</span></label>
						<input type="text" id="strTelList" name ="strTelList" >
					</div>
			</div>
			<div class="wrap-left">
				<div data-provide="datepicker-inline" id="datepicker-inline"></div>
			</div>
		</div>
		<div class="wrap-right">
			<div class="arrival">
				<label for="arrival">· 방문일자<br></label>
				<input type="text" id="arrival" name="arrival" readonly>
			</div>
			<div class="arrival">
				<label for="arrival">· 인원수<br></label>
				<input id="addbar" type="text" value="1" name="addbar" onchange = "cal_price()">
			</div>
			
			<div class="resbtn">
				<p>· 상품</p>
				<ul>
					<li class="resbtn1">
						<select name="single" id="mainOptions"></select>
						<select name="package1" id="subOptions" onchange="cal_price()"></select>
						<select name="time" id="timeOptions" onchange="cal_price()">
						<option value="">시간을 선택하세요</option>
						<option value="09:00">09:00</option>
						<option value="10:00">10:00</option>
						<option value="11:00">11:00</option>
						<option value="12:00">12:00</option>
						<option value="13:00">13:00</option>
						<option value="14:00">14:00</option>
						<option value="15:00">15:00</option>
						<option value="16:00">16:00</option>
						<option value="17:00">17:00</option>
						<option value="18:00">18:00</option>

						</select>
					</li>
				</ul>
			</div> 
		</div>
	</div>

	
	<input type="hidden" name="version" value="1.0">
	<input type="hidden" name="gopaymethod" value="Card:Directbank:vbank">	
	<input type="hidden" name="mid" value="<?php echo $mid ?>">
	<input type="hidden" name="oid" id="oid" value="<?php echo $orderNumber ?>">
	<input type="hidden" name="price">
	<input type="hidden" name="timestamp" value="<?php echo $timestamp ?>">
	<input type="hidden" name="signature" value="">
	<input type="hidden" name="mKey" value="<?php echo $mKey ?>">
    <input type="hidden" name="currency" value="WON">
	<input type="hidden" name="goodname">
	<input type="hidden" name="buyername" value="">
	<input type="hidden" name="buyertel" value="01012345678">
	<input type="hidden" name="buyeremail" value="id@email.com">
	<input type="hidden" name="returnUrl" value="https://gcscamp.co.kr/inistdpay_return">
    <input type="hidden" name="closeUrl" value="https://gcscamp.co.kr/inistdpay_close">
	<input type="hidden" name="acceptmethod" value="HPP(1):below1000:va_receipt">

	<input type="hidden" name="merchantData" value="">


	<input type="hidden" name="P_INI_PAYMENT" value="CARD">
	<input type="hidden" name="P_MID" value="<?php echo $mid ?>">
	<input type="hidden" name="P_OID" value="<?php echo $orderNumber ?>">
	<input type="hidden" name="P_AMT" value="">
	<input type="hidden" name="P_GOODS" value="테스트상품">
	<input type="hidden" name="P_UNAME" value="">
	<input type="hidden" name="P_MOBILE" value="01092038755">
	<input type="hidden" name="P_EMAIL" value="id@email.com">
	<input type="hidden" name="P_NEXT_URL" value="https://gcscamp.co.kr/inimobile_mo_return">
							
	<input type="hidden" name="P_CHARSET" value="utf8">
	<input type="hidden" name="P_RESERVED" value="below1000=Y&vbank_receipt=Y">
	<input type="hidden" name="P_NOTI" value="">


	<div class="user-form">
		<div class="container">
			<h3 id="notice">2. 예약자 정보 확인</h3>
			<div class="notice">
				<ul>
					<li>예약날짜: </li>
					<li>예약자명: </li>
					<li>전화번호: </li>
					<!-- <li>옵션 1: </li> -->
					<li>옵션: </li>
					<li>이용시간: </li>
					<li>인원수(명): </li>
				</ul>
				<div class="detail">
					<ul id="detail">
						<li id = rdate>날짜 선택</li>
						<li id = rname>이름 입력</li>
						<li id = rnum>전화번호 입력</li>
						<!-- <li>패키지 OR 단일상품</li> -->
						<li id = rgoods>상품 선택</li>
						<li id = rtime>이용 시간 선택</li>
						<li id = rhead>인원 선택</li>
					</ul>
				</div>
			</div>
			<div class="price">
				<p>총금액<br><span>(VAT포함)</span></p><p id="price" name="price">00,000원</p>
			</div>
			<div class="reser-menu">
					<div class="text-box">
					<h1>레저<span>&</span>패키지 예약안내</h1>
					<ul>
						<li class="notice22"> 당일 예약은 전화에 한하여 예약 가능합니다.</li>
						<li class="notice22"> 예약자 정보 및 원하는 레저, 방문일자, 예정 도착시간 입력 후 패키지를 선택해주세요<br>&nbsp;&nbsp;(예약자 정보가 실제와 다를 경우, 예약 확인이 어려울 수 있으니 정확히 입력 부탁드립니다. 오류가 있을 경우, 전화로 확인 바랍니다.)</li>
						<li class="notice22"> 선택한 일자와 상품의 요일이 다를 경우, 현장에서 추가요금이 발생할 수 있습니다.</li>
						<li class="notice22"> 모든 레저 이용시 족구장 및 풋살장 이용이 가능합니다.(단 사전문의필수)</li>
						<li class="notice22"> ATV(사륜바이크)는 약 1시간 이용 가능하며, 원동이 이상의 면허증 소지자에 한하여 이용 가능합니다.</li>
						<li class="notice22"> 레이싱카트는 기본 1인승, 2인승 2가지 종류이며, 이용카트에 따라 비용이 다릅니다.</li>
						<li class="notice22"> 서바이벌은 1인당 페인트 볼 약 150발이 제공되며, 최소 4인부터 최대 40명까지 이용 가능합니다.(최소인원 부족시 진행불가)</li>
						<li class="notice22"> 바비큐 무제한은 10인 이상부터 이용 가능합니다.(전화문의)</li>
						<li class="notice22"> 바비큐 이용시 찌개, 밥, 쌈, 소스류, 김치 및 반찬류 등이 제공되며, 운동장, 계곡, 샤워장 이용이 가능합니다.</li>
						<li class="notice22"> 10인 또는 20인 이상 레저 및 바비큐, 단품 또는 패키지 이용시 단체 할인적용이 가능하니 예약 전, 전화 문의 부탁드립니다.</li>
						<li class="notice22"> 전화문의는 오전 9시부터 오후10시까지 가능합니다.</li>
					</ul>
					<p>예약문의 033-261-8214 / 010-4535-8214</p>
								</div>
				</div>
			<div class="info">
				<p class="left-text">*취소 및 환불규정 </p>
				<ul>
					<li>구매 후 신청한 일자에 모두 사용해야 하며, 부분 취소 및 부분 환불, 이용일자 변경은 불가합니다.</li>
					<li>사용 완료 되었거나 일자가 지난 티켓은 환불이 불가합니다.</li>
					<li>구매 후 이용 일자에 따른 환불 규정은 아래표와 동일하게 처리됩니다.</li>
				</ul>
			
<table class="tg">
<thead>
  <tr>
    <th class="tg-7btt">취소기한</th>
    <th class="tg-amwm">7일 전</th>
    <th class="tg-amwm">6일 전</th>
    <th class="tg-amwm">5일 전</th>
    <th class="tg-amwm">4일 전</th>
    <th class="tg-amwm">3일 전</th>
    <th class="tg-amwm">2일 전</th>
    <th class="tg-7btt">1일 전</th>
    <th class="tg-7btt">당일취소</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-amwm">위약율</td>
    <td class="tg-mxrt">0%</td>
    <td class="tg-mxrt">10%</td>
    <td class="tg-mxrt">20%</td>
    <td class="tg-mxrt">50%</td>
    <td class="tg-mxrt">70%</td>
    <td class="tg-mxrt">80%</td>
    <td class="tg-mxrt">90%</td>
    <td class="tg-mxrt">100%</td>
  </tr>
  <tr>
    <td class="tg-amwm">환불율</td>
    <td class="tg-amwm">100%</td>
    <td class="tg-amwm">90%</td>
    <td class="tg-amwm">80%</td>
    <td class="tg-amwm">50%</td>
    <td class="tg-amwm">30%</td>
    <td class="tg-amwm">20%</td>
    <td class="tg-amwm">10%</td>
    <td class="tg-amwm">0%</td>
  </tr>
</tbody>
</table>
<p style="font-size:bold; color:#000;">*사용 완료된 티켓 환불 불가<br>*구매 후 신청한 일자에 모두 사용해야 하며, 부분 취소 및 부분 환불 불가</p>
			</div>
		</div>
	</div>

	
	<div class="submit">
			<a name="pos3"></a>
			<div class="check" style="display:inline-block">
				<input name="check1" id="check1" type="checkbox" value="1" onclick="javascript:getFocus()" />
				<label for="check1" style="font-family: 'pre';font-size:20px;font-weight:600;" >개인정보 수집 및 이용동의<a href="/p_info" onclick="window.open(this.href,'_blank','width=800','height=600'); return false;">[전문보기]</a></label>
			</div>
			

			<div class="allow"></div>
			<!-- <div class="submit-btn" onclick = "javascript:document.forms[0].submit()">예약하기</div> -->
			<div class="submit-btn" onclick = "submit()">예약하기</div>
			<div class="cancel-btn">취소하기</div>
		</div>
	</div>
	<input type = "hidden" name="strData" id="strData" >
	</form>


	<!--<div class="room">
		<div class="container">

			<h1>숙박안내</h1>
			<div class="roomAll">-->
				<!-- 플렉스용 -->
				<!--
				<div class="room1">
					<div class="room-wrap">
						<a href="http://gangchonfarm.com/html/glamp.php?roomnum=01" target="_blank">
							<img src="../../images/reservation/room1.jpg" alt="room1">
						</a>
						<h3>글램핑</h3>
						<p>아름다운 자연과 함께 잊지 못할 추억을 만들어 보세요.</p>
					</div>
					<div class="room-wrap">
						<a href="http://gangchonfarm.com/html/room.php?roomnum=02" target="_blank">
							<img src="../../images/reservation/room2.jpg" alt="room2">
						</a>
						<h3>디럭스룸</h3>
						<p>아늑한 디럭스룸과 함께 편안한 아침을 맞이 해 보세요.</p>
					</div>
				

					<div class="room-wrap">
						<a href="http://gangchonfarm.com/html/room.php?roomnum=01" target="_blank">
							<img src="../../images/reservation/room3.jpg" alt="room3">
						</a>
						<h3>로얄룸</h3>
						<p>창밖의 따뜻한 햇살과 넓은 공간에서 여유를 즐겨보세요.</p>
					</div>
					<div class="room-wrap">
						<a href="http://gangchonfarm.com/html/room.php?roomnum=03" target="_blank">
							<img src="../../images/reservation/room4.jpg" alt="room4">
						</a>
						<h3>스위트룸</h3>
						<p>깔끔하고 따뜻한 스위트룸에서 하루를 마무리하세요.</p>
					</div>
				</div>
			</div>
			<div class="roombtn">
				<p>* 숙박 이용시, 상품을 날짜별로 나눠서 이용하실 분은 이용하시는 날짜에 각각 예약해 주셔야 합니다.</p>
				<a href="http://gangchonfarm.com/html/reserve.php?cate=02" target="_blank">예약하기</a>
			</div>
		</div>
	</div>-->
	<?php include "footer.php" ?>

	<?php
		$sql = "SELECT * FROM `goods` WHERE `category` = 's' and `use_yn` = 'y'  ORDER BY `order` asc ,  `name` ASC";
		$data['slist'] = $this -> data_model -> getList($sql, 'DB');

		$str_slist = '';
		foreach ($data['slist'] as $row)
		{
			$str_slist .= '<option value = '.$row['price'].' value2 = '.$row['seq'].' > '.$row['name'].'</option>';
		}

		$sql = "SELECT * FROM `goods` WHERE `category` = 'p' and `use_yn` = 'y' ORDER BY `order` asc , `name` ASC";
		$data['slist'] = $this -> data_model -> getList($sql, 'DB');

		$str_plist = '';
		foreach ($data['slist'] as $row)
		{
			$str_plist .= '<option value = '.$row['price'].' value2 = '.$row['seq'].' > '.$row['name'].'</option>';
		}

		$sql = "SELECT * FROM `config` ";
		$data['slist'] = $this -> data_model -> getList($sql, 'DB');

		$startDate = '';
		$endDate = '';

		foreach ($data['slist'] as $row)
		{
			$startDate = $row['c1'];
			$endDate = $row['c2'];
		} 

		//echo $str;
	?>

	<script src='https://code.jquery.com/jquery-1.9.1.min.js'></script>
	<!-- Plugins js-->
    <script src="../../libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
	<script src="../../libs/bootstrap-datepicker/js/bootstrap-datepicker.ko.min.js"></script>
	<script src="../../libs/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>

	<script>

	var signature = "";

$('#datepicker-inline').datepicker({
    language: "ko",
	todayHighlight: true,
	startDate: "<?php echo $startDate ?>",
    endDate: "<?php echo $endDate ?>"
});

$('#datepicker-inline').on('changeDate', function() {
    $('#arrival').val(
        $('#datepicker-inline').datepicker('getFormattedDate')
    );

	document.getElementById('rdate').innerHTML = $('#arrival').val();

});

$('#addbar').TouchSpin();

$('#user_name').on('blur',function(){
	var name_val = $('#user_name').val();
	document.getElementById('rname').innerHTML = name_val;
});

$('#strTelList').on('blur',function(){
	var num_val = $('#strTelList').val();
	document.getElementById('rnum').innerHTML = num_val;
});

$(document).ready(function(){
	$('.gnb li').eq(0).css("border-bottom","3px solid #978d6e");

	})		
$('.gnb li').eq(1).hover(function(){
 $(this).css({"margin-bottom":"-6px","border-bottom":"3px solid #978d6e"});

}
,function(){
	$(this).css({"margin-bottom":"-6px","border-bottom":"none"})
});

// 주석 - 메인옵션
var mainOptions = [
	"단일상품",
	"패키지상품"
];

//  주석 - 서브옵션 변수명 변경
var subOptions = {
/*
	"단일상품": ["서바이벌(약 150발)","레이싱카트(약 10분)","ATV(약 1시간)","바비큐(1인분 250g)","바비큐(무제한,2시간)"],
	
	"패키지상품" : ["레이싱카트 + 서바이벌 + ATV + 바비큐(무제한)","레이싱카트 + 서바이벌 + ATV + 바비큐(1인분)","레이싱카트 + 서바이벌 + ATV"
		,"레이싱카트 + 서바이벌 + 바비큐(무제한)","레이싱카트 + 서바이벌 + 바비큐(1인분)","레이싱카트 + ATV + 바비큐(무제한)","레이싱카트 + ATV + 바비큐(1인분)"
		,"서바이벌 + ATV + 바비큐(무제한)","서바이벌 + ATV + 바비큐(1인분)","레이싱카트 + 서바이벌","레이싱카트 + ATV","서바이벌 + ATV","레이싱카트 + 바비큐(무제한)"
		,"레이싱카트 + 바비큐(1인분)","서바이벌 + 바비큐(무제한)","서바이벌 + 바비큐(1인분)","ATV + 바비큐(무제한)","ATV + 바비큐(1인분"
	]	
*/	
};

var slist = '<?php echo $str_slist ?>';
var plist = '<?php echo $str_plist ?>';

initOptions();
// select 옵션 맨처음 초기화!
function initOptions(){
	// 주석 - 메인옵션 목룍 세팅

	// 선택 안할경우 노출한 옵션 세팅
	$("#mainOptions").append("<option value=''>상품선택</option>");

	mainOptions.map(mainOption => {
		$("#mainOptions").append("<option value='" + mainOption + "'>" + mainOption +"</option>")
	});

	// 주석 - 메인옵션값이 변경될때마다 그에 맞는 서브옵션값들로 세팅하기
	$("#mainOptions").on("change", function(){
		var selectedMainOption = $("#mainOptions").val();

		$('#subOptions').empty();

		// 선택 안할경우 노출한 옵션 세팅
		$("#subOptions").append("<option value=''>옵션선택</option>");

		if(selectedMainOption == '단일상품')
			$('#subOptions').append('"'+slist+'"');
		
		if(selectedMainOption == '패키지상품')
			$('#subOptions').append('"'+plist+'"');			
	
	});

	// 메인옵션 초기값 설정(메인옵션의 첫번째 항목값을 초기값으로 #mainOptions 세팅)
	$("#mainOptions").trigger("change", function(){
		$("#mainOptions").val(mainOptions[0]);
	});

	// 옵션값들 변경될 때마다 시간표 노출할지 결정하는부분
	$("#mainOptions, #subOptions").on("change", function (){
		// 시간표 노출여부 결정
		displayTimeTable();
	});

}


function submit(){
	INIpayStdMakeSignature();

    if( $('#arrival').val() == "" ) {
		alert("방문 일자를 선택해 주십시오.");	
		return false;
	}

	if( $("#subOptions option:checked").text() == "옵션선택" ) {
		alert("예약 상품을 선택해 주십시오.");	
		return false;
	}

	if( $("#timeOptions option:checked").text() == "시간을 선택하세요" ) {
		alert("예약 시간을 선택해 주십시오.");	
		return false;
	}

	if( $("#timeOptions option:checked").text() == "시간을 선택하세요" ) {
		alert("예약 시간을 선택해 주십시오.");	
		return false;
	}

	if( $('#user_name').val() == "" ) {
		alert("이름을 입력해 주십시오.");	
		return false;
	}

	if( $('#strTelList').val() == "" ) {
		alert("전화번호를 입력해 주십시오.");	
		return false;
	}

	if( !$(check1).is(":checked") ) {
		alert("개인정보 수집 및 이용동의 가 필요합니다.");	
		return false;
	}

	var vstrData = $('#arrival').val() + ' ' + $("#timeOptions option:checked").text() + ' ' + $("#addbar").val() + '명 ' + $("#subOptions option:checked").text();	
	
	$('input[name=strData]').attr('value',vstrData);

	$('input[name=goodname]').attr('value',vstrData);
	
	$('input[name=buyertel]').attr('value',$('#strTelList').val());
	$('input[name=buyername]').attr('value',$('#user_name').val());

	$('input[name=P_GOODS]').attr('value',vstrData);

	$('input[name=P_UNAME]').attr('value',$('#user_name').val());

	$('input[name=signature]').attr('value',signature);
	
	//$('input[name=oid]').attr('value',get_date());

	var res_Date = $("#subOptions > option:selected").attr("value2") + ';' + $('#arrival').val() + ' ' + $("#timeOptions option:checked").text() + ';' + $("#addbar").val() + ';' + get_date() + ';' + $('#strTelList').val();

	$('input[name=merchantData]').attr('value',res_Date);
	res_Date = $("#subOptions > option:selected").attr("value2") + ';' + $('#arrival').val() + ' ' + $("#timeOptions option:checked").text() + ';' + $("#addbar").val() + ';' + get_date() + ';' + $('#strTelList').val() + ';' + $('#user_name').val();
	
	$('input[name=P_NOTI]').attr('value',res_Date) + ';' + $('#user_name').val();
	
	var mobile = "";
	mobile = <?php echo '"'."${mobile}".'"' ?>;

	//alert(mobile);

	if(mobile == "pc"){
		INIStdPay.pay('SendPayForm_id');
	}
	else{
		//on_pay();
		document.forms[0].submit();
	}
	
	//document.forms[0].submit();
	//save_db();
}

function save_db() {
	var goods = $("#subOptions > option:selected").attr("value2");
	var price = $("#subOptions").val() * $("#addbar").val();
	var leisure_time = $('#arrival').val() + ' ' + $("#timeOptions option:checked").text() + ':00';
	alert(leisure_time);
	
        $.ajax({
            url: "Database/save_reserve",
            type: "post",
                data: {
                    res_no: $('#oid').val(),
                    name: $('#user_name').val(),
					phone: $('#strTelList').val(),
					goods: goods,
					leisure_time : leisure_time,
					headcount : $("#addbar").val(),
					price : price

                }
            }).done(function(data) {
               
		//	   alert($('#result').text(data));
            });
    }

	function INIpayStdMakeSignature() {
		var price = $("#subOptions").val() * $("#addbar").val();
	
        $.ajax({
            url: "INIpayStdMakeSignature",
            type: "post",
			async:false,
			dataType: "json",                         // 서버에서 보내줄 데이터의 타입
			
                data: {
                    oid: "<?php echo $orderNumber ?>",
                    price: price,
					timestamp: "<?php echo $timestamp ?>"
                }
            }).done(function(data) {
				var obj = data; // I should already be json!
				signature = data.signature.signature;
            });
    }	

function cal_price(){

	var price = $("#subOptions").val() * $("#addbar").val();
	//alert( $("#subOptions").val() * $("#addbar").val());

	

	$('input[name=price]').attr('value',price);
	$('input[name=P_AMT]').attr('value',price);

	//$('input[name=price]').attr('value',"1000");

	//$('#price').text() = $("#subOptions").val() * $("#addbar").val();
	price = currencyFormatter(price);
	
	document.getElementById('price').innerHTML = price;
	document.getElementById('rgoods').innerHTML = $("#subOptions option:checked").text()
	document.getElementById('rhead').innerHTML = $('#addbar').val() + "명";
	document.getElementById('rtime').innerHTML = $("#timeOptions option:checked").text()

	
}

function currencyFormatter(amount){
	return amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g,',');
}

function get_date(){
	var xmlHttpRequest;
	if(window.XMLHttpRequest){// code for Firefox, Mozilla, IE7, etc.
		xmlHttpRequest = new XMLHttpRequest();
	}else if(window.ActiveXObject){// code for IE5, IE6
		xmlHttpRequest = new ActiveXObject("Microsoft.XMLHTTP");
	}else{
		return;
	}

	xmlHttpRequest.open('HEAD', window.location.href.toString(), false);
	xmlHttpRequest.setRequestHeader("ContentType", "text/html");
	xmlHttpRequest.send('');

	var serverDate = xmlHttpRequest.getResponseHeader("Date");
	var date = new Date(serverDate);

	var yyyy = date.getFullYear().toString();
  	var MM = pad(date.getMonth() + 1,2);
  	var dd = pad(date.getDate(), 2);
  	var hh = pad(date.getHours(), 2);
  	var mm = pad(date.getMinutes(), 2)
  	var ss = pad(date.getSeconds(), 2)
	
	return yyyy +  MM + dd+  hh + mm + ss;

}

function pad(number, length) {
  var str = '' + number;
  while (str.length < length) {
    str = '0' + str;
  }
  return str;
}

$(function () {
	$('.cancel-btn').hover(function(){
			$(this).css({'background-color':'#686459','color':'#fff','cursor':'pointer'})	
			},function(){
				$(this).css({'background-color':'#fff','color':'#686459'})
			});
			$('.submit-btn').hover(function(){
			$(this).css({'background-color':'#686459','color':'#fff','cursor':'pointer'})	
			},function(){
				$(this).css({'background-color':'#fff','color':'#686459'})
			});
		});

	</script>
	
</body>

</html>
