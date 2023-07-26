<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SendTicket extends CI_Controller
{
    public function index()
    {
        $this->load->database();
        $this->load->helper(array('form', 'url'));


        $full_path = "";
        if (isset($_POST['sendticket'])) {
            if (!empty($_FILES['file']['tmp_name'])) {
                // Set preference 
                $config['upload_path'] = "./assets/ticketattachements/";
                $config['allowed_types'] = 'gif|jpg|png|csv|docx';
                $config['file_name'] = $_FILES['file']['name'];
                $config['encrypt_name'] = true;
                // Load upload library 
                $this->load->library('upload');
                $this->upload->initialize($config);

                // File upload

                if (!$this->upload->do_upload('file')) {
                    echo '<h1>'.$this->upload->display_errors().'</h1>';
                    return null;
                } 

                $full_path = $this->upload->data()['file_name'];
            }

            $sql = "INSERT INTO tickets (ticketuserId, ticketproductId, ticketmoduleId, ticketDescription, ticketopeningDate, ticketclosingDate, ticketStatus, ticketassignedTo, ticketAttachment,ticketPatch) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?)";
            $this->db->query($sql, array($_POST['ticketuserId'], $_POST['ticketproductId'], $_POST['ticketmoduleId'], $_POST['ticketDescription'], date('Y-m-d H:i:s'), 0, 'NEW', '0', $full_path, 0));

            echo "<script>alert('Successfully Sent!!!'); window.location='tickets'</script>";

            return redirect('/tickets?pagination=1');

        }

        $sql = 'SELECT * FROM products WHERE productclientId= ?';
        $data = array(
            'clientproducts' => $this->db->query($sql, array((int) $_SESSION['userId']))->result_array()
        );

        $this->load->view('sidebar');
        return $this->load->view('sendticket', $data);


    }

    public function getmodules()
    {
        if (isset($_GET["productId"]) && !empty($_GET["productId"])) {
            $productId = (int) $_GET['productId'];

            $sql = 'SELECT * FROM products JOIN product_module ON products.productId=product_module.productId JOIN modules ON product_module.moduleId=modules.moduleId WHERE product_module.productId= ?';
            $query = $this->db->query($sql, array($productId))->result_array();
            $rowCount = count($query);

            if ($rowCount > 0) {
                echo '<option value="">Select</option>';
                foreach ($query as $row) {
                    echo '<option value="' . $row['moduleId'] . '">' . $row['moduleName'] . '</option>';
                }
            } else {
                echo '<option value="">Module not available</option>';
            }
        }

    }

}