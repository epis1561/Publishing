<? include_once ("./include/subTop.php"); ?>
<?
	$categoryName="board";
	$categoryNum="06";
	$folderName="board";
	$imgNum01="1";

$cate = $_GET[cate];
//$cate = $_POST[cate];

switch ($cate){
	case "notice":
		$pageNum="61";
		$subNum="01";
		$pageTitle01="board";
		$pageTitle02="공지사항 -";	
		$boardName="p_notice";
	break;

	case "qna":
		$pageNum="62";
		$subNum="02";
		$pageTitle01="board";
		$pageTitle02="질문과답변 -";
		$boardName="p_qna";
	break;

	case "script":
		$pageNum="63";
		$subNum="03";
		$pageTitle01="board";
		$pageTitle02="여행후기 -";	
		$boardName="p_script";
	break;

	case "photo":
		$pageNum="64";
		$subNum="04";
		$pageTitle01="board";
		$pageTitle02="포토갤러리 -";
		
		$boardName="p_photo";
	break;
}	
?>
<div id="wrap" class="sub <?=$folderName?> <?=$folderName?><?=$subNum?>">
	<? include_once ("./include/header.php"); ?>	
	<div id="contents_layer" class="subArea">
		<div class="subCon topArea section">
			<h2 class="subTypo"><?=$subTypo?></h2>
			<ul class="lightslider">
				<?
					for($i = 1 ; $i <= $imgNum01 ; $i++) {
						$num = sprintf('%02d',$i);
						if($mobile){
							echo "<li><img src='./images/".$folderName."/m/".$subNum."_".$num.".jpg'></li>";
						}else{
							echo "<li><img src='./images/".$folderName."/".$subNum."_".$num.".jpg'></li>";
						}
					}
				?>
			</ul>
			<p class="btn_scroll_box"><a href="#contents" class="btn_scroll"><img src="./images/common/btn_scroll.png"></a></p>
		</div>
		<div id="contents" class="subCon subCon01">
			<? include_once ("./include/subNav.php"); ?>
			<h3 class="subTitle">
				<span class="title01"><?=$pageTitle01?> <span>[<?=$pageTitle02?>]</span></span>
				<span class="title02"><?=$subTypo01?></span>
			</h3>
		</div>
		<div class="subCon">
			<div class="boardCon">
				<!--iframe src="../bbs/board.php?bo_table=<?=$boardName?>" class="board_frame" frameborder="0" onload="autoResize(this)" scrolling="no" allowtransparency="true"></iframe-->
			</div>
			<div class="boardImg"><img src="./images/board/img01.jpg" class="img_100"></div>
		</div>
	</div>
<? include_once ("./include/footer.php"); ?>