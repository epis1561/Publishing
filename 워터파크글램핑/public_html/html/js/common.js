$(window).on('resize',function(){
	response();
	imgPosition();
	setTimeout(imgPosition,100);
});

(function( $ ) {
  $.fn.keepRatio = function(which) {
      var $this = $(this);
      var w = $this.width();
      var h = $this.height();
      var ratio = w/h;
      $(window).resize(function() {
          switch(which) {
              case 'width':
                  var nh = $this.width() / ratio;
                  $this.css('height', nh + 'px');
                  break;
              case 'height':
                  var nw = $this.height() * ratio;
                  $this.css('width', nw + 'px');
                  break;
          }
      });

  }
})( jQuery );


function goTop() {
	$(window).scrollTop(0) ;
}

function init() {
	var max_width = $(window).innerWidth();

	TweenMax.to("#header", 0.5, {opacity:"1", ease:"easeOutQuad", delay: 0.5})
	TweenMax.to(".menu_top", 0.5, { opacity:"1", ease:"easeOutQuad", delay: 0.8})
	//main
	TweenMax.to("#contents", 1, {opacity:"1",  ease:"easeOutQuad", delay: 0})

	
	if (max_width < 768) {
		TweenMax.to(".subNav", 0.6, {bottom:"90",  ease:"easeOutQuad", delay: 1})
	} else {
		TweenMax.to(".subNav", 0.6, {bottom:"0",  ease:"easeOutQuad", delay: 1})
	}
	TweenMax.to(".subArea", 1, { opacity:"1", ease:"easeOutQuad", delay: 0})
	TweenMax.to(".btn_scroll .btn_down", 0.5, { opacity:"1", paddingTop:"15px", ease:"easeOutQuad", delay: 1})
	TweenMax.to(".fix_bg", 0.5, { opacity:"1", ease:"easeOutQuad", delay:1})
	TweenMax.to(".pageBottom", 0.4, { bottom:"0", ease:"easeOutQuad", delay:0.55})
	TweenMax.to(".sLine", 1, { opacity:"1", ease:"easeOutQuad", delay:1})
}

$(window).load(function() {

	$(function v11(){$(".btn_scroll .btn_down img").animate({"opacity": "0.1"}, 300, null, v11);});
	$(function v22(){$(".btn_scroll .btn_down img").animate({"opacity": "1"}, 500, null, v22).delay(1000);});

	$(function v11(){$(".room_03_02_text").animate({"opacity": "0"}, 300, null, v11).delay(300);});
	$(function v22(){$(".room_03_02_text").animate({"opacity": "1"}, 500, null, v22).delay(3000);});

}) ;


 // url 입렵창 숨기기
 //window.addEventListener('load', function(){ setTimeout(scrollTo, 0, 0, 1);}, false);

 // 회전
 //window.onorientationchange = function() { location.reload() };


// iframe resize
function autoResize(i)
{
    var iframeHeight=
    (i).contentWindow.document.body.scrollHeight;
    (i).height=iframeHeight+50;
}

var active = {

	init : function(){
		active.winScroll();
	},
	winScroll : function(){
		var myWin = $(window),
			section = $('.section');

		myWin.on('load scroll', function(){
			var winTop = $(this).scrollTop(),
				winH = $(this).height();

			// image loader
			section.each(function(){
				var tg = $(this),
					tgTop = tg.offset().top + 80;

				if(tgTop <= winTop+winH){
					tg.addClass('active');
				}

				else if(tgTop >= winTop+winH){
					//tg.removeClass('active');
				}

			});

		});
	}

}

$(function(){
	active.init();
});

$(function(){
	$('#skip a').on('focus',function(){
		$(this).parent().addClass('on');
	}).on('blur',function(){
		$(this).parent().removeClass('on');
	});
});

$(function(){
	response();
	setTimeout(response,1500);
	setTimeout(imgPosition,1480);
	//setTimeout(selectorSet,1480);
});


