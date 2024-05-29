<?
$topArea="topArea";
$categoryNum="06";
$folderName="board";
$control_header="sub";

$bname = $_GET[bname];

switch ($bname){

case "notice":
	$pageNum="61";
	$subNum="01";
	$blink="p_notice";
	$pageTitle01="공지사항";
	$pageTitle02="notice";	
break;

case "qna":
	$pageNum="62";
	$subNum="02";
	$blink="p_qna";
	$pageTitle01="예약문의";
	$pageTitle02="Q &amp; A";
	
break;

case "script":
	$pageNum="63";
	$subNum="03";
	$blink="p_script";
	$pageTitle01="여행후기";
	$pageTitle02="script";
	
break;

case "photo":
	$pageNum="64";
	$subNum="04";
	$blink="p_photo";
	$pageTitle01="포토갤러리";
	$pageTitle02="photo gallery";
	
break;

}
?>

<? include_once ("./include/header.php"); ?>
	<? include_once ("./include/topArea.php"); ?>
	<script>
		function autoResize(i)
		{
			var iframeHeight=(i).contentWindow.document.body.scrollHeight;
			(i).height=iframeHeight+20;
		}
	</script>
	<div id="contents">
		<div class="section">
			<div class="boardCon">
				<iframe src="/bbs/board.php?bo_table=<?=$blink?>" onload="autoResize(this)" title="실시간예약" frameborder="0" scrolling="no"></iframe>
			</div>
		</div>
	</div>
<? include_once ("./include/footer.php"); ?>