<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Created by PhpStorm.
 * User: shahroz.khan
 * Date: 23/10/2018
 * Time: 4:23 PM
 */
class MForm_View extends CI_Model
{
    function getTestForms($idUser, $isSubmit = 1, $newForm)
    {
        $this->db->select('application.idApplicationGuid,
	application.idApplication,
	application.ReviewNo,
	application.title_of_study,
	application.PID_title,
	application.PID_first_name,
	application.PID_surname,
	application.PID_department,
	application.PID_designation,
	application.PID_campus,
	application.PID_country,
	application.PID_telephone,
	application.PID_ext,
	application.PID_certificate_expiry_date,
	application.DCD_title,
	application.DCD_first_name,
	application.DCD_surname,
	application.DCD_department,
	application.DCD_designation,
	application.DCD_campus,
	application.DCD_country,
	application.DCD_telephone,
	application.DCD_ext,
	application.DCD_certificate_expiry_date,
	application.TMD_title,
	application.TMD_first_name,
	application.TMD_surname,
	application.TMD_department,
	application.TMD_designation,
	application.TMD_campus,
	application.TMD_country,
	application.TMD_telephone,
	application.TMD_ext,
	application.TMD_certificate_expiry_date,
	application.study_part,
	application.study_part_options,
	application.study_part_other,
	application.study_fund,
	application.study_fund_payment,
	application.study_fund_other,
	application.COI_1A,
	application.COI_1B,
	application.COI_1C,
	application.COI_1D,
	application.COI_2,
	application.COI_3,
	application.ERC_1,
	application.ERC_1A,
	application.ERC_1A_other,
	application.ERC_2,
	application.ERC_3,
	application.ERC_4,
	application.ERC_5,
	application.ERC_6,
	application.ERC_7,
	application.ERC_7A,
	application.ERC_8,
	application.ERC_9,
	application.ERC_10,
	application.ERC_11,
	application.ERC_11A,
	application.ERC_12,
	application.ERC_13,
	application.PD_1,
	application.PD_2,
	application.PD_3,
	application.PD_4_start_date,
	application.PD_4_end_date,
	application.PD_4_total_time,
	application.PD_5,
	application.PD_6,
	application.PD_7,
	application.PD_8,
	application.PD_9,
	application.PD_10,
	application.PD_11,
	application.PD_12,
	application.PD_13,
	application.PD_14,
	application.PD_15,
	application.PD_16,
	application.PD_17,
	application.PD_18,
	application.PD_19,
	application.PD_20,
	application.PD_21,
	application.PD_22,
	application.PD_22_other,
	application.PD_23,
	application.PD_24,
	application.PD_24A,
	application.PD_25,
	application.PD_25A,
	application.PD_26,
	application.PD_26A,
	application.CD_1,
	application.CD_2,
	application.CD_2A,
	application.CD_2B,
	application.CD_3,
	application.isSubmit,
	application.createdBy,
	application.createdDateTime,
	application.isActive ,
	application.AimsProject,
	application.assignTo,
	application.`status`,
	assgned.full_name as assignedTo,
	users.UserName,
	users.full_name,
	users.idUser,
	users.idGroup');
        $this->db->from('application');
//        $this->db->join('`application b`', 'application.idApplication = b.idApplication AND application.ReviewNo > b.ReviewNo', 'left');
        $this->db->join('(SELECT		idApplication,		MAX(ReviewNo) ReviewNo	FROM		application
    WHERE `isActive` = 1	AND  `isSubmit` = ' . $isSubmit . '
	GROUP BY idApplication ) b', 'application.idApplication = b.idApplication AND application.ReviewNo = b.ReviewNo', 'INNER JOIN');
        $this->db->join('`users`', 'application.createdBy = users.idUser', 'left');
        $this->db->join('`users` assgned', 'application.assignTo = assgned.idUser', 'left');
        $this->db->where('application.isActive', 1);
        $this->db->where('application.isSubmit', $isSubmit);
        if (isset($newForm) && $newForm == 1) {
            $this->db->where('application.isNew', 1);
        }
        if (isset($idUser) && $idUser != '') {
            $this->db->where('application.createdBy', $idUser);
            $this->db->or_where('application.assignTo', $_SESSION['login']['idUser']);
        }
        $this->db->group_by('application.idApplication');
        $this->db->order_by('application.createdDateTime', 'DESC');
        $query = $this->db->get();
//        echo $this->db->last_query();
        return $query->result();
    }

    function getDraftForms($idUser)
    {
        $this->db->select('testform.idTestForm,
	testform.idForm,
	testform.ReviewNo,
	testform.idParentDraft,
	testform.attach_files,
	testform.fullname,
	testform.wizard_address__0,
	testform.dob,
	testform.wizard_birth_place,
	testform.gender,
	testform.phone_number,
	testform.email,
	testform.application_number,
	testform.application_starting_date,
	testform.application_end_date,
	testform.example_1,
	testform.example_2,
	testform.`status`,
	testform.isSubmit,
	testform.createdBy,
	testform.createdDateTime,
	testform.isActive,
	users.UserName,
	users.full_name');
        $this->db->from('testform');
        $this->db->join('`users`', 'testform.createdBy = users.idUser', 'left');
        $this->db->where('testform.isActive', 1);
        if (isset($idUser) && $idUser != '') {
            $this->db->where('createdBy', $idUser);
        }
        $this->db->where('isSubmit', 0);
        $query = $this->db->get();
        return $query->result();
    }

    function getFormDraftDetail($idForm)
    {
        $this->db->select('*');
        $this->db->from('application');
        $this->db->where('isActive', 1);
        $this->db->where('idApplicationGuid', $idForm);
        $this->db->where('isSubmit', 0);
        $this->db->group_by('idApplication', 'DESC');
        $this->db->order_by('ReviewNo', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    function getFormEditDetail($idForm)
    {
        $this->db->select('*');
        $this->db->from('application');
        $this->db->where('isActive', 1);
        $this->db->where('idApplicationGuid', $idForm);
        $this->db->where('isSubmit', 1);
        $this->db->group_by('idApplication', 'DESC');
        $this->db->order_by('ReviewNo', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    function getFormDetail($idForm)
    {
        $this->db->select('application.idApplication,application.idApplicationGuid,
	application.ReviewNo,
	application.title_of_study,
	application.PID_title,
	application.PID_first_name,
	application.PID_surname,
	application.PID_department,
	application.PID_designation,
	application.PID_campus,
	application.PID_country,
	application.PID_telephone,
	application.PID_ext,
	application.PID_certificate_expiry_date,
	application.DCD_title,
	application.DCD_first_name,
	application.DCD_surname,
	application.DCD_department,
	application.DCD_designation,
	application.DCD_campus,
	application.DCD_country,
	application.DCD_telephone,
	application.DCD_ext,
	application.DCD_certificate_expiry_date,
	application.TMD_title,
	application.TMD_first_name,
	application.TMD_surname,
	application.TMD_department,
	application.TMD_designation,
	application.TMD_campus,
	application.TMD_country,
	application.TMD_telephone,
	application.TMD_ext,
	application.TMD_certificate_expiry_date,
	application.study_part,
	application.study_part_options,
	application.study_part_other,
	application.study_fund,
	application.study_fund_payment,
	application.study_fund_other,
	application.COI_1A,
	application.COI_1B,
	application.COI_1C,
	application.COI_1D,
	application.COI_2,
	application.COI_3,
	application.ERC_1,
	application.ERC_1A,
	application.ERC_1A_other,
	application.ERC_2,
	application.ERC_3,
	application.ERC_4,
	application.ERC_5,
	application.ERC_6,
	application.ERC_7,
	application.ERC_7A,
	application.ERC_8,
	application.ERC_9,
	application.ERC_10,
	application.ERC_11,
	application.ERC_11A,
	application.ERC_12,
	application.ERC_13,
	application.PD_1,
	application.PD_2,
	application.PD_3,
	application.PD_4_start_date,
	application.PD_4_end_date,
	application.PD_4_total_time,
	application.PD_5,
	application.PD_6,
	application.PD_7,
	application.PD_8,
	application.PD_9,
	application.PD_10,
	application.PD_11,
	application.PD_12,
	application.PD_13,
	application.PD_14,
	application.PD_15,
	application.PD_16,
	application.PD_17,
	application.PD_18,
	application.PD_19,
	application.PD_20,
	application.PD_21,
	application.PD_22,
	application.PD_22_other,
	application.PD_23,
	application.PD_24,
	application.PD_24A,
	application.PD_25,
	application.PD_25A,
	application.PD_26,
	application.PD_26A,
	application.CD_1,
	application.CD_2,
	application.CD_2A,
	application.CD_2B,
	application.CD_3,
	application.attach_files,
	application.status,
	application.AimsProject,
	application.isSubmit,
	application.createdBy,
	application.createdDateTime,
	application_comment.ReviewNo AS `comment_app_review`,
	application_comment.title_of_study_comment,
	application_comment.PID_title_comment,
	application_comment.PID_first_name_comment,
	application_comment.PID_surname_comment,
	application_comment.PID_department_comment,
	application_comment.PID_designation_comment,
	application_comment.PID_campus_comment,
	application_comment.PID_country_comment,
	application_comment.PID_telephone_comment,
	application_comment.PID_ext_comment,
	application_comment.PID_certificate_expiry_date_comment,
	application_comment.DCD_title_comment_comment,
	application_comment.DCD_first_name_comment,
	application_comment.DCD_surname_comment,
	application_comment.DCD_department_comment,
	application_comment.DCD_designation_comment,
	application_comment.DCD_campus_comment,
	application_comment.DCD_country_comment,
	application_comment.DCD_telephone_comment,
	application_comment.DCD_ext_comment,
	application_comment.DCD_certificate_expiry_date_comment,
	application_comment.TMD_title_comment,
	application_comment.TMD_first_name_comment,
	application_comment.TMD_surname_comment,
	application_comment.TMD_department_comment,
	application_comment.TMD_designation_comment,
	application_comment.TMD_campus_comment,
	application_comment.TMD_country_comment,
	application_comment.TMD_telephone_comment,
	application_comment.TMD_ext_comment,
	application_comment.TMD_certificate_expiry_date_comment,
	application_comment.study_part_comment,
	application_comment.study_part_options_comment,
	application_comment.study_part_other_comment,
	application_comment.study_fund_comment,
	application_comment.study_fund_payment_comment,
	application_comment.study_fund_other_comment,
	application_comment.COI_1A_comment,
	application_comment.COI_1B_comment,
	application_comment.COI_1C_comment,
	application_comment.COI_1D_comment,
	application_comment.COI_2_comment,
	application_comment.COI_3_comment,
	application_comment.ERC_1_comment,
	application_comment.ERC_1A_comment,
	application_comment.ERC_1A_other_comment,
	application_comment.ERC_2_comment,
	application_comment.ERC_3_comment,
	application_comment.ERC_4_comment,
	application_comment.ERC_5_comment,
	application_comment.ERC_6_comment,
	application_comment.ERC_7_comment,
	application_comment.ERC_7A_comment,
	application_comment.ERC_8_comment,
	application_comment.ERC_9_comment,
	application_comment.ERC_10_comment,
	application_comment.ERC_11_comment,
	application_comment.ERC_11A_comment,
	application_comment.ERC_12_comment,
	application_comment.ERC_13_comment,
	application_comment.PD_1_comment,
	application_comment.PD_2_comment,
	application_comment.PD_3_comment,
	application_comment.PD_4_start_date_comment,
	application_comment.PD_4_end_date_comment,
	application_comment.PD_4_total_time_comment,
	application_comment.PD_5_comment,
	application_comment.PD_6_comment,
	application_comment.PD_7_comment,
	application_comment.PD_8_comment,
	application_comment.PD_9_comment,
	application_comment.PD_10_comment,
	application_comment.PD_11_comment,
	application_comment.PD_12_comment,
	application_comment.PD_13_comment,
	application_comment.PD_14_comment,
	application_comment.PD_15_comment,
	application_comment.PD_16_comment,
	application_comment.PD_17_comment,
	application_comment.PD_18_comment,
	application_comment.PD_19_comment,
	application_comment.PD_20_comment,
	application_comment.PD_21_comment,
	application_comment.PD_22_comment,
	application_comment.PD_22_other_comment,
	application_comment.PD_23_comment,
	application_comment.PD_24_comment,
	application_comment.PD_24A_comment,
	application_comment.PD_25_comment,
	application_comment.PD_25A_comment,
	application_comment.PD_26_comment,
	application_comment.PD_26A_comment,
	application_comment.CD_1_comment,
	application_comment.CD_2_comment,
	application_comment.CD_2A_comment,
	application_comment.CD_2B_comment,
	application_comment.CD_3_comment,
	application_comment.attach_files_comment,
	application_comment.idApplicationComment,
	application_comment.idApplication AS `comment_idApplication`,
	application_comment.isComment,
	application_comment.createdBy AS `comment_createdBy`,
	application_comment.createdDateTime AS `comment_createdDateTime`');
        $this->db->from('application');
        $this->db->join('`application_comment`', 'application.idApplication = application_comment.idApplication AND application.ReviewNo = application_comment.ReviewNo 
        AND ( `application_comment`.`isComment` = 1 OR `application_comment`.`createdBy` = "' . $_SESSION['login']['idUser'] . '"  OR `application_comment`.`createdBy` is null )', 'left');
        $this->db->where('application.isActive', 1);
        $this->db->where('application.idApplication', $idForm);
        $this->db->where('application.isSubmit', 1);
        $this->db->order_by('application.ReviewNo', 'DESC');
        $this->db->limit(1, 0);
        $query = $this->db->get();
        return $query->result();
    }

    function getMaxIdForm()
    {
        $this->db->select('max(idApplication) as maxIdForm');
        $this->db->from('application');
        $query = $this->db->get();
        return $query->result();
    }

    function getMinimumReviewer()
    {
        $this->db->select('count(users.idUser) AS cntUser,
	users.idUser, 
	users.UserName');
        $this->db->from('application');
        $this->db->join('`users`', 'application.assignTo = users.idUser', 'INNER');
        $this->db->where('users.idUser!=""');
        $this->db->group_by('users.idUser');
        $this->db->order_by('cntUser', 'ASC');
        $this->db->limit(1, 0);
        $query = $this->db->get();
        return $query->result();
    }

    function getUserById($idUser)
    {
        $this->db->select('*');
        $this->db->from('testform');
        $this->db->where('isActive', 1);
        $this->db->where('idForm', $idUser);
        $query = $this->db->get();
        return $query->result();
    }


    function getDashboardForms($idUser, $isSubmit = 1, $LastSevenDays)
    {
        $this->db->select('COUNT(`application`.idApplication) AS cntApplications');
        $this->db->from('application');
        $this->db->join('(SELECT		idApplication,		MAX(ReviewNo) ReviewNo	FROM		application
    WHERE `isActive` = 1	AND  `isSubmit` = ' . $isSubmit . '
	GROUP BY idApplication ) b', 'application.idApplication = b.idApplication AND application.ReviewNo = b.ReviewNo', 'INNER JOIN');
        $this->db->where('application.isActive', 1);
        $this->db->where('application.isSubmit', $isSubmit);


        if (isset($LastSevenDays) && $LastSevenDays != '') {
            $this->db->where('application.createdDateTime >=', $LastSevenDays);
        }
        if (isset($idUser) && $idUser != '') {
            $this->db->where('application.createdBy', $idUser);
        }
        $this->db->order_by('application.createdDateTime', 'DESC');
        $query = $this->db->get();
//        echo $this->db->last_query();
        return $query->result();
    }

    function getNotifications($idUser)
    {
        $this->db->select('*');
        $this->db->from('notification');
        $this->db->where('Seen', 0);
        $this->db->where('To', $idUser);
        $this->db->where('isActive', 1);
        $query = $this->db->get();
//        echo $this->db->last_query();
        return $query->result();
    }

}