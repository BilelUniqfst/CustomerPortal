<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reports extends CI_Controller
{
	public function index()
	{
        $this->load->view('sidebar');
		$this->load->view('reports');

	}


}