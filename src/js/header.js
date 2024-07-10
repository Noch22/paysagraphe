const text = document.querySelector('.text p');
text.innerHTML = text.innerText.split('').map(
    (char, i) => `<span style="transform:rotate(${i * 8.9}deg)">${char}</span>`
).join('');

const circle = document.querySelector('.devis_circle');
circle.addEventListener('mouseover', () => {
    circle.classList.add('hover');
});
circle.addEventListener('mouseleave', () => {
    circle.classList.remove('hover');
});

const header = document.querySelector('header');
const burger = document.querySelector('header .burger');
const menuOpen = document.querySelector('header .open');
const menuClose = document.querySelector('header .close');
const body = document.querySelector('body');
burger.addEventListener('click', () => {
    menuOpen.classList.toggle('active');

    if (menuOpen.classList.contains('active')) {
        var tl = gsap.timeline();
        tl.to(".burger", {
            '--beforeScale': 100,
            duration: 0.3,
            ease: "power2.inOut"

        })
        burger.classList.toggle('menuOpen');
        header.classList.toggle('headerOpen');
        tl.to(".open", {
            display: 'flex',
            ease: "power2.inOut",
            delay: 0.5
        })
        tl.to(".burger", {
            '--beforeScale': 1
        }
        )
    } else {
        var tl = gsap.timeline();
        
        tl.to(".burger", {
            '--beforeScale': 100,
            duration: 0.3,
            ease: "power2.inOut"

        })
        tl.to(".open", {
            display: 'none',
            delay: 0.5,
            ease: "power2.inOut"
        })
        burger.classList.toggle('menuOpen');
        header.classList.toggle('headerOpen');
        tl.to(".burger", {
            '--beforeScale': 1
        }
        )

    }
}
);