<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kerjapraktek extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Kerjapraktek_model');
	}

	public function index()
	{
		$data['judul'] = 'Kerja Praktek';
		$data['user'] = $this->Kerjapraktek_model->getUser();
		$this->load->view('templates/header', $data);
		$this->load->view('kerjapraktek/index');
		$this->load->view('templates/footer');
	}
}
