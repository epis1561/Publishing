<?
error_reporting(-1);
ini_set('display_errors', 'On');
$sub_menu = "400100";
include_once("./_common.php");

check_demo();

auth_check($auth[$sub_menu], 'w');

if ($is_admin != 'super')
    alert('최고관리자만 접근 가능합니다.');

//check_admin_token();
$open_ver =time();

//goto_url('./siteInfo.php', false);
// alert('정상적으로 저장되었습니다.', './siteInfo.php');
  //메타태그 이미지, 썸네일 이미지 저장 s
  function validationImageFile($regexImage){
    if(isset($regexImage)) {
      $errors     = array();
      $maxsize    = 5242880; //5mb
      $acceptable = array(
        'image/jpg',
        'image/jpeg'
      );
      if(($regexImage['size'] >= $maxsize) || ($regexImage['size'] == 0)) {
          $errors[] = '파일이 너무 큽니다.';
      }
      if (!in_array($regexImage['type'], $acceptable) && (!empty($regexImage['type']))) {
          $errors[] = '파일형식이 잘못 되었습니다. jpg, jpeg 형식의 파일만 업로드하실 수 있습니다.';
      }
      if(count($errors) === 0) {
          return true;
      } else {
          return false;
      }
    }
  }
  foreach($_FILES as $index => $file) {
    $validation = validationImageFile($_FILES[$index]);
    if ($validation === true) {
      $fileTempName = $file['tmp_name']; // "C:\Bitnami\wampstack-7.1.12-0\php\tmp\php7C4C.tmp"
      if(!empty($file['error'][$index])){
        return false;
      }
      if(!empty($fileTempName) && is_uploaded_file($fileTempName)){ //첨부파일 확인되면...
        move_uploaded_file($fileTempName, G5_PATH.'/html/images/common/image.jpg'); //이미지저장
      } else {
        var_dump('첨부된 파일이 없음');
      }
    } else {
      $imageFileError++;
    }
  }
  if ($imageFileError > 0) {
    // echo $imageFileError.'첨부파일에 문제가 있어 이미지가 정상적으로 업로드되지 않았을 수 있습니다.';
  }
  //메타태그 이미지, 썸네일 이미지 저장 E

