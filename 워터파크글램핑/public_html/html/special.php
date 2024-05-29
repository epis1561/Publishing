<?
$topArea="topArea_sub";
$categoryNum="03";
$folderName="special";


$cate = $_GET[cate];

$pageNum="3$cate";
$subNum="$cate";
switch ($cate){

case "01":
	$pageTitle01="워터파크 - 대형실내수영장";
	$pageTitle02="Waterpark Pool";	
	$pageText01="사계절 가족들과 즐길 수 있는<span class='none1024'></span><br class='block1024'>대형 실내수영장 워터파크";
	$pageText02="
		사랑스런 아이들과 함께 즐거운 물놀이를 즐기실 수 있도록 <br class='none800'>
		최대 400명까지 수용가능한 초대형 냉/온수 실내워터파크를 준비하였습니다. <br class='none800'>

		<b>
			대형 슬라이드(미끄럼틀), 락커룸, 찜질방, 휴게실, 탈의실, 개별샤워실 시설 완비<br>
			이용복장 : 래쉬가드 or 수영복, 수영모 착용 필수(미착장시 출입제한)<br>
			이용시간 : 주중(일 ~ 목) 10:00 ~ 11:30, 14:00 ~ 16:00 / 주말(금 ~ 토) 10:00 ~ 12:00, 14:00 ~ 17:00 <br>
			<span style='color:red;'>숙박(글램핑, 캠핑하우스, 오토캠핑 사이트) 이용 시 최대 4인까지 무료이용</span><br>
			<span style='color:red;'>숙박 이용 안할 시 일일 이용권 구매하여 이용가능(1인당 30,000원, 워터파크/테마파크 모두 이용 가능)</span><br>
		</b>
	";
break;

case "02":
	$pageTitle01="수중튜브범퍼카";
	$pageTitle02="Water bumper cars";
	$pageText01="아이들의 웃음이 번지는 놀이공간 <span class='none1024'>-</span><br class='block1024'> 개별키즈놀이터";
	$pageText02="
		아이들이 객실내에서 신나게 뛰어놀 수 있도록 <br>
		전 객실 키즈놀이터가 준비되어 있습니다.
	";
break;

case "03":
	$pageTitle01="개별바베큐";
	$pageTitle02="Private Barbecue";
	$pageText01="여행에 빠질 수 없는 바베큐파티 <span class='none1024'>-</span><br class='block1024'> 개별바베큐";
	$pageText02="
		<br>
		전 객실에 온수풀을 즐기는 아이들을 바라보며 <br class='block800'>편하게 <br class='none800'>
		바베큐를 만끽할 수 있는 개별바베큐가 <br class='block800'>준비되어있습니다. <br class='none800'>
		아이, 부모 모두 힐링할 수 <br class='block800'>있는 공간입니다. <br class='none800'>
		사랑스러운 아이들과 맛있는 <br class='block800'>바베큐파티를 즐겨보세요.<br><br>
		
		<b>
		* 원적외선 로스터그릴이 구비되어 있습니다<br>
		* 이용료 : 1박당 10,000원
		</b>
	";
break;

case "04":
	$pageTitle01="야외수영장";
	$pageTitle02="Swimming Pool";
	$pageText01="아이들의 웃음소리가 끊이지 않는 <span class='none1024'>-</span><br class='block1024'> 야외수영장";
	$pageText02="
		가평의 멋진 풍경을 바라보며 야외에서 물놀이를 <br>
		즐길 수 있는 야외수영장이 있습니다. <br>
		향긋한 자연냄새에서 신나는 물놀이를 즐겨보세요.
	";
break;

case "05":
	$pageTitle01="방역&호텔침구류";
	$pageTitle02="Best room condition";
	$pageText01="최적의 룸컨디션을 위한 <span class='none1024'>-</span><br class='block1024'> 방역 및 호텔침구류";
	$pageText02="
		머무시는 분들의 편의를 위해 방역소독은 물론 전객실 호텔침구 <br class='none1024'>
		세트와 더욱더 편한 잠자리와 위생을 위하여 초고밀도 메모리폼 <br class='none1024'>
		매트리스로 전 객실에 구비되어 있습니다<br><br>
		
		* 초고밀도 메모리폼 매트리스는 통풍도 잘되고 위생적입니다
	";
break;

case "06":
	$pageTitle01="잔디놀이터";
	$pageTitle02="Lawn Playground";
	$pageText01="마음껏 뛰어놀 수 있는 <span class='none1024'>-</span><br class='block1024'> 잔디놀이터";
	$pageText02="
		펜션 앞 넓은 잔디놀이터가 마련되어 있습니다. <br>
		하하호호 아이들의 웃음소리를 들으며 편안한 <br class='block800'>여행을 즐겨보세요.​
	";
break;

case "07":
	$pageTitle01="전동차";
	$pageTitle02="Electric Car";
	$pageText01="드라이빙, 쥬쥬키즈 최고의 즐거움 <span class='none1024'>-</span><br class='block1024'> 전동차";
	$pageText02="
		넓은 트랙에서 무료로 즐기는 전동차 체험! <br>
		소중한 아이들에게 잊지 못할 추억을 선사합니다.<br><br>
		
		<b>
		* 펜션으로 문의 부탁드립니다
		</b>
	";
break;

case "08":
	$pageTitle01="응접실";
	$pageTitle02="Drawing Room";
	$pageText01="쥬쥬키즈에 오신 분들을 반갑게 <br class='block1024'>맞이할 <span class='none1024'>-</span> 응접실";
	$pageText02="
		쥬쥬키즈풀빌라에 오신 것을 환영합니다! <br class='block800'>쥬쥬키즈의 응접실에서는 음료도 구비 되어있으며<br>
		아이들이 더 재미있게 쥬쥬키즈에서 즐길 수 있도록 <br class='block800'>각종 보드게임, 장난감, 공주드레스 등을<br class='none800'>
		대여해드리고 있습니다! 고객분들이 행복한 시간을 보냈으면 하는 쥬쥬키즈의 마음입니다.<br><br>

		<b>
		* 장난감 대여시 보증금이 필요합니다 <br class='block800'><span class='none800'>(보증금 : 10,000원 / 퇴실 시 반환)</span>
		<span class='block800' style='margin-left:10px;'>(보증금 : 10,000원 / 퇴실 시 반환)</span>
		<br>
		* 음료도 판매하고 있습니다 <br class='block800'> <span class='none800'>(음료수 가격 : 1,000원)</span>
		<span class='block800' style='margin-left:10px;'>(음료수 가격 : 1,000원)</span>
		</b>
	";
break;

case "09":
	$pageTitle01="응접실";
	$pageTitle02="Drawing Room";
	$pageText01="쥬쥬키즈에 오신 분들을 반갑게 <br class='block1024'>맞이할 <span class='none1024'>-</span> 응접실";
	$pageText02="
		쥬쥬키즈풀빌라에 오신 것을 환영합니다! <br class='block800'>쥬쥬키즈의 응접실에서는 음료도 구비 되어있으며<br>
		아이들이 더 재미있게 쥬쥬키즈에서 즐길 수 있도록 <br class='block800'>각종 보드게임, 장난감, 공주드레스 등을<br class='none800'>
		대여해드리고 있습니다! 고객분들이 행복한 시간을 보냈으면 하는 쥬쥬키즈의 마음입니다.<br><br>

		<b>
		* 장난감 대여시 보증금이 필요합니다 <br class='block800'><span class='none800'>(보증금 : 10,000원 / 퇴실 시 반환)</span>
		<span class='block800' style='margin-left:10px;'>(보증금 : 10,000원 / 퇴실 시 반환)</span>
		<br>
		* 음료도 판매하고 있습니다 <br class='block800'> <span class='none800'>(음료수 가격 : 1,000원)</span>
		<span class='block800' style='margin-left:10px;'>(음료수 가격 : 1,000원)</span>
		</b>
	";
break;

case "10":
	$pageTitle01="응접실";
	$pageTitle02="Drawing Room";
	$pageText01="쥬쥬키즈에 오신 분들을 반갑게 <br class='block1024'>맞이할 <span class='none1024'>-</span> 응접실";
	$pageText02="
		쥬쥬키즈풀빌라에 오신 것을 환영합니다! <br class='block800'>쥬쥬키즈의 응접실에서는 음료도 구비 되어있으며<br>
		아이들이 더 재미있게 쥬쥬키즈에서 즐길 수 있도록 <br class='block800'>각종 보드게임, 장난감, 공주드레스 등을<br class='none800'>
		대여해드리고 있습니다! 고객분들이 행복한 시간을 보냈으면 하는 쥬쥬키즈의 마음입니다.<br><br>

		<b>
		* 장난감 대여시 보증금이 필요합니다 <br class='block800'><span class='none800'>(보증금 : 10,000원 / 퇴실 시 반환)</span>
		<span class='block800' style='margin-left:10px;'>(보증금 : 10,000원 / 퇴실 시 반환)</span>
		<br>
		* 음료도 판매하고 있습니다 <br class='block800'> <span class='none800'>(음료수 가격 : 1,000원)</span>
		<span class='block800' style='margin-left:10px;'>(음료수 가격 : 1,000원)</span>
		</b>
	";
break;

case "11":
	$pageTitle01="응접실";
	$pageTitle02="Drawing Room";
	$pageText01="쥬쥬키즈에 오신 분들을 반갑게 <br class='block1024'>맞이할 <span class='none1024'>-</span> 응접실";
	$pageText02="
		쥬쥬키즈풀빌라에 오신 것을 환영합니다! <br class='block800'>쥬쥬키즈의 응접실에서는 음료도 구비 되어있으며<br>
		아이들이 더 재미있게 쥬쥬키즈에서 즐길 수 있도록 <br class='block800'>각종 보드게임, 장난감, 공주드레스 등을<br class='none800'>
		대여해드리고 있습니다! 고객분들이 행복한 시간을 보냈으면 하는 쥬쥬키즈의 마음입니다.<br><br>

		<b>
		* 장난감 대여시 보증금이 필요합니다 <br class='block800'><span class='none800'>(보증금 : 10,000원 / 퇴실 시 반환)</span>
		<span class='block800' style='margin-left:10px;'>(보증금 : 10,000원 / 퇴실 시 반환)</span>
		<br>
		* 음료도 판매하고 있습니다 <br class='block800'> <span class='none800'>(음료수 가격 : 1,000원)</span>
		<span class='block800' style='margin-left:10px;'>(음료수 가격 : 1,000원)</span>
		</b>
	";
break;

case "12":
	$pageTitle01="응접실";
	$pageTitle02="Drawing Room";
	$pageText01="쥬쥬키즈에 오신 분들을 반갑게 <br class='block1024'>맞이할 <span class='none1024'>-</span> 응접실";
	$pageText02="
		쥬쥬키즈풀빌라에 오신 것을 환영합니다! <br class='block800'>쥬쥬키즈의 응접실에서는 음료도 구비 되어있으며<br>
		아이들이 더 재미있게 쥬쥬키즈에서 즐길 수 있도록 <br class='block800'>각종 보드게임, 장난감, 공주드레스 등을<br class='none800'>
		대여해드리고 있습니다! 고객분들이 행복한 시간을 보냈으면 하는 쥬쥬키즈의 마음입니다.<br><br>

		<b>
		* 장난감 대여시 보증금이 필요합니다 <br class='block800'><span class='none800'>(보증금 : 10,000원 / 퇴실 시 반환)</span>
		<span class='block800' style='margin-left:10px;'>(보증금 : 10,000원 / 퇴실 시 반환)</span>
		<br>
		* 음료도 판매하고 있습니다 <br class='block800'> <span class='none800'>(음료수 가격 : 1,000원)</span>
		<span class='block800' style='margin-left:10px;'>(음료수 가격 : 1,000원)</span>
		</b>
	";
break;

}
?>
<? include_once ("./include/header.php"); ?>
	<? include_once ("./include/topArea.php"); ?>
	<? include_once ("./include/subNav.php"); ?>
	<div id="contents">
		<div class="spCon01 section_fadeIn section">
			<img src="/html/images/<?=$folderName?>/img<?=$subNum?>_01.jpg" alt="" class="img_00">
		</div>
		<div class="spCon02 section_fadeIn delay section">
			<div class="txtBox">
				<dl class="section_fadeIn section">
					<dt class="title_eng calli"><?=$pageTitle02?></dt>
					<dt class="title_kor"><?=$pageText01?></dt>
					<dd>
						<div>
							<?=$pageText02?>
						</div>
					</dd>
				</dl>
			</div>
		</div>
		<div class="spCon03">
			<div class="left section_fadeIn delay section">
				<img src="/html/images/<?=$folderName?>/img<?=$subNum?>_02.jpg" alt="" class="img_100">
			</div>
			<div class="right section_fadeIn delay section">
				<img src="/html/images/<?=$folderName?>/img<?=$subNum?>_03.jpg" alt="" class="img_100">
			</div>
		</div>
		<div class="spCon04">
			<div class="right section_fadeIn delay section">
				<div class="logo_image">
				<img src="/html/images/common/logo_img.png" alt="">
				</div>
			</div>
			<div class="left section_fadeIn delay section">
				<img src="/html/images/<?=$folderName?>/img<?=$subNum?>_04.jpg" alt="" class="img_100">
			</div>
		</div>
		<div class="main01_01 section_fadeIn section">
			<div class="content02">
				<div class="txt">
				<span>우리의 서비스</span>
				<h1 class="calli">Our Service</h1>
				<p>
					이 곳을 찾아주시는 모든 분들이<br class="block800">
					특별하고 소중한 시간을 보내시길 바라며<br>
					이곳을 찾는 모든 분들에게도 이 공간이 <br class="block800">
					행복과 추억이었으면 좋겠습니다.
				</p>
				</div>
				<div class="special none1024">
					<div class="left">
						<a href="/html/special.php?cate=06">
						<img src="/html/images/main/sp01.png" alt="" class="img_00">
						</a>
						<br><br>
						<a href="/html/special.php?cate=01">
						<img src="/html/images/main/sp02.png" alt="" class="img_00">
						</a>
					</div>
					<div class="middle">
						<a href="/html/special.php?cate=02">
						<img src="/html/images/main/sp03.png" alt="" class="img_00">
						</a>
						<br><br>
						<a href="/html/special.php?cate=07">
						<img src="/html/images/main/sp04.png" alt="" class="img_00">
						</a>
					</div>
					<div class="right">
						<a href="/html/special.php?cate=03 ">
						<img src="/html/images/main/sp05.png" alt="" class="img_00">
						</a>
						<a href="/html/special.php?cate=04">
						<img src="/html/images/main/sp06.png" alt="" class="img_00">
						</a>
					</div>
				</div>
        		<div class="m_special swiper block1024">
					<div class="swiper-wrapper">
						<div class="swiper-slide"><a href="/html/special.php?cate=06"><img src="/html/images/main/m_sp01.png" alt=""></a></div>
						<div class="swiper-slide"><a href="/html/special.php?cate=01"><img src="/html/images/main/m_sp02.png" alt=""></a></div>
						<div class="swiper-slide"><a href="/html/special.php?cate=02"><img src="/html/images/main/m_sp03.png" alt=""></a></div>
						<div class="swiper-slide"><a href="/html/special.php?cate=07"><img src="/html/images/main/m_sp04.png" alt=""></a></div>
						<div class="swiper-slide"><a href="/html/special.php?cate=03"><img src="/html/images/main/m_sp05.png" alt=""></a></div>
						<div class="swiper-slide"><a href="/html/special.php?cate=04"><img src="/html/images/main/m_sp06.png" alt=""></a></div>
					</div>
				</div>	
    		</div>
		</div>
			<!-- Swiper JS -->
			<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

			<!-- Initialize Swiper -->
			<script>
			var swiper = new Swiper(".m_special", {
				effect: 'fade',
				loop: true,
				autoplay:{
				delay:3000,
				disableOnInteraction:false
				},
				spaceBetween: 30,
				hashNavigation: {
				watchState: true,
				},
				/*pagination: {
				el: ".swiper-pagination",
				clickable: true,
				},*/
				navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
				},
			});
			</script>
	</div>
<? include_once ("./include/reservation_btn.php"); ?>
<? include_once ("./include/footer.php"); ?>