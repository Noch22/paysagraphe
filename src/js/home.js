function body() {
    document.body.style.overflow = "scroll";
    document.body.style.overflowX = "hidden";
}


let tl = gsap.timeline({delay: 0});

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




  // cursor 

  document.addEventListener("DOMContentLoaded", function () {
    const cursorFollower = document.querySelector(".cursor-follower");
    const cursorInner = document.querySelector(".cursor-follower-inner");

    document.addEventListener("mousemove", function (e) {
      const { clientX: mouseX, clientY: mouseY } = e;
      const cursorWidth = cursorFollower.offsetWidth; // Largeur du curseur
      const cursorHeight = cursorFollower.offsetHeight; // Hauteur du curseur
      const innerWidth = cursorInner.offsetWidth; // Largeur du curseur interne
      const innerHeight = cursorInner.offsetHeight; // Hauteur du curseur interne
      cursorFollower.style.transform = `translate(${mouseX - cursorWidth / 2}px, ${mouseY - cursorHeight / 2}px)`;
    });

    document.addEventListener("scroll", function () {
      const { clientX: mouseX, clientY: mouseY } = event;
      const cursorWidth = cursorFollower.offsetWidth; // Largeur du curseur
      const cursorHeight = cursorFollower.offsetHeight; // Hauteur du curseur
      const innerWidth = cursorInner.offsetWidth; // Largeur du curseur interne
      const innerHeight = cursorInner.offsetHeight; // Hauteur du curseur interne
      cursorFollower.style.transform = `translate(${mouseX - cursorWidth / 2}px, ${mouseY - cursorHeight / 2}px)`;
    });

    const images = document.querySelectorAll("img");
    const links = document.querySelectorAll("a");
    const footer = document.querySelector("footer");

    images.forEach((image) => {
      image.addEventListener("mouseenter", () => {
        cursorInner.style.backgroundImage = `url('https://mirkozeppieri.emanuelepapale.com/assets/images/arrow_up.png')`;
        cursorInner.style.width = "160px";
        cursorInner.style.height = "160px";
        cursorInner.style.backgroundSize = "100px";
      });

      image.addEventListener("mouseleave", () => {
        cursorInner.style.backgroundImage = "none";
        cursorInner.style.width = "8px";
        cursorInner.style.height = "8px";
        cursorInner.style.backgroundSize = "0px";
      });
    });

    links.forEach((link) => {
      link.addEventListener("mouseenter", () => {
        cursorInner.style.backgroundImage = `url('https://i.ibb.co/cv0WsPc/curseur-see.gif')`;
        cursorInner.style.width = "160px";
        cursorInner.style.height = "160px";
        cursorInner.style.backgroundSize = "125px";
    });

      link.addEventListener("mouseleave", () => {
        cursorInner.style.backgroundImage = "none";
        cursorInner.style.width = "8px";
        cursorInner.style.height = "8px";
        cursorInner.style.backgroundSize = "0px";
      });
    });

    footer.addEventListener("mouseenter", () => {
      cursorInner.style.backgroundImage = `url('https://i.ibb.co/jDfQWgh/see-youv2.gif')`;
      cursorInner.style.width = "160px";
      cursorInner.style.height = "160px";
      cursorInner.style.backgroundSize = "125px";
  });

    footer.addEventListener("mouseleave", () => {
      cursorInner.style.backgroundImage = "none";
      cursorInner.style.width = "8px";
      cursorInner.style.height = "8px";
      cursorInner.style.backgroundSize = "0px";
    });
  });