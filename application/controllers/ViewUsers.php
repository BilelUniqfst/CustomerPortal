<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ViewUsers extends CI_Controller
{
	public function index()
	{
		$this->load->database();
		$sql = "SELECT * FROM users ";
		$users = $this->db->query($sql)->result_array();

		$data = array(
			'users' => $users
		);

		$this->load->helper('url');
		$this->load->view('sidebar');
		$this->load->view('viewusers', $data);

	}


}