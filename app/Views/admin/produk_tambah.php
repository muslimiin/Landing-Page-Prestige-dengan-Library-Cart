<?= $this->extend('/admin/template_admin'); ?>

<?= $this->section('content'); ?>
<div class="row">
		<div class="col">
            <div class="card">
                <div class="card-header bg-secondary text-white"><i class="fa fa-envelope"></i> Tambah Produk.
                </div>
                <div class="card-body">
                    <?php 
                        echo form_open_multipart('produk/save');
                        $inputs = session()->getFlashdata('inputs');
                        $errors = session()->getFlashdata('errors');
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
                    <div class="w-25">
                    	<div class="form-group">
                            <?php 
                                echo form_label('Kode Produk', 'kode');
                            	$data = [
                            	        'name'      	=> 'kode_produk',
								        'id'        	=> 'kode_produk',
								        'placeholder'	=> 'Masukkan kode produk',
								        'class'			=> 'form-control'
								];
                                $values = ($inputs == null ? '': $inputs['kode_produk']);
								echo form_input($data, $values);

                             ?>
                        </div>
                    </div>
                    	<div class="w-50">
	                        <div class="form-group">
	                            <?php 
	                                echo form_label('Nama Produk', 'nama');
	                            	$data = [
	                            	        'name'      	=> 'nama_produk',
									        'id'        	=> 'nama_produk',
									        'placeholder'	=> 'Masukkan nama produk',
									        'class'			=> 'form-control'
									];
                                    $values = ($inputs == null ? '': $inputs['nama_produk']);
									echo form_input($data, $values);

	                             ?>
	                        </div>
	                    </div>
                        <div class="w-25">
                        <div class="form-group">
                            <?php 
                                echo form_label('Merk Produk', 'merk');
                                $data = [
                                        'name'          => 'merk_produk',
                                        'id'            => 'merk_produk',
                                        'placeholder'   => 'Masukkan Merk Produk',
                                        'class'         => 'form-control',
                                ];
                                $values = ($inputs == null ? '': $inputs['merk_produk']);
                                echo form_input($data, $values);
                             ?>
                        </div>
                        </div>
                        <div class="form-group">
                            <?php 
                                echo form_label('Deskripsi Produk', 'deskripsi');
                                $data = [
                                        'name'          => 'deskripsi_produk',
                                        'id'            => 'deskripsi_produk',
                                        'placeholder'   => 'Masukkan Deskripsi Produk',
                                        'class'         => 'form-control',
                                        'rows'          => '6'
                                ];
                                $values = ($inputs == null ? '': $inputs['deskripsi_produk']);
                                echo form_textarea($data, $values);
                             ?>
                        </div>
                        <div class="w-25">
                        <div class="form-group">
                            <?php 
                                echo form_label('Jumlah Stok Produk', 'jumlah');
                                $data = [
                                        'name'          => 'jumlah_stok',
                                        'id'            => 'jumlah_stok',
                                        'placeholder'   => 'Masukkan Jumlah Stok',
                                        'class'         => 'form-control',
                                ];
                                $values = ($inputs == null ? '': $inputs['jumlah_stok']);
                                echo form_input($data, $values);
                             ?>
                        </div>
                        </div>
                        <div class="w-25">
                        <div class="form-group">
                            <?php 
                                echo form_label('Harga Produk', 'harga');
                                $data = [
                                        'name'          => 'harga_produk',
                                        'id'            => 'harga_produk',
                                        'placeholder'   => 'Masukkan Harga Produk',
                                        'class'         => 'form-control',
                                ];
                                $values = ($inputs == null ? '': $inputs['harga_produk']);
                                echo form_input($data, $values);
                             ?>
                        </div>
                        </div>
                        <div class="w-25">
                        <div class="form-group">
                        <?php echo form_label('Foto Produk', ''); ?>
                        <div class="form-group input-group mb-3">
				            <div class="input-group-prepend">
					            <span class="input-group-text"><i class="fa fa-cloud-upload" aria-hidden=true></i></span>
				            </div>
				            <div class="custom-file">
					            <input type="file" class="custom-file-input" id="inputGroupFile01">
					            <?php 
					                $data = [
						                    'name'      	=> 'file_upload',
						                    'id'        	=> 'inputGroupFile01',
						                    'class'			=> 'custom-file-input'
					                ];
					                echo form_upload($data);
					            ?>
					            <label class="custom-file-label" for="inputGroupFile01">Pilih Foto Produk</label>
				            </div>
			            </div>
                        </div>
                        </div>
                        <div class="mx-auto">
                            <input type="submit" value="Tambah Data" class="btn btn-primary pill px-4 py-2"/>
                        <!-- <button type="submit" class="btn btn-primary text-right">Submit</button> -->
                        <a href="/produk" class="btn btn-danger pill px-4 py-2">Kembali </a>
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
	</div>

<?= $this->endSection(); ?>