<link rel="stylesheet" href="/css/reservation2.css">
<head>
	<style>
		@media(max-width:500px){
			.block1 .mail{
				justify-content: start !important;
				
}
		}
		.mail-flex{
			margin: 0 !important;
		}
		.mail-flex input{
			width: 100% !important;
		}
		@media(max-width:320px){
			.block1 select{
				width: 55% !important;
			}
			.block1 input{
				width: 55% !important;
			}
			.mail-flex input{
			width: 120% !important;
		
		}
		.block1 .mail{
			gap: 5% !important;
		}
		}
	</style>
</head>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var postData = <?= json_encode($this->input->post()); ?>;
        if (!postData || Object.keys(postData).length === 0) {
			alert('잘못된 접근 입니다.')
            window.location.href = "http://xn--jk1bl1k9ynz2idlb.kr/check";
        }
    });
</script>
<?php
include('header.php');

 $res_no = $this -> input -> post('res_no', TRUE);
 $p_r_pass = $this -> input -> post('c_pass', TRUE);

//$res_no = "231019231616";
// $p_r_pass = "11";
$admin_pass = "abcd1234!!";


$sql = "SELECT * FROM `reserve` WHERE `res_no` = '$res_no' ";
$data['slist'] = $this -> data_model -> getList($sql, 'DB');

foreach ($data['slist'] as $row)
{
	$r_pro =  $row['r_pro']; 
	$r_name =  $row['r_name']; 
	$r_pass =  $row['r_pass']; 
	$r_tel =  $row['r_tel']; 
	$r_mail =  $row['r_mail']; 
	$r_date =  $row['r_date']; 
	$r_days =  $row['r_days']; 
	$r_arrive =  $row['r_arrive']; 
	$r_group =  $row['r_group']; 
	
	$r_num =  $row['r_num']; 

	$r_pro1 = ($row['r_pro1'] == 1) ? 'checked="checked"' : "";
	$r_pro2 = ($row['r_pro2'] == 1) ? 'checked="checked"' : "";
	$r_pro3 = ($row['r_pro3'] == 1) ? 'checked="checked"' : "";
	$r_pro4 = ($row['r_pro4'] == 1) ? 'checked="checked"' : "";
	$r_pro5 = ($row['r_pro5'] == 1) ? 'checked="checked"' : "";
	$r_pro6 = ($row['r_pro6'] == 1) ? 'checked="checked"' : "";
	$r_pro7 = ($row['r_pro7'] == 1) ? 'checked="checked"' : "";
	$r_pro8 = ($row['r_pro8'] == 1) ? 'checked="checked"' : "";
	$r_pro9 = ($row['r_pro9'] == 1) ? 'checked="checked"' : "";
	$r_pro10 = ($row['r_pro10'] == 1) ? 'checked="checked"' : "";
	$r_pro11 = ($row['r_pro11'] == 1) ? 'checked="checked"' : "";
	$r_pro12 = ($row['r_pro12'] == 1) ? 'checked="checked"' : "";
	$r_pro13 = ($row['r_pro13'] == 1) ? 'checked="checked"' : "";
	$r_pro14 = ($row['r_pro14'] == 1) ? 'checked="checked"' : "";
	$r_pro15 = ($row['r_pro15'] == 1) ? 'checked="checked"' : "";
	$r_pro16 = ($row['r_pro16'] == 1) ? 'checked="checked"' : "";

	$r_dish0 = ($row['r_dish0'] == 1) ? 'checked="checked"' : "";
	$r_dish1 = ($row['r_dish1'] == 1) ? 'checked="checked"' : "";
	$r_dish2 = ($row['r_dish2'] == 1) ? 'checked="checked"' : "";

	$r_room0 = ($row['r_room0'] == 1) ? 'checked="checked"' : "";
	$r_room1 = ($row['r_room1'] == 1) ? 'checked="checked"' : "";
	$r_room2 = ($row['r_room2'] == 1) ? 'checked="checked"' : "";
	$r_room3 = ($row['r_room3'] == 1) ? 'checked="checked"' : "";
	$r_room4 = ($row['r_room4'] == 1) ? 'checked="checked"' : "";
	$r_room5 = ($row['r_room5'] == 1) ? 'checked="checked"' : "";
	$r_room6 = ($row['r_room6'] == 1) ? 'checked="checked"' : "";
	$r_room7 = ($row['r_room7'] == 1) ? 'checked="checked"' : "";
	$r_room8 = ($row['r_room8'] == 1) ? 'checked="checked"' : "";
	$r_room9 = ($row['r_room9'] == 1) ? 'checked="checked"' : "";
	$r_room10 = ($row['r_room10'] == 1) ? 'checked="checked"' : "";
	$r_room11 = ($row['r_room11'] == 1) ? 'checked="checked"' : "";
	$r_room12 = ($row['r_room12'] == 1) ? 'checked="checked"' : "";
	$r_room13 = ($row['r_room13'] == 1) ? 'checked="checked"' : "";
	$r_room14 = ($row['r_room14'] == 1) ? 'checked="checked"' : "";
	$r_room15 = ($row['r_room15'] == 1) ? 'checked="checked"' : "";
	$r_room16 = ($row['r_room16'] == 1) ? 'checked="checked"' : "";
	$r_room17 = ($row['r_room17'] == 1) ? 'checked="checked"' : "";
	$r_room18 = ($row['r_room18'] == 1) ? 'checked="checked"' : "";
	$r_room19 = ($row['r_room19'] == 1) ? 'checked="checked"' : "";
	$r_room20 = ($row['r_room20'] == 1) ? 'checked="checked"' : "";
	$r_room21 = ($row['r_room21'] == 1) ? 'checked="checked"' : "";
	$r_room22 = ($row['r_room22'] == 1) ? 'checked="checked"' : "";
	$r_room23 = ($row['r_room23'] == 1) ? 'checked="checked"' : "";

	$r_stay =  $row['r_stay']; 
	$r_week =  $row['r_week']; 

	$r_facil0 =  $row['r_facil0']; 
	$r_facil1 =  $row['r_facil1']; 
	$r_facil2 =  $row['r_facil2']; 

	$file1 =  $row['file1']; 
	$file2 =  $row['file2']; 

	$request1 =  $row['request1']; 
	$r_status =  $row['r_status'];

}

