<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
        // If user is not logged in
        if ((!isset($_SESSION['userName'])) && (!isset($_SESSION['userPassword'])))
        {
            header('Location:login');
        }
        
        $this->load->helper('url');
        $this->load->view('sidebar');
		$this->load->view('home');

	}


}