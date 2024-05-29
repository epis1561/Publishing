<!DOCTYPE html>
<html lang="en">
<title>여완플랫폼</title>

<head>
	<link rel="stylesheet" href="/css/main.css">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport"
		content="width=device-width,user-scalable=yes,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">

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
<div class="wrap_all">

	<form id="form1" name="form1" action="/sub_all" method="post">
		<div class="wrap_flex">
			<div class="flex">
				<div class="category" id="">
					<img src="/images/main/main_region.png" alt="" id="pc_bg">
					<img src="/images/main/m/main_region.png" alt="" id="mo_bg">
				</div>
				<div class="options">
					<h3>지역별</h3>
					<div class="button-flex" id=_region>
						<button type="button" id="region_all">전체보기</button>
						<button type="button" id="region1" onclick="toggleValue('서울','resultInput_region')">서울특별시</button>
						<button type="button" id="region2" onclick="toggleValue('인천','resultInput_region')">인천광역시</button>
						<button type="button" id="region3" onclick="toggleValue('경기도','resultInput_region')">경기도</button>
						<button type="button" id="region4" onclick="toggleValue('강원도','resultInput_region')">강원도</button>
						<button type="button" id="region5" onclick="toggleValue('제주도','resultInput_region')">제주도</button>
						<button type="button" id="region6" onclick="toggleValue('충청북도','resultInput_region')">충청북도</button>
						<button type="button" id="region7" onclick="toggleValue('전라북도','resultInput_region')">전라북도</button>
						<button type="button" id="region8" onclick="toggleValue('경상북도','resultInput_region')">경상북도</button>
						<button type="button" id="region9" onclick="toggleValue('충청남도','resultInput_region')">충청남도</button>
						<button type="button" id="region10" onclick="toggleValue('전라남도','resultInput_region')">전라남도</button>
						<button type="button" id="region11" onclick="toggleValue('경상남도','resultInput_region')">경상남도</button>
						<input type="hidden" id="resultInput_region" name="resultInput_region" readonly>
					</div>
				</div>
			</div>
			<div class="flex">
				<div class="category">
					<img src="/images/main/main_theme.png" alt="" id="pc_bg">
					<img src="/images/main/m/main_theme.png" alt="" id="mo_bg">
				</div>
				<div class="options">
					<h3>테마별</h3>
					<div class="button-flex" id=_theme>
						<button type="button" id="theme_all">전체보기</button>
						<button type="button" id="theme1" onclick="toggleValue('호텔/리조트','resultInput_theme')">호텔/리조트</button>
						<button type="button" id="theme2" onclick="toggleValue('풀빌라','resultInput_theme')">풀빌라</button>
						<button type="button" id="theme3" onclick="toggleValue('펜션','resultInput_theme')">펜션</button>
						<button type="button" id="theme4" onclick="toggleValue('키즈','resultInput_theme')">키즈</button>
						<button type="button" id="theme5" onclick="toggleValue('글램핑','resultInput_theme')">글램핑</button>
						<button type="button" id="theme6" onclick="toggleValue('애견','resultInput_theme')">애견</button>
						<input type="hidden" id="resultInput_theme" name="resultInput_theme" readonly>
					</div>
				</div>
			</div>
			<div class="flex">
				<div class="category">
					<img src="/images/main/main_price.png" alt="" id="pc_bg">
					<img src="/images/main/m/main_price.png" alt="" id="mo_bg">
				</div>
				<div class="options">
					<h3>특가별</h3>
					<div class="button-flex" id=_price>
						<button type="button" id="price_all">전체보기</button>
						<button type="button" id="price1" onclick="toggleValue('최저가','resultInput_price')">최저가</button>
						<button type="button" id="price2" onclick="toggleValue('당일특가','resultInput_price')">당일특가</button>
						<input type="hidden" id="resultInput_price" name="resultInput_price" readonly>
					</div>
				</div> 
			</div>
		</div>
		<button type="button" id="_submit" onclick="submitForm()">GOGO>></button>