if($imode=='insert') {
	$sql = "insert site_info
			set num='',
			site_name				= '$site_name',
			site_type				= '$site_type',
			map_title				= '$map_title',
			map_x					= '$map_x',
			map_y					= '$map_y',
			footer_tel				= '$footer_tel',
			footer_bank				= '$footer_bank',
			footer_address			= '$footer_address',
			footer_01				= '$footer_01',
			footer_02				= '$footer_02',
			footer_03				= '$footer_03',
			footer_04				= '$footer_04',
			footer_t05				= '$footer_t05',
			footer_05				= '$footer_05',
			footer_t06				= '$footer_t06',
			footer_06				= '$footer_06',
			footer_t07				= '$footer_t07',
			footer_07				= '$footer_07',
			footer_t08				= '$footer_t08',
			footer_08				= '$footer_08',
			reser_com				= '$reser_com',
			reser_id				= '$reser_id',
			reser_link				= '$reser_link',
			tour_name				= '$tour_name',
			tour_link				= '$tour_link',
			pensionTypo01			= '$pensionTypo01',
			pensionTypo02			= '$pensionTypo02',
			subTypo01				= '$subTypo01',
			subTypo02				= '$subTypo02',
			open					= '$open',
			open_ver				= '$open_ver',
			meta_url				= '$meta_url',
			meta_keywords			= '$meta_keywords',
			meta_description		= '$meta_description',
			webmaster				= '$webmaster',
			info_t01				= '$info_t01',
			info_01					= '$info_01',
			info_t02				= '$info_t02',
			info_02					= '$info_02',
			info_t03				= '$info_t03',
			info_03					= '$info_03',
			info_t04				= '$info_t04',
			info_04					= '$info_04',
			info_t05				= '$info_t05',
			info_05					= '$info_05',
			info_t06				= '$info_t06',
			info_06					= '$info_06',
			info_t07				= '$info_t07',
			info_07					= '$info_07',
			info_t08				= '$info_t08',
			info_08					= '$info_08',
			info_t09				= '$info_t09',
			info_09					= '$info_09',
			info_t10				= '$info_t10',
			info_10					= '$info_10'
			";
		sql_query($sql);

} elseif ($imode=='edit') {
	$sql = "update site_info
			set site_name			= '$site_name',
			map_title				= '$map_title',
			site_type				= '$site_type',
			map_x					= '$map_x',
			map_y					= '$map_y',
			footer_tel				= '$footer_tel',
			footer_bank				= '$footer_bank',
			footer_address			= '$footer_address',
			footer_01				= '$footer_01',
			footer_02				= '$footer_02',
			footer_03				= '$footer_03',
			footer_04				= '$footer_04',
			footer_t05				= '$footer_t05',
			footer_05				= '$footer_05',
			footer_t06				= '$footer_t06',
			footer_06				= '$footer_06',
			footer_t07				= '$footer_t07',
			footer_07				= '$footer_07',
			footer_t08				= '$footer_t08',
			footer_08				= '$footer_08',
			reser_com				= '$reser_com',
			reser_id				= '$reser_id',
			reser_link				= '$reser_link',
			tour_name				= '$tour_name',
			tour_link				= '$tour_link',
			pensionTypo01			= '$pensionTypo01',
			pensionTypo02			= '$pensionTypo02',
			subTypo01				= '$subTypo01',
			subTypo02				= '$subTypo02',
			open					= '$open',
			open_ver				= '$open_ver',
			meta_url				= '$meta_url',
			meta_keywords			= '$meta_keywords',
			meta_description		= '$meta_description',
			webmaster				= '$webmaster',
			info_t01				= '$info_t01',
			info_01					= '$info_01',
			info_t02				= '$info_t02',
			info_02					= '$info_02',
			info_t03				= '$info_t03',
			info_03					= '$info_03',
			info_t04				= '$info_t04',
			info_04					= '$info_04',
			info_t05				= '$info_t05',
			info_05					= '$info_05',
			info_t06				= '$info_t06',
			info_06					= '$info_06',
			info_t07				= '$info_t07',
			info_07					= '$info_07',
			info_t08				= '$info_t08',
			info_08					= '$info_08',
			info_t09				= '$info_t09',
			info_09					= '$info_09',
			info_t10				= '$info_t10',
			info_10					= '$info_10'
			where num='$num'
			";
			sql_query($sql);
}
$sqlTitle = " UPDATE {$g5['config_table']}
              SET cf_title = '$site_name',
              cf_admin_email_name = '$site_name'";
sql_query($sqlTitle);

