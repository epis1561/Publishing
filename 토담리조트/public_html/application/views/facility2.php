<?php
include('header.php');
?>

<link rel="stylesheet" href="/css/facility.css">
<script src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
<link rel="stylesheet" type="text/css" href="/css/jquery.fullpage.min.css" />
<link rel="stylesheet" href="/css/swiper.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<style>
	.m-nav{
    display: none;
}
@media(max-width:768px){
	.m-nav{
        display:block;
        width: 100%;
        margin: 0 auto;
        margin-bottom:3%;
    }
    .m-nav ul{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 2%;
    }
    .m-nav ul li{
        width: 31%;
        font-size: 10px;
        border: 1px solid #000;
        border-radius: 3px;
        padding: 3px;
        margin-bottom: 2%;
    }
    .m-nav ul li a{
        display: inline-block;
        width: 100%;
        text-decoration: none;
        color: #000;
        font-weight: bold;
    }
}
</style>
<div class="roomwrap">
	<div class="container">
		<div class="Titlebox">
			<h1>부대시설</h1>
			<p>Enjoy in the place. 토담에서 준비한 시설에서 여러 행사를 진행하세요</p>
		</div>
	</div>



	<div class="container" id="roomflex">

		<div class="roomlist">
			<div class="roomswiper">
				<div class="swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img src="/images/facility/facility02_01.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/facility/facility02_02.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/facility/facility02_03.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/facility/facility02_04.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/facility/facility02_05.jpg" alt="">
						</div>
					</div>
					<div class="swiper-button-prev" id="roombtn1"></div>
					<div class="swiper-button-next" id="roombtn2"></div>
				</div>
			</div>

			<div class="info">
				<div class="topbox">
					<p>토담 리조트</p>
					<h1>세미나실</h1>
				</div>
				<div class="bottombox">
					<p>워크샵, MT, OT등 많은 인원을 수용하고 단체행사가 가능한 다목적 세미나실입니다.</p>
                    
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
			<h1>다양한 체험, 토담의 부대시설</h1>
			<p>Enjoy in the place. 토담에서 준비한 시설에서 여러 행사를 진행하세요</p>
		</div>
		<!-- 사진사이즈는 1000x800으로잡자 -->

		<div class="roomlist-m">
			


			<div class="roomswiper-m">
				<div class="swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img src="/images/facility/m/facility02_01.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/facility/m/facility02_02.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/facility/m/facility02_03.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/facility/m/facility02_04.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="/images/facility/m/facility02_05.jpg" alt="">
						</div>
					</div>
					<div class="swiper-button-prev" id="roombtn1"></div>
					<div class="swiper-button-next" id="roombtn2"></div>
				</div>
				<div class="info">
					<div class="topbox">
						<p>토담 리조트</p>
						<h1>세미나실</h1>
					</div>
					<div class="bottombox">
						<p>워크샵, MT, OT등 많은 인원을 수용하고 단체행사가 가능한 다목적 세미나실입니다.</p>
					</div>
				</div>
			</div>
</div>

<div class="m-nav">
    <ul>
        <li><a href="http://xn--jk1bl1k9ynz2idlb.kr/facility" id="facilbtn1">축구장</a></li>
        <li><a href="http://xn--jk1bl1k9ynz2idlb.kr/facility2" id="facilbtn2">세미나실</a></li>
        <li><a href="/special1">실내풋살장(대형/중형)</a></li>
        <li><a href="/special2">카트레이싱</a></li>
        <li><a href="/special3">에어슬라이드&수영장</a></li>
        <li><a href="/special8">바운서</a></li>
        <li><a href="/special4">페달보트</a></li>
        <li><a href="http://xn--jk1bl1k9ynz2idlb.kr/BBQ">포천이동갈비</a></li>
        <li><a href="/special5">카페</a></li>
        <li><a href="/special6">식당</a></li>
        <li><a href="/special7">편의점</a></li>
        <li><a href="http://xn--jk1bl1k9ynz2idlb.kr/BBQ2">바베큐장</a></li>
    </ul>
</div>



		</div>
		<?php
include('footer.php');
?>
	</div>


	<script type="text/javascript" src="/js/main.js"></script>
    <script>
$(document).ready(function() {
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
                nextEl: '#roombtn2',
                prevEl: '#roombtn1',
            },
        });
    }

    var currentRoomIndex = 0;
    var numRooms = $('.roomswiper-m').length;

   

    // "축구장" 클릭 시
    $("#facilbtn1").click(function() {
        $(".roomswiper-m").css("display", "none");
        $(".roomswiper-m").eq(0).css("display", "block");
		initSwiper();
    });

    // "세미나실" 클릭 시
    $("#facilbtn2").click(function() {
        $(".roomswiper-m").css("display", "none");
        $(".roomswiper-m").eq(1).css("display", "block");
		initSwiper();
    });
});
</script>