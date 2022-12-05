<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
		\Myth\Auth\Authentication\Passwords\ValidationRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	public $pesan = [
			'nama'				=> 'required|alpha_space',
			'email_pesan'		=> 'required|valid_email',
			'nohp_pesan'		=> 'required|numeric',
			'pesan'				=> 'required|min_length[10]'
	];
	public $pesan_errors = [
			'nama'		=> [
					'required'		=> 'Nama wajib diisi',
					'alpha_space'	=> 'Nama hanya boleh diisi dengan huruf dan spasi'
			],
			'email_pesan'		=> [
					'required'		=> 'Email wajib diisi',
					'valid_email'	=> 'Email harus valid'
			],
			'nohp_pesan'	=> [
					'required'		=> 'Nomor HP wajib diisi',
					'numeric'		=> 'Input nomor HP hanya berupa angka'
			],
			'pesan'		=> [
					'required'		=> 'Pesan wajib diisi',
					'min_length'	=> 'Pesan minimal terdiri dari 10 karakter'
			]
	];
	public $product = [
			'kode_produk'			=> 'required',
			'nama_produk'			=> 'required',
			'merk_produk'			=> 'required',
			'deskripsi_produk'		=> 'required|min_length[10]',
			'jumlah_stok'			=> 'required|numeric',
			'harga_produk'			=> 'required|numeric',
			'foto_produk'			=> 'required'
	];
	public $product_errors = [
			'kode_produk'		=> [
					'required'		=> 'Kode produk wajib diisi'
			],
			'nama_produk'		=> [
					'required'		=> 'Nama produk wajib diisi'
			],
			'merk_produk'		=> [
					'required'		=> 'Merk produk wajib diisi'
			],
			'deskripsi_produk'	=> [
					'required'		=> 'Deksripsi produk wajib diisi',
					'min_length'	=> 'Deksripsi produk minimal terdiri dari 10 karakter'
			],
			'jumlah_stok'		=> [
					'required'		=> 'Jumlah stok produk wajib diisi',
					'numeric'		=> 'Input Jumlah stok produk hanya berupa angka'
			],
			'harga_produk'		=> [
					'required'		=> 'Harga produk wajib diisi',
					'numeric'		=> 'Input Harga produk hanya berupa angka'
			],
			'foto_produk'		=> [
					'required'		=> 'Foto produk wajib diisi'
			]
	];
}
