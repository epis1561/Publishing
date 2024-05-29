 <div class="subNav section">
				<?php if( $categoryNum == '01') {?>
				<ul>
					<li class="<?=iif($pageNum=="11","this","")?>"><a href="/html/epilogue.php">펜션소개</a></li>
					<!--li class="<?=iif($pageNum=="12","this","")?>"><a href="/html/landscape.php">외부풍경</a></li-->
				</ul>
				<?php } ?>

				<?php if( $categoryNum == '02') {?>
				<ul>
					<li class="<?=iif($pageNum=="200","this","")?>"><a href="/html/room_preview.php" class="depth2">미리보기</a></li>
					<li class="<?=iif($pageNum=="201","this","")?>"><a href="/html/room.php?roomnum=01" class="depth2">POOLVILLA101</a></li>
					<li class="<?=iif($pageNum=="202","this","")?>"><a href="/html/room.php?roomnum=02" class="depth2">POOLVILLA102</a></li>
					<li class="<?=iif($pageNum=="203","this","")?>"><a href="/html/room.php?roomnum=03"  class="depth2">POOLVILLA103</a></li>
					<li class="<?=iif($pageNum=="204","this","")?>"><a href="/html/room.php?roomnum=04"  class="depth2">POOLVILLA201</a></li>
					<li class="<?=iif($pageNum=="205","this","")?>"><a href="/html/room.php?roomnum=05" class="depth2">POOLVILLA202</a></li>
					<li class="<?=iif($pageNum=="206","this","")?>"><a href="/html/room.php?roomnum=06" class="depth2">POOLVILLA203</a></li>
				</ul>
				<?php } ?>

				<?php if( $categoryNum == '03') {?>
				<ul>
					<li class="<?=iif($pageNum=="301","this","")?>"><a href="/html/special.php?cate=01" class="depth2">개별키즈풀</a></li>
					<li class="<?=iif($pageNum=="302","this","")?>"><a href="/html/special.php?cate=02" class="depth2">개별키즈놀이터</a></li>
					<li class="<?=iif($pageNum=="303","this","")?>"><a href="/html/special.php?cate=03" class="depth2">개별바베큐</a></li>
					<li class="<?=iif($pageNum=="304","this","")?>"><a href="/html/special.php?cate=04" class="depth2">야외수영장</a></li>
					<li class="<?=iif($pageNum=="305","this","")?>"><a href="/html/special.php?cate=05" class="depth2">방역&호텔침구류</a></li>
					<li class="<?=iif($pageNum=="306","this","")?>"><a href="/html/special.php?cate=06" class="depth2">잔디놀이터</a></li>
					<li class="<?=iif($pageNum=="307","this","")?>"><a href="/html/special.php?cate=07" class="depth2">전동차</a></li>
					<li class="<?=iif($pageNum=="308","this","")?>"><a href="/html/special.php?cate=08" class="depth2">응접실 & 장난감대여</a></li>
				</ul>
				<?php } ?>

				<?php if( $categoryNum == '04') {?>
				<ul>
					<li class="<?=iif($pageNum=="41","this","")?>"><a href="/html/tour.php">주변여행</a></li>
					<li><a href="<? echo $info['tour_link'] ?>" target="_blank"><? echo $info['tour_name'] ?></a></li>					
				</ul>
				<?php } ?>

				<?php if( $categoryNum == '05') {?>
				<ul>
					<li class="<?=iif($pageNum=="51","this","")?>"><a href="/html/reserve.php?cate=01">예약안내</a></li>
					<li class="<?=iif($pageNum=="52","this","")?>">
						<a href="<? echo $info['reser_link'] ?>" target="_blank" class="depth2 none1024 btn_reser_pop">실시간예약</a>
						<a href="<? echo $info['reser_link'] ?>" target="_blank" class="depth2 in-block1024">실시간예약</a>
					</li>
					<!--li class="<?=iif($pageNum=="53","this","")?>"><a href="/html/map.php">오시는길</a></li-->
				</ul>
				<?php } ?>

				<?php if( $categoryNum == '06') {?>
				<ul>
					<!--li class="<!?=iif($pageNum=="61","this","")?>"><a href="/html/board.php?bname=notice">공지사항</a></li>
					<li class="<!?=iif($pageNum=="62","this","")?>"><a href="/html/board.php?bname=qna">예약문의</a></li-->					
					<li class="<!?=iif($pageNum=="63","this","")?>"><a href="/html/board.php?bname=script">여행후기</a></li>
					<!--li class="<!?=iif($pageNum=="64","this","")?>"><a href="/html/board.php?bname=photo">포토갤러리</a></li-->
				</ul>
				<?php } ?>

			</div>