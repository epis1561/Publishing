<?
 	$pageName = $_SERVER['PHP_SELF']; 
 
	$pageNameLength = strlen($pageName);
	$splitNameIndex = $pageNameLength - strrpos($pageName, "/")-1;
	$pageName=substr($pageName, -$splitNameIndex,-4);
 
?>