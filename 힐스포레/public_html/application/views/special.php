<div class="spCon01">
    <div class="spTypo">
    <?php 
if ($subNum == '01' || $subNum == '02' || $subNum == '03') { 
    ?>
    <h1 class="eng">F&B</h1>
<?php 
} else if ($subNum == '11') { 
    ?>
    <h1 class="eng">PROGRAM</h1>
<?php 
} else { 
    ?>
    <h1 class="eng">views</h1>
<?php 
} 
?>
    </div>
    <div class="swiper-container special-swiper">
        <div class="swiper-wrapper">
            <?php 
            for ($i = 1; $i <= $imgCount; $i++) {
                $imgNum = sprintf('%02d', $i);
            ?>	
            <div class="swiper-slide"><img class="img100 M_100" src="/images/special/<?= $subNum ?>_<?= $imgNum ?>.jpg" alt=""></div>
            <?php } ?> 
        </div>
        <div class="swiper-button-next"><img src="/images/common/arrow_next.png" alt=""></div>
        <div class="swiper-button-prev"><img src="/images/common/arrow_prev.png" alt=""></div>
        <div class="special-swiper-pagination"></div>
    </div>
    <!-- main Swiper -->
    <script>
        var swiper = new Swiper(".special-swiper", {
            loop: true,
            effect: "fade",
            autoplay:{
                delay:3000,
                disableOnInteraction:false
            },
            pagination: {
            el: ".special-swiper-pagination",
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
    <?php 
if ($subNum == '01' || $subNum == '02' || $subNum == '03') { 
    ?>
    <h3 class="eng">먹거리</h3>
<?php 
} else if ($subNum == '11') { 
    ?>
    <h3 class="eng">프로그램</h3>
<?php 
} else { 
    ?>
    <h3 class="eng">문화시설</h3>
<?php 
} 
?>
    <span>
        Enjoy the scenery in front of your eyes enjoying the morning sun.<br>
        The freshness of the green nature. take a rest in here, hillsforet.
    </span>
</div>

<div class="spCon02">
    <div class="spConWrapper spCon02_01">
        <div class="title">
            <div class="title_inner">
                <div class="sp_boxx none1024">
                <?php 
if ($subNum == '01' || $subNum == '02' || $subNum == '03') { 
    ?>
    <h2 class="eng">먹거리</h2>
<?php 
} else if ($subNum == '11') { 
    ?>
    <h2 class="eng">프로그램</h2>
<?php 
} else { 
    ?>
    <h2 class="eng">문화시설</h2>
<?php 
} 
?>
                    <p class="spTitle_txt">
                        Spend your time alone for you or<br>
                        with your firends, right now here.
                    </p>
                </div>
                <div class="sp_outer">
                    <div class="sp_inner">
                            <h3 class="sp_head roomtitle kor">
                                <?= $title ?>
                            </h3>
                            <!--div class="sp_objectt">Special</div-->
                        <p class="sp_body roomdesc">
                            <?= $content ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="speciallist_content">
            <img src="/images/special/img<?= $subNum ?>_01.jpg" alt="" class="img00">
        </div>
    </div>
    <div class="spCon02_01">
        <div class="spCon02_01_box">
            <div class="spCon02_01_img">
                <img src="/images/special/img<?= $subNum ?>_02.png" alt="" class="img100">
            </div>
            <p class="kor">
                바쁜 일상으로 함께 하고픈 것 들을 잃어버리고 미뤄두었다면,<br>
                잠시 멈출 줄도 알아야 해요.<br>
                멈춰지지 않는 건 없고 모든 건 마음 먹기 나름이니까.<br>
                두고가세요, 근심걱정을<br>
                가져가세요, 행복한 기억을.
            </p>
        </div>
    </div>
</div>

<div class="spCon03">
    <div class="spCon03_01">
        <div class="img01">
            <img src="/images/special/img<?= $subNum ?>_03.jpg" alt="" class="img00">
        </div>
        <div class="img02">
            <img src="/images/special/img<?= $subNum ?>_04.jpg" alt="" class="img00">
        </div>
    </div>
    <div class="spCon03_02">
        <div class="img03">
            <img src="/images/special/img<?= $subNum ?>_05.jpg" alt="" class="img00">
        </div>
        <div class="img04">
            <img src="/images/special/logo_img.jpg" alt="" class="img00">
        </div>
    </div>
</div>