<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visa Assistance | EduBdesh</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* --- DESIGN TOKENS & RESET --- */
        :root {
            --primary-red: #E3000F;
            --dark-red: #B8000B;
            --text-dark: #1A1A1A;
            --text-light: #555555;
            --bg-light: #FFFFFF;
            --bg-gray: #F8F9FA;
            --white: #FFFFFF;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-dark);
            line-height: 1.6;
            background-color: var(--bg-light);
        }

        a {
            text-decoration: none;
            transition: var(--transition);
        }

        ul {
            list-style: none;
        }

       .logo img {
            height: 45px;
            display: block;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section-padding {
            padding: 80px 0;
        }

        /* --- BUTTONS & BADGES --- */
        .btn {
            display: inline-block;
            padding: 12px 28px;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            text-align: center;
        }

        .btn-primary {
            background-color: var(--primary-red);
            color: var(--white);
            border: 2px solid var(--primary-red);
        }

        .btn-primary:hover {
            background-color: transparent;
            color: var(--primary-red);
        }

        .btn-outline {
            background-color: transparent;
            color: var(--primary-red);
            border: 2px solid var(--primary-red);
        }

        .btn-outline:hover {
            background-color: var(--primary-red);
            color: var(--white);
        }

        .section-tag {
            color: var(--primary-red);
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 1px;
            margin-bottom: 10px;
            display: inline-block;
        }

        .section-title {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        /* --- HEADER / NAVIGATION --- */
        header {
            background-color: var(--white);
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }

        .logo h2 {
            color: var(--primary-red);
            font-weight: 800;
            font-size: 1.6rem;
        }

        .nav-links {
            display: flex;
            gap: 25px;
            align-items: center;
        }

        .nav-links a {
            color: var(--text-dark);
            font-weight: 500;
            font-size: 0.95rem;
        }

        .nav-links a:hover, .nav-links a.active {
            color: var(--primary-red);
        }

        /* --- HERO SECTION --- */
        .hero {
            padding: 100px 0;
            background: linear-gradient(135deg, #FFF5F5 0%, #FFFFFF 100%);
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .hero h1 {
            font-size: 3rem;
            line-height: 1.2;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .hero p {
            font-size: 1.1rem;
            color: var(--text-light);
            margin-bottom: 30px;
        }

        .hero-img img {
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        /* --- WHY US / PROFESSIONAL SUPPORT --- */
        .why-us-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .why-us p {
            color: var(--text-light);
            margin-bottom: 20px;
        }

        /* --- 3-STEP PROCESS --- */
        .process {
            background-color: var(--bg-gray);
            text-align: center;
        }

        .process .section-title {
            max-width: 700px;
            margin: 10px auto 40px auto;
        }

        .step-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            text-align: left;
        }

        .step-card {
            background-color: var(--white);
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.02);
            border-bottom: 4px solid transparent;
            transition: var(--transition);
        }

        .step-card:hover {
            transform: translateY(-5px);
            border-bottom-color: var(--primary-red);
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        .step-num {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--primary-red);
            background-color: #FFF0F1;
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .step-card h3 {
            font-size: 1.25rem;
            margin-bottom: 15px;
        }

        .step-card p {
            color: var(--text-light);
            font-size: 0.95rem;
        }

        /* --- DESTINATIONS --- */
        .destinations {
            text-align: center;
        }

        .destinations .section-title {
            max-width: 700px;
            margin: 10px auto 40px auto;
        }

        .dest-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        .dest-card {
            background-color: var(--white);
            border: 1px solid #EAEAEA;
            border-radius: 12px;
            padding: 30px 20px;
            text-align: center;
            transition: var(--transition);
        }

        .dest-card:hover {
            box-shadow: 0 10px 25px rgba(0,0,0,0.06);
            border-color: var(--primary-red);
        }

        .dest-icon {
            font-size: 2.5rem;
            color: var(--primary-red);
            margin-bottom: 20px;
        }

        .dest-card h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .dest-card p {
            color: var(--text-light);
            font-size: 0.9rem;
            margin-bottom: 20px;
            min-height: 44px;
        }

        /* --- TESTIMONIALS --- */
        .testimonials {
            background-color: var(--bg-gray);
        }

        .testimonial-container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .testimonial-card {
            background-color: var(--white);
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.04);
        }

        .quote-icon {
            font-size: 2.5rem;
            color: #FFD2D4;
            margin-bottom: 20px;
        }

        .testimonial-card p {
            font-size: 1.1rem;
            font-style: italic;
            color: var(--text-light);
            margin-bottom: 25px;
            line-height: 1.8;
        }

        .student-name {
            font-weight: 700;
            font-size: 1.1rem;
        }

        .student-meta {
            color: var(--primary-red);
            font-size: 0.9rem;
            font-weight: 500;
        }

        /* --- CALL TO ACTION (CTA) --- */
        .cta {
            background: linear-gradient(rgba(227, 0, 15, 0.9), rgba(184, 0, 11, 0.95)), url('https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            color: var(--white);
            text-align: center;
        }

        .cta h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .cta p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .cta .btn-primary {
            background-color: var(--white);
            color: var(--primary-red);
            border-color: var(--white);
        }

        .cta .btn-primary:hover {
            background-color: transparent;
            color: var(--white);
        }

        /* --- FOOTER --- */
        footer {
            background-color: var(--primary-red);
            color: var(--white);
            padding: 70px 0 20px 0;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr 1.5fr;
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-col h3 {
            font-size: 1.4rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .footer-col h4 {
            font-size: 1.1rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 8px;
        }

        .footer-col h4::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 30px;
            height: 2px;
            background-color: var(--white);
        }

        .footer-col p {
            font-size: 0.9rem;
            opacity: 0.9;
            margin-bottom: 15px;
        }

        .footer-socials {
            display: flex;
            gap: 12px;
            margin-top: 20px;
        }

        .footer-socials a {
            color: var(--primary-red);
            background-color: var(--white);
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
        }

        .footer-socials a:hover {
            transform: translateY(-3px);
            opacity: 0.9;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: var(--white);
            opacity: 0.9;
            font-size: 0.95rem;
        }

        .footer-links a:hover {
            opacity: 1;
            padding-left: 5px;
        }

        .contact-info li {
            display: flex;
            gap: 12px;
            margin-bottom: 15px;
            font-size: 0.9rem;
            align-items: flex-start;
        }

        .contact-info i {
            margin-top: 4px;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.2);
            padding-top: 20px;
            display: flex;
            justify-content: space-between;
            font-size: 0.85rem;
            opacity: 0.8;
        }

        .footer-legal a {
            color: var(--white);
            margin-left: 15px;
        }

        /* --- RESPONSIVE MEDIA QUERIES --- */
        @media (max-width: 1024px) {
            .dest-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .hero-grid, .why-us-grid, .step-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            .hero {
                text-align: center;
                padding: 60px 0;
            }
            .hero h1 {
                font-size: 2.2rem;
            }
            .navbar {
                flex-direction: column;
                gap: 15px;
            }
            .nav-links {
                display: none; /* Can be turned into a burger menu later */
            }
            .footer-grid {
                grid-template-columns: 1fr;
            }
            .footer-bottom {
                flex-direction: column;
                text-align: center;
                gap: 10px;
            }
            .footer-legal a {
                margin: 0 8px;
            }
        }
    </style>
</head>
<body>

   <header>
        <div class="container navbar">
            <div class="logo">
                <a href="visa_asisstant.php">
                    <img src="images/logo.png" alt="EduBdesh Logo">
                </a>
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">Study Destinations</a></li>
                    <li><a href="index.php" class="active">Services</a></li>
                    
                    <li><a href="Why_Us.php">Why Us</a></li>
                    <li><a href="events.php">Events</a></li>
                </ul>
            </nav>
            <a href="#" class="btn btn-primary">Contact With Us</a>
        </div>
    </header>

    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-content">
                <span class="section-tag">Visa Assistance</span>
                <h1>Stress-Free Student Visa Assistance</h1>
                <p>Your global education journey starts with the right visa. We guide you step-by-step to maximize your chances of success.</p>
                <a href="#" class="btn btn-primary">Get Free Consultation</a>
            </div>
            <div class="hero-img">
                <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=600&q=80" alt="Student Visa Journey">
            </div>
        </div>
    </section>

    <section class="why-us section-padding">
        <div class="container why-us-grid">
            <div class="why-us-img">
                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=600&q=80" alt="Professional Consultation">
            </div>
            <div class="why-us-content">
                <span class="section-tag">Expert Guidance</span>
                <h2 class="section-title">Why Professional Visa Support Makes All the Difference</h2>
                <p><strong>Securing a student visa can be overwhelming — but you don’t have to do it alone. With expert guidance, you avoid delays, rejections, and paperwork headaches.</strong></p>
                <p>Navigating the student visa process is one of the most critical steps in studying abroad. Requirements change frequently, documents need to be precise, and any errors can lead to costly delays or even visa rejections. At EduBdesh, we ensure that every part of your application meets the exact standards required by embassies across Canada, the UK, the USA, Australia, and more.</p>
                <p>Our experienced visa advisors not only keep up with the latest immigration updates but also guide you through each step — from preparing documents to getting ready for embassy interviews. With our proven track record and personal attention, you’ll apply with clarity and confidence.</p>
            </div>
        </div>
    </section>

    <section class="process section-padding">
        <div class="container">
            <span class="section-tag">How We Work</span>
            <h2 class="section-title">Our 3-Step Visa Process</h2>
            <p style="color: var(--text-light); max-width: 750px; margin: -20px auto 40px auto;">Navigating visa requirements for international study can feel overwhelming. At EduBdesh, we simplify the process with a clear, supportive approach. From gathering your documents to preparing for your interview, we guide you every step of the way.</p>
            
            <div class="step-grid">
                <div class="step-card">
                    <div class="step-num">01</div>
                    <h3>Step 1: Document Preparation</h3>
                    <p>We help you gather and organize all required documents based on your chosen country’s visa checklist. From financial statements to academic records, we ensure nothing is missed.</p>
                </div>
                <div class="step-card">
                    <div class="step-num">02</div>
                    <h3>Step 2: Application Submission</h3>
                    <p>Our team thoroughly reviews your application for accuracy and completeness before submission. We also ensure that it's submitted to the correct embassy or portal with all supporting documents.</p>
                </div>
                <div class="step-card">
                    <div class="step-num">03</div>
                    <h3>Step 3: Interview Training & Updates</h3>
                    <p>If your destination requires a visa interview, we prepare you with mock sessions and essential tips. We also keep you informed with real-time updates on your application status.</p>
                </div>
            </div>
        </div>
    </section>

   <!-- Optional: Add this style block to ensure destination images fit perfectly -->
<!-- Optional: Add this style block to ensure destination images fit perfectly -->
<style>
    .dest-card-img-wrap {
        width: 100%;
        height: 140px;
        overflow: hidden;
        border-radius: 12px;
        margin-bottom: 20px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    }
    .dest-card-img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    .dest-card:hover .dest-card-img-wrap img {
        transform: scale(1.05);
    }
    .dest-icon-badge {
        font-size: 1.5rem;
        margin-bottom: 10px;
        display: inline-block;
    }
</style>

<section class="destinations section-padding">
    <div class="container">
        <span class="section-tag">Tailored Solutions</span>
        <h2 class="section-title">Explore Visa Assistance by Destination</h2>
        <p style="color: var(--text-light); max-width: 750px; margin: -20px auto 40px auto; text-align: center;">Every country has its own visa rules — but don’t worry, we’ve got you covered. EduBdesh provides tailored support for each destination’s requirements, ensuring your application is accurate and on time. Choose your destination below to get started.</p>
        
        <div class="dest-grid">
            <div class="dest-card">
                <div class="dest-card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=400&q=80" alt="Students studying together on campus">
                </div>
                <div class="dest-icon-badge">🇨🇦</div>
                <h3>Canada Visa Support</h3>
                <p>Your path to a top-tier education in Canada.</p>
                <a href="#" class="btn btn-outline">Details</a>
            </div>

            <div class="dest-card">
                <div class="dest-card-img-wrap">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/4c/The_Reading_Room_-_The_Maughan_Library.jpg" alt="University campus library environment">
                </div>
                <div class="dest-icon-badge">🇬🇧</div>
                <h3>UK Visa Support</h3>
                <p>Get expert guidance for your UK student visa.</p>
                <a href="#" class="btn btn-outline">Details</a>
            </div>

            <div class="dest-card">
                <div class="dest-card-img-wrap">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/e/ec/UCLA_Royce_Hall_2.jpg" alt="Classic American University Building">
                </div>
                <div class="dest-icon-badge">🇺🇸</div>
                <h3>USA Visa Support</h3>
                <p>Your gateway to global universities in the USA.</p>
                <a href="#" class="btn btn-outline">Details</a>
            </div>

            <div class="dest-card">
                <div class="dest-card-img-wrap">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/1/1a/The_University_of_Sydney_Quadrangle_from_the_north_east.jpg" alt="Beautiful Australian University Campus">
                </div>
                <div class="dest-icon-badge">🇦🇺</div>
                <h3>Australia Visa Support</h3>
                <p>Navigate your student visa with ease for Australia.</p>
                <a href="#" class="btn btn-outline">Details</a>
            </div>
        </div>
    </div>
</section>

    <section class="testimonials section-padding">
        <div class="container">
            <div class="testimonial-container">
                <span class="section-tag">What Our Students Say</span>
                <div class="testimonial-card">
                    <div class="quote-icon"><i class="fa-solid fa-quote-left"></i></div>
                    <p>"I was unsure about the entire process, but EduBdesh guided me at every step — from university application to visa. Their team made the complex journey feel smooth and stress-free. I’m now studying in Toronto and couldn’t have done it without their support!"</p>
                    <div class="student-name">Anika Rahman</div>
                    <div class="student-meta">Canada Study Visa</div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta section-padding">
        <div class="container">
            <h2>Start Your Visa Application Today</h2>
            <p>Ready to apply or have questions? Our expert advisors are here to help — every step of the way.</p>
            <a href="#" class="btn btn-primary">Contact With us</a>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>EduBdesh</h3>
                    <p>Study Abroad | Visa & Admission Assistance</p>
                    <p>Helping students achieve their global education dreams through expert guidance and personalized support.</p>
                    <div class="footer-socials">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-threads"></i></a>
                    </div>
                </div>
                <div class="footer-col footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="index.php">About Us</a></li>
                        <li><a href="index.php">Study Destinations</a></li>
                        <li><a href="index.php">Services</a></li>
                        <li><a href="events.php">Events</a></li>
                        <li><a href="index.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-col footer-links">
                    <h4>Destinations & Services</h4>
                    <ul>
                        <li><a href="#">All Destinations</a></li>
                        <li><a href="#">Study in Australia</a></li>
                        <li><a href="#">Study in UK</a></li>
                        <li><a href="#">Study in Canada</a></li>
                        <li><a href="Visa_assistant.php">Visa Assistance</a></li>
                        <li><a href="admission_support.php">Admission Support</a></li>
                        <li><a href="events.php">Events</a></li>
                        <li><a href="Why_Us.php">Why Us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact Info</h4>
                    <ul class="contact-info">
                        <li>
                            <i class="fa-solid fa-phone"></i>
                            <div>+8801332132839<br>+8801332132834</div>
                        </li>
                        <li>
                            <i class="fa-solid fa-envelope"></i>
                            <div>help@edubdesh.com</div>
                        </li>
                        <li>
                            <i class="fa-solid fa-clock"></i>
                            <div>Office Hours: 10:30 am - 7:00pm</div>
                        </li>
                        <li>
                            <i class="fa-solid fa-location-dot"></i>
                            <div>BDDL Badar Height, 9th Floor (B), House No. 262-263, Road no. 1, Block: B, Bashundhara R/A (Opposite of GP HQ), Dhaka - 1229, Dhaka, Bangladesh</div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div>© 2026 EduBdesh. All Rights Reserved.</div>
                <div class="footer-legal">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>