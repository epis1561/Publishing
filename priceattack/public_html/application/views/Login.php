<link rel="stylesheet" href="/css/admLogin.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
include('admHeader.php');
$_SESSION['prev_page'] = $_SERVER['HTTP_REFERER'];
?>

<style>
    .header_flex p{
        display: none;
    }
    .header_flex{
        top: 20% !important;
    }
</style>

<body>
    <div class="admLogin_wrap">
        <div id="logo">
            <img src="/images/common/logo.png" alt="" id="logo_pc">
        </div>
        <h2>LOGIN</h2>
        <div class="loginwrap">
            <form action="Database/authenticate" id="loginForm" method="POST">
                <div class="loginflex">
                    <label for="id"></label>
                    <input type="text" id="id" name="id" placeholder="ID">
                    <label for="password"></label>
                    <input type="password" id="password" name="password" placeholder="PASSWORD">
                    <div class="submit">
                <button type="submit" form="loginForm">로그인</button>
                <a href="/account" id="membership">회원가입</a>
            </div>
                    <div class="checkflex">
                        <div class="find"><a href="/find">아이디</a><span>|</span><a href="/find2"> 비밀번호 찾기</a></div>
                    </div>
                </div>
            </form>
           
<div class="phone">
    <h2>고객센터 070-4468-1610</h2>
    <p>(운영시간 : 주중, 주말 및 공휴일 10:00~12:00, 14:00~20:00)</p>
</div>
<a href="https://yeowan.kr" class="company" target="_blank">(주) 여행의 완성</a>
        </div>
    </div>
</body>