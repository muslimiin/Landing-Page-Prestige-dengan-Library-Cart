<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'	=> [
				'type'           => 'INT',
				'constraint'     => 12,
				'auto_increment' => true,
			],
			'kode_produk'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '20',
			],
			'nama_produk'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'merk_produk'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '20',
			],
			'deskripsi_produk' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'jumlah_stok' => [
				'type'           => 'SMALLINT',
				'constraint'     => 6,
			],
			'harga_produk' => [
				'type'           => 'DOUBLE',
			],
			'foto_produk'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
		]);
		$this->forge->addKey('kode_produk', true);
		$this->forge->createTable('produk');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('produk');
	}
}
