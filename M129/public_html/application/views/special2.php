<main class="a_section01 section">
            
			</div>
			<div class="roomslide swiper-container">
			<div class="swiper-wrapper">
				<?php 
				for ($i = 1; $i <= $imgCount; $i++) {
					$imgNum = sprintf('%02d', $i);
				?>	
				<div class="swiper-slide" data-swiper-autoplay="3500">
					<img src="/images/special/<?php if ($is_mobile) echo 'm/'; ?>02_<?= $imgNum ?>.jpg" alt="" class="img_00">
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
	
	
			<section class="r_section03 section_fadeIn section delay03">
			<div class="left">
			   
					<div class="title">
						<h1 class="desc buri"><span class="pen">숙박을 완성해주는 <br>바베큐타임</span></h1>
						<p class="aritta">
							M-129에서 즐거운 시간과 편안한 휴식을<br>
							맛있는 만찬으로 완성시켜보세요.<br><br>
							바다가 보이는 테라스에서 즐기는 만찬으로<br>
							소중한 사람들과 따뜻한<b>#힐링타임</b>을 보내세요<br><br>
						</p>
						<p class="aritta" style="padding-bottom:10px">
						[바베큐]
						<ul class="aritta" style="font-size:16px;">
							<li>· 숯 + 그릴 제공</li>
							<li>· 이용시간 18:00~23:00/우천 시 전기그릴대여(1회당 20,000원)</li>
							<li>· 이용비용: 1회당 20,000원 / 1인 추가시 5,000원 / 현장결제</li>
						</ul>
						</p>
					</div>
			</div>
			<div class="right">
				<div class="img">
					<ul>
						<li><img src="/images/special/img02_01.jpg" alt=""></li>
						<li><img src="/images/special/img02_02.jpg" alt=""></li>
						<li><img src="/images/special/img02_03.jpg" alt=""></li>
						<li><img src="/images/special/img02_04.jpg" alt=""></li>
	
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
			
			<h1 class="hand">welcome to<br class="block900">we provide warm ocean-view.</h1>
			</div>	
		</section>