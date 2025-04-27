<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms & Conditions - Gametosa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #00ffcc;
            --secondary-color: #ff00ff;
            --dark-bg: #0d1117;
            --darker-bg: #0a0d12;
        }

        body {
            background: var(--dark-bg);
            font-family: 'Roboto', sans-serif;
            color: #fff;
            position: relative;
            overflow-x: hidden;
        }

        .cyber-grid {
            position: fixed;
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
            z-index: -1;
        }

        @keyframes gridMove {
            0% { transform: translateY(0); }
            100% { transform: translateY(30px); }
        }

        /* Glowing text animation */
        @keyframes glow {
            0% { text-shadow: 0 0 10px rgba(0,255,204,0.5); }
            50% { text-shadow: 0 0 20px rgba(0,255,204,0.8), 0 0 30px rgba(0,255,204,0.5); }
            100% { text-shadow: 0 0 10px rgba(0,255,204,0.5); }
        }

        .header-section {
            background: url('assests/gametosa_logos_thumbnails/cool_bg.avif') center/cover no-repeat fixed;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .header-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(13, 17, 23, 0.8);
        }

        .header-content {
            position: relative;
            z-index: 1;
        }

        .header-logo {
            max-width: 300px;
            margin-bottom: 30px;
            filter: drop-shadow(0 0 10px rgba(0, 255, 204, 0.5));
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .header-logo:hover {
            transform: scale(1.05);
        }

        .terms-container {
            background: rgba(13, 17, 23, 0.9);
            border: 1px solid rgba(0, 255, 204, 0.2);
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 0 30px rgba(0, 255, 204, 0.1);
            position: relative;
            overflow: hidden;
            backdrop-filter: blur(10px);
        }

        .terms-container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                45deg,
                transparent,
                rgba(0, 255, 204, 0.1),
                transparent
            );
            transform: rotate(45deg);
            animation: shine 6s infinite;
        }

        @keyframes shine {
            0% { transform: translateX(-100%) rotate(45deg); }
            100% { transform: translateX(100%) rotate(45deg); }
        }

        .section-title {
            color: var(--primary-color);
            font-family: 'Orbitron', sans-serif;
            text-transform: uppercase;
            letter-spacing: 2px;
            position: relative;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background: var(--primary-color);
            box-shadow: 0 0 10px var(--primary-color);
        }

        .terms-content {
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.8;
        }

        .terms-content h3 {
            color: var(--primary-color);
            font-size: 1.5rem;
            margin-top: 2rem;
            margin-bottom: 1rem;
            font-family: 'Orbitron', sans-serif;
        }

        .terms-content p {
            margin-bottom: 1.5rem;
        }

        .terms-content ul {
            list-style-type: none;
            padding-left: 0;
        }

        .terms-content ul li {
            position: relative;
            padding-left: 2rem;
            margin-bottom: 1rem;
        }

        .terms-content ul li::before {
            content: '→';
            color: var(--primary-color);
            position: absolute;
            left: 0;
            font-weight: bold;
        }

        .cyber-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(0, 255, 204, 0.2);
            border-radius: 8px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            transition: all 0.3s ease;
        }

        .cyber-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 255, 204, 0.2);
            border-color: var(--primary-color);
        }

        .glitch-text {
            position: relative;
            color: var(--primary-color);
            font-family: 'Orbitron', sans-serif;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .glitch-text::before,
        .glitch-text::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .glitch-text::before {
            left: 2px;
            text-shadow: -2px 0 #ff00ff;
            animation: glitch-anim-1 2s infinite linear alternate-reverse;
        }

        .glitch-text::after {
            left: -2px;
            text-shadow: -2px 0 #00ffcc;
            animation: glitch-anim-2 2s infinite linear alternate-reverse;
        }

        @keyframes glitch-anim-1 {
            0% { transform: translateY(0); }
            20% { transform: translateY(-2px); }
            40% { transform: translateY(2px); }
            60% { transform: translateY(-2px); }
            80% { transform: translateY(2px); }
            100% { transform: translateY(0); }
        }

        @keyframes glitch-anim-2 {
            0% { transform: translateY(0); }
            20% { transform: translateY(2px); }
            40% { transform: translateY(-2px); }
            60% { transform: translateY(2px); }
            80% { transform: translateY(-2px); }
            100% { transform: translateY(0); }
        }

        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background: var(--primary-color);
            color: #000;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .back-to-top.visible {
            opacity: 1;
        }

        .back-to-top:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 255, 204, 0.3);
        }

        .nav-tabs {
            border-bottom: 1px solid rgba(0, 255, 204, 0.2);
            margin-bottom: 2rem;
        }

        .nav-tabs .nav-link {
            color: rgba(255, 255, 255, 0.7);
            border: none;
            padding: 1rem 2rem;
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-tabs .nav-link::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-color);
            transition: all 0.3s ease;
        }

        .nav-tabs .nav-link:hover {
            color: var(--primary-color);
        }

        .nav-tabs .nav-link.active {
            color: var(--primary-color);
            background: transparent;
            border: none;
        }

        .nav-tabs .nav-link.active::after {
            width: 100%;
        }

        .last-updated {
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.9rem;
            text-align: right;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <div class="cyber-grid"></div>
    
    <!-- Header Section -->
    <section class="header-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8 header-content" data-aos="fade-up">
                    <img src="assests/gametosa_logos_thumbnails/header_gametosa.png" alt="Gametosa Logo" class="img-fluid header-logo" onclick="window.location.href='index.php'">
                    <h1 class="display-4 fw-bold mb-4" style="animation: glow 3s infinite;">TERMS & CONDITIONS</h1>
                    <p class="lead">Please read these terms carefully before using our platform</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="terms-container" data-aos="fade-up">
                        <!-- Navigation Tabs -->
                        <ul class="nav nav-tabs" id="termsTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general" type="button" role="tab">General Terms</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="usage-tab" data-bs-toggle="tab" data-bs-target="#usage" type="button" role="tab">Usage Policy</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="privacy-tab" data-bs-toggle="tab" data-bs-target="#privacy" type="button" role="tab">Privacy</button>
                            </li>
                        </ul>

                        <!-- Tab Content -->
                        <div class="tab-content" id="termsTabsContent">
                            <!-- General Terms -->
                            <div class="tab-pane fade show active" id="general" role="tabpanel">
                                <div class="terms-content">
                                    <h3>1. Acceptance of Terms</h3>
                                    <p>By accessing and using Gametosa, you agree to be bound by these Terms and Conditions. If you do not agree to these terms, please do not use our services.</p>

                                    <h3>2. Account Registration</h3>
                                    <p>To access certain features of our platform, you must register for an account. You agree to provide accurate and complete information during registration.</p>

                                    <div class="cyber-card">
                                        <h4>Account Security</h4>
                                        <ul>
                                            <li>You are responsible for maintaining the confidentiality of your account</li>
                                            <li>You must notify us immediately of any unauthorized use</li>
                                            <li>We reserve the right to suspend or terminate accounts at our discretion</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Usage Policy -->
                            <div class="tab-pane fade" id="usage" role="tabpanel">
                                <div class="terms-content">
                                    <h3>1. Platform Usage</h3>
                                    <p>Gametosa provides a platform for esports tournaments and gaming events. Users must adhere to our community guidelines and fair play policies.</p>

                                    <h3>2. Prohibited Activities</h3>
                                    <div class="cyber-card">
                                        <h4>Users must not:</h4>
                                        <ul>
                                            <li>Engage in cheating or unfair play</li>
                                            <li>Use automated scripts or bots</li>
                                            <li>Harass other users</li>
                                            <li>Share inappropriate content</li>
                                            <li>Violate intellectual property rights</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Privacy -->
                            <div class="tab-pane fade" id="privacy" role="tabpanel">
                                <div class="terms-content">
                                    <h3>1. Data Collection</h3>
                                    <p>We collect and process personal data in accordance with our Privacy Policy. By using our services, you consent to such collection and processing.</p>

                                    <h3>2. Data Usage</h3>
                                    <div class="cyber-card">
                                        <h4>Your data may be used for:</h4>
                                        <ul>
                                            <li>Account management</li>
                                            <li>Service improvement</li>
                                            <li>Security purposes</li>
                                            <li>Legal compliance</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="last-updated">
                            Last Updated: January 1, 2024
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Back to Top Button -->
    <div class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });

        // Back to Top Button
        const backToTop = document.getElementById('backToTop');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        });

        backToTop.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Tab Animation
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                document.querySelectorAll('.tab-pane').forEach(pane => {
                    pane.style.opacity = '0';
                    setTimeout(() => {
                        pane.style.opacity = '1';
                    }, 300);
                });
            });
        });
    </script>
</body>
</html> 