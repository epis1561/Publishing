<link rel="stylesheet" href="/css/reservation2.css">
<?php
include('header.php');
?>
<div class="toparea">
	<div class="top1 roka">실시간 예약신청</div>
	<div class="top2 bold">
		<p>실시간 견적내기 후 [예약대기]상태로 등록 <span>*관리자가 관리자 비밀번호 입력시 내용 확인 가능</span></p>
	</div>
</div>
<div class="wrap_all">
	<form id="form1" action="" method="post" enctype="multipart/form-data">
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
						<select name="r_pro" id="r_pro" class="required">
							<option value="">선택해주세요.</option>
							<option value="기업연수">기업연수</option>
							<option value="학생단체">학생단체</option>
						</select>
					</div>
					<div class="flexbox">
						<label for="r_name" class="mid">· 신청인<span class="bold">*</span></label>
						<input type="text" name="r_name" id="r_name"  class="required" required>

					</div>
					<div class="flexbox">
						<label for="r_pass" class="mid">· 패스워드<span class="bold">*</span></label>
						<input type="password" name="r_pass" id="r_pass" class="required" required>
					</div>
					<div class="flexbox">
						<label for="r_pass2" class="mid">· 패스워드확인<span class="bold">*</span></label>
						<input type="password" name="r_pass2" id="r_pass2" class="required" required>
					</div>
					<div class="flexbox">
						<label for="r_tel" class="mid">· 예약자 전화번호<span class="bold">*</span></label>
						<input type="tel" name="r_tel" id="r_tel" class="required" required pattern="(010)-\d{3,4}-\d{4}"
							title="형식 010-0000-0000">
					</div>
					<span style="font-size:11px;">*한메일은 예약안내메일이 발송되지않으니 다른메일주소로 부탁드립니다.</span>
					<div class="flexbox mail">
						<label for="r_mail" class="mid">· 이메일<span class="bold">*</span></label>
						<div class="mail-flex">
							<input type="text" name="r_mail" id="r_mail" class="required" required>&nbsp;&nbsp;@&nbsp;
							<input type="text" name="r_dom" id="r_dom" class="required" required>
						</div>
						<div class="mail-m">
							<select name="domain" id="domain">
								<option value="">선택</option>
								<option value="">직접입력</option>
								<option value="naver.com">naver.com</option>
								<option value="gmail.com">gmail.com</option>
								<option value="daum.net">daum.net</option>
							</select>
						</div>
						
					</div>
					<div class="flexbox">
						<label for="r_date" class="mid">· 이용일자<span class="bold">*</span></label>
						<input type="date" name="r_date" id="r_date" class="required" data-placeholder="날짜 선택" required
							aria-required="true">

					</div>
					<div class="flexbox">
						<label for="r_days" class="mid">· 일정<span class="bold">*</span></label>
						<select name="r_days" id="r_days" class="required" required>
							<option value="0">당일이용</option>
							<option value="1">1박</option>
							<option value="2">2박</option>
							<option value="3">3박</option>
							<option value="4">4박</option>
							<option value="5">5박</option>
							<option value="6">6박</option>
							<option value="7">7박</option>
						</select>

					</div>
					<div class="flexbox">
						<label for="r_arrive" class="mid">· 도착시간</label>
						<select name="r_arrive" id="r_arrive">
							<option value="09:00">09:00</option>
							<option value="10:00">10:00</option>
							<option value="11:00">11:00</option>
							<option value="12:00">12:00</option>
							<option value="13:00">13:00</option>
							<option value="14:00">14:00</option>
							<option value="15:00">15:00</option>
							<option value="16:00">16:00</option>
							<option value="17:00">17:00</option>
							<option value="18:00">18:00</option>
							<option value="19:00">19:00</option>
							<option value="20:00">20:00</option>
							<option value="21:00">21:00</option>
						</select>
					</div>
					<div class="flexbox">
						<label for="r_group" class="mid">· 단체명</label>
						<input type="text" name="r_group" id="r_group">
					</div>
					<div class="flexbox">
						<label for="r_num" class="mid">· 참가인원<span class="bold">*</span></label>
						<input type="number" name="r_num" id="r_num" class="required" required>

					</div>
				</div>
			</div>
		</div>
		<div class="block block2 mid">
			<img src="/images/reser/title11.png" alt="">
			<img src="/images/reser/m/title11.png" alt="" id="img-m">
			<span class="bold">*원하는 프로그램을 선택하세요.</span>
			<!-- 패키지 / 레저,교육,단체로구분
            패키지 선택(중복불가능) 시 레저,교육,단체는 선택안되도록
            반대로 패키지 선택을 안한 상황에서는 레저,교육,단체 3가지 중복선택가능
    -->
			<div class="margin">
				<div class="program">
					<div class="leftbox">· 패키지</div>
					<div class="rightbox dup" id="dup">
						<label for="r_pro1">
						<input type="checkbox" name="r_pro1" id="r_pro1" value="1">당일 프로그램(프로그램 무제한 선택, 30명
							이상, 식사 1회)</label>
						<label for="r_pro2"><input type="checkbox" name="r_pro2" id="r_pro2" value="1">무제한 프로그램(프로그램 무제한 선택, 30명
							이상, 식사 2회)</label>
						<label for="r_pro3"><input type="checkbox" name="r_pro3" id="r_pro3">워크샵/세미나(30명 이상, 식사
							2회)</label>
						<label for="r_pro4"><input type="checkbox" name="r_pro4" id="r_pro4">레저 및 단체 행사(프로그램 2개 선택, 10명
							이상, 식사 2회)</label>
						<label for="r_pro5"><input type="checkbox" name="r_pro5" id="r_pro5">대학교,MT,OT,교회/성당 수련회 패키지(숙박
							1박 + 식사 1회 + 서비스 프로그램 1개)</label>
					</div>
				</div>
			
			<div class="program">
				<div class="leftbox">· 레저 프로그램</div>
				<div class="rightbox">
					<label for="r_pro6"><input type="checkbox" name="r_pro6" id="r_pro6">서바이벌(1인당 100발, 전술 3게임, 약
						2시간 소요) *인원에 따라 이용시간이 달라질 수 있음</label>
					<label for="r_pro7"><input type="checkbox" name="r_pro7" id="r_pro7">슈팅(사격) 토너먼트</label>
					<label for="r_pro8"><input type="checkbox" name="r_pro8" id="r_pro8">팀워크 MTB 산악코스</label>
					<label for="r_pro9"><input type="checkbox" name="r_pro9" id="r_pro9">팀워크 MTB 강변코스</label>
				</div>
			</div>
			<div class="program">
				<div class="leftbox">· 교육 프로그램</div>
				<div class="rightbox">
					<label for="r_pro10"><input type="checkbox" name="r_pro10" id="r_pro10">팀 빌딩 조직 활성화 프로그램(약 2시간
						소요, 프로그램 장비 및 강사 포함 진행)</label>
					<label for="r_pro11"><input type="checkbox" name="r_pro11" id="r_pro11">민속 팀 빌딩 게임 프로그램(약 2시간
						소요, 프로그램 장비 및 강사 포함 진행)</label>
					<label for="r_pro12"><input type="checkbox" name="r_pro12" id="r_pro12">의식 마인드업 신념화 프로그램(약 2시간
						소요, 프로그램 장비 및 강사 포함 진행)</label>
					<label for="r_pro13"><input type="checkbox" name="r_pro13" id="r_pro13">한마음 직소퍼즐 챔피언십(약 2시간 소요,
						팀워크 훈련 직소퍼즐 강사 포함 진행)</label>
				</div>
			</div>
			<div class="program">
				<div class="leftbox">· 단체 프로그램</div>
				<div class="rightbox">
					<label for="r_pro14"><input type="checkbox" name="r_pro14" id="r_pro14">체육대회</label>
					<label for="r_pro15"><input type="checkbox" name="r_pro15" id="r_pro15">명랑운동회</label>
					<label for="r_pro16"><input type="checkbox" name="r_pro16" id="r_pro16">레크레이션</label>
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
			<div class="rightbox" id="dup2">
				<label for="r_dish0"><input type="checkbox" name="r_dish0" id="r_dish0">이용 안함</label>
				<label for="r_dish1"><input type="checkbox" name="r_dish1" id="r_dish1">일반식(제육정식, 김치찌개, 순두부찌개 중
					택1)</label>
				<label for="r_dish2"><input type="checkbox" name="r_dish2" id="r_dish2">특별식(불고기전골, 닭볶음탕, 민물매운탕 등
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
					<label for="r_room0"><input type="checkbox" name="r_room0" id="r_room0">토담 A동(최대 6명)</label>
					<label for="r_room1"><input type="checkbox" name="r_room1" id="r_room1">토담 B동(최대 6명)</label>
					<label for="r_room2"><input type="checkbox" name="r_room2" id="r_room2">토담 S동(최대 10명)</label>
					<label for="r_room3"><input type="checkbox" name="r_room3" id="r_room3">토담 k동(최대 10명)</label>
					<label for="r_room4"><input type="checkbox" name="r_room4" id="r_room4">토담 I동(최대 10명)</label>
				</div>
			</div>
		</div>
		<div class="flex2">
			<div class="leftbox">· 더포천동</div>
			<div class="program">
				<div class="rightbox">
					<label for="r_room5"><input type="checkbox" name="r_room5" id="r_room5">101동(최대 12명)</label>
					<label for="r_room6"><input type="checkbox" name="r_room6" id="r_room6">102동(최대 12명)</label>
					<label for="r_room7"><input type="checkbox" name="r_room7" id="r_room7">103동(최대 12명)</label>
					<label for="r_room8"><input type="checkbox" name="r_room8" id="r_room8">105동(최대 12명)</label>
					<label for="r_room9"><input type="checkbox" name="r_room9" id="r_room9">106동(최대 12명)</label>
					<label for="r_room10"><input type="checkbox" name="r_room10" id="r_room10">107동(최대 12명)</label>
					<label for="r_room11"><input type="checkbox" name="r_room11" id="r_room11">108동(최대 12명)</label>
				</div>
			</div>
		</div>
		<div class="flex2">
			<div class="leftbox">· 도담동</div>
			<div class="program">
				<div class="rightbox">
					<label for="r_room12"><input type="checkbox" name="r_room12" id="r_room12">도담 가동(최대 6명)</label>
					<label for="r_room13"><input type="checkbox" name="r_room13" id="r_room13">도담 나동(최대 6명)</label>
					<label for="r_room14"><input type="checkbox" name="r_room14" id="r_room14">도담 다동(최대 6명)</label>
					<label for="r_room15"><input type="checkbox" name="r_room15" id="r_room15">도담 라동(최대 6명)</label>
					<label for="r_room16"><input type="checkbox" name="r_room16" id="r_room16">도담 마동(최대 6명)</label>
				</div>
			</div>
		</div>
		<div class="flex2">
			<div class="leftbox">· 수련동</div>
			<div class="program">
				<div class="rightbox">
					<label for="r_room17"><input type="checkbox" name="r_room17" id="r_room17">도담 202호(최대 4명)</label>
					<label for="r_room18"><input type="checkbox" name="r_room18" id="r_room18">도담 203호(최대 4명)</label>
					<label for="r_room19"><input type="checkbox" name="r_room19" id="r_room19">도담 204호(최대 4명)</label>
					<label for="r_room20"><input type="checkbox" name="r_room20" id="r_room20">도담 205호(최대 4명)</label>
					<label for="r_room21"><input type="checkbox" name="r_room21" id="r_room21">도담 206호(최대 4명)</label>
					<label for="r_room22"><input type="checkbox" name="r_room22" id="r_room22">도담 207호(최대 4명)</label>
					<label for="r_room23"><input type="checkbox" name="r_room23" id="r_room23">도담 208호(최대 4명)</label>
				</div>
			</div>
		</div>
	</div>
	<div class="margin colunm">
		<div class="flex">
			<label for="r_stay">· 숙박일</label>
			<select name="r_stay" id="r_stay">
				<option value="1">1박</option>
				<option value="2">2박</option>
				<option value="3">3박</option>
				<option value="4">4박</option>
				<option value="5">5박</option>
				<option value="6">6박</option>
				<option value="7">7박</option>
			</select>
		</div>
		<div class="flex">
			<label for="r_week">· 숙박요일</label>
			<select name="r_week" id="r_week">
				<option value="주중(일~목요일)">주중(일~목요일)</option>
				<option value="주말(금~토요일)">주말(금~토요일)</option>
				<option value="복합">복합</option>
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
				<option value="">선택해주세요.</option>
				<option value="이용안함">이용안함</option>
				<option value="종일">종일</option>
				<option value="반일(4시간)">반일(4시간)</option>
			</select>
		</div>

		<div class="flexbox">
			<label for="r_facil1">· 잔디구장</label>
			<select name="r_facil1" id="r_facil1">
				<option value="">선택해주세요.</option>
				<option value="이용안함">이용안함</option>
				<option value="종일">종일</option>
				<option value="반일(4시간)">반일(4시간)</option>
			</select>
		</div>

		<div class="flexbox">
			<label for="r_facil2">· 노래방</label>
			<select name="r_facil2" id="r_facil2">
				<option value="">선택해주세요.</option>
				<option value="이용안함">이용안함</option>
				<option value="객실">객실</option>
				<option value="앰프시설">앰프시설</option>
			</select>
		</div>
	</div>
</div>
<div class="block block6 mid">
	<img src="/images/reser/title15.png" alt="">
	<img src="/images/reser/m/title15.png" alt="" id="img-m">
	<div class="margin">
		<div class="flex">
			<label for="file1">파일등록</label>
			<input class="file" id=file1_label name=file1_label value="첨부파일" style="width:250px;">
			<input type="file" name="file1" id="file1" accept=".pdf, .xls, .xlsx, image/*, .doc, .docx, .txt">
			
		</div>
		<textarea name="request1" id="request1" cols="20" rows="10">요청사항을 직접 입력하실 수 있습니다.</textarea>
	</div>
</div>

<div class="block block7 bold">
	<div><input type="checkbox" name="permit" id="permit" class="required" required><span>개인정보 수집 및 이용동의 <a href="/p_info"
				target="_blank">[전문보기]</a></span></div>
				<button type="button" id="save_button">예약하기</button>
	<span class="warn">※예약신청 시 프로그램 및 일정 변경이 불가합니다.</span>
</div>

<div class="block block8 mid">
	<div class="margin mid">
		<span class="bold" style="display:block">※ 인근 주민 및 타 고객의 피해가 없도록 노래방 및 캠프파이어는 22:00까지 제한하고 있으니 이 점 양해해 주시기
			바랍니다.</span>
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
</form>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
	var check = 1;
	$("#file1").on('change', function () {
		$('#file1_label').val(this.files[0].name).val();
	});


	$('.block7 button').click(function () {
		if ($('#permit').prop('checked') === false) {
			alert('개인정보 수집 및 이용동의를 해주세요.');
			check = 0;
			return false;
		}
		else if ($('#r_pass').val()!=$('#r_pass2').val()){
			alert('입력하신 패스워드와 패스워드 확인을 동일하게 입력해주세요.');
			check = 0;
			return false;
		}
		else{
			check = 1;
		}
	});
	$('#dup input[type=checkbox]').click(function() {
		if ($(this).prop('checked')) {
			$('#dup input[type=checkbox]').not(this).prop('checked', false);
		}
	});

	$('#dup2 input[type=checkbox]').click(function() {
		if ($(this).prop('checked')) {
			$('#dup2 input[type=checkbox]').not(this).prop('checked', false);
		}
	});


</script>
<?php
include('footer.php');
?>
<script>
$(document).ready(function() {
    $('#save_button').click(function() {
		if(check == 0) return;

        var requiredInputs = $('.required');

        var isValid = true;

        requiredInputs.each(function() {
            if ($(this).is('select')) { // 현재 요소가 선택 박스인 경우
                if ($(this).val() === '') {
                    isValid = false;
                    $(this).addClass('invalid');
                } else {
                    $(this).removeClass('invalid');
                }
            } else { // 다른 경우 (텍스트 입력 등)
                if ($(this).val() === '') {
                    isValid = false;
                    $(this).addClass('invalid');
                } else {
                    $(this).removeClass('invalid');
                }
            }
            if ($(this).is(':checkbox')) {
                if ($('[name="' + $(this).attr('name') + '"]:checked').length === 0) {
                    valid = false;
                    $(this).addClass('error');
                } else {
                    $(this).removeClass('error');
                }
            }
        });

        if (!isValid) {
            alert('모든 필수 입력 필드를 작성해주세요.');
			return isValid;
        }

        

		var formData = new FormData($("#form1")[0]);
		var serializedData = $("#form1").serialize();

		formData.append('serializedData', serializedData);
		
		$.ajax({
					url: 'Database/save_reserve',
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

	$("#domain").on("change", function() {
    var selectedValue = $(this).val();
    $("#r_dom").val(selectedValue);
  });
});


</script>