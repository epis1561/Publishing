<?=$_POST[menu];?>
<?
    $menu=$_POST[menu];

	If (!$menu)
	{
	  If (!$_session[menu]){$menu=$_session[menu];}
	}
    Else
	{
       $_session[menu]=menu;
	}

   $menu_1=substr($menu,1);
   $menu_2=substr($menu,1,2);
   $menu_3=substr($menu,-1);
    Function iif($s1,$s2,$s3){
        If ($s1==true )
		{
			echo $s2;
		}
		Else
		{
			echo $s3;
		}
	}
?>
<div id="header" class="<?=$nav_open?>">
  <h1 class="logo">
    <a href="../">
      <img src="/html/images/common/logo.png" class="logoW">
      <img src="/html/images/common/logo_black.png" class="logoM">
    </a>
  </h1>
	<p id="skip"><a href="#contents">메뉴 건너뛰기</a></p>
	<a class="btn_nav <?=$nav_open?>">
		<span class="line">
			<span class="line01"></span>
			<span class="line02"></span>
			<span class="line03"></span>
		</span>
		<!--span class="text">memu</span-->
	</a>
  <div class="btnArea" data-test=<?php $siteinfo['reser_link'] ?>>
    <a href="/html/reservation.php" target="_blank" class="btn_reser">ㆍ실시간예약</a>
  </div>
	<div class="gnbArea">
		<ul class="gnb">
			<li class="gnb1<?=iif($categoryNum=="01"," this","")?>">
				<a href="/html/about.php" class="depth1">about</a>
				<span class="depth1_mobile">about</span>
				<ul class="gnb_sub">
					<li class="<?=iif($pageNum=="11","this","")?>"><a href="/html/about.php" class="depth2">펜션소개</a></li>
					<!-- <li class="<?=iif($pageNum=="12","this","")?>"><a href="/html/landscape.php" class="depth2">외부</a></li> -->
				</ul>
			</li>
			<li class="gnb2<?=iif($categoryNum=="02"," this","")?>">
				<a href="/html/room.php?roomnum=01" class="depth1">room</a>
				<!-- <a href="/html/room.php?roomnum=01" class="depth1">rooms</a> -->
				<span class="depth1_mobile">room</span>
				<ul class="gnb_sub">
					<li class="<?=iif($pageNum=="201","this","")?>"><a href="/html/room.php?roomnum=01" class="depth2">디올독채</a></li>
				</ul>
			</li>
			<li class="gnb3<?=iif($categoryNum=="03"," this","")?>">
				<a href="/html/special.php?cate=01" class="depth1">special</a>
				<span class="depth1_mobile">special</span>
				<ul class="gnb_sub">
					<li class="<?=iif($pageNum=="301","this","")?>"><a href="/html/special.php?cate=01" class="depth2">바비큐</a></li>
					<li class="<?=iif($pageNum=="302","this","")?>"><a href="/html/special.php?cate=02" class="depth2">야외수영장</a></li>
					<li class="<?=iif($pageNum=="303","this","")?>"><a href="/html/special.php?cate=03" class="depth2">장금이네 샤인머스켓</a></li>
					<!-- <li class="<?=iif($pageNum=="304","this","")?>"><a href="/html/special.php?cate=04" class="depth2">키즈놀이용품</a></li> -->

				</ul>
			</li>
			 <li class="gnb4<?=iif($categoryNum=="04"," this","")?>">
				<a href="/html/tour.php" class="depth1">tour</a>
				<span class="depth1_mobile">tour</span>
				<ul class="gnb_sub">
					<li class="<?=iif($pageNum=="41","this","")?>"><a href="/html/tour.php" class="depth2">여행지안내</a></li>
					<li><a href="https://www.gyeongju.go.kr/tour/index.do" target="_blank" class="depth2">경주관광</a></li>
				</ul>
			</li> 
			<li class="gnb5<?=iif($categoryNum=="05"," this","")?>">
				<a href="/html/reserve.php?cate=01" class="depth1">reserve</a>
				<span class="depth1_mobile">reserve</span>
				<ul class="gnb_sub">
					<li class="<?=iif($pageNum=="51","this","")?>"><a href="/html/reserve.php?cate=01" class="depth2">예약안내</a></li>
					<li class="<?=iif($pageNum=="52","this","")?>"><a href="/html/reservation.php" target="_blank" class="depth2">실시간예약</a></li> 
					<!-- <li class="<?=iif($pageNum=="52","this","")?>"><a href="https://booking.ddnayo.com/booking-calendar-status?accommodationId=100517" target="_blank" class="depth2">실시간예약</a></li> -->
				</ul>
			</li>
		</ul>
	</div>
</div>
