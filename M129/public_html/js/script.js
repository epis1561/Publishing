$(function () {
$(document).ready(function() {

    $('.menu_btn').click(function() {
        $('.menu_btn').toggleClass('active');
        $('.menu').toggleClass('open');
    });

    // windowwidth = window.innerWidth;
    //     if (windowwidth > 1200) {
    //     $(".main_slide").hover(
    //         function(){ swiper.autoplay.stop();},
    //         function(){ swiper.autoplay.start();}
    //     );

    //     $(window).scroll(function(){
    //         if ($(this).scrollTop() > 250) {
    //         $("header .nav ul").addClass('white');
    //         // $("header .add").addClass('hide');
    //         } else {
    //         $("header .nav ul").removeClass('white');
    //         // $("header .add").removeClass('hide');
    //         }

    //     });  
    // };

    var swiper = new Swiper(".main_slide", {
        effect: 'fade',
        scrollbar: {
            el: ".main-scrollbar",
            hide: true,
        },
        pagination: {
            el: ".main-pagination",
            type: "fraction",
        },
        navigation: {
            nextEl: ".visual_next",
            prevEl: ".visual_prev",
        },
        autoplay: {
            delay: 1000,
            disableOnInteraction: false,
        },
        speed: 1000,
    });

    var roomslide = new Swiper(".roomslide", {
        effect: 'fade',
        loop: true,
        pagination: {
            el: ".room-pagination",
            type: "fraction",
        },
        navigation: {
            nextEl: ".room_next",
            prevEl: ".room_prev",
        },
        autoplay: {
            delay: 1500,
            disableOnInteraction: false,
        },
        speed: 500,
    });

    var swiper = new Swiper(".roomlist_m", {
        effect: 'fade',
        loop: true,
        navigation: {
            nextEl: ".slide_next",
            prevEl: ".slide_prev",
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });

    function section2scrollmagic() {
        var controller = new ScrollMagic.Controller();
        new ScrollMagic.Scene()
        .addTo(controller);

        // create a scene with custom options and assign a handler to it.
        var scene = new ScrollMagic.Scene({
            triggerElement: "#trigger1",
             duration: 300,
            offset: 0,
          triggerHook: 0,
           reverse: false,
            
            offset: 1000,
        });
         var tween1 = TweenMax.to('#animate1', 1, {
             scale: 5,
             opacity:0
             // scale: 160,
             // offset: 1000
         });
         var scene = new ScrollMagic.Scene({
             triggerElement: "#trigger1",
             triggerHook: 1,
             duration: "100%"
         })
         .setTween(tween1)
         .addTo(controller)
         .addIndicators({
         	name: "1"
         });

        var tween2 = TweenMax.to('#animate2', 1, {
            opacity: 1,
            // offset: 10
        });
        var scene = new ScrollMagic.Scene({
            triggerElement: "#trigger2",
            duration: "100%"
        })
        .setTween(tween2)
        .addTo(controller)
        }	

    windowwidth = window.innerWidth;
    if (windowwidth > 1200) {
        $(window).scroll(function(){
            if ($(this).scrollTop() > 500) {
                $(".a_section02 > .title > h1 .pen").addClass('write');
            } else {
                $(".a_section02 > .title > h1 .pen").removeClass('write');
            }
        }); 
    }; 

    windowwidth = window.innerWidth;
    if (windowwidth < 900) {
        $(window).scroll(function(){
            if ($(this).scrollTop() > 10) {
                $(".a_section02 > .title > h1 .pen").addClass('write');
            } else {
                $(".a_section02 > .title > h1 .pen").removeClass('write');
            }
        }); 
    }; 


    $(window).scroll(function(){
        if ($(this).scrollTop() > 950) {
            $(".r_section03 > .left > .title > h1 .pen").addClass('write');
        } else {
            $(".r_section03 > .left > .title > h1 .pen").removeClass('write');
        }
    }); 

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
});
})


