<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Teams extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mteams');
        $this->load->model('msetting');
        $this->load->model('custom');
        if (!isset($_SESSION['login']['idUser'])) {
            redirect(base_url());
        }
    }

    public function index()
    {
        $getData = array();
        $MTeams = new MTeams();
        $getData['getData'] = $MTeams->getAllData();

        $Msetting = new Msetting();
        $getData['permission'] = $Msetting->getFormRights($_SESSION['login']['idGroup'], '', 'teams');
        $getData['getGroup'] = $Msetting->getAllGroups();

        $this->load->view("include/header", $getData);
        $this->load->view("include/nav");
        $this->load->view("Teams");
        $this->load->view("include/footer");
    }


    public function addData()
    {
        $this->load->library('form_validation');
        $Custom = new Custom();
        $Msetting = new Msetting();
        $insertArr = array();
        $insertArr['idTeam'] = $Msetting->getGUID();
        $insertArr['team_name'] = $this->input->post('team_name');
        $insertArr['isActive'] = 1;
        if (!isset($insertArr['team_name']) || $insertArr['team_name'] == '' || $insertArr['team_name'] == 'undefined') {
            $response = array(array('Invalid team Name '), array('danger'));
            echo json_encode($response, true);
            exit();
        } else {
            $Mteams = new Mteams();
            $result = $Mteams->checkTeamName($insertArr['team_name']);
            if (count($result) <= 0) {
                $InserData = $Custom->Insert($insertArr, 'idTeam', 'teams', 'Y');
                if ($InserData) {
                    $response = array('Inserted Successfully', 'success');
                } else {
                    $response = array('Something went wrong', 'error');
                }

            } else {
                $response = array('team Name already exist', 'danger');
            }
        }
        echo json_encode($response, true);
    }

    public function getEdit()
    {

        $Mteams = new Mteams();
        $result = $Mteams->getTeamById($this->input->post('id'));
        echo json_encode($result, true);
    }

    public function editData()
    {
        $Custom = new Custom();
        $editArr = array();
        $idteam = $this->input->post('idTeam');
        $editArr['team_name'] = $this->input->post('team_name');
        $editData = $Custom->Edit($editArr, 'idTeam', $idteam, 'teams');
        echo $editData;
    }

    public function deleteData()
    {
        $Custom = new Custom();
        $editArr = array();
        $idteam = $this->input->post('id');
        $editArr['isActive'] = 0;
        $editData = $Custom->Edit($editArr, 'idTeam', $idteam, 'teams');
        echo $editData;
    }

}