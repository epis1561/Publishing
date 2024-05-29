    <main class="a_section01 section">
            
        </div>
		<div class="roomslide swiper-container">
        <div class="swiper-wrapper">
            <?php 
            for ($i = 1; $i <= $imgCount; $i++) {
            	$imgNum = sprintf('%02d', $i);
            ?>	
            <div class="swiper-slide">
                <img src="/images/about/<?php if ($is_mobile) echo 'm/'; ?>01_<?= $imgNum ?>.jpg" alt="" class="img_00">
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
            <!-- <span class="poppins" style="font-family:'Arita-dotum-Medium'; !important">Welcome to</span>
            <p class="buri" style="font-family:'Arita-dotum-Medium' !important;">Trajat</p> -->
        </div>
    </div>
    </main>
     <!-- <script type="text/javascript" src="/js/demo1.151408fb.js"></script> -->

    <section class="a_section02 section delay02">
        <div class="title">
            <h1 class="desc buri"><span class="pen">오롯한, 우리의 공간</span></h1>
            <p class="aritta">
                드넓고 시원한 바람과 바다를 아우르는<br>
                푸르른 들판같이 펼쳐진 골프장과 가까운,<br>
                특별한 여행에 이야기를 더할 수 있는<br>
                M-129에 지친 몸과 마음을 힐링하세요<br>
                여러분의 향기로 가득차고 싶은 M-129입니다.
            </p>
        </div>
        <ul class="img">
            <li><img src="/images/about/img01.jpg" alt=""></li>
            <li><img src="/images/about/img02.jpg" alt=""></li>
            <li><img src="/images/about/img03.jpg" alt=""></li>
        </ul>
    </section>

    <section class="section03">
		<div class="inner none900 section_fadeIn section delay03">
			<div class="left">
				<h1 class="buri">M-129</h1>
				<div class="txt buri">
					<p>A space for you</p>
					<span>
						편안하고 아늑한 분위기, 당신에게 선물하는 휴식시간,<br>
						나에게 여유로운 쉼을 선물하세요.<br>
						인접한 골프장은 여러분의 '숙박'을 특별한 경험을 담은 '여행'으로 이끌어 줄거에요.
					</span>
					<!-- <a class="viewall" href="">
						<img src="/images/common/btn_more.png" alt="">
					</a> -->
				</div>
			</div>
			<div class="right">
				<div class="img">
					<ul class="img_list">
						<li>
							<img src="/images/about/img04_01.jpg" alt="" class="img_00">
						</li>
						<li>
							<img src="/images/about/img04_02.jpg" alt="" class="img_00">
						</li>
						<li>
							<img src="/images/about/img04_03.jpg" alt="" class="img_00">
						</li>
						<li>
							<img src="/images/about/img04_04.jpg" alt="" class="img_00">
						</li>
						<li>
							<img src="/images/about/img04_05.jpg" alt="" class="img_00">
						</li>
						<li>
							<img src="/images/about/img04_06.jpg" alt="" class="img_00">
						</li>
						<li>
							<img src="/images/about/img04_07.jpg" alt="" class="img_00">
						</li>
						<li>
							<img src="/images/about/img04_08.jpg" alt="" class="img_00">
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="inner_m block900 section_fadeIn section delay03">
			<div class="txt">
				<h1>
					
					M-129
				</h1>
				<p>A speace for you</p>
				<span>
					편안하고 아늑한 분위기, 당신에게 선물하는 휴식시간,<br>
					나에게 여유로운 쉼을 선물하세요.<br>
					인접한 골프장은 여러분의 '숙박'을 특별한 경험을 담은 '여행'으로 이끌어 줄거에요.
				</span>
			</div>
			<div class="img01">
				<img src="/images/main/img01.jpg" alt="">
				<!-- <div class="btn">
					<a href=""><img src="/images/common/btn_more.png" alt=""></a>
				</div> -->
			</div>
			<div class="img02">
				<img src="/images/main/img02.jpg" alt="">
			</div>
		</div>
	</section>

	<section class="a_section03 section_fadeIn section delay03">
		<img src="/images/about/bg03.jpg" alt="" class="img_00 none900">
		<img src="/images/about/m/bg03.jpg" alt="" class="img_00 block900">
		<div class="txt">
			<p class="poppins">Welcome !</p>
			<h1 class="hand">welcome to<br class="block900">we provide warm ocean-view.</h1>
		</div>	
	</section>