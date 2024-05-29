<?
$topArea="topArea";
$categoryNum="05";
$folderName="reser";
$pageNum="53";
$subNum="03";
$pageTitle01="바움하우스 오시는길";
$pageTitle02="Directions";
?>

<? include_once ("./include/header.php"); ?>
	<? include_once ("./include/topArea.php"); ?>
	<div id="contents">
		<div class="subCon map01">
			<div class="map01_01">
				<img src="./images/reser/img03_01.jpg" class="img_100 section_fadeIn section">
				<div class="textBox_03">
					<dl class="con_text02 section_fadeIn delay section">
						<dt class="boxShadow">Directions</dt>
						<dd>
							<div class="mapAdd">
								네비게이션 주소 : <br>
								<p><? echo $info['footer_address'] ?></p>
							</div>
						</dd>
					</dl>
				</div>
			</div>
			<div class="map01_02 section_fadeIn delay02 section">
				<div class="mapFrame">
					<iframe src="http://gogo-people.com/map/naver03.php?pen_name=<? echo $info['map_title'];?>&lat=<? echo $info['map_y'];?>&lng=<? echo $info['map_x'];?>" title="<? echo $info['map_title'];?> 오시는길 지도"></iframe>
				</div>
			</div>
		</div>
		<div class="subCon map02">
			<dl class="reser_dl section_fadeIn section">
				<dt><span class="no">01.</span>자가용 이용시</dt>
				<dd style="margin-bottom:5em;">
					<dl class="reser_con">
						<dt>서울 방향에서 오실 때</dt>
						<dd>
							<p>서울 - 경부고속도로 - 대전 - 진주간고속도로 - 남해고속도로 - 곤양IC - 서포 수협삼거리에서 우회전 - 다맥어촌 체험마을 및 펜션 이정표 - 펜션마을 삼거리에서 좌회전 - 제비길 500m - 바움하우스</p>
						</dd>
						<dt>부산 방향에서 오실 때</dt>
						<dd>
							<p>부산 - 남해고속도로 진주방향 - 곤양IC(사천IC) - 서포 수협삼거리에서 우회전 - 다맥어촌 체험마을 및 펜션 이정표 - 펜션마을 삼거리에서 좌회전 - 제비길 500m - 바움하우스</p>
						</dd>
						<dt>광주 방향에서 오실 때</dt>
						<dd>
							<p>남해고속도로 부산방향 - 곤양IC - 서포 수협삼거리에서 우회전 - 다맥어촌 체험마을 및 펜션 이정표 - 펜션마을 삼거리에서 좌회전 - 제비길 500m - 바움하우스</p>
						</dd>
					</dl>
					<div>※ 카카오톡, T맵을 이용하시면 편리합니다.</div>
				</dd>
				<dt><span class="no">02.</span>대중교통 이용시</dt>
				<dd>
					진교터미널(055-883-8264) 또는 진주터미널(1688-0841)에서 서포까지 오시면 픽업합니다.<br>
					KTX 이용 시 : 서울 - ktx - 진주 또는 순천 - 픽업
				</dd>
			</dl>
		</div>
		<div class="subCon map03">
			<div class="map03_01 section_fadeIn section">
				<img src="./images/reser/img03_02.jpg" class="img_100">
			</div>
			<div class="map03_02 section_fadeIn delay02 section">
				<p class="baum_typo"><span class="color01">n</span>ature. <span class="color02">b</span>each. <span class="color03">p</span>ool villa</p>
			</div>
		</div>
	</div>
<? include_once ("./include/footer.php"); ?>