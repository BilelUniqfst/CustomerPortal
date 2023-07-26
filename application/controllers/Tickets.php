<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tickets extends CI_Controller
{
	public function index()
	{
        $this->load->database();
        $min = 0 + (50 * ($_GET["pagination"] - 1));
        $max = 50 * $_GET["pagination"];

        if ($_SESSION['userRole'] == 'CLIENT')
        {
            $sql = 'SELECT * FROM (tickets JOIN products ON ( tickets.ticketuserId=products.productclientId AND tickets.ticketproductId=products.productId) JOIN modules ON tickets.ticketmoduleId=modules.moduleId JOIN users ON tickets.ticketuserId=users.userId)WHERE tickets.ticketuserId= ?';
            $query = $this->db->query($sql, array($_SESSION['userId']))->result_array();
            $count = count($query);


            $data = array(
                "admintickets" => null,
                "developertickets" => null,
                "clienttickets" => array_slice($query, $min, $max),
                "rowcount" => $count
     
            );
        }

        if ($_SESSION['userRole'] == 'ADMIN')
        {
            $sql = "SELECT * FROM (tickets JOIN products ON ( tickets.ticketuserId=products.productclientId AND tickets.ticketproductId=products.productId) JOIN modules ON tickets.ticketmoduleId=modules.moduleId JOIN users ON tickets.ticketuserId=users.userId)";
            $query = $this->db->query($sql)->result_array();
            $count = count($query);
            $data = array(
                "admintickets" => array_slice($query, $min, $max),
                "developertickets" => null,
                "clienttickets" => null,
                "rowcount" => $count
     
            );
        }

        if ($_SESSION['userRole'] == 'DEVELOPER')
        {
            $sql = "SELECT * FROM (tickets JOIN products ON ( tickets.ticketuserId=products.productclientId AND tickets.ticketproductId=products.productId) JOIN modules ON tickets.ticketmoduleId=modules.moduleId JOIN users ON tickets.ticketuserId=users.userId)WHERE tickets.ticketassignedTo= ?";
            $query = $this->db->query($sql, array($_SESSION['userId']))->result_array();
            $count = count($query);
            $data = array(
                "admintickets" => null,
                "developertickets" => array_slice($query, $min, $max),
                "clienttickets" => null,
                "rowcount" => $count
     
            );

        }

        $this->load->helper('url');
		$this->load->view('sidebar');
		$this->load->view('tickets', $data);
	}

    public function downloadattachement()
    {
        if (isset($_GET["attachement"]) && !empty($_GET["attachement"])) 
        {
            $this->load->helper('download');
            force_download('assets/ticketattachements/'.$_GET["attachement"], null); 
        }
    }

    public function downloadpatch()
    {
        if (isset($_GET["attachement"]) && !empty($_GET["attachement"])) 
        {
            $this->load->helper('download');
            force_download('assets/patches/'.$_GET["attachement"], null); 
        }
    }


}