<?
$sub_menu = "400200";
include_once("./_common.php");

auth_check($auth[$sub_menu], "r");

if ($imode == "delete") {
	$sql = " delete from yj_room
			where num='$num'
							";
	sql_query($sql);
	goto_url('./payment.php');
}

// staywith id 저장
$sql1 = " update g5_config
						set cf_4		= '$reserv_type',
								cf_5		= '$staywith_id'
								";
sql_query($sql1);

// 객실정보 저장
for ($i=0; $i<count($num); $i++)
{
	$row = sql_fetch(" select * from yj_room where num='$num[$i]' ");
	if ($row[num]) {
		$sql = "update yj_room
							set roomnum					= '$roomnum[$i]',
									view_ok					= '$view_ok[$i]',
									roomno					= '$roomno[$i]',
									roomname				= '$roomname[$i]',
									roomgroup				= '$roomgroup[$i]',
									pyoung					= '$pyoung[$i]',
									mancount				= '$mancount[$i]',
									mancount_max		= '$mancount_max[$i]',
									title1					= '$title1',
									pay_normal			= '$pay_normal[$i]',
									pay_fri				= '$pay_fri[$i]',
									pay_week				= '$pay_week[$i]',
									title2					= '$title2',
									pay_jun_normal	= '$pay_jun_normal[$i]',
									pay_jun_fri			= '$pay_jun_fri[$i]',
									pay_jun_week		= '$pay_jun_week[$i]',
									title3					= '$title3',
									pay_high_normal		= '$pay_high_normal[$i]',
									pay_high_fri		= '$pay_high_fri[$i]',
									pay_high_week		= '$pay_high_week[$i]',
									pay_max_normal		= '$pay_max_normal[$i]',
									pay_max_fri			= '$pay_max_fri[$i]',
									pay_max_week		= '$pay_max_week[$i]',
									title4					= '$title4',
									pay_4						= '$pay_4[$i]',
									title5					= '$title5',
									pay_5						= '$pay_5[$i]',
									title6					= '$title6',
									pay_6						= '$pay_6[$i]',
									title7					= '$title7',
									pay_7						= '$pay_7[$i]',
									title8					= '$title8',
									pay_8					= '$pay_8[$i]',
									title9					= '$title9',
									pay_9						= '$pay_9[$i]',
									plus_pay				= '$plus_pay[$i]',
									memo1						= '$memo1[$i]',
									memo2						= '$memo2[$i]'
									where num				= '$num[$i]'
									";
		sql_query($sql);
	}
	else {
		if ($roomname[$i]) {
			$sql = " insert into yj_room
								set roomnum					= '$roomnum[$i]',
									view_ok					= '$view_ok[$i]',
									roomno					= '$roomno[$i]',
									roomname				= '$roomname[$i]',
									roomgroup				= '$roomgroup[$i]',
									pyoung					= '$pyoung[$i]',
									mancount				= '$mancount[$i]',
									mancount_max			= '$mancount_max[$i]',
									title1					= '$title1',
									pay_normal				= '$pay_normal[$i]',
									pay_fri					= '$pay_fri[$i]',
									pay_week				= '$pay_week[$i]',
									title2					= '$title2',
									pay_jun_normal			= '$pay_jun_normal[$i]',
									pay_jun_fri				= '$pay_jun_fri[$i]',
									pay_jun_week			= '$pay_jun_week[$i]',
									title3					= '$title3',
									pay_high_normal			= '$pay_high_normal[$i]',
									pay_high_fri			= '$pay_high_fri[$i]',
									pay_high_week			= '$pay_high_week[$i]',
									pay_max_normal			= '$pay_max_normal[$i]',
									pay_max_fri				= '$pay_max_fri[$i]',
									pay_max_week			= '$pay_max_week[$i]',
									title4					= '$title4',
									pay_4					= '$pay_4[$i]',
									title5					= '$title5',
									pay_5					= '$pay_5[$i]',
									title6					= '$title6',
									pay_6					= '$pay_6[$i]',
									title7					= '$title7',
									pay_7					= '$pay_7[$i]',
									title8					= '$title8',
									pay_8					= '$pay_8[$i]',
									title9					= '$title9',
									pay_9					= '$pay_9[$i]',
									plus_pay				= '$plus_pay[$i]',
									memo1					= '$memo1[$i]',
									memo2					= '$memo2[$i]'
									";
			sql_query($sql);
		}
	}	
}


