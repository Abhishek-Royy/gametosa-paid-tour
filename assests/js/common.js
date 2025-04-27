/**
 * Common JavaScript functionality for responsive behavior
 */

// Initialize on DOM content loaded
document.addEventListener('DOMContentLoaded', function() {
    // Fix for mobile viewport height issues
    setupViewportHeightFix();
    
    // Initialize responsive tables
    makeTablesResponsive();
    
    // Initialize lazy loading for images
    setupLazyLoading();

    // Add smooth scrolling to internal links
    setupSmoothScrolling();
    
    // Detect scroll position for dynamic header
    setupScrollDetection();
    
    // Initialize Bootstrap components
    initializeBootstrapComponents();
});

/**
 * Initialize Bootstrap components that might not auto-initialize properly
 */
function initializeBootstrapComponents() {
    // Manually initialize the collapse components
    if (typeof bootstrap !== 'undefined') {
        // Initialize all collapse elements
        const collapseElements = document.querySelectorAll('.navbar-collapse');
        collapseElements.forEach(collapse => {
            new bootstrap.Collapse(collapse, {
                toggle: false
            });
        });
        
        // Initialize dropdowns
        const dropdownElements = document.querySelectorAll('.dropdown-toggle');
        dropdownElements.forEach(dropdown => {
            new bootstrap.Dropdown(dropdown);
        });
    }
    
    // Fallback for when Bootstrap JS is not loaded yet
    else {
        setTimeout(initializeBootstrapComponents, 500);
    }
}

/**
 * Fixes the viewport height issue on mobile browsers
 * Mobile browsers have issues with vh units due to dynamic address bar
 */
function setupViewportHeightFix() {
    // First we get the viewport height and we multiply it by 1% to get a value for a vh unit
    let vh = window.innerHeight * 0.01;
    // Then we set the value in the --vh custom property to the root of the document
    document.documentElement.style.setProperty('--vh', `${vh}px`);

    // We listen to the resize event
    window.addEventListener('resize', () => {
        // We execute the same script as before
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    });
}

/**
 * Makes tables responsive by wrapping them in a container
 */
function makeTablesResponsive() {
    const tables = document.querySelectorAll('table');
    tables.forEach(table => {
        if (!table.closest('.table-responsive')) {
            const wrapper = document.createElement('div');
            wrapper.className = 'table-responsive';
            table.parentNode.insertBefore(wrapper, table);
            wrapper.appendChild(table);
        }
    });
}

/**
 * Sets up lazy loading for images to improve performance
 */
function setupLazyLoading() {
    const images = document.querySelectorAll('img[data-src]');
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                    imageObserver.unobserve(img);
                }
            });
        });
        
        images.forEach(function(img) {
            imageObserver.observe(img);
        });
    } else {
        // Fallback for browsers that don't support Intersection Observer
        images.forEach(function(img) {
            img.src = img.dataset.src;
            img.removeAttribute('data-src');
        });
    }
}

/**
 * Sets up smooth scrolling for internal links
 */
function setupSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                // Use native smooth scrolling if supported
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

/**
 * Detects scroll position to modify header appearance
 */
function setupScrollDetection() {
    const header = document.querySelector('.cyber-header, .main-header');
    if (!header) return;

    let lastScrollTop = 0;
    const scrollThreshold = 50;

    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        // Add 'scrolled' class when scrolling down past threshold
        if (scrollTop > scrollThreshold) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        
        // Add 'scroll-up' class when scrolling up to show header
        if (scrollTop < lastScrollTop) {
            header.classList.add('scroll-up');
            header.classList.remove('scroll-down');
        } 
        // Add 'scroll-down' class when scrolling down to hide header
        else if (scrollTop > lastScrollTop && scrollTop > 300) {
            header.classList.remove('scroll-up');
            header.classList.add('scroll-down');
        }
        
        lastScrollTop = scrollTop;
    });
}

/**
 * Detects screen size changes and triggers callbacks
 * @param {Object} breakpoints - Object with callbacks for different breakpoints
 */
function addBreakpointListener(breakpoints) {
    function checkBreakpoints() {
        const width = window.innerWidth;
        
        if (width < 576 && breakpoints.xs) {
            breakpoints.xs();
        } 
        else if (width >= 576 && width < 768 && breakpoints.sm) {
            breakpoints.sm();
        }
        else if (width >= 768 && width < 992 && breakpoints.md) {
            breakpoints.md();
        }
        else if (width >= 992 && width < 1200 && breakpoints.lg) {
            breakpoints.lg();
        }
        else if (width >= 1200 && breakpoints.xl) {
            breakpoints.xl();
        }
    }
    
    // Check on load
    checkBreakpoints();
    
    // Check on resize
    window.addEventListener('resize', checkBreakpoints);
}

// Export functions for global use
window.responsiveHelper = {
    addBreakpointListener,
    makeTablesResponsive,
    setupLazyLoading
}; 