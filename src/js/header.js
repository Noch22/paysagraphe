let tl = gsap.timeline({delay: 0});


var burgers = document.querySelectorAll('button.menu');
console.log(burgers);
var menupage = document.querySelector('.menu_page');
burgers.forEach(item => {
    item.addEventListener('click', function() {
        burgers.forEach(item => {
            item.classList.toggle('opened');
        });
        menupage.classList.toggle('opened');


    });

});

const gradientBox = document.querySelector('.gradient');

tl.to(gradientBox, {
    duration: 10, // Durée de l'animation en secondes
    background: 'linear-gradient(135deg, #ffcc00, #ff6699)', // Nouveau dégradé
    ease: 'power2.inOut', // Facilité d'animation (vous pouvez ajuster cela selon vos préférences)
    repeat: -1, // Répéter l'animation indéfiniment
    yoyo: true // Faire l'animation en sens inverse à la fin
});

document.addEventListener('DOMContentLoaded', function() {  
    const togglebutton = document.querySelector('button.menu');
    let isOpen = false;

    gsap.set(".menu-item p", { y: 225 });

    const timeline = gsap.timeline({ paused: true });

    timeline.to(".custom-logo-link", {
        duration: 0.5,
        opacity: 0,
        ease: "power4.inOut",
    })

    timeline.to(".menu_page", {
        duration: 0.5,
        y: 0,
        opacity: 1,
        ease: "power4.inOut",
    }, "-=.5")

    timeline.to(".header", {
        duration: 1,
        clipPath: "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)",
        ease: "power4.inOut",
    });

    timeline.to(".menu-item p", {
        duration: 1.5,
        y: 0,
        stagger: 0.2,
        ease: "power4.out",
    }, "-=1");

    togglebutton.addEventListener('click', function() {
        if (isOpen) {
            timeline.reverse();
        } else {
            timeline.play();
        }
        isOpen = !isOpen;
    });


});
