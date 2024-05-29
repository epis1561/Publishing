<?php
	$m_url = 'https://priceattack-partner.kr/';

    $user_id = $this->session->userdata('user_id');

    if (!$user_id) {
        echo '<script> alert("로그인이 필요합니다");
		window.location.href = "https://priceattack.kr/Login";
		</script>';
    }


	$start_dt = isset($_POST['s_date']) ? $_POST['s_date'] : date('Y-m-d');
	$end_dt = isset($_POST['e_date']) ? $_POST['e_date'] : date('Y-m-d', strtotime('+1 day'));

	$sql = "SELECT 
    cp_reg.busi_code,
    cp_reg.busi_name,
    cp_reg.busi_intro,
    cp_reg.busi_info,
    cp_reg.rev_info,
    cp_reg.addr_street,
    cp_reg.addr_number,
    cp_reg.addr_detail,
    cp_reg.phone,
    cp_reg.busi_pic_img,
    cp_reg.region,
    cp_reg.theme,
    MAX(CASE 
        WHEN price_setting.special_price IS NOT NULL THEN '프라이스어택' 
        ELSE '' 
    END) AS price_attack
FROM cp_reg
INNER JOIN room_reg ON cp_reg.busi_code = room_reg.busi_code
INNER JOIN price_setting ON room_reg.busi_code = price_setting.busi_code 
    AND room_reg.room_code = price_setting.room_code
	INNER JOIN bookmarks ON cp_reg.busi_code = bookmarks.busi_code AND bookmarks.user_id = '".$user_id."'
