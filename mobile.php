<?php include('includes/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>GAMETOSA ESPORTS & GAMING</title>
    <link rel="shortcut icon" type="image/png" href="./resources/20211128_003053.png">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="2x1-86hpSL3rJAcPot4jwovqFexBSi5RxKPua8zMYC0" />
    <meta property="og:locale" content="en_IN">
    <meta property="og:type" content="website">
    <meta property="og:title" content="GAMETOSA ESPORTS & GAMING">
    <meta property="og:description" content="Gametosa is the India's #1 mobile eSports Hosting and gaming platform that is empowering the rapidly rising community of Creators, Youtuber and eSports fans.">
    <meta property="og:url" content="https://gametosa.com/">
    <meta name="theme-color" content="#317EFB"/>
    <meta name="description" content="Gametosa is the India's #1 mobile Esports Hosting and gaming platform.">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/slide.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #38b8dd;
            --secondary-color: #1a1a1a;
            --accent-color: #ff3e3e;
            --text-color: #ffffff;
            --gradient-bg: linear-gradient(135deg, #000000, #1a1a1a);
            --glow-effect: 0 0 20px rgba(56, 184, 221, 0.3);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: var(--gradient-bg);
            color: var(--text-color);
            overflow-x: hidden;
            position: relative;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 50% 50%, rgba(56, 184, 221, 0.05) 0%, transparent 50%);
            pointer-events: none;
            z-index: -1;
        }

        .mobile-main {
            width: 100%;
            min-height: 100vh;
        }

        /* Enhanced Hero Section */
        .hero-section {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('assests/mobile/1stmobilescreen.webp');
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(56, 184, 221, 0.1), transparent);
            animation: gradientShift 8s ease-in-out infinite;
        }

        .hero-content {
            max-width: 800px;
            padding: 20px;
            z-index: 1;
            position: relative;
        }

        .hero-title {
            font-size: 4.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease forwards;
            background: linear-gradient(45deg, #fff, var(--primary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: var(--glow-effect);
        }

        .hero-description {
            font-size: 1.4rem;
            margin-bottom: 30px;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease 0.3s forwards;
            color: rgba(255, 255, 255, 0.9);
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }

        /* Enhanced Section Headers */
        .section-header {
            text-align: center;
            padding: 80px 0 40px;
            position: relative;
            overflow: hidden;
        }

        .section-title {
            font-size: 3rem;
            color: var(--primary-color);
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 3px;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
            text-shadow: var(--glow-effect);
        }

        .section-title::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(56, 184, 221, 0.2), transparent);
            transform: translateX(-100%);
            animation: shimmer 3s infinite;
        }

        /* Enhanced Slider Container */
        .slider-container {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            background: rgba(0,0,0,0.5);
            backdrop-filter: blur(10px);
            border-radius: 30px;
            margin: 20px 0;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            border: 1px solid rgba(56, 184, 221, 0.1);
        }

        .slider-track {
            display: flex;
            position: absolute;
            width: 100%;
            height: 100%;
            transition: transform 0.7s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .slide {
            min-width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 10%;
            position: relative;
            overflow: hidden;
        }

        .slide::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(0,0,0,0.8), transparent);
            z-index: 0;
        }

        .slide-content {
            flex: 1;
            max-width: 50%;
            padding-right: 50px;
            position: relative;
            z-index: 1;
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.7s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .slide.active .slide-content {
            opacity: 1;
            transform: translateX(0);
        }

        .slide-image {
            flex: 1;
            max-width: 40%;
            position: relative;
            z-index: 1;
            opacity: 0;
            transform: translateX(50px) perspective(1000px) rotateY(-15deg);
            transition: all 0.7s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .slide.active .slide-image {
            opacity: 1;
            transform: translateX(0) perspective(1000px) rotateY(0);
        }

        .slide-image img {
            width: 100%;
            height: auto;
            max-height: 80vh;
            object-fit: contain;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            transition: all 0.5s ease;
        }

        .slide-image:hover img {
            transform: scale(1.05);
            box-shadow: 0 30px 60px rgba(0,0,0,0.4), 0 0 30px rgba(56, 184, 221, 0.3);
        }

        .slide-title {
            font-size: 3.5rem;
            margin-bottom: 20px;
            color: var(--primary-color);
            text-shadow: var(--glow-effect);
            font-weight: 700;
            line-height: 1.2;
        }

        .slide-description {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.8;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }

        /* Enhanced Navigation Buttons */
        .nav-button {
            width: 70px;
            height: 70px;
            background: rgba(56, 184, 221, 0.1);
            border: 2px solid var(--primary-color);
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            z-index: 2;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            backdrop-filter: blur(5px);
        }

        .nav-button.prev {
            left: 30px;
        }

        .nav-button.next {
            right: 30px;
        }

        .nav-button:hover {
            background: var(--primary-color);
            transform: translateY(-50%) scale(1.1);
            box-shadow: 0 0 20px rgba(56, 184, 221, 0.5);
        }

        .nav-button::before {
            content: '';
            width: 15px;
            height: 15px;
            border-top: 3px solid white;
            border-right: 3px solid white;
            transition: all 0.3s ease;
        }

        .nav-button.prev::before {
            transform: rotate(-135deg);
            margin-right: 5px;
        }

        .nav-button.next::before {
            transform: rotate(45deg);
            margin-left: 5px;
        }

        .nav-button:hover::before {
            border-color: black;
        }

        /* Enhanced Shop Section */
        .shop-section {
            padding: 80px 20px;
            background: linear-gradient(135deg, rgba(0,0,0,0.95), rgba(26,26,26,0.95));
            position: relative;
            overflow: hidden;
            margin-top: 60px;
            border-radius: 40px;
        }

        .shop-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(56,184,221,0.1) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }

        .shop-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 60px;
            position: relative;
            z-index: 1;
        }

        .shop-content {
            flex: 1;
            padding: 40px;
        }

        .shop-title {
            font-size: 3.5rem;
            margin-bottom: 30px;
            line-height: 1.2;
            color: white;
            text-shadow: var(--glow-effect);
            font-weight: 800;
        }

        .shop-title .highlight {
            color: var(--primary-color);
            position: relative;
            display: inline-block;
        }

        .shop-title .highlight::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--primary-color);
            transform: scaleX(0);
            transition: transform 0.5s ease;
            transform-origin: right;
            box-shadow: 0 0 10px rgba(56, 184, 221, 0.5);
        }

        .shop-title:hover .highlight::after {
            transform: scaleX(1);
            transform-origin: left;
        }

        .shop-description {
            font-size: 1.4rem;
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.8;
            max-width: 700px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }

        .shop-image {
            flex: 1;
            position: relative;
            transform: perspective(1000px) rotateY(-15deg);
            transition: transform 0.7s ease;
        }

        .shop-image:hover {
            transform: perspective(1000px) rotateY(0deg);
        }

        .shop-image img {
            width: 100%;
            height: auto;
            border-radius: 30px;
            box-shadow: 0 30px 60px rgba(0,0,0,0.4);
            transition: all 0.5s ease;
        }

        .shop-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(56,184,221,0.2), transparent);
            border-radius: 30px;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .shop-image:hover::before {
            opacity: 1;
        }

        /* Enhanced Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        @keyframes gradientShift {
            0% { opacity: 0.3; }
            50% { opacity: 0.7; }
            100% { opacity: 0.3; }
        }

        /* Enhanced Loading Screen */
        .loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-bg);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease;
        }

        .loading-screen.fade-out {
            opacity: 0;
            pointer-events: none;
        }

        .loader {
            width: 60px;
            height: 60px;
            border: 5px solid rgba(255, 255, 255, 0.1);
            border-top: 5px solid var(--primary-color);
            border-radius: 50%;
            animation: spin 1s linear infinite;
            box-shadow: 0 0 20px rgba(56, 184, 221, 0.3);
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Enhanced Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.8rem;
            }

            .hero-description {
                font-size: 1.1rem;
            }

            .section-title {
                font-size: 2.2rem;
            }

            .slide {
                flex-direction: column;
                padding: 20px;
                justify-content: center;
            }

            .slide-content, .slide-image {
                max-width: 100%;
                padding: 20px;
            }

            .slide-title {
                font-size: 2.2rem;
            }

            .slide-description {
                font-size: 1rem;
            }

            .nav-button {
                width: 50px;
                height: 50px;
            }

            .shop-container {
                flex-direction: column;
                text-align: center;
            }

            .shop-title {
                font-size: 2.2rem;
            }

            .shop-description {
                font-size: 1.1rem;
                margin: 0 auto;
            }

            .shop-image {
                transform: none;
                margin-top: 40px;
            }

            .shop-image:hover {
                transform: none;
            }

            .roadmap-title, .help-title {
                font-size: 2.5rem;
            }

            .roadmap-description, .help-description {
                font-size: 1.1rem;
            }

            .roadmap-button, .help-button {
                padding: 12px 30px;
                font-size: 1rem;
            }
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: var(--secondary-color);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #2c93a8;
        }

        /* Enhanced Roadmap Section */
        .roadmap-section {
            padding: 100px 20px;
            background: linear-gradient(135deg, rgba(0,0,0,0.95), rgba(26,26,26,0.95));
            position: relative;
            overflow: hidden;
            text-align: center;
            margin-top: 60px;
            transform: translateY(30px);
            opacity: 0;
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .roadmap-section.animate {
            transform: translateY(0);
            opacity: 1;
        }

        .roadmap-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('assests/mobile/roadmap.webp') center/cover no-repeat;
            opacity: 0;
            z-index: 0;
            transition: opacity 1s ease;
            animation: pulseBackground 4s ease-in-out infinite;
            filter: brightness(0.7) contrast(1.2);
        }

        .roadmap-section.animate::before {
            opacity: 0.5;
        }

        .roadmap-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            border-radius: 30px;
            border: 1px solid rgba(56, 184, 221, 0.2);
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            transform: scale(0.95);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1) 0.3s;
        }

        .roadmap-section.animate .roadmap-content {
            transform: scale(1);
        }

        .roadmap-title {
            font-size: 3.5rem;
            font-weight: 800;
            color: var(--primary-color);
            margin-bottom: 20px;
            text-transform: uppercase;
            text-shadow: var(--glow-effect);
            position: relative;
            display: inline-block;
        }

        .roadmap-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--primary-color);
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.5s ease;
            box-shadow: 0 0 10px rgba(56, 184, 221, 0.5);
        }

        .roadmap-section.animate .roadmap-title::after {
            transform: scaleX(1);
            transform-origin: left;
        }

        .roadmap-description {
            font-size: 1.4rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 40px;
            line-height: 1.6;
            transform: translateY(20px);
            opacity: 0;
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1) 0.5s;
        }

        .roadmap-section.animate .roadmap-description {
            transform: translateY(0);
            opacity: 1;
        }

        .roadmap-button {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 15px 40px;
            background: rgba(56, 184, 221, 0.1);
            border: 2px solid var(--primary-color);
            border-radius: 30px;
            color: white;
            font-size: 1.2rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            transform: translateY(20px);
            opacity: 0;
            backdrop-filter: blur(5px);
        }

        .roadmap-section.animate .roadmap-button {
            transform: translateY(0);
            opacity: 1;
            transition-delay: 0.7s;
        }

        .roadmap-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }

        .roadmap-button:hover {
            background: var(--primary-color);
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 10px 20px rgba(56, 184, 221, 0.3);
            letter-spacing: 1px;
            color: #000;
        }

        .roadmap-button:hover::before {
            left: 100%;
            animation: shimmer 1.5s infinite;
        }

        /* Enhanced Help Section */
        .help-section {
            padding: 100px 20px;
            background: linear-gradient(45deg, rgba(0,0,0,0.9), rgba(26,26,26,0.9));
            position: relative;
            overflow: hidden;
            text-align: center;
            margin-top: 60px;
            transform: translateY(30px);
            opacity: 0;
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .help-section.animate {
            transform: translateY(0);
            opacity: 1;
        }

        .help-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('assests/mobile/help.jpg') center/cover no-repeat;
            opacity: 0;
            z-index: 0;
            filter: brightness(0.7) contrast(1.2);
            transform: scale(1.1);
            transition: all 1s ease;
        }

        .help-section.animate::before {
            opacity: 0.5;
            transform: scale(1);
        }

        .help-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            border-radius: 30px;
            border: 1px solid rgba(56, 184, 221, 0.2);
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            transform: scale(0.95);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1) 0.3s;
        }

        .help-section.animate .help-content {
            transform: scale(1);
        }

        .help-title {
            font-size: 3.5rem;
            font-weight: 800;
            color: var(--primary-color);
            margin-bottom: 20px;
            text-transform: uppercase;
            text-shadow: var(--glow-effect);
            position: relative;
            display: inline-block;
        }

        .help-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--primary-color);
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.5s ease;
            box-shadow: 0 0 10px rgba(56, 184, 221, 0.5);
        }

        .help-section.animate .help-title::after {
            transform: scaleX(1);
            transform-origin: left;
        }

        .help-description {
            font-size: 1.4rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 40px;
            line-height: 1.6;
            transform: translateY(20px);
            opacity: 0;
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1) 0.5s;
        }

        .help-section.animate .help-description {
            transform: translateY(0);
            opacity: 1;
        }

        .help-button {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 15px 40px;
            background: rgba(56, 184, 221, 0.1);
            border: 2px solid var(--primary-color);
            border-radius: 30px;
            color: white;
            font-size: 1.2rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            transform: translateY(20px);
            opacity: 0;
            backdrop-filter: blur(5px);
        }

        .help-section.animate .help-button {
            transform: translateY(0);
            opacity: 1;
            transition-delay: 0.7s;
        }

        .help-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }

        .help-button:hover {
            background: var(--primary-color);
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 10px 20px rgba(56, 184, 221, 0.3);
            letter-spacing: 1px;
            color: #000;
        }

        .help-button:hover::before {
            left: 100%;
            animation: shimmer 1.5s infinite;
        }

        @keyframes pulseBackground {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        @keyframes shimmer {
            0% { left: -100%; }
            100% { left: 100%; }
        }

        /* App Download Section Styles */
        .app-download-section {
            padding: 100px 20px;
            background: linear-gradient(135deg, rgba(0,0,0,0.95), rgba(26,26,26,0.95));
            position: relative;
            overflow: hidden;
            margin-top: 60px;
            transform: translateY(30px);
            opacity: 0;
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .app-download-section.animate {
            transform: translateY(0);
            opacity: 1;
        }

        .app-download-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 50% 50%, rgba(56,184,221,0.1) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }

        .app-download-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 60px;
            position: relative;
            z-index: 1;
        }

        .app-download-content {
            flex: 1;
            padding: 40px;
            transform: translateX(-50px);
            opacity: 0;
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1) 0.3s;
        }

        .app-download-section.animate .app-download-content {
            transform: translateX(0);
            opacity: 1;
        }

        .app-download-title {
            font-size: 3.5rem;
            font-weight: 800;
            color: var(--primary-color);
            margin-bottom: 20px;
            text-shadow: var(--glow-effect);
            position: relative;
            display: inline-block;
        }

        .app-download-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--primary-color);
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.5s ease;
            box-shadow: 0 0 10px rgba(56, 184, 221, 0.5);
        }

        .app-download-section.animate .app-download-title::after {
            transform: scaleX(1);
            transform-origin: left;
        }

        .app-download-description {
            font-size: 1.4rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 40px;
            line-height: 1.6;
            transform: translateY(20px);
            opacity: 0;
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1) 0.5s;
        }

        .app-download-section.animate .app-download-description {
            transform: translateY(0);
            opacity: 1;
        }

        .download-button {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 15px 40px;
            background: var(--primary-color);
            color: #000;
            font-size: 1.2rem;
            font-weight: 600;
            text-decoration: none;
            border-radius: 30px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(56, 184, 221, 0.3);
            transform: translateY(20px);
            opacity: 0;
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1) 0.7s;
            position: relative;
            overflow: hidden;
        }

        .app-download-section.animate .download-button {
            transform: translateY(0);
            opacity: 1;
        }

        .download-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }

        .download-button:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(56, 184, 221, 0.5);
            letter-spacing: 1px;
        }

        .download-button:hover::before {
            left: 100%;
            animation: shimmer 1.5s infinite;
        }

        .app-download-image {
            flex: 1;
            position: relative;
            transform: perspective(1000px) rotateY(-15deg) translateX(50px);
            opacity: 0;
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1) 0.9s;
        }

        .app-download-section.animate .app-download-image {
            transform: perspective(1000px) rotateY(0deg) translateX(0);
            opacity: 1;
        }

        .app-download-image img {
            width: 100%;
            max-width: 400px;
            height: auto;
            border-radius: 30px;
            box-shadow: 0 30px 60px rgba(0,0,0,0.4);
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0); }
        }

        @media (max-width: 768px) {
            .app-download-container {
                flex-direction: column;
                text-align: center;
            }

            .app-download-title {
                font-size: 2.5rem;
            }

            .app-download-description {
                font-size: 1.1rem;
            }

            .app-download-image {
                transform: none;
                margin-top: 40px;
            }

            .app-download-section.animate .app-download-image {
                transform: none;
            }
        }
    </style>
