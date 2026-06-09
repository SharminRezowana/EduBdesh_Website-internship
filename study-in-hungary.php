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
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_hungary_consultation'])) {
    $button_clicked = mysqli_real_escape_string($conn, $_POST['button_clicked']);
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    
    $insert_query = "INSERT INTO hungary_leads (button_clicked, full_name, email, phone) VALUES ('$button_clicked', '$full_name', '$email', '$phone')";
    
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
    <title>Study in Hungary | EduBdesh</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body { margin: 0; padding: 0; font-family: 'Inter', sans-serif; box-sizing: border-box; background-color: #ffffff; }
        .hun-container { max-width: 1200px; margin: 0 auto; padding: 0 20px; box-sizing: border-box; }
        .hun-padding-block { padding: 80px 0; }
        .hun-bg-tint { background-color: #f8f9fa; }
        .hun-bg-dark { background-color: #1a1a1a; }
        .hun-section-header { text-align: center; margin-bottom: 50px; }
        .hun-section-header h2 { font-size: 2.5rem; font-weight: 700; margin-bottom: 15px; color: #222; letter-spacing: -0.5px; }
        .hun-section-header p { max-width: 700px; margin: 0 auto; color: #666; font-size: 1.1rem; line-height: 1.6; }

        /* --- Global App Header Navigation Styles --- */
        .container { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 20px; box-sizing: border-box; }
        .navbar { display: flex; align-items: center; justify-content: space-between; padding: 20px 0; }
        .nav-links { display: flex; list-style: none; gap: 25px; margin: 0; padding: 0; }
        .nav-links a { text-decoration: none; color: #2d3748; font-weight: 500; font-size: 0.95rem; transition: color 0.2s ease; }
        .nav-links a:hover, .nav-links a.active { color: #438e5e; }
        .dropdown { position: relative; }
        .dropdown-menu { display: none; position: absolute; top: 100%; left: 0; background: #fff; min-width: 200px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1); padding: 10px 0; list-style: none; border-radius: 6px; z-index: 999; margin: 0; }
        .dropdown-menu li a { padding: 8px 20px; display: block; color: #4a5568; font-size: 0.9rem; }
        .dropdown:hover .dropdown-menu { display: block; }
        .btn-primary { background: #438e5e; color: #fff; padding: 10px 22px; border-radius: 6px; text-decoration: none; font-weight: 600; font-size: 0.9rem; display: inline-block; transition: background 0.2s; border: none; cursor: pointer; }
        .btn-primary:hover { background: #35734a; }

        /* --- Hero Section --- */
        .hun-hero {
            background: url('https://images.unsplash.com/photo-1565426122501-c88f1f7d5448?auto=format&fit=crop&w=1600&q=80') no-repeat center center/cover;
            position: relative; min-height: 450px; display: flex; align-items: center;
        }
        .hun-hero-overlay { background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)); width: 100%; padding: 100px 0; }
        .hun-badge-white { color: #fff; border: 2px solid #fff; padding: 6px 18px; border-radius: 25px; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; display: inline-block; }
        .hun-hero-title { color: white !important; font-size: 3.8rem; font-weight: 700; margin: 20px 0 10px 0; letter-spacing: -1px; }
        .hun-hero-subtitle { color: #e5e5e5 !important; font-size: 1.25rem; max-width: 700px; margin: 0 auto; line-height: 1.6; }

        /* --- Grid Utilities --- */
        .hun-grid-4 { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 30px; }
        .hun-grid-3 { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; }
        .hun-grid-2 { display: grid; grid-template-columns: repeat(auto-fit, minmax(450px, 1fr)); gap: 40px; }

        /* --- Advantage Cards --- */
        .hun-card-advantage { background: white; padding: 35px 25px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); transition: all 0.3s ease; text-align: left; border: 1px solid #efefef; }
        .hun-card-advantage:hover { transform: translateY(-8px); box-shadow: 0 12px 30px rgba(0,0,0,0.1); }
        .hun-icon-wrapper { width: 60px; height: 60px; background: rgba(67, 142, 94, 0.08); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; }
        .hun-icon-wrapper i { font-size: 1.6rem; color: #438e5e; }
        .hun-card-advantage h4 { font-size: 1.3rem; margin: 0 0 12px 0; color: #222; font-weight: 600; }
        .hun-card-advantage p { color: #666; font-size: 0.95rem; line-height: 1.6; margin: 0; }

        /* --- Intakes Elements --- */
        .hun-flex-row { display: flex; flex-wrap: wrap; gap: 30px; }
        .hun-intake-card { background: white; padding: 40px; border-radius: 16px; flex: 1; min-width: 320px; box-shadow: 0 10px 30px rgba(0,0,0,0.04); }
        .hun-border-red { border-top: 5px solid #438e5e; }
        .hun-border-blue { border-top: 5px solid #ce2939; }
        .hun-tag { padding: 6px 14px; border-radius: 20px; font-weight: 700; font-size: 0.75rem; letter-spacing: 0.5px; display: inline-block; }
        .tag-primary { background: rgba(67,142,94,0.08); color: #438e5e; }
        .tag-secondary { background: rgba(206,41,57,0.08); color: #ce2939; }
        .hun-intake-card h3 { font-size: 1.5rem; margin: 20px 0 12px 0; color: #222; }
        .hun-intake-card p { color: #666; font-size: 1rem; line-height: 1.6; margin: 0; }
        .hun-deadline { font-weight: 600; margin-top: 25px !important; font-size: 0.95rem; color: #333; }
        .fa-regular.fa-clock { color: #438e5e; margin-right: 5px; }

        /* --- Split Layout Rows --- */
        .hun-flex-split { display: flex; flex-wrap: wrap; gap: 60px; align-items: center; }
        .hun-split-side { flex: 1; min-width: 400px; }
        @media (max-width: 768px) { .hun-split-side { min-width: 100%; } }
        .hun-round-img { width: 100%; height: auto; border-radius: 20px; box-shadow: 0 15px 40px rgba(0,0,0,0.12); display: block; }
        .hun-sub-label { color: #438e5e; font-weight: 700; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px; display: block; margin-bottom: 8px; }
        .hun-desc { color: #666; line-height: 1.6; margin-bottom: 25px; font-size: 1.05rem; }
        .hun-price-list { text-align: left; }
        .hun-price-row { display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #eee; padding: 15px 0; font-size: 1.05rem; }
        .hun-price-row strong { color: #438e5e; font-weight: 700; }

        /* --- Universities Modules --- */
        .hun-uni-card { background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border: 1px solid #eee; text-align: left; }
        .hun-uni-card img { width: 100%; height: 220px; object-fit: cover; }
        .hun-uni-info { padding: 25px; }
        .hun-uni-info h3 { font-size: 1.3rem; margin: 0 0 8px 0; color: #222; }
        .hun-uni-info p { color: #777; margin: 0 0 20px 0; font-size: 0.9rem; }
        .hun-uni-badge { background: #f1f3f5; padding: 6px 12px; border-radius: 6px; font-weight: 600; color: #495057; font-size: 0.85rem; }

        /* --- Scholarships Cards --- */
        .hun-scholarship-card { background: white; padding: 35px 30px; border-radius: 12px; box-shadow: 0 5px 25px rgba(0,0,0,0.03); border-left: 5px solid #438e5e; text-align: left; }
        .hun-scholarship-card h4 { margin: 0 0 12px 0; font-size: 1.2rem; color: #222; font-weight: 600; }
        .hun-scholarship-card h4 i { color: #438e5e; margin-right: 6px; }

        /* --- Roadmaps Timeline --- */
        .hun-timeline { display: flex; flex-direction: column; gap: 25px; max-width: 900px; margin: 0 auto; }
        .hun-timeline-item { display: flex; gap: 30px; background: #252525; padding: 30px; border-radius: 12px; align-items: center; text-align: left; }
        .hun-timeline-number { font-size: 2.5rem; font-weight: 800; color: #438e5e; min-width: 50px; }
        .hun-timeline-content h3 { font-size: 1.3rem; margin: 0 0 5px 0; color: white; }
        .hun-timeline-content p { color: #aaa; margin: 0; line-height: 1.5; font-size: 0.95rem; }

        /* --- Entry Criteria --- */
        .hun-requirement-box { background: #f8f9fa; padding: 40px; border-radius: 16px; border: 1px solid #e9ecef; text-align: left; }
        .hun-requirement-box h3 { font-size: 1.4rem; color: #222; margin: 0 0 25px 0; }
        .hun-requirement-box h3 i { color: #438e5e; margin-right: 8px; }
        .hun-list { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 20px; }
        .hun-list li { display: flex; gap: 15px; font-size: 1rem; line-height: 1.6; color: #444; }
        .check-green { color: #28a745; font-size: 1.2rem; margin-top: 2px; }

        /* --- Fields of Study --- */
        .hun-field-card { background: white; padding: 40px 30px; border-radius: 16px; text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.03); border: 1px solid #eee; }
        .field-icon { font-size: 2.5rem; color: #438e5e; margin-bottom: 20px; }
        .hun-field-card h3 { margin: 0 0 12px 0; font-size: 1.3rem; color: #222; }
        .hun-field-card p { color: #666; margin: 0; font-size: 0.95rem; line-height: 1.6; }

        /* --- Accordion --- */
        .hun-faq-container { max-width: 850px; margin: 0 auto; }
        .mys-accordion-wrapper { display: flex; flex-direction: column; gap: 15px; }
        .hun-accordion-item { background: white; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.03); overflow: hidden; border: 1px solid #edf2f7; text-align: left; }
        .faq-head { padding: 22px 30px; font-weight: 600; font-size: 1.1rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: #222; user-select: none; }
        .hun-plus-icon { transition: transform 0.25s; color: #888; }
        .faq-body { max-height: 0; padding: 0 30px; overflow: hidden; transition: max-height 0.35s ease; background: #fcfcfc; }
        .faq-body p { padding-bottom: 22px; margin: 0; font-size: 1rem; color: #555; line-height: 1.6; }

        /* --- CTA Interface --- */
        .hun-cta-text { max-width: 600px; margin: 0 auto 30px auto; color: #555; font-size: 1.1rem; line-height: 1.6; }
        .hun-cta-btn { display: inline-block; background: #438e5e !important; color: white !important; padding: 14px 40px; border-radius: 30px; text-decoration: none; font-weight: 600; font-size: 1.05rem; box-shadow: 0 6px 20px rgba(67,142,94,0.3); transition: transform 0.2s; border: none; cursor: pointer; }
        .hun-cta-btn:hover { transform: scale(1.03); }
        .text-center { text-align: center; }

        /* --- Secure Lead Form Modal Framework --- */
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
            padding: 35px;
            border-radius: 14px;
            width: 100%;
            max-width: 440px;
            box-sizing: border-box;
            position: relative;
            border-top: 5px solid #438e5e;
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        .modal-close-btn {
            position: absolute;
            top: 15px; right: 20px;
            font-size: 1.8rem;
            cursor: pointer;
            color: #a0aec0;
            line-height: 1;
            transition: color 0.2s;
        }
        .modal-close-btn:hover { color: #4a5568; }
        .modal-box h3 { margin-top: 0; margin-bottom: 25px; font-size: 1.4rem; color: #222; font-weight: 700; text-align: left; }
        .modal-form-group { margin-bottom: 20px; text-align: left; }
        .modal-form-group label { display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: #4a5568; }
        .modal-form-group input { width: 100%; padding: 12px; border: 1px solid #cbd5e0; border-radius: 6px; box-sizing: border-box; font-family: inherit; font-size: 0.95rem; }
        .modal-form-group input:focus { border-color: #438e5e; outline: none; box-shadow: 0 0 0 3px rgba(67, 142, 94, 0.15); }
        .modal-submit-btn { background: #438e5e; color: white; border: none; padding: 14px; width: 100%; border-radius: 6px; font-weight: 600; cursor: pointer; font-size: 1rem; transition: background 0.2s; }
        .modal-submit-btn:hover { background: #35734a; }
        .alert-success-banner { background: #e6fffa; border: 1px solid #b2f5ea; color: #234e52; padding: 15px; border-radius: 8px; text-align: center; margin: 20px auto; max-width: 1200px; font-weight: 600; }
    </style>
</head>
<body>

    <?php if ($success_message): ?>
        <div class="alert-success-banner">
            <i class="fa-solid fa-circle-check" style="color: #319795; margin-right: 5px;"></i> Thank you! Your Hungary consultation request has been logged successfully. Our team will contact you shortly.
        </div>
    <?php endif; ?>

    <!-- Global Application Navigation Header -->
    <header>
        <div class="container navbar">
            <div class="logo">
                <a href="index.php">
                    <img src="images/logo.png" alt="EduBdesh Logo" style="height: 45px; display: block;">
                </a>
            </div>

            <nav>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="active">Study Destinations <i class="fa-solid fa-angle-down" style="font-size: 0.8rem; margin-left: 3px;"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="study-in-uk.php">Study in UK</a></li>
                            <li><a href="study-in-canada.php">Study in Canada</a></li>
                            <li><a href="study-in-australia.php">Study in Australia</a></li>
                            <li><a href="study-in-hungary.php" class="active">Study in Hungary</a></li>
                            <li><a href="study-in-cyprus.php">Study in Cyprus</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Services <i class="fa-solid fa-angle-down" style="font-size: 0.8rem; margin-left: 3px;"></i></a>
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

            <button class="btn-primary" onclick="openHungaryForm('Global Header Registration')">Get Free Consultation</button>
        </div>
    </header>

    <!-- Hero Framework Section -->
    <section class="hun-hero">
        <div class="hun-hero-overlay">
            <div class="hun-container text-center">
                <span class="hun-badge-white">Destination Guide</span>
                <h1 class="hun-hero-title">Study in Hungary</h1>
                <p class="hun-hero-subtitle">Secure premium European qualifications with unrestricted access to the entire Schengen territory.</p>
            </div>
        </div>
    </section>

    <!-- Why Select Hungary Module -->
    <section class="hun-padding-block">
        <div class="hun-container">
            <div class="hun-section-header">
                <h2>Why Select Hungary?</h2>
                <p>Hungary delivers deeply integrated continental research curricula coupled with high visa confirmation success baselines.</p>
            </div>
            
            <div class="hun-grid-4">
                <div class="hun-card-advantage">
                    <div class="hun-icon-wrapper"><i class="fa-solid fa-passport"></i></div>
                    <h4>Schengen Mobility</h4>
                    <p>Travel and explore across 29 European member states seamlessly with your official Hungarian student residency permit.</p>
                </div>
                <div class="hun-card-advantage">
                    <div class="hun-icon-wrapper"><i class="fa-solid fa-piggy-bank"></i></div>
                    <h4>Incredibly Low Costs</h4>
                    <p>Benefit from significantly lower tuition footprints and daily living costs compared to Western Europe.</p>
                </div>
                <div class="hun-card-advantage">
                    <div class="hun-icon-wrapper"><i class="fa-solid fa-hand-holding-dollar"></i></div>
                    <h4>Fully Funded Options</h4>
                    <p>Access the world-renowned Stipendium Hungaricum scholarship framework covering total educational costs.</p>
                </div>
                <div class="hun-card-advantage">
                    <div class="hun-icon-wrapper"><i class="fa-solid fa-briefcase"></i></div>
                    <h4>Stay-Back Pathway</h4>
                    <p>Utilize the structured 9-month "Study-to-Work" post-study framework to build an active continental career.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Primary Enrollment Semesters Module -->
    <section class="hun-bg-tint class hun-padding-block">
        <div class="hun-container">
            <div class="hun-section-header">
                <h2>Primary Enrollment Windows</h2>
                <p>Ensure your admission files map precisely onto European institutional standard registration dates.</p>
            </div>
            
            <div class="hun-flex-row">
                <div class="hun-intake-card hun-border-red">
                    <span class="hun-tag tag-primary">PRIMARY INTAKE</span>
                    <h3>September Semester</h3>
                    <p>The definitive annual academic opening. Complete entry allocation is open for medical branches, engineering lines, and government scholarships.</p>
                    <p class="hun-deadline"><i class="fa-regular fa-clock"></i> Deadline: Jan - Apr</p>
                </div>
                
                <div class="hun-intake-card hun-border-blue">
                    <span class="hun-tag tag-secondary">MID-YEAR INTAKE</span>
                    <h3>February Semester</h3>
                    <p>Focused secondary admission framework. Highly aligned with intensive computing streams and business management modules.</p>
                    <p class="hun-deadline"><i class="fa-regular fa-clock"></i> Deadline: Sep - Nov</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Split Tuition Pricing Module -->
    <section class="hun-padding-block">
        <div class="hun-container">
            <div class="hun-flex-split">
                <div class="hun-split-side">
                    <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?auto=format&fit=crop&w=800&q=80" alt="Budapest Parliament" class="hun-round-img">
                </div>
                <div class="hun-split-side">
                    <span class="hun-sub-label">Financial Roadmap</span>
                    <h2>Tuition Fees & Cost of Living</h2>
                    <p class="hun-desc">Review your estimated annual budget requirements for processing European student files securely.</p>
                    
                    <div class="hun-price-list">
                        <div class="hun-price-row">
                            <span>Business & Humanities Courses</span>
                            <strong>€2,500 - €4,500 / Yr</strong>
                        </div>
                        <div class="hun-price-row">
                            <span>Engineering & IT Curricula</span>
                            <strong>€3,200 - €6,000 / Yr</strong>
                        </div>
                        <div class="hun-price-row">
                            <span>Medical & Dental Programs</span>
                            <strong>€12,000 - €16,000 / Yr</strong>
                        </div>
                        <div class="hun-price-row no-border">
                            <span>Average Living Expenditures</span>
                            <strong>€500 - €700 / Mo</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Universities Module -->
    <section class="hun-bg-tint hun-padding-block">
        <div class="hun-container">
            <div class="hun-section-header">
                <h2>Top World-Class Hungarian Institutions</h2>
                <p>Acquire premium degrees inside historical universities that carry lifelong global brand recognition.</p>
            </div>
            <div class="hun-grid-3">
                <div class="hun-uni-card">
                    <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=500&q=80" alt="ELTE Campus">
                    <div class="hun-uni-info">
                        <h3>Eötvös Loránd University (ELTE)</h3>
                        <p><i class="fa-solid fa-location-dot"></i> Budapest</p>
                        <span class="hun-uni-badge">QS World Rank: #564</span>
                    </div>
                </div>
                <div class="hun-uni-card">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=500&q=80" alt="University of Debrecen">
                    <div class="hun-uni-info">
                        <h3>University of Debrecen</h3>
                        <p><i class="fa-solid fa-location-dot"></i> Debrecen</p>
                        <span class="hun-uni-badge">Premier Medical Hub</span>
                    </div>
                </div>
                <div class="hun-uni-card">
                    <img src="https://images.unsplash.com/photo-1592280771190-3e2e4d571952?auto=format&fit=crop&w=500&q=80" alt="BME Campus">
                    <div class="hun-uni-info">
                        <h3>Budapest University of Technology (BME)</h3>
                        <p><i class="fa-solid fa-location-dot"></i> Budapest</p>
                        <span class="hun-uni-badge">Elite Engineering Space</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scholarships Framework Module -->
    <section class="hun-padding-block">
        <div class="hun-container">
            <div class="hun-section-header">
                <h2>Top Scholarships for International Students</h2>
                <p>Minimize your educational expenditure using robust state funding paths.</p>
            </div>
            
            <div class="hun-grid-4">
                <div class="hun-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> Stipendium Hungaricum</h4>
                    <p>Total exemption from tuition, a monthly lifestyle stipend, housing assistance, and full medical insurance coverage.</p>
                </div>
                <div class="hun-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> Erasmus+ Mobility</h4>
                    <p>Funding options enabled directly upon pursuing a semester-long exchange study module inside another EU state.</p>
                </div>
                <div class="hun-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> Diaspora Higher Aid</h4>
                    <p>Targeted funding structures crafted for regional development students joining specific technical lines.</p>
                </div>
                <div class="hun-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> Faculty Merit Rebates</h4>
                    <p>Automated tuition fee reductions from 15% to 40% matching exceptional academic term results.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Flow Roadmap Module -->
    <section class="hun-bg-dark hun-padding-block" style="color: white;">
        <div class="hun-container">
            <div class="hun-section-header">
                <h2 style="color: white;">Our Roadmap to Your Enrollment</h2>
                <p style="color: #ccc;">We streamline complex documentation down into a clear, stress-free milestone application track.</p>
            </div>
            <div class="hun-timeline">
                <div class="hun-timeline-item">
                    <div class="hun-timeline-number">01</div>
                    <div class="hun-timeline-content">
                        <h3>Academic Mapping</h3>
                        <p>We analyze your academic history to select the ideal university tracks and verify entry matching.</p>
                    </div>
                </div>
                <div class="hun-timeline-item">
                    <div class="hun-timeline-number">02</div>
                    <div class="hun-timeline-content">
                        <h3>Admission Submissions</h3>
                        <p>Our operations division handles institutional application entries and schedules any required faculty check interviews.</p>
                    </div>
                </div>
                <div class="hun-timeline-item">
                    <div class="hun-timeline-number">03</div>
                    <div class="hun-timeline-content">
                        <h3>Letter of Acceptance (LOA)</h3>
                        <p>We secure your official European unconditional admission offer letter to clear required financial steps.</p>
                    </div>
                </div>
                <div class="hun-timeline-item">
                    <div class="hun-timeline-number">04</div>
                    <div class="hun-timeline-content">
                        <h3>Schengen D-Visa Processing</h3>
                        <p>We compile your complete financial files and schedule embassy processing slots to lock in your long-term visa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Admission Requirements Box Matrix Module -->
    <section class="hun-padding-block">
        <div class="hun-container">
            <div class="hun-section-header">
                <h2>Academic & Language Entry Thresholds</h2>
                <p>Verify the standard eligibility parameters required to secure smooth visa validation.</p>
            </div>
            
            <div class="hun-grid-2">
                <div class="hun-requirement-box">
                    <h3><i class="fa-solid fa-book-open"></i> Scholastic Metrics</h3>
                    <ul class="hun-list">
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>Undergraduate Level:</strong> High School completion certificates showing a minimum 60% baseline score.</span></li>
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>Postgraduate Level:</strong> A recognized 3 or 4-year Bachelor's degree in a closely related technical field.</span></li>
                    </ul>
                </div>
                
                <div class="hun-requirement-box">
                    <h3><i class="fa-solid fa-language"></i> Language Benchmarks</h3>
                    <ul class="hun-list">
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>IELTS Standard:</strong> Minimum 5.5 bands for bachelor entries; straight 6.0 or 6.5 bands for master paths.</span></li>
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>MOI Compliance:</strong> Widely supported if your previous degree track was completed entirely in English.</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- In Demand Fields Card Section -->
    <section class="hun-bg-tint hun-padding-block">
        <div class="hun-container">
            <div class="hun-section-header">
                <h2>In-Demand Fields of Study</h2>
                <p>Align your engineering or strategic focus inside highly active EU industrial branches.</p>
            </div>
            <div class="hun-grid-3">
                <div class="hun-field-card">
                    <i class="fa-solid fa-user-doctor field-icon"></i>
                    <h3>General Medicine / MD</h3>
                    <p>Access high-tier clinical medicine training fully recognized across every major global medical council.</p>
                </div>
                <div class="hun-field-card">
                    <i class="fa-solid fa-laptop-code field-icon"></i>
                    <h3>Computer Science</h3>
                    <p>Specialize inside advanced software programming architectures, data logistics, and security systems.</p>
                </div>
                <div class="hun-field-card">
                    <i class="fa-solid fa-industry field-icon"></i>
                    <h3>Automotive Engineering</h3>
                    <p>Train inside large regional European manufacturing hubs focused heavily on precision automation systems.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Dynamic Transition FAQ Accordion Module -->
    <section class="hun-padding-block">
        <div class="hun-container hun-faq-container">
            <div class="hun-section-header">
                <h2>Frequently Asked Questions</h2>
                <p>Crucial contextual updates concerning student stream visas and work pathways.</p>
            </div>
            
            <div class="mys-accordion-wrapper">
                <div class="hun-accordion-item">
                    <div class="faq-head" onclick="toggleAccordion(this)">
                        Do I need to visit an embassy outside Bangladesh for the visa?
                        <i class="fa-solid fa-plus hun-plus-icon"></i>
                    </div>
                    <div class="faq-body">
                        <p>No, long-term Schengen D-Visa student processing can be executed smoothly through designated regional embassy offices or handling centers located directly in Dhaka.</p>
                    </div>
                </div>

                <div class="hun-accordion-item">
                    <div class="faq-head" onclick="toggleAccordion(this)">
                        Can I live and work outside Hungary inside the EU?
                        <i class="fa-solid fa-plus hun-plus-icon"></i>
                    </div>
                    <div class="faq-body">
                        <p>Your student residence permit grants unrestricted tourism travel rights throughout the Schengen area, but legal part-time employment is strictly tied to Hungarian soil.</p>
                    </div>
                </div>

                <div class="hun-accordion-item">
                    <div class="faq-head" onclick="toggleAccordion(this)">
                        What are the part-time work hour limitations?
                        <i class="fa-solid fa-plus hun-plus-icon"></i>
                    </div>
                    <div class="faq-body">
                        <p>International students can legally maintain part-time employment for up to 30 hours per week during active academic terms.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom Page Marketing Call To Action Interface -->
    <section class="hun-bg-tint hun-padding-block text-center">
        <div class="hun-container">
            <h2 style="font-size: 2.4rem; margin-bottom: 10px; color: #222;">Start Your Hungarian Processing</h2>
            <p class="hun-cta-text">Our professional counselors will handle your university applications and structure your complete Schengen visa documentation file seamlessly.</p>
            <button class="hun-cta-btn" onclick="openHungaryForm('Bottom Page Registration CTA')">Book Free Consultation</button>
        </div>
    </section>

    <!-- DYNAMIC INTERACTIVE POPUP MODAL FRAMEWORK -->
    <div class="modal-overlay" id="hungaryFormModal">
        <div class="modal-box">
            <span class="modal-close-btn" onclick="closeHungaryForm()">&times;</span>
            <h3 id="modalTitleText">Request Consultation</h3>
            <form action="study-in-hungary.php" method="POST">
                <!-- Tracks context location of origin button -->
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
                <button type="submit" name="submit_hungary_consultation" class="modal-submit-btn">Submit Information</button>
            </form>
        </div>
    </div>

    <script>
        function openHungaryForm(sourceName) {
            document.getElementById('formButtonSource').value = sourceName;
            document.getElementById('modalTitleText').innerText = "Study in Hungary: " + sourceName;
            document.getElementById('hungaryFormModal').style.display = 'flex';
        }

        function closeHungaryForm() {
            document.getElementById('hungaryFormModal').style.display = 'none';
        }

        function toggleAccordion(headerElement) {
            const body = headerElement.nextElementSibling;
            const icon = headerElement.querySelector('.hun-plus-icon');
            
            if (body.style.maxHeight && body.style.maxHeight !== "0px") {
                body.style.maxHeight = "0px";
                icon.style.transform = "rotate(0deg)";
            } else {
                body.style.maxHeight = "300px";
                icon.style.transform = "rotate(45deg)";
            }
        }

        // Close form modal window instantly if outside target window block clicked
        window.onclick = function(event) {
            var modal = document.getElementById('hungaryFormModal');
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>
<?php $conn->close(); ?>