//$('.listImg li').css({'display':'block','opacity':'0'});
$(window).on('load scroll',function(){ //시작할 때와 스크롤을 움직일 때
  var scrollPosition = $(window).scrollTop(); // 화면 상단의 위치
  var windowHeight = $(window).height(); // 화면의 높이
  var floor = scrollPosition + windowHeight; // 화면 상단의 위치  + 화면의 높이 = 화면 하단의 위치
  var adjustAmount = 100; // 애니메이션을 작동할 위치를 하단에서 보정할 양
  var eventTrigger = floor - adjustAmount; // 하단에서 보정값을 뺀 위치. 이벤트 시작 방아쇠 위치

   var delaySpeed = 100;
   var fadeSpeed = 1000;
   $('.listImg li').each(function(i){
     var position = $(this).offset().top; //문서 맨 꼭대기에서 이 요소의 맨 윗부분까지의 높이
     if (eventTrigger > position) { //만약 이 요소의 윗부분의 높이보다 처음 설정한 '이벤트 시작 방아쇠 위치'보다 커지면 화면의 하단 방아쇠가 이 요소의 윗부분을 지나간다면
//      $(this).delay(i*(delaySpeed)).css({display:'block',opacity:'0'}).animate({opacity:'1'},fadeSpeed);  //실행
		$(this).delay(i*(delaySpeed)).animate({opacity:'1'},fadeSpeed);  //실행
     }
	});
	$('.listImg02 li').each(function(i){
     var position = $(this).offset().top; //문서 맨 꼭대기에서 이 요소의 맨 윗부분까지의 높이
     if (eventTrigger > position) { //만약 이 요소의 윗부분의 높이보다 처음 설정한 '이벤트 시작 방아쇠 위치'보다 커지면 화면의 하단 방아쇠가 이 요소의 윗부분을 지나간다면
//      $(this).delay(i*(delaySpeed)).css({display:'block',opacity:'0'}).animate({opacity:'1'},fadeSpeed);  //실행
		$(this).delay(i*(delaySpeed*2)).animate({opacity:'1'},fadeSpeed*3);  //실행
     }
	});
});


function response(){
	var screenW=$(window).width();
	var screenH=$(window).height();
	if(screenW<=560){
		$('body').removeClass().addClass('mobile');
		$('#wrap').css({'paddingTop':60});
		$('.topArea01 .lightslider li, .mainMovie').css({'height':screenW*0.563});
		$('.main .topArea01 .lightslider li').css({'height':screenW*0.8});
		$('.mainList li').css({'height':screenW*0.4});
		if($('.maindata').length==1){
			mainPackageSetMobile();
			mainNewsSetMobile();
		}
	}
	else if(screenW<=768){
		$('body').removeClass().addClass('mobile mobile768');
		$('#wrap').css({'paddingTop':60});

		$('.topArea01 .lightslider li, .mainMovie').css({'height':screenW*0.563});
		$('.main .topArea01 .lightslider li').css({'height':screenW*0.8});
		$('.mainList li').css({'height':screenW*0.36});
	}
	else if(screenW<=1024){
		$('body').removeClass().addClass('tablet');
		$('#wrap').css({'paddingTop':60});
		$('.topArea01 .lightslider li, .mainMovie').css({'height':screenW*0.563});
		$('.mainList li').css({'height':screenW*0.36});
	}
	else if(screenW<=1280){
		$('body').removeClass().addClass('web web1280');
		$('#wrap').css({'paddingTop':0});
		$('.topArea01 .lightslider li, .mainMovie').css({'height':screenW*0.563});
		$('.mainList li').css({'height':screenW*0.36});
		//setTimeout(selectorSet,100);
	}
	else if(screenW<=1480){
		$('body').removeClass().addClass('web web1480');
		$('#wrap').css({'paddingTop':0});
		$('.topArea01 .lightslider li').css({'height':screenW*0.563});
		$('.mainMovie').css({'height':screenH});
		$('.mainList li').css({'height':screenW*0.28125});
		//setTimeout(selectorSet,100);
	}
	else if(screenW>1480){
		$('body').removeClass().addClass('web');
		$('#wrap').css({'paddingTop':0});
		$('.topArea01 .lightslider li, .mainMovie').css({'height':screenH});
		$('.mainList li').css({'height':screenW*0.28125});
		//setTimeout(selectorSet,100);
	}
}

function imgPosition(){
	var width=$(window).width();
	var height=$(window).height();
}

