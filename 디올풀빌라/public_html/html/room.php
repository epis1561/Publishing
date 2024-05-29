<?	
	$categoryName="rooms";
	$categoryNum="02";
	$folderName="room";
	$topArea="room";
	$roomnum = $_GET[roomnum];

	switch ($roomnum){
		case "1":
			$pageNum="201";
			$subNum="01";
			$roomno="304846";
			$typeno="203061";
			$pageTitle01="디올독채";
			$pageTitle02="디올독채";			
		break;

		case "2":
			$pageNum="202";
			$subNum="02";
			$roomno="182714";
			$typeno="109825";
			$pageTitle01="WHITE";
			$pageTitle02="WHITE";
		break;

		case "3":
			$pageNum="203";
			$subNum="03";
			$roomno="182715";
			$typeno="109826";
			$pageTitle01="GRAY";
			$pageTitle02="GRAY";
		break;

		case "4":
			$pageNum="204";
			$subNum="04";
			$roomno="182716";
			$typeno="109827";
			$pageTitle01="OPERA(I~IV)";
			$pageTitle02="OPERA(I~IV)";
		break;

		case "5":
			$pageNum="205";
			$subNum="05";
			$roomno="182720";
			$typeno="109828";
			$pageTitle01="CABANA(I~IV)";
			$pageTitle02="CABANA(I~IV)";
		break;
	}


