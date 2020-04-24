<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Praktikum extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Praktikum_model');
	}

	public function index()
	{
		$data['judul'] = "Praktikum";
		$data['user'] = $this->Praktikum_model->getUser();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar1_praktikum');
		$this->load->view('praktikum/index');
		$this->load->view('templates/footer');
	}

	public function sinyalDanSistem()
	{
		$data['judul'] = "Praktikum - Sinyal dan Sistem";
		$data['user'] = $this->Praktikum_model->getUser();
		$data['asisten'] = $this->Praktikum_model->getAsisten();
		$data['tampilJadwal'] = $this->Praktikum_model->tampilJadwal();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar1_praktikum');
		$this->load->view('praktikum/sinyaldansistem', $data);
		$this->load->view('templates/sidebar2_praktikum');
		$this->load->view('templates/footer');
	}

	public function prosesStokastik()
	{
		$data['judul'] = "Praktikum - Proses Stokastik";
		$data['user'] = $this->Praktikum_model->getUser();
		$data['asisten'] = $this->Praktikum_model->getAsisten();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar1_praktikum');
		$this->load->view('praktikum/prosesstokastik');
		$this->load->view('templates/sidebar2_praktikum');
		$this->load->view('templates/footer');
	}

	public function pengaturanDigitalDanOtomasi()
	{
		$data['judul'] = "Praktikum - Lab. Pengaturan Digital dan Otomasi";
		$data['user'] = $this->Praktikum_model->getUser();
		$data['asisten'] = $this->Praktikum_model->getAsisten();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar1_praktikum');
		$this->load->view('praktikum/pengaturandigitaldanotomasi');
		$this->load->view('templates/sidebar2_praktikum');
		$this->load->view('templates/footer');
	}

	public function detailAsisten($id)
	{
		$data['judul'] = 'Detail Asisten';
		$data['user'] = $this->Praktikum_model->getUser();
		$data['asisten'] = $this->Praktikum_model->getAsistenById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('praktikum/detailasisten', $data);
		$this->load->view('templates/footer');
	}

	public function aturJadwal()
	{
		$data['judul'] = 'Praktikum - Atur Jadwal';
		$data['user'] = $this->Praktikum_model->getUser();
		$data['aturJadwal'] = [
			'hari' => $this->Praktikum_model->aturJadwalHari(),
			'waktu' => $this->Praktikum_model->aturJadwalWaktu(),
			'modul' => $this->Praktikum_model->aturJadwalModul()
		];

		if (!isset($_POST['atur'])) {
			$this->load->view('templates/header', $data);
			$this->load->view('praktikum/aturjadwal', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Praktikum_model->aturJadwal();
			$this->session->set_flashdata('flash', 'diatur');
			redirect('praktikum/sinyaldansistem');
		}
	}

	public function ubahJadwal()
	{
		$data['judul'] = 'Praktikum - Ubah Jadwal';
		$data['user'] = $this->Praktikum_model->getUser();
		$data['aturJadwal'] = [
			'hari' => $this->Praktikum_model->aturJadwalHari(),
			'waktu' => $this->Praktikum_model->aturJadwalWaktu(),
			'modul' => $this->Praktikum_model->aturJadwalModul()
		];

		if (!isset($_POST['atur'])) {
			$this->load->view('templates/header', $data);
			$this->load->view('praktikum/ubahjadwal', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Praktikum_model->ubahJadwal();
			$this->session->set_flashdata('flash', 'diubah');
			redirect('praktikum/sinyaldansistem');
		}
	}
}
