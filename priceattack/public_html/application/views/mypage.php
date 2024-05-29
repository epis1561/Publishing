<?php
include('header2.php');


$user_no = $this->session->userdata('registration_date');
$new_user_no = date("YmdHis", strtotime($user_no));

?>
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
<link rel="stylesheet" href="/css/mypage.css">
<style type="text/css">
	.tg {
		border-collapse: collapse;
		border-spacing: 0;
	}

	.tg td {
		border-color: #ed2b55;
		border-style: solid;
		border-width: 1px;
		font-size: 14px;
		overflow: hidden;
		padding: 10px 5px;
		word-break: normal;
	}
	tr{
		border-radius: 5px !important;
	}
	.tg th {
		border-color: #ed2b55;
		border-style: solid;
		border-width: 1px;
		font-size: 14px;
		font-weight: normal;
		overflow: hidden;
		padding: 10px 5px;
		word-break: normal;
		margin-bottom: 2%;
		margin: 2% 0;
	}

	.tg .tg-baqh {
		text-align: center;
		background-color: #ed2b55;
		color: #fff;
		border: none;
		
	}

	.tg .tg-0lax {
		word-break: break-all;
		text-align: left;
		border-bottom: none;
		border-left: none;
		border-right: none;
		text-align: center;
	}

	body {
		overflow-y: visible;
	}

