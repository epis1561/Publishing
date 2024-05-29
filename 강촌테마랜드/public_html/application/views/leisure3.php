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
			<li><a href="/leisure4">식당(바베큐)</a></li>
			<span>|</span>
		</ul>
	
	</div>

	<div class="Packagewrap">
		<div class="imgbox">
			<div class="wowrap wow fadeInRight animated" style="display:none">
				<h2>ATV<span>Leisure</span></h2>
				<div class="package " style="">
				
					<img src="../../images/leisure/01_03.jpg" alt="">
					<div class="Packagetext">
						<h3>험한곳을 마다않고 어디든 갈 수 있는 사륜바이크를 즐겨보세요~!</h3>
						<p> 원동기 이상의 면허증 소지자에 한하여 이용 가능<br>
							안전 수칙 및 주행방법 등 충분히 숙지한 후 이용해주시기 바랍니다.<br>
							1시간 단위로 이용가능<br>
							이용복장:편한 복장으로 이용<br><br>
							※ 10인 이상 단체예약시 추가 할인 가능(전화문의)

						</p>
						
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
	$('.Packagewrap .wowrap').eq(2).addClass('active');
	$('.subgnb1 li a').eq(2).css("color","#fff");
	$('.subgnb1 li').eq(2).css("background-color","#686459");
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