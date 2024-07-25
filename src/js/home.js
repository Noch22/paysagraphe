const { space } = require("postcss/lib/list");
import SplitType from 'split-type'

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


if(inputSlider){
inputSlider.oninput =(()=>{
  let value = inputSlider.value;
  value == 2000 ? slideValue.textContent = "+ de 2000€" : slideValue.textContent = value + "€";
  slideValue.style.left = (value*100/2000) + "%";
})
}

const lenis = new Lenis({
  duration: 1.2,
  easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // https://www.desmos.com/calculator/brs54l4xou
  direction: 'vertical', // vertical, horizontal
  gestureDirection: 'vertical', // vertical, horizontal, both
  smooth: true,
  mouseMultiplier: 1,
  smoothTouch: false,
  touchMultiplier: 2,
  infinite: false,
})

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}
requestAnimationFrame(raf)


document.querySelectorAll('#discover').forEach((el) => {
  el.addEventListener('click', (e) => {
    e.preventDefault()
    const id = el.getAttribute('href')?.slice(24)
    console.log(id)
    if (!id) return
    const target = document.querySelector(id)
    console.log(target)
    if (target) {
      target.scrollIntoView({ behavior: 'smooth' })
    }
  })
})



var tl = gsap.timeline();

tl.to(".hero .home_title h1", {
    y: 0,
    opacity: 1,
    duration: 1,
    ease: "power2.inOut",
})

const text = SplitType.create('.hero .home_title h2');
const chars = text.chars;

tl.fromTo(chars, {
    opacity: 0,
},
{
    opacity: 1,
    duration: 1,
    stagger: 0.05,
    ease: "power2.inOut",
}, "-=0.5")