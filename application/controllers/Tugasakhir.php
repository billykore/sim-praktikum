<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugasakhir extends CI_Controller
{
	public function index()
	{
		$data['judul'] = "Tugas Akhir";
		$data['user'] = $this->db->get_where('students', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('templates/header', $data);
		$this->load->view('tugasakhir/index');
		$this->load->view('templates/footer');
	}
}
