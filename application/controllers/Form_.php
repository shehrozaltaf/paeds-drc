<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Created by PhpStorm.
 * User: shahroz.khan
 * Date: 23/10/2018
 * Time: 11:26 AM
 */
class Form extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('msetting');
        $this->load->model('custom');
        $this->load->model('mform_view');
        date_default_timezone_set('Asia/Karachi');
        if (!isset($_SESSION['login']['idUser'])) {
            redirect(base_url());
        }
    }

    public function index()
    {
        $getData = array();

        $Msetting = new Msetting();
        $MForm_View = new MForm_View();
        $getData['permission'] = $Msetting->getFormRights($_SESSION['login']['idGroup'], '', 'form');
        $getData['getGroup'] = $Msetting->getAllGroups();
        $getData['notifications'] = $MForm_View->getNotifications($_SESSION['login']['idUser']);
        $this->load->view('include/header', $getData);
        $this->load->view('include/nav');
        $this->load->view('form');
        $this->load->view('include/footer');
    }

    /*AIMS Application View*/
    public function aims_application_formview()
    {
        $getData = array();
        $Msetting = new Msetting();
        $MForm_View = new MForm_View();
        $getData['permission'] = $Msetting->getFormRights($_SESSION['login']['idGroup'], '', 'form');
        $getData['getGroup'] = $Msetting->getAllGroups();
        $getData['notifications'] = $MForm_View->getNotifications($_SESSION['login']['idUser']);
        $this->load->view('include/header', $getData);
        $this->load->view('include/nav');
        $this->load->view('aims_form');
        $this->load->view('include/footer');
    }

    public function ReadNoti()
    {

        if (isset($_POST['idNotification']) && $_POST['idNotification'] != '') {
            $editArr = array();
            $editArr['Seen'] = 1;
            $Custom = new Custom();
            $Custom->Edit($editArr, 'idNotification', $_POST['idNotification'], 'notification');
            $response = array('Successfully submitted', 'success');
        } else {
            $response = array('Something went wrong', 'error');
        }
        echo json_encode($response);
    }

    public function insert_update_comment()
    {
        $createdby = $_SESSION['login']['idUser'];
        $Custom = new Custom();
        if (isset($_POST['id']) && $_POST['id'] != '' && isset($_POST['idComment']) && $_POST['idComment'] != '') {
            $editArr = array();
            $editArr['createdby'] = $createdby;
            if ($_POST['id'] == 'isComment' && $_POST['value'] == '1') {
                $editArr[$_POST['id']] = $_POST['value'];
                $this->InsertNotifcation('comment', "New Comments Recieved", "You have received a new comment",
                    0, $_POST['createdBy'], 'project_detail/' . $_POST['idApplication'], 'uk-text-primary');
                $response = array('Successfully submitted', 'success');
                echo json_encode($response);
            } else {
                $editArr[$_POST['id'] . '_comment'] = $_POST['value'];
            }
            $Custom->Edit($editArr, 'idApplicationComment', $_POST['idComment'], 'application_comment');

        }

    }

    public function InsertNotifcation($icon, $Title, $Message, $Seen, $To, $Url, $Class)
    {
        $createdby = $_SESSION['login']['idUser'];
        $Custom = new Custom();
        $insertNotiArr = array();
        $insertNotiArr['Icon'] = $icon;
        $insertNotiArr['Title'] = $Title;
        $insertNotiArr['Message'] = $Message;
        $insertNotiArr['Seen'] = $Seen;
        $insertNotiArr['Url'] = $Url;
        $insertNotiArr['Class'] = $Class;
        $insertNotiArr['To'] = $To;
        $insertNotiArr['createdBy'] = $createdby;
        $insertNotiArr['createdDateTime'] = date('Y-m-d H:i:s');
        $InserData = $Custom->Insert($insertNotiArr, 'idNotification', 'notification', 'Y');
        return $InserData;
    }

    public function form_drafts_view()
    {
        $getData = array();
        $Msetting = new Msetting();
        $getData['permission'] = $Msetting->getFormRights($_SESSION['login']['idGroup'], '', 'form_drafts');
        $getData['getGroup'] = $Msetting->getAllGroups();


        $MForm_View = new MForm_View();
        if (isset($getData['permission'][0]->CanViewAllDetail) && $getData['permission'][0]->CanViewAllDetail == 1) {
            $getData['getData'] = $MForm_View->getTestForms('', 0, 0);
        } else {
            $getData['getData'] = $MForm_View->getTestForms($_SESSION['login']['idUser'], 0, 0);
        }
        $getData['notifications'] = $MForm_View->getNotifications($_SESSION['login']['idUser']);

        $this->load->view('include/header', $getData);
        $this->load->view('include/nav');
        $this->load->view('form_drafts');
        $this->load->view('include/footer');
    }

    public function form_project_detail_view($slug)
    {
        $getData = array();
        $MForm_View = new MForm_View();
        $getData['getData'] = $MForm_View->getFormDetail($slug);
        $Msetting = new Msetting();
        $getData['permission'] = $Msetting->getFormRights($_SESSION['login']['idGroup'], '', 'form_drafts');
        $getData['getGroup'] = $Msetting->getAllGroups();
        $getData['notifications'] = $MForm_View->getNotifications($_SESSION['login']['idUser']);

        $editArr['isNew'] = 0;
        $Custom = new Custom();
        $Custom->Edit($editArr, 'idApplication', $slug, 'application');

        $this->load->view('include/header', $getData);
        $this->load->view('include/nav');
        $this->load->view('form_project_detail');
        $this->load->view('include/footer');
    }

    public function form_edit($slug)
    {
        $getData = array();
        $MForm_View = new MForm_View();
        $getData['getData'] = $MForm_View->getFormEditDetail($slug);
        $getData['getData'][0]->edit = 'submit_new';
        $getData['notifications'] = $MForm_View->getNotifications($_SESSION['login']['idUser']);
        $Msetting = new Msetting();
        $getData['permission'] = $Msetting->getFormRights($_SESSION['login']['idGroup'], '', 'form_drafts');
        $getData['getGroup'] = $Msetting->getAllGroups();

        $this->load->view('include/header', $getData);
        $this->load->view('include/nav');
        $this->load->view('form');
        $this->load->view('include/footer');
    }

    public function form_draft_edit($slug)
    {
        $getData = array();
        $MForm_View = new MForm_View();
        $getData['getData'] = $MForm_View->getFormDraftDetail($slug);
        $getData['getData'][0]->edit = 'Yes';
        $Msetting = new Msetting();
        $getData['permission'] = $Msetting->getFormRights($_SESSION['login']['idGroup'], '', 'form_drafts');
        $getData['getGroup'] = $Msetting->getAllGroups();
        $getData['notifications'] = $MForm_View->getNotifications($_SESSION['login']['idUser']);
        $this->load->view('include/header', $getData);
        $this->load->view('include/nav');
        $this->load->view('form');
        $this->load->view('include/footer');
    }

    function insertZipFile($idForm)
    {
        $download_folder = 'assets/uploads/' . $idForm . '/';
        $zip = new ZipArchive();
        $fileconpress = $download_folder . $idForm . '_' . $_POST['ReviewNo'] . ".zip";
        foreach ($_FILES as $key => $files) {
            if ($key == 'attachment') {
                foreach ($_FILES['attachment']['name'] as $key2 => $files2) {
                    $nameFile = $files2;
                    $tmpName = $_FILES['attachment']['tmp_name'][$key2];
                    $conpress = $zip->open($fileconpress, ZIPARCHIVE::CREATE);
                    if ($conpress === true) {
                        $zip->addFile($tmpName, $nameFile);
                        $zip->close();
                        echo $fileconpress . "<br/>";
                        echo "yess !! Success!!!! ";
                    } else {
                        echo " Oh No! Error";
                    }
                }
            } else {
                $conpress = $zip->open($fileconpress, ZIPARCHIVE::CREATE);
                $nameFile = $_FILES[$key]['name'];
                $tmpName = $_FILES[$key]['tmp_name'];
                if ($conpress === true) {
                    $zip->addFile($tmpName, $nameFile);
                    $zip->close();
                    echo $fileconpress . "<br/>";
                    echo "yess !! Success!!!! ";
                } else {
                    echo " Oh No! Error";
                }
            }
        }
    }

    public function sendEmail()
    {
        $createdby = $_SESSION['login']['idUser'];
        $Custom = new Custom();
        $MForm_View = new MForm_View();
        $Msetting = new Msetting();
        $insertArr = array();
        $EditArr = array();
        $EmailContent = '';

        /* $idTestForm = $Msetting->getGUID();
         $config['upload_path'] = 'assets/uploads';
         $config['allowed_types'] = 'jpg|jpeg|gif|png|pdf|xls|xlsx|csv|doc|docx|txt|rar|zip';
         $config['max_size'] = 10000;*/


        $getMinimumReviewer = $MForm_View->getMinimumReviewer();
        $assignedTo = $getMinimumReviewer[0]->idUser;

        if (isset($_POST['isEdit']) && $_POST['isEdit'] == 'Yes') {
            $idApplicationGuid = $_POST['idApplicationGuid'];
            $idForm = $_POST['idApplication'];
            foreach ($_POST as $key => $data) {
                if ($key == 'idApplicationGuid' || $key == 'isEdit') {

                } else {
                    $EditArr[$key] = $data;
                    $EmailContent .= " <tr>
                            <td>" . $key . " </td>
                            <td>" . $data . " </td>
                      </tr> ";
                }
            }
            $path = $idForm;
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $config['file_name'] = $idForm . '_' . $_POST['ReviewNo'];
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('attachment')) {
                $file = '';
            } else {
                $data = array('upload_data' => $this->upload->data());
                $file = 'assets/uploads/' . $path . '/' . $data['upload_data']['file_name'];
            }
            $EditArr['attach_files'] = $data['upload_data']['file_name'];
            $InserData = $Custom->Edit($EditArr, 'idApplicationGuid', $idApplicationGuid, 'application');
        } else {
            if (isset($_POST['isEdit']) && $_POST['isEdit'] == 'submit_new') {
                $idForm = $_POST['idApplication'];
            } else {
                $maxIdForm = $MForm_View->getMaxIdForm();
                $idForm = $maxIdForm[0]->maxIdForm + 1;
            }
//            $insertArr['idApplicationGuid'] = $idTestForm;
            $insertArr['idApplication'] = $idForm;
            foreach ($_POST as $key => $data) {
                if ($key == 'idApplicationGuid' || $key == 'idApplication' || $key == 'isEdit') {

                } else {
                    $insertArr[$key] = $data;
                    $EmailContent .= " <tr>
                            <td>" . $key . " </td>
                            <td>" . $data . " </td>
                      </tr> ";
                }
            }
            /* $config['file_name'] = $idForm . '_' . $_POST['ReviewNo'];
             $path = $idForm;
             if (!file_exists($path)) {
                 mkdir($path, 0777, true);
             }
             $this->load->library('upload', $config);
             if (!$this->upload->do_upload('attachment')) {
                 $file = '';
             } else {
                 $data = array('upload_data' => $this->upload->data());
                 $file = 'assets/uploads/' . $path . '/' . $data['upload_data']['file_name'];
             }*/

            $insertArr['createdBy'] = $createdby;
            $insertArr['createdDateTime'] = date('Y-m-d H:i:s');
            $file_name = $idForm . '_' . $_POST['ReviewNo'] . ".zip";
            $insertArr['attach_files'] = $file_name;
//            $insertArr['attach_files']= $this->insertZipFile($idForm);
//            $insertArr['attach_files'] = $data['upload_data']['file_name'];
            $InserData = $Custom->Insert($insertArr, 'idApplicationGuid', 'application', 'Y');

        }

        if ($InserData && isset($_POST['isSubmit']) && $_POST['isSubmit'] == 1) {
            /*=======Image Zip Upload Start=============*/
            $path = 'assets/uploads/' . $idForm;
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $download_folder = $path . '/';
            $zip = new ZipArchive();
            $fileconpress = $download_folder . $file_name;
            foreach ($_FILES as $key => $files) {
                if ($key == 'attachment') {
                    foreach ($_FILES['attachment']['name'] as $key2 => $files2) {
                        $nameFile = $files2;
                        $tmpName = $_FILES['attachment']['tmp_name'][$key2];
                        $conpress = $zip->open($fileconpress, ZIPARCHIVE::CREATE);
                        if ($conpress === true) {
                            $zip->addFile($tmpName, $nameFile);
                            $zip->close();
                            echo $fileconpress . "<br/>";
                            echo "yess !! Success!!!! ";
                        } else {
                            echo " Oh No! Error";
                        }
                    }
                } else {
                    $conpress = $zip->open($fileconpress, ZIPARCHIVE::CREATE);
                    $nameFile = $_FILES[$key]['name'];
                    $tmpName = $_FILES[$key]['tmp_name'];
                    if ($conpress === true) {
                        $zip->addFile($tmpName, $nameFile);
                        $zip->close();
                        echo $fileconpress . "<br/>";
                        echo "yess !! Success!!!! ";
                    } else {
                        echo " Oh No! Error";
                    }
                }
            }
            /*=======Image Zip Upload End=============*/

            $insertCommentArr['idApplication'] = $idForm;
            $insertCommentArr['ReviewNo'] = $_POST['ReviewNo'];
            $insertCommentArr['createdDateTime'] = date('Y-m-d H:i:s');
            $Custom->Insert($insertCommentArr, 'idApplicationComment', 'application_comment', 'Y');

            $this->load->model('musers');
            $MUsers = new MUsers();
            $idGroup_Reviewers = 'B80AA3B7-B792-722D-8553-B676C5908A72';
            $ReviewUsers = $MUsers->getUsersByGroup($idGroup_Reviewers);
            $this->load->library('email');
            $Subject = " New Application: (" . $idForm . '-' . $insertCommentArr['ReviewNo'] . ') ' . $_POST['PID_title'] . ' ' . $_POST['PID_first_name'] . ' ' . $_POST['PID_surname'] . '-' . substr($_POST['title_of_study'], 0, 25);

            foreach ($ReviewUsers as $Reviewers) {
                $this->InsertNotifcation('mail', "New Application " . $idForm . '-' . $insertCommentArr['ReviewNo'],
                    "You have received a new applciation. <br> Title: " . substr($_POST['title_of_study'], 0, 25),
                    0, $Reviewers->idUser,
                    'project_detail/' . $idForm, 'uk-text-success');

                $Content = "";
                $Content = "Dear " . $Reviewers->full_name . "<br/><br/>
<p>Application: <a href='" . base_url('project_detail/' . $idForm) . "'>" . $_POST['title_of_study'] . "</a></p><br/> 
<p>This is a soft reminder regarding the review of pending re-submitted application</p>
<p style='  background-color: yellow; font-weight: 600;'>Note: This is an automated message, please ignore if the task is completed.</p> <br><br>
<p>Thank you </p> 
<p>Regards,</p>
<p>ERC Secretariat </p>";
                /*
               $Content .= "<td bgcolor='#ffffff' style='padding: 40px 30px 40px 30px;'>
<table border='1' cellpadding='0' cellspacing='0' width='100%'> $EmailContent </table>
</td>";*/
                /* $Content .= "<td bgcolor='#ffffff' style='padding: 40px 30px 40px 30px;'>
<table border='1' cellpadding='0' cellspacing='0' width='100%'>";
                 foreach ($cleanData as $key => $postdata) {
                     $Content .= " <tr>
                <td>" . $key . " </td>
                <td>" . $postdata . " </td>
          </tr> ";
                 }

                 $Content .= "</table>
</td>";*/
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
                $from = 'sk_khan911@hotmail.com';
                $to = $Reviewers->UserName;
                $email_setting = array('mailtype' => 'html');
                /* $this->email->initialize($email_setting);
                 $result = $this->email
                     ->from($from)
                     ->to($to)
                     ->cc('shahroz.khan@aku.edu')
                     ->subject($Subject)
                     ->message($body)
                     ->send();*/
            }


        }
        $response = array('Successfully submitted', 'success');
        echo json_encode($response);
        /*  echo '<pre>';
          print_r($_POST);
          echo '</pre>';*/
        exit();
        $createdby = $_SESSION['login']['idUser'];
        $Custom = new Custom();
        $Msetting = new Msetting();
        $MForm_View = new MForm_View();
        $cleanData = $_POST;

        if (isset($_POST['isEdit']) && $_POST['isEdit'] == 'Yes') {
            $idForm = $_POST['idForm'];
        } else {
            $maxIdForm = $MForm_View->getMaxIdForm();
            $idForm = $maxIdForm[0]->maxIdForm + 1;
        }

        /*=======Image Upload Start=============*/
        $config['upload_path'] = 'assets/uploads';
        $config['allowed_types'] = 'jpg|jpeg|gif|png|pdf|xls|xlsx|csv|doc|docx|txt';
        $config['max_size'] = 10000;
        $config['file_name'] = $idForm;
        $this->load->library('upload', $config);


        if (!$this->upload->do_upload('attachment')) {
            $file = '';
        } else {
            $data = array('upload_data' => $this->upload->data());
            $file = 'assets/uploads/' . $data['upload_data']['file_name'];
        }
        /*=======Image Upload End=============*/

        /*=======Insert form data start=============*/
        $insertArr = array();
        $idTestForm = $Msetting->getGUID();


        if (isset($_POST['draft']) && $_POST['draft'] == 1) {
            $submitted = 0;
            $insertArr['idParentDraft'] = '';
            $sendemail = 'no';
        } else {
            $submitted = 1;
            $insertArr['idParentDraft'] = '';
            $sendemail = 'yes';
        }


        if (isset($_POST['idForm']) && $_POST['idForm'] != '' && $_POST['idForm'] != 'undefined') {
            $insertArr['idParentDraft'] = $_POST['idForm'];
        }
        $insertArr['idTestForm'] = $idTestForm;
        $insertArr['idForm'] = $idForm;
        $insertArr['createdBy'] = $createdby;
        $insertArr['attach_files'] = $file;
        $insertArr['fullname'] = $_POST['fullname'];
        $insertArr['ReviewNo'] = $_POST['ReviewNo'];
        $insertArr['wizard_address__0'] = $_POST['wizard_address__0'];
        $insertArr['dob'] = $_POST['dob'];
        $insertArr['wizard_birth_place'] = $_POST['wizard_birth_place'];
        $insertArr['gender'] = $_POST['gender'];
        $insertArr['phone_number'] = $_POST['phone_number'];
        $insertArr['email'] = $_POST['email'];
        $insertArr['application_number'] = $_POST['application_number'];
        $insertArr['application_starting_date'] = $_POST['application_starting_date'];
        $insertArr['application_end_date'] = $_POST['application_end_date'];
        $insertArr['example_1'] = $_POST['example_1'];
        $insertArr['example_2'] = $_POST['example_2'];
        $insertArr['isSubmit'] = $submitted;
        $insertArr['status'] = $_POST['status'];
        $insertArr['createdDateTime'] = date('Y-m-d H:i:s');

        $InserData = $Custom->Insert($insertArr, 'idTestForm', 'testform', 'Y');

        /*=======Insert form data End=============*/

        if ($InserData) {

            $response = array('Saved Successfully', 'success');

            if (isset($_POST['idForm']) && $_POST['idForm'] != '' && $_POST['idForm'] != 'undefined' && $submitted == 1) {
                $editArr = array();
                $editArr['isSubmit'] = 1;
                $Custom->Edit($editArr, 'idForm', $_POST['idForm'], 'testform');
            }

            if ($sendemail === 'yes') {
                /*==============Send email start==============*/
                $this->load->library('email');
                $Subject = "Test Form";
                $Content = "";
                $Content = "Dear " . $cleanData['fullname'] . "<br/><br/> You have a new file: 10.1.42.114/akuportal/" . $file . "<br/><br/> ";
                $Content .= "<td bgcolor='#ffffff' style='padding: 40px 30px 40px 30px;'>
 <table border='1' cellpadding='0' cellspacing='0' width='100%'>";
                foreach ($cleanData as $key => $postdata) {
                    $Content .= " <tr>
                   <td>" . $key . " </td>
                   <td>" . $postdata . " </td>
             </tr> ";
                }

                $Content .= "</table>
</td>";
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
                $from = 'sk_khan911@hotmail.com';
                $to = $cleanData['email'];
                $email_setting = array('mailtype' => 'html');
                $this->email->initialize($email_setting);
                $result = $this->email
                    ->from($from)
                    ->to($to)
                    ->cc('shahroz.khan@aku.edu')
                    ->subject($Subject)
                    ->message($body)
                    ->send();
                if ($result) {
                    $response = array('Saved Successfully & email also send', 'success');
                } else {
                    $response = array('Saved Successfully & email not send', 'primary');
                }
                /*==============Send email End==============*/

                /*==============Email log start==============*/
                $insertEmailLogArr['idForm'] = $idForm;
                $insertEmailLogArr['EmailSubject'] = $Subject;
                $insertEmailLogArr['Sender'] = $from;
                $insertEmailLogArr['Reciever'] = $to;
                $insertEmailLogArr['isSend'] = 1;
                $insertEmailLogArr['createdBy'] = $createdby;
                $Custom->Insert($insertEmailLogArr, 'idEmailLog', 'emaillog', 'Y');
                /*==============Email log End==============*/
            }

        } else {
            $response = array('Something went wrong', 'error');
        }
        echo json_encode($response);
    }

    public function sendEmail2()
    {
        /* $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                         <html xmlns="http://www.w3.org/1999/xhtml">
                         <head>
                             <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
     <title>Test</title>
     <style type="text/css">
         body {
             font-family: Arial, Verdana, Helvetica, sans-serif;font-size: 16px;
         }
     </style>
 </head>
 <body>
 You have a new file: http://10.1.42.114/akuportal/assets/uploads/900109.xlsx

 </body>
 </html>';
         $email_setting = array('mailtype' => 'html');
         $config['useragent'] = 'PHP/' . phpversion();
         $this->email->initialize($email_setting);
         echo $this->email
             ->from('sk_khan911@hotmail.com')
             ->to('shahroz.khan@aku.edu')
             ->cc('shehroz.altaf92@gmail.com')
             ->reply_to('shehroz.altaf92@gmail.com')
             ->subject("test")
             ->message($body)
             ->send();
         exit();*/
        $createdby = $_SESSION['login']['idUser'];
        $idForm = $this->fileNo();
        $config['upload_path'] = 'assets/uploads';
        $config['allowed_types'] = 'jpg|jpeg|gif|png|pdf|xls|xlsx|csv|doc|docx|txt';
        $config['max_size'] = 10000;

//        $new_name                   = $idForm.$_FILES["attachment"]['name'];
        $new_name = $idForm;
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);
        $this->upload->do_upload('attachment');
