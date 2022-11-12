<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-8">
                <div class="portfolio-info">
                    <h3><?= $informasi->judul_informasi ?></h3>
                    <ul>
                        <li>
                            <h4><?= $informasi->tanggal_informasi ?></h4>
                        </li>
                        <li>
                            <p>
                                <?= $informasi->isi_informasi ?>
                            </p>
                        </li>
                    </ul>
                    <p> Download Informasi disini
                        <a class="" href="<?= base_url('assets/file/') . $informasi->file ?>" download="<?= $informasi->file ?>">
                            <?= $informasi->file ?>
                        </a>            
                    </p>
                </div>
            </div>

            <div class="col-lg-4">

            </div>

        </div>

    </div>
</section><!-- End Portfolio Details Section -->