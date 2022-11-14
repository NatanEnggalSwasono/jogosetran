<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title><?= $logo['nama_gereja'] ?></title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="<?= base_url('assets/img/logo/') . $logo['logo'] ?>" rel="icon" />
  <link href="<?= base_url('assets/img/logo/') . $logo['logo'] ?>" rel="icon" />

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

      <img src="<?= base_url('assets/img/logo/') . $logo['logo'] ?>" style="max-height: 50px;" />
      <div class="logo">
        <h1 class="text-light"><a href="Web_Profile"><?= $logo['nama_gereja'] ?></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#informasi">Informasi</a></li>
          <li><a class="nav-link scrollto" href="#agenda">Agenda</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Galeri</a></li>
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
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li><a class="nav-link scrollto" href="#footer">Jadwal Ibadah</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" style="background: url('<?= base_url('assets/img/tema/') . $tema['gambar'] ?>') top center;
  width: 100%;
  height: 90vh;
  background-size: cover;
  position: relative;">
    <div class="hero-container" data-aos="fade-up">
      <h1><?= $tema['judul'] ?></h1>
      <h2 style="margin-left: 100px; margin-right: 100px;">
        <?= $tema['tema'] ?>
      </h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="section-title" data-aos="zoom-in">
          <h4>Tentang Kami</h4>
        </div>
        <div class="row">
          <div class="col-xl-6 col-lg-6 d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <div class="box-heading" data-aos="fade-up">
              <h3><?= $tentang['nama_gereja'] ?></h3>
              <p>
                <?= $tentang['deskripsi_gereja'] ?>
              </p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class='bx bxs-binoculars'></i></div>
              <h4 class="title"><a href="">Visi</a></h4>
              <p class="description">
                <?= $tentang['visi'] ?>
              </p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Misi</a></h4>
              <p class="description">
                <?= $tentang['misi'] ?>
              </p>
            </div>
          </div>

          <div class="col-xl-6 col-lg-6 d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <div class="box-heading" data-aos="fade-up">
              <img src="<?= base_url('gambar/pendeta/') . $pendeta['foto_pendeta'] ?>" class="pendeta-img" />
              <h3><?= $pendeta['nama_pendeta'] ?></h3>
              <p>
                <?= $pendeta['background_pendeta'] ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Informasi Section ======= -->
    <section id="informasi" class="why-us">
      <div class="container">
        <div class="section-title" data-aos="zoom-in">
          <h2>Informasi</h2>
          <h3>Informasi <span>GBI Jogosetran</span></h3>

        </div>

        <div class="row">
          <?php
          $no = 0;
          foreach (array_reverse($informasi) as $i) {
          ?>
            <div class="col-lg-4  mt-4 mt-lg-0">
              <div class="box" data-aos="fade-up">
                <a href="<?= site_url("Web_Informasi/view/$i[id_informasi]") ?>"><span><?= $i['judul_informasi'] ?></span></a>
                <h4><?= $i['tanggal_informasi'] ?></h4>
                <p>
                  <?= substr($i['isi_informasi'], 0, 60) ?>
                </p>
              </div>
            </div>

          <?php
            if (++$no == 3) break;
          }
          ?>
        </div>
      </div>
      <div class="section-title" data-aos="zoom-in" style="margin-top: 20px; margin-bottom: -50px;">
        <a href="<?= base_url('Web_Informasi'); ?>">
          <h2>Selengkapnya</h2>
        </a>
      </div>
    </section>
    <!-- End informasi Section -->

    <!-- ======= Cta Section ======= -->
    <!--<section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">
          <div class="text-center">
            <h3>Call To Action</h3>
            <p>
              Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
              cupidatat non proident, sunt in culpa qui officia deserunt mollit
              anim id est laborum.
            </p>
            <a class="cta-btn" href="#">Call To Action</a>
          </div>
        </div>
      </section>-->
    <!-- End Cta Section -->

    <!-- ======= Agenda Section ======= -->
    <section id="agenda" class="services" style="background-color: #1b1e23;">
      <div class="container">
        <div class="section-title" data-aos="zoom-in" style="color: #fff;">
          <h2>Agenda</h2>
          <h3>Agenda <span>GBI Jogosetran</span></h3>
        </div>

        <div class="row">
          <style>
            .services .icon-box:hover h4 a,
            .services .icon-box:hover .icon i {
              color: #fff;
            }
          </style>
          <?php
          $no = 0;
          foreach (array_reverse($agenda) as $i) {
          ?>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="icon-box" data-aos="zoom-in" style="border-radius: 15px; background-color: #8fc04e;">
                <!--<div class="icon">
                  <i class="bx bxl-dribbble"></i>
                </div>-->
                <h4><a href="<?= site_url("Web_Agenda/view/$i[kode_warta]") ?>"><?= $i['judul_warta'] ?></a></h4>
                <p>
                  <?= substr($i['jenis_warta'], 0, 60) ?>
                </p>
              </div>
            </div>
          <?php
            if (++$no == 3) break;
          }
          ?>
        </div>
      </div>
      <div class="section-title" data-aos="zoom-in" style="margin-top: 20px; margin-bottom: -50px;">
        <a href="<?= base_url('Web_Agenda'); ?>">
          <h2>Selengkapnya</h2>
        </a>
      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="section-title" data-aos="zoom-in">
          <h2>Galeri</h2>
          <h3>Galeri <span>GBI Jogosetran</span></h3>

        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
          <style>
            .portfolio .member .member-img {
              position: relative;
              overflow: hidden;
            }

            .portfolio .member .social {
              position: absolute;
              left: 0;
              bottom: 30px;
              right: 0;
              opacity: 0;
              transition: ease-in-out 0.3s;
              display: flex;
              align-items: center;
              justify-content: center;
            }

            .portfolio .member .social a {
              transition: color 0.3s;
              color: #353535;
              margin: 0 3px;
              border-radius: 50px;
              width: 36px;
              height: 36px;
              display: inline-block;
              transition: ease-in-out 0.3s;
              color: #fff;
              display: inline-flex;
              align-items: center;
              justify-content: center;
            }

            .portfolio .member .social a:hover {
              background: #8fc04e;
            }

            .portfolio .member .social i {
              font-size: 18px;
              line-height: 0;
            }

            .portfolio .member:hover .social {
              opacity: 1;
              bottom: 55px;
            }
          </style>
          <?php
          $no = 0;
          foreach (array_reverse($galeri) as $g) {
          ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="member" data-aos="fade-up">
                <div class="member-img">
                  <a href="<?= base_url('assets/picture/') . $g['foto'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= $g['foto'] ?>">
                    <img src="<?= base_url('assets/picture/') . $g['foto'] ?>" class="img-fluid" style="height: 100%;" />
                    <div class="social">
                      <i class='bx bx-search-alt'></i>
                      <a class="" href="<?= base_url('assets/picture/') . $g['foto'] ?>" download="<?= $g['foto'] ?>" title="download <?= $g['foto'] ?>">
                        <i class='bx bxs-download'></i>
                      </a>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          <?php
            if (++$no == 3) break;
          }
          ?>
        </div>
        <div class="section-title" data-aos="zoom-in" style="margin-top: 20px; margin-bottom: -50px;">
          <a href="<?= base_url('Web_Galeri'); ?>">
            <h2>Selengkapnya</h2>
          </a>
        </div>
      </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team" style="background-color: #1b1e23;">
      <div class="container">
        <div class="section-title" data-aos="zoom-in" style="color: #fff;">
          <h2>Renungan</h2>
          <h3>Renungan Harian <span>GBI Jogosetran</span></h3>
        </div>

        <div class="row">
          <?php
          $no = 0;
          foreach (array_reverse($renungan) as $r) {
          ?>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up">
                <div class="member-img">
                  <a href="<?= base_url("Web_Renungan/view/$r[id_renungan]"); ?>"><img src="<?= base_url('/gambar/renungan/') . $r['gambar_renungan'] ?>" class="img-fluid" alt="" /></a>
                </div>
                <div class="member-info">
                  <a href="<?= base_url("Web_Renungan/view/$r[id_renungan]"); ?>">
                    <h4><?= $r['judul_renungan'] ?></h4>
                  </a>
                  <span><?= $r['tanggal_renungan'] ?></span>
                </div>
              </div>
            </div>
          <?php
            if (++$no == 4) break;
          }
          ?>
        </div>
      </div>
      <div class="section-title" data-aos="zoom-in" style="margin-top: 20px; margin-bottom: -50px;">
        <a href="<?= base_url('Web_Renungan'); ?>">
          <h2>Selengkapnya</h2>
        </a>
      </div>
    </section>
    <!-- End Team Section -->

    <!-- ======= Testimonials Section ======= -->
    <!--<section id="testimonials" class="testimonials">
      <div class="container">
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="" />
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec
                  porttitora entum suscipit rhoncus. Accusantium quam,
                  ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                  risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
            <!-- End testimonial item 

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="" />
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse
                  labore quem cillum quid cillum eram malis quorum velit fore
                  eram velit sunt aliqua noster fugiat irure amet legam anim
                  culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
            <!-- End testimonial item 

    <div class="swiper-slide">
      <div class="testimonial-item">
        <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="" />
        <h3>Jena Karlis</h3>
        <h4>Store Owner</h4>
        <p>
          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
          Enim nisi quem export duis labore cillum quae magna enim
          sint quorum nulla quem veniam duis minim tempor labore quem
          eram duis noster aute amet eram fore quis sint minim.
          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
        </p>
      </div>
    </div>
    <!-- End testimonial item 

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="" />
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa
                  multos export minim fugiat minim velit minim dolor enim duis
                  veniam ipsum anim magna sunt elit fore quem dolore labore
                  illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
            <!-- End testimonial item 

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="" />
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure
                  aliqua veniam tempor noster veniam enim culpa labore duis
                  sunt culpa nulla illum cillum fugiat legam esse veniam culpa
                  fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
            <!-- End testimonial item 
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>-->
    <!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title" data-aos="zoom-in">
          <h2>Kontak</h2>
          <h3>Check Detail <span>Kontak</span> Kami</h3>

        </div>

        <div>
          <iframe style="border: 0; width: 100%; height: 270px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.78742495546!2d110.63309001472534!3d-7.7059461944451995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7ea096618cf99c88!2sIndonesia%20Baptist%20Church%2C%20Jogosetran!5e0!3m2!1sen!2sid!4v1665605656669!5m2!1sen!2sid" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">
          <div class="col-lg" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p><?= $kontak['alamat'] ?></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><?= $kontak['email'] ?></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telepon:</h4>
                <p><?= $kontak['no_telepon'] ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row justify-content-center">
          <h3 style="margin-top: -20px;">GBI Jogosetran</h3>
          <div class="col-lg-4" style="padding-top: 35px;">
            <h4>Jadwal Ibadah</h4>
            <div class="container footer-bottom clearfix">
              <div class="jadwal-ibadah" style="text-align: left;">
                <p>
                  <?php
                  $no = 1;
                  foreach ($jadwal as $r) {
                  ?>
                    <li>
                      <?= $r['tanggal'] ?></span><span> pukul <?= $r['waktu'] ?></span> - <?= $r['nama_ibadah'] ?><span>
                    </li>
                  <?php
                  }
                  ?>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4" style="padding-top: 35px;">
            <h4>Kontak</h4>
            <div class="container footer-bottom clearfix">
              <div class="social-links" style="text-align: left;">
                <p><i class='bx bxs-map'></i><span style="font-weight: bolder;"> Alamat:</span></p>
                <?= $kontak['alamat'] ?>
                <p><i class='bx bx-envelope'></i><span style="font-weight: bolder;"> Email:</span></p>
                <?= $kontak['email'] ?>
                <p><i class='bx bx-mobile-alt'></i><span style="font-weight: bolder;"> Telepon:</span></p>
                <?= $kontak['no_telepon'] ?>
              </div>
            </div>
          </div>
          <div class="col-lg-4" style="padding-top: 35px;">
            <h4>Social Media</h4>
            <div class="container footer-bottom clearfix">
              <div class=" social-links">
                <a href="<?= $social_media['twitter'] ?>" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="<?= $social_media['facebook'] ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="<?= $social_media['instagram'] ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="<?= $social_media['website'] ?>" class="google-plus"><i class="bx bx-world"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        Copyright &copy; <strong><span>GBI Jogosetran</span></strong> <?= date('Y'); ?>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/ -->
        Developed by KELOMPOK PPL 14 <a href="https://ukrim.ac.id/">UKRIM UNIVERSITY</a>
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