<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminEditTicket extends CI_Controller
{
    public function ticket($ticketId)
    {
        
        $this->load->database();
        $sql = "SELECT * FROM tickets WHERE ticketId = ?";
        $ticket = $this->db->query($sql, array($ticketId))->result_array()[0];

        if ($_SESSION['userRole'] == 'ADMIN' or $ticket['ticketuserId'] == $_SESSION['userId']) {
            if ($this->input->post('editticket')) 
            {
                $sql = "UPDATE tickets SET ticketId = ? , 
                ticketuserId = ? ,ticketproductId = ? ,  
                ticketmoduleId = ? ,ticketStatus = ? ,
                ticketDescription = ? ,ticketopeningDate = ? ,
                ticketclosingDate = ? ,ticketAttachment = ?, ticketassignedTo = ?, messages = ? WHERE ticketId = ?";
                $this->db->query(
                    $sql,
                    array(
                        $_POST['ticketId'], $_POST['ticketuserId'], $_POST['ticketproductId'],
                        $_POST['ticketmoduleId'], $_POST['ticketStatus'], $_POST['ticketDescription'],
                        $_POST['ticketopeningDate'], $_POST['ticketclosingDate'], $_POST['ticketAttachment'], $_POST['ticketassignedTo'],  $_POST['ticketMessage'], $_POST['ticketId']
                        
                    )
                );



                echo "<script>
                alert('message sent succesfully'); 
                window.history.go(-1);
                </script>";


                $this->load->helper('url');
                return redirect('tickets?pagination=1');

            }

            $sql = "SElECT * FROM users WHERE userRole='DEVELOPER'";
            $developerslist = $this->db->query($sql)->result_array();


            $data = array(
                "developerslist" => $developerslist,
                "ticketId" => $ticket['ticketId'],
                "ticketuserId" => $ticket['ticketuserId'],
                "ticketproductId" => $ticket['ticketproductId'],
                "ticketmoduleId" => $ticket['ticketmoduleId'],
                "ticketDescription" => $ticket['ticketDescription'],
                "ticketopeningDate" => $ticket['ticketopeningDate'],
                "ticketAttachment" => $ticket['ticketAttachment']

            );

            $this->load->helper('url');
            $this->load->view('sidebar');
            $this->load->view('admineditticket', $data);

        } else {
            $this->load->helper('url');
            return redirect('tickets');
        }
        

    }
    


}