$(function(){
	//맨처음 li 디폴트값(2종패키지)
$(document).ready(function(){
	$('.gnb li').eq(1).css("border-bottom","3px solid #978d6e");
	$('.Packagewrap .wowrap').eq(0).addClass('active');
})

// 다음 li들 차례로 호버시에 어떻게될지
$('.gnb li').eq(0).hover(function(){
$(this).css({"margin-bottom":"-6px","border-bottom":"3px solid #978d6e"});

}
,function(){
	$(this).css({"margin-bottom":"-6px","border-bottom":"none"})
});

$('.gnb li').eq(2).hover(function(){
$(this).css({"margin-bottom":"-6px","border-bottom":"3px solid #978d6e"});

}
,function(){
	$(this).css({"margin-bottom":"-6px","border-bottom":"none"})
});
//여기까지가 li hover

//subgnb부분 호버시 처리될부분
$('.subgnb li').hover(function(){
$(this).css({"background-color":"#686459","color":"#fff"});
}
,function(){
	$(this).css({"background-color":"#fdfaf4","color":"#686459"}
	)});
	$('.subgnb li').eq(0).css({"background-color":"#686459","color":"#fff"});
});

//subgnb 클릭시 이벤트
$('.subgnb li').eq(0).click(function () {
		$('.Packagewrap .wowrap').eq(0).addClass('active');
		$('.Packagewrap .wowrap').eq(1).removeClass('active');
		$('.Packagewrap .wowrap').eq(2).removeClass('active');
		$('.Packagewrap .wowrap').eq(3).removeClass('active');
		$('.Packagewrap .wowrap').eq(4).removeClass('active');
		$('.Packagewrap .wowrap').eq(5).removeClass('active');
		$('.Packagewrap .wowrap').eq(6).removeClass('active');
		$('.Packagewrap .wowrap').eq(7).removeClass('active');
		$('.Packagewrap .wowrap').eq(8).removeClass('active');

		$('.subgnb li').eq(0).css({
			"background-color": "#686459",
			"color": "#fff"
		});
		$('.subgnb li').eq(1).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(2).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(3).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(4).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(5).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(6).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(7).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(8).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});

	});


	$('.subgnb li').eq(1).click(function () {
		$('.Packagewrap .wowrap').eq(1).addClass('active');
		$('.Packagewrap .wowrap').eq(0).removeClass('active');
		$('.Packagewrap .wowrap').eq(2).removeClass('active');
		$('.Packagewrap .wowrap').eq(3).removeClass('active');
		$('.Packagewrap .wowrap').eq(4).removeClass('active');
		$('.Packagewrap .wowrap').eq(5).removeClass('active');
		$('.Packagewrap .wowrap').eq(6).removeClass('active');
		$('.Packagewrap .wowrap').eq(7).removeClass('active');
		$('.Packagewrap .wowrap').eq(8).removeClass('active');

		$('.subgnb li').eq(1).css({
			"background-color": "#686459",
			"color": "#fff"
		});
		$('.subgnb li').eq(0).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(2).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(3).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(4).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(5).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(6).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(7).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(8).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});

	});

	$('.subgnb li').eq(2).click(function () {
		$('.Packagewrap .wowrap').eq(2).addClass('active');
		$('.Packagewrap .wowrap').eq(0).removeClass('active');
		$('.Packagewrap .wowrap').eq(1).removeClass('active');
		$('.Packagewrap .wowrap').eq(3).removeClass('active');
		$('.Packagewrap .wowrap').eq(4).removeClass('active');
		$('.Packagewrap .wowrap').eq(5).removeClass('active');
		$('.Packagewrap .wowrap').eq(6).removeClass('active');
		$('.Packagewrap .wowrap').eq(7).removeClass('active');
		$('.Packagewrap .wowrap').eq(8).removeClass('active');

		$('.subgnb li').eq(2).css({
			"background-color": "#686459",
			"color": "#fff"
		});
		$('.subgnb li').eq(0).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(1).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(3).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(4).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(5).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(6).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(7).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(8).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});

	});

	$('.subgnb li').eq(3).click(function () {
		$('.Packagewrap .wowrap').eq(3).addClass('active');
		$('.Packagewrap .wowrap').eq(0).removeClass('active');
		$('.Packagewrap .wowrap').eq(1).removeClass('active');
		$('.Packagewrap .wowrap').eq(2).removeClass('active');
		$('.Packagewrap .wowrap').eq(4).removeClass('active');
		$('.Packagewrap .wowrap').eq(5).removeClass('active');
		$('.Packagewrap .wowrap').eq(6).removeClass('active');
		$('.Packagewrap .wowrap').eq(7).removeClass('active');
		$('.Packagewrap .wowrap').eq(8).removeClass('active');

		$('.subgnb li').eq(3).css({
			"background-color": "#686459",
			"color": "#fff"
		});
		$('.subgnb li').eq(0).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(1).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(2).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(4).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(5).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(6).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(7).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(8).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});

	});

	$('.subgnb li').eq(4).click(function () {
		$('.Packagewrap .wowrap').eq(4).addClass('active');
		$('.Packagewrap .wowrap').eq(0).removeClass('active');
		$('.Packagewrap .wowrap').eq(2).removeClass('active');
		$('.Packagewrap .wowrap').eq(3).removeClass('active');
		$('.Packagewrap .wowrap').eq(1).removeClass('active');
		$('.Packagewrap .wowrap').eq(5).removeClass('active');
		$('.Packagewrap .wowrap').eq(6).removeClass('active');
		$('.Packagewrap .wowrap').eq(7).removeClass('active');
		$('.Packagewrap .wowrap').eq(8).removeClass('active');

		$('.subgnb li').eq(4).css({
			"background-color": "#686459",
			"color": "#fff"
		});
		$('.subgnb li').eq(0).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(2).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(3).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(1).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(5).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(6).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(7).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(8).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});

	});

	$('.subgnb li').eq(5).click(function () {
		$('.Packagewrap .wowrap').eq(5).addClass('active');
		$('.Packagewrap .wowrap').eq(0).removeClass('active');
		$('.Packagewrap .wowrap').eq(2).removeClass('active');
		$('.Packagewrap .wowrap').eq(3).removeClass('active');
		$('.Packagewrap .wowrap').eq(4).removeClass('active');
		$('.Packagewrap .wowrap').eq(1).removeClass('active');
		$('.Packagewrap .wowrap').eq(6).removeClass('active');
		$('.Packagewrap .wowrap').eq(7).removeClass('active');
		$('.Packagewrap .wowrap').eq(8).removeClass('active');

		$('.subgnb li').eq(5).css({
			"background-color": "#686459",
			"color": "#fff"
		});
		$('.subgnb li').eq(0).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(2).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(3).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(4).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(1).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(6).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(7).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(8).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});

	});

	$('.subgnb li').eq(6).click(function () {
		$('.Packagewrap .wowrap').eq(6).addClass('active');
		$('.Packagewrap .wowrap').eq(0).removeClass('active');
		$('.Packagewrap .wowrap').eq(2).removeClass('active');
		$('.Packagewrap .wowrap').eq(3).removeClass('active');
		$('.Packagewrap .wowrap').eq(4).removeClass('active');
		$('.Packagewrap .wowrap').eq(5).removeClass('active');
		$('.Packagewrap .wowrap').eq(1).removeClass('active');
		$('.Packagewrap .wowrap').eq(7).removeClass('active');
		$('.Packagewrap .wowrap').eq(8).removeClass('active');

		$('.subgnb li').eq(6).css({
			"background-color": "#686459",
			"color": "#fff"
		});
		$('.subgnb li').eq(0).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(2).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(3).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(4).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(5).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(1).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(7).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(8).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});

	});

	$('.subgnb li').eq(7).click(function () {
		$('.Packagewrap .wowrap').eq(7).addClass('active');
		$('.Packagewrap .wowrap').eq(0).removeClass('active');
		$('.Packagewrap .wowrap').eq(2).removeClass('active');
		$('.Packagewrap .wowrap').eq(3).removeClass('active');
		$('.Packagewrap .wowrap').eq(4).removeClass('active');
		$('.Packagewrap .wowrap').eq(5).removeClass('active');
		$('.Packagewrap .wowrap').eq(6).removeClass('active');
		$('.Packagewrap .wowrap').eq(1).removeClass('active');
		$('.Packagewrap .wowrap').eq(8).removeClass('active');

		$('.subgnb li').eq(7).css({
			"background-color": "#686459",
			"color": "#fff"
		});
		$('.subgnb li').eq(0).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(2).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(3).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(4).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(5).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(6).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(1).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(8).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});

	});

	$('.subgnb li').eq(8).click(function () {
		$('.Packagewrap .wowrap').eq(8).addClass('active');
		$('.Packagewrap .wowrap').eq(0).removeClass('active');
		$('.Packagewrap .wowrap').eq(2).removeClass('active');
		$('.Packagewrap .wowrap').eq(3).removeClass('active');
		$('.Packagewrap .wowrap').eq(4).removeClass('active');
		$('.Packagewrap .wowrap').eq(5).removeClass('active');
		$('.Packagewrap .wowrap').eq(6).removeClass('active');
		$('.Packagewrap .wowrap').eq(7).removeClass('active');
		$('.Packagewrap .wowrap').eq(1).removeClass('active');

		$('.subgnb li').eq(8).css({
			"background-color": "#686459",
			"color": "#fff"
		});
		$('.subgnb li').eq(0).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(2).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(3).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(4).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(5).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(6).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(7).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});
		$('.subgnb li').eq(1).css({
			"background-color": "#fdfaf4",
			"color": "#686459"
		});

	});