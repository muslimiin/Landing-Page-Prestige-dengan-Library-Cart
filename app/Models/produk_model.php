<?php 
namespace App\Models;

use CodeIgniter\Model;

class Produk_model extends Model
{
    protected $table      = 'produk';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','kode_produk', 'nama_produk', 'merk_produk', 'deskripsi_produk', 'jumlah_stok', 'harga_produk'];

    public function getProduk($id)
    {
    	if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['kode_produk' => $id]);
        }
    }
	public function get_produk($id)
    {
    	return $this->where(['kode_produk'=>$id])->first();;
    }

    public function saveProduk($data)
	{
		$query = $this->db->table($this->table)->insert($data);
		return $query;
	}

	public function Addproduk($kode)
    {
    	$query = $this->db->table($this->table)->insert($data);
    	return $query;
    }

	public function updateProduk($data, $kode)
	{
		$query = $this->db->table($this->table)->update($data, array('kode_produk' => $kode));
		return $query;
	}

	public function deleteProduk($kode)
	{
		$query = $this->db->table($this->table)->delete(array('kode_produk' => $kode));
		return $query;
	}

}