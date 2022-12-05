<?php 
namespace App\Models;

use CodeIgniter\Model;

class Detailtransaksi_model extends Model
{
	protected $table      = 'detail_transaksi';
    protected $primaryKey = 'id';
	protected $allowedFields = ['id', 'transaksi_id', 'kode_produk', 'harga', 'qty'];
    public function get_detailtransaksi($kode)
	{
		return $this->db->table('detail_transaksi')
		->join('transaksi', 'transaksi.transaksi_id=detail_transaksi.transaksi_id')
		->join('produk', 'produk.kode_produk=detail_transaksi.kode_produk')
		->get()->getResultArray();
	}

}