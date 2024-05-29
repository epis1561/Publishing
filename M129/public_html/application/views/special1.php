    <main class="a_section01 section">
            
        </div>
		<div class="roomslide swiper-container">
        <div class="swiper-wrapper">
            <?php 
            for ($i = 1; $i <= $imgCount; $i++) {
            	$imgNum = sprintf('%02d', $i);
            ?>	
            <div class="swiper-slide" data-swiper-autoplay="3500">
                <img src="/images/special/<?php if ($is_mobile) echo 'm/'; ?>01_<?= $imgNum ?>.jpg" alt="" class="img_00">
            </div>
            <?php } ?>
        </div>
        <ul class="roomslide_btn" style="bottom: 52%">
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


		<section class="r_section03 section delay03">
        <div class="left">
                <div class="title">
                    <h1 class="desc buri"><span class="pen">탁 트인 오션뷰에서 즐기는 물놀이</span></h1>
                    <p class="aritta">
                        M-129는 방문하신 분들께서<br>
                        오롯한 쉼을 가지셨으면 하는 마음으로<br>
                        바다가 보이는 개별수영장을 준비했어요<br><br>
                        
                        테라스 너머 바다가 보이는 수영장에서<br>
                        소중한 사람들과 <b>#물놀이</b>로 스트레스를 날려보세요<br><br>
                    </p>
                    <p class="aritta" style="padding-bottom:10px">
                    [개별수영장]
                    <ul class="aritta" style="font-size:16px;">
                        <li>· 찬물무료(미온수 불가)</li>
                        <li>· 입실시부터 퇴실시까지(매너타임22:00)</li>
                        <li>· 동절기 이용 불가</li>
                    </ul>
                    </p>
                </div>
        </div>
        <div class="right">
            <div class="img">
                <ul>
                    <li><img src="/images/special/img01_01.jpg" alt=""></li>
                    <li><img src="/images/special/img01_02.jpg" alt=""></li>
                    <li><img src="/images/special/img01_03.jpg" alt=""></li>
                    <li><img src="/images/special/img01_04.jpg" alt=""></li>

                </ul>
            </div>
        </div>
    </section>
        <div class="roomslide_typo" style="top: 20%">
            <!-- <span class="poppins"style="font-family:'Arita-dotum-Medium' !important;">Welcome to</span>
            <p class="buri"style="font-family:'Arita-dotum-Medium' !important;">Trajat</p> -->
        </div>
    </div>
    </main>
     <!-- <script type="text/javascript" src="/js/demo1.151408fb.js"></script> -->

    

    

	<section class="a_section03 section_fadeIn section delay03">
		<img src="/images/about/bg03.jpg" alt="" class="img_00 none900">
		<img src="/images/about/m/bg03.jpg" alt="" class="img_00 block900">
		<div class="txt">
		
			<h1 class="hand">They do welcome <br class="block900">those warm seasons.</h1>
		</div>	
	</section>