if($file1 == null)
$file1 = "";

if($file2 == null)
$file2 = "";

$admin = "";
if($file2 == ""){
	$admin = '<div class="upload">
	<label for="file">견적서 등록</label>
	<input type="file" name="file" id="file" accept=".pdf">
	<input class="upload-file" value="PDF파일을 올려주세요." placeholder="PDF파일을 올려주세요.">
	';	
	}
	else{
		$admin = $admin. ' <div class="btns">
	<a href="http://xn--jk1bl1k9ynz2idlb.kr/application/uploads/'.$file2.'" >견적서 확인</a>';
	
	
	}

	if($r_status != 3 && $r_status != 4){
		if($file2 != "" && $r_status != 2)	
			$admin = $admin. '<button type="button" id="r_credit">입금완료</button>';
		$admin = $admin. '<button type="button" id="r_cancel">예약취소</button>';
	}
	$admin = $admin. '</div>';
	

$user="";
if($file2 != ""){
$user = '<a href="http://xn--jk1bl1k9ynz2idlb.kr/application/uploads/'.$file2.'" >견적서 확인</a>';
}
if($r_status != 3 && $r_status != 4){
$user = $user.'<button type="button" id="r_cancel">예약취소</button>';
}
$is_admin = ($p_r_pass == $admin_pass ) ? 1 : 0 ;
$in_html = ($p_r_pass == $admin_pass ) ? $admin : $user;

$file1_app = "";

if($file1 != ""){
	$file1_app = '<a href="http://xn--jk1bl1k9ynz2idlb.kr/application/uploads/'.urlencode($file1).'" >파일 확인</a>';
	}

?>
<!-- 업주용 예약확인페이지 입니다. -->
<!-- 업주용 예약확인페이지 입니다. -->
<!-- 업주용 예약확인페이지 입니다. -->
<div class="toparea">
	<div class="top1 roka">예약 확인</div>
</div>


<form action="" method="post"  id="form1" name="form1">
<div class="btns">
<?php echo $in_html ?>
		
	</div>

</div>

<div class="alert" id="alert1">
	<p>확인버튼 클릭 시 입금완료 처리됩니다.</p>
	<button type="button" id="pay" name="pay">확인</button>
	<button type="button">아니오</button>
