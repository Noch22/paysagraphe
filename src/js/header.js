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
