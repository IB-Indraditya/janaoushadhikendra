<?php
// ob_start(); // Start output buffering
// session_start(); // Start session for message storage

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbnew";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $message = htmlspecialchars($_POST["message"]);
    $recaptcha_response = $_POST["g-recaptcha-response"];

    // Google reCAPTCHA Secret Key
    $recaptcha_secret = "YOUR_SECRET_KEY"; // Replace with your secret key

    // Verify reCAPTCHA
    $recaptcha_url = "https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response";
    $recaptcha_verify = file_get_contents($recaptcha_url);
    $recaptcha_data = json_decode($recaptcha_verify);

    if ($recaptcha_data->success) {
        // Insert data into MySQL database
        $stmt = $conn->prepare("INSERT INTO contacts (name, email, phone, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $phone, $message);
        
        if ($stmt->execute()) {
            $_SESSION['message'] = "✅ Message sent and saved successfully!";
        } else {
            $_SESSION['message'] = "❌ Database error. Please try again.";
        }

        $stmt->close();
        
        // ✅ Redirect using GET method to prevent resubmission
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        $_SESSION['message'] = "⚠️ reCAPTCHA verification failed. Please try again.";
    }
}

$conn->close();
ob_end_flush(); // Flush output buffer
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
        textarea { resize: none; }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <h1 class='text-center my-5'>Contact Us</h1>

        <!-- ✅ Display Success/Error Message -->
        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-info text-center" id="alert-message">
                <?= $_SESSION['message']; ?>
            </div>
            <?php unset($_SESSION['message']); // Clear message after displaying ?>
        <?php endif; ?>

        <div class="col-md-6">
            <h3 class='my-5'>GET IN TOUCH</h3>
            <form method="POST" action="">
                <div class="mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                </div>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                </div>
                <div class="mb-3">
                    <textarea name="message" class="form-control" placeholder="Your Message" rows="4" required></textarea>
                </div>
                <div class="g-recaptcha mb-3" data-sitekey="YOUR_SITE_KEY"></div> <!-- Replace with your site key -->
                <button type="submit" name="submit" class="btn btn-primary w-100">SUBMIT NOW</button>
            </form>
        </div>

        <div class="col-md-6">
            <h3 class='my-5'>CONTACT US FOR FURTHER INFORMATION</h3>
            <p class='my-5'>We're delighted to hear from you and are ready to answer any questions you may have about our event management services.</p>
            <p class='my-5'><strong>📍 Address:</strong> Khasra 401 Second Floor, Right Side Vill, Ghitorni, New Delhi, Delhi 110030</p>
            <p class='my-5'><strong>📧 Email Address:</strong> info@eventales.com</p>
            <p class='my-5'><strong>📞 Phone Number:</strong> +91-9910074464, +91-9910205750</p>
        </div>
    </div>
</div>

<!-- ✅ Auto-hide the message after 5 seconds -->
<script>
    setTimeout(() => {
        let alertBox = document.getElementById("alert-message");
        if (alertBox) {
            alertBox.style.display = "none";
        }
    }, 5000);
</script>

</body>
</html>
