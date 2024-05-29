<?
include_once('../html/_common.php');
$version ="1.00";
//$nav_open ="open_nav";
?>
<?php $mobile = !!(FALSE !== strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile')); ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html xmlns="http://www.w3.org/1999/xhtml" lang="ko"" class="ie8"><![endif]-->
<!--[if IE 9 ]><html xmlns="http://www.w3.org/1999/xhtml" lang="ko" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko">
<!--<![endif]-->
<head>
<? include_once (G5_PATH."/inc/metaTag.php"); ?>
<link rel="stylesheet" type="text/css" href="/html/css/set/lightslider.css?ver=<?=$version?>">
<link rel="stylesheet" type="text/css" href="/html/css/common.css?ver=<?=$version?>">
<link rel="stylesheet" type="text/css" href="/html/css/sub.css?ver=<?=$version?>">
<link rel="stylesheet" type="text/css" href="/html/css/contents.css?ver=<?=$version?>">
<link rel="stylesheet" type="text/css" href="/html/css/ddnayo.css?ver=<?=$version?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- custom scrollbar stylesheet -->
<script type="text/javascript" src="/html/js/set/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/html/js/set/modernizr.js"></script>
<script type="text/javascript" src="/html/js/set/jquery-ui-1.10.4.min.js?ver=1.10.4.js"></script>
<script type="text/javascript" src="/html/js/set/TweenMax.min.js"></script>
<script type="text/javascript" src="/html/js/common.js"></script>
<script type="text/javascript" src="/html/js/set/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/html/js/set/jquery.transform3d.js"></script>
<script type="text/javascript" src="/html/js/set/jquery.transform2d.js"></script>
<script type="text/javascript" src="/html/js/set/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/html/js/set/lightslider.js"></script>
<script type="text/javascript" src="/html/js/set/jquery.sticky.js"></script>
<!--[if IE 6]>
    <script type="text/livescript" src="/html/js/set/DD_belatedPNG_0.0.8a-min"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('img, div, a, .png24');
    </script>
<![endif]-->
<!--[if lt IE 9]>
	<script src="/html/js/set/html5"></script>
	<script src="/html/js/set/respond"></script>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries"></script>
<![endif]-->

</head>
<body onload="init()">
