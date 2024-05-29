<!DOCTYPE html>
<html lang="en">
<title>제천참좋은글램핑</title>

<head>

	<link rel="stylesheet" href="/css/swiper.css" type="text/css">
	<link rel="stylesheet" href="/css/main.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<script src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
<script src="/js/main.js"></script>
<link 
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css"
/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
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
			<div class="swiper2">
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
				<div class="swiper-pagination"></div>
			</div>
			
			<div class="swiper-button-prev mainbtn1"></div>
			<div class="swiper-button-next mainbtn2"></div>
		</div>
		<div class="scroll">
			<img src="/images/common/scroll.png" alt="">
		</div>
		<div class="bg01">
			<img src="/images/main/bg01.png" alt="">
		</div>
		<div class="title">
			<h1>참! 좋은 휴식을 위한 공간</h1>
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
					 <div class="swiper-slide">
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
					</div>
					 <div class="swiper-slide">
						<img src="/images/main/m/01_15.jpg" alt="">
					</div>
					
				</div>
			</div>
			<div class="swiper-button-prev mainbtn1"></div>
			<div class="swiper-button-next mainbtn2"></div>
		</div>
	
		<div class="bg01">
			<img src="/images/main/bg01.png" alt="">
		</div>
	</div>
	<div class="videos">
	<video width="100%" height="100%" autoplay controls muted>
	<source src="/images/common/1.mp4" type="video/mp4">
	</video>

</div>
	<div class="secondblock">
		<div class="contentsbox">

			<div class="left-flex">
				<img src="/images/main/img01.jpg" alt="">
				<img src="/images/main/img02.jpg" alt="" id="left2">
			</div>
			<div class="right-flex">
				<div class="textflex">
					<p class="first"><span><i class="fa fa-circle" aria-hidden="true"></i></span>참좋은글램핑</p>
					<p class="second">깨끗한 공기, 아름다운 자연과 함께하는 참! 좋은 글램핑에서 참! 좋은 사람과 함께하는 특별한 일상과 추억을 담을 수 있도록 노력하겠습니다. 다양한 형태의 숙소에서 참좋은 글램핑이 준비한 다양한 추억거리를 즐기며 지친 몸과 마음을 치유하며 잠시 쉬어가세요.</p>
					<div class="bg04"><a href="http://xn--bj0b46pe4m2hbo4inpq.kr/about"><img src="/images/main/bg04.png" alt=""></a></div>
				</div>
				<img src="/images/main/img03.jpg" alt="">
			</div>
			<div class="textflex-m">
				<p class="first"><span><i class="fa fa-circle" aria-hidden="true"></i></span>참좋은글램핑</p>
			</div>

			<div class="bg03">
				<img src="/images/main/bg03.png" alt="">
			</div>
			<div class="bg04"><a href="http://xn--bj0b46pe4m2hbo4inpq.kr/about"><img src="/images/main/m/bg04.png" alt=""></a></div>

		</div>


		<div class="bg02">
			<img src="/images/main/bg02.png" alt="">
		</div>
	</div>
	<div class="secondblock" id="mc2">
	<div class="title-m">
				<img src="/images/common/m/textdeco1.png" alt="">
				<h1>ROOMS</h1>
			</div>
	<?php
include('roompre.php');
?>
		<div class="contentsbox">

			<div class="left-flex">
				<img src="/images/main/img01.jpg" alt="">
				<img src="/images/main/img02.jpg" alt="" id="left2">
			</div>
			<div class="right-flex">
				<div class="textflex">
					<p class="first"><span><i class="fa fa-circle" aria-hidden="true"></i></span>참좋은글램핑</p>
					<p class="second">깨끗한 공기, 아름다운 자연과 함께하는 참! 좋은 글램핑에서 참! 좋은 사람과 함께하는 특별한 일상과 추억을 담을 수 있도록 노력하겠습니다. 다양한 형태의 숙소에서 참좋은 글램핑이 준비한 다양한 추억거리를 즐기며 지친 몸과 마음을 치유하며 잠시 쉬어가세요.</p>
					<div class="bg04"><a href="http://xn--bj0b46pe4m2hbo4inpq.kr/about"><img src="/images/main/bg04.png" alt=""></a></div>
				</div>
				<img src="/images/main/img03.jpg" alt="">
			</div>
			<div class="textflex-m">
				<p class="first"><span><i class="fa fa-circle" aria-hidden="true"></i></span>참좋은글램핑</p>
			</div>

			<div class="bg03">
				<img src="/images/main/bg03.png" alt="">
			</div>
			<div class="bg04"><a href="http://xn--bj0b46pe4m2hbo4inpq.kr/about"><img src="/images/main/m/bg04.png" alt=""></a></div>

		</div>


		<div class="bg02">
			<img src="/images/main/bg02.png" alt="">
		</div>
	</div>
	<div class="thirdblock" id="mc3">
		<div class="bg05">
			<img src="/images/main/bg05.png" alt="">
		</div>
		<div class="bg04">
			<a href=""><img src="/images/main/bg04.png" alt=""></a>
		</div>
		<div class="bg06">
			<img src="/images/main/bg06.png" alt="">
		</div>
		<div class="bg07">
			<img src="/images/main/bg07.png" alt="">
		</div>
		<div class="inner">
			<div class="title">
				<img src="/images/common/textdeco1.png" alt="">
				<h1>ROOMS</h1>
			</div>
			

		</div>
	</div>
	<div class="thirdblock">
		<div class="bg05">
			<img src="/images/main/bg05.png" alt="">
		</div>
		<div class="bg04">
			<a href=""><img src="/images/main/bg04.png" alt=""></a>
		</div>
		<div class="bg06">
			<img src="/images/main/bg06.png" alt="">
		</div>
		<div class="bg07">
			<img src="/images/main/bg07.png" alt="">
		</div>
		<div class="inner">
			<div class="title">
				<img src="/images/common/textdeco1.png" alt="">
				<h1>ROOMS</h1>
			</div>
			<div class="title-m">
				<img src="/images/common/m/textdeco1.png" alt="">
				<h1>ROOMS</h1>
			</div>
			<?php
include('roompre.php');
?>

		</div>
	</div>
	<?php
include('roommap.php');
?>
	<div class="fourthblock">
		<div class="flexbox">
			<img src="/images/main/img04.jpg" alt="">
			<div class="textbox">
				<p>제천 참!좋은 <br><br><span>글램핑</span></p>
			</div>
			<img src="/images/main/img05.jpg" alt="">
		</div>
		<div class="greenbox"></div>
	</div>

	<?php
include('map.php');
?>
	 <?php
include('footer.php');
?>

</body>


</html>
