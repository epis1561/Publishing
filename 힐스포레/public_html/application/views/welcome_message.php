<style>
	.video-wrap{
	position: absolute;
	width: 40%;
	left: 3%;
	top: 2%;
	z-index: 9999;
	}
	.video iframe{
		position: absolute; top: 0;left: 0;
	}
	.close button{
		padding: 3px 5px;
		background-color: #e8e8e8;
		font-weight: bold;
		border: 1px solid #000;
	}
	.close{
		width: 100%;text-align: right;
		background-color: #e8e8e8;
	}
	@media(max-width:500px){
		.video-wrap{
			width: 80%;
			left: 50%;
			transform:translateX(-50%);
		}
	}
</style>
			<div id="content">
				<div class="video-wrap">
					<div class="video">
					<video width="100%;" height="100%" autoplay controls muted>
						<source src="/images/common/video.mp4" type="video/mp4">
					</video>
					<div class="close"><button>닫기</button></div>
					</div>
				</div>
				<div class="Cont01">
					<div class="mainTypo">
						<h1 class="eng">hillsforet</h1>
						<p class="eng">
							We provide many services for your enjoyful, peaceful time in here.<br>
							Spend your time for you or with your firends in Culture Complex - hillsforet.
						</p>
						<!--img class="img100" src="/images/common/mainTypo.png" alt=""-->
					</div>
					<div class="swiper-container main-swiper">
						<div class="swiper-wrapper">
							<?php 
							for ($i = 1; $i <= $imgCount; $i++) {
								$imgNum = sprintf('%02d', $i);
							?>
							<div class="swiper-slide"><img src="/images/main/01_<?= $imgNum ?>.jpg" alt="" class="img100 M_100"></div>
							<?php } ?>
						</div>
						<div class="main-button-next"><img class="img100" src="/images/common/arrow_next.png" alt=""></div>
						<div class="main-button-prev"><img class="img100" src="/images/common/arrow_prev.png" alt=""></div>
						<div class="swiper-pagination"></div>
					</div>
					<div class="reser_Btn none1024">
						<a href="https://booking.ddnayo.com/?accommodationId=16344" target="_blank">RESERVATION <span class="reser_line"></span></a>
					</div>
					<!-- main Swiper -->
					<script>
						var swiper = new Swiper(".main-swiper", {
							loop: true,
							effect: "fade",
							// autoplay:{
							// 	delay:3000,
							// 	disableOnInteraction:false
							// },
							pagination: {
							el: ".swiper-pagination",
							type: "fraction",
							},
							navigation: {
							nextEl: ".main-button-next",
							prevEl: ".main-button-prev",
							},
						});
					</script>
				</div>

				<div class="Cont02">
					<div class="con02_01 none1024">
						<img src="/images/main/img01_01.jpg" alt="" class="img100">
					</div>	
					<div class="con02_02">
						<div class="con02_txt">
							<h2 class="eng">HILLSFORET IS..</h2>
							<span>중부권 최대 엔터테인먼트 공간, 공주의 힐링 휴식처 힐스포레</span>
							<p>
								아름답고 평화로운 공주의 땅에<br>
								동화 속 푸른 바다의 지중해 산토리니를 그려보았습니다.<br>
								중부권 최대 특별한 테마의 이국적인 평안한 쉼터, 힐스포레<br><br>

								소중한 고객여러분의 쉼에 한 점 불편함도 없이 특별한 추억을 담아가시기를..<br>
								언제나 내 가족처럼 정성을 다하는, 끊임없이 노력하는 힐스포레가 되겠습니다.
							</p>
						</div>
					</div>
				</div>
				<?php $this -> load -> view('include/roomList'); ?>
				<div class="Cont03">
					<div class="swiper-container main02-swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide"><img src="/images/main/02_01.jpg" alt="" class="img100"></div>
							<div class="swiper-slide"><img src="/images/main/02_02.jpg" alt="" class="img100"></div>
							<div class="swiper-slide"><img src="/images/main/02_03.jpg" alt="" class="img100"></div>
							<div class="swiper-slide"><img src="/images/main/02_04.jpg" alt="" class="img100"></div>
							<div class="swiper-slide"><img src="/images/main/02_05.jpg" alt="" class="img100"></div>
							<div class="swiper-slide"><img src="/images/main/02_06.jpg" alt="" class="img100"></div>
						</div>
						<div class="main02-button-next"><img class="img100" src="/images/common/arrow_next02.png" alt=""></div>
						<div class="main02-button-prev"><img class="img100" src="/images/common/arrow_prev02.png" alt=""></div>
						<div class="swiper-pagination"></div>
					</div>
					<!-- main02-swiper -->
					<script>
						var swiper = new Swiper(".main02-swiper", {
							loop: true,
							effect: "fade",
							autoplay:{
								delay:3000,
								disableOnInteraction:false
							},
							pagination: {
							el: ".swiper-pagination",
							type: "fraction",
							},
							navigation: {
							nextEl: ".main02-button-next",
							prevEl: ".main02-button-prev",
							},
						});
					</script>
				</div>
				<div class="Cont04">
					<div class="con04_box">
						<h2 class="eng">HILLSFORET</h2>
					</div>
				</div>

				<!-- spList start -->
				<div id="spList">
					<div class="roomWrapper">
						<div class="roomlist_title">
							<div class="roomlist_title_inner">
								<div class="sp_box none1024">
									<h2 class="eng">HILLSFORET SPECIAL</h2>
									<p class="spTitle_txt">
										A variety of services<br>
										and facilities provide comfort and comfort.
									</p>
								</div>
								<div class="rt_outer">
									<div class="rt_inner">
											<h3 class="rt_head roomtitle eng">
												<!-- spList 제목 들어감 -->
											</h3>
											<div class="sp_object">Special</div>
										<p class="rt_body roomdesc none1024">
											<!-- small 텍스트 들어감 -->
										</p>
										<p class="tag left">
											<a href="" class="tag_inner roomlink">
												more
											</a>
										</p>
										<!-- <p class="rt_foot">
											Stay with your beloved companion<br>
											In a clean, cozy cabin.<br>
											Enjoy a happy moment with your companion.
										</p> -->
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
									mode:'fade',
									item:1,
									slideMargin:0,
									slideMove:1,
									pause:3000,
									speed:500,
									easing:'easeInQuart',
									auto:true,
									loop:true,
									pager:false,
									// prevHtml:'&lt;',
									nextHtml:'',
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
									<a href="/special/1">
										<img class="img100" src="/images/main/spList01.jpg" alt="">
										<span class="txtRoom">
											<span>베이커리 카페</span>
											<small>
												이른 새벽, 제빵 명인의 준비로 시작하는 베이커리.<br>
												친환경 천연발효 수제빵과 직접 로스팅한 풍미 가득한 커피<br>
												1층, 2층과 루프탑 등 약 300평 규모의 실내정원과 더불어 자연과 함께 휴식할 수 있는 특별한 장소입니다.
											</small>
										</span>
									</a>
								</li>	
								<li>
									<a href="/special/2">
										<img class="img100" src="/images/main/spList02.jpg" alt="">
										<span class="txtRoom">
											<span>명품한우식당</span>
											<small>
												공주시의 특산품인 명품 한우 브랜드, 공주알밤한우<br>
												농림축산식품부에서 인증한 안심식당에서 즐겨보세요.<br>
												신선한고기를 바로 제공하여 정갈한 상차림과 함께 맛있는 추억을 담아가세요.
											</small>
										</span>
									</a>
								</li>
								<li>
									<a href="/special/4">
										<img class="img100" src="/images/main/spList04.jpg" alt="">
										<span class="txtRoom">
											<span>힐스포레 본관</span>
											<small>
											1층은 최대 100명까지 수용가능한 세미나실,<br>
											2층과 3층은 중,소규모의 미팅룸과 강의실, 체험학습실 등이 조성되어 있습니다.<br>
											특히 생태계 및 자연환경, 농업에 대한 학습적 동기부여와 올바른 가치관 형성을 위해<br>
											 교육 및 체험 프로그램을 운영하고 있습니다.
											</small>
										</span>
									</a>
								</li>	
								<li>
									<a href="/special/5">
										<img class="img100" src="/images/main/spList05.jpg" alt="">
										<span class="txtRoom">
											<span>팜갤러리(공연장)</span>
											<small>
												5000여점의 다육식물과 다양한 수종이 어우러진 공간에서<br>
												문화예술 공연을 즐길 수 있는 공연장을 겸비한 식물 갤러리입니다. 
											</small>
										</span>
									</a>
								</li>
								<li>
									<a href="/special/6">
										<img class="img100" src="/images/main/spList06.jpg" alt="">
										<span class="txtRoom">
											<span>패션관</span>
											<small>
												이태리 가방 및 여성의류, 액세서리 등 여행이 일상이 되어 여유와 멋을 느낄 수 있는 새로운 쉼터입니다.
											</small>
										</span>
									</a>
								</li>
								<li>
									<a href="/special/7">
										<img class="img100" src="/images/main/spList07.jpg" alt="">
										<span class="txtRoom">
											<span>스크린골프</span>
											<small>
												가족, 친구, 연인 우리만을 위한 스크린 골프도 치고<br>
												영화관람, 노래방, 게임을 즐길 수 있는 멀티스페이스 입니다.
											</small>
										</span>
									</a>
								</li>
								<li>
									<a href="/special/8">
										<img class="img100" src="/images/main/spList08.jpg" alt="">
										<span class="txtRoom">
											<span>힐링센터(문화강좌)</span>
											<small>
												건강강좌, 공예체험, 베이커리 강의 등<br>
												이론과 실기를 같이 수강할 수 있는 공간이 준비되어 누구나 힐링수업을 들을 수 있습니다.
											</small>
										</span>
									</a>
								</li>
								<li>
									<a href="/special/9">
										<img class="img100" src="/images/main/spList09.jpg" alt="">
										<span class="txtRoom">
											<span>K-POP스쿨</span>
											<small>
												국내 연예 기획사와 협업하여 중국, 태국, 베트남, 필리핀 등<br>
												K-POP의 노래와 춤을 배우고 싶은 학생들을 대상으로<br> 전문 강사진에게 배우는 교육장과 호텔을 운영하고 있습니다.
											</small>
										</span>
									</a>
								</li>
								<li>
									<a href="/special/10">
										<img class="img100" src="/images/main/spList10.jpg" alt="">
										<span class="txtRoom">
											<span>어드벤처</span>
											<small>
												관람열차, 에어바운스 플레이그라운드, 트램펄린 등<br>
												힐스포레에 방문하는 어린이와 청소년이 즐겁게 즐길 수 있는 시설이 준비되어 있습니다.
											</small>
										</span>
									</a>
								</li>
								<li>
									<a href="/special/12">
										<img class="img100" src="/images/main/spList13.jpg" alt="">
										<span class="txtRoom">
											<span>정원</span>
											<small>
												아담한 이브의정원 & 별빛정원, 싱그러운 자연과 더불어<br>
												소중한사람과의 추억을 쌓아보세요.
											</small>
										</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="Cont05">
						<div class="con05_box">
							<div class="con05_img">
								<img src="/images/main/img01_04.png" alt="" class="img100">
							</div>
							<p class="kor">
								바쁜 일상으로 함께 하고픈 것들을 잃어버리고<br>
								미뤄두었다면, 지금 여기 힐스포레에서 휴식하며 힐링하세요<br>
								기분 좋은 공간이 있는 여기는 힐스포레입니다.
							</p>
						</div>
					</div>
				</div>
				<!-- spList end -->

				<div class="Cont06">
					<div class="con06_box">
						<img src="/images/main/img01_05.jpg" alt="" class="img100">
						<div class="con06_txt">
							<h2 class="eng">THANKS FOR VISITING</h2>
							<!--p>
								The day i want to leave dear friend.<br>
								Whenever you want to make beautiful memories with lovers, friends, and family,<br>
								please find them at any time.
							</p-->
						</div>
					</div>
				</div>
			</div>

	<?php
	$sql = "SELECT * FROM `popup` WHERE `is_open` = '1' ORDER BY `ordering` ASC, `idx` DESC";
	$data['popups'] = $this -> data_model -> getList($sql, 'DB');
	$data['is_mobile'] = $is_mobile;
	$sql = "SELECT * FROM `slide` WHERE `is_open` = '1' ORDER BY `ordering` ASC, `idx` DESC";
    $data['slides'] = $this -> data_model -> getList($sql, 'DB');
	$this -> load -> view('include/popup', $data);	

	?>
<!--부정클릭방지-->
<!-- Smartlog -->
<script type="text/javascript"> 
    var hpt_info={'_account':'UHPT-70396'};
</script>
<script language="javascript" src="//a70.smlog.co.kr/smart.js" charset="utf-8"></script>
<noscript><img src="//a70.smlog.co.kr/smart_bda.php?_account=70396" style="display:none;width:0;height:0;" border="0"/></noscript> 
	<!-- 배너 구성 및 스크립트 -->
	
	<script>
		$(function(){
			$('.B_btn').click(function(){
				$('.go_group').fadeToggle(200);	
				if ($(".learn-more").hasClass("active")) {
					$(".learn-more").removeClass("active");
				}
				else {
					$(".learn-more").addClass("active");
				}
			})
		});
		$('.close button').click(function(){
			$('.video-wrap').hide();
		})
	</script>

