<?php namespace App\Controllers;
use App\Models\Produk_model;
use CodeIgniter\Controller;
use App\Models\Pesan_model;
use Myth\Auth\Models\UserModel;
use App\Models\Transaksi_model;

class Prestige extends BaseController
{
	protected $produk_model;
	protected $cart;
	protected $transaksi_model;

	public function __construct()
    {
        // helper(['url','html', 'form','text','number']);
    	$this->form_validation = \Config\Services::validation();
		$this->produk_model = new Produk_model();
		$this->transaksi_model = new Transaksi_model();
		$this->cart = \Config\Services::cart();
    }

	public function index()
	{
		$session = session();
		$data = [
			'title' => 'Prestige MotorCars',
			'request' => $this->request->uri->getSegment(1),
		];
		echo view('prestige/home', $data);
	}

	public function product()
	{
		$data = [
			'title' => 'Product',
			'request' => $this->request->uri->getSegment(2),
			'data_produk' => $this->produk_model->findAll(),
			'cart' => $this->cart
		];
		echo view('prestige/product', $data);
	}

	public function cek()
	{
		$response = $this->cart->contents();
		$data = json_encode($response);
		// echo '<pre>';
		print_r($data);
		// echo '</pre>';
	}
	
	public function add()
	{
		$this->cart->insert(array(
			'id'      => $this->request->getPost('kode'),
			'qty'     => 1,
			'price'   => $this->request->getPost('harga'),
			'name'    => $this->request->getPost('nama'),
			'options' => array(
				'foto' => $this->request->getPost('foto'),
			)
		));
		session()->setFlashdata('pesan','Barang berhasil dimasukkan ke keranjang');
		return redirect()->to(base_url('prestige/product'));
	}

	public function cart()
	{
		$data = [
			'title' => 'View Cart - Prestige',
			'title_page' => 'Barang Pilihan Anda',
			'request' => $this->request->uri->getSegment(1),
			'data_produk' => $this->produk_model->findAll(),
			'cart' => $this->cart
		];
		echo view('prestige/cart', $data);
	}

	public function clear()
	{
		$this->cart->destroy();
	}

	public function update()
	{
		$i = 1;
		foreach ($this->cart->contents() as $key => $value) {
			$this->cart->update(array(
				'rowid' => $value['rowid'],
				'qty' => $this->request->getPost('qty'.$i++)
			));
		}
		session()->setFlashdata('pesan', 'Data keranjang berhasil di update');
		return redirect()->to(base_url('prestige/cart'));
	}

	public function delete($rowid)
	{
		$this->cart->remove($rowid);
		session()->setFlashdata('pesan', 'Data keranjang berhasil di Hapus');
		return redirect()->to(base_url('prestige/cart'));	
	}

	public function finished()
	{
		if (logged_in() == false) {
			return redirect()->to(base_url('/login'));
		}else{
			$trans_no = date('Ymdhis');
			$data_header = array(
				'transaksi_id'	=> $trans_no,
				'email' => user()->email,
				'transaksi_tgl' => date("Y-m-d h:i:s"),
				'transaksi_status'	=>	'Baru',
				'transaksi_total'	=> $this->cart->total()
			);

			$this->transaksi_model->simpan($data_header);
			$data_detail = array();
			foreach ($this->cart->contents() as $key => $items) {
				if ($items['qty'] > 0) {
					$data_detail = array_merge(
						$data_detail, array(
							array(
									'transaksi_id'	=> $trans_no,
									'kode_produk'	=> $items['id'],
									'harga'	=> $items['price'],
									'qty'	=> $items['qty']
							)
						)
					);
				}
			}
			$this->transaksi_model->simpan_detail($data_detail);
			$this->cart->destroy();
			session()->setFlashdata('pesan', 'Selamat Anda Berhasil Check Out.');
			return redirect()->to(base_url('prestige/cart'));
		}
	}

	public function detail($kode)
	{
		$data = [
			'title' => 'Detail Produk - Prestige',
			'request' => $this->request->uri->getSegment(1),
			'data_produk' => $this->produk_model->get_produk($kode)

		];
		echo view('prestige/product_detail', $data);
	}

	public function about()
	{
		$data = [
			'title' => 'About Me',
			'request' => $this->request->uri->getSegment(2),
		];
		echo view('prestige/about', $data);
	}

	public function contact()
	{
		$data = [
			'title' => 'Contact Us',
			'request' => $this->request->uri->getSegment(2)
		];
		echo view('prestige/contact', $data);
	}

	public function kirim_pesan()
	{
		$model = new Pesan_model();
		$nama = $this->request->getPost('nama');
		$email_pesan = $this->request->getPost('email_pesan');
		$nohp_pesan = $this->request->getPost('nohp_pesan');
		$pesan = $this->request->getPost('pesan');
		$data = [
			'nama' =>$nama,
			'email_pesan' =>$email_pesan,
			'nohp_pesan' =>$nohp_pesan,
			'pesan' =>$pesan
		];
		if ($this->form_validation->run($data, 'pesan') == FALSE) {
			session()->setFlashdata('inputs', $this->request->getPost());
			session()->setFlashdata('errors', $this->form_validation->getErrors());
			return redirect()->to(base_url('prestige/contact'));
		} else {
			$model->savePesan($data);
			session()->setFlashdata('success', 'Kirim Pesan Berhasil');
			//kembali ke halaman contact
			return redirect()->to(base_url('prestige/contact'));
		}
	}

}
