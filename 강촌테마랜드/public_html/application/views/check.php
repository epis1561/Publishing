
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>강촌테마랜드 예약확인</title>
	<link rel="stylesheet" href="/CSS/check.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/CSS/nav.css"> 
	<link rel="stylesheet" href="/CSS/footer.css">
</head>
<?php
include('nav.php');
?>
<body>
	<div class="main-wrap">
	<div class="logo">
				<a href="/welcome" id="logo">
				</a>
			</div>
		<div class="menu-btn">
			<a href="#"><img src="/images/common/nav-bar.png" alt=""></i></a>
		</div>
		<div class="textbox">
			<h1>예약취소 및 환불규정</h1>
			<p>|&nbsp&nbsp Reservation &nbsp&nbsp|</p>
		</div>
	</div>

	<div class="gnbwrap">
		<div class="gnb">
			<ul>
				<li><a href="/reserve">예약하기</a></li>
				<li><a href="#">예약확인 및 취소</a></li>
			</ul>
		</div> 
	</div>
	

		

	<div class="user-form">
		<div class="container">
            <h1>예약확인 및 취소</h1>
			<p class="left-text">*취소 및 환불규정 </p>
				<ul>
					<li>-구매 후 신청한 일자에 모두 사용해야 하며, 부분 취소 및 부분 환불, 이용일자 변경은 불가합니다.</li>
					<li>-사용 완료 되었거나 일자가 지난 티켓은 환불이 불가합니다.</li>
					<li>-구매 후 이용 일자에 따른 환불 규정은 아래표와 동일하게 처리됩니다.</li>
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
			<h3>예약자 정보 입력</h3>
			<p><span>*</span>표기된 항목은 필수입력사항입니다.</p>
			<form action="check2" name="user_info" method="post" id="user_info">
				<div class="user_name">
					<label for="user_name">예약자명<span>*</span></label>
					<input type="text" id="name" name = "name" style="font-size: 18px">
				</div>
				<div class="user_num">
					<label for="user_num" method="post">예약 번호<span>*</span></label>
					<input type="text" id="res_no" name="res_no" style="font-size: 18px">
				</div>
			</form>
		</div>
	</div>

	<div class="submit">
			<div class="submit-btn" onclick="submit()">예약확인</div>
		</div>
	</div>


	<script src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
	<!-- <script type="text/javascript" src="../../Js/calendar.js"></script> -->

<script>
	$(document).ready(function(){
	$('.gnb li').eq(1).css("border-bottom","3px solid #978d6e");
	$('.Packagewrap .wowrap').eq(0).addClass('active');
})
 
function submit(){

	var res_result="none";
		$.ajax({
		url: "Database/check_reserve",
		type: "post",
		async:false, 
		dataType		: 'json',
			data: {
				res_no: $('#res_no').val(),
				name: $('#name').val()
			},
			success : function(result) {
				res_result = result.data;
			}
		});

		if(res_result == "none"){
			alert("예약내역이 없습니다");
		}
		else{
			document.forms[0].submit();
		}

	}

// 다음 li들 차례로 호버시에 어떻게될지
 $('.gnb li').eq(0).hover(function(){
 $(this).css({"margin-bottom":"-6px","border-bottom":"3px solid #978d6e"});

}
,function(){
	$(this).css({"margin-bottom":"-6px","border-bottom":"none"})
});
$(function () {
			$('.submit-btn').hover(function(){
			$(this).css({'background-color':'#686459','color':'#fff','cursor':'pointer'})	
			},function(){
				$(this).css({'background-color':'#fff','color':'#686459'})
			});
});


	</script>
	
</body>

</html>
<?php include "footer.php" ?>