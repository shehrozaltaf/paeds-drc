<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Created by PhpStorm.
 * User: shahroz.khan
 * Date: 23/10/2018
 * Time: 11:26 AM
 */
class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('musers');
        $this->load->model('msetting');
        $this->load->model('custom');
        if (!isset($_SESSION['login']['idUser'])) {
            redirect(base_url());
        }
    }

    public function index()
    {
        $getData = array();
        $MUsers = new MUsers();
        $getData['getData'] = $MUsers->getUsers();

        $Msetting = new Msetting();
        $getData['permission'] = $Msetting->getFormRights($_SESSION['login']['idGroup'], '', 'users');
        $getData['getGroup'] = $Msetting->getAllGroups();

        $this->load->view('include/header', $getData);
        $this->load->view('include/nav');
        $this->load->view('Users');
        $this->load->view('include/footer');
    }

    public function addData()
    {
        $this->load->library('form_validation');
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

    public function addData2()
    {
        $this->load->library('form_validation');
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
                } else {
                    $response = array('Something went wrong', 'error');
                }

            } else {
                $response = array('User Name already exist', 'danger');
            }
        }
        echo json_encode($response, true);
    }

    public function getEdit()
    {

        $MUsers = new MUsers();
        $result = $MUsers->getUserById($this->input->post('id'));
        $response[0] = array('idUser' => $result[0]->idUser,
            'UserName' => $result[0]->UserName,
            'Password' => $this->encrypt->decode($result[0]->Password) ,
            'full_name' => $result[0]->full_name,
            'designation' => $result[0]->designation,
            'id_org' => $result[0]->id_org,
            'idGroup' => $result[0]->idGroup
        );
        echo json_encode($response, true);
    }

    public function editData()
    {
        $Custom = new Custom();
        $editArr = array();
        $idUser = $this->input->post('idUser');
        $editArr['full_name'] = $this->input->post('full_name');
        $editArr['UserName'] = $this->input->post('username');
        $editArr['Password'] = $this->encrypt->encode($this->input->post('password'));
        $editArr['designation'] = $this->input->post('designation');
        $editArr['idGroup'] = $this->input->post('idGroup');
        $editArr['id_org'] = 1;
        $editData = $Custom->Edit($editArr, 'idUser', $idUser, 'users');
        if($editData){
            $data = array(
                'idUser' =>$idUser,
                'UserName' => $editArr['UserName'],
                'idGroup' =>  $editArr['idGroup'],
                'idOrg' => $editArr['id_org']
            );
            $this->session->set_userdata('login', $data);
        }
        echo $editData;
    }

    public function deleteData()
    {
        $Custom = new Custom();
        $editArr = array();
        $idUser = $this->input->post('id');
        $editArr['isActive'] = 0;
        $editData = $Custom->Edit($editArr, 'idUser', $idUser, 'users');
        echo $editData;
    }
}