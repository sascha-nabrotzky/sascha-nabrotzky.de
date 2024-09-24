window.addEventListener('load', (event) => {
    if (document.querySelector('.frame-slide-in-right')) {
        const element = document.querySelector('.frame-slide-in-right');
        setTimeout(element.classList.add('appear'), 600);
    }
});
