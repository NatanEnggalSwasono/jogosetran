<!-- ======= Informasi Section ======= -->
<section id="informasi" class="why-us">
  <div class="container">
    <div class="section-title" data-aos="zoom-in">
      <h2>Informasi</h2>
      <h3>Apa Informasi <span>GBI Jogosetran</span>?</h3>
      <p>
        Ut possimus qui ut temporibus culpa velit eveniet modi omnis est
        adipisci expedita at voluptas atque vitae autem.
      </p>
    </div>

    <div class="row">
      <?php
      $no = 0;
      foreach (array_reverse($informasis) as $i) {
      ?>
        <div class="col-lg-4 mt-4 mt-lg-4">
          <div class="box" data-aos="fade-up">
            <span><?= $i->judul_informasi ?></span>
            <h4><?= $i->tanggal_informasi ?></h4>
            <p>
              <?= substr($i->isi_informasi, 0, 60) ?>
            </p>
            <div class="section-title" data-aos="zoom-in" style="margin-top: 20px; margin-bottom: -50px;">
              <a href="<?= site_url("Web_Informasi/view/$i->id_informasi") ?>">
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
<!-- End informasi Section -->