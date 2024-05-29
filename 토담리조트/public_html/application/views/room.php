<?php
include('header.php');
?>

<link rel="stylesheet" href="/css/room.css">
<script src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
<link rel="stylesheet" type="text/css" href="/css/jquery.fullpage.min.css" />
<link rel="stylesheet" href="/css/swiper.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


<div class="roomwrap">
	<div class="container">
		<div class="Titlebox">
			<h1>편안한 공간, 토담의 객실</h1>
			<p>Healing in the place. 토담리조트는 4개 타입의 객실로 편안하고 안락한 쉼을 제공합니다.</p>
		</div>
	</div>

	<div class="subnav">
		<div class="navwrap">
			<a href="#all" id="all">ALL</a> <span>I</span> <a href="#all">더 포천 101 ~108동</a> <span>I</span><a href="#all">토담A동,토담B동</a> <span>I</span>
			<a href="#link"> 토담S동, 토담K동, 토담I동</a> <span>I</span> <a href="#link"> 도담 가~마동</a>
		</div>
	</div>

	<div class="container" id="roomflex">

		<div class="roomlist">

			<div class="roomswiper">
				<div class="swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img src="/images/room/room01_01.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/room/room01_02.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/room/room01_03.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/room/room01_04.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/room/room01_05.jpg" alt="">
						</div>
					</div>
					<div class="swiper-button-prev" id="roombtn1"></div>
					<div class="swiper-button-next" id="roombtn2"></div>
				</div>
			</div>

			<div class="info">
				<div class="topbox">
					<h1>더포천 101~108동</h1>
					<p>복층, 침실3 + 화장실3 + 주방(식탁) + 개별수영장 + 스파 + 테라스</p>
				</div>
				<div class="bottombox">
					<div id="link"></div>
					<div class="flexbox">
						<p id="space">객실수<span>7객실</span></p>
						<p>최대인원<span>12명</span></p>
					</div>

					<p>구비물품 <span>TV, 침대, 식탁, 에어컨, 냉장고, 드라이기, 전자레인지, 세면도구, 비데, 정수기, 커피메이커, 인터넷</span></p>
				</div>
			</div>

		</div>



		<div class="roomlist">
			<div class="roomswiper">
				<div class="swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img src="/images/room/room02_01.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/room/room02_02.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/room/room02_03.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/room/room02_04.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/room/room02_05.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/room/room02_06.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/room/room02_07.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/room/room02_08.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/room/room02_09.jpg" alt="">
						</div>
					</div>
					<div class="swiper-button-prev" id="roombtn1"></div>
					<div class="swiper-button-next" id="roombtn2"></div>
				</div>
			</div>

			<div class="info">
				<div class="topbox">
					<h1>토담 A동, 토담 B동</h1>
					<p>복층(침실) + 화장실1 + 주방(식탁) + 개별수영장 + 스파</p>
				</div>
				<div class="bottombox">
					<div class="flexbox">
						<p id="space">객실수<span>2객실</span></p>
						<p>최대인원<span>6명</span></p>
					</div>
					<p>구비물품 <span>TV, 침대, 식탁, 에어컨, 냉장고, 드라이기, 전자레인지, 세면도구, 비데, 정수기, 커피메이커, 인터넷</span></p>
				</div>
			</div>
		</div>



		<div class="roomlist">
			<div class="roomswiper">
				<div class="swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img src="/images/room/room03_01.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/room/room03_02.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/room/room03_03.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/room/room03_04.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/room/room03_05.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/room/room03_06.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/room/room03_07.jpg" alt="">
						</div>
					</div>
					<div class="swiper-button-prev" id="roombtn1"></div>
					<div class="swiper-button-next" id="roombtn2"></div>
				</div>

			</div>

			<div class="info">
				<div class="topbox">
					<h1>토담 S동, 토담 K동, 토담 I동</h1>
					<p>침실2 + 화장실2 + 주방(식탁) + 개별수영장</p>
				</div>
				<div class="bottombox">
					<div class="flexbox">
						<p id="space">객실수<span>2객실</span></p>
						<p>최대인원<span>10명</span></p>
					</div>
					<p>구비물품 <span>TV, 침대, 식탁, 에어컨, 냉장고, 드라이기, 전자레인지, 세면도구, 비데, 정수기, 인터넷</span></p>
				</div>
			</div>
		</div>



		<div class="roomlist">
			<div class="roomswiper">
				<div class="swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img src="/images/room/room04_01.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/room/room04_02.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/room/room04_03.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/room/room04_04.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/room/room04_05.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/room/room04_06.jpg" alt="">
						</div>
					</div>
					<div class="swiper-button-prev" id="roombtn1"></div>
					<div class="swiper-button-next" id="roombtn2"></div>
				</div>

			</div>

			<div class="info">
				<div class="topbox">
					<h1>도담 가~마동</h1>
					<p>침실1 + 화장실2 + 주방(식탁) + 개별수영장 + 스파 + 테라스</p>
				</div>
				<div class="bottombox">
					<div class="flexbox">
						<p id="space">객실수<span>5객실</span></p>
						<p>최대인원<span>6명</span></p>
					</div>
					<p>구비물품 <span>TV, 침대, 식탁, 에어컨, 냉장고, 드라이기, 전자레인지, 세면도구, 비데, 정수기, 인터넷</span></p>
				</div>
			</div>
		</div>
	</div>

	<?php
