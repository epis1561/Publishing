$(function (){
    const swiper = new Swiper('.swiper', {
      speed:600,
      // Optional parameters
      // 슬라이드 수 설정
      slidesPerView: 1,
      spaceBetween: 0,
      observer: true,
      observeParents: true,
      touchStartPreventDefault: false,
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

      
    })
});