// Email form validation
document.getElementById('emailForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const email = document.getElementById('email').value;
    if(email) {
        alert('Thank you for subscribing!');
        this.reset();
    }
});

const slides = document.querySelectorAll(".image-box .slide");
let currentSlide = 0;

function showSlide(index) {
  slides.forEach((slide) => slide.classList.remove("active"));
  slides[index].classList.add("active");
}

// Auto slide every 3.5 seconds
setInterval(() => {
  currentSlide = (currentSlide + 1) % slides.length;
  showSlide(currentSlide);
}, 3500);

// Initialize
showSlide(currentSlide);

// Smooth scroll for scroll indicator
document.querySelector('.scroll-indicator').addEventListener('click', function() {
    window.scrollTo({
        top: window.innerHeight,
        behavior: 'smooth'
    });
});

