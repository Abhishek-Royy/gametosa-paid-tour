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
    --neon: #00ffcc;
    --neon-secondary: #ff3366;
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
    display: inline-block;
    color: #fff;
}

.glitch-text::before,
.glitch-text::after {
    content: attr(data-text);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #0d1117;
    clip: rect(0, 0, 0, 0);
}

.glitch-text::before {
    left: -2px;
    text-shadow: 1px 0 var(--neon);
    animation: glitch-anim-1 2s infinite linear alternate-reverse;
}

.glitch-text::after {
    left: 2px;
    text-shadow: -1px 0 var(--neon-secondary);
    animation: glitch-anim-2 3s infinite linear alternate-reverse;
}

.glitch-active::before {
    animation: glitch-anim-1 0.7s infinite linear alternate-reverse;
}

.glitch-active::after {
    animation: glitch-anim-2 0.7s infinite linear alternate-reverse;
}

@keyframes glitch-anim-1 {
    0% { clip: rect(20px, 9999px, 18px, 0); }
    20% { clip: rect(22px, 9999px, 39px, 0); }
    40% { clip: rect(67px, 9999px, 78px, 0); }
    60% { clip: rect(95px, 9999px, 67px, 0); }
    80% { clip: rect(52px, 9999px, 5px, 0); }
    100% { clip: rect(35px, 9999px, 92px, 0); }
}

