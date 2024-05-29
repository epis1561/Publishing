<?
$folderName="special";
$topArea="topArea_sub";
$cate = $_GET[cate];
$pageNum="3$cate";
$subNum="$cate";
//$nav_open ="";
//var_dump(G5_PATH."/html/");
$mainTypo01="";
$mainTypo02="";
//$control_header="control_header";
switch ($cate){

  case "01":
    $pageTitle01="대형실내수영장";
    $pageTitle02="Waterpark Pool";	
    $pageText01="사계절 가족들과 즐길 수 있는<span class='none1024'></span><br class='block1024'>대형 실내수영장";
    $pageText02="
      가족 모두가 함께 즐기는 물의 낙원! <br class='none800'>
      최대 400명까지 수용가능한 초대형 냉/온수 실내워터파크를 준비하였습니다. <br><br>
  
      <b>
        대형 슬라이드(미끄럼틀), 락커룸, 찜질방, 휴게실, 탈의실, 개별샤워실 시설 완비<br>
        이용복장 : 래쉬가드 or 수영복, 수영모 착용 필수(미착장시 출입제한)<br>
        이용시간 : 주중(일 ~ 목) 10:00 ~ 12:00, 14:00 ~ 16:00 / 주말(금 ~ 토) 10:00 ~ 12:00, 14:00 ~ 17:00<br><br>
        <span style='color:red;'>숙박(글램핑, 캠핑하우스, 오토캠핑 사이트) 이용 시 최대 4인까지 무료이용</span><br>
        <span style='color:red;'>숙박 이용 안할 시 일일 이용권 구매하여 이용가능(1인당 30,000원, 워터파크/테마파크 모두 이용 가능)</span><br>
      </b>
    ";
    $bgStyle="background:url('/html/images/common/sp_bg01.jpg') no-repeat bottom right;";
  break;
  
  case "02":
    $pageTitle01="수중범퍼카";
    $pageTitle02="Water bumper cars";
    $pageText01="가족끼리 즐기는 완벽한 물놀이!<span class='none1024'></span><br class='block1024'>수중범퍼카";
    $pageText02="
      넓은 수영장에서 튜브를 타고 범퍼카를 즐기면서,<br>
      아이들의 웃음소리와 부모님의 행복한 모습이 어우러진 특별한 순간을 만들어보세요.<br><br>
      이용시간 : 09:00, 13:00 / 1운행시마다 1인, 1회씩만 이용가능
    ";
    $bgStyle="background:url('/html/images/common/sp_bg02.jpg') no-repeat bottom right;";
  break;
  
  case "03":
    $pageTitle01="샤워장(남/녀)";
    $pageTitle02="Shower area";
    $pageText01="기분좋은 마무리를 위한 편의시설! <span class='none1024'></span><br class='block1024'>샤워장(남/녀)";
    $pageText02="
      워터파크에서 물놀이를 마치고, 깔끔한 샤워 시설로 상쾌하게 정리하세요. 편안함과 청결함이 보장되는 새로운 워터파크 경험을 만나보세요!<br>
      수영장 내부에 준비되어 있으며, 탈의 및 샤워를 하실 수 있습니다.
      
    ";
    $bgStyle="background:url('/html/images/common/sp_bg03.jpg') no-repeat bottom right;";
  break;
  
  case "04":
    $pageTitle01="범퍼카";
    $pageTitle02="Bumper cars";
    $pageText01="온 가족이 즐길 수 있는 스트레스 해소시간! <span class='none1024'></span><br class='block1024'> 범퍼카";
    $pageText02="
    웃음과 신나는 순간이 가득한 역동적인 경험으로, 테마파크에서 즐거운 가족 시간을 보내보세요.<br> 범퍼카의 흥미진진한 움직임과 함께, 특별한 가족 소풍을 체험하세요!<br><br>
    이용시간 : 09:00, 13:00, 17:00 / 1운행시마다 1인, 1회씩만 이용가능
    ";
    $bgStyle="background:url('/html/images/common/sp_bg04.jpg') no-repeat bottom right;";
  break;
  
  case "05":
    $pageTitle01="사계절 레일썰매장";
    $pageTitle02="Alpine Coaster Park";
    $pageText01="사계절 내내 즐거운 시간을!<span class='none1024'></span><br class='block1024'> 레일썰매장";
    $pageText02="
    테마파크의 레일 썰매장에서 특별한 체험을 즐겨보세요. 자연의 아름다움과 속도의 즐거움이 어우러진 공간에서 가족과 함께 즉흥적인 여행을 느껴보세요.<br> 색다른 감각과 흥미진진한 순간이 여러분을 기다립니다!
    ";
    $bgStyle="background:url('/html/images/common/sp_bg05.jpg') no-repeat bottom right;";
  break;
  
  case "06":
    $pageTitle01="어린이 기차";
    $pageTitle02="Kids train";
    $pageText01="어린이들을 위한 꿈의 여정!<span class='none1024'></span><br class='block1024'>어린이 기차";
    $pageText02="
    테마파크의 어린이 기차에서 재미와 웃음이 어우러진 환상적인 여행을 즐겨보세요.<br> 동화 같은 풍경과 함께, 작은 승객들을 위한 특별한 모험이 펼쳐집니다.<br><br>
    이용시간 : 09:00, 13:00, 17:00 / 1운행시마다 1인, 1회씩만 이용가능
    ";
    $bgStyle="background:url('/html/images/common/sp_bg06.jpg') no-repeat bottom right;";
  break;
  
  case "07":
    $pageTitle01="어린이 바이킹";
    $pageTitle02="Children's Viking Ride";
    $pageText01="즐거운 모험의 여정!<span class='none1024'></span><br class='block1024'> 어린이 바이킹";
    $pageText02="
    용감한 어린이들을 위한 특별한 체험으로, 바이킹선과 함께 재미와 웃음이 넘치는 여행을 떠나보세요.<br>
    작은 모험가들이 즐거움을 찾는 그 순간을 만들어내는 장소입니다!<br><br>
    이용시간 : 09:00, 13:00, 17:00 / 1운행시마다 1인, 1회씩만 이용가능
    ";
    $bgStyle="background:url('/html/images/common/sp_bg07.jpg') no-repeat bottom right;";
  break;
  
  case "08":
    $pageTitle01="에어바운스";
    $pageTitle02="Air Bounce";
    $pageText01="하늘을 높이 뛰어넘는 즐거움!<span class='none1024'></span><br class='block1024'>에어바운스";
    $pageText02="
   아이들이 좋아하는 캐릭터들과 재미와 웃음으로 가득찬 놀이를 경험하세요. 부드럽게 튀어오르는 순간을 즐길 수 있는 특별한 놀이 공간으로 여러분의 아이들을 초대합니다.<br><br>

    ";
    $bgStyle="background:url('/html/images/common/sp_bg08.jpg') no-repeat bottom right;";
  break;
  
  case "09":
    $pageTitle01="정글짐";
    $pageTitle02="Jungle Gym";
    $pageText01="어린이들의 놀이와 모험의 시작!<span class='none1024'></span><br class='block1024'>정글짐";
    $pageText02="
    커다란 정글짐에서 아이들은 에너지를 발산하며 스릴 넘치는 순간을 만끽할 수 있어요. 다양한 도전과 놀이 공간으로 어린이들을 환상적인 정글 모험으로 안내합니다.<br>
    함께하는 재미와 웃음이 가득한 정글짐에서 특별한 순간을 즐겨보세요!
    ";
    $bgStyle="background:url('/html/images/common/sp_bg09.jpg') no-repeat bottom right;";
  break;
  
  case "10":
    $pageTitle01="회전그네";
    $pageTitle02="Swing Carousel";
    $pageText01="하늘을 나는듯한 즐거움! <span class='none1024'></span><br class='block1024'>회전그네";
    $pageText02="
    공중에서 떠나는 신나는 여행 속, 어린이들은 자유로운 날개짓과 함께 즐거운 순간을 만끽합니다. 가족과 함께하는 신비로운 공중 모험으로 특별한 기억을 쌓아보세요.
    ";
    $bgStyle="background:url('/html/images/common/sp_bg10.jpg') no-repeat bottom right;";
  break;
  
  case "11":
    $pageTitle01="실내축구장";
    $pageTitle02="Indoor Soccer Field";
    $pageText01="함께 뛰어노는 즐거움!<span class='none1024'></span><br class='block1024'>실내축구장";
    $pageText02="
    테마파크의 실내 축구장에서는 열정 넘치는 경기와 함께 즐거운 시간이 펼쳐집니다.<br>친구들과 혹은 가족과 함께 팀을 이뤄 즉흥적인 경기에 도전하거나, 축구의 재미를 실내에서 편안하게 느껴보세요.
    ";
    $bgStyle="background:url('/html/images/common/sp_bg11.jpg') no-repeat bottom right;";
  break; 

  case "12":
    $pageTitle01="매점";
    $pageTitle02="Store";
    $pageText01="즐거운 시간에 부족함이 없도록 채워드립니다.<span class='none1024'></span><br class='block1024'>&nbsp;&nbsp;매점";
    $pageText02="
    제천워터파크에는 다양한 물품을 판매하는 매점이 있습니다.<br>부족했던 물품을들 구매하시고 모자람없는 하루를 보내세요.<br><br>
    이용시간 09:00 ~ 20:00
    ";
    $bgStyle="background:url('/html/images/common/sp_bg12.jpg') no-repeat bottom right;";
  break; 

  case "13":
    $pageTitle01="전기차충전소";
    $pageTitle02="Charging station";
    $pageText01="전기차 충전 걱정하지 마세요~!<span class='none1024'></span><br class='block1024'>&nbsp;&nbsp;전기차충전소";
    $pageText02="
    제천워터파크에는 전기차를 위한 전기차 충전소를 설치해두었습니다.<br><br>
    위치 - 수영장 위쪽 대길 캠핑장과 천사캠핑장 사이
    ";
    $bgStyle="background:url('/html/images/common/sp_bg13.jpg') no-repeat bottom right;";
  break;
  
  case "14":
    $pageTitle01="바베큐 & 불멍";
    $pageTitle02="Barbecue & Campfire";
    $pageText01="캠핑의 완성, 낭만이 함께하는 밤!<span class='none1024'></span><br class='block1024'>&nbsp;&nbsp;바베큐 & 불멍";
    $pageText02="
    제천워터파크캠핑랜드의 각 숙소들에 개별테라스가 설치되어 있습니다.<br>
    맛있는 바베큐로 여행의 재미를 더해보세요!<br><br>
    숯+그릴제공(1회당) 30,000원 / 현장결제<br>
    장작을 넉넉히 제공해 드립니다. 맛있는 식사 후에 불멍으로 하루를 추억해보세요.
    ";
    $bgStyle="background:url('/html/images/common/sp_bg14.jpg') no-repeat bottom right;";
  break; 
  }
  ?>

