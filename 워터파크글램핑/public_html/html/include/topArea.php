<?

	if ($folderName=='room') {
		if ($mobile) $directory = '../html/images/'.$folderName.$subNum.'/m/';
		else $directory = '../html/images/'.$folderName.$subNum.'/';
		$files = glob($directory . '01_*.jpg');
	} elseif ($folderName=='epilogue' || $folderName=='landscape') {
		if ($mobile) $directory = '../html/images/'.$folderName.'/m/';
		else $directory = '../html/images/'.$folderName.'/';
		$files = glob($directory . '01_*.jpg');
	} else {
		if ($mobile) $directory = '../html/images/'.$folderName.'/m/';
		else $directory = '../html/images/'.$folderName.'/';
		$files = glob($directory . $subNum .'_*.jpg');
	}
	if ($pageNum=='200') {
		if ($mobile) $directory = '../html/images/'.$folderName.'/m/';
		else $directory = '../html/images/'.$folderName.'/';
		$files = glob($directory . '01_*.jpg');
	}
	if ( $files !== false ) {
		$imgNum01 = count( $files );
	}
?>
<script type="text/javascript" src="../html/js/lightslider.js"></script>
<?php if( $topArea != 'roomPre') {?>
<script>
	$(document).ready(function() {
		var slider = $('.topArea .lightslider').lightSlider({
			gallery:false,
			controls:true,
			pager:false,
			mode: 'fade',
			easing:'easeInExpo',
			item:1,
			slideMargin:0,
			galleryMargin: 0,
			//verticalHeight:"900",
			pause:4000,
			speed:800,
			auto:true,
			loop:true,
			prevHtml:'<img src="/html/images/common/arrow_prev02.png">',
			nextHtml:'<img src="/html/images/common/arrow_next02.png">',
			onBeforeSlide: function (el) {
				if (el.getCurrentSlideCount().length == 3) {
					var cnt = el.getCurrentSlideCount().replace(/(^0+)/, "");
				}
				else {
					var cnt = el.getCurrentSlideCount();
				}
				$('.topArea .current').text(cnt);
			}
		});
	});
</script>
<?php } ?>

