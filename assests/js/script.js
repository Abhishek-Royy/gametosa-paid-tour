document.addEventListener('DOMContentLoaded', function() {
    // Mobile Menu Toggle Functionality - Improved version
    const mobileMenuBtn = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    if (mobileMenuBtn && navbarCollapse) {
        // Add click event listener for toggle button
        mobileMenuBtn.addEventListener('click', function(event) {
            event.preventDefault();
            event.stopPropagation();
            
            // Toggle the collapse classes
            navbarCollapse.classList.toggle('show');
            this.classList.toggle('active');
            
            // Set aria-expanded for accessibility
            const expanded = navbarCollapse.classList.contains('show');
            this.setAttribute('aria-expanded', expanded ? 'true' : 'false');
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (navbarCollapse.classList.contains('show') && 
                !navbarCollapse.contains(event.target) && 
                !mobileMenuBtn.contains(event.target)) {
                
                navbarCollapse.classList.remove('show');
                mobileMenuBtn.classList.remove('active');
                mobileMenuBtn.setAttribute('aria-expanded', 'false');
            }
        });

        // Close menu when window is resized above mobile breakpoint
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 992) {
                navbarCollapse.classList.remove('show');
                mobileMenuBtn.classList.remove('active');
                mobileMenuBtn.setAttribute('aria-expanded', 'false');
            }
        });
        
        // Close menu when clicking a nav link (for mobile)
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth < 992) {
                    navbarCollapse.classList.remove('show');
                    mobileMenuBtn.classList.remove('active');
                    mobileMenuBtn.setAttribute('aria-expanded', 'false');
                }
            });
        });
    }
    
    // Add viewport height fix for mobile browsers
    const setVh = () => {
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    };
    
    // Set the value on initial load
    setVh();
    
    // Reset the value on resize
    window.addEventListener('resize', setVh);
    
    // Reset the value on orientation change
    window.addEventListener('orientationchange', setVh);

    // Add glitch effect to text elements with glitch-text class
    const glitchElements = document.querySelectorAll('.glitch-text');
    
    if (glitchElements.length > 0) {
        glitchElements.forEach(element => {
            element.addEventListener('mouseover', function() {
                this.classList.add('glitch-active');
                setTimeout(() => {
                    this.classList.remove('glitch-active');
                }, 1000);
            });
        });
    }
});
