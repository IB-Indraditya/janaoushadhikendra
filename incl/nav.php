<?php
 ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PMBI Header</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    .top-bar {
      background-color: #1e5a9b;
      color: white;
      font-size: 14px;
      padding: 5px 0;
    }

    .main-header {
      background-color: white;
      padding: 10px 0;
    }

    .main-header img {
      max-height: 80px;
    }

    .navbar-custom {
      background-color: #0d4c92;
    }

    .navbar-custom .nav-link,
    .navbar-custom .navbar-brand {
      color: white;
    }
    .nav-link:hover{
        color: gold !important;
    }

    .navbar-custom .nav-link:hover {
      text-decoration: underline;
    }

    .apply-btn {
      background-color: #f37021;
      color: white;
    }

    .search-btn {
      background-color: #f37021;
      border: none;
      color: white;
      padding: 6px 12px;
      border-radius: 5px;
    }

    .navbar-toggler {
      color: white !important;
      border-color: rgba(255, 255, 255, 0.4);
      text-shadow: 0 0 10px white !important;
    }

    .navbar-toggler-icon {
      color: white !important;
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%28255,255,255,1%29' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }
    .carousel-inner{
        margin-top: 12rem;
        height: 760px !important;
    }
    h5{
        /* margin-top: -400px !important; */
    }
    a{
      text-decoration: none !important;
    }
    .collapsed{
        max-height: 5px;
        transition: 1s;
    }
    .showed{
        max-height: 600px;
        transition: .6s;
    }
    .carousel-caption{
        display: none !important;
    }
    .main-header{
        top: 40px !important;
    }
    .navbar{
        top: 140px !important;
    }
    .dropdowns{
        position: absolute;
        display: none;
        background: #0d4c92;
        padding: 10px 5px;
        /* width: 300px; */
        /* overflow: hidden; */
        border-radius: 0 !important;
        box-shadow: 0 0 5px white;
    }
    @media (max-width: 992px){
        .collapsed{
            overflow: hidden;
        }
        .dropdowns{
            border: none !important;
            position: relative;
            box-shadow: none !important;
        }
        .dropdowns p:hover, .dropdowns section:hover{
            color: gold !important;
            background: transparent !important;
            cursor: pointer;
        }
        .subdropdown{
            border: none !important;
            position: relative !important;
            background: #0d4c92;
            transform: none !important;
            /* border-radius: 4px; */
            padding: 10px 5px;
            display: none;
            box-shadow: none !important;
        }
    }
    .nav-item:hover .dropdowns{
        display: block !important;
        /* border: solid 1px white; */
    }
    .dropdowns p, .dropdowns section{
        margin: 0;
        padding: 5px;
        transition: .4s;
        color: gainsboro;
        /* border-radius: 2px; */
        text-transform: capitalize;
        /* box-shadow: 0 0 5px white; */
    }
    .dropdowns p:hover, .dropdowns section:hover{
        color: #0d4c92;
        background: white;
        cursor: pointer;
    }
    .subdropdown{
        /* border: solid 1px white; */
        position: absolute;
        background: #0d4c92;
        transform: translate(330px, -50px);
        /* border-radius: 4px; */
        padding: 10px 5px;
        display: none;
        box-shadow: 0 0 5px white;
    }
    .dropdowns section:hover .subdropdown{
        display: block;
    }
    .
  </style>
</head>
<body>

  <!-- Top Bar -->
  <div class="top-bar fixed-top">
    <div class="container d-flex flex-wrap justify-content-between align-items-center">
      <div>PMBJK-04782</div>
      <div>Tollfree-1800-180-8080</div>
      <div>complaints@janaushadhi.gov.in</div>
      <button class="btn btn-outline-light btn-sm">Our Service</button>
    </div>
  </div>

  <!-- Main Header -->
  <div class="main-header fixed-top">
    <div class="container d-flex flex-wrap justify-content-between align-items-center">
      <div class="d-flex align-items-center mb-0 mb-md-0">
        <p style="font-size: 1.5rem; border-bottom: solid .8rem #0d4c92; border-bottom-right-radius: 1rem; border-bottom-left-radius: 1rem; font-weight: bold;">দম দম পার্ক জন ঔষধি পরিয়োজনা</p>
      </div>
      <div class="d-flex align-items-center gap-2 mb-2 mb-md-0">
        <img src="https://upload.wikimedia.org/wikipedia/commons/8/84/Government_of_India_logo.svg" alt="Govt of India" class="me-2" />
        <img src="https://www.gyaanhisafalta.com/wp-content/uploads/2022/08/1660226605175.png" alt="Azadi" />
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjwnUE_7NI2OMgdplkLNtYRSmctETBMTzJLQ&s" alt="Swachh Bharat" />
      </div>
      <div>
        <img src="https://www.presentations.gov.in/wp-content/uploads/2021/01/pradhan-mantri-jan-aushadhi-logo-01.jpg" alt="PMBI Logo" />
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuXiHyNxja2qaMwsc0nOMELQuymSB-HdvuxQ&s" alt="PMBI Logo" />
      </div>
    </div>
  </div>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html"><i class="fa-solid fa-house fa-xl text-white"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapsed navbar-collapse " id="navbarNav">
        <ul class="navbar-nav me-auto my-0 mb-lg-0 ">
          <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
          <!-- <li class="nav-item"><a class="nav-link" href="#">Governance</a></li> -->
          <li class="nav-item"><a class="nav-link" href="#">PMBJP</a>
            <div class='dropdowns rounded-0'>
                <a href="p1.php"><p>Pradhanmantri Bharatia Janaoushadi Kendra</p></a>
                <section>Prithak pharmacy
                    <div class='subdropdown'>
                        <p>pet medicine</p>
                        <p>cancer medicine</p>
                        <p>only single molecule generic medicine</p>
                    </div>
                </section>
                <a href="d1.php"><p>Dr. jugol charan saha memorial clinic</p></a>
                <a href="d2.php"><p>Dr. jugol charan saha memorial pathology</p></a>
                <a href="j1.php"><p>Jana oushadhi bridge club</p></a>
                <a href="r1.php"><p>Radhakrishna jana oushadhi tohobil</p></a>
                <a href="j2.php"><p>Jana oushadhi Kendra owners welfare society</p></a>
            </div>
        </li>
          <li class="nav-item"><a class="nav-link" href="#">Testimonial</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Team</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Support</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Media</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
          <!-- <li class="nav-item"><a class="nav-link" href="#">Recruitment</a></li> -->
        </ul>
        <div class="d-flex gap-2">
          <a class="btn apply-btn bg-warning">APPLY FOR KENDRA</a>
          <!-- <button class="search-btn">🔍</button> -->
        </div>
      </div>
    </div>
  </nav>

  <!-- Bootstrap Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.querySelector('.navbar-toggler').addEventListener('click', () => {
        document.querySelector('.collapsed').classList.toggle('showed');
    });

  </script>
</body>
</html>
