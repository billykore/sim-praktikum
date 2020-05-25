<?php

class Praktikum_model extends CI_Model
{
	public function getUser()
	{
		return $this->db->get_where('students', ['username' => $this->session->userdata('username')])->row_array();
	}

	public function getAsisten()
	{
		return $this->db->get('asisten')->result_array();
	}

	public function getAsistenById($id)
	{
		return $this->db->get_where('asisten', ['id' => $id])->row_array();
	}

	public function aturJadwalHari()
	{
		return $this->db->get('hari')->result_array();
	}

	public function aturJadwalWaktu()
	{
		return $this->db->get('waktu')->result_array();
	}

	public function aturJadwalModul()
	{
		return $this->db->get('modul')->result_array();
	}

	public function aturJadwal()
	{
		$user_id = $this->db->get_where('students', ['username' => $this->session->userdata('username')])->row_array();

		$data = [
			'hari' => $this->input->post('hari', true),
			'waktu' => $this->input->post('waktu', true),
			'modul' => $this->input->post('modul', true),
			'user_id' => $user_id['id']
		];

		$this->db->insert('sinyaldansistem', $data);
	}

	public function tampilJadwal()
	{
		$user = $this->db->get_where('students', ['username' => $this->session->userdata('username')])->row_array();
		$user_id = $user['id'];

		return $this->db->get_where('sinyaldansistem', ['user_id' => $user_id])->result_array();
	}

	public function ubahJadwal()
	{
		$user_id = $this->db->get_where('students', ['username' => $this->session->userdata('username')])->row_array();

		$data = [
			'hari' => $this->input->post('hari', true),
			'waktu' => $this->input->post('waktu', true),
			'modul' => $this->input->post('modul', true),
			'user_id' => $user_id['id'],
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('sinyaldansistem', $data);
	}
}
