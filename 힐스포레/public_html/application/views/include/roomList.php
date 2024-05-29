				<!-- roomList start -->
				<div id="roomList">
					<?php
					$separator1 = $this -> uri -> segment('1');
					if ($separator1 != "preview") {
					?>
					<div class="room_typo">						
						<span>ROOM PREVIEW</span>						
						<h2 class="eng">Hillsforet ROOMS</h2>						
						<P>
							We will try our best to be special memories.<br>
							where you can always be satisfied and have a comfortable rest. 
						</P>
					</div>					
					<?php } ?>
					<div class="roomPre_img none1024">
						<img class="img100" src="/images/room/img01_02.jpg" alt="">
					</div>
					<div class="swiper-container roomList-swiper">
						<div class="roomPre_reser"><a href="https://booking.ddnayo.com/?accommodationId=16344" target="_blank">RESERVATION</a></div>
						<div class="swiper-wrapper">
							<div class="swiper-slide room_pre"><a href="/room/1"><span class="eng">view</span><img src="/images/special/roomList01.jpg" alt="" class="img100"></a></div>
							<div class="swiper-slide room_pre"><a href="/room/2"><span class="eng">view</span><img src="/images/special/roomList02.jpg" alt="" class="img100"></a></div>
							<div class="swiper-slide room_pre"><a href="/room/3"><span class="eng">view</span><img src="/images/special/roomList03.jpg" alt="" class="img100"></a></div>
							<div class="swiper-slide room_pre"><a href="/room/4"><span class="eng">view</span><img src="/images/special/roomList04.jpg" alt="" class="img100"></a></div>
							<div class="swiper-slide room_pre"><a href="/room/5"><span class="eng">view</span><img src="/images/special/roomList05.jpg" alt="" class="img100"></a></div>
							<div class="swiper-slide room_pre"><a href="/room/6"><span class="eng">view</span><img src="/images/special/roomList06.jpg" alt="" class="img100"></a></div>
						</div>
						<div class="swiper-pagination"></div>
						<script>
							var bullet =['독채풀빌라(복층)','독채풀빌라(단층)','큐브풀빌라','비즈니스형','패밀리형','오토캠핑장'];
							var swiper = new Swiper(".roomList-swiper", {
								loop: true,
								effect: "fade",
								autoplay:{
									delay:3000,
									disableOnInteraction:false
								},
								pagination: {
								el: ".swiper-pagination",
								clickable: true,
								renderBullet: function (index, className) {
      							return '<div class="' + className + '"><span>' + (bullet[index]) + '</span></div>';
    							}
								},
							});
						</script>
					</div>
				</div>
				<!-- roomList end -->