<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: shahroz.khan
 * Date: 23/10/2018
 * Time: 10:11 AM
 */
class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdashboard');
        if (!isset($_SESSION['login']['idUser'])) {
            redirect(base_url('login'));
        }
    }

    function index($msg = NULL)
    {
        $getData = array();
        $this->load->model('msetting');
        $Msetting = new Msetting();
        $getData['permission'] = $Msetting->getFormRights($_SESSION['login']['idGroup'], '', 'form_view');
        $getData['getGroup'] = $Msetting->getAllGroups();


        $this->load->model('mform_view');
        $MForm_View = new MForm_View();
        $lastSevenDays = date('Y-m-d 00:00:00', strtotime('-7 days'));

        if (isset($getData['permission'][0]->CanViewAllDetail) && $getData['permission'][0]->CanViewAllDetail == 1) {
            $getData['getData'] = $MForm_View->getTestForms('', 1, 0);
            $getData['New_Applications'] = $MForm_View->getTestForms('', 1, 1);
            $getData['All_Applications'] = $MForm_View->getDashboardForms('', 1, '');
            $getData['LastSevenDays'] = $MForm_View->getDashboardForms('', 1, $lastSevenDays);
            $getData['Drafts_Application'] = $MForm_View->getDashboardForms('', 0, '');
        } else {
            $getData['getData'] = $MForm_View->getTestForms($_SESSION['login']['idUser'], 1, 0);
            $getData['New_Applications'] = $MForm_View->getTestForms($_SESSION['login']['idUser'], 1, 1);
            $getData['All_Applications'] = $MForm_View->getDashboardForms($_SESSION['login']['idUser'], 1, '');
            $getData['LastSevenDays'] = $MForm_View->getDashboardForms($_SESSION['login']['idUser'], 1, $lastSevenDays);
            $getData['Drafts_Application'] = $MForm_View->getDashboardForms($_SESSION['login']['idUser'], 0, '');
        }
        $getData['notifications'] = $MForm_View->getNotifications($_SESSION['login']['idUser']);

        $this->load->view('include/header', $getData);
        $this->load->view('include/nav');
        $this->load->view('dashboard');
        $this->load->view('include/footer');
    }

    /*Setting Page, User Rights*/
    function getMenuData()
    {
        $idGroup = $_SESSION['login']['idGroup'];
        $Menu = '';
        $isPageAdmin = 0;
        $AdminMenu = '';
        $this->load->model('msetting');
        $Msetting = new Msetting();
        $getDataRights = $Msetting->getFormRights($idGroup, '1', '');
        if (isset($getDataRights) && count($getDataRights) >= 1) {
            foreach ($getDataRights as $pages) {
                if ($pages->isParent == 1 || $pages->idParent == '1263d139-3698-46aa-b8c6-35b20019fd69') {
                    $AdminMenu .= '<li><a href="' . base_url($pages->page_url) . '">' . $pages->page_name . '</a></li>';
                    $isPageAdmin = 1;
                } else {
                    $Menu .= '<li><a href="' . base_url($pages->page_url) . '">' . $pages->page_name . '</a></li>';
                }
            }

            if ($isPageAdmin === 1) {
                $Menu .= "<li class='submenu_trigger'>";
                $Menu .= "<a href='javascript:void(0)'>Admin</a>";
                $Menu .= "<ul>";
                $Menu .= $AdminMenu;
                $Menu .= "</ul>";
                $Menu .= "</li>";
            }

        } else {
            $Menu = '';
        }
        echo $Menu;
    }

    /*Logout*/
    function getLogout()
    {
        session_destroy();
    }

}
