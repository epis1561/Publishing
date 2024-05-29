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
					<label for="check_all"><input type="checkbox" name="" id="check_all"><label for="check_all"></label>모두보기</label>
					<label for="check_region"><input type="checkbox" name="" id="check_region"><label for="check_region"></label>서울</label>
					<label for="check_theme"><input type="checkbox" name="" id="check_theme"><label for="check_theme"></label>애견</label>
					<label for="check_price"><input type="checkbox" name="" id="check_price"><label for="check_price"></label>최저가보장</label>
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
						<div class="close"><form action=""><button type="submit" id="close">확인</button></form></div>
					</div>
		</div>


		</section>
		</section>
		<section class="content">
		
			<form action="" method="" name="">
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
			<div class="cover1">
			</div>

			<div class="row">
				<div class="cell cell--text flex">
					<!-- 펜션이름 입니다. -->
					<h2 class="cell__title oh"><span class="oh__inner">Nobody's Love</span></h2>
					<span class="percent">~72%</span>
					<div class="detail1">자세히 보기 ></div>
				</div>
				<div class="cell cell--images">

					<!-- 특정펜션에 마련되어 있는 각각의 객실입니다. a링크에는 클릭 시 특정객실 결제창만에 연결되는 부분입니다. -->
					<div class="cell__img">
						<span>객실명1</span>
						<div class="cell__img-inner" style="background-image:url(/img/6.avif)"></div>
					</div>

					<div class="cell__img">
						<span>객실명2</span>
						<div class="cell__img-inner" style="background-image:url(/img/7.avif)"> </div>
					</div>


					<div class="cell__img">
						<span>객실명3</span>
						<div class="cell__img-inner" style="background-image:url(/img/8.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명4</span>
						<div class="cell__img-inner" style="background-image:url(/img/9.avif)"></div>
					</div>

				</div>
			</div>

			<div class="row">
				<div class="cell cell--text flex">
					<h2 class="cell__title oh"><span class="oh__inner">Good Wings</span></h2>
					<span class="percent">~72%</span>
					<div class="detail1">자세히 보기 ></div>
				</div>
				<div class="cell cell--images">
					<div class="cell__img">
						<span>객실명1</span>
						<div class="cell__img-inner" style="background-image:url(/img/1.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명2</span>
						<div class="cell__img-inner" style="background-image:url(/img/2.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명3</span>
						<div class="cell__img-inner" style="background-image:url(/img/3.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명4</span>
						<div class="cell__img-inner" style="background-image:url(/img/4.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명5</span>
						<div class="cell__img-inner" style="background-image:url(/img/5.avif)"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="cell cell--text">
					<h2 class="cell__title oh"><span class="oh__inner">Maniac Fly</span></h2>
					<span class="percent">~72%</span>
					<div class="detail1">자세히 보기 ></div>
				</div>
				<div class="cell cell--images">
					<div class="cell__img">
						<span>객실명1</span>
						<div class="cell__img-inner" style="background-image:url(/img/10.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명2</span>
						<div class="cell__img-inner" style="background-image:url(/img/11.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명3</span>
						<div class="cell__img-inner" style="background-image:url(/img/12.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명4</span>
						<div class="cell__img-inner" style="background-image:url(/img/13.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명5</span>
						<div class="cell__img-inner" style="background-image:url(/img/14.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명6</span>
						<div class="cell__img-inner" style="background-image:url(/img/15.avif)"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="cell cell--text">
					<h2 class="cell__title oh"><span class="oh__inner">Crumble Toe</span></h2>
					<span class="percent">~72%</span>
					<div class="detail1">자세히 보기 ></div>
				</div>
				<div class="cell cell--images">
					<div class="cell__img">
						<span>객실명1</span>
						<div class="cell__img-inner" style="background-image:url(/img/16.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명2</span>
						<div class="cell__img-inner" style="background-image:url(/img/17.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명3</span>
						<div class="cell__img-inner" style="background-image:url(/img/18.avif)"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="cell cell--text">
					<h2 class="cell__title oh"><span class="oh__inner">Finger Wax</span></h2>
					<span class="percent">~72%</span>
					<div class="detail1">자세히 보기 ></div>
				</div>
				<div class="cell cell--images">
					<div class="cell__img">
						<span>객실명1</span>
						<div class="cell__img-inner" style="background-image:url(/img/19.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명2</span>
						<div class="cell__img-inner" style="background-image:url(/img/20.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명3</span>
						<div class="cell__img-inner" style="background-image:url(/img/21.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명4</span>
						<div class="cell__img-inner" style="background-image:url(/img/22.avif)"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="cell cell--text">
					<h2 class="cell__title oh"><span class="oh__inner">Haunted X</span></h2>
					<span class="percent">~72%</span>
					<div class="detail1">자세히 보기 ></div>
				</div>
				<div class="cell cell--images">
					<div class="cell__img">
						<span>객실명1</span>
						<div class="cell__img-inner" style="background-image:url(/img/23.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명2</span>
						<div class="cell__img-inner" style="background-image:url(/img/24.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명3</span>
						<div class="cell__img-inner" style="background-image:url(/img/25.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명4</span>
						<div class="cell__img-inner" style="background-image:url(/img/26.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명5</span>
						<div class="cell__img-inner" style="background-image:url(/img/27.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명6</span>
						<div class="cell__img-inner" style="background-image:url(/img/28.avif)"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="cell cell--text">
					<h2 class="cell__title oh"><span class="oh__inner">Next Horror</span></h2>
					<span class="percent">~72%</span>
					<div class="detail1">자세히 보기 ></div>
				</div>
				<div class="cell cell--images">
					<div class="cell__img">
						<span>객실명1</span>
						<div class="cell__img-inner" style="background-image:url(/img/29.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명2</span>
						<div class="cell__img-inner" style="background-image:url(/img/30.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명3</span>
						<div class="cell__img-inner" style="background-image:url(/img/1.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명4</span>
						<div class="cell__img-inner" style="background-image:url(/img/10.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명5</span>
						<div class="cell__img-inner" style="background-image:url(/img/12.avif)"></div>
					</div>
				</div>
			</div>
		</section><!-- /content -->








		<!-- 위에부분의 Nobody's Love는 서브 미리보기 4개 여기에다가 업주분이 업로드하신 객실사진들을 뿌려야 누른다음 grid로나옴 -->
		<section class="preview">
			<div class="preview__item">
				<!-- 스와이퍼 위치! -->
				<div class="swiper-wrap">
					<div class="swiper-flex">
						<div class="ps_tag" id="tag1">
							#경기도 #풀빌라
						</div>
						<div class="title1">
							<form action="">
								<h2 class="preview__item-title oh">Nobody's Love <button type="button"
										class="like_Button"></button></h2>
							</form>
						</div>
					</div>
					<div class="swiper">
					<div class="close_btn"><button class="preview__close unbutton">&#9587;</button></div>
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
				<div class="grid" id="pension1">
					<div class="cell__img">
						<span>객실명5</span>
						<div class="cell__img-inner" style="background-image:url(/img/27.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명6</span>
						<div class="cell__img-inner" style="background-image:url(/img/26.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명7</span>
						<div class="cell__img-inner" style="background-image:url(/img/25.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명8</span>
						<div class="cell__img-inner" style="background-image:url(/img/24.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명9</span>
						<div class="cell__img-inner" style="background-image:url(/img/9.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명10</span>
						<div class="cell__img-inner" style="background-image:url(/img/9.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명11</span>
						<div class="cell__img-inner" style="background-image:url(/img/9.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명12</span>
						<div class="cell__img-inner" style="background-image:url(/img/9.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명13</span>
						<div class="cell__img-inner" style="background-image:url(/img/9.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명14</span>
						<div class="cell__img-inner" style="background-image:url(/img/9.avif)"></div>
					</div>
					<!-- 이부분이 추가되는 업주업로드 사진들 -->
				</div>
			</div>

			<div class="preview__item">
				<div class="swiper-wrap">
					<div class="swiper-flex">
						<div class="ps_tag" id="tag2">
							#경기도 #풀빌라
						</div>
						<div class="title1">
							<form action="">
								<h2 class="preview__item-title oh">Good Wings<button type="button"
										class="like_Button"></button></h2>
							</form>
						</div>
					</div>
					<div class="swiper">
					<div class="close_btn"><button class="preview__close unbutton">&#9587;</button></div>
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
				<div class="grid" id="pension2">
					<div class="cell__img">
						<span>객실명6</span>
						<div class="cell__img-inner" style="background-image:url(/img/30.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명7</span>
						<div class="cell__img-inner" style="background-image:url(/img/29.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명8</span>
						<div class="cell__img-inner" style="background-image:url(/img/28.avif)"></div>
					</div>
				</div>
			</div>
			<div class="preview__item">
				<h2 class="preview__item-title oh"><span class="oh__inner">Maniac Fly</span></h2>
				<span class="percent">~72%</span>
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
				<div class="grid">
					<div class="cell__img">
						<span>객실명7</span>
						<div class="cell__img-inner" style="background-image:url(/img/22.avif)"></div>
					</div>
					<div class="cell__img">
						<span>객실명8</span>
						<div class="cell__img-inner" style="background-image:url(/img/21.avif)"></div>
					</div>
				</div>
			</div>
			<div class="preview__item">
				<h2 class="preview__item-title oh"><span class="oh__inner">Crumble Toe</span></h2>
				<span class="percent">~72%</span>
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
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					</div>
				</div>
				<div class="grid">
					<div class="cell__img">
						<span>객실명4</span>
						<div class="cell__img-inner" style="background-image:url(/img/20.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명5</span>
						<div class="cell__img-inner" style="background-image:url(/img/19.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명6</span>
						<div class="cell__img-inner" style="background-image:url(/img/30.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명7</span>
						<div class="cell__img-inner" style="background-image:url(/img/31.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명8</span>
						<div class="cell__img-inner" style="background-image:url(/img/2.avif)"></div>
					</div>
				</div>
			</div>
			<div class="preview__item">
				<h2 class="preview__item-title oh"><span class="oh__inner">Finger Wax</span></h2>
				<span class="percent">~72%</span>
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
				<div class="grid">
					<div class="cell__img">
						<span>객실명5</span>
						<div class="cell__img-inner" style="background-image:url(/img/15.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명6</span>
						<div class="cell__img-inner" style="background-image:url(/img/14.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명7</span>
						<div class="cell__img-inner" style="background-image:url(/img/13.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명8</span>
						<div class="cell__img-inner" style="background-image:url(/img/12.avif)"></div>
					</div>
				</div>
			</div>
			<div class="preview__item">
				<h2 class="preview__item-title oh"><span class="oh__inner">Haunted X</span></h2>
				<span class="percent">~72%</span>
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
				<div class="grid">
					<div class="cell__img">
						<span>객실명7</span>
						<div class="cell__img-inner" style="background-image:url(/img/11.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명8</span>
						<div class="cell__img-inner" style="background-image:url(/img/10.avif)"></div>
					</div>
				</div>
			</div>
			<div class="preview__item">
				<h2 class="preview__item-title oh"><span class="oh__inner">Next Horror</span></h2>
				<span class="percent">~72%</span>
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
				<div class="grid">
					<div class="cell__img">
						<span>객실명6</span>
						<div class="cell__img-inner" style="background-image:url(/img/6.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명7</span>
						<div class="cell__img-inner" style="background-image:url(/img/8.avif)"></div>
					</div>


					<div class="cell__img">
						<span>객실명8</span>
						<div class="cell__img-inner" style="background-image:url(/img/5.avif)"></div>
					</div>
				</div>
			</div>
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
			$('.cell__img').click(function () {
				$('.wrap_all').fadeIn();
				$('.preview').fadeOut();
				$('main').css({
					'background-color': 'none',
					'padding-top': '0'
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

				$('.cell__img').fadeIn(700);
				$('.cell__img').css('display', 'grid');
			}, 500)

			var isLiked = false;

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
