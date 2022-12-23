window.addEventListener('scroll', function(){
    const nav = this.document.querySelector('nav');
    nav.classList.toggle("sticky", window.scrollY > 0);
});

const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('nav ul');
const section = document.querySelector('section');

menuToggle.addEventListener('click', function(){
    nav.classList.toggle('slide');
});

menuToggle.addEventListener('click', function(){
    section.classList.toggle('slide-section');
});

// function toggleMenu(){
//     const menuToggle = document.querySelector('.menuToggle');
//     const navigation = document.querySelector('.navigation');
//     menuToggle.classList.toggle('active');
//     navigation.classList.toggle('active');
// }