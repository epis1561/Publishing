
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	<meta name="keywords" content="강촌 가볼만한곳, 강촌레저, 강촌레져, 강촌서바이벌, 강촌바이크, 강촌카트, 강촌바비큐, 강촌식당, 강촌글램핑, 강촌펜션">
	<meta name="description" content="강촌 가볼만한곳, 강촌레저, 강촌레져, 강촌서바이벌, 강촌바이크, 강촌카트, 강촌바비큐, 강촌식당, 강촌글램핑, 강촌펜션">
	<meta property="og:type" content="https://gcscamp.co.kr/">
	<meta property="og:title" content="강촌관광농원 레져(서바이벌, 레이싱카트, ATV)">
	<meta property="og:description" content="강촌 가볼만한곳, 강촌레저, 강촌레져, 강촌서바이벌, 강촌바이크, 강촌카트, 강촌바비큐, 강촌식당, 강촌글램핑, 강촌펜션">
	<meta property="og:url" content="https://gcscamp.co.kr/">
	<meta property="al:web:url" content="https://gcscamp.co.kr/">
	<meta property="og:image" content="/images/common/image.jpg">
	<meta name="naver-site-verification" content="2979e397c9f9840749c9c2b00ffa36d3222531f0" />
	<link rel="canonical" href="https://gcscamp.co.kr/">
	<title>강촌테마랜드</title>
	<!-- font-awesome CSS -->
	<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="../../CSS/main.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">
	<link rel="stylesheet" href="/CSS/nav.css"> 
	<link rel="stylesheet" href="../../CSS/footer.css">
	
</head>

<body>
<?php
include('nav.php');
?>
<?php
    $sql = "SELECT * FROM `popup` WHERE `is_open` = '1' ORDER BY `ordering` ASC, `idx` DESC";
    $data['popups'] = $this -> data_model -> getList($sql, 'DB');
    $sql = "SELECT * FROM `slide` WHERE `is_open` = '1' ORDER BY `ordering` ASC, `idx` DESC";
    $data['slides'] = $this -> data_model -> getList($sql, 'DB');
    //$data['is_mobile'] = $is_mobile;
    $this -> load -> view('include/popup', $data);
