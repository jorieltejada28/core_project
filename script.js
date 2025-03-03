document.addEventListener("DOMContentLoaded", function () {
    setTimeout(() => {
        document.getElementById("loadingScreen").style.display = "none";
        document.getElementById("mainContent").style.display = "block";
    }, 2000);
});

document.getElementById("menu-toggle").addEventListener("click", function () {
    document.getElementById("menu").classList.toggle("hidden");
});

let index = 0;
const slides = document.querySelectorAll(".slide");
const dots = document.querySelectorAll(".dot");
let slideInterval;

function showSlide(i) {
    slides.forEach((slide, idx) => {
        slide.style.opacity = idx === i ? "1" : "0";
    });
    dots.forEach((dot, idx) => {
        dot.classList.toggle("bg-gray-800", idx === i);
        dot.classList.toggle("bg-gray-300", idx !== i);
    });
}

function nextSlide() {
    index = (index + 1) % slides.length;
    showSlide(index);
}

function resetInterval() {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, 3000);
}

dots.forEach((dot, i) => {
    dot.addEventListener("click", () => {
        index = i;
        showSlide(index);
        resetInterval(); // Reset the 3-second timer when user clicks
    });
});

showSlide(index);
resetInterval(); // Start the interval initially]

document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 80, // Offset for fixed navbar
                behavior: 'smooth'
            });
        }
    });
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute("href"));
        if (target) {
            target.scrollIntoView({
                behavior: "smooth"
            });
        }
    });
});


// Highlight active section
window.addEventListener('scroll', function () {
    let scrollPosition = window.scrollY + 100; // Adjust for fixed navbar
    document.querySelectorAll('section').forEach(section => {
        if (section.offsetTop <= scrollPosition &&
            section.offsetTop + section.offsetHeight > scrollPosition) {
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('font-bold', 'text-[#8B5E3C]');
            });
            document.querySelector(`.nav-link[href="#${section.id}"]`)
                .classList.add('font-bold', 'text-[#8B5E3C]');
        }
    });
});

function togglePassword() {
    const passwordField = document.getElementById("password");
    const icon = document.querySelector("button i");
    if (passwordField.type === "password") {
        passwordField.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    } else {
        passwordField.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }
}

document.addEventListener("DOMContentLoaded", function () {
    // Check if there's a hash in the URL
    if (window.location.hash) {
        const target = document.querySelector(window.location.hash);
        if (target) {
            setTimeout(() => {
                target.scrollIntoView({ behavior: "smooth" });
            }, 500); // Wait for page load before scrolling
        }
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const sectionId = localStorage.getItem('scrollTo');
    if (sectionId) {
        const target = document.getElementById(sectionId);
        if (target) {
            setTimeout(() => {
                target.scrollIntoView({ behavior: "smooth" });
            }, 500);
        }
        localStorage.removeItem('scrollTo'); // Remove stored value
    }
});

function navigateToSection(sectionId) {
    localStorage.setItem('scrollTo', sectionId);
    window.location.href = 'index.php';
}