
<!DOCTYPE html>
<html lang="en">
<title>햇살한스푼펜션</title>

<head>
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<!-- swiper -->

<!-- <script src="/js/swiper.js"></script>    	 -->
<link 
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css
"
/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="/css/swiper.css" type="text/css">
<script src="/js/swiper.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.roombg h2{
			padding-top: 0;
		}
		.room_contents_m .swiper-wrap{
			width: 50% !important;
		}

		@media (max-width: 768px){
			.room-swiper .roombtn1{
				top: 40% !important;
				left: 13% !important;
			}
			.room-swiper .roombtn2{
				top: 40% !important;
				right: 13% !important;
			}
		.room_contents_m img{
			width: 100% !important;
			text-align: center;
		}

		}
		@media (max-width: 500px){
			.roombg{
				margin-bottom: 40px;
			}
		}
		@media (max-width: 400px){
			.room_contents_m .swiper-wrap{
				width: 60% !important;
			}
			.room-swiper .roombtn1{
    left: 3% !important;
    top: 40% !important;
  }
  .room-swiper .roombtn2{
  right: 3% !important;
  top: 40% !important;
  }
		}

		@media (max-width: 320px){
			.room-swiper .roombtn1{
    top: 38% !important;
  }
  .room-swiper .roombtn2{
  top: 38% !important;
  }

		}
	</style>
</head>

<body>
	<?php
include('header.php');
?>
<?php
    $sql = "SELECT * FROM `popup` WHERE `is_open` = '1' ORDER BY `ordering` ASC, `idx` DESC";
    $data['popups'] = $this -> data_model -> getList($sql, 'DB');
    $sql = "SELECT * FROM `slide` WHERE `is_open` = '1' ORDER BY `ordering` ASC, `idx` DESC";
    $data['slides'] = $this -> data_model -> getList($sql, 'DB');
    //$data['is_mobile'] = $is_mobile;
    $this -> load -> view('include/popup', $data);
?>
	<div class="mainslide">
		<div class="swiper-wrap">
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
					<!--<div class="swiper-slide">
						<img src="/images/main/01_13.jpg" alt="">
					</div>
					<div class="swiper-slide">
						<img src="/images/main/01_11.jpg" alt="">
					</div>-->
				</div>
				<div class="swiper-pagination"></div>
			</div>
			
			<div class="swiper-button-prev mainbtn1"></div>
			<div class="swiper-button-next mainbtn2"></div>
			
		</div>
	
	</div>
	<div class="mainslide-m">
		<div class="swiper-wrap">
			<div class="swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="/images/main/m/01_01.jpg" alt="">
					</div>
					<div class="swiper-slide">
						<img src="/images/main/m/01_02.jpg" alt="">
					</div>
					<div class="swiper-slide">
						<img src="/images/main/m/01_03.jpg" alt="">
					</div>
					<div class="swiper-slide">
						<img src="/images/main/m/01_04.jpg" alt="">
					</div>
					<div class="swiper-slide">
						<img src="/images/main/m/01_05.jpg" alt="">
					</div>
					<div class="swiper-slide">
						<img src="/images/main/m/01_06.jpg" alt="">
					</div>
					<div class="swiper-slide">
						<img src="/images/main/m/01_07.jpg" alt="">
					</div>
					<div class="swiper-slide">
						<img src="/images/main/m/01_08.jpg" alt="">
					</div>
					<div class="swiper-slide">
						<img src="/images/main/m/01_09.jpg" alt="">
					</div>
					<div class="swiper-slide">
						<img src="/images/main/m/01_10.jpg" alt="">
					</div>
					<!-- <div class="swiper-slide">
						<img src="/images/main/m/01_11.jpg" alt="">
					</div>
					<div class="swiper-slide">
						<img src="/images/main/m/01_12.jpg" alt="">
					</div>
					<div class="swiper-slide">
						<img src="/images/main/m/01_13.jpg" alt="">
					</div>
					<div class="swiper-slide">
						<img src="/images/main/m/01_14.jpg" alt="">
					</div> -->
				</div>
				<div class="swiper-pagination"></div>
			</div>
			
			<div class="swiper-button-prev mainbtn3"></div>
			<div class="swiper-button-next mainbtn4"></div>
			
		</div>
	</div>


	<div class="contents-wrap">
		<div class="intro_wrap">
			<div class="title1">
				<h2>SPA</h2>
				<h2>PENSION</h2>
				<span><a href="http://xn--3f4bm9at54atzadg.kr/about"><img src="/images/common/right_arrow.png"
							alt=""></a></span>
				<p>펜션소개</p>
			</div>
			<div class="right_flex">
				<div class="intro_text">
					<p>햇살 한가득 들어와 따뜻한 추억을 머금는 펜션<br>
						당신이 원하던 삶속에 황홀한 휴식이 기다립니다.<br>
						파노라마처럼 펼쳐진 남해 바다를 보면서 소중한 사람과 함께 행복한 추억 한스푼! <br>
						햇살한스푼에 머물면서 지친 일상을 치유받고 힐링하세요!
					</p>
					<!-- <p>펜션에서 보내는 오늘은 당신에게 특별한 선물을 가져다 주어요.<br>
						당신이 원하던 삶속에 황홀한 휴식이 기다립니다.<br>
						깔끔하고 편안한 공간과 다양한 서비스, 펜션에 머무는 동안<br>
						즐거운 추억을 만드시길 바랍니다.
					</p> -->

				</div>
				<div class="imgbox">
					<img src="/images/main/img01.jpg" alt=""  class="img01_pc">
					<img src="/images/main/m/img01.jpg" alt="" class="img01_m">
				</div>
				<div class="right_box">
					<p><i class="fa fa-circle" aria-hidden="true"></i> creative interior design</p>
				</div>
			</div>
		</div>
	</div>

	<div class="photo_wrap">
		<div class="photo_box"><img src="/images/main/img02.jpg" alt=""></div>
		<div class="photo_box"><img src="/images/main/img03.jpg" alt=""></div>
		<div class="photo_box"><img src="/images/main/img04.jpg" alt=""></div>
	</div>

	<?php
