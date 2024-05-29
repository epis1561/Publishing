<?
$topArea="room";
$categoryNum="02";
$folderName="room";
$control_header="sub";

$roomnum = $_GET['roomnum'];

$pageNum="2".$roomnum;
$subNum=$roomnum;
switch ($roomnum){

	case "01":
        $pageTitle01 = "럭셔리 글램핑";
        $pageText01 = "Luxury Glamping";
        $pageText02 = "
		제천워터파크에서의 추억을 완성하는<br>
		낭만넘치는 럭셔리글램핑!<br>
		워터파크에서의 즐거운 시간을 보낸 후<br>
		지친 심신을 쉬었다 가세요~
	";
        $RoomInfoText01 = "
		기준인원 4명 / 최대인원 6명
	";
        $RoomInfoText02 = "
		글램핑 독채(화장실 + 샤워실 + 개별테라스 - 바베큐가능) / 6평
	";
        $RoomInfoText03 = "
		TV, 침대(퀸), 식탁, 에어컨, 냉장고, 취사도구, 전기밥솥, 전자레인지, 핫플레이트 <br class='none768'>
		객실샤워실, 인터넷, 난방, 일산화탄소 경보기, 화재 경보기 <br class='none768'>
	";

        break;

case "02":
	$pageTitle01="오페라 글램핑";
	$pageText01="Opera Glamping";
	$pageText02 ="
	제천워터파크에서의 아름다운 밤<br>
	감성넘치는 오페라글램핑!<br>
	온수수영장과 찜질방오페라글램핑에서 소중한 사람들과 함께<br>
	추억과 행복을 담아가세요~ ";
	$RoomInfoText01 = "
		기준인원 4명 / 최대인원 6명
	";
	$RoomInfoText02 = "
		독채형 글램핑(개별 온수수영장 + 개별찜질방 + 화장실 + 샤워실 + 개별테라스 - 바베큐가능) / 6평
	";
	$RoomInfoText03 = "
		TV, 침대(퀸), 식탁, 에어컨, 냉장고, 취사도구, 전기밥솥, 전자레인지, 핫플레이트 <br class='none768'>
		객실샤워실, 인터넷, 난방, 일산화탄소 경보기, 화재 경보기 <br class='none768'>
	";

break;

case "03":
	$pageTitle01="캠핑하우스";
	$pageText01="Camping House";
	$pageText02 ="
	제천워터파크에서 하루를 마무리하며<br>
	아늑하고 따뜻한 캠핑하우스에서<br>
	하루를 마무리 하세요!";
	$RoomInfoText01 = "
		기준인원 4명 / 최대인원 6명
	";
	$RoomInfoText02 = "
		원룸형(온돌방 + 화장실 + 개별테라스 - 바베큐가능) / 8평
	";
	$RoomInfoText03 = "
		TV, 식탁, 에어컨, 냉장고, 취사도구, 핫플레이트 <br class='none768'>
		객실샤워길, 인터넷, 난방, 일산화탄소 경보기, 화재 경보기<br class='none768'>
	";

break;

case "04":
	$pageTitle01="캠핑사이트-백설";
	$pageText01="SnowWhite";
	$pageText02="
	워터파크에서의 신나는 물놀이 뒤, 오토캠핑 사이트에서의 안락한 휴식을 경험하세요!<br>
	아늑한 텐트와 눈부신 별빛 아래, 당신만의 특별한 순간을 만들어드립니다.
	";
	$RoomInfoText01 = "
		기준인원 4명 / 최대인원 6명
	";
	$RoomInfoText02 = "
		파쇄석지반 / 자가텐트 필요
	";

break;

case "05":
	$pageTitle01="캠핑사이트-천사";
	$pageText01="Angel";
	$pageText02="
	워터파크에서의 신나는 물놀이 뒤, 오토캠핑 사이트에서의 안락한 휴식을 경험하세요!<br>
	아늑한 텐트와 눈부신 별빛 아래, 당신만의 특별한 순간을 만들어드립니다.
	";
	$RoomInfoText01 = "
	기준인원 4명 / 최대인원 6명
	";
	$RoomInfoText02 = "
	파쇄석지반 / 자가텐트 필요
	";

break;

case "06":
	$pageTitle01="캠핑사이트-이슬";
	$pageText01="Angel";
	$pageText02="
	워터파크에서의 신나는 물놀이 뒤, 오토캠핑 사이트에서의 안락한 휴식을 경험하세요!<br>
	아늑한 텐트와 눈부신 별빛 아래, 당신만의 특별한 순간을 만들어드립니다.
	";
	$RoomInfoText01 = "
	기준인원 4명 / 최대인원 6명
	";
	$RoomInfoText02 = "
	파쇄석지반 / 자가텐트 필요
	";

break;

case "07":
	$pageTitle01="캠핑사이트-대길";
	$pageText01="GoodLuck";
	$pageText02="
	워터파크에서의 신나는 물놀이 뒤, 오토캠핑 사이트에서의 안락한 휴식을 경험하세요!<br>
	아늑한 텐트와 눈부신 별빛 아래, 당신만의 특별한 순간을 만들어드립니다.
	";
	$RoomInfoText01 = "
	기준인원 4명 / 최대인원 6명
	";
	$RoomInfoText02 = "
	파쇄석지반 / 자가텐트 필요
	";

break;

case "08":
	$pageTitle01="캠핑사이트-황제";
	$pageText01="Emperor";
	$pageText02="
	워터파크에서의 신나는 물놀이 뒤, 오토캠핑 사이트에서의 안락한 휴식을 경험하세요!<br>
	아늑한 텐트와 눈부신 별빛 아래, 당신만의 특별한 순간을 만들어드립니다.
	";
	$RoomInfoText01 = "
	기준인원 4명 / 최대인원 6명
	";
	$RoomInfoText02 = "
	파쇄석지반 / 자가텐트 필요
	";

break;

case "09":
	$pageTitle01="캠핑사이트-럭키";
	$pageText01="Lucky";
	$pageText02="
	워터파크에서의 신나는 물놀이 뒤, 오토캠핑 사이트에서의 안락한 휴식을 경험하세요!<br>
	아늑한 텐트와 눈부신 별빛 아래, 당신만의 특별한 순간을 만들어드립니다.
	";
	$RoomInfoText01 = "
	기준인원 4명 / 최대인원 6명
	";
	$RoomInfoText02 = "
	파쇄석지반 / 자가텐트 필요
	";

break;

}

