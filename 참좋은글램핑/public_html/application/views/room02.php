<link 
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="/css/swiper.css" type="text/css">
<link rel="stylesheet" href="/css/room.css" type="text/css">



<?php
include('header.php');
?>
<div class="mainslide">
	<div class="swiper-wrap">
		<div class="swiper4">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img src="/images/room02/01_01.jpg" alt="">
				</div>
				<div class="swiper-slide">
					<img src="/images/room02/01_02.jpg" alt="">
				</div>
				<div class="swiper-slide">
					<img src="/images/room02/01_03.jpg" alt="">
				</div>
				<div class="swiper-slide">
					<img src="/images/room02/01_04.jpg" alt="">
				</div>
				<div class="swiper-slide">
					<img src="/images/room02/01_05.jpg" alt="">
				</div>
				<div class="swiper-slide">
					<img src="/images/room02/01_06.jpg" alt="">
				</div>
				<!-- <div class="swiper-slide">
					<img src="/images/room02/01_07.jpg" alt="">
				</div> -->

			</div>
			<div class="swiper-pagination"></div>
		</div>
		<div class="swiper-button-prev mainbtn1"></div>
		<div class="swiper-button-next mainbtn2"></div>
	</div>
	<div class="scroll">
		<img src="/images/common/scroll.png" alt="">
	</div>
	<div class="title">
		<h1>ROOM02 다온</h1>
	</div>
</div>
<div class="mainslide-m">
		<div class="swiper-wrap">
			<div class="swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="/images/room02/m/01_01.jpg" alt="">
					</div>
					<div class="swiper-slide">
						<img src="/images/room02/m/01_02.jpg" alt="">
					</div>
					<div class="swiper-slide">
						<img src="/images/room02/m/01_03.jpg" alt="">
					</div>
					<div class="swiper-slide">
						<img src="/images/room02/m/01_04.jpg" alt="">
					</div>
					<div class="swiper-slide">
						<img src="/images/room02/m/01_05.jpg" alt="">
					</div>
					<div class="swiper-slide">
						<img src="/images/room02/m/01_06.jpg" alt="">
					</div>
					<!-- <div class="swiper-slide">
						<img src="/images/room02/m/01_07.jpg" alt="">
					</div> -->

				</div>
			</div>
			<div class="swiper-button-prev roombtn11"></div>
			<div class="swiper-button-next roombtn22"></div>
		</div>

		<div class="bg01">
			<img src="/images/main/bg01.png" alt="">
		</div>
	</div>
<div class="banner">
	<div class="imgbox">
		<img src="/images/room02/img01.jpg" alt="">
	</div>
	<div class="textbox">
		<h2>Room02 <br>다온</h2>
		<p>아름다운 자연에 놓여 몸과 마음이 쉬어 갈 수 있는 참! 좋은글램핑<br>소중한 사람들과 행복한 시간을 보내며 아름다운 추억을 가지고 가세요.
		</p>
	</div>
	<div class="title">
		<div class="titlewrap">
			<h2>ROOM</h2>
			<p>소중한 사람들과 함께하는 공간! <br>참! 좋은 글램핑</p>
		</div>
	</div>
</div>


<div class="banner-m">
    <div class="title1">
        <div class="flex">
        <p>소중한 사람들과 함께하는 공간! <br>참! 좋은 글램핑</p>
		<h2>ROOM</h2>
        </div>
    </div>


    <div class="title2">
        <h2>다온</h2>
        <p>아름다운 자연에 놓여 몸과 마음이 쉬어 갈 수 있는<br>참! 좋은글램핑에서 소중한 사람들과 행복한 시간을 보내며 아름다운 추억을 가지고 가세요.</p>
    </div>
    
    <div class="imgbox"><img src="/images/room02/img01.jpg" alt=""></div>
</div>

