<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Document</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="../../CSS/Leisure.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css"> 
	<link rel="stylesheet" href="../../CSS/nav.css"> 
	<link rel="stylesheet" href="../../CSS/footer.css">
</head>
<body>
<?php
include('nav.php');
?>
     <div class="main-wrap">
	<div class="logo"><a href="/welcome" id="logo"></a></div>
		
		<div class="textbox">
			<h1>혼자서도 즐기는 레저</h1>
			<p>|&nbsp&nbsp Only Leisure &nbsp&nbsp|</p>
		</div>
		<div class="menu-btn">
				<a href="#"><img src="/images/common/nav-bar.png" alt=""></i></a>
			</div>
	</div>
	<div class="subgnb">
    <ul class="subgnb1">
			<li><a href="/leisure">레이싱카트</a></li>
			<span>|</span>
			<li><a href="/leisure2">서바이벌</a></li>
			<span>|</span>
			<li><a href="/leisure3">ATV</a></li>
			<span>|</span>
			<li><a href="/leisure4">식당(바비큐)</a></li>
			<span>|</span>
		</ul>
	
	</div>

	<div class="Packagewrap">
		<div class="imgbox">
			
        <div class="wowrap wow fadeInRight animated" style="display:none">
				<h2>식당(바비큐)<span>Leisure</span></h2>
				<div class="package " style="">
				
					<img src="../../images/leisure/01_04.jpg" alt="">
					<div class="Packagetext">
						<h3>신나는 레저 후 즐기는 만찬</h3>
						<!-- <p> <b>※ 바비큐(1인분) 이용안내.</b><br>
						닭갈비 17,000원 또는 목살 18,000원<br>
						찌개, 밥, 쌈, 소스류, 김치 및 반찬 추가제공<br><br>
						<b>※ 바비큐(2시간 무제한 제공) 이용안내.</b><br>
						10인 이상 단체에 한하여 이용가능(20인 이상시 추가 할인)<br>
						닭갈비 or 목살 27,000원 또는 닭갈비 + 목살 29,000원<br>
						찌개, 밥, 쌈, 소스류, 김치 및 반찬 추가제공<br><br>
						※ 10인 이상 단체예약시 추가 할인 가능(전화문의)

						</p> -->
						<span style="font-weight:bold; font-size:18px;">※바비큐 세트메뉴(전화예약)</span><br>
							<br>
							Set A(2~3인용) : 63,000원 닭갈비 350g + 목살 300g<br>
							Set B(4~5인용) : 119,000원 닭갈비 700g + 목살 600g<br>
							추가제공 : 소시지 + 버섯 + 가래떡 + 새우 + 고구마 + 양파 + 찌개 + 즉석밥<br><br>

							<span style="font-weight:bold; font-size:18px;">※바비큐 무한리필</span><br>
							<br>
							2시간, 10인 이상 단체 주문시 이용가능<br>
							닭갈비 or 목살 택1, 1인당 27,000원<br>
							닭갈비 + 목살, 1인당 29,000원<br>
							추가제공 : 찌개 + 밥 + 야채 + 밑반찬 5종<br><br>
							※ 10인 이상 단체예약시 추가 할인 가능(전화문의)<br><br>
							<a href="http://gangchonfarm.com/html/restaurant.php?cate=02" class="bbqbtn">바비큐 상세정보</a>
					</div>
				</div>
			</div>
	</div>
	
</div>
	<div class="detailwrap">
		<div class="detail">
		
			<div class="btn">
				<a href="/reserve">
					<h1>예약하기</h1>
				</a>
			</div>
		</div>
	</div>
	<?php
include('footer.php');
?>
</body>

		
<script src='http://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<script>
	
    $(function(){
	//맨처음 li 디폴트값(2종패키지)
$(document).ready(function(){
	$('.Packagewrap .wowrap').eq(3).addClass('active');
	$('.subgnb1 li a').eq(3).css("color","#fff");
	$('.subgnb1 li').eq(3).css("background-color","#686459");
    $('.Packagewrap .wowrap').addClass('active');
})

// 다음 li들 차례로 호버시에 어떻게될지

//여기까지가 li hover

//subgnb부분 호버시 처리될부분
$('.subgnb1 li').eq(0).click(function () {
		$('.subgnb1 li').eq(0).css({
			"background-color": "#686459",
			"color": "#fff"
		});
		$('.subgnb1 li').eq(1).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb1 li').eq(2).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb1 li').eq(3).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
	});

	$('.subgnb1 li').eq(1).click(function () {
		$('.subgnb1 li').eq(1).css({
			"background-color": "#686459",
			"color": "#fff"
		});
		$('.subgnb1 li').eq(0).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb1 li').eq(2).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb1 li').eq(3).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
	});

	$('.subgnb1 li').eq(2).click(function () {
		$('.subgnb1 li').eq(2).css({
			"background-color": "#686459",
			"color": "#fff"
		});
		$('.subgnb1 li').eq(1).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb1 li').eq(0).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb1 li').eq(3).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
	});

	$('.subgnb1 li').eq(3).click(function () {
		$('.subgnb1 li').eq(3).css({
			"background-color": "#686459",
			"color": "#fff"
		});
		$('.subgnb1 li').eq(1).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb1 li').eq(2).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb1 li').eq(0).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
	});
	});
