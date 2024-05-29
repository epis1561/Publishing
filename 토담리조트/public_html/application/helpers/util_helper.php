<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
function url_explode($url, $key) {
	$cnt = count($url);

	for ($i = 0; $cnt > $i; $i++) {
		if ($url[$i] == $key) {
			$k = $i + 1;
			return $url[$k];
		}
	}
}

function segment_explode($seg) {
	// 세그먼트 앞 뒤 "/" 제거 후 uri를 배열로 반환

	$len = strlen($seg);

	if (substr($seg, 0, 1) == '/') {
		$seg = substr($seg, 1, $len);
	}

	$len = strlen($seg);

	if (substr($seg, -1) == '/') {
		$seg = substr($seg, 0, $len - 1);
	}

	$seg_exp = explode("/", $seg);
	return $seg_exp;
}
