function confirmLogout(){
    return confirm('آیا مطمئن هستید که میخواهید خارج شوید؟');
}

function toggleMenu() {
    var nav = document.getElementById("nav");
    var btn = document.querySelector(".menu-btn");

    nav.classList.toggle("active");

    if (nav.classList.contains("active")) {
        btn.innerHTML = "×";
    } else {
        btn.innerHTML = "≡";
    }
}

document.querySelectorAll('#nav a').forEach(link => {
    link.addEventListener('click', () => {
        var nav = document.getElementById("nav");
        var btn = document.querySelector(".menu-btn");
        nav.classList.remove("active");
        btn.innerHTML = "≡";
    });
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth' });
        }
    });
});

const sections = document.querySelectorAll('section');
window.addEventListener('scroll', () => {
    sections.forEach(function(sec) {
        const rect = sec.getBoundingClientRect();
        if (rect.top < window.innerHeight - 100) {
            sec.classList.add('visible');
        }
    });
});

function deleteAdmin(id){
    if(confirm("آیا از حذف ادمین مطمئن هستید؟")){
        window.location.href = "adminpnl_delete.php?id=" + id;
    }
}
        

function copyPhone() {
    navigator.clipboard.writeText("09170000000");
    alert("شماره کپی شد");
}
