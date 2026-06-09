<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study in Australia | EduBdesh</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Why_Us.css">
    
    <style>
        /* --- Global Resets & Typography --- */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            box-sizing: border-box;
            background-color: #ffffff;
            color: #333;
        }

        .aus-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            box-sizing: border-box;
        }

        .aus-padding-block {
            padding: 80px 0;
        }

        .aus-bg-tint {
            background-color: #f8f9fa;
        }

        .aus-bg-dark {
            background-color: #1a1a1a;
        }

        .aus-section-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .aus-section-header h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: #222;
            letter-spacing: -0.5px;
        }

        .aus-section-header p {
            max-width: 700px;
            margin: 0 auto;
            color: #666;
            font-size: 1.1rem;
            line-height: 1.6;
        }

        /* --- Header Styling --- */
        .site-header {
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 80px;
        }

        .logo a {
            font-size: 1.5rem;
            font-weight: 700;
            color: #222;
            text-decoration: none;
            letter-spacing: -0.5px;
        }

        .logo span {
            color: #e3000f;
        }

        .main-nav ul {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
            gap: 30px;
        }

        .main-nav a {
            text-decoration: none;
            color: #444;
            font-weight: 500;
            font-size: 0.95rem;
            transition: color 0.2s;
        }

        .main-nav a:hover, .main-nav .active {
            color: #e3000f;
        }

        .header-cta .nav-btn {
            background: #e3000f;
            color: #fff;
            padding: 10px 24px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            transition: opacity 0.2s;
        }

        .header-cta .nav-btn:hover {
            opacity: 0.9;
        }

        /* --- Hero Section --- */
        .aus-hero {
            background: url('https://images.unsplash.com/photo-1524820197278-540916411e20?auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
            position: relative;
            min-height: 500px;
            display: flex;
            align-items: center;
        }

        .aus-hero-overlay {
            background: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.65));
            width: 100%;
            padding: 120px 0;
            text-align: center;
        }

        .aus-badge-white {
            color: #fff;
            border: 2px solid #fff;
            padding: 6px 18px;
            border-radius: 25px;
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: inline-block;
        }

        .aus-hero-title {
            color: white !important;
            font-size: 4rem;
            font-weight: 700;
            margin: 20px 0 15px 0;
            letter-spacing: -1px;
        }

        .aus-hero-subtitle {
            color: #e5e5e5 !important;
            font-size: 1.3rem;
            max-width: 750px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* --- Grid & Layout Utilities --- */
        .aus-grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 30px;
        }

        .aus-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
        }

        .aus-grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
            gap: 40px;
        }

        /* --- Advantage Cards --- */
        .aus-card-advantage {
            background: white;
            padding: 35px 25px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            text-align: left;
            border: 1px solid #efefef;
        }

        .aus-card-advantage:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.1);
        }

        .aus-icon-wrapper {
            width: 60px;
            height: 60px;
            background: rgba(227, 0, 15, 0.08);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .aus-icon-wrapper i {
            font-size: 1.6rem;
            color: #e3000f;
        }

        .aus-card-advantage h4 {
            font-size: 1.3rem;
            margin: 0 0 12px 0;
            color: #222;
            font-weight: 600;
        }

        .aus-card-advantage p {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.6;
            margin: 0;
        }

        /* --- Intakes Element --- */
        .aus-flex-row {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }

        .aus-intake-card {
            background: white;
            padding: 40px;
            border-radius: 16px;
            flex: 1;
            min-width: 320px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.04);
        }

        .aus-border-red { border-top: 5px solid #e3000f; }
        .aus-border-blue { border-top: 5px solid #007bff; }

        .aus-tag {
            padding: 6px 14px;
            border-radius: 20px;
            font-weight: 700;
            font-size: 0.75rem;
            letter-spacing: 0.5px;
            display: inline-block;
        }

        .tag-primary { background: rgba(227,0,15,0.08); color: #e3000f; }
        .tag-secondary { background: rgba(0,123,255,0.08); color: #007bff; }

        .aus-intake-card h3 {
            font-size: 1.5rem;
            margin: 20px 0 12px 0;
            color: #222;
        }

        .aus-intake-card p {
            color: #666;
            font-size: 1rem;
            line-height: 1.6;
            margin: 0;
        }

        .aus-deadline {
            font-weight: 600;
            margin-top: 25px !important;
            font-size: 0.95rem;
            color: #333;
        }

        .fa-regular.fa-clock { color: #e3000f; margin-right: 5px; }
        .fa-regular.fa-clock-blue { color: #007bff; margin-right: 5px; }

        /* --- Split Column Rows --- */
        .aus-flex-split {
            display: flex;
            flex-wrap: wrap;
            gap: 60px;
            align-items: center;
        }

        .aus-split-side {
            flex: 1;
            min-width: 400px;
        }

        @media (max-width: 768px) {
            .aus-split-side { min-width: 100%; }
            .header-container { padding: 0 20px; }
            .main-nav, .header-cta { display: none; } /* Simplified mobile view blueprint */
        }

        .aus-round-img {
            width: 100%;
            height: auto;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.12);
            display: block;
        }

        .aus-sub-label {
            color: #e3000f;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 1px;
            display: block;
            margin-bottom: 8px;
        }

        .aus-desc {
            color: #666;
            line-height: 1.6;
            margin-bottom: 25px;
            font-size: 1.05rem;
        }

        .aus-price-list {
            margin-top: 30px;
        }

        .aus-price-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #eee;
            padding: 15px 0;
            font-size: 1.05rem;
        }

        .aus-price-row.no-border {
            border-bottom: none;
        }

        .aus-price-row strong {
            color: #e3000f;
            font-weight: 700;
        }

        /* --- Universities Modules --- */
        .aus-uni-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            border: 1px solid #eee;
        }

        .aus-uni-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        .aus-uni-info {
            padding: 25px;
        }

        .aus-uni-info h3 {
            font-size: 1.3rem;
            margin: 0 0 8px 0;
            color: #222;
        }

        .aus-uni-info p {
            color: #777;
            margin: 0 0 20px 0;
            font-size: 0.9rem;
        }

        .aus-uni-badge {
            background: #f1f3f5;
            padding: 6px 12px;
            border-radius: 6px;
            font-weight: 600;
            color: #495057;
            font-size: 0.85rem;
        }

        /* --- Scholarships Cards --- */
        .aus-scholarship-card {
            background: white;
            padding: 35px 30px;
            border-radius: 12px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.03);
            border-left: 5px solid #e3000f;
            text-align: left;
        }

        .aus-scholarship-card h4 {
            margin: 0 0 12px 0;
            font-size: 1.2rem;
            color: #222;
            font-weight: 600;
        }

        .aus-scholarship-card h4 i { color: #e3000f; margin-right: 6px; }
        .aus-scholarship-card p { color: #666; font-size: 0.95rem; line-height: 1.5; margin: 0; }

        /* --- Step Roadmaps --- */
        .aus-timeline {
            display: flex;
            flex-direction: column;
            gap: 25px;
            max-width: 900px;
            margin: 0 auto;
        }

        .aus-timeline-item {
            display: flex;
            gap: 30px;
            background: #252525;
            padding: 30px;
            border-radius: 12px;
            align-items: center;
            text-align: left;
        }

        .aus-timeline-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: #e3000f;
            min-width: 50px;
        }

        .aus-timeline-content h3 {
            font-size: 1.3rem;
            margin: 0 0 5px 0;
            color: white;
        }

        .aus-timeline-content p { color: #aaa; margin: 0; line-height: 1.5; font-size: 0.95rem; }

        /* --- Entry Metrics Framework --- */
        .aus-requirement-box {
            background: #f8f9fa;
            padding: 40px;
            border-radius: 16px;
            border: 1px solid #e9ecef;
            text-align: left;
        }

        .aus-requirement-box h3 {
            font-size: 1.4rem;
            color: #222;
            margin: 0 0 25px 0;
        }

        .aus-requirement-box h3 i { color: #e3000f; margin-right: 8px; }

        .aus-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .aus-list li {
            display: flex;
            gap: 15px;
            font-size: 1rem;
            line-height: 1.6;
            color: #444;
        }

        .check-green { color: #28a745; font-size: 1.2rem; margin-top: 2px; }

        /* --- Fields Modules --- */
        .aus-field-card {
            background: white;
            padding: 40px 30px;
            border-radius: 16px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
            border: 1px solid #eee;
        }

        .field-icon {
            font-size: 2.5rem;
            color: #e3000f;
            margin-bottom: 20px;
        }

        .aus-field-card h3 { margin: 0 0 12px 0; font-size: 1.3rem; color: #222; }
        .aus-field-card p { color: #666; margin: 0; font-size: 0.95rem; line-height: 1.6; }

        /* --- FAQ Accordion Mechanics --- */
        .aus-faq-container {
            max-width: 850px;
            margin: 0 auto;
        }

        .aus-accordion-wrapper {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .aus-accordion-item {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.03);
            overflow: hidden;
            border: 1px solid #edf2f7;
            text-align: left;
        }

        .faq-head {
            padding: 22px 30px;
            font-weight: 600;
            font-size: 1.1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            color: #222;
            user-select: none;
        }

        .aus-plus-icon { transition: transform 0.25s; color: #888; }

        .faq-body {
            max-height: 0;
            padding: 0 30px;
            overflow: hidden;
            transition: max-height 0.35s cubic-bezier(0, 1, 0, 1);
            background: #fcfcfc;
        }

        .faq-body p {
            padding-bottom: 22px;
            margin: 0;
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
        }

        /* --- Call To Action Interface --- */
        .aus-cta-text {
            max-width: 600px;
            margin: 0 auto 30px auto;
            color: #555;
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .aus-cta-btn {
            display: inline-block;
            background: #e3000f !important;
            color: white !important;
            padding: 14px 40px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.05rem;
            box-shadow: 0 6px 20px rgba(227,15,0,0.3);
            transition: transform 0.2s;
        }

        .aus-cta-btn:hover {
            transform: scale(1.03);
        }

        /* --- Footer Styling --- */
        .site-footer {
            background-color: #111111;
            color: #aaaaaa;
            padding: 60px 0 30px 0;
            font-size: 0.95rem;
            border-top: 4px solid #e3000f;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-col h3 {
            color: #ffffff;
            font-size: 1.2rem;
            margin-top: 0;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .footer-col ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-col ul li {
            margin-bottom: 12px;
        }

        .footer-col ul a {
            color: #aaaaaa;
            text-decoration: none;
            transition: color 0.2s;
        }

        .footer-col ul a:hover {
            color: #ffffff;
        }

        .footer-about p {
            line-height: 1.6;
            margin-top: 0;
        }

        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }

        .social-icons a {
            color: #ffffff;
            background: #222222;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s;
        }

        .social-icons a:hover {
            background: #e3000f;
        }

        .footer-bottom {
            border-top: 1px solid #222222;
            padding-top: 30px;
            text-align: center;
            font-size: 0.85rem;
        }
    </style>
</head>
<?php
// 1. DATABASE CONNECTION SETUP
$host = "localhost";
$username = "root";
$password = "";
$dbname = "edubdesh_db"; // Your database name

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. NEW AUSTRALIA FORM PROCESSING ENGINE
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_consultation'])) {
    $button_clicked = mysqli_real_escape_string($conn, $_POST['button_clicked']);
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    // Inserting specifically into your new australia_leads table
    $sql = "INSERT INTO australia_leads (button_clicked, full_name, email, phone) 
            VALUES ('$button_clicked', '$full_name', '$email', '$phone')";

    if ($conn->query($sql) === TRUE) {
        $message = "<script>alert('Thank you! Your Australian consultation request has been saved.');</script>";
    } else {
        $message = "<script>alert('Error saving application: " . $conn->error . "');</script>";
    }
}
?>
</head>
<body>
    <?php echo $message; ?>

    <!-- ADD MODAL WINDOW STYLING RIGHT BELOW THE BODY ROOT LAYER -->
    <style>
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 99999;
            align-items: center; justify-content: center;
        }
        .modal-content-box {
            background: #fff; padding: 30px; border-radius: 8px;
            width: 100%; max-width: 450px; position: relative;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            animation: fadeInModal 0.3s ease-in-out;
        }
        @keyframes fadeInModal {
            from { transform: translateY(-20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .modal-close-btn {
            position: absolute; top: 15px; right: 20px;
            font-size: 24px; cursor: pointer; color: #666;
        }
        .modal-form-group { margin-bottom: 15px; }
        .modal-form-group label { display: block; margin-bottom: 5px; font-weight: bold; color: #333; }
        .modal-form-group input, .modal-form-group select {
            width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;
        }
        .modal-submit-btn {
            background-color: #007bff; color: white; border: none; padding: 12px 20px;
            width: 100%; border-radius: 4px; font-size: 16px; cursor: pointer; font-weight: bold;
        }
        .modal-submit-btn:hover { background-color: #0056b3; }
    </style>

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

            <!-- FORM BUTTON 1 ACTIVATED -->
            <a href="javascript:void(0);" class="btn-primary" onclick="openForm('Get Free Consultation')">Get Free Consultation</a>
        </div>
    </header>

    <section class="aus-hero">
        <div class="aus-hero-overlay">
            <div class="aus-container">
                <span class="aus-badge-white">Destination Guide</span>
                <h1 class="aus-hero-title">Study in Australia</h1>
                <p class="aus-hero-subtitle">Discover dynamic, vibrant city centers combined with world-class Go8 research universities.</p>
            </div>
        </div>
    </section>

    <section class="aus-padding-block">
        <div class="aus-container">
            <div class="aus-section-header">
                <h2>Why Select Australia?</h2>
                <p>Australia provides a robust educational framework backed by strict legislation ensuring unmatched international student welfare support structures.</p>
            </div>
            
            <div class="aus-grid-4">
                <div class="aus-card-advantage">
                    <div class="aus-icon-wrapper"><i class="fa-solid fa-graduation-cap"></i></div>
                    <h4>Group of Eight</h4>
                    <p>Gain access to world-renowned premium tier research networks and global faculty leads.</p>
                </div>
                <div class="aus-card-advantage">
                    <div class="aus-icon-wrapper"><i class="fa-solid fa-briefcase"></i></div>
                    <h4>Part-Time Rights</h4>
                    <p>Work flexibly up to 48 hours per fortnight during dynamic, ongoing operational study semesters.</p>
                </div>
                <div class="aus-card-advantage">
                    <div class="aus-icon-wrapper"><i class="fa-solid fa-map-location-dot"></i></div>
                    <h4>Regional PR Incentives</h4>
                    <p>Studying in designated regional campus boundaries unlocks extended post-study work year windows.</p>
                </div>
                <div class="aus-card-advantage">
                    <div class="aus-icon-wrapper"><i class="fa-solid fa-shield-halved"></i></div>
                    <h4>CRICOS Verified</h4>
                    <p>Every single course layout remains monitored to secure compliance with strict national standards.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="aus-bg-tint aus-padding-block">
        <div class="aus-container">
            <div class="aus-section-header">
                <h2>Major Intakes in Australia</h2>
                <p>Australian universities primarily offer two core intake cycles throughout the academic year.</p>
            </div>
            
            <div class="aus-flex-row">
                <div class="aus-intake-card aus-border-red">
                    <span class="aus-tag tag-primary">PRIMARY INTAKE</span>
                    <h3>Semester 1 (Feb / Mar)</h3>
                    <p>The primary student intake session. Offers maximum course options across all departments, research tracks, and scholarship configurations.</p>
                    <p class="aus-deadline"><i class="fa-regular fa-clock"></i> Deadline: Oct - Nov</p>
                </div>
                
                <div class="aus-intake-card aus-border-blue">
                    <span class="aus-tag tag-secondary">MID-YEAR INTAKE</span>
                    <h3>Semester 2 (Jul / Aug)</h3>
                    <p>Ideal alternative session for students completing mid-year local graduation tracks. Broadly open for Business, IT, and Engineering paths.</p>
                    <p class="aus-deadline"><i class="fa-regular fa-clock-blue"></i> Deadline: Apr - May</p>
                </div>
            </div>
        </div>
    </section>

    <section class="aus-padding-block">
        <div class="aus-container">
            <div class="aus-flex-split">
                <div class="aus-split-side">
                    <img src="https://images.unsplash.com/photo-1523482596083-d4610045e342?auto=format&fit=crop&w=800&q=80" alt="Sydney Harbour" class="aus-round-img">
                </div>
                <div class="aus-split-side">
                    <span class="aus-sub-label">Financial Roadmap</span>
                    <h2>Tuition Fees & Cost of Living</h2>
                    <p class="aus-desc">Understanding foundational institutional expenditures balances your visa requirement planning framework safely.</p>
                    
                    <div class="aus-price-list">
                        <div class="aus-price-row">
                            <span>Undergraduate Programs</span>
                            <strong>AUD $25,000 - $45,000 / Yr</strong>
                        </div>
                        <div class="aus-price-row">
                            <span>Postgraduate Masters</span>
                            <strong>AUD $30,000 - $50,000 / Yr</strong>
                        </div>
                        <div class="aus-price-row">
                            <span>Vocational / Diplomas</span>
                            <strong>AUD $12,000 - $22,000 / Yr</strong>
                        </div>
                        <div class="aus-price-row no-border">
                            <span>Subclass 500 Living Funds</span>
                            <strong>AUD $29,710 / Yr</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="aus-bg-tint aus-padding-block">
        <div class="aus-container">
            <div class="aus-section-header">
                <h2>Top World-Class Institutions</h2>
                <p>Apply to premium global education hubs ranked consistently among the top 100 globally.</p>
            </div>
            <div class="aus-grid-3">
                <div class="aus-uni-card">
                    <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=500&q=80" alt="University Campus">
                    <div class="aus-uni-info">
                        <h3>The University of Melbourne</h3>
                        <p><i class="fa-solid fa-location-dot"></i> Victoria, Melbourne</p>
                        <span class="aus-uni-badge">QS World Rank: #14</span>
                    </div>
                </div>
                <div class="aus-uni-card">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=500&q=80" alt="Students walking on campus">
                    <div class="aus-uni-info">
                        <h3>The University of Sydney</h3>
                        <p><i class="fa-solid fa-location-dot"></i> New South Wales, Sydney</p>
                        <span class="aus-uni-badge">QS World Rank: #19</span>
                    </div>
                </div>
                <div class="aus-uni-card">
                    <img src="https://images.unsplash.com/photo-1592280771190-3e2e4d571952?auto=format&fit=crop&w=500&q=80" alt="University Library">
                    <div class="aus-uni-info">
                        <h3>Australian National University</h3>
                        <p><i class="fa-solid fa-location-dot"></i> ACT, Canberra</p>
                        <span class="aus-uni-badge">QS World Rank: #30</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="aus-padding-block">
        <div class="aus-container">
            <div class="aus-section-header">
                <h2>Top Scholarships for International Students</h2>
                <p>Lower your operational expenses utilizing competitive institutional and state funding grants.</p>
            </div>
            
            <div class="aus-grid-4">
                <div class="aus-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> Destination Aus</h4>
                    <p>Grants valued up to $15,000 annually targeting students selecting registered regional tertiary campuses.</p>
                </div>
                <div class="aus-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> Australia Awards</h4>
                    <p>Fully managed master-level provisions addressing leadership frameworks and global development alignments.</p>
                </div>
                <div class="aus-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> VC Merit Support</h4>
                    <p>University-backed funding scales providing 25% to 50% course fee deductions via previous top GPA tiers.</p>
                </div>
                <div class="aus-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> Research Training</h4>
                    <p>Covers complete healthcare overhead insurance structures and thesis resource components for PhD researchers.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="aus-bg-dark aus-padding-block" style="color: white;">
        <div class="aus-container">
            <div class="aus-section-header">
                <h2 style="color: white;">Our Roadmap to Your Enrollment</h2>
                <p style="color: #ccc;">We streamline complex documentation down into a clear, stress-free milestone application track.</p>
            </div>
            <div class="aus-timeline">
                <div class="aus-timeline-item">
                    <div class="aus-timeline-number">01</div>
                    <div class="aus-timeline-content">
                        <h3>Profile Assessment</h3>
                        <p>Our expert counselors evaluate your historical academic documents and language test scores to isolate ideal universities.</p>
                    </div>
                </div>
                <div class="aus-timeline-item">
                    <div class="aus-timeline-number">02</div>
                    <div class="aus-timeline-content">
                        <h3>Application Submission</h3>
                        <p>We prepare and process your university files to secure a formal conditional or unconditional Letter of Offer.</p>
                    </div>
                </div>
                <div class="aus-timeline-item">
                    <div class="aus-timeline-number">03</div>
                    <div class="aus-timeline-content">
                        <h3>GTE & Genuine Student Verification</h3>
                        <p>We systematically audit your financial evidence declarations and statement intent files to clear institutional checks easily.</p>
                    </div>
                </div>
                <div class="aus-timeline-item">
                    <div class="aus-timeline-number">04</div>
                    <div class="aus-timeline-content">
                        <h3>Visa Lodgement</h3>
                        <p>Our legal division manages your formal Subclass 500 digital application setup through the official ImmiAccount systems.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="aus-padding-block">
        <div class="aus-container">
            <div class="aus-section-header">
                <h2>Academic & Language Entry Thresholds</h2>
                <p>Confirm key criteria targets expected across major institutional application processing tracks.</p>
            </div>
            
            <div class="aus-grid-2">
                <div class="aus-requirement-box">
                    <h3><i class="fa-solid fa-book-open"></i> Scholastic Metrics</h3>
                    <ul class="aus-list">
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>Undergraduate:</strong> Minimal average profiles tracking near 60% standard within global HS/A-Level formats.</span></li>
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>Postgraduate:</strong> A matching graduation honors certificate degree aligned to your selected discipline major.</span></li>
                    </ul>
                </div>
                
                <div class="aus-requirement-box">
                    <h3><i class="fa-solid fa-language"></i> Language Benchmarks</h3>
                    <ul class="aus-list">
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>IELTS Standard:</strong> 6.0 Overall (minimum 5.5 bands) for UG; 6.5 Overall matching PG university frameworks.</span></li>
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>PTE Options:</strong> Academic score footprints starting between 50 to 58 satisfy direct enrollment conditions.</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="aus-bg-tint aus-padding-block">
        <div class="aus-container">
            <div class="aus-section-header">
                <h2>In-Demand Fields of Study</h2>
                <p>Target educational modules that match high global hiring demands and post-graduation stay incentives.</p>
            </div>
            <div class="aus-grid-3">
                <div class="aus-field-card">
                    <i class="fa-solid fa-laptop-code field-icon"></i>
                    <h3>IT & Computer Science</h3>
                    <p>Focus deeply inside Artificial Intelligence, Cloud Cybersecurity development pathways, and Big Data Analysis platforms.</p>
                </div>
                <div class="aus-field-card">
                    <i class="fa-solid fa-gears field-icon"></i>
                    <h3>Engineering & Automation</h3>
                    <p>Acquire advanced research qualifications in Civil Architecture, Robotics Systems, and Clean Renewable Energy models.</p>
                </div>
                <div class="aus-field-card">
                    <i class="fa-solid fa-heart-pulse field-icon"></i>
                    <h3>Healthcare & Nursing</h3>
                    <p>Secure long-term critical professional value in highly stable public healthcare systems across every major territory.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="aus-padding-block">
        <div class="aus-container aus-faq-container">
            <div class="aus-section-header">
                <h2>Frequently Asked Questions</h2>
                <p>Crucial contextual updates concerning student stream visas and work pathways.</p>
            </div>
            
            <div class="aus-accordion-wrapper">
                <div class="aus-accordion-item">
                    <div class="faq-head" onclick="toggleAccordion(this)">
                        What is the normal evaluation processing window for Subclass 500?
                        <i class="fa-solid fa-plus aus-plus-icon"></i>
                    </div>
                    <div class="faq-body">
                        <p>Typical review timelines run from 4 to 8 weeks after biometric completion. Attaining mandatory GTE/GS reviews at your target college adds another 2 to 3 weeks processing upfront.</p>
                    </div>
                </div>

                <div class="aus-accordion-item">
                    <div class="faq-head" onclick="toggleAccordion(this)">
                        Can I apply without formal IELTS assessment patterns?
                        <i class="fa-solid fa-plus aus-plus-icon"></i>
                    </div>
                    <div class="faq-body">
                        <p>Yes, structured variations such as PTE Academic or TOEFL iBT enjoy equal validity matrices. Furthermore, integrated ELICOS package paths help students bridge foundational gaps if minimal direct requirements fall short.</p>
                    </div>
                </div>

                <div class="aus-accordion-item">
                    <div class="faq-head" onclick="toggleAccordion(this)">
                        What post-study employment setups unlock following graduation?
                        <i class="fa-solid fa-plus aus-plus-icon"></i>
                    </div>
                    <div class="faq-body">
                        <p>The Subclass 485 Temporary Graduate visa grants open employment parameters scaling across 2 to 4 years baseline durations, depending closely on whether you complete standard Bachelor or Higher degree structures.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="aus-bg-tint aus-padding-block text-center">
        <div class="aus-container">
            <h2 style="font-size: 2.4rem; margin-bottom: 10px; color: #222;">Start Your Admission Processing</h2>
            <p class="aus-cta-text">Our counselors will manage your GTE verification procedures and visa document compilation phases seamlessly.</p>
            <!-- FORM BUTTON 2 ACTIVATED -->
            <a href="javascript:void(0);" class="btn-primary pill aus-cta-btn" onclick="openForm('Book Free Consultation')">Book Free Consultation</a>
        </div>
    </section>

    <footer class="site-footer">
        <div class="aus-container">
            <div class="footer-grid">
                <div class="footer-col footer-about">
                    <h3>Edu<span>Bdesh</span></h3>
                    <p>Your premium global education consulting partner, turning international degree aspirations into successful admissions tracks across the globe.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>Popular Destinations</h3>
                    <ul>
                        <li><a href="#">Study in Australia</a></li>
                        <li><a href="#">Study in Canada</a></li>
                        <li><a href="#">Study in United Kingdom</a></li>
                        <li><a href="#">Study in USA</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Our Services</h3>
                    <ul>
                        <li><a href="#">Profile Assessment</a></li>
                        <li><a href="#">University Application</a></li>
                        <li><a href="#">Scholarship Assistance</a></li>
                        <li><a href="#">Visa Lodgement Assistance</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Contact Us</h3>
                    <ul>
                        <li><i class="fa-solid fa-envelope" style="margin-right: 8px;"></i> info@edubdesh.com</li>
                        <li><i class="fa-solid fa-phone" style="margin-right: 8px;"></i> +880 1234 567890</li>
                        <li><i class="fa-solid fa-location-dot" style="margin-right: 8px;"></i> Dhaka, Bangladesh</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 EduBdesh. All rights reserved. Your trusted gateway to global higher education tracks.</p>
            </div>
        </div>
    </footer>

    <!-- CENTRAL MODAL ELEMENT -->
  <div id="consultationModal" class="modal-overlay">
    <div class="modal-content-box">
        <span class="modal-close-btn" onclick="closeForm()">&times;</span>
        <h3 id="modalTitle" style="margin-top:0; color:#222; margin-bottom:20px;">Request Consultation</h3>
        
        <form action="" method="POST">
            <input type="hidden" id="formTypeField" name="button_clicked" value="">

            <div class="modal-form-group">
                <label>Full Name *</label>
                <input type="text" name="full_name" required placeholder="John Doe">
            </div>
            <div class="modal-form-group">
                <label>Email Address *</label>
                <input type="email" name="email" required placeholder="johndoe@example.com">
            </div>
            <div class="modal-form-group">
                <label>Phone Number *</label>
                <input type="tel" name="phone" required placeholder="+880 1700 000000">
            </div>
            <button type="submit" name="submit_consultation" class="modal-submit-btn">Submit Request</button>
        </form>
    </div>
</div>

    <script>
        function toggleAccordion(headerElement) {
            const body = headerElement.nextElementSibling;
            const icon = headerElement.querySelector('i');
            
            if (body.style.maxHeight && body.style.maxHeight !== "0px") {
                body.style.maxHeight = "0px";
                icon.style.transform = "rotate(0deg)";
                icon.className = "fa-solid fa-plus aus-plus-icon";
            } else {
                body.style.maxHeight = "300px"; 
                icon.style.transform = "rotate(180deg)";
                icon.className = "fa-solid fa-minus aus-plus-icon";
            }
        }

        // CONTROL MODAL INTERACTION WINDOW
        function openForm(formType) {
            document.getElementById('consultationModal').style.display = 'flex';
            document.getElementById('modalTitle').innerText = formType;
            document.getElementById('formTypeField').value = formType;
        }

        function closeForm() {
            document.getElementById('consultationModal').style.display = 'none';
        }

        // Close form if overlay backspace wrapper is clicked
        window.onclick = function(event) {
            const modal = document.getElementById('consultationModal');
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>