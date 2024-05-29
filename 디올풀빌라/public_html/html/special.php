<?
$categoryName="special";
$categoryNum="03";
$folderName="special";
$topArea="topArea_sub";
$pageTitle03="Special Day";
$spTypo="All seasons of the year are beautiful here. Hello Pension.<br>I give you a gift for your life.";

$cate = $_GET[cate];
//$cate = $_POST[cate];

$pageNum="3$cate";
$subNum="$cate";
switch ($cate){
	case "01":
		$pageTitle01="Barbecue";
		$pageTitle02="바비큐";
		$subText02="
			프라이빗한 여행에 맛있는 추억을 더해줄<br>
			디올 바비큐장이 준비되어 있습니다.<br><br>

			<b>바비큐장예약 : 3만원(신청 시 숯불바비큐 + 전기그릴 2가지 이용가능 / 전기그릴만 이용 시 2만원) 현장결제.<br>
		";
	break;

	case "02":
		$pageTitle01="Swimming Pool";
		$pageTitle02="야외 미온수영장";
		$subText02="

		사계절 즐길 수 있는 프라이빗한 물놀이<br>
		디올 수영장에서 즐거운 시간을 보내보세요<br><br>

			<b>[필독]</b><br>
			· 사계절이용가능<br>
			· 수질관리를 위한 수영복 착용 필수, 면티셔츠 금지<br>
			· 이용 시 사전예약 필수<br>
			· 이용 시간 제한 없음<br><span style='color:red;'>*동절기 사용시간 : 입실 ~ 자정까지</span><br>
			· 1박당 100,000원(동절기요금) / 현장결제<br><br>
		";
	break;

	case "03":
		$pageTitle01="Shine Muscat";
		$pageTitle02="장금이네 샤인머스켓";
		$subText02="
			디올풀빌라 옆, 넓게 펼쳐진 장금이네 농장<br>
			푸르고 달콤한 샤인머스켓을 만나보세요<br>
			샤인머스켓은 폴리페놀과 같은 피토케미컬이 풍부하게 함유되어 있어 당분이 많아 피로와 원기회복에 효과적이며, 비타민(A, B,B2, C, D 등)과 칼슘, 철분, 인, 마그네슘 등 미네랄도 다량 함유되어 있어 신진대사를 촉진하고 면역력 향상에 도움을 주며
피부미용에도 도움이 되고, 근육과 뼈를 튼튼하게 하여 빈혈 예방과 부기 제거에도 도움이 됩니다.<br><br>

			· 신규이벤트 : 입실 시 2kg가량 샤인머스켓 한박스 증정(소진시까지)<br>
			· 구매기간 : 9월~11월<br>
			· 주문번호 : 010-2509-2869<br>
			· 농장주소 : 경상북도 경주시 강동면 호명리 988-2<br>
			
		";
	break;	
	case "04":
		$pageTitle01="Kids toys";
		$pageTitle02="어린이 놀이용품";
		$subText02="
		디올풀빌라는 아이와 동반하시는 분들을 위하여 야외놀이터(방방,모래놀이) 및 다양한 장난감을 구비한 장난감방이 별도로 있습니다.<br>
		온 가족이 행복을 찾을 수 있는 디올풀빌라로 오세요~
			
		";
	break;	
}


?>
<style>
	.subNav {
		margin-bottom: 0 !important;
	}
	.sp_eng01 {
		position: absolute;
		z-index: 9;
		top: 18%;
		left: -10%;
	}
	.sp_eng02 {	
		position: absolute;
		z-index: 9;
		bottom: 32%;
		right: -8%;
	}
	@media (max-width:1400px){
		.sp_eng01 {
			width: 32%;
			top: 14%;
			left: -3%;
		}
		.sp_eng02 {
			bottom: 29%;
		}
	}
	@media (max-width:500px){
		.sp_eng01 {
			width: 32%;
			top: 14%;
			left: -3%;
		}
		.sp_eng02 {
			width: 52%;
		}
	}