include('roompreview.php');
?>

	<div class="banner">
		<p>당신이 원하던 삶 속에 <br>
			황홀한 휴식을 선사해 줄 펜션
		</p>
		<ul class="icons">
			<!-- <li class="icon icon_pc"><img src="/images/common/icon1.png" alt=""></li>
			<li class="icon icon_pc"><img src="/images/common/icon1.png" alt=""></li>
			<li class="icon icon_pc"><img src="/images/common/icon1.png" alt=""></li>
			<li class="icon icon_pc"><img src="/images/common/icon1.png" alt=""></li>
			<li class="icon icon_m"><img src="/images/common/m/icon1.png" alt=""></li>
			<li class="icon icon_m"><img src="/images/common/m/icon1.png" alt=""></li>
			<li class="icon icon_m"><img src="/images/common/m/icon1.png" alt=""></li>
			<li class="icon icon_m"><img src="/images/common/m/icon1.png" alt=""></li> -->
		</ul>


		<p>
			깔끔하고 편안한 공간에서 <br>
			즐거운 추억을 만드시기 바랍니다.
		</p>
	</div>
	<script src="/js/main.js"></script>
	<?php
include('specialist.php');
?>
	
<div class="main_banner">
		<div class="go_group">
			<div class="go_img">
				<a href="https://map.naver.com/v5/entry/place/33972805?lng=127.8421439&lat=34.76060700000001&placePath=%2Fhome" target="_blank"><img src="./images/common/go_naverbook.png"></a>
			</div>
			<div class="go_img">
				<a href="https://www.instagram.com/sunshine_namhae/" target="_blank"><img src="/images/common/go_insta.png"></a>
			</div>
		</div>
		<div class="B_btn">
			<div class="learn-more"></div>
		</div>
	</div>


	<?php
include('footer.php');
?>
	
</body>
<script>
	$(document).ready(function () {
		//roomList hover 시 글자 초기화
		$('.box_wrap .text p').css("display", "none");
		$('.roombg').css({"background-image":"url(/images/main/bg03.jpg)","background-repeat":"no-repeat"});
		$('.roombg h2').css("display","block");
$('.roombg p').css({"display":"block","margin-bottom":"50px"});
$('.roombg h2').css("padding-top","50px");
	});
	$('.roombg').css("padding-bottom","60px");
	//roomList hover시 효과
	$(function () {

		$('.box_wrap').eq(0).hover(function () {
			$('.box_wrap .img').eq(0).css("transition", "all 1.2s");
			$('.box_wrap .text').eq(0).css({
				"background-color": "rgba(255,255,255,0.5)",
				"border-radius": "50%",
				"transition": "all 1.175s"
			});
			$('.box_wrap .text p').eq(0).css("display", "block");
		}, function () {
			$('.box_wrap .text').eq(0).css({
				"background-color": "transparent",
				"transition": "all 0s",
				"border-radius": "0"
			});
			$('.box_wrap .text p').eq(0).css("display", "none");
		});


		$('.box_wrap').eq(1).hover(function () {
			$('.box_wrap .text').eq(1).css({
				"background-color": "rgba(255,255,255,0.5)",
				"border-radius": "50%",
				"transition": "all 1.175s"
			});
			$('.box_wrap .img').eq(1).css("transition", "all 1.2s");
			$('.box_wrap .text p').eq(1).css("display", "block");
		}, function () {
			$('.box_wrap .text').eq(1).css({
				"background-color": "transparent",
				"transition": "all 0s",
				"border-radius": "0"
			});
			$('.box_wrap .text p').eq(1).css("display", "none");
			$('.box_wrap .img').eq(1).css("transition", "all 0s");

		});


		$('.box_wrap').eq(2).hover(function () {
			$('.box_wrap .text').eq(2).css({
				"background-color": "rgba(255,255,255,0.5)",
				"border-radius": "50%",
				"transition": "all 1.175s"
			});
			$('.box_wrap .img').eq(2).css("transition", "all 1.2s");
			$('.box_wrap .text p').eq(2).css("display", "block");
		}, function () {
			$('.box_wrap .text').eq(2).css({
				"background-color": "transparent",
				"transition": "all 0s",
				"border-radius": "0"
			});
			$('.box_wrap .text p').eq(2).css("display", "none");
			$('.box_wrap .img').eq(2).css("transition", "all 0s");

		});


		$('.box_wrap').eq(3).hover(function () {
			$('.box_wrap .text').eq(3).css({
				"background-color": "rgba(255,255,255,0.5)",
				"border-radius": "50%",
				"transition": "all 1.175s"
			});
			$('.box_wrap .img').eq(3).css("transition", "all 1.2s");
			$('.box_wrap .text p').eq(3).css("display", "block");
		}, function () {
			$('.box_wrap .text').eq(3).css({
				"background-color": "transparent",
				"transition": "all 0s",
				"border-radius": "0"
			});
			$('.box_wrap .text p').eq(3).css("display", "none");
			$('.box_wrap .img').eq(3).css("transition", "all 0s");
		});

	});

	$(function(){
        $('.B_btn').click(function(){
            $('.go_group').fadeToggle(200);	
            if ($(".learn-more").hasClass("active")) {
                $(".learn-more").removeClass("active");
            }
            else {
                $(".learn-more").addClass("active");
            }
        })
    });
</script>

</html>
