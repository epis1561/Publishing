<?
$sub_menu = "400200";
include_once("./_common.php");

auth_check($auth[$sub_menu], "w");

$html_title = "요금관리";
$g5['title'] = $html_title;
include_once (G5_ADMIN_PATH.'/admin.head.php');

// yj_room 테이블이 없는 경우 자동생성
$result = sql_fetch(" SELECT COUNT(*) as cnt FROM information_schema.tables WHERE table_name = 'yj_room' ");
if ($result[cnt] < 1) {
	$sql = " CREATE TABLE yj_room (
			num INT( 11 ) NOT NULL AUTO_INCREMENT ,
			roomnum INT( 11 ) NOT NULL ,
			view_ok TINYINT( 2 ) NOT NULL,
			roomno INT( 11 ) NOT NULL ,
			roomname VARCHAR( 255 ) NOT NULL ,
			roomgroup VARCHAR( 100 ) NOT NULL ,
			pyoung VARCHAR( 255 ) NOT NULL ,
			mancount VARCHAR( 255 ) NOT NULL ,
			mancount_max VARCHAR( 255 ) NOT NULL ,
			title1 VARCHAR( 255 ) NOT NULL ,
			pay_normal VARCHAR( 255 ) NOT NULL ,
			pay_fri VARCHAR( 255 ) NOT NULL ,
			pay_week VARCHAR( 255 ) NOT NULL ,
			title2 VARCHAR( 255 ) NOT NULL ,
			pay_jun_normal VARCHAR( 255 ) NOT NULL ,
			pay_jun_fri VARCHAR( 255 ) NOT NULL ,
			pay_jun_week VARCHAR( 255 ) NOT NULL ,
			title3 VARCHAR( 255 ) NOT NULL ,
			pay_high_normal VARCHAR( 255 ) NOT NULL ,
			pay_high_fri VARCHAR( 255 ) NOT NULL ,
			pay_high_week VARCHAR( 255 ) NOT NULL ,
			pay_max_normal VARCHAR( 255 ) NOT NULL ,
			pay_max_fri VARCHAR( 255 ) NOT NULL ,
			pay_max_week VARCHAR( 255 ) NOT NULL ,
			title4 VARCHAR( 255 ) NOT NULL ,
			pay_4 VARCHAR( 255 ) NOT NULL ,
			title5 VARCHAR( 255 ) NOT NULL ,
			pay_5 VARCHAR( 255 ) NOT NULL ,
			title6 VARCHAR( 255 ) NOT NULL ,
			pay_6 VARCHAR( 255 ) NOT NULL ,
			title7 VARCHAR( 255 ) NOT NULL ,
			pay_7 VARCHAR( 255 ) NOT NULL ,
			title8 VARCHAR( 255 ) NOT NULL ,
			pay_8 VARCHAR( 255 ) NOT NULL ,
			title9 VARCHAR( 255 ) NOT NULL ,
			pay_9 VARCHAR( 255 ) NOT NULL ,
			plus_pay VARCHAR( 255 ) NOT NULL ,
			memo1 VARCHAR( 255 ) NOT NULL ,	
			memo2 VARCHAR( 255 ) NOT NULL ,
			memo3 VARCHAR( 255 ) NOT NULL ,
			memo4 VARCHAR( 255 ) NOT NULL ,
			PRIMARY KEY ( num ) 
					);
					";
	sql_query($sql);
}

$row = sql_fetch(" select * from g5_config ");
?>

