
<div class="RoomCon01">
    <div class="roomTypo">
        <? if($cate != "06"){?>
        <h1 class="eng">view rooms</h1>
        <? } ?>
        <? if($cate == "06"){?>
        <h1 class="eng">준비중입니다.</h1>
        <? } ?>
    </div>
    <div class="swiper-container room-swiper">
        <div class="swiper-wrapper">
        	<?php 
          for ($i = 1; $i <= $imgCount; $i++) {
          	$imgNum = sprintf('%02d', $i);
          ?>	
          <div class="swiper-slide"><img src="/images/room<?= $subNum ?>/01_<?= $imgNum ?>.jpg" alt="" class="img100 M_100"></div>
        	<?php } ?>
        </div>
        <div class="swiper-button-next"><img src="/images/common/arrow_next.png" alt=""></div>
        <div class="swiper-button-prev"><img src="/images/common/arrow_prev.png" alt=""></div>
        <div class="room_swiper-pagination"></div>
    </div>
    <!-- main Swiper -->
    <script>
        var swiper = new Swiper(".room-swiper", {
            loop: true,
            effect: "fade",
            autoplay:{
                delay:3000,
                disableOnInteraction:false
            },
            pagination: {
            el: ".room_swiper-pagination",
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
    <p>hillsforet rooms</p>
    <? if($cate == "01"){?>
    <h3 class="eng">hillsforet<br>독채풀빌라(복층)</h3>
    <? } ?>
    <? if($cate == "02"){?>
    <h3 class="eng">hillsforet<br>독채풀빌라(단층)</h3>
    <? } ?>
    <? if($cate == "03"){?>
    <h3 class="eng">hillsforet<br>큐브풀빌라</h3>
    <? } ?>
    <? if($cate == "04"){?>
    <h3 class="eng">hillsforet<br>비즈니스형<br><span style="font-size:20px;">(객실 내 취사 불가)</span></h3>
    <? } ?>
    <? if($cate == "05"){?>
    <h3 class="eng">hillsforet<br>패밀리형<br><span style="font-size:20px;">(객실 내 취사 불가)</span></h3>
    <? } ?>
    <? if($cate == "06"){?>
    <h3 class="eng">hillsforet<br>오토캠핑장</h3>
    <? } ?>
    <span>
        Enjoy the scenery in front of your eyes enjoying the morning sun.<br>
        The freshness of the green nature. take a rest in here, hillsforet.
    </span>
</div>

<div class="subCon subCon02">
    <script type="text/javascript" id="ddnayoapi" src="https://www.ddnayo.com/api/script.aspx?apiuser=gogopeople" charset="utf-8"></script>
        <div class="room_contents">
        <? if($cate == "01" || $cate == "02" || $cate == "03"){?>   
             <div class="price_guide">
                <p class="price_scroll_guide block1024">가격표를 좌우<i class="material-icons"></i>로 이동하세요.</p>
            </div>
            <div id="room_des" style="display:none;"></div>
            <div id="room_daily_price2"></div>						
        <script>
            ddnayo.room.price.dailytable($("#room_daily_price2").get(0), {
                "id_hotel": "16344" /* 업소 코드 */ ,
                "id_room": "<?= $roomId ?>" /* 객실타입 코드 */ ,
                "su_day": 5 /* 출력일자 : 파라미터 생략시 기본 7일 최대 7일 */
            });
        </script>
        <? } ?>
        <? if($cate == "01" || $cate == "02" || $cate == "03" || $cate == "04" || $cate == "05"){?>  		
    <div class="roomInfoWrap" style="margin-top:20px;">
        <div class="roomInfo_con01">
            <dl class="roomInfo">
                <dt><img src="/images/room/roomInfo_01.svg"></dt>
                <dd>
                    <div class="roomInfo_text type">
                        <div class="title">Type</div>
                        <div class="text">
                            
                        </div>
                    </div>
                </dd>
            </dl>
            <dl class="roomInfo">
                <dt><img src="/images/room/roomInfo_02.svg"></dt>
                <dd>
                    <div class="roomInfo_text">
                        <div class="title">guests</div>
                        <div class="text">
                            
                        </div>
                    </div>
                </dd>
            </dl>						
        </div>
        <div class="roomInfo_con02">
            <dl class="roomInfo">
                <dt><img src="/images/room/roomInfo_03.svg"></dt>
                <dd>
                    <div class="roomInfo_text">
                        <div class="title">amenities</div>
                        <div class="text">
                            
                        </div>
                    </div>
                </dd>
            </dl>
            <dl class="roomInfo">
                <dt><img src="/images/room/roomInfo_04.svg"></dt>
                <dd>
                    <div class="roomInfo_text roomInfo_text02">
                        <div class="title">check in</div>
                        <div class="text">
                            오후 3시 이후
                        </div>
                    </div>
                    <div class="roomInfo_text roomInfo_text02">
                        <div class="title">check out</div>
                        <div class="text">
                            오전 11시
                        </div>
                    </div>
                </dd>
            </dl>
        </div>
    </div>
    <? } ?>
    <div style="display: none; " id="room_des"></div>
    <script type="text/javascript">
        ddnayo.room.info($("#room_des").get(0), {
            "id_hotel": "16344"		/* 업소 코드 */
            , "id_room_type": "<?= $typeId ?>"	/* 객실타입 코드 */
        });
            $(window).on('load', function () {
                setTimeout(function () {
                    var infoList = $('.room_data').find('li');
                    var infoArr = [];
                    infoList.each(function (i) {
                        var $this = $(this);
                        var value = $this.find('.data').html();
                        infoArr.push(value);
                    });
                    $('.roomInfo_text').eq(0).find('.text').append(infoArr[0]);
                    $('.roomInfo_text').eq(1).find('.text').append(infoArr[1]);
                    $('.roomInfo_text').eq(2).find('.text').append(infoArr[2]);

                }, 100);
            });
    </script>
    <style type="text/css">
        .roomInfo_con01 { display:table-cell; width:60%; vertical-align:top; padding-left: 10%; }
        .roomInfo_con02 { display:table-cell; width:40%; vertical-align:top;}
        .roomInfo { margin-bottom:30px;}
        .roomInfo:after {content:"";display:block;clear:both;}
        .roomInfo > dt { float:left;}
        .roomInfo > dt:after {content:""; margin:0 20px; height:35px; line-height:35px; border-right:2px dotted #333; vertical-align:top;}
        .roomInfo > dd { float:left; width:calc(100% - 100px);}
        .roomInfo_text { color:#000; }
        .roomInfo_text02 { display:inline-block; margin-right:30px;}
        .roomInfo_text .title { font-size:1em; line-height:1.5em; text-transform:uppercase; font-weight:600; margin-bottom:0.5em; }
        .roomInfo_text .text { font-size:1em; line-height:1.6em; }
        .roomInfoWrap { max-width: 1200px; margin: 0 auto; width :100%; }

        @media (max-width: 1024px) {
            .roomInfo_con01 { padding-left: 5%; }
        }
        @media (max-width: 900px) {
            .roomInfo_con01 { width: 90%; display: block; margin: 0 auto; padding-left: 0; }
            .roomInfo_con02 { width: 90%; display: block; margin: 5% auto; }
        }
        @media (max-width: 390px) {
            .roomInfo > dd {
                width: calc(100% - 5px);
            }
        }
    </style>
</div>
<? if($cate == "01" || $cate == "02" || $cate == "03" || $cate == "04" || $cate == "05"){?> 
<div class="RoomCon03">

    <div class="logo">
        <img src="/images/common/logo_b.png" alt="" class="img00">
    </div>
</div>

<div class="RoomCon04">

    <div class="img">
       <div class="img01" style="background: url('/images/room<?= $subNum ?>/img02.jpg') no-repeat center center; background-size: cover;" ></div>
       <div class="img02" style="background: url('/images/room<?= $subNum ?>/img03.jpg') no-repeat center center; background-size: cover;"></div>
       <div class="img03" style="background: url('/images/room<?= $subNum ?>/img04.jpg') no-repeat center center; background-size: cover;"></div>
    </div>
</div>
<? } ?>





<div class="RoomCon08">
    <p>Enjoy the scenery in front of your eyes enjoying the morning sun.</p>
    <h1 class="eng">
        A Happy And Relaxing break<br>
        With Hillsforet
    </h1>
    <span>
        푸르른 자연의 상쾌함, 문틈으로 들어오는 청량한 바람과 산의 풀 내음 <br>
        고요하고 아름다운 풍경이 당신의 마음을 사로잡을 것입니다. <br>
        즐거움과 편안함이 공존하는 힐스포레에서 소중한 하루를 보내세요.
    </span>
</div>
<? if($cate == "01" || $cate == "02" || $cate == "03" || $cate == "04" || $cate == "05"){?> 
<div class="RoomCon09">
    <div class="RoomCon09_01">
        <img src="/images/room<?= $subNum ?>/img09.jpg" alt="" class="img00">
    </div>
    <div class="RoomCon09_02">
        <img src="/images/room<?= $subNum ?>/img10.jpg" alt="" class="img00">
    </div>
</div>
<? } ?>