</div>
<?php
	$c_message = '정말 예약을 취소하시겠습니까?';
	if($r_status == 2)
	{
		$c_message = '입금이 완료된 예약건 입니다. 예약취소 하시겠습니까?';
	}

	if($r_status != 2 && $is_admin == 1)
	{
		$c_message = '입금 전 예약건 입니다. 예약취소 하시겠습니까?';
	}

?>
<div class="alert" id="alert2">
	<p><?php echo $c_message?></p>
	<button type="button" id = "cancle" name = "cancle">네</button>
	<button type="button" onclick="$('#alert2').hide();">아니오</button>
</div>

<div class="alert" id="alert3">
	<p>이미 입금이 완료된 예약입니다.<br>입금이 완료된 예약의 취소는 담당자에게 문의 부탁드립니다.</p>
	<a href="tel:010-9120-6288">010 - 9120 - 6288</a>
	<button type="button" onclick="$('#alert3').hide();">닫기</button>
</div>

<div class="wrap_all">
		<div class="flex-all mid">
			<div class="block block1">
				<div class="flex">
					<img src="/images/reser/title10.png" alt="">
					<img src="/images/reser/m/title10.png" alt="" id="img-m">
					<span class="bold">*필수입력항목</span>
				</div>
				<div class="margin">
					<div class="flexbox">
						<label for="r_pro">· 프로그램 유형<span class="bold">*</span></label>
						<select name="r_pro" id="r_pro">
							<option value=""><?echo $r_pro?></option>
							<option value="">기업연수</option>
							<option value="">학생단체</option>
						</select>
					</div>
					<div class="flexbox">
						<label for="r_name" class="mid">· 신청인<span class="bold">*</span></label>
						<input type="text" name="r_name" id="r_name" value = "<?echo $r_name?>" required>
						
					</div>
					<div class="flexbox">
						<label for="r_tel" class="mid">· 예약자 전화번호<span class="bold">*</span></label>
						<input type="tel" name="r_tel" id="r_tel" value="<?echo $r_tel?>" required pattern="(010)-\d{3,4}-\d{4}"
							title="형식 010-0000-0000">
						
					</div>
					<div class="flexbox mail">
						<label for="r_mail" class="mid">· 이메일<span class="bold">*</span></label>
						<div class="mail-flex">
							<input style="width:75%;" type="text" name="r_mail" id="r_mail" value="<?echo $r_mail?>" required>
						</div>
					</div>
					<div class="flexbox">
						<label for="r_date" class="mid">· 이용일자<span class="bold">*</span></label>
						<input type="date" name="r_date" id="r_date" data-placeholder="<?echo $r_date?>" required
							aria-required="true">
						
					</div>
					<div class="flexbox">
						<label for="r_days" class="mid">· 일정<span class="bold">*</span></label>
						<select name="r_days" id="r_days" required>
							<option value=""><?echo $r_days?>박</option>
							<option value="">1박</option>
							<option value="">2박</option>
							<option value="">3박</option>
							<option value="">4박</option>
							<option value="">5박</option>
							<option value="">6박</option>
							<option value="">7박</option>
						</select>
						
					</div>
					<div class="flexbox">
						<label for="r_arrive" class="mid">· 도착시간</label>
						<select name="r_arrive" id="r_arrive">
							<option value=""><?echo $r_arrive?></option>
							<option value="">10:00</option>
							<option value="">11:00</option>
							<option value="">12:00</option>
							<option value="">13:00</option>
							<option value="">14:00</option>
							<option value="">15:00</option>
							<option value="">16:00</option>
							<option value="">17:00</option>
							<option value="">18:00</option>
							<option value="">19:00</option>
							<option value="">20:00</option>
							<option value="">21:00</option>
						</select>
					</div>
					<div class="flexbox">
						<label for="r_group" class="mid">· 단체명</label>
						<input type="text" name="r_group" id="r_group" value="<?echo $r_group?>">
					</div>
					<div class="flexbox">
						<label for="r_num" class="mid">· 참가인원<span class="bold">*</span></label>
						<input type="number" name="r_num" id="r_num" value="<?echo $r_num?>" required>
						
					</div>
				</div>
			</div>
		</div>
		<div class="block block2 mid">
			<img src="/images/reser/title11.png" alt="">
			<img src="/images/reser/m/title11.png" alt="" id="img-m">
			<!-- 패키지 / 레저,교육,단체로구분
            패키지 선택(중복불가능) 시 레저,교육,단체는 선택안되도록
            반대로 패키지 선택을 안한 상황에서는 레저,교육,단체 3가지 중복선택가능
    -->
			<div class="margin">
				<div class="program">
					<div class="leftbox">· 패키지</div>
					<div class="rightbox">
						<label for="r_pro1"><input type="checkbox" name="r_pro1" id="r_pro1" <?echo $r_pro1?> >당일 프로그램(프로그램 무제한 선택, 30명
							이상, 식사 1회)</label>
						<label for="r_pro2"><input type="checkbox" name="r_pro2" id="r_pro2" <?echo $r_pro2?> >무제한 프로그램(프로그램 무제한 선택, 30명
							이상, 식사 2회)</label>
						<label for="r_pro3"><input type="checkbox" name="r_pro3" id="r_pro3" <?echo $r_pro3?> >워크샵/세미나(30명 이상, 식사
							2회)</label>
						<label for="r_pro4"><input type="checkbox" name="r_pro4" id="r_pro4" <?echo $r_pro4?> >레저 및 단체 행사(프로그램 2개 선택, 10명
							이상, 식사 2회)</label>
						<label for="r_pro5"><input type="checkbox" name="r_pro5" id="r_pro5" <?echo $r_pro5?> >대학교,MT,OT,교회/성당 수련회 패키지(숙박
							1박 + 식사 1회 + 서비스 프로그램 1개)</label>
					</div>
				</div>
				<div class="program">
					<div class="leftbox">· 레저 프로그램</div>
					<div class="rightbox">
						<label for="r_pro6"><input type="checkbox" name="r_pro6" id="r_pro6" <?echo $r_pro6?> >서바이벌(1인당 100발, 전술 3게임, 약
							2시간 소요) *인원에 따라 이용시간이 달라질 수 있음</label>
						<label for="r_pro7"><input type="checkbox" name="r_pro7" id="r_pro7" <?echo $r_pro7?> >슈팅(사격) 토너먼트</label>
						<label for="r_pro8"><input type="checkbox" name="r_pro8" id="r_pro8" <?echo $r_pro8?> >팀워크 MTB 산악코스</label>
						<label for="r_pro9"><input type="checkbox" name="r_pro9" id="r_pro9" <?echo $r_pro9?> >팀워크 MTB 강변코스</label>
					</div>
				</div>
				<div class="program">
					<div class="leftbox">· 교육 프로그램</div>
					<div class="rightbox">
						<label for="r_pro10"><input type="checkbox" name="r_pro10" id="r_pro10" <?echo $r_pro10?> >팀 빌딩 조직 활성화 프로그램(약 2시간
							소요, 프로그램 장비 및 강사 포함 진행)</label>
						<label for="r_pro11"><input type="checkbox" name="r_pro11" id="r_pro11" <?echo $r_pro11?> >민속 팀 빌딩 게임 프로그램(약 2시간
							소요, 프로그램 장비 및 강사 포함 진행)</label>
						<label for="r_pro12"><input type="checkbox" name="r_pro12" id="r_pro12" <?echo $r_pro12?> >의식 마인드업 신념화 프로그램(약 2시간
							소요, 프로그램 장비 및 강사 포함 진행)</label>
						<label for="r_pro13"><input type="checkbox" name="r_pro13" id="r_pro13" <?echo $r_pro13?> >한마음 직소퍼즐 챔피언십(약 2시간 소요,
							팀워크 훈련 직소퍼즐 강사 포함 진행)</label>
					</div>
				</div>
				<div class="program">
					<div class="leftbox">· 단체 프로그램</div>
					<div class="rightbox">
						<label for="r_pro14"><input type="checkbox" name="r_pro14" id="r_pro14" <?echo $r_pro14?> >체육대회</label>
						<label for="r_pro15"><input type="checkbox" name="r_pro15" id="r_pro15" <?echo $r_pro15?> >명랑운동회</label>
						<label for="r_pro16"><input type="checkbox" name="r_pro16" id="r_pro16" <?echo $r_pro16?> >레크레이션</label>
						<span>※ 단체 행사 프로그램 중 자유 선택 / 파트별 전문강사 2시간 진행 / 약 30개 프로그램 / 행사진행 음향 및 앰프, 각종 소품 일체 포함</span>
					</div>
				</div>
			</div>
		</div>

		<div class="block block3 mid">
			<img src="/images/reser/title12.png" alt="">
			<img src="/images/reser/m/title12.png" alt="" id="img-m">
			<div class="margin">
				<div class="program">
					<div class="leftbox">· 중식</div>
					<div class="rightbox">
						<label for="r_dish0"><input type="checkbox" name="r_dish0" id="r_dish0" <?echo $r_dish0?> >이용 안함</label>
						<label for="r_dish1"><input type="checkbox" name="r_dish1" id="r_dish1" <?echo $r_dish1?> >일반식(제육정식, 김치찌개, 순두부찌개 중
							택1)</label>
						<label for="r_dish2"><input type="checkbox" name="r_dish2" id="r_dish2" <?echo $r_dish2?> >특별식(불고기전골, 닭볶음탕, 민물매운탕 등
							전골류 택1)</label>
					</div>
				</div>
			</div>
		</div>

		<div class="block block4 mid">
			<img src="/images/reser/title13.png" alt="">
			<img src="/images/reser/m/title13.png" alt="" id="img-m">
			<div class="margin">
				<div class="flex2">
					<div class="leftbox">· 토담동</div>
					<div class="program">
						<div class="rightbox">
							<label for="r_room0"><input type="checkbox" name="r_room0" id="r_room0" <?echo $r_room0?> >토담 A동(최대 6명)</label>
							<label for="r_room1"><input type="checkbox" name="r_room1" id="r_room1" <?echo $r_room1?> >토담 B동(최대 6명)</label>
							<label for="r_room2"><input type="checkbox" name="r_room2" id="r_room2" <?echo $r_room2?> >토담 S동(최대 10명)</label>
							<label for="r_room3"><input type="checkbox" name="r_room3" id="r_room3" <?echo $r_room3?> >토담 k동(최대 10명)</label>
							<label for="r_room4"><input type="checkbox" name="r_room4" id="r_room4" <?echo $r_room4?> >토담 I동(최대 10명)</label>
						</div>
					</div>
				</div>
				<div class="flex2">
					<div class="leftbox">· 더포천동</div>
					<div class="program">
						<div class="rightbox">
							<label for="r_room5"><input type="checkbox" name="r_room5" id="r_room5" <?echo $r_room5?> >101동(최대 12명)</label>
							<label for="r_room6"><input type="checkbox" name="r_room6" id="r_room6" <?echo $r_room6?> >102동(최대 12명)</label>
							<label for="r_room7"><input type="checkbox" name="r_room7" id="r_room7" <?echo $r_room7?> >103동(최대 12명)</label>
							<label for="r_room8"><input type="checkbox" name="r_room8" id="r_room8" <?echo $r_room8?> >105동(최대 12명)</label>
							<label for="r_room9"><input type="checkbox" name="r_room9" id="r_room9" <?echo $r_room9?> >106동(최대 12명)</label>
							<label for="r_room10"><input type="checkbox" name="r_room10" id="r_room10" <?echo $r_room10?> >107동(최대 12명)</label>
							<label for="r_room11"><input type="checkbox" name="r_roo11" id="r_room11" <?echo $r_room11?> >108동(최대 12명)</label>
						</div>
					</div>
				</div>
				<div class="flex2">
					<div class="leftbox">· 도담동</div>
					<div class="program">
						<div class="rightbox">
							<label for="r_room12"><input type="checkbox" name="r_room12" id="r_room12" <?echo $r_room12?> >도담 가동(최대 6명)</label>
							<label for="r_room13"><input type="checkbox" name="r_room13" id="r_room13" <?echo $r_room13?> >도담 나동(최대 6명)</label>
							<label for="r_room14"><input type="checkbox" name="r_room14" id="r_room14" <?echo $r_room14?> >도담 다동(최대 6명)</label>
							<label for="r_room15"><input type="checkbox" name="r_room15" id="r_room15" <?echo $r_room15?> >도담 라동(최대 6명)</label>
							<label for="r_room16"><input type="checkbox" name="r_room16" id="r_room16" <?echo $r_room16?> >도담 마동(최대 6명)</label>
						</div>
					</div>
				</div>
				<div class="flex2">
					<div class="leftbox">· 수련동</div>
					<div class="program">
						<div class="rightbox">
							<label for="r_room17"><input type="checkbox" name="r_room17" id="r_room17" <?echo $r_room17?> >도담 202호(최대 4명)</label>
							<label for="r_room18"><input type="checkbox" name="r_room18" id="r_room18" <?echo $r_room18?> >도담 203호(최대 4명)</label>
							<label for="r_room19"><input type="checkbox" name="r_room19" id="r_room19" <?echo $r_room19?> >도담 204호(최대 4명)</label>
							<label for="r_room20"><input type="checkbox" name="r_room20" id="r_room20" <?echo $r_room20?> >도담 205호(최대 4명)</label>
							<label for="r_room21"><input type="checkbox" name="r_room21" id="r_room21" <?echo $r_room21?> >도담 206호(최대 4명)</label>
							<label for="r_room22"><input type="checkbox" name="r_room22" id="r_room22" <?echo $r_room22?> >도담 207호(최대 4명)</label>
							<label for="r_room23"><input type="checkbox" name="r_room23" id="r_room23" <?echo $r_room23?> >도담 208호(최대 4명)</label>
						</div>
					</div>
				</div>
			</div>
			<div class="margin colunm">
				<div class="flex">
					<label for="r_stay">· 숙박일</label>
					<select name="r_stay" id="r_stay">
						<option value=""><?echo $r_stay?>박</option>
						<option value="">2박</option>
						<option value="">3박</option>
						<option value="">4박</option>
						<option value="">5박</option>
						<option value="">6박</option>
						<option value="">7박</option>
					</select>
				</div>
				<div class="flex">
					<label for="r_week">· 숙박요일</label>
					<select name="r_week" id="r_week">
						<option value=""><?echo $r_week?></option>
						<option value="">주말(금~토요일)</option>
						<option value="">복합</option>
					</select>
				</div>
			</div>
		</div>

		<div class="block block5 mid">
			<img src="/images/reser/title14.png" alt="">
			<img src="/images/reser/m/title14.png" alt="" id="img-m">
			<div class="margin">
				<div class="flexbox">
					<label for="r_facil0">· 세미나실</label>
					<select name="r_facil0" id="r_facil0">
						<option value=""><?echo $r_facil0?></option>
						<option value="">이용안함</option>
						<option value="">종일</option>
						<option value="">반일(4시간)</option>
					</select>
				</div>

				<div class="flexbox">
					<label for="r_facil1">· 잔디구장</label>
					<select name="r_facil1" id="r_facil1">
						<option value=""><?echo $r_facil1?></option>
						<option value="">이용안함</option>
						<option value="">종일</option>
						<option value="">반일(4시간)</option>
					</select>
				</div>

				<div class="flexbox">
					<label for="r_facil2">· 노래방</label>
					<select name="r_facil2" id="r_facil2">
						<option value=""><?echo $r_facil2?></option>
						<option value="">이용안함</option>
						<option value="">객실</option>
						<option value="">앰프시설</option>
					</select>
				</div>
			</div>
		</div>
		<div class="block block6 mid">
			<img src="/images/reser/title15.png" alt="">
			<img src="/images/reser/m/title15.png" alt="" id="img-m">
			
			<div class="margin">
				<div class="flex">
					<!-- 사용자 파일 다운로드 -->
					<?php echo $file1_app?> 
				</div>
				
				<textarea name="request1" id="request1" cols="20" rows="10"><?echo $request1?></textarea>
			</div>
		</div>

		<div class="block block7 bold">
		<button type="button" id="save_button">확인</button>
		</div>

		<div class="block block8 mid">
			<div class="margin mid">
			<span class="bold" style="display:block">※ 인근 주민 및 타 고객의 피해가 없도록 노래방 및 캠프파이어는 22:00까지 제한하고 있으니 이 점 양해해 주시기 바랍니다.</span>
			1.입실은 오후3시, 퇴실은 다음날 오전11시 입니다.<br>
			2.실내 절대 금연이며, 적발시 강제 퇴실 조치됩니다.<br>
			3.향이나 초, 모기향, 가스버너 등 화기에 관련된 제품은 실내 사용을 금지하고 있습니다.(무단 사용으로 화재 발생 시 민형사상 책임이 있습니다.)<br>
			4.보호자 동반없는 미성년자는 예약 및 입실 절대 불가합니다.<br>
			5.객실별 최대인원 초과 시 입실 불가합니다.<br>
			6.바비큐 이용 시 개별 장비 및 개인 화기는 사용 불가합니다.<br>
			7.예약 후 이용일자 및 객실 변경은 해당예약 취소 후 다시 재예약하셔야 합니다.(예약변경을 위한 취소시에도 취소수수료가 부과되오니 신중하게 예약하시기 바랍니다.)<br>
			8.애완견 동반입실은 불가합니다.<br>
			9.밤 10시 이후, 쾌적한 휴식을 위하여 무분별한 오락, 음주 및 고성방가를 자제하여 주시기 바랍니다.<br>
			10.시설문 훼손 및 파손하거나 분실시에는 다음 손님이 불편하시지 않도록 반드시 알려주셔야 합니다.<br>
			11.현금을 포함한 개인소지 귀중품의 분실 및 도난에 대해서는 펜션에서 책임지지 않습니다. 관리에 주의 부탁드립니다.<br>
			12.펜션이용 시 아동을 포함한 고객분의 안전에 유의하여 주시고, 본인 부주의로 인한 안전사고에 대해서는 펜션에서 책임지지 않습니다.<br>
			13.퇴실 시 음식물을 비롯한 모든 쓰레기는 분리수거해 주시고, 사용하신 주방기구는 세척해 주시기 바랍니다.
			</div>
		</div>
		<input type="hidden" id="res_no" name="res_no" value="<?php echo $res_no?>"></input>
		<input type="hidden" id="file2" name="file2" value=""></input>
		<input type="hidden" id="is_admin" name="is_admin" value="<?php echo $is_admin?>"></input>
	</form>