//subgnb 클릭시 이벤트
// $('.subgnb li').eq(0).click(function () {
// 		$('.Packagewrap .wowrap').eq(0).addClass('active');
// 		$('.Packagewrap .wowrap').eq(1).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(2).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(3).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(4).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(5).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(6).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(7).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(8).removeClass('active');

// 		$('.subgnb li').eq(0).css({
// 			"background-color": "#686459",
// 			"color": "#fff"
// 		});
// 		$('.subgnb li').eq(1).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(2).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(3).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(4).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(5).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(6).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(7).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(8).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});

// 	});


// 	$('.subgnb li').eq(1).click(function () {
// 		$('.Packagewrap .wowrap').eq(1).addClass('active');
// 		$('.Packagewrap .wowrap').eq(0).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(2).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(3).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(4).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(5).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(6).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(7).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(8).removeClass('active');

// 		$('.subgnb li').eq(1).css({
// 			"background-color": "#686459",
// 			"color": "#fff"
// 		});
// 		$('.subgnb li').eq(0).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(2).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(3).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(4).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(5).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(6).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(7).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(8).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});

// 	});

// 	$('.subgnb li').eq(2).click(function () {
// 		$('.Packagewrap .wowrap').eq(2).addClass('active');
// 		$('.Packagewrap .wowrap').eq(0).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(1).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(3).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(4).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(5).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(6).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(7).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(8).removeClass('active');

// 		$('.subgnb li').eq(2).css({
// 			"background-color": "#686459",
// 			"color": "#fff"
// 		});
// 		$('.subgnb li').eq(0).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(1).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(3).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(4).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(5).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(6).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(7).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(8).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});

// 	});

// 	$('.subgnb li').eq(3).click(function () {
// 		$('.Packagewrap .wowrap').eq(3).addClass('active');
// 		$('.Packagewrap .wowrap').eq(0).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(1).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(2).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(4).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(5).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(6).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(7).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(8).removeClass('active');

// 		$('.subgnb li').eq(3).css({
// 			"background-color": "#686459",
// 			"color": "#fff"
// 		});
// 		$('.subgnb li').eq(0).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(1).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(2).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(4).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(5).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(6).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(7).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(8).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});

// 	});

// 	$('.subgnb li').eq(4).click(function () {
// 		$('.Packagewrap .wowrap').eq(4).addClass('active');
// 		$('.Packagewrap .wowrap').eq(0).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(2).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(3).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(1).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(5).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(6).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(7).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(8).removeClass('active');

// 		$('.subgnb li').eq(4).css({
// 			"background-color": "#686459",
// 			"color": "#fff"
// 		});
// 		$('.subgnb li').eq(0).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(2).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(3).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(1).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(5).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(6).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(7).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(8).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});

// 	});

// 	$('.subgnb li').eq(5).click(function () {
// 		$('.Packagewrap .wowrap').eq(5).addClass('active');
// 		$('.Packagewrap .wowrap').eq(0).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(2).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(3).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(4).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(1).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(6).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(7).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(8).removeClass('active');

// 		$('.subgnb li').eq(5).css({
// 			"background-color": "#686459",
// 			"color": "#fff"
// 		});
// 		$('.subgnb li').eq(0).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(2).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(3).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(4).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(1).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(6).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(7).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(8).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});

// 	});

// 	$('.subgnb li').eq(6).click(function () {
// 		$('.Packagewrap .wowrap').eq(6).addClass('active');
// 		$('.Packagewrap .wowrap').eq(0).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(2).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(3).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(4).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(5).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(1).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(7).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(8).removeClass('active');

// 		$('.subgnb li').eq(6).css({
// 			"background-color": "#686459",
// 			"color": "#fff"
// 		});
// 		$('.subgnb li').eq(0).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(2).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(3).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(4).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(5).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(1).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(7).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(8).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});

// 	});

// 	$('.subgnb li').eq(7).click(function () {
// 		$('.Packagewrap .wowrap').eq(7).addClass('active');
// 		$('.Packagewrap .wowrap').eq(0).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(2).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(3).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(4).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(5).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(6).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(1).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(8).removeClass('active');

// 		$('.subgnb li').eq(7).css({
// 			"background-color": "#686459",
// 			"color": "#fff"
// 		});
// 		$('.subgnb li').eq(0).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(2).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(3).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(4).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(5).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(6).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(1).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(8).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});

// 	});

// 	$('.subgnb li').eq(8).click(function () {
// 		$('.Packagewrap .wowrap').eq(8).addClass('active');
// 		$('.Packagewrap .wowrap').eq(0).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(2).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(3).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(4).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(5).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(6).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(7).removeClass('active');
// 		$('.Packagewrap .wowrap').eq(1).removeClass('active');

// 		$('.subgnb li').eq(8).css({
// 			"background-color": "#686459",
// 			"color": "#fff"
// 		});
// 		$('.subgnb li').eq(0).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(2).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(3).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(4).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(5).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(6).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(7).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});
// 		$('.subgnb li').eq(1).css({
// 			"background-color": "#fdfaf4",
// 			"color": "#686459"
// 		});

// 	});
	
	</script>
	<script>
		new WOW().init();
	</script>
</html>