<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AddModule extends CI_Controller
{
	public function index()
	{
        if ($this->input->post('addmodule'))
        {
			$this->load->database();
			$sql = "INSERT INTO modules (moduleName) VALUES(?)";
			$this->db->query($sql, array($_POST['moduleName']));

			
            $this->load->helper('url');
			return redirect('/modules');
	
        }
		$this->load->helper('url');
		$this->load->view('sidebar');
		$this->load->view('addmodule');
	}


}