<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduBdesh | Your Complete Study Abroad Partner</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* ==========================================
           CORE STYLES & DESIGN TOKENS
           ========================================== */
        :root {
            --primary-red: #E3000F;
            --dark-text: #1a1a1a;
            --light-text: #666;
            --bg-light: #f8f9fa;
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
            padding: 80px 0;
        }

        .center-text {
            text-align: center;
            margin-bottom: 45px;
        }

        .center-text p {
            max-width: 700px;
            margin: 0 auto;
        }

        .mt-40 {
            margin-top: 40px;
        }

        .bg-light {
            background: var(--bg-light);
        }

        /* BUTTON COMPONENTS */
        .btn-primary {
            background: var(--primary-red);
            color: white;
            padding: 12px 28px;
            border-radius: 50px;
            display: inline-block;
            font-weight: 600;
            border: none;
            cursor: pointer;
        }

        .btn-primary:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        .shadow {
            box-shadow: 0 8px 20px rgba(227,0,15,0.2);
        }

        .badge {
            color: var(--primary-red);
            font-weight: 700;
            margin-bottom: 10px;
            display: block;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.85rem;
        }

        h1 {
            font-size: 3.5rem;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 2.3rem;
            margin-bottom: 15px;
            color: var(--dark-text);
            font-weight: 700;
        }

        p {
            color: var(--light-text);
            margin-bottom: 20px;
        }

        /* GLOBAL GRID SYSTEM */
        .grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
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

        /* DROPDOWN SYSTEM */
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
           HERO BLOCK MODULE
           ========================================== */
        .hero {
            padding: 80px 0;
        }

        .hero-content {
            display: flex;
            align-items: center;
            gap: 40px;
        }

        .hero-text, .hero-image {
            flex: 1;
        }

        .hero-image img {
            width: 100%;
            border-radius: 20px;
            display: block;
        }

        /* ==========================================
           WHY CHOOSE SPLIT BLOCK
           ========================================== */
        .split-layout {
            display: flex;
            align-items: center;
            gap: 60px;
        }

        .split-layout .image-box,
        .split-layout .text-box {
            flex: 1;
        }

        .split-layout img {
            width: 100%;
            border-radius: 20px;
            display: block;
        }

        /* ==========================================
           DESTINATION PROFILE MODULES
           ========================================== */
        .dest-card {
            background: white;
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
        }

        .dest-card:hover {
            transform: translateY(-5px);
        }

        .dest-card h3 {
            margin-bottom: 15px;
            font-size: 1.3rem;
            color: var(--dark-text);
        }

        .dest-img-container {
            margin-top: 20px;
            height: 200px;
            overflow: hidden;
            border-radius: 15px;
        }

        .dest-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .dest-card:hover .dest-img-container img {
            transform: scale(1.05);
        }

        .explore-btn {
            font-size: 14px;
            padding: 8px 20px;
        }

        /* ==========================================
           SERVICES CORE COMPONENTS
           ========================================== */
        .service-box {
            background: white;
            padding: 35px 20px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .service-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(227,0,15,0.1);
        }

        .service-box h4 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: var(--dark-text);
        }

        .service-box h4 a {
            color: var(--dark-text);
        }

        .service-box h4 a:hover {
            color: var(--primary-red);
        }

        .icon-large {
            font-size: 2.5rem;
            color: var(--primary-red);
            margin-bottom: 20px;
            display: inline-block;
        }

        /* ==========================================
           NEW EXTENDED DESIGN MODULES
           ========================================== */

        /* A. Numerical Matrix Counter Counters */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 30px;
            text-align: center;
        }

        .stat-card {
            background: var(--white);
            padding: 40px 20px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.03);
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-icon {
            font-size: 2.5rem;
            color: var(--primary-red);
            margin-bottom: 15px;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--dark-text);
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 0.95rem;
            color: var(--light-text);
            font-weight: 500;
            margin-bottom: 0;
        }

        /* B. Strategic Application Process Timeline Roadmap */
        .roadmap-timeline {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            position: relative;
        }

        .roadmap-step {
            background: var(--white);
            border: 1px solid #eee;
            padding: 35px 25px;
            border-radius: 20px;
            position: relative;
            transition: box-shadow 0.3s ease;
        }

        .roadmap-step:hover {
            box-shadow: 0 10px 25px rgba(0,0,0,0.06);
        }

        .step-badge-num {
            background: var(--bg-light);
            color: var(--primary-red);
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 20px;
        }

        .roadmap-step h4 {
            font-size: 1.2rem;
            margin-bottom: 12px;
            color: var(--dark-text);
        }

        .roadmap-step p {
            font-size: 0.9rem;
            line-height: 1.6;
            margin-bottom: 0;
        }

        /* C. Student Testimonials Showcase */
        .testimonial-wrapper {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
        }

        .testimonial-item {
            background: var(--white);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.03);
            position: relative;
        }

        .testimonial-quote {
            font-size: 2rem;
            color: rgba(227, 0, 15, 0.1);
            position: absolute;
            top: 25px;
            left: 30px;
        }

        .testimonial-text {
            font-size: 0.95rem;
            line-height: 1.7;
            font-style: italic;
            position: relative;
            z-index: 2;
            margin-bottom: 25px;
        }

        .testimonial-profile {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .testimonial-profile img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }

        .profile-info h5 {
            font-size: 1rem;
            font-weight: 600;
            color: var(--dark-text);
            margin-bottom: 2px;
        }

        .profile-info p {
            font-size: 0.8rem;
            color: var(--primary-red);
            margin-bottom: 0;
            font-weight: 500;
        }

        /* D. Secure Call-To-Action Banner Strip */
        .cta-inner-block {
            background: linear-gradient(135deg, #1a1a1a 0%, #2c3e50 100%);
            padding: 60px;
            border-radius: 30px;
            color: var(--white);
        }

        .cta-content-layout {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
        }

        .cta-text-left {
            flex: 2;
        }

        .cta-text-left h2 {
            color: var(--white);
            font-size: 2.2rem;
            margin-bottom: 15px;
            line-height: 1.3;
        }

        .cta-text-left p {
            color: #ccc;
            margin-bottom: 0;
            font-size: 1.05rem;
        }

        .cta-action-right {
            flex: 1;
            text-align: right;
        }

        .cta-action-right .btn-primary {
            white-space: nowrap;
            padding: 16px 35px;
        }

        /* ==========================================
           FOOTER CONFIGURATION
           ========================================== */
        .main-footer {
            background-color: #d62828; /* EduBdesh primary red brand color */
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

        .footer-links ul {
            padding: 0;
            margin: 0;
        }

        .footer-links ul li {
            margin-bottom: 12px;
        }

        .footer-links ul li a {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
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
            transition: color 0.3s ease;
        }

        .footer-legal a:hover {
            color: #ffffff;
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
        @media(max-width:992px){
            .grid-4, .roadmap-timeline, .testimonial-wrapper {
                grid-template-columns: repeat(2, 1fr);
            }
            .hero-content, .split-layout, .cta-content-layout {
                flex-direction: column;
                text-align: center;
            }
            .cta-action-right {
                text-align: center;
            }
            .cta-inner-block {
                padding: 40px 25px;
            }
        }

        @media(max-width:768px){
            .grid-4, .roadmap-timeline, .testimonial-wrapper, .stats-grid {
                grid-template-columns: 1fr;
            }
            .nav-links {
                display: none;
            }
            .footer-bottom {
                flex-direction: column;
                text-align: center;
                gap: 15px;
            }
            h1 {
                font-size: 2.5rem;
            }
            h2 {
                font-size: 1.8rem;
            }
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
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="admin-login.php">Log in</a></li>
                    <li class="dropdown">
                        <a href="#">Study Destinations <i class="fa-solid fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="study-in-uk.php">Study in UK</a></li>
                            <li><a href="study-in-canada.php">Study in Canada</a></li>
                            <li><a href="study-in-australia.php">Study in Australia</a></li>
                            <li><a href="study-in-hungary.php">Study in Hungary</a></li>
                            <li><a href="study-in-cyprus.php">Study in Cyprus</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="index.php">Services <i class="fa-solid fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="admission_support.php">Admission Support</a></li>
                             <li><a href="visa_asistant.php">Visa Assistant</a></li>
                        </ul>
                    </li>
                    <li><a href="why_Us.php">Why Us</a></li>
                    <li><a href="events.php">Events</a></li>
                
                </ul>
            </nav>

            <a href="#" class="btn-primary" onclick="openForm()">Get Free Consultation</a>
        </div>
    </header>
    
<!-- ==========================================
        HERO SECTION 
        Theme: Academic achievement and global education
        ========================================== -->
    <section class="hero">
        <div class="container hero-content">
            <div class="hero-text">
                <h1>Your Complete <br> Study Abroad Partner.</h1>
                <p>EduBdesh helps you every step of the way — admission guidance and visa assistance.</p>
                <a href="#" class="btn-primary shadow" onclick="openForm()">
                    Get Free Consultation <i class="fa-solid fa-angle-right" style="margin-left:5px;"></i>
                </a>
            </div>
            <div class="hero-image">
                <!-- Swapped to an inspiring shot of international students with study materials on campus -->
                <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?auto=format&fit=crop&w=800&q=80" alt="International students discussing study materials on campus">
            </div>
        </div>
    </section>

    <!-- ==========================================
        WHY CHOOSE SECTION 
        Theme: Professional, personalized educational consulting
        ========================================== -->
    <section class="why-choose section-padding">
        <div class="container split-layout">
            <div class="image-box">
                <!-- Swapped to a focused academic advising session with notebooks and laptops -->
                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=600&q=80" alt="Student receiving expert academic guidance">
            </div>
            <div class="text-box">
                <span class="badge">Expert Guidance</span>
                <h2>Why Choose EduBdesh</h2>
                <p>We support students from university application to visa approval and future planning.</p>
                <a href="why_Us.php" class="btn-primary">Learn More</a>
            </div>
        </div>
    </section>

    <!-- ==========================================
        DESTINATIONS SECTION 
        Theme: Iconic, stunning landmarks for each country
        ========================================== -->
    <section class="destinations section-padding bg-light">
        <div class="container">
            <div class="center-text">
                <h2>Where Do You Want to Study?</h2>
                <p>Explore top study destinations worldwide with customized requirements.</p>
            </div>

       <div class="grid-4">
    <!-- Destination 1: Hungary (Budapest Parliament & Campus Theme) -->
    <div class="dest-card">
        <h3>Study in Hungary</h3>
        <a href="study-in-hungary.php" class="btn-primary explore-btn">Explore</a>
        <div class="dest-img-container">
            <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?auto=format&fit=crop&w=600&q=80" alt="Beautiful iconic cityscape of Budapest, Hungary">
        </div>
    </div>
    
    <!-- Destination 2: Cyprus (Mediterranean Coastal Architecture) -->
    <div class="dest-card">
        <h3>Study in Cyprus</h3>
        <a href="study-in-cyprus.php" class="btn-primary explore-btn">Explore</a>
        <div class="dest-img-container">
            <img src="https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&w=600&q=80" alt="Scenic Mediterranean coastal architecture in Cyprus">
        </div>
    </div>
    
<!-- Destination 3: UK (London Big Ben & Classic Academic Theme) -->
            <div class="dest-card">
                <h3>Study in UK</h3>
                <a href="study-in-uk.php" class="btn-primary explore-btn">Explore</a>
                <div class="dest-img-container">
                    <img src="https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=600&q=80" alt="Iconic Big Ben and red bus in London, United Kingdom">
                </div>
            </div>  
            
            <!-- Destination 4: Australia (Sydney Harbour Opera House & Bridge View) -->
            <div class="dest-card">
                <h3>Study in Australia</h3>
                <a href="study-in-australia.php" class="btn-primary explore-btn">Explore</a>
                <div class="dest-img-container">
                    <img src="https://images.unsplash.com/photo-1506973035872-a4ec16b8e8d9?auto=format&fit=crop&w=600&q=80" alt="Sydney Opera House and Harbour Bridge landscape in Australia">
                </div>
            </div>
        </div> <!-- End of .grid-4 -->
    </div> <!-- End of .container -->
</section>

   <!-- Mini Picture CSS Overrides for Service Cards -->
<style>
    .service-img-mini {
        width: 100%;
        height: 110px;
        object-fit: cover;
        border-radius: 12px;
        margin-bottom: 15px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
</style>

<section class="services section-padding">
    <div class="container">
        <div class="center-text">
            <h2>All-in-One Study Abroad Solution</h2>
            <p>Strategic deployment metrics across your entire validation lifecycle.</p>
        </div>

        <div class="grid-4 mt-40">
            <!-- Service 1: Country (Mini Global Map / Globe theme) -->
            <div class="service-box">
                <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?auto=format&fit=crop&w=300&q=80" alt="World Map Globe Travel Planning" class="service-img-mini">
                <i class="fa-solid fa-globe icon-large"></i>
                <h4>Country Selection</h4>
                <p>Choose your best study destination tailored to target metrics.</p>
            </div>
            
            <!-- Service 2: Admission Support (Mini University Application / Documents theme) -->
            <div class="service-box" style="cursor: pointer;" onclick="window.location.href='admission-support.php'">
                <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=300&q=80" alt="Academic Application Writing Support" class="service-img-mini">
                <i class="fa-solid fa-file-signature icon-large"></i>
                <h4><a href="admission-support.php">Admission Support</a></h4>
                <p>Application routing and direct secure university support.</p>
            </div>
            
            <!-- Service 3: Visa Assistance (Mini Passport & Visa Documents theme) -->
            <div class="service-box">
                <img src="https://images.unsplash.com/photo-1530521954074-e64f6810b32d?auto=format&fit=crop&w=300&q=80" alt="Passport and Travel Visa Clearance Documents" class="service-img-mini">
                <i class="fa-brands fa-cc-visa icon-large"></i>
                <h4>Visa Assistance</h4>
                <p>Visa validation profile optimization and interview mock testing.</p>
            </div>

            <!-- Service 4: Counselling (Mini Career Consultation / Student Advisory theme) -->
            <div class="service-box">
                <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=300&q=80" alt="Professional Counselor Student Advising" class="service-img-mini">
                <i class="fa-solid fa-comments icon-large"></i>
                <h4>Counselling</h4>
                <p>Direct professional clearance maps for academic targets.</p>
            </div>
        </div>
    </div>
</section>

    <section class="stats-section section-padding bg-light">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                    <div class="stat-number">5,000+</div>
                    <p class="stat-label">Global Alumni Success</p>
                </div>
                <div class="stat-card">
                    <div class="stat-icon"><i class="fa-solid fa-building-columns"></i></div>
                    <div class="stat-number">150+</div>
                    <p class="stat-label">Partner Universities</p>
                </div>
                <div class="stat-card">
                    <div class="stat-icon"><i class="fa-solid fa-award"></i></div>
                    <div class="stat-number">98%</div>
                    <p class="stat-label">Visa Approval Success Rate</p>
                </div>
                <div class="stat-card">
                    <div class="stat-icon"><i class="fa-solid fa-user-tie"></i></div>
                    <div class="stat-number">10+</div>
                    <p class="stat-label">Years Expert Experience</p>
                </div>
            </div>
        </div>
    </section>

    <section class="roadmap-section section-padding">
        <div class="container">
            <div class="center-text">
                <span class="badge">Your Path to Success</span>
                <h2>Our Simple 4-Step Application Engine</h2>
                <p>We streamline complex administrative hurdles into a clean, stress-free milestone route.</p>
            </div>
            
            <div class="roadmap-timeline mt-40">
                <div class="roadmap-step">
                    <div class="step-badge-num">01</div>
                    <h4>Profile Review & Assessment</h4>
                    <p>Our advisors evaluate your grades, credentials, and budget preferences to structure your target country roadmap.</p>
                </div>
                <div class="roadmap-step">
                    <div class="step-badge-num">02</div>
                    <h4>University Application Procurement</h4>
                    <p>We process offers, translate academic transcripts, and secure direct Letters of Acceptance from target institutions.</p>
                </div>
                <div class="roadmap-step">
                    <div class="step-badge-num">03</div>
                    <h4>Visa File Optimization</h4>
                    <p>Our specialists compile bank statements, structure sponsor setups, and run interactive mock interviews.</p>
                </div>
                <div class="roadmap-step">
                    <div class="step-badge-num">04</div>
                    <h4>Pre-Departure Briefing</h4>
                    <p>We support your final journey with precise housing guidelines, travel updates, and local transition assistance.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials-section section-padding bg-light">
        <div class="container">
            <div class="center-text">
                <span class="badge">Success Stories</span>
                <h2>What Our Global Students Say</h2>
                <p>Real stories from verified students who processed their applications through EduBdesh.</p>
            </div>

            <div class="testimonial-container mt-40">
                <div class="testimonial-wrapper">
                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa-solid fa-quote-left"></i></div>
                        <p class="testimonial-text">EduBdesh handled my admission tracking flawlessly. I got my Schengen visa processed for Hungary with absolutely no issues. They walked me through embassy mock interviews multiple times until I felt completely confident!</p>
                        <div class="testimonial-profile">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80" alt="Fariha Profile">
                            <div class="profile-info">
                                <h5>Fariha Ahmed</h5>
                                <p>B.Sc. Data Science, Hungary</p>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa-solid fa-quote-left"></i></div>
                        <p class="testimonial-text">I was completely lost searching through Australian visa checklists. The counselors here managed my file analysis smoothly and helped me build an unbeatable statement of purpose. Truly recommended!</p>
                        <div class="testimonial-profile">
                            <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?auto=format&fit=crop&w=150&q=80" alt="Tanvir Profile">
                            <div class="profile-info">
                                <h5>Tanvir Hassan</h5>
                                <p>MBA Scholar, Australia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="extended-cta-section section-padding">
        <div class="container">
            <div class="cta-inner-block shadow">
                <div class="cta-content-layout">
                    <div class="cta-text-left">
                        <h2>Ready to Begin Your International Educational Journey?</h2>
                        <p>Seat configurations for upcoming intakes fill up quickly. Secure your profile evaluation session with our senior counseling board today.</p>
                    </div>
                    <div class="cta-action-right">
                        <a href="#" class="btn-primary" style="padding: 16px 35px;" onclick="openForm()">
                            Book Free Session Now <i class="fa-solid fa-calendar-days" style="margin-left: 8px;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="main-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <img src="images/logo.png" alt="EduBdesh Logo" class="footer-logo" style="filter: brightness(0) invert(1);">
                    <p>Study Abroad | Visa & Admission Assistance</p>
                    <p>Helping students achieve their global education dreams through expert guidance.</p>
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
                        <li><a href="Why_Us.php">About Us</a></li>
                        <li><a href="index.php">Study Destinations</a></li>
                        <li><a href="admission_support.php">Services</a></li>
                        <li><a href="visa_assistant.php">Services</a></li>
                        <li><a href="events.php">Events</a></li>

                        <li><a href="index.php">Contact Us</a></li>
                    </ul>
                </div>

                <div class="footer-links">
                    <h4>Destinations & Services</h4>
                    <ul>
                        <li><a href="#">All Destinations</a></li>
                        <li><a href="#">Study in UK</a></li>
                        <li><a href="#">Study in Canada</a></li>
                        <li><a href="#">Study in Australia</a></li>
                        <li><a href="#">Study in Hungary</a></li>
                        <li><a href="#">Study in Cyprus</a></li>
                        <li><a href="admission-support.php">Admission Support</a></li>
                        <li><a href="visa_asistant.php">Visa Assistant</a></li>
                    </ul>
                </div>

                <div class="footer-contact">
                    <h4>Contact Info</h4>
                    <p><i class="fa-solid fa-phone"></i> +8801332132839</p>
                    <p><i class="fa-solid fa-envelope"></i> help@edubdesh.com</p>
                    <p><i class="fa-solid fa-clock"></i> Office Hours: 10:30 am - 7:00pm</p>
                    <p><i class="fa-solid fa-location-dot"></i> BDDL Rader Height, 9th Floor, Dhaka - 1229, Bangladesh</p>
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
            <h2>Free Consultation</h2>
            
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
    </script>
</body>
</html>