/**
 * Specialized script to fix navbar toggle issues, especially on mobile
 */
document.addEventListener('DOMContentLoaded', function() {
    // Get the elements we need to work with
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    if (!navbarToggler || !navbarCollapse) return;
    
    // Direct toggle handler that doesn't rely on Bootstrap
    navbarToggler.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        
        // Toggle the show class
        if (navbarCollapse.classList.contains('show')) {
            navbarCollapse.classList.remove('show');
            navbarToggler.classList.remove('active');
            navbarToggler.setAttribute('aria-expanded', 'false');
        } else {
            navbarCollapse.classList.add('show');
            navbarToggler.classList.add('active');
            navbarToggler.setAttribute('aria-expanded', 'true');
        }
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', function(e) {
        if (navbarCollapse.classList.contains('show') && 
            !navbarCollapse.contains(e.target) && 
            !navbarToggler.contains(e.target)) {
            
            navbarCollapse.classList.remove('show');
            navbarToggler.classList.remove('active');
            navbarToggler.setAttribute('aria-expanded', 'false');
        }
    });
    
    // Close menu when clicking a link on mobile
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (window.innerWidth < 992 && navbarCollapse.classList.contains('show')) {
                navbarCollapse.classList.remove('show');
                navbarToggler.classList.remove('active');
                navbarToggler.setAttribute('aria-expanded', 'false');
            }
        });
    });
    
    // Ensure proper state on page load
    if (window.innerWidth >= 992) {
        navbarCollapse.classList.remove('show');
        navbarToggler.classList.remove('active');
        navbarToggler.setAttribute('aria-expanded', 'false');
    }
    
    // Add resize handler
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 992) {
            navbarCollapse.classList.remove('show');
            navbarToggler.classList.remove('active');
            navbarToggler.setAttribute('aria-expanded', 'false');
        }
    });
}); 