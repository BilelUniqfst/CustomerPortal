<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DeveloperEditTicket extends CI_Controller
{
	public function ticket($ticketId)
	{
        $this->load->database();
        $sql = "SELECT * FROM tickets WHERE ticketId = ?";
        $ticket = $this->db->query($sql, array($ticketId))->result_array()[0];

        if ($_SESSION['userRole'] == 'DEVELOPER')
        {
            if (isset($_POST['closeticket'])) 
            {

              if(!empty($_FILES['file']['tmp_name']))  
                {
                  $config['upload_path'] = "./assets/patches/";
                  $config['allowed_types'] = 'gif|jpg|png|csv|docx|war';
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
  
                  $patch = $this->upload->data()['file_name'];
                } 
                else 
                {
                  $patch = $_POST['ticketPatch'];
                }
                if ($_POST['ticketStatus'] == 'CLOSED') {
                  $date = date('Y-m-d H:i:s');
                } else {
                  $date = '';
                }

                $sql = "UPDATE tickets SET ticketId = ? , 
                ticketuserId = ? ,ticketproductId = ? ,  
                ticketmoduleId = ? ,ticketStatus = ? ,
                ticketDescription = ? ,ticketopeningDate = ? ,
                ticketclosingDate = ? ,ticketAttachment = ? ,
                ticketPatch = ?, messages = ? WHERE ticketId = ?";

                $this->db->query($sql, array($_POST['ticketId'], $_POST['ticketuserId'],
                 $_POST['ticketproductId'], $_POST['ticketmoduleId'], $_POST['ticketStatus'],
                  $_POST['ticketDescription'], $_POST['ticketopeningDate'],
                   $date, $_POST['ticketAttachment'], $patch, $_POST['ticketMessage'], $_POST['ticketId']));

                $this->load->helper('url');
                return redirect('tickets?pagination=1');

              }
  
            $data = array(
                "ticketId" => $ticket['ticketId'],
                "ticketuserId" => $ticket['ticketuserId'],
                "ticketproductId" => $ticket['ticketproductId'],
                "ticketmoduleId" => $ticket['ticketmoduleId'],
                "ticketDescription" => $ticket['ticketDescription'],
                "ticketopeningDate" => $ticket['ticketopeningDate'],
                "ticketAttachment" => $ticket['ticketAttachment'],
                "ticketassignedTo" => $ticket['ticketassignedTo']

            );
    
            $this->load->helper('url');
            $this->load->view('sidebar');
            return $this->load->view('developereditticket', $data);

        }
        else 
        { 
            $this->load->helper('url');
            return redirect('tickets');
        }



	}


}