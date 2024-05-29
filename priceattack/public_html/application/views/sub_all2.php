<?php
	include('header2.php');
	$m_url = 'https://priceattack-partner.kr/';
	$condition = "";

	if(isset($_POST['region'])){
		$options = array(
			'region' => $_POST['region'],
			'theme' =>  $_POST['theme'],
			'price' => $_POST['price']
		);

		$this->session->set_userdata($options);
	}

	$regions = explode(',', $this->session->userdata('region'));

	foreach ($regions as $region) {
		$condition .= '<label for="check_region_' . $region . '"><input type="checkbox" id="check_region_' . $region . '" checked><label for="check_region_' . $region . '"></label>'. $region . '</label>';
	}
	$themes = explode(',', $this->session->userdata('theme'));
	foreach ($themes as $theme) {
		$condition = $condition.'<label for="check_theme_' . $theme . '"><input type="checkbox" id="check_theme_' . $theme . '" checked><label for="check_theme_' . $theme . '"></label>' . $theme . '</label>';
	}
	echo $this->session->userdata('name');
	$user_id = $this->session->userdata('user_id');
	$prices = $this->session->userdata('price');
	$price = "프라이스어택";
	$checked = "";
	if($prices == $price){
		$checked = "checked";
	}
	// foreach ($prices as $price) {
		$condition = $condition.'<label for="check_price_' . $price . '"><input type="checkbox" id="check_price_' . $price . '" '.$checked.'><label for="check_price_' . $price . '"></label>' . $price . '</label>';
	// }
	$region_string = '"'. implode('","', $regions) .'"';
	
	$region_string = str_replace(' ', '', $region_string);

	$theme_string = str_replace(',', '|', $this->session->userdata('theme'));
	$theme_string = str_replace(' ', '', $theme_string);
	// $theme_string = '"' . implode('","', $themes) . '"';
	// $price_string = '"' . implode('","', $prices) . '"';

	// $sql = 'SELECT * FROM `cp_reg` WHERE `region` in ('.$region_string.') and `theme` REGEXP "(^|\\\|)('.$theme_string.')(\\\||$)" ';

	$start_dt = isset($_POST['s_date']) ? $_POST['s_date'] : date('Y-m-d');
	$end_dt = isset($_POST['e_date']) ? $_POST['e_date'] : date('Y-m-d', strtotime('+1 day'));

	if(isset($_POST['activeButtons'])) {
		$activeButtons = $_POST['activeButtons'];
		// $_POST['activeButtons'] 값이 존재하는 경우의 처리
	} else {
		// $_POST['activeButtons'] 값이 없는 경우의 처리
	}

	$optionsCondition = '';
	
	// echo $activeButtons;

	if (!empty($activeButtons)) {
		$optionsList = explode('|', $activeButtons);  // '|' 구분자로 분리
		$optionsConditions = array_map(function($option) {
			return "FIND_IN_SET('" . addslashes($option) . "', room_reg.options)";
		}, $optionsList);
		$optionsCondition = implode(' AND ', $optionsConditions);  // AND 조건으로 연결
	}

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
	bookmarks.busi_code bookmarks,
    MAX(CASE 
        WHEN price_setting.special_price IS NOT NULL THEN '프라이스어택' 
        ELSE '' 
    END) AS price_attack
FROM cp_reg
INNER JOIN room_reg ON cp_reg.busi_code = room_reg.busi_code
INNER JOIN price_setting ON room_reg.busi_code = price_setting.busi_code 
    AND room_reg.room_code = price_setting.room_code
	LEFT JOIN bookmarks ON cp_reg.busi_code = bookmarks.busi_code  AND bookmarks.user_id = '".$user_id."'