?>
<? include_once ("./include/subTop.php"); ?>
<div id="wrap" class="sub <?=$folderName?> <?=$folderName?><?=$subNum?> subTop">
	<? include_once ("./include/header.php"); ?>
	<div class="subArea">
		<? include_once ("./include/topArea.php"); ?>
		<div id="contents">
			<div class="subCon subCon01">
				<? include_once ("./include/subNav.php"); ?>
				<!-- <div class="cont01_02">
					<h1>room<br>infomation</h1>
				</div> -->
			</div>
			<div class="subCon subCon02">
							
				<?php 
				//include_once ("./include/price.php"); 				
				if ($roomno) { 
				?>
				<script type="text/javascript" id="ddnayoapi" src="https://www.ddnayo.com/api/script.aspx?apiuser=gogopeople" charset="utf-8"></script>
				<div class="room_contents">
					
					<div id="room_des" style="display:none;"></div>
					<div id="room_daily_price2"></div>								
				<script>
					/*ddnayo.room.info($("#room_des").get(0), {
						"id_hotel": "281",
						"id_room_type": "<?= $typeno ?>"
					});*/
					ddnayo.room.price.dailytable($("#room_daily_price2").get(0), {
						"id_hotel": "100517" /* 업소 코드 */ ,
						"id_room_type": "<?php echo $typeno ?>" /* 객실타입 코드 */ ,
						"su_day": 5 /* 출력일자 : 파라미터 생략시 기본 7일 최대 7일 */
					});
					/*$(window).on('load', function () {
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
							if ($('.room_limit_table').find('table').length < 1) {
								$('.room_limit_table').append('<table><tbody><tr><th>시즌</th><th>성인</th><th>아동</th><th>유아</th></tr><tr><td>비수기(공통)</td><td>불가</td><td>불가</td><td>불가</td></tr></tbody></table>');
							}
						}, 100);
					});*/
				</script>
				<?php if ($roomnum == "1" || $roomnum == "2" || $roomnum == "3" ) { ?>
					<div class="room_info">
						<!-- <dl class="r_info">
							<dt><img src="/html/images/room00/roomInfo_06.svg" alt=""></dt>
							<dd>
								<div class="title">INFO</div>
								<?php if ($roomnum == "1") { ?>
									<div class="text">
									· 유형 : 본채와 별채 타입 (단독주택)<br>
									· 주방1 / 침실2 / 침대2 / 샤워실 2 / 야외자쿠지 1 (이용료 30,000원)<br>
									· TV 및 WIFI 는 제공되지 않습니다.
									</div>
								<?php
								}
								else if ($roomnum == "2") {
								?>
									<div class="text">
									· 유형 : 7개의 정사각형 룸타입 (본채와 별채 2동으로 구분됨)<br>
									· 기본 숙박인원 : 4인<br>
									· 가능 숙박 최대인원 : 6인<br>
									· 주방 1 / 욕실 2 / 침실 2 / 침대 2<br>
									· 방 문 없이 이어짐(방 문 없음)<br>
									· TV 및 WIFI 는 제공되지 않습니다.<br>
									· 자쿠지 이용 시 블라인드가 없으니 수영복 or 물빠짐 없는 옷 지참부탁드립니다.
									</div>
								<?php
								}
								else if ($roomnum == "3") {
								?>
									<div class="text">
									· 유형 : 단독주택 (4개의 건물- 침실2, 주방1, 다용도룸1)<br>
									· 기본 숙박인원 : 4인<br>
									· 가능 숙박 최대인원 : 6인<br>
									· 주방 1 / 욕실 2 / 침실 2 / 침대 2<br>
									· TV 및 WIFI 는 제공되지 않습니다.
									</div>
								<?php } ?>
							</dd>
						</dl> -->
					</div>		
				<?php } ?>
				<div class="roomInfoWrap" style="margin-top:20px;">
					<div class="roomInfo_con01">
						<dl class="roomInfo">
							<dt><img src="/html/images/room00/roomInfo_01.svg"></dt>
							<dd>
								<div class="roomInfo_text type">
									<div class="title">Type</div>
									<div class="text">
										
									</div>
								</div>
							</dd>
						</dl>
						<dl class="roomInfo">
							<dt><img src="/html/images/room00/roomInfo_02.svg"></dt>
							<dd>
								<div class="roomInfo_text">
									<div class="title">guests</div>
									<div class="text">
										
									</div>
								</div>
							</dd>
						</dl>						
					</div>
					<div class="roomInfo_con02">
						<dl class="roomInfo">
							<dt><img src="/html/images/room00/roomInfo_03.svg"></dt>
							<dd>
								<div class="roomInfo_text">
									<div class="title">amenities</div>
									<div class="text">
										
									</div>
								</div>
							</dd>
						</dl>
						<dl class="roomInfo">
							<dt><img src="/html/images/room00/roomInfo_04.svg"></dt>
							<dd>
								<div class="roomInfo_text roomInfo_text02">
									<div class="title">check in</div>
									<div class="text">
										오후 3시 이후
									</div>
								</div>
								<div class="roomInfo_text roomInfo_text02">
									<div class="title">check out</div>
									<div class="text">
										오전 11시 이전
									</div>
								</div>
							</dd>
						</dl>
						<!--dl class="roomInfo">
							<dt><img src="/html/images/room00/roomInfo_05.svg"></dt>
							<dd>
								<div class="roomInfo_text">
									<div class="title">Additional charge</div>
									<div class="text">
										기준인원 초과시 추가요금이 발생합니다.<br>										
										12개월 이상 ~ 성인 : 1인 20,000원<br>
										(12개월 미만 1명까지만 무료)
									</div>
								</div>
							</dd>
						</dl-->
					</div>
				</div>

				<div style="display: none; " id="room_des"></div>
				<script type="text/javascript">
				    ddnayo.room.info($("#room_des").get(0), {
				        "id_hotel": "100517"		/* 업소 코드 */
				        , "id_room_type": "<?php echo $typeno ?>"	/* 객실타입 코드 */
				    });
						$(window).on('load', function () {
							setTimeout(function () {
								var infoList = $('.room_data').find('li');
								var infoArr = [];
								infoList.each(function (i) {
									var $this = $(this);
									var value = $this.find('.data').html();
									infoArr.push(value);
								});
								$('.roomInfo_text').eq(0).find('.text').append(infoArr[0]);
								$('.roomInfo_text').eq(1).find('.text').append(infoArr[1]);
								$('.roomInfo_text').eq(2).find('.text').append(infoArr[2]);

								<?php if($roomnum == "01" || $roomnum == "02") { ?>
									//let type_change = document.querySelector(".roomInfo_con01 .roomInfo_text.type .text p:first-child");
									//type_change.innerHTML = "거실1+화장실3+침대룸2+놀이방1";
								<?php }?>
							}, 100);
						});
				</script>
				<style type="text/css">
					.roomInfo_con01 { display:table-cell; width:60%; vertical-align:top; padding-left: 10%; }
					.roomInfo_con02 { display:table-cell; width:40%; vertical-align:top;}
					.roomInfo { margin-bottom:30px;}
					.roomInfo:after {content:"";display:block;clear:both;}
					.roomInfo > dt { float:left;}
					.roomInfo > dt:after {content:""; margin:0 20px; height:35px; line-height:35px; border-right:2px dotted #333; vertical-align:top;}
					.roomInfo > dd { float:left; width:calc(100% - 100px);}
					.roomInfo_text { color:#000; }
					.roomInfo_text02 { display:inline-block; margin-right:30px;}
					.roomInfo_text .title { font-size:1em; line-height:1.5em; text-transform:uppercase; font-weight:600; margin-bottom:0.5em; }
					.roomInfo_text .text { font-size:1.15em; line-height:1.6em; }
					.roomInfoWrap { max-width: 1200px; margin: 0 auto; width :100%; }
					.roomWrapper > .cont01_02 {
						display: none;
					}
					@media (max-width: 1024px) {
						.roomInfo_con01 { padding-left: 5%; }
					}
					@media (max-width: 900px) {
						.roomInfo_con01 { width: 80%; display: block; margin: 0 auto; padding-left: 0; }
						.roomInfo_con02 { width: 80%; display: block; margin: 5% auto; }
					}
					@media (max-width: 500px) {
						.cont01_02 h1 {
							padding-left: 10px;
						}
						.cont01_02 h1::before {
    						margin-left: 124px !important;
						}
						.roomInfo_con01{
							width: 90%;
						}
						.roomInfo_con02{
							width: 90%;
						}
						.roomInfoWrap{
							width: 100%;
						}
					}
					.tag.left {
						display: none;
					}
				</style>
				<?php } ?>
				<div class="roomCon roomCon01">
					<a href="<? echo $siteinfo['reser_link'];?>" class="room_reser none1024"><img src="./images/common/btn_reser.png" alt="RESERVATION" class="vt"></a>
					<a href="<? echo $siteinfo['reser_link'];?>" target="_blank" class="room_reser in-block1024"><img src="./images/common/btn_reser.png" alt="RESERVATION" class="vt"></a>
					<img src="./images/room<?=$subNum?>/img01.jpg" alt="" class="room01_01">
				</div>
			</div>
			<div class="subCon subCon01">
				<div class="roomCon roomCon02">
					<div class="room02_01"></div>
					<div class="room02_02"><img src="./images/room<?=$subNum?>/img02.jpg" alt="" class="img_100"></div>
					<div class="room02_03">
						We want to ensure a memorable trip with perfect service and care.<br>
						From sunny to nature to cozy rooms and to a wide range of services,<br>
						we strive to meet your needs.
					</div>
				</div>
				<div class="roomCon roomCon03">
					<div class="room03_01"></div>
					<div class="room03_02"><img src="./images/room<?=$subNum?>/img03.jpg" alt="" class="img_100"></div>
					<div class="room03_03">DIOR</div>
				</div>
			</div>
		</div>
	</div>
<? include_once ("./include/footer.php"); ?>
