<?php
include('header.php');
?>

<link rel="stylesheet" href="/css/program.css">
<script src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
<link rel="stylesheet" type="text/css" href="/css/jquery.fullpage.min.css" />
<link rel="stylesheet" href="/css/swiper.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<style>
    .roomlist .bottombox p{
        width: 100%;
        line-height: 25px;
        word-break:keep-all;
    }
    @media(max-width:768px){
        .roomlist-m{
            position: relative;
        }
        .roomwrap-m .bottombox p{
            font-size: 12px;
            line-height: 20px;
        }
        .roomlist-m{
            margin-bottom: 10%;
        }
        .roomwrap-m .navbtn1 #btn2,.roomwrap-m .navbtn1 #btn1{
            position: static;
        }
        .navbtn1{
            width: 30%;
            margin: 0 auto;
           justify-content: center;
            display: flex;
            gap: 30%;
        }
    }
</style>
<div class="roomwrap">
<div class="container">
    <div class="Titlebox">
        <h1>토담 프로그램</h1>
        <p>Enjoy in the place. 토담리조트가 준비한 프로그램을 즐겨보세요.</p>
    </div>
</div>

<div class="subnav">
    <div class="navwrap">
        <a href="#all" id="all">ALL</a> <span>I</span>
        <a href="#all">스포츠 놀이터 체험 프로그램</a> <span>I</span> <a href="#all">어린이 축구캠프</a> <span>I</span> <a href="#link1">여름 스포츠 물 놀이터</a> <span>I</span> <a href="#link1">가족과 함께하는 축핑(축구+캠핑)</a> 
    </div>
</div>