// header menu up, down
$(function(){
	if ($(window).width() >= 1025) {
		/*var gnbSub = $('.gnbArea .gnb > li > .gnb_sub');

		$('.header').on('mouseenter focusin', function () {
			$(gnbSub).fadeIn('50');
		});

		$('.header').on('mouseleave', function () {
			$(gnbSub).hide();
		});*/

		var gnbhover = $('.gnbArea .gnb > li');
		var gnbSub = $('.gnbArea .gnb > li > .gnb_sub');

		$(gnbhover).on('mouseenter focusin', function () {
			$(this).children('.gnb_sub').fadeIn('50');
			$(this).find('.menu_kor').css({"color":"#cd8161 !improtant","display":"block"});
			$(this).find('.menu_eng').css({"display":"none"});

		});
		
		$(gnbhover).on('mouseleave', function () {
			$(gnbSub).hide();
			$(this).find('.menu_kor').css({"color":"#000 !improtant","display":"none"});
			$(this).find('.menu_eng').css({"display":"block"});
		});

	};

	if ($(window).width() <= 1024) {
		//menu btn
		$('.gnb > li').on('click', function () {
			$(this).find('.depth1_mobile').css({"color":"#cd8161 !improtant"});
		}).mouseleave(function(){
			$(this).find('.depth1_mobile').css({"color":"#fff !improtant"});
		});

		$('.gnb > li').on('click', function () {
			$(this).children('.gnb_sub').slideToggle('50');
		 $(".gnb_sub").not().slideUp(300).clearQueue();
		});


	};

	// $('.gnbArea').on('mouseenter',function(){
	// 	if($('body').hasClass('')){
	// 	}else{
	// 	}
	// }).on('mouseleave',function(){
	// 	if($('body').hasClass('')){
	// 	}else{
	// 		$(".gnb li.this .gnb_sub").fadeIn(200);
	// 	}
	// }).on('keyup',function(){
	// 	if($('body').hasClass('')){
	// 	}else{
	// 	}
	// });

	// $('.gnb > li').on('mouseenter',function(){
	// 	if($('body').hasClass('')){
	// 	}else{
	// 		var a = $(this).hasClass('this');
	// 		if (a === false) { //현재 페이지에 활성화된 메뉴일 때
	// 			$(this).addClass('on').siblings('li').removeClass('on');
	// 			$(this).find('.depth1').animate(300,'swing').clearQueue();
	// 			$(this).find('ul').slideDown(300).clearQueue();
	// 			$(".gnb_sub").not('.on .gnb_sub').slideUp(200).clearQueue();
	// 		} else {
	// 			$(this).addClass('on').siblings('li').removeClass('on');
	// 			$(this).find('.depth1').animate(300,'swing').clearQueue();
	// 			$(this).find('ul').slideDown(300).clearQueue();
	// 		}
	// 	}
	// }).on('mouseleave',function(){
	// 		if (!$(this).hasClass('this')) {
	// 			var target = $(this).siblings('this');
	// 			target.addClass('on');
	// 			target.find('.depth1').animate(300,'swing').clearQueue();
	// 			target.find('ul').slideDown(300).clearQueue();
	// 			$(this).removeClass('on');
	// 			$(this).find('ul').slideUp(200).clearQueue();
	// 		}
	// }).on('keyup',function(){
	// 	if($('body').hasClass('')){
	// 	}else{
	// 		$(this).parent().find('>li').removeClass('on');
	// 		$(this).addClass('on');
	// 	}
	// });

	//btn_top

	$("a.btn_top").click(function(){
		$('html, body').stop().animate({scrollTop:0}, 600, "easeInOutQuart");
		return false;
	});

	$("a.btn_scroll").click(function(e){
		e.preventDefault();
		var position = $(this.hash).offset();
		$('html, body').animate({scrollTop : position.top}, 600, "easeInOutQuart");
	});

	$('.btn_nav').on('click',function(){
		if($('#header').is(':animated')){
		}else{
			if($(this).hasClass('open_nav')){
				$('.reser_Btn').css('color', '#000');
				$('.btn_nav .line span').css('background', '#000');
				$(this).removeClass('open_nav');
				$('.gnbArea, .logo').removeClass('open_nav');
			}else{
				$('.reser_Btn').css('color', '#fff');
				$('.btn_nav .line span').css('background', '#fff');
				$(this).addClass('open_nav');
				$('.gnbArea, .logo').addClass('open_nav');
			}
		}
		return false;
	});

});

$(function(){
  $('.room_txt p').hide();
  $('.roomList01 a').mouseenter(function(){
	$(this).find('.room_txt p').fadeIn();
  });
  $('.roomList01 a').mouseleave(function(){
	$(this).find('.room_txt p').fadeOut(100);
  });
});
// $(window).on('load resize', function(){//구조적인 문제로 인해 sticky 대신 커스텀 fixed 소스 사용. 메인페이지와 서브페이지 구분하여 작동
// 	var ele = $('.mainMovie');
// 	var point = ele.length > 0 ? ele.offset().top + ele.outerHeight() : 0;
// 	var header = $('#header').height();
// 	var video = document.getElementById("main_video");
// 	$(window).scroll(function(){
// 		var scroll = $(window).scrollTop();
// 		if ($('#wrap').hasClass('main')) {
// 			if (scroll >= point) {
// 				$('#header').addClass('fixed sticky');
// 				$('#wrap').removeClass('control_header');
// 				document.getElementById('main_video').pause();
// 			} else {
// 				$('#header').removeClass('fixed sticky');
// 				$('#wrap').addClass('control_header');
// 				document.getElementById('main_video').play();
// 			}
// 		} else {
// 			if (scroll > 0) {
// 				$('#header').addClass('sticky');
// 			} else {
// 				$('#header').removeClass('sticky');
// 			}
// 		}
// 	});
// });

