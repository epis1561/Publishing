			<? if ($categoryNum != "01") { ?>
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
				@media (max-width:1024px) {
					.cont01_02 h1 {
						padding-left: 20px;
					}
				}
				.cont01_02 h1::before {
					top: 26% !important;
					<? if ($categoryNum=="03" || $categoryNum=="05") { ?>
			   		margin-left: 280px !important;
					<? } else { ?>
					margin-left: 250px !important;	
					<? } ?>
					display: unset;
				}
				@media (max-width:450px) {
					.cont01_02 h1::before {
						margin-left: 140px !important;
					}
				}
			</style>
			<? } ?>			
			<div class="subNav section">
				<ul style="display:<?=iif($categoryNum=="01","block","none")?>">
					<li class="<?=iif($pageNum=="11","this","")?>"><a href="/html/about.php">펜션소개</a></li>
					<!-- <li class="line">ㆍ</li> -->
					<!-- <li class="<?=iif($pageNum=="12","this","")?>"><a href="/html/landscape.php">외부</a></li> -->
				</ul>
				<ul style="display:<?=iif($categoryNum=="03","block","none")?>">
					<li class="line">ㆍ</li><li class="<?=iif($pageNum=="301","this","")?>"><a href="/html/special.php?cate=01" class="depth2">바비큐</a></li>
					<li class="line">ㆍ</li><li class="<?=iif($pageNum=="302","this","")?>"><a href="/html/special.php?cate=02" class="depth2">야외수영장</a></li>
					<li class="line">ㆍ</li><li class="<?=iif($pageNum=="303","this","")?>"><a href="/html/special.php?cate=03" class="depth2">장금이네 샤인머스켓</a></li>
					<li class="line">ㆍ</li><li class="<?=iif($pageNum=="304","this","")?>"><a href="/html/special.php?cate=04" class="depth2">키즈놀이용품</a></li>
					<!-- <li class="line">ㆍ</li><li class="<?=iif($pageNum=="305","this","")?>"><a href="/html/special.php?cate=05" class="depth2">소광장</a></li>	 -->
					<!-- <li class="line">ㆍ</li><li class="<?=iif($pageNum=="306","this","")?>"><a href="/html/special.php?cate=06" class="depth2">동계장박</a></li>		 -->
				</ul>
				<ul style="display:<?=iif($categoryNum=="04","block","none")?>">
					<li class="<?=iif($pageNum=="41","this","")?>"><a href="./tour.php">여행지안내</a></li>
					<li class="line">ㆍ</li>
					<li><a href="https://www.gyeongju.go.kr/tour/index.do" target="_blank" class="depth2">경주관광</a></li>
				</ul>
				<ul style="display:<?=iif($categoryNum=="05","block","none")?>">
					<li class="<?=iif($pageNum=="51","this","")?>"><a href="./reserve.php?cate=01">예약안내</a></li>
					<li class="line">ㆍ</li>
					<li class="<?=iif($pageNum=="52","this","")?>"><a href="<? echo $siteinfo['reser_link'];?>" target="_blank">실시간예약</a></li>
				</ul>
				<ul style="display:<?=iif($categoryNum=="06","block","none")?>">
					<li class="<?=iif($pageNum=="61","this","")?>"><a href="/bbs/board.php?bo_table=p_notice">공지사항</a></li>
					<!--li>|</li>
					<li class="<?=iif($pageNum=="62","this","")?>"><a href="/bbs/board.php?bo_table=p_qna">질문과답변</a></li>
					<li class="line">ㆍ</li>
					<li class="<?=iif($pageNum=="63","this","")?>"><a href="/bbs/board.php?bo_table=p_script">여행후기</a></li>
					<li class="line">ㆍ</li>
					<li class="<?=iif($pageNum=="64","this","")?>"><a href="/bbs/board.php?bo_table=p_photo">포토갤러리</a></li-->
				</ul>
			</div>
			<div class="h_name"></div>
			<h2 class="subTitle">
				<!-- <span class="title01">Rulruralra Kids Pension</span> -->
				<div class="cont01_02">
					<h1><?=$categoryName?><br><span class="title"><?=$pageTitle01?></span></h1>
				</div>
				<!--span class="title_line"></span>
				<span class="title02"><?=$pageTitle01?></span-->
				<? if (!$roomnum) { ?>
				<!--span class="title03">|&nbsp; <?=$pageTitle02?> &nbsp;|</span-->
				<? } ?>
			</h2>
