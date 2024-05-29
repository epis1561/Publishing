$(function (){
  const swiper1 = new Swiper('.swiper1', {
    speed:600,
    // Optional parameters
    // 슬라이드 수 설정
    slidesPerView: 1,
    spaceBetween: 0,
    observer: true,
    observeParents: true,
  
    // direction: 'horizontal', 'vertical',
    direction: 'horizontal',
    loop: true,
  
    // effect: 'slide', 'fade', 'cube', 'coverflow', 'flip', 'creative', 'cards'
    effect: 'slide',
  
    // If we need pagination
    //  pagination: {
    //    el: '.swiper-pagination',
    //  },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    
    // Auto Play
    autoplay: {
      delay: 2500,
     },
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      // when window width is >= 960px
      960: {
        slidesPerView: 1,
        spaceBetween: 0
      }
    }
    
  });


  const swiper2 = new Swiper('.swiper2', {
    speed:600,
    // Optional parameters
    // 슬라이드 수 설정
    slidesPerView: 1,
    spaceBetween: 0,
    observer: true,
    observeParents: true,
  
    // direction: 'horizontal', 'vertical',
    direction: 'horizontal',
    loop: true,
  
    // effect: 'slide', 'fade', 'cube', 'coverflow', 'flip', 'creative', 'cards'
    effect: 'slide',
    // If we need pagination
    //  pagination: {
    //    el: '.swiper-pagination',
    //  },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    
    // Auto Play
    autoplay: {
      delay: 2500,
     },
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      // when window width is >= 960px
      960: {
        slidesPerView: 1,
        spaceBetween: 0
      }
    }
    
  });



  const swiper = new Swiper('.swiper', {
    speed:600,
    // Optional parameters
    // 슬라이드 수 설정
    slidesPerView: 1,
    spaceBetween: 0,
    observer: true,
    observeParents: true,
  
    // direction: 'horizontal', 'vertical',
    direction: 'horizontal',
    loop: true,
    allowTouchMove: false,
    // effect: 'slide', 'fade', 'cube', 'coverflow', 'flip', 'creative', 'cards'
    effect: 'slide',
  
    // If we need pagination
    //  pagination: {
    //    el: '.swiper-pagination',
    //  },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    
    // Auto Play
    autoplay: {
      delay: 2000,
     },
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      // when window width is >= 960px
      960: {
        slidesPerView: 1,
        spaceBetween: 0
      }
    }
    
  });

  const swiper3 = new Swiper('.swiper3', {
    speed:600,
    // Optional parameters
    // 슬라이드 수 설정
    slidesPerView: 3,
    spaceBetween: 15,
    observer: true,
    observeParents: true,
  
    // direction: 'horizontal', 'vertical',
    direction: 'horizontal',
    loop: false,
    allowTouchMove: false,
    // effect: 'slide', 'fade', 'cube', 'coverflow', 'flip', 'creative', 'cards'
    effect: 'slide',
  
    // If we need pagination
    //  pagination: {
    //    el: '.swiper-pagination',
    //  },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    
    // Auto Play
    autoplay: {
      delay:4500,
     },
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 3,
        spaceBetween: 0
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 3,
        spaceBetween: 0
      },
      // when window width is >= 960px
      960: {
        slidesPerView: 3,
        spaceBetween: 0
      }
    }
    
  });
    

  const swiper4 = new Swiper('.swiper4', {
    speed:600,
    // Optional parameters
    // 슬라이드 수 설정
    slidesPerView: 2,
    spaceBetween: 15,
    observer: true,
    observeParents: true,
  
    // direction: 'horizontal', 'vertical',
    direction: 'horizontal',
    loop: false,
    allowTouchMove: false,
    // effect: 'slide', 'fade', 'cube', 'coverflow', 'flip', 'creative', 'cards'
    effect: 'slide',
  
    // If we need pagination
    //  pagination: {
    //    el: '.swiper-pagination',
    //  },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    
    // Auto Play
    autoplay: {
      delay:4500,
     },
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 2,
        spaceBetween: 0
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 2,
        spaceBetween: 0
      },
      // when window width is >= 960px
      960: {
        slidesPerView: 2,
        spaceBetween: 0
      }
    }
    
  });
    });
    