$(document).ready(function () {

   	//reset
   	var winW = $(window).width();
   	var mob = 480;
   	var tab = 768;
   	var pc = 1100;
   	var win = $(window);
   	var device;


   	//header background
   	var headLink = $('#headBox')
   	var headBg = function () {
   		var st = $(window).scrollTop();
   		if (st >= 50) {
   			headLink.addClass('head_ac');
			headLink.addClass('active');
   		} else {
   			headLink.removeClass('head_ac');
			headLink.removeClass('active');
   		}
   	};
   	headBg();

   	win.on('scroll', function () {
   		headBg();
   	});
   	//header background end	
		 
   	//scroll top btn
   	$('.top_btn > a').on('click', function (e) {
   		e.preventDefault();
   		var thisTarget = $(this).attr('href');
   		$('html,body').animate({
   			scrollTop: $(thisTarget).offset().top
   		}, 400);
   	});

   	//pc script
   	if ($(window).width() >= 1025) {

   		//header snb active
   		$('#headBox').on('mouseenter focusin', function () {
   			$('.snb').fadeIn('50');
   		});

   		$('#headBox').on('mouseleave', function () {
   			$('.snb').hide();
   		});
   		//header snb active end

   	}; //pc script end

   	//mob script
   	if ($(window).width() <= 1024) {
   		//menu btn
   		$('.gnb_btn').on('click', function () {
   			$(this).toggleClass('gnb_tri');
			$('.reserv_btn').toggleClass('reserv_btn_on');
   		});

   		$('.gnb_wrap > li').on('click', function () {
   			$(this).children('.snb').slideToggle('50');
			$(".snb").not().slideUp(300).clearQueue();
   		});


   	}; //mob script end       

		$(".maintypo").css('opacity','1').fadeIn("slow"); 

	setTimeout(function(){
		$(".maintypo").fadeOut("slow");
	}, 3000); 


	var swiper = new Swiper(".precont03", {
		loop: true,
		effect: "fade",
		fadeEffect: {
			crossFade: true
		},
		autoplay:{
			delay:3000,
			disableOnInteraction:false
		},
		pagination: false,
		navigation: {
		nextEl: ".pre-button-next",
		prevEl: ".pre-button-prev",
		},
	});

	var swiper1 = new Swiper(".precont04", {
		loop: true,
		effect: "fade",
		slidePerView: 1,
		fadeEffect: {
			crossFade: true
		},
		autoplay:{
			delay:3000,
			disableOnInteraction:false
		},
		pagination: false,
		navigation: {
		nextEl: ".pre-button-next",
		prevEl: ".pre-button-prev",
		},
	});
	});



