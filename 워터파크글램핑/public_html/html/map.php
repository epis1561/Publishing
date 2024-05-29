<?
$topArea="topArea";
$categoryNum="05";
$folderName="reser";
$pageNum="53";
$subNum="03";
$pageTitle01="오시는길";
$pageTitle02="Directions";
$control_header="sub";
?>

<? include_once ("./include/header.php"); ?>
	<? include_once ("./include/topArea.php"); ?>
	<script>
        function naverMap() {
            window.open("https://m.map.naver.com/directions/?ename=<? echo $info['map_title'];?>&ey=<? echo $info['map_y'];?>&ex=<? echo $info['map_x'];?>");
        }
    </script>
	<div id="contents">
		<!-- <div class="subCon map01">
			<div class="img_bg section_fadeIn section"></div>
		</div> -->
		<div class="subCon map02">
			<div class="map02_01">
				<dl class="reser_dl section_fadeIn delay section">
					<dt><span class="dl_title">네비게이션 주소</span></dt>
					<dd>
						<div>
							<? echo $info['footer_address'] ?>
						</div>
						<a href="javascript:naverMap();" class="n_nav"><img src="/html/images/common/n_nav.png" alt=""></a>
					</dd>
				</dl>
			</div>
			<div class="map02_02 section_fadeIn delay02 section">
				<div class="mapFrame">
					<iframe src="http://gogo-people.com/map/naver03.php?pen_name=<? echo $info['map_title'];?>&lat=<? echo $info['map_y'];?>&lng=<? echo $info['map_x'];?>" title="<? echo $info['map_title'];?> 오시는길 지도"></iframe>
				</div>
			</div>
		</div>
		<!-- <div class="subCon map03">
			<div class="img_bg section_fadeIn section"></div>
		</div> -->
		<div class="subCon map04">
			<dl class="reser_dl section_fadeIn section">
				<dt><span class="dl_title">자가용 이용시</span></dt>
				<dd style="margin-bottom:5em;">
					<dl class="reser_con">
						<dt><펜션 주소></dt>
						<dd>
							<p><? echo $info['footer_address'] ?></p>
						</dd>

						<dt><화도 TG 진출 시></dt>
						<dd>
							창현교차로에서 ‘덕소, 월문, 수동, 마석’ 방면으로 우측방향 -
							경춘북로를 따라 약2.5km 이동 - 모란터널 진입 후 경춘북로를 따라
							약 5km 이동 - 금남IC에서 ‘춘천, 청평’ 방면으로 좌측방향 -
							경춘북로를 따라 약 23.5km 이동 - 가평역입구에서
							‘명지산, 연인산, 가평군청, 가평군의회’ 방면으로 좌회전 -
							석봉로를 따라 약 500m 이동 - 대곡교차로에서 ‘북면, 경반리,
							종합운동장’ 방면으로 좌측방향 - 문화로를 따라 약 2.5km 이동 -
							‘북면, 명지산, 연인산’ 방면으로 좌회전 - 가화로를 따라
							약 21km 이동 후 우회전 - 가화로를 따라 약 200m 이동 - 밀크키즈풀빌라
						</dd>

						<dt><남춘천 TG 진출 시></dt>
						<dd>
							서울양양고속도로를 따라 약 200m 이동 - 남춘천IC 삼거리에서
							‘양평, 춘천, 비발디파크’ 방면으로 우회전 - 김유정로를 따라
							약 2km 이동 - 덕만이터널 진입 후 70번 지방도를 따라약 7km 이동 -
							팔미교차로에서 ‘서울, 가평’ 방면으로 좌회전 - 경춘로를 따라
							약 1.6km 이동 - 의암터널 진입 후 경춘로를 따라 약 13km 이동 -
							‘명지산, 연인산, 북면’ 방면으로 우측방향 - 경춘로를 따라
							약 4.7km 이동 후 우회전 - 정간내로를 따라 약 60m 이동 후 좌회전 -
							정간내로를 따라 약 230m 이동 후 우회전 - 가화로를 따라
							약 700m 이동 - 신미식품앞삼거리에서 우회전 - 가화로를 따라
							약 21km 이동 후 우회전 - 가화로를 따라 약 200m 이동 - 밀크키즈풀빌라
						</dd>

						<dt><남양평하이패스 TG 진출 시></dt>
						<dd>
							양근대교길을 따라 약 29km 이동 - 설악IC교차로에서 ‘청평’ 방면으로
							좌회전 - 유명로를 따라 약 1km 이동 후 직진 - 75번 국도를 따라
							약 6km 이동 - ‘가평’ 방면으로 우회전 - 호반로를 따라 약 10km 이동 -
							가평역삼거리에서 ‘가평역’ 방면으로 좌회전 - 문화로를 따라
							약 140m 이동 - ‘가평군청, 북면’ 방면으로 우회전 - 문화로를
							따라 약 3km 이동 - ‘북면, 명지산, 연인산’ 방면으로 좌회전 -
							가화로를 따라 약 21km 이동 후 우회전 - 가화로를 따라
							약 200m 이동 - 밀크키즈풀빌라
						</dd>
					</dl>
				</dd>
			</dl>
			<dl class="reser_dl section_fadeIn section" style="margin-top: 50px;">
				<dt><span class="dl_title">대중교통 이용시</span></dt>
				<dd>
					<dl>
						<dt><택시 이용시></dt>
						<dd>가평터미널 - 택시 탑승 - 약 43분 소요 - 밀크키즈풀빌라 (택시비 약 31,000원)</dd>
						<br>

						<dt><기차 이용시></dt>
						<dd>청량리역 - 경춘천열자(가평/청평/춘천행) - 가평역하차 - 가평터미널로 이동 가평터미널 - 명지산, 적목리, 논남리행 마을버스나 렌트카, 택시, 픽업이용</dd>
						<br>

						<dt><시외버스 이용시> </dt>
						<dd>
						상봉동터미널/동서울(구의동)터미널 - 춘천행버스 - 가평터미널하차 (배차시간은 약 15~20분 사이입니다.) 약 1시간10~20분 소요 
						- 명지산, 적목리, 논남리행 마을버스나 렌트카, 택시, 픽업이용<br>
						*상봉동 터미널에서 목동행버스가 있으나 자주 있는 것이 아니니 반드시 시간을 확인 하시기 바랍니다.
						</dd>
						<br>

						<dt><시내버스 이용시></dt>
						<dd>
						청량리/구리/마석/대성리/청평을 경유하는 1330번 시내버스를 이용하여 가평까지 이동하세요.<br>
						명지산, 적목리, 논남리행 마을버스나 렌트카, 택시, 픽업이용<br>
						※대중교통을 이용하시는 경우 버스시간표나 기차 시간표는 각 터미널이나 기차역 사이트에서 확인해 주세요.​※
						</dd>
					</dl>
				</dd>
			</dl>
		</div>
		<div class="subCon map05">
			<div class="img_bg section_fadeIn section"></div>
		</div>
	</div>
<? include_once ("./include/footer.php"); ?>