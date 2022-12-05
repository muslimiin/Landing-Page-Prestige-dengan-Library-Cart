<?php 
namespace App\Controllers;
use App\Models\Transaksi_model;
// use App\Models\Produk_model;
// use App\Models\Detailtransaksi_model;
use CodeIgniter\Controller;
use \Mpdf\Mpdf;

class Invoice extends BaseController
{
	protected $transaksi_model;
	// protected $produk_model;
	// protected $detailtransaksi_model;
	public function __construct()
	{
		$this->transaksi_model = new Transaksi_model();
		// $this->produk_model = new Produk_model();
		// $this->detailtransaksi_model = new Detailtransaksi_model();
	}

	// public function index()
	// {
	// 	$pager = \Config\Services::pager();
	// 	$data = [
	// 		'title' => 'TRANSAKSI - Prestige MotorCars',
	// 		'request' => $this->request->uri->getSegment(1),
	// 	];
		
	// 	echo view('admin/transaksi', $data);
	// }

	// public function invoicePDF()
	// {
	// 	$kode = $this->request->uri->getSegment(3);
	// 	$detailtransaksi = $detailtransaksi_model->find($kode);
	// 	$produk = $produk_model->find($detailtransaksi->$kode_produk);
	// 	$transaksi = $transaksi_model->find($detailtransaksi->transaksi_id);
	// 	$no = 1;
	// 	$table = view(
	// 		'transaksi/invoice',[
	// 			'transaksi'	=> $transaksi,
	// 			'produk'	=> $produk,
	// 			'detailtransaksi'	=> $detailtransaksi,
	// 		]
	// 	);

	// 	$table .='<tr>
	// 				<td>'.$no++.'</td>
	// 				<td>'.$produk['nama_produk'].'</td>
	// 				<td>'.$produk['harga_produk'].'</td>
	// 				<td>'.$detailtransaksi['qty'].'</td>
	// 				<td>'.number_to_currency($transaksi['transaksi_total'], 'USD ').'</td>
	// 		</tr>';
	// 	$mpdf = new Mpdf(['debug'=>FALSE,'mode'=>'utf-8','orientation'=>'L']);
	// 	$mpdf->setHTMLHeader('
	// 			<div style="text-align: center; font-weight: bold;">
	// 				<h3> INVOICE </h3>
	// 			</div>');
	// 	$mpdf->WriteHTML('<table border="1" id="datatable" class="table table-stripped table-bordered" style="border-collapse: collapse;">
	// 						<thead>
	// 							<tr>
	// 								<th> No </th>
	// 								<th> Nama Produk </th>
	// 								<th> Harga Produk </th>
	// 								<th> Jumlah Produk </th>
	// 								<th> Total Transaksi </th>
	// 							</tr>
	// 						</thead>
	// 						<tbody>
	// 							'.$table.'
	// 						</tbody>
	// 					</table>');
	// 	$mpdf->Output('Invoice.pdf','I');
	// 	exit;
	// }

}