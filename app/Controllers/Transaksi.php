<?php 
namespace App\Controllers;
use App\Models\Transaksi_model;
use CodeIgniter\Controller;
use \Mpdf\Mpdf;

class Transaksi extends BaseController
{
	protected $transaksi_model;
	public function __construct()
	{
		// helper(['url','html','form','text','number']);
		$this->transaksi_model = new Transaksi_model();
	}

	public function index()
	{
		$pager = \Config\Services::pager();
		$data = [
			'title' => 'TRANSAKSI - Prestige MotorCars',
			'request' => $this->request->uri->getSegment(1),
			'data_transaksi' => $this->transaksi_model->paginate(3, 'bootstrap'),
			'pager' => $this->transaksi_model->pager,
		];
		
		echo view('admin/transaksi', $data);
	}

	public function detail($kode)
	{
		$data = [
			'title' => 'DETAIL TRANSAKSI - Prestige MotorCars',
			'request' => $this->request->uri->getSegment(1),
			'data_transaksi' => $this->transaksi_model->get_transaksi($kode),

		];
		echo view('admin/transaksi_detail', $data);
	}

	public function updatestatus($kode)
	{
		$data = [
			'title' => 'Edit Transaksi',
			'request' => $this->request->uri->getSegment(1),
			'detail_transaksi' => $this->transaksi_model->get_transaksi($kode)

		];
		echo view('admin/update_status', $data);
	}
	public function update ($id = 0)
    {
    	$model = new transaksi_model;
		$this->transaksi_model->save([
			'transaksi_id' => $id,
			'transaksi_status' => $this->request->getVar('transaksi_status'),
		]);
        return redirect()->to(base_url('/transaksi'));
    }

	public function invoicePDF()
	{
		$query = $this->transaksi_model->find();
		$no = 1;
		$table = '';
		// $this->transaksi_model->save([
		// 	'transaksi_id' => $id,
		// 	'transaksi_status' => $this->request->getVar('transaksi_status'),
		// ]);
		foreach ($query as $t) 
		{
			$table .='<tr>
					<td>'.$no++.'</td>
					<td>'.$t['transaksi_id'].'</td>
					<td>'.$t['email'].'</td>
					<td>'.$t['transaksi_tgl'].'</td>
					<td>'.$t['transaksi_status'].'</td>
					<td>'.number_to_currency($t['transaksi_total'], 'USD ').'</td>
			</tr>';
		}
		$mpdf = new Mpdf(['debug'=>FALSE,'mode'=>'utf-8','orientation'=>'L']);
		$mpdf->setHTMLHeader('
				<div style="text-align: left; font-weight: bold;">
					<h3> Invoice </h3>
				</div>');
		$mpdf->WriteHTML('<table border="1" id="datatable" class="table table-stripped table-bordered" style="border-collapse: collapse;">
							<thead>
								<tr>
									<th> No </th>
									<th> ID Transaksi </th>
									<th> Email User </th>
									<th> Tanggal Transaksi </th>
									<th> Status Transaksi </th>
									<th> Total Transaksi </th>
								</tr>
							</thead>
							<tbody>
								'.$table.'
							</tbody>
						</table>');
		$mpdf->Output('Invoice.pdf','I');
		exit;
	}

	public function exportPDF()
	{
		$query = $this->transaksi_model->findAll();
		$no = 1;
		$table = '';
		
		foreach ($query as $t) 
		{
			$table .='<tr>
					<td>'.$no++.'</td>
					<td>'.$t['transaksi_id'].'</td>
					<td>'.$t['email'].'</td>
					<td>'.$t['transaksi_tgl'].'</td>
					<td>'.$t['transaksi_status'].'</td>
					<td>'.number_to_currency($t['transaksi_total'], 'USD ').'</td>
			</tr>';
		}
		$mpdf = new Mpdf(['debug'=>FALSE,'mode'=>'utf-8','orientation'=>'L']);
		$mpdf->setHTMLHeader('
				<div style="text-align: left; font-weight: bold;">
					<h3> Laporan Data Transaksi </h3>
				</div>');
		$mpdf->WriteHTML('<table border="1" id="datatable" class="table table-stripped table-bordered" style="border-collapse: collapse;">
							<thead>
								<tr>
									<th> No </th>
									<th> ID Transaksi </th>
									<th> Email User </th>
									<th> Tanggal Transaksi </th>
									<th> Status Transaksi </th>
									<th> Total Transaksi </th>
								</tr>
							</thead>
							<tbody>
								'.$table.'
							</tbody>
						</table>');
		$mpdf->Output('Laporan_data_transaksi.pdf','I');
		exit;
	}
}