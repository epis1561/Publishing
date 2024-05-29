<?
$topArea="roomPre";
$categoryNum="02";
$folderName="room";
$pageNum="200";
$subNum="00";
$pageTitle01="미리보기";
$pageTitle02="Room Preview";
$pageText01="
	
";
$control_header="sub";
?>
<? include_once ("./include/header.php"); ?>
	<? include_once ("./include/topArea.php"); ?>
	<div class="mainbar" id="mainbar">
    	<h1> KIDS POOLVILLA</h1>
  	</div>
	<? include_once ("./include/subNav.php"); ?>
	<div class="main01_05">
      <div class="txt">
        <span>키즈풀빌라객실</span>
        <h1 class="calli">Juju Kids Poolvilla Rooms</h1>
        <p>
          Your own space for precious time,<br>
          comfortable time, and valuable time.
        </p>
      </div>
      <div class="obj05 obj">
        <img src="/html/images/common/obj05.png" alt="" class="img_00">
      </div>
      <div class="obj06 obj">
        <img src="/html/images/common/obj06.png" alt="" class="img_00">
      </div>
    </div>

	<? include_once ("./include/roomList.php"); ?>

	<div id="contents">
		<div class="roompre01_01 section_fadeIn section">
			<a href="/html/special.php?cate=01">
				<div class="splist01 splist">
					<div class="splist_bg"></div>
					<div class="splist_title"><h1>01</h1><p>KIDS POOL</p></div>
					<div class="hover hover01">MORE +</div>
					<div class="hover hover02">KIDS POOL<br>개별키즈풀</div>
				</div>
			</a>
			<a href="/html/special.php?cate=02">
				<div class="splist02 splist">
					<div class="splist_bg"></div>
					<div class="splist_title"><h1>02</h1><p>KIDS PLAYGROUND</p></div>
					<div class="hover hover01">MORE +</div>
					<div class="hover hover02">KIDS PLAYGROUND<br>개별키즈놀이터</div>
				</div>
			</a>
			<a href="/html/special.php?cate=03">
				<div class="splist03 splist">
					<div class="splist_bg"></div>
					<div class="splist_title"><h1>03</h1><p>BARBECUE</p></div>
					<div class="hover hover01">MORE +</div>
					<div class="hover hover02">BARBECUE<br>개별바베큐</div>
				</div>
			</a>
		</div>

		<div class="roompre01_02 section_fadeIn delay section">
			<img src="/html/images/room/img01.jpg" alt="" class="img_00">
		</div>

		<div class="roompre01_03">
			<div class="left section_fadeIn section">
				<img src="/html/images/room/img02_01.jpg" alt="" class="img_100">
			</div>
			<div class="right section_fadeIn delay section">
				<img src="/html/images/room/img02_02.jpg" alt="" class="img_100">
			</div>
		</div>
	</div>
	<? include_once ("./include/reservation_btn.php"); ?>
<? include_once ("./include/footer.php"); ?>