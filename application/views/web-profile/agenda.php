<!-- ======= Agenda Section ======= -->
<section id="agenda" class="services">
    <div class="container">
        <div class="section-title" data-aos="zoom-in">
            <h2>Agenda</h2>
            <h3>Agenda <span>GBI Jogosetran</span></h3>
            <p>
                Ut possimus qui ut temporibus culpa velit eveniet modi omnis est
                adipisci expedita at voluptas atque vitae autem.
            </p>
        </div>

        <div class="row">
            <?php
            $no = 0;
            foreach ($barangs as $b) {
            ?>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box" data-aos="zoom-in" style="border-radius: 15px;">
                        <!--<div class="icon">
                  <i class="bx bxl-dribbble"></i>
                </div>-->
                        <h4><a href="<?= site_url("Web_Agenda/view/$b->kode_warta") ?>"><?= $b->judul_warta ?></a></h4>
                        <p>
                            <?= substr($b->jenis_warta, 0, 60) ?>
                        </p>
                        <div class="section-title" data-aos="zoom-in" style="margin-top: 20px; margin-bottom: -50px;">
                            <a href="<?= site_url("Web_Agenda/view/$b->kode_warta") ?>">
                                <h2>Selengkapnya</h2>
                            </a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<!-- End Services Section -->