<div class="roomprice">
	<div class="decotext">
		<p>사랑하는 가족들과</p>
		<p style="color:#A1BC9C;">함께하는 공간</p>
		<p style="color:#103F2E;">참! 좋은 글램핑</p>
	</div>
	<div class="img02">
		<img src="/images/room02/img02.jpg" alt="">
	</div>
	<div class="pricewrap">
        <link rel="StyleSheet" href='/css/ddnayo.css' type="text/css" />
        <script type="text/javascript" id="ddnayoapi" src="//www.ddnayo.com/api/script.aspx?apiuser=test" charset="utf-8">
        </script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
        <div style="width: 100%; margin:0 auto;" id="room_daily_price1"></div>
        <script type="text/javascript">
            ddnayo.room.price.dailytable($("#room_daily_price1").get(0), {
                "id_hotel": "16306" /* 업소 코드 */ ,
                "id_room_type": "115458" /* 객실타입 코드 */ ,
                "su_day": 7 /* 출력일자 : 파라미터 생략시 기본 7일 최대 7일 */
            });
        </script>
            <div class="room_contents">
        <div class="price_guide">
            <!--p class="price_scroll_guide block1024">가격표를 좌우<i class="material-icons"></i>로 이동하세요.</p-->
        </div>
        <div id="room_des" style="display:none;"></div>
        <!--div id="room_daily_price2"></div>
                        <script>
                            ddnayo.room.price.dailytable($("#room_daily_price2").get(0), {
                                "id_hotel": "13870" /* 업소 코드 */ ,
                                "id_room_type": "98136" /* 객실타입 코드 */ ,
                                "su_day": 5 /* 출력일자 : 파라미터 생략시 기본 7일 최대 7일 */
                            });
                        </script-->
        <div class="roomInfoWrap" style="margin-top:20px;">
            <div class="roomInfo_con01">
                <dl class="roomInfo">
                    <dt><img src="/images/room/roomInfo_01.svg"></dt>
                    <dd>
                        <div class="roomInfo_text type">
                            <div class="title">Type</div>
                            <div class="text">
                                핀토스형글램핑(화장실/샤워실, 더블침대, 호텔식 침구)<br>
                                16평<br>
                                단층,테라스바베큐가능
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
                                기준 2명 / 최대 4명 <br>
								기준인원 초과시 추가요금 발생<br>
                                인원추가요금 1인당(1박당) 20,000원 / 현장결제
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
							침대,냉장고,냉온풍기,전자레인지,핫플레이트,주방용품,블루트스 스피커,와이파이,드라이기,커피포트,커피,티,호텔식어메니티
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
        <div style="display: none; " id="room_des"></div>
    </div>
</div>
</div>


<div class="thirdblock">
		<div class="bg05">
			<img src="/images/main/bg05.png" alt="">
		</div>
		<!-- <div class="bg04">
			<img src="/images/main/bg04.png" alt="">
		</div> -->
		<div class="inner">
			<div class="title">
				<img src="/images/common/textdeco1.png" alt="">
				<h1>ROOMS</h1>
			</div>
			<div class="title-m">
				<img src="/images/common/m/textdeco1.png" alt="">
				<h1>ROOMS</h1>
			</div>
			<?php
include('roompre.php');
?>

		</div>
	</div>
    <div class="underbox">
        <div class="bg11">
            <img src="/images/main/bg11.png" alt="">
        </div>
        <div class="underline">
        </div>
    </div>
    <?php
include('footer.php');
?>
<style type="text/css">
	.roomInfo_con01 {
		display: table-cell;
		width: 60%;
		vertical-align: top;
		padding-left: 10%;
	}

	.roomInfo_con02 {
		display: table-cell;
		width: 40%;
		vertical-align: top;
	}

	.roomInfo {
		margin-bottom: 30px;
		display: flex;
	}

	.roomInfo:after {
		content: "";
		display: block;
		clear: both;
	}

	.roomInfo>dt {
		float: left;
	}

	.roomInfo>dt:after {
		content: "";
		margin: 0 20px;
		height: 35px;
		line-height: 35px;
		border-right: 2px dotted #333;
		vertical-align: top;
	}

	.roomInfo>dd {
		float: left;
		width: calc(100% - 100px);
		margin: 0;
	}

	.roomInfo_text {
		color: #000;
	}

	.roomInfo_text02 {
		display: inline-block;
		margin-right: 30px;
	}

	.roomInfo_text .title {
		font-size: 1em;
		line-height: 1.5em;
		text-transform: uppercase;
		font-weight: 600;
		margin-bottom: 0.5em;
	}

	.roomInfo_text .text {
		font-size: 1em;
		line-height: 1.6em;
	}

	.roomInfoWrap {
		max-width: 1200px;
		margin: 0 auto;
		width: 100%;
		background-color: #FBFBFB;
	}
	.room_contents{
		background-color: #FBFBFB;
	}
	@media (max-width: 1024px) {
		.roomInfo_con01 {
			padding-left: 5%;
		}
	}

	@media (max-width: 900px) {
		.roomInfo_con01 {
			width: 90%;
			display: block;
			margin: 0 auto;
			padding-left: 0;
		}

		.roomInfo_con02 {
			width: 90%;
			display: block;
			margin: 5% auto;
		}
	}

	@media (max-width: 390px) {
		.roomInfo>dd {
			width: calc(100% - 5px);
		}
	}

</style>

<script src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
<script src="/js/main.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
