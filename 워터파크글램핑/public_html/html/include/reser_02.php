<div id="contents">
		<div class="subCon reserCon01">
			<!-- <div class="reser02_01">
				<div class="img_bg section_fadeIn section"></div>
			</div> -->
			<div class="reser02_02 section_fadeIn delay section">
				<dl class="reser_dl section_fadeIn delay section">
					<dt><span class="dl_title">실시간예약</span></dt>
					<dd>
						<div class="reser_info">
							예약전화 : <? echo $info['footer_tel'] ?><br>
							예약계좌 : <? echo $info['footer_bank'] ?>
						</div>
						<div class="reser_frame">
							<iframe src="<? echo $info['reser_link'] ?>" onload="autoResize(this)" title="실시간예약" frameborder="0"></iframe>
						</div>
					</dd>
				</dl>
			</div>
		</div>