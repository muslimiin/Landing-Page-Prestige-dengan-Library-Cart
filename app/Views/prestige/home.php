<?= $this->extend('/template'); ?>

<?= $this->section('content'); ?>

    <div class="slide-one-item home-slider owl-carousel">
      
      <div class="site-blocks-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              
              <h1 class="mb-2">Welcome To Prestige</h1>
              <h2 class="caption">Showroom Mobil Sport</h2>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1 class="mb-2">New Experience</h1>
              <h2 class="caption">Enjoy With Us</h2>
            </div>
          </div>
        </div>
      </div> 

      <div class="site-blocks-cover overlay" style="background-image: url(images/hero_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1 class="mb-2">New Style Car</h1>
              <h2 class="caption">Your Car, Your Style</h2>
            </div>
          </div>
        </div>
      </div> 

    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Gallery</h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-6 col-lg-3">
            <a href="images/galeri/001.jpg" class="image-popup img-opacity">
              <?php echo img('images/galeri/001.jpg', false, ['alt' => 'Image', 'class' => 'img-fluid']); ?>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="images/galeri/002.jpg" class="image-popup img-opacity">
              <?php echo img('images/galeri/002.jpg', false, ['alt' => 'Image', 'class' => 'img-fluid']); ?>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="images/galeri/003.jpg" class="image-popup img-opacity">
              <?php echo img('images/galeri/003.jpg', false, ['alt' => 'Image', 'class' => 'img-fluid']); ?>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="images/galeri/004.jpg" class="image-popup img-opacity">
              <?php echo img('images/galeri/004.jpg', false, ['alt' => 'Image', 'class' => 'img-fluid']); ?>
            </a>
          </div>

          <div class="col-md-6 col-lg-3">
            <a href="images/galeri/005.jpeg" class="image-popup img-opacity">
              <?php echo img('images/galeri/005.jpeg', false, ['alt' => 'Image', 'class' => 'img-fluid']); ?>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="images/galeri/006.jpg" class="image-popup img-opacity">
              <?php echo img('images/galeri/006.jpg', false, ['alt' => 'Image', 'class' => 'img-fluid']); ?>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="images/galeri/007.jpg" class="image-popup img-opacity">
              <?php echo img('images/galeri/007.jpg', false, ['alt' => 'Image', 'class' => 'img-fluid']); ?>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="images/galeri/008.jpg" class="image-popup img-opacity">
              <?php echo img('images/galeri/008.jpg', false, ['alt' => 'Image', 'class' => 'img-fluid']); ?>
            </a>
          </div>

        </div>
      </div>
    </div>
    


    <div class="site-section block-15">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2>News</h2>
          </div>
        </div>
        <div class="nonloop-block-15 owl-carousel">

            <div class="media-with-text p-md-4">
              <div class="img-border-sm mb-4">
                <a>
                  <?php echo img('images/news/001.jpeg', false, ['alt' => '', 'class' => 'img-fluid']); ?>
                </a>
              </div>
              <h2 class="heading mb-0">Ketimbang Suara, Mobil Listrik Lebih Butuh Fitur-fitur Ini</h2>
              <p>mobil listrik dengan basis baterai nyaris tanpa suara. Maka itu muncul pendapat kalau mobil listrik perlu diberikan suara buatan, supaya saat dikendarai, keberadaannya bisa dirasakan oleh pengguna jalan lain.</p>
              <p><a class="btn btn-secondary" href="https://oto.detik.com/mobil/d-4691693/ketimbang-suara-mobil-listrik-lebih-butuh-fitur-fitur-ini?_ga=2.36878310.797501195.1578487458-892692704.1565705896" target="_blank" role="button">View details »</a></p>
            </div>
          
            <div class="media-with-text p-md-4">
              <div class="img-border-sm mb-4">
                <a>
                  <?php echo img('images/news/002.jpeg', false, ['alt' => '', 'class' => 'img-fluid']); ?>
                </a>
              </div>
              <h2 class="heading mb-0">Tesla Paling Murah Diperkenalkan di Indonesia</h2>
              <p>Prestige Motorcars kembali memperkenalkan line up kendaraan ramah lingkungannya. Kali mobil yang dibawa oleh importir umum tersebut adalah Tesla Model 3. Tesla Model 3 adalah varian paling terjangkau dari lini Tesla yang ada saat ini.</p>
              <p><a class="btn btn-secondary" href="https://oto.detik.com/mobil/d-4688121/tesla-paling-murah-diperkenalkan-di-indonesia?_ga=2.107803588.797501195.1578487458-892692704.1565705896" target="_blank" role="button">View details »</a></p>
            </div>
          
            <div class="media-with-text p-md-4">
              <div class="img-border-sm mb-4">
                <a>
                  <?php echo img('images/news/003.jpeg', false, ['alt' => '', 'class' => 'img-fluid']); ?>
                </a>
              </div>
              <h2 class="heading mb-0">Importir Umum Setuju Pajak Mobil Mewah Ditagih ke Rumah</h2>
              <p>Samsat Jakarta Barat bersama Badan Pendapatan dan Retribusi Daerah (BPRD) DKI Jakarta, mengecek alamat mobil mewah Porsche yang menunggak pajak. Importir umum yang natabene menjual mobil-mobil mewah di Indonesia pun setuju dengan langkah tersebut.</p>
              <p><a class="btn btn-secondary" href="https://oto.detik.com/mobil/d-4357443/importir-umum-setuju-pajak-mobil-mewah-ditagih-ke-rumah?_ga=2.107803588.797501195.1578487458-892692704.1565705896" target="_blank" role="button">View details »</a></p>
            </div>

            <div class="media-with-text p-md-4">
              <div class="img-border-sm mb-4">
                <a>
                  <?php echo img('images/news/004.jpeg', false, ['alt' => '', 'class' => 'img-fluid']); ?>
                </a>
              </div>
              <h2 class="heading mb-0">Pikap Listrik Tesla akan Dijual di Indonesia</h2>
              <p>Tidak hanya Agen Pemegang Merek yang mengatur rencana produk menghadapi elektrifikasi di Indonesia. Importir umum seperti Prestige Image Motorcars pun sudah merencanakan agenda peluncuran mobil listrik Tesla di Indonesia beberapa tahun ke depan.</p>
              <p><a class="btn btn-secondary" href="https://oto.detik.com/mobil/d-4822485/pikap-listrik-tesla-akan-dijual-di-indonesia?_ga=2.62640234.797501195.1578487458-892692704.1565705896" target="_blank" role="button">View details »</a></p>
            </div>
          
            <div class="media-with-text p-md-4">
              <div class="img-border-sm mb-4">
                <a>
                  <?php echo img('images/news/005.jpeg', false, ['alt' => '', 'class' => 'img-fluid']); ?>
                </a>
              </div>
              <h2 class="heading mb-0">Beli Mobil Mewah Sekarang Tidak Ada STNK, Kok Bisa?</h2>
              <p>Penerbitan Sertifikasi Uji Kendaraan (SUT) dan Tanda Pendaftaran Tipe (TPT) dibatasi pemerintah untuk mengurangi defisit dalam neraca perdagangan. Kebijakan ini berimbas pada menurunnya transaksi jual beli mobil mewah di Indonesia.</p>
              <p><a class="btn btn-secondary" href="https://oto.detik.com/mobil/d-4319622/beli-mobil-mewah-sekarang-tidak-ada-stnk-kok-bisa?_ga=2.107803588.797501195.1578487458-892692704.1565705896" target="_blank" role="button">View details »</a></p>
            </div>
          
            <div class="media-with-text p-md-4">
              <div class="img-border-sm mb-4">
                <a>
                  <?php echo img('images/news/006.jpeg', false, ['alt' => '', 'class' => 'img-fluid']); ?>
                </a>
              </div>
              <h2 class="heading mb-0">Lagi, Banteng Italia Tanpa Atap Mendarat di Jakarta</h2>
              <p>Mobil-mobil mewah masih ada peminatnya. Mungkin itulah yang membuat importir umum seperti Prestige Image Motorcars tergiur untuk mendatangkan mobil mewah berbanderol harga miliaran rupiah ke Tanah Air.</p>
              <p><a class="btn btn-secondary" href="https://oto.detik.com/mobil/d-4179010/lagi-banteng-italia-tanpa-atap-mendarat-di-jakarta?_ga=2.7643124.797501195.1578487458-892692704.1565705896" target="_blank" role="button">View details »</a></p>
            </div>
            
        </div>

      </div>
    </div>

<?= $this->endSection(); ?>