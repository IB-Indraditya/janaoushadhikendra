<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbnew";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT video_path FROM videogallery";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Gallery</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .swiper-slide {
            text-align: center;
        }
        .swiper-slide video,
        .swiper-slide .external-link {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 12px;
            transition: transform 0.4s;
            cursor: pointer;
        }
        .swiper-slide:hover video,
        .swiper-slide:hover .external-link {
            transform: scale(1.03);
        }
        .external-link {
            background: #eee url('https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg') center no-repeat;
            background-size: 60px 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #333;
            font-size: 18px;
            font-weight: 500;
            text-decoration: none;
        }
        .swiper-button-next,
        .swiper-button-prev {
            color: #000;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <h2 class="text-center mb-5">Video Gallery</h2>

    <!-- Swiper Container -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <?php
            while ($row = $result->fetch_assoc()) {
                $videoPath = $row['video_path'];
                $ext = pathinfo(parse_url($videoPath, PHP_URL_PATH), PATHINFO_EXTENSION);

                echo '<div class="swiper-slide">';
                if (in_array(strtolower($ext), ['mp4', 'webm', 'ogg'])) {
                    echo "<video src=\"$videoPath\" muted controls></video>";
                } else {
                    echo "<a class='external-link' href=\"$videoPath\" target=\"_blank\">Watch Video</a>";
                }
                echo '</div>';
            }
            ?>
        </div>
        <!-- Swiper Controls -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 20,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            768: { slidesPerView: 2 },
            992: { slidesPerView: 3 },
            1200: { slidesPerView: 4 }
        }
    });
</script>

</body>
</html>

<?php $conn->close(); ?>
