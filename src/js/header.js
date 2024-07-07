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