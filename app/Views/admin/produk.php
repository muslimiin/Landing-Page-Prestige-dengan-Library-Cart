<?= $this->extend('/admin/template_admin'); ?>

<?= $this->section('content'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h2">Produk</h1>
</div>
<div class="row">
	<?php echo anchor('produk/tambah', 'Tambah', 'class="btn btn-primary mb-3"'); ?>
	<a href="/Produk/exportPDF" class="btn btn-warning mb-3" target="_blank"><i class="fas fa-print"></i> Cetak Laporan</a>
	<div class="table-responsive table-hover">
		<?php 
                        echo form_open_multipart('produk/save');
                        $success = session()->getFlashdata('success');
                        if (!empty($errors)) { ?>
                            <div class="alert alert-danger" role="alert">
                                Ada kesalahan saat tambah data produk, yaitu :
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
                                Sukses! Berhasil Tambah data produk
                            </div>
                        <?php }
                    ?>
		<table class="table table-striped table-sm">
			<thead>
				<tr class="text-center">
					<th scope="col">No </th>
					<th scope="col">Gambar Produk </th>
					<th scope="col">Nama Produk </th>
					<th scope="col">Stok Produk</th>
					<th scope="col">Harga Produk </th>
					<th scope="col">Action </th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1; ?>
				<?php foreach ($data_produk as $p) :?>
					<tr class="text-center">
						<th scope="row"><?= $i++;  ?></th>
						<td align="center"><img src="/images/product/<?= $p['foto_produk'];?>"  style="height:100px;"></td>
						<td><?= $p['nama_produk']; ?></td>
						<td><?= $p['jumlah_stok']; ?></td>
						<td><?= number_to_currency($p['harga_produk'], 'USD');?></td>
						<td>
							<a href="produk/detail/<?= $p['kode_produk']?>" class="btn btn-info btn-sm mr-1">Details</a>
							<a href="produk/edit/<?= $p['kode_produk']?>" class="btn btn-warning btn-sm mr-1">Edit</a>
							<a href="produk/hapus/<?= $p['kode_produk']?>" class="btn btn-danger btn-sm mr-1" onclick="return confirm('apakah anda yakin?')">Hapus</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<?= $pager->links('bootstrap', 'bootstrap_pagination') ?>
</div>
<?= $this->endSection(); ?>