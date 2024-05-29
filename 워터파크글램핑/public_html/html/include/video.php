<?php 
$mobile = !!(FALSE !== strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile'));
$version ="1.01";   
?>
<!DOCTYPE html>
<html>
<head>
<title>별빛바다 동영상</title>
<meta name ="format-detection" content ="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.5, minimum-scale=1, user-scalable=yes, target-densitydpi=medium-dpi">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<style>
	body { margin:0; background:#000; overflow:hidden;}
	div {position:fixed; width:100%; height:100%;}
	.main_video {position: absolute; top: 50%; left: 50%; min-width:100%; min-height:100%; width:auto; height:auto; transform: translate(-50%,-50%); -ms-transform: translate(-50%,-50%); -webkit-transform: translate(-50%,-50%);}
	
	@media  (max-width: 1024px){
		.main_video {min-width:100%; min-height:100%; width:auto; height:100%;}
	}
</style>
<link rel="stylesheet" type="text/css" href="/html/css/main.css?ver=<?=$version?>">
</head>
  <body>
  <div>
  <video autoplay loop='true' class='main_video' playsinline>
	<source type='video/mp4' src='https://player.vimeo.com/external/293491501.hd.mp4?s=7417fc066436734c44cf30819ead5955d965a904&profile_id=169'>
	<div class='main_video_bg'></div>
</video>
	</div>
  </body>
</html>