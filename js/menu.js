const burgerNav = document.querySelector('.menu-btn')
const closeNav = document.querySelector('#close-menu')
const wrapper = document.querySelector('#wrapper')
const menu = document.querySelector('#menu-open')
let isOpen = false;
const allLinks = menu.querySelectorAll('a')

const openMenu = () => {
    wrapper.style.right = '0';
    wrapper.style.opacity = '1';
    menu.style.right = '0';
    closeNav.style.right = '0';
    menu.style.opacity = '1';
    isOpen = true;
}

const closeMenu = () => {
    wrapper.style.right = '-100vw';
    wrapper.style.opacity = '0';
    menu.style.right = '-100vw';
    closeNav.style.right = '-100vw';
    menu.style.opacity = '0';
    isOpen = false;
}

burgerNav.addEventListener('click', () => {
    openMenu();
})
closeNav.addEventListener('click', () => {
    closeMenu();
})
wrapper.addEventListener('click', () => {
    closeMenu();
})

allLinks.forEach(link => {
    link.addEventListener('click', () => {
        closeMenu();
    })
})