$(function(){
    // 메인페이지 슬라이드
    var swiper = new Swiper(".visual_swiper", {
        loop: true,
        speed : 1000,
        mousewheel: false,
        pagination: {
            el: ".visual_pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".visual_next",
            prevEl: ".visual_prev",
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            0: {
                pagination: {
                    type: "fraction",
                    el: ".visual_pagination",
                    clickable: true,
                },
            },
            768: {
                pagination: {
                    el: ".visual_pagination",
                    clickable: true,
                },
            },
        },
    });

    // about 페이지 슬라이드
    var swiper = new Swiper(".about_swiper", {
        loop: true,
        speed : 1000,
        mousewheel: true,
        pagination: {
            el: ".about_pagination",
            type: "fraction",
        },
        navigation: {
            nextEl: ".about_next",
            prevEl: ".about_prev",
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });

    // room미리보기 페이지 슬라이드
    var swiper = new Swiper(".roompre_swiper", {
        speed : 1000,
        slidesPerView: "auto",
        mousewheel: true,
        navigation: {
            nextEl: ".roompre_next",
            prevEl: ".roompre_prev",
        },
        breakpoints: {
            0: {
                loop: false,
                direction: "vertical",
                spaceBetween: 10,
            },
            768: {
                loop: true,
                direction: "horizontal",
                spaceBetween: 40,
            },
        },
    });

     // room 페이지 슬라이드
    var swiper = new Swiper(".room_swiper", {
        loop: true,
        speed : 1000,
        mousewheel: true,
        navigation: {
            nextEl: ".room_next",
            prevEl: ".room_prev",
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            0: {
                pagination: {
                    el: ".room_pagination",
                    type : 'fraction',
                    clickable: false,
                },
            },
            768: {
                pagination: {
                    el: ".room_pagination",
                    type : 'bullets',
                    clickable: true,
                },
            },
        },
    });

      // special 페이지 슬라이드
      var swiper = new Swiper(".special_swiper", {
        loop: true,
        speed : 1000,
        mousewheel: true,
        navigation: {
            nextEl: ".special_next",
            prevEl: ".special_prev",
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            0: {
                pagination: {
                    el: ".special_pagination",
                    type : 'fraction',
                    clickable: false,
                },
            },
            768: {
                pagination: {
                    el: ".special_pagination",
                    type : 'bullets',
                    clickable: true,
                },
            },
        },
    });
});
