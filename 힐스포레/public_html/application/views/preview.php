
<style>
    .block768{
        position: relative;
    }
   
    .pre-button-prev{
        left: 20px !important;
    }
    .pre-button-next{
        right: 20px !important;
    }
    .pre-button-next, .pre-button-prev{
        top: 22% !important;
    }
    .roomPre_reser{
    top: 0;
    }
    @media(max-width:768px){
        .roomPre_reser{
    top:auto;
    }
        .roomss .con02_txt{
            padding: 0;
            margin: 0;
        }
        .precont02_txt{
            display: none;
        }
        .roomss{
            padding: 0;
            padding-left: 30px;
            border-left:1px solid #fff;
        }
        .roomss .con02_txt h2{
            margin-bottom: 0;
            padding-top: 0;
        }
        .con02_txt h2::before{
            width: 15px;
            height: 27px;
            top: 40px !important;
        }
        .roomss{
            width: 100%;
            transform:translateX(-35%);
        }
        .room_Cont{
            margin-bottom: 10%;
        }
        .img100{
        width: 100% !important;
        margin: 0 auto !important;
    }
    .pre-button-prev{
        left: 2% !important;
    }
    .pre-button-next{
        right: 0 !important;
    }
    .roomss .con02_txt h2{
        font-size: 1.6em;
    }
        .precont03_txt h3{
            font-size: 2.0em;
        }
        .con02_txt p{
            font-size: 0.7em;
        }
        .precont03_txt p{
            font-size: 0.9em;
            color: #000;
            width: 70%;
            margin: 0 auto;
            margin-bottom: 8%;
        }
        .pre-button-prev img , .pre-button-next img{
width: 70%;
        }
        @media(max-width:320px){
            .pre-button-next, .pre-button-prev
            {
                top: 15% !important;
            }
            .roomss .con02_txt h2{
        font-size: 1.3em;
    }

        .con02_txt p{
            font-size: 0.5em;
        }
    }
    }

