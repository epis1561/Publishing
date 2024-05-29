<!DOCTYPE html>
<html lang="ko">
	<head>        
		<title><?= $title ?></title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.5, minimum-scale=1, user-scalable=yes">
		<meta name="keywords" content="<?= $keyword ?>">
		<meta name="description" content="<?= $keyword ?>">
		<meta property="og:title" content="<?= $title ?>">
		<meta property="og:type" content="website">
		<meta property="og:description" content="<?= $keyword ?>">
		<meta property="og:url" content="<?= $url ?>">
		<meta property="al:web:url" content="<?= $url ?>">
		<link rel="canonical" href="<?= $url ?>">
		<meta property="og:image" content="/images/common/image.jpg?ver=<?= time() ?>">
		<meta name="twitter:card" content="<?= $keyword ?>">
		<meta name="twitter:title" content="<?= $title ?>">
		<meta name="twitter:description" content="<?= $keyword ?>">
		<meta name="twitter:image" content="/images/common/image.jpg?ver=<?= time() ?>">
		<meta name="twitter:domain" content="<?= $url ?>">
		<meta name="format-detection" content="telephone=no"/>
		<meta name="naver-site-verification" content="6a5b3c578da81f7a539b3a1d851e2e04a1c17c38" />
		<link rel="shortcut icon" href="/favicon.ico">	

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="/css/reset.css">
		<link rel="stylesheet" type="text/css" href="/css/common.css?ver=<?= time() ?>">
		<link rel="stylesheet" type="text/css" href="/css/main.css?ver=<?= time() ?>">
		<link rel="stylesheet" type="text/css" href="/css/about.css?ver=<?= time() ?>">
		<link rel="stylesheet" type="text/css" href="/css/room.css?ver=<?= time() ?>">
		<link rel="stylesheet" type="text/css" href="/css/preview.css?ver=<?= time() ?>">
		<link rel="stylesheet" type="text/css" href="/css/special.css?ver=<?= time() ?>">
		<link rel="stylesheet" type="text/css" href="/css/travel.css?ver=<?= time() ?>">
		<link rel="stylesheet" type="text/css" href="/css/reservation.css?ver=<?= time() ?>">
		<link rel="stylesheet" type="text/css" href="/css/map.css?ver=<?= time() ?>">
		<link rel="stylesheet" type="text/css" href="/css/ddnayo.css">
		<!--<link rel="stylesheet" type="text/css" href="/css/ddnayo_room.css"> -->
		
		<!--script-->
		<script src="https://code.jquery.com/jquery-latest.min.js"></script>
		<script src="/js/script.js"></script>

		<!-- link:favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

		<!-- lightslider -->
		<link rel="stylesheet" type="text/css" href="/css/lightslider.css">
		<script src="/js/lightslider.min.js"></script>

		<link 
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css
"
/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
	
		<!--font-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=WindSong:wght@500&display=swap" rel="stylesheet">
		
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

		<!-- Matomo - 로그분석기 -->
		<script>
		var _paq = window._paq = window._paq || [];
		/* tracker methods like "setCustomDimension" should be called before "trackPageView" */
		_paq.push(['trackPageView']);
		_paq.push(['enableLinkTracking']);
		(function() {
			var u="//analytics.yeowan.kr/";
			_paq.push(['setTrackerUrl', u+'matomo.php']);
			_paq.push(['setSiteId', '15']);
			var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
			g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
		})();
		</script>
		<!-- End Matomo Code -->
	</head>
	<body>
		
		<div id="wrap">
		<?php 
		if(isset($categoryName) && $categoryName == 'rooms') { ?>
		<div id="header">
				<header id="headBox">
					<h1 class="head_logo">
						<!-- 노마드 x 카스  -->
						<a href="/">
							<img class="img100 none1024" src="/images/common/logo.png" alt="">
							<img class="img100 block1024" src="/images/common/logo_mo.png" alt="">
						</a>
					</h1>
					<div class="h_reser block1024"><a href="https://booking.ddnayo.com/?accommodationId=16344" target="_blank">실시간예약</a></div>
					<div class="gnb_btn block1024">
							<i class="fas fa-bars"></i>
							<i class="fas fa-times"></i>
					</div>
					<div class="gnb_area">
						<nav class="gnbBox">
							<ul class="gnb_wrap">
								<li>
									<a href="/preview"  class="pointer-events">객실소개</a>
								</li>
								<li>
									<a href="/room/1"  class="pointer-events">풀빌라</a>
									<ul class="snb">
										<li><a href="/map">풀빌라배치도</a></li>
										<li><a href="/room/1">독채풀빌라(복층)</a></li>
										<li><a href="/room/2">독채풀빌라(단층)</a></li>
										<li><a href="/room/3">큐브풀빌라</a></li>		
									</ul>
								</li>
								<li>
									<a href="/room/4"  class="pointer-events">레지던스</a>
									<ul class="snb">
									<li><a href="/map2">레지던스배치도</a></li>
										<li><a href="/room/4">비즈니스형</a></li>
										<li><a href="/room/5">패밀리형</a></li>
									</ul>
								</li>
								<li>
									<a href="/room/6"  class="pointer-events">오토캠핑장</a>
									<ul class="snb">
										<li><a href="/room/6">캠핑장 소개</a></li>
									</ul>
								</li>
								<li>
									<a href="/special2/1"  class="pointer-events">스페셜</a>
									<ul class="snb">
										<li><a href="/special2/2">개별수영장</a></li>
										<li><a href="/special2/1">개별바비큐</a></li>
										<!-- <li><a href="/special2/4">애견입실</a></li> -->
										<li><a href="/special2/3">야외수영장</a></li>
										<li><a href="/special2/5">몽골텐트</a></li>
									</ul>
								</li>
								<li>
									<a href="/reservation"  class="pointer-events">RESERVATION</a>
									<ul class="snb">
										<li><a href="/reservation">예약안내</a></li>
										<li><a href="https://booking.ddnayo.com/?accommodationId=16344" target="_blank">실시간예약</a></li>
									</ul>
								</li>
								<div class="h_reser none1024"><a href="/reserve">숙박예약</a></div>
							</ul>
						</nav>
					</div>
				</header>
			</div>


 <?php } else { ?>
			<div id="header">
				<header id="headBox">
					<h1 class="head_logo">
						<!-- <a href="/">
							<img class="img100 none1024" src="/images/common/logo.png" alt="">
							<img class="img100 block1024" src="/images/common/logo_mo.png" alt="">
						</a> -->
						<!-- 노마드 x 카스  -->
						<a href="/">
							<img class="img100 none1024" src="/images/common/logo.png" alt="">
							<img class="img100 block1024" src="/images/common/logo_mo.png" alt="">
						</a>
					</h1>
					<div class="h_reser block1024"><a href="https://www.ddnayo.com/RsvSys/Select.aspx?id_hotel=16344" target="_blank">실시간예약</a></div>
					<div class="gnb_btn block1024">
							<i class="fas fa-bars"></i>
							<i class="fas fa-times"></i>
					</div>
					<div class="gnb_area">
						<nav class="gnbBox">
							<ul class="gnb_wrap">
								<li>
									<a href="/about" class="pointer-events">힐스포레소개</a>
									<ul class="snb">
										<li><a href="/about">인사말</a></li>
										<!-- <li><a href="/map">안내도</a></li> -->
									</ul>
								</li>
								<li>
									<a href="/preview"  class="pointer-events">객실안내</a>
									<ul class="snb">
										<li><a href="/preview">힐스포레 숙박</a></li>
									</ul>
								</li>
								
								<li>
									<a href="/special/4"  class="pointer-events">시설안내</a>
									<ul class="snb">
										<li><a href="/special/4">본관</a></li>
										<li><a href="/special/5">팜갤러리(공연장)</a></li>
										<li><a href="/special/6">패션관</a></li>
										<li><a href="/special/7">스크린골프&노래방</a></li>
										<li><a href="/special/8">힐링센터(문화강좌)</a></li>
										<li><a href="/special/9">K-POP 스쿨</a></li>
										<li><a href="/special/10">어드벤처</a></li>
										<li><a href="/special/12">이브의정원</a></li>
									</ul>
								</li>

								<li>
									<a href="/special/11"  class="pointer-events">프로그램</a>
									<ul class="snb">
										<li><a href="/special/11">더싱글즈 in 힐스포레</a></li>
									</ul>
								</li>

								<li>
									<a href="/special/1"  class="pointer-events">먹거리</a>
									<ul class="snb">
										<li><a href="/special/1">베이커리카페</a></li>
										<li><a href="/special/2">명품한우</a></li>
										<li><a href="/special/3">장어</a></li>
									</ul>
								</li>

								<li>
									<a href="/reservation"  class="pointer-events">숙박예약</a>
									<ul class="snb">
										<li><a href="/reservation">예약안내</a></li>
										<li><a href="https://booking.ddnayo.com/?accommodationId=16344" target="_blank">실시간예약</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</header>
			</div>
			<?php } ?>
			<div class="header_blank block1024" style="display: none; width: 100%; height: 50px;"><!--모바일시 슬라이드 덮이는 것--></div>