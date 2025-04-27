<?php include('includes/header.php'); ?>

<!-- Add required CSS libraries -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

<style>
    :root {
        --primary-color: #00ffcc;
        --secondary-color: #ff00ff;
        --dark-bg: #0d1117;
        --darker-bg: #0a0d12;
    }

    /* Preserve the original navbar styling */
    .cyber-header {
        width: 100%;
        background-color: #0d1117;
        padding: 0.5rem 0;
        position: sticky;
        top: 0;
        z-index: 1000;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        height: 70px; /* Fixed height */
        display: flex;
        align-items: center;
    }

    .cyber-header .container {
        max-width: 1400px;
        width: 95%;
        padding: 0;
        margin-right: 0;
        margin-left: auto;
        height: 100%;
        display: flex;
        align-items: center;
    }

    .cyber-header .navbar {
        height: 100%;
        display: flex;
        align-items: center;
        width: 100%;
    }

    .cyber-header .navbar-nav {
        display: flex;
        align-items: center;
        flex-wrap: nowrap;
        gap: 1rem;
        margin-left: auto;
        height: 100%;
    }
    
    .cyber-header .nav-item {
        white-space: nowrap;
        display: flex;
        align-items: center;
        height: 100%;
    }

    .cyber-header .nav-link {
        padding: 0.5rem 1rem;
        display: flex;
        align-items: center;
        height: 100%;
        color: #fff;
    }

    .cyber-header .navbar-brand {
        margin-right: auto;
        padding: 0;
        height: 100%;
        display: flex;
        align-items: center;
    }

    .cyber-header .navbar-brand img.logo {
        height: 50px;
        width: auto;
        margin-left: -20px;
    }

    /* Auth button styling */
    .cyber-header .nav-item .nav-link.auth-btn {
        background: linear-gradient(90deg, #00ffcc, #00ccff);
        color: #000;
        padding: 8px 20px;
        border-radius: 4px;
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.9rem;
        letter-spacing: 1px;
        border: 1px solid rgba(0, 255, 204, 0.3);
    }
    
    .cyber-header .nav-item .nav-link.auth-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 255, 204, 0.3);
        color: #000;
    }
    
    .cyber-header .nav-item .nav-link.auth-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: 0.5s;
    }
    
    .cyber-header .nav-item .nav-link.auth-btn:hover::before {
        left: 100%;
    }
    
    /* Download App Button Styling */
    .cyber-header .nav-item .nav-link.download-app-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(0, 255, 204, 0.1);
        border: 1px solid rgba(0, 255, 204, 0.3);
        color: #00ffcc;
        padding: 8px 15px;
        border-radius: 4px;
        transition: all 0.3s ease;
        font-weight: 500;
        font-size: 0.9rem;
        letter-spacing: 0.5px;
    }
    
    .cyber-header .nav-item .nav-link.download-app-btn:hover {
        background: rgba(0, 255, 204, 0.2);
        color: #fff;
        box-shadow: 0 3px 10px rgba(0, 255, 204, 0.2);
        transform: translateY(-1px);
    }
    
    .cyber-header .nav-item .nav-link.download-app-btn i {
        font-size: 1.1rem;
    }
    
    /* Discord Button Styling */
    .cyber-header .nav-item .nav-link.discord-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #5865F2;
        border: 1px solid rgba(88, 101, 242, 0.3);
        color: #fff;
        padding: 8px 15px;
        border-radius: 4px;
        transition: all 0.3s ease;
        font-weight: 500;
        font-size: 0.9rem;
        letter-spacing: 0.5px;
    }
    
    .cyber-header .nav-item .nav-link.discord-btn:hover {
        background: #4752c4;
        color: #fff;
        box-shadow: 0 3px 10px rgba(88, 101, 242, 0.3);
        transform: translateY(-1px);
    }
    
    .cyber-header .nav-item .nav-link.discord-btn i {
        font-size: 1.1rem;
    }

    /* Mobile responsive fixes */
    @media (max-width: 991px) {
        .cyber-header {
            height: auto;
            padding: 0.5rem 0;
        }

        .cyber-header .navbar-nav {
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 1rem;
        }

        .cyber-header .nav-item {
            width: 100%;
            text-align: center;
        }

        .cyber-header .navbar-brand {
            margin-left: 0;
        }

        .cyber-header .navbar-brand img.logo {
            margin-left: 0;
        }
    }

    @media (min-width: 992px) {
        .cyber-header .navbar-collapse {
            display: flex;
            justify-content: flex-end;
            margin-right: 1rem;
            height: 100%;
        }
    }

    /* Navbar toggler styling */
    .cyber-header .navbar-toggler {
        background: transparent;
        border: none;
        color: #fff;
        font-size: 1.5rem;
        margin-left: auto;
        cursor: pointer;
        padding: 0.5rem;
        display: none;
    }

    @media (max-width: 991px) {
        .cyber-header .navbar-toggler {
            display: block;
        }
    }

    .cyber-header .navbar-toggler:focus {
        outline: none;
    }

    .cyber-header .navbar-collapse.show {
        display: block;
    }

    .cyber-header .navbar-collapse {
        background-color: #0d1117;
    }

    @media (max-width: 991px) {
        .cyber-header .navbar-collapse {
            position: absolute;
            top: 70px;
            left: 0;
            right: 0;
            padding: 1rem;
            z-index: 999;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
    }

    /* End of navbar preservation rules */

    body {
        background: var(--dark-bg);
        font-family: 'Roboto', sans-serif;
        color: #fff;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        position: relative;
        overflow-x: hidden;
    }

    .main-content {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem 0;
        position: relative;
    }

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
        z-index: -1;
    }

    @keyframes gridMove {
        0% { transform: translateY(0); }
        100% { transform: translateY(30px); }
    }

    .auth-container {
        background: rgba(13, 17, 23, 0.9);
        border: 1px solid rgba(0, 255, 204, 0.2);
        border-radius: 10px;
        padding: 1.5rem;
        box-shadow: 0 0 30px rgba(0, 255, 204, 0.1);
        position: relative;
        overflow: hidden;
        backdrop-filter: blur(10px);
        max-width: 500px;
        width: 100%;
        margin: auto;
    }

    .auth-container::before {
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

    .logo-container {
        text-align: center;
        margin-bottom: 1.5rem;
        position: relative;
    }

    .logo-container img {
        max-width: 120px;
        filter: drop-shadow(0 0 10px rgba(0, 255, 204, 0.5));
        transition: transform 0.3s ease;
    }

    .logo-container img:hover {
        transform: scale(1.05);
    }

    .auth-tabs {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin-bottom: 2rem;
        flex-wrap: wrap;
    }

    .auth-tab {
        padding: 0.75rem 2rem;
        background: transparent;
        border: 1px solid var(--primary-color);
        color: var(--primary-color);
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-family: 'Orbitron', sans-serif;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        min-width: 120px;
        text-align: center;
    }

    .auth-tab.active {
        background: var(--primary-color);
        color: #000;
    }

    .auth-tab:hover:not(.active) {
        background: rgba(0, 255, 204, 0.1);
    }

    .form-control {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(0, 255, 204, 0.3);
        color: #fff;
        padding: 0.75rem 1rem;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        background: rgba(255, 255, 255, 0.1);
        border-color: var(--primary-color);
        box-shadow: 0 0 15px rgba(0, 255, 204, 0.2);
        color: #fff;
    }

    .form-label {
        color: var(--primary-color);
        font-weight: 500;
        margin-bottom: 0.5rem;
    }

    .form-control::placeholder {
        color: rgba(255, 255, 255, 0.7);
    }

    .text-muted {
        color: rgba(0, 255, 204, 0.8) !important;
    }

    .btn-submit {
        background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
        border: none;
        color: #000;
        font-weight: 600;
        padding: 0.75rem 2rem;
        border-radius: 5px;
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
        width: 100%;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-family: 'Orbitron', sans-serif;
        box-shadow: 0 0 15px rgba(0, 255, 204, 0.3);
    }

    .btn-submit::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(
            90deg,
            transparent,
            rgba(255, 255, 255, 0.3),
            transparent
        );
        transition: 0.5s;
    }

    .btn-submit:hover::before {
        left: 100%;
    }

    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 20px rgba(0, 255, 204, 0.5);
    }

    .btn-submit:active {
        transform: translateY(0);
        box-shadow: 0 2px 10px rgba(0, 255, 204, 0.3);
    }

    .btn-submit::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border: 1px solid rgba(0, 255, 204, 0.5);
        border-radius: 5px;
        pointer-events: none;
    }

    .links-container {
        margin-top: 1rem;
        text-align: center;
    }

    .links-container a {
        color: var(--primary-color);
        text-decoration: none;
        transition: all 0.3s ease;
        position: relative;
        padding: 0.5rem 1rem;
    }

    .links-container a::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 2px;
        background: var(--primary-color);
        transition: all 0.3s ease;
        transform: translateX(-50%);
    }

    .links-container a:hover::after {
        width: 100%;
    }

    .cyber-line {
        height: 1px;
        background: linear-gradient(90deg, transparent, var(--primary-color), transparent);
        margin: 1rem 0;
        position: relative;
    }

    .cyber-line::before,
    .cyber-line::after {
        content: '';
        position: absolute;
        width: 10px;
        height: 10px;
        background: var(--primary-color);
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
    }

    .cyber-line::before {
        left: 0;
    }

    .cyber-line::after {
        right: 0;
    }

    .social-login {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin-top: 1.5rem;
        flex-wrap: wrap;
    }

    .social-btn {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(0, 255, 204, 0.3);
        color: #fff;
        transition: all 0.3s ease;
    }

    .social-btn:hover {
        background: var(--primary-color);
        color: #000;
        transform: translateY(-2px);
    }

    .auth-form {
        display: none;
    }

    .auth-form.active {
        display: block;
    }

    /* Password Strength Indicator */
    .password-strength {
        height: 4px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 2px;
        margin-top: 0.5rem;
        overflow: hidden;
    }

    .strength-meter {
        height: 100%;
        width: 0;
        transition: all 0.3s ease;
    }

    .strength-text {
        font-size: 0.9rem;
        margin-top: 0.5rem;
        color: rgba(255, 255, 255, 0.8);
        font-family: 'Rajdhani', sans-serif;
    }

    /* Terms and Conditions */
    .terms-group {
        display: flex;
        align-items: flex-start;
        margin-bottom: 1.5rem;
        padding: 1.2rem;
        background: rgba(255, 255, 255, 0.03);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.05);
        transition: all 0.3s ease;
    }

    .terms-group:hover {
        background: rgba(255, 255, 255, 0.05);
        border-color: rgba(0, 255, 204, 0.1);
        transform: translateX(5px);
    }

    .terms-group input[type="checkbox"] {
        appearance: none;
        -webkit-appearance: none;
        width: 22px;
        height: 22px;
        border: 2px solid rgba(255, 255, 255, 0.2);
        border-radius: 5px;
        margin-right: 1rem;
        margin-top: 0.2rem;
        cursor: pointer;
        position: relative;
        transition: all 0.3s ease;
    }

    .terms-group input[type="checkbox"]:checked {
        background: var(--primary-color);
        border-color: var(--primary-color);
    }

    .terms-group input[type="checkbox"]:checked::after {
        content: '✓';
        position: absolute;
        color: var(--dark-bg);
        font-size: 14px;
        font-weight: bold;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .terms-group label {
        color: #fff;
        font-size: 0.95rem;
        line-height: 1.5;
        flex: 1;
        cursor: pointer;
        font-family: 'Rajdhani', sans-serif;
    }

    .terms-group a {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
        position: relative;
    }

    .terms-group a::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 1px;
        background: var(--primary-color);
        transition: width 0.3s ease;
    }

    .terms-group a:hover::after {
        width: 100%;
    }

    /* Form Group Styles */
    .form-group {
        margin-bottom: 1.5rem;
        position: relative;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        color: #fff;
        font-weight: 500;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.1rem;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .auth-container {
            padding: 1rem;
            margin: 1rem;
        }

        .auth-tab {
            padding: 0.5rem 1rem;
            min-width: 100px;
            font-size: 0.9rem;
        }

        .row {
            margin-bottom: 0;
        }
        
        .col-md-6 {
            margin-bottom: 1rem;
        }
        
        .form-group {
            margin-bottom: 0.5rem;
        }

        .terms-group {
            padding: 1rem;
        }

        .terms-group label {
            font-size: 0.85rem;
        }
    }

    @media (max-width: 480px) {
        .auth-tab {
            width: 100%;
            margin-bottom: 0.5rem;
        }

        .auth-tabs {
            flex-direction: column;
            gap: 0.5rem;
        }

        .social-login {
            gap: 0.5rem;
        }

        .social-btn {
            width: 35px;
            height: 35px;
        }
    }
