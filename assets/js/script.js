document.addEventListener('DOMContentLoaded', () => {
    const header = document.getElementById('header');
    const menuBtn = document.querySelector('.menu-toggle');
    const overlay = document.querySelector('.menu-overlay');
    
    menuBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        header.classList.toggle('open');
    });

    overlay.addEventListener('click', () => {
        header.classList.remove('open');
    });
});