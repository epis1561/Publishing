<div class="roomWrapper">
	<div class="roomlist_title">
		<div class="roomlist_title_inner">
			<div class="rt_outer">
				<div class="rt_inner">
						<h3 class="rt_head roomtitle">ROOMS</h3>
					<p class="rt_body roomdesc">
						자연 속으로 들어온듯한 기분이 드는<br>
						아늑하고 편안한 공간으로<br>
						여러분들을 초대합니다.
					</p>
					<p class="tag left">
						<a href="/html/reserve.php?cate=02" class="tag_inner roomlink">
							MORE VIEW +
						</a>
					</p>
				</div>
			</div>
		</div>
	</div>
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
			prevHtml:'',
			nextHtml:'',
			onSliderLoad: function (el) {
				var currentItem =el.find('.lslide').eq(0);
				var infobox = currentItem.find('.txtRoom');
				var infotitle =infobox.find('span').html();
				var infodesc =infobox.find('small').html();
				var infolink =currentItem.find('a').attr('href');
				title.html(infotitle);
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
				var infotitle =infobox.find('span').html();
				var infodesc =infobox.find('small').html();
				var infolink =currentItem.find('a').attr('href');
				dataChange(title, infotitle, 'html');
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
			<li><a href="/html/room.php?roomnum=01"><img src="/html/images/room/roomList01.jpg" alt="" class="img_100"><span class="txtRoom"><span>POOLVILLA101</span><small>
				기준인원 3명 / 최대인원 10명<br>투룸형(침대룸2개+화장실2개) / 45평
			</small></span></a></li>
			<li><a href="/html/room.php?roomnum=02"><img src="/html/images/room/roomList02.jpg" alt="" class="img_100"><span class="txtRoom"><span>POOLVILLA102</span><small>
				기준인원 3명 / 최대인원 10명<br>투룸형(침대룸2개+화장실2개) / 45평
			</small></span></a></li>
			<li><a href="/html/room.php?roomnum=03"><img src="/html/images/room/roomList03.jpg" alt="" class="img_100"><span class="txtRoom"><span>POOLVILLA103</span><small>
				기준인원 3명 / 최대인원 5명<br>원룸형(침대룸1개+화장실1개) / 30평
			</small></span></a></li>
			<li><a href="/html/room.php?roomnum=04"><img src="/html/images/room/roomList04.jpg" alt="" class="img_100"><span class="txtRoom"><span>POOLVILLA201</span><small>
				기준인원 3명 / 최대인원 15명<br>쓰리룸형(침대룸3개+화장실2개) / 60평
			</small></span></a></li>
			<li><a href="/html/room.php?roomnum=05"><img src="/html/images/room/roomList05.jpg" alt="" class="img_100"><span class="txtRoom"><span>POOLVILLA202</span><small>
				기준인원 3명 / 최대인원 10명<br>투룸형(침대룸2개+화장실2개) / 45평
			</small></span></a></li>
			<li><a href="/html/room.php?roomnum=06"><img src="/html/images/room/roomList06.jpg" alt="" class="img_100"><span class="txtRoom"><span>POOLVILLA203</span><small>
				기준인원 3명 / 최대인원 5명<br>원룸형(침대룸1개+화장실1개) / 30평
			</small></span></a></li>
		</ul>
	</div>
</div>