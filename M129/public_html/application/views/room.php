    <?php
    switch ($roomNum) {
        case "01":
            $title = "M101호";
            $roomType = "73544";
        break;
        case "02":
            $title = "M102호";
            $roomType = "73545";
        break;
        case "03":
            $title = "M103호";
            $roomType = "73546";
        break;
        case "04":
            $title = "M104호";
            $roomType = "73547";
        break;
        case "05":
            $title = "M105호";
            $roomType = "73548";
        break;
        case "06":
            $title = "M106호";
            $roomType = "73549";
        break;
        case "07":
            $title = "M107호";
            $roomType = "73550";
        break;
    }
    ?>

    <div class="roomslide swiper-container">
        <div class="swiper-wrapper">
            <?php 
            for ($i = 1; $i <= $imgCount; $i++) {
            	$imgNum = sprintf('%02d', $i);
            ?>	
            <div class="swiper-slide"data-swiper-autoplay="3500">
                <img src="/images/room<?= $roomNum ?>/<?php if ($is_mobile) echo 'm/'; ?>01_<?= $imgNum ?>.jpg" alt="" class="img_00">
            </div>
            <?php } ?>
        </div>
        <ul class="roomslide_btn">
            <li class="current">
				<div class="swiper-pagination room-pagination"></div>
			</li>
			<li class="move">
				<div class="room_prev">
					<i>
						<img src="/images/common/btn_prev_r.png" alt="">
					</i>
				</div>
				<div class="room_next">
					<i>
						<img src="/images/common/btn_next_r.png" alt="">
					</i>
				</div>
			</li>
        </ul>

        <div class="roomslide_typo">
            <!-- <span class="poppins">view</span>
            <p class="buri" style="font-family:'Arita-dotum-Medium' !important;"><?= $title ?></p> -->
        </div>
    </div>

    <section class="r_section02 section_fadeIn section delay02">
		<div class="title">
			<h1 class="buri"><?= $title ?></h1>
			<!-- <p class="poppins">
				I invented my life by taking for granted that everything <br>
				I did not like would have an opposite, which I would like.
			</p> -->
		</div>

        <div class="rm_init_info">
            
            <div>
                <div class="roomInfoWrap" style="margin-top:20px;">
                    <div class="roomInfo_con01">
                        <dl class="roomInfo">
                            <dt><img src="/images/room/roomInfo_01.svg"></dt>
                            <dd>
                                <div class="roomInfo_text room">
                                    <div class="title poppins"><span class="title1"><?= $title ?></span></div>
                                    <div class="text">
                                            <ul>
                                            <li><b>객실구조</b></li>
                                            <? if ($roomNum == "01" || $roomNum == "02") { ?>
                                                <li>객실넓이: 15평(약 50㎡)</li>
                                                <li>원룸형(퀸1) + 미니풀장 + 온수족욕탕 + 제트스파 + 화장실 + 개별테라스(바비큐)</li>
                                                <li><strong style="color:red;">※하절기 수영장 사용 불가</strong></li>
                                            <? } ?>

                                            <? if ($roomNum == "03" || $roomNum == "04" || $roomNum == "05" || $roomNum == "06" || $roomNum == "07") { ?>
                                                <li>객실넓이: 15평(약 50㎡)</li>
                                                <li>원룸형(퀸1) + 제트스파 + 화장실 + 개별테라스(바비큐)</li>
                                            <? } ?>
                                            </ul>
                                            
                                           
                                    </div>
                                    <span class="data"></span><br>
                                    <span class="data"></span><br>
                                    <span class="data"></span>
                                </div>
                            </dd>
                        </dl>
                     
                            <dl class="roomInfo">
                                <dt><img src="/images/room/roomInfo_02.svg"></dt>
                                <dd>
                                    <div class="roomInfo_text">
                                        <div class="title poppins">guests</div>
                                        <div class="text">
                                            기준 2인, 최대 4인까지 입실 가능<br>
                                            영유아 기준인원 포함 
                                            <div class="aritta">※ 각 객실마다 정해진 최대 수용인원(영유아포함) 초과를 엄격히 금하며, 예약된 인원외에는 펜션에 입실할 수 없습니다.</div>
                                        </div>
                                    </div>
                                </dd>
                            </dl>	
        
                        <dl class="roomInfo">
                            <dt><img src="/images/room/roomInfo_04.svg"></dt>
                            <dd>
                                <div class="roomInfo_text roomInfo_text02">
                                    <div class="title poppins">check in</div>
                                    <div class="text">
                                        PM 15:00
                                    </div>
                                </div>
                                <div class="roomInfo_text roomInfo_text02">
                                    <div class="title poppins">check out</div>
                                    <div class="text">
                                        AM 11:00
                                    </div>
                                </div>
                                <div class="aritta">※ 21:00 이후의 입실은 사전연락 필수</div>
                               
                            </dd>
                        </dl>					
                    </div>
                    <div class="roomInfo_con02">
                        <dl class="roomInfo">
                            <dt><img src="/images/room/roomInfo_03.svg"></dt>
                            <dd>
                                <div class="roomInfo_text">
                                    <div class="title poppins">amenities</div>
                                </div>
                            </dd>
                        </dl>
                            <table class="room_ame">
                            <tr>
                                <th>구비시설</th>
                                <td>
                                TV,침대,식탁,에어컨,냉장고,드라이기,취사도구,전기밥솥,전자레인지,비데,핫플레이트,스파시설,욕실용품,객실샤워실,인터넷,일산화탄소 경보기,화재 경보기,난방,소화기,전기포트
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
	</section>

    <section class="r_section03 section_fadeIn section delay03">
        <div class="left">
           
                <div class="title">
                    <h1 class="desc buri"><span class="pen">따뜻한 남해의 특별한 감성</span></h1>
                    <p class="aritta">
                        M-129에는 방문하신 분들께서<br>
                        잊지못할 추억을 가지셨으면 하는 마음으로 정성껏<br>
                        준비한 것들이 담겨 있어요.<br><br>
                        
                        편안하고 깔끔한 객실에서<br>
                        휴식을 취하며 <b>#오션뷰</b>를 즐길 수 있어요<br><br>

                        바다가 보이는 수영장에서<br>
                        가족, 연인과 <b>#물놀이</b>로 스트레스를 날려보세요<br><br>

                        바다를 품고있는 M-129에서 평소에 갖고 있던<br>
                        포근하고 행복한 <b>#힐링타임</b>을 가진 뒤,<br><br>

                        하루의 시작과 함께 떠오르는 <b>#아름다운 일출</b>이<br>
                        여러분을 반기고 있을거에요<br>
                    </p>
                </div>
        </div>
        <div class="right">
            <div class="img">
                <ul>
                    <li><img src="/images/room<?= $roomNum ?>/img01.jpg" alt=""></li>
                    <li><img src="/images/room<?= $roomNum ?>/img02.jpg" alt=""></li>
                    <li><img src="/images/room<?= $roomNum ?>/img03.jpg" alt=""></li>
                    <li><img src="/images/room<?= $roomNum ?>/img04.jpg" alt=""></li>

                </ul>
            </div>
        </div>
    </section>

    <section class="r_section04 section_fadeIn section delay04">
        <img src="/images/room<?= $roomNum ?>/img05.jpg" alt="" class="img_00 none900">
        <img src="/images/room<?= $roomNum ?>/m/img05.jpg" alt="" class="img_00 block900">
        <div class="logo section_fadeIn section delay05"><img src="/images/room/logo.png" alt="" class="img_00"></div>
        <div class="txt section_fadeIn section delay06">
            <p class="buri">
                일상에서 벗어나<br>
                &emsp;&emsp;&emsp;자연과 함께<br>
                편안한 휴식처가<br>
                &emsp;되어주는 곳
            </p>
        </div>
    </section>