<script type="text/javascript" src="../js/MyUI.js"></script>
<STYLE TYPE="text/css">
.priceTableWarp { width:100%;border-collapse:collapse;}
.priceTableWarp > td { width:98%; padding:0 1%; }
.priceTable { min-width:98%; border-collapse:collapse;}
.priceTable th, .priceTable td { font-size:11px; font-weight:400; letter-spacing:-0.02em; border-right:1px solid #ddd; }
.priceTable th[scope=colgroup] { border-bottom:1px solid #ddd; }
.priceTable td { padding:5px 2px;}
.priceTable td.line { padding:0; height:2px; background:#999;}
.priceTable th input {font-size:11px; font-weight:400; letter-spacing:-0.02em; text-align:center;}
.buttonindex_1 {
	border: 1px solid #000;
	background-color: #383a3f;
	font-weight: bold;
	color: #FFFFFF;
	height: 30px;
	line-height:30px;
	cursor:pointer;
	margin-right:20px;
	padding:0 5px; border-radius:2px;
}
.buttonindex_2 {
	border: 1px solid #333;
	background-color: #666;
	font-weight: bold;
	color: #FFFFFF;
	height: 30px;
	line-height:30px;
	cursor:pointer;
	padding:0 5px; border-radius:2px;
}
input {
	border: 1px solid #ddd; font-size:11px; height:26px; line-height:26px; letter-spacing:-0.02em; padding:0 2px; border-radius:2px;
}
</STYLE>

<form name="frm" method="post" autocomplete="off">
<p>

<input type="radio" name="reserv_type" id="reserv_type" value="homepage" <? if ($row[cf_4] == "homepage") echo "checked"; ?> onclick="ch_rt(2)" /><span style="font-size:14px;">객실요금 직접 입력</span>
<input type="hidden" name="reserv_type" value="homepage">

<div style="text-align:right; padding-top:10px; padding-bottom:5px; <? if($row[cf_4]!="homepage") echo "display:none;"; ?>" id="rt2">
<input type="button" value="+ 객실추가" class="buttonindex_2" onclick="add_file('')"> &nbsp; <input type="button" value="객실정보 저장" class="buttonindex_1" onclick="frm_submit_room(document.frm)">
</div>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="priceTableWarp">
	<tr>
		<td>
			<table class="priceTable">
			<?
				$row2 = sql_fetch(" select * from yj_room ");
			?>
			<tr align="center" bgcolor="#ffffff">
				<th height="25" rowspan="2" style="width:40px;">객실<br>번호</th>
				<th height="25" rowspan="2" style="width:40px;">순서</th>
				<th rowspan="2" style="width:100px;">객실이름</th>
				<th rowspan="2" style="width:80px;">그룹</th>
				<th rowspan="2" style="width:80px;">객실형태</th>
				<th rowspan="2" style="width:60px;">크기</th>
				<th colspan="2" scope="colgroup" style="width:50px;">인원</th>
				<th colspan="3" scope="colgroup" style="width:60px;"><input type="text" name="title1" value="<?if($row2[title1]) echo $row2[title1]; else echo "비수기";?>" style="width:80px; "></th>
				<th colspan="3" scope="colgroup" style="width:60px;"><input type="text" name="title2" value="<?if($row2[title2]) echo $row2[title2]; else echo "준성수기";?>" style="width:80px; "></th>
				<th colspan="3" scope="colgroup" style="width:60px;"><input type="text" name="title3" value="<?if($row2[title3]) echo $row2[title3]; else echo "성수기";?>" style="width:80px; "></th>
				<th colspan="3" scope="colgroup" style="width:60px;"><input type="text" name="title4" value="<?if($row2[title4]) echo $row2[title4]; else echo "최대성수기";?>" style="width:65px; "></th>
				<th rowspan="2" style="width:60px;"><input type="text" name="title5" value="<?if($row2[title5]) echo $row2[title5]; else echo "추가2";?>" style="width:65px; "></th>
				<th rowspan="2" style="width:60px;"><input type="text" name="title6" value="<?if($row2[title6]) echo $row2[title6]; else echo "추가3";?>" style="width:65px; "></th>
				<th rowspan="2" style="width:60px;"><input type="text" name="title7" value="<?if($row2[title7]) echo $row2[title7]; else echo "추가4";?>" style="width:65px; "></th>
				<th rowspan="2" style="width:60px;"><input type="text" name="title8" value="<?if($row2[title8]) echo $row2[title8]; else echo "추가5";?>" style="width:65px; "></th>
				<th rowspan="2" style="width:60px;"><input type="text" name="title9" value="<?if($row2[title9]) echo $row2[title9]; else echo "추가6";?>" style="width:65px; "></th>
				<th rowspan="2" style="width:200px;">집기</th>
				<th rowspan="2" style="width:150px;">메모1</th>
				<th rowspan="2" style="width:15px;">메모2</th>
				<th rowspan="2" style="width:60px;">삭제</th>
     		</tr>
			<tr align="center" bgcolor="#ffffff">
				<th height="25" style="width:30px; ">기준</th>
				<th style="width:30px;">최대</th>
				<th style="width:30px;">주중</th>
				<th style="width:30px;">금요일</th>
				<th style="width:30px;">주말</th>
				<th style="width:30px;">주중</th>
				<th style="width:30px;">금요일</th>
				<th style="width:30px;">주말</th>
				<th style="width:30px;">주중</th>
				<th style="width:30px;">금요일</th>
				<th style="width:30px;">주말</th>
				<th style="width:30px;">주중</th>
				<th style="width:30px;">금요일</th>			
				<th style="width:30px;">주말</th>
     		</tr>
		
			
			<?
			//--------------------------------------------------------------------------
			// 가변 룸
			$room_cnt = sql_fetch(" select count(num) as cnt from yj_room ");
			$room_q = sql_query(" select * from yj_room order by roomnum ");
			$room_script = "";
			$room_length = -1;
			
			for ($i=0; $room = sql_fetch_array($room_q); $i++)
			{
				//	$room_script .= "add_file(\"";
				//	$room_script .= "<tr align='center'>
			?>
					<tr align='center' bgcolor='#ffffff'><td style='width:40px;'>
						<input type='hidden' name='num[]' value='<?php echo $room[num];?>'>
						<input type='text' name='roomnum[]' value='<?php echo $room[roomnum];?>' style='width:34px;' readonly=readonly></td>
						<td height='25' style='width:34px;'><input type='text' name='roomno[]' value='<?php echo $room[roomno];?>' style='width:34px;'></td>
						<td height='25' style='width:100px;'><input type='text' name='roomname[]' value='<?php echo $room[roomname];?>' style='width:100px;'></td>
						<td height='25' style='width:80px;'><input type='text' name='roomgroup[]' value='<?php echo $room[roomgroup];?>' style='width:80px;'></td>
						<td style='width:40px;'><input type='text' name='memo1[]' value='<?php echo $room[memo1];?>' style='width:80px;'></td>
						<td style='width:40px;'><input type='text' name='pyoung[]' value='<?php echo $room[pyoung];?>' style='width:54px;'></td>
						<td style='width:20px;'><input type='text' name='mancount[]' value='<?php echo $room[mancount];?>' style='width:20px;'></td>
						<td style='width:20px;'><input type='text' name='mancount_max[]' value='<?php echo $room[mancount_max];?>' style='width:20px;'></td>
						<td style='width:60px;'><input type='text' name='pay_normal[]' value='<?php echo $room[pay_normal];?>' style='width:50px;text-align:right'></td>
						<td style='width:60px;'><input type='text' name='pay_fri[]' value='<?php echo $room[pay_fri];?>' style='width:50px;text-align:right'></td>
						<td style='width:60px;'><input type='text' name='pay_week[]' value='<?php echo $room[pay_week];?>' style='width:50px;text-align:right'></td>
						<td style='width:60px;'><input type='text' name='pay_jun_normal[]' value='<?php echo $room[pay_jun_normal];?>' style='width:50px;text-align:right'></td>
						<td style='width:60px;'><input type='text' name='pay_jun_fri[]' value='<?php echo $room[pay_jun_fri];?>' style='width:50px;text-align:right'></td>
						<td style='width:60px;'><input type='text' name='pay_jun_week[]' value='<?php echo $room[pay_jun_week];?>' style='width:50px;text-align:right'></td>
						<td style='width:60px;'><input type='text' name='pay_high_normal[]' value='<?php echo $room[pay_high_normal];?>' style='width:50px;text-align:right'></td>
						<td style='width:60px;'><input type='text' name='pay_high_fri[]' value='<?php echo $room[pay_high_fri];?>' style='width:50px;text-align:right'></td>
						<td style='width:60px;'><input type='text' name='pay_high_week[]' value='<?php echo $room[pay_high_week];?>' style='width:50px;text-align:right'></td>
						<td style='width:60px;'><input type='text' name='pay_max_normal[]' value='<?php echo $room[pay_max_normal];?>' style='width:50px;text-align:right'></td>
						<td style='width:60px;'><input type='text' name='pay_max_fri[]' value='<?php echo $room[pay_max_fri];?>' style='width:50px;text-align:right'></td>
						<td style='width:60px;'><input type='text' name='pay_max_week[]' value='<?php echo $room[pay_max_week];?>' style='width:50px;text-align:right'></td>
						<td style='width:60px;'><input type='text' name='pay_5[]' value='<?php echo $room[pay_5];?>' style='width:50px;text-align:right'></td>
						<td style='width:60px;'><input type='text' name='pay_6[]' value='<?php echo $room[pay_6];?>' style='width:50px;text-align:right'></td>
						<td style='width:60px;'><input type='text' name='pay_7[]' value='<?php echo $room[pay_7];?>' style='width:50px;text-align:right'></td>
						<td style='width:60px;'><input type='text' name='pay_8[]' value='<?php echo $room[pay_8];?>' style='width:50px;text-align:right'></td>
						<td style='width:60px;'><input type='text' name='pay_9[]' value='<?php echo $room[pay_9];?>' style='width:50px;text-align:right'></td>
						<td style='width:200px;'><input type='text' name='memo2[]' value='<?php echo $room[memo2];?>' style='width:190px;'></td>
						<td style='width:150px;'><input type='text' name='memo3[]' value='<?php echo $room[memo3];?>' style='width:140px;'></td>
						<td style='width:150px;'><input type='text' name='memo4[]' value='<?php echo $room[memo4];?>' style='width:140px;'></td>
						<td style='width:60px;'><input type='button' value='삭제' class='buttonindex_2' onclick='room_delete(<?php echo $room[num];?>)'></td></tr>
					<tr><td colspan='29'class="line"></td></tr>
			<?
			//		$room_script .= "\");\n";
			}
			
			$room_length = $room_cnt[cnt]-1;
			
			if ($room_length < 0)
			{
					for ($i=0; $i<7; $i++) {
						$room_script .= "add_file('');\n";
					}
					$room_length = 0;
			}
			//--------------------------------------------------------------------------
			?>
			</table>
			<table id="variableRooms" width="100%" cellpadding=0 cellspacing=0></table>			
			<script language="JavaScript">
			var flen = 0;
			function add_file(delete_code)
			{
					var objTbl;
					var objRow;
					var objCell;
					if (document.getElementById)
							objTbl = document.getElementById("variableRooms");
					else
							objTbl = document.all["variableRooms"];

					objRow = objTbl.insertRow(objTbl.rows.length);
					objCell = objRow.insertCell(0);

					if (delete_code)
							objCell.innerHTML += delete_code;
					else
					{							
							objCell.innerHTML =  "<table class='priceTable'>															<tr align='center'>																		<td style='width:40px;'><input type='hidden' name='num[]'><input type=text name='roomnum[]' style='width:34px;align:center;'></td>	<td height='25' style='width:40px;'><input type='text' name='roomno[]' style='width:34px;'></td>																	<td height='25' style='width:40px;'><input type='text' name='roomname[]' style='width:100px;'></td>	<td height='25' style='width:40px;'><input type='text' name='roomgroup[]' style='width:40px;'></td>																	<td style='width:40px;'><input type='text' name='memo1[]' style='width:80px;'></td>																	<td style='width:40px;'><input type='text' name='pyoung[]' style='width:54px;'></td>																		<td style='width:20px;'><input type='text' name='mancount[]' style='width:20px;'></td>																		<td style='width:20px;'><input type='text' name='mancount_max[]' style='width:20px;'></td>																		<td style='width:50px;'><input type='text' name='pay_normal[]' style='width:50px;'></td>																		<td style='width:50px;'><input type='text' name='pay_fir[]' style='width:50px;'></td>																		<td style='width:50px;'><input type='text' name='pay_week[]' style='width:50px;'></td>                                                                       <td style='width:50px;'><input type='text' name='pay_jun_normal[]' style='width:50px;'></td>																		<td style='width:50px;'><input type='text' name='pay_jun_fri[]' style='width:50px;'></td>                                                                       <td style='width:50px;'><input type='text' name='pay_jun_week[]' style='width:50px;'></td>																		<td style='width:50px;'><input type='text' name='pay_high_normal[]' style='width:50px;'></td>																		<td style='width:50px;'><input type='text' name='pay_high_fri[]' style='width:50px;'></td>                                                                          <td style='width:50px;'><input type='text' name='pay_high_week[]' style='width:50px;'></td>                                                                         <td style='width:50px;'><input type='text' name='pay_max_normal[]' style='width:50px;'></td>																		<td style='width:50px;'><input type='text' name='pay_max_fri[]' style='width:50px;'></td>                                                                          <td style='width:50px;'><input type='text' name='pay_max_week[]' style='width:50px;'></td>																		<td style='width:50px;'><input type='text' name='pay_4[]' style='width:50px;'></td>																		<td style='width:50px;'><input type='text' name='pay_5[]' style='width:50px;'></td>	<td style='width:50px;'><input type='text' name='pay_6[]' style='width:50px;'></td><td style='width:50px;'><input type='text' name='pay_7[]' style='width:50px;'></td><td style='width:50px;'><input type='text' name='pay_8[]' style='width:50px;'></td><td style='width:50px;'><input type='text' name='pay_9[]' style='width:50px;'></td>	<td style='width:60px;'><input type='text' name='memo2[]' style='width:60px;'></td>		<td style='width:60px;'><input type='text' name='memo3[]' style='width:60px;'></td>		<td style='width:60px;'><input type='text' name='memo4[]' style='width:60px;'></td>																															<td style='width:60px;'>&nbsp;</td>																	</tr>																	<tr><td colspan='29' height='5'></td></tr>																	<tr><td colspan='29' class='line'></td></tr>																</table>";					
					}

					flen++;
			}

			<?=$room_script; //수정시에 필요한 스크립트?>
			
			</script>
			<?
			// 가변 룸
			//--------------------------------------------------------------------------
			?>
		</td>
	</tr>	
</table>
</div>
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
	f.action = './payment_update.php';
	f.submit();
}

function frm_submit_room(f) {
	f.action = './payment_update.php';
	f.submit();
}

function room_delete(n) {
	if(confirm("한번 삭제한 자료는 복구할 방법이 없습니다.\n\n정말 삭제하시겠습니까?")) {
		location.href = './payment_update.php?imode=delete&num=' + n;
	}
}
</script>

<?
include_once("./admin.tail.php");
?>
