const { space } = require("postcss/lib/list");

const swiper = new Swiper('.hero-slide', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    effect: 'fade',
    
  });

  const projets = new Swiper('.projects_container', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,
    slidesPerView: 'auto',
    spaceBetween: 35,
    centeredSlides:false,
    
  
    // Navigation arrows
    navigation: {
      nextEl: '.projet_next',
      prevEl: '.projet_previous',
    },
    scrollbar: {
        el: '.swiper-scrollbar',
      },

      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
  });