<!-- <div style="display:none;" id="room_des"></div>
<div style="display:none;" id="room_daily_price2"></div>
<script room="text/javascript">
    ddnayo.room.info($("#room_des").get(0), {
        "id_hotel": "14143"		/* 업소 코드 */
        , "id_room_type": "<?= $roomType; ?>"	/* 객실타입 코드 */
    });

    ddnayo.room.price.dailytable($("#room_daily_price2").get(0), {
        "id_hotel": "14143"	            /* 업소 코드 */
        , "id_room_type": "<?= $roomType; ?>"	    /* 객실타입 코드 */
        , "su_day": 5			    /* 출력일자 : 파라미터 생략시 기본 7일 최대 7일 */
    });
</script> -->



<script>
  setTimeout(function(){
    get_info();
  },800);
  
  function get_info() {
    const rm_init_info_data = document.querySelectorAll(".rm_init_info span.data");
    const room_data = document.querySelectorAll(".room_data li .data");
    const room_data01 = room_data[0].querySelectorAll("p");
    const rm_persons_info = document.querySelectorAll(".rm_persons_info .data");
    const person_limit = document.querySelector(".person_limit");
    const rm_faci_info = document.querySelector(".rm_faci_info .data");
    const room_tit = document.querySelector(".room_tit");
    const rm_title = document.querySelector(".rm_title");

    rm_init_info_data[0].innerHTML = room_data01[1].innerText;
    rm_init_info_data[1].innerHTML = "원룸형," + room_data01[0].innerText;
    rm_init_info_data[2].innerHTML = room_data01[2].innerText;
    rm_init_info_data[3].innerHTML = room_data[3].innerText;
    rm_persons_info[0].innerHTML = person_limit.childNodes[0].data.split("/")[0];
    rm_persons_info[1].innerHTML = person_limit.childNodes[0].data.split("/")[1];
    rm_faci_info.innerHTML = room_data[2].innerText; 

    rm_title.innerHTML = room_tit.innerHTML.split("(")[0];
  }

</script>


    <?php $this->load->view('include/roomlist'); ?>