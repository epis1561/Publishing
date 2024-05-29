<!DOCTYPE html>
<html lang="en">
<title>여완플랫폼</title>

<head>
	<link rel="stylesheet" href="/css/main.css">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport"
		content="width=device-width,user-scalable=yes,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">
	<link rel="stylesheet" type="text/css" href="/css/jquery.fullpage.min.css" />
</head>

<body>
	<?php
    $sql = "SELECT * FROM `popup` WHERE `is_open` = '1' ORDER BY `ordering` ASC, `idx` DESC";
    $data['popups'] = $this -> data_model -> getList($sql, 'DB');
    $sql = "SELECT * FROM `slide` WHERE `is_open` = '1' ORDER BY `ordering` ASC, `idx` DESC";
    $data['slides'] = $this -> data_model -> getList($sql, 'DB');
    //$data['is_mobile'] = $is_mobile;
    // $this -> load -> view('include/popup', $data);
?>
<?php
include('header.php');
?>

	<div class="mainwrap" id="fullpage">

		<div class="section" id="page2">
			<div class="chart">
				<img src="/images/main/chart.png" alt="">
				<img src="/images/main/m/chart.png" alt="" id="chart_m">
			</div>
			<div class="chart" id="chart_m">
				<img src="/images/main/m/chart.png" alt="">
			</div>
			<div class="ocean">
				<img src="/images/main/ocean.png" alt="">
			</div>
			<div class="select">
				<a href="http://home3.yeowan.kr" class="theme">테마별</a>
				<a href="/home2" class="sector">지역별</a>
			</div>
			<div class="cloud11">
				<img src="/images/main/cloud11.png" alt="">
			</div>
			<div class="cloud12">
				<img src="/images/main/cloud12.png" alt="">
			</div>
			<div class="cloud13">
				<img src="/images/main/cloud13.png" alt="">
			</div>
			<div class="cloud14">
				<img src="/images/main/cloud14.png" alt="">
			</div>
			<div class="cloud15">
				<img src="/images/main/cloud15.png" alt="">
			</div>
			<!-- 전라남도 -->
            <a href="/sub_region">
			<div class="sector1 wow bounceIn animated" data-wow-offset="-5000">
				<div class="title">
					<img src="/images/main/map.png" alt="">
					<span>전라남도</span>
				</div>
				<div class="sector1img" id="sectors"></div>
				
			</div>
            </a>
			<!-- 전라북도 -->
			<a href="/sub_region">
                <div class="sector2 wow bounceIn animated">
                    <div class="title">
                        <img src="/images/main/map.png" alt="">
                        <span>전라북도</span>
                    </div>
                    <div class="sector2img" id="sectors"></div>
                </div>
            </a>
			<!-- 충청도 -->
			<a href="/sub_region">
                <div class="sector3 wow bounceIn animated">
                    <div class="title">
                        <img src="/images/main/map.png" alt="">
                        <span>충청도</span>
                    </div>
                    <div class="sector3img" id="sectors"></div>
                </div>
            </a>
			<!-- 경상북도 -->
			<a href="/sub_region">
                <div class="sector4 wow bounceIn animated">
                    <div class="title">
                        <img src="/images/main/map.png" alt="">
                        <span>경상북도</span>
                    </div>
                    <div class="sector4img" id="sectors"></div>
                </div>
            </a>
			<!-- 경상남도 -->
			<a href="/sub_region">
                <div class="sector5 wow bounceIn animated">
                    <div class="title">
                        <img src="/images/main/map.png" alt="">
                        <span>경상남도</span>
                    </div>
                    <div class="sector5img" id="sectors"></div>
                </div>
            </a>
			<!-- 강원도 -->
			<a href="/sub_region">
                <div class="sector6 wow bounceIn animated">
                    <div class="title">
                        <img src="/images/main/map.png" alt="">
                        <span>강원도</span>
                    </div>
                    <div class="sector6img" id="sectors"></div>
                </div>
            </a>
			<!-- 경기도 -->
			<a href="/sub_region">
                <div class="sector7 wow bounceIn animated">
                    <div class="title">
                        <img src="/images/main/map.png" alt="">
                        <span>경기도</span>
                    </div>
                    <div class="sector7img" id="sectors"></div>
                </div>
            </a>

	<!-- 모바일작업시작 -->
	<div class="menu-all">
	<a href="">
		<div class="title" id="sector7">
			<img src="/images/main/map.png" alt="">
			<span>경기도</span>
		</div>
	</a>
	<a href="">
		<div class="title" id="sector6">
			<img src="/images/main/map.png" alt="">
			<span>강원도</span>
		</div>
	</a>
	<a href="">
		<div class="title" id="sector5">
			<img src="/images/main/map.png" alt="">
			<span>경상남도</span>
		</div>
	</a>
	<a href="">
		<div class="title" id="sector4">
			<img src="/images/main/map.png" alt="">
			<span>경상북도</span>
		</div>
	</a>
	<a href="">
		<div class="title" id="sector1">
			<img src="/images/main/map.png" alt="">
			<span>전라남도</span>
		</div>
	</a>
	<a href="">
		<div class="title" id="sector2">
			<img src="/images/main/map.png" alt="">
			<span>전라북도</span>
		</div>
	</a>
	<a href="">
		<div class="title" id="sector3">
			<img src="/images/main/map.png" alt="">
			<span>충청도</span>
		</div>
	</a>
	</div>




		</div>
	</div>




	<?php
include('footer.php');
?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
<script type="text/javascript" src="/js/jquery.fullpage.min.js"></script>
<script>
	$(document).ready(function () {
		$('#fullpage').fullpage({
			autoScrolling: true,
			scrollHorizontally: false,
			//   scrollOverflow: true,
			easingcss3: 'cubic-bezier(0.15, 0.15, 0.15, 0.350)',
			//    scrollingSpeed:0.2,
			//     scrollBar: {
			// //      // y축 스크롤바만 보이도록 설정
			//       scrollY: true,
			//       scrollX: false
			//    }
			dragAndMove: false,

		})
	});
	var cursor = $("html");
	cursor.css("cursor", "url('/images/main/cursor.png'),pointer");
	WOW().init();
</script>

</html>
