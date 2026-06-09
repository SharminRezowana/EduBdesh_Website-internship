<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Support | EduBdesh</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* ==========================================
           CORE STYLES & DESIGN TOKENS
           ========================================== */
        :root {
            --primary-red: #E3000F;
            --dark-text: #1a1a1a;
            --light-text: #555;
            --bg-light: #fdfdfd;
            --bg-gray: #f8f9fa;
            --white: #fff;
            --font-main: 'Inter', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-main);
            overflow-x: hidden;
            color: var(--dark-text);
            line-height: 1.6;
            background-color: var(--bg-light);
        }

        a {
            text-decoration: none;
            transition: all 0.3s ease;
        }

        ul {
            list-style: none;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 0 20px;
        }

        .section-padding {
            padding: 90px 0;
        }

        .center-text {
            text-align: center;
            margin-bottom: 50px;
        }

        .center-text h2 {
            font-size: 2.5rem;
            margin-top: 10px;
        }

        .badge {
            color: var(--primary-red);
            font-weight: 700;
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-size: 0.85rem;
            background: rgba(227, 0, 15, 0.06);
            padding: 6px 16px;
            border-radius: 50px;
            margin-bottom: 12px;
        }

        h1, h2, h3, h4 {
            color: var(--dark-text);
            font-weight: 700;
        }

        p {
            color: var(--light-text);
            font-size: 0.98rem;
            margin-bottom: 20px;
        }

        /* BUTTON COMPONENTS */
        .btn-primary {
            background: var(--primary-red);
            color: white;
            padding: 14px 32px;
            border-radius: 50px;
            display: inline-block;
            font-weight: 600;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(227,0,15,0.2);
        }

        .btn-primary:hover {
            opacity: 0.95;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(227,0,15,0.3);
        }

        .btn-outline {
            background: transparent;
            color: var(--dark-text);
            border: 2px solid #ddd;
            padding: 12px 30px;
            border-radius: 50px;
            display: inline-block;
            font-weight: 600;
            cursor: pointer;
        }

        .btn-outline:hover {
            background: #eee;
            border-color: #ccc;
        }

        /* GRID SYSTEM SETUP */
        .grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 50px;
            align-items: center;
        }

        .grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        .grid-6 {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 20px;
        }

        /* ==========================================
           HEADER & NAVIGATION STRUCTURE
           ========================================== */
        header {
            background: white;
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 45px;
            display: block;
        }

        .nav-links {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .nav-links a {
            color: var(--dark-text);
            font-weight: 500;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: var(--primary-red);
        }

        .dropdown {
            position: relative;
        }

        .dropdown > a i {
            font-size: 0.8rem;
            margin-left: 4px;
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            background: white;
            width: 220px;
            border-radius: 10px;
            padding: 10px 0;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            opacity: 0;
            visibility: hidden;
            transition: 0.3s;
            z-index: 10;
        }

        .dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
        }

        .dropdown-menu li a {
            display: block;
            padding: 12px 20px;
            font-weight: 400;
        }

        .dropdown-menu li a:hover {
            background: #f5f5f5;
            color: var(--primary-red);
        }

        /* ==========================================
           HERO SECTION LAYOUT
           ========================================== */
        .admission-hero {
            padding: 80px 0;
            background: #fff;
        }

        .hero-layout h1 {
            font-size: 3.2rem;
            line-height: 1.2;
            margin-bottom: 25px;
        }

        .hero-layout p {
            font-size: 1.05rem;
            color: var(--light-text);
            margin-bottom: 35px;
            line-height: 1.7;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
        }

        .hero-image-wrapper img {
            width: 100%;
            border-radius: 24px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.06);
            display: block;
        }

        /* ==========================================
           SECTION 1: SMART START
           ========================================== */
        .smart-start-section {
            background-color: var(--bg-gray);
        }

        .smart-start-image img {
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.05);
        }

        .feature-sub-title {
            font-size: 1.4rem;
            margin: 20px 0 10px 0;
            color: var(--dark-text);
        }

        .checklist-items li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 12px;
            font-size: 0.98rem;
            color: var(--light-text);
        }

        .checklist-items li i {
            color: #2ec4b6;
            margin-top: 5px;
            font-size: 1.1rem;
        }

        /* ==========================================
           SECTION 2: GUIDED PATH (PROCESS ROADMAP)
           ========================================== */
        .process-grid {
            margin-top: 30px;
        }

        .process-card {
            background: white;
            padding: 35px 25px;
            border-radius: 16px;
            border: 1px solid #eee;
            position: relative;
            transition: all 0.3s ease;
        }

        .process-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            border-color: rgba(227, 0, 15, 0.2);
        }

        .process-card .step-num {
            width: 45px;
            height: 45px;
            background: rgba(227, 0, 15, 0.08);
            color: var(--primary-red);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 20px;
        }

        .process-card h4 {
            font-size: 1.15rem;
            margin-bottom: 12px;
        }

        .process-card p {
            font-size: 0.92rem;
            margin-bottom: 0;
            line-height: 1.6;
        }

        /* ==========================================
           SECTION 3: INSIDER EDGE
           ========================================== */
        .insider-section {
            background: linear-gradient(135deg, #161a1d 0%, #2b2d42 100%);
            color: #fff;
        }

        .insider-section h2, .insider-section .feature-sub-title {
            color: #fff;
        }

        .insider-section p {
            color: #b0b3b8;
        }

        .insider-checklist li {
            color: #e0e0e0;
        }

        .insider-checklist li i {
            color: #ffb703;
        }

        .insider-graphic-box {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 24px;
            padding: 40px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .info-stat-card {
            background: rgba(255, 255, 255, 0.03);
            border-radius: 16px;
            padding: 25px 20px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .info-stat-card i {
            font-size: 2rem;
            color: var(--primary-red);
            margin-bottom: 15px;
        }

        .info-stat-card h5 {
            color: #fff;
            font-size: 1.05rem;
            font-weight: 600;
        }

        /* ==========================================
           SECTION 4: WHERE CAN YOU GO (DESTINATIONS)
           ========================================== */
        .dest-section {
            background-color: var(--bg-gray);
        }

        .country-card {
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.03);
            transition: all 0.3s ease;
            text-align: center;
            padding-bottom: 20px;
        }

        .country-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        }

        .country-image-frame {
            height: 130px;
            overflow: hidden;
            margin-bottom: 15px;
        }

        .country-image-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .country-card:hover .country-image-frame img {
            transform: scale(1.06);
        }

        .country-card h4 {
            font-size: 1rem;
            margin-bottom: 12px;
            font-weight: 600;
        }

        .country-explore-btn {
            font-size: 0.82rem;
            font-weight: 600;
            color: var(--primary-red);
            border: 1px solid var(--primary-red);
            padding: 5px 18px;
            border-radius: 30px;
            display: inline-block;
        }

        .country-explore-btn:hover {
            background: var(--primary-red);
            color: #fff;
        }

        .view-all-box {
            text-align: center;
            margin-top: 40px;
        }

        /* ==========================================
           SECTION 5: SEAMLESS STEP
           ========================================== */
        .seamless-image img {
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.05);
        }

        /* ==========================================
           SECTION 6: FROM DREAMS TO DESTINATIONS
           ========================================== */
        .testimonial-section {
            background: linear-gradient(rgba(248,249,250,0.8), rgba(248,249,250,0.8)), url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .testimonial-container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 50px;
            border-radius: 24px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.05);
            text-align: center;
            position: relative;
        }

        .quote-icon {
            font-size: 2.5rem;
            color: rgba(227, 0, 15, 0.15);
            margin-bottom: 20px;
        }

        .testimonial-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #444;
            font-style: italic;
            margin-bottom: 30px;
        }

        .student-profile h4 {
            font-size: 1.15rem;
            margin-bottom: 2px;
        }

        .student-profile p {
            font-size: 0.88rem;
            color: var(--primary-red);
            font-weight: 600;
            margin-bottom: 0;
        }

        /* ==========================================
           SECTION 7: ACCORDION FAQs
           ========================================== */
        .faq-wrapper {
            max-width: 850px;
            margin: 0 auto;
        }

        .faq-item {
            background: #fff;
            border: 1px solid #eaeaea;
            border-radius: 12px;
            margin-bottom: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .faq-header {
            padding: 22px 28px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            font-weight: 600;
            font-size: 1.05rem;
            user-select: none;
        }

        .faq-header i {
            color: var(--primary-red);
            transition: transform 0.3s ease;
        }

        .faq-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.35s ease, padding 0.35s ease;
            padding: 0 28px;
            color: #555;
            font-size: 0.96rem;
            line-height: 1.7;
            border-top: 1px solid transparent;
        }

        /* Active Accordion States */
        .faq-item.active {
            border-color: #ddd;
            box-shadow: 0 5px 15px rgba(0,0,0,0.02);
        }

        .faq-item.active .faq-header i {
            transform: rotate(180deg);
        }

        .faq-item.active .faq-body {
            padding: 5px 28px 25px 28px;
            border-top: 1px solid #eee;
        }

        /* ==========================================
           SECTION 8: BOTTOM CTA STRIP
           ========================================== */
        .action-strip-section {
            background: linear-gradient(135deg, #E3000F 0%, #9a000a 100%);
            color: #fff;
            text-align: center;
            padding: 70px 0;
        }

        .action-strip-section h2 {
            color: #fff;
            font-size: 2.3rem;
            margin-bottom: 15px;
        }

        .action-strip-section p {
            color: rgba(255,255,255,0.85);
            font-size: 1.1rem;
            margin-bottom: 30px;
        }

        .action-strip-section .btn-primary {
            background: #fff;
            color: var(--primary-red);
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        }

        .action-strip-section .btn-primary:hover {
            background: #f5f5f5;
        }

        /* ==========================================
           FOOTER CONFIGURATION
           ========================================== */
        .main-footer {
            background-color: #d62828; 
            color: #ffffff;
            padding: 70px 0 20px 0;
            font-family: 'Inter', sans-serif;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-logo {
            max-width: 180px;
            margin-bottom: 20px;
        }

        .footer-about p {
            font-size: 0.9rem;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 15px;
        }

        .social-icons {
            display: flex;
            gap: 12px;
            margin-top: 20px;
        }

        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            background-color: rgba(255, 255, 255, 0.1);
            color: #ffffff;
            border-radius: 50%;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            background-color: #ffffff;
            color: #d62828;
            transform: translateY(-3px);
        }

        .footer-links h4, 
        .footer-contact h4 {
            color: #ffffff;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 25px;
            position: relative;
        }

        .footer-links ul li {
            margin-bottom: 12px;
        }

        .footer-links ul li a {
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.95rem;
            display: inline-block;
        }

        .footer-links ul li a:hover {
            color: #ffffff;
            transform: translateX(5px);
        }

        .footer-contact p {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            font-size: 0.9rem;
            line-height: 1.5;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 15px;
        }

        .footer-contact p i {
            margin-top: 4px;
            color: #ffffff;
            font-size: 1rem;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            padding-top: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.8);
        }

        .footer-legal a {
            color: rgba(255, 255, 255, 0.8);
        }

        /* ==========================================
           POPUP FORM STRUCTURAL OVERLAYS
           ========================================== */
        .popup-form {
            position: fixed;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.6);
            top: 0;
            left: 0;
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .form-box {
            background: white;
            width: 90%;
            max-width: 500px;
            padding: 40px;
            border-radius: 20px;
            position: relative;
        }

        .close-btn {
            position: absolute;
            right: 20px;
            top: 15px;
            font-size: 28px;
            cursor: pointer;
            color: var(--primary-red);
        }

        .form-box h2 {
            margin-bottom: 20px;
            font-size: 1.8rem;
        }

        .form-box form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .form-box input,
        .form-box select,
        .form-box textarea {
            width: 100%;
            padding: 14px;
            border: 1px solid #ddd;
            border-radius: 10px;
            outline: none;
            font-family: var(--font-main);
        }

        .form-box textarea {
            height: 100px;
            resize: none;
        }

        .submit-btn {
            border: none;
            cursor: pointer;
            width: 100%;
            text-align: center;
        }

        /* ==========================================
           RESPONSIVE INTERACTIVE MEDIA QUERIES
           ========================================== */
        @media(max-width:1024px){
            .grid-6 { grid-template-columns: repeat(3, 1fr); }
        }

        @media(max-width:992px){
            .grid-2, .grid-3 { grid-template-columns: 1fr; }
            .insider-graphic-box { grid-template-columns: repeat(2, 1fr); }
            .hero-layout { text-align: center; }
            .hero-buttons { justify-content: center; }
            h1 { font-size: 2.6rem !important; }
        }

        @media(max-width:768px) {
            .nav-links { display: none; }
            .grid-4, .grid-6, .insider-graphic-box { grid-template-columns: 1fr; }
            .footer-bottom { flex-direction: column; text-align: center; gap: 15px; }
            .testimonial-container { padding: 30px 20px; }
        }
    </style>
