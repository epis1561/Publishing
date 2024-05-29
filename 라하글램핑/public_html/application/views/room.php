<link rel="stylesheet" href="/css/room.css">
<link 
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="/css/swiper.css">

<?php
include('header.php');
?>
<?php
$folderName="room";
$topArea="room";
$roomnum = $_GET['roomnum'];
$pageNum="2$roomnum";
$subNum="$roomnum";
$src="/images/$folderName$roomnum/";
switch ($roomnum) {
	case "01":
		$typeId="202653";
		$roomName="<span>Glamping</span>글램핑";

        $roomInfo1 = "글램핑";
        $roomInfo2 = "독채";
        
        $people = "기준2명 / 최대4명";

        $Area1 = "13평";
        $Area2 = "약43㎡";

        $special = "개별바비큐<br>불멍";

        $outline = "복층형(퀸 + 슈퍼싱글 + 소파베드) + 화장실1 + 거실1";
        $amenity = "TV,에어컨,취사도구,객실샤워실,인터넷,일산화탄소 경보기,화재 경보기,난방,침대,냉장고,드라이기,욕실용품,소화기,인덕션,인덕션 전용용기";
        
        $extracharge = "2인초과 시 1인당(1박당) 인원추가요금 발생 / 24개월 미만 무료 / 25개월 ~ 성인 20,000원 / 현장결제";
	break;



    case "02":
		$typeId="204429";
		$roomName="라하_카라반";
        $roomInfo1 = "카라반";
        $roomInfo2 = "독채";
        
        $people = "기준2명 / 최대4명";

        $Area1 = "7평";
        $Area2 = "약23㎡";

        $special = "개별바비큐<br>불멍";

        $outline = "단독형 + 퀸,싱글2(이층침대) + 화장실1";
        $amenity = "TV,에어컨,취사도구,객실샤워실,인터넷,일산화탄소 경보기,화재 경보기,난방,침대,냉장고,드라이기,욕실용품,소화기,인덕션,인덕션 전용용기";
        
        $extracharge = "2인초과 시 1인당(1박당) 인원추가요금 발생 / 24개월 미만 무료 / 25개월 ~ 성인 20,000원 / 현장결제";
	break;
    }

?>
<div class="roomslide">
<div class="textbox">
     <h2><?php echo $roomName; ?><!--<span>(1층)</span> --></h2>
</div>
<? include_once ('topArea.php'); ?> 
</div>
<div class="roominfo">
    <h2><?php echo $roomName; ?></h2>
    <table class="tg" style="undefined;table-layout: fixed; width: 80%">
<colgroup>
<col style="width: 25%">
<col style="width: 25%">
<col style="width: 25%">
<col style="width: 25%">
</colgroup>
<thead>
  <tr>
    <th class="tg-8jgo">형태</th>
    <th class="tg-8jgo">인원</th>
    <th class="tg-8jgo">넓이</th>
    <th class="tg-8jgo">특이사항</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-i07x"><?php echo $roomInfo1; ?><span>(<?php echo $roomInfo2; ?>)</span></td>
    <td class="tg-i07x"><?php echo $people; ?></td>
    <td class="tg-i07x"><?php echo $Area1; ?><span>(<?php echo $Area2; ?>)</span></td>
    <td class="tg-i07x"><?php echo $special; ?></td>
  </tr>
</tbody>
</table>
<ul>
    <li><strong>시설안내</strong>&nbsp;&nbsp;<span><?php echo $outline; ?></span></li>
    <li><strong>구비시설</strong>&nbsp;&nbsp;<span><?php echo $amenity; ?></span></li>
    <li><strong>인원초과금액</strong>&nbsp;&nbsp;<span><?php echo $extracharge; ?></span></li>
</ul>
</div>

<div class="reserbox">
<link rel="StyleSheet" href='/css/ddnayo.css' type="text/css" />
        <script type="text/javascript" id="ddnayoapi" src="//www.ddnayo.com/api/script.aspx?apiuser=test" charset="utf-8"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
<div style="width: 80%; margin:0 auto;" id="room_daily_price1"></div>
<script type="text/javascript">
    ddnayo.room.price.dailytable($("#room_daily_price1").get(0), {
        "id_hotel": "100390"		/* 업소 코드 */
	, "id_room_type": "<?php echo $typeId; ?>"		/* 객실타입 코드 */
	, "su_day": 5			/* 출력일자 : 파라미터 생략시 기본 7일 최대 7일 */
    });
</script>
<div class="textbox">
    <!-- <div class="text">
        <p><strong>주중</strong>&nbsp;&nbsp;<span>일요일~목요일</span></p>&nbsp;&nbsp;
        <p><strong>주말</strong>&nbsp;&nbsp;<span>토요일,공휴일</span></p>
    </div> -->
    <div class="reserbtn">
        <a href="https://booking.ddnayo.com/?accommodationId=100390" target="_blank">예약하기&nbsp;&nbsp;></a>
    </div>
</div>
</div>

<div class="photobox">
    <div class="flex"><img src="<?php echo $src ?>img01.jpg" alt=""><img src="<?php echo $src ?>img02.jpg" alt=""></div>
    <img src="<?php echo $src ?>img03.jpg" alt="">
</div>

<!-- <div class="roomlist">
<h2>ROOM</h2> -->
<!-- <div class="swiper-wrap">
    <div class="swiper5">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><div class="imgcover"><img src="/images/preview/01_01.jpg" alt=""></div><div class="preview_text">A1<span>1층 치즈방 키즈</span></div></div>
          <div class="swiper-slide"><div class="imgcover"><img src="/images/preview/01_02.jpg" alt=""></div><div class="preview_text">A1<span>1층 치즈방 키즈</span></div></div>
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
    <div class="swiper-button-prev roomlistbtn1"></div>
	<div class="swiper-button-next roomlistbtn2"></div>
</div> -->
<!-- <div class="roomlist1">
  <div class="imgcover"><a href="/room?roomnum=01"><img src="/images/preview/01_01.jpg" alt=""></a><div class="preview_text">라하<span>글램핑</span></div></div>
  <div class="imgcover"><a href="/room?roomnum=02"><img src="/images/preview/01_02.jpg" alt=""></a><div class="preview_text">라하<span>카라반</span></div></div>
  </div>

</div> -->
<div class="splist1">
  <?php
  include('spList.php');
  ?>
</div>
<?php
  include('footer.php');
?>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="/js/swiper.js"></script>
<script>
    $(document).ready(function(){

setTimeout(function(){
  $('.textbox').fadeOut();
},3000);

});
</script>