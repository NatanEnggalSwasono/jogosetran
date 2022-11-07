<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title><?= $title; ?></title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Remember - v4.9.0
  * Template URL: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Top Bar ======= -->
    <!-- <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>-->

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between">
            <img src="<?= base_url('/assets/img/logo/LOGO GEREJA BAPTIS KLATEN1.png') ?>" style="max-height: 50px;" />
            <div class="logo">
                <h1 class="text-light"><a href="web_profile">GBI Jogosetran</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="<?= base_url('web_profile'); ?>">Home</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('web_profile'); ?>">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('web_informasi'); ?>">Informasi</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('web_agenda'); ?>">Agenda</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('web_galeri'); ?>">Galeri</a></li>
                    <li><a class="nav-link scrollto" href="#team">Renungan</a></li>
                    <!--<li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>-->
                    <li><a class="nav-link scrollto" href="<?= base_url('web_profile'); ?>">Kontak</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('web_jadwal'); ?>">Jadwal Ibadah</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">
            <div class="section-title" data-aos="zoom-in">
                <h2>Renungan</h2>
                <h3>Renungan Harian <span>GBI Jogosetran</span></h3>
                <p>
                    Ut possimus qui ut temporibus culpa velit eveniet modi omnis est
                    adipisci expedita at voluptas atque vitae autem.
                </p>
            </div>

            <div class="row">
                <?php
                $no = 1;
                foreach ($renungans as $r) {
                ?>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up">
                            <div class="member-img">
                                <a href="<?= base_url("web_renungan/view/$r->id_renungan"); ?>"><img src="<?= base_url("/gambar/renungan/$r->gambar_renungan") ?> " class="img-fluid"></a>
                            </div>
                            <div class="member-info">
                                <a href="<?= base_url("web_renungan/view/$r->id_renungan"); ?>">
                                    <h4><?= $r->judul_renungan ?></h4>
                                </a>
                                <span><?= $r->tanggal_renungan ?></span>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!-- End Team Section -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h3>GBI Jogosetran</h3>
                        <p>
                            Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni
                            eligendi fuga maxime saepe commodi placeat.
                        </p>
                    </div>
                </div>

                <div class="social-links">

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>GBI Jogosetran</span></strong>. <?= date('Y'); ?>
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/ -->
                Designed by <a href="https://ukrim.ac.id/">Ukrim</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>