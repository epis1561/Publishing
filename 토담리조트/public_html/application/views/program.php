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


<div class="roomwrap">
<div class="container">
    <div class="Titlebox">
        <h1>토담 프로그램</h1>
        <p>Enjoy in the place. 토담리조트가 준비한 프로그램을 즐겨보세요.</p>
    </div>
</div>

<div class="subnav">
    <div class="navwrap">
        <a href="#all" id="all">ALL</a> <span>I</span> <a href="#all">단체행사</a> <span>I</span>
        <a href="#all">팀빌딩</a> <span>I</span> <a href="#link">전통민속팀빌딩</a> <span>I</span> <a href="#link">한마음직소</a> <span>I</span> <a href="#link2">명랑운동회</a> 
    </div>
</div>

<div class="container" id="roomflex">

    <div class="roomlist">
        
        <div class="roomswiper">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                       <img src="/images/program/program01_01.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/program/program01_02.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/program/program01_03.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/program/program01_05.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/program/program01_07.jpg" alt="">
                    </div>
                </div>
            <div class="swiper-button-prev"id="roombtn1"></div>
            <div class="swiper-button-next"id="roombtn2"></div>
            </div>
        </div>
    
        <div class="info">
        <div class="topbox">
            <p>토담 리조트</p>
            <h1>단체행사</h1>
        </div>
        <div class="bottombox">
        <div id="link"></div>
         <div class="flexbox"></div>
           
            <p>단합과 체력이 필요한 프로그램으로 체력과 단합력 모두 충전하세요!</p>
        </div>
        </div>
        
    </div>



    <div class="roomlist">
        <div class="roomswiper">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                       <img src="/images/program/program02_01.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                       <img src="/images/program/program02_02.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                       <img src="/images/program/program02_03.jpg" alt="">
                    </div>
                  
                </div>
            <div class="swiper-button-prev"id="roombtn1"></div>
            <div class="swiper-button-next"id="roombtn2"></div>
            </div>
        </div>
    
        <div class="info">
        <div class="topbox">
            <p>토담 리조트</p>
            <h1>팀빌딩</h1>
        </div>
        <div class="bottombox">
            <p>팀별 과제를 수행해가는 프로그램으로 결속력이 필요한 프로그램입니다!</p>
        </div>
        </div>
    </div>



    <div class="roomlist">
        <div class="roomswiper">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/images/program/program03_01.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/program/program03_02.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/program/program03_03.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/program/program03_04.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-button-prev"id="roombtn1"></div>
            <div class="swiper-button-next"id="roombtn2"></div>
            </div>
            
        </div>
    
        <div class="info">
        <div class="topbox">
            <p>토담 리조트</p>
            <h1>전통민속팀빌딩</h1>
        </div>
        <div class="bottombox">
            
            <p>한국 고유의 전통놀이를 접목하여 팀원 전체가 한마음으로 임무를 완수하세요!</p>
        </div>
        </div>
    </div>



    <!-- <div class="roomlist">
        <div class="roomswiper">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/images/program/program04_01.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/program/program04_02.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/program/program04_03.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-button-prev"id="roombtn1"></div>
            <div class="swiper-button-next"id="roombtn2"></div>
            </div>
            
        </div>
    
        <div class="info">
        <div class="topbox">
            <p>토담 리조트</p>
            <h1>서바이벌</h1>
        </div>
        <div class="bottombox">
        <div id="link1"></div>
            
            <p>모의 전투를 통한 짜릿한 경험을 해보세요!</p>
        </div>
        </div>
    </div> -->

    
    <!-- <div class="roomlist">
        <div class="roomswiper">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/images/program/program05_01.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/program/program05_02.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-button-prev"id="roombtn1"></div>
            <div class="swiper-button-next"id="roombtn2"></div>
            </div>
            
        </div>
    
        <div class="info">
        <div class="topbox">
            <p>토담 리조트</p>
            <h1>슈팅</h1>
        </div>
        <div class="bottombox">
            
            <p>고도의 집중력으로 타겟을 명중시켜보세요!</p>
        </div>
        </div>
    </div> -->


    <div class="roomlist">
        <div class="roomswiper">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/images/program/program06_01.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/program/program06_02.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-button-prev"id="roombtn1"></div>
            <div class="swiper-button-next"id="roombtn2"></div>
            </div>
            
        </div>
    
        <div class="info">
        <div class="topbox">
            <p>토담 리조트</p>
            <h1>한마음직소</h1>
        </div>
        <div class="bottombox">
       
            <p>퍼즐 조각을 맞추며 문제해결능력을 높혀주고 집중력에도 도움이 되어 두뇌발달에 좋은 프로그램입니다.</p>
        </div>
        </div>
    </div>


    <div class="roomlist">
        <div class="roomswiper">
            <div class="swiper">
                <div class="swiper-wrapper">
                <div class="swiper-slide">
                        <img src="/images/program/program01_04.jpg" alt="">
                </div>
                <div class="swiper-slide">
                        <img src="/images/program/program01_06.jpg" alt="">
                </div>
                
                <div class="swiper-slide">
                       <img src="/images/program/program02_04.jpg" alt="">
                </div>
                </div>
            <div class="swiper-button-prev"id="roombtn1"></div>
            <div class="swiper-button-next"id="roombtn2"></div>
            </div>
            
        </div> 
        <div class="info">
        
        <div class="topbox">
        <div id="link2"></div>
            <p>토담 리조트</p>
            <h1>명랑운동회</h1>
            
        </div>
       
        <div class="bottombox">
       
            <p>한마음 한뜻으로 움직여 결속력과 단합력을 높힐 수 있는 프로그램입니다.</p>
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
        <li class="pro1">단체행사</li>
        <li class="pro2">팀빌딩</li> <li class="pro3">전통민속팀빌딩</li> <li class="pro4">한마음직소</li><li class="pro5">명랑운동회</li>
        </ul>
        </div>
        <!-- 사진사이즈는 1000x800으로잡자 -->
    
        <div class="roomlist-m">
            <div class="roomswiper-m" style="display:block" id="link1">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/program/m/program01_01.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/program/m/program01_02.jpg" alt="">
                        </div>
                        <!-- <div class="swiper-slide">
                            <img src="/images/program/m/program01_03.jpg" alt="">
                        </div> -->
                        <div class="swiper-slide">
                            <img src="/images/program/m/program01_03.jpg" alt="">
                        </div>
                       
                        <div class="swiper-slide">
                            <img src="/images/program/m/program01_05.jpg" alt="">
                        </div>
                       
                        <div class="swiper-slide">
                            <img src="/images/program/m/program01_07.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-prev" id="roombtn1"></div>
                    <div class="swiper-button-next" id="roombtn2"></div>
                </div>
                <div class="info">
        <div class="topbox">
            <p>토담 리조트</p>
            <h1>단체행사</h1>
        </div>
        <div class="bottombox">
            <p>단합과 체력이 필요한 프로그램으로 체력과 단합력 모두 충전하세요!</p>
        </div>
        </div>
            </div>
    
    
            <div class="roomswiper-m" style="display:none" id="link2">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/program/m/program02_01.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/program/m/program02_02.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/program/m/program02_03.jpg" alt="">
                        </div>
                      
                    </div>
                    <div class="swiper-button-prev" id="roombtn1"></div>
                    <div class="swiper-button-next" id="roombtn2"></div>
                </div>
                <div class="info">
        <div class="topbox">
            <p>토담 리조트</p>
            <h1>팀빌딩</h1>
        </div>
        <div class="bottombox">
            <p>팀별 과제를 수행해가는 프로그램으로 결속력이 필요한 프로그램입니다!</p>
        </div>
        </div>
            </div>
    
    
            <div class="roomswiper-m" style="display:none" id="link3">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/program/m/program03_01.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/program/m/program03_02.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/program/m/program03_03.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/program/m/program03_04.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-prev" id="roombtn1"></div>
                    <div class="swiper-button-next" id="roombtn2"></div>
                </div>
                <div class="info">
        <div class="topbox">
            <p>토담 리조트</p>
            <h1>전통민속팀빌딩</h1>
        </div>
        <div class="bottombox">
            <p>한국 고유의 전통놀이를 접목하여 팀원 전체가 한마음으로 임무를 완수하세요!</p>
        </div>
        </div>
            </div>
    
    
            <!-- <div class="roomswiper-m" style="display:none" id="link4">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/program/m/program04_01.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/program/m/program04_02.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/program/m/program04_03.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-prev" id="roombtn1"></div>
                    <div class="swiper-button-next" id="roombtn2"></div>
                </div>
                <div class="info">
        <div class="topbox">
            <p>토담 리조트</p>
            <h1>서바이벌</h1>
        </div>
        <div class="bottombox">
            <p>모의 전투를 통한 짜릿한 경험을 해보세요!</p>
        </div>
        </div>
            </div> -->


            
            <!-- <div class="roomswiper-m" style="display:none" id="link5">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/program/m/program05_01.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/program/m/program05_02.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-prev" id="roombtn1"></div>
                    <div class="swiper-button-next" id="roombtn2"></div>
                </div>
                <div class="info">
        <div class="topbox">
            <p>토담 리조트</p>
            <h1>슈팅</h1>
        </div>
        <div class="bottombox">
            <p>고도의 집중력으로 타겟을 명중시켜보세요!</p>
        </div>
        </div>
            </div> -->
    

 
            <div class="roomswiper-m" style="display:none" id="link4">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/program/m/program06_01.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/program/m/program06_02.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-prev" id="roombtn1"></div>
                    <div class="swiper-button-next" id="roombtn2"></div>
                </div>
                <div class="info">
        <div class="topbox">
            <p>토담 리조트</p>
            <h1>한마음직소</h1>
        </div>
        <div class="bottombox">
            <p>퍼즐 조각을 함께 맞추며 팀웍과 문제해결능력을 높혀주고 집중력에도 도움이 되어 두뇌발달에 좋은 프로그램입니다.</p>
        </div>
        </div>
            </div>

            <div class="roomswiper-m" style="display:none" id="link5">
                <div class="swiper">
                    <div class="swiper-wrapper">
                    <div class="swiper-slide">
                            <img src="/images/program/m/program01_04.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/images/program/m/program01_06.jpg" alt="">
                    </div>
                    
                    <div class="swiper-slide">
                            <img src="/images/program/m/program02_04.jpg" alt="">
                    </div>
                    </div>
                    <div class="swiper-button-prev" id="roombtn1"></div>
                    <div class="swiper-button-next" id="roombtn2"></div>
                </div>
                <div class="info">
        <div class="topbox">
            <p>토담 리조트</p>
            <h1>명랑운동회</h1>
        </div>
        <div class="bottombox">
            <p>한마음 한뜻으로 움직여 결속력과 단합력을 높힐 수 있는 프로그램입니다.</p>
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
$(".pro5").click(function() {
    $(".roomswiper-m").css("display", "none");
    $(".roomswiper-m").eq(4).css("display", "block");
    initSwiper();
});

</script>