// 요금 xml 파일 생성
if ($reserv_type == "homepage") {
	// 디렉토리가 없다면 생성합니다. (퍼미션도 변경하구요.)
	@mkdir(G5_PATH."/data/xml", 0707);
	@chmod(G5_PATH."/data/xml", 0707);

	$result = sql_query(" select * from site_info");

	$p_xml  = "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
	$p_xml .= "<Siteinfos>\n";

	for ($i=0; $row = sql_fetch_array($result); $i++) {
		$p_xml .= "  <siteinfo>\n";
		$p_xml .= "    <num>$row[num]</num>\n";
		$p_xml .= "    <site_name>$row[site_name]</site_name>\n";
		$p_xml .= "    <map_title>$row[map_title]</map_title>\n";
		$p_xml .= "    <map_x>$row[map_x]</map_x>\n";
		$p_xml .= "    <map_y>$row[map_y]</map_y>\n";
		$p_xml .= "    <footer_tel>$row[footer_tel]</footer_tel>\n";
		$p_xml .= "    <footer_bank>$row[footer_bank]</footer_bank>\n";
		$p_xml .= "    <footer_address>$row[footer_address]</footer_address>\n";
		$p_xml .= "    <footer_01>$row[footer_01]</footer_01>\n";
		$p_xml .= "    <footer_02>$row[footer_01]</footer_02>\n";
		$p_xml .= "    <footer_03>$row[footer_01]</footer_03>\n";
		$p_xml .= "    <footer_04>$row[footer_01]</footer_04>\n";
		$p_xml .= "    <footer_t05>$row[footer_t05]</footer_t05>\n";
		$p_xml .= "    <footer_05>$row[footer_05]</footer_05>\n";
		$p_xml .= "    <footer_t06>$row[footer_t06]</footer_t06>\n";
		$p_xml .= "    <footer_06>$row[footer_06]</footer_06>\n";
		$p_xml .= "    <footer_t07>$row[footer_t07]</footer_t07>\n";
		$p_xml .= "    <footer_07>$row[footer_07]</footer_07>\n";
		$p_xml .= "    <footer_t08>$row[footer_t08]</footer_t08>\n";
		$p_xml .= "    <footer_08>$row[footer_08]</footer_08>\n";
		$p_xml .= "    <reser_com>$row[reser_com]</reser_com>\n";
		$p_xml .= "    <reser_id>$row[reser_id]</reser_id>\n";
		$p_xml .= "    <reser_link>$row[reser_link]</reser_link>\n";
		$p_xml .= "    <tour_name>$row[tour_name]</tour_name>\n";
		$p_xml .= "    <tour_link>$row[tour_link]</tour_link>\n";
		$p_xml .= "    <pensionTypo01>$row[pensionTypo01]</pensionTypo01>\n";
		$p_xml .= "    <pensionTypo02>$row[pensionTypo02]</pensionTypo02>\n";
		$p_xml .= "    <subTypo01>$row[subTypo01]</subTypo01>\n";
		$p_xml .= "    <subTypo02>$row[subTypo02]</subTypo02>\n";
		$p_xml .= "    <info_t01>$row[info_t01]</info_t01>\n";
		$p_xml .= "    <info_01>$row[info_01]</info_01>\n";
		$p_xml .= "    <info_t02>$row[info_t02]</info_t02>\n";
		$p_xml .= "    <info_02>$row[info_02]</info_02>\n";
		$p_xml .= "    <info_t03>$row[info_t03]</info_t03>\n";
		$p_xml .= "    <info_03>$row[info_03]</info_03>\n";
		$p_xml .= "    <info_t04>$row[info_t04]</info_t04>\n";
		$p_xml .= "    <info_04>$row[info_04]</info_04>\n";
		$p_xml .= "    <info_t05>$row[info_t05]</info_t05>\n";
		$p_xml .= "    <info_05>$row[info_05]</info_05>\n";
		$p_xml .= "    <info_t06>$row[info_t06]</info_t06>\n";
		$p_xml .= "    <info_06>$row[info_06]</info_06>\n";
		$p_xml .= "    <info_t07>$row[info_t07]</info_t07>\n";
		$p_xml .= "    <info_07>$row[info_07]</info_07>\n";
		$p_xml .= "    <info_t08>$row[info_t08]</info_t08>\n";
		$p_xml .= "    <info_08>$row[info_08]</info_08>\n";
		$p_xml .= "    <info_t09>$row[info_t09]</info_t09>\n";
		$p_xml .= "    <info_09>$row[info_09]</info_09>\n";
		$p_xml .= "    <info_t10>$row[info_t10]</info_t10>\n";
		$p_xml .= "    <info_10>$row[info_10]</info_10>\n";
		$p_xml .= "  </siteinfo>\n";
	}

	$p_xml .= "</Siteinfos>";

	$fp = fopen("../data/xml/site_info.xml", "w");
	fwrite($fp, $p_xml);
	fclose($fp);
}
//goto_url('./siteInfo.php', false);
alert('정상적으로 저장되었습니다.', './siteInfo.php');
?>
