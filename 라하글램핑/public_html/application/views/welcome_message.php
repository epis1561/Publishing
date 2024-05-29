
<?php
include('header.php');
?>
<body>
<link 
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="/css/swiper.css">
  <link rel="stylesheet" href="/css/main.css">

<?php
    $sql = "SELECT * FROM `popup` WHERE `is_open` = '1' ORDER BY `ordering` ASC, `idx` DESC";
    $data['popups'] = $this -> data_model -> getList($sql, 'DB');
    $sql = "SELECT * FROM `slide` WHERE `is_open` = '1' ORDER BY `ordering` ASC, `idx` DESC";
    $data['slides'] = $this -> data_model -> getList($sql, 'DB');
    //$data['is_mobile'] = $is_mobile;
    $this -> load -> view('include/popup', $data);
?>
<?php
$folderName="main";
$topArea="main";
?>

<div class="mainslide">
  <div class="textbox">
    <span>LET'S HAVE A GREATLY TRIP TOGETHER</span>
    <h2>RAHA GLAMPING</h2>
  </div>
<? include_once ('topArea.php'); ?>
</div>

<div class="main2">
  <div class="flex">
    <div class="imgbox">
      <img src="/images/main/img01.jpg" alt="">
    </div>
    <div class="text">
      <div class="textposition1">
        <h3>Raha Glamping</h3>
        마음의 진정한 휴식처 원주 라하 글램핑입니다.<br><br>
        추억과 낭만을 즐길 수 있는 품격 있는 객실에서 차별화된 ‘쉼’을 즐기시길 바랍니다.
      </div>
    </div>
  </div>

  <div class="flex">
    <div class="text">
      <div class="textposition2">
        <h3>Raha Glamping</h3>
        원주의 명산 치악산 자락에서 느끼는 ‘머뭄’의 여유 라하 글램핑
        <br><br>
        일상에 지친 모두가 하루를 ‘온전히’ 쉬어가기를 바라며, 모자람 없이 준비했습니다.
      </div>
    </div>
    <div class="imgbox">
      <img src="/images/main/img02.jpg" alt="">
    </div>
  </div>
</div>

<div class="splist1">
  <?php
  include('spList.php');
  ?>
</div>



<div class="banner">
  <img src="/images/main/img03.jpg" alt="">
  <h3>RAHA GLAMPING</h3>
</div>

<!-- 카라반 추가되면 룸preview부분 다시열고 그다음 배너도 다시열자!  -->

<!-- <div class="roompreview">
  <h2 id="menu_title">ROOM</h2>
  <p>당신의 시간은 소중하기에 짧은시간 머물러도 부족함이 없게 정성을 다해 준비합니다.<br>
   밝은 햇살과 풍부한 자연이 주는 시원함은 당신의 여행을 함께하기에 부족함이 없습니다.
  </p>
  <div class="roomlist">
  <div class="imgcover"><a href="/room?roomnum=01"><img src="/images/preview/01_01.jpg" alt=""></a><div class="preview_text">라하<span>글램핑</span></div></div>
  <div class="imgcover"><a href="/room?roomnum=02"><img src="/images/preview/01_02.jpg" alt=""></a><div class="preview_text">라하<span>카라반</span></div></div>
  </div> -->
