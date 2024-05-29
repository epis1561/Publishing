<?
include_once('./_common.php');
$info = sql_fetch(" select * from site_info ");
$site_type = $info['site_type'];
?>
<? include_once("./".$site_type."/index.php"); ?>

