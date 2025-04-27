<!-- includes/footer.php -->
<!-- Footer -->
<footer class="bg-dark text-white py-5 footer-animate">
    <div class="cyber-grid"></div>
    <div class="container position-relative">
        <div class="row g-4">
            <div class="col-lg-3 mb-4 footer-item" data-animation="fadeInLeft">
                <div class="logo-container">
                    <div class="logo-glitch"></div>
                    <img src="assests/gametosa_logos_thumbnails/gametosa_logo.jpg" alt="Gametosa Logo" class="mb-3 footer-logo" style="max-width: 120px;">
                </div>
                <p class="neon-text-subtle cyberpunk-box" style="font-size: 0.9rem;">Gametosa is India's #1 mobile Esports Hosting and gaming platform that is empowering the rapidly rising community of Creators, YouTubers, and eSports fans.</p>
                <div class="social-links d-flex flex-wrap gap-2 mt-3">
                    <a href="https://discord.gg/vcufWpyB7g" class="social-icon discord cyberpunk-button" target="_blank" rel="noopener noreferrer">
                        <span class="cyberpunk-button-glitch"></span>
                        <i class="fab fa-discord"></i>
                    </a>
                    <a href="https://www.facebook.com/Gametosa/" class="social-icon facebook" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/Gametosa" class="social-icon instagram" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                    <a href="https://x.com/Gametosa?s=20&t=ECIlpZNE9Yc_0qM7MArJDQ" class="social-icon twitter" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/company/gametosa/" class="social-icon linkedin" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="col-lg-2 mb-4 footer-item" data-animation="fadeInUp" data-delay="0.2s">
                <h5 class="cyber-text mb-3">Quick Links</h5>
                <ul class="list-unstyled link-list">
                    <li class="mb-2"><a href="index.php" class="text-white hover-effect">Home</a></li>
                    <li class="mb-2"><a href="about.php" class="text-white hover-effect">About Us</a></li>
                    <li class="mb-2"><a href="tournaments.php" class="text-white hover-effect">Tournaments</a></li>
                    <li class="mb-2"><a href="leaderboard.php" class="text-white hover-effect">Leaderboard</a></li>
                    <li class="mb-2"><a href="mobile.php" class="text-white hover-effect">Mobile App</a></li>
                    <li class="mb-2"><a href="contact.php" class="text-white hover-effect">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-2 mb-4 footer-item" data-animation="fadeInUp" data-delay="0.4s">
                <h5 class="cyber-text mb-3">Company</h5>
                <ul class="list-unstyled link-list">
                    <li class="mb-2"><a href="career.php" class="text-white hover-effect">Career</a></li>
                    <li class="mb-2"><a href="faq.php" class="text-white hover-effect">FAQs</a></li>
                    <li class="mb-2"><a href="contact.php" class="text-white hover-effect">Support</a></li>
                </ul>
            </div>
            <div class="col-lg-2 mb-4 footer-item" data-animation="fadeInUp" data-delay="0.6s">
                <h5 class="cyber-text mb-3">Policies</h5>
                <ul class="list-unstyled link-list">
                    <li class="mb-2"><a href="terms.php" class="text-white hover-effect">Terms & Conditions</a></li>
                    <li class="mb-2"><a href="privacy.php" class="text-white hover-effect">Privacy Policy</a></li>
                    <li class="mb-2"><a href="refund.php" class="text-white hover-effect">Refund and Cancellation</a></li>
                </ul>
            </div>
            <div class="col-lg-3 mb-4 footer-item" data-animation="fadeInRight" data-delay="0.8s">
                <h5 class="cyber-text mb-3">Contact Info</h5>
                <ul class="list-unstyled link-list">
                    <li class="mb-2"><i class="fas fa-envelope me-2" style="color: #00ffcc;"></i><a href="mailto:support@gametosa.com" class="text-white hover-effect">support@gametosa.com</a></li>
                    <li class="mb-2"><i class="fas fa-phone me-2" style="color: #00ffcc;"></i><a href="tel:+917063072901" class="text-white hover-effect">+91 7063072901</a></li>
                    <li class="mb-2"><i class="fas fa-map-marker-alt me-2" style="color: #00ffcc;"></i><span class="text-white">Kolkata, India</span></li>
                </ul>
            </div>
        </div>
        <hr class="neon-hr">
        <div class="row">
            <div class="col-md-12 text-center footer-item" data-animation="fadeInUp" data-delay="1s">
                <p class="mb-0 copyright-text glitch-hover">© 2025 Gametosa | All rights reserved.</p>
                <p class="small disclaimer-text cyberpunk-small">All trademarks, logos, and brand names displayed on this website belong to their respective owners. Their use here does not imply endorsement unless specified. If any concerns arise, please contact us.</p>
            </div>
        </div>
    </div>
