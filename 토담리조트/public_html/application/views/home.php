<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/css/swiper.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js'></script>
	<title>토담리조트</title>
	<link rel="stylesheet" type="text/css" href="/css/jquery.fullpage.min.css" />
	<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
</head>

<body>
	<?php
include('header.php');
?>

	<div class="mainwrap" id="fullpage">
		<div class="section" id="page1">
			<h1>Todam Resort</h1>
			<div class="mainslide">
				<div class="swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img src="/images/main/01_01.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/main/01_02.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/main/01_03.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/main/01_04.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/main/01_05.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/main/01_06.jpg" alt="">
						</div>
					</div>
				</div>
				<div class="swiper-button-prev mainbtn1"></div>
				<div class="swiper-button-next mainbtn2"></div>
			</div>
		</div>

		<div class="section" id="page2">
			<div class="roomprewrap">
				<div class="textbox">
					<h1>맑은 공기, 푸르른 자연 <br> 그리고 휴식</h1>
					<p>넓고 깨끗한 객실, 개별 수영장과 스파를 즐기시며 일상에 지친 피로를 씻겨내고 <br> 포천의 맑은 공기로 채우세요!</p>
					<a href="http://xn--jk1bl1k9ynz2idlb.kr/room">객실 더보기 <span>></span></a>
				</div>
				<img src="/images/roompre/roompre1.jpg" alt="">
			</div>
			<!-- 모바일버튼 -->
			<div class="textbox-m" id="p2textbox-m" style="display:none">
				<a href="http://xn--jk1bl1k9ynz2idlb.kr/room">객실 더보기 <span>></span></a>
			</div>
		</div>

		<div class="section" id="page3">
			<div class="page3wrap">
				<div class="flexwrap" style="display:none">
					<div class="flexbox">
						<div class="rightbox" id="facility1">
							<div class="textbox">
								<p>축구교실</p>
								<h1>드넓은 구장에서 다양한 활동을 해보세요</h1>
								<p id="lastchild">FC KHT 김희태 축구센터는 체계적이고 과학적인 훈련프로그램을 개발하여 세계적인 경기력을 갖춘 선수를 육성할 목적으로 설립되었습니다. 축구뿐만이 아닌 다양한 단체활동 또한 가능한 다목적 경기장입니다.
								</p>
								<a href="http://xn--jk1bl1k9ynz2idlb.kr/facility">자세히 보기 <span>></span></a>
							</div>
						</div>

						<div class="leftbox wow fadeInRight animated">
							<img src="/images/facility/01_01.jpg" alt="">
						</div>
					</div>
				</div>

				<div class="flexwrap" style="display:none">
					<div class="flexbox">
						<div class="rightbox" id="facility2">
							<div class="textbox">
								<p>세미나실</p>
								<h1>단합과 화합, 단체협동행사</h1>
								<p id="lastchild">워크샵, MT, OT 등 단체행사가 가능하며, 다인원을 수용할 수 있는 최신식 시설을 갖춘 토담의 세미나실 입니다. <br> <span style="font-weight:bold;">*현재 세미나실은 준비중입니다.</span>
								
								</p>
								<a href="http://xn--jk1bl1k9ynz2idlb.kr/facility">자세히 보기 <span>></span></a>
							</div>
						</div>
						<div class="leftbox wow fadeInRight animated">
							<img src="/images/facility/01_02.jpg" alt="">
						</div>
					</div>
				</div>
				<div class="navbtn">
					<img src="/images/common/left_black.png" alt="" id="btn1">
					<img src="/images/common/right_black.png" alt="" id="btn2">
				</div>
		</div>

			<!-- <div class="page3wrap-m">
				<div class="textbox-m">
					<p>축구교실</p>
					<h1>축구교실 대표 설명</h1>
					<p id="lastchild">자연과 함께하는 편안한 공간 자연과 함께하는 편안한 공간 자연과 함께하는 자연과 함께하는 편안한 공간자연과 함께하는 편안한 공간</p>
					<a href="">자세히 보기 <span>></span></a>
					<div class="navbtn-m">
						<img src="/images/common/m/left_black.png" alt="" id="btn1">
						<img src="/images/common/m/right_black.png" alt="" id="btn2">
					</div>
				</div>
				<div class="imgbox-m" style="">
					<img src="/images/facility/m/01_01.jpg" alt="">
				</div>
				<div class="imgbox-m" style="display:none">
					<img src="/images/facility/m/01_01.jpg" alt="">
				</div>
			</div> -->
		</div>




		<div class="section" id="page4">
			<div class="textbox">
				<p>토담리조트</p>
				<h1>토담의 다양한 프로그램</h1>
				<p id="lastchild2">모두가 한마음, 한뜻으로 스포츠 & 레크레이션을 즐기며, 하나가 되어가는 과정입니다! 다양한 프로그램으로 지식도 쌓고 단합하며 하나의 마음을 담아가세요!</p>
			</div>

			<div class="gallery">

				<div class="photowrap">
					<div class="photo">
						<img src="/images/program/01_01.jpg" alt="">
					</div>
					<div class="p-info">
						<div class="info">
							<p>단체행사</p>
							<a href="http://xn--jk1bl1k9ynz2idlb.kr/program#all">전체보기 <span>></span></a>
						</div>
					</div>
				</div>

				<div class="photowrap">
					<div class="photo">
						<img src="/images/program/01_02.jpg" alt="">
					</div>
					<div class="p-info">
						<div class="info">
							<p>팀빌딩</p>
							<a href="http://xn--jk1bl1k9ynz2idlb.kr/program#all">전체보기 <span>></span></a>
						</div>
					</div>

				</div>

				<div class="photowrap">
					<div class="photo">
						<img src="/images/program/01_03.jpg" alt="">
					</div>
					<div class="p-info">
						<div class="info">
							<p>전통민속팀빌딩</p>
							<a href="http://xn--jk1bl1k9ynz2idlb.kr/program#link">전체보기 <span>></span></a>
						</div>
					</div>
				</div>

				<!-- <div class="photowrap">
					<div class="photo">
						<img src="/images/program/01_04.jpg" alt="">
					</div>
					<div class="p-info">
						<div class="info">
							<p>서바이벌</p>
							<a href="http://xn--jk1bl1k9ynz2idlb.kr/program#link">전체보기 <span>></span></a>
						</div>
					</div>
				</div>

				<div class="photowrap">
					<div class="photo">
						<img src="/images/program/01_05.jpg" alt="">
					</div>
					<div class="p-info">
						<div class="info">
							<p>슈팅</p>
							<a href="http://xn--jk1bl1k9ynz2idlb.kr/program#link1">전체보기 <span>></span></a>
						</div>
					</div>
				</div> -->

				<div class="photowrap">
					<div class="photo">
						<img src="/images/program/01_06.jpg" alt="">
					</div>
					<div class="p-info">
						<div class="info">
							<p>한마음직소</p>
							<a href="http://xn--jk1bl1k9ynz2idlb.kr/program#link1">전체보기 <span>></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section fp-auto-height" id="page5">
			<?php