</style>

	<div class="page-wrap1">
		<h2>마이페이지</h2>
		<div class="flex">
			<div class="leftbox"><img src="/images/common/user.png" alt="" class="user"></div>
			<div class="rightbox">
				<ul>
					<li>아이디<span><?php echo $this->session->userdata('user_id'); ?></span></li>	
					<li>이름<span><?php echo $this->session->userdata('name'); ?></span></li>
					<li>휴대폰번호<span><?php echo $this->session->userdata('phone_number'); ?></span></li>
					<li>회원번호<span><?php echo $new_user_no;?></span></li>
					<li>누적 할인금액<span>598,300원</span></li>
				</ul>
			</div>
		</div>
		<table class="tg" style="undefined;table-layout: fixed; width: 100%">
			<colgroup>
				<col style="width: 30%">
				<col style="width: 25%">
				<col style="width: 25%">
				<col style="width: 20%">
			</colgroup>
			<thead>
				<tr>
					<th class="tg-baqh">이용업체</th>
					<th class="tg-baqh">이용일자</th>
					<th class="tg-baqh">리뷰</th>
					<th class="tg-baqh">재예약</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="tg-0lax">미라몬티풀빌라</td>
					<td class="tg-0lax">2023.08.14(월)</td>
					<td class="tg-0lax rv1"><button>수정/삭제</button></td>
					<td class="tg-0lax"><a href="">재예약</a></td>
				</tr>
				<tr>
					<td class="tg-0lax">프리미엄키즈풀빌라</td>
					<td class="tg-0lax">2023.07.30(월)</td>
					<td class="tg-0lax rv2"><button>등록</button></td>
					<td class="tg-0lax"><a href="">재예약</a></td>
				</tr>
				<tr>
					<td class="tg-0lax">힐스포레</td>
					<td class="tg-0lax">2023.06.05(월)</td>
					<td class="tg-0lax rv1"><button>수정/삭제</button></td>
					<td class="tg-0lax"><a href="">재예약</a></td>
				</tr>
				<tr>
					<td class="tg-0lax">힐스포레</td>
					<td class="tg-0lax">2023.06.05(월)</td>
					<td class="tg-0lax rv1"><button>수정/삭제</button></td>
					<td class="tg-0lax"><a href="">재예약</a></td>
				</tr>
				<td class="tg-0lax">프리미엄키즈풀빌라</td>
				<td class="tg-0lax">2023.07.30(월)</td>
				<td class="tg-0lax rv2"><button>등록</button></td>
				<td class="tg-0lax"><a href="">재예약</a></td>
				</tr>
				<tr>
					<td class="tg-0lax">힐스포레</td>
					<td class="tg-0lax">2023.06.05(월)</td>
					<td class="tg-0lax rv1"><button>수정/삭제</button></td>
					<td class="tg-0lax"><a href="">재예약</a></td>
				</tr>
				<tr>
					<td class="tg-0lax">힐스포레</td>
					<td class="tg-0lax">2023.06.05(월)</td>
					<td class="tg-0lax rv1"><button>수정/삭제</button></td>
					<td class="tg-0lax"><a href="">재예약</a></td>
				</tr>
			</tbody>
		</table>
		<div class="btns"><a href="Database/logout">로그아웃</a><button class="edit">정보수정</button><button class="withdrawal">회원탈퇴</button>
		</div>
	</div>
	<?php $busi_code = "123-123-1234" ?>
	<form id="reviewForm" action="" method="post" enctype="multipart/form-data">
	<input type="hidden" name="busi_code" value="<?php echo $busi_code; ?>">
    <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user_id'); ?>">
	<input type="hidden" name="reserve_code" value="<?php echo $busi_code; ?>">

	<div class="review" draggable="true">
		
			<h3>리뷰 등록</h3>
			<div class="flex">
				<img src="/images/rooms/01_01.jpg" alt="">
				<div class="history">
					<ul>
						<li>·업체명 : <span>미라몬티 풀빌라</span></li>
						<li>·이용일자 : <span>2023.08.14월요일(1박)</span></li>
						<li>·이용객실 : <span>독채</span></li>
					</ul>
				</div>
			</div>
			<h3>별점평가</h3>
			<div class="starpoint_wrap">
				<div class="starpoint_box">
					<label for="starpoint_1" class="label_star" title="0.5"><span class="blind">0.5점</span></label>
					<input type="radio" name="starpoint" id="starpoint_1" class="star_radio" value="0.5">

					<label for="starpoint_2" class="label_star" title="1"><span class="blind">1점</span></label>
					<input type="radio" name="starpoint" id="starpoint_2" class="star_radio" value="1">

					<label for="starpoint_3" class="label_star" title="1.5"><span class="blind">1.5점</span></label>
					<input type="radio" name="starpoint" id="starpoint_3" class="star_radio" value="1.5">

					<label for="starpoint_4" class="label_star" title="2"><span class="blind">2점</span></label>
					<input type="radio" name="starpoint" id="starpoint_4" class="star_radio" value="2">

					<label for="starpoint_5" class="label_star" title="2.5"><span class="blind">2.5점</span></label>
					<input type="radio" name="starpoint" id="starpoint_5" class="star_radio" value="2.5">

					<label for="starpoint_6" class="label_star" title="3"><span class="blind">3점</span></label>
					<input type="radio" name="starpoint" id="starpoint_6" class="star_radio" value="3">

					<label for="starpoint_7" class="label_star" title="3.5"><span class="blind">3.5점</span></label>
					<input type="radio" name="starpoint" id="starpoint_7" class="star_radio" value="3.5">

					<label for="starpoint_8" class="label_star" title="4"><span class="blind">4점</span></label>
					<input type="radio" name="starpoint" id="starpoint_8" class="star_radio" value="4">

					<label for="starpoint_9" class="label_star" title="4.5"><span class="blind">4.5점</span></label>
					<input type="radio" name="starpoint" id="starpoint_9" class="star_radio" value="4.5">

					<label for="starpoint_10" class="label_star" title="5"><span class="blind">5점</span></label>
					<input type="radio" name="starpoint" id="starpoint_10" class="star_radio" value="5">
					<span class="starpoint_bg"></span>
				</div>
			</div>
			<div class="text">
				<h3>여러분의 소중한 리뷰를 적어주세요~</h3>
				<textarea name="rv_text" id="rv_text" cols="50" rows="10" placeholder="최대 5000자까지 작성 가능합니다."></textarea>
				<div class="filebox">
					<input class="upload-name" value="첨부파일" placeholder="첨부파일">
					<label for="file">파일찾기</label>
					<input type="file" id="file" name="files[]" multiple>
					<div class="photo">
						<div class="photo-flex">
						</div>
					</div>
				</div>
			</div>
			<div class="btn1">
				<input type="submit" value="삭제">
				<input type="submit" value="저장">
			</div>
			<div class="btn2">
				<input type="submit" value="등록" id="submitReview">
			</div>
	</div>
	</form>


<div class="page-wrap2">
	<h2>회원정보수정</h2>
	<form action="">
		<p>본인 확인을 위해 로그인정보를 입력해 주세요.</p>
		<div class="id-flex">
			<input type="text" name="check_id" id="check_id" placeholder="아이디 입력">
			<input type="password" name="check_pw" id="check_pw" placeholder="비밀번호 입력">
		</div>
		<div class="id-flex">
			<input type="submit" value="확인" class="correct">
			<a href="/find2">비밀번호 찾기</a>
		</div>
	</form>
</div>

<div class="page-wrap3">
	<h2>회원정보수정</h2>
	<form action="">
		<div class="id-flex">
			<label for="check_name">이름&nbsp;&nbsp;&nbsp;<input type="text" name="check_name" id="check_name"></label>
			<label for="check_tel">휴대폰<input type="tel" name="check_tel" id="check_tel"></label>
			<label for="check_text">아이디<input type="text" name="check_text" id="check_text"></label>
		</div>
		<input type="submit" value="저장">
	</form>
