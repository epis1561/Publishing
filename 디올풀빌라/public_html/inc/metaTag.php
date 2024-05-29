<?
$info = sql_fetch(" select * from site_info ");
$open = $info['open'];
$open_ver = $info['open_ver'];
$meta_url = $info['meta_url'];
$meta_keywords = $info['meta_keywords'];
$meta_description = $info['meta_description'];
if ($folderName=='main') {
	$pageTitle_meta = '';
} else {
	$pageTitle_meta = ''.$pageTitle02.' > ';
}
$subTypo01 = 'Sky camping';
//$pensionId = '7041';
/*
$roomrid['01'] = '85468';
$roomrid['02'] = '85469';
$roomrid['03'] = '85470';
$roomrid['04'] = '85471';
$roomrid['05'] = '85472';

$roomtid['01'] = '52810';
$roomtid['02'] = '52811';
$roomtid['03'] = '52812';
$roomtid['04'] = '52813';
$roomtid['05'] = '52814';
*/

$siteinfo_query =  "SELECT * FROM site_info WHERE num = '1'";
$siteinfo = sql_fetch($siteinfo_query);
?>
<title><?=$pageTitle_meta?><? echo $config['cf_title'];?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="robots" content="<?=$open?>">
<meta name ="format-detection" content ="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.5, minimum-scale=1, user-scalable=yes">
<meta name="keywords" content="<?=$meta_keywords?>">
<meta name="description" content="<?=$meta_description?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<? echo $config['cf_title'];?>">
<meta property="og:description" content="<?=$meta_description?>">
<meta property="og:url" content="<?=$meta_url?><?=$_SERVER ['REQUEST_URI'];?>">
<meta property="al:web:url" content="<?=$meta_url?><?=$_SERVER ['REQUEST_URI'];?>">
<link rel="canonical" href="<?=$meta_url?>">
<meta property="og:image" content="/html/images/common/image.jpg?ver=<?=$open_ver?>">

<meta name="twitter:card" content="<?=$meta_description?>">
<meta name="twitter:title" content="<? echo $config['cf_title'];?>">
<meta name="twitter:description" content="<?=$meta_description?>">
<meta name="twitter:image" content="/html/images/common/image.jpg?ver=<?=$open_ver?>">
<meta name="twitter:domain" content="<?=$meta_url?>">
<? echo $info['webmaster'];?>

<meta name="naver-site-verification" content="3272b444efd932de30761e3660e716fb06b1f85b" />