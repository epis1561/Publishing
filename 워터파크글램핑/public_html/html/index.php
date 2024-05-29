<?
$folderName="main";
$topArea="main";
//$nav_open ="";
//var_dump(G5_PATH."/html/");
$mainTypo01="";
$mainTypo02="";
//$control_header="control_header";
?>
<? include_once ("./html/include/header.php"); ?>
	<div class="playing_btn" stlye="display:none"></div>
	<div class="mainMovie section_fadeIn section">
		<div>
			<div class="movie_thum transAll03">
				<i class="fas fa-play"></i>
			</div>
		 <?
			if($mobile){
				//echo "<iframe src='https://player.vimeo.com/video/293491501' class='main_video' id='main_video' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>";
				echo "<video loop='true' preload='auto' class='main_video' id='main_video' playsinline>";
				echo "<source type='video/mp4' src='https://player.vimeo.com/external/293491501.sd.mp4?s=42fcf2e1b70c961de69877a5d72df72c0a40d788&profile_id=165'>";
				//echo "<div class='main_video_bg'></div>";
				echo "</video>";
			}else{
				//echo "<iframe src='./html/include/video.php' frameborder='0'></iframe>";
				//echo "<iframe src='https://player.vimeo.com/video/293491501' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>";
				echo "<video autoplay loop='true' preload='auto' class='main_video' id='main_video' playsinline>";
				echo "<source type='video/mp4' src='https://player.vimeo.com/external/293491501.hd.mp4?s=7417fc066436734c44cf30819ead5955d965a904&profile_id=169'>";
				//echo "<div class='main_video_bg'></div>";
				echo "</video>";
			}
		?>
		</div>
	</div>
	<?php if( $mobile) {?>
		<script>				
			$(document).ready(function(){		
				$(".movie_thum").css('z-index', '10');
				$(".movie_thum").click(function(){
					$(".movie_thum").css({'opacity':'0','z-index':-1});
					document.getElementById('main_video').play();
				});
				$(".main_video").click(function(){
					$(".movie_thum").css({'opacity':'1','background':'transparent','z-index':10});
					document.getElementById('main_video').pause();
				});
			});
		</script>
	<?php } ?>
	
	<? include_once ("./html/include/topArea.php"); ?>
	<div id="contents">
		<div class="mainbox">
			<div class="typoWrap section_fadeIn section">
				<dl class="typoCon typoCon01 section_fadeIn delay section">
					<dt class="title"><span class="title_typo01">Miz Kids Pool Villa,</span> 미즈베베 키즈 풀빌라</dt>
					<dd class="text">
						<p>사랑하는 동반자, 사랑하는 아이들과 함께</p>
						<p>미즈베베 풀빌라의 아늑함과 특별함을 느껴보세요.</p>
						<!-- <p class="none768"></p>
						<p class="none768"></p> -->
					</dd>
				</dl>
				<img src="/html/images/main/img01.jpg" class="typoImg img_100">
			</div>
		</div>
		<div class="mainCon01 section_fadeIn section">			
			<div class="main01_02">
				<div class="main01_0201">
					<img src="/html/images/main/img03.jpg" class="img_100 section_fadeIn section">
					<a href="#rooftop" class="btn_scroll">
						<span class="line"></span>
						<i class="material-icons">expand_more</i>
						<span class="line"></span>
					</a>
				</div>
				<div class="main01_03 section_fadeIn delay03 section">
					<div class="main01_0301">
						<img src="/html/images/common/logo_side.svg">
					</div>				
				</div>
			</div>
						
			<div class="main_cloud">
				<div class="typoCon typoCon02 section_fadeIn delay section">
					<div class="typoCon02_01">
						산과 구름이 만드는 고요한 전경과 산뜻한 내음을 느끼며 편안함을 즐겨보세요.<br>
						오직 자연만이 줄 수 있는 선물입니다. 자연과 함께 밀크키즈 풀빌라에서 행복한 하루를 보내시길 바랍니다.
					</div>
					<div class="typoCon02_02">
						<!-- “Beautiful mizbebe, Feast of islands like oriental paintings,<br>
						Nature shows drama Enjoy the pool villa” -->
					</div>
				</div>
				<div class="section_fadeIn delay03 section">
				<?php if($mobile) {?>
					<div class="cloud_bg"><img src="/html/images/main/m/cloud_bg.png" class="img_100"></div>
					<img src="/html/images/main/m/main_cloud.jpg" class="img_cloud">
					<img src="/html/images/main/m/main_cloud.jpg" class="img_cloud_bg">
				<?php } ?>
				<?php if(!$mobile) {?>
					<div class="cloud_bg"><img src="/html/images/main/cloud_bg.png" class="img_100"></div>
					<img src="/html/images/main/main_cloud.jpg" class="img_cloud">
					<img src="/html/images/main/main_cloud.jpg" class="img_cloud_bg">
				<?php } ?>
				</div>
			</div>
			<div id="rooftop" class="main01_04 section_fadeIn section">
				<div class="main01_0402">
					<?php if($mobile) {?>
						<div><img src="/html/images/main/m/img04_01.png" class="img_100"></div>
						<div><img src="/html/images/main/m/img04_02.jpg" class="img_100" style="margin-top:-0.5px;"></div>
					<?php } ?>
					<?php if(!$mobile) {?>
						<div><img src="/html/images/main/img04_01.png" class="img_100"></div>
						<div><img src="/html/images/main/img04_02.jpg" class="img_100" style="margin-top:-0.5px;"></div>
					<?php } ?>					
				</div>
			</div>
			<script type="text/javascript" src="/html/js/jquery.bxslider.js"></script>
			<script type="text/javascript">
			$(document).ready(function(){
				  $('.main_concept .bxslider').bxSlider({
					auto:true,
					autoStart:true,
					mode: 'horizontal',
					moveSlides:1,
					pager:true,
					pagerType:'full',
					controls:false,
					//pagerCustom:'x',
					pause:4000,
					autoHover:true,
					speed:600,
					slideMargin: 0,
					//nextText:'<i class="fa fa-angle-right"></i>',
					//prevText:'<i class="fa fa-angle-left"></i>',
					buildPager: function(slideIndex){
						switch(slideIndex){
						  case 0:
							return 'Kids_Pool';
						  case 1:
							return 'Playground';
						  case 2:
							return 'Swimming_Pool';
						  case 3:
							return 'Private_BBQ';
						}
					  }
				  });
				});
			</script>
			<?php if($mobile) {?>
				<div class="main_concept section_fadeIn delay02 section">
					<div class="bxslider">
						<div><img src="/html/images/main/m/02_01.jpg" alt="" class="img_100"></div>
						<div><img src="/html/images/main/m/02_02.jpg" alt="" class="img_100"></div>
						<div><img src="/html/images/main/m/02_03.jpg" alt="" class="img_100"></div>
						<div><img src="/html/images/main/m/02_04.jpg" alt="" class="img_100"></div>
					</div>
				</div>
				<div class="main01_05 section_fadeIn delay03 section">
					<div class="typoCon typoCon03">
						아이들과 함께, 미즈베베 키즈 풀빌라
					</div>
					<div class="bxslider">
						<div><img src="/html/images/main/m/03_01.jpg" alt="" class="img_100"></div>
						<div><img src="/html/images/main/m/03_02.jpg" alt="" class="img_100"></div>
						<div><img src="/html/images/main/m/03_03.jpg" alt="" class="img_100"></div>
					</div>
				</div>
			<?php } ?>
			<?php if(!$mobile) {?>
				<div class="main_concept section_fadeIn section">
					<div class="bxslider">
						<div><img src="/html/images/main/02_01.jpg" alt="" class="img_100"></div>
						<div><img src="/html/images/main/02_02.jpg" alt="" class="img_100"></div>
						<div><img src="/html/images/main/02_03.jpg" alt="" class="img_100"></div>
						<div><img src="/html/images/main/02_04.jpg" alt="" class="img_100"></div>
					</div>
				</div>
				<div class="main01_05 section_fadeIn section">
					<div class="typoCon typoCon03">
						아이들과 함께, 미즈베베 키즈 풀빌라
					</div>
					<div class="bxslider">
						<div><img src="/html/images/main/03_01.jpg" alt="" class="img_100"></div>
						<div><img src="/html/images/main/03_02.jpg" alt="" class="img_100"></div>
						<div><img src="/html/images/main/03_03.jpg" alt="" class="img_100"></div>
					</div>
				</div>
			<?php } ?>			
			<script type="text/javascript">
				$(document).ready(function(){
				  $('.main01_05 .bxslider').bxSlider({
					auto:true,
					autoStart:true,
					mode: 'fade',
					moveSlides:1,
					pager:false,
					controls:false,
					pagerType:'full',
					//pagerCustom:'x',
					pause:4000,
					speed:5000,
					slideMargin: 0					
				  });
				});
			</script>
		</div>
		<dl class="mainRoom">
			<dt class="section_fadeIn section">
				<span class="mainRoom_t01">
					<span class="mainRoom_t0101">Room preview</span>
					<span class="mainRoom_t0102">객실 미리보기</span>
				</span>				
				<span class="mainRoom_t02">
					미즈베베 키즈 풀빌라에서<br>
					아이에게 잊지못할 추억을 선물해 주세요.
				</span>
			</dt>
			<dd>
				<div class="roomList01 section_fadeIn delay section">
					<a href="/html/room.php?roomnum=01">
						<div class="title">
							<div class="title_e">poolvilla</div>
							<div class="title_k">미즈1</div>
							<div class="title_btn">
								<p>Detail view</p>
								<img src="/html/images/common/btn_arrow.svg" class="btn_arrow">
							</div>
						</div>
						<div class="roomList_img roomList_img01"></div>
					</a>
				</div>
				<div class="roomList01 section_fadeIn delay03 section">
					<a href="/html/room.php?roomnum=02">
						<div class="title">
							<div class="title_e">poolvilla</div>
							<div class="title_k">미즈2</div>
							<div class="title_btn">
								<img src="/html/images/common/btn_arrow.svg" class="btn_arrow">
								<p>Detail view</p>
							</div>
						</div>
						<div class="roomList_img roomList_img02"></div>
					</a>
				</div>
				<div class="roomList01 section_fadeIn delay section">
					<a href="/html/room.php?roomnum=03">
						<div class="title">
							<div class="title_e">poolvilla</div>
							<div class="title_k">베베1</div>
							<div class="title_btn">
								<p>Detail view</p>
								<img src="/html/images/common/btn_arrow.svg" class="btn_arrow">
							</div>
						</div>
						<div class="roomList_img roomList_img03"></div>
					</a>
				</div>
				<div class="roomList01 section_fadeIn delay03 section">
					<a href="/html/room.php?roomnum=04">
						<div class="title">
							<div class="title_e">poolvilla</div>
							<div class="title_k">베베2</div>
							<div class="title_btn">
								<img src="/html/images/common/btn_arrow.svg" class="btn_arrow">
								<p>Detail view</p>
							</div>
						</div>
						<div class="roomList_img roomList_img04"></div>
					</a>
				</div>
			</dd>
		</dl>
	</div>	
<? include_once ("./html/include/footer.php"); ?>