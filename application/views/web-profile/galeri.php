<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="section-title" data-aos="zoom-in">
            <h2>Galeri</h2>
            <h3>Check our <span>Galeri</span></h3>
            <p>
                Ut possimus qui ut temporibus culpa velit eveniet modi omnis est
                adipisci expedita at voluptas atque vitae autem.
            </p>
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
            $no = 1;
            foreach (array_reverse($galeris) as $g) {
            ?>
                <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <a href="<?= base_url() ?>/assets/picture/<?= $g->foto ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= $g->foto ?>">
                                <img src="<?= base_url() ?>/assets/picture/<?= $g->foto ?>" class="img-fluid" style="height: 100%;" />
                                <div class="social">
                                    <i class='bx bx-search-alt'></i>
                                    <a class="" href="<?= base_url('assets/picture/') . $g->foto ?>" download="<?= $g->foto ?>" title="download <?= $g->foto ?>">
                                        <i class='bx bxs-download'></i>
                                    </a>    
                                </div>
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
<!-- End Portfolio Section -->