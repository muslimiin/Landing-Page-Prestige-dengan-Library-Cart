<?= $this->extend('/template'); ?>

<?= $this->section('content'); ?>
    
    <div class="site-section bg-light">
      <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">About</h2>
          </div>
        </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
            
              <div class="img-border">
                <iframe width="560" height="315" src="<?= base_url('https://www.youtube.com/embed/Ike5ja27V_w')?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
          </div>
          <div class="col-md-5 ml-auto">
            <div class="section-heading text-left">
              <h2 class="mb-5">Tentang Kami</h2>
            </div>
            <p class="mb-4">Prestige Merupakan Showroom Mobil Sport di Indonesia yang saat ini ramai menjadi perbincangan masyarakat..</p>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Location</h2>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
            
              <div class="img-border">
                <iframe src="<?= base_url('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.111597238187!2d106.7843826141365!3d-6.115676261675461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1da48a3cc913%3A0x289ca0a4f26e0fad!2sPrestige%20Image%20Motorcars!5e0!3m2!1sen!2sid!4v1578491424591!5m2!1sen!2sid')?>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </div>
          </div>
          <div class="col-md-5 ml-auto">
            <div id="info" class="info">
              <div class="col-sm-12 text-center">
                <h2>
                    Informasi Tambahan
                    <hr>
                    <br>
                </h2>
                <p>
                    Kerjasama, Promosi, Kritik Dan Saran Hubungi <br> <br>
                    Email : muslimink96@gmail.com <br> <br>
                    No-Hp : +62 823-2622-5295 <br> <br>
                </p>
                <br>
              </div>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section block-14 bg-light">

      <div class="container">
        
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2>Team</h2>
          </div>
        </div>

        <div class="nonloop-block-14 owl-carousel">
          
          <div class="p-4">
            <div class="d-flex block-testimony">
              <div class="person mr-3">
                <?php echo img('images/person_1.jpg', false, ['alt' => 'Image', 'class' => 'img-fluid rounded']); ?>
              </div>
              <div>
                <h2 class="h5">Muslimin</h2>
                <blockquote>&ldquo;Web Developer&rdquo;</blockquote>
              </div>
            </div>
          </div>
          <div class="p-4">
            <div class="d-flex block-testimony">
              <div class="person mr-3">
                <?php echo img('images/person_1.jpg', false, ['alt' => 'Image', 'class' => 'img-fluid rounded']); ?>
              </div>
              <div>
                <h2 class="h5">Muslimin</h2>
                <blockquote>&ldquo;Security Tester&rdquo;</blockquote>
              </div>
            </div>
          </div>
          <div class="p-4">
            <div class="d-flex block-testimony">
              <div class="person mr-3">
                <?php echo img('images/person_1.jpg', false, ['alt' => 'Image', 'class' => 'img-fluid rounded']); ?>
              </div>
              <div>
                <h2 class="h5">Muslimin</h2>
                <blockquote>&ldquo;Database Analyst&rdquo;</blockquote>
              </div>
            </div>
          </div>
          <div class="p-4">
            <div class="d-flex block-testimony">
              <div class="person mr-3">
                <?php echo img('images/person_1.jpg', false, ['alt' => 'Image', 'class' => 'img-fluid rounded']); ?>
              </div>
              <div>
                <h2 class="h5">Muslimin</h2>
                <blockquote>&ldquo;System Analyst&rdquo;</blockquote>
              </div>
            </div>
          </div>

        </div>

      </div>
      
    </div>

<?= $this->endSection(); ?>