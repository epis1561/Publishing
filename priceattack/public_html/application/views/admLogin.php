<link rel="stylesheet" href="/css/admLogin.css">

<?php
include('admHeader.php');
?>

<style>
    .header_flex p{
        display: none;
    }
</style>

<body>
    <div class="admLogin_wrap">
    
        <div id="logo">
            <img src="/images/common/logo.png" alt="">
        </div>
        <h2>LOGIN</h2>
        <div class="loginwrap">
            <form action="" id="loginForm">
                <div class="loginflex">
                    <label for="id"></label>
                    <input type="text" id="id" name="id" placeholder="이메일을 입력해 주세요.">
                    <label for="password"></label>
                    <input type="password" id="password" placeholder="비밀번호를 입력해 주세요.">
                    <div class="checkflex">
                        <input type="checkbox" name="store" id="store">
                        <label for="store"></label> <span>아이디 저장</span>
                        <div class="find"><a href="">아이디</a><span>/</span><a href=""> 비밀번호 찾기</a></div>
                    </div>
                </div>
            </form>
            <div class="submit">
                <button type="submit" form="loginForm">로그인</button>
                <a href="/account" id="membership">회원가입</a>
            </div>
<div class="phone">
    <h2>고객센터 000-0000-0000</h2>
    <p>(운영시간 : 주중, 주말 및 공휴일 10:00~12:00, 14:00~20:00)</p>
</div>
<a href="" class="company">(주) 여행의 완성</a>
        </div>
    </div>
</body>