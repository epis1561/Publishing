<?
$categoryName="reserve";
$categoryNum="05";
$folderName="reser";
$topArea="topArea";
$pageTitle01="information";

$cate = $_GET[cate];

switch ($cate){
	case ($cate == "01"):
		$pageNum="51";
		$subNum="01";
		$pageTitle02="예약안내";	
		$imgNum01="1";
	break;

	case ($cate == "02"):
		$pageNum="52";
		$subNum="02";		
		$pageTitle02="실시간예약";	
		$imgNum01="1";
	break;

	case ($cate == "03"):
		$pageNum="51";
		$subNum="03";		
		$pageTitle02="실시간예약";	
		$imgNum01="1";
	break;
}
?>
<? include_once ("./include/subTop.php"); ?>
<div id="wrap" class="sub <?=$folderName?> <?=$folderName?><?=$subNum?>">
	<? include_once ("./include/header.php"); ?>	
	<div class="subArea">
		<? include_once ("./include/topArea.php"); ?>
		<div id="contents">
			<div class="subCon subCon01">
				<? include_once ("./include/subNav.php"); ?>			
			</div>
			<? include_once ("./include/reser_$subNum.php"); ?>
		</div>
	</div>
<? include_once ("./include/footer.php"); ?>