</div>

</body>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script>
	function toggleValue(buttonValue,category) {
		var resultInput = document.getElementById(category);
	    var currentValue = resultInput.value;

		if (currentValue.includes(buttonValue)) {
			resultInput.value = currentValue.replace(buttonValue + ",", "").replace("," + buttonValue, "").replace(buttonValue, "").trim();
		} else {
			resultInput.value = currentValue === "" ? buttonValue : currentValue + "," + buttonValue;
		}
	}
</script>


<script>
	$(document).ready(function() {
	
		$('.button-flex').each(function(index, buttonFlex) {
			initializeButtonFlex($(buttonFlex));
		});
	});

	function initializeButtonFlex($buttonFlex) {
			
		const $allButton = $buttonFlex.find('button:first');

		$allButton.click(function() {
			toggleButtons($buttonFlex, true);
		});
	
		$buttonFlex.find('button:not(:first)').click(function() {
			toggleButtons($buttonFlex, false, $(this));
		});
	}

// 버튼 상태를 변경하는 함수
	function toggleButtons($buttonFlex, isAllButton, $clickedButton) {
		const $buttons = $buttonFlex.find('button');
		
		category = 'resultInput' + $buttonFlex[0].id;
		var resultInput = document.getElementById(category);

		select_all="";

		switch ($buttonFlex[0].id) {
		case '_region':
			select_all="서울,인천,경기도,강원도,제주도,충청북도,전라북도,경상북도,충청남도,전라남도,경상남도";
			break;

		case '_theme':
			select_all="호텔/리조트,풀빌라,펜션,키즈,글램핑,애견";
			break;

		case '_price':
			select_all="최저가,당일특가";
			break;
	}

		if (isAllButton) {
		
			if ($buttons.css('background-color') === 'rgb(135, 102, 232)' && $buttons.css('color') === 'rgb(255, 255, 255)') {
				
				$buttons.css({'background-color': '#fff', 'color': '#8766E8'});
				resultInput.value = "";


			} else {				
				$buttons.css({'background-color': '#8766E8', 'color': '#fff'});
				resultInput.value = select_all;
			}
		} else {		
			const buttonIndex = $clickedButton.index();
			if ($clickedButton.css('background-color') === 'rgb(135, 102, 232)' && $clickedButton.css('color') === 'rgb(255, 255, 255)') {
				
				$clickedButton.css({'background-color': '#fff', 'color': '#8766E8'});
			} else {
				
				$clickedButton.css({'background-color': '#8766E8', 'color': '#fff'});
			}
			
			if ($buttons.not(':first').filter(function() {
				return $(this).css('background-color') === 'rgb(135, 102, 232)' && $(this).css('color') === 'rgb(255, 255, 255)';
			}).length === $buttons.length - 1) {
				$buttons.first().css({'background-color': '#8766E8', 'color': '#fff'});
					resultInput.value = select_all;
			} else {
				$buttons.first().css({'background-color': '#fff', 'color': '#8766E8'});
			}
		}
	}

	const firstFlexBox = $('.flex').eq(0);
	const firstFlexBoxHeight = firstFlexBox.height();

	$('.flex').each(function(index, element) {
	$(element).height(firstFlexBoxHeight);
	});

	function submitForm() {
		// 각각의 인풋 요소 값 가져오기
		var regionValue = document.getElementById("resultInput_region").value;
		var themeValue = document.getElementById("resultInput_theme").value;
		var priceValue = document.getElementById("resultInput_price").value;

		// 값이 모두 입력되었는지 확인
		if (regionValue && themeValue && priceValue) {
			document.getElementById("form1").submit();
		} else {
			// 값이 하나라도 입력되지 않았으면 경고창 표시
			if (!regionValue) {
				alert("지역을 선택해 주세요");
			} else if (!themeValue) {
				alert("테마를 선택해 주세요");
			} else if (!priceValue) {
				alert("특가를 선택해 주세요");
			}
		}
	}
</script>