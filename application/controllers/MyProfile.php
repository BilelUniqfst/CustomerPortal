<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MyProfile extends CI_Controller
{
	public function index()
	{
		$this->load->helper('url');
        $this->load->view('sidebar');
		$this->load->view('myprofile');

	}


}