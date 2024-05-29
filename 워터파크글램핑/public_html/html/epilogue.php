<?
$topArea="topArea_sub01";
$categoryNum="01";
$folderName="epilogue";
$pageNum="11";
$subNum="01";
$pageTitle01="에필로그";
$pageTitle02="Epilogue";
$pageTitle03="아름다운 경치와 구름이 만드는 밀크키즈와의 추억";
$pageText01="
";
$control_header="sub";
?>
<? include_once ("./include/header.php"); ?>
	<? include_once ("./include/topArea.php"); ?>
	<div id="contents">
		<div class="about01_01 section_fadeIn section">
			<div class="content01">
				<div class="img">
					<img src="/html/images/main/img02.png" alt="" class="img img_100">
				</div>
				<div class="txt">
					<span>쥬쥬키즈풀빌라</span>
					<h1 class="calli">Juju Kids Poolvilla</h1>
					<p>
						열린 창문 틈새로 들어오는 청량한 바람, <br class="block800">
						산의 풀내음과 새소리로 시작하는 아침. <br class="block800">
						고요하게 움직이는 구름과 아이들의 웃음소리,<br>
						그 모습을 보고 미소 짓는 우리.. <br class="block800"><br class="block800">
						그 모든 행복한 순간을 쥬쥬키즈풀빌라가 만들어 드립니다.<br>
						미소 짓는 한순간만으로도 여행의 의미는 모두 충족됩니다. <br class="block800">
						언제라도 좋으니, 마음을 내려놓고 쥬쥬키즈풀빌라로 오세요.<br>
					</p>
				</div>
			</div>

			<div class="obj_01 obj">
				<img src="/html/images/common/obj01.png" alt="" class="img_00">
			</div>
			<div class="obj_02 obj">
				<img src="/html/images/common/obj02.png" alt="" class="img_00">
			</div>
			<div class="obj_04 obj">
				<img src="/html/images/common/obj04.png" alt="" class="img_00">
			</div>
		</div>

		<div class="about01_02">
      		<div class="typoWrap section_fadeIn section">
        		<p class="typoCon">
					JUJU<br>
					KIDS<br>
					POOLVILLA
				</p>
        		<img src="/html/images/epilogue/img01.jpg" class="typoImg img_100">
      		</div>
    	</div>
		<div class="about01_03 main01_02">
			<div class="img02_01 section_fadeIn delay section">
				<img src="/html/images/main/img03.jpg" alt="" class="img_00">
			</div>
		</div>

		<div class="about01_04 main01_03">
			<div class="right section_fadeIn delay section">
				<div class="logo_image">
					<img src="/html/images/common/logo_img.png" alt="">
				</div>
			</div>
			<div class="left section_fadeIn delay section">
				<img src="/html/images/main/img04.jpg" alt="" class="img_100">
			</div>
		</div>

		<div class="about01_05 section_fadeIn delay section">
			<img src="/html/images/epilogue/img04.jpg" alt="" class="img_00">
		</div>
			<script>
				function naverMap() {
						window.open("https://m.map.naver.com/directions/?ename=<? echo $info['map_title'];?>&ey=<? echo $info['map_y'];?>&ex=<? echo $info['map_x'];?>");
					}
			</script>
		<div class="subCon about01_05 map02">
			<div class="txt">
				<span>오시는길</span>
				<h1 class="calli">Map</h1>
			</div>
			
			<div class="map02_01">
				<dl class="reser_dl section_fadeIn delay section">
					<dt><span class="dl_title">네비게이션 주소</span></dt>
					<dd>
						<div>
							<? echo $info['footer_address'] ?> <? echo $info['site_name'] ?>
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
	</div>
<? include_once ("./include/footer.php"); ?>