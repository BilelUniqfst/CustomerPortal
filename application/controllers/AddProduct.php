<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AddProduct extends CI_Controller
{
	public function index()
	{
        if ($this->input->post('addproduct'))
        {
			$this->load->database();
			$sql = "INSERT INTO products (productName,productDescription,productVersion,productclientId) values(?,?,?,?)";
			$this->db->query($sql, array($_POST['productName'], $_POST['productDescription'], $_POST['productVersion'], $_POST['productclientId']));

            $sql = "SELECT * FROM products
            WHERE products.productId = (
                SELECT MAX(products.productId) FROM products)";

            $getproductid = (int) array_values($this->db->query($sql)->row_array())[0];

            foreach($_POST['modules'] as $module)
            {
                $sql = "INSERT INTO product_module (productId, moduleId) VALUES (?, ?)";
                $this->db->query($sql, array($getproductid, (int) $module));
                
            }

            $this->load->helper('url');
			return redirect('/products');
	
        }

        $sql = "SElECT * FROM users WHERE userRole='CLIENT'";
        $clientslist = $this->db->query($sql)->result_array();

        $sql = "SELECT * FROM modules";
        $moduleslist = $this->db->query($sql)->result_array();

        
        $data = array(
            "clientslist" => $clientslist,
            "moduleslist" => $moduleslist
        );

        $this->load->helper('url');
		$this->load->view('sidebar');
		$this->load->view('addproduct', $data);
	}


}