WHERE price_setting.date >= '".$start_dt."' AND price_setting.date < '".$end_dt."'
GROUP BY 
    cp_reg.busi_code,
    cp_reg.busi_name,
    cp_reg.busi_intro,
    cp_reg.busi_info,
    cp_reg.rev_info,
    cp_reg.addr_street,
    cp_reg.addr_number,
    cp_reg.addr_detail,
    cp_reg.phone,
    cp_reg.busi_pic_img,
    cp_reg.region,
    cp_reg.theme";
	// echo '<script> console.log('.json_encode($sql).');</script>';
	
	$result = $this -> data_model -> getList($sql, 'DB');

	$in_html="";
	$in_html2="";

	if (!empty($result)) {
		$i=0;	
		$room_i=0;	
		foreach ($result as $row) {
			$busi_code = $row["busi_code"];
			$busi_name = $row["busi_name"];
			$busi_intro = $row["busi_intro"];
			$busi_info = $row["busi_info"];
			$rev_info = $row["rev_info"];
			$addr_street = $row["addr_street"];
			$addr_number = $row["addr_number"];
			$addr_detail	 = $row["addr_detail"];
			$phone		 = $row["phone"];

			if (!empty($addr_street) && !empty($addr_number)) {
				$addr_detail = $addr_street . ' ' . $addr_detail;
			} else {
				$addr_detail = !empty($addr_street) ? $addr_street . ' ' . $addr_detail : $addr_number . ' ' . $addr_detail;
			}

			$theme = $row["theme"];
			$busi_percent = 1;
			$busi_price = 1000000;

			// $price_str = rtrim('#' . implode('#', $prices), '#');

			$busi_pic_imgs = explode('|', $row["busi_pic_img"]);
			$region = $row["region"];
			$addr_street = $row["addr_street"];

			$sql3 = 'SELECT * FROM `price_setting` WHERE `busi_code` = "'.$busi_code.'"';
			$result3 = $this -> data_model -> getList($sql3, 'DB');
			if (!empty($result3)) {
				
				foreach ($result3 as $row3) {
					// 할인율 계산
					$regular_price = $row3['regular_price'];
					$member_price = $row3['member_price'];
					$special_price = $row3['special_price'];
				
					$discount_percent = 0;
					if ($member_price < $regular_price) {
						$discount_percent = (($regular_price - $member_price) / $regular_price) * 100;
					}
				
					// special_price가 존재하는 경우
					if (!empty($special_price)) {
						$special_discount_percent = (($regular_price - $special_price) / $regular_price) * 100;
						$discount_percent = max($discount_percent, $special_discount_percent);
					}
				
					// 최대 할인율 업데이트
					$busi_percent = max($busi_percent, $discount_percent);
					$busi_percent = ceil($busi_percent);
				
					if (!empty($special_price)) {
						$min_price = min($member_price, $special_price);
					} else {
						$min_price = $member_price;
					}
					
					$busi_price = min($busi_price, $min_price);
				}
			}
			
			$in_html = $in_html.
			'
			<div class="row '.$region.'_'.$row["price_attack"].'">
			<div class="cell cell--text flex">
			<h2 class="cell__title oh" style="background-image:url('.$m_url.''.$busi_pic_imgs[0].')" <img src="/images/common/hot.png"  alt="" id="hot_time"><span class="oh__inner"></span></h2>
			</div>
			<div class="inner-wrap">
			<div class="inner_title pc_inner">
			<h3>'.$busi_name.'<span>'.$region.'</span></h3>
			<div class="inner-flex">
			<div class="inner-flex-left"><span><img src="/images/common/reviewstar.png" alt=""><span 
			class="bold">9.5</span>리뷰(521건)<a href="/review" target="_blank">리뷰보기</a></span>
			</div>
			<div class="inner-flex-right"><span id="percent">'.$busi_percent.'%</span><span
			id="price">'.$busi_price.'</span><span>원~</span></div>
			</div>
			</div>

			<div class="inner_title mo_inner">
			<h3>'.$busi_name.'<br><span>'.$region.'</span></h3>
			<div class="mo-review">
				<img src="/images/common/reviewstar.png" alt="">
				<span class="mo_review2">9.5</span><span class="mo_review3">리뷰(521건)</span>
			</div>
			<a href="/review">리뷰보기</a>
			<div class="mo_price"><span class="mo_percent">'.$busi_percent.'%</span>79,000원~</div>
			</div>
			<div class="cell cell--images">
			';

			$sql3 = 'SELECT * FROM `room_reg` WHERE `busi_code` = "'.$busi_code.'" and `preview` >= 0';
			$result3 = $this -> data_model -> getList($sql3, 'DB');
			$count = 0;
			if (!empty($result3)) {
				foreach ($result3 as $row3) {
					$paths = explode('|', $row3["room_pic_img"]);
					$first_path = $paths[0];

					if ($count < 4) {
						$in_html = $in_html.
						'
						<div class="cell__img">
						<span>'.$row3["room_name"].'</span>
						<div class="cell__img-inner" id="room_'.$busi_code.'_'.$row3["room_code"].'" style="background-image:url('.$m_url.''.$paths[0].')"></div>
						</div>
						';

						if ($count == 3){
							$in_html .= '<div class="more"><img src="/images/common/more.png" alt=""></div>';
						}
					}
					$count++;					
				}
			}	

			$in_html = $in_html.'</div></div></div>';

			$in_html2 = $in_html2.
					'
					<div class="preview__item">	
					<!-- 스와이퍼 위치! -->
					<div class="swiper-wrap">
						<div class="swiper-flex">
							<div class="title1">
								<form action="">
									<h2 class="preview__item-title oh">'.$busi_name.'<button type="button"
											class="like_Button"></button></h2>
									<div class="ps_tag" id="tag1">
										#'.$region.'
									</div>
								</form>
								<div class="detail-wrap">
									<div class="address">
									'.$addr_street.'									
									</div>
									<div class="price2">
										<span class="price2-1">'.$busi_percent.'%</span>
										<span class="price2-2">'.$busi_price.'</span>원~
									</div>
								</div>
							</div>
						</div>
						<div class="swiper swiper01">
							<div class="close_btn"><button class="preview__close unbutton">&#9587;</button></div>
							<div class="swiper-wrapper" style="height : auto">';
							foreach ($busi_pic_imgs as $img_url) {
								$in_html2 .= '
								<div class="swiper-slide">
								<img src="'.$m_url.''.$img_url.'" alt="">
								</div>
								';
							}
						$in_html2 .= '
							</div>
							<div class="swiper-button-prev mainbtn1"></div>
							<div class="swiper-button-next mainbtn2"></div>
						</div>
	
						<div class="infobtn">
							<div class="infotext">
								<h3>숙소소개</h3>
								<p>'.nl2br($busi_info).'</p>
							</div>
							<div class="infobuttons">
								<button class="infobtn1">업체정보</button>
								<button class="infobtn2">예약안내</button>
								<a href="/review" target="_blank"><span
										class="star">★</span>9.6<span>리뷰</span><span>(548건)</span></a>
								<button class="infobtn3">판매자정보</button>
							</div>
						</div>
				<div class="room-info1 roominfos">
				<h2>업체 정보</h2>
				'.nl2br($busi_intro).'
				<button class="confirm">확인</button>
			</div>	
	
			<div class="room-info2 roominfos">
				<h2>예약안내</h2>
				'.nl2br($rev_info).'
				<button class="confirm">확인</button>
			</div>
	
			<div class="room-info3 roominfos">
				<h2>판매자정보</h2>
				<div class="info_flex">
				<span>업체명 : </span>'.$busi_name.'
				</div>
	
				<div class="info_flex">
				<span>사업자등록번호 : </span>'.$busi_code.'
				</div>
	
				<div class="info_flex">
				<span>대표자명 : </span>'.$busi_name.'
				</div>
	
				<div class="info_flex">
				<span>주소 : </span>'.$addr_detail.'
				</div>
	
				<div class="info_flex">
				<span>대표번호 : </span>'.$phone.'
				</div>
	
				<button class="confirm">확인</button>
				</div>
				</div>
				<div class="grid" id="pension1">
				';

				$sql3 = 'SELECT * FROM `room_reg` WHERE `busi_code` = "'.$busi_code.'" and `preview` >= 0';
				$result3 = $this -> data_model -> getList($sql3, 'DB');
				$count = 0;
				if (!empty($result3)) {
					foreach ($result3 as $row3) {
						$paths = explode('|', $row3["room_pic_img"]);
						$first_path = $paths[0];
	
						if ($count >= 4) {
							$in_html2 .= '
							<div class="cell__img">
							<span>'.$row3["room_name"].'</span>
							<div class="cell__img-inner" id="room_'.$busi_code.'_'.$row3["room_code"].'" style="background-image:url('.$m_url.''.$paths[0].')"></div>
							</div>
							';
	
							if ($count == 3){
								// $in_html .= '<div class="more"><img src="/images/common/more.png" alt=""></div>';
							}
						}
						$count++;					
					}
				}
				
				$in_html2 .= '			
						
					</div>
				</div>';
		}
	}
