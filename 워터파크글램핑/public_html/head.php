<?php
include_once('./_common.php');
//include_once(G5_PATH."/html/include/subTop_board.php"); 
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
<?
$categoryName="Community";
$categoryNum="07";
$folderName="board";

$bo_table = $_GET[bo_table];
switch ($bo_table){
	
	case "m_notice":
		$pageNum="61";
		$subNum="01";
		$pageTitle01="공지사항";		
	break;

	case "p_notice":
		$pageNum="71";
		$subNum="01";
		$pageTitle01="공지사항";
		$pageTitle02="Forest <br>Notice";
		$pageTitle03="공지사항 &gt; ";
		$pageText="			
		";
	break;

	case "p_qna":
		$pageNum="72";
		$subNum="02";
		$pageTitle01="질문과답변";
		$pageTitle02="Forest <br>QnA";
		$pageTitle03="질문과답변 &gt; ";
		$pageText="
					";
	break;

	case "p_script":
		$pageNum="73";
		$subNum="03";
		$pageTitle01="여행후기";
		$pageTitle02="Forest <br>Script";
		$pageTitle03="여행후기 &gt; ";
		$pageText="			
		";
	break;

	case "p_photo":
		$pageNum="74";
		$subNum="04";
		$subTypo="yoon<br> &nbsp; board";
		$pageTitle01="포토갤러리";
		$pageTitle02="Forest <br>Photo";
		$pageTitle03="포토갤러리 &gt; ";
		$pageText="			
		";
	break;
}
?>
<div id="wrap" class="sub <?=$folderName?> <?=$folderName?><?=$subNum?>">
	<? include_once (G5_PATH."/temp/include/header.php"); ?>