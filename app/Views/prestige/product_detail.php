<?= $this->extend('/template'); ?>

<?= $this->section('content'); ?>

<div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Product</h2>
            <div class="col-md-12 mx-auto text-center mb-6">
				<h4>Detail Produk <?= $data_produk['merk_produk']?></h4>
			</div>
          </div>
        </div>

	<div class="card md-12" style="max-width: 1080px;">
		<div class="row no-gutters">
			<div class="col-md-6">
				<img src="/images/product/<?= $data_produk['foto_produk']?>" class="card-img" alt="Foto <?=$data_produk['kode_produk']?>">
			</div>
			<div class="col-md-6 ">
				<div class="card-body">
					<h5 class="card-title"><?= $data_produk['nama_produk'] ?></h5>
					<p class="card-text"><?= $data_produk['deskripsi_produk'] ?></p>
					<p class="card-text"><b> $ <?= $data_produk['harga_produk'] ?></b></p>
					<a href="/prestige/product" class="btn btn-info btn-sm">Kembali </a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?= $this->endSection(); ?>