</style>

<div class="main-content">
    <div class="cyber-grid"></div>
    
    <div class="container">
        <div class="auth-container" data-aos="fade-up">
            <div class="logo-container">
                <img src="assests/gametosa_logos_thumbnails/header_gametosa.png" alt="Gametosa Logo">
            </div>

            <div class="auth-tabs">
                <button class="auth-tab <?php echo (!isset($_GET['form']) || $_GET['form'] !== 'register') ? 'active' : ''; ?>" data-form="login">Login</button>
                <button class="auth-tab <?php echo (isset($_GET['form']) && $_GET['form'] === 'register') ? 'active' : ''; ?>" data-form="register">Register</button>
            </div>

            <!-- Login Form -->
            <form id="login-form" class="auth-form <?php echo (!isset($_GET['form']) || $_GET['form'] !== 'register') ? 'active' : ''; ?>" action="login_process.php" method="POST">
                <div class="mb-3">
                    <label for="login-email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="login-email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="login-password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="login-password" name="password" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember-me">
                    <label class="form-check-label" for="remember-me">Remember me</label>
                </div>
                <button type="submit" class="btn-submit">Login</button>
                <div class="links-container">
                    <a href="forgot-password.php">Forgot Password?</a>
                </div>
            </form>

            <!-- Register Form -->
            <form id="register-form" class="auth-form <?php echo (isset($_GET['form']) && $_GET['form'] === 'register') ? 'active' : ''; ?>" action="register_process.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="register-first-name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="register-first-name" name="first_name" placeholder="Enter your first name" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="register-last-name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="register-last-name" name="last_name" placeholder="Enter your last name" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="register-username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="register-username" name="username" placeholder="Enter your username" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="register-email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="register-email" name="email" placeholder="Enter your email" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="register-mobile" class="form-label">Mobile Number</label>
                            <input type="tel" class="form-control" id="register-mobile" name="mobile" placeholder="Enter your mobile number" pattern="[0-9]{10}" required>
                            <small class="text-muted">Enter 10-digit mobile number</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="register-city" class="form-label">City</label>
                            <input type="text" class="form-control" id="register-city" name="city" placeholder="Enter your city" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="register-password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="register-password" name="password" placeholder="Create a strong password" required>
                            <div class="password-strength">
                                <div class="strength-meter"></div>
                            </div>
                            <div class="strength-text"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="register-confirm-password" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="register-confirm-password" name="confirm_password" placeholder="Confirm your password" required>
                            <div id="password-match-message" class="mt-2" style="display: none; font-size: 0.9rem; font-family: 'Rajdhani', sans-serif;"></div>
                        </div>
                    </div>
                </div>

                <div class="terms-group">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">
                        I agree to the <a href="terms.php">Terms of Service</a> and <a href="privacy.php">Privacy Policy</a>
                    </label>
                </div>

                <button type="submit" class="btn-submit">Create Account</button>
            </form>

            <div class="cyber-line"></div>

            <div class="social-login">
                <a href="#" class="social-btn"><i class="fab fa-google"></i></a>
                <a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-btn"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Add AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS
    AOS.init({
        duration: 1000,
        once: false,
        mirror: true
    });

    // Form toggle functionality
    const authTabs = document.querySelectorAll('.auth-tab');
    const authForms = document.querySelectorAll('.auth-form');

    authTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // Remove active class from all tabs and forms
            authTabs.forEach(t => t.classList.remove('active'));
            authForms.forEach(f => f.classList.remove('active'));

            // Add active class to clicked tab and corresponding form
            tab.classList.add('active');
            const formId = tab.getAttribute('data-form') + '-form';
            document.getElementById(formId).classList.add('active');
        });
    });

    // Password Strength Checker
    const passwordInput = document.getElementById('register-password');
    const confirmPasswordInput = document.getElementById('register-confirm-password');
    const strengthMeter = document.querySelector('.strength-meter');
    const strengthText = document.querySelector('.strength-text');
    const passwordMatchMessage = document.getElementById('password-match-message');

    // Function to check password match
    function checkPasswordMatch() {
        const password = passwordInput.value;
        const confirmPassword = confirmPasswordInput.value;

        if (confirmPassword) {
            if (password !== confirmPassword) {
                passwordMatchMessage.textContent = 'Passwords do not match!';
                passwordMatchMessage.style.display = 'block';
                passwordMatchMessage.style.color = '#ff3366';
            } else {
                passwordMatchMessage.textContent = 'Passwords match!';
                passwordMatchMessage.style.display = 'block';
                passwordMatchMessage.style.color = '#00ffcc';
            }
        } else {
            passwordMatchMessage.style.display = 'none';
        }
    }

    // Add event listeners for real-time password matching
    if (passwordInput && confirmPasswordInput) {
        passwordInput.addEventListener('input', checkPasswordMatch);
        confirmPasswordInput.addEventListener('input', checkPasswordMatch);
    }

    if (passwordInput && strengthMeter && strengthText) {
        passwordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;
            let text = '';

            // Check password length
            if (password.length >= 8) strength += 1;
            // Check for numbers
            if (password.match(/\d/)) strength += 1;
            // Check for lowercase
            if (password.match(/[a-z]/)) strength += 1;
            // Check for uppercase
            if (password.match(/[A-Z]/)) strength += 1;
            // Check for special characters
            if (password.match(/[^a-zA-Z\d]/)) strength += 1;

            // Update strength meter
            const width = (strength / 5) * 100;
            strengthMeter.style.width = width + '%';

            // Update strength text and color
            switch(strength) {
                case 0:
                case 1:
                    strengthMeter.style.background = '#ff3366';
                    text = 'Very Weak';
                    break;
                case 2:
                    strengthMeter.style.background = '#ff9933';
                    text = 'Weak';
                    break;
                case 3:
                    strengthMeter.style.background = '#ffcc00';
                    text = 'Medium';
                    break;
                case 4:
                    strengthMeter.style.background = '#66cc00';
                    text = 'Strong';
                    break;
                case 5:
                    strengthMeter.style.background = '#00ffcc';
                    text = 'Very Strong';
                    break;
            }

            strengthText.textContent = text;
        });
    }

    // Mobile number validation
    const mobileInput = document.getElementById('register-mobile');
    if (mobileInput) {
        mobileInput.addEventListener('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
            if (this.value.length > 10) {
                this.value = this.value.slice(0, 10);
            }
        });
    }

    // Form validation
    const registerForm = document.getElementById('register-form');
    if (registerForm) {
        registerForm.addEventListener('submit', function(e) {
            const password = document.getElementById('register-password').value;
            const confirmPassword = document.getElementById('register-confirm-password').value;
            const mobile = document.getElementById('register-mobile').value;

            if (password !== confirmPassword) {
                e.preventDefault();
                alert('Passwords do not match!');
            }

            if (mobile.length !== 10) {
                e.preventDefault();
                alert('Please enter a valid 10-digit mobile number!');
            }
        });
    }
});
</script>

<?php include('includes/footer.php'); ?>
