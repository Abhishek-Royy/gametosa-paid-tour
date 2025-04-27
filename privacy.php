<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - Gametosa</title>
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

        .header-section {
            background: url('assests/gametosa_logos_thumbnails/cool_bg.avif') center/cover no-repeat fixed;
            padding: 150px 0;
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

        .privacy-container {
            background: rgba(13, 17, 23, 0.9);
            border: 1px solid rgba(0, 255, 204, 0.2);
            border-radius: 15px;
            padding: 3rem;
            box-shadow: 0 0 30px rgba(0, 255, 204, 0.1);
            position: relative;
            overflow: hidden;
            backdrop-filter: blur(10px);
            margin-top: -50px;
        }

        .privacy-container::before {
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
            font-size: 2.5rem;
            text-shadow: 0 0 10px rgba(0, 255, 204, 0.5);
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100px;
            height: 3px;
            background: var(--primary-color);
            box-shadow: 0 0 10px var(--primary-color);
        }

        .privacy-content {
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.8;
            font-size: 1.1rem;
        }

        .privacy-content h3 {
            color: var(--primary-color);
            font-size: 1.8rem;
            margin-top: 3rem;
            margin-bottom: 1.5rem;
            font-family: 'Orbitron', sans-serif;
            text-shadow: 0 0 5px rgba(0, 255, 204, 0.3);
        }

        .privacy-content p {
            margin-bottom: 1.5rem;
            position: relative;
            padding-left: 20px;
        }

        .privacy-content p::before {
            content: '•';
            color: var(--primary-color);
            position: absolute;
            left: 0;
            font-size: 1.5rem;
        }

        .cyber-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(0, 255, 204, 0.2);
            border-radius: 12px;
            padding: 2rem;
            margin-bottom: 2rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .cyber-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent, rgba(0, 255, 204, 0.05), transparent);
            transform: translateX(-100%);
            transition: transform 0.6s ease;
        }

        .cyber-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 255, 204, 0.2);
            border-color: var(--primary-color);
        }

        .cyber-card:hover::before {
            transform: translateX(100%);
        }

        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
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
            box-shadow: 0 0 20px rgba(0, 255, 204, 0.3);
        }

        .back-to-top.visible {
            opacity: 1;
        }

        .back-to-top:hover {
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 5px 25px rgba(0, 255, 204, 0.5);
        }

        .last-updated {
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.9rem;
            text-align: right;
            margin-top: 2rem;
            font-family: 'Orbitron', sans-serif;
            letter-spacing: 1px;
        }

        .glitch-text {
            position: relative;
            color: var(--primary-color);
            font-family: 'Orbitron', sans-serif;
            text-transform: uppercase;
            letter-spacing: 2px;
            animation: glitch 3s infinite;
        }

        @keyframes glitch {
            0% { text-shadow: 0.05em 0 0 #00ffcc, -0.05em -0.025em 0 #ff00ff; }
            14% { text-shadow: 0.05em 0 0 #00ffcc, -0.05em -0.025em 0 #ff00ff; }
            15% { text-shadow: -0.05em -0.025em 0 #00ffcc, 0.025em 0.025em 0 #ff00ff; }
            49% { text-shadow: -0.05em -0.025em 0 #00ffcc, 0.025em 0.025em 0 #ff00ff; }
            50% { text-shadow: 0.025em 0.05em 0 #00ffcc, 0.05em 0 0 #ff00ff; }
            99% { text-shadow: 0.025em 0.05em 0 #00ffcc, 0.05em 0 0 #ff00ff; }
            100% { text-shadow: -0.025em 0 0 #00ffcc, -0.025em -0.025em 0 #ff00ff; }
        }

        .highlight-box {
            background: rgba(0, 255, 204, 0.1);
            border-left: 4px solid var(--primary-color);
            padding: 1.5rem;
            margin: 2rem 0;
            border-radius: 8px;
            position: relative;
            overflow: hidden;
        }

        .highlight-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent, rgba(0, 255, 204, 0.05), transparent);
            animation: shine 3s infinite;
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
                    <h1 class="glitch-text display-4 fw-bold mb-4">PRIVACY POLICY</h1>
                    <p class="lead">Your privacy is our priority. Learn how we protect your data.</p>
            </div>
        </div>
    </div>
</section>

    <!-- Main Content -->
    <main class="py-5">
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="privacy-container" data-aos="fade-up">
                        <h2 class="section-title">Data Protection & Privacy</h2>
                        
                        <div class="privacy-content">
                            <div class="highlight-box" data-aos="fade-right">
                                <h3>1. Information We Collect</h3>
                                <p>We collect information that you provide directly to us, including:</p>
                                <ul class="list-unstyled">
                                    <li>• Account registration details</li>
                                    <li>• Payment information</li>
                                    <li>• Communication preferences</li>
                                    <li>• Game performance data</li>
                    </ul>
                            </div>

                            <div class="cyber-card" data-aos="fade-left">
                                <h3>2. How We Use Your Information</h3>
                                <p>Your information is used to:</p>
                                <ul class="list-unstyled">
                                    <li>• Provide and improve our services</li>
                                    <li>• Process transactions</li>
                                    <li>• Send important updates</li>
                                    <li>• Enhance user experience</li>
                    </ul>
                            </div>

                            <div class="highlight-box" data-aos="fade-right">
                                <h3>3. Data Security</h3>
                                <p>We implement industry-standard security measures to protect your data:</p>
                                <ul class="list-unstyled">
                                    <li>• Encryption of sensitive data</li>
                                    <li>• Regular security audits</li>
                                    <li>• Secure payment processing</li>
                                    <li>• Access controls</li>
                                </ul>
                            </div>

                            <div class="cyber-card" data-aos="fade-left">
                                <h3>4. Your Rights</h3>
                                <p>You have the right to:</p>
                                <ul class="list-unstyled">
                                    <li>• Access your personal data</li>
                                    <li>• Request data correction</li>
                                    <li>• Request data deletion</li>
                                    <li>• Opt-out of marketing</li>
                                </ul>
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
            once: true,
            offset: 100
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

        // Add scroll animation to elements
        document.querySelectorAll('.cyber-card, .highlight-box').forEach(element => {
            element.addEventListener('mouseenter', () => {
                element.style.transform = 'translateY(-5px)';
            });
            element.addEventListener('mouseleave', () => {
                element.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html> 