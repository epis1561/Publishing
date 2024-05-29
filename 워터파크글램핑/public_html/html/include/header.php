<?php 
include_once('./_common.php');
//include_once(G5_LIB_PATH.'/visit.lib.php');
//include_once(G5_LIB_PATH.'/connect.lib.php');
include_once (G5_PATH.'/inc/pageName.php');
$mobile = !!(FALSE !== strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile'));
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html xmlns="http://www.w3.org/1999/xhtml" lang="ko"" class="ie8"><![endif]-->
<!--[if IE 9 ]><html xmlns="http://www.w3.org/1999/xhtml" lang="ko" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko">
<!--<![endif]-->

<head>
<!-- css stylesheet -->
<? include_once (G5_PATH.'/inc/metaTag.php'); ?>
<link rel="stylesheet" type="text/css" href="/html/css/reset.css?ver=<?=$open_ver?>">
<link rel="stylesheet" type="text/css" href="/html/css/roomList.css?ver=<?=$open_ver?>">
<link rel="stylesheet" type="text/css" href="/html/css/set/lightslider.css?ver=<?=$open_ver?>">
<link rel="stylesheet" type="text/css" href="/html/css/fonts.css?ver=?ver=<?=$open_ver?>">
<link rel="stylesheet" type="text/css" href="/html/css/common.css?ver=?ver=<?=$open_ver?>">
<?php if( $folderName == main) {?>
	<link rel="stylesheet" type="text/css" href="/html/css/main.css?ver=?ver=<?=$open_ver?>">
<?php } ?>
<?php if( $folderName != main) {?>
	<link rel="stylesheet" type="text/css" href="/html/css/sub.css?ver=?ver=<?=$open_ver?>">
	<link rel="stylesheet" type="text/css" href="/html/css/contents.css?ver=?ver=<?=$open_ver?>">
<?php } ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="StyleSheet" href='https://www.ddnayo.com/api/script.css' type="text/css" />

<!-- custom scrollbar stylesheet -->
<script type="text/javascript" src="/html/js/set/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/html/js/set/modernizr.js"></script>
<script type="text/javascript" src="/html/js/set/jquery-ui-1.10.4.min.js?ver=1.10.4"></script>
<script type="text/javascript" src="/html/js/common.js?ver=<?=$open_ver?>"></script>
<script type="text/javascript" src="/html/js/set/TweenMax.min.js"></script>
<script type="text/javascript" src="/html/js/set/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/html/js/set/jquery.transform3d.js"></script>
<script type="text/javascript" src="/html/js/set/jquery.transform2d.js"></script>
<script type="text/javascript" src="/html/js/set/jquery.mousewheel.js"></script>
<script type="text/javascript" id="ddnayoapi" src="https://www.ddnayo.com/api/script.aspx?apiuser=" charset="utf-8"></script>
<script type="text/javascript" src="/html/js/set/jquery.sticky.js"></script>
<script src="https://use.typekit.net/xsf0etn.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<!-- font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">

<!-- xeicon -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">

<!-- swiper -->
<link
    rel="stylesheet"
    href="https://unpkg.com/swiper/swiper-bundle.min.css"
/>
<!-- 네이버 애널리틱스 -->
<script type="text/javascript" src="//wcs.naver.net/wcslog.js"></script>
<script type="text/javascript">
if(!wcs_add) var wcs_add = {};
wcs_add["wa"] = "12acbc8542bf9d0";
if(window.wcs) {
wcs_do();
}
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-234011709-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-234011709-1');
</script>

</head>
<body onload="init()">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQ5LFL7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->




<?php if( $folderName == main) {?>
	<?
		if($mobile){
			include G5_BBS_PATH.'/newwin.mobile.inc.php'; // 팝업레이어
		}else{
			include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
		}
	?>
<?php } ?>
<div id="wrap" class="<?=$folderName?> <?=$control_header?> <?=$folderName?><?=$subNum?>">
<?php if(!$m_notice) {?>
<div class="header section" id="header">
<h1 class="logo transAll03_ease mo">
		<a href="/">
			<img src="/html/images/common/logo2.png" class="logo_black">	
			<img src="/html/images/common/logo2.png" class="logo_white">	
		</a>
	</h1>
	<a href="#" class="btn_nav <?=$nav_open?> block1024" title="MENU">
		<span class="line">
			<span class="line01"></span>
			<span class="line02"></span>
			<span class="line03"></span>
		</span>
	</a>
	<div class="gnbArea transAll03_ease">		
		<ul class="gnb">
			<li class="gnb2<?=iif($categoryNum=="02"," this","")?>">
				<a href="/html/room.php?roomnum=01" class="depth1"><span class="menu_eng">글램핑</span><span class="menu_kor">글램핑</span> <span></span></a>
				<!-- <a href="/html/room_preview.php" class="depth1"><span class="menu_eng">rooms</span><span class="menu_kor">객실안내</span> <span></span></a> -->
				<p class="depth1_mobile">글램핑 <span></span></p>
				<ul class="gnb_sub">
					<li class="<?=iif($pageNum=="201","this","")?>"><a href="/html/room.php?roomnum=01" class="depth2">럭셔리글램핑</a></li>
					<li class="<?=iif($pageNum=="202","this","")?>"><a href="/html/room.php?roomnum=02" class="depth2">오페라글램핑</a></li>
					<li class="<?=iif($pageNum=="203","this","")?>"><a href="/html/room.php?roomnum=03" class="depth2">캠핑하우스</a></li>
				</ul>
			</li>
			<li class="gnb3<?=iif($categoryNum=="02"," this","")?>">
			<a href="/html/room.php?roomnum=04" class="depth1"><span class="menu_eng">오토캠핑장</span><span class="menu_kor">오토캠핑장</span> <span></span></a>
				<!-- <a href="/html/special.php?cate=01" class="depth1"><span class="menu_eng">Special</span><span class="menu_kor">스페셜</span> <span></span></a> -->
				<p class="depth1_mobile">오토캠핑장 <span></span></p>
				<ul class="gnb_sub">
					<li class="<?=iif($pageNum=="204","this","")?>"><a href="/html/room.php?roomnum=04" class="depth2">백설</a></li>
					<li class="<?=iif($pageNum=="205","this","")?>"><a href="/html/room.php?roomnum=05" class="depth2">천사</a></li>
					<li class="<?=iif($pageNum=="206","this","")?>"><a href="/html/room.php?roomnum=06" class="depth2">이슬</a></li>
					<li class="<?=iif($pageNum=="207","this","")?>"><a href="/html/room.php?roomnum=07" class="depth2">대길</a></li>
					<li class="<?=iif($pageNum=="208","this","")?>"><a href="/html/room.php?roomnum=08" class="depth2">황제</a></li>
					<li class="<?=iif($pageNum=="209","this","")?>"><a href="/html/room.php?roomnum=09" class="depth2">럭키</a></li>
				</ul>
			</li>
			<li class="gnb3<?=iif($categoryNum=="03"," this","")?>">
				<a href="/html/special2.php?cate=01" class="depth1"><span class="menu_eng">워터/테마파크</span><span class="menu_kor">워터/테마파크</span> <span></span></a>
				<!-- <a href="/html/special.php?cate=01" class="depth1"><span class="menu_eng">Special</span><span class="menu_kor">스페셜</span> <span></span></a> -->
				<p class="depth1_mobile">워터/테마파크 <span></span></p>
				<ul class="gnb_sub">
					<li class="<?=iif($pageNum=="301","this","")?>"><a href="/html/special2.php?cate=01" class="depth2">대형실내수영장</a></li>
					<li class="<?=iif($pageNum=="302","this","")?>"><a href="/html/special2.php?cate=02" class="depth2">수중튜브범퍼카</a></li>
					<li class="<?=iif($pageNum=="303","this","")?>"><a href="/html/special2.php?cate=03" class="depth2">샤워장(남/녀)</a></li>
					<li class="<?=iif($pageNum=="304","this","")?>"><a href="/html/special2.php?cate=04" class="depth2">범퍼카</a></li>
					<li class="<?=iif($pageNum=="305","this","")?>"><a href="/html/special2.php?cate=05" class="depth2">사계절 레일썰매장</a></li>
					<li class="<?=iif($pageNum=="306","this","")?>"><a href="/html/special2.php?cate=06" class="depth2">어린이 기차</a></li>
					<li class="<?=iif($pageNum=="307","this","")?>"><a href="/html/special2.php?cate=07" class="depth2">어린이 바이킹</a></li>
					<li class="<?=iif($pageNum=="308","this","")?>"><a href="/html/special2.php?cate=08" class="depth2">에어바운스</a></li>
					<li class="<?=iif($pageNum=="309","this","")?>"><a href="/html/special2.php?cate=09" class="depth2">정글짐</a></li>
					<li class="<?=iif($pageNum=="310","this","")?>"><a href="/html/special2.php?cate=10" class="depth2">회전그네</a></li>
					<li class="<?=iif($pageNum=="311","this","")?>"><a href="/html/special2.php?cate=11" class="depth2">실내축구장</a></li>
				</ul>
			</li>
			<li>
				<h1 class="logo transAll03_ease pc">
					<a href="/">
						<img src="/html/images/common/logo2.png" class="logo_black">	
						<img src="/html/images/common/logo2.png" class="logo_white">	
					</a>
				</h1>
			</li>
			<li class="gnb3<?=iif($categoryNum=="03"," this","")?>">
				<a href="/html/special2.php?cate=12" class="depth1"><span class="menu_eng">스페셜</span><span class="menu_kor">스페셜</span> <span></span></a>
				<!-- <a href="/html/special.php?cate=01" class="depth1"><span class="menu_eng">Special</span><span class="menu_kor">스페셜</span> <span></span></a> -->
				<p class="depth1_mobile">스페셜 <span></span></p>
				<ul class="gnb_sub">
					<li class="<?=iif($pageNum=="312","this","")?>"><a href="/html/special2.php?cate=12" class="depth2">매점</a></li>
					<li class="<?=iif($pageNum=="313","this","")?>"><a href="/html/special2.php?cate=13" class="depth2">전기차충전소</a></li>
					<li class="<?=iif($pageNum=="314","this","")?>"><a href="/html/special2.php?cate=14" class="depth2">바베큐/불멍</a></li>
				</ul>
			</li>
			<li class="gnb5<?=iif($categoryNum=="05"," this","")?>">
				<a href="https://tour.jecheon.go.kr/base/main/view" class="depth1" target="_blank"><span class="menu_eng">제천여행</span><span class="menu_kor">제천여행</span> <span></span></a>
				<!-- <a href="https://tour.jecheon.go.kr/base/main/view" class="depth1"><span class="menu_eng">Tour</span><span class="menu_kor">관광안내</span> <span></span></a> -->
				<p class="depth1_mobile">제천여행<span></span></p>
				<ul class="gnb_sub">
					<li><a href="https://tour.jecheon.go.kr/base/main/view" target="_blank" class="depth2">제천여행</a></li>
				</ul>
			</li>

			<!-- <li class="gnb6<?=iif($categoryNum=="06"," this","")?>">
				<a href="/html/board.php?bname=script" class="depth1"><span class="menu_eng">Community</span><span class="menu_kor">Community</span> <span></span></a>
				 <a href="/html/board.php?bname=script" class="depth1"><span class="menu_eng">Community</span><span class="menu_kor">커뮤니티</span> <span></span></a>
				<p class="depth1_mobile">Community <span></span></p>
				<ul class="gnb_sub">	
					<li class="<?=iif($pageNum=="63","this","")?>"><a href="/html/board.php?bname=script" class="depth2">숙박후기</a></li>
				</ul>
			</li> -->

			<li class="gnb6<?=iif($categoryNum=="06"," this","")?>">
				<a href="/html/reserve.php?cate=01" class="depth1"><span class="menu_eng">예약</span><span class="menu_kor">예약</span> <span></span></a>
				<!-- <a href="/html/reserve.php?cate=01" class="depth1"><span class="menu_eng">예약</span><span class="menu_kor">예약안내</span> <span></span></a> -->
				<p class="depth1_mobile">예약<span></span></p>
				<ul class="gnb_sub">
					<li class="<?=iif($pageNum=="51","this","")?>"><a href="/html/reserve.php?cate=01" class="depth2">예약안내</a></li>
					<li><a href="https://booking.ddnayo.com/?accommodationId=101820" target="_blank" class="depth2">글램핑예약</a></li>
					<li><a href="https://booking.ddnayo.com/?accommodationId=101820" target="_blank" class="depth2">백설/천사예약</a></li>
					<li><a href="https://booking.naver.com/booking/3/bizes/144786/items" target="_blank" class="depth2">황제/대길예약</a></li>
					<li><a href="https://r.camperstory.com/resMain.hbb?reserve_path=RP&campseq=1730" target="_blank" class="depth2">이슬/럭키예약</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<!-- <ul class="icon_btns">
		<li><a class="naverpay_Btn" href="https://www.instagram.com/juju_kids_poolvilla/" target="_blank"><img src="/html/images/common/insta.png" alt=""></a></li>
		<li><a class="insta_Btn" href="https://booking.naver.com/booking/3/bizes/575828" target="_blank"><img src="/html/images/common/naverpay.png" alt=""></a></li>
		<li><a class="reser_Btn none1024" href="<? echo $info['reser_link'] ?>" target="_blank"><img src="/html/images/common/reservation.png" alt=""></i></a></li>
		<li><a class="reser_Btn in-block1024" href="<? echo $info['reser_link'] ?>" target="_blank"><img src="/html/images/common/reservation.png" alt=""></a></li>
		 <a class="insta_Btn" href="https://www.instagram.com/juju_kids2021/" target="_blank"><img src="/html/images/common/insta.png" alt=""></a>
	</ul> -->
	<div class="headerBg"></div>
</div>
<!-- <div class="sub_btn">
	<ul>
		<li class="reser">
			<a href="https://booking.ddnayo.com/?accommodationId=13159" target="_blank">
				<i>
					<img src="/html/images/common/reser_white.png" alt="">
				</i>
				<span>
					실시간예약
				</span>
			</a>
		</li>		
		<li class="phone">
			<a href="tel:<? echo $info['footer_tel'] ?>">
				<i>
					<img src="/html/images/common/phone_white.gif" alt="">
				</i>
				<span>
					<? echo $info['footer_tel'] ?>
				</span>
			</a>
		</li>		
		<li class="phone_mo">
			<a href="tel:<? echo $info['footer_tel'] ?>">
				<i>
					<img src="/html/images/common/phone_white2.gif" alt="">
				</i>
				<span>
					<span class="txt01">고객상담센터</span>
					<span class="txt02"><? echo $info['footer_tel'] ?></span>
					<span class="txt03">클릭시 전화로 연결됩니다.</span>
				</span>
			</a>
		</li>
	</ul>
</div> -->
<?php } ?>