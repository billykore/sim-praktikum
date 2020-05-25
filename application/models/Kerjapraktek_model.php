<?php

class Kerjapraktek_model extends CI_Model
{
	public function getUser()
	{
		return $this->db->get_where('students', ['username' => $this->session->userdata('username')])->row_array();
	}
}
