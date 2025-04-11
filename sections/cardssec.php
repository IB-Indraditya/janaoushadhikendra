<!-- Include Bootstrap CSS & JS in <head> or before closing </body> -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->

<style>
    .carousel-item .col-6 img {
        height: 330px !important;
        object-fit: cover;
        border-radius: 6px;
        box-shadow: 0 0 5px dimgrey;
        filter: brightness(100%) saturate(120%) contrast(180%);
        /* transform: scale(1.4); */
    }
    .carousel-inner {
        height: auto !important;
    }
    #teamCarousel{
        margin-top: -8rem !important;
    }
</style>

<section class="py-3 bg-white">
    <div class="container text-center">
        <h2 class="text-uppercase text-dark mt-0">Meet Our Team</h2>
        <div id="teamCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <!-- <div class="col-6 col-md-3">
                            <img src="images/teamimage1.jpeg" class="d-block w-100" alt="Member 1">
                            <h5 class="mt-2">Anjali Sharma</h5>
                            <p class="text-muted small">Creative Director</p>
                        </div> -->
                        <div class="col-6 col-md-3 d-none d-md-block mx-auto">
                            <img src="images/teamimage7.jpeg" class="d-block w-100" alt="Member 1">
                            <h5 class="mt-2">Pinaki Roy</h5>
                            <p class="text-muted small">Pharmacist</p>
                        </div>
                        <div class="col-6 col-md-3 mx-auto">
                            <img src="images/teamimage2.jpeg" class="d-block w-100" alt="Member 2">
                            <h5 class="mt-2">Asha Ghosh</h5>
                            <p class="text-muted small">Executive</p>
                        </div>
                        <div class="col-6 col-md-3 d-none d-md-block mx-auto">
                            <img src="images/teamimage3.jpeg" class="d-block w-100" alt="Member 3">
                            <h5 class="mt-2">Manoj Sardar</h5>
                            <p class="text-muted small">Delivery Incharge</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-6 col-md-3 mx-auto">
                            <img src="images/teamimage5.jpeg" class="d-block w-100" alt="Member 5">
                            <h5 class="mt-2">Dipak Jha</h5>
                            <p class="text-muted small">Management Staff</p>
                        </div>
                        <div class="col-6 col-md-3 mx-auto">
                            <img src="images/teamimage6.jpeg" class="d-block w-100" alt="Member 6">
                            <h5 class="mt-2">Lakshmi Pramanik </h5>
                            <p class="text-muted small">Store Manager</p>
                        </div>
                        <div class="col-6 col-md-3 d-none d-md-block mx-auto">
                            <img src="images/teamimage4.jpeg" class="d-block w-100" alt="Member 4">
                            <h5 class="mt-2">Raja Mukherjee</h5>
                            <p class="text-muted small">General Manager</p>
                        </div>
                        <!-- <div class="col-6 col-md-3 d-none d-md-block">
                            <img src="images/teamimage1.jpeg" class="d-block w-100" alt="Member 2">
                            <h5 class="mt-2">Rohit Verma</h5>
                            <p class="text-muted small">Event Strategist</p>
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev d-none" type="button" data-bs-target="#teamCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next d-none" type="button" data-bs-target="#teamCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
            </button>
        </div>
    </div>
</section>

<!-- Auto-slide every 3 seconds -->
<script>
    const teamCarousel = document.querySelector('#teamCarousel');
    if (teamCarousel) {
        new bootstrap.Carousel(teamCarousel, {
            interval: 3000,
            ride: 'carousel',
            pause: false
        });
    }
</script>
