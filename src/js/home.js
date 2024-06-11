const { space } = require("postcss/lib/list");

const swiper = new Swiper('.swiper', {
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
    centeredSlides: false,
    
  
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
        disableOnInteraction: true,
        delay: 5000,
      },
  });


const slideValue = document.querySelector(".sliderValue span");
const inputSlider = document.querySelector(".field input");

inputSlider.oninput =(()=>{
  let value = inputSlider.value;
  value == 2000 ? slideValue.textContent = "+ de 2000€" : slideValue.textContent = value + "€";
  slideValue.style.left = (value*100/2000) + "%";
})