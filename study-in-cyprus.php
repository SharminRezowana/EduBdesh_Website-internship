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
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_cyprus_consultation'])) {
    $button_clicked = mysqli_real_escape_string($conn, $_POST['button_clicked']);
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    
    $insert_query = "INSERT INTO cyprus_leads (button_clicked, full_name, email, phone) VALUES ('$button_clicked', '$full_name', '$email', '$phone')";
    
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
    <title>Study in Cyprus | EduBdesh</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Global & Reset Styles */
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: #333;
            line-height: 1.6;
            background-color: #fff;
        }
        
        /* Layout Structure */
        .container, .cyp-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            box-sizing: border-box;
        }
        .text-center { text-align: center; }
        .cyp-padding-block { padding: 80px 0; }
        .cyp-bg-tint { background-color: #f7fafc; }
        .cyp-bg-dark { background-color: #1a202c; }
        
        /* Typography Helpers */
        .cyp-section-header {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 50px auto;
        }
        .cyp-section-header h2 { font-size: 2.2rem; margin-bottom: 15px; color: #1a202c; font-weight: 700; }
        .cyp-section-header p { font-size: 1.1rem; color: #4a5568; margin: 0; }
        
        /* Navigation & Header */
        header {
            background: #fff;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 999;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 80px;
        }
        .logo img { height: 45px; width: auto; vertical-align: middle; }
        
        .nav-links {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
            gap: 30px;
        }
        .nav-links li { position: relative; }
        .nav-links a {
            text-decoration: none;
            color: #4a5568;
            font-weight: 500;
            font-size: 0.95rem;
            transition: color 0.2s ease;
        }
        .nav-links a:hover, .nav-links a.active { color: #E3000F; }
        
        /* Dropdowns */
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background: #fff;
            box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1);
            padding: 10px 0;
            list-style: none;
            min-width: 200px;
            border-radius: 6px;
            margin-top: 10px;
        }
        .dropdown:hover .dropdown-menu { display: block; }
        .dropdown-menu li a {
            display: block;
            padding: 10px 20px;
            font-size: 0.9rem;
        }
        .dropdown-menu li a:hover { background: #f7fafc; color: #E3000F; }
        
        /* Action Buttons */
        .btn-primary {
            background: #E3000F;
            color: #fff !important;
            padding: 10px 22px;
            border-radius: 4px;
            font-weight: 600;
            text-decoration: none;
            transition: background 0.2s ease;
        }
        .btn-primary:hover { background: #b8000c; }
        
        /* Hero Banner */
        .cyp-hero {
            background: url('https://images.unsplash.com/photo-1543731068-7e0f5beff43a?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
            position: relative;
        }
        .cyp-hero-overlay {
            background: rgba(0, 0, 0, 0.55);
            padding: 120px 0;
            color: #fff;
        }
        .cyp-badge-white {
            background: rgba(255, 255, 255, 0.2);
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
        }
        .cyp-hero-title { font-size: 3.5rem; margin: 20px 0 15px; font-weight: 700; }
        .cyp-hero-subtitle { font-size: 1.3rem; max-width: 650px; margin: 0 auto; color: #e2e8f0; }
        
        /* Grid Architectures */
        .cyp-grid-4 { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 25px; }
        .cyp-grid-3 { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
        .cyp-grid-2 { display: grid; grid-template-columns: repeat(auto-fit, minmax(450px, 1fr)); gap: 30px; }
        
        /* Feature & Advantage Cards */
        .cyp-card-advantage {
            background: #fff;
            padding: 30px 20px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .cyp-card-advantage:hover { transform: translateY(-5px); box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1); }
        .cyp-icon-wrapper {
            font-size: 2rem;
            color: #E3000F;
            margin-bottom: 15px;
        }
        .cyp-card-advantage h4 { font-size: 1.2rem; margin: 0 0 10px; color: #2d3748; }
        .cyp-card-advantage p { margin: 0; font-size: 0.95rem; color: #718096; }
        
        /* Intake Calendar Stream */
        .cyp-flex-row { display: flex; gap: 30px; flex-wrap: wrap; justify-content: center; }
        .cyp-intake-card {
            background: #fff;
            padding: 40px;
            border-radius: 8px;
            flex: 1;
            min-width: 300px;
            max-width: 550px;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
            position: relative;
        }
        .cyp-border-red { border-left: 5px solid #E3000F; }
        .cyp-border-blue { border-left: 5px solid #3182ce; }
        .cyp-tag {
            font-size: 0.75rem;
            font-weight: 700;
            padding: 4px 10px;
            border-radius: 4px;
            letter-spacing: 0.5px;
        }
        .tag-primary { background: #fff5f5; color: #E3000F; }
        .tag-secondary { background: #ebf8ff; color: #3182ce; }
        .cyp-intake-card h3 { font-size: 1.6rem; margin: 15px 0 10px; }
        .cyp-intake-card p { color: #4a5568; font-size: 1rem; margin-bottom: 20px; }
        .cyp-deadline { margin: 0 !important; font-weight: 600; color: #1a202c !important; }
        .cyp-deadline i { color: #718096; margin-right: 6px; }
        
        /* Financial Split Module */
        .cyp-flex-split { display: flex; align-items: center; gap: 50px; flex-wrap: wrap; }
        .cyp-split-side { flex: 1; min-width: 300px; }
        .cyp-round-img { width: 100%; height: auto; border-radius: 12px; box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1); }
        .cyp-sub-label { color: #E3000F; font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px; }
        .cyp-split-side h2 { font-size: 2.2rem; margin: 10px 0 15px; font-weight: 700; }
        .cyp-desc { color: #4a5568; margin-bottom: 30px; }
        
        .cyp-price-list { background: #f7fafc; border-radius: 8px; padding: 10px 25px; }
        .cyp-price-row {
            display: flex;
            justify-content: space-between;
            padding: 18px 0;
            border-bottom: 1px solid #e2e8f0;
        }
        .cyp-price-row.no-border { border-bottom: none; }
        .cyp-price-row span { color: #4a5568; font-weight: 500; }
        .cyp-price-row strong { color: #E3000F; font-size: 1.1rem; }
        
        /* University Profiles */
        .cyp-uni-card {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
        }
        .cyp-uni-card img { width: 100%; height: 200px; object-fit: cover; }
        .cyp-uni-info { padding: 25px; }
        .cyp-uni-info h3 { font-size: 1.3rem; margin: 0 0 8px; color: #1a202c; }
        .cyp-uni-info p { color: #718096; margin: 0 0 15px 0; font-size: 0.95rem; }
        .cyp-uni-info i { margin-right: 6px; color: #E3000F; }
        .cyp-uni-badge {
            background: #f7fafc;
            border: 1px solid #e2e8f0;
            padding: 4px 12px;
            font-size: 0.8rem;
            border-radius: 4px;
            font-weight: 600;
            color: #4a5568;
        }
        
        /* Scholarship System Cards */
        .cyp-scholarship-card {
            background: #fff;
            padding: 30px 25px;
            border-radius: 8px;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
            border-top: 3px solid #E3000F;
        }
        .cyp-scholarship-card h4 { display: flex; align-items: center; gap: 10px; margin: 0 0 12px; font-size: 1.1rem; color: #1a202c; }
        .cyp-scholarship-card h4 i { color: #ecc94b; }
        .cyp-scholarship-card p { margin: 0; font-size: 0.95rem; color: #4a5568; }
        
        /* Strategic Timeline Processing */
        .cyp-timeline {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        .cyp-timeline-item { position: relative; }
        .cyp-timeline-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: rgba(255,255,255,0.1);
            line-height: 1;
            margin-bottom: 10px;
        }
        .cyp-timeline-content h3 { font-size: 1.25rem; margin: 0 0 10px; color: #fff; }
        .cyp-timeline-content p { color: #a0aec0; margin: 0; font-size: 0.95rem; }
        
        /* Gateway Metrics Blocks */
        .cyp-requirement-box { background: #fff; padding: 40px; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); }
        .cyp-requirement-box h3 { margin: 0 0 25px; font-size: 1.4rem; display: flex; align-items: center; gap: 12px; }
        .cyp-requirement-box h3 i { color: #E3000F; }
        .cyp-list { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 15px; }
        .cyp-list li { display: flex; gap: 12px; align-items: flex-start; }
        .cyp-list li i { margin-top: 4px; }
        .check-green { color: #38a169; }
        .cyp-list li span { color: #4a5568; font-size: 0.95rem; }
        .cyp-list li strong { color: #1a202c; }
        
        /* Dynamic Focus Segment Cards */
        .cyp-field-card {
            background: #fff;
            padding: 40px 30px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
        }
        .field-icon { font-size: 2.5rem; color: #E3000F; margin-bottom: 20px; }
        .cyp-field-card h3 { font-size: 1.3rem; margin: 0 0 12px; color: #1a202c; }
        .cyp-field-card p { margin: 0; color: #4a5568; font-size: 0.95rem; }
        
        /* Accordion Structure */
        .cyp-faq-container { max-width: 800px; }
        .cyp-accordion-wrapper { display: flex; flex-direction: column; gap: 15px; }
        .cyp-accordion-item, .can-accordion-item {
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            overflow: hidden;
        }
        .faq-head {
            padding: 20px 25px;
            font-weight: 600;
            color: #1a202c;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            user-select: none;
            background: #fff;
        }
        .faq-head:hover { background: #fdfdfd; }
        .faq-body { padding: 0 25px; display: none; border-top: 1px solid #edf2f7; background: #fafbfc; }
        .faq-body p { margin: 20px 0; color: #4a5568; font-size: 0.95rem; }
        .cyp-plus-icon { font-size: 0.9rem; color: #718096; transition: transform 0.2s; }
        
        /* Call To Action Strip */
        .cyp-cta-text { font-size: 1.15rem; color: #4a5568; max-width: 600px; margin: 0 auto; }
        
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
            box-shadow: 0 20px 25px -5px rgba(0,0,0,0.15);
        }
        .modal-close-btn {
            position: absolute;
            top: 15px; right: 15px;
            font-size: 1.4rem;
            cursor: pointer;
            color: #718096;
            line-height: 1;
        }
        .modal-close-btn:hover { color: #1a202c; }
        .modal-box h3 { margin-top: 0; margin-bottom: 20px; font-size: 1.3rem; color: #222; }
        .modal-form-group { margin-bottom: 15px; }
        .modal-form-group label { display: block; margin-bottom: 5px; font-weight: 500; font-size: 0.9rem; color: #4a5568; }
        .modal-form-group input { width: 100%; padding: 11px; border: 1px solid #e2e8f0; border-radius: 4px; box-sizing: border-box; font-family: inherit; font-size: 0.95rem; }
        .modal-form-group input:focus { outline: none; border-color: #E3000F; box-shadow: 0 0 0 3px rgba(227, 0, 15, 0.1); }
        .modal-submit-btn { background: #E3000F; color: white; border: none; padding: 11px; width: 100%; border-radius: 4px; font-weight: 600; cursor: pointer; font-size: 1rem; transition: background 0.2s; }
        .modal-submit-btn:hover { background: #b8000c; }
        .alert-success-banner { background: #e6fffa; border: 1px solid #b2f5ea; color: #234e52; padding: 15px; border-radius: 6px; text-align: center; margin: 20px auto; max-width: 1200px; font-weight: 500; }
        
        /* Basic Responsiveness Overrides */
        @media(max-width: 768px) {
            .navbar { flex-direction: column; height: auto; padding: 15px 0; gap: 15px; }
            .nav-links { gap: 15px; flex-wrap: wrap; justify-content: center; }
            .cyp-hero-title { font-size: 2.4rem; }
            .cyp-padding-block { padding: 50px 0; }
            .cyp-flex-split { gap: 30px; }
        }
    </style>
</head>
<body>

    <?php if ($success_message): ?>
        <div class="alert-success-banner">
            <i class="fa-solid fa-circle-check"></i> Thank you! Your Cyprus consultation request has been logged successfully. Our team will contact you shortly.
        </div>
    <?php endif; ?>

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
                            <li><a href="study-in-canada.php">Study in Canada</a></li>
                            <li><a href="study-in-australia.php">Study in Australia</a></li>
                            <li><a href="study-in-hungary.php">Study in Hungary</a></li>
                            <li><a href="study-in-cyprus.php" class="active">Study in Cyprus</a></li>
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

            <a href="#" class="btn-primary" onclick="openCyprusForm('Get Free Consultation'); return false;">Get Free Consultation</a>
        </div>
    </header>

    <section class="cyp-hero">
        <div class="cyp-hero-overlay">
            <div class="cyp-container text-center">
                <span class="cyp-badge-white">Destination Guide</span>
                <h1 class="cyp-hero-title">Study in Cyprus</h1>
                <p class="cyp-hero-subtitle">Fast-track your international college entry with swift processing and zero mandatory language hurdles.</p>
            </div>
        </div>
    </section>

    <section class="cyp-padding-block">
        <div class="cyp-container">
            <div class="cyp-section-header">
                <h2>Why Select Cyprus?</h2>
                <p>Cyprus bridges premium Mediterranean student environments with incredibly dynamic, streamlined entry requirements.</p>
            </div>
            
            <div class="cyp-grid-4">
                <div class="cyp-card-advantage">
                    <div class="cyp-icon-wrapper"><i class="fa-solid fa-ban"></i></div>
                    <h4>No IELTS Mandatory</h4>
                    <p>Secure full admission approval tracks based entirely on institutional alternative placement interviews.</p>
                </div>
                <div class="cyp-card-advantage">
                    <div class="cyp-icon-wrapper"><i class="fa-solid fa-bolt"></i></div>
                    <h4>Rapid Visa Tracks</h4>
                    <p>Experience swift, straightforward visa processing checks with absolute minimum documentation strain.</p>
                </div>
                <div class="cyp-card-advantage">
                    <div class="cyp-icon-wrapper"><i class="fa-solid fa-umbrella-beach"></i></div>
                    <h4>Mediterranean Quality</h4>
                    <p>Live, study, and thrive inside one of Europe's safest and most scenic resort lifestyle regions.</p>
                </div>
                <div class="cyp-card-advantage">
                    <div class="cyp-icon-wrapper"><i class="fa-solid fa-route"></i></div>
                    <h4>EU Pathway Potential</h4>
                    <p>Utilize global credit transfers to transition into major continental European university spaces.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cyp-bg-tint cyp-padding-block">
        <div class="cyp-container">
            <div class="cyp-section-header">
                <h2>Primary Enrollment Intakes</h2>
                <p>Cyprus supports multiple flexible student entry options over three primary calendar seasons.</p>
            </div>
            
            <div class="cyp-flex-row">
                <div class="cyp-intake-card cyp-border-red">
                    <span class="cyp-tag tag-primary">PRIMARY TRACK</span>
                    <h3>October Intake</h3>
                    <p>The definitive main academic session. Maximum selection choice across hospitality management, shipping lines, and computer branches.</p>
                    <p class="cyp-deadline"><i class="fa-regular fa-clock"></i> Deadline: Jun - Aug</p>
                </div>
                
                <div class="cyp-intake-card cyp-border-blue">
                    <span class="cyp-tag tag-secondary">MID-YEAR TRACK</span>
                    <h3>February / June Intakes</h3>
                    <p>Highly effective alternative enrollment blocks structured for ongoing accelerated management and computing streams.</p>
                    <p class="cyp-deadline"><i class="fa-regular fa-clock"></i> Deadline: Oct - Jan</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cyp-padding-block">
        <div class="cyp-container">
            <div class="cyp-flex-split">
                <div class="cyp-split-side">
                    <img src="https://images.unsplash.com/photo-1605276374104-dee2a0ed3cd6?auto=format&fit=crop&w=800&q=80" alt="Student Living Budget Cost" class="cyp-round-img">
                </div>
                <div class="cyp-split-side">
                    <span class="cyp-sub-label">Financial Roadmap</span>
                    <h2>Tuition Fees & Cost of Living</h2>
                    <p class="cyp-desc">Review your highly affordable foundational study budgets for processing institutional files.</p>
                    
                    <div class="cyp-price-list">
                        <div class="cyp-price-row">
                            <span>Diploma Programs</span>
                            <strong>€3,000 - €4,500 / Yr</strong>
                        </div>
                        <div class="cyp-price-row">
                            <span>Undergraduate Bachelors</span>
                            <strong>€3,500 - €6,000 / Yr</strong>
                        </div>
                        <div class="cyp-price-row">
                            <span>Postgraduate Masters</span>
                            <strong>€4,000 - €7,500 / Yr</strong>
                        </div>
                        <div class="cyp-price-row no-border">
                            <span>Estimated Living Costs</span>
                            <strong>€400 - €550 / Mo</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cyp-bg-tint cyp-padding-block">
        <div class="cyp-container">
            <div class="cyp-section-header">
                <h2>Top Performing Cypriot Institutions</h2>
                <p>Secure internationally integrated qualifications fully mapping onto global validation criteria.</p>
            </div>
            <div class="cyp-grid-3">
                <div class="cyp-uni-card">
                    <img src="https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=600&q=80" alt="University Campus Building">
                    <div class="cyp-uni-info">
                        <h3>University of Nicosia</h3>
                        <p><i class="fa-solid fa-location-dot"></i> Nicosia</p>
                        <span class="cyp-uni-badge">Global Digital Leader</span>
                    </div>
                </div>
                <div class="cyp-uni-card">
                    <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=600&q=80" alt="Modern University Infrastructure">
                    <div class="cyp-uni-info">
                        <h3>European University Cyprus</h3>
                        <p><i class="fa-solid fa-location-dot"></i> Nicosia</p>
                        <span class="cyp-uni-badge">Elite Medicine & Tech</span>
                    </div>
                </div>
                <div class="cyp-uni-card">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=600&q=80" alt="Students Academic Campus">
                    <div class="cyp-uni-info">
                        <h3>Frederick University</h3>
                        <p><i class="fa-solid fa-location-dot"></i> Limassol / Nicosia</p>
                        <span class="cyp-uni-badge">Top Applied Engineering</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cyp-padding-block">
        <div class="cyp-container">
            <div class="cyp-section-header">
                <h2>Top Scholarships for International Students</h2>
                <p>Minimize your structural tuition brackets utilizing automatic institutional support parameters.</p>
            </div>
            
            <div class="cyp-grid-4">
                <div class="cyp-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> Entrance Fee Rebates</h4>
                    <p>Automatic 30% to 50% tuition cost reductions applied natively across all incoming international files.</p>
                </div>
                <div class="cyp-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> Academic Excellence</h4>
                    <p>Specialized fee waivers unlocked during your study track by maintaining top term-end GPA marks.</p>
                </div>
                <div class="cyp-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> Shipping Sector Aid</h4>
                    <p>Targeted corporate grants dedicated to students entering maritime management modules.</p>
                </div>
                <div class="cyp-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> Accommodation Grants</h4>
                    <p>Subsidized institutional housing allocations managed directly across specific private colleges.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cyp-bg-dark cyp-padding-block" style="color: white;">
        <div class="cyp-container">
            <div class="cyp-section-header">
                <h2 style="color: white;">Our Roadmap to Your Enrollment</h2>
                <p style="color: #ccc;">We streamline complex documentation down into a clear, stress-free milestone application track.</p>
            </div>
            <div class="cyp-timeline">
                <div class="cyp-timeline-item">
                    <div class="cyp-timeline-number">01</div>
                    <div class="cyp-timeline-content">
                        <h3>Profile Clearance</h3>
                        <p>We review your general academic certifications to map the absolute best institutional options.</p>
                    </div>
                </div>
                <div class="cyp-timeline-item">
                    <div class="cyp-timeline-number">02</div>
                    <div class="cyp-timeline-content">
                        <h3>Fast Admission Filing</h3>
                        <p>Our operations wing handles college application channels to secure an immediate admission offer.</p>
                    </div>
                </div>
                <div class="cyp-timeline-item">
                    <div class="cyp-timeline-number">03</div>
                    <div class="cyp-timeline-content">
                        <h3>Migration Clearance</h3>
                        <p>We compile your foundational medical records and police certificates to satisfy ministerial checks.</p>
                    </div>
                </div>
                <div class="cyp-timeline-item">
                    <div class="cyp-timeline-number">04</div>
                    <div class="cyp-timeline-content">
                        <h3>Visa Sticker Finalization</h3>
                        <p>We manage your official entry visa file submission to ensure a swift, highly predictable passport return.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cyp-padding-block">
        <div class="cyp-container">
            <div class="cyp-section-header">
                <h2>Academic & Language Entry Thresholds</h2>
                <p>Review the primary processing metrics required across international application channels.</p>
            </div>
            
            <div class="cyp-grid-2">
                <div class="cyp-requirement-box">
                    <h3><i class="fa-solid fa-book-open"></i> Scholastic Metrics</h3>
                    <ul class="cyp-list">
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>Undergraduate Tracks:</strong> High school graduation certificates with a baseline pass percentage above 50%.</span></li>
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>Postgraduate Tracks:</strong> A recognized graduation degree in any operational tracking branch.</span></li>
                    </ul>
                </div>
                
                <div class="cyp-requirement-box">
                    <h3><i class="fa-solid fa-language"></i> Language Benchmarks</h3>
                    <ul class="cyp-list">
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>Language Exams:</strong> IELTS is fully optional; university internal clearance tests substitute seamlessly.</span></li>
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>Interview Strategy:</strong> Clear basic conversational skills via quick digital evaluation tracks.</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="cyp-bg-tint cyp-padding-block">
        <div class="cyp-container">
            <div class="cyp-section-header">
                <h2>In-Demand Fields of Study</h2>
                <p>Target operational industries providing excellent local and international placement paths.</p>
            </div>
            <div class="cyp-grid-3">
                <div class="cyp-field-card">
                    <i class="fa-solid fa-hotel field-icon"></i>
                    <h3>Hospitality & Tourism</h3>
                    <p>Gain direct clinical experience inside premier luxury Mediterranean resort chains and management frameworks.</p>
                </div>
                <div class="cyp-field-card">
                    <i class="fa-solid fa-ship field-icon"></i>
                    <h3>Maritime Management</h3>
                    <p>Train near major European commercial shipping networks specializing in logistics and fleet operations.</p>
                </div>
                <div class="cyp-field-card">
                    <i class="fa-solid fa-wallet field-icon"></i>
                    <h3>Business Administration</h3>
                    <p>Develop critical skills in entrepreneurial strategy, global financial structures, and team management tracking.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cyp-padding-block">
        <div class="cyp-container cyp-faq-container">
            <div class="cyp-section-header">
                <h2>Frequently Asked Questions</h2>
                <p>Crucial contextual updates concerning student stream visas and work pathways.</p>
            </div>
            
            <div class="cyp-accordion-wrapper">
                <div class="cyp-accordion-item">
                    <div class="faq-head" onclick="toggleAccordion(this)">
                        Is Cyprus part of the Schengen zone?
                        <i class="fa-solid fa-plus cyp-plus-icon"></i>
                    </div>
                    <div class="faq-body">
                        <p>Cyprus is a full European Union (EU) member state, but operates on an individual national visa track, meaning direct Schengen travel requires a separate quick visa validation.</p>
                    </div>
                </div>

                <div class="can-accordion-item">
                    <div class="faq-head" onclick="toggleAccordion(this)">
                        Can international students work during their studies?
                        <i class="fa-solid fa-plus cyp-plus-icon"></i>
                    </div>
                    <div class="faq-body">
                        <p>Yes, international student pass holders are legally permitted to work part-time for up to 20 hours per week, particularly inside thriving hospitality and service lines.</p>
                    </div>
                </div>

                <div class="can-accordion-item">
                    <div class="faq-head" onclick="toggleAccordion(this)">
                        What exactly is bank solvency matching for Cyprus?
                        <i class="fa-solid fa-plus cyp-plus-icon"></i>
                    </div>
                    <div class="faq-body">
                        <p>You must present basic financial statements showing sufficient coverage for one academic year of tuition and living expenses to satisfy Ministry checklist targets.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cyp-bg-tint cyp-padding-block text-center">
        <div class="cyp-container">
            <h2 style="font-size: 2.4rem; margin-bottom: 10px; color: #222;">Start Your Cyprus Processing</h2>
            <p class="cyp-cta-text">Our specialists will guide you through your university shortlisting and manage your direct immigration processing step by step.</p>
            <br>
            <a href="#" class="btn-primary" style="display:inline-block; padding:15px 35px; font-size:1.1rem; text-decoration:none;" onclick="openCyprusForm('Book Free Consultation Button'); return false;">Book Free Consultation</a>
        </div>
    </section>

    <!-- DYNAMIC POPUP MODAL FRAMEWORK -->
    <div class="modal-overlay" id="cyprusFormModal">
        <div class="modal-box">
            <span class="modal-close-btn" onclick="closeCyprusForm()">&times;</span>
            <h3 id="modalTitleText">Request Consultation</h3>
            <form action="" method="POST">
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
                <button type="submit" name="submit_cyprus_consultation" class="modal-submit-btn">Submit Information</button>
            </form>
        </div>
    </div>

    <script>
        function openCyprusForm(sourceName) {
            document.getElementById('formButtonSource').value = sourceName;
            document.getElementById('modalTitleText').innerText = "Study in Cyprus: " + sourceName;
            document.getElementById('cyprusFormModal').style.display = 'flex';
        }
        function closeCyprusForm() {
            document.getElementById('cyprusFormModal').style.display = 'none';
        }
        function toggleAccordion(headerElement) {
            const body = headerElement.nextElementSibling;
            const icon = headerElement.querySelector('.fa-solid');
            if (body.style.display === "block") {
                body.style.display = "none";
                icon.className = "fa-solid fa-plus cyp-plus-icon";
            } else {
                body.style.display = "block";
                icon.className = "fa-solid fa-minus cyp-plus-icon";
            }
        }
    </script>
</body>
</html>
<?php $conn->close(); ?>