</head>
<body>

    <header>
        <div class="container navbar">
            <div class="logo">
                <a href="index.php">
                    <img src="images/logo.png" alt="EduBdesh Logo">
                </a>
            </div>

            <nav>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li class="dropdown">
                        <a href="#">Study Destinations <i class="fa-solid fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="study-in-uk.php">Study in UK</a></li>
                            <li><a href="study-in-usa.php">Study in USA</a></li>
                            <li><a href="study-in-canada.php">Study in Canada</a></li>
                            <li><a href="study-in-australia.php">Study in Australia</a></li>
                            <li><a href="study-in-hungary.php">Study in Hungary</a></li>
                            <li><a href="study-in-cyprus.php">Study in Cyprus</a></li>
                            <li><a href="study-in-malaysia.php">Study in Malaysia</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="active">Services <i class="fa-solid fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="admission-support.php">Admission Support</a></li>
                            <li><a href="#">Visa Assistant</a></li>
                            <li><a href="#">Assignment Fixer</a></li>
                        </ul>
                    </li>
                    <li><a href="why_Us.php">Why Us</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </nav>

            <a href="#" class="btn-primary" onclick="openForm()">Get Free Consultation</a>
        </div>
    </header>

    <section class="admission-hero">
        <div class="container grid-2 hero-layout">
            <div class="hero-text-side">
                <span class="badge">Admission Support</span>
                <h1>Your Pathway to Studying Abroad</h1>
                <p>At EduBdesh, we understand that university admissions can be overwhelming, especially when applying to institutions abroad. That’s why our expert team is here to guide you through every step of the process—from choosing the right university to securing your place at a world-class institution. We focus on your unique needs, ensuring that your application stands out.</p>
                <div class="hero-buttons">
                    <a href="#" class="btn-primary" onclick="openForm()">Free Consultation</a>
                </div>
            </div>
            <div class="hero-image-wrapper">
                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=600&q=80" alt="Students Path">
            </div>
        </div>
    </section>

    <section class="smart-start-section section-padding">
        <div class="container grid-2">
            <div class="smart-start-image">
                <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=600&q=80" alt="Finding Right Fit">
            </div>
            <div class="smart-start-text">
                <span class="badge">Smart Start</span>
                <h2>Finding the Right Fit</h2>
                <p>We help you choose universities that align with your goals — academically, financially, and personally.</p>
                
                <h4 class="feature-sub-title"><i class="fa-solid fa-circle-info" style="color:var(--primary-red); margin-right:8px;"></i> Why It Matters</h4>
                <p>Choosing a university isn’t just about rankings — it’s about finding the right environment for your success. At EduBdesh, we look at your background, goals, and preferences to suggest institutions where you’ll truly thrive.</p>
                <p>From research-focused programs in Canada to fast-track degrees in the UK, we help you strike the right balance between quality, affordability, and opportunity.</p>

                <h4 class="feature-sub-title">What We Help With</h4>
                <ul class="checklist-items">
                    <li><i class="fa-solid fa-circle-check"></i> Reviewing your academic background</li>
                    <li><i class="fa-solid fa-circle-check"></i> Recommending suitable countries & courses</li>
                    <li><i class="fa-solid fa-circle-check"></i> Shortlisting target, safe & dream universities</li>
                    <li><i class="fa-solid fa-circle-check"></i> Considering budget, scholarships, and work options</li>
                    <li><i class="fa-solid fa-circle-check"></i> Avoiding common application mistakes</li>
                </ul>
                <p style="margin-top:20px; font-weight:500; font-style:italic;">We suggest options that are realistic, relevant, and future-focused.</p>
            </div>
        </div>
    </section>

    <section class="guided-path-section section-padding">
        <div class="container">
            <div class="center-text">
                <span class="badge">Guided Path</span>
                <h2>Step-by-Step Application Support</h2>
                <p style="max-width:750px; margin: 15px auto 0 auto;">Applying to international universities can feel overwhelming — different requirements, deadlines, documents… That’s where we come in. At EduBdesh, we break the entire process into manageable steps so you can focus on what matters most — getting accepted.</p>
            </div>

            <div class="grid-4 process-grid">
                <div class="process-card">
                    <div class="step-num">01</div>
                    <h4>Requirement Review</h4>
                    <p>We analyze your chosen universities and their admission criteria.</p>
                </div>
                <div class="process-card">
                    <div class="step-num">02</div>
                    <h4>Document Preparation</h4>
                    <p>From SOPs to transcripts, we guide you in creating a winning application.</p>
                </div>
                <div class="process-card">
                    <div class="step-num">03</div>
                    <h4>Application Submission</h4>
                    <p>We ensure error-free submissions and handle the admin work.</p>
                </div>
                <div class="process-card">
                    <div class="step-num">04</div>
                    <h4>Follow-Up & Communication</h4>
                    <p>We track responses and help with any post-submission requests.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="insider-section section-padding">
        <div class="container grid-2">
            <div class="insider-text-block">
                <span class="badge" style="background:rgba(255,255,255,0.1); color:#fff;">Insider Edge</span>
                <h2>Knowledge That Gives You an Advantage</h2>
                <p>Studying abroad is about more than just getting accepted — it’s about making informed decisions at every step. At EduBdesh, our expert team has first-hand insights into university trends, admission cycles, visa updates, and scholarship opportunities.</p>
                <p>We collaborate directly with university reps, attend global education fairs, and track the latest changes in international student policies — all to give you an edge over other applicants.</p>
                
                <h4 class="feature-sub-title">What You Gain</h4>
                <ul class="checklist-items insider-checklist">
                    <li><i class="fa-solid fa-square-check"></i> Country-specific strategies (Canada, UK, USA, Australia & more)</li>
                    <li><i class="fa-solid fa-square-check"></i> Early alerts on intakes, deadlines & changes</li>
                    <li><i class="fa-solid fa-square-check"></i> Info on job prospects & post-study work rights</li>
                    <li><i class="fa-solid fa-square-check"></i> Guidance on scholarship requirements & eligibility</li>
                    <li><i class="fa-solid fa-square-check"></i> Honest advice — no generic recommendations, only tailored insights</li>
                </ul>
                <p style="margin-top:20px; font-weight:500; color:#ffb703;">We bring clarity to complexity — so you can make confident choices.</p>
            </div>
            
            <div class="insider-graphic-box">
                <div class="info-stat-card">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <h5>Early Intake Alerts</h5>
                </div>
                <div class="info-stat-card">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <h5>Scholarship Tracks</h5>
                </div>
                <div class="info-stat-card">
                    <i class="fa-solid fa-passport"></i>
                    <h5>Policy Updates</h5>
                </div>
                <div class="info-stat-card">
                    <i class="fa-solid fa-briefcase"></i>
                    <h5>Post-Study Insights</h5>
                </div>
            </div>
        </div>
    </section>

