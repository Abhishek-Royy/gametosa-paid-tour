<?php
include 'includes/header.php';
?>

<!-- Add AOS CSS and JS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<style>
/* Glowing text animation */
@keyframes glow {
    0% { text-shadow: 0 0 10px rgba(0,255,204,0.5); }
    50% { text-shadow: 0 0 20px rgba(0,255,204,0.8), 0 0 30px rgba(0,255,204,0.5); }
    100% { text-shadow: 0 0 10px rgba(0,255,204,0.5); }
}

/* Card hover effect */
.card {
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    border-radius: 15px;
    overflow: hidden;
    background: rgba(0, 0, 0, 0.8) !important;
    border: 1px solid rgba(0, 255, 204, 0.1);
    min-width: 300px;
    width: 100%;
}
.card:hover {
    transform: translateY(-15px) scale(1.02);
    box-shadow: 0 20px 40px rgba(0, 255, 204, 0.2);
    border: 1px solid rgba(0, 255, 204, 0.3);
}

/* Team member image hover effect */
.team-img {
    transition: all 0.5s ease;
    filter: grayscale(0.3);
}
.card:hover .team-img {
    filter: grayscale(0);
    transform: scale(1.05);
}

/* Section backgrounds */
.section-bg {
    position: relative;
    overflow: hidden;
}
.section-bg::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, rgba(0,0,0,0.9) 0%, rgba(13,17,23,0.9) 100%);
    z-index: 0;
}

/* Custom button styles */
.btn-custom {
    background: linear-gradient(45deg, #00ffcc, #00ccff);
    border: none;
    color: #000;
    padding: 12px 30px;
    border-radius: 30px;
    font-weight: 600;
    transition: all 0.3s ease;
}
.btn-custom:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0, 255, 204, 0.3);
    color: #000;
}

/* Stats counter animation */
@keyframes countUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}
.stats-number {
    animation: countUp 1s ease forwards;
}
</style>

<!-- Hero Section -->
<section class="section-bg text-white py-5" style="background: url('assests/gametosa_logos_thumbnails/banner_gametosa.jpg') center/cover no-repeat fixed;">
    <div class="container" style="position: relative; z-index: 1;">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                <h1 class="display-4 fw-bold mb-4" style="animation: glow 3s infinite;">ABOUT GAMETOSA</h1>
                <p class="lead mb-4" data-aos="fade-up" data-aos-delay="200">India's #1 mobile eSports Hosting and gaming platform</p>
                <div data-aos="fade-up" data-aos-delay="400">
                    <a href="#mission" class="btn btn-custom">Our Mission</a>
                </div>
            </div>
            <div class="col-lg-6 text-center" data-aos="fade-left" data-aos-duration="1000">
                <img src="assests/gametosa_logos_thumbnails/header_gametosa.png" alt="Gametosa Logo" class="img-fluid" style="max-width: 400px;">
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-5" style="background: #0d1117;">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="stats-number" style="color: #00ffcc;">10K+</h2>
                        <p class="text-white">Active Players</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="stats-number" style="color: #00ffcc;">500+</h2>
                        <p class="text-white">Tournaments</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="stats-number" style="color: #00ffcc;">1M+</h2>
                        <p class="text-white">Prize Pool</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="stats-number" style="color: #00ffcc;">50+</h2>
                        <p class="text-white">Cities Covered</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section id="mission" class="section-bg py-5" style="background: url('assests/hero-bg.jpg') center/cover no-repeat fixed;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-center mb-4 mb-lg-0" data-aos="fade-right">
                <img src="assests/gametosa_logos_thumbnails/gametosa_logo.jpg" alt="Gametosa Logo" class="img-fluid rounded" style="max-width: 250px; border: 3px solid #00ffcc;">
            </div>
            <div class="col-lg-8" data-aos="fade-left">
                <h2 class="text-white mb-4" style="animation: glow 3s infinite;">Our Mission</h2>
                <p class="lead text-white mb-4">
                    Gametosa is India's #1 mobile eSports Hosting and gaming platform that is empowering the rapidly rising community of Creators, YouTubers, and eSports fans. We're building a thriving ecosystem where:
                </p>
                <div class="row">
                    <div class="col-md-6 mb-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 style="color: #00ffcc;">For Gamers</h5>
                                <p class="text-white">Compete in tournaments, win prizes, and turn your passion into a career</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 style="color: #00ffcc;">For Creators</h5>
                                <p class="text-white">Build your audience, create content, and monetize your skills</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-5" style="background: #0d1117;">
    <div class="container">
        <h2 class="text-center mb-5 text-white" data-aos="fade-down" style="animation: glow 3s infinite;">MEET OUR LEADERSHIP</h2>
        <div class="row">
            <div class="col-md-3 mb-4" data-aos="flip-left" data-aos-delay="100">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <img src="assests/faculty/deep_chatterjee.jpg" alt="Deep Chatterjee" class="img-fluid rounded-circle mb-3 team-img" style="width: 150px; height: 150px; object-fit: cover; border: 3px solid #00ffcc;">
                        <h5 class="card-title" style="color: #00ffcc;">Deep Chatterjee</h5>
                        <p class="card-text text-white">Chief Executive Officer</p>
                        <div class="social-links mt-3">
                            <a href="#" class="text-white me-2"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="flip-left" data-aos-delay="200">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3" style="width: 150px; height: 150px; margin: 0 auto; background: rgba(0,255,204,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 3px solid #00ffcc;">
                            <i class="fas fa-user fa-3x" style="color: #00ffcc;"></i>
                        </div>
                        <h5 class="card-title" style="color: #00ffcc;">Roushan Keshri</h5>
                        <p class="card-text text-white">Chief Operating Officer</p>
                        <div class="social-links mt-3">
                            <a href="#" class="text-white me-2"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="flip-left" data-aos-delay="300">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <img src="assests/faculty/aditya_choydhary.jpg" alt="Aditya Choudhury" class="img-fluid rounded-circle mb-3 team-img" style="width: 150px; height: 150px; object-fit: cover; border: 3px solid #00ffcc;">
                        <h5 class="card-title" style="color: #00ffcc;">Aditya Choudhury</h5>
                        <p class="card-text text-white">Chief Financial Officer</p>
                        <div class="social-links mt-3">
                            <a href="#" class="text-white me-2"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="flip-left" data-aos-delay="400">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3" style="width: 150px; height: 150px; margin: 0 auto; background: rgba(0,255,204,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 3px solid #00ffcc;">
                            <i class="fas fa-user fa-3x" style="color: #00ffcc;"></i>
                        </div>
                        <h5 class="card-title" style="color: #00ffcc;">Sk Suraj</h5>
                        <p class="card-text text-white">Chief Technology Officer</p>
                        <div class="social-links mt-3">
                            <a href="#" class="text-white me-2"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5" style="background: linear-gradient(45deg, #0d1117, #1a1a1a);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
                <h2 class="text-white mb-4" style="animation: glow 3s infinite;">Ready to Join the Revolution?</h2>
                <p class="text-white-50 mb-4">Be part of India's fastest growing gaming community</p>
                <a href="register.php" class="btn btn-custom">Get Started Now</a>
            </div>
        </div>
    </div>
</section>

<!-- Initialize AOS -->
<script>
  AOS.init({
    duration: 800,
    once: false,
    mirror: true
  });
</script>

<?php
include 'includes/footer.php';
?>