</style>
<? include_once ("./include/subTop.php"); ?>
<div id="wrap" class="sub <?=$folderName?> <?=$folderName?><?=$subNum?> subTop">
	<? include_once ("./include/header.php"); ?>
	<div class="subArea">
			<?php if ($imgnone == "yes") { ?>
				<div class="winter_stay">
					<div class="inner">
						<h1 class="stay_t">Notice</h1>
						<ul class="stay_n">
							<li class="n_t">★ 벨루아 캠핑장 동계장박을 모집합니다 ★</li>
							<li>도심에서 30~40분만 달리면 자연을 느낄 수 있는 벨루아 캠핑장 !<br>
								벨루아 캠핑장은 충북, 대전, 세종에서 1시간 이내의 거리에 있는 캠핑장입니다</li>
							<br>
							<li>주소 : 충북 청주시 청원구 오창읍 성산2길 196-40</li>
							<li>문의 : 010-5462-5500</li>
							<br><br>

							<li class="n_t">[ 벨루아 캠핑장의 장점 ]</li>
							<li>커플 위주로 운영되는 조용한 캠핑장 (노키즈존)</li>
							<li>매점이 있어서 장작을 준비할 필요가 없는 캠핑장</li>
							<li>24시간 샤워장, 개수대 온수가 팡팡 나오는 캠핑장</li>
							<li>버거킹, 대형마트, 극장등이 차로 10분거리에 있는 캠핑장</li>
							<li>공용 전자렌지, 가스버너, 냉장고가 있는 캠핑장</li>
							<li>멋진 노을뷰가 있는 캠핑장</li>
							<li>주7일 이용 가능한 캠핑장</li>
							<br><br>

							<li class="n_t">[ 장박 모집대상 ]</li>
							<li>커플캠퍼 또는 3인까지만 이용 가능합니다.<br>
								(3인 초과 입실시 3인을 제외한 나머지 인원은 즉시 퇴실처리 됩니다)</li>
							<li>노키즈존으로 운영하고 있습니다. (0세 ~ 13세 이용불가)</li>
							<li>1인 2사이트 예약금지 (어떠한 경우도 3인 초과 이용은 불가합니다.)</li>
							<li>벨루아 캠핑장은 캠퍼님들의 힐링과 휴식을 테마로 하고 있습니다. 아무것도 하지 않고,<br>
								시간이 흘러가는 것을 바라볼 수 있는, 올바른 성인들의 고요한 휴식문화를 만들어가고자 합니다.<br>
								고요한 휴식이 필요하신 분들만 오세요. 소음에 유의 해주시기 바랍니다.</li>
							<li>고성방가, 음주가무가 필요한 분은 예약 및 이용을 삼가주세요.</li>
							<li>동계장박이 가능한 텐트 장박만 받고 있습니다. 카라반, 캠핑카, 트레일러, 차박은 불가합니다.</li>
							<li>등유난로, 팬히터, 펠릿난로 사용하시는 분들을 대상으로 합니다. 전기난방기구 사용을 일체 금지합니다.(일산화탄소감지기 준비해주세요)</li>
							<br><br>

							<li class="n_t">[ 이용기간 및 이용 가능일 ]</li>
							<li>최초입실가능일 : 22년 11월 1일 (화요일)<br>
								마지막종료일 : 23년 2월 12일 (일요일)<br>
								(주말 및 평일, 공휴일, 구정연휴 이용가능)</li>
							<li>입/퇴실시간 : 입실 14시 ~ 퇴실 12시</li>
							<br><br>

							<li class="n_t">[ 이용금액 ]</li>
							<li>A구역 3개월 90만원<br>
								B구역 3개월 120만원</li>
							<li>10월 31일까지 3개월 예약을 우선 받습니다.</li>
							<li>11월 1일부터 잔여 사이트가 있는 경우 1개월 단위의 예약을 받습니다.</li>
							<br><br>

							<li class="n_t">[ 필독사항 ]</li>
							<li>예약은 전화로 받습니다. 예약은 캠지기와 전화 통화로 예약하신 후 입금 완료시 확정됩니다.</li>
							<li>등록 후에는 장박 시작 전 및 장박 중도 환불은 불가합니다.</li>
							<li>텐트를 등록기간 쳐놓고 가는 것에 대한 비용이며, 텐트 관리에 대한 비용은 불포함입니다.<br>
								(폭설시 텐트 손상을 줄이기 위해 눈을 털어 드리는 등의 관리는 서비스 차원에서 무료로 이루어 집니다)</li>
							<li>등록하신 본인 이외의 다른 분들과 텐트 공유 및 사용 절대 불가합니다.</li>
							<li>다른 캠퍼님들에게 피해를 주는 행위 또는 캠핑장 운영방침에 어긋난 행동으로 운영진과의 마찰로<br>
								감당하기 어렵다고 판단되는 캠퍼님들은 환불없이 강제 퇴촌 될 수 있습니다.</li>
							<li>장박기간중 평일에 폭설이 내릴 시에는 캠퍼님들의 텐트가 무너지지 않도록 최선을 다하겠지만<br>
								그럼에도 불구하고 날씨에 따라 감당하기 어려운 상황이 오기도 합니다. 자연현상에 의하여<br>
								텐트 훼손 및 물품 파손이 발생할 경우 캠핑장 측에서 책임지지 않으며 보상하지 않습니다.</li>
							<li>캠퍼님 물건에 대한 책임은 본인에게 있으며 분실물에 대해서 절대 책임지지 않습니다.<br>
								고가의 물건들은 퇴실시 반드시 가져가셔야 합니다.<br>
								(노트북, 지갑, 카메라, 고가의 캠핑용품, 쥬얼리, 고가의 주류, 고가의 의류, 신발등)</li>
							<li>현행법상 600W 이하의 전열기사용</li>
							<li>동계기간 제설 작업 시간은 오전 10시부터입니다.</li>
							<li>고전력 제품은 철저히 사용을 금지합니다.<br>
								(전기히터, 전기난로, 전기온풍기, 전기라디에이터, 전기밥솥, <br>
								인덕션, 커피포트, 토스터기, 전기후라이팬, 자이글, 전기오븐등)</li>
							<li>개인 부주의로 인한 안전사고는 캠핑장에서 책임지지 않습니다.</li>
							<li>화재 위험이 있으므로 캔들(초) 사용은 금지하며, 난방기구와 전기제품은<br>
								퇴실시 전원을 반드시 확인 하시고 릴선 차단기를 내려주세요.</li>
							<li>화재 위험으로 화로대 없이 불을 지피는것을 절대 금지합니다.</li>
							<li>주차는 사이트당 1대를 우선으로 합니다. 추가 차량은 벨루아 초입 제1주차장 이용 해주세요.</li>
							<li>아침 일찍 이동 하셔야 하는 경우 벨루아 언덕 진입로 아래 도로 또는 자력으로 이동이 가능한 곳에 미리 주차해주세요.</li>
							<li>최초 입실시 안내 및 동의서 작성 있습니다.</li>
							<li>문의사항 010-5462-5500</li>
						</ul>
					</div>
				</div>
			<?php
			}
			else {
			?>
		<? include_once ("./include/topArea.php"); ?>
		<div id="contents">
			<div class="subCon subCon01">
				<? include_once ("./include/subNav.php"); ?>
			</div>
			<div class="subCon subCon03">
				<img class="sp_eng01" src="./images/common/eng01.png" alt="">
				<img class="sp_eng02" src="./images/common/eng02.png" alt="">
				<div class="spCon spCon01">
					<div class="sp01_01"><img src="./images/special/img<?=$subNum?>_01.jpg" alt="" class="img_100"></div>
					<div class="sp01_02">
						<img src="./images/special/img<?=$subNum?>_02.jpg" alt="" class="img_100">
					</div>
				</div>
				<dl class="sp_text">
					<dt><?=$pageTitle01?></dt>
					<dd>
						<p><?=$pageTitle02?></p>
						<?=$subText02?>
					</dd>
				</dl>
					<div class="spCon">
						<img src="./images/special/img<?=$subNum?>_03.jpg" alt="" class="img_100">
					</div>
					<div class="spCon spCon02">
						<img src="./images/special/img<?=$subNum?>_04.jpg" alt="" class="sp02_01">
						<p class="sp02_02">A special day for us</p>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
<? include_once ("./include/footer.php"); ?>
