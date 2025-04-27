<?php include('includes/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>404 - Page Not Found | GAMETOSA ESPORTS & GAMING</title>
    <style>
        .error-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #0d1117, #1a1a1a);
            position: relative;
            overflow: hidden;
            padding: 2rem;
        }

        .error-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                linear-gradient(rgba(0, 255, 204, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 255, 204, 0.05) 1px, transparent 1px);
            background-size: 30px 30px;
            animation: gridMove 20s linear infinite;
            opacity: 0.5;
        }

        .error-content {
            text-align: center;
            position: relative;
            z-index: 1;
            max-width: 800px;
            padding: 3rem;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 20px;
            border: 1px solid rgba(0, 255, 204, 0.2);
            box-shadow: 0 0 30px rgba(0, 255, 204, 0.1);
            backdrop-filter: blur(10px);
        }

        .error-code {
            font-size: 8rem;
            font-weight: 800;
            color: #00ffcc;
            text-shadow: 0 0 20px rgba(0, 255, 204, 0.5);
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }

        .error-code::before {
            content: '404';
            position: absolute;
            top: 0;
            left: 0;
            color: rgba(0, 255, 204, 0.2);
            z-index: -1;
            transform: translate(5px, 5px);
        }

        .error-title {
            font-size: 2.5rem;
            color: #fff;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .error-description {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .home-button {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 15px 40px;
            background: rgba(0, 255, 204, 0.1);
            border: 2px solid #00ffcc;
            color: #fff;
            font-size: 1.2rem;
            font-weight: 600;
            text-decoration: none;
            border-radius: 30px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .home-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }

        .home-button:hover {
            background: #00ffcc;
            color: #000;
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 255, 204, 0.3);
        }

        .home-button:hover::before {
            left: 100%;
            animation: shimmer 1.5s infinite;
        }

        .glitch-effect {
            animation: glitch 1s linear infinite;
        }

        @keyframes glitch {
            0% { transform: translate(0); }
            20% { transform: translate(-2px, 2px); }
            40% { transform: translate(2px, -2px); }
            60% { transform: translate(2px, 2px); }
            80% { transform: translate(-2px, -2px); }
            100% { transform: translate(0); }
        }

        @keyframes gridMove {
            0% { transform: translateY(0); }
            100% { transform: translateY(30px); }
        }

        @keyframes shimmer {
            0% { left: -100%; }
            100% { left: 100%; }
        }

        @media (max-width: 768px) {
            .error-code {
                font-size: 6rem;
            }

            .error-title {
                font-size: 2rem;
            }

            .error-description {
                font-size: 1rem;
            }

            .error-content {
                padding: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="error-content">
            <h1 class="error-code glitch-effect">404</h1>
            <h2 class="error-title">Page Not Found</h2>
            <p class="error-description">
                The page you're looking for seems to have vanished into the digital void.<br>
                Maybe it's on a different server or has been moved to a new location.
            </p>
            <a href="/" class="home-button">
                <i class="fas fa-home"></i> Return to Homepage
            </a>
        </div>
    </div>

    <script>
        // Add glitch effect on hover
        document.querySelector('.error-code').addEventListener('mouseover', function() {
            this.classList.add('glitch-effect');
        });

        document.querySelector('.error-code').addEventListener('mouseout', function() {
            this.classList.remove('glitch-effect');
        });
    </script>
</body>
</html>

<?php include('includes/footer.php'); ?> 