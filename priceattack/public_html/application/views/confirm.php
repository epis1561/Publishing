<head>
<meta name="viewport" content="width=device-width,user-scalable=yes,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<link rel="stylesheet" href="/css/confirm.css">
</head>
<style>
    .menu-m ul li{
        width: 39.5% !important;
    }
</style>

<?php include('header2.php'); ?>

<div class="confirm-wrap">
<form action="">
    <div class="flex-wrap">
        <div class="leftbox">
                <ul class="flex">
                    <li>업체명</li>
                    <li id="r_pension">프리미엄 키즈 풀빌라</li>
                </ul>
                <ul class="flex">
                    <li>객실명</li>
                    <li id="r_room">독채1</li>
                </ul>
                <ul class="flex">
                    <li>체크인/아웃</li>
                    <li id="r_date">2023.08.22(화) ~ 2023.08.23(수)</li>
                </ul>
            <div class="flex">
                <label for="r_name">예약자명</label>
                <input type="text" required name="r_name"id="r_name">
            </div>
            <div class="flex">
                <label for="r_name2">입실자명</label>
                <input type="text" name="r_name2" id="r_name2">
            </div>
        </div>
        <div class="rightbox">
                <ul class="flex">
                    <li>예약금</li>
                    <li>200,000원</li>
                </ul>
        
                <div class="flex">
                <label for="r_tel">전화번호</label>
                <input type="tel" required name="r_tel" id="r_tel">
        </div>
        <div class="flex">
                <label for="r_tel2">전화번호</label>
                <input type="tel" name="r_tel2" id="r_tel2">
        </div>
        </div>
    </div>
    

    <!-- 모바일버전 입니다. .flex-wrap은 display:none(768px~) -->
    <div class="m-wrap">
        <div class="flex-wrap-m">
            <ul class="font-color">
                <li>업체명</li>
                <li>객실명</li>
                <li>체크인</li>
                <li>체크아웃</li>
            </ul>
            <ul>
                <li>프리미엄 키즈 풀빌라</li>
                <li>독채1</li>
                <li>2023.08.22(화)</li>
                <li>2023.08.23(수)/1박</li>
            </ul>
        </div>
        <div class="reser_info">
            <form action="">
                <div class="flex-m">
                    <label for="r_name_m">예약자명</label>
                    <input type="text" name="r_name_m" id="r_name_m">
                </div>
                <div class="flex-m">
                    <label for="r_name2_m">입실자명</label>
                    <input type="text" name="r_name2_m" id="r_name2_m">
                </div>
                <div class="flex-m">
                    <label for="r_tel_m">전화번호</label>
                    <input type="tel" name="r_tel_m" id="r_tel_m">
                </div>
            </form>
        </div>
    </div>
    <button type="submit">예약하기</button>
  </form>
</div>
