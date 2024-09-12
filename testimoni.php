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
                        <a href="project.php" class="nav-item nav-link">Project</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
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
                            <h1 class="text-white animated zoomIn">Testimonial</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">

                            </nav>
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

            <!-- Testimonial Start -->
            <div class="container-xxl bg-primary testimonial py-5 wow fadeInUp" data-wow-delay="0.1s"
                style="margin: 6rem 0;">
                <div class="container py-5 px-lg-5">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item bg-transparent border rounded text-white p-4">
                            <i class="fa fa-quote-left fa-2x mb-3"></i>
                            <p>Pelayanan memuaskan dan memecahkan masalah dengan solusi yang cepat dan tepat sesuai
                                tujuan perusahaan kami yang mementingkan kualitas diatas kuantitas.</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/properti1.png"
                                    style="width: 50px; height: 50px;">
                                <div class="ps-3">
                                    <h6 class="text-white mb-1">Ahmad Lutfi</h6>
                                    <small>Bagus Teknik</small>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item bg-transparent border rounded text-white p-4">
                            <i class="fa fa-quote-left fa-2x mb-3"></i>
                            <p>Projek lama kami terselesaikan dengan solusi yang memuaskan bagi perusahaan saya, mesin
                                antrian berjalan dengan mulus dan baik, pelayanan tidak diragukan</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/properti2.png"
                                    style="width: 50px; height: 50px;">
                                <div class="ps-3">
                                    <h6 class="text-white mb-1">Fajar Pangestu</h6>
                                    <small>Rekor Makmur Rental Truck</small>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item bg-transparent border rounded text-white p-4">
                            <i class="fa fa-quote-left fa-2x mb-3"></i>
                            <p>Website yang telah dibuat sangat berguna bagi ponpes kami dan terimakasih telah bekerja
                                sama dalam bidang pembelajaran dunia IT di pesantren.</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/properti10.png"
                                    style="width: 50px; height: 50px;">
                                <div class="ps-3">
                                    <h6 class="text-white mb-1">H. Gunawan Tri Murdi</h6>
                                    <small>Ponpes Al-Wafa</small>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item bg-transparent border rounded text-white p-4">
                            <i class="fa fa-quote-left fa-2x mb-3"></i>
                            <p>Perbaikan dan perawatan komputer dan aset perusahaan saya dibagian teknologi yang di
                                pegang oleh alfazza sangat baik, kami buktinya</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/Properti3.png"
                                    style="width: 50px; height: 50px;">
                                <div class="ps-3">
                                    <h6 class="text-white mb-1">Slamet Riyadi</h6>
                                    <small>M2 Network</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->


            <!-- Footer Start -->
            <div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5 px-lg-5">
                    <div class="row g-5">
                        <div class="col-md-6 col-lg-3">
                            <h5 class="text-white mb-4">Get In Touch</h5>
                            <p><i class="fa fa-map-marker-alt me-3"></i>Taman Kertamukti Residence Blok C30 No.2,
                                Sukajaya,Kec.Cibitung, Kabupaten Bekasi,Jawa Barat 17520, Indonesia</p>
                            <p><i class="fa fa-phone-alt me-3"></i>+6285648973921</p>
                            <p><i class="fa fa-envelope me-3"></i>info@alfazza.my.id</p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <h5 class="text-white mb-4">Popular Link</h5>
                            <a class="btn btn-link" href="">About Us</a>
                            <a class="btn btn-link" href="">Contact Us</a>
                            <a class="btn btn-link" href="">Privacy Policy</a>
                            <a class="btn btn-link" href="">Terms & Condition</a>
                            <a class="btn btn-link" href="">Career</a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <h5 class="text-white mb-4">Project Gallery</h5>
                            <div class="row g-2">
                                <div class="col-4">
                                    <img class="img-fluid" src="img/portfolio-1.jpg" alt="Image">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid" src="img/portfolio-2.jpg" alt="Image">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid" src="img/portfolio-3.jpg" alt="Image">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid" src="img/portfolio-4.jpg" alt="Image">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid" src="img/portfolio-5.jpg" alt="Image">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid" src="img/portfolio-6.jpg" alt="Image">
                                </div>
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
    <a href="https://wa.me/6285648973921" class="whatsapp-button" target="_blank">
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


</body>

</html>