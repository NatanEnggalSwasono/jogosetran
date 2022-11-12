<!-- ======= Jadwal ======= -->
<section id="jadwal">
    <div class="container">
        <div class="section-title" data-aos="zoom-in">
            <h3>Jadwal Ibadah <span>GBI Jogosetran</span></h3>
            <p>
                Ut possimus qui ut temporibus culpa velit eveniet modi omnis est
                adipisci expedita at voluptas atque vitae autem.
            </p>
        </div>
        <div class="col-lg-7">
            <div class="portfolio-info" style="padding-top: 20px;" data-aos="zoom-in">
                <?php
                $no = 1;
                foreach ($jadwals as $r) {
                ?>
                    <h4>
                        <?= $r->nama_ibadah ?>, <span style="color: #8fc04e;"><?= $r->tanggal ?></span><span style="color: #8fc04e;"> - <?= $r->waktu ?></span>
                    </h4>
                    <p>
                        <?= $r->keterangan ?>
                    </p>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>

<!-- End of jadwal -->