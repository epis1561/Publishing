$(function (){
    const swiper1 = new Swiper('.swiper', {
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
       pagination: {
         el: '.mainslide .swiper1 .swiper-pagination',
       },
    
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

      
    });


    
   
    
    });
    
$(function(){
    const swiper2 = new Swiper('.swiper-container-2', {
      speed:600,
      // Optional parameters
      // 슬라이드 수 설정
    
      spaceBetween: 0,
      slidesPerGroup:1,
      observer: true,
      observeParents: true,
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
        768: {
          slidesPerView: 1,
          spaceBetween: 0
        },
        // when window width is >= 960px
        960: {
          slidesPerView: 3,
          spaceBetween: 0
        }
      }
      
    });
  })

  $(function(){
    const swiper2 = new Swiper('.swiper-container-3', {
      speed:600,
      // Optional parameters
      // 슬라이드 수 설정
      slidesPerView: 2,
      spaceBetween: 0,
      slidesPerGroup:2,
      observer: true,
      observeParents: true,
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
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      
      // Auto Play
      autoplay: {
        delay: 4000,
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
          slidesPerView: 2,
          spaceBetween: 0
        }
      }
      
    });

    $(function(){
      const swiper3 = new Swiper('.swiper-container-4', {
        speed:600,
        // Optional parameters
        // 슬라이드 수 설정
        slidesPerView: 1,
        slidesPerGroup: 3,
        slidesPerGroupSkip: 3,
        spaceBetween: 30,
        autoHeight:true,

 
        // centeredSlides: true,    //센터모드
        observer: true,
        observeParents: true,
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
            slidesPerView: 3,
            spaceBetween: 0
          }
        }
        
      });
  })
});


$(function (){
  const swiper4 = new Swiper('.swiper1', {
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
     pagination: {
       el: '.swiper1 .swiper-pagination',
     },
  
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

    
  });
  });



  
$(function (){
  const swiper5 = new Swiper('.swiper2', {
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
     pagination: {
       el: '.swiper2 .swiper-pagination',
     },
  
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

    
  });
  });

  $(function (){
    const swiper6 = new Swiper('.swiper3', {
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
       pagination: {
         el: '.swiper3 .swiper-pagination',
       },
    
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
  
      
    });
    });

    $(function (){
      const swiper7 = new Swiper('.swiper4', {
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
         pagination: {
           el: '.swiper4 .swiper-pagination',
         },
      
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
    
        
      });
      });

      $(function (){
        const swiper8 = new Swiper('.swiper5', {
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
           pagination: {
             el: '.swiper5 .swiper-pagination',
           },
        
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
      
          
        });
        });

        $(function (){
          const swiper9 = new Swiper('.swiper6', {
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
             pagination: {
               el: '.swiper6 .swiper-pagination',
             },
          
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
        
            
          });
          });

          
        $(function (){
          const swiper10 = new Swiper('.swiper7', {
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
             pagination: {
               el: '.swiper7 .swiper-pagination',
             },
          
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
        
            
          });
          });

          $(function (){
            const swiper11 = new Swiper('.swiper8', {
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
               pagination: {
                 el: '.swiper8 .swiper-pagination',
               },
            
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
          
              
            });
            });

            $(function (){
              const swiper12 = new Swiper('.swiper9', {
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
                 pagination: {
                   el: '.swiper9 .swiper-pagination',
                 },
              
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
            
                
              });
              });

              $(function (){
                const swiper13 = new Swiper('.swiper10', {
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
                   pagination: {
                     el: '.swiper9 .swiper-pagination',
                   },
                
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
              
                  
                });
                });

                $(function (){
                  const swiper14 = new Swiper('.swiper11', {
                    speed:600,
                    // Optional parameters
                    // 슬라이드 수 설정
                    slidesPerView: 1,
                    spaceBetween: 30,
                     observer: true,
                     observeParents: true,
                  
                    // direction: 'horizontal', 'vertical',
                    direction: 'horizontal',
                    loop: true,
                  
                    // effect: 'slide', 'fade', 'cube', 'coverflow', 'flip', 'creative', 'cards'
                    effect: 'slide',
                  
                    // If we need pagination
                     pagination: {
                       el: '.swiper11 .swiper-pagination',
                     },
                  
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
              
                    
                  });
              
              
                  
                 
                  
                  });


                  $(function (){
                    const swiper15 = new Swiper('.swiper12', {
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
                       pagination: {
                         el: '.swiper11 .swiper-pagination',
                       },
                    
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
                
                      
                    });
                
                
                    
                   
                    
                    });