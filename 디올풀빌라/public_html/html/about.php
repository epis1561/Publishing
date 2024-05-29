<?
	$categoryName="about";
	$categoryNum="01";
	$folderName="about";
	$topArea="topArea";
	$pageNum="11";
	$subNum="01";
	$pageTitle01="Pension About";
	$pageTitle02="펜션소개";
	$imgNum01="01";
?>
<style>
	.subTitle {
		display: none;
	}	
	.subNav {
		margin-bottom: 0 !important;
	}
</style>
<? include_once ("./include/subTop.php"); ?>
<!-- bxslider -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<div id="wrap" class="sub <?=$folderName?> <?=$folderName?><?=$subNum?>">
	<? include_once ("./include/header.php"); ?>
	<div class="subArea">
		<? include_once ("./include/topArea.php"); ?>
		<div id="contents">
			<div class="subCon subCon01">
				<? include_once ("./include/subNav.php"); ?>
			</div>
			<div class="subCon subCon01">
				<div class="aboutCon01">
					<!-- <div class="h_name"></div> -->
					<div class="cont01box none1024">
						<div class="cont01_01">
							<h2>
								𝒚𝒐𝒖 𝒂𝒏𝒅 𝒎𝒆, 𝒐𝒖𝒓 <i>Dior</i>
							</h2>
							<p>
								디올풀빌라는 경북 경주 물천저수지와 숲속으로 어우러진<br>
								프리미엄 단독 독채 힐링 감성숙소 입니다.<br>
								잔잔한 물과 숲속의 고요함을<br>
								느끼시며 일상에서 지친 모든 분들이<br>
								온전한 휴식을 가지시길 바랍니다.
							</p><br><br><br><br><br><br>
							<p class="none1024" style="color: #fff>
							세련되고 깔끔한 인테리어,
								아무런 방해없는 프라이빗하고 넓은공간<br>
								사계절 즐길 수 있는 최신식 미온수영장<br>
								우리아이들을 위한 놀이시설까지<br>
								어느 하나 빠짐없이 온전한 행복을 가져가시는 것이<br>
								디올풀빌라의 바램입니다.<br>
							</p>
						</div>
						<div class="cont01_02">
							<h1>pension<br>about</h1>
							<img src="./images/about/img01_01.jpg" alt="">
						</div>
					</div>

					<div class="cont01box block1024">
						<div class="cont01_02">
							<h1>pension<br>about</h1>
							<img src="./images/about/img01_01.jpg" alt="">
						</div>
						<div class="cont01_01">
							<h2 class="none1024">𝒚𝒐𝒖 𝒂𝒏𝒅 𝒎𝒆, 𝒐𝒖𝒓 <i>Dior</i></h2>
							<p>
							디올풀빌라는 경북 경주 물천저수지와 숲속으로 어우러진<br>
								프리미엄 단독 독채 힐링 감성숙소 입니다.<br>
								잔잔한 물과 숲속의 고요함을<br>
								느끼시며 일상에서 지친 모든 분들이<br>
								온전한 휴식을 가지시길 바랍니다.
							</p><br><br>
							<p class="none1024" style="color: #fff;">
								세련되고 차분한 인테리어,
								아무런 방해없는 프라이빗하고 넓은공간<br>
								사계절 즐길 수 있는 최신식 미온수영장<br>
								우리아이들을 위한 놀이시설까지<br>
								어느 하나 빠짐없이 온전한 행복을 가져가시는 것이<br>
								디올풀빌라의 바램입니다.<br>
							</p>
						</div>
					</div>
				</div>

				<div class="aboutCon02">
					<img class="about_eng01" src="/html/images/common/eng01.png" alt="">
					<div class="spcont">
						<div class="sp_slide">
							<div class="sp_slide_item">
								<div class="spbox">
									<h2>room</h2>
									<img class="none1024" src="/html/images/main/w_circle.png" alt="">
									<a href="/html/room.php?roomnum=01">디올독채</a>
								</div>
								<img src="/html/images/about/room01.jpg" alt="" class="size">
							</div>				
							<!-- <div class="sp_slide_item">
								<div class="spbox">
									<h2>room</h2>
									<img class="none1024" src="/html/images/main/w_circle.png" alt="">
									<a href="/html/room.php?roomnum=02">WHITE</a>
								</div>
								<img src="/html/images/about/room02.jpg" alt="">
							</div>				
							<div class="sp_slide_item">
								<div class="spbox">
									<h2>room</h2>
									<img class="none1024" src="/html/images/main/w_circle.png" alt="">
									<a href="/html/room.php?roomnum=03">GRAY</a>
								</div>
								<img src="/html/images/about/room03.jpg" alt="">
							</div>				
							<div class="sp_slide_item">
								<div class="spbox">
									<h2>room</h2>
									<img class="none1024" src="/html/images/main/w_circle.png" alt="">
									<a href="/html/room.php?roomnum=04">OPERA(I~IV)</a>
								</div>
								<img src="/html/images/about/room04.jpg" alt="">
							</div>	
							<div class="sp_slide_item">
								<div class="spbox">
									<h2>room</h2>
									<img class="none1024" src="/html/images/main/w_circle.png" alt="">
									<a href="/html/room.php?roomnum=05">CABANA(I~IV)</a>
								</div>
								<img src="/html/images/about/room05.jpg" alt="">
							</div>				 -->
						</div>
					</div>
					<!-- <script>
						$('.sp_slide').bxSlider({
							pager: true,
							loop: true,
							auto: true,
							// moveSlides: 1,
							minSlides: 1,
							maxSlides: 1,
							// slideWidth: 500,
							slideMargin: 0,
							controls: false,
						});
					</script> -->
				</div>
				<dl class="map_dl section">
					<dt>
						<img src="./images/about/mapTitle.png" alt="MAP 찾아오시는 길 안내" class="none1024 img_100">
						<img src="./images/about/mapTitle_m.png" alt="MAP 찾아오시는 길 안내" class="block1024 img_100">
					</dt>
					<dd>
						<div class="map_add">
							<?php echo $siteinfo['footer_address']; ?>
						</div>
					</dd>
				</dl>
				<div class="mapCon section">
					<div class="mapFrame">
						<iframe src="http://gogo-people.com/map/naver03.php?pen_name=<?php echo $siteinfo['map_title']; ?>&lat=<?php echo $siteinfo['map_y']; ?>&lng=<?php echo $siteinfo['map_x']; ?>"></iframe>
					</div>
					<dl class="map_text">
						<dt>자가용 이용시</dt>
						<dd>
							<div class="map_add02">네비게이션 주소: <?php echo $siteinfo['footer_address']; ?></div>							
							<!--div>
								<strong>올림픽대로</strong>
								<p>올림픽대로 - 서울~춘천고속도로 진입 - 화도IC(수동/마석방면 우측 고속도로 출구) - 46번 국도 이용 - 금남IC - 새터사거리 - 청평 - 가평오거리 - 북면방향 - 목동삼거리에서 명지산, 적목리방향 좌회전 후 직진 - 백둔리 삼거리 직진 - 논남삼거리에서 좌회전 다리 건너 직진 - 200m직진 - 신비펜션</p>
							</div>
							<div>
								<strong>강변북로</strong>
								<p>강변북로 - 천호대교 - 올림픽대로 - 서울~춘천고속도로 진입 - 화도IC(수동/마석방면 우측 고속도로 출구) - 46번 국도 이용 - 금남IC - 새터사거리 - 청평 - 가평오거리 - 북면방향 - 목동삼거리에서 명지산, 적목리방향 좌회전 후 직진 - 백둔리 삼거리 직진 - 논남삼거리에서 좌회전 다리 건너 직진 - 200m직진 - 신비펜션</p>
							</div>
							<div>
								<strong>자유로/내부순환도로</strong>
								<p>자유로/내부순환도로 - 성산대교분기점(내부순환도로이용) - 상암 - 정릉터널 - 길음램프(마장동/동부간선도로) - 동부간선도로 - 신내동 분기점 - 중부고속도로로 빠짐(4km진행) - 퇴계IC - 일동/포천방향으로 2.5km 진행 - 진관IC - 호평, 마석, 춘천. 청평방면으로 빠짐 - 자동차전용도로 - 평내 - 마석 - 대성리 - 청평 - 가평오거리 - 북면방향 - 목동삼거리에서 명지산, 적목리방향 좌회전 후 직진 - 백둔리 삼거리 직진 - 논남삼거리에서 좌회전 다리 건너 직진 - 200m직진 - 신비펜션</p>
							</div>
							<div>
								<strong>중부고속도로/경부고속도로(구리.평내.마석.청평경유)</strong>
								<p>중부고속도로 - 외곽순환도로(구리방면) - 하남/양평/팔당 - 강변북로 - 천호대교 - 올림픽대로 - 서울~춘천고속도로 진입 - 화도IC(수동/마석방면 우측 고속도로 출구) - 46번 국도 이용 - 금남IC - 새터사거리 - 대성리 - 청평 - 가평오거리 - 북면방향 - 목동삼거리에서 명지산, 적목리방향 좌회전 후 직진 - 백둔리 삼거리 직진 - 논남삼거리에서 좌회전 다리 건너 직진 - 200m직진 - 신비펜션</p>
							</div>
							<div>
								<strong>중부고속도로/경부고속도로(장현.광릉.내촌경유)</strong>
								<p>중부고속도로/경부고속도로 - 판교/구리 - 퇴계IC(일동방향) - 퇴계IC에서 진건 삼거리(의정부, 포천 방면) 빠짐 - 진건삼거리 (47번국도 이용) - 광릉내 일동방면 - 장현 - 광릉내(베어스타운스키장) - 내촌 - 신팔IC에서 청평,가평,춘천 방면으로 빠짐 - 대성리 - 청평 - 가평오거리 - 북면방향 - 목동삼거리에서 명지산, 적목리방향 좌회전 후 직진 - 백둔리 삼거리 직진 - 논남삼거리에서 좌회전 다리 건너 직진 - 200m직진 - 신비펜션</p>
							</div>
							<div>
								<strong>중앙고속도로(춘천)</strong>
								<p>춘천 - 경춘국도 - 강촌 - 가평대교 - 청평 - 가평오거리 - 북면방향 - 목동삼거리에서 명지산, 적목리방향 좌회전 후 직진 - 백둔리 삼거리 직진 - 논남삼거리에서 좌회전 다리 건너 직진 - 200m직진 - 신비펜션</p>
							</div-->
						</dd>
						<!--dt>대중교통 이용시</dt>
						<dd>
							<div>
								<strong>버스편</strong>
								<p>
									가평버스터미널 적목리행버스 타세요. (가평에서 펜션까지는 30km 입니다.)<br>
									내리실 곳은 논남종점 다음정거장 강씨봉휴양림입구에서 내리시면 오른쪽에 신비펜션 입니다.<br>
									청량리환승센타에서 1330ㅡ3 .1330ㅡ2 .8004번 타시고 가평버스터미널에서 내리셔서 적목리행버스로 갈아타세요.<br><br>
									가평버스터미널(031-582-2308)<br>
									ㆍ전철역 : 12:45, 14:20, 15:40, 17:00, 19:10<br>
									ㆍ버스터미널 : 12:50, 14:25, 15:45, 17:05, 19:15<br>
									ㆍ퇴실 시 : 07:00, 09:40, 10:30, 11:20
								</p>
							</div>
							<div>
								<strong>전철편</strong>
								<p>
									서울에서 용산/ 왕십리/청량리에서 ITX 출발<br>
									상봉역/망우역에서 전철 출발<br>
									가평역 건너 또는 버스터미널에서 적목리 용수동행을 타시고 내리는곳 강씨봉 자연휴양림 하차하시면<br>
									2분거리에 신비펜션입니다.<br>
									가평역출발(11시15분, 13시25분, 16시05분, 16시45분, 19시15분)<br>
									펜션에서 가평역( 11시10분, 13시20분, 15시40분, 16시, 16시20분 18시 )<br>
								</p>
							</div>
							<div>
								<strong>픽업안내</strong>
								<p>
									씨씨할인마트에서 물건을 구입하시면 마트에서 입실,퇴실이 무료로 픽업가능합니다.<br>
									마트전화번호(010-5265-9717)
								</p>
							</div>
						</dd-->
					</dl>
				</div>
			</div>
		</div>
	</div>
<? include_once ("./include/footer.php"); ?>
