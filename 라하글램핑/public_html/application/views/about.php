  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="/css/swiper.css">
  <link rel="stylesheet" href="/css/about.css">

  <?php
  include('header.php')
  ?>
  <?php
  $folderName ="about";
  $topArea = "about";
  ?>

  <div class="aboutslide" id="about2">
  <? include_once ('topArea.php'); ?>
  </div>

  <div class="about_intro" id="about1">
    <div class="leftbox">
        <h2>ABOUT US</h2>
        
        <p>Raha Glamping</p>
        아름다운 자연에 둘러쌓인<br>
        추억과 낭만의 감성 숙소<br>
        라하 글램핑<br>
        진정한 휴식이 깃든 완벽한 하루를 선사합니다. <br><br>
        사랑하는 아이들 혹은 소중한 인연들과<br>
        라하 글램핑에서 행복한 시간을 보내시길 바랍니다.<br><br>
        청결하고 포근한 객실과 다양한 편의 시설들<br>
        가족과 연인과 함께 휴식을 즐기며 많은 추억을 만들어 보세요.<br>
    </div>
    <div class="rightbox">
        <img src="/images/about/img01.jpg" alt="">
    </div>
  </div>

  <div class="banner">
    <img src="/images/about/img02.jpg" alt="">
  </div>

  <div class="photos">
    <div class="left_photo">
        <img src="/images/about/img03.jpg" alt="">
        <img src="/images/about/img04.jpg" alt="">
    </div>
    <div class="right_photo">
        <img src="/images/about/img05.jpg" alt="">
    </div>
  </div>
  <div class="below_photo">
        <img src="/images/about/img06.jpg" alt="">
  </div>

  <div class="aboutmap" id="about3">
  <h2>배치도</h2>
  <div class="mapbox"><img src="/images/common/navi.png" alt=""></div>
  </div>
  <?php
  include('footer.php');
  ?>