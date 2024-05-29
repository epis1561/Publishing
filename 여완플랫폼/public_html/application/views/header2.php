<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/header.css">
    <title>프라이스어택</title>
</head>
<body>
    <div class="header" id="head_pc">
        <div class="headerwrap">
            <div class="logo">
                <a href="/"><img src="/images/common/logo1.png" alt="" id="logo_pc"></a>
            </div>
                <ul class="user_btn">
                    <li><a href="/like" class="h_btn">즐겨찾기</a></li>
                    <li><a href="/reser_check" class="h_btn">예약확인</a></li>
                    <li><a href="/mypage" class="h_btn">마이페이지</a></li>
                </ul>
        </div>
    </div>

    
    <div class="header-m" id="head_mo">
        <div class="logo-m">
            <a href="/"><img src="/images/common/logo1-m.png" alt=""></a>
        </div>
        <div class="navigation">
            <img src="/images/common/nav.png" alt="">
        </div>
        <div class="closebtn1">
            <img src="/images/common/close2.png" alt="">
        </div>
    </div>
    <div class="menu-m">
            <ul>
                <li><a href="/like"><img src="/images/common/h_like.png" alt="">즐겨찾기</a><span>></span></li>
                <li><a href="/reser_check"><img src="/images/common/h_reser.png" alt="">예약확인</a><span>></span></li>
                <li><a href="/mypage"><img src="/images/common/h_my.png" alt="">마이페이지</a><span>></span></li>
            </ul>
        </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script>
    $('.navigation').click(function(){
       $(this).hide();
       $('.closebtn1').show();
       $('.menu-m').slideDown();
    })
    $('.closebtn1').click(function(){
       $(this).hide();
       $('.navigation').show();
       $('.menu-m').slideUp();
    })
</script>
    
</body>
</html>