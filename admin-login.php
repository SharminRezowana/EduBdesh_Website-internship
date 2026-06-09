<?php
session_start();

define('ADMIN_USER', 'admin');
define('ADMIN_PASS', 'secure123');

if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    unset($_SESSION['admin_logged_in']);
    session_destroy();
    header("Location: admin-login.php");
    exit;
}

$login_error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login_submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    if ($username === ADMIN_USER && $password === ADMIN_PASS) {
        $_SESSION['admin_logged_in'] = true;
    } else {
        $login_error = "Invalid admin credentials pattern configuration.";
    }
}

$servername = "localhost";
$username = "root";       
$password = "";          
$dbname = "edubdesh_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Database Connection failed: " . $conn->connect_error);
}

// Ensure Admin is logged in for data manipulation queries
if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_SESSION['admin_logged_in'])) {
    die("Unauthorized application access.");
}

// Global Delete Logic processing
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_record'])) {
    $record_id = intval($_POST['record_id']);
    $target_table = trim($_POST['target_table']);
    
    // Whitelist approved tables to prevent SQL injections
    $allowed_tables = ['consultations', 'uk_leads', 'australia_leads', 'canada_leads', 'cyprus_leads', 'hungary_leads'];
    
    if (in_array($target_table, $allowed_tables)) {
        $delete_stmt = $conn->prepare("DELETE FROM $target_table WHERE id = ?");
        $delete_stmt->bind_param("i", $record_id);
        $delete_stmt->execute();
        $delete_stmt->close();
    }
    header("Location: admin-login.php");
    exit;
}

// Handle Admin Comment Updates (Index Table)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['comment_submit'])) {
    $record_id = intval($_POST['record_id']);
    $admin_comment = trim($_POST['admin_comment']);
    $update_stmt = $conn->prepare("UPDATE consultations SET admin_comment = ? WHERE id = ?");
    $update_stmt->bind_param("si", $admin_comment, $record_id);
    $update_stmt->execute();
    $update_stmt->close();
    header("Location: admin-login.php");
    exit;
}

// Handle Admin Comment Updates (UK Table)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['uk_comment_submit'])) {
    $record_id = intval($_POST['record_id']);
    $admin_comment = trim($_POST['admin_comment']);
    $update_stmt = $conn->prepare("UPDATE uk_leads SET admin_comment = ? WHERE id = ?");
    $update_stmt->bind_param("si", $admin_comment, $record_id);
    $update_stmt->execute();
    $update_stmt->close();
    header("Location: admin-login.php");
    exit;
}

// Handle Admin Comment Updates (Australia Table)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['australia_comment_submit'])) {
    $record_id = intval($_POST['record_id']);
    $admin_comment = trim($_POST['admin_comment']);
    $update_stmt = $conn->prepare("UPDATE australia_leads SET admin_comment = ? WHERE id = ?");
    $update_stmt->bind_param("si", $admin_comment, $record_id);
    $update_stmt->execute();
    $update_stmt->close();
    header("Location: admin-login.php");
    exit;
}

// Handle Admin Comment Updates (Canada Table)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['canada_comment_submit'])) {
    $record_id = intval($_POST['record_id']);
    $admin_comment = trim($_POST['admin_comment']);
    $update_stmt = $conn->prepare("UPDATE canada_leads SET admin_comment = ? WHERE id = ?");
    $update_stmt->bind_param("si", $admin_comment, $record_id);
    $update_stmt->execute();
    $update_stmt->close();
    header("Location: admin-login.php");
    exit;
}

// Handle Admin Comment Updates (Cyprus Table)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cyprus_comment_submit'])) {
    $record_id = intval($_POST['record_id']);
    $admin_comment = trim($_POST['admin_comment']);
    $update_stmt = $conn->prepare("UPDATE cyprus_leads SET admin_comment = ? WHERE id = ?");
    $update_stmt->bind_param("si", $admin_comment, $record_id);
    $update_stmt->execute();
    $update_stmt->close();
    header("Location: admin-login.php");
    exit;
}

