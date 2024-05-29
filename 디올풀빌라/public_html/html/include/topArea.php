<?
	if ($folderName=='main') {
		$directory = './html/images/'.$folderName.'/';
		$files = glob($directory . '01_*.jpg');
	} elseif ($folderName=='room') {
		$directory = '../html/images/'.$folderName.''.$subNum.'/';
		$files = glob($directory . '01_*.jpg');
	} else {
		$directory = '../html/images/'.$folderName.'/';
		$files = glob($directory . $subNum .'_*.jpg');
	}
	if ($pageNum=='200') {
		$directory = '../html/images/'.$folderName.'/';
		$files = glob($directory . $subNum .'_*.jpg');
	}
	if ( $files !== false ) {
		$imgNum01 = count( $files );
	}
?>
<script>
	$(document).ready(function() {
	var slider = $('.topArea .lightslider').lightSlider({
		gallery:false,
		pager:false,
		mode: 'fade',
		easing:'easeInExpo',
		item:1,
		slideMargin:0,
		galleryMargin: 0,
		//verticalHeight:"900",
		pause:4000,
		speed:1000,
		auto:true,
		loop:true,
		prevHtml:'&lt;',
        nextHtml:'&gt;',
		onBeforeSlide: function (el) {
			$('.current').text(el.getCurrentSlideCount());
		}
	});
});
</script>
		<?php if( $topArea == topArea) {?>
			<div class="subCon topArea section">
				<div class="decoration">
					<div class="deco_line"></div>
					<div class="deco_line"></div>
					<div class="deco_line"></div>
					<div class="deco_line"></div>
				</div>
				<!-- <div class="mainTypo">
					<?=$mainTypo?>
				</div> -->
				<!-- <a href="#contents" class="btn_scroll">
					SCROLL DOWN
				</a> -->
				<?php if( $folderName != reser) {?>
				<ul class="lightslider">
					<?
						for($i = 1 ; $i <= $imgNum01 ; $i++) {
							$num = sprintf('%02d',$i);
							if($mobile){
								echo "<li><img src='/html/images/".$folderName."/m/".$subNum."_".$num.".jpg' alt=''></li>";
							}else{
								echo "<li><img src='/html/images/".$folderName."/".$subNum."_".$num.".jpg' alt=''></li>";
							}
						}
					?>
				</ul>
			<?php } ?>
			</div>
		<?php } ?>

		<?php if( $topArea == topArea_sub) {?>
			<div class="subCon topArea topArea01 section">
				<div class="decoration">
					<div class="deco_line"></div>
					<div class="deco_line"></div>
					<div class="deco_line"></div>
					<div class="deco_line"></div>
				</div>
				<!-- <div class="mainTypo">
					<?=$mainTypo?>
				</div> -->
				<!-- <a href="#contents" class="btn_scroll">
					SCROLL DOWN
				</a> -->				
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
			</div>
		<?php } ?>

		<?php if( $topArea == room) {?>
			<div class="subCon topArea topArea01 section">
				<div class="decoration">
					<div class="deco_line"></div>
					<div class="deco_line"></div>
					<div class="deco_line"></div>
					<div class="deco_line"></div>
				</div>
				<!-- <div class="mainTypo">
					<?=$mainTypo?>
				</div> -->
				<!-- <a href="#contents" class="btn_scroll">
					SCROLL DOWN
				</a> -->
				<ul class="lightslider">
					<?
						for($i = 1 ; $i <= $imgNum01 ; $i++) {
							$num = sprintf('%02d',$i);
							if($mobile){
								echo "<li style='background:url(./images/".$folderName."".$subNum."/m/01_".$num.".jpg)'></li>";
							}else{
								echo "<li style='background:url(./images/".$folderName."".$subNum."/01_".$num.".jpg)'></li>";
							}
						}
					?>
				</ul>
			</div>
		<?php } ?>

		<?php if( $topArea == main) {?>
			<div class="subCon topArea topArea01 section">
				<div class="decoration">
					<div class="deco_line"></div>
					<div class="deco_line"></div>
					<div class="deco_line"></div>
					<div class="deco_line"></div>
				</div>
				<ul class="lightslider bigslide">
					<?
							for($i = 1 ; $i <= $imgNum01 ; $i++) {
								$num = sprintf('%02d',$i);
								if($mobile){
									echo "<li style='background:url(/html/images/main/m/01_".$num.".jpg);'></li>";
								}else{
									echo "<li style='background:url(/html/images/main/01_".$num.".jpg)'></li>";
								}
							}
						?>
				</ul>
			</div>

		<?php } ?>
