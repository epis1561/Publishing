<?
$pensionTypo ="pension";
$subTypo01="pension";
$subTypo02="Rest assured rest and sensibility";
$mainTypo="<p>Romantic<br>ocean view</p>";

$meta_url ="http://xn--289a51ndzoiuc.kr/";
$meta_keywords="경주가볼만한곳, 경주펜션, 경주풀빌라, 경주신축펜션, 경주독채펜션, 경주단독펜션, 경주단체펜션, 경주가족펜션, 경주신축풀빌라, 경주독채풀빌라, 첨성대, 동궁과월지, 경주대릉원, 국립경주박물관, 석굴암, 월정교";
$meta_description="디올은 청주에 있는 프리미엄 독채풀빌라로, 지친 일상 속, 천년 신라의 도시 경주에서 '쉼'을 경험하세요.";

if ($folderName=='main') {
	$pageTitle_meta = '';
} else {
	$pageTitle_meta = ''.$pageTitle02.' > ';
}
$siteinfo_query =  "SELECT * FROM site_info WHERE num = '1'";
$siteinfo = sql_fetch($siteinfo_query);
?>
<title><?=$pageTitle_meta?><? echo $config['cf_title'];?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="robots" content="index, follow">

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
<meta property="og:image" content="/html/images/common/image.jpg?ver=1">

<meta name="twitter:card" content="<?=$meta_description?>">
<meta name="twitter:title" content="<? echo $config['cf_title'];?>">
<meta name="twitter:description" content="<?=$meta_description?>">
<meta name="twitter:image" content="/html/images/common/image.jpg?ver=1">
<meta name="twitter:domain" content="<?=$meta_url?>">
