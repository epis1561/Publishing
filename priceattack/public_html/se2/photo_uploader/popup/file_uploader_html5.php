<?php
 	$sFileInfo = '';
	$headers = array();
	 
	foreach($_SERVER as $k => $v) {
		if(substr($k, 0, 9) == "HTTP_FILE") {
			$k = substr(strtolower($k), 5);
			$headers[$k] = $v;
		} 
	}
	
	$file = new stdClass;
	$file->name = rawurldecode($headers['file_name']);
	$file->size = $headers['file_size'];
	$file->content = file_get_contents("php://input");
	$time = time();
	$file_ext = explode(".", strrev($file -> name));
	$ext = strtolower(strrev($file_ext[0]));
	$allow_file = array("jpg", "png", "gif", "bmp");
	if (!in_array($ext, $allow_file)) {
		echo "NOTALLOW_".$file->name;
		exit;
	}
	$rand = rand('10000', '99999');
	$uploadDir = '../../upload/'.date("Ym", $time).'/';
	if(!is_dir($uploadDir)){
		mkdir($uploadDir, 0777);
	}
	
	$newPath = $uploadDir.iconv("utf-8", "cp949", $time."_".$rand.".".$ext);
	
	if(file_put_contents($newPath, $file->content)) {
		$sFileInfo .= "&bNewLine=true";
		$sFileInfo .= "&sFileName=".$file->name;
		$sFileInfo .= "&sFileURL=/se2/upload/".date("Ym", $time)."/".$time."_".$rand.".".$ext;
	}
	
	echo $sFileInfo;
 ?>
