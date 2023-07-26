<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Licence extends CI_Controller
{
    public function index()
    {
        if ($this->input->post('generateLicence')) 
        {
            if (array_key_exists('generateLicence', $_POST)) 
            {
                exec('netstat -ano | findstr :9099', $output, $return_var);

                if (!($output == [])) {
                    $string = $output[0];
                    $prefix = "LISTENING";
                    $index = strpos($string, $prefix) + strlen($prefix);
                    $result = substr($string, $index);

                    $script = "taskkill /PID " . $result . " /F";
                    exec($script);
                }

                pclose(popen("start /B java -jar C:\\xampp\htdocs\CustomerPortal\application\LicenceJar\license-1-0.0.1-SNAPSHOT.jar", "r"));

                sleep(10);

                // Use this for linux, pclose is for windows!!

                /*
                exec('java -jar C:/xampp/htdocs/ClientPortal/LicenceJar/license-1-0.0.1-SNAPSHOT.jar > /dev/null &');
                */

                header('Location: http://localhost:9099/UniQ_License/home');
            }
        }

        $this->load->helper('url');
        $this->load->view('sidebar');
        $this->load->view('licence');

    }


}