<?php if( $topArea == 'roomPre') {?>
<script>
	$(document).ready(function() {
		var slider01 = $('.room_pre .lightslider01').lightSlider({
			gallery:false,
			controls:true,
			pager:false,
			mode: 'fade',
			easing:'easeInExpo',
			item:1,
			slideMargin:0,
			galleryMargin: 0,
			//verticalHeight:"900",
			pause:4000,
			speed:800,
			auto:true,
			loop:true,
			prevHtml:'<img src="/html/images/common/arrow_prev02.png">',
			nextHtml:'<img src="/html/images/common/arrow_next02.png">',
			onBeforeSlide: function (el) {
				if (el.getCurrentSlideCount().length == 3) {
					var cnt = el.getCurrentSlideCount().replace(/(^0+)/, "");
				}
				else {
					var cnt = el.getCurrentSlideCount();
				}
				$('.topArea .current').text(cnt);
			}
		});

		/*var slider02 = $('.room_pre .lightslider02').lightSlider({
			gallery:false,
			controls:false,
			pager:true,
			mode: 'fade',
			easing:'cubic-bezier(0.694, 0, 0.335, 1)',
			item:1,
			slideMargin:0,
			galleryMargin: 0,
			//verticalHeight:"900",
			pause:4000,
			speed:1000,
			auto:true,
			loop:true
			//onSliderLoad: function() { $( ".lSPager" ).wrap( "<div class='pager'></div>" ); }
		});*/
	});
</script>
<?php } ?>

	<?php if( $topArea == roomPre) {?>
			<div class="topArea topArea01 section">
				<div class="room_pre ">
					<div class="mainLogo"><img src="/html/images/common/typo_pre.png" alt=""></div>
					<ul class="lightslider01 lightslider">
					<?
							for($i = 1; $i <= $imgNum01 ; $i++) {
								$num = sprintf('%02d',$i);
								if($mobile){
									echo "<li style='background:url(./images/".$folderName."/m/01_".$num.".jpg)'></li>";
								}else{
									echo "<li style='background:url(./images/".$folderName."/01_".$num.".jpg)'></li>";
								}
							}
						?>
					</ul>
				</div>
				<a href="#mainbar" class="btn_scroll btn_dir"><img src="/html/images/common/wheel.png" alt=""></a>
			</div>
		<?php } ?>

	<?php if( $topArea == topArea) {?>
			<div class="topArea topArea01 section">
				<div class="topTypo">
				RESERVATION<br>
				제천워터파크캠핑랜드
					
				</div>
				<ul class="lightslider">
					<?
						for($i = 1 ; $i <= $imgNum01 ; $i++) {
							$num = sprintf('%02d',$i);
							if($mobile){
								echo "<li style='background:url(./images/".$folderName."/m/".$subNum."_".$num.".jpg)'></li>";
							}else{
								echo "<li style='background:url(./images/".$folderName."/".$subNum."_".$num.".jpg)'></li>";
							}
						}
					?>
				</ul>
				<a href="#contents" class="btn_scroll btn_dir"><img src="/html/images/common/wheel.png" alt=""></a>
			</div>
		<?php } ?>

		<?php if( $topArea == topArea_sub) {?>
			<div class="topArea topArea01 section">
				<h1><?=$pageTitle01?><br><span><?=$pageTitle02?></span></h1>
				<!--div class="mainLogo"><img src="/html/images/common/logo_white.png" alt=""></div-->
				<ul class="lightslider">
					<?
						for($i = 1 ; $i <= $imgNum01 ; $i++) {
							$num = sprintf('%02d',$i);
							if($mobile){
								echo "<li style='background:url(./images/".$folderName."/m/".$subNum."_".$num.".jpg)'></li>";
							}else{
								echo "<li style='background:url(./images/".$folderName."/".$subNum."_".$num.".jpg)'></li>";
							}
						}
					?>
				</ul>
				<a href="#contents" class="btn_scroll btn_dir"><img src="/html/images/common/wheel.png" alt=""></a>
			</div>
		<?php } ?>

		<?php if( $topArea == topArea_sub01) {?>
			<div class="topArea topArea01 section">
				<div class="mainLogo"><img src="/html/images/common/logo_white.png" alt=""></div>
				<ul class="lightslider">
					<?
						for($i = 1 ; $i <= $imgNum01 ; $i++) {
							$num = sprintf('%02d',$i);
							if($mobile){
								echo "<li style='background:url(./images/".$folderName."/m/01_".$num.".jpg)'></li>";
							}else{
								echo "<li style='background:url(./images/".$folderName."/01_".$num.".jpg)'></li>";
							}
						}
					?>
				</ul>
				<a href="#contents" class="btn_scroll btn_dir"><img src="/html/images/common/wheel.png" alt=""></a>
			</div>
		<?php } ?>
		
		<?php if( $topArea == room) {?>
			<div class="topArea topArea01 section">
				 <div class="topTypo">
					<div class="topTypo01">제천워터파크캠핑랜드</div>
					<div class="topTypo02"><?=$pageText01?></div>
				</div> 
				<!--div class="mainLogo"><img src="/html/images/common/logo_white.png.png" alt=""></div-->
				<div class="lightslider">
					<?
						for($i = 1 ; $i <= $imgNum01 ; $i++) {
							$num = sprintf('%02d',$i);
							if($mobile){
								echo "<img src='./images/".$folderName."".$subNum."/m/01_".$num.".jpg' alt=''>";
							}else{
								echo "<img src='./images/".$folderName."".$subNum."/01_".$num.".jpg' alt=''>";
							}
						}
					?>
				</div>
				<a href="#contents" class="btn_scroll btn_dir"><img src="/html/images/common/wheel.png" alt=""></a>
			</div>
		<?php } ?>

		<?php if( $topArea == main) {?>
			<div id="main_topArea" class="topArea topArea01 section">
				<div class="mainLogo"><img src="/html/images/common/logo_white.png" alt=""></div>
				<ul class="lightslider">					
					<?
						for($i = 1 ; $i <= $imgNum01 ; $i++) {
							$num = sprintf('%02d',$i);
							if($mobile){
								echo "<li style='background:url(./html/images/".$folderName."/m/01_".$num.".jpg)'></li>";
							}else{
								echo "<li style='background:url(./html/images/".$folderName."/01_".$num.".jpg)'></li>";
							}
						}
					?>
				</ul>
				<div><a href="#contents" class="btn_scroll btn_dir"><img src="/html/images/common/wheel.png" alt=""></a></div>
				<div id="main_topArea_bottom"></div>
			</div>
		<?php } ?>