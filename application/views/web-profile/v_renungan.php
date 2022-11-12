<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-8">
                <div class="portfolio-info">
                    <style>
                        .portfolio-details .portfolio-info img {
                            list-style: none;
                            padding: 0;
                            width: 100%;
                            height: auto;
                            margin-bottom: 20px;
                        }
                    </style>
                    <img src="<?= base_url('gambar/renungan/') . $renungan->gambar_renungan; ?>">
                    <ul>
                        <li>
                            <h2><strong><?= $renungan->judul_renungan ?></strong></h2>
                        </li>
                        <li>
                            <h4 style="padding-bottom: 20px; border-bottom: 1px solid #eee;">
                                <?= $renungan->tanggal_renungan ?>
                            </h4>
                        </li>
                        <li>
                            <p>
                                <?= $renungan->isi_renungan ?>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
            </div>

        </div>

    </div>
</section><!-- End Portfolio Details Section -->

</main><!-- End #main -->