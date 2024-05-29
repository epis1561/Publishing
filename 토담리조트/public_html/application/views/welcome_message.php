<!DOCTYPE html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="robots" content="index, follow">
<meta name="naver-site-verification" content="883bab1f3ff89f2861c977ac1a023c188210cc6a" />
<title>토담리조트</title>
<meta name="keywords" content="기업연수,기업세미나,워크숍,체육대회,대학교MT,교회수련원,포천리조트,단체수련원,단체세미나,단체행사">
<meta name="description" content="기업연수,기업세미나,워크숍,체육대회,대학교MT,교회수련원,포천리조트,단체수련원,단체세미나,단체행사">
<meta property="og:type" content="http://xn--jk1bl1k9ynz2idlb.kr/">
<meta property="og:title" content="토담리조트">
<meta property="og:description" content="기업연수,기업세미나,워크숍,체육대회,대학교MT,교회수련원,포천리조트,단체수련원,단체세미나,단체행사">
<meta property="og:url" content="http://xn--jk1bl1k9ynz2idlb.kr/">
<meta property="al:web:url" content="http://xn--jk1bl1k9ynz2idlb.kr/">
<link rel="canonical" href="http://xn--jk1bl1k9ynz2idlb.kr/">
<meta property="og:image" content="/images/common/image.jpg">
<style>
    body{
        margin: 0;
    }
.logo_box{
    display: flex;
    flex-direction:column;
    align-items: center;
    justify-content: center;
}
.intro_wrap{
    display: flex;
    height: 100%;
    overflow:hidden;
}
.intro_box{
    width: 100%;
    position: relative;
}

#box1{
    background-image: url(/images/intro/bg01.jpg);
    background-size:inherit;
    background-repeat:no-repeat;
    background-position:50%,50%;
    transition: all ease 1.1s;
}
#box2{
    background-image: url(/images/intro/bg02.jpg);
    background-size:inherit;
    background-repeat:no-repeat;
    background-position:35%,50%;
    transition: all ease 1.1s;
}
#box3{
    background-image: url(/images/intro/bg03.jpg);
    background-size:inherit;
    background-repeat:no-repeat;
    background-position:50%,50%;
    transition: all ease 1.1s;
}
#box4{
    background-image: url(/images/intro/bg04.jpg);
    background-size:inherit;
    background-repeat:no-repeat;
    background-position:50%,50%;
    transition: all ease 1.1s;
}
.logo_box{
position: absolute;
top: 50%;left: 50%;
transform:translate(-50%,-50%);
}
.logo_box a{
    display: inline-block;
    width: 100%;
    text-align: center;
}
.gogo{
    display: none;
}
@media(max-width:991px){
    .intro_wrap img{
        width: 75%;
    }
}
@media(max-width:768px){
    .intro_wrap{
    flex-direction:column;
    }
    .intro_box{
        height: 100%;
    }
    .intro_wrap img{
        width: 50%;
    }
    #box3{
        background-position:30%;
    }
    #box1{
    background-image: url(/images/intro/m/bg01.jpg);
  
}
#box2{
    background-image: url(/images/intro/m/bg02.jpg);
  
}
#box3{
    background-image: url(/images/intro/m/bg03.jpg);
  
}
#box4{
    background-image: url(/images/intro/m/bg04.jpg);
 
}
}
</style>



<body>

<div class="intro_wrap">
    <div class="intro_box" id="box1">
            <div class="logo_box">
                <img src="/images/intro/logo_01.png" alt="">
                <a href="http://pocheonkids.kr/home">
                    <img src="/images/intro/gogo.png" alt="" class="gogo">
                </a>
            </div>
    </div>
    <div class="intro_box" id="box2">
            <div class="logo_box">
                <img src="/images/intro/logo_02.png" alt="">
                <a href="http://xn--jk1b514b85e02a.com/html/intro.php">
                    <img src="/images/intro/gogo.png" alt="" class="gogo">
                </a>
            </div>
        
    </div>
    <div class="intro_box" id="box3">
            <div class="logo_box">
                <img src="/images/intro/logo_03.png" alt="">
                <a href="http://xn--jk1bz9fq3gptvgjd.kr/welcome/intro">
                    <img src="/images/intro/gogo.png" alt="" class="gogo">
                </a>
            </div>
      
    </div>
    <div class="intro_box" id="box4">
            <div class="logo_box">
                <img src="/images/intro/logo_04.png" alt="">
                <a href="http://xn--jk1bl1k9ynz2idlb.kr/home">
                    <img src="/images/intro/gogo.png" alt="" class="gogo">
                </a>
            </div>
    </div>
</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    function applyEvents() {
        // 이전에 적용된 이벤트 제거
        $('.intro_box').off('mouseenter mouseleave click');

        if ($(window).width() > 768) {
            // 화면 너비가 768px보다 큰 경우 hover 이벤트 적용
            $('.intro_box').hover(function(){
                var index = $(this).index('.intro_box');
                $('.intro_box').css('width', '20%').eq(index).css('width', '40%');
                $('.gogo').fadeOut().eq(index).fadeIn();
            }, function(){
                $('.intro_box').css('width', '100%');
                $('.gogo').fadeOut();
            });
        } else {
            // 화면 너비가 768px보다 작은 경우 클릭 이벤트 적용
            $('.intro_box').click(function(){
                var index = $(this).index('.intro_box');
                // 클릭한 요소의 높이만 변경되도록 수정
                $(this).css('height', '40%');
                $('.gogo').eq(index).fadeIn();
                // 다른 요소들의 높이를 원래대로 돌려놓기 위해 다른 요소들에 대한 처리 추가
                $('.intro_box').not(this).css('height', '20%');
                $('.gogo').not(':eq(' + index + ')').fadeOut();
            });
        }
    }

    // 페이지 로드 시 이벤트 적용
    applyEvents();

    // 창 크기 변경 시 이벤트 다시 적용
    $(window).on('resize', function() {
        applyEvents();
    });
});
</script>