
<?php
	$condition = "";
	$regions = explode(',', $_POST['resultInput_region']);
	foreach ($regions as $region) {
		$condition = $condition.'<label for="check_region"><input type="checkbox" name="" id="check_region" class="toggle-li"><label for="check_region"></label>' . $region . '</label>';
	}
	$themes = explode(',', $_POST['resultInput_theme']);
	foreach ($themes as $theme) {
		$condition = $condition.'<label for="check_theme"><input type="checkbox" name="" id="check_theme" class="toggle-li"><label for="check_theme"></label>' . $theme . '</label>';
	}
	$prices = explode(',', $_POST['resultInput_price']);
	foreach ($prices as $price) {
		$condition = $condition.'<label for="check_price"><input type="checkbox" name="" id="check_price" class="toggle-li"><label for="check_price"></label>' . $price . '</label>';
	}
	$region_string = '"' . implode('","', $regions) . '"';

	$theme_string = str_replace(',', '|', $_POST['resultInput_theme']);
	// $theme_string = '"' . implode('","', $themes) . '"';
	$price_string = '"' . implode('","', $prices) . '"';

	$sql = "SELECT * FROM `cp_reg` WHERE `region` in (".$region_string.") and `theme` REGEXP '(^|\\\|)(".$theme_string.")(\\\||$)' ";
	// echo '<script> console.log("'.$sql.'");</script>';

	
	$result = $this -> data_model -> getList($sql, 'DB');

	$in_html="";
	$in_html2="";

	if (!empty($result)) {
		$i=0;	
		$room_i=0;	
		foreach ($result as $row) {
			$busi_code = $row["busi_code"];
			$busi_name = $row["busi_name"];
			$busi_percent = 72;
			$region_str = rtrim('#' . implode('#', $regions), '#');
			$theme_str = rtrim('#' . implode('#', $themes), '#'); 
			$price_str = rtrim('#' . implode('#', $prices), '#');

			$busi_pic_imgs = explode('|', $row["busi_pic_img"]);
			
			$in_html = $in_html.
			'
			<div class="row">
			<div class="cell cell--text flex">
			<h2 class="cell__title oh" style="background-image: url(http://test.yeowan.kr/'.$busi_pic_imgs[0].')"><span class="oh__inner">'.$busi_name.'</span></h2>
			<span class="percent">'.$busi_percent.'%</span>
			<div class="detail1">자세히 보기 ></div>
			</div>
			<div class="cell cell--images">			
			';

			$in_html2 = $in_html2.
			'
			<div class="preview__item">
			<div class="swiper-wrap">
			<div class="swiper-flex">
			<div class="ps_tag" id="tag'.$i.'">
			'.$region_str.$theme_str.$price_str.'
			</div>
			<div class="title'.$i.'">
			<form action="">
			<h2 class="preview__item-title oh">'.$busi_name.' <button type="button" class="like_Button"></button></h2>
			</form>
			</div>
			</div>
			 		<div class="swiper">
			 			<div class="close_btn"><button class="preview__close unbutton">&#9587;</button></div>
			 			<div class="swiper-wrapper">';
						
			
			foreach ($busi_pic_imgs as $busi_pic_img) {
				$in_html2 = $in_html2.
				'
				<div class="swiper-slide">
				<img src="http://test.yeowan.kr/'.$busi_pic_img.'" alt="">
				</div>
				';
			}			 						

			$sql2 = 'SELECT * FROM `room_reg` WHERE `busi_code` = "'.$busi_code.'" and `preview` = 1 ';
			$result2 = $this -> data_model -> getList($sql2, 'DB');
			if (!empty($result2)) {
				foreach ($result2 as $row2) {
					$in_html = $in_html.
					'<div class="cell__img" data-value1="'.$row2["busi_code"].'" data-value2="'.$row2["room_code"].'">
					<span data-value1="'.$row2["busi_code"].'" data-value2="'.$row2["room_code"].'">'.$row2["room_name"].'</span>
					<div class="cell__img-inner" data-value1="'.$row2["busi_code"].'" data-value2="'.$row2["room_code"].'" style="background-image:url(http://test.yeowan.kr/'.$row2["room_pic_img"].')"></div>
					</div>
					';
					$room_i = $room_i + 1;
				}
			}
			$in_html = $in_html.'</div></div>';

			$in_html2 = $in_html2.
			'
 			</div>
 			<div class="swiper-button-prev mainbtn1"></div>
 			<div class="swiper-button-next mainbtn2"></div>
 		</div>
 	</div>
	<div class="grid" id="pension'.$i.'">
	';

		$sql3 = 'SELECT * FROM `room_reg` WHERE `busi_code` = "'.$busi_code.'" and `preview` = 0 ';
		$result3 = $this -> data_model -> getList($sql3, 'DB');
		if (!empty($result3)) {
			foreach ($result3 as $row3) {
				$in_html2 = $in_html2.
				'<div class="cell__img" data-value1="'.$row3["busi_code"].'" data-value2="'.$row3["room_code"].'">
				<span data-value1="'.$row3["busi_code"].'" data-value2="'.$row3["room_code"].'">'.$row3["room_name"].'</span>
				<div class="cell__img-inner" data-value1="'.$row3["busi_code"].'" data-value2="'.$row3["room_code"].'" style="background-image:url(http://test.yeowan.kr/'.$row3["room_pic_img"].')"></div>
				</div>
				';
			}
		}	
		$in_html2 = $in_html2.
			'
			</div>
			</div>
			';
		}
	}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>여완플랫폼</title>
	<meta name="author" content="Codrops" />
	<link rel="stylesheet" href="https://use.typekit.net/gdf6msi.css">
	<link rel="stylesheet" type="text/css" href="/css/base.css" />
	<link rel="stylesheet" type="text/css" href="/css/swiper.css" />
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
	<script src="/js/main.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
	<script>
		document.documentElement.className = "js";
		var supportsCssVars = function () {
			var e, t = document.createElement("style");
			return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window
				.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e
		};
		supportsCssVars() || alert("Please view this demo in a modern browser that supports CSS Variables.");
	</script>

