<?php 
namespace App\Models;

use CodeIgniter\Model;

class Transaksi_model extends Model
{
    protected $table      = 'transaksi';
    protected $primaryKey = 'transaksi_id';
    protected $allowedFields = ['transaksi_id', 'email', 'transaksi_tgl', 'transaksi_status', 'transaksi_total'];

    public function get_transaksi($kode)
    {
    	return $this->where(['transaksi_id'=>$kode])->first();
    }

    public function simpan($data)
	{
		$query = $this->db->table($this->table)->insert($data);
		return $query;
	}

	public function simpan_detail($data)
	{
		$query = $this->db->table('detail_transaksi')->insertBatch($data);
		return $query;
	}

}