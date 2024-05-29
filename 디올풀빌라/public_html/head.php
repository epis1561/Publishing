<?php
include_once('./_common.php');
include_once ("../html/include/subTop.php");
include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

$ca_id = $_GET['ca_id'];
$sql = " select * from g5_shop_category where ca_id='$ca_id'";
$result = sql_query($sql);
$row=sql_fetch_array($result);
?>
<? include_once (G5_PATH."/html/include/subTop.php"); ?>
<?
$categoryName="Community";
$categoryNum="06";
$folderName="board";
$topArea="topArea";

$bo_table = $_GET[bo_table];
switch ($bo_table){
	case "p_notice":
		$pageNum="61";
		$subNum="01";
		$pageTitle01="Notice";
		$pageTitle02="공지사항";
	break;

	case "p_qna":
		$pageNum="62";
		$subNum="02";
		$pageTitle01="Board-QnA";
		$pageTitle02="질문과답변 -";
		$boardName="p_qna";
	break;

	case "p_script":
		$pageNum="63";
		$subNum="03";
		$pageTitle01="Board-Story";
		$pageTitle02="여행후기 -";
		$boardName="p_script";
	break;

	case "p_photo":
		$pageNum="64";
		$subNum="04";
		$pageTitle01="Board-Gallery";
		$pageTitle02="포토갤러리 -";

		$boardName="p_photo";
	break;
}
?>
<div id="wrap" class="sub <?=$folderName?> <?=$folderName?><?=$subNum?>">
	<?php if(!$url) {?>
	<? include_once (G5_PATH."/html/include/header.php"); ?>
	<?php } ?>
	<div id="contents_layer" class="subArea">
	<?php if(!$url) {?>
		<? include_once (G5_PATH."/html/include/topArea.php"); ?>
		<div class="subCon subCon01">
			<? include_once (G5_PATH."/html/include/subNav.php"); ?>
		</div>
		<?php } ?>
		<div class="subCon">
			<div class="boardCon">
