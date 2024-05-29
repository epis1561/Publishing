<div class="AboutCon01">
    <div class="aboutTypo">
        <h1 class="eng">about us</h1>
    </div>
    <div class="swiper-container about-swiper">
        <div class="swiper-wrapper">
        	<?php 
          for ($i = 1; $i <= $imgCount; $i++) {
          	$imgNum = sprintf('%02d', $i);
          ?>
          <div class="swiper-slide"><img src="/images/about/01_<?= $imgNum ?>.jpg" alt="" class="img100 M_100"></div>
          <?php } ?>
        </div>
        <div class="swiper-button-next"><img src="/images/common/arrow_next.png" alt=""></div>
        <div class="swiper-button-prev"><img src="/images/common/arrow_prev.png" alt=""></div>
        <div class="about-swiper-pagination"></div>
    </div>
    <!-- main Swiper -->
    <script>
        var swiper = new Swiper(".about-swiper", {
            loop: true,
            effect: "fade",
            autoplay:{
                delay:3000,
                disableOnInteraction:false
            },
            pagination: {
            el: ".about-swiper-pagination",
            type: "fraction",
            },
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            },
        });
    </script>
</div>

<div class="sub_title">
    <p>with hillsforet</p>
    <h3 class="eng">hillsforet story</h3>
    <span>
        Enjoy the scenery in front of your eyes enjoying the morning sun.<br>
        The freshness of the green nature. take a rest in here, hillsforet.
    </span>
</div>

<div class="AboutCon02">
    <div class="Con02_01">
        <img src="/images/about/img01.jpg" alt="" class="img00">
    </div>
    <div class="Con02_02">
        <p>
            공주의 힐링 휴식처 힐스포레 <br class="none1300">
            힐스포레는 동화 속 푸른 바다의 지중해 <br class="none1300">
            산토리니를 품어<br class="none1300">
            여러 특별한 테마를 곁들여 <br class="none1300">
            이국적이고 평안한 쉼터로<br  class="none1300">
            탄생하였습니다. <br class="none1300">

            지친 일상에서 벗어나 <br class="none1300">
            따뜻한 위로와 휴식을 <br class="none1300">
            추억하며 머물고 싶은<br  class="none1300">
            내 가족처럼 정성을 다하는, <br class="none1300">
            힐스포레가 되기위해<br class="none1300">
            끊임없이 노력하겠습니다.<br class="none1300">
        </p>
    </div>
</div>



<div class="AboutCon04">
    <img src="/images/about/img02.jpg" alt="" class="img00">
</div>

<div class="AboutCon05">
    <div class="Con05_01"></div>
    <div class="Con05_02">
        <img src="/images/about/img04.png" alt="" class="img00">
    </div>
</div>

<div class="AboutCon06">
    <div class="Con06_01">
        <div class="Con06_01_01"></div>
        <div class="Con06_01_02"></div>
        <!--img src="/images/common/logo_b.png" alt="" class="img00">
        <img src="/images/about/img05.jpg" alt="" class="img00"-->
    </div>
    <div class="Con06_02">
    </div>
</div>

<div class="AboutCon07">
    <p>Enjoy the scenery in front of your eyes enjoying the morning sun.</p>
    <h1 class="eng">
        A Happy And Relaxing break<br>
        With Hillsforet
    </h1>
    <span>
        푸르른 지중해의 산토리니를 닮은<br>
        자연의 상쾌함, 문틈으로 들어오는 청량한 바람과 산의 풀 내음<br>
        다양한 테마가 당신의 마음을 사로잡을 것입니다. <br>
        즐거움과 편안함이 공존하는 힐스포레에서 소중한 하루를 보내세요.
    </span>
</div>


    
</div>

<div class="AboutCon09">
    <h3>“ Your own space for precious time, comfortable time, and valuable time. ”</h3>
</div>

<div class="AboutCon10">
    <img src="/images/about/img08.jpg" alt="" class="img00">
    <div class="txt">
        <h1 class="eng">welcome to hillsforet</h1>
        <!--p>
            The day i want to leave dear friend.<br>
            Whenever you want to make beautiful memories with <br class="block650">lovers, friends, and family,<br>
            please find them at any time.
        </p-->
    </div>
</div>