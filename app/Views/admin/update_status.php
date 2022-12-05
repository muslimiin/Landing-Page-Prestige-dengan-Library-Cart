<?= $this->extend('/admin/template_admin'); ?>
<?= $this->section('content'); ?>

<div class="row">
		<div class="col">
            <div class="card">
                <div class="card-header bg-secondary text-white"><i class="fa fa-pencil"></i> Edit Status Transaksi
                </div>
                <div class="card-body">
                    
                            <form action="/Transaksi/update/<?= $detail_transaksi['transaksi_id']; ?>" method="post">
                              <div class="form-group">
                              <select class="form-control" for="transaksi_status" name="transaksi_status" id="transaksi_status">
                                <option>Baru</option>
                                <option>Dibayar</option>
                                <option>Diproses</option>
                                <option>Dikirim</option>
                                <option>Diterima</option>
                                <option>Dibatalkan</option>
                              </select>
                            </div>
                              <div class="form-group row">
                                <div class="col-sm-10">
                                  <button type="submit" class="btn btn-primary">Update</button>
                                  <a href="<?= base_url('transaksi');?>" class="btn btn-secondary">Kembali</a>
                                </div>
                              </div>
                            </form>
                        <!-- <button type="submit" class="btn btn-primary text-right">Submit</button> -->
                </div>
                        
                </div>
            </div>
        </div>
	</div>

<?= $this->endSection(); ?>