<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (false) {
?>
<style type="text/css">
	/* 팝업레이어 */
	.popup { position:absolute; left: 5px; top: 60px; z-index:1000; max-width:350px; }
	.popup img { width:350px; }
	.hd_pops_footer {padding:10px 0;background:#000;color:#fff;text-align:right}
	.hd_pops_footer button {margin-right:5px;padding:5px 10px;border:0;background:#393939;color:#fff;cursor:pointer;}
</style>
<?php 
foreach ($popups as $data) { 
	if (!isset($_COOKIE['popup'.$data['idx']])) {
		$z = "65000" - $data['ordering'];
?>
<div class="popup" id="popup<?= $data['idx'] ?>" style="z-index:<?= $z ?>">
	<div style="background-color:#000000;"><?= $data['content'] ?></div>
	<div class="hd_pops_footer">
		<button class="hd_pops_reject" onclick="close_pop_allday(true, '<?= $data['idx'] ?>');"><strong>24</strong>시간 동안 다시 열람하지 않습니다.</button>
		<button class="hd_pops_close" onclick="selfClose('<?= $data['idx'] ?>');">닫기</button>
	</div>
</div>
<?php 
	}
} 
?>
<?php } else { ?>
<style type="text/css">
	/* 팝업레이어 */
	.containerPop { display:flex; flex-wrap: wrap; position:absolute; left: 18%; top: 50px; max-width:1500px; z-index:10000; }
	.containerPop > div { margin: 15px; cursor: move; }
	.hd_pops_footer {padding:10px 0;background:#000;color:#fff;text-align:right}
	.hd_pops_footer button {margin-right:5px;padding:5px 10px;border:0;background:#393939;color:#fff;cursor:pointer;}
	.ui-draggable-handle{
		touch-action:auto !important;
	}
</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<div class="containerPop">
	<?php 
	foreach ($popups as $data) { 
		if (!isset($_COOKIE['popup'.$data['idx']])) {
	?>
	<div id="popup<?= $data['idx'] ?>">
		<div style="background-color:#000000;"><?= $data['content'] ?></div>
		<div class="hd_pops_footer">
			<button class="hd_pops_reject" onclick="close_pop_allday(true, '<?= $data['idx'] ?>');"><strong>24</strong>시간 동안 다시 열람하지 않습니다.</button>
			<button class="hd_pops_close" onclick="selfClose('<?= $data['idx'] ?>');">닫기</button>
		</div>
	</div>
	<script>
		$("#popup<?= $data['idx'] ?>").draggable();
	</script>
	<?php 
		}
	} 
	?>
</div>
<?php } ?>
<script>
	//Cookie Setting
	function setCookie(cookie_name, value, days) {
		var exdate = new Date();
		exdate.setDate(exdate.getDate() + days);
		// 설정 일수만큼 현재시간에 만료값으로 지정
		var cookie_value = escape(value) + ((days == null) ? '' : '; expires=' + exdate.toUTCString());
		document.cookie = cookie_name + '=' + cookie_value;
	}

	//팝업 Close 기능
	function close_pop_allday(flag, popup_no) {
		_this = $(this);
		var popupString = "popup"+popup_no;
		if ( flag == true ) {
			//쿠키세팅(그냥닫기 오늘안보기)
			setCookie("popup"+popup_no,"end",1);
			$("#popup"+popup_no).hide('fade');
		}
		else {
			//false로 들어오면 그냥 숨기기만
			$("#popup"+popup_no).hide('fade');
		}
	}

	function selfClose(v) {
		$("#popup" + v).hide('fade');
	}
</script>
<?php // if ($_SERVER['REMOTE_ADDR'] == "59.29.3.210") { ?>
	<style>
		.popupBox {position: absolute;top: 95px;right: 40px;width: 350px;z-index: 10000;} 
		/* .popupBox {position: absolute; top: 175px; left: 150px; width: 350px; z-index: 10000;} */
		.popupBox .swiper{width: 100%;}
		.popupBox .swiper .swiper-slide2 {
			height: 350px;
			text-align: center;
			font-size: 18px;
			background: #fff;
			/* Center slide text vertically */
			display: -webkit-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			-webkit-justify-content: center;
			justify-content: center;
			-webkit-box-align: center;
			-ms-flex-align: center;
			-webkit-align-items: center;
			align-items: center;
		}
		.popupBox .swiper .swiper-slide2 img {display: block;width: 100%;height: 100%;object-fit: cover;}
		.popupBox .swiper .swiper-button {display: flex;}
		.popupBox .swiper .swiper-button li {
			display: flex;
			align-items: center;
			justify-content: center;
			flex: 1;
			position: static;
			margin: 0;
			padding: 0;
			width: 100%;
			height: 50px !important;
			border-top: 1px solid #ffffff;
			border-right: 1px solid #ffffff;
			box-sizing: border-box;
			color: #ffffff;
			background-color: rgba(0,0,0,0.7);
			cursor: pointer;
		}
		.popupBox .swiper .swiper-button li:last-child {border-right: none;}
		.popupBox .swiper .swiper-button li img {width: 16px;height: 16px;}
		.popupBox .swiper .swiper-button .swiper-button-prev,
		.popupBox .swiper .swiper-button .swiper-button-next {flex: 2;}
		/* start */
		.popupBox .swiper .swiper-button .swiper-button-stop,
		.popupBox .swiper .swiper-button .swiper-button-start {display: none;}
		.popupBox .swiper .swiper-button .swiper-button-stop.on,
		.popupBox .swiper .swiper-button .swiper-button-start.on {display: flex;}
		/* pagination */
		.popupBox .swiper .swiper-pagination  {position: absolute;top: 50%;left: auto;right: 5px;transform: translateX(-50%);width: max-content;height: max-content;}
		.popupBox .swiper .swiper-pagination span {display: block;margin: 5px 0;}
		.swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {height: 15px;border-radius: 5px;}
		.swiper-button-prev:after, .swiper-button-next:after {
			content: unset;
		}		
		@media (max-width: 800px) {
			.popupBox {right: auto; left: 50%; transform: translateX(-50%);}
		}
	</style>

	<!-- <div class="popupBox">
		<div class="swiper popup-slide">
			 Additional required wrapper -->
			<!-- <ul class="swiper-wrapper"> -->
				<!-- Slides -->
				<?php foreach ($slides as $data) { ?>				
				<li class="swiper-slide2">
						<img src="/file/slide/<?= $data['thumbnail'] ?>" alt="<?= $data['subject'] ?>">					
				</li>
				<?php } ?>
			</ul>
			<!-- If we need pagination -->
			<!-- <div class="swiper-pagination"></div> -->
			<!-- If we need navigation buttons -->
			<!-- <ul class="swiper-button">
				<li class="swiper-button-prev"><img src="/images/popup/arrow_left2.png" alt="이전"></li>
				<li class="swiper-button-next"><img src="/images/popup/arrow_right2.png" alt="다음"></li>
				<li class="swiper-button-stop on"><img src="/images/popup/stop.png" alt="정지"></li>
				<li class="swiper-button-start"><img src="/images/popup/start.png" alt="시작"></li>
				<li class="swiper-button-close"><img src="/images/popup/close.png" alt="닫기"></li>
			</ul> -->
		</div>
	</div> 
	<!-- jQuery -->
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
	<!-- Initialize Swiper -->
    <script>
	  var swiper2 = new Swiper(".popup-slide", {
        slidesPerView: 1,
        loop: true,
		centeredSlides: true,
        autoplay: {
			delay: 2500,
			disableOnInteraction: false,
        },
        pagination: {
			el: ".swiper-pagination",
			clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

	  $(".swiper-button-stop").on("click", function() {
		  $(this).removeClass("on").next().addClass("on");
		  swiper.autoplay.stop();
	  })
	  $(".swiper-button-start").on("click", function() {
		  $(this).removeClass("on").prev().addClass("on");
		  swiper.autoplay.start();
	  })
	  $(".swiper-button-close").on("click", function() {
		$(this).parents(".popupBox").css("display", "none");
	  })
    </script>
<?php // } ?>