</footer>

<style>
/* Enhanced Footer Animations */
.footer-animate {
    position: relative;
    background: linear-gradient(135deg, #0d1117, #1a1a1a);
    overflow: hidden;
}

/* Cyber Grid Background */
.cyber-grid {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: 
        linear-gradient(rgba(0, 255, 204, 0.05) 1px, transparent 1px),
        linear-gradient(90deg, rgba(0, 255, 204, 0.05) 1px, transparent 1px);
    background-size: 30px 30px;
    animation: gridMove 20s linear infinite;
    opacity: 0.5;
}

@keyframes gridMove {
    0% { transform: translateY(0); }
    100% { transform: translateY(30px); }
}

/* Cyberpunk Box Effect */
.cyberpunk-box {
    background: rgba(0, 255, 204, 0.05);
    border: 1px solid rgba(0, 255, 204, 0.1);
    padding: 15px;
    position: relative;
    overflow: hidden;
}

.cyberpunk-box::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(
        90deg,
        transparent,
        rgba(0, 255, 204, 0.2),
        transparent
    );
    animation: shine 3s infinite;
}

@keyframes shine {
    0% { left: -100%; }
    50% { left: 100%; }
    100% { left: 100%; }
}

/* Enhanced Logo Animation */
.logo-container {
    position: relative;
    display: inline-block;
}

.logo-glitch {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 255, 204, 0.5);
    mix-blend-mode: overlay;
    animation: logoGlitch 5s infinite;
    opacity: 0;
}

@keyframes logoGlitch {
    0% { opacity: 0; transform: translate(0); }
    2% { opacity: 0.8; transform: translate(-2px, 2px); }
    4% { opacity: 0; transform: translate(2px, -2px); }
    6% { opacity: 0.8; transform: translate(2px, 2px); }
    8% { opacity: 0; transform: translate(-2px, -2px); }
    100% { opacity: 0; transform: translate(0); }
}

/* Enhanced Cyberpunk Button */
.cyberpunk-button {
    position: relative;
    background: transparent;
    border: 2px solid rgba(0, 255, 204, 0.3);
    color: #00ffcc;
    overflow: hidden;
    transition: all 0.3s ease;
}

.cyberpunk-button::before,
.cyberpunk-button::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
}

.cyberpunk-button::before {
    background: rgba(0, 255, 204, 0.1);
    top: 2px;
    left: 2px;
    transform: translate(-100%, -100%);
    transition: all 0.3s ease;
}

.cyberpunk-button::after {
    background: rgba(0, 255, 204, 0.1);
    bottom: 2px;
    right: 2px;
    transform: translate(100%, 100%);
    transition: all 0.3s ease;
}

.cyberpunk-button:hover {
    color: #fff;
    border-color: #00ffcc;
    box-shadow: 
        0 0 20px rgba(0, 255, 204, 0.3),
        inset 0 0 20px rgba(0, 255, 204, 0.3);
}

.cyberpunk-button:hover::before {
    transform: translate(0, 0);
}

.cyberpunk-button:hover::after {
    transform: translate(0, 0);
}

.cyberpunk-button-glitch {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #00ffcc;
    transform: translateX(-100%);
    animation: buttonGlitch 3s infinite;
    opacity: 0;
}

@keyframes buttonGlitch {
    0% { transform: translateX(-100%); opacity: 0; }
    10% { transform: translateX(0); opacity: 0.1; }
    20% { transform: translateX(100%); opacity: 0; }
    100% { transform: translateX(100%); opacity: 0; }
}

/* Enhanced Text Effects */
.glitch-hover {
    position: relative;
    display: inline-block;
}

.glitch-hover:hover {
    animation: textGlitch 0.3s infinite;
}

