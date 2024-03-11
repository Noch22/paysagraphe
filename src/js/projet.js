var buttons = document.querySelectorAll('.btn-img');
var activeButton = null;

buttons.forEach(button => { 
    button.addEventListener('click', () => {
        if (activeButton === button) {
            gsap.to(activeButton, {
                duration: 0.3,
                scale: 1,
                ease: 'power1.inOut',
                transform: 'translate(0, 0)'
            });
            activeButton.classList.remove('active');
            activeButton = null;
        } else {
            if(activeButton !== null && activeButton !== button){
                gsap.to(activeButton, {
                    duration: 0.3,
                    scale: 1,
                    ease: 'power1.inOut',
                    transform: 'translate(0, 0)'
                });
                console.log(activeButton);
                activeButton.classList.remove('active');

                gsap.to(button, {
                    duration: 0.3,
                    scale: 2,
                    ease: 'power1.inOut',
                });
                button.classList.add('active');
            }else {
                gsap.to(button, {
                duration: 0.3,
                scale: 2,
                ease: 'power1.inOut',
            });
            button.classList.add('active');
            activeButton = button;
            }

        }
    })
})