// 요금 xml 파일 생성
if ($reserv_type == "homepage") {
	// 디렉토리가 없다면 생성합니다. (퍼미션도 변경하구요.)
	@mkdir(G5_PATH."/data/xml", 0707);
	@chmod(G5_PATH."/data/xml", 0707);

	$result = sql_query(" select * from yj_room order by roomnum asc ");
	
	$p_xml  = "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
	$p_xml .= "<Roominfos>\n";
	
	for ($i=0; $row = sql_fetch_array($result); $i++) {
		$p_xml .= "  <roominfo>\n";
		$p_xml .= "    <view_ok>$row[view_ok]</view_ok>\n";
		$p_xml .= "    <roomnum>$row[roomnum]</roomnum>\n";
		$p_xml .= "    <roomno>$row[roomno]</roomno>\n";
		$p_xml .= "    <roomname>$row[roomname]</roomname>\n";
		$p_xml .= "    <pyoung>$row[pyoung]</pyoung>\n";
		$p_xml .= "    <mancount>$row[mancount]</mancount>\n";
		$p_xml .= "    <mancount_max>$row[mancount_max]</mancount_max>\n";
		$p_xml .= "    <title1>$row[title1]</title1>\n";
		$p_xml .= "    <pay_normal>$row[pay_normal]</pay_normal>\n";
		$p_xml .= "    <pay_fri>$row[pay_fri]</pay_fri>\n";
		$p_xml .= "    <pay_week>$row[pay_week]</pay_week>\n";
		$p_xml .= "    <title2>$row[title2]</title2>\n";
		$p_xml .= "    <pay_jun_normal>$row[pay_jun_normal]</pay_jun_normal>\n";
		$p_xml .= "    <pay_jun_fri>$row[pay_jun_fri]</pay_jun_fri>\n";
		$p_xml .= "    <pay_jun_week>$row[pay_jun_week]</pay_jun_week>\n";
		$p_xml .= "    <title3>$row[title3]</title3>\n";
		$p_xml .= "    <pay_high_normal>$row[pay_high_normal]</pay_high_normal>\n";
		$p_xml .= "    <pay_high_fri>$row[pay_high_fri]</pay_high_fri>\n";
		$p_xml .= "    <pay_high_week>$row[pay_high_week]</pay_high_week>\n";
		$p_xml .= "    <title4>$row[title4]</title4>\n";
		$p_xml .= "    <pay_max_normal>$row[pay_max_normal]</pay_max_normal>\n";
		$p_xml .= "    <pay_max_fri>$row[pay_max_fri]</pay_max_fri>\n";
		$p_xml .= "    <pay_max_week>$row[pay_max_week]</pay_max_week>\n";
		$p_xml .= "    <title5>$row[title5]</title5>\n";
		$p_xml .= "    <pay_5>$row[pay_5]</pay_5>\n";
		$p_xml .= "    <title6>$row[title6]</title6>\n";
		$p_xml .= "    <pay_6>$row[pay_6]</pay_6>\n";
		$p_xml .= "    <title7>$row[title7]</title7>\n";
		$p_xml .= "    <pay_7>$row[pay_7]</pay_7>\n";
		$p_xml .= "    <title8>$row[title8]</title8>\n";
		$p_xml .= "    <pay_8>$row[pay_8]</pay_8>\n";
		$p_xml .= "    <title9>$row[title9]</title9>\n";
		$p_xml .= "    <pay_9>$row[pay_9]</pay_9>\n";
		$p_xml .= "    <plus_pay>$row[plus_pay]</plus_pay>\n";
		$p_xml .= "    <memo1>$row[memo1]</memo1>\n";
		$p_xml .= "    <memo2>$row[memo2]</memo2>\n";
		$p_xml .= "  </roominfo>\n";
	}
	
	$p_xml .= "</Roominfos>";

	$fp = fopen("../data/xml/room_payment.xml", "w");
	fwrite($fp, $p_xml);
	fclose($fp);
}

alert('정상적으로 저장되었습니다.', './payment.php');
?>