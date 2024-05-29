$(function (){
  const swiper1 = new Swiper('.swiper1', {
    speed:600,
    // Optional parameters
    // 슬라이드 수 설정
    slidesPerView: 1,
    spaceBetween: 0,
    observer: true,
    observeParents: true,
    allowTouchMove: false,
    // direction: 'horizontal', 'vertical',
    direction: 'horizontal',
    loop: true,
  
    // effect: 'slide', 'fade', 'cube', 'coverflow', 'flip', 'creative', 'cards'
    effect: 'fade',
  
    // If we need pagination
      pagination: {
        el: '.swiper1 .swiper-pagination',
      },

    // Navigation arrows
    navigation: {
      nextEl: '.mainbtn2',
      prevEl: '.mainbtn1',
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
    slidesPerView: 3,
    spaceBetween: 15,
    allowTouchMove: false,
    // loopedSlides:1,
    observer: true,
    observeParents: true,
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
      nextEl: '.preview2',
      prevEl: '.preview1',
    },
    
    // Auto Play
    autoplay: {
      delay: 2500,
     },
    // Responsive breakpoints
    breakpoints: {
      // 280:{
      //   slidesPerView: 1,
      //   spaceBetween: 15 
      // },
      // 768: {
      //   slidesPerView: 1,
      //   spaceBetween: 15
      // },
      //   960:{
 
      //   }
       
       
    }
    
  });

 
  
    const swiper3 = new Swiper('.swiper3', {
      speed:600,
      // Optional parameters
      // 슬라이드 수 설정
      slidesPerView: 1,
      spaceBetween: 0,
      observer: true,
      observeParents: true,
      allowTouchMove: false,
      // direction: 'horizontal', 'vertical',
      direction: 'horizontal',
      loop: true,
    
      // effect: 'slide', 'fade', 'cube', 'coverflow', 'flip', 'creative', 'cards'
      effect: 'slide',
    
      // If we need pagination
        pagination: {
          el: '.swiper3 .swiper-pagination',
        },
    
      // Navigation arrows
      navigation: {
        nextEl: '.aboutbtn2',
        prevEl: '.aboutbtn1',
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


  const swiper4 = new Swiper('.swiper4', {
    speed:600,
    // Optional parameters
    // 슬라이드 수 설정
    slidesPerView: 1,
    spaceBetween: 0,
    observer: true,
    observeParents: true,
    allowTouchMove: false,
    // direction: 'horizontal', 'vertical',
    direction: 'horizontal',
    loop: true,
  
    // effect: 'slide', 'fade', 'cube', 'coverflow', 'flip', 'creative', 'cards'
    effect: 'slide',
  
    // If we need pagination
      pagination: {
        el: '.swiper-pagination',
      },
  
    // Navigation arrows
    navigation: {
      nextEl: '.roombtn2',
      prevEl: '.roombtn1',
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


const swiper5 = new Swiper('.swiper5', {
  speed:600,
  // Optional parameters
  // 슬라이드 수 설정
  slidesPerView: 3,
  slidesPerGroup:1,
  spaceBetween:5,
  // loopedSlides:1,
  observer: true,
  observeParents: true,
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
    nextEl: '.roomlistbtn2',
    prevEl: '.roomlistbtn1',
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
    // // when window width is >= 960px
     991: {
       slidesPerView: 3,
       spaceBetween: 0
     }
  }
  
});
    

const swiper6 = new Swiper('.swiper6', {
  speed:600,
  // Optional parameters
  // 슬라이드 수 설정
  slidesPerView: 1,
  spaceBetween: 0,
  observer: true,
  observeParents: true,
  allowTouchMove: false,
  // direction: 'horizontal', 'vertical',
  direction: 'horizontal',
  loop: true,

  // effect: 'slide', 'fade', 'cube', 'coverflow', 'flip', 'creative', 'cards'
  effect: 'slide',

  // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

  // Navigation arrows
  navigation: {
    nextEl: '.specialbtn2',
    prevEl: '.specialbtn1',
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

const swiper7 = new Swiper('.swiper7', {
  speed:600,
  // Optional parameters
  // 슬라이드 수 설정
  slidesPerView: 1,
  spaceBetween: 0,
  observer: true,
  observeParents: true,
  allowTouchMove: false,
  // direction: 'horizontal', 'vertical',
  direction: 'horizontal',
  loop: true,

  // effect: 'slide', 'fade', 'cube', 'coverflow', 'flip', 'creative', 'cards'
  effect: 'slide',

  // If we need pagination


  // Navigation arrows
  navigation: {
    nextEl: '.preview2_m',
    prevEl: '.preview1_m',
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
  
})
});