</head>
<body>
    <div class="mobile-main">
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="hero-content">
                <h1 class="hero-title">Experience Mobile Gaming Like Never Before</h1>
                <p class="hero-description">Join India's #1 mobile Esports platform and turn your passion into a career</p>
            </div>
        </section>

        <!-- For Gamers Section -->
        <section class="section-header">
            <h2 class="section-title">For Gamers</h2>
        </section>
        <div class="slider-container" id="gamers-slider">
            <div class="slider-nav">
                <button class="nav-button prev" onclick="changeSlide(-1, 'gamers')"></button>
                <button class="nav-button next" onclick="changeSlide(1, 'gamers')"></button>
            </div>
            <div class="slider-track" id="gamers-track">
                <div class="slide active">
                    <div class="slide-content">
                        <h2 class="slide-title">Flash Reward</h2>
                        <p class="slide-description">User can get a chance/PER DAY win upto 20 to 100 free coins.</p>
                    </div>
                    <div class="slide-image">
                        <img src="assests/mobile/flashreward.webp" alt="Flash Rewards">
                    </div>
                </div>

                <div class="slide">
                    <div class="slide-content">
                        <h2 class="slide-title">Tournaments</h2>
                        <p class="slide-description">Gametosa brings gamer together on one platform to horn their gaming skills. Compete against each other towards glory to get rewarded.</p>
                    </div>
                    <div class="slide-image">
                        <img src="assests/mobile/tourment.webp" alt="Tournaments">
                    </div>
                </div>

                <div class="slide">
                    <div class="slide-content">
                        <h2 class="slide-title">Offerwall</h2>
                        <p class="slide-description">Gametosa brings opportunity For the Gamer and the user to monitize and earn more revenue by doing simple tasks to earn more rewards.</p>
                    </div>
                    <div class="slide-image">
                        <img src="assests/mobile/offerwall.webp" alt="Offerwall">
                    </div>
                </div>

                <div class="slide">
                    <div class="slide-content">
                        <h2 class="slide-title">Guilds</h2>
                        <p class="slide-description">Exclusive features for the Guilds and for their fans. Community can now grow their Fan by using Gametosa Guilds features.</p>
                    </div>
                    <div class="slide-image">
                        <img src="assests/mobile/guilds.webp" alt="Guilds">
                    </div>
                </div>
            </div>
        </div>

        <!-- For Creators Section -->
        <section class="section-header">
            <h2 class="section-title">For Creators</h2>
        </section>
        <div class="slider-container" id="creators-slider">
            <div class="slider-nav">
                <button class="nav-button prev" onclick="changeSlide(-1, 'creators')"></button>
                <button class="nav-button next" onclick="changeSlide(1, 'creators')"></button>
            </div>
            <div class="slider-track" id="creators-track">
                <div class="slide active">
                    <div class="slide-content">
                        <h2 class="slide-title">Creator Membership</h2>
                        <p class="slide-description">Exclusive features for the Creator and for their fans. Creator can now grow their revenue by 95% using Gametosa Membership features.</p>
                    </div>
                    <div class="slide-image">
                        <img src="assests/mobile/membership.webp" alt="Membership">
                    </div>
                </div>

                <div class="slide">
                    <div class="slide-content">
                        <h2 class="slide-title">Superchat</h2>
                        <p class="slide-description">Exclusive features for the Creator and for their fans. Creator can now grow their revenue by 95% using Gametosa Superchat features.</p>
                    </div>
                    <div class="slide-image">
                        <img src="assests/mobile/superchat.webp" alt="Superchat">
                    </div>
                </div>
            </div>
        </div>

        <!-- Shop Points Section -->
        <section class="shop-section">
            <div class="shop-container">
                <div class="shop-content">
                    <h2 class="shop-title">
                        <span class="highlight">2X POINTS</span> ON GAMING PURCHASES IN THE GAMETOSA SHOP
                    </h2>
                    <p class="shop-description">
                        Get boosted rewards for purchasing video games, gaming gift cards, and gear in the Gametosa Shop.
                    </p>
                </div>
                <div class="shop-image">
                    <img src="assests/mobile/shopscreenshot.png" alt="Gametosa Shop Screenshot">
                </div>
            </div>
        </section>

        <!-- Roadmap Section -->
        <section class="roadmap-section">
            <div class="roadmap-content">
                <h2 class="roadmap-title">Roadmap</h2>
                <p class="roadmap-description">What's done & what's next: It's all here for you to explore.</p>
                <a href="https://gametosa.canny.io" class="roadmap-button">Find out</a>
            </div>
        </section>

        <!-- Help Section -->
        <section class="help-section">
            <div class="help-content">
                <h2 class="help-title">Still Have Doubts?</h2>
                <p class="help-description">Get in touch with the Support Team that would guide you better.</p>
                <a href="contact.php" class="help-button">Help Center</a>
            </div>
        </section>

        <!-- Mobile App Download Section -->
        <section class="app-download-section">
            <div class="app-download-container">
                <div class="app-download-content">
                    <h2 class="app-download-title">Download Our Mobile App</h2>
                    <p class="app-download-description">Experience Gametosa on the go with our feature-rich mobile application. Join thousands of gamers and creators in India's #1 mobile Esports platform.</p>
                    <a href="https://play.google.com/store/apps/details?id=gametosa.com" class="download-button" target="_blank" rel="noopener noreferrer">
                        <i class="fas fa-download"></i> Download Now
                    </a>
                </div>
                <div class="app-download-image">
                    <img src="assests/mobile/1stmobilescreen.webp" alt="Gametosa Mobile App">
                </div>
            </div>
        </section>
    </div>

    <script>
        let currentSlides = {
            'gamers': 0,
            'creators': 0
        };
        
        function showSlide(index, sliderId) {
            const track = document.getElementById(`${sliderId}-track`);
            const slides = track.querySelectorAll('.slide');
            const totalSlides = slides.length;
            
            if (index >= totalSlides) index = 0;
            if (index < 0) index = totalSlides - 1;
            
            currentSlides[sliderId] = index;
            
            slides.forEach(slide => slide.classList.remove('active'));
            slides[index].classList.add('active');
            
            const translation = -index * 100;
            track.style.transform = `translateX(${translation}%)`;
        }

        function changeSlide(direction, sliderId) {
            showSlide(currentSlides[sliderId] + direction, sliderId);
        }

        function startAutoSlide() {
            setInterval(() => {
                changeSlide(1, 'gamers');
                changeSlide(1, 'creators');
            }, 3000);
        }

        document.addEventListener('DOMContentLoaded', () => {
            // Initialize sliders
            showSlide(0, 'gamers');
            showSlide(0, 'creators');
            startAutoSlide();

            // Enhanced scroll animations
            const sections = document.querySelectorAll('section');
            const observerOptions = {
                threshold: 0.2,
                rootMargin: '0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate');
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            sections.forEach(section => {
                section.style.opacity = '0';
                section.style.transform = 'translateY(50px)';
                section.style.transition = 'all 0.8s cubic-bezier(0.4, 0, 0.2, 1)';
                observer.observe(section);
            });

            // Parallax effect
            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                
                document.querySelectorAll('.hero-section').forEach(element => {
                    element.style.transform = `translateY(${scrolled * 0.5}px)`;
                });
                
                document.querySelectorAll('.roadmap-section, .help-section').forEach(section => {
                    const speed = 0.3;
                    const yPos = -(scrolled * speed);
                    section.style.backgroundPositionY = `${yPos}px`;
                });
            });
        });
    </script>
</body>
</html>

<?php include('includes/footer.php'); ?> 