</div> 

<div class="page-wrap4">
	<h2>회원탈퇴</h2>
	<div class="textbox">
		<div class="text1">
		<p>이용 정보 삭제</p><br>
		회원정보 및 개인 이용기록은 모두 삭제되며, 재가입시에도 데이터는 복구되지 않습니다.
		</div>
		<div class="text2">
		<p>등록 리뷰 삭제</p><br>
		회원탈퇴 시 등록한 리뷰는 모두 삭제되며, 재가입시에도 데이터는 복구되지 않습니다.
		</div>
		<div class="text3">
		<p>연결된 서비스 이용 불가</p><br>
		회원 탈퇴 시 여행의완성 플랫폼과 연결된 서비스 이용이 불가합니다.
		</div>
	</div>
	<label for="agree"><input type="checkbox" name="agree" id="agree">위 탈퇴 안내 사항을 모두 확인하였으며, 동의합니다.</label><br>
	<div class="buttons">
		<input type="submit" value="회원탈퇴" class="withdrawal2">
		<button class="cancel">취소</button>
	</div>
</div>

<div class="endpop">

		<h3>(주)여행의완성</h3>
		<p>회원탈퇴가 완료되었습니다.<br>
		그동안 여행의완성 플랫폼을 이용해주셔서 감사합니다.<br>
		보다 나은 서비스 제공을 위해 최선을 다하겠습니다.
		</p>
		<a href="/">확인</a>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script>
	$("#file").on('change', function () {
		var fileName = $("#file").val();
		$(".upload-name").val(fileName);
	});

	$('#file').on('change', handleFileSelect);

	function handleFileSelect(event) {
		const files = event.target.files;
		const photoFlex = $('.photo-flex');


		for (let i = 0; i < files.length; i++) {
			const file = files[i];
			const reader = new FileReader();

			reader.onload = function (e) {
				if (file.type.includes('image')) {

					const image = $('<img>').attr({
						src: e.target.result,
						alt: 'Uploaded Image'
					});

					photoFlex.append(image);
				} else if (file.type.includes('video')) {

					const video = $('<video>').attr({
						src: e.target.result,
						type: file.type,
						controls: true,
						autoplay: true
					});


					video.on('loadedmetadata', function () {
						const duration = this.duration;
						if (duration <= 300) {

							photoFlex.append(video);
						} else {
							alert('비디오는 5분 이하로 등록 가능합니다.');
						}
					});
				}
			};


			reader.readAsDataURL(file);
		}
	}
	$(".rv1").click(function () {
		$(".review").css("display", "flex");
		$(".btn1").css("display", "flex");
	})
	$(".rv2").click(function () {
		$(".review").css("display", "flex");
		$(".btn2").css("display", "flex");
	})

$('.edit').click(function(){
	$('.page-wrap1').hide();
	$('.page-wrap2').show();
})
$(document).ready(function() {
    $('.correct').click(function(event) {
        // 폼의 제출 기본 동작 막기
        event.preventDefault();

        // 페이지 전환
        $('.page-wrap2').hide();
        $('.page-wrap3').show();
    });
});
$('.withdrawal').click(function(){
	$('.page-wrap1').hide();
	$('.page-wrap4').css('display','flex');
})
$('.buttons button').click(function(){
	$('.page-wrap4').hide();
	$('.page-wrap1').show();
})
$('.withdrawal2').click(function () {
    if (!$('#agree').prop('checked')) {
        alert('탈퇴 안내사항에 동의해주세요.');
     }else {
		$('.page-wrap4').hide();
         $('.endpop').css('display', 'block');
     }
});
$('.cancel').click(function () {
    $('.page-wrap4').hide();
	$('.page-wrap1').show();
});
</script>

<script>
$(document).ready(function() {
    $('#reviewForm').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
		var rating = $('input[name="starpoint"]:checked').val();  // 선택된 별점 값
        var content = $('#rv_text').val().trim();  // 리뷰 내용, 공백 제거

		var userId = <?php echo $this->session->userdata('user_id');?>
        if (!userId) {
            alert("로그인이 필요합니다.");
            window.location.href = 'https://priceattack.kr/Login';  // 로그인 페이지로 리다이렉트
            return;  // 함수 실행 종료
        }

		        // 별점과 리뷰 내용 검증
		if (!rating) {
			alert("별점을 선택해주세요.");
			return;
        }
        if (!content) {
            alert("리뷰 내용을 입력해주세요.");
            return;
        }

        $.ajax({
            url: 'Database/submit_review',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                alert("등록 되었습니다.");
				$('.review').hide();
            },
            error: function(xhr, status, error) {
                console.error('Error: ' + error);
            }
        });
    });
});
</script>