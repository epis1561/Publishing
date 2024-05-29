<style>
	.cont01_02 {
		/* float: right !important; */
    margin: 30px 0;
		width: 90% !important;
	}
	.cont01_02 h1 {
		margin-bottom: 0 !important;
		width: 100% !important;
		text-align: left;
		padding-left: 210px;
	}
	.cont01_02 h1::before {
		top: 26% !important;
		margin-left: 250px !important;
		display: unset;
	}
	@media (max-width:1024px) {
		.cont01_02 h1 {
		padding-left: 20px;
		}
	}
	@media (max-width:450px) {
		.cont01_02 h1::before {
		    margin-left: 120px !important;
		}
	}
</style>
<div class="roomWrapper">
	<div class="cont01_02">
		<h1>room<br>infomation</h1>
	</div>
	<h2><img src="/html/images/main/g_circle.png" alt=""> room view</h2>
	<div class="roomlist_content">
		<script type="text/javascript">
		function dataChange(el, data, type) {
			el.addClass('move').on('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(e) {
				type === 'text' && el.text(data);
				type === 'html' && el.html(data);
			}).clearQueue();
		}
		function linkChange(el, href) {
			el.addClass('move').on('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(e) {
				el.find('a').attr('href',href);
			}).clearQueue();
		}

		$(document).ready(function() {
		var roomslider = $('.lightslider.roomlist').lightSlider({
			mode:'slide',
			item:1,
			slideMargin:0,
			slideMove:1,
			pause:3000,
			speed:500,
			easing:'easeInQuart',
			auto:true,
			loop:true,
			pager:false,
			prevHtml:'←',
			nextHtml:'→',
			onSliderLoad: function (el) {
				var currentItem =el.find('.lslide').eq(0);
				var infobox = currentItem.find('.txtRoom');
				var infotitle =infobox.find('span').text();
				var infodesc =infobox.find('small').html();
				var infolink =currentItem.find('a').attr('href');
				title.text(infotitle);
				desc.html(infodesc);
				link.find('a').attr('href',infolink);
				textbox.addClass('active');
			},
			onBeforeSlide: function (el) {
				var source =parseInt(el.getCurrentSlideCount());
				var counting = source < 10 ? '0' + source : source;
				el.siblings('.lSAction').find('.current').text(counting);
				var current = parseInt(el.getCurrentSlideCount()) - 1;
				var currentItem =el.find('.lslide').eq(current);
				var infobox = currentItem.find('.txtRoom');
				var infotitle =infobox.find('span').text();
				var infodesc =infobox.find('small').html();
				var infolink =currentItem.find('a').attr('href');
				dataChange(title, infotitle, 'text');
				dataChange(desc, infodesc, 'html');
				linkChange(link, infolink);
				foot.addClass('move');
			},
			onAfterSlide: function (el) {
				title.removeClass('move');
				desc.removeClass('move');
				link.removeClass('move');
				foot.removeClass('move');
			}
		});
		var textbox = roomslider.closest('.roomlist_content').siblings('.roomlist_title');
		var title = textbox.find('.rt_head');
		var desc = textbox.find('.rt_body');
		var link = textbox.find('.tag');
		var foot = textbox.find('.rt_foot');
		});
		</script>
		<ul class="lightslider roomlist">
			<li>
				<a href="/html/room.php?roomnum=01">
					<img src="/html/images/room/roomList01.jpg" alt="">
					<span class="txtRoom">
						<span>디올독채</span>
						<small>
							<!-- <img class="circle" src="/html/images/main/w_circle.png" alt=""> -->
							
						</small>
					</span>
				</a>
			</li>
			<!-- <li>
				<a href="/html/room.php?roomnum=02">
					<img src="/html/images/room/roomList02.jpg" alt="">
					<span class="txtRoom">
						<span>WHITE</span>
						<small>
 <img class="circle" src="/html/images/main/w_circle.png" alt=""> 
							
						</small>
					</span>
				</a>
			</li> -->
			<!-- <li>
				<a href="/html/room.php?roomnum=03">
					<img src="/html/images/room/roomList03.jpg" alt="">
					<span class="txtRoom">
						<span>GRAY</span>
						<small>
							<img class="circle" src="/html/images/main/w_circle.png" alt="">
							
						</small>
					</span>
				</a>
			</li> -->
			<!-- <li>
				<a href="/html/room.php?roomnum=04">
					<img src="/html/images/room/roomList04.jpg" alt="">
					<span class="txtRoom">
						<span>OPERA</span>
						<small>
							<img class="circle" src="/html/images/main/w_circle.png" alt="">
							
						</small>
					</span>
				</a>
			</li> -->
			<!-- <li>
				<a href="/html/room.php?roomnum=05">
					<img src="/html/images/room/roomList05.jpg" alt="">
					<span class="txtRoom">
						<span>CABANA</span>
						<small>
							 <img class="circle" src="/html/images/main/w_circle.png" alt=""> 
							
						</small>
					</span>
				</a>
			</li> -->
		</ul>
	</div>
	<div class="roomlist_title">
		<div class="roomlist_title_inner">
			<div class="rt_outer">
				<div class="rt_inner">
						<h3 class="rt_head roomtitle">ROOM</h3>
					<p class="rt_body roomdesc">
						
					</p>
					<div class="rt_box">	
						<p class="rt_foot">
							Stay with your beloved companion In a clean,<br>
							cozy cabin. Enjoy a happy moment with<br>
							your companion.
						</p>
						<p class="tag left">
							<a href="/html/reserve.php?cate=02" class="tag_inner roomlink">
								<img src="/html/images/main/go_button.png" alt="">
							</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
