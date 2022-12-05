<?php namespace App\Models;

use CodeIgniter\Model;

class Pesan_model extends Model
{
	protected $table		='pesan';
	protected $primaryKey	='kode_pesan';

	public function savePesan($data)
	{
		$query = $this->db->table($this->table)->insert($data);
		return $query;
	}

	public function updatePesan($data, $kode)
	{
		$query = $this->db->table($this->table)->update($data, array('kode_pesan' => $kode));
		return $query;
	}

	public function deletePesan($kode)
	{
		$query = $this->db->table($this->table)->delete(array('kode_pesan' => $kode));
		return $query;
	}
}