WHERE cp_reg.region IN ($region_string)
AND cp_reg.theme REGEXP '(^|\\\|)($theme_string)(\\\||$)'
AND price_setting.date >= '".$start_dt."' AND price_setting.date < '".$end_dt."'"
. (!empty($optionsCondition) ? " AND ($optionsCondition)" : "") .  // options 조건 추가
" 	GROUP BY 
    cp_reg.busi_code,
    cp_reg.busi_name,
    cp_reg.busi_intro,
    cp_reg.busi_info,
    cp_reg.rev_info,
    cp_reg.addr_street,
    cp_reg.addr_number,
    cp_reg.addr_detail,
	cp_reg.busi_pic_img,
	cp_reg.region,
	cp_reg.theme,
    cp_reg.phone,
	bookmarks.busi_code";
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
			$bookmarks = isset($row["bookmarks"]) ? "like" : "";

			if (!empty($addr_street) && !empty($addr_number)) {
				$addr_detail = $addr_street . ' ' . $addr_detail;
			} else {
				$addr_detail = !empty($addr_street) ? $addr_street . ' ' . $addr_detail : $addr_number . ' ' . $addr_detail;
			}

			$theme = $row["theme"];
			$busi_percent = 1;
			$busi_price = 1000000;
			$region_str = rtrim('#' . implode('#', $regions), '#');

			$themes = explode('|', rtrim($theme, '|'));
			$theme_str = '#' . implode(' #', $themes);

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
			<div class="row '.$region.' '.$theme_str.' '.$row["price_attack"].'">
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
											class="like_Button '.$busi_code.' '.$bookmarks.'  "></button></h2>
									<div class="ps_tag" id="tag1">
										#'.$region.' '.$theme_str.'
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
							<div class="close_btn"><button class="preview__close unbutton" type="button">&#9587;</button></div>
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
								<button type="button" class="infobtn1">업체정보</button>
								<button type="button" class="infobtn2">예약안내</button>
								<a href="/review" target="_blank"><span
										class="star">★</span>9.6<span>리뷰</span><span>(548건)</span></a>
								<button type="button" class="infobtn3">판매자정보</button>
							</div>
						</div>
				<div class="room-info1 roominfos">
				<h2>업체 정보</h2>
				'.nl2br($busi_intro).'
				<button type="button" class="confirm">확인</button>
			</div>	
	
			<div class="room-info2 roominfos">
				<h2>예약안내</h2>
				'.nl2br($rev_info).'
				<button type="button" class="confirm">확인</button>
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
	
				<button type="button" class="confirm">확인</button>
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
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

	
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
	<script src="/js/main.js"></script>
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
		input[type="checkbox"] {
			display: none;
		}

		.link_btn2 label {
			align-items: baseline;
			font-size: 20px;
			color: #ED2B55;
			margin-left: 7px;
		}

		input[type="checkbox"]+label {
			display: inline-block;
			width: 15px;
			height: 15px;
			border: 1px solid #ED2B55;
			background-color: #fff;
			position: relative;
			margin-right: 1px;
		}

		input[type="checkbox"]:checked+label::after {
			display: block;
			content: '✔';
			color: #ED2B55;
			font-size: 16px;
			font-weight: bold;
			width: auto;
			height: 12px;
			text-align: center;
			position: absolute;
			left: 0;
			top: 10%;
			transform: translateY(-50%);
		}

		@media(max-width:500px){
			
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
		}
	</style>
