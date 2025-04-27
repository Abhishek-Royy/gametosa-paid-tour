<?php include('includes/header.php'); ?>

<!-- Add required CSS libraries -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
/* Base styles and animations */
:root {
    --primary: #00ffcc;
    --primary-dark: #00e6b8;
    --secondary: #ff3366;
    --dark: #0d1117;
    --darker: #090c10;
}

/* Cyberpunk Grid Animation */
.cyber-grid {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: 
        linear-gradient(var(--primary-dark) 1px, transparent 1px),
        linear-gradient(90deg, var(--primary-dark) 1px, transparent 1px);
    background-size: 50px 50px;
    background-position: center;
    opacity: 0.03;
    animation: gridMove 20s linear infinite;
}

@keyframes gridMove {
    0% { transform: translateY(0); }
    100% { transform: translateY(50px); }
}

/* Glitch Text Effect */
.glitch-text {
    position: relative;
    animation: glitch 5s infinite;
}

.glitch-text::before,
.glitch-text::after {
    content: attr(data-text);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0.8;
}

.glitch-text::before {
    animation: glitch-effect 3s infinite;
    color: var(--primary);
    left: 2px;
}

.glitch-text::after {
    animation: glitch-effect 2s infinite;
    color: var(--secondary);
    left: -2px;
}

@keyframes glitch-effect {
    0% { transform: none; opacity: 0.8; }
    7% { transform: translate(2px, 3px); opacity: 0.6; }
    10% { transform: none; opacity: 0.8; }
    27% { transform: none; opacity: 0.8; }
    30% { transform: translate(5px, 2px); opacity: 0.6; }
    35% { transform: none; opacity: 0.8; }
    52% { transform: none; opacity: 0.8; }
    55% { transform: translate(-2px, 1px); opacity: 0.6; }
    50% { transform: none; opacity: 0.8; }
    100% { transform: none; opacity: 0.8; }
}

/* Coming Soon Card */
.coming-soon-card {
    background: rgba(13, 17, 23, 0.7);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(0, 255, 204, 0.1);
    border-radius: 15px;
    padding: 3rem;
    position: relative;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.coming-soon-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, transparent, rgba(0, 255, 204, 0.1), transparent);
    transform: translateX(-100%);
    transition: transform 0.6s ease;
}

.coming-soon-card:hover::before {
    transform: translateX(100%);
}

.coming-soon-card:hover {
    transform: translateY(-10px);
    border-color: var(--primary);
    box-shadow: 0 10px 30px rgba(0, 255, 204, 0.2);
}

/* Neon Button Effect */
.btn-neon {
    position: relative;
    background: transparent;
    border: 2px solid var(--primary);
    color: var(--primary);
    padding: 15px 30px;
    font-family: 'Orbitron', sans-serif;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: 600;
    font-size: 1rem;
    transition: all 0.3s ease;
    overflow: hidden;
    z-index: 1;
}

.btn-neon::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 0;
    height: 100%;
    background: var(--primary);
    transition: width 0.3s ease;
    z-index: -1;
}

.btn-neon:hover {
    color: var(--dark);
    text-shadow: none;
}

.btn-neon:hover::before {
    width: 100%;
}

/* Floating Elements Animation */
.float-element {
    animation: float 6s ease-in-out infinite;
}

@keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
    100% { transform: translateY(0px); }
}

/* Custom Scrollbar */
::-webkit-scrollbar {
    width: 10px;
}

::-webkit-scrollbar-track {
    background: var(--dark);
}

::-webkit-scrollbar-thumb {
    background: var(--primary-dark);
    border-radius: 5px;
}

::-webkit-scrollbar-thumb:hover {
    background: var(--primary);
}

/* Career Icon Animation */
.career-icon {
    font-size: 4rem;
    color: var(--primary);
    margin-bottom: 2rem;
    transition: all 0.3s ease;
    animation: iconPulse 2s infinite;
}