?>

	<!-- main 시작 -->
	<div class="main-wrap">
		<div class="main">
			<div class="swiper-wrap" id="main1">
				<div class="swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img src="/images/main/01_01.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/main/01_02.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/main/01_03.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/main/01_04.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/main/01_05.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/main/01_06.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/main/01_07.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/main/01_08.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/main/01_09.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/main/01_10.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/main/01_11.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/main/01_12.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/main/01_13.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/main/01_14.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/main/01_15.jpg" alt="">
						</div>
					</div>
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
				</div>
			</div>
			<div class="logo">
				<a href="#" id="logo">
				</a>
			</div>
			<div class="text-box">
				<h1>함께 할수록 더 즐거운<br>[레저에 빠지다]</h1>
				<p>서바이벌 / 산악 오토바이 / 카트 레이싱</p>
			</div>

			<div class="menu-btn">
				<a href="#"><img src="/images/common/nav-bar.png" alt=""></i></a>
			</div>
		</div>




		<!-- side 메뉴 -->



		<div class="contentswrapall">
			<div id="Package-wrap">
				<h2>레저에 레저를 + 더하다<span>Package</span></h2>
				<div class="contents-wrap">
					<ul>
						<li>2종패키지</li>
						<li>3종패키지</li>
						<li>4종패키지</li>
					</ul>
					<!-- a태그 빼고 그냥 마우스포인트를 커서로바꿔서 조작편하게 조지자! -->
					<div class="img-wrap">
						<div class="package wow fadeInRight animated" style="display:none">
							<img src="/images/main/02_01.jpg" alt="">
							<div class="Package-info">
								<div class="text_box">
									<h3>2종패키지</h3>
									<p>
										서바이벌, ATV, 카트레이싱, 맛있는 식사까지 강촌테마랜드의 다양한 레저상품을 두배로 즐길 수 있습니다.
										2종패키지를 소개합니다!
									</p>
									<a href="/package2">
										자세히보기
									</a>
								</div>
							</div>
						</div>

						<div class="package wow fadeInRight animated" style="display:none">
							<img src="/images/main/02_02.jpg" alt="">
							<div class="Package-info">
								<div class="text_box">
									<h3>3종패키지</h3>
									<p>
									서바이벌, ATV, 카트레이싱, 맛있는 식사까지 강촌테마랜드의 놓칠 수 없는 레저상품들을 한번에 즐길 수 있습니다.
									마음대로 고르고 재미는 3배로~ 3종패키지를 소개합니다!
									</p>
									<a href="/package3">
										자세히보기
									</a>
								</div>
							</div>
						</div>

						<div class="package wow fadeInRight animated" style="display:none">
							<img src="/images/main/02_03.jpg" alt="">
							<div class="Package-info">
								<div class="text_box">
									<h3>4종패키지</h3>
									<p>서바이벌, ATV, 카트레이싱, 맛있는 식사까지 강촌테마랜드의 놓칠 수 없는 레저상품들을 모두 즐길 수 있습니다.
									하나도 놓칠 수 없는 4종패키지를 소개합니다!
									</p>
									<a href="/package4">
										자세히보기
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>




			<div id="Leisure-wrap">
				<h2>혼자서도 즐기는 레저 & 식당<span>Only Leisure</span></h2>
				<div class="contents-wrap" id="contents2">
					<div class="img-wrap">
						<div class="package wow fadeInLeft animated" style="display:none">
							<img src="/images/main/03_01.jpg" alt="">
							<div class="Package-info">
								<div class="text_box">
									<h3>서바이벌</h3>
									<p>넓은 필드에서 짜릿한 모의전투를 즐겨보세요~!
									</p>
									<a href="/leisure2">
										자세히보기
									</a>
								</div>
							</div>
						</div>

						<div class="package wow fadeInLeft animated" style="display:none">
							<img src="/images/main/03_02.jpg" alt="">
							<div class="Package-info">
								<div class="text_box">
									<h3>ATV(사륜바이크)</h3>
									<p>험한곳을 마다않고 어디든 갈 수 있는 사륜바이크를 즐겨보세요~!
									</p>
									<a href="/leisure3">
										자세히보기
									</a>
								</div>
							</div>
						</div>

						<div class="package wow fadeInLeft animated" style="display:none">
							<img src="/images/main/03_03.jpg" alt="">
							<div class="Package-info">
								<div class="text_box">
									<h3>카트레이싱(1인승/2인승)</h3>
									<p>드넓은 트랙에서 시원한 바람을 맞으며 경주를 즐겨보세요~!
									</p>
									<a href="/leisure">
										자세히보기
									</a>
								</div>
							</div>
						</div>

						<div class="package wow fadeInLeft animated" style="display:none">
							<img src="/images/main/03_04.jpg" alt="">
							<div class="Package-info">
								<div class="text_box">
									<h3>바비큐(1인분)</h3>
									<p>
									신나는 레저 후 즐기는 맜있는 만찬이 기다리고 있어요.
									</p>
									<a href="/leisure4">
										자세히보기
									</a>
								</div>
							</div>
						</div>

						<div class="package wow fadeInLeft animated" style="display:none">
							<img src="/images/main/03_05.jpg" alt="">
							<div class="Package-info">
								<div class="text_box">
									<h3>바비큐(2시간 무제한, 10인 이상)</h3>
									<p>
									신나는 레저 후 즐기는 맜있는 만찬이 기다리고 있어요.
									</p>
									<a href="/leisure4">
										자세히보기
									</a>
								</div>
							</div>
						</div>

					</div>
					<ul>
						<li>서바이벌</li>
						<li>ATV(사륜바이크)</li>
						<li>레이싱카트(1인승/2인승)</li>
						<li>바비큐(1인분)</li>
						<li>바비큐(2시간 무제한, 10인 이상부터)</li>
					</ul>
				</div>
			</div>
		</div>


		<!-- jQuery JS -->


		
		<script src='https://code.jquery.com/jquery-1.9.1.min.js'></script>
		<script src='../../Js/main.js'></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
