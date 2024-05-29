<?
$topArea="topArea";
$categoryNum="05";
$folderName="reser";
$control_header="sub";

$cate = $_GET[cate];

$subNum="$cate";
switch ($cate){

case "01":
$pageNum="51";
// $pageTitle01="예약안내";
// $pageTitle02="reservation";
break;

case "02":
$pageNum="52";
// $pageTitle01="실시간예약";
// $pageTitle02="reservation";
break;

}
?>

<? include_once ("./include/header.php"); ?>
	<? include_once ("./include/topArea.php"); ?>
	<? include_once ("./include/reser_$subNum.php"); ?>
<? include_once ("./include/footer.php"); ?>