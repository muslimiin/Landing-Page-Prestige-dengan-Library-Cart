<?php 
namespace App\Controllers;
use App\Models\Produk_model;
use CodeIgniter\Controller;
use \Mpdf\Mpdf;

class Produk extends BaseController
{
	protected $produk_model;
	public function __construct()
	{
		// helper(['url','html','form','text','number']);
		$this->form_validation = \Config\Services::validation();
		$this->produk_model = new Produk_model();
	}

	public function index()
	{
		$session = session();
		$pager = \Config\Services::pager();
		$data = [
			'title' => 'PRODUCT - Prestige MotorCars',
			'request' => $this->request->uri->getSegment(1),
			'data_produk' => $this->produk_model->paginate(3, 'bootstrap'),
			'pager' => $this->produk_model->pager,

		];
		
		echo view('admin/produk', $data);
	}

	public function detail($kode)
	{
		$data = [
			'title' => 'DETAIL PRODUK - Prestige MotorCars',
			'request' => $this->request->uri->getSegment(1),
			'data_produk' => $this->produk_model->get_produk($kode)

		];
		echo view('admin/produk_detail', $data);
	}

	public function tambah()
	{
		$data = [
			'title' => 'TAMBAH PRODUK - Prestige MotorCars',
			'request' => $this->request->uri->getSegment(1)
		];
		echo view('admin/produk_tambah', $data);

	}

	public function save()
	{
		$model = new Produk_model();
		$kode_produk = $this->request->getPost('kode_produk');
		$nama_produk = $this->request->getPost('nama_produk');
		$merk_produk = $this->request->getPost('merk_produk');
		$deskripsi_produk = $this->request->getPost('deskripsi_produk');
		$jumlah_stok = $this->request->getPost('jumlah_stok');
		$harga_produk = $this->request->getPost('harga_produk');
		$nama_file = $this->request->getFile('file_upload')->getName();
		$data = [
			'kode_produk' =>$kode_produk,
			'nama_produk' =>$nama_produk,
			'merk_produk' =>$merk_produk,
			'deskripsi_produk' =>$deskripsi_produk,
			'jumlah_stok' =>$jumlah_stok,
			'harga_produk' =>$harga_produk,
			'foto_produk' =>$nama_file
		];
		if ($this->form_validation->run($data, 'product') == FALSE) {
			session()->setFlashdata('inputs', $this->request->getPost());
			session()->setFlashdata('errors', $this->form_validation->getErrors());
			return redirect()->to(base_url('/produk/tambah'));
		} else {
			$avatar = $this->request->getFile('file_upload');
			$avatar->move(ROOTPATH . 'public/images/product');
			// dd($data);
			$model->saveProduk($data);
			session()->setFlashdata('success', 'Tambah Produk Berhasil');
			//kembali ke halaman Product
			return redirect()->to(base_url('/produk/tambah'));
		}
	}

	public function edit($id)
	{
		$data = [
			'title' => 'EDIT PRODUK - Prestige MotorCars',
			'request' => $this->request->uri->getSegment(1),
			'produk' => $this->produk_model->get_produk($id)
		];
		echo view('admin/produk_edit', $data);
	}

	public function update($id)
    {	
        $model = new produk_model;
		$this->produk_model->save([
			'id' => $id,
			'kode_produk' => $this->request->getVar('kode_produk'),
			'nama_produk' => $this->request->getVar('nama_produk'),
			'merk_produk' => $this->request->getVar('merk_produk'),
			'deskripsi_produk' => $this->request->getVar('deskripsi_produk'),
			'jumlah_stok' => $this->request->getVar('jumlah_stok'),
			'harga_produk' => $this->request->getVar('harga_produk'),
			'foto_produk' => $this->request->getVar('foto_produk')
		]);
		// dd($this->request->getVar());
		session()->setFlashdata('pesan', 'Data Berhasil Diubah.');
		return redirect()->to('/produk');
    }
	
	// public function update($id)
	// {
	// 	$model = new Produk_model();
	// 	$nama_produk = $this->request->getPost('nama_produk');
	// 	$merk_produk = $this->request->getPost('merk_produk');
	// 	$deskripsi_produk = $this->request->getPost('deskripsi_produk');
	// 	$jumlah_stok = $this->request->getPost('jumlah_stok');
	// 	$harga_produk = $this->request->getPost('harga_produk');
	// 	$nama_file = $this->request->getFile('file_upload')->getName();
	// 	$data = [
	// 		'nama_produk' =>$nama_produk,
	// 		'merk_produk' =>$merk_produk,
	// 		'deskripsi_produk' =>$deskripsi_produk,
	// 		'jumlah_stok' =>$jumlah_stok,
	// 		'harga_produk' =>$harga_produk,
	// 		'foto_produk' =>$nama_file
	// 	];
	// 	if ($this->form_validation->run($data, 'product') == FALSE) {
	// 		session()->setFlashdata('inputs', $this->request->getPost());
	// 		session()->setFlashdata('errors', $this->form_validation->getErrors());
	// 		return redirect()->to(base_url('/produk/edit'));
	// 	} else {
	// 		$avatar = $this->request->getFile('file_upload');
	// 		$avatar->move(ROOTPATH . 'public/images/product');
	// 		// dd($data);
	// 		$model->updateProduk($kode, $data);
	// 		session()->setFlashdata('success', 'Edit Data Produk Berhasil');
	// 		//kembali ke halaman Product
	// 		return redirect()->to(base_url('/produk/edit'));
	// 	}
	// }

	public function hapus($id)
	{
		$this->produk_model->delete($id);
		return redirect()->to(base_url('/produk'));
	}

	public function exportPDF()
	{
		$query = $this->produk_model->findAll();
		$no = 1;
		$table = '';
		foreach ($query as $p) 
		{
			$table .='<tr>
					<td>'.$no++.'</td>
					<td>'.$p['nama_produk'].'</td>
					<td>'.$p['merk_produk'].'</td>
					<td>'.$p['jumlah_stok'].'</td>
					<td>'.number_to_currency($p['harga_produk'], 'USD ').'</td>
			</tr>';
		}
		$mpdf = new Mpdf(['debug'=>FALSE,'mode'=>'utf-8','orientation'=>'L']);
		$mpdf->setHTMLHeader('
				<div style="text-align: left; font-weight: bold;">
					<h3> Laporan Data Barang </h3>
				</div>');
		$mpdf->WriteHTML('<table border="1" id="datatable" class="table table-stripped table-bordered" style="border-collapse: collapse;">
							<thead>
								<tr>
									<th> No </th>
									<th> Nama Produk </th>
									<th> Merk </th>
									<th> Stok </th>
									<th> Harga </th>
								</tr>
							</thead>
							<tbody>
								'.$table.'
							</tbody>
						</table>');
		$mpdf->Output('Laporan_data_produk.pdf','I');
		exit;
	}
}