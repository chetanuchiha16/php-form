<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $fullname = htmlspecialchars(strip_tags(trim($_POST['fullname'])));
    $email = htmlspecialchars(strip_tags(trim($_POST['email'])));
    $phone = htmlspecialchars(strip_tags(trim($_POST['phone'])));
    $dob = htmlspecialchars(strip_tags(trim($_POST['dob'])));
    $gender = htmlspecialchars(strip_tags(trim($_POST['gender'])));
    $address = htmlspecialchars(strip_tags(trim($_POST['address'])));
    $course = htmlspecialchars(strip_tags(trim($_POST['course'])));
} else {
    // Redirect if accessed directly
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .result-item {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding: 10px 0;
        }
        .result-item:last-child {
            border-bottom: none;
        }
        .label {
            color: var(--text-muted);
            font-weight: 300;
        }
        .value {
            font-weight: 600;
            text-align: right;
        }
        .success-icon {
            text-align: center;
            font-size: 3rem;
            margin-bottom: 20px;
            color: var(--success);
        }
    </style>
</head>
<body>

<div class="background-shapes">
    <div class="shape shape-1"></div>
    <div class="shape shape-2"></div>
</div>

<div class="container">
    <div class="success-icon">✓</div>
    <header>
        <h1>Submission Received</h1>
        <p>Thank you for registering, <?php echo explode(' ', $fullname)[0]; ?>!</p>
    </header>

    <div class="results">
        <div class="result-item">
            <span class="label">Full Name</span>
            <span class="value"><?php echo $fullname; ?></span>
        </div>
        <div class="result-item">
            <span class="label">Email</span>
            <span class="value"><?php echo $email; ?></span>
        </div>
        <div class="result-item">
            <span class="label">Phone</span>
            <span class="value"><?php echo $phone; ?></span>
        </div>
        <div class="result-item">
            <span class="label">Date of Birth</span>
            <span class="value"><?php echo $dob; ?></span>
        </div>
        <div class="result-item">
            <span class="label">Gender</span>
            <span class="value"><?php echo $gender; ?></span>
        </div>
        <div class="result-item">
            <span class="label">Address</span>
            <span class="value"><?php echo $address; ?></span>
        </div>
        <div class="result-item">
            <span class="label">Position</span>
            <span class="value"><?php echo $course; ?></span>
        </div>
    </div>

    <a href="index.html" class="submit-btn" style="text-decoration: none; display: block; text-align: center; margin-top: 30px;">Back to Home</a>
</div>

</body>
</html>
