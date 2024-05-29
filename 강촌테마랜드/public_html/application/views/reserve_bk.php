<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../../CSS/reserve.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="header">
		<a href="" id="logo"><img src="../../images/PC/logo.png" alt=""></a>
		<div class="menu-btn">
			<a href=""><img src="../../images/PC/nav-bar2.png" alt=""></a>
		</div>
	</div>
	<div class="reserve-view">
		<ul>
			<div class="view-top">
				<li>
					<h3>레저<br><span>서바이벌</span></h3>

				</li>
				<li>
					<h3>방문일자<br><span>22.10.25</span></h3>

				</li>
				<li>
					<h3>예정도착시간<br><span>pm 18:50</span></h3>

				</li>
			</div>
			<div class="view-down">
				<li>
					<h3>인원수(명)<br><span>3</span></h3>

				</li>
				<li>
					<h3>패키지명<br><span>서바이벌+ATV패키지</span></h3>

				</li>
				<li>
					<h3>총금액(VAT포함)<br><span>300,000원</span></h3>

				</li>
			</div>
		</ul>
	</div>
	<div class="container">
		<div class="reser-menu">
			<div class="text-box">
				<h1>레저<span>&</span>패키지 예약</h1>
				<p>예약을 원하는 레저, 방문일자, 예정도착시간을 입력 후 패키지를 선택하세요.</p>
			</div>
					<!-- <div class="resbtn">
						<ul>
							<li class="resbtn1">
								<p>레저단품</p>
								<select name="single" id="single">
									<option value="none">==선택하세요==</option>
									<option value="">서바이벌(약 150발)</option>
									<option value="">레이싱카트(약 10분)</option>
									<option value="">ATV(약 1시간)</option>
									<option value="">바비큐(1인분 250g)</option>
									<option value="">바비큐(무제한,2시간)</option>

								</select>
							</li>
						</ul>

						<ul>
							<li class="resbtn2">
								
									<p>레저패키지</p>
	
								<select name="package" id="pakage" >
									<option value="none">==선택하세요==</option>
									<option value="">레이싱카트 + 서바이벌 + ATV + 바비큐(무제한)</option>
									<option value="">레이싱카트 + 서바이벌 + ATV + 바비큐(1인분)</option>
									<option value="">레이싱카트 + 서바이벌 + ATV</option>
									<option value="">레이싱카트 + 서바이벌 + 바비큐(무제한)</option>
									<option value="">레이싱카트 + 서바이벌 + 바비큐(1인분)</option>
									<option value="">레이싱카트 + ATV + 바비큐(무제한)</option>
									<option value="">레이싱카트 + ATV + 바비큐(1인분)</option>
									<option value="">서바이벌 + ATV + 바비큐(무제한)</option>
									<option value="">서바이벌 + ATV + 바비큐(1인분)</option>
									<option value="">레이싱카트 + 서바이벌</option>
									<option value="">레이싱카트 + ATV</option>
									<option value="">서바이벌 + ATV</option>
									<option value="">레이싱카트 + 바비큐(무제한)</option>
									<option value="">레이싱카트 + 바비큐(1인분)</option>
									<option value="">서바이벌 + 바비큐(무제한)</option>
									<option value="">서바이벌 + 바비큐(1인분)</option>
									<option value="">ATV + 바비큐(무제한)</option>
									<option value="">ATV + 바비큐(1인분)</option>
								</select>
							</li>
						</ul>
					</div> -->

					<div class="calendar">
					<div class="calendar-header">
						<div class="prevDay"style="none"><p>Prev</p></div>
						<h2 class='dateTitle'></h2>
						<div class="nextDay"><p>Next</p></div>
					</div>
					<div class="grid dateHead">
						<div id="sun">S</div>
						<div>M</div>
						<div>T</div>
						<div>W</div>
						<div>T</div>
						<div>F</div>
						<div id="sat">S</div>
					</div>
					<div class="grid dateBoard"></div>
					</div>
				</div>
				<div class="wrap-right">
					<div class="arrival">
						<label for="arrival">예정도착시간<br></label>
						<input type="text" id="arrival" name="arrival">
					</div>
					<p>인원수</p>
					<div class="addbar">
						<form action="">
							<input type="button" value="&#45" class="minus" style="font-size:40px; border-radius: 0; border: 1px solid #000;">
						</form>
						<p>1명</p>
						<form action="">
							<input type="button" value="&#43" class="plus"  style="font-size:35px; border-radius: 0; border: 1px solid #000;">
						</form>
					</div>
					<div class="searchbtn">
						<a href="">
							<p>패키지 검색</p>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="room">
	<div class="container">
		
			<h1>숙박시설 안내</h1>
			<div class="roomAll">
				<!-- 플렉스용 -->
				<div class="room1">
					<div class="room-wrap">
						<a href="http://gangchonfarm.com/html/glamp.php?roomnum=01" target="_blank">
							<img src="../../images/PC/reservation/room/room1.jpg" alt="room1">
						</a>
						<h3>글램핑</h3>
						<p>아름다운 자연과 함께 잊지 못할 추억을 만들어 보세요.</p>
					</div>
					<div class="room-wrap">
						<a href="http://gangchonfarm.com/html/room.php?roomnum=02" target="_blank">
							<img src="../../images/PC/reservation/room/room2.jpg" alt="room2">
						</a>
						<h3>디럭스룸</h3>
						<p>아늑한 디럭스룸과 함께 편안한 아침을 맞이 해 보세요.</p>
					</div>
				</div>
				<div class="room2">
					<div class="room-wrap">
						<a href="http://gangchonfarm.com/html/room.php?roomnum=01" target="_blank">
							<img src="../../images/PC/reservation/room/room3.jpg" alt="room3">
						</a>
						<h3>로얄룸</h3>
						<p>창밖의 따뜻한 햇살과 넓은 공간에서 여유를 즐겨보세요.</p>
					</div>
					<div class="room-wrap">
						<a href="http://gangchonfarm.com/html/room.php?roomnum=03" target="_blank">
							<img src="../../images/PC/reservation/room/room4.jpg" alt="room4">
						</a>
						<h3>스위트룸</h3>
						<p>깔끔하고 따뜻한 스위트룸에서 하루를 마무리하세요.</p>
					</div>
				</div>
			</div>
			<div class="roombtn"><a href="http://gangchonfarm.com/html/reserve.php?cate=02">숙박 예약하기</a></div>
	</div>
	</div>
	<div class="user-form">
		<div class="container">
			<h3>예약자 정보 입력</h3>
			<p><span>*</span>표기된 항목은 필수입력사항입니다.</p>
			<form action="#" name="user_info" method="get" id="user_info">
				<div class="user_name">
					<label for="user_name">예약자명<span>*</span></label>
					<input type="text" id="user_name">
				</div>
				<div class="user_num">
					<label for="user_num" method="get">예약자 전화번호<span>*</span></label>
					<input type="text" id="user_num">
				</div>
			</form>
			<h4>유의사항</h4>
			<div class="notice">
				<ul>
					<li>
						<p>유의사항입니다.</p>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="info-check">
		<div class="container">
			<h3>예약자 정보 확인</h3>
			<div class="reserinfo">
				<ul>
					<li><span>레저:</span></li>
					<li><span>방문일자:</span></li>
					<li><span>예정도착시간:</span></li>
					<li><span>인원수(명):</span></li>
					<li><span>패키지명:</span></li>
				</ul>
			</div>
			<div class="total">
				<p>총금액<br><span>(VAT포함)</span></p>
			</div>
			<div class="checkbox"><input type="checkbox" name="agree" value="yes" class="sizer">
				<p> 개인정보수집 및 이용동의 <a href="">[전문보기]</a></p>
			</div>

		</div>
	</div>
	<div class="submit">
		<div class="container">
			<div class="cancel-btn"><a href="">취소하기</a></div>
			<div class="submit-btn"><a href="">예약하기</a></div>
		</div>
	</div>
	<script src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
	<script type="text/javascript" src="../../Js/calendar.js"></script>

	<script>
		$(function () {
			$a1 = $('.cancel-btn > a')
			$a2 = $('.submit-btn > a')
			$a3 = $('.searchbtn > a')
			$a4 = $('.b1 > a')
			$a5 = $('.b2 > a')
			$a6 = $('.b3 > a')

			$(".cancel-btn").mouseover(function () {
					$(this).css('background-color', '#686459');
					$($a1).css('color', '#fff');


				}),
				$(".cancel-btn").mouseout(function () {
					$(this).css('background-color', '#fff');
					$($a1).css('color', '#686459');


				}),
				$(".submit-btn").mouseover(function () {
					$(this).css('background-color', '#686459');
					$($a2).css('color', '#fff');


				}),
				$(".submit-btn").mouseout(function () {
					$(this).css('background-color', '#fff');

					$($a2).css('color', '#686459');


				}),
				$(".searchbtn").mouseover(function () {
					$(this).css({
						background: '#fff',
						border: '1px solid #686459'
					});
					$($a3).css('color', '#686459');


				}),
				$(".searchbtn").mouseout(function () {
					$(this).css('background-color', '#686459');
					$($a3).css('color', '#fff');


				}),
				$(".b1").mouseover(function () {
					$(this).css({
						background: '#fff',
						border: '1px solid #686459'
					});
					$($a4).css('color', '#686459');


				}),
				$(".b1").mouseout(function () {
					$(this).css('background-color', '#686459');
					$($a4).css('color', '#fff');


				}),
				$(".b2").mouseover(function () {
					$(this).css({
						background: '#fff',
						border: '1px solid #686459'
					});
					$($a5).css('color', '#686459');


				}),
				$(".b2").mouseout(function () {
					$(this).css('background-color', '#686459');
					$($a5).css('color', '#fff');


				}),
				$(".b3").mouseover(function () {
					$(this).css({
						background: '#fff',
						border: '1px solid #686459'
					});
					$($a6).css('color', '#686459');


				}),
				$(".b3").mouseout(function () {
					$(this).css('background-color', '#686459');
					$($a6).css('color', '#fff');


				})

	
		});
	</script>
</body>

</html>
