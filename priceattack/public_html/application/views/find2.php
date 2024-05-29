<?php
include('admHeader.php');
?>
<link rel="stylesheet" href="/css/find.css">
<div class="wrap_all">
    <div class="logo">
        <img src="/images/common/logo.png" alt="">
    </div>
    <form action="">
        <div class="flex">
            <label for="f_id">아이디</label>
            <input type="text" id="f_id">
        </div>
        <div class="flex" id="flex_2">
            <label for="f_tel">휴대폰</label>
            <input type="tel" id="f_tel" placeholder="'-' 없이 입력">
            <a href="" target="_blank">인증번호</a>
        </div>
        <div class="flex">
            <label for="f_num">인증번호</label>
            <input type="text" id="f_num">
        </div>
        <button>인증확인</button>
    </form>
</div>