?>

<html lang="en" class="no-js">
<head>
<meta name="author" content="Codrops" />
	<link rel="stylesheet" href="https://use.typekit.net/gdf6m
	si.css">
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
		
		.swiper-wrapper{
			height: auto !important;
		}
		.inner_title h3{
			flex-direction:row;
			align-items: center;
		}
		.inner_title h3 img{
			width: 3%;
			padding-bottom: 1%;
		}
		.frame_flex{
			justify-content: space-between !important;
		}
	
		.days h2{
			color: #ed2b55;
			font-family: 'mid';
			font-size: 34px;
			font-weight: lighter;
			display: flex !important;
			align-items: center;
		}

		.days img{
			width: 15%;
			padding-bottom: 3%;
		}
		input[type="checkbox"] {
			display: none;
		}

		.link_btn2 label {
			align-items: baseline;
			font-size: 20px;
			color: #ED2B55;
		}

		input[type="checkbox"]+label {
			display: inline-block;
			width: 15px;
			height: 15px;
			border: 1px solid #ED2B55;
			background-color: #fff;
			position: relative;
			margin-right: 5px;
		}

		input[type="checkbox"]:checked+label::after {
			content: '✔';
			color: #ED2B55;
			font-size: 16px;
			font-weight: bold;
			width: 12px;
			height: 12px;
			text-align: center;
			position: absolute;
			left: 0;
			top: 10%;
			transform: translateY(-50%);
		}

		@media(max-width:768px){
			.days h2{
				font-size: 28px;
			}
			.inner_title h3{
				display: block;
			}
			.mo_inner img{
			padding-bottom: 0 !important;
			width: 10% !important;
			margin-right: 5px !important;
		}
		.link_btn2 label {
			font-size: 16px;
		}
		input[type="checkbox"]+label {
			width: 12px;
			height: 12px;
		}
		input[type="checkbox"]:checked+label::after {
			width: 10px;
			height: 10px;
			top: -2%;
		}
		.mo_inner .mo_price{
			margin-top: 12% !important;
		}

		}
		@media(max-width:500px){
			.days h2{
				font-size: 22px;
			}
		}
	</style>
</head>

<body>
	<?php