</head>
<form id=s_form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
<body>

	<main>
		<div class="frame__title">
			<h1 class="frame__title-main">

				<div class="frame_flex">
				<div class="days">
					<div class="day1"><span class="disa">이용일자 : </span>입실일<input type="date" name="s_date" id="s_date" required data-placeholder="[&nbsp;&nbsp;입실일 선택&nbsp;&nbsp;]" value="<?php echo htmlspecialchars($start_dt); ?>"></div>
					<div class="day2"><span class="disa">~</span> 퇴실일<input type="date" name="e_date" id="e_date" required data-placeholder="[&nbsp;&nbsp;퇴실일 선택&nbsp;&nbsp;]" value="<?php echo htmlspecialchars($end_dt); ?>"></div>
					<div id="days">1박2일</div>
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
		<div class="link_btn2">
			<label for="check_all"><input type="checkbox" name="" id="check_all" checked><label
					for="check_all"></label>전체</label>
					<?php echo $condition?>
		</div>
		<div class="option-wrap">
		<div id="close_opt" class="closebtn" style="right:-8%;"> <img src="/images/common/close.png" alt=""></div>
			<div class="opt-flexwrap">
				<div class="opt-flex">
					<ul>
						<li><span>입실일</span><span id="s_date2">2023년 08월 18일 금요일</span></li>
						<li><span>퇴실일</span><span id="e_date2">2023년 08월 20일 일요일</span></li>
						<li><span>인원</span><span><button id="decrease">-</button><span id="number">2</span><button id="increase">+</button></span></li>
						<li><span>가격</span><span>
								<div class="buttons">
								<button type="button" id="btn-100k" class="price-button">10만원~</button>
								<button type="button" id="btn-200k" class="price-button">20만원~</button>
								<button type="button" id="btn-300k" class="price-button">30만원~</button>
								<button type="button" id="btn-400k" class="price-button">40만원~</button>
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
				<button type="submit" id="close">확인</button>
					<input type="hidden" name="region" id="region" value="<?php echo isset($_POST['region']) ? htmlspecialchars($_POST['region']) : ''; ?>">
					<input type="hidden" name="theme" id="theme" value="<?php echo isset($_POST['theme']) ? htmlspecialchars($_POST['theme']) : ''; ?>">
					<input type="hidden" name="price" id="price" value="<?php echo isset($_POST['price']) ? htmlspecialchars($_POST['price']) : ''; ?>">
					<input type="hidden" name="activeButtons" id="activeButtons">
			</form>
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
					<div class="closebtn"> <img src="/images/common/close.png" alt=""></div>
					<div class="price_swiper">
						<div class="swiper-wrap">
							<div class="swiper2">
								<div class="swiper-wrapper" id="room_info_d" style="height : auto">
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
								
							</div>
						</div>
					</div>
					<div class="info_wrap">
						<div class="flex">
							<p id="room_name">풀빌라11<span id="room_size">(00평/00㎡)</span></p>
							<p id="room_people">기준인원00명/최대인원00명</p>
						</div>
						<div class="room_info" id="room_info">
							객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다
							객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다객실정보입니다
													
						</div>
						<div class="room_price">
							<div class="date">
								
									<label for="start_date">기간설정</label>
									<input type="date" name="start_date" id="start_date" readonly>
									~
									<input type="date" name="end_date" id="end_date" readonly>

							</div>
							<div class="price" id=r_price>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/Flip.min.js"></script>
<script type="module" src="/js/index.js"></script>

