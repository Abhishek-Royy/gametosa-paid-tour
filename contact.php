<?php
include 'includes/header.php';
?>

<!-- Add AOS CSS and JS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<style>
/* Floating animation for the hero image */
@keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
    100% { transform: translateY(0px); }
}

/* Glowing text animation */
@keyframes glow {
    0% { text-shadow: 0 0 10px rgba(0,255,204,0.5); }
    50% { text-shadow: 0 0 20px rgba(0,255,204,0.8), 0 0 30px rgba(0,255,204,0.5); }
    100% { text-shadow: 0 0 10px rgba(0,255,204,0.5); }
}

/* Form animations */
.form-control {
    background: rgba(26, 26, 26, 0.8);
    border: 1px solid rgba(255, 255, 255, 0.1);
    color: #fff;
    transition: all 0.3s ease;
}

.form-control:focus {
    background: rgba(26, 26, 26, 0.9);
    border-color: #00ffcc;
    box-shadow: 0 0 0 0.2rem rgba(0, 255, 204, 0.25);
}

.form-floating label {
    color: #6c757d;
}

.form-floating>.form-control:focus~label,
.form-floating>.form-control:not(:placeholder-shown)~label {
    color: #00ffcc;
}

/* Card animations */
.contact-card {
    background: rgba(13, 17, 23, 0.8);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

.contact-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0, 255, 204, 0.1);
    border-color: rgba(0, 255, 204, 0.3);
}

/* Icon animations */
.contact-icon {
    transition: all 0.3s ease;
}

.contact-icon:hover {
    transform: scale(1.1);
    color: #00ffcc !important;
}

/* Social media icons */
.social-icon {
    transition: all 0.3s ease;
    background: rgba(255, 255, 255, 0.1);
    width: 50px;
    height: 50px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    margin: 0 10px;
}

.social-icon:hover {
    background: #00ffcc;
    color: #000 !important;
    transform: translateY(-5px);
}

/* Map container */
.map-container {
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    transition: all 0.3s ease;
}

.map-container:hover {
    transform: scale(1.02);
}

/* Button animations */
.btn-primary {
    background: #00ffcc;
    color: #000;
    border: none;
    padding: 12px 24px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0, 255, 204, 0.3);
}

.btn-primary::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 300px;
    height: 300px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    transform: translate(-50%, -50%) scale(0);
    transition: transform 0.5s;
}

.btn-primary:hover::after {
    transform: translate(-50%, -50%) scale(1);
}
</style>

<!-- Hero Section -->
<section class="bg-dark text-white py-5" style="background: url('assests/gametosa_logos_thumbnails/banner_gametosa.jpg') center/cover no-repeat; position: relative;">
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.7);"></div>
    <div class="container" style="position: relative; z-index: 1;">
        <div class="row align-items-center min-vh-50">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                <h1 class="display-4 fw-bold mb-4" style="animation: glow 2s infinite;">Let's Team Up</h1>
                <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">Get in touch with us for any queries or collaborations</p>
            </div>
            <div class="col-lg-6 text-end" data-aos="fade-left" data-aos-duration="1000">
                <img src="assests/gametosa_logos_thumbnails/header_gametosa.png" alt="Gametosa Logo" class="img-fluid hero-img" style="max-width: 300px; animation: float 6s ease-in-out infinite;">
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-5" style="background: #0d1117;">
    <div class="container" style="max-width: 1400px;">
        <div class="row g-4">
            <!-- Contact Form -->
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                <div class="contact-card p-4 rounded-4">
                    <h2 class="mb-4" style="animation: glow 3s infinite;">Send Us a Message</h2>
                    <form>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                            <label for="name">Your Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                            <label for="email">Your Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                            <label for="subject">Subject</label>
                        </div>
                        <div class="form-floating mb-4">
                            <textarea class="form-control" id="message" placeholder="Your Message" style="height: 150px"></textarea>
                            <label for="message">Your Message</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                    </form>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                <div class="contact-card p-4 rounded-4 h-100">
                    <h2 class="mb-4" style="animation: glow 3s infinite;">REACH OUT TO US!</h2>
                    
                    <!-- Office Address -->
                    <div class="mb-4 d-flex align-items-start">
                        <div class="me-3 contact-icon" style="color: #00ffcc;">
                            <i class="fas fa-map-marker-alt fa-2x"></i>
                        </div>
                        <div>
                            <h5 class="mb-2">Burdwan Office</h5>
                            <p class="mb-0">Laxmipur Math, Rail Line Dhar</p>
                            <p class="mb-0">Burdwan Bardhaman</p>
                            <p class="mb-0">WB 713101 IN</p>
                            <a href="https://maps.google.com/?q=Laxmipur+Math,+Rail+Line+Dhar+Burdwan+Bardhaman+WB+713101+IN" 
                               class="btn btn-outline-light mt-3" 
                               target="_blank" 
                               rel="noopener noreferrer">
                                <i class="fas fa-map-marked-alt me-2"></i>View on Google Maps
                            </a>
                        </div>
                    </div>

                    <!-- Support Email -->
                    <div class="mb-4 d-flex align-items-start">
                        <div class="me-3 contact-icon" style="color: #00ffcc;">
                            <i class="fas fa-envelope fa-2x"></i>
                        </div>
                        <div>
                            <h5 class="mb-2">Support</h5>
                            <p class="mb-0">
                                <a href="mailto:support@gametosa.com" class="text-decoration-none" style="color: #00ffcc;">
                                    support@gametosa.com
                                </a>
                            </p>
                        </div>
                    </div>

                    <!-- Contact Number -->
                    <div class="mb-4 d-flex align-items-start">
                        <div class="me-3 contact-icon" style="color: #00ffcc;">
                            <i class="fas fa-phone-alt fa-2x"></i>
                        </div>
                        <div>
                            <h5 class="mb-2">Contact Number</h5>
                            <p class="mb-0">
                                <a href="tel:+917063072901" class="text-decoration-none" style="color: #00ffcc;">
                                    +91 70630 72901
                                </a>
                            </p>
                        </div>
                    </div>

                    <!-- Social Media Links -->
                    <div class="mt-4">
                        <h5 class="mb-3">Connect With Us</h5>
                        <div class="d-flex justify-content-start">
                            <a href="https://discord.gg/vcufWpyB7g" class="social-icon text-white" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-discord"></i>
                            </a>
                            <a href="https://www.facebook.com/Gametosa/" class="social-icon text-white" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/Gametosa" class="social-icon text-white" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://x.com/Gametosa?s=20&t=ECIlpZNE9Yc_0qM7MArJDQ" class="social-icon text-white" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/gametosa/" class="social-icon text-white" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="row mt-5">
            <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3662.1234567890123!2d87.12345678901234!3d23.12345678901234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDA3JzI0LjQiTiA4N8KwMDcnMjQuNCJF!5e0!3m2!1sen!2sin!4v1234567890!5m2!1sen!2sin" 
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Initialize AOS -->
<script>
  AOS.init({
    duration: 1000,
    once: false,
    mirror: true
  });
</script>

<?php
include 'includes/footer.php';
?>
