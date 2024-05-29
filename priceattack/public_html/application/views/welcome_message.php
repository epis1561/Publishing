<!DOCTYPE html>
<html lang="en">
<title>여완플랫폼</title>
<?php
    $mobile = !!(FALSE !== strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile'));
	$directory = './images/' . 'main/' . ($mobile ? 'm/' : '') ;
	$files = glob($directory . '01_*.jpg');
?>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport"
		content="width=device-width,user-scalable=yes,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
		<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>

<body>
<?php
include('header.php');
?>
<div class="bg-wrap">
	<div class="swiper-wrap">
		<div class="swiper">
			<div class="swiper-wrapper">
			<?php
				foreach ($files as $file) {
					echo "<div class='swiper-slide'><img src='" . $file . "'></div>";
				}
				?>
			</div>
		</div>
	</div>
	<div class="textbox" id="m_text">
	<h2>오직 지금, 여완플랫폼만의 핫타임<br>독점할인!</h2>
	<p>당일예약 가능한 최고의 숙소를 특가로 만나보세요.</p>
</div>
</div>
<form id="form1" name="form1" action="/sub_all2" method="post">
<div class="ac_box">
				<button type="button" class="accordion acco1 pc">지역</button>
				<div class="panel acco1">
					<div class="flex">
						<label for="region_all"><input type="checkbox" name="region_all" id="region_all"><label for="region_all"></label>전체</label>
						<label for="region1"><input type="checkbox" name="region1" id="region1"><label for="region1"></label>서울</label>
						<label for="region2"><input type="checkbox" name="region2" id="region2"><label for="region2"></label>인천</label>
						<label for="region3"><input type="checkbox" name="region3" id="region3"><label for="region3"></label>경기</label>
						<label for="region4"><input type="checkbox" name="region4" id="region4"><label for="region4"></label>강원</label>
						<label for="region5"><input type="checkbox" name="region5" id="region5"><label for="region5"></label>제주</label>
						<label for="region6"><input type="checkbox" name="region6" id="region6"><label for="region6"></label>충북</label>
						<label for="region7"><input type="checkbox" name="region7" id="region7"><label for="region7"></label>충남</label>
						<label for="region8"><input type="checkbox" name="region8" id="region8"><label for="region8"></label>경북</label>
						<label for="region9"><input type="checkbox" name="region9" id="region9"><label for="region9"></label>경남</label>
						<label for="region10"><input type="checkbox" name="region10" id="region10"><label for="region10"></label>전북</label>
						<label for="region11"><input type="checkbox" name="region11" id="region11"><label for="region11"></label>전남</label>
						<input type="hidden" id="resultInput_region" name="resultInput_region" readonly>
					</div>
				</div>
				<div class="margin1"></div>
				<button type="button" class="accordion acco2 pc">테마</button>
				<div class="panel acco2">
					<div class="flex">
						<label for="theme_all"><input type="checkbox" name="theme_all" id="theme_all"><label for="theme_all"></label>전체</label>
						<label for="theme1"><input type="checkbox" name="theme1" id="theme1"><label for="theme1"></label>호텔/리조트</label>
						<label for="theme2"><input type="checkbox" name="theme2" id="theme2"><label for="theme2"></label>풀빌라</label>
						<label for="theme3"><input type="checkbox" name="theme3" id="theme3"><label for="theme3"></label>펜션</label>
						<label for="theme4"><input type="checkbox" name="theme4" id="theme4"><label for="theme4"></label>글램핑</label>
						<label for="theme5"><input type="checkbox" name="theme5" id="theme5"><label for="theme5"></label>키즈</label>
						<label for="theme6"><input type="checkbox" name="theme6" id="theme6"><label for="theme6"></label>애견</label>
						<input type="hidden" id="resultInput_theme" name="resultInput_theme" readonly>
					</div>
				</div>
				<div class="margin1"></div>
				<button type="button" class="accordion acco3 pc">할인</button>
				<div class="panel acco3">
					<div class="flex">
						<label for="price_all"><input type="checkbox" name="price_all" id="price_all" onchange="handleCheckboxChange('price_all')"><label for="price_all"></label> 전체</label>
						<!-- <label for="price1"><input type="checkbox" name="price1" id="price1"><label for="price1"></label> 최저가보장</label> -->
						<label for="price2"><input type="checkbox" name="price2" id="price2" onchange="handleCheckboxChange('price2')"><label for="price2"></label> 프라이스어택</label>
						<input type="hidden" id="resultInput_price" name="resultInput_price" readonly>
						<input type="hidden" name="activeButtons" id="activeButtons">
					</div>
				</div>
			<button type="submit" class="go">GOGO</button>
</div>
<div class="textbox" id="text_pc">
	<h2 id="text1"></h2>
	<p id="text2"></p>
</div>
<div class="banner">
	<img src="/images/common/banner.png" alt="">
</div>
			
</body>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js"></script>

<script>
var acc = document.getElementsByClassName("accordion");
var i;
if (matchMedia("screen and (min-width: 768px)").matches)  {
    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("mouseenter", function () {
            var panel = this.nextElementSibling;

            if (panel.style.display !== "block") {
                this.classList.add("active");
                panel.style.display = "block";
            }
        });

        acc[i].addEventListener("click", function (event) {

            var panel = this.nextElementSibling;

            if (panel.style.display === "block") {
                panel.style.display = "none";
            }
        });
    }
}