<script>
var swiper2;
$(document).ready(function(){
    $('.cell__img-inner').click(function(){
        var id = $(this).attr('id');
        var busi_code = id.split('_')[1];
        var room_code = id.split('_')[2];
        
        $.ajax({
            url: 'Database/get_room_data', // 요청을 보낼 PHP 스크립트의 경로
            type: 'POST', // POST 방식으로 요청을 보냅니다.
			dataType: 'json',
            data: { value1: busi_code, value2: room_code
			}, // 요청에 포함될 데이터
            success: function(response){

                // console.log(response); 				

				$('#room_name').empty();
				var room_name = response.result[0].room_name+'<span id="room_size">('+response.result[0].room_size+'㎡)</span></p>';
				$('#room_name').append(room_name);

				$('#room_people').empty();
				var parts = response.result[0].room_nop.replace(/[^\d/]/g, '');
				parts = parts.split('/');
				var currentCapacity = parseInt(parts[0]);
				var maxCapacity = parseInt(parts[1]);
				var result = '기준인원 '+currentCapacity + "명/최대인원 " + maxCapacity + "명";

				$('#room_people').append(result);

				$('#room_info').empty();
				var room_info = response.result[0].room_info;
				$('#room_info').append(room_info.replace(/\n/g, "<br>"));

				$('#r_price').empty();
				var r_price = '<p>정상객실가<span id="bf_price">'+response.result[0].regular_price+'원</span></p>';

				var price = response.result[0].member_price;
				if(response.result[0].special_price > 0){
					price = response.result[0].special_price;
				}

				r_price = r_price + '<p>할인객실가<span id="bf_price">'+price+'원</span></p>';
				$('#r_price').append(r_price);
							
				
				$('#room_info_d').empty();
				var images = response.result[0].room_pic_img.split('|'); // | 기준으로 이미지 URL 분할
				images.forEach(function(imgSrc) {
					var slideElement = `<div class="swiper-slide"><img src="<?php echo $m_url ?>${imgSrc}" alt=""></div>`;
					$('#room_info_d').append(slideElement);
        		});
				
				if (swiper2 !== undefined) swiper2.destroy(true, true);
				swiper2 = new Swiper('.swiper2', {
				speed:600,
				slidesPerView: 1,
				spaceBetween: 0,
				observer: true,
				observeParents: true,
				direction: 'horizontal',
				loop: true,
				effect: 'slide',
				pagination: {
					el: '.swiper-pagination',
				},
				
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},
				
				autoplay: {
					delay: 2500,
				},
				// Responsive breakpoints
				breakpoints: {
					// when window width is >= 320px
					320: {
					slidesPerView: 1,
					spaceBetween: 0
					},
					// when window width is >= 640px
					640: {
					slidesPerView: 1,
					spaceBetween: 0
					},
					// when window width is >= 960px
					960: {
					slidesPerView: 1,
					spaceBetween: 0
					}
				}
				
				});
				swiper2.update();
            },
            error: function(xhr, status, error){
                console.error(error);
            }
        });
    });
});
</script>
	<script>
    document.addEventListener("DOMContentLoaded", function() {
        // 날짜 입력 필드 가져오기
        const startDateInput = document.getElementById('s_date');
        const endDateInput = document.getElementById('e_date');
        const daysDisplay = document.getElementById('days');

        startDateInput.addEventListener('change', calculateDays);
        endDateInput.addEventListener('change', calculateDays);
		calculateDays();

		const toDateString = (date) => {
            let dd = date.getDate();
            let mm = date.getMonth() + 1;
            const yyyy = date.getFullYear();

            if (dd < 10) {
                dd = '0' + dd;
            }
            if (mm < 10) {
                mm = '0' + mm;
            }

            return `${yyyy}-${mm}-${dd}`;
        };

        // 날짜 계산 함수
        function calculateDays() {
            const startDate = new Date(startDateInput.value);
            const endDate = new Date(endDateInput.value);

            // 입실일과 퇴실일 모두 선택된 경우에만 계산
            if (startDateInput.value !== '' && endDateInput.value !== '') {
                // 두 날짜 사이의 차이 계산
                const timeDiff = endDate.getTime() - startDate.getTime();
                const daysDiff = Math.ceil(timeDiff / (1000 * 3600 * 24));

				if (!isNaN(daysDiff) && daysDiff > 0) {
                    daysDisplay.textContent = `${daysDiff}박 ${daysDiff + 1}일`;
                } else {

					alert("날짜를 올바르게 선택해주세요");
					const today = new Date();
					const tomorrow = new Date(today);
					tomorrow.setDate(tomorrow.getDate() + 1);

					document.getElementById('s_date').value = toDateString(today);
        			document.getElementById('e_date').value = toDateString(tomorrow);
					daysDisplay.textContent = "1박2일";
                }

				$('#s_date2').empty();
				$('#s_date2').append(document.getElementById('s_date').value);
				$('#e_date2').empty();
				$('#e_date2').append(document.getElementById('e_date').value);

				document.getElementById('start_date').value = document.getElementById('s_date').value;
				document.getElementById('end_date').value = document.getElementById('e_date').value;
            }
        }
    });