include('footer.php');
?>
		</div>
	</div>



	<!-- <div class="section" id="page5">
		<div class="textbox">
			<p>NOTICE</p>
			<h1>토담 공지사항</h1>
		</div>
		<iframe src="" frameborder="0"></iframe>
		
		</div> -->
	</div>

	<!-- 모바일 시작할께요!!!!!!!! -->
	<div class="main-m">
		<div class="mainwrap-m section1">
			<div class="mainslide-m">
				<div class="swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img src="images/main/m/01_01.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="images/main/m/01_02.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="images/main/m/01_03.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="images/main/m/01_04.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="images/main/m/01_05.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="images/main/m/01_06.jpg" alt="">
						</div>
					</div>
				</div>
				<div class="swiper-button-prev mainbtn1"></div>
				<div class="swiper-button-next mainbtn2"></div>
			</div>
		</div>

		<div class="section2">
			<div class="photowrap-m">
				<img src="/images/roompre/m/roompre1.jpg" alt="">
				<div class="textbox-m">

				</div>
			</div>
			<div class="roombtn">
			<div class="textbox">
					<h1>맑은 공기, 푸르른 자연 그리고 휴식</h1>
					<p>넓고 깨끗한 객실, 개별 수영장과 스파를 즐기시며 일상에 지친 피로를 씻겨내고 <br>포천의 맑은 공기로 채우세요!</p>
				
			</div>
				<div class="btn-m"><a href="http://xn--jk1bl1k9ynz2idlb.kr/room">객실 더보기 <span>></span></a></div>
			</div>
		</div>


		<div class="section3">
			<div class="flexbox-m">
				<div class="facil-info">
					<div class="textbox">
						<p>축구교실</p>
						<h1>드넓은 구장에서 다양한 활동을 해보세요</h1>
						<p class="second">FC KHT 김희태 축구센터는 체계적이고 과학적인 훈련프로그램을 개발하여 세계적인 경기력을 갖춘 선수를 육성할 목적으로 설립되었습니다. 축구뿐만이 아닌 다양한 단체활동 또한 가능한 다목적 경기장입니다.</p>
						<div class="btn-m"> <a href="http://xn--jk1bl1k9ynz2idlb.kr/facility#facil1">자세히 보기 <span>></span></a></div>
					</div>

				</div>
				<div class="facil-img">
					<img src="/images/facility/m/01_01.jpg" alt="">
				</div>
			</div>
			<div class="navbtn-m">
				<img src="/images/common/m/left_black.png" alt="" id="btn1">
				<img src="/images/common/m/right_black.png" alt="" id="btn2">
			</div>
			<div class="flexbox-m">
				<div class="facil-info">
					<div class="textbox">
						<p>세미나실</p>
						<h1>단합과 화합, 단체협동행사</h1>
						<p class="second">세미나실과 함께하는 편안한 공간 세미나실과 함께하는 편안한 공간 세미나실과 함께하는 편안한 공간 세미나실과 함께하는 편안한 공간 세미나실과
							함께하는 편안한 공간<br><span style="font-weight:bold">*현재 세미나실은 준비중입니다.</span></p>
						<div class="btn-m"> <a href="http://xn--jk1bl1k9ynz2idlb.kr/facility#facil2" id="facility2">자세히 보기 <span>></span></a></div>
					</div>
				</div>
				<div class="facil-img">
					<img src="/images/facility/m/01_02.jpg" alt="">
				</div>
			</div>
		</div>

		<div class="section4">

			<div class="textbox">
				<p>토담리조트</p>
				<h1>토담의 다양한 프로그램</h1>
				<p class="second">모두가 한마음, 한뜻으로 스포츠 & 레크레이션을 즐기며, 하나가 되어가는 과정입니다! 다양한 프로그램으로 지식도 쌓고 단합하며 하나의 마음을 담아가세요!</p>
			</div>

			<div class="flexwrap-m">
				<div class="photowrap">
					<div class="photo">
						<img src="/images/program/01_01.jpg" alt="">
					</div>
					<div class="p-info">
						<div class="info">
							<p>단체행사</p>
							<a href="http://xn--jk1bl1k9ynz2idlb.kr/program#link1" id="prolink1">전체보기 <span>></span></a>
						</div>
					</div>
				</div>

				<div class="photowrap">
					<div class="photo">
						<img src="/images/program/01_02.jpg" alt="">
					</div>
					<div class="p-info">
						<div class="info">
							<p>팀빌딩</p>
							<a href="http://xn--jk1bl1k9ynz2idlb.kr/program#link2" id="prolink2">전체보기 <span>></span></a>
						</div>
					</div>
				</div>

				<div class="photowrap">
					<div class="photo">
						<img src="/images/program/01_03.jpg" alt="">
					</div>
					<div class="p-info">
						<div class="info">
							<p>전통민속팀빌딩</p>
							<a href="http://xn--jk1bl1k9ynz2idlb.kr/program#link3" id="prolink3">전체보기 <span>></span></a>
						</div>
					</div>
				</div>

				<!-- <div class="photowrap">
					<div class="photo">
						<img src="/images/program/01_04.jpg" alt="">
					</div>
					<div class="p-info">
						<div class="info">
							<p>서바이벌</p>
							<a href="http://xn--jk1bl1k9ynz2idlb.kr/program#link4" id="prolink4">전체보기 <span>></span></a>
						</div>
					</div>
				</div>

				<div class="photowrap">
					<div class="photo">
						<img src="/images/program/01_05.jpg" alt="">
					</div>
					<div class="p-info">
						<div class="info">
							<p>슈팅</p>
							<a href="http://xn--jk1bl1k9ynz2idlb.kr/program#link5" id="prolink5">전체보기 <span>></span></a>
						</div>
					</div>
				</div> -->

				<div class="photowrap">
					<div class="photo">
						<img src="/images/program/01_06.jpg" alt="">
					</div>
					<div class="p-info">
						<div class="info">
							<p>한마음직소</p>
							<a href="http://xn--jk1bl1k9ynz2idlb.kr/program#link6" id="prolink6">전체보기 <span>></span></a>
						</div>
					</div>
				</div>
			</div>




		</div>
		<?php