// Handle Admin Comment Updates (Hungary Table)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['hungary_comment_submit'])) {
    $record_id = intval($_POST['record_id']);
    $admin_comment = trim($_POST['admin_comment']);
    $update_stmt = $conn->prepare("UPDATE hungary_leads SET admin_comment = ? WHERE id = ?");
    $update_stmt->bind_param("si", $admin_comment, $record_id);
    $update_stmt->execute();
    $update_stmt->close();
    header("Location: admin-login.php");
    exit;
}

// Query Execution Streams
$result = $conn->query("SELECT * FROM consultations ORDER BY submitted_at DESC");
$uk_result = $conn->query("SELECT * FROM uk_leads ORDER BY id DESC");
$aus_result = $conn->query("SELECT * FROM australia_leads ORDER BY id DESC");
$can_result = $conn->query("SELECT * FROM canada_leads ORDER BY id DESC");
$cyp_result = $conn->query("SELECT * FROM cyprus_leads ORDER BY id DESC");
$hun_result = $conn->query("SELECT * FROM hungary_leads ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Lead System Panel | EduBdesh</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 <style>
        :root { 
            --primary-red: #E3000F; 
            --dark-gray: #1E293B;      /* Changed: Deep slate gray header so white text stands out perfectly */
            --light-bg: #3c5463;       /* Your dark slate background */
            --border-color: #94A3B8;   /* Darkened border slightly for cleaner separation */
            
            /* True Ash Gray tones - zero white properties */
            --ash-dark: #CBD5E1; 
            --ash-light: #E2E8F0; 
            
            /* High-Contrast Typography Tones */
            --text-dark-primary: #0F172A; /* Crisp deep charcoal for main data text on ash background */
            --text-dark-muted: #475569;   /* Readable gray for phone numbers/emails */
        }
        
        body { font-family: 'Inter', sans-serif; background-color: var(--light-bg); margin: 0; padding: 0; color: var(--text-dark-primary); }
        
        /* Heading text color updated to pop against dark slate bg */
        h1, h2, .main-content h2 { color: #FFFFFF !important; }
        
        /* Login Container - True Ash Background */
        .login-container { max-width: 400px; margin: 120px auto; background: var(--ash-dark) !important; padding: 35px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.15); border-top: 4px solid var(--primary-red); color: var(--text-dark-primary); }
        .login-container h2 { margin-top: 0; text-align: center; font-weight: 700; margin-bottom: 25px; color: var(--text-dark-primary) !important; }
        
        .form-group { margin-bottom: 18px; }
        .form-group label { display: block; margin-bottom: 6px; font-weight: 600; font-size: 0.9rem; color: var(--text-dark-primary); }
        
        /* Input Fields */
        .form-group input { width: 100%; padding: 11px; border: 1px solid var(--border-color); border-radius: 4px; box-sizing: border-box; background-color: var(--ash-light) !important; color: var(--text-dark-primary); font-weight: 500; }
        
        .login-btn { background-color: var(--primary-red); color: #fff; border: none; width: 100%; padding: 12px; font-weight: 600; border-radius: 4px; cursor: pointer; font-size: 1rem; }
        .error-msg { color: var(--primary-red); font-size: 0.85rem; margin-bottom: 12px; text-align: center;}
        
        /* Dashboard Header */
        .dashboard-header { background-color: var(--dark-gray); color: #fff; padding: 15px 30px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 2px 8px rgba(0,0,0,0.2); }
        .dashboard-header h1 { font-size: 1.3rem; margin: 0; font-weight: 600; color: #fff !important; }
        .logout-link { color: #cbd5e0; text-decoration: none; font-weight: 500; }
        
        /* Specific page heading adjustment */
        .main-content > h2, .main-content > h3 { color: #ffffff !important; margin-bottom: 20px; opacity: 0.95; }
        .main-content { padding: 40px 20px; max-width: 1350px; margin: 0 auto; }
        
        /* Table Card - Solid Ash Background */
        .table-card { background: var(--ash-dark) !important; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.15); border: 1px solid var(--border-color); overflow: hidden; margin-bottom: 40px; }
        
        .table-responsive { overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; text-align: left; }
        
        /* Adjusted header strip inside the card to contrast with deep text */
        th { background-color: #94A3B8; color: #0F172A; font-weight: 700; padding: 14px 16px; border-bottom: 2px solid var(--border-color); font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.03em; }
        
        /* Data formatting fixes for clear readability */
        td { padding: 14px 16px; border-bottom: 1px solid var(--border-color); vertical-align: top; font-size: 0.9rem; color: var(--text-dark-primary); font-weight: 500; }
        td b, td strong { color: #000000; font-weight: 700; } /* Make student names crisp bold black */
        td a, .contact-info { color: var(--text-dark-muted); } /* Muted text adjustments for email/phone tags */
        
        /* Row Hover - Highlights row cleanly using slightly darker ash layer */
        tr:hover { background-color: #B4C2D3 !important; }
        
        /* Comment Box */
        .comment-box { width: 100%; min-width: 190px; height: 60px; padding: 8px; border: 1px solid var(--border-color); border-radius: 4px; resize: vertical; font-family: inherit; font-size: 0.85rem; box-sizing: border-box; background: var(--ash-light) !important; color: var(--text-dark-primary); }
        
        .save-comment-btn { background-color: #3182ce; color: #fff; border: none; padding: 6px 12px; border-radius: 3px; font-size: 0.8rem; cursor: pointer; margin-top: 5px; font-weight: 500; }
        .delete-record-btn { background-color: #e53e3e; color: #fff; border: none; padding: 6px 12px; border-radius: 3px; font-size: 0.8rem; cursor: pointer; margin-top: 5px; font-weight: 500; margin-left: 4px; }
        
        /* Badges: Dark text on clear gray background */
        .badge { background-color: #475569; color: #FFFFFF; padding: 3px 8px; border-radius: 4px; font-size: 0.75rem; font-weight: 600; }
        .flex-actions { display: flex; align-items: center; justify-content: flex-start; }
</style>
</head>
<body>

<?php if (!isset($_SESSION['admin_logged_in'])): ?>
    <div class="login-container">
        <h2>EduBdesh Secure Admin Login</h2>
        <?php if (!empty($login_error)): ?>
            <div class="error-msg"><?php echo $login_error; ?></div>
        <?php endif; ?>
        <form action="admin-login.php" method="POST">
            <div class="form-group">
                <label>Admin User ID</label>
                <input type="text" name="username" required autocomplete="off">
            </div>
            <div class="form-group">
                <label>Secure Password</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit" name="login_submit" class="login-btn">Log In</button>
        </form>
    </div>
<?php else: ?>
    <div class="dashboard-header">
        <h1><i class="fa-solid fa-lock"></i> EduBdesh Submissions Unified Management System</h1>
        <a href="admin-login.php?action=logout" class="logout-link"><i class="fa-solid fa-right-from-bracket"></i> Disconnect (Logout)</a>
    </div>

    <div class="main-content">
        
        <h3 style="margin-top: 0; margin-bottom: 15px; color: #2d3748; font-weight: 600;"><i class="fa-solid fa-house"></i> Home Page Form Enquiries</h3>
        <div class="table-card">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th><th>Student Demographics</th><th>Qualifications</th><th>Target Choice</th><th>Message</th><th>Date</th><th style="width: 260px;">Actions & Comments</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($result && $result->num_rows > 0): ?>
                            <?php while($row = $result->fetch_assoc()): ?>
                                <tr>
                                    <td><strong><?php echo $row['id']; ?></strong></td>
                                    <td>
                                        <strong><?php echo htmlspecialchars($row['name']); ?></strong><br>
                                        <small style="color:#718096;"><i class="fa-solid fa-envelope"></i> <?php echo htmlspecialchars($row['email']); ?><br><i class="fa-solid fa-phone"></i> <?php echo htmlspecialchars($row['phone']); ?></small>
                                    </td>
                                    <td><span class="badge"><?php echo htmlspecialchars($row['education_level']); ?></span><br><small>IELTS: <?php echo htmlspecialchars($row['ielts_score'] ?: 'N/A'); ?></small></td>
                                    <td><strong><?php echo htmlspecialchars($row['country']); ?></strong><br><small>Intake: <?php echo htmlspecialchars($row['intake_year']); ?></small></td>
                                    <td><p style="margin:0; font-size:0.85rem; max-width: 200px Papx;"><?php echo htmlspecialchars($row['message']); ?></p></td>
                                    <td><small><?php echo date("d M Y", strtotime($row['submitted_at'])); ?></small></td>
                                    <td>
                                        <form action="admin-login.php" method="POST">
                                            <input type="hidden" name="record_id" value="<?php echo $row['id']; ?>">
                                            <textarea name="admin_comment" class="comment-box"><?php echo htmlspecialchars($row['admin_comment'] ?? ''); ?></textarea>
                                            <div class="flex-actions">
                                                <button type="submit" name="comment_submit" class="save-comment-btn"><i class="fa-solid fa-floppy-disk"></i> Save</button>
                                                <button type="submit" name="delete_record" class="delete-record-btn" onclick="return confirm('Are you sure you want to delete this home entry?');">
                                                    <input type="hidden" name="target_table" value="consultations">
                                                    <i class="fa-solid fa-trash"></i> Drop
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr><td colspan="7" style="text-align: center; padding: 30px; color:#a0aec0;">No home inquiries submitted yet.</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <h3 style="margin-top: 40px; margin-bottom: 15px; color: #2d3748; font-weight: 600;"><i class="fa-solid fa-uk-globe"></i> United Kingdom Page Form Enquiries</h3>
        <div class="table-card">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr><th>ID</th><th>Student Demographics</th><th>Intended Level</th><th>Submission Date</th><th style="width: 260px;">Actions & Comments</th></tr>
                    </thead>
                    <tbody>
                        <?php if ($uk_result && $uk_result->num_rows > 0): ?>
                            <?php while($row = $uk_result->fetch_assoc()): ?>
                                <tr>
                                    <td><strong><?php echo $row['id']; ?></strong></td>
                                    <td><strong><?php echo htmlspecialchars($row['name']); ?></strong><br><small><?php echo htmlspecialchars($row['email']); ?> | <?php echo htmlspecialchars($row['phone']); ?></small></td>
                                    <td><span class="badge" style="background:#e1f5fe; color:#0288d1;"><?php echo htmlspecialchars($row['preferred_degree']); ?></span></td>
                                    <td><small><?php echo date("d M Y H:i", strtotime($row['created_at'])); ?></small></td>
                                    <td>
                                        <form action="admin-login.php" method="POST">
                                            <input type="hidden" name="record_id" value="<?php echo $row['id']; ?>">
                                            <textarea name="admin_comment" class="comment-box"><?php echo htmlspecialchars($row['admin_comment'] ?? ''); ?></textarea>
                                            <div class="flex-actions">
                                                <button type="submit" name="uk_comment_submit" class="save-comment-btn"><i class="fa-solid fa-floppy-disk"></i> Save</button>
                                                <button type="submit" name="delete_record" class="delete-record-btn" onclick="return confirm('Delete this UK submission lead context?');">
                                                    <input type="hidden" name="target_table" value="uk_leads">
                                                    <i class="fa-solid fa-trash"></i> Drop
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr><td colspan="5" style="text-align: center; padding: 30px; color:#a0aec0;">No UK student records submitted yet.</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <h3 style="margin-top: 40px; margin-bottom: 15px; color: #2d3748; font-weight: 600;"><i class="fa-solid fa-graduation-cap"></i> Australia Page Form Enquiries</h3>
        <div class="table-card">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr><th>ID</th><th>Action Source</th><th>Student Demographics</th><th>Submission Date</th><th style="width: 260px;">Actions & Comments</th></tr>
                    </thead>
                    <tbody>
                        <?php if ($aus_result && $aus_result->num_rows > 0): ?>
                            <?php while($row = $aus_result->fetch_assoc()): ?>
                                <tr>
                                    <td><strong><?php echo $row['id']; ?></strong></td>
                                    <td><span class="badge" style="background:#e8f5e9; color:#2e7d32;"><?php echo htmlspecialchars($row['button_clicked']); ?></span></td>
                                    <td><strong><?php echo htmlspecialchars($row['full_name']); ?></strong><br><small><?php echo htmlspecialchars($row['email']); ?> | <?php echo htmlspecialchars($row['phone']); ?></small></td>
                                    <td><small><?php echo date("d M Y", strtotime($row['submission_date'])); ?></small></td>
                                    <td>
                                        <form action="admin-login.php" method="POST">
                                            <input type="hidden" name="record_id" value="<?php echo $row['id']; ?>">
                                            <textarea name="admin_comment" class="comment-box"><?php echo htmlspecialchars($row['admin_comment'] ?? ''); ?></textarea>
                                            <div class="flex-actions">
                                                <button type="submit" name="australia_comment_submit" class="save-comment-btn"><i class="fa-solid fa-floppy-disk"></i> Save</button>
                                                <button type="submit" name="delete_record" class="delete-record-btn" onclick="return confirm('Delete this Australia record?');">
                                                    <input type="hidden" name="target_table" value="australia_leads">
                                                    <i class="fa-solid fa-trash"></i> Drop
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr><td colspan="5" style="text-align: center; padding: 30px; color:#a0aec0;">No Australia student data submitted yet.</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <h3 style="margin-top: 40px; margin-bottom: 15px; color: #2d3748; font-weight: 600;"><i class="fa-solid fa-map"></i> Canada Page Form Enquiries</h3>
        <div class="table-card">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr><th>ID</th><th>Action Source</th><th>Student Demographics</th><th>Submission Date</th><th style="width: 260px;">Actions & Comments</th></tr>
                    </thead>
                    <tbody>
                        <?php if ($can_result && $can_result->num_rows > 0): ?>
                            <?php while($row = $can_result->fetch_assoc()): ?>
                                <tr>
                                    <td><strong><?php echo $row['id']; ?></strong></td>
                                    <td><span class="badge" style="background:#e1f5fe; color:#0288d1;"><?php echo htmlspecialchars($row['button_clicked']); ?></span></td>
                                    <td><strong><?php echo htmlspecialchars($row['full_name']); ?></strong><br><small><?php echo htmlspecialchars($row['email']); ?> | <?php echo htmlspecialchars($row['phone']); ?></small></td>
                                    <td><small><?php echo date("d M Y", strtotime($row['submission_date'])); ?></small></td>
                                    <td>
                                        <form action="admin-login.php" method="POST">
                                            <input type="hidden" name="record_id" value="<?php echo $row['id']; ?>">
                                            <textarea name="admin_comment" class="comment-box"><?php echo htmlspecialchars($row['admin_comment'] ?? ''); ?></textarea>
                                            <div class="flex-actions">
                                                <button type="submit" name="canada_comment_submit" class="save-comment-btn"><i class="fa-solid fa-floppy-disk"></i> Save</button>
                                                <button type="submit" name="delete_record" class="delete-record-btn" onclick="return confirm('Delete this Canada entry?');">
                                                    <input type="hidden" name="target_table" value="canada_leads">
                                                    <i class="fa-solid fa-trash"></i> Drop
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr><td colspan="5" style="text-align: center; padding: 30px; color:#a0aec0;">No Canada student data submitted yet.</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <h3 style="margin-top: 40px; margin-bottom: 15px; color: #2d3748; font-weight: 600;"><i class="fa-solid fa-landmark"></i> Cyprus Page Form Enquiries</h3>
        <div class="table-card">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr><th>ID</th><th>Action Source</th><th>Student Demographics</th><th>Submission Date</th><th style="width: 260px;">Actions & Comments</th></tr>
                    </thead>
                    <tbody>
                        <?php if ($cyp_result && $cyp_result->num_rows > 0): ?>
                            <?php while($row = $cyp_result->fetch_assoc()): ?>
                                <tr>
                                    <td><strong><?php echo $row['id']; ?></strong></td>
                                    <td><span class="badge" style="background:#fff3e0; color:#e65100;"><?php echo htmlspecialchars($row['button_clicked']); ?></span></td>
                                    <td><strong><?php echo htmlspecialchars($row['full_name']); ?></strong><br><small><?php echo htmlspecialchars($row['email']); ?> | <?php echo htmlspecialchars($row['phone']); ?></small></td>
                                    <td><small><?php echo date("d M Y", strtotime($row['submission_date'])); ?></small></td>
                                    <td>
                                        <form action="admin-login.php" method="POST">
                                            <input type="hidden" name="record_id" value="<?php echo $row['id']; ?>">
                                            <textarea name="admin_comment" class="comment-box"><?php echo htmlspecialchars($row['admin_comment'] ?? ''); ?></textarea>
                                            <div class="flex-actions">
                                                <button type="submit" name="cyprus_comment_submit" class="save-comment-btn"><i class="fa-solid fa-floppy-disk"></i> Save</button>
                                                <button type="submit" name="delete_record" class="delete-record-btn" onclick="return confirm('Delete this Cyprus structural tracking lead?');">
                                                    <input type="hidden" name="target_table" value="cyprus_leads">
                                                    <i class="fa-solid fa-trash"></i> Drop
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr><td colspan="5" style="text-align: center; padding: 30px; color:#a0aec0;">No Cyprus student data submitted yet.</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <h3 style="margin-top: 40px; margin-bottom: 15px; color: #2d3748; font-weight: 600;"><i class="fa-solid fa-building-columns"></i> Hungary Page Form Enquiries</h3>
        <div class="table-card">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr><th>ID</th><th>Action Source</th><th>Student Demographics</th><th>Submission Date</th><th style="width: 260px;">Actions & Comments</th></tr>
                    </thead>
                    <tbody>
                        <?php if ($hun_result && $hun_result->num_rows > 0): ?>
                            <?php while($row = $hun_result->fetch_assoc()): ?>
                                <tr>
                                    <td><strong><?php echo $row['id']; ?></strong></td>
                                    <td><span class="badge" style="background:#f3e5f5; color:#7b1fa2;"><?php echo htmlspecialchars($row['button_clicked']); ?></span></td>
                                    <td><strong><?php echo htmlspecialchars($row['full_name']); ?></strong><br><small><?php echo htmlspecialchars($row['email']); ?> | <?php echo htmlspecialchars($row['phone']); ?></small></td>
                                    <td><small><?php echo date("d M Y", strtotime($row['submission_date'])); ?></small></td>
                                    <td>
                                        <form action="admin-login.php" method="POST">
                                            <input type="hidden" name="record_id" value="<?php echo $row['id']; ?>">
                                            <textarea name="admin_comment" class="comment-box"><?php echo htmlspecialchars($row['admin_comment'] ?? ''); ?></textarea>
                                            <div class="flex-actions">
                                                <button type="submit" name="hungary_comment_submit" class="save-comment-btn"><i class="fa-solid fa-floppy-disk"></i> Save</button>
                                                <button type="submit" name="delete_record" class="delete-record-btn" onclick="return confirm('Drop this Hungary profile request safely?');">
                                                    <input type="hidden" name="target_table" value="hungary_leads">
                                                    <i class="fa-solid fa-trash"></i> Drop
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr><td colspan="5" style="text-align: center; padding: 30px; color:#a0aec0;">No Hungary student data submitted yet.</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
<?php endif; ?>
<?php $conn->close(); ?>
</body>
</html>