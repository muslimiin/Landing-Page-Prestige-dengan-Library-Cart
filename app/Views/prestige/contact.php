<?= $this->extend('/template'); ?>

<?= $this->section('content'); ?>
    
    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Contact Us</h2>
          </div>
        </div>
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
                    <?php 
                        echo form_open_multipart('prestige/kirim_pesan');
                        $inputs = session()->getFlashdata('inputs');
                        $errors = session()->getFlashdata('errors');
                        $success = session()->getFlashdata('success');
                        if (!empty($errors)) { ?>
                            <div class="alert alert-danger" role="alert">
                                Ada kesalahan saat input data, yaitu :
                                <ul>
                                    <?php foreach ($errors as $error) : ?>
                                        <li><?= esc($error) ?></li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        <?php
                        }
                        if (!empty($success)) { ?>
                            <div class="alert alert-success" role="alert">
                                Sukses! Berhasil Kirim Pesan
                            </div>
                        <?php }
                    ?>
            
          
            <form action="#" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                             <?php 
                                echo form_label('Nama', 'nama', ['class' => 'font-weight-bold']);
                                $data = [
                                        'name'        => 'nama',
                                        'id'          => 'nama',
                                        'placeholder' => 'Nama Lengkap',
                                        'class'     => 'form-control'
                                ];
                                $values = ($inputs == null ? '': $inputs['nama']);
                                echo form_input($data, $values);

                             ?>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                             <?php 
                                echo form_label('Email', 'email', ['class' => 'font-weight-bold']);
                                $data = [
                                        'name'          => 'email_pesan',
                                        'id'            => 'email_pesan',
                                        'placeholder'   => 'Alamat email',
                                        'class'         => 'form-control',
                                        'type'          => 'email'
                                ];
                                $values = ($inputs == null ? '': $inputs['email_pesan']);
                                echo form_input($data, $values);
                             ?>

                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                             <?php 
                                echo form_label('No HP', 'nohp', ['class' => 'font-weight-bold']);
                                $data = [
                                        'name'          => 'nohp_pesan',
                                        'id'            => 'nohp_pesan',
                                        'placeholder'   => 'Nomor HP',
                                        'class'         => 'form-control',
                                        'type'          => 'nohp'
                                ];
                                $values = ($inputs == null ? '': $inputs['nohp_pesan']);
                                echo form_input($data, $values);
                             ?>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                             <?php 
                                echo form_label('Pesan', 'pesan');
                                $data = [
                                        'name'          => 'pesan',
                                        'id'            => 'pesan',
                                        'placeholder'   => 'Tinggalkan Pesan Kepada Kami',
                                        'class'         => 'form-control',
                                        'rows'          => '6'
                                ];
                                $values = ($inputs == null ? '': $inputs['pesan']);
                                echo form_textarea($data, $values);

                             ?>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary pill px-4 py-2"/>
                </div>
              </div>
              <?php echo form_close(); ?>
  
            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Info Contact</h3>
              <p class="mb-0 font-weight-bold">Alamat</p>
              <p class="mb-4">Jl. Pluit Permai No.5, RT.20/RW.2, Pluit, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14450 Indonesia</p>

              <p class="mb-0 font-weight-bold">HandPhone</p>
              <p class="mb-4"><a href="#">+62 823-2622-5295</a></p>

              <p class="mb-0 font-weight-bold">Email</p>
              <p class="mb-0"><a href="#">muslimink96@gmail.com</a></p>

            </div>
            
            
          </div>
        </div>
      </div>
    </div>

<?= $this->endSection(); ?>