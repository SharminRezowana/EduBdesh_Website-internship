<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study in Canada | EduBdesh</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { margin: 0; padding: 0; font-family: 'Inter', sans-serif; box-sizing: border-box; background-color: #ffffff; }
        .can-container { max-width: 1200px; margin: 0 auto; padding: 0 20px; box-sizing: border-box; }
        .can-padding-block { padding: 80px 0; }
        .can-bg-tint { background-color: #f8f9fa; }
        .can-bg-dark { background-color: #1a1a1a; }
        .can-section-header { text-align: center; margin-bottom: 50px; }
        .can-section-header h2 { font-size: 2.5rem; font-weight: 700; margin-bottom: 15px; color: #222; letter-spacing: -0.5px; }
        .can-section-header p { max-width: 700px; margin: 0 auto; color: #666; font-size: 1.1rem; line-height: 1.6; }

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
            list-style: none; /* Added to remove default bullet points */
            margin: 0;
            padding: 0;
        }

        .nav-links a {
            color: var(--dark-text, #222); /* Fallback added if variable is missing */
            text-decoration: none; /* Added to remove link underlines */
            font-weight: 500;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: var(--primary-red, #c60c30); /* Fallback added */
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
            list-style: none;
            margin: 0;
            padding: 0;
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
            color: var(--primary-red, #c60c30);
        }  

        /* --- Hero Section --- */
        .can-hero {
            background: url('https://images.unsplash.com/photo-1507608869274-d3177c8bb4c7?auto=format&fit=crop&w=1600&q=80') no-repeat center center/cover;
            position: relative; min-height: 450px; display: flex; align-items: center;
        }
        .can-hero-overlay { background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)); width: 100%; padding: 100px 0; }
        .can-badge-white { color: #fff; border: 2px solid #fff; padding: 6px 18px; border-radius: 25px; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; display: inline-block; }
        .can-hero-title { color: white !important; font-size: 3.8rem; font-weight: 700; margin: 20px 0 10px 0; letter-spacing: -1px; }
        .can-hero-subtitle { color: #e5e5e5 !important; font-size: 1.25rem; max-width: 700px; margin: 0 auto; line-height: 1.6; }

        /* --- Grid Utilities --- */
        .can-grid-4 { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 30px; }
        .can-grid-3 { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; }
        .can-grid-2 { display: grid; grid-template-columns: repeat(auto-fit, minmax(450px, 1fr)); gap: 40px; }

        /* --- Advantage Cards --- */
        .can-card-advantage { background: white; padding: 35px 25px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); transition: all 0.3s ease; text-align: left; border: 1px solid #efefef; }
        .can-card-advantage:hover { transform: translateY(-8px); box-shadow: 0 12px 30px rgba(0,0,0,0.1); }
        .can-icon-wrapper { width: 60px; height: 60px; background: rgba(198, 12, 48, 0.08); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; }
        .can-icon-wrapper i { font-size: 1.6rem; color: #c60c30; }
        .can-card-advantage h4 { font-size: 1.3rem; margin: 0 0 12px 0; color: #222; font-weight: 600; }
        .can-card-advantage p { color: #666; font-size: 0.95rem; line-height: 1.6; margin: 0; }

        /* --- Intakes Elements --- */
        .can-flex-row { display: flex; flex-wrap: wrap; gap: 30px; }
        .can-intake-card { background: white; padding: 40px; border-radius: 16px; flex: 1; min-width: 320px; box-shadow: 0 10px 30px rgba(0,0,0,0.04); }
        .can-border-red { border-top: 5px solid #c60c30; }
        .can-border-blue { border-top: 5px solid #007bff; }
        .can-tag { padding: 6px 14px; border-radius: 20px; font-weight: 700; font-size: 0.75rem; letter-spacing: 0.5px; display: inline-block; }
        .tag-primary { background: rgba(198,12,48,0.08); color: #c60c30; }
        .tag-secondary { background: rgba(0,123,255,0.08); color: #007bff; }
        .can-intake-card h3 { font-size: 1.5rem; margin: 20px 0 12px 0; color: #222; }
        .can-intake-card p { color: #666; font-size: 1rem; line-height: 1.6; margin: 0; }
        .can-deadline { font-weight: 600; margin-top: 25px !important; font-size: 0.95rem; color: #333; }
        .fa-regular.fa-clock { color: #c60c30; margin-right: 5px; }

        /* --- Split Layout Rows --- */
        .can-flex-split { display: flex; flex-wrap: wrap; gap: 60px; align-items: center; }
        .can-split-side { flex: 1; min-width: 400px; }
        @media (max-width: 768px) { .can-split-side { min-width: 100%; } }
        .can-round-img { width: 100%; height: auto; border-radius: 20px; box-shadow: 0 15px 40px rgba(0,0,0,0.12); display: block; }
        .can-sub-label { color: #c60c30; font-weight: 700; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px; display: block; margin-bottom: 8px; }
        .can-desc { color: #666; line-height: 1.6; margin-bottom: 25px; font-size: 1.05rem; }
        .can-price-row { display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #eee; padding: 15px 0; font-size: 1.05rem; }
        .can-price-row strong { color: #c60c30; font-weight: 700; }

        /* --- Universities Modules --- */
        .can-uni-card { background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border: 1px solid #eee; }
        .can-uni-card img { width: 100%; height: 220px; object-fit: cover; }
        .can-uni-info { padding: 25px; }
        .can-uni-info h3 { font-size: 1.3rem; margin: 0 0 8px 0; color: #222; }
        .can-uni-info p { color: #777; margin: 0 0 20px 0; font-size: 0.9rem; }
        .can-uni-badge { background: #f1f3f5; padding: 6px 12px; border-radius: 6px; font-weight: 600; color: #495057; font-size: 0.85rem; }

        /* --- Scholarships Cards --- */
        .can-scholarship-card { background: white; padding: 35px 30px; border-radius: 12px; box-shadow: 0 5px 25px rgba(0,0,0,0.03); border-left: 5px solid #c60c30; text-align: left; }
        .can-scholarship-card h4 { margin: 0 0 12px 0; font-size: 1.2rem; color: #222; font-weight: 600; }
        .can-scholarship-card h4 i { color: #c60c30; margin-right: 6px; }

        /* --- Roadmaps Timeline --- */
        .can-timeline { display: flex; flex-direction: column; gap: 25px; max-width: 900px; margin: 0 auto; }
        .can-timeline-item { display: flex; gap: 30px; background: #252525; padding: 30px; border-radius: 12px; align-items: center; text-align: left; }
        .can-timeline-number { font-size: 2.5rem; font-weight: 800; color: #c60c30; min-width: 50px; }
        .can-timeline-content h3 { font-size: 1.3rem; margin: 0 0 5px 0; color: white; }
        .can-timeline-content p { color: #aaa; margin: 0; line-height: 1.5; font-size: 0.95rem; }

        /* --- Entry Criteria --- */
        .can-requirement-box { background: #f8f9fa; padding: 40px; border-radius: 16px; border: 1px solid #e9ecef; text-align: left; }
        .can-requirement-box h3 { font-size: 1.4rem; color: #222; margin: 0 0 25px 0; }
        .can-requirement-box h3 i { color: #c60c30; margin-right: 8px; }
        .can-list { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 20px; }
        .can-list li { display: flex; gap: 15px; font-size: 1rem; line-height: 1.6; color: #444; }
        .check-green { color: #28a745; font-size: 1.2rem; margin-top: 2px; }

        /* --- Fields of Study --- */
        .can-field-card { background: white; padding: 40px 30px; border-radius: 16px; text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.03); border: 1px solid #eee; }
        .field-icon { font-size: 2.5rem; color: #c60c30; margin-bottom: 20px; }
        .can-field-card h3 { margin: 0 0 12px 0; font-size: 1.3rem; color: #222; }
        .can-field-card p { color: #666; margin: 0; font-size: 0.95rem; line-height: 1.6; }

        /* --- Accordion --- */
        .can-faq-container { max-width: 850px; margin: 0 auto; }
        .can-accordion-wrapper { display: flex; flex-direction: column; gap: 15px; }
        .can-accordion-item { background: white; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.03); overflow: hidden; border: 1px solid #edf2f7; text-align: left; }
        .faq-head { padding: 22px 30px; font-weight: 600; font-size: 1.1rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: #222; user-select: none; }
        .can-plus-icon { transition: transform 0.25s; color: #888; }
        .faq-body { max-height: 0; padding: 0 30px; overflow: hidden; transition: max-height 0.35s ease; background: #fcfcfc; }
        .faq-body p { padding-bottom: 22px; margin: 0; font-size: 1rem; color: #555; line-height: 1.6; }

        /* --- CTA Interface --- */
        .can-cta-text { max-width: 600px; margin: 0 auto 30px auto; color: #555; font-size: 1.1rem; line-height: 1.6; }
        .can-cta-btn { display: inline-block; background: #c60c30 !important; color: white !important; padding: 14px 40px; border-radius: 30px; text-decoration: none; font-weight: 600; font-size: 1.05rem; box-shadow: 0 6px 20px rgba(198,12,48,0.3); transition: transform 0.2s; }
        .can-cta-btn:hover { transform: scale(1.03); }
    </style>
</head>
<?php
// Initialize database connection strings
$servername = "localhost";
$username = "root";       
$password = "";           
$dbname = "edubdesh_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$success_message = false;

// Process Form Submission Data
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_canada_consultation'])) {
    $button_clicked = mysqli_real_escape_string($conn, $_POST['button_clicked']);
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    
    $insert_query = "INSERT INTO canada_leads (button_clicked, full_name, email, phone) VALUES ('$button_clicked', '$full_name', '$email', '$phone')";
    
    if ($conn->query($insert_query) === TRUE) {
        $success_message = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study in Canada | EduBdesh</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        
        /* Core Form Overlay Styling */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 10000;
            justify-content: center;
            align-items: center;
        }
        .modal-box {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            width: 100%;
            max-width: 420px;
            box-sizing: border-box;
            position: relative;
            border-top: 4px solid #E3000F;
        }
        .modal-close-btn {
            position: absolute;
            top: 15px; right: 15px;
            font-size: 1.2rem;
            cursor: pointer;
            color: #718096;
        }
        .modal-box h3 { margin-top: 0; margin-bottom: 20px; font-size: 1.3rem; }
        .modal-form-group { margin-bottom: 15px; }
        .modal-form-group label { display: block; margin-bottom: 5px; font-weight: 500; font-size: 0.9rem; }
        .modal-form-group input { width: 100%; padding: 10px; border: 1px solid #e2e8f0; border-radius: 4px; box-sizing: border-box; }
        .modal-submit-btn { background: #E3000F; color: white; border: none; padding: 11px; width: 100%; border-radius: 4px; font-weight: 600; cursor: pointer; }
        .alert-success-banner { background: #e6fffa; border: 1px solid #b2f5ea; color: #234e52; padding: 15px; border-radius: 6px; text-align: center; margin: 20px auto; max-width: 1200px; }
    </style>
</head>
<body>

    <?php if ($success_message): ?>
        <div class="alert-success-banner">
            <i class="fa-solid fa-circle-check"></i> Thank you! Your Canadian consultation request has been logged successfully. Our team will contact you shortly.
        </div>
    <?php endif; ?>

    <!-- HEADER & NAVBAR -->
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
                        <a href="#">Services <i class="fa-solid fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="admission_support.php">Admission Support</a></li>
                            <li><a href="visa_assistant.php">Visa Assistant</a></li>
                            <li><a href="#">Assignment Fixer</a></li>
                        </ul>
                    </li>
                    <li><a href="why_Us.php">Why Us</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </nav>

            <a href="javascript:void(0);" class="btn-primary" onclick="openCanadaForm('Get Free Consultation')">Get Free Consultation</a>
        </div>
    </header> 

    <section class="can-hero">
        <div class="can-hero-overlay">
            <div class="can-container text-center">
                <span class="can-badge-white">Destination Guide</span>
                <h1 class="can-hero-title">Study in Canada</h1>
                <p class="can-hero-subtitle">Acquire prestigious degrees in an open, welcoming, and high-growth academic environment.</p>
            </div>
        </div>
    </section>

    <section class="can-padding-block">
        <div class="can-container">
            <div class="can-section-header">
                <h2>Why Select Canada?</h2>
                <p>Canada balances tier-1 academic rankings with world-leading express pathway immigration frameworks for international graduates.</p>
            </div>
            
            <div class="can-grid-4">
                <div class="can-card-advantage">
                    <div class="can-icon-wrapper"><i class="fa-solid fa-passport"></i></div>
                    <h4>PGWP Post-Study Track</h4>
                    <p>Unlock structured open work authorizations stretching seamlessly up to 3 operational years post-graduation.</p>
                </div>
                <div class="can-card-advantage">
                    <div class="can-icon-wrapper"><i class="fa-solid fa-wallet"></i></div>
                    <h4>Affordable Tuition</h4>
                    <p>Benefit from significantly lower institutional fee structural points relative to corresponding USA structures.</p>
                </div>
                <div class="can-card-advantage">
                    <div class="can-icon-wrapper"><i class="fa-solid fa-users"></i></div>
                    <h4>Express Entry Paths</h4>
                    <p>Acquiring local provincial degrees secures substantial permanent residency immigration scores natively.</p>
                </div>
                <div class="can-card-advantage">
                    <div class="can-icon-wrapper"><i class="fa-solid fa-clock"></i></div>
                    <h4>Work While Studying</h4>
                    <p>Earn and support your living framework utilizing consistent standard 20 hours per week part-time allowances.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="can-bg-tint can-padding-block">
        <div class="can-container">
            <div class="can-section-header">
                <h2>Major Intakes in Canada</h2>
                <p>Plan your institutional processing windows mapping onto primary or secondary academic enrollment calendars.</p>
            </div>
            
            <div class="can-flex-row">
                <div class="can-intake-card can-border-red">
                    <span class="can-badge-white tag-primary">PRIMARY INTAKE</span>
                    <h3>Fall Semester (September)</h3>
                    <p>The definitive primary enrollment session. Complete allocation open for engineering, analytics tracks, and major institutional funding pools.</p>
                    <p class="can-deadline"><i class="fa-regular fa-clock"></i> Deadline: Jan - Mar</p>
                </div>
                
                <div class="can-intake-card can-border-blue">
                    <span class="can-badge-white tag-secondary">MID-YEAR INTAKE</span>
                    <h3>Winter Semester (January)</h3>
                    <p>A comprehensive secondary intake cycle. Highly relevant for business management branches and specialized computer frameworks.</p>
                    <p class="can-deadline"><i class="fa-regular fa-clock"></i> Deadline: Jul - Sep</p>
                </div>
            </div>
        </div>
    </section>

    <section class="can-padding-block">
        <div class="can-container">
            <div class="can-flex-split">
                <div class="can-split-side">
                    <img src="https://images.unsplash.com/photo-1501594907352-04cda38ebc29?auto=format&fit=crop&w=800&q=80" alt="Toronto Skyview" class="can-round-img">
                </div>
                <div class="can-split-side">
                    <span class="can-sub-label">Financial Roadmap</span>
                    <h2>Tuition Fees & Cost of Living</h2>
                    <p class="can-desc">Fulfill mandatory updated cost frameworks to satisfy immigration compliance baselines accurately.</p>
                    
                    <div class="aus-price-list">
                        <div class="can-price-row">
                            <span>Undergraduate Bachelors</span>
                            <strong>CAD $20,000 - $38,000 / Yr</strong>
                        </div>
                        <div class="can-price-row">
                            <span>Postgraduate Masters</span>
                            <strong>CAD $22,000 - $42,000 / Yr</strong>
                        </div>
                        <div class="can-price-row">
                            <span>Post-Grad Certificates</span>
                            <strong>CAD $14,000 - $19,000 / Yr</strong>
                        </div>
                        <div class="can-price-row no-border">
                            <span>Mandatory Living Funds</span>
                            <strong>CAD $20,635 / Yr</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="can-bg-tint can-padding-block">
        <div class="can-container">
            <div class="can-section-header">
                <h2>Top World-Class Canadian Institutions</h2>
                <p>Acquire qualifications from premium elite research spaces carrying lifelong global brand equity.</p>
            </div>
            <div class="can-grid-3">
                <div class="can-uni-card">
                    <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=500&q=80" alt="U of T">
                    <div class="can-uni-info">
                        <h3>University of Toronto</h3>
                        <p><i class="fa-solid fa-location-dot"></i> Ontario, Toronto</p>
                        <span class="can-uni-badge">QS World Rank: #21</span>
                    </div>
                </div>
                <div class="can-uni-card">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=500&q=80" alt="UBC Campus">
                    <div class="can-uni-info">
                        <h3>University of British Columbia</h3>
                        <p><i class="fa-solid fa-location-dot"></i> British Columbia, Vancouver</p>
                        <span class="can-uni-badge">QS World Rank: #34</span>
                    </div>
                </div>
                <div class="can-uni-card">
                    <img src="https://images.unsplash.com/photo-1592280771190-3e2e4d571952?auto=format&fit=crop&w=500&q=80" alt="McGill Campus">
                    <div class="can-uni-info">
                        <h3>McGill University</h3>
                        <p><i class="fa-solid fa-location-dot"></i> Quebec, Montreal</p>
                        <span class="can-uni-badge">QS World Rank: #30</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="can-padding-block">
        <div class="can-container">
            <div class="can-section-header">
                <h2>Top Scholarships for International Students</h2>
                <p>Lower your structural funding pressure points through competitive entrance grants.</p>
            </div>
            
            <div class="can-grid-4">
                <div class="can-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> Lester B. Pearson</h4>
                    <p>Fully managed comprehensive academic coverage targeting premier undergraduate profiles applying at U of T.</p>
                </div>
                <div class="can-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> Vanier CGS Awards</h4>
                    <p>Prestigious governmental funding scaling near $50,000 annually addressing top doctoral research tracks.</p>
                </div>
                <div class="can-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> Karen McKellin</h4>
                    <p>Need-based institutional holistic support patterns covering total tuition components for incoming leaders.</p>
                </div>
                <div class="can-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> Entrance Fee Grants</h4>
                    <p>Automated evaluation grants ranging between $2,000 to $8,000 activated natively upon high GPA tracks.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="can-bg-dark can-padding-block" style="color: white;">
        <div class="can-container">
            <div class="can-section-header">
                <h2 style="color: white;">Our Roadmap to Your Enrollment</h2>
                <p style="color: #ccc;">We streamline complex documentation down into a clear, stress-free milestone application track.</p>
            </div>
            <div class="can-timeline">
                <div class="can-timeline-item">
                    <div class="can-timeline-number">01</div>
                    <div class="can-timeline-content">
                        <h3>Profile Assessment</h3>
                        <p>Our expert counselors evaluate your historical academic documents and language test scores to isolate ideal universities.</p>
                    </div>
                </div>
                <div class="can-timeline-item">
                    <div class="can-timeline-number">02</div>
                    <div class="can-timeline-content">
                        <h3>Application Submission</h3>
                        <p>We prepare and process your university files to secure a formal conditional or unconditional Letter of Offer.</p>
                    </div>
                </div>
                <div class="can-timeline-item">
                    <div class="can-timeline-number">03</div>
                    <div class="can-timeline-content">
                        <h3>PAL Document Allocation</h3>
                        <p>We process your mandatory Provincial Attestation Letters (PAL) to clear modern regulatory standards smoothly.</p>
                    </div>
                </div>
                <div class="can-timeline-item">
                    <div class="can-timeline-number">04</div>
                    <div class="can-timeline-content">
                        <h3>Visa Lodgement</h3>
                        <p>Our legal division manages your formal study permit digital files securely through IRCC processing channels.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="can-padding-block">
        <div class="can-container">
            <div class="can-section-header">
                <h2>Academic & Language Entry Thresholds</h2>
                <p>Confirm core eligibility criteria baselines required by Canadian visa officers.</p>
            </div>
            
            <div class="can-grid-2">
                <div class="can-requirement-box">
                    <h3><i class="fa-solid fa-book-open"></i> Scholastic Metrics</h3>
                    <ul class="can-list">
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>Undergraduate:</strong> High School credentials showing minimum 65% up to 70% average grades.</span></li>
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>Postgraduate:</strong> Minimum 4-year local Bachelor degree tracks matching a clear 3.0 out of 4.0 GPA scale.</span></li>
                    </ul>
                </div>
                
                <div class="can-requirement-box">
                    <h3><i class="fa-solid fa-language"></i> Language Benchmarks</h3>
                    <ul class="can-list">
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>IELTS Standard:</strong> Minimum 6.0 bands for diplomas; straight 6.5 bands with no module under 6.0 for masters.</span></li>
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>PTE Core / Academic:</strong> Equivalent footprints running above 60 serve as robust alternative proof routes.</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="can-bg-tint can-padding-block">
        <div class="can-container">
            <div class="can-section-header">
                <h2>In-Demand Fields of Study</h2>
                <p>Target operational industries demonstrating the absolute highest employment footprints across Canada.</p>
            </div>
            <div class="can-grid-3">
                <div class="can-field-card">
                    <i class="fa-solid fa-code field-icon"></i>
                    <h3>Software Engineering</h3>
                    <p>Gain direct alignment inside advanced software architecture, data modeling tracks, and machine intelligence projects.</p>
                </div>
                <div class="can-field-card">
                    <i class="fa-solid fa-chart-line field-icon"></i>
                    <h3>Business & Finance</h3>
                    <p>Qualify for corporate tracking via specialized MBA setups or targeted accounting operations modules.</p>
                </div>
                <div class="can-field-card">
                    <i class="fa-solid fa-heart-pulse field-icon"></i>
                    <h3>Health Sciences</h3>
                    <p>Address massive regional structural demands in professional therapeutic domains, pharmacy, and hospital care lines.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="can-padding-block">
        <div class="can-container can-faq-container">
            <div class="can-section-header">
                <h2>Frequently Asked Questions</h2>
                <p>Crucial contextual updates concerning student stream visas and work pathways.</p>
            </div>
            
            <div class="can-accordion-wrapper">
                <div class="can-accordion-item">
                    <div class="faq-head" onclick="toggleAccordion(this)">
                        What exactly is a PAL and do I need it?
                        <i class="fa-solid fa-plus can-plus-icon"></i>
                    </div>
                    <div class="faq-body">
                        <p>Yes, under modern updates, a Provincial Attestation Letter (PAL) issued directly by your target province is fully mandatory to submit a valid study permit application.</p>
                    </div>
                </div>

                <div class="can-accordion-item">
                    <div class="faq-head" onclick="toggleAccordion(this)">
                        Can I change my educational provider upon landing?
                        <i class="fa-solid fa-plus can-plus-icon"></i>
                    </div>
                    <div class="faq-body">
                        <p>Yes, however, you must process an updated DLI change notification form directly in your secure IRCC portal to remain completely compliant with your study permit rules.</p>
                    </div>
                </div>

                <div class="can-accordion-item">
                    <div class="faq-head" onclick="toggleAccordion(this)">
                        How long does a PGWP take to secure post-graduation?
                        <i class="fa-solid fa-plus can-plus-icon"></i>
                    </div>
                    <div class="faq-body">
                        <p>You have exactly 180 days following formal graduation proof to apply. Review windows vary, but you can work full-time under implied status while it processes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="can-bg-tint can-padding-block text-center">
        <div class="can-container">
            <h2 style="font-size: 2.4rem; margin-bottom: 10px; color: #222;">Start Your Canadian Processing</h2>
            <p class="can-cta-text">Our counselors will manage your GTE verification procedures and visa document compilation phases</p>
            <br>
            <button class="btn-primary" style="border:none; padding:15px 35px; font-size:1.1rem; cursor:pointer;" onclick="openCanadaForm('Start Your Canadian Processing Button')">Apply Now</button>
        </div>
    </section>

    <!-- DYNAMIC POPUP MODAL FRAMEWORK -->
    <div class="modal-overlay" id="canadaFormModal">
        <div class="modal-box">
            <span class="modal-close-btn" onclick="closeCanadaForm()">&times;</span>
            <h3 id="modalTitleText">Request Consultation</h3>
            <form action="" method="POST">
                <!-- Tracks context source -->
                <input type="hidden" name="button_clicked" id="formButtonSource" value="">
                
                <div class="modal-form-group">
                    <label>Full Name</label>
                    <input type="text" name="full_name" required placeholder="John Doe">
                </div>
                <div class="modal-form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" required placeholder="name@example.com">
                </div>
                <div class="modal-form-group">
                    <label>Mobile Number</label>
                    <input type="tel" name="phone" required placeholder="+880123456789">
                </div>
                <button type="submit" name="submit_canada_consultation" class="modal-submit-btn">Submit Information</button>
            </form>
        </div>
    </div>

    <script>
        function openCanadaForm(sourceName) {
            document.getElementById('formButtonSource').value = sourceName;
            document.getElementById('modalTitleText').innerText = "Study in Canada: " + sourceName;
            document.getElementById('canadaFormModal').style.display = 'flex';
        }
        function closeCanadaForm() {
            document.getElementById('canadaFormModal').style.display = 'none';
        }
        function toggleAccordion(element) {
            const body = element.nextElementSibling;
            const icon = element.querySelector('.can-plus-icon');
            if(body.style.display === "block") {
                body.style.display = "none";
                icon.className = "fa-solid fa-plus can-plus-icon";
            } else {
                body.style.display = "block";
                icon.className = "fa-solid fa-minus can-plus-icon";
            }
        }
    </script>
</body>
</html>
<?php $conn->close(); ?>