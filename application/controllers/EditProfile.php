<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EditProfile extends CI_Controller
{
    public function index()
    {
        if (isset($_POST['editprofile'])) {

            if (!empty($_FILES['picture']['tmp_name'])) {

                $folder = dirname(__FILE__, 2).'\assets\img\\';
                $file = basename($_FILES['picture']['name']);
                $full_path = $folder . $file;
                move_uploaded_file($_FILES['picture']['tmp_name'], $full_path);

            } else {
                // the 2 removes controller/EditProfile.php from path.
                $full_path = dirname(__FILE__, 2).'assets\img\user.png';
            }

            $this->load->database();

            $sql = "UPDATE users SET "."userFirstname = ?,
            userLastname = ?, userEmail = ?, userAddress = ?,
            userPassword = ?
            WHERE userName = ?";

            $this->db->query($sql, array($_POST['userFirstname'], $_POST['userLastname'], $_POST['userEmail'], $_POST['userAddress'], $_POST['userPassword'], $_POST['userName']));

            $_SESSION['userEmail'] = $_POST['userEmail'];
            $_SESSION['userAddress'] = $_POST['userAddress'];
            $_SESSION['userFirstname'] = $_POST['userFirstname'];
            $_SESSION['userLastname'] = $_POST['userLastname'];
            $_SESSION['userPicture'] = $full_path;
        
        }


        $this->load->helper('url');
        $this->load->view('sidebar');
        $this->load->view('editprofile');

    }


}