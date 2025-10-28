<?php
/*
Template Name: SmarTex Landing Page
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmarTex Compression Therapy | Next-Generation Medical Devices</title>
    <?php wp_head(); ?>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-blue: #00a8e8;
            --dark-blue: #003d5b;
            --accent-cyan: #00d4ff;
            --dark-bg: #0a0f1a;
            --light-gray: #f8f9fa;
            --text-gray: #6c757d;
            --border-gray: #e0e0e0;
            --hero-yellow: #f8f9fa;
        }

        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            color: #1a1a1a;
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Navigation */
        nav {
            position: fixed;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            z-index: 1000;
            padding: 1rem 0;
            box-shadow: 0 1px 10px rgba(0, 0, 0, 0.08);
            transform: translateY(-100%);
            transition: transform 0.3s ease-in-out;
        }

        nav.nav-scrolled {
            transform: translateY(0);
        }

        nav .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-text {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--dark-blue);
            text-decoration: none;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        nav a {
            text-decoration: none;
            color: #1a1a1a;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav a:hover {
            color: var(--primary-blue);
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--hero-yellow);
            color: #000;
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .hero .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            position: relative;
            z-index: 1;
        }

        .hero-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            gap: 3rem;
        }

        .hero-logo-container {
            position: relative;
            width: 400px;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
        }

        .logo-circle {
            position: absolute;
            border-radius: 50%;
            border: 3px solid var(--accent-cyan);
            animation: pulse 3s infinite ease-in-out;
        }

        .logo-circle.circle-1 {
            width: 250px;
            height: 250px;
            animation-delay: 0s;
        }

        .logo-circle.circle-2 {
            width: 265px;
            height: 265px;
            animation-delay: 0.5s;
        }

        .logo-circle.circle-3 {
            width: 280px;
            height: 280px;
            animation-delay: 1s;
        }

        .logo-text-wrapper {
            position: relative;
            z-index: 1;
            text-align: center;
            color: #000;
        }

        .logo-main-text {
            font-size: 8rem;
            font-weight: 700;
            display: block;
        }

        .logo-sub-text {
            font-size: 1.8rem;
            letter-spacing: 0.1em;
            margin-top: -3.5rem;
        }

        .hero-tagline {
            font-size: 2.5rem;
            color: var(--accent-cyan);
            font-weight: 500;
            transform: translateY(-40px);
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(0.95);
                opacity: 0.5;
            }
            50% {
                transform: scale(1.05);
                opacity: 1;
            }
        }

        .cta-button {
            display: inline-block;
            padding: 1rem 2.5rem;
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-cyan));
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-weight: 600;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(0, 168, 232, 0.3);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 168, 232, 0.4);
        }

        /* Section Styles */
        section {
            padding: 6rem 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Mission Section */
        .mission {
            background: var(--light-gray);
            padding: 4rem 0;
            text-align: center;
        }

        .mission h2 {
            font-size: 2.5rem;
            color: var(--dark-bg);
            margin-bottom: 1rem;
        }

        .mission-text {
            font-size: 1.3rem;
            color: var(--text-gray);
            line-height: 1.8;
            max-width: 900px;
            margin: 0 auto 2.5rem;
        }

        /* About Section */
        .about {
            background: var(--light-gray);
        }

        .about-content {
            max-width: 1000px;
            margin: 0 auto;
        }

        .about-intro {
            position: relative;
            background-image: url('lab2.jpg');
            background-size: cover;
            background-position: center;
            padding: 8rem 0;
            color: white;
        }

        .about-intro::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }

        .about-intro .container {
            position: relative;
            z-index: 2;
        }

        .about-intro-text {
            font-size: 1.4rem;
            line-height: 1.8;
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        /* Technology Section */
        .technology-section {
            background: var(--light-gray);
            padding: 6rem 0;
            width: 100vw;
            position: relative;
            left: 50%;
            right: 50%;
            margin-left: -50vw;
            margin-right: -50vw;
        }

        .mission-vision {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
            margin-bottom: 3rem;
        }

        .technology-video video {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }


        .mission-box h3,
        .vision-box h3 {
            color: var(--primary-blue);
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .mission-box p,
        .vision-box p {
            color: var(--text-gray);
            line-height: 1.7;
        }

        .about-highlights {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .highlight-item {
            display: flex;
            gap: 1.5rem;
            align-items: start;
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        .highlight-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-cyan));
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            flex-shrink: 0;
        }

        .highlight-text h4 {
            font-size: 1.2rem;
            color: var(--dark-bg);
            margin-bottom: 0.5rem;
        }

        .highlight-text p {
            color: var(--text-gray);
            line-height: 1.6;
        }

        h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--dark-bg);
        }

        .section-subtitle {
            font-size: 1.2rem;
            color: var(--text-gray);
            margin-bottom: 3rem;
        }

        /* Solution Section */
        .solution {
            position: relative;
            text-align: center;
            padding: 8rem 0;
            color: white;
            overflow: hidden;
        }

        #solution-video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -100;
            transform: translateX(-50%) translateY(-50%);
            background-size: cover;
        }

        .solution .container {
            position: relative;
            z-index: 2;
            background: rgba(0, 0, 0, 0.5);
            padding: 2rem;
            border-radius: 8px;
        }

        .solution h2 {
            font-size: 2.5rem;
            line-height: 1.3;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
            color: white;
        }

        .solution .section-subtitle {
            color: rgba(255, 255, 255, 0.8);
        }

        /* Contact Section */
        .contact {
            background: var(--light-gray);
        }

        .contact .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .contact-left {
            text-align: left;
        }

        .contact-right {
            text-align: left;
        }

        .contact-right p {
            font-size: 1.1rem;
            color: var(--text-gray);
            margin-bottom: 2rem;
        }

        .contact-right .cta-button {
            display: inline-block;
        }

        /* Footer */
        footer {
            background: var(--dark-bg);
            color: rgba(255, 255, 255, 0.7);
            padding: 3rem 2rem;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            align-items: center;
            text-align: center;
        }

        .footer-address p,
        .footer-copyright p {
            margin: 0;
        }

        .footer-social a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            margin: 0 1rem;
            transition: color 0.3s;
        }

        .footer-social a:hover {
            color: white;
        }

        .footer-social svg {
            width: 24px;
            height: 24px;
            fill: none;
            stroke: currentColor;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }

            .hero-content {
                gap: 2rem;
            }

            .mission-vision, .contact .container {
                grid-template-columns: 1fr;
            }

            .compression-cylinder {
                width: 150px;
                height: 300px;
            }

            .cylinder-segment {
                height: 60px;
            }

            .cylinder-segment:nth-child(4) {
                top: 60px;
            }

            .cylinder-segment:nth-child(5) {
                top: 120px;
            }

            .cylinder-segment:nth-child(6) {
                top: 180px;
            }

            .cylinder-segment:nth-child(7) {
                top: 240px;
            }

            .cylinder-side {
                height: 300px;
            }

            nav ul {
                gap: 1rem;
                font-size: 0.9rem;
            }

            .mission-text,
            .about-intro {
                font-size: 1.1rem;
            }

            .solution h2 {
                font-size: 1.6rem;
            }

            .highlight-item {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="container">
            <div></div>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#solution">Solution</a></li>
                <li><a href="smartex-team.html">Team</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-logo-container">
                    <div class="logo-circle circle-1"></div>
                    <div class="logo-circle circle-2"></div>
                    <div class="logo-circle circle-3"></div>
                    <div class="logo-text-wrapper">
                        <span class="logo-main-text">SmarTex</span>
                        <span class="logo-sub-text">Compression Therapies</span>
                    </div>
                </div>
                <p class="hero-tagline">Next-Generation Compression. Clinically Engineered.</p>
            </div>
        </div>
    </section>

    <!-- Solution Section -->
    <section id="solution" class="solution">
        <video autoplay muted loop id="solution-video">
            <source src="muscle.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="container">
            <h2>Introducing the World's First Garment Integrating Hydraulic Filament Artificial Muscles</h2>
            <p class="section-subtitle">A highly conformable, unobtrusive, lightweight device with precise dynamic compression</p>
        </div>
    </section>

    <!-- Mission Statement -->
    <section class="mission">
        <div class="container">
            <h2>Our Mission</h2>
            <p class="mission-text">To improve lives with the next generation of compression therapy, delivering superior outcomes while reducing healthcare costs globally.</p>
        </div>
    </section>

    <!-- Full-Width Intro Section -->
    <section class="about-intro">
        <div class="container">
            <div class="about-intro-text">
                <p>SmarTex Compression Therapies is an Australian-based medtech startup spun out of UNSW Sydney in 2024. Built on six years of pioneering research at the Graduate School of Biomedical Engineering, we're bringing breakthrough compression therapy technology from laboratory to clinical reality.</p>
            </div>
        </div>
    </section>

    <!-- Technology Section -->
    <section class="technology-section">
        <div class="container">
            <div class="mission-vision">
                <div class="mission-box">
                    <h3>Our Technology</h3>
                    <p>Revolutionizing patient outcomes through wearable smart garments integrating hydraulic artificial muscles with precision-controlled, adaptive therapeutic compression.</p>
                </div>
                <div class="technology-video">
                    <video autoplay muted loop playsinline>
                        <source src="lab.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </section>

    <!-- Who We Are Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="about-content">
                <div class="about-highlights">
                    <div class="highlight-item">
                        <div class="highlight-icon">🏛️</div>
                        <div class="highlight-text">
                            <h4>UNSW Spinout</h4>
                            <p>Exclusive license for PCT/AU2021/050924 covering world-first hydraulic filament artificial muscle technology</p>
                        </div>
                    </div>
                    <div class="highlight-item">
                        <div class="highlight-icon">🔬</div>
                        <div class="highlight-text">
                            <h4>Research Foundation</h4>
                            <p>Six years of validated research with published papers in leading journals and international media coverage</p>
                        </div>
                    </div>
                    <div class="highlight-item">
                        <div class="highlight-icon">🏆</div>
                        <div class="highlight-text">
                            <h4>Award Recognition</h4>
                            <p>ECA Startup Fellowship and Tyree IHealthE Innovation Catalyst Awards recipient</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="contact-left">
                <h2>Connect With Us</h2>
                <p class="section-subtitle">Interested in learning more about investment opportunities?</p>
            </div>
            <div class="contact-right">
                <p>SmarTex Compression Therapies is seeking strategic partners and investors to accelerate our mission of revolutionizing compression therapy globally.</p>
                <a href="mailto:info@smartexcompression.com" class="cta-button">Get in Touch</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-address">
                <p>Sydney, Australia</p>
            </div>
            <div class="footer-social">
                <a href="mailto:info@smartexcompression.com" aria-label="Email">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                </a>
                <a href="#" target="_blank" aria-label="LinkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                </a>
                <a href="#" target="_blank" aria-label="Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                </a>
            </div>
            <div class="footer-copyright">
                <p>&copy; 2025 SmarTex Compression Therapies Pty Ltd.</p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    <script>
        const nav = document.querySelector('nav');
        const heroSection = document.querySelector('.hero');

        window.addEventListener('scroll', () => {
            const heroHeight = heroSection.offsetHeight;
            if (window.scrollY > heroHeight) {
                nav.classList.add('nav-scrolled');
            } else {
                nav.classList.remove('nav-scrolled');
            }
        });
    </script>
</body>
</html>
