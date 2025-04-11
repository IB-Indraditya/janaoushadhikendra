<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Responsive Footer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    footer a.text-white:hover {
      text-decoration: underline;
      color: #e0e0e0;
    }
    @media (max-width: 576px) {
      footer .img-fluid {
        max-width: 100px;
        margin: 5px auto;
      }
    }
  </style>
</head>
<body>

  <footer class="bg-primary text-white py-5 mt-5">
    <div class="container">
      <div class="row g-4">
        <!-- App Info -->
        <div class="col-md-3 text-center text-md-start">
          <img src="qr_code.png" alt="QR Code" class="img-fluid mb-2" width="120">
          <p class="mb-1">Locate Your Nearest PMBJP Kendra</p>
          <p class="fw-bold">DOWNLOAD NOW! Jan Aushadhi Sugam</p>
          <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-md-start gap-2">
            <img src="google_play.png" alt="Google Play" class="img-fluid" width="110">
            <img src="app_store.png" alt="App Store" class="img-fluid" width="110">
          </div>
        </div>

        <!-- Other Links -->
        <div class="col-md-3">
          <h5>Other Links</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Support</a></li>
            <li><a href="#" class="text-white">RTI</a></li>
            <li><a href="#" class="text-white">Contact Us</a></li>
            <li><a href="#" class="text-white">About Us</a></li>
            <li><a href="#" class="text-white">Testimonials</a></li>
            <li><a href="#" class="text-white">FAQs</a></li>
            <li><a href="#" class="text-white">Sitemap</a></li>
          </ul>
        </div>

        <!-- Help Links -->
        <div class="col-md-3">
          <h5>Need Help?</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Copyright</a></li>
            <li><a href="#" class="text-white">Hyperlink Policy</a></li>
            <li><a href="#" class="text-white">Privacy Policy</a></li>
            <li><a href="#" class="text-white">Disclaimer</a></li>
            <li><a href="#" class="text-white">Terms & Conditions</a></li>
            <li><a href="#" class="text-white">Archive</a></li>
          </ul>
        </div>

        <!-- Address -->
        <div class="col-md-3">
          <h5>Contact Info</h5>
          <p class="mb-1">B-500, B-Tower, 5th Floor,<br> Nauroji Nagar, World Trade Center, New Delhi - 110029</p>
          <p class="mb-1"><strong>Toll-Free:</strong> 1800-180-8080</p>
          <p class="mb-1"><strong>Email:</strong> complaints@janaushadhi.gov.in</p>
          <p class="mb-0"><strong>Timing:</strong> 9:30 AM – 6:00 PM (Mon–Fri)</p>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>