include('footer.php');
?>
</div>

<!-- 모바일 시작할게요!!!!!!!!!!! -->
<div class="room-m">
    <div class="roomwrap-m">
        <div class="Titlebox">
            <h1>편안한 공간, 토담의 객실</h1>
            <p>Healing in the place. 토담리조트는 4개타입의 객실로 편안하고 안락한 쉼을 제공합니다.</p>
        </div>
        <div class="m-nav">
        <ul class="navwrap">
        <li class="pro1">더포천 101~108동</li>
        <li class="pro2">토담 A,B동</li> <li class="pro3">토담 S,K,I동</li> <li class="pro4">도담 가~마동</li>
        </ul>
        </div>
        <!-- 사진사이즈는 1000x800으로잡자 -->
    
        <div class="roomlist-m">
            <div class="roomswiper-m" style="display:block" id="room-m1">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/room/m/room01_01.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/room/m/room01_02.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/room/m/room01_03.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/room/m/room01_04.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/room/m/room01_05.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-prev" id="roombtn1"></div>
                    <div class="swiper-button-next" id="roombtn2"></div>
                </div>
                <div class="topbox">
                    <h1>더포천 101~108동</h1>
                    <p>복층, 침실3 + 화장실3 + 주방(식탁) + 개별수영장 + 스파 + 테라스</p>
                </div>
                <div class="bottombox">
                    <div class="flexbox">
                        <p id="space">객실수<span>7객실</span></p>
                        <p>최대인원<span id="space2">12명</span></p>
                    </div>
                    <div class="flex2">
                        <p>구비물품</p> <span>TV, 침대, 식탁, 에어컨, 냉장고, 드라이기, 전자레인지, 세면도구, 비데, 정수기, 커피메이커, 인터넷</span>
                    </div>
                </div>
            </div>
    
    
            <div class="roomswiper-m" style="display:none" id="room-m2">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/room/m/room02_01.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/room/m/room02_02.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/room/m/room02_03.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/room/m/room02_04.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/room/m/room02_05.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/room/m/room02_06.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/room/m/room02_07.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/room/m/room02_08.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/room/m/room02_09.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-prev" id="roombtn1"></div>
                    <div class="swiper-button-next" id="roombtn2"></div>
                </div>
                <div class="topbox">
                    <h1>토담 A동, 토담 B동</h1>
                    <p>복층(침실) + 화장실1 + 주방(식탁) + 개별수영장 + 스파</p>
                </div>
                <div class="bottombox">
                    <div class="flexbox">
                        <p id="space">객실수<span>2객실</span></p>
                        <p>최대인원<span id="space2">6명</span></p>
                    </div>
                    <div class="flex2">
                        <p>구비물품</p> <span>TV, 침대, 식탁, 에어컨, 냉장고, 드라이기, 전자레인지, 세면도구, 비데, 정수기, 커피메이커, 인터넷</span>
                    </div>
                </div>
            </div>
    
    
            <div class="roomswiper-m" style="display:none" id="room-m3">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/room/m/room03_01.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/room/m/room03_02.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/room/m/room03_03.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/room/m/room03_04.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/room/m/room03_05.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/room/m/room03_06.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/room/m/room03_07.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-prev" id="roombtn1"></div>
                    <div class="swiper-button-next" id="roombtn2"></div>
                </div>
                <div class="topbox">
                    <h1>토담 S동, 토담 K동, 토담 I동</h1>
                    <p>침실2 + 화장실2 + 주방(식탁) + 개별수영장</p>
                </div>
                <div class="bottombox">
                    <div class="flexbox">
                        <p id="space">객실수<span>2객실</span></p>
                        <p>최대인원<span id="space2">10명</span></p>
                    </div>
                    <div class="flex2">
                        <p>구비물품</p> <span>TV, 침대, 식탁, 에어컨, 냉장고, 드라이기, 전자레인지, 세면도구, 비데, 정수기, 인터넷</span>
                    </div>
                </div>
            </div>
    
    
            <div class="roomswiper-m" style="display:none" id="room-m4">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/room/m/room04_01.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/room/m/room04_02.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/room/m/room04_03.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/room/m/room04_04.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/room/m/room04_05.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/room/m/room04_06.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-prev" id="roombtn1"></div>
                    <div class="swiper-button-next" id="roombtn2"></div>
                </div>
                <div class="topbox">
                    <h1>도담 가~마동</h1>
                    <p>침실1 + 화장실2 + 주방(식탁) + 개별수영장 + 스파 + 테라스</p>
                </div>
                <div class="bottombox">
                    <div class="flexbox">
                        <p id="space">객실수<span>5객실</span></p>
                        <p>최대인원<span id="space2">6명</span></p>
                    </div>
                    <div class="flex2">
                        <p>구비물품</p> <span>TV, 침대, 식탁, 에어컨, 냉장고, 드라이기, 전자레인지, 세면도구, 비데, 정수기, 인터넷</span>
                    </div>
                </div>
            </div>
        </div>
    
    
        <div class="navbtn1">
            <img src="/images/common/m/left_black.png" alt="" id="btn1">
            <img src="/images/common/m/right_black.png" alt="" id="btn2">
        </div>
    
    </div>
    <?php
