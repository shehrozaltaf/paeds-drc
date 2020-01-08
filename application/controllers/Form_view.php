<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Created by PhpStorm.
 * User: shahroz.khan
 * Date: 23/10/2018
 * Time: 11:26 AM
 */
class Form_view extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mform_view');
        $this->load->model('msetting');
        $this->load->model('custom');
        if (!isset($_SESSION['login']['idUser'])) {
            redirect(base_url());
        }
    }

    public function index()
    {
        $getData = array();
        $Msetting = new Msetting();
        $getData['permission'] = $Msetting->getFormRights($_SESSION['login']['idGroup'], '', 'form_view');
        $getData['getGroup'] = $Msetting->getAllGroups();

        $MForm_View = new MForm_View();
        if (isset($getData['permission'][0]->CanViewAllDetail) && $getData['permission'][0]->CanViewAllDetail == 1) {
            $getData['getData'] = $MForm_View->getTestForms('', 1, 0);
        } else {
            $getData['getData'] = $MForm_View->getTestForms($_SESSION['login']['idUser'], 1, 0);
        }
        $getData['notifications'] = $MForm_View->getNotifications($_SESSION['login']['idUser']);

        $this->load->view('include/header', $getData);
        $this->load->view('include/nav');
        $this->load->view('form_view');
        $this->load->view('include/footer');
    }

    public function newForms()
    {
        $getData = array();
        $Msetting = new Msetting();
        $getData['permission'] = $Msetting->getFormRights($_SESSION['login']['idGroup'], '', 'form_view');
        $getData['getGroup'] = $Msetting->getAllGroups();

        $MForm_View = new MForm_View();
        if (isset($getData['permission'][0]->CanViewAllDetail) && $getData['permission'][0]->CanViewAllDetail == 1) {
            $getData['getData'] = $MForm_View->getTestForms('', 1, 1);
        } else {
            $getData['getData'] = $MForm_View->getTestForms($_SESSION['login']['idUser'], 1, 1);
        }
        $getData['notifications'] = $MForm_View->getNotifications($_SESSION['login']['idUser']);

        $this->load->view('include/header', $getData);
        $this->load->view('include/nav');
        $this->load->view('form_view');
        $this->load->view('include/footer');
    }
}

?>