include('header2.php');
?>
	<main>
		<div class="frame__title">
			<h1 class="frame__title-main">

				<div class="frame_flex">
					<div class="days">
						<h2><span>나의 즐겨찾기</span><img src="/images/common/good2.png" alt=""></h2>
					</div>
					<div class="search-wrap">
						<div class="search">
							<button type="button" id="filter"> <img src="/images/common/filter.png" alt=""></button>
							<div class="searchbar"><img src="/images/common/search.png" alt=""> <input type="text"
									name="search" id="search" placeholder="가평 풀빌라"></div>
						</div>
					</div>
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
			<div class="close">
				<form action=""><button type="submit" id="close">확인</button></form>
			</div>
		</div>
		</div>
		<section class="content">

			
			<div class="cover1"></div>

			<?php echo $in_html?>
		</section><!-- /content -->


		<!-- 위에부분의 Nobody's Love는 서브 미리보기 4개 여기에다가 업주분이 업로드하신 객실사진들을 뿌려야 누른다음 grid로나옴 -->
		<section class="preview">
		<form action="" method="" name="" class="wrap_all1">
				<div class="wrap_all">
					<div class="closebtn">
						<img src="/images/common/close.png" alt="">
					</div>
					<div class="price_swiper">
						<div class="swiper-wrap">
							<div class="swiper">
								<div class="swiper-wrapper">
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
						<div class="room_info">
							객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다
							객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다
							객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다
							객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다
							객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다
							객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다
						</div>
						<div class="room_price">
							<div class="date">
								
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
						</div>

			</div>
			</div>
			</form>
			<?php echo $in_html2?>
		</section>
		<?php
include('footer.php');
?>
	</main>
	<script src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/Flip.min.js"></script>
	<script type="module" src="js/index.js"></script>

	<script>
		$(document).ready(function () {
			$('.infobtn1').click(function(){
        $('.room-info1').fadeIn();
		$('.room-info2').fadeOut();
		$('.room-info3').fadeOut();

    });

    $('.infobtn2').click(function(){
        $('.room-info2').fadeIn();
        $('.room-info1').fadeOut();
        $('.room-info3').fadeOut();

    });

    $('.infobtn3').click(function(){
        $('.room-info3').fadeIn();
        $('.room-info2').fadeOut();
        $('.room-info1').fadeOut();

    });

    $('.confirm').click(function(){
        $('.roominfos').fadeOut();
    });
			$('.row').click(function () {
				$('.cell__img-inner').addClass('active');
				$('.cell__img').addClass('active');
				$('.preview').css('pointer-events','all');
				event.stopPropagation();
			})

			$(document).on('click', '.active', function (event) {      
       
        $('.wrap_all').fadeIn();
        $('main').css({
            'background-color': 'none',
            'padding-top': '0'
        });
	});
			$('.close_btn').click(function () {
				$('.cell__img-inner').removeClass('active');
				$('.cell__img').removeClass('active');
				$('.preview').css('pointer-events','none');
				$('main').css({
					'background-color': 'rgba(255,255,255,0.85)',
					'padding-top': '8%'
				});
			})
			$('.closebtn').click(function (){
				$('.wrap_all').fadeOut();
				$('.preview').fadeIn();
			})
			setTimeout(function () {

				$('.cell__img').fadeIn(700);
				$('.cell__img').css('display', 'grid');
			}, 500)

			$('.like_Button').click(function () {
				$(this).toggleClass('like');
			});

			

		});

		

		document.addEventListener("DOMContentLoaded", function () {
			const startDateInput = document.getElementById("start_date");
			const endDateInput = document.getElementById("end_date");


			startDateInput.addEventListener("change", function () {
				if (startDateInput.value) {
					startDateInput.setAttribute("data-placeholder", "");
				} else {
					startDateInput.setAttribute("data-placeholder", "입실일선택");
				}
			});

			// 종료일(input)의 값이 변경될 때 이벤트 처리
			endDateInput.addEventListener("change", function () {
				if (endDateInput.value) {
					endDateInput.setAttribute("data-placeholder", "");
				} else {
					endDateInput.setAttribute("data-placeholder", "퇴실일선택");
				}
			});
		});



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


			if (currentBackgroundColor === 'rgb(237,43,85)' && currentTextColor === 'rgb(255, 255, 255)') {
				$li.css({
					'background-color': '#fff',
					'color': '#ED2B55'
				});
			} else {
				$li.css({
					'background-color': '#ED2B55',
					'color': '#fff'
				});
			}
		});


	</script>
</body>

</html>