<!-- <div class="swiper-wrap preview">
    <div class="swiper2">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><div class="imgcover"><img src="/images/preview/01_01.jpg" alt=""></div><div class="preview_text">라하<span>글램핑</span></div></div>
          <div class="swiper-slide"><div class="imgcover"><img src="/images/preview/01_02.jpg" alt=""></div><div class="preview_text">라하<span>카라반</span></div></div>
          <div class="swiper-slide"><div class="imgcover"><img src="/images/preview/01_03.jpg" alt=""></div><div class="preview_text">A1<span>1층 치즈방 키즈</span></div></div>
          <div class="swiper-slide"><div class="imgcover"><img src="/images/preview/01_04.jpg" alt=""></div><div class="preview_text">A1<span>1층 치즈방 키즈</span></div></div>
          <div class="swiper-slide"><div class="imgcover"><img src="/images/preview/01_05.jpg" alt=""></div><div class="preview_text">A1<span>1층 치즈방 키즈</span></div></div>
          <div class="swiper-slide"><div class="imgcover"><img src="/images/preview/01_06.jpg" alt=""></div><div class="preview_text">A1<span>1층 치즈방 키즈</span></div></div>
          <div class="swiper-slide"><div class="imgcover"><img src="/images/preview/01_07.jpg" alt=""></div><div class="preview_text">A1<span>1층 치즈방 키즈</span></div></div>
          <div class="swiper-slide"><div class="imgcover"><img src="/images/preview/01_08.jpg" alt=""></div><div class="preview_text">A1<span>1층 치즈방 키즈</span></div></div>
          <div class="swiper-slide"><div class="imgcover"><img src="/images/preview/01_09.jpg" alt=""></div><div class="preview_text">A1<span>1층 치즈방 키즈</span></div></div>
          <div class="swiper-slide"><div class="imgcover"><img src="/images/preview/01_10.jpg" alt=""></div><div class="preview_text">A1<span>1층 치즈방 키즈</span></div></div>
        </div>
    </div>
    <div class="swiper-button-prev preview1"></div>
	<div class="swiper-button-next preview2"></div>
  </div> -->

<!-- 모바일 미리보기 -->
  <!-- <div class="swiper-wrap preview-m">
    <div class="swiper7">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><div class="imgcover"><img src="/images/preview/01_01.jpg" alt=""></div><div class="preview_text">라하<span>글램핑</span></div></div>
          <div class="swiper-slide"><div class="imgcover"><img src="/images/preview/01_02.jpg" alt=""></div><div class="preview_text">라하<span>카라반</span></div></div>
          <div class="swiper-slide"><div class="imgcover"><img src="/images/preview/01_03.jpg" alt=""></div><div class="preview_text">A1<span>1층 치즈방 키즈</span></div></div>
          <div class="swiper-slide"><div class="imgcover"><img src="/images/preview/01_04.jpg" alt=""></div><div class="preview_text">A1<span>1층 치즈방 키즈</span></div></div>
          <div class="swiper-slide"><div class="imgcover"><img src="/images/preview/01_05.jpg" alt=""></div><div class="preview_text">A1<span>1층 치즈방 키즈</span></div></div>
          <div class="swiper-slide"><div class="imgcover"><img src="/images/preview/01_06.jpg" alt=""></div><div class="preview_text">A1<span>1층 치즈방 키즈</span></div></div>
          <div class="swiper-slide"><div class="imgcover"><img src="/images/preview/01_07.jpg" alt=""></div><div class="preview_text">A1<span>1층 치즈방 키즈</span></div></div>
          <div class="swiper-slide"><div class="imgcover"><img src="/images/preview/01_08.jpg" alt=""></div><div class="preview_text">A1<span>1층 치즈방 키즈</span></div></div>
          <div class="swiper-slide"><div class="imgcover"><img src="/images/preview/01_09.jpg" alt=""></div><div class="preview_text">A1<span>1층 치즈방 키즈</span></div></div>
          <div class="swiper-slide"><div class="imgcover"><img src="/images/preview/01_10.jpg" alt=""></div><div class="preview_text">A1<span>1층 치즈방 키즈</span></div></div> 
        </div>
    </div>
    <div class="swiper-button-prev preview1_m"></div>
	<div class="swiper-button-next preview2_m"></div>
</div> -->
<!-- </div> -->

<!-- 
  <div class="banner" id="banner2">
    <img src="/images/main/img04.jpg" alt="">
  </div> -->

  <?php
  include('map.php');
  ?> 

<?php
  include('footer.php');
?>
<script src="/js/swiper.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script>
  $(document).ready(function(){

    setTimeout(function(){
      $('.textbox').fadeOut();
    },6000);

  });
</script>
</body>


</html>

