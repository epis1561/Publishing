<?
$topArea="topArea_sub01";
$categoryNum="01";
$folderName="landscape";
$pageNum="12";
$subNum="02";
$pageTitle01="외부풍경";
$pageTitle02="Landscape";
$pageTitle03="아름다운 경치와 구름이 만드는 파노라마";
$pageText01="	
";
$control_header="sub";
?>
<? include_once ("./include/header.php"); ?>
	<? include_once ("./include/topArea.php"); ?>
	<div id="contents">		
		<div class="subCon" style="margin: 1.5% 0">
			<div class="subTop02 section_fadeIn section">
				<!--div class="pageTitle pageTitle02 boxShadow section_fadeIn delay section"><?=$pageTitle02?></div-->
				<img src="/html/images/<?=$folderName?>/img01.jpg" class="img_100">
			</div>
		</div>
		<div class="subCon">
			<div class="land01 img01 section_fadeIn section">
				<img src="/html/images/<?=$folderName?>/img02.jpg" class="img_100">
			</div>
			<div class="landlogo">
				<img src="/html/images/common/logo.png" class="">
			</div>
			<div class="land02 img02 section_fadeIn section">
				<img src="/html/images/<?=$folderName?>/img03.jpg" class="">
			</div>
		</div>
		
		<script type="text/javascript" src="/html/js/jquery.bxslider.js"></script>
			<script type="text/javascript">
			$(document).ready(function(){
				  $('.land03 .bxslider').bxSlider({
					auto:true,
					autoStart:true,
					mode: 'fade',
					moveSlides:1,
					pager:false,
					pagerType:'full',
					controls:true,
					//pagerCustom:'x',
					pause:5000,
					autoHover:false,
					speed:1000,
					slideMargin: 0,
					nextText:'<i class="fas fa-angle-right"></i>',
					prevText:'<i class="fas fa-angle-left"></i>',					
				  });
				});
			</script>
		<!-- <div class="subCon land03 section_fadeIn section">
			<?php if($mobile) {?>
				<div class="bxslider">
					<div><img src="/html/images/landscape/m/02_01.jpg" alt="" class="img_100"></div>
					<div><img src="/html/images/landscape/m/02_02.jpg" alt="" class="img_100"></div>
					<div><img src="/html/images/landscape/m/02_03.jpg" alt="" class="img_100"></div>
					<div><img src="/html/images/landscape/m/02_04.jpg" alt="" class="img_100"></div>
				</div>
			<?php } ?>
			<?php if(!$mobile) {?>
				<div class="bxslider">
					<div><img src="/html/images/landscape/02_01.jpg" alt="" class="img_100"></div>
					<div><img src="/html/images/landscape/02_02.jpg" alt="" class="img_100"></div>
					<div><img src="/html/images/landscape/02_03.jpg" alt="" class="img_100"></div>
					<div><img src="/html/images/landscape/02_04.jpg" alt="" class="img_100"></div>
				</div>
			<?php } ?>			
		</div> -->
		<div class="subCon land04">
			<div class="land04_01">
				<div class="section_fadeIn delay02 section">
					언제나 즐거움이 가득한<br>
					바로 이 곳 MILK KIDS..
				</div>
			</div>
			<div class="land04_02 img_bg section_fadeIn section"></div>
		</div>
		<div class="roomPre12">
			<div class="linebox none1810"><img src="/html/images/common/line_box.png" alt=""></div>
			<div class="land08_01 none1024">
				<dl class="landTypo section_fadeIn delay section active">
					<dt>
						가족과 함께이기에 즐거운 오늘<br>
						아이들의 추억이 쌓여갑니다.<br>
						온전한 휴식속의 힐링 스테이,<br>
						밀크 키즈 풀빌라 입니다.
					</dt>
					<dd>
						More and more<br>
						It is more beautiful than I imagined
					</dd>
				</dl>
			</div>
			<div class="land08_02 roomPre_img section_fadeIn section active"></div>
		</div>
	</div>	
	<? include_once ("./include/roomList.php"); ?>
<? include_once ("./include/footer.php"); ?>