<style>
	input[type="checkbox"]{
		display: none;
	}
        .link_btn2 label{
align-items: baseline;
font-size: 20px;

		}
		input[type="checkbox"] + label{
  display: inline-block;
  width: 15px;
  height: 15px;
  border:1px solid #6788e6;
  background-color: #fff;
  position: relative;
  margin-right: 5px;
}
input[type="checkbox"]:checked + label::after{
  content:'✔';
  color: #8766E8;
  font-size: 14px;
  font-weight: bold;
  width: 12px;
  height: 12px;
  text-align: center;
  position: absolute;
  left: 0;
  top:50%;
  transform: translateY(-50%);
} 
    </style>	
</head>

<body>
	<?php
		include('header2.php');
	?>
	<main>
		<div class="frame">
			<div class="frame__title">
				<h1 class="frame__title-main">
					
					<div class="frame_flex">
						<div class="days">
							<div class="day1"><span class="disa">이용일자 : </span>입실일<input type="date" name="s_date" id="s_date"
									required data-placeholder="[&nbsp;&nbsp;클릭 시 달력 생성&nbsp;&nbsp;]"></div>
							<div class="day2"><span class="disa">~</span> 퇴실일<input type="date" name="e_date" id="e_date"
									required data-placeholder="[&nbsp;&nbsp;클릭 시 달력 생성&nbsp;&nbsp;]">,<div id="days">1박2일</div>
							</div>
						</div>
						<div class="search-wrap">
							<div class="search">
								<button type="button" id="filter"> <img src="/images/common/filter.png" alt=""></button>
								<div class="searchbar"><img src="/images/common/search.png" alt=""> <input type="text"
										name="search" id="search" placeholder="예) 가평 풀빌라"></div>
							</div>
						</div>
					</div>
					<div class="link_btn2">
					<label for="check_all"><input type="checkbox" name="" id="check_all" class="toggle-li"><label for="check_all"></label>모두보기</label>
					<?php echo $condition?>
					</div>
				</h1>
			</div>

			<div class="option-wrap">
						<div class="opt-flexwrap">
							<div class="opt-flex">
								<ul>
									<li><span>입실일</span><span id="s_date2">2023년 08월 18일 금요일</span></li>
									<li><span>퇴실일</span><span id="e_date2">2023년 08월 20일 일요일</span></li>
									<li><span>인원</span><span><button>-</button>2<button>+</button></span></li>
									<li><span>가격</span><span>
									<div class="buttons">
										<button type="button">10만원~</button>
										<button type="button">20만원~</button>
										<button type="button">30만원~</button>
										<button type="button">40만원~</button>
									</div>
										</span>
									</li>
								</ul>
							</div>
							<div class="opt-flex">
								<h3>객실타입</h3>
								<div class="buttons">
									<button type="button">가격</button>
									<button type="button">분리형</button>
									<button type="button">원룸</button>
									<button type="button">복층</button>
									<button type="button">장애인 객실</button>
									<button type="button">개별수영장</button>
									<button type="button">스파</button>
									<button type="button">개별바비큐</button>
									<button type="button">오션뷰</button>
									<button type="button">취사가능</button>
								</div>
							</div>
							<div class="opt-flex">
							<h3>베드타입</h3>
								<div class="buttons">
									<button type="button">싱글</button>
									<button type="button">더블</button>
									<button type="button">트윈</button>
									<button type="button">온돌</button>
								</div>
							</div>
							<div class="opt-flex">
								<h3>구비시설</h3>
								<div class="buttons">
									<button type="button">와이파이</button>
									<button type="button">TV</button>
									<button type="button">쇼파</button>
									<button type="button">에어컨</button>
									<button type="button">냉장고</button>
									<button type="button">PC</button>
									<button type="button">침대</button>
									<button type="button">객실샤워기</button>
									<button type="button">욕조</button>
									<button type="button">비데</button>
									<button type="button">욕실용품</button>
									<button type="button">드라이기</button>
									<button type="button">어메니티</button>
									<button type="button">애견식기</button>
									<button type="button">어린이용식기</button>
									<button type="button">정수기</button>
									<button type="button">전기밥솥</button>
									<button type="button">인덕션</button>
									<button type="button">가스렌지</button>
									<button type="button">커피메이커</button>
									<button type="button">전자레인지</button>
									<button type="button">식탁</button>
									<button type="button">금연</button>
									<button type="button">흡연</button>
								</div>
							</div>
							<div class="opt-flex">
								<h3>공용시설</h3>
								<div class="buttons">
									<button type="button">세탁기</button>
									<button type="button">건조기</button>
									<button type="button">주방/식당</button>
									<button type="button">엘리베이터</button>
									<button type="button">매점</button>
									<button type="button">카페</button>
									<button type="button">노래방</button>
									<button type="button">공용수영장</button>
									<button type="button">주차장</button>
								</div>
							</div>
							<div class="opt-flex">
								<h3>기타</h3>
								<div class="buttons">
									<button type="button">픽업</button>
									<button type="button">조식운영</button>
									<button type="button">짐보관</button>
									<button type="button">여성전용</button>
									<button type="button">피트니스</button>
									<button type="button">발렛파킹</button>
									<button type="button">무료주차</button>
									<button type="button">유료주차</button>
								</div>
							</div>
						</div>
						<div class="close"><form action=""><button type="submit" id="close">확인</button></form></div>
					</div>
		</div>


		</section>
		</section>
		<section class="content">
		
			<form action="" method="" name="">
				<div class="wrap_all" >
				<div class="closebtn">
						<img src="/images/common/close.png" alt="">
					</div>
					<div class="price_swiper">
						<div class="swiper-wrap">
							<div class="swiper">
								<div id="room_img" class="swiper-wrapper">
									<div class="swiper-slide">
										<img src="/images/rooms/01_01.jpg" alt="">
									</div>
									<div class="swiper-slide">
										<img src="/images/rooms/01_01.jpg" alt="">
									</div>
									<div class="swiper-slide">
										<img src="/images/rooms/01_01.jpg" alt="">
									</div>
									<div class="swiper-slide">
										<img src="/images/rooms/01_01.jpg" alt="">
									</div>
									<div class="swiper-slide">
										<img src="/images/rooms/01_01.jpg" alt="">
									</div>
									<div class="swiper-slide">
										<img src="/images/rooms/01_01.jpg" alt="">
									</div>
									<div class="swiper-slide">
										<img src="/images/rooms/01_01.jpg" alt="">
									</div>
									<div class="swiper-slide">
										<img src="/images/rooms/01_01.jpg" alt="">
									</div>
									<div class="swiper-slide">
										<img src="/images/rooms/01_01.jpg" alt="">
									</div>
									<div class="swiper-slide">
										<img src="/images/rooms/01_01.jpg" alt="">
									</div>
								</div>
								<div class="swiper-button-prev mainbtn1"></div>
								<div class="swiper-button-next mainbtn2"></div>
							</div>
						</div>
					</div>
					<div class="info_wrap">
						<div class="flex">
							<p id="room_name">풀빌라01<span id="room_size">(00평/00㎡)</span></p>
							<p id="room_people">기준인원00명/최대인원00명</p>
						</div>
						<div id="room_info" class="room_info">
							객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다
							객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다
							객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다
							객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다
							객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다
							객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다
						</div>
						<div class="room_price">
							<div class="date">
								<form action="">
									<label for="start_date">기간설정</label>
									<input type="date" name="start_date" id="start_date" required
										data-placeholder="입실일선택">
									~
									<input type="date" name="end_date" id="end_date" required data-placeholder="퇴실일선택">

							</div>
							<div class="price">
								<p>정상객실가<span id="bf_price">00,000원</span></p>
								<p>할인객실가<span id="af_price">00,000원</span></p>
							</div>
							<div class="reser_btn">
								<input type="submit" value="예약하기">
							</div>
								</form>
			</div>
			</div>
			</div>
			</form>

			<?php echo $in_html?>

		</section><!-- /content -->

	<section class="preview">
		<?php echo $in_html2 ?>
	</section>