include('footer.php');
?>

	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/vendors/scrolloverflow.min.js"></script> -->
	<script type="text/javascript" src="/js/jquery.fullpage.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-overscroll/1.7.7/jquery.overscroll.min.js"></script>
	<script type="text/javascript" src="/js/main.js"></script>
	<script>
		$(document).ready(function () {

	

			$('#fullpage').fullpage({
				autoScrolling: true,
				scrollHorizontally: false,
				//   scrollOverflow: true,
				easingcss3: 'cubic-bezier(0.15, 0.15, 0.15, 0.350)',
				//    scrollingSpeed:0.2,
				//     scrollBar: {
				// //      // y축 스크롤바만 보이도록 설정
				//       scrollY: true,
				//       scrollX: false
				//    }
				dragAndMove: true,

			})
		});

		// #page3넘기기
		var currentFlexIndex = 0;
		var maxFlexIndex = $('.flexwrap').length - 1;

		$('.flexwrap').hide(); // 모든 flexwrap 숨기기
		$('.flexwrap').eq(currentFlexIndex).show(); // 첫 번째 flexwrap 보이기

		$('#btn1').click(function () {
			if (currentFlexIndex > 0) {
				currentFlexIndex--;
				$('.flexwrap').hide();
				$('.flexwrap').eq(currentFlexIndex).show();
			}
		});

		$('#btn2').click(function () {
			if (currentFlexIndex < maxFlexIndex) {
				currentFlexIndex++;
				$('.flexwrap').hide();
				$('.flexwrap').eq(currentFlexIndex).show();
			}
		});


		// 모바일 section3넘기기
		var currentFlexIndex = 0;
		var maxFlexIndex = $('.section3 .flexbox-m').length - 1;

		$('.section3 .flexbox-m').hide(); // 모든 flexwrap 숨기기
		$('.section3 .flexbox-m').eq(currentFlexIndex).show(); // 첫 번째 flexwrap 보이기

		$('.section3 #btn1').click(function () {
			if (currentFlexIndex > 0) {
				currentFlexIndex--;
				$('.section3 .flexbox-m').hide();
				$('.section3 .flexbox-m').eq(currentFlexIndex).show();
			}
		});

		$('.section3 #btn2').click(function () {
			if (currentFlexIndex < maxFlexIndex) {
				currentFlexIndex++;
				$('.section3 .flexbox-m').hide();
				$('.section3 .flexbox-m').eq(currentFlexIndex).show();
			}
		});

		// #page4에서 .photo에 hover시 전체의 밝기가 25%로 줄어듭니다.
		$('#page4 .photo').css("filter", "brightness(25%)");

		// #page4에서 .p-info에 hover시 해당 .photo의 밝기가 60%로 증가합니다.
		$('#page4 .p-info').hover(
			function () {
				let index = $('#page4 .p-info').index(this);
				$('#page4 .photo').eq(index).css("filter", "brightness(70%)");
			},
			function () {
				// Hover가 끝날 때 해당 인덱스의 .photo의 밝기가 25%로 줄어듭니다.
				let index = $('#page4 .p-info').index(this);
				$('#page4 .photo').eq(index).css("filter", "brightness(25%)");
			}
		);

		// #page4에서 .photo를 클릭했을 때, 클릭한 .photo의 밝기가 60%로 증가하고 나머지 .photo의 밝기는 25%로 유지됩니다.
		$('#page4 .photo').click(function () {
			$('#page4 .photo').css("filter", "brightness(70%)");
			$(this).css("filter", "brightness(70%)");
		});


		// section4 커스텀
		// #page4에서 .photo에 hover시 전체의 밝기가 25%로 줄어듭니다.
		$('.section4 .photo').css("filter", "brightness(70%)");

		// .section4에서 .p-info에 hover시 해당 .photo의 밝기가 60%로 증가합니다.
		$('.section4 .p-info').hover(
			function () {
				let index = $('.section4 .p-info').index(this);
				$('.section4 .photo').eq(index).css("filter", "brightness(70%)");
			},
			function () {
				// Hover가 끝날 때 해당 인덱스의 .photo의 밝기가 25%로 줄어듭니다.
				let index = $('.section4 .p-info').index(this);
				$('.section4 .photo').eq(index).css("filter", "brightness(70%)");
			}
		);

		// .section4에서 .photo를 클릭했을 때, 클릭한 .photo의 밝기가 60%로 증가하고 나머지 .photo의 밝기는 25%로 유지됩니다.
		$('.section4 .photo').click(function () {
			$('.section4 .photo').css("filter", "brightness(70%)");
			$(this).css("filter", "brightness(70%)");
		});

		$('#facility2').click(function(){
				$(".roomswiper-m").hide();
     			$(".roomswiper-m").eq(1).show();
		})

 // #prolink 클릭 이벤트 설정
 $('#prolink1, #prolink2, #prolink3, #prolink4, #prolink5, #prolink6').on('click', function() {
    // program URL 호출
    $.ajax({
      url: 'program',
      dataType: 'html',
      success: function(data) {
        var $data = $(data);
        var num = $(this).attr('id').substr(6) - 1; // 클릭한 요소의 ID에서 번호를 추출합니다.
        var $roomswiper_m = $data.find('.roomswiper-m').eq(num); // 번호에 해당하는 .roomswiper-m 요소를 가져옵니다.
        
        $('.roomswiper-m').not($roomswiper_m).hide();
        $roomswiper_m.show(); // 가져온 .roomswiper-m 요소를 보여줍니다.
      }.bind(this) // 클릭한 요소를 가리키는 this를 bind합니다.
    });
  });

	</script>


</body>

</html>