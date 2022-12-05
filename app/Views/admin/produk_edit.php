<?= $this->extend('/admin/template_admin'); ?>

<?= $this->section('content'); ?>
<div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-secondary text-white"><i class="fa fa-pencil"></i> Edit Produk.
                </div>
                <div class="card-body">
    
                            <form action="/produk/update/<?= $produk['id']; ?>" method="post">
                              <div class="form-group row">
                                <label for="kode_produk" class="col-sm-2 col-form-label">Kode Produk</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="kode_produk" name="kode_produk" autofocus="" placeholder="Masukan Kode Produk" required="" value="<?= $produk['kode_produk']; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="nama_produk" class="col-sm-2 col-form-label">Nama Produk</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Nama Produk" value="<?= $produk['nama_produk']; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="merk_produk" class="col-sm-2 col-form-label">Merk Produk</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="merk_produk" name="merk_produk" placeholder="Masukan Merk Produk" value="<?= $produk['merk_produk']; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="deskripsi_produk" class="col-sm-2 col-form-label">Deskripsi Produk</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="deskripsi_produk" name="deskripsi_produk" placeholder="Masukan Deskripsi Produk" value="<?= $produk['deskripsi_produk']; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="jumlah_stok" class="col-sm-2 col-form-label">Jumlah Produk</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="jumlah_stok" name="jumlah_stok" placeholder="Masukan jumlah Stok" value="<?= $produk['jumlah_stok']; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="harga_produk" class="col-sm-2 col-form-label">Harga Produk</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="harga_produk" name="harga_produk" placeholder="Masukan Harga Produk" value="<?= $produk['harga_produk']; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="foto_produk" class="col-sm-2 col-form-label">Foto Produk</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="foto_produk" name="foto_produk" placeholder="Masukan Foto Produk" value="<?= $produk['foto_produk']; ?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-10">
                                  <button type="submit" class="btn btn-primary">Update Data</button>
                                  <a href="<?= base_url('produk');?>" class="btn btn-secondary">Kembali</a>
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