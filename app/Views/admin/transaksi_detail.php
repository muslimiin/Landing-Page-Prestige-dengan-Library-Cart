<?= $this->extend('/admin/template_admin'); ?>

<?= $this->section('content'); ?>
<div class="col-md-12 mx-auto text-center mb-5 section-heading">
	<h2>Detail Transaksi</h2>
</div>
<div class="col-md-12">
<div class="container-fluid">
<div class="row">
  <div class="col-lg-12">
	<div class="card-body">
	  <li class="list-group-item"><b>ID Transaksi</b> : <?= $data_transaksi['transaksi_id']; ?></li>
	  <li class="list-group-item"><b>Email</b> : <?= $data_transaksi['email']; ?></li>
	  <li class="list-group-item"><b>Tanggal Transaksi</b> : <?= $data_transaksi['transaksi_tgl'];; ?></li>
	  <li class="list-group-item"><b>Total Transaksi</b> : <?= number_to_currency($data_transaksi['transaksi_total'], 'USD'); ?></li>
	  <li class="list-group-item">
		<b>Status Transaksi</b> : <span class="badge badge-<?= ($data_transaksi['transaksi_status'] == 'baru') ? 'success' : 'warning'; ?>"><?= $data_transaksi['transaksi_status']; ?></span>
	  </li>
	  <li class="list-group-item">
		<a href="<?= base_url('/transaksi'); ?>" class="btn btn-primary">Kembali</a>
	  </li>
	</div>
  </div>
</div>

</div>
</div>
<?= $this->endSection(); ?>