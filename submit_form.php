<?php
// 1. Database Connection Credentials
$host = "localhost";
$username = "root";  // Replace with your MySQL username
$password = "";      // Replace with your MySQL password
$dbname = "edubdesh_db";

try {
    // Connect to MySQL using PDO for better security
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Database Connection Failed: " . $e->getMessage());
}

// 2. Check if the form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Collect and sanitize inputs to prevent simple script injections
    $name = htmlspecialchars(strip_tags(trim($_POST['name'])));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(strip_tags(trim($_POST['phone'])));
    $education_level = htmlspecialchars(strip_tags(trim($_POST['education_level'])));
    $ielts_score = htmlspecialchars(strip_tags(trim($_POST['ielts_score'])));
    $country = htmlspecialchars(strip_tags(trim($_POST['country'])));
    $intake_year = htmlspecialchars(strip_tags(trim($_POST['intake_year'])));
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])));

    // Basic Validation
    if (empty($name) || empty($email) || empty($phone) || empty($education_level) || empty($country) || empty($intake_year)) {
        echo "<script>alert('Please fill out all required fields.'); window.history.back();</script>";
        exit;
    }

    // 3. Prepare SQL query using placeholders to prevent SQL Injection attacks
    $sql = "INSERT INTO consultations (name, email, phone, education_level, ielts_score, country, intake_year, message) 
            VALUES (:name, :email, :phone, :education_level, :ielts_score, :country, :intake_year, :message)";
    
    try {
        $stmt = $conn->prepare($sql);
        
        // Bind parameters safely
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':education_level', $education_level);
        $stmt->bindParam(':ielts_score', $ielts_score);
        $stmt->bindParam(':country', $country);
        $stmt->bindParam(':intake_year', $intake_year);
        $stmt->bindParam(':message', $message);
        
        // Execute data insertion
        if ($stmt->execute()) {
            // Success alert message and redirecting back to home page
            echo "<script>
                    alert('Thank you! Your free consultation request has been submitted.');
                    window.location.href = 'index.php';
                  </script>";
        }
    } catch(PDOException $e) {
        echo "Error saving records: " . $e->getMessage();
    }
} else {
    // If someone tries to access submit_form.php directly without posting data
    header("Location: index.php");
    exit;
}
?>