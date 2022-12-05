<?php namespace App\Controllers;

use CodeIgniter\Controller;
// use Myth\Auth\Models\LoginModel;

class Dashboard extends BaseController
{
	// protected $loginmodel;
	// public function __construct()
	// {
	// 	// helper(['url','html','form','text','number']);
	// 	// $this->loginmodel = new LoginModel();
	// }
	public function index()
	{
		$data = [
			'title' => 'ADMIN - Prestige MotorCars',
			'request' => $this->request->uri->getSegment(1),
			// 'data_login' => $this->loginmodel
		];
		echo view('admin/dashboard', $data);
	}
}