</script>

	<script>
	$(document).ready(function () {
		$('.infobtn1').click(function(){
			var scrollPos = $('.preview').scrollTop();
			scrollPos = scrollPos+300;
			$('.room-info1').fadeIn().css('top', scrollPos);
			$('.room-info2').fadeOut();
			$('.room-info3').fadeOut();

    });

    $('.infobtn2').click(function(){
		var scrollPos = $('.preview').scrollTop();
		scrollPos = scrollPos+300;
        $('.room-info2').fadeIn().css('top', scrollPos);
        $('.room-info1').fadeOut();
        $('.room-info3').fadeOut();

    });

    $('.infobtn3').click(function(){
		var scrollPos = $('.preview').scrollTop();
		scrollPos = scrollPos+300;
        $('.room-info3').fadeIn().css('top', scrollPos);
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
		var userId = '<?= $user_id; ?>';

		var className = $(this).attr('class');
		var matches  = className.match(/[\d-]+/g);
		var busiCode = matches[0];

		$.ajax({
			url: 'Database/toggle_bookmark',
			type: 'POST',
			data: {user_id: userId, busi_code: busiCode},
			dataType: 'json',
			success: function(response) {
				if (response.status === 'success') {
					// alert(response.message);
				} else {
					// alert(response.message);
				}
			},
			error: function() {
				alert('Error toggling bookmark.');
			}
		});

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
		$('#close_opt').click(function () {
			$('.option-wrap').fadeOut();
		})

		$('.buttons button').click(function () {
			var $li = $(this);

			var currentBackgroundColor = $li.css('background-color');
			var currentTextColor = $li.css('color');

			if (currentBackgroundColor === 'rgb(237, 43, 85)' && currentTextColor === 'rgb(255, 255, 255)') {
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

<script>
document.addEventListener("DOMContentLoaded", function() {
    const checkAllCheckbox = document.getElementById('check_all');
    const checkboxes = document.querySelectorAll('input[type="checkbox"][id^="check_region"], input[type="checkbox"][id^="check_theme"], input[type="checkbox"][id^="check_price"]');

    checkAllCheckbox.addEventListener('change', function() {
        checkboxes.forEach(cb => cb.checked = checkAllCheckbox.checked);
        filterRows();
    });

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            // 전체 체크박스 상태 업데이트
            checkAllCheckbox.checked = areAllCheckboxesChecked();
            filterRows();
        });
    });

    // 모든 체크박스가 체크되었는지 확인하는 함수
    function areAllCheckboxesChecked() {
        return Array.from(checkboxes).every(cb => cb.checked);
    }

    // 필터링 로직
    function filterRows() {
        const selectedRegions = Array.from(document.querySelectorAll('input[id^="check_region"]:checked')).map(cb => cb.id.replace('check_region_', '').trim());
        const selectedThemes = Array.from(document.querySelectorAll('input[id^="check_theme"]:checked')).map(cb => cb.id.replace('check_theme_', '').trim());
        const selectedPrices = Array.from(document.querySelectorAll('input[id^="check_price"]:checked')).map(cb => cb.id.replace('check_price_', '').trim());

        document.querySelectorAll('.row').forEach(row => {
            const rowClasses = row.className.split(' ');
            const isRegionMatched = selectedRegions.some(region => rowClasses.includes(region));
            const isThemeMatched = selectedThemes.some(theme => rowClasses.includes(`#${theme}`));
            const isPriceMatched = selectedPrices.some(price => rowClasses.includes(price));

			var ckPriceMatched = document.getElementById("check_price_프라이스어택").checked;

			if(ckPriceMatched){
				if (isRegionMatched && isThemeMatched && isPriceMatched) {
                	row.style.display = "";
            	} else {
                	row.style.display = "none";
            	}

			} else {
				if (isRegionMatched && isThemeMatched || isPriceMatched) {
                	row.style.display = "";
            	} else {
                	row.style.display = "none";
            	}
			}            
        });
    }

    // 페이지 로드 시 필터링 적용
    filterRows();
});
</script>


<script>
    const form = document.querySelector('form');

    // 폼의 'submit' 이벤트에 대한 이벤트 리스너 추가
    form.addEventListener('submit', function(event) {
		var activeLabels = $('.buttons button').not('#btn-100k, #btn-200k, #btn-300k, #btn-400k').filter(function () {
			return $(this).css('background-color') === 'rgb(237, 43, 85)'; // 상세 필터 활성화 상태 확인
		}).map(function () {
			return $(this).text(); // 텍스트 수집
		}).get().join('|'); // '|'로 조인

		$('#activeButtons').val(activeLabels);
		// alert(activeLabels);
    });

	document.addEventListener('DOMContentLoaded', function() {
		// PHP 변수로부터 값을 받은 것을 가정
		var activeButtons = "<?php echo $activeButtons?>";

		

		// '|'로 분리하여 배열 생성
		var activeList = activeButtons.split('|');

		// 모든 버튼을 순회
		var buttons = document.querySelectorAll('.buttons button');
		buttons.forEach(function(button) {
			// 버튼의 텍스트가 activeList 중 하나와 일치하는지 확인
			if (activeList.includes(button.textContent)) {
				// 일치하는 경우, 배경색 변경
				button.style.backgroundColor = 'rgb(237, 43, 85)';
				button.style.color = 'rgb(255, 255, 255)';
			}
		});
	});


	function updateNumber(change) {
		var numberSpan = document.getElementById('number');
		numberSpan.textContent = parseInt(numberSpan.textContent) + change;
	}

	document.getElementById('increase').addEventListener('click', function() {
		event.preventDefault();
		updateNumber(1);
	});
	document.getElementById('decrease').addEventListener('click', function() {
		event.preventDefault();
		updateNumber(-1);
	});	
</script>

</html>