<div class="container" id="roomflex">

    <div class="roomlist">
        <div class="roomswiper">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                       <img src="/images/program2/program01_01.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                       <img src="/images/program2/program01_02.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                       <img src="/images/program2/program01_03.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                       <img src="/images/program2/program01_04.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                       <img src="/images/program2/program01_05.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                       <img src="/images/program2/program01_06.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                       <img src="/images/program2/program01_07.jpg" alt="">
                    </div>
                </div>
            <div class="swiper-button-prev"id="roombtn1"></div>
            <div class="swiper-button-next"id="roombtn2"></div>
            </div>
        </div>
    
        <div class="info">
        <div class="topbox">
            <p>토담 리조트</p>
            <h1>스포츠 놀이터 체험 프로그램<br>(당일진행)</h1>
        </div>
        <div class="bottombox">
            <p><span style="font-weight:bold;">5인 미니축구</span> : 1:1패스게임(약 5분), 5:5미니축구게임(약 15분)<br>
                <span style="font-weight:bold;">야구</span> : 야구 타격 및 캐칭연습(약 10분), 공격과 수비 역할을 수행하는 간단한 미니게임 진행(약 10분)<br>
                <span style="font-weight:bold;">미니 골프, 미니양궁</span> : 골프 및 양궁에 대한 간단 교육(종목별 약 10분), 간단한 체험 및 게임 진행(종목별 약 10분)<br>
                <span style="font-weight:bold;">농구</span> : 농구 기본동작 간단 교육 및 몸풀기 진행(약 10분), 간단한 체험 및 게임 진행(약 10분)<br>
                <span style="font-weight:bold;">RC카</span> : 작동방법 및 간단교육(약 5분), 간단한 체험 및 게임 진행(약 15분)<br>
                <span style="font-weight:bold;">에어바운스</span> : 다양한 에어바운스 보유, 구역을 지정하여 통통튀는 재미의 에어바운스를 자유롭게 체험
            </p>
        </div>
        </div>
    </div>



    <div class="roomlist">
        <div class="roomswiper">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/images/program2/program02_01.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/program2/program02_02.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/program2/program02_03.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/program2/program02_04.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-button-prev"id="roombtn1"></div>
            <div class="swiper-button-next"id="roombtn2"></div>
            </div>
            
        </div>
    
        <div class="info">
        <div class="topbox">
            <p>토담 리조트</p>
            <h1>어린이 축구캠프<br>(당일 또는 1박2일 프로그램)</h1>
        </div>
        <div class="bottombox">
        <div id="link"></div>
            <p><span style="font-weight:bold;">축구 클리닉</span> : 슈팅, 패스, 드리블 등 축구의 기본 동작을 전문 코치에게 직접 지도받는 클리닉 프로그램<br>
               <span style="font-weight:bold;">싸커 챌린지</span> : 축구의 기본 동작들을 제한 시간내에 수행한느 미션 프로그램<br>
               <span style="font-weight:bold;">미니축구</span> : 각 조가 팀을 이뤄 간단한 토너먼트 게임 진행<br>
               <span style="font-weight:bold;">포천 관광지 체험</span> : 포천에 위치한 다양한 관광지 중 한 곳을 방문
            </p>
        </div>
        </div>
    </div>



    <div class="roomlist">
    <div id="link1"></div>
        <div class="roomswiper">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/images/program2/program03_01.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/program2/program03_02.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/program2/program03_03.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/program2/program03_04.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/program2/program03_05.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-button-prev"id="roombtn1"></div>
            <div class="swiper-button-next"id="roombtn2"></div>
            </div>
            
        </div>
    
        <div class="info">
        <div class="topbox">
            <p>토담 리조트</p>
            <h1>여름 스포츠 물 놀이터</h1>
            
        </div>
        <div class="bottombox">
        
            <p><span style="font-weight:bold;">수중축구</span> : 수중 축구장에서 물놀이와 함께 즐기는 축구<br>
               <span style="font-weight:bold;">워터 슬라이드</span> : 긴 슬라이드를 튜브를 이용해 미끄러지는 워터 슬라이드<br>
               <span style="font-weight:bold;">워터 밤</span> : 줄을 당기면 물이 쏟아지는 워터 밤<br>
               <span style="font-weight:bold;">물총놀이</span> : 물총을 활용한 다양한 종목의 놀이체험    
        </p>
        </div>
        </div>
    </div>

    
    <div class="roomlist">
    <div id="link1"></div>
        <div class="roomswiper">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/images/program2/program04_01.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/program2/program04_02.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/program2/program04_03.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-button-prev"id="roombtn1"></div>
            <div class="swiper-button-next"id="roombtn2"></div>
            </div>
            
        </div>
    
        <div class="info">
        <div class="topbox">
            <p>토담 리조트</p>
            <h1>가족과 함께하는 축핑(축구+캠핑)</h1>
            
        </div>
        <div class="bottombox">
            <p><span style="font-weight:bold;">미니축구</span> : 부모님과 함께 1:1패스게임 및 미니 축구게임 진행<br>
               <span style="font-weight:bold;">명랑 운동회</span> : 가족과 함게 단합력을 다질 수 있는 다양한 프로그램으로 구성<br>
               <span style="font-weight:bold;">오늘은 아빠가 요리사</span> : 리조트에서 제공하는 재료 또는 개별적으로 가져온 재료를 이용하여 아이들에게 아빠가 요리를 만들어주는 프로그램<br>
               <span style="font-weight:bold;">별밤 콘서트</span> : 공연진행과 사전접수를 받아 간단한 개별 장기자랑 프로그램 진행
            </p>
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
            <h1>다양한 체험, 토담의 프로그램</h1>
            <p>Enjoy in the place. 토담리조트가 준비한 프로그램을 즐겨보세요.</p>
        </div>
        <div class="m-nav">
        <ul class="navwrap">
        <li class="pro1">스포츠놀이터</li>
        <li class="pro2">어린이축구캠프</li> <li class="pro3">여름스포츠물놀이터</li> <li class="pro4">가족과함께하는축핑</li>
        </ul>
        </div>
        <!-- 사진사이즈는 1000x800으로잡자 -->
    
        <div class="roomlist-m">
            <div class="roomswiper-m program2" style="display:block" id="link1">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/program2/m/program01_01.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/program2/m/program01_02.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/program2/m/program01_03.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/program2/m/program01_04.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/program2/m/program01_05.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/program2/m/program01_06.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/program2/m/program01_07.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-prev" id="roombtn1"></div>
                    <div class="swiper-button-next" id="roombtn2"></div>
                </div>
                <div class="info">
        <div class="topbox">
            <p>토담 리조트</p>
            <h1>스포츠 놀이터 체험 프로그램<br>(당일진행)</h1>
        </div>
        <div class="bottombox">
        <p><span style="font-weight:bold;">5인 미니축구</span> : 1:1패스게임(약 5분), 5:5미니축구게임(약 15분)<br>
            <span style="font-weight:bold;">야구</span> : 야구 타격 및 캐칭연습(약 10분), 공격과 수비 역할을 수행하는 간단한 미니게임 진행(약 10분)<br>
            <span style="font-weight:bold;">미니 골프, 미니양궁</span> : 골프 및 양궁에 대한 간단 교육(종목별 약 10분), 간단한 체험 및 게임 진행(종목별 약 10분)<br>
            <span style="font-weight:bold;">농구</span> : 농구 기본동작 간단 교육 및 몸풀기 진행(약 10분), 간단한 체험 및 게임 진행(약 10분)<br>
            <span style="font-weight:bold;">RC카</span> : 작동방법 및 간단교육(약 5분), 간단한 체험 및 게임 진행(약 15분)<br>
            <span style="font-weight:bold;">에어바운스</span> : 다양한 에어바운스 보유, 구역을 지정하여 통통튀는 재미의 에어바운스를 자유롭게 체험
        </p>
        </div>
        </div>
            </div>
    
    
            <div class="roomswiper-m program2" style="display:none" id="link2">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/program2/m/program02_01.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/program2/m/program02_02.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/program2/m/program02_03.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/program2/m/program02_04.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-prev" id="roombtn1"></div>
                    <div class="swiper-button-next" id="roombtn2"></div>
                </div>
                <div class="info">
        <div class="topbox">
            <p>토담 리조트</p>
            <h1>어린이 축구캠프<br>(당일 또는 1박2일 프로그램)</h1>
        </div>
        <div class="bottombox">
            <p><span style="font-weight:bold;">축구 클리닉</span> : 슈팅, 패스, 드리블 등 축구의 기본 동작을 전문 코치에게 직접 지도받는 클리닉 프로그램<br>
               <span style="font-weight:bold;">싸커 챌린지</span> : 축구의 기본 동작들을 제한 시간내에 수행한느 미션 프로그램<br>
               <span style="font-weight:bold;">미니축구</span> : 각 조가 팀을 이뤄 간단한 토너먼트 게임 진행<br>
               <span style="font-weight:bold;">포천 관광지 체험</span> : 포천에 위치한 다양한 관광지 중 한 곳을 방문</p>
        </div>
        </div>
            </div>
    
    
            <div class="roomswiper-m program2" style="display:none" id="link3">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/program2/m/program03_01.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/program2/m/program03_02.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/program2/m/program03_03.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/program2/m/program03_04.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/program2/m/program03_05.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-prev" id="roombtn1"></div>
                    <div class="swiper-button-next" id="roombtn2"></div>
                </div>
                <div class="info">
        <div class="topbox">
            <p>토담 리조트</p>
            <h1>여름 스포츠 물 놀이터</h1>
        </div>
        <div class="bottombox">
            <p><span style="font-weight:bold;">수중축구</span> : 수중 축구장에서 물놀이와 함께 즐기는 축구<br>
               <span style="font-weight:bold;">워터 슬라이드</span> : 긴 슬라이드를 튜브를 이용해 미끄러지는 워터 슬라이드<br>
               <span style="font-weight:bold;">워터 밤</span> : 줄을 당기면 물이 쏟아지는 워터 밤<br>
               <span style="font-weight:bold;">물총놀이</span> : 물총을 활용한 다양한 종목의 놀이체험 </p>
        </div>
        </div>
            </div>
    
    
            <div class="roomswiper-m program2" style="display:none" id="link4">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/program2/m/program04_01.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/program2/m/program04_02.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/program2/m/program04_03.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-prev" id="roombtn1"></div>
                    <div class="swiper-button-next" id="roombtn2"></div>
                </div>
                <div class="info">
        <div class="topbox">
            <p>토담 리조트</p>
            <h1>가족과 함께하는 축핑<br>(축구+캠핑)</h1>
        </div>
        <div class="bottombox">
            <p><span style="font-weight:bold;">미니축구</span> : 부모님과 함께 1:1패스게임 및 미니 축구게임 진행<br>
               <span style="font-weight:bold;">명랑 운동회</span> : 가족과 함게 단합력을 다질 수 있는 다양한 프로그램으로 구성<br>
               <span style="font-weight:bold;">오늘은 아빠가 요리사</span> : 리조트에서 제공하는 재료 또는 개별적으로 가져온 재료를 이용하여 아이들에게 아빠가 요리를 만들어주는 프로그램<br>
               <span style="font-weight:bold;">별밤 콘서트</span> : 공연진행과 사전접수를 받아 간단한 개별 장기자랑 프로그램 진행</p>
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