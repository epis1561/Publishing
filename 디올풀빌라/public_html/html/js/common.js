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
	TweenMax.to("#header", 0.5, {opacity:"1", ease:"easeOutQuad", delay: 0})
	TweenMax.to(".menu_top", 0.5, { opacity:"1", ease:"easeOutQuad", delay: 0.8})
	//main
	TweenMax.to("#contents", 1, {opacity:"1", ease:"easeOutQuad", delay: 0})
	TweenMax.to(".subArea", 1, { opacity:"1", ease:"easeOutQuad", delay: 0})
	TweenMax.to(".btn_scroll .btn_down", 0.5, { opacity:"1", paddingTop:"15px", ease:"easeOutQuad", delay: 1})
}

//$(window).load(function() {
$(function(){

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
					tgTop = tg.offset().top + 180;

				if(tgTop <= winTop+winH){
					tg.addClass('active');
				}

				else if(tgTop >= winTop+winH){
					tg.removeClass('active');
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


function response(){
	var screenW=$(window).width();
	var screenH=$(window).height();
	if(screenW<=560){
		$('body').removeClass().addClass('mobile');
		$('.topArea01 .lightslider li').css({'height':screenW*0.6});
		if($('.maindata').length==1){
			mainPackageSetMobile();
			mainNewsSetMobile();
		}
	}
	else if(screenW<=768){
		$('body').removeClass().addClass('mobile mobile768');
		$('.topArea01 .lightslider li').css({'height':screenW*0.6});
	}
	else if(screenW<=1024){
		$('body').removeClass().addClass('tablet');
		$('.topArea01 .lightslider li').css({'height':screenW*0.5});
	}
	else if(screenW<=1280){
		$('body').removeClass().addClass('web web1280');
		$('.topArea01 .lightslider li').css({'height':screenH});
	}
	else if(screenW<=1480){
		$('body').removeClass().addClass('web web1480');
		$('.topArea01 .lightslider li').css({'height':screenH});
		//setTimeout(selectorSet,100);
	}
	else if(screenW>1480){
		$('body').removeClass().addClass('web');
		$('.topArea01 .lightslider li').css({'height':screenH});
		//setTimeout(selectorSet,100);
	}
}

function imgPosition(){
	var width=$(window).width();
	var height=$(window).height();
	if($('body').hasClass('mobile')){
		$('.ms-slide .ms-slide-bgcont img').css({'marginTop':'0'});
	}else{
		$('').each(function(){
		$('.ms-slide .ms-slide-bgcont img').css({'marginTop':'0'});
		});
	}
}


$(function(){

	$('.gnb').on('mouseenter',function(){
		if($('body').hasClass('')){
		}else{
		}
	}).on('mouseleave',function(){
		if($('body').hasClass('')){
		}else{
			$(".gnb li.this .gnb_sub").fadeIn(200);
		}
	}).on('keyup',function(){
		if($('body').hasClass('')){
		}else{
		}
	});

	$('.gnb li').on('mouseenter',function(){
		if($('body').hasClass('')){
		}else{
			var a = $(this).hasClass('this');
			if (a === false) { //현재 페이지에 활성화된 메뉴일 때
				$(this).addClass('on').siblings('li').removeClass('on');
				$(this).find('.depth1').animate(200,'swing').clearQueue();
				$(this).find('ul').slideDown(200).clearQueue();
				$(".gnb_sub").not('.on .gnb_sub').slideUp(100).clearQueue();
			} else {
				$(this).addClass('on').siblings('li').removeClass('on');
				$(this).find('.depth1').animate(200,'swing').clearQueue();
				$(this).find('ul').slideDown(200).clearQueue();
			}
		}
	}).on('mouseleave',function(){
			if (!$(this).hasClass('this')) {
				var target = $(this).siblings('this');
				target.addClass('on');
				target.find('.depth1').animate(200,'swing').clearQueue();
				target.find('ul').slideDown(200).clearQueue();
				$(this).removeClass('on');
				$(this).find('ul').slideUp(100).clearQueue();
			}
	}).on('keyup',function(){
		if($('body').hasClass('')){
		}else{
			$(this).parent().find('>li').removeClass('on');
			$(this).addClass('on');
		}
	});
	//btn_top

	$("a.btn_top").click(function(){
		$('html, body').stop().animate({scrollTop:0}, 800, "easeInOutQuart");
		return false;
	});

	$("a.btn_scroll").click(function(e){
		e.preventDefault();
		var position = $(this.hash).offset();
		$('html, body').animate({scrollTop : position.top}, 800, "easeInOutQuart");
	});

	$('.btn_nav').on('click',function(){
		if($('#header').is(':animated')){
		}else{
			if($(this).hasClass('open_nav')){
				$(this).removeClass('open_nav');
				$('#header').removeClass('open_nav');
			}else{
				$(this).addClass('open_nav');
				$('#header').addClass('open_nav');
			}
		}
		return false;
	});

	$('.reserArea .swiper-slide, .tourArea .swiper-slide').on('mouseover',function(){
		var cl_name = $(this).children().attr("class");
		if($(this).hasClass('swiper-slide-active')){
			$(".reserImg, .tourImg").find("."+cl_name).addClass('active');
			$('.reserImg div, .tourImg div').not("."+cl_name).removeClass('active');
		}else{
		}
		return false;
	});


	/*$('.reserArea .swiper-slide').on('mousewheel DOMMouseScroll',function(){
		var cl_name = $(this).children().attr("class");
        e.preventDefault();
        var delta = 0;
        if (!event) event = window.event;
        if (event.wheelDelta) {
            delta = event.wheelDelta / 120;
         if (window.opera) delta = -delta;
         } else if (event.detail) delta = -event.detail / 3;
         var moveTop = null;
         // 마우스휠을 위에서 아래로
        if (delta != 0) {
			$(".reserImg").find("."+cl_name).addClass('active');
			$('.reserImg div').not("."+cl_name).removeClass('active');
		} else {
		}
		return false;
	});*/

	$('.reserImg div:first-child, .tourImg div:first-child').addClass('active');
	$('.swiper-button a').on('click',function(){
		var cl_name = $('.reserArea .swiper-slide.swiper-slide-active, .tourArea .swiper-slide.swiper-slide-active').children().attr("class");
			$(".reserImg, .tourImg").find("."+cl_name).addClass('active');
			$('.reserImg div, .tourImg div').not("."+cl_name).removeClass('active');
		return false;
	});
	$('.swiper-tourNav span').on('click',function(){
		var cl_name = $(this).children().attr("class");
			$(".tourImg").find("."+cl_name).addClass('active');
			$('.tourImg div').not("."+cl_name).removeClass('active');
		return true;
	});
});


//$(window).load(function(){
$(function(){
	$('.lightslider').each(function(){
		var target = $(this).siblings('.lSAction');
		var count = $(this).find('li').not('.clone').length;
		var text = count < 10 ? '0'+ count : count;
		var source = '<div class="count"><span class="current">01</span><span class="total">'+text+'</span></div>';
		target.append(source);
	});
});

$(window).on('load resize', function(){//구조적인 문제로 인해 sticky 대신 커스텀 fixed 소스 사용. 메인페이지와 서브페이지 구분하여 작동
	var ele = $('.topArea');
	var point = ele.offset().top + ele.outerHeight();
	var header = $('#header').height();
	$(window).scroll(function(){
		var scroll = $(window).scrollTop();
		if ($('#wrap').hasClass('main')) {
			if (scroll >= point) {
				$('#header').addClass('fixed');
				$('#wrap').removeClass('control_header');
			} else {
				$('#header').removeClass('fixed');
				$('#wrap').addClass('control_header');
			}
		} else {
			if (scroll > 0) {
				$('#header').addClass('fixed');
			} else {
				$('#header').removeClass('fixed');
			}
		}
	});
});