include('footer.php');
?>
</div>


<script type="text/javascript" src="/js/main.js"></script>
<script>
    function initSwiper() {
    const swiper = new Swiper('.swiper', {
        speed: 600,
        slidesPerView: 1,
        spaceBetween: 0,
        observer: true,
        observeParents: true,
        touchStartPreventDefault: false,
        direction: 'horizontal',
        loop: true,
        effect: 'slide',
        navigation: {
        nextEl: '.roombtn2',
        prevEl: '.roombtn1',
      },
      
      // Auto Play
      autoplay: {
        delay: 2500,
       },
    });
}
$(document).ready(function() {
 

  var currentRoomIndex = 0;
  var numRooms = $('.roomswiper-m').length;

  // 이전 버튼 클릭 시
  $('.navbtn1 #btn1').click(function() {
   if (currentRoomIndex > 0) {
     currentRoomIndex--;
     $('.roomswiper-m').css("display", "none");
     $('.roomswiper-m').eq(currentRoomIndex).css("display", "block");
     initSwiper();
   }
 });

 // 다음 버튼 클릭 시
 $('.navbtn1 #btn2').click(function() {
   if (currentRoomIndex < numRooms - 1) {
     currentRoomIndex++;
     $('.roomswiper-m').css("display", "none");
     $('.roomswiper-m').eq(currentRoomIndex).css("display", "block");
     initSwiper();
   }
 });
});

$(".pro1").click(function() {
    $(".roomswiper-m").css("display", "none");
    $(".roomswiper-m").eq(0).css("display", "block");
    initSwiper();
});

$(".pro2").click(function() {
    $(".roomswiper-m").css("display", "none");
    $(".roomswiper-m").eq(1).css("display", "block");
    initSwiper();
});

$(".pro3").click(function() {
    $(".roomswiper-m").css("display", "none");
    $(".roomswiper-m").eq(2).css("display", "block");
    initSwiper();
});

$(".pro4").click(function() {
    $(".roomswiper-m").css("display", "none");
    $(".roomswiper-m").eq(3).css("display", "block");
    initSwiper();
});
</script>
