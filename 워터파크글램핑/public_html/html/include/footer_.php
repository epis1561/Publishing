<div class="reserWrap section_fadeIn section">
	<a href="/html/reserve.php?cate=01">
		<div class="reser_btn">	
			<p>Reservation</p>
			<img src="/html/images/common/btn_arrow_white.svg" class="btn_arrow">
		</div>
		<img src="/html/images/common/reser_bg.jpg" class="img_100">
	</a>
	<!-- <a href="/html/reserve.php?cate=02" class="none1024">
		<div class="reser_btn">	
			<p>Reservation</p>
			<img src="/html/images/common/btn_arrow_white.svg" class="btn_arrow">
		</div>
		<img src="/html/images/common/reser_bg.jpg" class="img_100">
	</a>
	<a href="<? echo $info['reser_link'] ?>" target="_blank" class="in-block1024">
		<div class="reser_btn">	
			<p>Reservation</p>
			<img src="/html/images/common/btn_arrow_white.svg" class="btn_arrow">
		</div>
		<img src="/html/images/common/reser_bg.jpg" class="img_100">
	</a> -->	
</div>
<? include_once ("./include/subNav.php"); ?>
<div id="footer" class="section_fadeIn section">
	<div class="footerWrap">
		<dl>
			<dt>contact</dt>
			<dd>
				<div class="footer_info footer01">
					<p>대표전화 : <? echo $info['footer_tel'] ?><span></span></p>
					<p>입금계좌 : <? echo $info['footer_bank'] ?></p>
				</div>
				<div class="footer_info footer02">
					<p>주소 : <? echo $info['footer_address'] ?><span></span></p>
					<p>
						업체명 : <? echo $info['site_name'] ?><span></span>
						대표 : <? echo $info['footer_02'] ?><span></span>
						사업자등록번호 : <? echo $info['footer_03'] ?>
					</p>
				</div>
				<div class="footer03">
					<a href="/adm" target="_blank">관리자 로그인</a> <span class="line">|</span>
					<a href="http://gogo-people.com/privacy.html" target="_blank">개인정보 보호정책</a> <span class="line">|</span>
					By <a href="http://gogo-people.com" target="_blank">여행고고</a>
				</div>
			</dd>
		</dl>
	</div>
	<a href="#" class="btn_top" title="TOP"><img src="/html/images/common/btn_top.svg"></a>
</div>
</body>
</html>