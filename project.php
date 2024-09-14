<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Alfazza Solusi Indonesia</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Font Google untuk Typography premium -->
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />



    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="floatingWA.css" rel="stylesheet">

</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <img src="img/logo1-removebg-preview(1).png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link ">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link">Service</a>
                        <a href="project.php" class="nav-item nav-link active">Project</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="team.php" class="dropdown-item">Our Team</a>
                                <a href="testimoni.php" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                    <butaton type="button" class="btn text-secondary ms-3" data-bs-toggle="modal"
                        data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated zoomIn">Project</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3"
                                placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->

        <!-- Portfolio Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Projects</h6>
                    <h2 class="mt-2">Recently Launched Projects</h2>
                </div>
                <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-12 text-center">
                        <ul class="list-inline mb-5" id="portfolio-flters">
                            <li class="btn px-3 pe-4 active" data-filter="*">All</li>
                            <li class="btn px-3 pe-4" data-filter=".first">Projek Website</li>
                            <li class="btn px-3 pe-4" data-filter=".second">Development Hardware Instalation</li>
                        </ul>
                    </div>
                </div>
                <div class="row g-4 portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.1s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/projek2.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="img/projek2.jpg" data-lightbox="portfolio"><i
                                        class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="https://cvperwira.com/">web company
                                        Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.3s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/projek3.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="img/projek3.jpg" data-lightbox="portfolio"><i
                                        class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="https://smkyp17blitar.sch.id/">Web
                                        Sekolah Smk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.6s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/projek4.png" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="img/projek4.png" data-lightbox="portfolio"><i
                                        class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0"
                                        href="https://www.saranasolusicepat.com">Website Ekspedisi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.1s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/sistem antrian.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="img/sistem antrian.jpg" data-lightbox="portfolio"><i
                                        class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Hardware
                                        Instalation</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Sistem Antrian</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.3s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/penambahan fitur cetak label.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="img/penambahan fitur cetak label.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Hardware
                                        Instalation</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Penambahan Fitur Cetak Label</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.6s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="img/program kasir.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="img/program kasir.jpg" data-lightbox="portfolio"><i
                                        class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Hardware
                                        Instalation</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Sistem program Kasir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio End -->



        <!-- Vendor Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">Klien Kami</h6>
                <h2 class="mt-2">Klien Base Projek Dengan Kami</h2>
                <div class="container py-5 mb-5">
                    <div class="bg-blue">
                        <div class="owl-carousel vendor-carousel">
                            <img src="img/properti1.png" alt="">
                            <img src="img/properti2.png" alt="">
                            <img src="img/Properti3.png" alt="">
                            <img src="img/properti4.png" alt="">
                            <img src="img/properti5.png" alt="">
                            <img src="img/properti6.png" alt="">
                            <img src="img/properti7.png" alt="">
                            <img src="img/properti8.png" alt="">
                            <img src="img/properti9.png" alt="">
                            <img src="img/properti10.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vendor End -->


            <!-- Footer Start -->
            <div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5 px-lg-5">
                    <div class="row g-5">
                        <div class="col-md-6 col-lg-3">
                            <h5 class="text-white mb-4">Get In Touch</h5>
                            <p><i class="fa fa-map-marker-alt me-3"></i>Taman Kertamukti Residence Blok C30 No.2,
                                Sukajaya,Kec.Cibitung, Kabupaten Bekasi,Jawa Barat 17520, Indonesia</p>
                            <p><i class="fa fa-phone-alt me-3"></i>+62 851-7997-5120</p>
                            <p><i class="fa fa-envelope me-3"></i>info@alfazza.my.id</p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-social"
                                    href="https://www.facebook.com/profile.php?id=100064542862628"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-light btn-social"
                                    href="https://www.instagram.com/alfazzatech?igsh=MTAzcGFnMTJxYjV0Zg=="><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <h5 class="text-white mb-4">Popular Link</h5>
                            <a class="btn btn-link" href="about.php">About Us</a>
                            <a class="btn btn-link" href="contact,php">Contact Us</a>
                            <a class="btn btn-link" href="">Privacy Policy</a>
                            <a class="btn btn-link" href="">Terms & Condition</a>
                            <a class="btn btn-link" href="">Career</a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <h5 class="text-white mb-4">Lokasi Kami</h5>
                            <div class="row g-2">
                                <!-- map start -->
                                <!-- HTML: Google Maps Iframe -->
                                <div class="map-container">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2295819551196!2d107.1232742!3d-6.2334378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698da8f960a9af%3A0x9d523c557d71c8ca!2sPT%20Alfazza%20Solusi%20Indonesia!5e0!3m2!1sid!2sid!4v1726208900058!5m2!1sid!2sid"
                                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>

                                <!-- map end -->
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <h5 class="text-white mb-4">Newsletter</h5>
                            <p>Bergabung Bersama kami untuk informasi terkini dan detailnya</p>
                            <form action="newsletter.php" method="post">
                                <div class="position-relative w-100 mt-3">
                                    <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="email"
                                        name="email" placeholder="Your Email" style="height: 48px;" required>
                                    <button type="submit"
                                        class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2">
                                        <i class="fa fa-paper-plane text-primary fs-4"></i>
                                    </button>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="container px-lg-5">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; <a class="border-bottom" href="#">Alfazza solusi Indonesia</a>, All Right
                                Reserved.
                                Designed By <a class="border-bottom"
                                    href="https://petanimilenial.org">Petanimilenial</a>
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <div class="footer-menu">
                                    <a href="index.php">Home</a>
                                    <a href="cookies.php">Cookies</a>
                                    <a href="faqp.php">FQAs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->

            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i
                    class="bi bi-arrow-up"></i></a>



            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="lib/wow/wow.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>
            <script src="lib/isotope/isotope.pkgd.min.js"></script>
            <script src="lib/lightbox/js/lightbox.min.js"></script>

            <!-- Template Javascript -->
            <script src="js/main.js"></script>
</body>

</html>


<!-- Tombol Melayang -->
<div class="floating-buttons">
    <a href="https://wa.me/6285179975120" class="whatsapp-button" target="_blank">
        <img src="img/logo_WA.svg" alt="WhatsApp">
    </a>
    <a href="https://web.facebook.com/people/PT-Alfazza-Solusi-Indonesia/100064542862628/" class="facebook-button"
        target="_blank">
        <img src="img/facebook.svg" alt="Facebook">
    </a>
</div>



<!-- 
    - custom js link
  -->
<script src="./assets/js/script.js"></script>

<!-- 
    - ionicon
  -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<!-- Tambahkan di bagian footer -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


<!-- Tambahkan di bagian vendor -->
<script>
    $(document).ready(function() {
        $(".vendor-carousel").owlCarousel({
            loop: true,
            margin: 30, // Tambahkan ruang antara gambar
            nav: true,
            navText: ['<i class="fas fa-chevron-left"></i>',
                '<i class="fas fa-chevron-right"></i>'
            ], // Ikon panah modern
            responsive: {
                0: {
                    items: 1 // 1 gambar di ponsel
                },
                600: {
                    items: 3 // 3 gambar di tablet
                },
                1000: {
                    items: 5 // 5 gambar di desktop
                }
            },
            autoplay: true, // Aktifkan autoplay
            autoplayTimeout: 3000, // Gambar bergeser setiap 3 detik
            autoplayHoverPause: true,
            smartSpeed: 800, // Peralihan lebih halus
        });
    });
</script>




</body>

</html>