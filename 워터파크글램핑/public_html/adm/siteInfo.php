<?
$sub_menu = "400100";
include_once("./_common.php");

auth_check($auth[$sub_menu], "w");

$html_title = "사이트정보";
$g5['title'] = $html_title;
include_once (G5_ADMIN_PATH.'/admin.head.php');

// site_info 테이블이 없는 경우 자동생성
$result = sql_fetch(" SELECT COUNT(*) as cnt FROM information_schema.tables WHERE table_name = 'site_info' ");
if ($result[cnt] < 1) {
	$sql = " CREATE TABLE site_info (
			num INT( 11 ) NOT NULL AUTO_INCREMENT ,
			site_name VARCHAR( 255 ) NOT NULL ,
			site_type VARCHAR( 11 ) NOT NULL,
			map_title VARCHAR( 255 ) NOT NULL,
			map_x VARCHAR( 255 ) NOT NULL,
			map_y VARCHAR( 255 ) NOT NULL,
			footer_tel VARCHAR( 255 ) NOT NULL,
			footer_bank VARCHAR( 255 ) NOT NULL,
			footer_address VARCHAR( 255 ) NOT NULL,
			footer_01 VARCHAR( 255 ) NOT NULL,
			footer_02 VARCHAR( 255 ) NOT NULL,
			footer_03 VARCHAR( 255 ) NOT NULL,
			footer_04 VARCHAR( 255 ) NOT NULL,
			footer_t05 VARCHAR( 255 ) NOT NULL,
			footer_05 VARCHAR( 255 ) NOT NULL,
			footer_t06 VARCHAR( 255 ) NOT NULL,
			footer_06 VARCHAR( 255 ) NOT NULL,
			footer_t07 VARCHAR( 255 ) NOT NULL,
			footer_07 VARCHAR( 255 ) NOT NULL,
			footer_t08 VARCHAR( 255 ) NOT NULL,
			footer_08 VARCHAR( 255 ) NOT NULL,
			reser_com VARCHAR( 255 ) NOT NULL,
			reser_id VARCHAR( 255 ) NOT NULL,
			reser_link VARCHAR( 255 ) NOT NULL,
			tour_name VARCHAR( 255 ) NOT NULL,
			tour_link VARCHAR( 255 ) NOT NULL,
			pensionTypo01 VARCHAR( 255 ) NOT NULL,
			pensionTypo02 VARCHAR( 255 ) NOT NULL,
			subTypo01 VARCHAR( 255 ) NOT NULL,
			subTypo02 VARCHAR( 255 ) NOT NULL,
			open VARCHAR( 255 ) NOT NULL,
			open_ver VARCHAR( 11 ) NOT NULL,
			meta_url VARCHAR( 255 ) NOT NULL,
			meta_keywords VARCHAR( 255 ) NOT NULL,
			meta_description VARCHAR( 255 ) NOT NULL,
			webmaster text NOT NULL,
			info_t01 VARCHAR( 255 ) NOT NULL,
			info_01 VARCHAR( 255 ) NOT NULL,
			info_t02 VARCHAR( 255 ) NOT NULL,
			info_02 VARCHAR( 255 ) NOT NULL,
			info_t03 VARCHAR( 255 ) NOT NULL,
			info_03 VARCHAR( 255 ) NOT NULL,
			info_t04 VARCHAR( 255 ) NOT NULL,
			info_04 VARCHAR( 255 ) NOT NULL,
			info_t05 VARCHAR( 255 ) NOT NULL,
			info_05 VARCHAR( 255 ) NOT NULL,
			info_t06 VARCHAR( 255 ) NOT NULL,
			info_06 VARCHAR( 255 ) NOT NULL,
			info_t07 VARCHAR( 255 ) NOT NULL,
			info_07 VARCHAR( 255 ) NOT NULL,
			info_t08 VARCHAR( 255 ) NOT NULL,
			info_08 VARCHAR( 255 ) NOT NULL,
			info_t09 VARCHAR( 255 ) NOT NULL,
			info_09 VARCHAR( 255 ) NOT NULL,
			info_t10 VARCHAR( 255 ) NOT NULL,
			info_10 VARCHAR( 255 ) NOT NULL,
			PRIMARY KEY ( num )
			);
			";
	sql_query($sql);
}

$row = sql_fetch(" select * from g5_config ");
?>

