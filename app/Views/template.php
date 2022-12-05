<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?= $title;?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('fonts/icomoon/style.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/magnific-popup.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/jquery-ui.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/owl.carousel.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/owl.theme.default.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap-datepicker.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/animate.css');?>">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    
    
    <link rel="stylesheet" href="<?php echo base_url('fonts/flaticon/font/flaticon.css');?>">
  
    <link rel="stylesheet" href="<?php echo base_url('css/aos.css');?>">

    <link rel="stylesheet" href="<?php echo base_url('css/style1.css');?>">
    
  </head>
  <body>
  
  <div class="site-wrap">

    
    <?php echo $this->include('prestige/navbar'); ?>

      <?= $this->renderSection('content'); ?>

    <footer class="site-footer">
      <div class="container">

        <div class="row">
          <div class="col-md-2 text-center">
          <script type="text/javascript">
      <!--
        var tanggal = new Date();
        var kode_hari = tanggal.getDay();
        var nama_hari = "";

        switch(kode_hari)
        {
          case 0:
            nama_hari="Minggu";
            break;
          case 1:
            nama_hari="Senin";
            break;
          case 2:
            nama_hari="Selasa";
            break;
          case 3:
            nama_hari="Rabu";
            break;
          case 4:
            nama_hari="Kamis";
            break;
          case 5:
            nama_hari="Jumat";
            break;
          case 6:
            nama_hari="Sabtu";
        }
        document.write(nama_hari);
        document.write(", "+tanggal.getDate()+
                "/"+(tanggal.getMonth()+1)+
                "/"+tanggal.getFullYear());
      //-->
      </script>
        </div>
          <div class="col-md-8 text-center">
            <p>
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | Made with <i class="icon-heart text-primary" aria-hidden="true"></i> by Muslimin</a>
            </p>
          </div>
          
          <div class="col-md-2 text-center">
                <p>
                  <a href="https://www.facebook.com/muslimin2001" class="pb-2 pr-2 pl-0" target="_blank"><span class="icon-facebook"></span></a>
                  <a href="https://www.twitter.com/kngmuss" class="p-2" target="_blank"><span class="icon-twitter"></span></a>
                  <a href="https://www.instagram.com/kngmuss_/" class="p-2" target="_blank"><span class="icon-instagram"></span></a>
                </p>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <script src="<?php echo base_url('js/jquery-3.3.1.min.js');?>"></script>
  <script src="<?php echo base_url('js/jquery-migrate-3.0.1.min.js');?>"></script>
  <script src="<?php echo base_url('js/jquery-ui.js');?>"></script>
  <script src="<?php echo base_url('js/popper.min.js');?>"></script>
  <script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('js/owl.carousel.min.js');?>"></script>
  <script src="<?php echo base_url('js/jquery.stellar.min.js');?>"></script>
  <script src="<?php echo base_url('js/jquery.countdown.min.js');?>"></script>
  <script src="<?php echo base_url('js/jquery.magnific-popup.min.js');?>"></script>
  <script src="<?php echo base_url('js/bootstrap-datepicker.min.js');?>"></script>
  <script src="<?php echo base_url('js/aos.js');?>"></script>

  
  <script src="<?php echo base_url('js/mediaelement-and-player.min.js');?>"></script>

  <script src="<?php echo base_url('js/main.js');?>"></script>
    

  <script>
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script>

  </body>
</html>