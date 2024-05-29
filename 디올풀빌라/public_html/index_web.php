<?php
include_once('./_common.php');
$mobile = !!(FALSE !== strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile'));
$version ="1.00";
$folderName="main";
$topArea="main";
//$nav_open ="open_nav";


?>
<!DOCTYPE html>
<!--[if IE 8 ]><html xmlns="http://www.w3.org/1999/xhtml" lang="ko"" class="ie8"><![endif]-->
<!--[if IE 9 ]><html xmlns="http://www.w3.org/1999/xhtml" lang="ko" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko">
<!--<![endif]-->
<head>
<? include_once ("./html/include/metaTag.php"); ?>
<link rel="stylesheet" type="text/css" href="./html/css/set/lightslider.css?ver=<?=$version?>">
<link rel="stylesheet" type="text/css" href="./html/css/common.css?ver=<?=$version?>">
<link rel="stylesheet" type="text/css" href="./html/css/main.css?ver=<?=$version?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- custom scrollbar stylesheet -->
<script src="./html/js/set/jquery-1.10.2.min.js"></script>
<script src="./html/js/set/modernizr.js"></script>
<script src="./html/js/set/jquery-ui-1.10.4.min.js?ver=1.10.4.js"></script>
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
    <script>
        DD_belatedPNG.fix('img, div, a, .png24');
    </script>
<![endif]-->
<!--[if lt IE 9]>
	<script src="./html/js/set/html5.js"></script>
	<script src="./html/js/set/respond.js"></script>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>
<body onload="init()">
<?
	if($mobile){
		include G5_BBS_PATH.'/newwin.mobile.inc.php'; // 팝업레이어
	}else{
		include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
	}
?>
<div id="wrap" class="main">
	<div class="topCover">
		<h1 class="logo"><a href="../"><span style="display:none">처음으로</span><img src="./html/images/common/logo.png" alt=""></a></h1>
	</div>
	<? include_once ("./html/include/header.php"); ?>
	<div class="mainArea">
		<? include_once ("./html/include/topArea.php"); ?>
		<div class="mainTop">
			<div class="mainArrow">
					<a href="#contents" class="btn_scroll">
						<span>
							<img src="./html/images/common/arrow_down.png" alt="">
						</span>
					</a>
			</div>
			<div class="mainTopText">
				<div class="topTextMain">
					세상에서 가장 편안한 휴식의 순간<br>
					고요한 하늘정원 펜션
				</div>
				<div class="topTextSub">
					The most restful moment of rest in the world<br>
					Silent Sky Garden Pension
				</div>
			</div>
		</div>
		<div id="contents">
			<div class="mainCon">
				<div class="main_01" style="background-image: url(./html/images/main/img01.jpg);"></div>
				<div class="main_02">
					<div class="main_02_inner">
						<span class="main_02_title">
							SPECIAL DAY
						</span>
						<span class="main_02_subtitle">
							break in time of life
						</span>
						<p>
							<span>파노라마같은 낭만적인 자연속에서 보내는 오늘은</span>
							<span>당신에게 특별한 선물을 가져다 주어요</span>
							<span>당신이 원하던 삶속에 황홀한 휴식이 기다립니다.</span>
						</p>
						<a href="#" class="viewMore">view more<span class="line"></span></a>
					</div>
				</div>
			</div>
			<div class="mainMidText">
				<div class="midTextMain">
					우리들에게 아름다운 추억을 만들어줄 하늘정원..<br>
					그냥 무작정 이유없이 끌리는곳.. 하늘정원은 그런 곳이다.
				</div>
				<div class="midTextSub">
					The Garden of Heaven to make us beautiful memories.
				</div>
			</div>
			<div class="mainCon01">
				<img src="./html/images/main/img03.jpg" alt="">
				<a href="#" class="mainCon01Btn">
					<img src="./html/images/common/btn_reser.png" alt="">
				</a>
			</div>
			<? include_once ("./html/include/roomList.php"); ?>
		</div>
	</div>
<? include_once ("./html/include/footer.php"); ?>
