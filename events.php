<?php
session_start();

// Database initialization to maintain system connectivity context
$servername = "localhost";
$username = "root";       
$password = "";          
$dbname = "edubdesh_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Database Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Education Events & Seminars | EduBdesh</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root { 
            --primary-red: #E3000F; 
            --dark-gray: #1a202c; 
            --light-bg: #f7fafc; 
            --border-color: #e2e8f0; 
            --text-muted: #718096;
        }
        
        body { 
            font-family: 'Inter', sans-serif; 
            background-color: var(--light-bg); 
            margin: 0; 
            padding: 0; 
            color: #2d3748; 
            line-height: 1.6;
        }

        /* Unified Header System Matching Admin Style Template */
        .dashboard-header { 
            background-color: var(--dark-gray); 
            color: #fff; 
            padding: 15px 30px; 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .dashboard-header h1 { 
            font-size: 1.3rem; 
            margin: 0; 
            font-weight: 600; 
        }
        .dashboard-header h1 a {
            color: #fff;
            text-decoration: none;
        }
        .nav-links { 
            display: flex;
            gap: 20px;
            align-items: center;
        }
        .nav-link {
            color: #cbd5e0; 
            text-decoration: none; 
            font-weight: 500;
            font-size: 0.95rem;
            transition: color 0.2s ease;
        }
        .nav-link:hover {
            color: #fff;
        }
        .nav-link.active {
            color: var(--primary-red);
        }

        /* Hero / Cover Page Dynamic Header Element */
        .cover-hero {
            position: relative;
            background: linear-gradient(135deg, rgba(26,32,44,0.92) 0%, rgba(227,0,15,0.85) 100%), 
                        url('https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=1200&q=80') no-repeat center center/cover;
            color: #fff;
            padding: 80px 20px;
            text-align: center;
            box-shadow: inset 0 -5px 15px rgba(0,0,0,0.1);
        }
        .cover-hero h2 {
            font-size: 2.5rem;
            margin: 0 0 15px 0;
            font-weight: 700;
            letter-spacing: -0.5px;
        }
        .cover-hero p {
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
            color: #e2e8f0;
            font-weight: 400;
        }

        /* Main Structured Display Feed Grid */
        .main-content { 
            padding: 50px 20px; 
            max-width: 1200px; 
            margin: 0 auto; 
        }
        
        .section-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 30px;
            color: var(--dark-gray);
            border-left: 4px solid var(--primary-red);
            padding-left: 12px;
        }

        /* Events Layout Block Design System */
        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }
        .event-card {
            background: #fff;
            border-radius: 8px;
            border: 1px solid var(--border-color);
            box-shadow: 0 4px 6px rgba(0,0,0,0.02);
            overflow: hidden;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .event-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        }
        .event-banner {
            height: 200px;
            width: 100%;
            object-fit: cover;
            background-color: #edf2f7;
        }
        .event-body {
            padding: 25px;
        }
        .event-meta {
            display: flex;
            gap: 15px;
            font-size: 0.85rem;
            color: var(--text-muted);
            margin-bottom: 12px;
            font-weight: 500;
        }
        .event-meta i {
            color: var(--primary-red);
        }
        .event-body h4 {
            margin: 0 0 12px 0;
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--dark-gray);
        }
        .event-body p {
            margin: 0;
            font-size: 0.95rem;
            color: #4a5568;
        }

        /* Study Materials Showcase Layout Section Block */
        .materials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
        }
        .material-card {
            background: #fff;
            border-radius: 8px;
            border: 1px solid var(--border-color);
            padding: 20px;
            text-align: center;
            transition: border-color 0.2s ease;
        }
        .material-card:hover {
            border-color: var(--primary-red);
        }
        .material-thumb {
            height: 160px;
            width: auto;
            max-width: 100%;
            object-fit: contain;
            margin-bottom: 15px;
            border-radius: 4px;
        }
        .material-card h5 {
            margin: 10px 0 5px 0;
            font-size: 1.05rem;
            font-weight: 600;
        }
        .material-card span {
            font-size: 0.8rem;
            color: var(--text-muted);
            display: block;
            margin-bottom: 15px;
        }
        .badge { 
            background-color: #e2e8f0; 
            padding: 3px 8px; 
            border-radius: 4px; 
            font-size: 0.75rem; 
            font-weight: 600;
            color: var(--dark-gray);
            display: inline-block;
        }
        .badge.red {
            background-color: #fff5f5;
            color: var(--primary-red);
        }
    </style>
