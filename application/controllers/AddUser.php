<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AddUser extends CI_Controller
{
	public function index()
	{
        if ($this->input->post('adduser'))
        {
			$this->load->database();
			$sql = "INSERT INTO users (userName,userPassword,userFirstname,userLastname,UserRole,userEmail,UserAddress) values(?, ?, ?, ? , ? , ? , ? )";
			$this->db->query($sql, array($_POST['userName'], $_POST['userPassword'],  $_POST['userFirstname'], $_POST['userLastname'], $_POST['userRole'], $_POST['userEmail'], $_POST['userAddress']));

			$this->load->helper('url');
			return redirect('/viewusers');
	
        }
		$this->load->helper('url');
		$this->load->view('sidebar');
		$this->load->view('adduser');
	}


}