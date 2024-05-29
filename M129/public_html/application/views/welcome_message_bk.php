
	<section class="section01 section_fadeIn section">
	<div class="scroll_box">
			<span></span>
		</div>
		<div class="main_slide swiper-container">
            <div class="swiper-wrapper">  
				<?php 
				$title1 = array("M-129", "M-129", "M-129", "M-129", "M-129", "M-129", "M-129");
				$title2 = array("Scenery", "Scenery", "Private Pool", "Living Room", "Living Room", "landscape","landscape");
				for ($i = 1; $i <= $imgCount; $i++) {
					$imgNum = sprintf('%02d', $i);
					$j = $i - 1;
				?>
				<div class="swiper-slide" data-swiper-slide-index="<?= $j ?>" data-swiper-autoplay="3500">
                    <img src="/images/main/<? if ($is_mobile) echo "m/"; ?>01_<?= $imgNum ?>.jpg" alt="">
					<div class="txt">
						<span>M-129 <!--?= $title1[$j] ?--> <!--img src="images/common/title_logo.png" alt="" style="width:15px;height:18px"--></span>
						<p><?= $title2[$j] ?></p>
					</div>
                </div> 
				<?php } ?>
            </div>
        </div>
		<ul class="main_button">
			<li class="scroll">
				<div class="swiper-scrollbar main-scrollbar"></div>
			</li>
			<li class="current">
				<div class="swiper-pagination main-pagination buri"></div>
			</li>
			<li class="move">
				<div class="visual_prev">
					<i>
						<img src="/images/common/btn_prev.png" al="">
					</i>
				</div>
				<div class="visual_next">
					<i>
						<img src="/images/common/btn_next.png" alt="">
					</i>
				</div>
			</li>
		</ul>
	</section>

	<?php $this->load->view('include/roomlist'); ?>

	<section class="section03">
		<div class="inner none900 section_fadeIn section delay03">
			<div class="left">
				<h1 class="buri buri2">M-129</h1>
				<div class="txt buri">
					<p>A space for you</p>
					<span>
						편안하고 아늑한 분위기, 당신에게 선물하는 휴식시간,<br>
						나에게 드넓은 바다를 선물하세요.
					</span>
					<a class="viewall" href="/about">
						<img src="/images/common/btn_more.png" alt="">
					</a>
				</div>
			</div>
			<div class="right">
				<div class="img">
					<ul class="img_list">
						<?php
						for ($i = 1; $i <= $mImgCount; $i++) {
							$imgNum = sprintf('%02d', $i);
						?>
						<li>
							<img src="/images/main/img01_<?= $imgNum ?>.jpg" alt="" class="img_00">
						</li>
						<?php } ?>						
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
				나에게 드넓은 바다를 선물하세요.
				</span>
			</div>
			<div class="img01">
				<img src="/images/main/img01.jpg" alt="">
				<div class="btn">
					<a href="/about"><img src="/images/common/btn_more.png" alt=""></a>
				</div>
			</div>
			<div class="img02">
				<img src="/images/main/img02.jpg" alt="">
			</div>
		</div>
	</section>

	<div class="trigger" id="trigger1"></div>
	<section class="section04 none1200">
		<div class="inner">
			 <!-- <img class="zoom" id="animate1" src="/images/common/bg_logo.png">  -->
			<div class="inner_img">
				<img class="fixed_img img_00" src="/images/common/bg_img.jpg" alt="">
				<p class="img_txt buri" id="animate2">
					모든 향기를 담고 싶어 시작했어요<br>
					따뜻하고 화목한 가족의 향기를,<br>
					때로는 사랑스런 연인들의 향기를<br>
					바다를 품고 싱그러운 추억을 담고 있는 이 곳은 바로<br>
					'M-129' 입니다<br><br>
					<span> M-129 </span>
				</p>
			</div>
		</div>
		<div class="trigger" id="trigger2"></div>
	</section>

	<a class="a_section03 section_fadeIn section delay03 block900" href="https://booking.ddnayo.com/?accommodationId=2099" target="_blank">
		<img src="/images/about/m/bg03.jpg" alt="" class="img_00">
		<div class="txt">
			<p class="poppins">Welcome !</p>
			<h1 class="hand">Booking Now</h1>
		</div>	
	</a>

	<?php
    $sql = "SELECT * FROM `popup` WHERE `is_open` = '1' ORDER BY `ordering` ASC, `idx` DESC";
    $data['popups'] = $this -> data_model -> getList($sql, 'DB');
    $sql = "SELECT * FROM `slide` WHERE `is_open` = '1' ORDER BY `ordering` ASC, `idx` DESC";
    $data['slides'] = $this -> data_model -> getList($sql, 'DB');
    $data['is_mobile'] = $is_mobile;
    $this -> load -> view('include/popup', $data);
    ?>

</script>

