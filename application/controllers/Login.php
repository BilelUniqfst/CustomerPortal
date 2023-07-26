<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


	public function index()
	{
		$this->load->database();
		if ($this->input->post('login'))
		 {
			$userName = $_POST['userName'];
			$userPassword = $_POST['userPassword'];

			if (empty($userName) || empty($userPassword)) {
				$data = array(
					'con' => 'notset',
					'cnx' => ''
				);
				return $this->load->view('loginform', $data);
			} else {
				$sql = "SELECT * FROM users WHERE userName = ? and userPassword = ?";
				$req = $this->db->query($sql, array($userName, $userPassword));


				$sql = "SELECT COUNT(*) FROM users WHERE userName = ? and userPassword = ?";
				$check = $this->db->query($sql, array($userName, $userPassword));

				if (array_values($check->row_array())[0] == 1) 
				{
					$userdata = $req->result_array()[0];
					$_SESSION['userName'] = $userdata['userName'];
					$_SESSION['userId'] = $userdata['userId'];
					//$_SESSION['userPassword'] = $userdata['userPassword'];
					$_SESSION['userRole'] = $userdata['userRole'];
					$_SESSION['userEmail'] = $userdata['userEmail'];
					$_SESSION['userAddress'] = $userdata['userAddress'];
					$_SESSION['userFirstname'] = $userdata['userFirstname'];
					$_SESSION['userLastname'] = $userdata['userLastname'];
					$_SESSION['userPicture'] = $userdata['userPicture'];					
					header('location:home');
				} else {
					$data = array(
						'con' => '',
						'cnx' => 'notset'
					);
					return $this->load->view('loginform', $data);

				}
			}
		}	

		$data = array(
			'con' => '',
			'cnx' => ''
		);
		return $this->load->view('loginform', $data);	
	}


}