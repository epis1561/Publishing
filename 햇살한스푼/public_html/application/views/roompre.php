<!DOCTYPE html>
<html lang="en">
<head>
    <title>햇살한스푼펜션</title>
    <link rel="stylesheet" href="/css/roompre.css" type="text/css">
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
	<link rel="stylesheet" href="/css/swiper.css" type="text/css">
</head>
<style>
	.room_contents h2{
		padding-top: 0!important;
	}
</style>
<body>
    <?php
include('header.php');
?>
<div class="mainwrap">
    <img src="/images/roompre/main.jpg" alt="">
</div>

<div class="roomprewrap">
		<div class="roompre_title">
				<h2>ROOM PREVIEW</h2>
				<p>객실 미리보기</p>
				<img src="/images/common/under_arrow.png" class="animation" alt="">
				<!-- <img src="/images/roompre/roommap.jpg" class="map" alt=""> -->
		</div>
		<?php
include('roompreview.php');
?>

<?php
include('footer.php');
?>
</div>





<script src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
<script src="/js/main.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script>
$(document).ready(function () {
//roomList hover 시 글자 초기화
$('.box_wrap .text p').css("display","none");
});

//roomList hover시 효과
$(function(){

$('.box_wrap').eq(0).hover(function(){
$('.box_wrap .img').eq(0).css("transition","all 1.2s");
$('.box_wrap .text').eq(0).css({"background-color":"rgba(255,255,255,0.5)","border-radius":"50%","transition":"all 1.175s"});
$('.box_wrap .text p').eq(0).css("display","block");
},function(){
$('.box_wrap .text').eq(0).css({"background-color":"transparent","transition":"all 0s","border-radius":"0"});
$('.box_wrap .text p').eq(0).css("display","none");	
});


$('.box_wrap').eq(1).hover(function(){
$('.box_wrap .text').eq(1).css({"background-color":"rgba(255,255,255,0.5)","border-radius":"50%","transition":"all 1.175s"});
$('.box_wrap .img').eq(1).css("transition","all 1.2s");
$('.box_wrap .text p').eq(1).css("display","block");
},function(){
$('.box_wrap .text').eq(1).css({"background-color":"transparent","transition":"all 0s","border-radius":"0"});
$('.box_wrap .text p').eq(1).css("display","none");	
$('.box_wrap .img').eq(1).css("transition","all 0s");
	
});


$('.box_wrap').eq(2).hover(function(){
$('.box_wrap .text').eq(2).css({"background-color":"rgba(255,255,255,0.5)","border-radius":"50%","transition":"all 1.175s"});
$('.box_wrap .img').eq(2).css("transition","all 1.2s");
$('.box_wrap .text p').eq(2).css("display","block");
},function(){
$('.box_wrap .text').eq(2).css({"background-color":"transparent","transition":"all 0s","border-radius":"0"});
$('.box_wrap .text p').eq(2).css("display","none");	
$('.box_wrap .img').eq(2).css("transition","all 0s");
	
});


$('.box_wrap').eq(3).hover(function(){
$('.box_wrap .text').eq(3).css({"background-color":"rgba(255,255,255,0.5)","border-radius":"50%","transition":"all 1.175s"});
$('.box_wrap .img').eq(3).css("transition","all 1.2s");
$('.box_wrap .text p').eq(3).css("display","block");
},function(){
$('.box_wrap .text').eq(3).css({"background-color":"transparent","transition":"all 0s","border-radius":"0"});
$('.box_wrap .text p').eq(3).css("display","none");	
$('.box_wrap .img').eq(3).css("transition","all 0s");
});

});

	




</script>
</body>
</html>