<?php
include('nav.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" href="/CSS/package.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
	<link rel="stylesheet" href="/CSS/nav.css">
	<link rel="stylesheet" href="/CSS/footer.css">

	<style>
		.package .my-swiper {
			width: 1200px;

		}

		.package .my-swiper img {
			width: 100%;
		}

		@media (max-width: 1500px) {
			.package .my-swiper {
				width: 1000px;
			}
		}

		@media (max-width: 1300px) {
			.package .my-swiper {
				width: 800px;
			}
		}

		@media (max-width: 1100px) {
			.package .my-swiper {
				width: 600px;
			}
		}

		@media (max-width: 968px) {
			.package .my-swiper {
				width: 100vw;
			}

			.package .my-swiper img {
				width: 100%;
				overflow: hidden;
			}
		}

	</style>
</head>

<body>

	<div class="main-wrap">
		<div class="logo"><a href="/welcome" id="logo"></a></div>
		<div class="textbox">
			<h1>레저에 레저를 + 더하다</h1>
			<p>|&nbsp&nbsp Package &nbsp&nbsp|</p>
		</div>
		<div class="menu-btn">
			<a href="#"><img src="/images/common/nav-bar.png" alt=""></i></a>
		</div>

	</div>

	<div class="gnbwrap">
		<div class="gnb">
			<ul>
				<li><a href="#">2종패키지</a></li>
				<li><a href="/package3">3종패키지</a></li>
				<li><a href="/package4">4종패키지</a></li>
			</ul>
		</div>
	</div>

	<div class="subgnb">
		<ul class="subgnb1">
			<li>레이싱카트 + 서바이벌</li>
			<span>|</span>
			<li>레이싱카트 + ATV </li>
			<span>|</span>
			<li>서바이벌 + ATV </li>
			<span>|</span>
			<li>레이싱카트 + 바비큐(무제한) </li>
			<span>|</span>
			<li>레이싱카트 + 바비큐(1인분) </li>
			<span>|</span>
		</ul>
		<ul class="subgnb2">
			<li>서바이벌 + 바비큐(무제한) </li>
			<span>|</span>
			<li>서바이벌 + 바비큐(1인분) </li>
			<span>|</span>
			<li>ATV + 바비큐(무제한) </li>
			<span>|</span>
			<li>ATV + 바비큐(1인분) </li>
			<span>|</span>
		</ul>
	</div>
	<div class="Packagewrap">
		<div class="imgbox">
			<div class="wowrap wow fadeInRight animated" style="display:none" id="package-container">
				<h2>레이싱카트 + 서바이벌 <span>Package</span></h2>
				<div class="package" style="">

					<div class="swiper-wrap">
						<div class="swiper my-swiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img src="/images/package/02_01.jpg" alt="">
								</div>
								<div class="swiper-slide">
									<img src="/images/package/02_03.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="Packagetext">
						<!-- <h3>서바이벌+ATV에 대한 설명입니다.</h3> -->
						<p>
							<span style="font-weight:bold; font-size:18px;">※레이싱카트</span><br>
							<br>
							이용시간 : 약 10분<br>
							신장 140cm 이상 남녀에 한하여 탑승 가능<br><br>

							<span style="font-weight:bold; font-size:18px;">※서바이벌</span><br>
							<br>
							이용인원 : 13세이상, 4인이상 부터 가능(1인당 150발)<br>
							근거리 사격 절대금지(사격 최단거리 10M)<br>
							게임장 안, 밖에서는 무조건 교관 통제에 따라주시기 바랍니다.<br><br>

							<span style="font-weight:bold; font-size:18px">안전 수칙을 충분히 숙지한 후 이용해주시기 바랍니다.</span><br>
							<span style="font-weight:bold; font-size:18px">종목별 상세 설명은 단품레져 소개에 있습니다.</span><br>
						</p>
					</div>
				</div>
			</div>
		<div class="wowrap wow fadeInRight animated" style="display:none" id="package-container">
			<h2>레이싱카트 + ATV <span>Package</span></h2>
			<div class="package " style="">

				<div class="swiper-wrap">
					<div class="swiper my-swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img src="/images/package/02_01.jpg" alt="">
							</div>
							<div class="swiper-slide">
								<img src="/images/package/02_03.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="Packagetext">
					<!-- <h3>서바이벌+ATV에 대한 설명입니다.</h3> -->
					<p>
						<span style="font-weight:bold; font-size:18px;">※레이싱카트</span><br>
						<br>
						이용시간 : 약 10분<br>
						신장 140cm 이상 남녀에 한하여 탑승 가능<br><br>

						<span style="font-weight:bold; font-size:18px;">※ATV</span><br>
						<br>
						원동기 이상의 면허증 소지자에 한하여 이용 가능<br>
						1시간 단위로 이용가능<br><br>

						<span style="font-weight:bold; font-size:18px">안전 수칙을 충분히 숙지한 후 이용해주시기 바랍니다.</span><br>
						<span style="font-weight:bold; font-size:18px">종목별 상세 설명은 단품레져 소개에 있습니다.</span><br>
					</p>
				</div>
			</div>
		</div>

		<div class="wowrap wow fadeInRight animated" style="display:none">
			<h2>서바이벌 + ATV <span>Package</span></h2>
			<div class="package " style="">

				<img src="../../images/package/02_03.jpg" alt="">
				<div class="Packagetext">
					<p>
						<span style="font-weight:bold; font-size:18px;">※서바이벌</span><br>
						<br>
						이용인원 : 13세이상, 4인이상 부터 가능(1인당 150발)<br>
						근거리 사격 절대금지(사격 최단거리 10M)<br>
						게임장 안, 밖에서는 무조건 교관 통제에 따라주시기 바랍니다.<br><br>


						<span style="font-weight:bold; font-size:18px;">※ATV</span><br>
						<br>
						원동기 이상의 면허증 소지자에 한하여 이용 가능<br>
						1시간 단위로 이용가능<br><br>


						<span style="font-weight:bold; font-size:18px">안전 수칙을 충분히 숙지한 후 이용해주시기 바랍니다.</span><br>
						<span style="font-weight:bold; font-size:18px">종목별 상세 설명은 단품레져 소개에 있습니다.</span><br>
					</p>
				</div>
			</div>
		</div>

		<div class="wowrap wow fadeInRight animated" style="display:none">
			<h2>레이싱카트 + 바비큐(무제한) <span>Package</span></h2>
			<div class="package " style="">

				<img src="../../images/package/02_04.jpg" alt="">
				<div class="Packagetext">
					<!-- <h3>서바이벌+ATV에 대한 설명입니다.</h3> -->
					<p>
						<span style="font-weight:bold; font-size:18px;">※레이싱카트</span><br>
						<br>
						이용시간 : 약 10분<br>
						신장 140cm 이상 남녀에 한하여 탑승 가능<br><br>

						<span style="font-weight:bold; font-size:18px;">※바비큐(무제한)</span><br>
						<br>
						닭갈비 or 목살 택1, 2시간이용<br>
						닭갈비 + 목살 모두 이용을 원할 경우, 1인당 2,000원 추가<br>
						찌개+ 밥 + 밑반찬 + 야채 제공<br><br>

						<span style="font-weight:bold; font-size:18px">안전 수칙을 충분히 숙지한 후 이용해주시기 바랍니다.</span><br>
						<span style="font-weight:bold; font-size:18px">종목별 상세 설명은 단품레져 소개에 있습니다.</span><br>
					</p>

				</div>
			</div>
		</div>

		<div class="wowrap wow fadeInRight animated" style="display:none">
			<h2>레이싱카트 + 바비큐(1인분) <span>Package</span></h2>
			<div class="package " style="">

				<img src="../../images/package/02_05.jpg" alt="">
				<div class="Packagetext">
					<!-- <h3>서바이벌+ATV에 대한 설명입니다.</h3> -->
					<p>
						<span style="font-weight:bold; font-size:18px;">※레이싱카트</span><br>
						<br>
						이용시간 : 약 10분<br>
						신장 140cm 이상 남녀에 한하여 탑승 가능<br><br>

						<span style="font-weight:bold; font-size:18px;">※바비큐(1인분)</span><br>
						<br>
						닭갈비 or 목살 택1, 250g 제공<br>
						닭갈비 + 목살 모두 이용을 원할 경우, 1인당 2,000원 추가<br>
						찌개+ 밥 + 밑반찬 + 야채 제공<br><br>

						<span style="font-weight:bold; font-size:18px">안전 수칙을 충분히 숙지한 후 이용해주시기 바랍니다.</span><br>
						<span style="font-weight:bold; font-size:18px">종목별 상세 설명은 단품레져 소개에 있습니다.</span><br>
					</p>

				</div>
			</div>
		</div>

		<div class="wowrap wow fadeInRight animated" style="display:none">
			<h2>서바이벌 + 바비큐(무제한) <span>Package</span></h2>
			<div class="package " style="">

				<img src="../../images/package/02_06.jpg" alt="">
				<div class="Packagetext">
					<!-- <h3>서바이벌+ATV에 대한 설명입니다.</h3> -->
					<p>
						<span style="font-weight:bold; font-size:18px;">※레이싱카트</span><br>
						<br>
						이용시간 : 약 10분<br>
						신장 140cm 이상 남녀에 한하여 탑승 가능<br><br>

						<span style="font-weight:bold; font-size:18px;">※바비큐(무제한)</span><br>
						<br>
						닭갈비 or 목살 택1, 2시간이용<br>
						닭갈비 + 목살 모두 이용을 원할 경우, 1인당 2,000원 추가<br>
						찌개+ 밥 + 밑반찬 + 야채 제공<br><br>

						<span style="font-weight:bold; font-size:18px">안전 수칙을 충분히 숙지한 후 이용해주시기 바랍니다.</span><br>
						<span style="font-weight:bold; font-size:18px">종목별 상세 설명은 단품레져 소개에 있습니다.</span><br>
					</p>
				</div>
			</div>
		</div>

		<div class="wowrap wow fadeInRight animated" style="display:none">
			<h2>서바이벌 + 바비큐(1인분) <span>Package</span></h2>
			<div class="package ">

				<img src="../../images/package/02_07.jpg" alt="">
				<div class="Packagetext">
					<!-- <h3>서바이벌+ATV에 대한 설명입니다.</h3> -->
					<p>
						<span style="font-weight:bold; font-size:18px;">※서바이벌</span><br>
						<br>
						이용인원 : 13세이상, 4인이상 부터 가능(1인당 150발)<br>
						근거리 사격 절대금지(사격 최단거리 10M)<br>
						게임장 안, 밖에서는 무조건 교관 통제에 따라주시기 바랍니다.<br><br>


						<span style="font-weight:bold; font-size:18px;">※바비큐(1인분)</span><br>
						<br>
						닭갈비 or 목살 택1, 250g 제공<br>
						닭갈비 + 목살 모두 이용을 원할 경우, 1인당 2,000원 추가<br>
						찌개+ 밥 + 밑반찬 + 야채 제공<br><br>

						<span style="font-weight:bold; font-size:18px">안전 수칙을 충분히 숙지한 후 이용해주시기 바랍니다.</span><br>
						<span style="font-weight:bold; font-size:18px">종목별 상세 설명은 단품레져 소개에 있습니다.</span><br>
					</p>
				</div>
			</div>
		</div>

		<div class="wowrap wow fadeInRight animated" style="display:none">
			<h2>ATV + 바비큐(무제한) <span>Package</span></h2>
			<div class="package " style="">

				<img src="../../images/package/02_08.jpg" alt="">
				<div class="Packagetext">
					<!-- <h3>서바이벌+ATV에 대한 설명입니다.</h3> -->
					<p>
						<span style="font-weight:bold; font-size:18px;">※ATV</span><br>
						<br>
						원동기 이상의 면허증 소지자에 한하여 이용 가능<br>
						1시간 단위로 이용가능<br><br>
						<span style="font-weight:bold; font-size:18px;">※바비큐(무제한)</span><br>
						<br>
						닭갈비 or 목살 택1, 2시간이용<br>
						닭갈비 + 목살 모두 이용을 원할 경우, 1인당 2,000원 추가<br>
						찌개+ 밥 + 밑반찬 + 야채 제공<br><br>

						<span style="font-weight:bold; font-size:18px">안전 수칙을 충분히 숙지한 후 이용해주시기 바랍니다.</span><br>
						<span style="font-weight:bold; font-size:18px">종목별 상세 설명은 단품레져 소개에 있습니다.</span><br>
					</p>
				</div>
			</div>
		</div>

		<div class="wowrap wow fadeInRight animated" style="display:none">
			<h2>ATV + 바비큐(1인분) <span>Package</span></h2>
			<div class="package " style="">

				<img src="../../images/package/02_09.jpg" alt="">
				<div class="Packagetext">
					<!-- <h3>서바이벌+ATV에 대한 설명입니다.</h3> -->
					<p>
						<span style="font-weight:bold; font-size:18px;">※ATV</span><br>
						<br>
						원동기 이상의 면허증 소지자에 한하여 이용 가능<br>
						1시간 단위로 이용가능<br><br>
						<span style="font-weight:bold; font-size:18px;">※바비큐(1인분)</span><br>
						<br>
						닭갈비 or 목살 택1, 250g 제공<br>
						닭갈비 + 목살 모두 이용을 원할 경우, 1인당 2,000원 추가<br>
						찌개+ 밥 + 밑반찬 + 야채 제공<br><br>

						<span style="font-weight:bold; font-size:18px">안전 수칙을 충분히 숙지한 후 이용해주시기 바랍니다.</span><br>
						<span style="font-weight:bold; font-size:18px">종목별 상세 설명은 단품레져 소개에 있습니다.</span><br>
					</p>
				</div>
			</div>
		</div>

	</div>

	</div>
	<div class="detailwrap">
		<div class="detail">
			<p>*10명 이상 예약시 견적서 작성 및 전화문의 주세요.</p>
			<div class="btn">
				<a href="/reserve">
					<h1>예약하기</h1>
				</a>
			</div>
		</div>
	</div>

</body>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script>
	// Initialize wow.js
new WOW().init();

// Wait for wow.js to finish before revealing the package container
var packageContainer = document.getElementById('package-container');
var wow = new WOW({
    callback: function (box) {
        if (box === packageContainer) {
            packageContainer.style.display = 'block';
            // Initialize Swiper after container is revealed
            var swiper = new Swiper('.swiper', {
                // Swiper options...
				speed: 600,
				// Optional parameters
				// 슬라이드 수 설정
				slidesPerView: 1,
				spaceBetween: 0,
				observer: true,
				observeParents: true,
				init: true,
				// direction: 'horizontal', 'vertical',
				direction: 'horizontal',
				loop: true,

				// effect: 'slide', 'fade', 'cube', 'coverflow', 'flip', 'creative', 'cards'
				effect: 'slide',

				// If we need pagination
				pagination: {
					el: '.swiper-pagination',
				},
				observer: true,
				observeParents: true,
				// Navigation arrows
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},

				// Auto Play
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
        }
    }
});
wow.init();




</script>
<script>
	$(function () {
		//맨처음 li 디폴트값(2종패키지)
		$(document).ready(function () {
			$('.gnb li').eq(0).css("border-bottom", "3px solid #978d6e");
			$('.Packagewrap .wowrap').eq(0).addClass('active');
		})

		// 다음 li들 차례로 호버시에 어떻게될지
		$('.gnb li').eq(0).hover(function () {
			$(this).css({
				"margin-bottom": "-6px",
				"border-bottom": "3px solid #978d6e"
			});

		}, function () {
			$(this).css({
				"margin-bottom": "-6px",
				"border-bottom": "none"
			})
		});

		$('.gnb li').eq(2).hover(function () {
			$(this).css({
				"margin-bottom": "-6px",
				"border-bottom": "3px solid #978d6e"
			});

		}, function () {
			$(this).css({
				"margin-bottom": "-6px",
				"border-bottom": "none"
			})
		});
		//여기까지가 li hover

		//subgnb부분 호버시 처리될부분
		$('.subgnb li').hover(function () {
			$(this).css({
				"background-color": "#686459",
				"color": "#fff"
			});
		}, function () {
			$(this).css({
				"background-color": "#fdfaf4",
				"color": "#686459"
			})
		});
		$('.subgnb li').eq(0).css({
			"background-color": "#686459",
			"color": "#fff"
		});
	});

	//subgnb 클릭시 이벤트
	$('.subgnb li').eq(0).click(function () {
		$('.Packagewrap .wowrap').eq(0).addClass('active');
		$('.Packagewrap .wowrap').eq(1).removeClass('active');
		$('.Packagewrap .wowrap').eq(2).removeClass('active');
		$('.Packagewrap .wowrap').eq(3).removeClass('active');
		$('.Packagewrap .wowrap').eq(4).removeClass('active');
		$('.Packagewrap .wowrap').eq(5).removeClass('active');
		$('.Packagewrap .wowrap').eq(6).removeClass('active');
		$('.Packagewrap .wowrap').eq(7).removeClass('active');
		$('.Packagewrap .wowrap').eq(8).removeClass('active');
		$('.Packagewrap .wowrap').eq(8).removeClass('active');
		$('.Packagewrap .wowrap').eq(1).css('display','none');
		$('.Packagewrap .wowrap').eq(2).css('display','none');
		$('.Packagewrap .wowrap').eq(3).css('display','none');
		$('.Packagewrap .wowrap').eq(4).css('display','none');
		$('.Packagewrap .wowrap').eq(5).css('display','none');
		$('.Packagewrap .wowrap').eq(6).css('display','none');
		$('.Packagewrap .wowrap').eq(7).css('display','none');
		$('.Packagewrap .wowrap').eq(8).css('display','none');
        swiper.autoplay.start();
    swiper.update();
		$('.subgnb li').eq(0).css({
			"background-color": "#686459",
			"color": "#fff"
		});
		$('.subgnb li').eq(1).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(2).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(3).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(4).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(5).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(6).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(7).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(8).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});

	});


	$('.subgnb li').eq(1).click(function () {
		$('.Packagewrap .wowrap').eq(1).addClass('active');
		$('.Packagewrap .wowrap').eq(0).removeClass('active');
		$('.Packagewrap .wowrap').eq(2).removeClass('active');
		$('.Packagewrap .wowrap').eq(3).removeClass('active');
		$('.Packagewrap .wowrap').eq(4).removeClass('active');
		$('.Packagewrap .wowrap').eq(5).removeClass('active');
		$('.Packagewrap .wowrap').eq(6).removeClass('active');
		$('.Packagewrap .wowrap').eq(7).removeClass('active');
		$('.Packagewrap .wowrap').eq(8).removeClass('active');
		$('.Packagewrap .wowrap').eq(0).css('display','none');
		$('.Packagewrap .wowrap').eq(2).css('display','none');
		$('.Packagewrap .wowrap').eq(3).css('display','none');
		$('.Packagewrap .wowrap').eq(4).css('display','none');
		$('.Packagewrap .wowrap').eq(5).css('display','none');
		$('.Packagewrap .wowrap').eq(6).css('display','none');
		$('.Packagewrap .wowrap').eq(7).css('display','none');
		$('.Packagewrap .wowrap').eq(8).css('display','none');
        swiper.autoplay.start();
    swiper.update();
		$('.subgnb li').eq(1).css({
			"background-color": "#686459",
			"color": "#fff"
		});
		$('.subgnb li').eq(0).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(2).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(3).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(4).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(5).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(6).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(7).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(8).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});

	});

	$('.subgnb li').eq(2).click(function () {
		$('.Packagewrap .wowrap').eq(2).addClass('active');
		$('.Packagewrap .wowrap').eq(0).removeClass('active');
		$('.Packagewrap .wowrap').eq(1).removeClass('active');
		$('.Packagewrap .wowrap').eq(3).removeClass('active');
		$('.Packagewrap .wowrap').eq(4).removeClass('active');
		$('.Packagewrap .wowrap').eq(5).removeClass('active');
		$('.Packagewrap .wowrap').eq(6).removeClass('active');
		$('.Packagewrap .wowrap').eq(7).removeClass('active');
		$('.Packagewrap .wowrap').eq(8).removeClass('active');

		$('.Packagewrap .wowrap').eq(0).css('display','none');
		$('.Packagewrap .wowrap').eq(1).css('display','none');
		$('.Packagewrap .wowrap').eq(3).css('display','none');
		$('.Packagewrap .wowrap').eq(4).css('display','none');
		$('.Packagewrap .wowrap').eq(5).css('display','none');
		$('.Packagewrap .wowrap').eq(6).css('display','none');
		$('.Packagewrap .wowrap').eq(7).css('display','none');
		$('.Packagewrap .wowrap').eq(8).css('display','none');
        swiper.autoplay.start();
    swiper.update();
		$('.subgnb li').eq(2).css({
			"background-color": "#686459",
			"color": "#fff"
		});
		$('.subgnb li').eq(0).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(1).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(3).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(4).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(5).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(6).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(7).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(8).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});

	});

	$('.subgnb li').eq(3).click(function () {
		$('.Packagewrap .wowrap').eq(3).addClass('active');
		$('.Packagewrap .wowrap').eq(0).removeClass('active');
		$('.Packagewrap .wowrap').eq(1).removeClass('active');
		$('.Packagewrap .wowrap').eq(2).removeClass('active');
		$('.Packagewrap .wowrap').eq(4).removeClass('active');
		$('.Packagewrap .wowrap').eq(5).removeClass('active');
		$('.Packagewrap .wowrap').eq(6).removeClass('active');
		$('.Packagewrap .wowrap').eq(7).removeClass('active');
		$('.Packagewrap .wowrap').eq(8).removeClass('active');

		$('.Packagewrap .wowrap').eq(0).css('display','none');
		$('.Packagewrap .wowrap').eq(1).css('display','none');
		$('.Packagewrap .wowrap').eq(2).css('display','none');
		$('.Packagewrap .wowrap').eq(4).css('display','none');
		$('.Packagewrap .wowrap').eq(5).css('display','none');
		$('.Packagewrap .wowrap').eq(6).css('display','none');
		$('.Packagewrap .wowrap').eq(7).css('display','none');
		$('.Packagewrap .wowrap').eq(8).css('display','none');
        swiper.autoplay.start();
    swiper.update();

		$('.subgnb li').eq(3).css({
			"background-color": "#686459",
			"color": "#fff"
		});
		$('.subgnb li').eq(0).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(1).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(2).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(4).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(5).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(6).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(7).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(8).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});

	});

	$('.subgnb li').eq(4).click(function () {
		$('.Packagewrap .wowrap').eq(4).addClass('active');
		$('.Packagewrap .wowrap').eq(0).removeClass('active');
		$('.Packagewrap .wowrap').eq(2).removeClass('active');
		$('.Packagewrap .wowrap').eq(3).removeClass('active');
		$('.Packagewrap .wowrap').eq(1).removeClass('active');
		$('.Packagewrap .wowrap').eq(5).removeClass('active');
		$('.Packagewrap .wowrap').eq(6).removeClass('active');
		$('.Packagewrap .wowrap').eq(7).removeClass('active');
		$('.Packagewrap .wowrap').eq(8).removeClass('active');

		$('.Packagewrap .wowrap').eq(0).css('display','none');
		$('.Packagewrap .wowrap').eq(1).css('display','none');
		$('.Packagewrap .wowrap').eq(2).css('display','none');
		$('.Packagewrap .wowrap').eq(3).css('display','none');
		$('.Packagewrap .wowrap').eq(5).css('display','none');
		$('.Packagewrap .wowrap').eq(6).css('display','none');
		$('.Packagewrap .wowrap').eq(7).css('display','none');
		$('.Packagewrap .wowrap').eq(8).css('display','none');
        swiper.autoplay.start();
    swiper.update();
		$('.subgnb li').eq(4).css({
			"background-color": "#686459",
			"color": "#fff"
		});
		$('.subgnb li').eq(0).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(2).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(3).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(1).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(5).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(6).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(7).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(8).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});

	});

	$('.subgnb li').eq(5).click(function () {
		$('.Packagewrap .wowrap').eq(5).addClass('active');
		$('.Packagewrap .wowrap').eq(0).removeClass('active');
		$('.Packagewrap .wowrap').eq(2).removeClass('active');
		$('.Packagewrap .wowrap').eq(3).removeClass('active');
		$('.Packagewrap .wowrap').eq(4).removeClass('active');
		$('.Packagewrap .wowrap').eq(1).removeClass('active');
		$('.Packagewrap .wowrap').eq(6).removeClass('active');
		$('.Packagewrap .wowrap').eq(7).removeClass('active');
		$('.Packagewrap .wowrap').eq(8).removeClass('active');
        swiper.autoplay.start();
    swiper.update();
		$('.Packagewrap .wowrap').eq(0).css('display','none');
		$('.Packagewrap .wowrap').eq(1).css('display','none');
		$('.Packagewrap .wowrap').eq(2).css('display','none');
		$('.Packagewrap .wowrap').eq(3).css('display','none');
		$('.Packagewrap .wowrap').eq(4).css('display','none');
		$('.Packagewrap .wowrap').eq(6).css('display','none');
		$('.Packagewrap .wowrap').eq(7).css('display','none');
		$('.Packagewrap .wowrap').eq(8).css('display','none');

		$('.subgnb li').eq(5).css({
			"background-color": "#686459",
			"color": "#fff"
		});
		$('.subgnb li').eq(0).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(2).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(3).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(4).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(1).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(6).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(7).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(8).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});

	});

	$('.subgnb li').eq(6).click(function () {
		$('.Packagewrap .wowrap').eq(6).addClass('active');
		$('.Packagewrap .wowrap').eq(0).removeClass('active');
		$('.Packagewrap .wowrap').eq(2).removeClass('active');
		$('.Packagewrap .wowrap').eq(3).removeClass('active');
		$('.Packagewrap .wowrap').eq(4).removeClass('active');
		$('.Packagewrap .wowrap').eq(5).removeClass('active');
		$('.Packagewrap .wowrap').eq(1).removeClass('active');
		$('.Packagewrap .wowrap').eq(7).removeClass('active');
		$('.Packagewrap .wowrap').eq(8).removeClass('active');
        swiper.autoplay.start();
    swiper.update();
		$('.Packagewrap .wowrap').eq(0).css('display','none');
		$('.Packagewrap .wowrap').eq(1).css('display','none');
		$('.Packagewrap .wowrap').eq(2).css('display','none');
		$('.Packagewrap .wowrap').eq(3).css('display','none');
		$('.Packagewrap .wowrap').eq(4).css('display','none');
		$('.Packagewrap .wowrap').eq(5).css('display','none');
		$('.Packagewrap .wowrap').eq(7).css('display','none');
		$('.Packagewrap .wowrap').eq(8).css('display','none');

		$('.subgnb li').eq(6).css({
			"background-color": "#686459",
			"color": "#fff"
		});
		$('.subgnb li').eq(0).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(2).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(3).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(4).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(5).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(1).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(7).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(8).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});

	});

	$('.subgnb li').eq(7).click(function () {
		$('.Packagewrap .wowrap').eq(7).addClass('active');
		$('.Packagewrap .wowrap').eq(0).removeClass('active');
		$('.Packagewrap .wowrap').eq(2).removeClass('active');
		$('.Packagewrap .wowrap').eq(3).removeClass('active');
		$('.Packagewrap .wowrap').eq(4).removeClass('active');
		$('.Packagewrap .wowrap').eq(5).removeClass('active');
		$('.Packagewrap .wowrap').eq(6).removeClass('active');
		$('.Packagewrap .wowrap').eq(1).removeClass('active');
		$('.Packagewrap .wowrap').eq(8).removeClass('active');
        swiper.autoplay.start();
    swiper.update();
		$('.Packagewrap .wowrap').eq(0).css('display','none');
		$('.Packagewrap .wowrap').eq(1).css('display','none');
		$('.Packagewrap .wowrap').eq(2).css('display','none');
		$('.Packagewrap .wowrap').eq(3).css('display','none');
		$('.Packagewrap .wowrap').eq(4).css('display','none');
		$('.Packagewrap .wowrap').eq(5).css('display','none');
		$('.Packagewrap .wowrap').eq(6).css('display','none');
		$('.Packagewrap .wowrap').eq(8).css('display','none');

		$('.subgnb li').eq(7).css({
			"background-color": "#686459",
			"color": "#fff"
		});
		$('.subgnb li').eq(0).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(2).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(3).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(4).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(5).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(6).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(1).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(8).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});

	});

	$('.subgnb li').eq(8).click(function () {
		$('.Packagewrap .wowrap').eq(8).addClass('active');
		$('.Packagewrap .wowrap').eq(0).removeClass('active');
		$('.Packagewrap .wowrap').eq(2).removeClass('active');
		$('.Packagewrap .wowrap').eq(3).removeClass('active');
		$('.Packagewrap .wowrap').eq(4).removeClass('active');
		$('.Packagewrap .wowrap').eq(5).removeClass('active');
		$('.Packagewrap .wowrap').eq(6).removeClass('active');
		$('.Packagewrap .wowrap').eq(7).removeClass('active');
		$('.Packagewrap .wowrap').eq(1).removeClass('active');
        swiper.autoplay.start();
    swiper.update();
		$('.Packagewrap .wowrap').eq(0).css('display','none');
		$('.Packagewrap .wowrap').eq(1).css('display','none');
		$('.Packagewrap .wowrap').eq(2).css('display','none');
		$('.Packagewrap .wowrap').eq(3).css('display','none');
		$('.Packagewrap .wowrap').eq(4).css('display','none');
		$('.Packagewrap .wowrap').eq(5).css('display','none');
		$('.Packagewrap .wowrap').eq(6).css('display','none');
		$('.Packagewrap .wowrap').eq(7).css('display','none');

		$('.subgnb li').eq(8).css({
			"background-color": "#686459",
			"color": "#fff"
		});
		$('.subgnb li').eq(0).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(2).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(3).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(4).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(5).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(6).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(7).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(1).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});

	});


</script>


</html>
<?php include "footer.php" ?>
