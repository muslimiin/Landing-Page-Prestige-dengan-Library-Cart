<?= $this->extend('/admin/template_admin'); ?>

<?= $this->section('content'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h2">Transaksi</h1>
</div>
<div class="row">
	<a href="/transaksi/exportPDF" class="btn btn-warning mb-3" target="_blank"><i class="fas fa-print"></i> Cetak Laporan</a>
	<div class="table-responsive table-hover">
		<table class="table table-striped table-sm">
			<thead>
				<tr class="text-center">
					<th scope="col">No </th>
					<th scope="col">Id Transaksi </th>
					<th scope="col">Email </th>
					<th scope="col">Tanggal Transaksi </th>
					<th scope="col">Total Transaksi </th>
					<th scope="col">Status Transaksi </th>
					<th scope="col">Action </th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1; ?>
				<?php foreach ($data_transaksi as $t) :?>
					<tr class="text-center">
						<th scope="row"><?= $i++;  ?></th>
						<td><?= $t['transaksi_id']; ?></td>
						<td><?= $t['email']; ?></td>
						<td><?= $t['transaksi_tgl']; ?></td>
						<td><?= number_to_currency($t['transaksi_total'], 'USD');?></td>
						<td><?= $t['transaksi_status']; ?></td>
						<td>
							<a href="transaksi/detail/<?= $t['transaksi_id']; ?>" class="btn btn-info btn-sm mr-1">Details</a>
							<a href="transaksi/updatestatus/<?= $t['transaksi_id']?>" class="btn btn-danger btn-sm mr-1">Ubah Status</a>
							<?php if ($t['transaksi_status'] == 'baru') : ?>
								<a href="#" class="btn btn-success btn-sm mr-1 disabled">Invoice</a>
							<?php else : ?>
								<a href="/transaksi/invoicePDF" class="btn btn-success btn-sm mr-1" target="_blank">>Invoice</a>
							<?php endif; ?>
							<!-- <a href="transaksi/invoicePDF" class="btn btn-warning btn-sm mr-1" target="_blank">Invoice</a> -->
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<?= $pager->links('bootstrap', 'bootstrap_pagination') ?>
</div>
<?= $this->endSection(); ?>