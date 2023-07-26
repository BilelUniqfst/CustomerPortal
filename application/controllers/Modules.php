<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modules extends CI_Controller
{
	public function index()
	{
		$this->load->database();
		$sql = "SELECT DISTINCT * FROM modules";
		$modules = $this->db->query($sql)->result_array();
		$data = array(
			'modules' => $modules
		);
		$this->load->helper('url');
		$this->load->view('sidebar');
		$this->load->view('modules', $data);

	}


}