?>
<style>
	.wrap1{
		height: auto !important;
	}
	.img_00{
		width: 70%;
	}
	.img_small{
		width: 60%;
	}

	.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-style:solid;border-width:1px;font-family:'mid';font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-style:solid;border-width:1px;font-family:'mid';font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-baqh{text-align:center;vertical-align:middle}
.tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:middle}
.tr{
	background-color: #fff;
}
	
	@media (max-width:500px){
		.week_date p {padding: 0 5px !important;}
		.swiper-wrapper{
			margin-bottom: 10% !important;
		}
		.img_00{
		width: 100%;
	}
	}
</style>
<? include_once ("./include/header.php"); ?>
<? include_once ("./include/topArea.php"); ?>

	<div class="mainbar" id="mainbar">
    	<h1>WATERPARK CAMPINGLAND</h1>
  	</div>
	  
	<div id="contents">
		<div class="subCon roomCon01">
			<div class="room01_01 section_fadeIn section">
				<div class="img01"><img src="./images/room<?=$subNum?>/img01.jpg" alt=""></div>
			</div>
			<div class="room01_02">
				 <dl class="room_info section_fadeIn section">
					<dt>
						<span class="title01">
							<span class="title01_01 calli"><?=$pageText01?></span>
							<span class="title01_02"><?=$pageTitle01?></span>
						</span>
					</dt>
					<dt><p class="title01_02"><?=$pageText02?></p></dt>
				</dl> 
				<dl class="room_fa">
					<dd>
						<div class="room_contents_info room_contents">
							<div class="room_info_table">
								<span class="room_item_tit"><span><span class="rec"></span> 기준인원 <span class="rec"></span></span></span></span>
								<div class="room_limit_table"><?=$RoomInfoText01?></div>
							</div>
							<div class="room_info_text room_contents">
								<div class="room_items">
									<span class="room_item_tit"><span><span class="rec"></span> 객실 구조 넓이 <span class="rec"></span></span></span>
									<span class="room_item_desc"><?=$RoomInfoText02?></span>
								</div>
								<div class="room_items room_contents">
									<span class="room_item_tit"><span><span class="rec"></span> 구비시설 <span class="rec"></span></span></span>
									<? if($roomnum=="01"|| $roomnum=="02" || $roomnum=="03"){?><span class="room_item_desc"><?=$RoomInfoText03?></span><? } ?>
								</div>
							</div>
						</div>
					</dd>
				</dl>
			</div>
		</div>
		<div class="size">
		<div class="room_logo">
			<div class="guide_map">
				<img src="/html/images/common/logo2.png" alt="">
			</div>
		</div>
		<? if($roomnum=="01"|| $roomnum=="02" || $roomnum=="03"){?>
<img src="/html/images/common/guide_glam.png" alt="">
<? } ?>
<? if($roomnum=="04" || $roomnum=="05" || $roomnum=="06" || $roomnum=="07" || $roomnum=="08" || $roomnum=="09"){?>
<h1>캠핑장 안내도</h1>
<div class="guide_map">
	<? if($roomnum=="04") {?>
	<img src="/html/images/common/guide_camp1.png" alt="">
	<? } ?>
	<? if($roomnum=="05") {?>
	<img src="/html/images/common/guide_camp2.png" alt="">
	<? } ?>
	<? if($roomnum=="06") {?>
	<img src="/html/images/common/guide_camp3.png" alt="">
	<? } ?>
	<? if($roomnum=="07") {?>
	<img src="/html/images/common/guide_camp4.png" alt="">
	<? } ?>
	<? if($roomnum=="08") {?>
	<img src="/html/images/common/guide_camp5.png" alt="">
	<? } ?>
	<? if($roomnum=="09") {?>
	<img src="/html/images/common/guide_camp6.png" alt="">
	<? } ?>
</div>
<div class="guide">
	<div class="tables">
		<? if($roomnum=="04"){ ?>
		<div class="table1">
		<div class="table_cover">
			<table class="tg" style="undefined;table-layout: fixed; width: 100%">
				<colgroup>
				<col style="width: 15%">
				<col style="width: 35%">
				<col style="width: 15%">
				<col style="width: 35%">
				</colgroup>
				<thead>
				  <tr>
			<th class="tg-c3ow">백설1</th>
			<th class="tg-baqh">6m * 7.7m</th>
			<th class="tg-baqh">백설7</th>
			<th class="tg-baqh">6.7m * 8m</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
			<td class="tg-baqh">백설2</td>
			<td class="tg-baqh">6.5m * 7.7m</td>
			<td class="tg-baqh">백설8</td>
			<td class="tg-baqh">6.7m * 9m</td>
				  </tr>
				  <tr>
			<td class="tg-baqh">백설3</td>
			<td class="tg-baqh">6m * 7.7m</td>
			<td class="tg-baqh">백설9</td>
			<td class="tg-baqh">7.7m * 9m</td>
				  </tr>
				  <tr>
			<td class="tg-baqh">백설4</td>
			<td class="tg-baqh">6m * 7.7m</td>
			<td class="tg-baqh">백설10</td>
			<td class="tg-baqh">8m * 6.7m</td>
				  </tr>
				  <tr>
			<td class="tg-baqh">백설5</td>
			<td class="tg-baqh">6.5m * 7.7m</td>
			<td class="tg-baqh">백설11</td>
			<td class="tg-baqh">10.5m * 5.5m</td>
				  </tr>
				  <tr>
			<td class="tg-baqh">백설6</td>
			<td class="tg-baqh">7.3m * 7.5m</td>
			<td class="tg-baqh">백설12</td>
			<td class="tg-baqh">9m * 8m</td>
				  </tr>
				</tbody>
				</table>
		</div>
		</div>
		<? } ?>
		<? if($roomnum=="05"){ ?>
		<div class="table2">
		<div class="table_cover">
			<table class="tg" style="undefined;table-layout: fixed; width:100%">
				<colgroup>
				<col style="width: 10%">
				<col style="width: 23.2%">
				<col style="width: 10%">
				<col style="width: 23.2%">
				<col style="width: 10%">
				<col style="width: 23.2%">
				</colgroup>
				<thead>
				  <tr>
			<th class="tg-c3ow">천사1</th>
			<th class="tg-c3ow">4m * 11m</th>
			<th class="tg-c3ow">천사7</th>
			<th class="tg-c3ow">7m * 9m</th>
			<th class="tg-c3ow">천사13</th>
			<th class="tg-c3ow">6m * 9m</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
			<td class="tg-c3ow">천사2</td>
			<td class="tg-c3ow">6m * 8.5m</td>
			<td class="tg-c3ow">천사8</td>
			<td class="tg-c3ow">6m * 9m</td>
			<td class="tg-c3ow">천사15</td>
			<td class="tg-c3ow">5m * 9m</td>
				  </tr>
				  <tr>
			<td class="tg-c3ow">천사3</td>
			<td class="tg-c3ow">6m * 8m</td>
			<td class="tg-c3ow">천사9</td>
			<td class="tg-c3ow">6.5m * 7m</td>
			<td class="tg-c3ow">천사16</td>
			<td class="tg-c3ow">5.5m * 9m</td>
				  </tr>
				  <tr>
			<td class="tg-c3ow">천사4</td>
			<td class="tg-c3ow">6m * 9m</td>
			<td class="tg-c3ow">천사10</td>
			<td class="tg-c3ow">6m * 8.5m</td>
			<td class="tg-c3ow">천사17</td>
			<td class="tg-c3ow">5m * 8m</td>
				  </tr>
				  <tr>
			<td class="tg-c3ow">천사5</td>
			<td class="tg-c3ow">6m * 9m</td>
			<td class="tg-c3ow">천사11</td>
			<td class="tg-c3ow">6m * 8.5m</td>
			<td class="tg-9wq8" rowspan="2" style="text-align:center;">천사18</td>
			<td class="tg-9wq8" rowspan="2" style="text-align:center;">5m * 8m</td>
				  </tr>
				  <tr>
			<td class="tg-c3ow">천사6</td>
			<td class="tg-c3ow">6.5m * 9m</td>
			<td class="tg-c3ow">천사12</td>
			<td class="tg-c3ow">6.5m * 7.5m</td>
				  </tr>
				</tbody>
				</table>
		</div>
		</div>
		<? } ?>
		<? if($roomnum=="06"){ ?>
	<div class="table3 gray">
		<div class="table_cover">
			<table class="tg" style="undefined;table-layout: fixed; width: 100%">
			<colgroup>
			<col style="width: 12%">
			<col style="width: 21.6%">
			<col style="width: 12%">
			<col style="width: 21.6%">
			<col style="width: 12%">
			<col style="width: 21.6%">
			</colgroup>
			<thead>
			  <tr>
				<th class="tg-c3ow">이슬1</th>
				<th class="tg-baqh">8.5m * 8.5m</th>
				<th class="tg-baqh">이슬8</th>
				<th class="tg-baqh">7.8m * 8m</th>
				<th class="tg-baqh">이슬15</th>
				<th class="tg-baqh">7m * 8m</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td class="tg-baqh">이슬2</td>
				<td class="tg-baqh">7m * 8.5m</td>
				<td class="tg-baqh">이슬9</td>
				<td class="tg-baqh">8m * 8m</td>
				<td class="tg-baqh">이슬16</td>
				<td class="tg-baqh">6.5m * 7m</td>
			  </tr>
			  <tr>
				<td class="tg-baqh">이슬3</td>
				<td class="tg-baqh">8.5m * 8.5m</td>
				<td class="tg-baqh">이슬10</td>
				<td class="tg-baqh">6m * 8m</td>
				<td class="tg-baqh">이슬17</td>
				<td class="tg-baqh">6m * 8m</td>
			  </tr>
			  <tr>
				<td class="tg-baqh">이슬4</td>
				<td class="tg-baqh">7m * 8.5m</td>
				<td class="tg-baqh">이슬11</td>
				<td class="tg-baqh">5.5m * 8.5m</td>
				<td class="tg-baqh">이슬18</td>
				<td class="tg-baqh">8.5m * 4.5m * 10m</td>
			  </tr>
			  <tr>
				<td class="tg-baqh">이슬5</td>
				<td class="tg-baqh">7.8m * 9m</td>
				<td class="tg-baqh">이슬12</td>
				<td class="tg-baqh">6m * 9m</td>
				<td class="tg-baqh">이슬19</td>
				<td class="tg-baqh">8m * 8m</td>
			  </tr>
			  <tr>
				<td class="tg-baqh">이슬6</td>
				<td class="tg-baqh">7.3m * 9m</td>
				<td class="tg-baqh">이슬13</td>
				<td class="tg-baqh">6m * 9m</td>
				<td class="tg-baqh">이슬20</td>
				<td class="tg-baqh">5m * 10m</td>
			  </tr>
			  <tr>
				<td class="tg-baqh">이슬7</td>
				<td class="tg-baqh">7.8m * 8m</td>
				<td class="tg-baqh">이슬14</td>
				<td class="tg-baqh">6.5m * 8m</td>
				<td class="tg-baqh">이슬21</td>
				<td class="tg-baqh">6m * 9m</td>
			  </tr>
			</tbody>
			</table>
		</div>
	</div>
	<? } ?>
<? if($roomnum=="07"){ ?>
<div class="table4 gray">
<div class="table_cover">
<table class="tg" style="undefined;table-layout: fixed; width: 100%">
<colgroup>
<col style="width: 30%">
<col style="width: 70%">
</colgroup>
<thead>
  <tr>
    <th class="tg-baqh">대길1</th>
    <th class="tg-baqh">5m * 7.7m</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-baqh">대길2</td>
    <td class="tg-baqh">5m * 7.4m</td>
  </tr>
  <tr>
    <td class="tg-baqh">대길3</td>
    <td class="tg-baqh">5m * 7.4m</td>
  </tr>
  <tr>
    <td class="tg-baqh">대길4</td>
    <td class="tg-baqh">5m * 7.8m</td>
  </tr>
  <tr>
    <td class="tg-baqh">대길5</td>
    <td class="tg-baqh">5m * 7.4m</td>
  </tr>
  <tr>
    <td class="tg-baqh">대길6</td>
    <td class="tg-baqh">5m * 7.5m</td>
  </tr>
  <tr>
    <td class="tg-baqh">대길7</td>
    <td class="tg-baqh">5m * 7.7m</td>
  </tr>
  <tr>
    <td class="tg-baqh">대길8</td>
    <td class="tg-baqh">5m * 7.7m</td>
  </tr>
</tbody>
</table>	
</div>
</div>
<? } ?>
<? if($roomnum=="08"){ ?>
<div class="table5 gray">
<div class="table_cover">
<table class="tg" style="undefined;table-layout: fixed; width: 100%">
<colgroup>
<col style="width: 8%">
<col style="width: 17%">
<col style="width: 8%">
<col style="width: 17%">
<col style="width: 8%">
<col style="width: 17%">
<col style="width: 8%">
<col style="width: 17%">
</colgroup>
<thead>
  <tr>
    <th class="tg-c3ow">황제1</th>
    <th class="tg-c3ow">5.6m * 7.8m * 10.8m</th>
    <th class="tg-baqh">황제8</th>
    <th class="tg-baqh">4.3m * 5.7m * 8.9m</th>
    <th class="tg-baqh">황제15</th>
    <th class="tg-baqh">2.8m * 10m * 12.6m</th>
    <th class="tg-baqh">황제22</th>
    <th class="tg-baqh">6.5m * 7m</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-c3ow">황제2</td>
    <td class="tg-c3ow">6.7m * 7.6m</td>
    <td class="tg-baqh">황제9</td>
    <td class="tg-baqh">5.3m * 7.1m * 8.7m</td>
    <td class="tg-baqh">황제16</td>
    <td class="tg-baqh">4.6m * 11.5m</td>
    <td class="tg-baqh">황제23</td>
    <td class="tg-baqh">7.6m * 9m</td>
  </tr>
  <tr>
    <td class="tg-c3ow">황제3</td>
    <td class="tg-c3ow">6.8m * 9m</td>
    <td class="tg-baqh">황제10</td>
    <td class="tg-baqh">5.3m * 7.1m * 8.7m</td>
    <td class="tg-baqh">황제17</td>
    <td class="tg-baqh">4.6m * 11.5m</td>
    <td class="tg-baqh">황제24</td>
    <td class="tg-baqh">6.7m * 7.4m</td>
  </tr>
  <tr>
    <td class="tg-c3ow">황제4</td>
    <td class="tg-c3ow">7m * 8.4m</td>
    <td class="tg-baqh">황제11</td>
    <td class="tg-baqh">6.6m *8.6m * 9.7m</td>
    <td class="tg-baqh">황제18</td>
    <td class="tg-baqh">4.2m * 11m</td>
    <td class="tg-baqh">황제25</td>
    <td class="tg-baqh">8.6m * 9.1m</td>
  </tr>
  <tr>
    <td class="tg-c3ow">황제5</td>
    <td class="tg-c3ow">7m * 8m</td>
    <td class="tg-baqh">황제12</td>
    <td class="tg-baqh">5.2m * 7.1m * 9.7m</td>
    <td class="tg-baqh">황제19</td>
    <td class="tg-baqh">9.6m * 10.7m * 10m</td>
    <td class="tg-baqh">황제26</td>
    <td class="tg-baqh">7.5m * 8.5m</td>
  </tr>
  <tr>
    <td class="tg-c3ow">황제6</td>
    <td class="tg-c3ow">6m * 8.1m</td>
    <td class="tg-baqh">황제13</td>
    <td class="tg-baqh">5.7m * 6m * 7.3m</td>
    <td class="tg-baqh">황제20</td>
    <td class="tg-baqh">10.6m * 4.8m * 4.1m</td>
    <td class="tg-baqh">황제27</td>
    <td class="tg-baqh">6.2m * 8.5m</td>
  </tr>
  <tr>
    <td class="tg-c3ow">황제7</td>
    <td class="tg-c3ow">4.4m * 9.7m * 9.8m</td>
    <td class="tg-baqh">황제14</td>
    <td class="tg-baqh">4m * 9.8m * 10m</td>
    <td class="tg-baqh">황제21</td>
    <td class="tg-baqh">7m * 9.6m</td>
    <td class="tg-baqh">황제28</td>
    <td class="tg-baqh">4.3m * 8.1m * 8.5m * 9.3m</td>
  </tr>
</tbody>
</table>
</div>
</div>
<? } ?>
<? if($roomnum=="09"){ ?>
<div class="table6 gray">
<div class="table_cover">
<table class="tg" style="undefined;table-layout: fixed; width: 100%">
<colgroup>
<col style="width: 35%">
<col style="width: 65%">
</colgroup>
<thead>
  <tr>
    <th class="tg-baqh">럭키1</th>
    <th class="tg-baqh">8.5m * 7.7m</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-baqh">럭키2</td>
    <td class="tg-baqh">7.9m * 6.5m</td>
  </tr>
  <tr>
    <td class="tg-baqh">럭키3</td>
    <td class="tg-baqh">7.2m * 9.4m</td>
  </tr>
  <tr>
    <td class="tg-baqh">럭키11</td>
    <td class="tg-baqh">5.1m * 10m * 5m</td>
  </tr>
  <tr>
    <td class="tg-baqh">럭키12</td>
    <td class="tg-baqh">6m * 9.7m</td>
  </tr>
  <tr>
    <td class="tg-baqh">럭키13</td>
    <td class="tg-baqh">6m * 7.4m * 9.7m</td>
  </tr>
  <tr>
    <td class="tg-baqh">럭키14</td>
    <td class="tg-baqh">6.8m * 6.8m</td>
  </tr>
</tbody>
</table>
</div>
</div>
<? } ?>
	</div>
		</div>
<!-- <div class="reser_btn"><a href="https://booking.ddnayo.com/?accommodationId=101820" target="_blank">백설&천사예약</a><a href=" https://r.camperstory.com/resMain.hbb?reserve_path=RP&campseq=1730" target="_blank">이슬&럭키예약</a><a href="https://booking.naver.com/booking/3/bizes/144786/items" target="_blank">대길&황제예약</a></div> -->
</div>
<? } ?>
		<script>
			$(window).on('load', function () {
				setTimeout(function () {
					var infoList = $('.room_data').find('li');
					var infoArr = [];
					infoList.each(function (i) {
						var $this = $(this);
						var value = $this.find('.data').html();
						infoArr.push(value);
					});
					$('.room_items').eq(0).find('.room_item_desc').append(infoArr[0]);
					$('.room_items').eq(1).find('.room_item_desc').append(infoArr[2]);
					$('.room_limit_table').append(infoArr[1]);
				}, 100);
			});
		</script>

 <div class="content02">
        <div class="txt">
          <span>우리의 서비스</span>
          <h1 class="calli">Our Service</h1>
          <p>
            이 곳을 찾아주시는 모든 분들과의 만남이 <br class="block800">
            특별한 사람들과의 만남이기를 바라며<br>
            이곳을 찾는 모든 분들에게도 이 공간이 <br class="block800">
            행복이었으면 좋겠습니다.
          </p>
        </div>
        <div class="special none1024">
		<div class="left">
						<a href="/html/special2.php?cate=04">
						<img src="/html/images/main/sp04.png" alt="" class="img_00 img_small">
						</a>
						<br><br>
						<a href="/html/special2.php?cate=05">
						<img src="/html/images/main/sp05.png" alt="" class="img_00">
						</a>
            			<br><br>
           				 <a href="/html/special2.php?cate=06">
						<img src="/html/images/main/sp06.png" alt="" class="img_00">
						</a>
						<br><br>
						<a href="/html/special2.php?cate=01">
						<img src="/html/images/main/sp01.png" alt="" class="img_00">
						</a>
						</div>
        <div class="middle">
						<a href="/html/special2.php?cate=07">
						<img src="/html/images/main/sp07.png" alt="" class="img_00 img_small">
						</a>
						<br><br>
						<a href="/html/special2.php?cate=08">
						<img src="/html/images/main/sp08.png" alt="" class="img_00 img_small">
						</a>
           				<br><br>
            			<a href="/html/special2.php?cate=09">
						<img src="/html/images/main/sp09.png" alt="" class="img_00 img_small">
						</a>
						<br><br>
						<a href="/html/special2.php?cate=02">
						<img src="/html/images/main/sp02.png" alt="" class="img_00 img_small">
						</a>
		</div>
          <div class="right">
						<a href="/html/special2.php?cate=10">
						<img src="/html/images/main/sp10.png" alt="" class="img_00 img_small">
						</a>
						<br><br>
						<a href="/html/special2.php?cate=11">
						<img src="/html/images/main/sp11.png" alt="" class="img_00">
						</a>
						<br><br>
						<a href="/html/special2.php?cate=03 ">
						<img src="/html/images/main/sp03.png" alt="" class="img_00">
						</a>
					</div>
        </div>
    <div class="m_special swiper block1024">
      <div class="swiper-wrapper wrap1">
        <div class="swiper-slide"><a href="./special2.php?cate=01"><img src="./images/main/m_sp01.png" alt=""></a></div>
        <div class="swiper-slide"><a href="./special2.php?cate=02"><img src="./images/main/m_sp02.png" alt=""></a></div>
        <div class="swiper-slide"><a href="./special2.php?cate=03"><img src="./images/main/m_sp03.png" alt=""></a></div>
        <div class="swiper-slide"><a href="./special2.php?cate=04"><img src="./images/main/m_sp04.png" alt=""></a></div>
        <div class="swiper-slide"><a href="./special2.php?cate=05"><img src="./images/main/m_sp05.png" alt=""></a></div>
        <div class="swiper-slide"><a href="./special2.php?cate=06"><img src="./images/main/m_sp06.png" alt=""></a></div>
        <div class="swiper-slide"><a href="./special2.php?cate=07"><img src="./images/main/m_sp06.png" alt=""></a></div>
        <div class="swiper-slide"><a href="./special2.php?cate=08"><img src="./images/main/m_sp06.png" alt=""></a></div>
        <div class="swiper-slide"><a href="./special2.php?cate=09"><img src="./images/main/m_sp06.png" alt=""></a></div>
        <div class="swiper-slide"><a href="./special2.php?cate=10"><img src="./images/main/m_sp06.png" alt=""></a></div>
        <div class="swiper-slide"><a href="./special2.php?cate=11"><img src="./images/main/m_sp06.png" alt=""></a></div>
      </div>
    </div>
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
		<? include_once ("./include/reservation_btn.php"); ?>
	</div>
<? include_once ("./include/footer.php"); ?>