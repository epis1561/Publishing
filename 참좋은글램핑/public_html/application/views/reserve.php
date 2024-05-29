<script type="text/javascript" id="ddnayoapi" src="https://www.ddnayo.com/api/script.aspx?apiuser=gogopeople" charset="utf-8"></script>
<link rel="StyleSheet" href='https://www.ddnayo.com/api/script.css' type="text/css" />
<link rel="stylesheet" href="/css/reserve.css">
<?php
include('header.php');
?>
<div class="reserve_bg"><p>reservation</p></div>
<div id="contents">
	<div class="reserCon">
		<div class="subCon01">
			<div class="reser01_01">
				<div class="reser_title">
					<p>
						<span class="reser_title01">요금안내</span>
					</p>
					<img src="/images/reserve/img01.png" class="img_100" alt="">
				</div>
			</div>
			<div class="reser01_02">
				<!-- <div class="priceimg none1024"><img src="/images/reser/img01.png" alt=""></div> -->
				<!-- <div class="pricem_img block1024"><img src="/images/reser/m_img01.png" alt=""></div> -->
				<div class="price_text">            	
					<div style="width:100%;" id="total_daily_price2"></div>
					<script type="text/javascript">
						ddnayo.price.dailytable($("#total_daily_price2").get(0), {
							"id_hotel": "16306"		/* 업소 코드 */
							, "su_day": "5"			/* 출력일자 : 파라미터 생략시 기본 7일 최대 7일 */	/* 객실그룹여부 : 파라미터 생략시 기본 true */
						});
					</script>
					<ul class="reser_li">
						<li><strong>※ 예약 및 문의</strong> : <a href="tel:070-4468-1614" style="color:inherit;">070-4468-1614</a>로 전화 주시면 친절히 상담해 드립니다.</li>
						<!-- 계좌적는곳! -->
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="reserCon">
		<div class="subCon01">
			<div class="reser01_01">
				<div class="reser_title">
					<p>
						<span class="reser_title01">예약안내</span>
					</p>
					<img src="/images/reserve/img02.png" class="img_100" alt="">
				</div>
			</div>
			<div class="reser01_02">
				<dl class="reser_dl">
					<dt># 입실/퇴실</dt>
					<dd>
						<ul class="list01">
							<li>입실: 오후 15:00</li>
							<li>퇴실: 오전 11:00</li>
							<li>21:00이후 입실 시 사전연락 필수(입실문의 070-4468-1614)</li>
							
						</ul><br>
					</dd>

					<dt># 인원추가</dt>
					<dd>
						<ul class="list01">
							<li>객실별 기준인원 초과시 인원추가요금 발생</li>
							<li>인원추가비용 : 24개월 이상 1인당(1박당) 20,000원 / 24개월 미만 무료 / 현장결제</li>
						</ul>
					</dd>

					<dt># 매점</dt>
					<dd>
						<ul class="list01">
							<li>이용시간: 09:00 ~ 20:00</li>
							<li>판매 : 생수, 컵라면, 음료, 냉동식품, 주휴, 과자류, 마시멜로우, 조미료세트, 여성용품, 핫팩, 벌레퇴치제, 모기약, 세면도구 셋트 등</li>
							<li>운영 상황에 따라 판매 상품은 변경 될 수 있습니다.</li>
						</ul>
					</dd>

					<dt># 개별바비큐</dt>
					<dd>
						<ul class="list01">
							<li>이용시간: 17:00 ~ 22:00</li>
							<li>이용요금: 숯 + 그릴(1회당) 30,000원 / 현장결제</li>
							
						</ul>
					</dd>

					<dt># 불멍</dt>
					<dd>
						<ul class="list01">
							<li>이용시간 : 17:00 ~ 22:00</li>
							<li>이용요금 : 25,000원 / 장작,불소시게, 오로라가루 / 현장결제</li>
							
						</ul>
					</dd>
					
				</dl>
			</div>
		</div>
	</div>
	<div class="reserCon">
		<div class="subCon01">
			<div class="reser01_01">
				<div class="reser_title">
					<p>
						<span class="reser_title01">이용안내</span>
					</p>
					<img src="/images/reserve/img03.png" class="img_100" alt="">
				</div>
			</div>
			<div class="reser01_02">
				<dl class="reser_dl">
					
					
                    <dt># 예약 및 이용안내</dt>
					<dd>
						<ul class="list01">
							<li>실시간 예약 특성상 경우에 따라 중복 예약이 발생할 수 있으며, 이 경우 먼저 결제된 건에 한하여 우선 예약됩니다.</li>
							<li>실내 절대 금연이며, 적발시 강제 퇴실 조치됩니다.</li>
							<li>향이나 초, 모기향, 가스버너 등 화기에 관련된 제품은 실내 사용을 금지하고 있습니다.(무단 사용으로 화재 발생 시 민형사상 책임이 있습니다.)</li>
							<li>보호자 동반없는 미성년자는 예약 및 입실 절대 불가합니다.</li>
							<li>객실별 최대인원 초과시 입실 불가합니다.</li>
							<li>바비큐 이용시 개별 장비 및 개인 화기는 사용 불가합니다.</li>
							<li>예약 후 펜션이나 객실 변경은 해당예약 취소 후 다시 재예약하셔야 합니다.(예약변경을 위한 취소시에도 취소수수료가 부과되오니 신중하게 예약하시기 바랍니다.)</li>
							<li>밤 10시 이후, 쾌적한 휴식을 위하여 무분별한 오락, 음주 및 고성방가를 자제하여 주시기 바랍니다.</li>
							<li>애견동반 및 입실은 불가합니다.</li>
							<li>시설물 훼손 및 파손하거나 분실시에는 다음 손님이 불편하시지 않도록 반드시 알려주셔야 합니다.</li>
							<li>현금을 포함한 개인소지 귀중품의 분실 및 도난에 대해서는 펜션에서 책임지지 않습니다. 관리에 주의 부탁드립니다.</li>
							<li>펜션이용시 아동을 포함한 고객분의 안전에 유의하여 주시고, 본인 부주의로 인한 안전사고에 대해서는 펜션에서 책임지지 않습니다.</li>
							<li>퇴실시 음식물을 비롯한 모든 쓰레기는 분리수거해 주시고, 사용하신 주방기구는 세척해 주시기 바랍니다.</li>
						</ul>
					</dd>
				</dl>
			</div>
		</div>
	</div>
	<div class="reserCon">
		<div class="subCon01">
			<div class="reser01_01">
				<div class="reser_title">
					<p>
						<span class="reser_title01">환불기준</span>
					</p>
					<img src="/images/reserve/img04.png" class="img_100" alt="">
				</div>
			</div>
			<div class="reser01_02">
				<dl class="reser_dl">
					<dt>환불기준</dt>
					<dd>
						<ul class="list01">
							<li>환불은 입금자와 동일한 예금주에 한하여 가능합니다.</li>
							<li>취소 수수료는 결제일이 아닌 입실일 기준으로 적용됩니다.</li>
							<li>예약 완료 후 날짜 및 객실변경은 입실일 10일 이전에만 가능합니다.</li>
							<li>요금변동으로 인한 환불은 불가 합니다.</li>
							<li>객실 요금은 수시로 변동될 수 있으며, 최종 객실 요금은 '예약하기'에서 확인 가능합니다.</li>
						</ul><br><br>
						<table class="cancelTable">
							<thead>
								<tr>
                                    <th>기준일</th>
                                    <th>취소수수료</th>
                                    <th>환불</th>
                                </tr>
							</thead>
							<tbody>
                                <tr>
                                    <th>이용일 당일</th>
                                    <th>취소수수료 100% 부과</th>
                                    <th>0% 환불</th>
                                </tr>
                                <tr>
                                    <th>이용일 1일전</th>
                                    <th>취소수수료 90% 부과</th>
                                    <th>10% 환불</th>
                                </tr>
                                <tr>
                                    <th>이용일 2일전</th>
                                    <th>취소수수료 80% 부과</th>
                                    <th>20% 환불</th>
                                </tr>
                                <tr>
                                    <th>이용일 3일전</th>
                                    <th>취소수수료 70% 부과</th>
                                    <th>30% 환불</th>
                                </tr>
                                <tr>
                                    <th>이용일 4일전</th>
                                    <th>취소수수료 60% 부과</th>
                                    <th>40% 환불</th>
                                </tr>
                                <tr>
                                    <th>이용일 5일전</th>
                                    <th>취소수수료 50% 부과</th>
                                    <th>50% 환불</th>
                                </tr>
                                <tr>
                                    <th>이용일 6일전</th>
                                    <th>취소수수료 40% 부과</th>
                                    <th>60% 환불</th>
                                </tr>
                                <tr>
                                    <th>이용일 7일전</th>
                                    <th>취소수수료 30% 부과</th>
                                    <th>70% 환불</th>
                                </tr>
                                <tr>
                                    <th>이용일 8일전</th>
                                    <th>취소수수료 20% 부과</th>
                                    <th>80% 환불</th>
                                </tr>
                                <tr>
                                    <th>이용일 9일전</th>
                                    <th>취소수수료 10% 부과</th>
                                    <th>90% 환불</th>
                                </tr>
                                <tr>
                                    <th>이용일 10일전</th>
                                    <th>취소수수료 0% 부과</th>
                                    <th>100% 환불</th>
                                </tr>
							</tbody>
						</table>
                        <!-- <table cellpadding="7" cellspacing="0" id="ptable">
                            <tbody>
                                <tr>
                                    <th><b>날짜<br>(이용일 기준)</b></th>
                                    <th><b>7일전</b></th>
                                    <th><b>4~6일전</b></th>
                                    <th><b>3일전~당일</b></th>
                                </tr>
                                <tr>
                                    <th align="center"><b>환불금액</b></th>
                                    <td align="center">80%</td>
                                    <td align="center">50%</td>
                                    <td align="center">환불불가</td>
                                </tr>
                            </tbody>
                        </table> -->
					</dd>
				</dl>
			</div>
		</div>
	</div>
</div>
<div class="underbox">
        <div class="bg11">
            <img src="/images/main/bg11.png" alt="">
        </div>
        <div class="underline">
        </div>
    </div>
<?php
include('footer.php');
?>