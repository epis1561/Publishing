
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
</head>
<link rel="stylesheet" href="/css/intro.css">

<div class="intro-wrap">
    <h1>Beautiful Ocean And Sunrise</h1>
    <div class="intro_flex">
    <a href="http://xn--3f4bm9at54atzadg.kr/intro"><div class="box1">
        <div class="photo"><img src="/images/intro/intro2.jpg" alt=""></div><div class="cover">
    </div></a>
    <div class="textbox">
        <p>햇살한스푼<br><span>Address. 경상남도 남해군 남면 남면로 1651-137 / Tel. 010-8412-8449</span></p>
        <div class="logo1">
            <a href="http://xn--3f4bm9at54atzadg.kr/intro"><img src="/images/intro/logo2.png" alt=""><span>ENTER ></span></a>
        </div>
    </div>
</div>
    
<a href="http://m-129.com/intro"><div class="box2">
        <div class="photo"><img src="/images/intro/intro1.jpg" alt=""></div><div class="cover">
    </div></a>
    
    <div class="textbox">
        <p>M129<br><span>Address. 경상남도 남해군 남면 남면로 1739번길6 / Tel. 010-5588-8449</span></p>
        <div class="logo1">
            <a href="http://m-129.com/intro"><img src="/images/intro/logo1.png" alt=""><span>ENTER ></span></a>
        </div>
    </div>

</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    function adjustCoverSize() {
        var height = $('.intro_flex img').height();
        $('.intro_flex .cover').height(height);
    }

    // 초기 로드시 크기 조절
    adjustCoverSize();

    // 창 크기가 변할 때마다 크기 조절
    $(window).resize(function() {
        adjustCoverSize();
    });
</script>