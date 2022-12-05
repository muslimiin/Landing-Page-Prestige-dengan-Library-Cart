<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailTransaksi extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'	=> [
				'type'           => 'INT',
				'constraint'     => 12,
				'auto_increment' => true,
			],
			'transaksi_id'	=> [
				'type'           => 'VARCHAR',
				'constraint'     => '14',
			],
			'kode_produk'	=> [
				'type'           => 'VARCHAR',
				'constraint'     => '20',
			],
			'harga' => [
				'type'           => 'INT',
				'constraint'     => 12,
			],
			'qty' => [
				'type'           => 'INT',
				'constraint'     => 12,
			],
		]);
		// $this->forge->addIndex('id', true);
		$this->forge->addKey('id', true);
		$this->forge->createTable('detail_transaksi');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('detail_transaksi');
	}
}
