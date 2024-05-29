<?
$mobile = !!(FALSE !== strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile'));
?>
<?php
  include('metatag.php');
?>
<link rel="stylesheet" href="/css/header.css">
<div class="header_wrap">
	<div class="header">
		<div class="logo">
			<a href="/"><img src="/images/common/logo.png" alt=""></a>
		</div>
		<ul class="gnb1">
			<li class="gnb_Title"><a href="/about">ABOUT</a>
				<ul class="gnb2">
					<li><a href="/about#about1">펜션소개</a></li>
					<li><a href="/about#about2">펜션전경</a></li>
					<li><a href="/about#about3">배치도</a></li>
				</ul>

			</li>
			<li class="gnb_Title"><a href="/room?roomnum=01">ROOM</a>
				<ul class="gnb2">
					<!-- <li><a href="/roompre">미리보기</a></li> -->
					<li><a href="/room?roomnum=01">라하글램핑</a></li>
					<!-- <li><a href="/room?roomnum=02">라하카라반</a></li> -->
					<!-- <li><a href="/room?roomnum=01">객실3</a></li>
					<li><a href="/room?roomnum=01">객실4</a></li>
					<li><a href="/room?roomnum=01">객실5</a></li> -->
				</ul>
			</li>
			<li class="gnb_Title"><a href="/special?cate=01">SPECIAL</a>
				<ul class="gnb2">
					<li><a href="/special?cate=01">사우나</a></li>
					<li><a href="/special?cate=02">개별바베큐</a></li>
					<li><a href="/special?cate=03">불멍</a></li>
					<li><a href="/special?cate=04">조식</a></li>
					<li><a href="/special?cate=05">카페</a></li>
					<li><a href="/special?cate=06">초록상회(매점)</a></li>
					<li><a href="/special?cate=07">계곡/둘레길</a></li>
				</ul>

			</li>
			<li class="gnb_Title"><a href="/tour">TOUR</a>
				<ul class="gnb2">
					<li><a href="/tour">여행지 안내</a></li>
				</ul>
			</li>
			<li class="gnb_Title"><a href="https://booking.ddnayo.com/?accommodationId=100390" target="_blank">RESERVATION</a>
				<ul class="gnb2">
					<li><a href="/reserve">예약안내</a></li>
					<li><a href="https://booking.ddnayo.com/?accommodationId=100390" target="_blank">실시간 예약</a></li>
				</ul>

			</li>
		</ul>
	</div>
</div>

<!-- 모바일헤더 작업시작!!!!!! -->
<div class="header_wrap_m">
	<div class="header_m">
		<div class="logo_m">
			<a href="/"><img src="/images/common/m/logo.png" alt=""></a>
		</div>
		<div class="nav">
			<img src="/images/common/m/navbar.png" alt="">
		</div>
	</div>
</div>

<div class="gnb_m">
    <div class="close"> <img src="/images/common/m/close.png" alt=""></div>
	<div class="gnb_m_wrap">
		<ul class="gnb1_m">
			<li class="gnb_Title_m">ABOUT
				<ul class="gnb2_m">
					<li><a href="/about#about1">펜션소개</a></li>
					<li><a href="/about#about2">펜션전경</a></li>
					<li><a href="/about#about3">배치도</a></li>
				</ul>
			</li>

            <li class="gnb_Title_m">ROOM
				<ul class="gnb2_m">
					<!-- <li><a href="/roompre">미리보기</a></li> -->
					<li><a href="/room?roomnum=01">라하글램핑</a></li>
					<!-- <li><a href="/room?roomnum=02">라하카라반</a></li> -->
					<!-- <li><a href="/room?roomnum=01">객실3</a></li>
					<li><a href="/room?roomnum=01">객실4</a></li>
					<li><a href="/room?roomnum=01">객실5</a></li> -->
				</ul>
			</li>

            <li class="gnb_Title_m">SPECIAL
				<ul class="gnb2_m">
					<li><a href="/special?cate=01">사우나</a></li>
					<li><a href="/special?cate=02">개별바비큐</a></li>
					<li><a href="/special?cate=03">불멍</a></li>
					<li><a href="/special?cate=04">조식</a></li>
					<li><a href="/special?cate=05">카페</a></li>
					<li><a href="/special?cate=06">초록상회(매점)</a></li>
					<li><a href="/special?cate=07">계곡/둘레길</a></li>
				</ul>
			</li>

            <li class="gnb_Title_m">TOUR
				<ul class="gnb2_m">
					<li><a href="/tour">여행지안내</a></li>
				</ul>
			</li>

            <li class="gnb_Title_m">RESERVATION
				<ul class="gnb2_m">
					<li><a href="/reserve">예약안내</a></li>
					<li><a href="https://booking.ddnayo.com/?accommodationId=100390" target="_blank">실시간예약</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>

<script src='http://code.jquery.com/jquery-3.7.0.min.js'></script>
<script>
	$(function () {

		$('.gnb_Title').eq(0).hover(function () {
			$('.gnb_Title ul').eq(0).slideDown();
		}, function () {
			$('.gnb_Title ul').eq(0).hide();
		});

		$('.gnb_Title').eq(1).hover(function () {
			$('.gnb_Title ul').eq(1).slideDown();
		}, function () {
			$('.gnb_Title ul').eq(1).hide();
		});

		$('.gnb_Title').eq(2).hover(function () {
			$('.gnb_Title ul').eq(2).slideDown();
		}, function () {
			$('.gnb_Title ul').eq(2).hide();
		});

		$('.gnb_Title').eq(3).hover(function () {
			$('.gnb_Title ul').eq(3).slideDown();
		}, function () {
			$('.gnb_Title ul').eq(3).hide();
		});

		$('.gnb_Title').eq(4).hover(function () {
			$('.gnb_Title ul').eq(4).slideDown();
		}, function () {
			$('.gnb_Title ul').eq(4).hide();
		});


        $('.nav').click(function(){
            $(this).fadeOut();
            $('.gnb_m').fadeIn();
            $('.close').fadeIn();
        })
        $('.close').click(function(){
            $('.gnb_m').fadeOut();
            $(this).fadeOut();
            $('.nav').fadeIn();
        })

       

	});

   
    $(function(){
    gnb = $('.gnb_Title_m');
    gnb2 = $('.gnb2_m'); 
    
    gnb.click(function(){
        var index = gnb.index(this); 
        $(this).toggleClass('active')
        gnb2.not(gnb2.eq(index)).removeClass('show'); 
        gnb2.eq(index).toggleClass('show'); 
    });
});
</script>
