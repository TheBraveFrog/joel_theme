document.addEventListener('DOMContentLoaded', function() {
    const navBtn = document.querySelector('.nav-btn');
    const menuContainer = document.querySelector('.menu-main-nav-container');

    navBtn.addEventListener('click', function() {
        menuContainer.classList.toggle('menu-expanded');
    });
});