<?php
include('footer.php');
?>
	</main>

	<script src='https://code.jquery.com/jquery-1.9.1.min.js'></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/Flip.min.js"></script>
	<script type="module" src="js/index.js"></script>

	<script>
		 
		$(document).ready(function () {
			$('.cell__img').click(function (event) {
				$('.wrap_all').fadeIn();
				$('.preview').fadeOut();
				$('main').css({
					'background-color': 'none',
					'padding-top': '0'
				});
				var value1 = event.target.getAttribute('data-value1');
       			var value2 = event.target.getAttribute('data-value2');

				// 가져온 값 출력 또는 다른 작업 수행
				console.log('Value 1:', value1);
				console.log('Value 2:', value2);

		$.ajax({
                url: 'Database/get_data',
                type: 'GET',
                dataType: 'json',
                data: { value1: value1, value2: value2 }, // 검색 조건을 추가
                success: function(response) {
                    // 받아온 데이터를 처리하여 HTML 내용을 변경
                    var resultDiv = document.getElementById('room_name');
                    resultDiv.innerHTML = response.result[0].room_name;

					resultDiv = document.getElementById('room_people');
					var nop = response.result[0].room_nop;
					let [기준인원, 최대인원] = nop.split('/');
					let newString = `기준인원${기준인원}/최대인원${최대인원}`;
                    resultDiv.innerHTML = newString;

					resultDiv = document.getElementById('room_info');
                    resultDiv.innerHTML = response.result[0].room_info;

					resultDiv = document.getElementById('room_img');
					
					resultDiv.innerHTML = '<div class="swiper-slide"> <img src="http://test.yeowan.kr/'+response.result[0].room_pic_img+'" alt=""> </div>';
                },
                error: function(error) {
                    console.log(error);
                }
           		});

			})

			 $('.closebtn').click(function () {
			 	$('.wrap_all').fadeOut();
			 	$('.preview').fadeIn();
			 	$('main').css({
			 		'background-color': 'rgba(255,255,255,0.85)',
			 		'padding-top': '8%'
		 	});
			 })

			setTimeout(function () {
				$('.cell__img').fadeIn(100);
				$('.cell__img').css('display', 'grid');
			}, 100)

			var isLiked = false;

			$('.like_Button').click(function () {
				isLiked = !isLiked; // 좋아요 상태를 토글합니다.
				var likeindex=$(this).index();
				
				if (isLiked) {
					$(this).css('background-image', 'url("/images/common/good1.png")');
					// 좋아요 이미지로 변경
				} else {
					$(this).css('background-image', 'url("/images/common/good2.png")');
					// 좋아요 취소 이미지로 변경
				}
			});

			// 문서가 로드될 때 초기 이미지 설정
			$('.like_Button').trigger('click');
		})

		document.addEventListener("DOMContentLoaded", function() {
    	const startDateInput = document.getElementById("start_date");
    	const endDateInput = document.getElementById("end_date");

   
    startDateInput.addEventListener("change", function() {
        if (startDateInput.value) {
            startDateInput.setAttribute("data-placeholder", ""); 
        } else {
            startDateInput.setAttribute("data-placeholder", "입실일선택"); 
        }
    });

    // 종료일(input)의 값이 변경될 때 이벤트 처리
    endDateInput.addEventListener("change", function() {
        if (endDateInput.value) {
            endDateInput.setAttribute("data-placeholder", "");
        } else {
            endDateInput.setAttribute("data-placeholder", "퇴실일선택");
        }
    });
});