</div>



<script>
$("#file").on('change',function(){
	$('.upload-file').val(this.files[0].name).val();
	$('#file2').val(this.files[0].name).val();
});

$('.btns #r_credit').click(function(){
	if('<?php echo $file2 ?>' == ''){
		alert('견적서 등록 전 입니다');
	return;
	}
	$('#alert1').show();
})
$('.btns #r_cancel').click(function(){
	if(<?php echo $r_status ?> == 2 && <?php echo $is_admin ?> == 0  )
		{
			$('#alert3').show();
			return;
		}
	$('#alert2').show();
})
$('.block input, .block select, .block textarea').prop('disabled', true);


$(document).ready(function() {
    $('#save_button').click(function() {

		if(<?php echo $is_admin?> == 0){
			window.location.href = "http://xn--jk1bl1k9ynz2idlb.kr/check";
		}

		var formData = new FormData($("#form1")[0]);
		var serializedData = $("#form1").serialize();

		formData.append('serializedData', serializedData);
		
		$.ajax({
					url: 'Database/update_admin',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response){
                        alert('저장되었습니다');
						window.location.href = "http://xn--jk1bl1k9ynz2idlb.kr/check";
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error('AJAX 에러:', textStatus, errorThrown);
                    }
                });
    });


    $('#pay').click(function() {

		var formData = new FormData($("#form1")[0]);
		var serializedData = $("#form1").serialize();

		formData.append('serializedData', serializedData);

		$.ajax({
					url: 'Database/update_pay',
					type: 'POST',
					data: formData,
					contentType: false,
					processData: false,
					success: function(response){
						alert('저장되었습니다');
						window.location.href = "http://xn--jk1bl1k9ynz2idlb.kr/check";
					},
					error: function(jqXHR, textStatus, errorThrown) {
						console.error('AJAX 에러:', textStatus, errorThrown);
					}
				});
		});	


    $('#cancle').click(function() {

		var formData = new FormData($("#form1")[0]);
		var serializedData = $("#form1").serialize();

		formData.append('serializedData', serializedData);

		$.ajax({
					url: 'Database/cancle_res',
					type: 'POST',
					data: formData,
					contentType: false,
					processData: false,
					success: function(response){
						alert('저장되었습니다');
						window.location.href = "http://xn--jk1bl1k9ynz2idlb.kr/check";
					},
					error: function(jqXHR, textStatus, errorThrown) {
						alert('AJAX 에러:', textStatus, errorThrown);
					}
				});
		});			


});

</script>
<?php
include('footer.php');
?>