@keyframes textGlitch {
    0% { transform: translate(0); }
    20% { transform: translate(-2px, 2px); }
    40% { transform: translate(2px, -2px); }
    60% { transform: translate(2px, 2px); }
    80% { transform: translate(-2px, -2px); }
    100% { transform: translate(0); }
}

.cyberpunk-small {
    font-size: 0.9rem;
    color: rgba(255, 255, 255, 0.7);
    text-transform: uppercase;
    letter-spacing: 1px;
    position: relative;
    display: inline-block;
}

.cyberpunk-small::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 100%;
    height: 1px;
    background: linear-gradient(90deg, transparent, #00ffcc, transparent);
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.cyberpunk-small:hover::after {
    transform: scaleX(1);
}

/* Enhanced Section Animations */
.footer-item {
    opacity: 0;
    transform: translateY(20px);
    position: relative;
}

.footer-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 2px;
    height: 0;
    background: #00ffcc;
    transition: height 0.6s ease;
}

.footer-item.animate::before {
    height: 100%;
}

/* Cyber Text Effect */
.cyber-text {
    color: #00ffcc;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-family: 'Orbitron', sans-serif;
    margin-bottom: 1.5rem;
    position: relative;
    text-shadow: 0 0 10px rgba(0, 255, 204, 0.5);
}

.cyber-text::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -5px;
    width: 30px;
    height: 2px;
    background: #00ffcc;
    box-shadow: 0 0 10px #00ffcc;
}

/* Neon Text Effect */
.neon-text-subtle {
    color: #fff;
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
}

/* Link Hover Effect */
.hover-effect {
    position: relative;
    transition: all 0.3s ease;
    padding-left: 0;
}

.hover-effect:hover {
    color: #00ffcc !important;
    padding-left: 10px;
    text-shadow: 0 0 10px rgba(0, 255, 204, 0.5);
}

.hover-effect::before {
    content: '';
    position: absolute;
    left: 0;
    bottom: -2px;
    width: 0;
    height: 1px;
    background: #00ffcc;
    transition: width 0.3s ease;
}

.hover-effect:hover::before {
    width: 100%;
}

/* Social Icons Animation */
.social-links {
    display: flex;
    gap: 1rem;
}

.social-icon {
    color: #fff;
    font-size: 1.5rem;
    transition: all 0.3s ease;
    position: relative;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    overflow: hidden;
}

.social-icon::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(0, 255, 204, 0.2);
    border-radius: 50%;
    transform: scale(0);
    transition: transform 0.3s ease;
}

.social-icon:hover::before {
    transform: scale(1);
}

.social-icon i {
    position: relative;
    z-index: 1;
}

.social-icon:hover {
    color: #00ffcc;
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 255, 204, 0.3);
}

/* Neon HR Line */
.neon-hr {
    border: none;
    height: 1px;
    background: linear-gradient(90deg, transparent, #00ffcc, transparent);
    margin: 2rem 0;
    box-shadow: 0 0 10px rgba(0, 255, 204, 0.5);
}

/* Copyright Text */
.copyright-text {
    font-family: 'Orbitron', sans-serif;
    letter-spacing: 1px;
    color: #00ffcc;
}

.disclaimer-text {
    opacity: 0.7;
    transition: opacity 0.3s ease;
}

.disclaimer-text:hover {
    opacity: 1;
}

/* Footer Logo Animation */
.footer-logo {
    transition: all 0.3s ease;
    filter: brightness(0.8);
}

.footer-logo:hover {
    filter: brightness(1.2);
    transform: scale(1.05);
}

/* Animation Keyframes */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeInLeft {
    from {
        opacity: 0;
        transform: translateX(-20px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeInRight {
    from {
        opacity: 0;
        transform: translateX(20px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}
</style>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Intersection Observer for Footer Animation -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;
                const delay = element.getAttribute('data-delay') || 0;
                const animation = element.getAttribute('data-animation');
                
                setTimeout(() => {
                    element.style.animation = `${animation} 0.6s ease forwards`;
                    element.style.opacity = 1;
                }, delay * 1000);
            } else {
                entry.target.style.opacity = 0;
                entry.target.style.animation = 'none';
            }
        });
    }, {
        threshold: 0.1
    });

    document.querySelectorAll('.footer-item').forEach(item => {
        observer.observe(item);
    });
});
</script>
</body>
</html>