// $('.row').click(function(){
// 	$('.preview').fadeIn();
// 	$('.frame').fadeOut();
// 	$('.link_btn2').fadeOut();
// 		})

// $('.preview__close').click(function(){
// 	$('.preview').fadeOut();
// 	$('.frame').fadeIn();
// 	$('.link_btn2').fadeIn();
// 	$('.row').fadeIn();
// $('.cell--images').fadeIn();
// })


		// $('.link_btn2 li').click(function () {
		// 	var $li = $(this);


		// 	var currentBackgroundColor = $li.css('background-color');
		// 	var currentTextColor = $li.css('color');


		// 	if (currentBackgroundColor === 'rgb(135, 102, 232)' && currentTextColor === 'rgb(255, 255, 255)') {
		// 		$li.css({
		// 			'background-color': '#fff',
		// 			'color': '#8766E8'
		// 		});
		// 	} else {
		// 		$li.css({
		// 			'background-color': '#8766E8',
		// 			'color': '#fff'
		// 		});
		// 	}
		// });

		$('#filter').click(function () {
			$('.option-wrap').fadeIn();
		})
		$('#close').click(function () {
			$('.option-wrap').fadeOut();
		})

		$('.buttons button').click(function () {
			var $li = $(this);

			var currentBackgroundColor = $li.css('background-color');
			var currentTextColor = $li.css('color');

			if (currentBackgroundColor === 'rgb(135, 102, 232)' && currentTextColor === 'rgb(255, 255, 255)') {
				$li.css({
					'background-color': '#fff',
					'color': '#8766E8'
				});
			} else {
				$li.css({
					'background-color': '#8766E8',
					'color': '#fff'
				});
			}
		});


	</script>
</body>

</html>
<script>

    // 클릭되었을 때의 동작
    function onClicked() {
        console.log("클릭되었습니다");
        // 여기에 클릭되었을 때 수행할 동작 추가
    }

    // 클릭 해제되었을 때의 동작
    function onReleased() {
        console.log("클릭 해제되었습니다");
        // 여기에 클릭 해제되었을 때 수행할 동작 추가
    }
</script>