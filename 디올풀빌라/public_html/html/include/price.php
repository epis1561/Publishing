<?
/*include_once('../html/_common.php');
// 요금 문자열 가공

function get_price($price) {
if (strpos($price,',') === false) return number_format($price);
else return $price;
return 0;
}
// 요금표 명칭정보 가져오기
$row = sql_fetch(" select * from yj_room ");
$row2 = sql_fetch(" select * from yj_room ");
// 요금표 목록 가져오기
if($roomnum) {
	$sql = " select * from yj_room where roomnum='$roomnum'";
} else {
	$sql = " select * from yj_room order by roomno asc";
}
	$result = sql_query($sql);
	$result2 = sql_query($sql);
?>

<? if($roomnum) { // 1개의 객실정보 출력
	for ($k=0; $k<=$i; $k++) {
	$row[$k][roomno] = sprintf('%02d',$k + 1); //반복문 반복된 횟수에 따라 생성되는 번호, $roomnum은 URL에서의 번호를 따옴
	if ($roomnum == $row[$k][roomno]) {
?>

	<div class="table-guide">
		표를 좌우(<i class="fa fa-arrows-h"></i>)로 움직여주세요.
	</div>
	<div class="table-price">
		<table class="reserTable">
			<colgroup>
				<col>
				<col style="width:15%;">
				<col style="width:11%;">
				<col style="width:19%;">
				<col style="width:8%;">
				<col style="width:8%;">
			</colgroup>
			<thead>
				<tr>
					<th scope="col" rowspan="2">객실</th>
					<th scope="col" rowspan="2">유형</th>
					<th scope="col" rowspan="2">주차</th>
					<th scope="col" rowspan="2">크기(m)</th>
					<th scope="col" colspan="2">인원</th>
				</tr>
				<tr>
					<th scope="col">기준</th>
					<!--th scope="col">최대</th-->
				</tr>
			</thead>
			<tbody>
				<?
					$i = 1;
					while ($row = sql_fetch_array($result, MYSQL_BOTH)) {
					//$row[anchorlink] = sprintf('%02d',$row[roomnum]); //링크변수 01, 02, 03.. 규칙으로 새로 생성하여 링크 바꿔줌
				?>
				<tr>
					<tr>
					<th scope="row"><?echo $row[roomname]?></th>
					<td><?echo $row[memo1]?></td>
					<td><?echo $row[pay_9]?></td>
					<td><?echo $row[pyoung]?></td>
					<td><?echo $row[mancount]?>명</td>
					<td><?echo $row[mancount_max]?>명</td>
				</tr>
				<?
					$i++;
				} ?>
			</tbody>
		</table>
	</div>
<? }
}
?>
<? } else { //전체출력?>
	<table class="reserTable">
		<colgroup>
			<col style="width:15%;">
			<col>
			<col>
			<col>
			<col>
			<col>
			<col style="width:13%;">
		</colgroup>
		<thead>
			<tr>
				<th scope="col" rowspan="2">객실</th>
				<th scope="col" rowspan="2">유형</th>
				<th scope="col" rowspan="2">주차</th>
				<th scope="col" rowspan="2">크기(m)</th>
				<th scope="col" colspan="2">인원</th>
				<th scope="col" rowspan="2">요금</th>
			</tr>
			<tr>
				<th scope="col">기준</th>
				<th scope="col">최대</th>
			</tr>
		</thead>
		<?
			$i = 1;
			while ($row = sql_fetch_array($result, MYSQL_BOTH)) {
			$row[anchorlink] = sprintf('%02d',$row[roomnum]); //링크변수 01, 02, 03.. 규칙으로 새로 생성하여 링크 바꿔줌
			$row[roomno] = sprintf('%02d',$row[roomno]);
		?>
		<tbody>
			<tr class="room_<?echo $row[roomno]?>">
				<th scope="row" class="roomName">
					<?echo $row[roomname]?>
					<div class="roomLink"><a href="./room.php?roomnum=<?echo $row[anchorlink]?>" title="<?echo $row[roomname]?>"><?echo $row[roomname]?></a></div>
				</th>
				<td><?echo $row[memo1]?></td>
				<td><?echo $row[pay_9]?></td>
				<td><?echo $row[pyoung]?></td>
				<td><?echo $row[mancount]?>명</td>
				<td><?echo $row[mancount_max]?>명</td>
				<td><?echo get_price($row[pay_normal]);?>만원</td>
			</tr>
		</tbody>
		<?
			$i++;
		} ?>
	</table>
<?
}
$dom=null;*/
?>
<script type="text/javascript" id="ddnayoapi" src="https://www.ddnayo.com/api/script.aspx?apiuser=gogopeople" charset="utf-8"></script>
<?php if ($roomno) { ?>
<div style="width:100%;" id="room_daily_price1"></div>     
<script type="text/javascript">      	
	ddnayo.room.price.dailytable($("#room_daily_price1").get(0), {
		"id_hotel": "100517"		/* 업소 코드 */
		, "id_room_type": "<?= $typeno ?>"		/* 객실타입 코드 */
		, "su_day": 5			/* 출력일자 : 파라미터 생략시 기본 7일 최대 7일 */
	});        
</script>
<?php } else { ?>
<link rel="StyleSheet" href='https://www.ddnayo.com/api/script.css' type="text/css" />
<div style="width:100%;" id="total_daily_price3"></div>
<script type="text/javascript">
	ddnayo.price.dailytable($("#total_daily_price3").get(0), {
  	"id_hotel": "100517"		/* 업소 코드 */
    , "su_day": "5"			/* 출력일자 : 파라미터 생략시 기본 7일 최대 7일 */
    , "is_room_grp": "false"	/* 객실그룹여부 : 파라미터 생략시 기본 true */
  });
</script>
<?php } ?>
<style type="text/css">
	.nm { width: 100%; }
</style>