@keyframes glitch-anim-2 {
    0% { clip: rect(5px, 9999px, 72px, 0); }
    20% { clip: rect(67px, 9999px, 98px, 0); }
    40% { clip: rect(12px, 9999px, 24px, 0); }
    60% { clip: rect(48px, 9999px, 36px, 0); }
    80% { clip: rect(18px, 9999px, 63px, 0); }
    100% { clip: rect(20px, 9999px, 45px, 0); }
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

/* Feature Card Styles */
.feature-card {
    background: rgba(13, 17, 23, 0.7);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(0, 255, 204, 0.1);
    border-radius: 15px;
    padding: 1.2rem;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.feature-card:hover {
    transform: translateY(-10px);
    border-color: var(--primary);
    box-shadow: 0 10px 30px rgba(0, 255, 204, 0.2);
}

.feature-icon {
    font-size: 3rem;
    color: var(--primary);
    margin-bottom: 1.5rem;
    transition: all 0.3s ease;
}

.feature-card:hover .feature-icon {
    transform: scale(1.2);
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

/* Game-col media queries */
.game-col {
    width: 33.333%; /* Changed back to 3 cards per row */
    padding: 0 10px; /* Increased padding */
    margin-bottom: 1.5rem; /* Increased margin */
}

@media (max-width: 1600px) {
    .game-col {
        width: 33.333%;
    }
}

@media (max-width: 992px) {
    .game-col {
        width: 50%;
    }
}

@media (max-width: 576px) {
    .game-col {
        width: 100%;
    }
}

/* Game card image styles */
.feature-card img {
    width: 100%;
    height: 300px; /* Increased from 250px to 300px */
    object-fit: cover;
    border-radius: 10px;
    transition: transform 0.3s ease;
}

.feature-card img:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(0, 255, 204, 0.3);
}

/* Game card image container */
.feature-card .img-container {
    margin-bottom: 0.8rem; /* Increased margin */
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
}

.feature-card h3 {
    font-size: 1.3rem; /* Increased from 1.2rem */
    margin-bottom: 0.8rem; /* Increased margin */
}

.feature-card p {
    font-size: 1rem; /* Reduced from 1.1rem */
    margin-bottom: 1rem; /* Reduced margin */
}

.feature-card .btn-neon {
    font-size: 1rem; /* Increased from 0.9rem */
    padding: 0.6rem 1.4rem; /* Increased padding */
    margin-top: auto;
}
</style>

<!-- Hero Section -->
<section class="position-relative min-vh-100 d-flex align-items-center" style="background: var(--darker);">
    <div class="cyber-grid"></div>
    <div class="container position-relative">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1200">
                <img src="assests/gametosa_logos_thumbnails/header_gametosa.png" alt="Gametosa Logo" class="img-fluid float-element mb-4" style="max-width: 350px;">
                <h1 class="display-4 fw-bold text-white mb-4 glitch-text" data-text="Turn Your Passion Into Your Career!">
                    Turn Your Passion Into Your Career!
                </h1>
                <p class="lead text-white-50 mb-5" data-aos="fade-up" data-aos-delay="200">
                    Join India's #1 mobile Esports platform and become part of a thriving gaming community
                </p>
                <div class="d-flex gap-4" data-aos="fade-up" data-aos-delay="400">
                    <a href="login.php?form=register" class="btn btn-neon">Join Now</a>
                    <a href="about.php" class="btn btn-neon">Learn More</a>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block" data-aos="fade-left" data-aos-duration="1200">
                <img src="assests/games/hero-img.png" alt="Gaming Character" class="img-fluid float-element">
            </div>
        </div>
    </div>
</section>

<!-- Games Showcase Section -->
<section class="py-5" style="background: var(--darker);">
    <div class="container">
        <h2 class="text-center text-white mb-5 glitch-text" data-text="Featured Games">Featured Games</h2>
        <div class="row g-4 justify-content-center">
            <!-- Call of Duty Card -->
            <div class="game-col" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card">
                    <div class="img-container">
                        <img src="assests/games/cod_card.png" alt="Call of Duty" class="img-fluid">
                    </div>
                    <h3 class="text-white mb-3">Call of Duty Mobile</h3>
                    <a href="game.php?game=Call of Duty Mobile" class="btn btn-neon mt-auto">Explore Now</a>
                </div>
            </div>
            
            <!-- PUBG Card -->
            <div class="game-col" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card">
                    <div class="img-container">
                        <img src="assests/games/Pubg_card.png" alt="PUBG" class="img-fluid">
                    </div>
                    <h3 class="text-white mb-3">PUBG Mobile</h3>
                    <a href="game.php?game=PUBG Mobile" class="btn btn-neon mt-auto">Explore Now</a>
                </div>
            </div>
            
            <!-- Free Fire Card -->
            <div class="game-col" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-card">
                    <div class="img-container">
                        <img src="assests/games/free_fire__card.png" alt="Free Fire" class="img-fluid">
                    </div>
                    <h3 class="text-white mb-3">Free Fire</h3>
                    <a href="game.php?game=Free Fire" class="btn btn-neon mt-auto">Explore Now</a>
                </div>
            </div>

            <!-- Valorant Card -->
            <div class="game-col" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-card">
                    <div class="img-container">
                        <img src="assests/games/valorant_card.png" alt="Valorant" class="img-fluid">
                    </div>
                    <h3 class="text-white mb-3">Valorant</h3>
                    <a href="game.php?game=Valorant" class="btn btn-neon mt-auto">Explore Now</a>
                </div>
            </div>

            <!-- BGMI Card -->
            <div class="game-col" data-aos="fade-up" data-aos-delay="500">
                <div class="feature-card">
                    <div class="img-container">
                        <img src="assests/games/bgmi_card.png" alt="BGMI" class="img-fluid">
                    </div>
                    <h3 class="text-white mb-3">BGMI</h3>
                    <a href="game.php?game=BGMI" class="btn btn-neon mt-auto">Explore Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5" style="background: var(--dark);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="text-white display-5 fw-bold mb-3" data-aos="fade-down">
                Ye Esports Sabka Hai!
            </h2>
            <p class="text-white-50" data-aos="fade-up">Experience the future of mobile esports</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4" data-aos="flip-left" data-aos-delay="100">
                <div class="feature-card h-100">
                    <i class="fas fa-trophy feature-icon"></i>
                    <h3 class="text-white mb-3">Epic Tournaments</h3>
                    <p class="text-white-50 mb-0">
                        Compete in daily tournaments across multiple games and win exciting prizes
                    </p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="flip-left" data-aos-delay="200">
                <div class="feature-card h-100">
                    <i class="fas fa-coins feature-icon"></i>
                    <h3 class="text-white mb-3">Instant Rewards</h3>
                    <p class="text-white-50 mb-0">
                        Win tournaments and get instant withdrawals to your preferred payment method
                    </p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="flip-left" data-aos-delay="300">
                <div class="feature-card h-100">
                    <i class="fas fa-users feature-icon"></i>
                    <h3 class="text-white mb-3">Gaming Community</h3>
                    <p class="text-white-50 mb-0">
                        Join a thriving community of gamers, creators, and esports enthusiasts
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
                <h2 class="text-white display-5 fw-bold mb-4 glitch-text" data-text="Ready to Start Your Gaming Journey?">
                    Ready to Start Your Gaming Journey?
                </h2>
                <p class="text-white-50 mb-5">Join thousands of gamers on India's fastest-growing esports platform</p>
                <a href="login.php?form=register" class="btn btn-neon">Get Started Now</a>
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

