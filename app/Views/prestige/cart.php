<?= $this->extend('/template'); ?>

<?= $this->section('content'); ?>
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Keranjang Belanja</h2>
          </div>
        </div>
 <div class="container">
          
  <div class="col-lg-12">
    <?php 
	if (session()->getFlashdata('pesan')) {
		echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">';		
		echo session()->getFlashdata('pesan');	
		echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
	}
	?>
  </div>
  <?php echo form_open('prestige/update'); ?>
  <div class="row">
		<div class="col">
			<h1><?= $title_page;?></h1>
		</div>
  </div>
	<div class="row">
		<div class="col-lg-12">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Qty</th>
						<th>Nama Barang</th>
						<th>Harga</th>
						<th>Subtotal</th>
						<th>Hapus</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$i = 1;
					foreach ($cart->contents() as $key => $value) {
						?>
						<tr>
							<td><input type="number" name="qty<?=$i++?>" min="1" class="form-control" value="<?= $value['qty']?>"></td>
							<td><?= $value['name']?></td>
							<td><?= number_to_currency($value['price'], 'USD')?></td>
							<td><?= number_to_currency($value['subtotal'], 'USD')?></td>
							<td><a href="<?= base_url('prestige/delete/'. $value['rowid'])?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Hapus</a></td>
						</tr>
						<?php
					}
					?>
					
				</tbody>
			</table>
		</div>	
	</div>
	<div class="row">
		<div class="col-lg-12">
			
		</div>
		<div class="col-lg-12 table-responsive">
			<table class="table" style="float: right">
				<tr>
					<td>Total</td>
					<td><?= number_to_currency($cart->total(), 'USD')?></td>
				</tr>
			</table>
		</div>
	</div>
	<div class="row no-print">
		<div class="col-lg-12">
			<button type="submit" class="btn btn-sm btn-primary">Update</button>
			<?php 
				echo anchor('prestige/finished', 'Check Out', 'class="btn btn-sm btn-success float-right"');
			?>
		</div>
	</div>
	<?php echo form_close(); ?>
</div>
      </div>
    </div>

<?= $this->endSection(); ?>