<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
  <div class="container d-flex justify-content-between">

    <img src="<?= base_url('assets/img/logo/') . $logo['logo'] ?>" style="max-height: 50px;" />
    <div class="logo">
      <h1 class="text-light"><a href="<?= base_url('web_profile'); ?>"><?= $logo['nama_gereja'] ?></a></h1>
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
        <li><a class="nav-link scrollto" href="<?= base_url('web_renungan'); ?>">Renungan</a></li>
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