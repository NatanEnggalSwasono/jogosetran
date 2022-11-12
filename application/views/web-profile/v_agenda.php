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
                    <img src="<?= base_url('gambar/agenda/') . $agenda->gambar; ?>">
                    <ul>
                        <li>
                            <h2><strong><?= $agenda->judul_warta ?></strong></h2>
                        </li>
                        <li>
                            <p><?= $agenda->jenis_warta ?></p>
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