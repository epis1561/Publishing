<?php
include_once('./_common.php');
$mobile = !!(FALSE !== strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile'));
$version ="1.00";
$folderName="main";
$topArea="main";
//$nav_open ="open_nav";
$mainTypo="
<p>“touch the ocean<br>
dream-like<br>
day unfolds.”</p>
	";
?>
<style>
	.roomWrapper .h_name {
		display: none;
	}
	.roomWrapper .cont01_02 {
		display: none;
	}
</style>
<!DOCTYPE html>
<!--[if IE 8 ]><html xmlns="http://www.w3.org/1999/xhtml" lang="ko"" class="ie8"><![endif]-->
<!--[if IE 9 ]><html xmlns="http://www.w3.org/1999/xhtml" lang="ko" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko">
<!--<![endif]-->
<head>
<? include_once ("./inc/metaTag.php"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- bxslider -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js"></script>
<link 
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css
"
/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="./html/css/set/lightslider.css?ver=<?=$version?>">
<link rel="stylesheet" type="text/css" href="./html/css/common.css?ver=<?=$version?>">
<link rel="stylesheet" type="text/css" href="./html/css/main.css?ver=<?=$version?>">
<link rel="stylesheet" type="text/css" href="./html/css/ddnayo.css?ver=<?=$version?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">


<!-- custom scrollbar stylesheet -->
<!--script src="./html/js/set/jquery-1.10.2.min.js"></script-->
<script src="./html/js/set/modernizr.js"></script>
<!--script src="./html/js/set/jquery-ui-1.10.4.min.js?ver=1.10.4.js"></script-->
<script src="./html/js/set/TweenMax.min.js"></script>
<script src="./html/js/common.js"></script>
<script src="./html/js/set/jquery.easing.1.3.js"></script>
<script src="./html/js/set/jquery.transform3d.js"></script>
<script src="./html/js/set/jquery.transform2d.js"></script>
<script src="./html/js/set/jquery.mousewheel.js"></script>
<script src="./html/js/set/lightslider.js"></script>
<script src="./html/js/set/jquery.sticky.js"></script>
<!--[if IE 6]>
    <script type="text/livescript" src="./html/js/set/DD_belatedPNG_0.0.8a-min.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('img, div, a, .png24');
    </script>
<![endif]-->
<!--[if lt IE 9]>
	<script src="./html/js/set/html5.js"></script>
	<script src="./html/js/set/respond.js"></script>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>
<!-- 네이버 애널리틱스 -->
<script type="text/javascript" src="//wcs.naver.net/wcslog.js"></script>
<script type="text/javascript">
if(!wcs_add) var wcs_add = {};
wcs_add["wa"] = "c367f2f49b3308";
if(window.wcs) {
  wcs_do();
}
</script>
<body onload="init()">
<?
	if($mobile){
		include G5_BBS_PATH.'/newwin.mobile.inc.php'; // 팝업레이어
	}else{
		include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
	}
?>
<div id="wrap" class="main control_header">
	<div class="videos">
	<video controls width="100%" muted autoplay playsinline>
		<source src="/html/images/main/main.mp4" type="video/mp4" />
	</video>
	<? include_once ("./html/include/header.php"); ?>
	</div>
	<div class="topPlace">
		<? include_once ("./html/include/topArea.php"); ?>
	</div>
	<div class="mainArea">
		<div id="contents">
			<div class="mainCon01">
				<div class="h_name"></div>
				<div class="aboutcont">
					<h2 class="none1919">펜션소개</h2>
					<img class="eng01" src="/html/images/common/eng01.png" alt="">
					<div class="aboutbox">
						<h3 class="block1919"><img src="/html/images/main/g_circle.png" alt="">펜션소개</h3>
						<div class="about_text">
							<h1 class="titletxt">dior<br>about</h1>
							<img class="img02" src="/html/images/main/img02.png" alt="">
							<p class="none1024">
								<img class="circle" src="/html/images/main/w_circle.png" alt="">
								<br>
								디올풀빌라는 경북 경주 물천저수지와 숲속으로 어우러진<br>
								단독힐링 감성숙소 입니다.<br><br>
								잔잔한 물과 숲속의 고요함속에서<br>
								일상에서 지친 모든 분들이 휴식과 힐링을 하시며<br>
								마음이 치유되길 바랍니다.<br><br>
								- 디올 올림 -
							</p>
							<p class="block1024 none400">
								<img class="circle" src="/html/images/main/w_circle.png" alt="">
								찾아오시는 모든 분들께 디올에서 
								'온전한 휴식'을 선물해드리겠습니다.
							</p>
							<div class="tag left about_go">
								<a href="/html/about.php" class="tag_inner roomlink">
									<img src="/html/images/main/go_button.png" alt="">
								</a>
							</div>
						</div>
						<div class="about_img">
							<img src="/html/images/main/img01.jpg" alt="">
						</div>
					</div>
				</div>
				<? include_once ("./html/include/roomList.php"); ?>
			</div>
			<div class="mainCon02">
				<img class="eng02" src="/html/images/common/eng02.png" alt="">
				<img class="amenity" src="/html/images/main/img03.png" alt="">
				<div class="spcont">
					<div class="sp_slide">
						<div class="sp_slide_item">
							<a href="/html/special.php?cate=01">
								<div class="spbox">
									<h2>special</h2>
									<img src="/html/images/main/w_circle.png" alt="">
									<p>
										일행들과 따뜻하고 맛있는 추억을 담은 숙박의꽃<br>
										디올풀빌라의 바베큐
									</p>
									<a class="block1024" href="/html/special.php?cate=01">바베큐</a>
								</div>
							</a>
							<img src="/html/images/main/sp01.jpg" alt="">
						</div>
						<div class="sp_slide_item">
							<a href="/html/special.php?cate=02">
								<div class="spbox">
									<h2>special</h2>
									<img src="/html/images/main/w_circle.png" alt="">
									<p>
										디올풀빌라의 프라이빗한 우리들만의 시간<br>
										야외미온수영장
									</p>
									<a class="block1024" href="/html/special.php?cate=02">수영장</a>
								</div>
							</a>
							<img src="/html/images/main/sp02.jpg" alt="">
						</div>	
						<div class="sp_slide_item">
							<a href="/html/special.php?cate=03">
								<div class="spbox">
									<h2>special</h2>
									<img src="/html/images/main/w_circle.png" alt="">
									<p>
										산뜻한 청록색의 달콤하고 아삭한 청포도<br>
										장금이네 샤인머스켓
									</p>
									<a class="block1024" href="/html/special.php?cate=03">샤인머스켓</a>
								</div>
							</a>
							<img src="/html/images/main/sp03.jpg" alt="">
						</div>	
					</div>
				</div>
				<script>
					$('.sp_slide').bxSlider({
						pager: true,
						loop: true,
						auto: true,
						moveSlides: 1,
						minSlides: 1,
						maxSlides: 1,
						// slideWidth: 500,
						slideMargin: 0,
						controls: false,
						touchEnabled:false
					});
				</script>
			</div>
		</div>
	</div>
<? include_once ("./html/include/footer.php"); ?>