//        if (!$this->upload->do_upload('attachment')) {
//            $error = array('error' => $this->upload->display_errors());
//            print_r($error);
//        } else {
        $data = array('upload_data' => $this->upload->data());
        $file = 'assets/uploads/' . $data['upload_data']['file_name'];
//            $file = 'assets/uploads/' . $new_name;

//            $cleanData = json_decode($_POST['mydata']);
        $cleanData = $_POST;

        $Custom = new Custom();
        $Msetting = new Msetting();
        $insertArr = array();
        $idTestForm = $Msetting->getGUID();
        /*=======Insert form data start=============*/
        $insertArr['idTestForm'] = $idTestForm;
        $insertArr['idForm'] = $idForm;
        $insertArr['attach_files'] = $file;
        foreach ($cleanData as $key => $postdata) {
            $insertArr[$key] = $postdata;
        }

        $InserData = $Custom->Insert($insertArr, 'idTestForm', 'testform', 'Y');
        /*=======Insert form data End=============*/
        if ($InserData) {

            /*==============Send email start==============*/
            $response = array('Inserted Successfully', 'success');
            $this->load->library('email');
            $Subject = "Test Form";
            $Content = "";
            $Content = "Dear " . $cleanData['fullname'] . "<br/><br/> You have a new file: 10.1.42.114/akuportal/" . $file . "<br/><br/> ";
            $Content .= "<td bgcolor='#ffffff' style='padding: 40px 30px 40px 30px;'>
 <table border='1' cellpadding='0' cellspacing='0' width='100%'>";
            foreach ($cleanData as $key => $postdata) {
                $Content .= " <tr>
                   <td>" . $key . " </td>
                   <td>" . $postdata . " </td>
             </tr> ";
            }

            $Content .= "</table>
</td>";
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
            $from = 'sk_khan911@hotmail.com';
            $to = $cleanData['email'];
            $email_setting = array('mailtype' => 'html');
            $this->email->initialize($email_setting);
            $result = $this->email
                ->from($from)
                ->to($to)
                ->cc('shahroz.khan@aku.edu')
                ->subject($Subject)
                ->message($body)
                ->send();
            /*==============Send email End==============*/

            /*==============Email log start==============*/
            $insertEmailLogArr['EmailSubject'] = $Subject;
            $insertEmailLogArr['Sender'] = $from;
            $insertEmailLogArr['Reciever'] = $to;
            $insertEmailLogArr['isSend'] = 1;
            $insertEmailLogArr['createdBy'] = $createdby;
            $Custom->Insert($insertEmailLogArr, 'idEmailLog', 'emaillog', 'Y');
            /*==============Email log End==============*/

            echo $result;
        } else {
            $response = array('Something went wrong', 'error');
        }
//        }

    }

    function fileNo()
    {
        $alphabet = '1234567890';
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 6; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }

}