<script type="text/javascript" src="../js/MyUI.js"></script>
<STYLE TYPE="text/css">
.buttonindex_1 {
	border: 1px solid #000;
	background-color: #383a3f;
	font-weight: bold;
	color: #FFFFFF;
	height: 30px;
	line-height:30px;
	cursor:pointer;
	margin-right:20px;
}
.buttonindex_2 {
	border: 1px solid #000000;
	background-color: #B4B4B4;
	font-weight: bold;
	color: #4F4F4F;
	height: 25px;
	cursor: pointer;
}
input {
	border: 1px solid #ccc; height:26px; line-height:26px; padding:0 5px; border-radius:2px;
}
textarea { width:100%; max-width:700px;  border: 1px solid #ccc; line-height:1.6em; padding:5px; border-radius:2px; background:#fff;}
#webmaster {height:80px;}
input#open_ver { border:1px solid #ddd; color:#999;}
.tbl_dl { margin:0; }
.tbl_dl dt { display:inline-block; width:8em; height:28px; line-height:28px; padding:3px 0; vertical-align:middle;}
.tbl_dl dd { display:inline-block; width:calc(100% - 10em); height:28px; padding:3px 0; margin:0; vertical-align:middle;}
</STYLE>



<!--&nbsp; &nbsp; <input type="radio" name="info_type" id="info_type" value="site_info" <? if ($row[cf_5] == "site_info") echo "checked"; ?> onclick="ch_rt(2)" /> <span style="font-size:14px;">사이트정보 입력</span>
<input type="hidden" name="info_type" value="site_info">

&nbsp; &nbsp; <input type="radio" name="reserv_type" id="reserv_type" value="homepage" <? if ($row[cf_4] == "homepage") echo "checked"; ?> onclick="ch_rt(2)" /> <span style="font-size:14px;">사이트정보 입력</span>-->



<? $info = sql_fetch(" select * from site_info ");?>

<form name="frm" method="post" autocomplete="off" action="siteInfo_update.php" enctype="multipart/form-data">
<? if ($info) {
	 echo "<input type='hidden' name='imode' value='edit'>";
	 echo "<input type='hidden' name='num' value='".$info[num]."'>";
} else {
	 echo "<input type='hidden' name='imoDe' value='insert'>";
}
?>
<input type="hidden" name="reserv_type" value="homepage">
<div style="text-align:right; padding-top:10px; padding-bottom:5px; <? if($row[cf_4]!="homepage") echo "display:none;"; ?>" id="rt2">
<!--input type="button" value="객실정보 저장" class="buttonindex_1" onclick="frm_submit_room(document.frm)"-->
<input type="submit" value="사이트정보 저장" class="buttonindex_1">
</div>
<section id="anc_cf_extra">
    <h2 class="h2_frm">기본 설정</h2>
    <div class="tbl_frm01 tbl_wrap">
        <table>
			<caption>기본 설정</caption>
			<colgroup>
				<col class="grid_2">
				<col>
			</colgroup>
			<tbody>
				<tr>
					<th scope="row"><label for="">사이트명</label></th>
					<td>
						<input type="text" name="site_name" value="<?if($info[site_name]) echo $info[site_name]; else echo "펜션";?>" size="50">
					</td>
				</tr>
				<? if ($member['mb_id'] == "admin") { ?>
				<tr>
					<th scope="row">유형선택</th>
					<td>
						<input type="radio" name="site_type" id="site_type01" value="html" <?php if(htmlspecialchars($info[site_type],ENT_QUOTES) == "html") echo "checked"; ?>> <label for="site_type01">웹사이트</label> &nbsp;
						<input type="radio" name="site_type" id="site_type02" value="temp" <?php if(htmlspecialchars($info[site_type],ENT_QUOTES) == "temp") echo "checked"; ?>> <label for="site_type02">임시</label> &nbsp;
					</td>
				</tr>
				<? } ?>
				<tr>
					<th scope="row"><label for="">오시는길 지도</label></th>
					<td>
						<label for="">텍스트</label> <input type="text" name="map_title" value="<?if($info[map_title]) echo $info[map_title]; else echo "펜션";?>" size="40"> &nbsp; &nbsp;
						<label for="">위도(Y:37.)</label> <input type="text" name="map_y" value="<?php echo $info['map_y'] ?>" size="20"> &nbsp; &nbsp;
						<label for="">경도(X:127.)</label> <input type="text" name="map_x" value="<?php echo $info['map_x'] ?>" size="20"> &nbsp; &nbsp;
						(<a href="https://navermaps.github.io/maps.js/docs/tutorial-3-geocoder-geocoding.example.html" target="_blank">위경도 알아보기</a>)
					</td>
				</tr>
				<tr>
					<th scope="row">사이트 정보</th>
					<td>
						<dl class="tbl_dl">
							<dt><label for="footer_tel">전화번호</label></dt>
							<dd><input type="text" name="footer_tel" id="footer_tel" value="<?php echo $info['footer_tel'] ?>" size="50"></dd>
							<dt><label for="footer_bank">계좌번호</label></dt>
							<dd><input type="text" name="footer_bank" id="footer_bank" value="<?php echo $info['footer_bank'] ?>" size="50"></dd>
							<dt><label for="footer_address">주소</label></dt>
							<dd><input type="text" name="footer_address" id="footer_address" value="<?php echo $info['footer_address'] ?>" size="100"></dd>
							<dt style="display:none;"><label for="footer_01">업체명</label></dt>
							<dd style="display:none;"><input type="text" name="footer_01" id="footer_01" value="<?php echo $info['footer_01'] ?>" size="40"></dd>
							<dt><label for="footer_02">대표</label></dt>
							<dd>
								<input type="text" name="footer_02" id="footer_02" value="<?php echo $info['footer_02'] ?>" size="20"> &nbsp; &nbsp;
								<label for="footer_03">사업자번호</label> <input type="text" name="footer_03" id="footer_03" value="<?php echo $info['footer_03'] ?>" size="30"> &nbsp; &nbsp;
								<label for="footer_04">통신판매번호</label> <input type="text" name="footer_04" id="footer_04" value="<?php echo $info['footer_04'] ?>" size="30">
							</dd>
							<dt><input type="text" name="footer_t05" value="<?if($info[footer_t05]) echo $info[footer_t05]; else echo "추가정보01";?>" size="10"></dt>
							<dd><input type="text" name="footer_05" value="<?php echo $info['footer_05'] ?>" size="80"></dd>
							<dt><input type="text" name="footer_t06" value="<?if($info[footer_t06]) echo $info[footer_t06]; else echo "추가정보02";?>" size="10"></dt>
							<dd><input type="text" name="footer_06" value="<?php echo $info['footer_06'] ?>" size="80"></dd>
							<dt><input type="text" name="footer_t07" value="<?if($info[footer_t07]) echo $info[footer_t07]; else echo "추가정보03";?>" size="10"></dt>
							<dd><input type="text" name="footer_07" value="<?php echo $info['footer_07'] ?>" size="80"></dd>
							<dt><input type="text" name="footer_t08" value="<?if($info[footer_t08]) echo $info[footer_t08]; else echo "추가정보04";?>" size="10"></dt>
							<dd><input type="text" name="footer_08" value="<?php echo $info['footer_08'] ?>" size="80"></dd>
						</dl>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="reser_com">실시간 정보</label></th>
					<td>
						<dl class="tbl_dl">
							<dt><label for="reser_com">실시간 업체</label></dt>
							<dd><input type="text" name="reser_com" id="reser_com" value="<?php echo $info['reser_com'] ?>" size="30"></dd>
							<dt><label for="reser_id">실시간 id</label></dt>
							<dd><input type="text" name="reser_id" id="reser_id" value="<?php echo $info['reser_id'] ?>" size="30"></dd>
							<dt><label for="reser_link">실시간 주소</label></dt>
							<dd><input type="text" name="reser_link" id="reser_link" value="<?php echo $info['reser_link'] ?>" size="100"></dd>
						</dl>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="meta_url">메타 태그</label></th>
					<td>
						<dl class="tbl_dl">
							<? if ($config['cf_admin'] == "admin") { ?>
							<dt>오픈여부</dt>
							<dd>
								<input type="radio" name="open" id="open01" value="noindex" <?php if(htmlspecialchars($info[open],ENT_QUOTES) == "noindex") echo "checked"; ?>> <label for="open01">close</label> &nbsp;
								<input type="radio" name="open" id="open02" value="index, follow" <?php if(htmlspecialchars($info[open],ENT_QUOTES) == "index, follow") echo "checked"; ?>> <label for="open02">open</label> &nbsp;
								[오픈할 때 체크 : 로봇수집여부와 관련되어 있음]
							</dd>
							<? } ?>
							<dt><label for="meta_img">이미지</label></dt>
							<dd style="height:auto;">
								<?php
									$metaImage = G5_URL.'/html/images/common/image.jpg';
								?>
								<img src="<?php echo $metaImage ?>" alt="" id="meta_img_thumb" style="cursor:pointer; max-width:700px;">
								<input type="file" name="meta_img" id="meta_img" value=""accept="image/jpeg" style="display:none">
								<p>권장 이미지 크기 : 500px * 280px</p>
								<script>
								$('#meta_img_thumb').on('click', function(){
									$('#meta_img').trigger('click');
								});
								$('body').on('change', '#meta_img', function(){
								  var thumbnail = $(this).prev('#meta_img_thumb');
								  readURL(this, thumbnail);
								  return;
								});

								function readURL(e, s) {
								    var fileObj = e.files;
								    var file = fileObj[0];
								    if (fileObj && file) {
								      var fileSize = file.size;
								      var fileType = file.type.toLowerCase();
								      var allowFormat = ['jpg', 'jpeg'];
								      var sizeRegex = (fileSize < 5242880) && (fileSize != 0) ? true : false;
								      var typeRegex = function(){
								        var nameArray = fileType.split('/');
								        if ($.inArray(nameArray[1], allowFormat) == -1){
								          return false;
								        }
								        return true;
								      }();
								      if (sizeRegex && typeRegex) {
								        var reader = new FileReader();
								        reader.onload = function (e) {
								            s.attr('src', e.target.result);
								        }
								        reader.readAsDataURL(e.files[0]);
								      } else if (!sizeRegex && typeRegex) {
								        alert('업로드 가능한 용량은 5mb 미만입니다.');
								      } else if (sizeRegex && !typeRegex) {
								        alert('jpg, jpeg 파일만 업로드할 수 있습니다.');
								      } else {
								        alert('용량 5mb 이하, jpg, jpeg 파일만 업로드할 수 있습니다.');
								      }
								    }
								}

								</script>
							</dd>
							<dt><label for="open_ver">버전 관리</label></dt>
							<dd><input type="text" name="open_ver" id="open_ver" value="<?php echo $info['open_ver'] ?>" size="20" readonly> &nbsp;자동생성됨</dd>
							<dt><label for="meta_url">사이트 주소</label></dt>
							<dd><input type="text" name="meta_url" id="meta_url" value="<?if($info[meta_url]) echo $info[meta_url]; else echo "http://gogo-people.com";?>" size="50"> &nbsp;마지막 / 빼기</dd>
							<dt><label for="meta_keywords">키워드</label></dt>
							<dd><input type="text" name="meta_keywords" id="meta_keywords" value="<?if($info[meta_keywords]) echo $info[meta_keywords]; else echo "펜션";?>" size="80"> </dd>
							<dt><label for="meta_description">설명</label></dt>
							<dd><input type="text" name="meta_description" id="meta_description" value="<?if($info[meta_description]) echo $info[meta_description]; else echo "펜션";?>" size="80"></dd>
							<? if ($config['cf_admin'] == "admin") { ?>
							<dt><label for="webmaster">웹마스터도구</label></dt>
							<dd style="height:auto;"><textarea name="webmaster" id="webmaster"><?php echo $info[webmaster] ?></textarea></dd>
							<? } ?>
						</dl>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="tour_name">관광 사이트</label></th>
					<td>
						<dl class="tbl_dl">
							<dt><label for="tour_name">사이트 이름</label></dt>
							<dd>
								<input type="text" name="tour_name" id="tour_name" value="<?if($info[tour_name]) echo $info[tour_name]; else echo "지역관광";?>" size="20"> &nbsp; &nbsp;
								<label for="tour_link">사이트 주소</label> <input type="text" name="tour_link" id="tour_link" value="<?php echo $info['tour_link'] ?>" size="60">
							</dd>
						</dl>
					</td>
				</tr>
				<tr>
					<th scope="row">기본 텍스트</th>
					<td>
						<dl class="tbl_dl">
							<dt><label for="pensionTypo01">pensionTypo01</label></dt>
							<dd><input type="text" name="pensionTypo01" id="pensionTypo01" value="<?if($info[pensionTypo01]) echo $info[pensionTypo01]; else echo "pension";?>" size="80"> &nbsp; 펜션 영문명</dd>
							<dt><label for="pensionTypo02">pensionTypo02</label></dt>
							<dd><input type="text" name="pensionTypo02" id="pensionTypo02" value="<?php echo $info['pensionTypo02'] ?>" size="80"></dd>
							<dt><label for="subTypo01">subTypo01</label></dt>
							<dd><input type="text" name="subTypo01" id="subTypo01" value="<?if($info[subTypo01]) echo $info[subTypo01]; else echo "this place provides the best time for those who are staying";?>" size="80"> &nbsp; 서브타이틀 중복 영문</dd>
							<dt><label for="subTypo02">subTypo02</label></dt>
							<dd><input type="text" name="subTypo02" id="subTypo02" value="<?php echo $info['subTypo02'] ?>" size="80"></dd>
						</dl>
					</td>
					<tr>
					<th scope="row">추가필드</th>
					<td>
						<dl class="tbl_dl">
							<dt><input type="text" name="info_t01" value="<?if($info[info_t01]) echo $info[info_t01]; else echo "추가 01";?>" size="10"></dt>
							<dd><input type="text" name="info_01" value="<?php echo $info['info_01'] ?>" size="100"></dd>
							<dt><input type="text" name="info_t02" value="<?if($info[info_t02]) echo $info[info_t02]; else echo "추가 02";?>" size="10"></dt>
							<dd><input type="text" name="info_02" value="<?php echo $info['info_02'] ?>" size="100"></dd>
							<dt><input type="text" name="info_t03" value="<?if($info[info_t03]) echo $info[info_t03]; else echo "추가 03";?>" size="10"></dt>
							<dd><input type="text" name="info_03" value="<?php echo $info['info_03'] ?>" size="100"></dd>
							<dt><input type="text" name="info_t04" value="<?if($info[info_t04]) echo $info[info_t04]; else echo "추가 04";?>" size="10"></dt>
							<dd><input type="text" name="info_04" value="<?php echo $info['info_04'] ?>" size="100"></dd>
							<dt><input type="text" name="info_t05" value="<?if($info[info_t05]) echo $info[info_t05]; else echo "추가 05";?>" size="10"></dt>
							<dd><input type="text" name="info_05" value="<?php echo $info['info_05'] ?>" size="100"></dd>
							<dt><input type="text" name="info_t06" value="<?if($info[info_t06]) echo $info[info_t06]; else echo "추가 06";?>" size="10"></dt>
							<dd><input type="text" name="info_06" value="<?php echo $info['info_06'] ?>" size="100"></dd>
							<dt><input type="text" name="info_t07" value="<?if($info[info_t07]) echo $info[info_t07]; else echo "추가 07";?>" size="10"></dt>
							<dd><input type="text" name="info_07" value="<?php echo $info['info_07'] ?>" size="100"></dd>
							<dt><input type="text" name="info_t08" value="<?if($info[info_t08]) echo $info[info_t08]; else echo "추가 08";?>" size="10"></dt>
							<dd><input type="text" name="info_08" value="<?php echo $info['info_08'] ?>" size="100"></dd>
							<dt><input type="text" name="info_t09" value="<?if($info[info_t09]) echo $info[info_t09]; else echo "추가 09";?>" size="10"></dt>
							<dd><input type="text" name="info_09" value="<?php echo $info['info_09'] ?>" size="100"></dd>
							<dt><input type="text" name="info_t10" value="<?if($info[info_t10]) echo $info[info_t10]; else echo "추가 10";?>" size="10"></dt>
							<dd><input type="text" name="info_10" value="<?php echo $info['info_10'] ?>" size="100"></dd>
						</dl>
					</td>
				</tr>
			</tbody>
        </table>
		<div style="text-align:center; margin-top:20px;">
			<input type="submit" value="사이트정보 저장" class="buttonindex_1">
		</div>
    </div>
	<?
	//	sql_query($sql);
	?>
</section>
</form>

<script type="text/javascript">
new MyCheckBoxes(document.forms['frm']);
new MyRadioButtons(document.forms['frm']);

function ch_rt(v) {
	if (v == 1) {
		document.getElementById( "rt1" ).style.display = "";
		document.getElementById( "rt2" ).style.display = "none";
	}
	else {
		document.getElementById( "rt2" ).style.display = "";
		document.getElementById( "rt1" ).style.display = "none";
	}
}

function frm_submit_id(f) {
	if (f.staywith_id.value == "") {
		alert('아이디를 입력해주세요');
		f.staywith_id.focus();
		return false;
	}
	f.action = './siteInfo_update.php';
	f.submit();
}

function frm_submi  (f) {
	f.action = './siteInfo_update.php';
	f.submit();
}
</script>

<?
include_once("./admin.tail.php");
?>