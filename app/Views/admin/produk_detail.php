<?= $this->extend('/admin/template_admin'); ?>

<?= $this->section('content'); ?>
<div class="col-md-12 mx-auto text-center mb-5 section-heading">
	<h2>Detail Produk <?= $data_produk['merk_produk']?></h2>
</div>
<div class="col-md-12">
	<div class="card md-12" style="max-width: 1080px;">
		<div class="row no-gutters">
			<div class="col-md-6">
				<img src="/images/product/<?= $data_produk['foto_produk']?>" class="card-img" alt="Foto <?=$data_produk['kode_produk']?>">
			</div>
			<div class="col-md-6">
				<div class="card-body">
					<h5 class="card-title"><?= $data_produk['nama_produk'] ?></h5>
					<p class="card-text"><?= $data_produk['deskripsi_produk'] ?></p>
					<p class="card-text"><b> $ <?= $data_produk['harga_produk'] ?></b></p>
					<p class="card-text"><small class="text-muted">Stok tersedia: <?= $data_produk['jumlah_stok'] ?></small></p>
					<a href="/produk" class="btn btn-info btn-sm">Kembali </a>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->endSection(); ?>