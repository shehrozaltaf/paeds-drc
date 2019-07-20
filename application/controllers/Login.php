<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: shahroz.khan
 * Date: 23/10/2018
 * Time: 10:11 AM
 */
class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('mlogin');
        if (isset($_SESSION['login']['idUser'])) {
            redirect(base_url('dashboard'));
        }
    }

    function index($msg = NULL)
    {
        $SeesionInfo = $this->session->all_userdata();
        if (isset($_SESSION['login']['idUser'])) {
            redirect(base_url('dashboard'));
        } else {
            $this->load->view('login');
        }
    }

    function getLogin()
    {
        $Login = new MLogin();
        $this->form_validation->set_rules('UserName', 'UserName', 'required');
        $this->form_validation->set_rules('Password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $dataArray = array();
            redirect('admin/index');
        } else {
            $username = $this->input->post('UserName');
            $Password = $this->input->post('Password');
            $result = $Login->validate($username, $Password);
            if (count($result) == 1) {
                if ($Password === $this->encrypt->decode($result[0]->Password)) {
                    $data = array(
                        'idUser' => $result[0]->idUser,
                        'UserName' => $result[0]->UserName,
                        'full_name' => $result[0]->full_name,
                        'idGroup' => $result[0]->idGroup,
                        'idOrg' => $result[0]->id_org
                    );
                    $this->session->set_userdata('login', $data);
                    echo 1;
                } else {
                    echo 2;
                }
            } else {
                echo 3;
            }
        }
    }

    public function addData()
    {
        $this->load->model('musers');
        $this->load->model('msetting');
        $this->load->model('custom');
        $Custom = new Custom();
        $Msetting = new Msetting();
        $insertArr = array();
        $insertArr['idUser'] = $Msetting->getGUID();
        $insertArr['full_name'] = $this->input->post('full_name');
        $insertArr['UserName'] = $this->input->post('username');
        $insertArr['Password'] = $this->input->post('password');
        $insertArr['designation'] = $this->input->post('designation');
        $insertArr['idGroup'] = $this->input->post('idGroup');
        $insertArr['id_org'] = 1;
        $insertArr['isActive'] = 1;
        if (!isset($insertArr['UserName']) || $insertArr['UserName'] == '' || $insertArr['UserName'] == 'undefined') {
            $response = array(array('Invalid User Name '), array('danger'));
            echo json_encode($response, true);
            exit();
        }
        if (!isset($insertArr['Password']) || $insertArr['Password'] == '' || $insertArr['Password'] == 'undefined') {
            $response = array(array('Invalid Password'), array('danger'));
            echo json_encode($response, true);
            exit();
        }
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $response = array(array('Invalid User Name & Password'), array('danger'));
        } else {
            $MUsers = new MUsers();
            $Password = $this->encrypt->encode($insertArr['Password']);
            $insertArr['Password'] = $Password;
            $result = $MUsers->checkUsername($insertArr['UserName']);
            if (count($result) <= 0) {
                $InserData = $Custom->Insert($insertArr, 'idUser', 'users', 'Y');
                if ($InserData) {
                    $response = array('Inserted Successfully', 'success');
                    $Subject = "SignUp Registeration: PAEDS DRC";
                    $Content = "Dear " . $insertArr['full_name'] . "<br/><br/>
<p>You have successfully registered at AKU Paediatrics DRC portal. You can access at <a href='" . base_url() . "'>" . base_url() . "</a></p>
<p>Your Username/Email is: " . $insertArr['UserName'] . "</p><br/> 
<p style='  background-color: yellow; font-weight: 600;'>Note: This is a computer generated e-mail please do not reply to it.</p> <br> 
<p>Thank you </p> 
<p>Regards,<br>ERC Secretariat </p>";
                    $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                        <html xmlns="http://www.w3.org/1999/xhtml">
                        <head>
                            <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
    <title>' . html_escape($Subject) . '</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;font-size: 16px;
        }
    </style>
</head>
<body>
' . $Content . '
</body>
</html>';

                    $email_setting = array('mailtype' => 'html');
                    $config['useragent'] = 'PHP/' . phpversion();
                    $this->email->initialize($email_setting);
                    $this->email
                        ->from('sk_khan911@hotmail.com')
                        ->to($insertArr['UserName'])
                        ->subject($Subject)
                        ->message($body)
                        ->send();
                    if (isset($_POST['signUp']) && $_POST['signUp'] == '1') {
                        $data = array(
                            'idUser' => $insertArr['idUser'],
                            'UserName' => $insertArr['UserName'],
                            'full_name' => $insertArr['full_name'],
                            'idGroup' => $insertArr['idGroup'],
                            'idOrg' => $insertArr['idUser']
                        );
                        $this->session->set_userdata('login', $data);
                    }
                } else {
                    $response = array('Something went wrong', 'error');
                }

            } else {
                $response = array('User Name already exist', 'danger');
            }
        }
        echo json_encode($response, true);
    }

    function ForgetPass()
    {
        $FG = new MLogin();
        $email = $_POST['Email'];
        $ForgotPassword = $FG->ForgetPass($email);
        if (isset($ForgotPassword[0]) && $ForgotPassword[0]->Detail != '') {
            $newPassword = $this->randomPassword();
            $updateUserPassword = $FG->updateUserPassword($ForgotPassword[0]->UserName, $newPassword);
            if ($updateUserPassword) {
                $this->load->library('email');
                $Subject = "Forget Password";
                $Content = "";
                $Content = "Dear " . $ForgotPassword[0]->UserName . "<br/><br/><br/><br/>" . " Your new Password is  " . $ForgotPassword[0]->Password;
                $Content .= "<br/><br/>";
                $body =
                    '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                        <html xmlns="http://www.w3.org/1999/xhtml">
                        <head>
                            <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
    <title>' . html_escape($Subject) . '</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;font-size: 16px;
        }
    </style>
</head>
<body>
' . $Content . '
</body>
</html>';
                $to = ($_POST['Email']);
                $result = $this->email
                    ->from('shehroz.altaf92@gmail.com')
                    ->to($to)
                    ->subject($Subject)
                    ->message($body)
                    ->send();
            }
        } else {
            echo 2;
        }
    }

    function randomPassword()
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 6; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }
}
