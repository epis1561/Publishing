
				<!-- roomList start -->
				<?php
					$separator1 = $this -> uri -> segment('1');
					if ($separator1 == "preview") {
					?>
					<style>
						.room_pre img{
							width: 100% !important;
						}
						
						.room_mo{
						display: none;
						}
						.roomList-swiper > .swiper-pagination{
							width: auto !important;
						}
						@media(max-width:768px){
							.roomList-swiper > .swiper-pagination > .swiper-pagination-bullet{
								width: 22% !important;

							}
							.roomList-swiper > .swiper-pagination{
								display: flex;
								justify-content: start;
								font-size: 12px;
								flex-wrap:wrap;
								gap: 5%;
							}
							.room_mo{
								display: block;
								margin-top: 8%;
							}
							.room_typo span{
								font-size: 17px;
							}
							.precont03_img{
								width: 75%;
								margin: 0 auto;
							}
							.precont03_txt h3::before{
								width: 45%;
							}
							.roomPre_reser{
							right: 5%;
						}
						}
						@media(max-width:500px){
							.roomList-swiper > .swiper-pagination > .swiper-pagination-bullet{
								width: 21% !important;

							}
							.roomList-swiper > .swiper-pagination{
								gap: 0;
							}
						}
					</style>
						
					<?php } ?>
				
				<div id="roomList">
					<?php
					$separator1 = $this -> uri -> segment('1');
					if ($separator1 != "preview") {
					?>
					
					<div class="room_typo room_pc">						
						<span>ROOM PREVIEW</span>						
						<h2 class="eng">HILLSFORET ROOMS</h2>						
						<P>
							We will try our best to be the glamping place<br>
							where you can always be satisfied and have a comfortable rest. 
						</P>
					</div>					
					<?php } ?>
					<div class="roomPre_img none1024">
						<img class="img100" src="/images/room/img01_02.jpg" alt="">
					</div>
					<div class="room_typo room_mo">						
						<span>SPECIAL</span>						
						<h2 class="eng">HILLSFORET SPECIAL</h2>						
						<P>
							We will try our best to be the glamping place<br>
							where you can always be satisfied and have a comfortable rest. 
						</P>
					</div>	
					<!-- 여기 룸이 아닌 스페셜로 경로 싹다 변경해야한다. -->
					<div class="swiper-container roomList-swiper">
						<div class="roomPre_reser"><a href="https://booking.ddnayo.com/?accommodationId=16344" target="_blank">RESERVATION</a></div>
						<div class="swiper-wrapper">
							<div class="swiper-slide room_pre"><a href="/special/1"><span class="eng">view</span><img src="/images/special/specialList01.jpg" alt=""></a></div>
							<div class="swiper-slide room_pre"><a href="/special/2"><span class="eng">view</span><img src="/images/special/specialList02.jpg" alt=""></a></div>
							<div class="swiper-slide room_pre"><a href="/special/3"><span class="eng">view</span><img src="/images/special/specialList03.jpg" alt=""></a></div>
							<div class="swiper-slide room_pre"><a href="/special/4"><span class="eng">view</span><img src="/images/special/specialList04.jpg" alt=""></a></div>
							<div class="swiper-slide room_pre"><a href="/special/5"><span class="eng">view</span><img src="/images/special/specialList05.jpg" alt=""></a></div>
							<div class="swiper-slide room_pre"><a href="/special/6"><span class="eng">view</span><img src="/images/special/specialList06.jpg" alt=""></a></div>
							<div class="swiper-slide room_pre"><a href="/special/7"><span class="eng">view</span><img src="/images/special/specialList07.jpg" alt=""></a></div>
							<div class="swiper-slide room_pre"><a href="/special/8"><span class="eng">view</span><img src="/images/special/specialList08.jpg" alt=""></a></div>
							<div class="swiper-slide room_pre"><a href="/special/9"><span class="eng">view</span><img src="/images/special/specialList09.jpg" alt=""></a></div>
							<div class="swiper-slide room_pre"><a href="/special/10"><span class="eng">view</span><img src="/images/special/specialList10.jpg" alt=""></a></div>
							<div class="swiper-slide room_pre"><a href="/special/11"><span class="eng">view</span><img src="/images/special/specialList11.jpg" alt=""></a></div>
						</div>
						<div class="swiper-pagination"></div>
						<script>
							var bullet =['베이커리 카페','명품한우식당','장어','힐스포레 본관','팜갤러리(공연장)','패션관','스프린골프','힐링센터(문화강좌)','K-POP스쿨','어드벤처','더싱글즈 in 힐스포레'];
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