@keyframes iconPulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
}

/* Email Link Animation */
.email-link {
    color: var(--primary);
    text-decoration: none;
    position: relative;
    transition: all 0.3s ease;
}

.email-link::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: -2px;
    left: 0;
    background: var(--primary);
    transition: width 0.3s ease;
}

.email-link:hover {
    color: var(--primary-dark);
}

.email-link:hover::after {
    width: 100%;
}
</style>

<!-- Hero Section -->
<section class="position-relative min-vh-100 d-flex align-items-center" style="background: url('assests/gametosa_logos_thumbnails/bg_home.webp') center/cover no-repeat;">
    <div class="cyber-grid"></div>
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(45deg, rgba(13,17,23,0.9), rgba(9,12,16,0.8));"></div>
    
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <img src="assests/gametosa_logos_thumbnails/header_gametosa.png" alt="Gametosa Logo" class="img-fluid float-element mb-4" style="max-width: 300px;">
                <h1 class="display-4 fw-bold text-white mb-4 glitch-text" data-text="Join Our Team">
                    Join Our Team
                </h1>
                <p class="lead text-white-50 mb-5" data-aos="fade-up">
                    Be part of India's fastest-growing esports platform
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Coming Soon Section -->
<section class="py-5" style="background: var(--dark);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="coming-soon-card text-center" data-aos="zoom-in">
                    <i class="fas fa-rocket career-icon"></i>
                    <h2 class="text-white display-5 fw-bold mb-4 glitch-text" data-text="Coming Soon">
                        Coming Soon
                    </h2>
                    <p class="text-white-50 mb-4">
                        We're building something amazing! Our career opportunities will be launching soon.
                        Join us in revolutionizing the Indian esports scene.
                    </p>
                    <div class="d-flex align-items-center justify-content-center gap-3 mb-4">
                        <i class="fas fa-envelope text-primary"></i>
                        <a href="mailto:support@gametosa.com" class="email-link h4 mb-0">support@gametosa.com</a>
                    </div>
                    <p class="text-white-50 mb-0">
                        Send us your resume and we'll get back to you when positions open up.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Join Us Section -->
<section class="py-5" style="background: var(--darker);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="text-white display-5 fw-bold mb-3" data-aos="fade-down">
                Why Join Gametosa?
            </h2>
            <p class="text-white-50" data-aos="fade-up">Be part of something extraordinary</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="coming-soon-card h-100">
                    <i class="fas fa-bolt feature-icon"></i>
                    <h3 class="text-white mb-3">Fast-Growing Industry</h3>
                    <p class="text-white-50 mb-0">
                        Join the booming esports industry and be at the forefront of gaming innovation
                    </p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="coming-soon-card h-100">
                    <i class="fas fa-users feature-icon"></i>
                    <h3 class="text-white mb-3">Dynamic Team</h3>
                    <p class="text-white-50 mb-0">
                        Work with passionate gamers and industry experts in a collaborative environment
                    </p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="coming-soon-card h-100">
                    <i class="fas fa-chart-line feature-icon"></i>
                    <h3 class="text-white mb-3">Growth Opportunities</h3>
                    <p class="text-white-50 mb-0">
                        Build your career with continuous learning and professional development
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 position-relative" style="background: linear-gradient(45deg, var(--dark), var(--darker));">
    <div class="cyber-grid"></div>
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
                <h2 class="text-white display-5 fw-bold mb-4 glitch-text" data-text="Ready to Join Our Team?">
                    Ready to Join Our Team?
                </h2>
                <p class="text-white-50 mb-5">Send us your resume and be the first to know when positions open up</p>
                <a href="mailto:support@gametosa.com" class="btn btn-neon">Contact Us Now</a>
            </div>
        </div>
    </div>
</section>

<!-- Initialize AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS
    AOS.init({
        duration: 1000,
        once: false,
        mirror: true
    });
});
</script>

<?php include('includes/footer.php'); ?> 