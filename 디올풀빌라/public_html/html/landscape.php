<?
	$categoryName="about";
	$categoryNum="01";
	$folderName="about";
	$topArea="topArea_sub";
	$pageNum="12";
	$subNum="02";
	$pageTitle01="Exterior";
	$pageTitle02="외부";

?>
<? include_once ("./include/subTop.php"); ?>
<div id="wrap" class="sub <?=$folderName?> <?=$folderName?><?=$subNum?> subTop">
	<? include_once ("./include/header.php"); ?>
	<div class="subArea">
		<? include_once ("./include/topArea.php"); ?>
		<div id="contents">
			<div class="subCon subCon01">
				<? include_once ("./include/subNav.php"); ?>
			</div>
			<div class="subCon subCon01">
				<div class="land01">
					<img src="./images/about/img02_01.jpg" alt="" class="img_100">
				</div>
				<div class="land02">
					<div class="land02_01">
						<span>ㅡ</span><br>
						The perfect<br>
						combination of<br>
						comfortable space<br>
						and Nature<br>
					</div>
					<div class="land02_02"><img src="./images/about/img02_02.jpg" alt="" class="img_100"></div>
					<div class="land02_03">Unique appearance, memory of Nature</div>
				</div>
				<div class="land03">
					<div class="land03_01"><img src="./images/about/img02_03.jpg" alt="" class="img_100"></div>
					<div class="land03_02">
						<img src="./images/about/img02_04.png" alt="" class="land03_0201">
						<img src="./images/about/img02_05.jpg" alt="" class="land03_0202">
					</div>
				</div>
			</div>
		</div>
	</div>
<? include_once ("./include/footer.php"); ?>
