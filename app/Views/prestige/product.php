<?= $this->extend('/template'); ?>

<?= $this->section('content'); ?>
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Product</h2>
          </div>
        </div>
        <div class="row">
          
  <div class="col-lg-12">
    <?php 
    if (session()->getFlashdata('pesan')) {
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">';    
      echo session()->getFlashdata('pesan');  
      echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    }
     ?>
  </div>
  <?php 
  if(is_array($data_produk)){ ?>
  <?php foreach($data_produk as $p) : ?>
  <div class="col-md-4">
    <?php 
    echo form_open('prestige/add');
    echo form_hidden('kode', $p['kode_produk']);
    echo form_hidden('nama', $p['nama_produk']);
    echo form_hidden('harga', $p['harga_produk']);
    echo form_hidden('foto', $p['foto_produk']);
    ?>
    <div class="card mb-4 box-shadow">
      <img class="img-fluids d-block mb-0 thumbnail" alt="Card image cap" src="/images/Product/<?= $p['foto_produk'];?>" style="width:auto; height: 15vw; object-fit: cover;" 
      >
      <div class="card-body">
        <h5 class="card-title"><?= character_limiter($p['nama_produk'], 25); ?></h5>
        <small><b><?= number_to_currency($p['harga_produk'], 'USD');?></b></small>
        <p class="card-text"><?= character_limiter($p['deskripsi_produk'], 50); ?> <a href="/Prestige/detail/<?= $p['kode_produk']?>">Lihat detail.</a></p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary"><a href="/Prestige/detail/<?= $p['kode_produk']?>">Detail</a></button>
            <button type="submit" class="btn btn-sm btn-outline-secondary">Tambah ke Cart</button>
          </div>
          <!-- <small class="text-muted">9 mins</small> -->
        </div>
      </div>
    </div>
    <?= form_close();?>
  </div>
  <?php endforeach; }?>
</div>
      </div>
    </div>

<?= $this->endSection(); ?>