</head>
<body>

    <!-- Header System matching Home/Admin Panels layout rules -->
    <div class="dashboard-header">
        <h1><a href="index.php"><i class="fa-solid fa-graduation-cap"></i> EduBdesh</a></h1>
        <div class="nav-links">
            <a href="index.php" class="nav-link">Home</a>
            <a href="events.php" class="nav-link active">Events</a>
            <a href="admin-login.php" class="nav-link"><i class="fa-solid fa-lock"></i> Staff Portal</a>
        </div>
    </div>

    <!-- Cover Page Banner Element Box Component -->
    <div class="cover-hero">
        <h2>Upcoming Educational Seminars & Events</h2>
        <p>Connect with prestigious international institutions, specialized university placement counselors, and secure destination specific scholarship profiles.</p>
    </div>

    <div class="main-content">
        
        <!-- Live Academic Event Track Modules -->
        <div class="section-title"><i class="fa-solid fa-calendar-days"></i> Scheduled Student Seminars</div>
        <div class="events-grid">
            
            <!-- Event Card Item 1 -->
            <div class="event-card">
                <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=600&q=80" alt="UK Study Event" class="event-banner">
                <div class="event-body">
                    <div class="event-meta">
                        <span><i class="fa-solid fa-clock"></i> 15 Jun 2026</span>
                        <span><i class="fa-solid fa-location-dot"></i> InterContinental Ballroom</span>
                    </div>
                    <h4>UK Higher Education Premium Intake Summit</h4>
                    <p>Meet direct representatives from prominent UK institutions. Explore available post-study work options, entry credentials, and scholarship structures mapping the upcoming intakes.</p>
                </div>
            </div>

            <!-- Event Card Item 2 -->
            <div class="event-card">
                <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?auto=format&fit=crop&w=600&q=80" alt="Australia & Canada Expo" class="event-banner">
                <div class="event-body">
                    <div class="event-meta">
                        <span><i class="fa-solid fa-clock"></i> 22 Jun 2026</span>
                        <span><i class="fa-solid fa-location-dot"></i> Virtual Live Session</span>
                    </div>
                    <h4>Australia & Canada Study Application Process Guide</h4>
                    <p>An interactive expert breakdown of strategic pathway documentation, GTE compliance evaluations for Australia, and financial profiling for Canadian study permit frameworks.</p>
                </div>
            </div>

            <!-- Event Card Item 3 -->
            <div class="event-card">
                <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=600&q=80" alt="Schengen Visa Session" class="event-banner">
                <div class="event-body">
                    <div class="event-meta">
                        <span><i class="fa-solid fa-clock"></i> 05 Jul 2026</span>
                        <span><i class="fa-solid fa-location-dot"></i> EduBdesh HQ Council Room</span>
                    </div>
                    <h4>European Passways: Cyprus & Hungary Entry Track</h4>
                    <p>Discover affordable European degree formats offering high visa conversion standards. Perfect session for students aiming to secure English-taught programs across central Europe.</p>
                </div>
            </div>

        </div>

        <!-- Academic Resource Showcase Area Component Grid Block -->
        <div class="section-title"><i class="fa-solid fa-book-open"></i> Essential Study & Guide Handouts</div>
        <div class="materials-grid">
            
            <!-- Material Item 1 -->
            <div class="material-card">
                <img src="https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?auto=format&fit=crop&w=300&q=80" alt="IELTS Handbook" class="material-thumb">
                <span class="badge red">PREMIUM ACCESS</span>
                <h5>IELTS Comprehensive Academic Blueprint</h5>
                <span>PDF E-Book Handout Guide</span>
            </div>

            <!-- Material Item 2 -->
            <div class="material-card">
                <img src="https://images.unsplash.com/photo-1506784983877-45594efa4cbe?auto=format&fit=crop&w=300&q=80" alt="SOP Guide" class="material-thumb">
                <span class="badge">DOCUMENT TEMPLATE</span>
                <h5>Statement of Purpose (SOP) Evaluation Criteria</h5>
                <span>Formatting Layout Pack</span>
            </div>

            <!-- Material Item 3 -->
            <div class="material-card">
                <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?auto=format&fit=crop&w=300&q=80" alt="UK Framework" class="material-thumb">
                <span class="badge">DESTINATION SPECIFIC</span>
                <h5>UK Student Visa Document Checksheet</h5>
                <span>Compliance Verified Matrix</span>
            </div>

            <!-- Material Item 4 -->
            <div class="material-card">
                <img src="https://images.unsplash.com/photo-1517842645767-c639042777db?auto=format&fit=crop&w=300&q=80" alt="Scholarship Log" class="material-thumb">
                <span class="badge">GLOBAL STRATEGY</span>
                <h5>International Scholarship Matrix 2026</h5>
                <span>Funding Opportunity Manual</span>
            </div>

        </div>

    </div>

<?php $conn->close(); ?>
</body>
</html>