</style>
<div id="preview_wrap">
    <div class="precont01">
        <div class="B_Typo eng">Stay Hillsforet</div>
        <div class="swiper-container main-swiper">
            <div class="swiper-wrapper">
            	<?php 
            	for ($i = 1; $i <= $imgCount; $i++) {
                $imgNum = sprintf('%02d', $i);
            	?>
            	<div class="swiper-slide"><img src="/images/room/01_<?= $imgNum ?>.jpg" alt="" class="img100 M_100"></div>
            	<?php } ?>
            </div>
            <div class="main-button-next"><img class="img100" src="/images/common/arrow_next.png" alt=""></div>
            <div class="main-button-prev"><img class="img100" src="/images/common/arrow_prev.png" alt=""></div>
            <div class="swiper-pagination"></div>
        </div>
        <script>
            var swiper = new Swiper(".main-swiper", {
                loop: true,
                effect: "fade",
                autoplay:{
                	delay:3000,
                	disableOnInteraction:false
                },
                pagination: {
                el: ".swiper-pagination",
                type: "fraction",
                },
                navigation: {
                nextEl: ".main-button-next",
                prevEl: ".main-button-prev",
                },
            });
        </script>
    </div>

    <div class="Cont02 room_Cont">
					<div class="con02_01 none1024">
						<img src="/images/room/img01_01.jpg" alt="" class="img100">
					</div>
                    <div class="con02_01_m">
                        <img src="/images/room/m/img01_01.jpg" alt="" class="img100">
                    </div>	
					<div class="con02_02 roomss">
						<div class="con02_txt">
							<h2 class="eng">STAY HILLSFORET</h2>
							<p>
								힐스포레에서 빠짐없는 알찬 하루를 위해 
								잠시 쉬어가며<br> 특별한 추억을 담아가실 수 있는
								<br>깔끔하고 아늑한 숙소를 마련했습니다.<br><br>
							</p>
						</div>
					</div>
				</div>
    
    <script src="/js/jquery.rwdImageMaps.js"></script>
    <script>
        $(document).ready(function(e) {
            $('img[usemap]').rwdImageMaps();
        });
    </script>

    <div class="precont02_txt">
        <P>
            Welcome to hillsforet.<br>
            We will always try our best to be a camping where  you can always be satisfied<br>
            and have a comfortable rest.
        </P>
    </div> 
    <div class="none768">
        <div class="precont03_box">
            <div class="precont03_item">
                <div class="precont03_img"><img class="img100" src="/images/room/img02_01.jpg" alt=""></div>
                <div class="precont03_txt">
                    <h3 class="eng">독채풀빌라(복층)</h3>
                    <p>
                        프라이빗한 수영장을 이용할 수 있는<br>
                        힐스포레의 단체용 & 복층형 숙박시설입니다.<br class="none500">
                        은은하고 따뜻한 분위기의 공간에서 편안하게 쉬세요.
                    </p>
                </div>
            </div>

            <div class="precont03_item">
                <div class="precont03_img"><img class="img100" src="/images/room/img02_02.jpg" alt=""></div>
                <div class="precont03_txt">
                    <h3 class="eng">독채풀빌라(단층)</h3>
                    <p>
                        프라이빗한 수영장을 이용할 수 있는 단층형 숙박시설 입니다.<br class="none500">
                        포근한 이불 속에서 문틈으로 들어오는 상쾌한 자연의 향기를 만끽하세요.<br class="none500">   
                    </p>
                </div>
            </div>

            <div class="precont03_item">
                <div class="precont03_img"><img class="img100" src="/images/room/img02_03.jpg" alt=""></div>
                <div class="precont03_txt">
                    <h3 class="eng">큐브풀빌라</h3>
                    <p>
                        프라이빗한 수영장을 이용할 수 있는 큐브형 숙박시설 입니다.<br class="none500">
                        연인 혹은 가족과 행복하고 단란한 하루를 보내보세요.<br class="none500">
                    </p>
                </div>
            </div>

            <div class="precont03_item">
                <div class="precont03_img"><img class="img100" src="/images/room/img02_04.jpg" alt=""></div>
                <div class="precont03_txt">
                    <h3 class="eng">비즈니스형</h3>
                    <p>
                        깔끔한 시설과 편안하고 아늑한<br class="none500">
                        힐스포레의 숙박시설입니다.<br class="none500">
                        행복한 그 순간을 기억할 수 있도록 힐스포레가 함께하겠습니다.   
                    </p>
                </div>
            </div>

            <div class="precont03_item">
                <div class="precont03_img"><img class="img100" src="/images/room/img02_05.jpg" alt=""></div>
                <div class="precont03_txt">
                    <h3 class="eng">패밀리형</h3>
                    <p>
                        깔끔한 시설과 편안하고 아늑한<br class="none500">
                        힐스포레의 숙박시설입니다.<br class="none500">
                        행복한 그 순간을 기억할 수 있도록 힐스포레가 함께하겠습니다.  
                    </p>
                </div>
            </div>

            <div class="precont03_item">
                <div class="precont03_img"><img class="img100" src="/images/room/img02_06.jpg" alt=""></div>
                <div class="precont03_txt">
                    <h3 class="eng">오토캠핑장</h3>
                    <p>
                        자연과 어우러져 낭만 넘치는 캠핑을 즐겨보세요.<br class="none500">
                        캠핑사이트와, 글램핑텐트 & 침낭대여, 샤워실과 화장실, 바베큐장과 놀이터 편의점 등이 있습니다.<br class="none500">
                        밤에는 별이 가득한 하늘을 바라보며 캠프파이어를 즐겨보세요.<br class="none500">
                    </p>
                </div>
            </div>
        </div>
    </div> 
    <div class="AboutCon07 about_pc">
        <p>Enjoy the scenery in front of your eyes enjoying the activities.</p>
        <h1 class="eng">
        A Happy And Special moments<br>
        With Hillsforet.
        </h1>
        <span>
        푸르른 자연의 상쾌함, 문틈으로 들어오는 청량한 바람과 산의 풀 내음 <br>
        다양한 체험과 추억들이 당신을 기다리고 있습니다. <br>
        중부권 최대 특별한 테마의 이국적인 평안한 쉼터, 힐스포레.
        </span>
    </div>
    <div class="sp_boxx none1024 sp_boxx1">
        <span>Various Activities</span>
        <h2 class="eng">HILLSFORET SPECIAL</h2>
        <p class="spTitle_txt">
            Spend your time alone for you or<br>
            with your firends, right now here.
        </p>
    </div>
    <div class="precont04 block768 swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide precont03_item">
                <div class="precont03_img"><img class="img100" src="/images/room/img02_01.jpg" alt=""></div>
                <div class="precont03_txt">
                    <h3>독채풀빌라(복층)</h3>
                    <p>
                    프라이빗한 수영장을 이용할 수 있는<br>
                    힐스포레의 단체용 & 복층형 숙박시설입니다.<br class="none500">
                    은은하고 따뜻한 분위기의 공간에서 편안하게 쉬세요.
                    </p>
                </div>
            </div>

            <div class="swiper-slide precont03_item">
                <div class="precont03_img"><img class="img100" src="/images/room/img02_02.jpg" alt=""></div>
                <div class="precont03_txt">
                    <h3>독채풀빌라(단층)</h3>
                    <p>
                    프라이빗한 수영장을 이용할 수 있는 단층형 숙박시설 입니다.<br class="none500">
                    포근한 이불 속에서 문틈으로 들어오는 상쾌한 자연의 향기를 만끽하세요.<br class="none500">  
                    </p>
                </div>
            </div>

            <div class="swiper-slide precont03_item">
                <div class="precont03_img"><img class="img100" src="/images/room/img02_03.jpg" alt=""></div>
                <div class="precont03_txt">
                    <h3>큐브풀빌라</h3>
                    <p>
                    프라이빗한 수영장을 이용할 수 있는 큐브형 숙박시설 입니다.<br class="none500">
                    연인 혹은 가족과 행복하고 단란한 하루를 보내보세요.<br class="none500">
                    </p>
                </div>
            </div>

            <div class="swiper-slide precont03_item">
                <div class="precont03_img"><img class="img100" src="/images/room/img02_04.jpg" alt=""></div>
                <div class="precont03_txt">
                    <h3>레지던스1</h3>
                    <p>
                        포근한 이불 속에서 문틈으로 들어오는<br class="none500">
                        상쾌한 자연의 향기를 만끽하세요.<br class="none500">
                        행복한 그 순간을 기억할 수 있도록 힐스포레가 함께하겠습니다.   
                    </p>
                </div>
            </div>

            <div class="swiper-slide precont03_item">
                <div class="precont03_img"><img class="img100" src="/images/room/img02_05.jpg" alt=""></div>
                <div class="precont03_txt">
                    <h3>레지던스2</h3>
                    <p>
                    포근한 이불 속에서 문틈으로 들어오는<br class="none500">
                    상쾌한 자연의 향기를 만끽하세요.<br class="none500">
                    행복한 그 순간을 기억할 수 있도록 힐스포레가 함께하겠습니다.   
                    </p>
                </div>
            </div>

            <div class="swiper-slide precont03_item">
                <div class="precont03_img"><img class="img100" src="/images/room/img02_06.jpg" alt=""></div>
                <div class="precont03_txt">
                    <h3>오토캠핑장</h3>
                    <p>
                    자연과 어우러져 낭만 넘치는 캠핑을 즐겨보세요.<br class="none500">
                    캠핑사이트와, 글램핑텐트 & 침낭대여, 샤워실과 화장실, 바베큐장과 놀이터 편의점 등이 있습니다.<br class="none500">
                    밤에는 별이 가득한 하늘을 바라보며 캠프파이어를 즐겨보세요.<br class="none500">
                    </p>
                </div>
            </div>
        </div>
        <div class="pre-button-next"><img src="/images/common/arrow_next02.png" alt=""></div>
        <div class="pre-button-prev"><img src="/images/common/arrow_prev02.png" alt=""></div>
    </div>
    <div class="AboutCon07 about_mo">
        <p>Enjoy the scenery in front of your eyes enjoying the activities.</p>
        <h1 class="eng">
        A Happy And Relaxing break<br>
        With Hillsforet.
        </h1>
        <span>
        아름답고 평화로운 공주의 땅에<br>
		동화 속 푸른 바다의 지중해 산토리니를 그려보았습니다.<br>
		중부권 최대 특별한 테마의 이국적인 평안한 쉼터, 힐스포레에서 소중한 하루를 보내세요.<br><br>
        </span>
    </div>
    <?php $this -> load -> view('include/specialList'); ?>

    <div class="Cont04">
        <div class="con04_box">
            <h2 class="eng">Hillsforet</h2>
        </div>
    </div>
</div>
