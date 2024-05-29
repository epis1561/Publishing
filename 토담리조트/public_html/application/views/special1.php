<link rel="stylesheet" href="/css/bbq.css">	
<link rel="stylesheet" href="/css/swiper.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<?php
include('header.php');
?>
<div class="bbqwrap">
    <div class="title">
        <h1>토담 - 실내풋살장(대형/중형)</h1>
    </div>
    <div class="swiper">
<div class="swiper-wrapper">
    <div class="swiper-slide">
        <img src="/images/special/special01_01.jpg" alt="">
    </div>
    <div class="swiper-slide">
        <img src="/images/special/special01_02.jpg" alt="">
    </div>
    <div class="swiper-slide">
        <img src="/images/special/special01_03.jpg" alt="">
    </div>
    <div class="swiper-slide">
        <img src="/images/special/special01_04.jpg" alt="">
    </div>
   
</div>
    </div>
</div>


<div class="bbqwrap-m">

    <div class="title-m">
        <h1>토담 - 실내풋살장(대형/중형)</h1>
    </div>
    <div class="swiper">
<div class="swiper-wrapper">
    <div class="swiper-slide">
        <img src="/images/special/m/special01_01.jpg" alt="">
    </div>
    <div class="swiper-slide">
        <img src="/images/special/m/special01_02.jpg" alt="">
    </div>
    <div class="swiper-slide">
        <img src="/images/special/m/special01_03.jpg" alt="">
    </div>
    <div class="swiper-slide">
        <img src="/images/special/m/special01_04.jpg" alt="">
    </div>

</div>
    </div>
</div>
<div class="m-nav">
    <ul>
        <li><a href="http://xn--jk1bl1k9ynz2idlb.kr/facility">축구장</a></li>
        <li><a href="http://xn--jk1bl1k9ynz2idlb.kr/facility2">세미나실</a></li>
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
<div class="bbqtext">
    <p>토담리조트에서는 날씨와 상관없이 다양한 액티비티를 즐기실 수 있도록<br>
    실내풋살장이 준비되어 있습니다. <br><br>
</p>


</div>

			<?php
include('footer.php');
?>

<script type="text/javascript" src="/js/main.js"></script>
<script>
    $(document).ready(function () {
// #pro1부터 #pro6까지 순서대로 클릭 시 해당하는 .roomswiper-m 보이도록 설정
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

});
</script>