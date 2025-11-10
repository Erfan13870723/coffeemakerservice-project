
const menuBtn = document.getElementById('menu-btn');
const nav = document.getElementById('nav');

menuBtn.addEventListener('click', () => {
    nav.classList.toggle('active');
    menuBtn.classList.toggle('open');
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth' });
        }
    });
});

const sections = document.querySelectorAll('section');
window.addEventListener('scroll', () => {
    sections.forEach(sec => {
        const rect = sec.getBoundingClientRect();
        if (rect.top < window.innerHeight - 100) {
            sec.classList.add('visible');
        }
    })
})