</body>

<script>
	$(function () {
		$(document).ready(function () {
			//첫번째li 자동포커싱! 사진은 디폴트로 첫번째가져감. 맨처음초기상태! leisure부분은나중에바꾸자
			$('#Package-wrap .contents-wrap li').eq(0).css({
				"background-color": "#988971",
				"color": "#fff"
			});
			$('#Package-wrap .contents-wrap .img-wrap .package').eq(0).addClass('active');

			$('#Leisure-wrap .contents-wrap li').eq(0).css({
				"background-color": "#988971",
				"color": "#fff"
			});
			$('#Leisure-wrap .contents-wrap .img-wrap .package').eq(0).addClass('active');
		});
		$('.text_box').eq(3).css('padding-top','7%');
		$('.text_box').eq(4).css('padding-top','7%');
		$('.text_box').eq(5).css('padding-top','7%');
		$('.text_box').eq(6).css('padding-top','7%');
		$('.text_box').eq(7).css('padding-top','7%');

	})

	
	//디폴트제외 두번째 li 클릭했을때 이벤트발생!
	$('#Package-wrap .contents-wrap li').eq(1).click(function () {
		$('#Package-wrap .contents-wrap .img-wrap .package').eq(1).addClass('active');
		$('#Package-wrap .contents-wrap .img-wrap .package').eq(0).removeClass('active');
		$('#Package-wrap .contents-wrap .img-wrap .package').eq(2).removeClass('active');
		$('#Package-wrap .contents-wrap .img-wrap .package').eq(3).removeClass('active');
		$('#Package-wrap .contents-wrap .img-wrap .package').eq(4).removeClass('active');

		$('#Package-wrap .contents-wrap li').eq(1).css({
			"background-color": "#988971",
			"color": "#fff"
		});
		$('#Package-wrap .contents-wrap li').eq(0).css({
			"background-color": "#fff",
			"color": "#686459"
		});
		$('#Package-wrap .contents-wrap li').eq(2).css({
			"background-color": "#fff",
			"color": "#686459"
		});
		$('#Package-wrap .contents-wrap li').eq(3).css({
			"background-color": "#fff",
			"color": "#686459"
		});
		$('#Package-wrap .contents-wrap li').eq(4).css({
			"background-color": "#fff",
			"color": "#686459"
		});

	});

	$('#Package-wrap .contents-wrap li').eq(2).click(function () {
		$('#Package-wrap .contents-wrap .img-wrap .package').eq(2).addClass('active');
		$('#Package-wrap .contents-wrap .img-wrap .package').eq(0).removeClass('active');
		$('#Package-wrap .contents-wrap .img-wrap .package').eq(1).removeClass('active');
		$('#Package-wrap .contents-wrap .img-wrap .package').eq(3).removeClass('active');
		$('#Package-wrap .contents-wrap .img-wrap .package').eq(4).removeClass('active');

		$('#Package-wrap .contents-wrap li').eq(1).css({
			"background-color": "#fff",
			"color": "#686459"
		});
		$('#Package-wrap .contents-wrap li').eq(0).css({
			"background-color": "#fff",
			"color": "#686459"
		});
		$('#Package-wrap .contents-wrap li').eq(2).css({
			"background-color": "#988971",
			"color": "#fff"
		});
		$('#Package-wrap .contents-wrap li').eq(3).css({
			"background-color": "#fff",
			"color": "#686459"
		});
		$('#Package-wrap .contents-wrap li').eq(4).css({
			"background-color": "#fff",
			"color": "#686459"
		});
	});


	$('#Package-wrap .contents-wrap li').eq(0).click(function () {
		$('#Package-wrap .contents-wrap .img-wrap .package').eq(0).addClass('active');
		$('#Package-wrap .contents-wrap .img-wrap .package').eq(1).removeClass('active');
		$('#Package-wrap .contents-wrap .img-wrap .package').eq(2).removeClass('active');
		$('#Package-wrap .contents-wrap .img-wrap .package').eq(3).removeClass('active');
		$('#Package-wrap .contents-wrap .img-wrap .package').eq(4).removeClass('active');

		$('#Package-wrap .contents-wrap li').eq(1).css({
			"background-color": "#fff",
			"color": "#686459"
		});
		$('#Package-wrap .contents-wrap li').eq(0).css({
			"background-color": "#988971",
			"color": "#fff"
		});
		$('#Package-wrap .contents-wrap li').eq(2).css({
			"background-color": "#fff",
			"color": "#686459"
		});
		$('#Package-wrap .contents-wrap li').eq(3).css({
			"background-color": "#fff",
			"color": "#686459"
		});
		$('#Package-wrap .contents-wrap li').eq(4).css({
			"background-color": "#fff",
			"color": "#686459"
		});
	});
	//여기까지가 패키지js

	//레저 js
	$('#Leisure-wrap .contents-wrap li').eq(0).click(function () {
		$('#Leisure-wrap .contents-wrap .img-wrap .package').eq(0).addClass('active');
		$('#Leisure-wrap .contents-wrap .img-wrap .package').eq(1).removeClass('active');
		$('#Leisure-wrap .contents-wrap .img-wrap .package').eq(2).removeClass('active');
		$('#Leisure-wrap .contents-wrap .img-wrap .package').eq(3).removeClass('active');
		$('#Leisure-wrap .contents-wrap .img-wrap .package').eq(4).removeClass('active');

		$('#Leisure-wrap .contents-wrap li').eq(1).css({
			"background-color": "#fff",
			"color": "#686459"
		});
		$('#Leisure-wrap .contents-wrap li').eq(0).css({
			"background-color": "#988971",
			"color": "#fff"
		});
		$('#Leisure-wrap .contents-wrap li').eq(2).css({
			"background-color": "#fff",
			"color": "#686459"
		});
		$('#Leisure-wrap .contents-wrap li').eq(3).css({
			"background-color": "#fff",
			"color": "#686459"
		});
		$('#Leisure-wrap .contents-wrap li').eq(4).css({
			"background-color": "#fff",
			"color": "#686459"
		});
	});

	$('#Leisure-wrap .contents-wrap li').eq(1).click(function () {
		$('#Leisure-wrap .contents-wrap .img-wrap .package').eq(1).addClass('active');
		$('#Leisure-wrap .contents-wrap .img-wrap .package').eq(0).removeClass('active');
		$('#Leisure-wrap .contents-wrap .img-wrap .package').eq(2).removeClass('active');
		$('#Leisure-wrap .contents-wrap .img-wrap .package').eq(3).removeClass('active');
		$('#Leisure-wrap .contents-wrap .img-wrap .package').eq(4).removeClass('active');

		$('#Leisure-wrap .contents-wrap li').eq(1).css({
			"background-color": "#988971",
			"color": "#fff"
		});
		$('#Leisure-wrap .contents-wrap li').eq(0).css({
			"background-color": "#fff",
			"color": "#686459"
		});
		$('#Leisure-wrap .contents-wrap li').eq(2).css({
			"background-color": "#fff",
			"color": "#686459"
		});
		$('#Leisure-wrap .contents-wrap li').eq(3).css({
			"background-color": "#fff",
			"color": "#686459"
		});
		$('#Leisure-wrap .contents-wrap li').eq(4).css({
			"background-color": "#fff",
			"color": "#686459"
		});
	});

	$('#Leisure-wrap .contents-wrap li').eq(2).click(function () {
		$('#Leisure-wrap .contents-wrap .img-wrap .package').eq(2).addClass('active');
		$('#Leisure-wrap .contents-wrap .img-wrap .package').eq(1).removeClass('active');
		$('#Leisure-wrap .contents-wrap .img-wrap .package').eq(0).removeClass('active');
		$('#Leisure-wrap .contents-wrap .img-wrap .package').eq(3).removeClass('active');
		$('#Leisure-wrap .contents-wrap .img-wrap .package').eq(4).removeClass('active');

		$('#Leisure-wrap .contents-wrap li').eq(1).css({
			"background-color": "#fff",
			"color": "#686459"
		});
		$('#Leisure-wrap .contents-wrap li').eq(0).css({
			"background-color": "#fff",
			"color": "#686459"
		});
		$('#Leisure-wrap .contents-wrap li').eq(2).css({
			"background-color": "#988971",
			"color": "#fff"
		});
		$('#Leisure-wrap .contents-wrap li').eq(3).css({
			"background-color": "#fff",
			"color": "#686459"
		});
		$('#Leisure-wrap .contents-wrap li').eq(4).css({
			"background-color": "#fff",
			"color": "#686459"
		});
	});

	$('#Leisure-wrap .contents-wrap li').eq(3).click(function () {
		$('#Leisure-wrap .contents-wrap .img-wrap .package').eq(3).addClass('active');
		$('#Leisure-wrap .contents-wrap .img-wrap .package').eq(1).removeClass('active');
		$('#Leisure-wrap .contents-wrap .img-wrap .package').eq(2).removeClass('active');
		$('#Leisure-wrap .contents-wrap .img-wrap .package').eq(0).removeClass('active');
		$('#Leisure-wrap .contents-wrap .img-wrap .package').eq(4).removeClass('active');

		$('#Leisure-wrap .contents-wrap li').eq(1).css({
			"background-color": "#fff",
			"color": "#686459"
		});
		$('#Leisure-wrap .contents-wrap li').eq(0).css({
			"background-color": "#fff",
			"color": "#686459"
		});
		$('#Leisure-wrap .contents-wrap li').eq(2).css({
			"background-color": "#fff",
			"color": "#686459"
		});
		$('#Leisure-wrap .contents-wrap li').eq(3).css({
			"background-color": "#988971",
			"color": "#fff"
		});
		$('#Leisure-wrap .contents-wrap li').eq(4).css({
			"background-color": "#fff",
			"color": "#686459"
		});
	});

	$('#Leisure-wrap .contents-wrap li').eq(4).click(function () {
		$('#Leisure-wrap .contents-wrap .img-wrap .package').eq(4).addClass('active');
		$('#Leisure-wrap .contents-wrap .img-wrap .package').eq(1).removeClass('active');
		$('#Leisure-wrap .contents-wrap .img-wrap .package').eq(2).removeClass('active');
		$('#Leisure-wrap .contents-wrap .img-wrap .package').eq(3).removeClass('active');
		$('#Leisure-wrap .contents-wrap .img-wrap .package').eq(0).removeClass('active');

		$('#Leisure-wrap .contents-wrap li').eq(1).css({
			"background-color": "#fff",
			"color": "#686459"
		});
		$('#Leisure-wrap .contents-wrap li').eq(0).css({
			"background-color": "#fff",
			"color": "#686459"
		});
		$('#Leisure-wrap .contents-wrap li').eq(2).css({
			"background-color": "#fff",
			"color": "#686459"
		});
		$('#Leisure-wrap .contents-wrap li').eq(3).css({
			"background-color": "#fff",
			"color": "#686459"
		});
		$('#Leisure-wrap .contents-wrap li').eq(4).css({
			"background-color": "#988971",
			"color": "#fff"
		});
	});
// Swiper JS Call
const swiper = new Swiper('.swiper', {
  speed:600,
  // Optional parameters
  // 슬라이드 수 설정
  slidesPerView: 1,
  spaceBetween: 0,
  observer: true,
  observeParents: true,

  // direction: 'horizontal', 'vertical',
  direction: 'horizontal',
  loop: true,

  // effect: 'slide', 'fade', 'cube', 'coverflow', 'flip', 'creative', 'cards'
  effect: 'slide',

  // If we need pagination
   pagination: {
     el: '.swiper-pagination',
   },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  
  // Auto Play
  autoplay: {
    delay: 2500,
   },
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 0
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 1,
      spaceBetween: 0
    },
    // when window width is >= 960px
    960: {
      slidesPerView: 1,
      spaceBetween: 0
    }
  }
  
});


</script>

<script>
	new WOW().init();

		
</script>

</html>
<?php include "footer.php" ?>