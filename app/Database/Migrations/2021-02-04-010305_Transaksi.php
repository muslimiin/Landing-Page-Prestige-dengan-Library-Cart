<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'	=> [
				'type'           => 'INT',
				'constraint'     => 12,
				'auto_increment' => true,
			],
			'transaksi_id'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '14',
			],
			'email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			],
			'transaksi_tgl'       => [
				'type'           => 'DATETIME',
			],
			'transaksi_status' => [
				'type'           => 'ENUM',
				'constraint'     => ['baru','dibayar','diproses','dikirim','diterima','dibatalkan'],
				'null'			 => true,
			],
			'transaksi_total' => [
				'type'           => 'INT',
				'constraint'	 =>	12,
			],
		]);
		$this->forge->addKey('transaksi_id', true);
		$this->forge->createTable('transaksi');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('transaksi');
	}
}
