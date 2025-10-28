//باز و بسته کردن منو در گوشی
const menuBtn = document.getElementById('menu-btn');
const nav = document.getElementById('nav');

menuBtn.addEventListener('click', () => {nav.classList.toggle('active')});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {anchor.addEventListener('click',function (e) { 
    e.preventDefault();

    document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
});
});
});
const sections =
document.querySelectorAll('section');
window.addEventListener('scroll', () => {
    sections.forEach(sec => {
        const rect =
        sec.getBoundingClientRect();
        if (rect.top < window.innerHeight - 100) {
            sec.classList.add('visible');
        }
    });
});