if (matchMedia("screen and (max-width: 768px)").matches)  {
	for (i = 0; i < acc.length; i++) {
			acc[i].addEventListener("click", function () {
			
				this.classList.toggle("active");

			
				var panel = this.nextElementSibling;
				if (panel.style.display === "block") {
					panel.style.display = "none";
				} else {
					panel.style.display = "block";
				}
			});
		}
}


if (matchMedia("screen and (min-width: 768px)").matches){
	new TypeIt("#text1", {
  strings: [" 오직 지금, 핫타임<br>독점할인!", "프라이스 어택에서 만나보세요!"],
  startDelay: 150,
  speed:100,
  loop: true,
breakLines: false,

}).go();

new TypeIt("#text2", {
  strings: ["당일예약 가능한 최고의 숙소를 특가로 만나보세요.","프라이스 어택에서 준비했습니다!"],
  startDelay: 150,
  speed: 100,
  loop: true,
breakLines: false,
}).go();
}
</script>


<script>

function handleCheckboxChange(checkboxId) {
    var checkboxes = document.querySelectorAll('input[name^="price"]:not(#' + checkboxId + ')');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = false;
    });
}
document.addEventListener("DOMContentLoaded", function() {
    var form = document.getElementById('form1');

	function getAllLabels(checkboxes) {
		return Array.from(checkboxes).map(checkbox => {
			// 체크박스와 연결된 라벨의 텍스트를 가져옵니다.
			var label = document.querySelector(`label[for="${checkbox.id}"]`);
			return label ? label.innerText.trim() : '';
		}).join(',');
	}

    // "전체" 체크박스 제어
    ['region_all', 'theme_all'].forEach(function(allId) {
        var allCheckbox = document.getElementById(allId);
        var checkboxes = document.querySelectorAll('input[name^="' + allId.split('_')[0] + '"]:not(#' + allId + ')');

        allCheckbox.addEventListener('change', function() {
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = allCheckbox.checked;
            });
        });

        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                allCheckbox.checked = Array.from(checkboxes).every(c => c.checked);
            });
        });
    });

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // 폼의 기본 제출 동작을 방지

        // 각 체크박스 그룹의 상태 확인
        var regionValues = getCheckedValues(document.querySelectorAll('input[name^="region"]:not(#region_all)'));
        var themeValues = getCheckedValues(document.querySelectorAll('input[name^="theme"]:not(#theme_all)'));
        var priceValues = getCheckedValues(document.querySelectorAll('input[name^="price"]:not(#price_all)'));

		setInputValue('region', regionValues.length > 0 ? regionValues.join(',') : getAllLabels(document.querySelectorAll('input[name^="region"]:not(#region_all)')));
    	setInputValue('theme', themeValues.length > 0 ? themeValues.join(',') : getAllLabels(document.querySelectorAll('input[name^="theme"]:not(#theme_all)')));
    	setInputValue('price',priceValues);
		form.submit(); // 실제 폼 제출을 원할 경우 주석 해제
		// setInputValue('price', priceValues.length > 0 ? priceValues.join(',') : getAllLabels(document.querySelectorAll('input[name^="price"]:not(#price_all)')));
		


        // 폼 제출 처리
        form.submit(); // 실제 폼 제출을 원할 경우 주석 해제
    });

	function toArray(nodeList) {
    return Array.prototype.slice.call(nodeList);
}

    // 선택된 체크박스의 값들을 문자열로 반환하는 함수
	function getCheckedValues(checkboxes) {
    var values = [];
    checkboxes.forEach(function(checkbox) {
        if (checkbox.checked) {
            var label = checkbox.closest('label').textContent.trim();
            if (label !== '전체') { // "전체" 텍스트 제외
                values.push(label);
            }
        }
    });
    return values; // 배열을 반환하도록 수정
}

    // 숨겨진 입력 필드를 생성/업데이트하는 함수
    function setInputValue(name, value) {
        var input = document.querySelector('input[name="' + name + '"]');
        if (!input) {
            input = document.createElement('input');
            input.type = 'hidden';
            input.name = name;
            form.appendChild(input);
        }
        input.value = value;
    }
});
</script>