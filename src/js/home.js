function body() {
    document.body.style.overflow = "scroll";
    document.body.style.overflowX = "hidden";
}


let tl = gsap.timeline({delay: 0});

if(document.querySelector('.col')){

tl.to(".col", {
    top: "0",
    duration: 2,
    ease: "power4.inOut"
})

tl.to(".c-1 .item", {
    top: "0",
    stagger: 0.25,
    duration: 3,
    ease: "power4.inOut"
}, "-=2");

tl.to(".c-2 .item", {
    top: "0",
    stagger: -0.25,
    duration: 3,
    ease: "power4.inOut"
}, "-=4");

tl.to(".c-3 .item", {
    top: "0",
    stagger: 0.25,
    duration: 3,
    ease: "power4.inOut"
}, "-=4");

tl.to(".c-4 .item", {
    top: "0",
    stagger: -0.25,
    duration: 3,
    ease: "power4.inOut"
}, "-=4");

tl.to(".c-5 .item", {
    top: "0",
    stagger: 0.25,
    duration: 3,
    ease: "power4.inOut"
}, "-=4");

tl.to(".container", {
    scale: 6,
    duration: 4,
    opacity: 0,
    display: "none",
    ease: "power4.inOut"
}, "-=2");

tl.call(body);

tl.to(".content", {
    top: 0,
    duration: 3,
    opacity: 1,
    ease: "power3.out"
});
} else {
  body();
}
const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    effect: 'fade',
    fadeEffect: {
        crossFade: true
    },
    speed: 1000,
    autoplay: {
        delay: 2000,
    },
  });


var galleryThumbs = new Swiper('.gallery-thumbs', {
  spaceBetween: 10,
  slidesPerView: 1,
  centeredSlides: true,
  loop: false,
  loopedSlides: 5, //looped slides should be the same
  watchSlidesVisibility: true,
  watchSlidesProgress: false,
});
var galleryTop = new Swiper('.gallery-top', {
  spaceBetween: 10,
  slidesPerView: 1,
  centeredSlides: true,
  loop: false,
  loopedSlides: 5, //looped slides should be the same
  thumbs: {
    swiper: galleryThumbs,
  },
});

  if(document.querySelector('.form_name')){
  document.querySelector('.form_name').addEventListener("focusin", function() {
    document.querySelector('.label_name').classList.add('focused');
  });

  document.querySelector('.form_name').addEventListener("focusout", function() {
    if (document.querySelector('.form_name').value == "") {
      document.querySelector('.label_name').classList.remove('focused');
    }
  });

  document.querySelector('.form_email').addEventListener("focusin", function() {
    document.querySelector('.label_email').classList.add('focused');
  });

  document.querySelector('.form_email').addEventListener("focusout", function() {
    if (document.querySelector('.form_email').value == "") {
      document.querySelector('.label_email').classList.remove('focused');
    }
  });

  document.querySelector('.form_subject').addEventListener("focusin", function() {
    document.querySelector('.label_subject').classList.add('focused');
  });

  document.querySelector('.form_subject').addEventListener("focusout", function() {
    if (document.querySelector('.form_subject').value == "") {
      document.querySelector('.label_subject').classList.remove('focused');
    }
  });
}




  // cursor 