<section class="dest-section section-padding">
        <div class="container">
            <div class="center-text">
                <span class="badge">Global Reach</span>
                <h2>Where Can You Go?</h2>
                <p>Explore world-class education in top destinations we work with.</p>
            </div>

            <div class="grid-6">
                <!-- 1. Cyprus (Mediterranean Landmark) -->
                <div class="country-card">
                    <div class="country-image-frame">
                        <img src="https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&w=400&q=80" alt="Cyprus Coastline">
                    </div>
                    <h4>Study in Cyprus</h4>
                    <a href="study-in-cyprus.php" class="country-explore-btn">Explore</a>
                </div>

                <!-- 2. Hungary (Budapest Landscape) -->
                <div class="country-card">
                    <div class="country-image-frame">
                        <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?auto=format&fit=crop&w=400&q=80" alt="Hungary Architecture">
                    </div>
                    <h4>Study in Hungary</h4>
                    <a href="study-in-hungary.php" class="country-explore-btn">Explore</a>
                </div>

                <!-- 3. Malaysia (Kuala Lumpur Architecture) -->
                <div class="country-card">
                    <div class="country-image-frame">
                        <img src="https://images.unsplash.com/photo-1541123437800-1bb1317badc2?auto=format&fit=crop&w=400&q=80" alt="Malaysia Skyline">
                    </div>
                    <h4>Study in Malaysia</h4>
                    <a href="study-in-malaysia.php" class="country-explore-btn">Explore</a>
                </div>

                <!-- 4. Australia (Sydney Harbor Theme) -->
                <div class="country-card">
                    <div class="country-image-frame">
                        <img src="https://images.unsplash.com/photo-1506973035872-a4ec16b8e8d9?auto=format&fit=crop&w=400&q=80" alt="Australia Landscape">
                    </div>
                    <h4>Study in Australia</h4>
                    <a href="study-in-australia.php" class="country-explore-btn">Explore</a>
                </div>

                <!-- 5. New Zealand (Beautiful Mount Cook landscape) -->
                <div class="country-card">
                    <div class="country-image-frame">
                        <img src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?auto=format&fit=crop&w=400&q=80" alt="New Zealand Landscape">
                    </div>
                    <h4>Study in New Zealand</h4>
                    <a href="#" class="country-explore-btn">Explore</a>
                </div>

                <!-- 6. Canada (Stunning Moraine Lake / Maple Theme) -->
                <div class="country-card">
                    <div class="country-image-frame">
                        <img src="https://images.unsplash.com/photo-1489392191049-fc10c97e64b6?auto=format&fit=crop&w=400&q=80" alt="Canada Nature Landscape">
                    </div>
                    <h4>Study in Canada</h4>
                    <a href="study-in-canada.php" class="country-explore-btn">Explore</a>
                </div>
            </div>
        </div>
    </section>

            <div class="view-all-box">
                <a href="#" class="btn-outline">View All Countries</a>
            </div>
        </div>
    </section>

    <section class="seamless-step-section section-padding">
        <div class="container grid-2">
            <div class="seamless-text-block">
                <span class="badge">Seamless Step</span>
                <h2>From Acceptance to Arrival — We've Got You</h2>
                <p>Getting an offer letter is exciting — but your journey doesn’t stop there. From accepting the offer to arranging accommodation, EduBdesh ensures a smooth transition for every student.</p>
                <p>We help with everything post-admission: guiding you through visa procedures, helping you understand pre-departure requirements, and supporting you until you safely land in your new country.</p>
                
                <h4 class="feature-sub-title">What We Assist With</h4>
                <ul class="checklist-items">
                    <li><i class="fa-solid fa-circle-check"></i> Offer acceptance & university onboarding</li>
                    <li><i class="fa-solid fa-circle-check"></i> Visa documentation & interview prep</li>
                    <li><i class="fa-solid fa-circle-check"></i> Accommodation guidance</li>
                    <li><i class="fa-solid fa-circle-check"></i> Pre-departure checklist & travel tips</li>
                    <li><i class="fa-solid fa-circle-check"></i> Local support through alumni or community networks</li>
                </ul>
                <p style="margin-top:20px; font-weight:600; color:var(--primary-red);">With EduBdesh, you’re never alone in your journey — we stay connected beyond the paperwork.</p>
            </div>
            <div class="seamless-image">
                <img src="https://images.unsplash.com/photo-1527689368864-3a821dbccc34?auto=format&fit=crop&w=600&q=80" alt="Acceptance to Arrival">
            </div>
        </div>
    </section>

    <section class="testimonial-section section-padding">
        <div class="container">
            <div class="center-text">
                <span class="badge">From Dreams to Destinations</span>
                <h2>Hear From Our Successful Students</h2>
            </div>

            <div class="testimonial-container">
                <div class="quote-icon"><i class="fa-solid fa-quote-left"></i></div>
                <p class="testimonial-text">"I had no idea where to begin with studying abroad. EduBdesh helped me shortlist the best universities, prepare all my documents, and even guided me after submission. Thanks to their support, I’m now studying in Canada with a scholarship. Truly grateful!"</p>
                <div class="student-profile">
                    <h4>Anika Rahman</h4>
                    <p>University of Toronto, Canada</p>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section section-padding">
        <div class="container">
            <div class="center-text">
                <span class="badge">FAQ Matrix</span>
                <h2>Answers That Clear the Path</h2>
                <p>Got questions? Here are the ones we hear most often — and our expert answers.</p>
            </div>

            <div class="faq-wrapper">
                <div class="faq-item">
                    <div class="faq-header">
                        <span>1. Can I apply to multiple countries at once?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="faq-body">
                        <p>Yes, absolutely. We can cross-route applications to distinct operational regions simultaneously (e.g., UK and Canada) to help diversify your options and maximize your overall evaluation chances.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-header">
                        <span>2. What if I haven’t decided on a university yet?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="faq-body">
                        <p>Our profile consultation engine matches your background parameters to specific institutions. We narrow down an ideal list of target universities based on your goals, budget, and desired course fields.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-header">
                        <span>3. Will I get help writing my Statement of Purpose (SOP)?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="faq-body">
                        <p>Yes. While you provide the core details, our writing consultants help review, refine, and structure your Statement of Purpose (SOP) to ensure it effectively highlights your strengths and aligns with university standards.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-header">
                        <span>4. How long does the admission process take?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="faq-body">
                        <p>Processing timelines vary by country and institution, typically ranging from 2 to 8 weeks. Applying early helps avoid peak validation bottlenecks.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-header">
                        <span>5. Do you guarantee university admission?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="faq-body">
                        <p>Admissions decisions rest entirely with university evaluation boards. However, our meticulous document audits and targeted selection methods significantly enhance your profile's acceptance rate.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="action-strip-section">
        <div class="container">
            <h2>Take the First Step Today</h2>
            <p>Book your free admission consultation now — your future is waiting.</p>
            <a href="#" class="btn-primary" onclick="openForm()">Get Free Consultation</a>
        </div>
    </section>

    <footer class="main-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <img src="images/logo.png" alt="EduBdesh Logo" class="footer-logo" style="filter: brightness(0) invert(1);">
                    <p>Study Abroad | Visa & Admission Assistance</p>
                    <p>Helping students achieve their global education dreams through expert guidance and personalized support.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="index.php">About Us</a></li>
                        <li><a href="index.php">Study Destinations</a></li>
                        <li><a href="admission-support.php">Services</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>

                <div class="footer-links">
                    <h4>Destinations & Services</h4>
                    <ul>
                        <li><a href="#">All Destinations</a></li>
                        <li><a href="#">Study in Australia</a></li>
                        <li><a href="#">Study in UK</a></li>
                        <li><a href="#">Study in Canada</a></li>
                        <li><a href="#">Study in USA</a></li>
                        <li><a href="#">Visa Assistance</a></li>
                    </ul>
                </div>

                <div class="footer-contact">
                    <h4>Contact Info</h4>
                    <p><i class="fa-solid fa-phone"></i> +8801332132839</p>
                    <p><i class="fa-solid fa-phone"></i> +8801332132834</p>
                    <p><i class="fa-solid fa-envelope"></i> help@edubdesh.com</p>
                    <p><i class="fa-solid fa-clock"></i> Office Hours: 10:30 am - 7:00pm</p>
                    <p><i class="fa-solid fa-location-dot"></i> BDDL Badar Height, 9th Floor (B), House No. 262-263, Road no. 1, Block: B, Bashundhara R/A, Dhaka - 1229, Bangladesh</p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2026 EduBdesh. All Rights Reserved.</p>
                <div class="footer-legal">
                    <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>

    <div class="popup-form" id="consultationForm">
        <div class="form-box">
            <span class="close-btn" onclick="closeForm()">&times;</span>
            <h2>Book Your Seat</h2>
            
            <form action="submit_form.php" method="POST">
                <input type="text" name="name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email Address" required>
                <input type="text" name="phone" placeholder="Phone Number" required>
                
                <select name="education_level" required>
                    <option value="">Last Academic Qualification</option>
                    <option value="HSC/Alim/Equivalent">HSC / Alim / Equivalent</option>
                    <option value="A-Levels">A-Levels</option>
                    <option value="Diploma">Diploma</option>
                    <option value="Bachelors">Bachelors Degree</option>
                    <option value="Masters">Masters Degree</option>
                </select>

                <input type="text" name="ielts_score" placeholder="IELTS / Duolingo / Score (e.g., 6.5 or Appearing)">
                
                <select name="country" required>
                    <option value="">Preferred Country</option>
                    <option>Hungary</option>
                    <option>Cyprus</option>
                    <option>Malaysia</option>
                    <option>Australia</option>
                    <option>UK</option>
                    <option>USA</option>
                </select>

                <select name="intake_year" required>
                    <option value="">Expected Intake Year</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                </select>

                <textarea name="message" placeholder="Any specific course preferences or questions?"></textarea>
                
                <button type="submit" class="btn-primary submit-btn">Submit Details</button>
            </form>
        </div>
    </div>

    <script>
        function openForm() {
            document.getElementById("consultationForm").style.display = "flex";
        }

        function closeForm() {
            document.getElementById("consultationForm").style.display = "none";
        }

        window.onclick = function(event) {
            var modal = document.getElementById("consultationForm");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        /* ACCORDION FAQ ENGINE INTERACTIVITY */
        document.querySelectorAll('.faq-header').forEach(header => {
            header.addEventListener('click', () => {
                const item = header.parentElement;
                const body = item.querySelector('.faq-body');
                
                if(item.classList.contains('active')) {
                    body.style.maxHeight = null;
                    item.classList.remove('active');
                } else {
                    // Close other active questions (Optional accordion layout feel)
                    document.querySelectorAll('.faq-item').forEach(el => {
                        el.classList.remove('active');
                        el.querySelector('.faq-body').style.maxHeight = null;
                    });
                    
                    item.classList.add('active');
                    body.style.maxHeight = body.scrollHeight + "px";
                }
            });
        });
    </script>
</body>
</html>