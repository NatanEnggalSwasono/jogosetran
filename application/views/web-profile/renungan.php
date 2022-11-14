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
                            <a href="<?= base_url("Web_Renungan/view/$r->id_renungan"); ?>"><img src="<?= base_url("/gambar/renungan/$r->gambar_renungan") ?> " class="img-fluid"></a>
                        </div>
                        <div class="member-info">
                            <a href="<?= base_url("Web_Renungan/view/$r->id_renungan"); ?>">
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