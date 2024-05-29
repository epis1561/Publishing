
<?php
include('admHeader.php');
?>
<link rel="stylesheet" href="/css/account.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
	.header_flex {
		top: 20% !important;
	}

	.header_flex p {
		display: none;
	}

</style>
<!-- 회원가입페이지 1 -->
 <div class="wrap-all">
    <div class="logo">
        <img src="/images/common/logo.png" alt="">
    </div>
    <h1>여완플랫폼 약관 동의</h1>
<form action="" method="">

<div class="flex">
    <label for="all_check">전체동의</label>
    <input type="checkbox" name="all_check" id="all_check">
</div>


<div class="flex">
    <label for="check_1"><a href="/terms" target="_blank">이용약관 동의<span>(필수)</span></a></label>
    <input type="checkbox" name="check_1" id="check_1">
</div>


<div class="flex">
    <label for="check_2"><a href="">만 14세 이상 확인<span>(필수)</span></a></label>
    <input type="checkbox" name="check_2" id="check_2">
</div>


<div class="flex">
    <label for="check_3"><a href="">개인정보 수집 및 이용 동의<span>(필수)</span></a></label>
    <input type="checkbox" name="check_3" id="check_3">
</div>


<button type="button" class="next1">다음</button>
</form>

</div> 


<!-- 회원가입페이지 2 -->
<div class="wrap-all2">
	<div class="logo">
		<img src="/images/common/logo.png" alt="">
	</div>
	<h1>회원가입</h1>
	<form id="user_r_form" action="Database/index" method="post">
		<div class="acinfo">
			<label for="ac_name">이름(필수)</label>
			<input type="text" name="ac_name" id="ac_name" placeholder="이름을 입력해주세요." required>
		</div>

		<div class="acinfo">
			<label for="ac_id">아이디(필수)</label>
			<input type="text" name="ac_id" id="ac_id" placeholder="아이디를 입력해주세요." required>
			<button type="button" id="check-username">중복확인</button>
		</div>


		<div class="acinfo">
			<label for="ac_pw">비밀번호(필수)</label>
			<input type="password" name="ac_pw" id="ac_pw" placeholder="비밀번호를 입력해주세요." required>
		</div>

		<div class="acinfo">
			<label for="ac_pw2">비밀번호 확인(필수)</label>
			<input type="password" name="ac_pw2" id="ac_pw2" placeholder="비밀번호를 입력해주세요." required>
		</div>

		<div class="acinfo">
			<label for="ac_phone">핸드폰번호(필수)</label>
			<input type="tel" id="ac_phone" name="ac_phone" pattern="010[0-9]{3,4}[0-9]{4}" required
				placeholder="-없이 입력해주세요." />
				<button type="button" id="check-phone">휴대폰인증</button>
            <!-- <a href="">휴대폰인증</a> -->
		</div>

		<button type="button" id="ac_submit">가입하기</button>
	</form>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script>
	$('#all_check').click(function () {

		var checked = $('#all_check').is(':checked');

		if (checked)
			$('input:checkbox').prop('checked', true);
		if (checked == false)
			$('input:checkbox').prop('checked', false);
	});

	$('.next1').click(function () {

		var check1 = $('#check_1').is(':checked');
		var check2 = $('#check_2').is(':checked');
		var check3 = $('#check_3').is(':checked');

		if (check1 == false || check2 == false || check3 == false) {
			alert('필수항목에 모두 동의해주세요.');
		}
        // else{
        //     $('.next1').click(function(){
        //         $('.wrap-all').hide();
        //         $('.wrap-all2').show();
        //     })
        // }
	});
$('.next1').click(function(){
        var check1 = $('#check_1').is(':checked');
		var check2 = $('#check_2').is(':checked');
		var check3 = $('#check_3').is(':checked');

		if (check1 == true || check2 == true || check3 == true) {
            $('.wrap-all').hide();
            $('.wrap-all2').show();
        }
})
</script>


<script>
	var check = 0;
	document.addEventListener('DOMContentLoaded', function () {
		var acIdBtn = document.querySelector('form [name="ac_id"] + button');
		var acSubmitBtn = document.getElementById('ac_submit');


		// 폼 제출 이벤트 핸들러
		document.getElementById('ac_submit').addEventListener('click', function() {
			event.preventDefault(); // 기본 제출 차단

			// 필수 입력 값 확인
			if (!this.checkValidity()) {
				alert('모든 필수 입력 항목을 채워주세요.');
				return;
			}

			// 비밀번호 일치 확인
			var password = document.getElementById('ac_pw').value;
			var confirmPassword = document.getElementById('ac_pw2').value;
			if (password !== confirmPassword) {
				alert('비밀번호가 일치하지 않습니다.');
				return;
			}

			// 여기에 추가적인 검증 후, 조건이 충족되면 폼 제출
		
			if(check==1){
				document.getElementById("user_r_form").submit();
			}
			return;
			
		});

		// 휴대폰 인증 링크 클릭 처리
		var phoneAuthLink = document.querySelector('[href=""]');
		phoneAuthLink.addEventListener('click', function(e) {
			e.preventDefault();
			alert('휴대폰 인증 절차를 진행합니다.');
			// 휴대폰 인증 로직 구현
		});
	});
</script>

<script>
$(document).ready(function(){
    $('#check-username').click(function(){
        var username = $('#ac_id').val();
        if(username != ''){
            $.ajax({
                url: 'Database/check_user_id_exists',
                type: 'post',
                data: {ac_id: username},
                success: function(response){
                    if(response == 'taken' ){
                        alert('이 아이디는 사용할 수 없습니다.');
                    } else {
						check = 1;
                        alert('이 아이디는 사용 가능합니다.');
                    }
                }
            });
        } else {
            alert('아이디를 입력해주세요.');
        }
    });

    $('#check-phone').click(function(){
        var phone = $('#ac_phone').val();
        if(phone != ''){
            $.ajax({
                url: 'Database/check_user_phone_exists',
                type: 'post',
                data: {ac_phone: ac_phone},
                success: function(response){
                    if(response == 'taken' ){
                        alert('이 번호는 사용할 수 없습니다.');
                    } else {
						check = 1;
                        alert('이 번호는 사용 가능합니다.');
                    }
                }
            });
        } else {
            alert('전화번호를 입력해주세요.');
        }
    });	
});
</script>

