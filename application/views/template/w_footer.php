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
<script src="<?= base_url('assets/'); ?>/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="<?= base_url('assets/'); ?>/vendor/aos/aos.js"></script>
<script src="<?= base_url('assets/'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/'); ?>/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url('assets/'); ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url('assets/'); ?>/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url('assets/'); ?>/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url('assets/'); ?>/js/main.js"></script>
</body>

</html>