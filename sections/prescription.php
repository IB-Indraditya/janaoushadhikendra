<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbnew";

// Connect to DB
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";

// Handle form submit
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $name = htmlspecialchars($_POST["name"]);
    $disease = htmlspecialchars($_POST["disease"]);
    $availability_date = $_POST["availability_date"];
    $additional_info = htmlspecialchars($_POST["additional_info"]);

    // Handle file upload
    $prescription_path = "";
    if (!empty($_FILES["prescription"]["name"])) {
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0755, true);
        }
        $filename = basename($_FILES["prescription"]["name"]);
        $prescription_path = $target_dir . uniqid() . "_" . $filename;
        move_uploaded_file($_FILES["prescription"]["tmp_name"], $prescription_path);
    }

    // DB Insert
    $stmt = $conn->prepare("INSERT INTO prescriptions (name, disease, prescription_path, availability_date, additional_info) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $disease, $prescription_path, $availability_date, $additional_info);

    if ($stmt->execute()) {
        $message = "<div class='alert alert-success text-center'>✅ Request submitted successfully!</div>";
    } else {
        $message = "<div class='alert alert-danger text-center'>❌ Error submitting request. Try again.</div>";
    }

    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Medicine Request Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <?php echo $message; ?>

    <form method="POST" enctype="multipart/form-data" class="shadow p-4 rounded bg-light">
        <h2 class="mb-4 text-center">Send Us Your Requirements</h2>

        <div class="mb-3">
            <label>Full Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Disease / Medical Condition</label>
            <input type="text" name="disease" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Prescription Image</label>
            <input type="file" name="prescription" class="form-control" accept="image/*" required>
        </div>

        <div class="mb-3">
            <label>Medicine Required Before</label>
            <input type="date" name="availability_date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Additional Information</label>
            <textarea name="additional_info" class="form-control" rows="4"></textarea>
        </div>

        <div class="text-center">
            <button type="submit" name="submit" class="btn btn-primary px-4">Submit Request</button>
        </div>
    </form>
</div>

<!-- 🧠 JavaScript to prevent form resubmission on reload -->
<script>
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
</script>

</body>
</html>