<? include_once ("./include/header.php"); ?> 
	<? include_once ("./include/topArea.php"); ?>
  <div class="mainbar">
    <h1>WATERPARK CAMPINGLAND</h1>
  </div>
	<div id="contents">
    <div class="spCon02 section_fadeIn delay section" style="<?= $bgStyle ?>">
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
    <div class="main01_01 section_fadeIn section">

      <div class="content01">
        <div class="img">     
          <img src="./images/main/img02.png" alt="" class="img img_100">
        </div>
        <div class="txt">
          <span>워터파크캠핑랜드</span>
          <h1 class="calli">Waterpark Campingland</h1>
          <p>
            우리 아이들의 웃음소리를 담는 싱그러운 워터파크와<br>
            아이들의 천진난만함을 닮은 알록달록한 놀이터<br>
            아이들을 닮은 워터파크글램핑는 우리 아이들을 위한 공간입니다
          </p>
        </div>
      </div>

      <div class="content02">
      <? if($cate =="01" || $cate =="02" || $cate =="03" || $cate =="04" || $cate =="05" || $cate =="06" || $cate =="07" || $cate =="08" || $cate =="09" || $cate =="10" || $cate =="11") {?>
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
        <? } ?>
        <div class="special none1024">
          <? if($cate =="01" || $cate =="02" || $cate =="03") {?>
          <div class="left">
            <a href="./special2.php?cate=01">
              <img src="./images/main/sp01.png" alt="" class="img_00">
            </a>
           
          </div>
          <div class="middle">
          <a href="./special2.php?cate=02">
              <img src="./images/main/sp02.png" alt="" class="img_00">
            </a>
          </div>
          <div class="right">
          <a href="./special2.php?cate=03">
              <img src="./images/main/sp03.png" alt="" class="img_00">
            </a>
          </div>
          <? } ?>
          <? if($cate =="04" || $cate =="05" || $cate =="06" || $cate =="07" || $cate =="08" || $cate =="09" || $cate =="10" || $cate =="11") {?>
            <div class="left">
						<a href="/html/special2.php?cate=04">
						<img src="/html/images/main/sp04.png" alt="" class="img_00">
						</a>
						<br><br>
						<a href="/html/special2.php?cate=05">
						<img src="/html/images/main/sp05.png" alt="" class="img_00">
						</a>
            <br><br>
            <a href="/html/special2.php?cate=06">
						<img src="/html/images/main/sp06.png" alt="" class="img_00">
						</a>
					</div>
          <div class="middle">
						<a href="/html/special2.php?cate=07">
						<img src="/html/images/main/sp07.png" alt="" class="img_00">
						</a>
						<br><br>
						<a href="/html/special2.php?cate=08">
						<img src="/html/images/main/sp08.png" alt="" class="img_00">
						</a>
            <br><br>
            <a href="/html/special2.php?cate=09">
						<img src="/html/images/main/sp09.png" alt="" class="img_00">
						</a>
					</div>
          <div class="right">
						<a href="/html/special2.php?cate=10 ">
						<img src="/html/images/main/sp10.png" alt="" class="img_00">
						</a>
						<a href="/html/special2.php?cate=11">
						<img src="/html/images/main/sp11.png" alt="" class="img_00">
						</a>
					</div>
          <? } ?>  
        </div>
        <div class="m_special swiper block1024">
      <div class="swiper-wrapper">
        <? if($cate =="01" || $cate =="02" || $cate =="03") {?>
        <div class="swiper-slide"><a href="./special2.php?cate=01"><img src="./images/main/m_sp01.png" alt=""></a></div>
        <div class="swiper-slide"><a href="./special2.php?cate=02"><img src="./images/main/m_sp02.png" alt=""></a></div>
        <div class="swiper-slide"><a href="./special2.php?cate=03"><img src="./images/main/m_sp03.png" alt=""></a></div>
        <? } ?>
        <? if($cate =="04" || $cate =="05" || $cate =="06" || $cate =="07" || $cate =="08" || $cate =="09" || $cate =="10" || $cate =="11") {?>
        <div class="swiper-slide"><a href="./special2.php?cate=04"><img src="./images/main/m_sp04.png" alt=""></a></div>
        <div class="swiper-slide"><a href="./special2.php?cate=05"><img src="./images/main/m_sp05.png" alt=""></a></div>
        <div class="swiper-slide"><a href="./special2.php?cate=06"><img src="./images/main/m_sp06.png" alt=""></a></div>
        <div class="swiper-slide"><a href="./special2.php?cate=07"><img src="./images/main/m_sp07.png" alt=""></a></div>
        <div class="swiper-slide"><a href="./special2.php?cate=08"><img src="./images/main/m_sp08.png" alt=""></a></div>
        <div class="swiper-slide"><a href="./special2.php?cate=09"><img src="./images/main/m_sp09.png" alt=""></a></div>
        <div class="swiper-slide"><a href="./special2.php?cate=10"><img src="./images/main/m_sp10.png" alt=""></a></div>
        <div class="swiper-slide"><a href="./special2.php?cate=11"><img src="./images/main/m_sp11.png" alt=""></a></div>
        <? } ?>
      </div>

      <!--div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div-->
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

      <div class="obj01 obj">
        <img src="./images/common/obj01.png" alt="" class="img_00">
      </div>
      <div class="obj02 obj">
        <img src="./images/common/obj02.png" alt="" class="img_00">
      </div>
      <div class="obj03 obj">
        <img src="./images/common/obj03.png" alt="" class="img_00">
      </div>
      <div class="obj04 obj">
        <img src="./images/common/obj04.png" alt="" class="img_00">
      </div>
    </div>

    <!-- <div class="main01_02">
      <div class="img02_01 section_fadeIn delay section">
        <img src="./images/main/img03.jpg" alt="">
      </div>
    </div>

    <div class="main01_03">
      <div class="left section_fadeIn delay section">
        <img src="./images/main/img04.jpg" alt="" class="img_100">
      </div>
      <div class="right section_fadeIn delay section">
        <div class="logo_image">
          <img src="./images/common/logo_img.png" alt="">
        </div>
      </div>
    </div> -->

    <div class="main01_04 section_fadeIn delay section">
      <p>
        STAY WITH YOUR BELOVED COMPANION<br>
        IN A CLEAN AND COZY<br>
        ENJOY A HAPPY MOMENT WITH YOUR COMPANION.
      </p>
    </div>
    </div>
<? include_once ("./include/footer.php"); ?>