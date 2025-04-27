// Hero Slider Functionality
document.addEventListener('DOMContentLoaded', function() {
    const track = document.querySelector('.carousel-track');
    const slides = Array.from(document.querySelectorAll('.carousel-slide'));
    const nextButton = document.querySelector('.carousel-arrow.next');
    const prevButton = document.querySelector('.carousel-arrow.prev');
    const dotsNav = document.querySelector('.carousel-dots');
    const dots = Array.from(document.querySelectorAll('.carousel-dot'));
    
    if (!track || !slides.length) return;
    
    // Set up initial slide
    const slideWidth = slides[0].getBoundingClientRect().width;
    
    // Arrange slides next to each other
    slides.forEach((slide, index) => {
        slide.style.left = slideWidth * index + 'px';
    });
    
    let currentIndex = 0;
    
    // Function to move to a specific slide
    function moveToSlide(targetIndex) {
        if (targetIndex < 0) {
            targetIndex = slides.length - 1;
        } else if (targetIndex >= slides.length) {
            targetIndex = 0;
        }
        
        track.style.transform = 'translateX(-' + (slideWidth * targetIndex) + 'px)';
        
        // Update active dot
        const currentDot = dotsNav.querySelector('.active');
        if (currentDot) currentDot.classList.remove('active');
        dots[targetIndex].classList.add('active');
        
        currentIndex = targetIndex;
    }
    
    // Set up click handlers for arrows
    if (nextButton) {
        nextButton.addEventListener('click', () => {
            moveToSlide(currentIndex + 1);
        });
    }
    
    if (prevButton) {
        prevButton.addEventListener('click', () => {
            moveToSlide(currentIndex - 1);
        });
    }
    
    // Set up click handlers for dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            moveToSlide(index);
        });
    });
    
    // Auto-advance the slider every 5 seconds
    let slideInterval = setInterval(() => {
        moveToSlide(currentIndex + 1);
    }, 5000);
    
    // Pause auto-advance on hover
    track.addEventListener('mouseenter', () => {
        clearInterval(slideInterval);
    });
    
    track.addEventListener('mouseleave', () => {
        slideInterval = setInterval(() => {
            moveToSlide(currentIndex + 1);
        }, 5000);
    });
    
    // Initialize first slide
    moveToSlide(0);
}); 