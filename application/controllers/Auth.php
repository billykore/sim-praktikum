<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Halaman Login';
			$this->load->view('login', $data);
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('students', ['username' => $username])->row_array();

		if ($user) {
			// user ada
			if (($password == $user['password'])) {
				$data = ['username' => $user['username']];
				$this->session->set_userdata($data);
				redirect('user');
			} else {
				$this->session->set_flashdata('message', 'Password salah');
				redirect('/');
			}
		} else {
			$this->session->set_flashdata('message', 'Username tidak terdaftar');
			redirect('/');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');

		$this->session->set_flashdata('logout', 'Log out berhasil');
		redirect('/');
	}
}
