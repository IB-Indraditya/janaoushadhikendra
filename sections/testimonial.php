<?php
$servername = "localhost";  // Change for live server
$username = "root";  // Change for live server
$password = "";  // Change for live server
$database = "dbnew"; // Change to your actual database

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}

// Fetch testimonials from database
$sql = "SELECT name, designation, message, image FROM testimonials";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials</title>

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Bootstrap (Optional for Styling) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .testimonial {
            background: white;
            text-align: center;
            padding: 20px;
        }
        .testimonial img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .testimonial h5 {
            margin: 5px 0;
            font-size: 1.2rem;
        }
        .testimonial p {
            font-style: italic;
            color: #555;
        }
    </style>
</head>
<body>

<div id='testimoni' class="container-fluid mt-5 w-100 p-4 py-5" style="background: url('https://lux-life.digital/wp-content/uploads/2019/09/turkish-hotel.jpg');">
    <h2 class="text-center mb-4">What Our Clients Say</h2>
    <div class="owl-carousel owl-theme">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '
                <div class="testimonial">
                    <img src="' . $row['image'] . '" alt="' . $row['name'] . '">
                    <h5>' . $row['name'] . '</h5>
                    <small>' . $row['designation'] . '</small>
                    <p>"' . $row['message'] . '"</p>
                </div>';
            }
        } else {
            echo '<p class="text-center">No testimonials found.</p>';
        }
        ?>
    </div>
</div>

<!-- jQuery & Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Initialize Owl Carousel -->
<script>
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 3000, // 3 seconds
        autoplayHoverPause: true,
        responsive:{
            0:{ items: 1 },
            600:{ items: 2 },
            1000:{ items: 3 }
        }
    });
});
</script>

</body>
</html>

<?php
$conn->close();
?>
