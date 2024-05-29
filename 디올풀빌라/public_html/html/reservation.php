<!-- xeicon -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
<style>
.subCon02 .new_reser > ul {
	display: flex;
	justify-content: center;
	align-items: center;
	gap: 40px;
	padding: 15% 0 0 0;
}
.subCon02 .new_reser > ul li {
	transition: 0.5s;
	border: 1px solid #000;
    min-height:80px;
    display: flex;
    align-items: center;
    background-color:  #fff !important;
}
.subCon02 .new_reser > ul li a {
    text-align: center;

	gap: 10px;
	width: 300px;
	position: relative;
	display: block;
	padding: 25px 40px;
	background: #fff;
	border-radius: 5px;
}
.subCon02 .new_reser > ul li a::before {
	content: "";
	display: block;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 95%;
    height: 100%;
	
}
.subCon02 .new_reser > ul li a i {
	font-style: normal;
    font-weight: 700;
}
.subCon02 .new_reser > ul li.ddanyo_icon a i {
	font-size: 1.5em;
	color: #000;
}
.subCon02 .new_reser > ul li.naver_icon a i {
	font-family : "xeicon";
	font-size: 1.5em;
	color: #06be34;
    vertical-align:baseline;
}

.subCon02 .new_reser > ul li:nth-child(2):hover {
	border: 1px solid #06be34;
}


.subCon02 .new_reser > ul li a .txt {
	display: inline-block;
    font-weight: 700;
    font-size: 1.3em;
	line-height: normal;
}
.naver_icon{
height: 72px;

}

@media  (max-width: 768px){
/* 예약안내 버튼 */
.subCon02 .new_reser {

}
.subCon02 .new_reser > ul {
	flex-flow: column;
	gap: 10px;
	margin-top: 15%;
}
.subCon02 .new_reser > ul li a {
	width: 200px;
	padding: 10px 20px;
}
.subCon02 .new_reser > ul li a::before {
	content: "";
	display: block;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 95%;
	height: 80%;
	border: 1px solid #fff;
}
.subCon02 .new_reser > ul li.ddanyo_icon a i {
	font-size: 1em;
}
.subCon02 .new_reser > ul li.naver_icon a i {
	font-size: 1.5em;
}
.subCon02 .new_reser > ul li a .txt {
	display: inline-block;
	font-weight: 700;
	font-size: 0.8em;
	line-height: normal;
}
}
@media  (max-width: 560px)	{
	.reserCon{
		height: 250px !important;
        margin-bottom: 20%;
}
}


</style>
<? include_once ("./include/subTop.php"); ?>
<? include_once ("./include/header.php"); ?>	
<div class="subCon subCon02 reserCon" style="height:400px;">
<div class="new_reser">
			<ul>
				<li class="item ddanyo_icon">
					<a href="https://booking.ddnayo.com/booking-calendar-status?accommodationId=100517" target="_blank">
						<i class="icon">홈페이지</i>
						<span class="txt">예약 바로가기</span>
					</a>
				</li>
				 <li class="item naver_icon">
					<a href="https://booking.naver.com/booking/3/bizes/991347" target="_blank">
						<i class="icon xi-naver"></i>
						<span class="txt">네이버 예약<span style="background-color:rgba(6,190,52,0.2);">바로가기</span></span>
					</a>
				</li> 
			</ul>
		</div>
</div>
<? include_once ("./include/footer.php"); ?>