<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
	public function index()
	{
		$this->load->database();
		$sql = "SELECT DISTINCT * FROM products JOIN product_module ON products.productId=product_module.productId JOIN modules ON product_module.moduleId=modules.moduleId ORDER BY products.productId";
		$products = $this->db->query($sql)->result_array();


		
		$sql = "SELECT DISTINCT * FROM (products JOIN product_module ON products.productId=product_module.productId JOIN modules ON product_module.moduleId=modules.moduleId) WHERE products.productclientId= ? ORDER BY products.productId";
		$clientproducts = $this->db->query($sql, array($_SESSION['userId']))->result_array();

		$data = array(
			'products' => $products,
			'clientproducts' => $clientproducts
		);

		$this->load->helper('url');
		$this->load->view('sidebar');
		$this->load->view('products', $data);

	}


}