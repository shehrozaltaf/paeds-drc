<div id="page_content">
    <div id="page_content_inner">
        <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
            <div class="uk-width-large-1-1">
                <div class="md-card">
                    <div class="user_heading">
                        <div class="user_heading_menu hidden-print">
                            <div class="uk-display-inline-block"><i class="md-icon md-icon-light material-icons"
                                                                    id="page_print">&#xE8ad;</i></div>
                        </div>
                        <div class="user_heading_content">
                            <h2 class="heading_b uk-margin-bottom">
                                <span class="uk-text-truncate">
                                    Project Name: <?= (isset($getData[0]->title_of_study) && $getData[0]->title_of_study != '' ? $getData[0]->title_of_study : '') ?>
                                </span>
                                <span class="sub-heading">
                                    Project ID: <?= (isset($getData[0]->idApplication) && $getData[0]->idApplication != '' ? $getData[0]->idApplication : '') ?>
                                </span>
                                <span class="sub-heading">
                                    Review No: <?= $getData[0]->ReviewNo ?>
                                </span>
                                <span class="sub-heading">
                                    <?php
                                    if ($getData[0]->AimsProject == 'Yes') {
                                        $AimsProject = 'AIMS';
                                        $editurl = 'aims/';
                                    } else {
                                        $AimsProject = 'DRC';
                                        $editurl = '';
                                    }
                                    ?>
                                    Type: <?= $AimsProject ?>
                                </span>
                            </h2>
                            <input type="hidden" id="createdBy" name="createdBy" value="<?= $getData[0]->createdBy ?>">
                            <input type="hidden" id="idApplication_hid" name="idApplication_hid"
                                   value="<?= $getData[0]->idApplication ?>">
                        </div>
                        <?php if ($getData[0]->createdBy == $_SESSION['login']['idUser']) { ?>
                            <a class="md-fab md-fab-small md-fab-accent hidden-print"
                               href="<?= base_url($editurl . 'form_edit/' . $getData[0]->idApplicationGuid) ?>">
                                <i class="material-icons">&#xE150;</i>
                            </a>
                        <?php } ?>
                    </div>

                    <div class="user_content">
                        <ul id="user_profile_tabs" class="uk-tab"
                            data-uk-tab="{connect:'#user_profile_tabs_content', animation:'slide-horizontal'}"
                            data-uk-sticky="{ top: 48, media: 960 }">
                            <li class="uk-active"><a href="javascript:void(0)"> General Information</a></li>
                            <?php if ($AimsProject == 'DRC') { ?>
                                <li class=""><a href="javascript:void(0)"> Conflict Of Interest</a></li>
                                <li class=""><a href="javascript:void(0)"> Type of ERC Approval</a></li>
                                <li class=""><a href="javascript:void(0)"> Project Details</a></li>
                                <li class=""><a href="javascript:void(0)"> Consent details</a></li>
                            <?php } ?>
                            <li class=""><a href="javascript:void(0)"> Documents</a></li>
                        </ul>
                        <ul id="user_profile_tabs_content" class="uk-switcher uk-margin">
                            <?php foreach ($getData as $key => $data) { ?>
                                <li>
                                    <div class="uk-grid uk-margin-medium-top uk-margin-large-bottom"
                                         data-uk-grid-margin>
                                        <div class="uk-width-large-1-1 uk-overflow-container">
                                            <h5>General Information</h5>
                                            <table id="GI" class="uk-table uk-table-striped  uk-text-nowrap ">
                                                <thead>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <th>Fields</th>
                                                    <th>Values</th>
                                                    <th>Comments</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <!--Section 1-->
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">id Application</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)">
                                                            <?= wordwrap($data->idApplication, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Review No</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)">
                                                            <?= wordwrap($data->ReviewNo, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Title of Study</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)"
                                                           class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                           id="title_of_study" data-type="textarea" data-pk="1"
                                                           data-title="title_of_study"><?= wordwrap($data->title_of_study, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->title_of_study_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>

                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3"><h3 class="heading_a">
                                                            <span class="sub-heading PID">Principal Investigator Details:</span>
                                                        </h3></td>
                                                    <td class="uk-width-1-3"></td>
                                                    <td class="editablediv uk-width-1-3">
                                                    </td>
                                                </tr>

                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Title</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->PID_title) && $data->PID_title != '' ? wordwrap($data->PID_title, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <a href="javascript:void(0)"
                                                           class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                           id="PID_title"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Title">
                                                            <?= wordwrap($data->PID_title_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">First Name</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->PID_first_name) && $data->PID_first_name != '' ? wordwrap($data->PID_first_name, 50, "<br />") : '---') ?>

                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <a href="javascript:void(0)"
                                                           class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                           id="PID_first_name" data-type="textarea" data-pk="1"
                                                           data-title="First Name">
                                                            <?= wordwrap($data->PID_first_name_comment, 50, "<br />") ?>
                                                        </a>

                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Surname</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->PID_surname) && $data->PID_surname != '' ? wordwrap($data->PID_surname, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <a href="javascript:void(0)"
                                                           class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                           id="PID_surname"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Surname">
                                                            <?= wordwrap($data->PID_surname_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Department</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->PID_department) && $data->PID_department != '' ? wordwrap($data->PID_department, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <a href="javascript:void(0)"
                                                           class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                           id="PID_department" data-type="textarea" data-pk="1"
                                                           data-title="Department">
                                                            <?= wordwrap($data->PID_department_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Designation</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->PID_designation) && $data->PID_designation != '' ? wordwrap($data->PID_designation, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <a href="javascript:void(0)"
                                                           class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                           id="PID_designation" data-type="textarea" data-pk="1"
                                                           data-title="Designation">
                                                            <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Campus</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->PID_campus) && $data->PID_campus != '' ? wordwrap($data->PID_campus, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <a href="javascript:void(0)"
                                                           class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                           id="PID_campus"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Campus">
                                                            <?= wordwrap($data->PID_campus_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Country</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->PID_country) && $data->PID_country != '' ? wordwrap($data->PID_country, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <a href="javascript:void(0)"
                                                           class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                           id="PID_country"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Country">
                                                            <?= wordwrap($data->PID_country_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Telephone</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->PID_telephone) && $data->PID_telephone != '' ? wordwrap($data->PID_telephone, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3"><a href="javascript:void(0)"
                                                                                            class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                                            id="PID_telephone"
                                                                                            data-type="textarea"
                                                                                            data-pk="1"
                                                                                            data-title="Telephone">
                                                            <?= wordwrap($data->Telephone_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Ext</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->PID_ext) && $data->PID_ext != '' ? wordwrap($data->PID_ext, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3"><a href="javascript:void(0)"
                                                                                            class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                                            id="PID_ext"
                                                                                            data-type="textarea"
                                                                                            data-pk="1"
                                                                                            data-title="Ext">
                                                            <?= wordwrap($data->PID_ext_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Expiry date of Certification</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->PID_certificate_expiry_date) && $data->PID_certificate_expiry_date != '' ? wordwrap($data->PID_certificate_expiry_date, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <a href="javascript:void(0)"
                                                           class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                           id="PID_certificate_expiry_date" data-type="textarea"
                                                           data-pk="1"
                                                           data-title="Expiry date of Certification">
                                                            <?= wordwrap($data->PID_certificate_expiry_date_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3"><h3 class="heading_a">
                                                            <span class="sub-heading DCD">Departmental Coordinator/Representative Details:</span>
                                                        </h3></td>
                                                    <td class="uk-width-1-3"></td>
                                                    <td class="editablediv uk-width-1-3">
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Title</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->DCD_title) && $data->DCD_title != '' ? wordwrap($data->DCD_title, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <a href="javascript:void(0)"
                                                           class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                           id="DCD_title"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Title">
                                                            <?= wordwrap($data->DCD_title_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">First Name</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->DCD_first_name) && $data->DCD_first_name != '' ? wordwrap($data->DCD_first_name, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <a href="javascript:void(0)"
                                                           class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                           id="DCD_first_name" data-type="textarea" data-pk="1"
                                                           data-title="First Name">
                                                            <?= wordwrap($data->DCD_first_name_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Surname</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->DCD_surname) && $data->DCD_surname != '' ? wordwrap($data->DCD_surname, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3"><a href="javascript:void(0)"
                                                                                            class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                                            id="DCD_surname"
                                                                                            data-type="textarea"
                                                                                            data-pk="1"
                                                                                            data-title="Surname">
                                                            <?= wordwrap($data->DCD_surname_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Department</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->DCD_department) && $data->DCD_department != '' ? wordwrap($data->DCD_department, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <a href="javascript:void(0)"
                                                           class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                           id="DCD_department" data-type="textarea" data-pk="1"
                                                           data-title="Department">
                                                            <?= wordwrap($data->DCD_department_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Designation</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->DCD_designation) && $data->DCD_designation != '' ? wordwrap($data->DCD_designation, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3"><a href="javascript:void(0)"
                                                                                            class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                                            id="DCD_designation"
                                                                                            data-type="textarea"
                                                                                            data-pk="1"
                                                                                            data-title="Designation">
                                                            <?= wordwrap($data->DCD_designation_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Campus</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->DCD_campus) && $data->DCD_campus != '' ? wordwrap($data->DCD_campus, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3"><a href="javascript:void(0)"
                                                                                            class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                                            id="DCD_campus"
                                                                                            data-type="textarea"
                                                                                            data-pk="1"
                                                                                            data-title="Campus">
                                                            <?= wordwrap($data->DCD_campus_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Country</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->DCD_country) && $data->DCD_country != '' ? wordwrap($data->DCD_country, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3"><a href="javascript:void(0)"
                                                                                            class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                                            id="DCD_country"
                                                                                            data-type="textarea"
                                                                                            data-pk="1"
                                                                                            data-title="Country">
                                                            <?= wordwrap($data->DCD_country_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Telephone</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->DCD_telephone) && $data->DCD_telephone != '' ? wordwrap($data->DCD_telephone, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3"><a href="javascript:void(0)"
                                                                                            class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                                            id="DCD_telephone"
                                                                                            data-type="textarea"
                                                                                            data-pk="1"
                                                                                            data-title="Telephone">
                                                            <?= wordwrap($data->DCD_telephone_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Ext</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->DCD_ext) && $data->DCD_ext != '' ? wordwrap($data->DCD_ext, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3"><a href="javascript:void(0)"
                                                                                            class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                                            id="DCD_ext"
                                                                                            data-type="textarea"
                                                                                            data-pk="1"
                                                                                            data-title="Ext">
                                                            <?= wordwrap($data->DCD_ext_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Expiry date of Certification</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->DCD_certificate_expiry_date) && $data->DCD_certificate_expiry_date != '' ? wordwrap($data->DCD_certificate_expiry_date, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3"><a href="javascript:void(0)"
                                                                                            class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                                            id="DCD_certificate_expiry_date"
                                                                                            data-type="textarea"
                                                                                            data-pk="1"
                                                                                            data-title="Expiry date of Certification">
                                                            <?= wordwrap($data->DCD_certificate_expiry_date_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3"><h3 class="heading_a">
                                                            <span class="sub-heading TMD">Team Member Details:</span>
                                                        </h3></td>
                                                    <td class="uk-width-1-3"></td>
                                                    <td class="editablediv uk-width-1-3"></td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Title</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->TMD_title) && $data->TMD_title != '' ? wordwrap($data->TMD_title, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3"><a href="javascript:void(0)"
                                                                                            class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                                            id="TMD_title"
                                                                                            data-type="textarea"
                                                                                            data-pk="1"
                                                                                            data-title="Title">
                                                            <?= wordwrap($data->TMD_title_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">First Name</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->TMD_first_name) && $data->TMD_first_name != '' ? wordwrap($data->TMD_first_name, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3"><a href="javascript:void(0)"
                                                                                            class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                                            id="TMD_first_name"
                                                                                            data-type="textarea"
                                                                                            data-pk="1"
                                                                                            data-title="First Name">
                                                            <?= wordwrap($data->TMD_first_name_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Surname</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->TMD_surname) && $data->TMD_surname != '' ? wordwrap($data->TMD_surname, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3"><a href="javascript:void(0)"
                                                                                            class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                                            id="TMD_surname"
                                                                                            data-type="textarea"
                                                                                            data-pk="1"
                                                                                            data-title="Surname">
                                                            <?= wordwrap($data->TMD_surname_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Department</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->TMD_department) && $data->TMD_department != '' ? wordwrap($data->TMD_department, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3"><a href="javascript:void(0)"
                                                                                            class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                                            id="TMD_department"
                                                                                            data-type="textarea"
                                                                                            data-pk="1"
                                                                                            data-title="Department">
                                                            <?= wordwrap($data->TMD_department_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Designation</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->TMD_designation) && $data->TMD_designation != '' ? wordwrap($data->TMD_designation, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3"><a href="javascript:void(0)"
                                                                                            class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                                            id="TMD_designation"
                                                                                            data-type="textarea"
                                                                                            data-pk="1"
                                                                                            data-title="Designation">
                                                            <?= wordwrap($data->TMD_designation_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Campus</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->TMD_campus) && $data->TMD_campus != '' ? wordwrap($data->TMD_campus, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3"><a href="javascript:void(0)"
                                                                                            class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                                            id="TMD_campus"
                                                                                            data-type="textarea"
                                                                                            data-pk="1"
                                                                                            data-title="Campus">
                                                            <?= wordwrap($data->TMD_campus_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Country</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->TMD_country) && $data->TMD_country != '' ? wordwrap($data->TMD_country, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3"><a href="javascript:void(0)"
                                                                                            class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                                            id="TMD_country"
                                                                                            data-type="textarea"
                                                                                            data-pk="1"
                                                                                            data-title="Country">
                                                            <?= wordwrap($data->TMD_country_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Telephone</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->TMD_telephone) && $data->TMD_telephone != '' ? wordwrap($data->TMD_telephone, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3"><a href="javascript:void(0)"
                                                                                            class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                                            id="TMD_telephone"
                                                                                            data-type="textarea"
                                                                                            data-pk="1"
                                                                                            data-title="Telephone">
                                                            <?= wordwrap($data->TMD_telephone_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Ext</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->TMD_ext) && $data->TMD_ext != '' ? wordwrap($data->TMD_ext, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3"><a href="javascript:void(0)"
                                                                                            class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                                            id="TMD_ext"
                                                                                            data-type="textarea"
                                                                                            data-pk="1"
                                                                                            data-title="Ext">
                                                            <?= wordwrap($data->TMD_ext_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Expiry date of Certification</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->TMD_certificate_expiry_date) && $data->TMD_certificate_expiry_date != '' ? wordwrap($data->TMD_certificate_expiry_date, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3"><a href="javascript:void(0)"
                                                                                            class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                                            id="TMD_certificate_expiry_date"
                                                                                            data-type="textarea"
                                                                                            data-pk="1"
                                                                                            data-title="Expiry date of Certification">
                                                            <?= wordwrap($data->TMD_certificate_expiry_date_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>


                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3"><h3 class="heading_a">
                                                            <span class="sub-heading TMD">Funds Detail</span>
                                                        </h3></td>
                                                    <td class="uk-width-1-3"></td>
                                                    <td class="editablediv uk-width-1-3"></td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Is this study a part of
                                                        students/resident synopsis
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->study_part_yes) && $data->study_part_yes != '' ? wordwrap($data->study_part_yes, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3"><a href="javascript:void(0)"
                                                                                            class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                                            id="study_part_yes"
                                                                                            data-type="textarea"
                                                                                            data-pk="1"
                                                                                            data-title="Is this study a part of students/resident
                                                        synopsis">
                                                            <?= wordwrap($data->study_part_yes_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">If yes, Program
                                                        (Exclude resident, fellow and faculty research from)
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->study_part_options) && $data->study_part_options != '' ? wordwrap($data->study_part_options, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3"><a href="javascript:void(0)"
                                                                                            class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                                            id="study_part_options"
                                                                                            data-type="textarea"
                                                                                            data-pk="1"
                                                                                            data-title="If yes, Program
                                        (Exclude resident, fellow and faculty research from)">
                                                            <?= wordwrap($data->study_part_options_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Others (Please Specify)</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->study_part_other) && $data->study_part_other != '' ? wordwrap($data->study_part_other, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3"><a href="javascript:void(0)"
                                                                                            class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                                            id="study_part_other"
                                                                                            data-type="textarea"
                                                                                            data-pk="1"
                                                                                            data-title="Others (Please Specify)">
                                                            <?= wordwrap($data->study_part_other_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Is the study</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->study_fund) && $data->study_fund != '' ? wordwrap($data->study_fund, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3"><a href="javascript:void(0)"
                                                                                            class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                                            id="study_fund"
                                                                                            data-type="textarea"
                                                                                            data-pk="1"
                                                                                            data-title="Is the study">
                                                            <?= wordwrap($data->study_fund_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">If Funded or Sponsored</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->study_fund_payment) && $data->study_fund_payment != '' ? wordwrap($data->study_fund_payment, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3"><a href="javascript:void(0)"
                                                                                            class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                                            id="study_fund_payment"
                                                                                            data-type="textarea"
                                                                                            data-pk="1"
                                                                                            data-title="If Funded or Sponsored">
                                                            <?= wordwrap($data->study_fund_payment_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Others (Please Specify)</td>
                                                    <td class="uk-width-1-3">
                                                        <?= (isset($data->study_fund_other) && $data->study_fund_other != '' ? wordwrap($data->study_fund_other, 50, "<br />") : '---') ?>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3"><a href="javascript:void(0)"
                                                                                            class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                                            id="study_fund_other"
                                                                                            data-type="textarea"
                                                                                            data-pk="1"
                                                                                            data-title="Others (Please Specify)">
                                                            <?= wordwrap($data->study_fund_other_comment, 50, "<br />") ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                    <!--<div style=" float: right; ">
                                        <a class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light"
                                           onclick=" submitComment(1, 'isComment', <? /*= $data->idApplicationComment */ ?>)"
                                           href="javascript:void(0)"
                                           data-idComment="">Submit Comments</a>
                                    </div>-->
                                </li>
                                <?php if ($AimsProject == 'DRC') { ?>
                                    <li>
                                        <div class="uk-grid uk-margin-medium-top uk-margin-large-bottom"
                                             data-uk-grid-margin>
                                            <div class="uk-width-large-1-1 uk-overflow-container">
                                                <!--Section 2-->
                                                <h5>Conflict Of Interest</h5>
                                                <table id="COI" class="uk-table uk-table-striped  uk-text-nowrap ">
                                                    <thead>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <th>Fields</th>
                                                        <th>Values</th>
                                                        <th>Comments</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q1A)</strong>
                                                            </small> <?= wordwrap('A personal financial interest in or personal financial relationship (including gifts of cash or in-kind) with the sponsor of this study?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->COI_1A) && $data->COI_1A != '' ? wordwrap($data->COI_1A, 50, "<br />") : '---') ?>
                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="COI_1A"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="A personal financial interest in or personal financial relationship (including gifts of cash or in-kind) with the sponsor of this study?">
                                                                <?= wordwrap($data->COI_1A_comment, 50, "<br />") ?>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q1B)</strong></small> <?= wordwrap(' A personal financial interest in or personal financial relationship (including
                                        gifts of cash or in-kind) with an entity that owns or has the right to
                                        commercialize a product, process or technology studied in this project?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->COI_1B) && $data->COI_1B != '' ? wordwrap($data->COI_1B, 50, "<br />") : '---') ?>
                                                        </td>
                                                        <td class="editablediv uk-width-1-3"><a
                                                                    href="javascript:void(0)"
                                                                    class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                    id="COI_1B"
                                                                    data-type="textarea"
                                                                    data-pk="1"
                                                                    data-title=" A personal financial interest in or personal financial relationship (including
                                        gifts of cash or in-kind) with an entity that owns or has the right to
                                        commercialize a product, process or technology studied in this project?">
                                                                <?= wordwrap($data->COI_1B_comment, 50, "<br />") ?>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q1C)</strong></small> <?= wordwrap(' A personal financial interest in or personal financial relationship (including
                                        gifts of cash or in-kind) with an entity engaged in the performance of this
                                        project as a subcontractor, sub-recipient or vendor?', 50, "<br />") ?></td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->COI_1C) && $data->COI_1C != '' ? wordwrap($data->COI_1C, 50, "<br />") : '---') ?>
                                                        </td>
                                                        <td class="editablediv uk-width-1-3"><a
                                                                    href="javascript:void(0)"
                                                                    class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                    id="COI_1C"
                                                                    data-type="textarea"
                                                                    data-pk="1"
                                                                    data-title=" A personal financial interest in or personal financial relationship (including
                                        gifts of cash or in-kind) with an entity engaged in the performance of this
                                        project as a subcontractor, sub-recipient or vendor?">
                                                                <?= wordwrap($data->COI_1C_comment, 50, "<br />") ?>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q1D)</strong>
                                                            </small> <?= wordwrap(' A board membership of any kind or an executive position (paid or unpaid) with
                                        the sponsor of this study or with an entity that owns or has the right to
                                        commercialize a product, process or technology studied in this project?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->COI_1D) && $data->COI_1D != '' ? wordwrap($data->COI_1D, 50, "<br />") : '---') ?>
                                                        </td>
                                                        <td class="editablediv uk-width-1-3"><a
                                                                    href="javascript:void(0)"
                                                                    class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                    id="COI_1D"
                                                                    data-type="textarea"
                                                                    data-pk="1"
                                                                    data-title=" A board membership of any kind or an executive position (paid or unpaid) with
                                        the sponsor of this study or with an entity that owns or has the right to
                                        commercialize a product, process or technology studied in this project?">
                                                                <?= wordwrap($data->COI_1D_comment, 50, "<br />") ?>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q2)</strong>
                                                            </small> <?= wordwrap('Has the University or has a University-related foundation received a cash or
                                        in-kind gift from the sponsor of this study for the use or benefit of any member
                                        of the research team?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->COI_2) && $data->COI_2 != '' ? wordwrap($data->COI_2, 50, "<br />") : '---') ?>
                                                        </td>
                                                        <td class="editablediv uk-width-1-3"><a
                                                                    href="javascript:void(0)"
                                                                    class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                    id="COI_2"
                                                                    data-type="textarea"
                                                                    data-pk="1"
                                                                    data-title="Has the University or has a University-related foundation received a cash or
                                        in-kind gift from the sponsor of this study for the use or benefit of any member
                                        of the research team?">
                                                                <?= wordwrap($data->COI_2_comment, 50, "<br />") ?>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q3)</strong>
                                                            </small> <?= wordwrap('Has the University or has a University-related foundation received a cash or
                                        in-kind gift for the use or benefit of any member of the research team from an
                                        entity that owns or has the right to commercialize a product, process or
                                        technology studied in this project?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->COI_3) && $data->COI_3 != '' ? wordwrap($data->COI_3, 50, "<br />") : '---') ?>
                                                        </td>
                                                        <td class="editablediv uk-width-1-3"><a
                                                                    href="javascript:void(0)"
                                                                    class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                    id="COI_3"
                                                                    data-type="textarea"
                                                                    data-pk="1"
                                                                    data-title="Has the University or has a University-related foundation received a cash or
                                        in-kind gift for the use or benefit of any member of the research team from an
                                        entity that owns or has the right to commercialize a product, process or
                                        technology studied in this project?">
                                                                <?= wordwrap($data->COI_3_comment, 50, "<br />") ?>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="uk-grid uk-margin-medium-top uk-margin-large-bottom"
                                             data-uk-grid-margin>
                                            <div class="uk-width-large-1-1 uk-overflow-container">


                                                <!--Section 3-->
                                                <h5>Type of ERC Approval</h5>
                                                <table id="ERC" class="uk-table uk-table-striped  uk-text-nowrap ">
                                                    <thead>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <th>Fields</th>
                                                        <th>Values</th>
                                                        <th>Comments</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3"><h3 class="heading_a">
                                                                <span class="sub-heading ERC">Type of ERC Approval:</span>
                                                            </h3></td>
                                                        <td class="uk-width-1-3"></td>
                                                        <td class="editablediv uk-width-1-3"></td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q1)</strong>
                                                            </small> <?= wordwrap(' Please indicate whether you are applying for ERC exemption or full committee
                                        review or your study has already been approved by the previous ERC?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->ERC_1) && $data->ERC_1 != '' ? wordwrap($data->ERC_1, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="ERC_1"
                                                               data-type="textarea" data-pk="1"
                                                               data-title=" Please indicate whether you are applying for ERC exemption or full committee
                                        review or your study has already been approved by the previous ERC?">
                                                                <?= wordwrap($data->ERC_1_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q1A)</strong>
                                                            </small> <?= wordwrap('If check Exemption', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->ERC_1A) && $data->ERC_1A != '' ? wordwrap($data->ERC_1A, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="ERC_1A"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="If check Exemption">
                                                                <?= wordwrap($data->ERC_1A_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">  <?= wordwrap('Others (Please Specify)', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->ERC_1A_other) && $data->ERC_1A_other != '' ? wordwrap($data->ERC_1A_other, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3"><a
                                                                    href="javascript:void(0)"
                                                                    class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                    id="ERC_1A_other"
                                                                    data-type="textarea"
                                                                    data-pk="1"
                                                                    data-title="Others (Please Specify)">
                                                                <?= wordwrap($data->ERC_1A_other_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q2)</strong>
                                                            </small> <?= wordwrap('Is the activity a systematic investigation designed to contribute to
                                        generalizable knowledge?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->ERC_2) && $data->ERC_2 != '' ? wordwrap($data->ERC_2, 50, "<br />") : '---') ?>
                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="ERC_1A"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="Is the activity a systematic investigation designed to contribute to
                                        generalizable knowledge?">
                                                                <?= wordwrap($data->ERC_2_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q3)</strong>
                                                            </small> <?= wordwrap('Does the research involve obtaining information about living individuals?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->ERC_3) && $data->ERC_3 != '' ? wordwrap($data->ERC_3, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3"><a
                                                                    href="javascript:void(0)"
                                                                    class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                    id="ERC_3"
                                                                    data-type="textarea"
                                                                    data-pk="1"
                                                                    data-title="Does the research involve obtaining information about living individuals?">
                                                                <?= wordwrap($data->ERC_3_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q4)</strong>
                                                            </small> <?= wordwrap(' Does the research involve intervention or interaction with the individuals?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->ERC_4) && $data->ERC_4 != '' ? wordwrap($data->ERC_4, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3"><a
                                                                    href="javascript:void(0)"
                                                                    class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                    id="ERC_4"
                                                                    data-type="textarea"
                                                                    data-pk="1"
                                                                    data-title=" Does the research involve intervention or interaction with the individuals?">
                                                                <?= wordwrap($data->ERC_4_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q5)</strong>
                                                            </small> <?= wordwrap('  Is the information individually identifiable?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->ERC_5) && $data->ERC_5 != '' ? wordwrap($data->ERC_5, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3"><a
                                                                    href="javascript:void(0)"
                                                                    class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                    id="ERC_5"
                                                                    data-type="textarea"
                                                                    data-pk="1"
                                                                    data-title="  Is the information individually identifiable?">
                                                                <?= wordwrap($data->ERC_5_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q6)</strong>
                                                            </small> <?= wordwrap('  Is the information private?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->ERC_6) && $data->ERC_6 != '' ? wordwrap($data->ERC_6, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3"><a
                                                                    href="javascript:void(0)"
                                                                    class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                    id="ERC_6"
                                                                    data-type="textarea"
                                                                    data-pk="1"
                                                                    data-title="  Is the information private?">
                                                                <?= wordwrap($data->ERC_6_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q7)</strong>
                                                            </small> <?= wordwrap('Does the research involve collection or study of
                                        existing data, documents, records,
                                        or pathological or diagnostic specimens?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->ERC_7_comment) && $data->ERC_7 != '' ? wordwrap($data->ERC_7, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3"><a
                                                                    href="javascript:void(0)"
                                                                    class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                    id="ERC_7"
                                                                    data-type="textarea"
                                                                    data-pk="1"
                                                                    data-title="Does the research involve collection or study of
                                        existing data, documents, records,
                                        or pathological or diagnostic specimens?">
                                                                <?= wordwrap($data->ERC_7, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q7A)</strong>
                                                            </small> <?= wordwrap('Are these sources publicly available?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->ERC_7A) && $data->ERC_7A != '' ? wordwrap($data->ERC_7A, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="ERC_7A"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="Are these sources publicly available?">
                                                                <?= wordwrap($data->ERC_7A_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q8)</strong>
                                                            </small> <?= wordwrap(' Does this research involve the use of educational tests, survey procedures,
                                        interview procedures, or observation of public behavior?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->ERC_8) && $data->ERC_8 != '' ? wordwrap($data->ERC_8, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="ERC_8"
                                                               data-type="textarea" data-pk="1"
                                                               data-title=" Does this research involve the use of educational tests, survey procedures,
                                        interview procedures, or observation of public behavior?">
                                                                <?= wordwrap($data->ERC_8_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q9)</strong>
                                                            </small> <?= wordwrap('Does the research involve children?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->ERC_9) && $data->ERC_9 != '' ? wordwrap($data->ERC_9, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3"><a
                                                                    href="javascript:void(0)"
                                                                    class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                    id="ERC_9"
                                                                    data-type="textarea"
                                                                    data-pk="1"
                                                                    data-title="Does the research involve children?">
                                                                <?= wordwrap($data->ERC_9_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q10)</strong>
                                                            </small> <?= wordwrap('Is the information obtained recorded in such a manner that human subjects
                                        can be identified, directly or through identifiers linked to the subjects?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->ERC_10) && $data->ERC_10 != '' ? wordwrap($data->ERC_10, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3"><a
                                                                    href="javascript:void(0)"
                                                                    class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                    id="ERC_10"
                                                                    data-type="textarea"
                                                                    data-pk="1"
                                                                    data-title="Is the information obtained recorded in such a manner that human subjects
                                        can be identified, directly or through identifiers linked to the subjects?">
                                                                <?= wordwrap($data->ERC_10_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q11)</strong>
                                                            </small> <?= wordwrap('   Does the research involve studying, evaluating, or examining public benefit or
                                        service programs?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->ERC_11) && $data->ERC_11 != '' ? wordwrap($data->ERC_11, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3"><a
                                                                    href="javascript:void(0)"
                                                                    class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                                    id="ERC_11"
                                                                    data-type="textarea"
                                                                    data-pk="1"
                                                                    data-title="   Does the research involve studying, evaluating, or examining public benefit or
                                        service programs?">
                                                                <?= wordwrap($data->ERC_11_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q11A)</strong>
                                                            </small> <?= wordwrap('Is the research or demonstration project conducted or approved by the
                                        Government Department or Agency Head?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->ERC_11A) && $data->ERC_11A != '' ? wordwrap($data->ERC_11A, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="ERC_11A"
                                                               data-type="textarea" data-pk="1"
                                                               data-title=" (a) Is the research or demonstration project conducted or approved by the
                                        Government Department or Agency Head?">
                                                                <?= wordwrap($data->ERC_11A_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q12)</strong>
                                                            </small> <?= wordwrap('What records, data or human biological specimens will you be using?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->ERC_12) && $data->ERC_12 != '' ? wordwrap($data->ERC_12, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="ERC_12"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="What records, data or human biological specimens will you be using?">
                                                                <?= wordwrap($data->ERC_12_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q13)</strong>
                                                            </small> <?= wordwrap('For each of the data sources describe the methods to uphold confidentiality.', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->ERC_13) && $data->ERC_13 != '' ? wordwrap($data->ERC_13, 50, "<br />") : '---') ?>
                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="ERC_13"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="For each of the data sources describe the methods to uphold confidentiality.">
                                                                <?= wordwrap($data->ERC_13_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="uk-grid uk-margin-medium-top uk-margin-large-bottom"
                                             data-uk-grid-margin>
                                            <div class="uk-width-large-1-1 uk-overflow-container">

                                                <!--Section 4-->
                                                <h5 class="PD">Project Details</h5>
                                                <table id="PD" class="uk-table uk-table-striped  uk-text-nowrap ">
                                                    <thead>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <th>Fields</th>
                                                        <th>Values</th>
                                                        <th>Comments</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3"><h3 class="heading_a">
                                                                <span class="sub-heading PD">Project Details:</span>
                                                            </h3></td>
                                                        <td class="uk-width-1-3"></td>
                                                        <td class="editablediv uk-width-1-3"></td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q1)</strong>
                                                            </small> <?= wordwrap('  Why are you doing this study (study rationale)?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_1) && $data->PD_1 != '' ? wordwrap($data->PD_1, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_1"
                                                               data-type="textarea" data-pk="1"
                                                               data-title=" Why are you doing this study (study rationale)?">
                                                                <?= wordwrap($data->PD_1_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q2)</strong>
                                                            </small> <?= wordwrap(' What are your study objectives?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_2) && $data->PD_2 != '' ? wordwrap($data->PD_2, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_2"
                                                               data-type="textarea" data-pk="1"
                                                               data-title=" What are your study objectives?">
                                                                <?= wordwrap($data->PD_2_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q3)</strong>
                                                            </small> <?= wordwrap('Brief Summary of Proposal including methodology (<100 words)', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_3) && $data->PD_3 != '' ? wordwrap($data->PD_3, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_3"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="Brief Summary of Proposal including methodology (<100 words)">
                                                                <?= wordwrap($data->PD_3_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q4)</strong>
                                                            </small> <?= wordwrap('  Start date of study', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_4_start_date) && $data->PD_4_start_date != '' ? wordwrap($data->PD_4_start_date, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_4_start_date" data-type="textarea" data-pk="1"
                                                               data-title=" Start date of study">
                                                                <?= wordwrap($data->PD_4_start_date_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q4A)</strong>
                                                            </small> <?= wordwrap(' End date of study', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_4_end_date) && $data->PD_4_end_date != '' ? wordwrap($data->PD_4_end_date, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_4_end_date" data-type="textarea" data-pk="1"
                                                               data-title=" End date of study">
                                                                <?= wordwrap($data->PD_4_end_date_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q4B)</strong>
                                                            </small> <?= wordwrap('Total Duration (in days, weeks, months and
                                        year)', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_4_total_time) && $data->PD_4_total_time != '' ? wordwrap($data->PD_4_total_time, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_4_total_time" data-type="textarea" data-pk="1"
                                                               data-title="Total Duration (in days, weeks, months and
                                        year)">
                                                                <?= wordwrap($data->PD_4_total_time_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q5)</strong>
                                                            </small> <?= wordwrap('What is the sample size?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_5) && $data->PD_5 != '' ? wordwrap($data->PD_5, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_5"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="What is the sample size?">
                                                                <?= wordwrap($data->PD_5_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q6)</strong>
                                                            </small> <?= wordwrap('What is the source population?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_6) && $data->PD_6 != '' ? wordwrap($data->PD_6, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_6"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="What is the source population?">
                                                                <?= wordwrap($data->PD_6_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q7)</strong>
                                                            </small> <?= wordwrap('What is the sampling strategy and enrolment method', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_7) && $data->PD_7 != '' ? wordwrap($data->PD_7, 50, "<br />") : '---') ?>
                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_8"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="What is the sampling strategy and enrolment method">
                                                                <?= wordwrap($data->PD_7_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q8)</strong>
                                                            </small> <?= wordwrap('What is the inclusion and exclusion criteria? ', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_8) && $data->PD_8 != '' ? wordwrap($data->PD_8, 50, "<br />") : '---') ?>
                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_8"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="What is the inclusion and exclusion criteria?">
                                                                <?= wordwrap($data->PD_8_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q9)</strong>
                                                            </small> <?= wordwrap(' Is permission needed from any higher authorities for the
                                        study? school principals, facility directors, hospital or healthcare system
                                            administrators)', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_9) && $data->PD_9 != '' ? wordwrap($data->PD_9, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_9"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="  Is permission needed from any higher authorities for the
                                        study?">
                                                                <?= wordwrap($data->PD_9_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q10)</strong>
                                                            </small> <?= wordwrap('What is the study design?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_10) && $data->PD_10 != '' ? wordwrap($data->PD_10, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_10"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="What is the study design?">
                                                                <?= wordwrap($data->PD_10_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q11)</strong>
                                                            </small> <?= wordwrap('What interventions / interaction will the research
                                        subject undergo if they enroll in this study? Please state in detail.', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_11) && $data->PD_11 != '' ? wordwrap($data->PD_11, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_11"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="What interventions / interaction will the research
                                        subject undergo if they enroll in this study? Please state in detail.">
                                                                <?= wordwrap($data->PD_11_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q12)</strong>
                                                            </small> <?= wordwrap('What is the duration of an individual subject\'s
                                        participation,
                                        including follow-up evaluation if applicable? Please include the number
                                        interactions with each participant.', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_12) && $data->PD_12 != '' ? wordwrap($data->PD_12, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_12"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="What is the duration of an individual subject's
                                        participation,
                                        including follow-up evaluation if applicable? Please include the number
                                        interactions with each participant.">
                                                                <?= wordwrap($data->PD_12_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q13)</strong>
                                                            </small> <?= wordwrap(' Where will the interaction / intervention with the
                                        research participants take place? (Describe locations where subjects will be studied, both on and off the
                                            AKU/AKUH campus)', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_13) && $data->PD_13 != '' ? wordwrap($data->PD_13, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_13"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="Where will the interaction / intervention with the
                                        research participants take place? (Describe locations where subjects will be studied, both on and off the
                                            AKU/AKUH campus)">
                                                                <?= wordwrap($data->PD_13_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q14)</strong>
                                                            </small> <?= wordwrap('  What benefits, if any, are expected for the society from
                                        this study?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_14) && $data->PD_14 != '' ? wordwrap($data->PD_14, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_14"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="  What benefits, if any, are expected for the society from
                                        this study?">
                                                                <?= wordwrap($data->PD_14_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q15)</strong>
                                                            </small> <?= wordwrap(' What benefits, if any are expected for the research
                                        subjects upon participation in this study?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_15) && $data->PD_15 != '' ? wordwrap($data->PD_15, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_15"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="What benefits, if any are expected for the research
                                        subjects upon participation in this study?">
                                                                <?= wordwrap($data->PD_15_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q16)</strong>
                                                            </small> <?= wordwrap('What benefits, if any are expected for the University
                                        upon approval of this study?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_16) && $data->PD_16 != '' ? wordwrap($data->PD_16, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_16"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="What benefits, if any are expected for the University
                                        upon approval of this study?">
                                                                <?= wordwrap($data->PD_16_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q17)</strong>
                                                            </small> <?= wordwrap('Inducements for participation. Describe all inducements
                                        to participate, monetary or non-monetary. If monetary, specify the amount and
                                        schedule for payments and if/how this will be prorated if the subject withdraws
                                        (or is withdrawn) from the study prior to completing it. For compensation in
                                        foreign currency, provide a US$ equivalent. Provide evidence that the amount is
                                        not coercive.', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_17) && $data->PD_17 != '' ? wordwrap($data->PD_17, 50, "<br />") : '---') ?>
                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_17"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="Inducements for participation. Describe all inducements
                                        to participate, monetary or non-monetary. If monetary, specify the amount and
                                        schedule for payments and if/how this will be prorated if the subject withdraws
                                        (or is withdrawn) from the study prior to completing it. For compensation in
                                        foreign currency, provide a US$ equivalent. Provide evidence that the amount is
                                        not coercive.">
                                                                <?= wordwrap($data->PD_17_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q18)</strong>
                                                            </small> <?= wordwrap(' Direct or Indirect costs to be borne by subjects.
                                        Includes child care, travel, parking, clinic fees, diagnostic and laboratory
                                        tests, drugs, devices, all professional fees, etc. If there are no costs to
                                        subjects other than their time to participate, indicate this.', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_18) && $data->PD_18 != '' ? wordwrap($data->PD_18, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_18"
                                                               data-type="textarea" data-pk="1"
                                                               data-title=" Direct or Indirect costs to be borne by subjects.
                                        Includes child care, travel, parking, clinic fees, diagnostic and laboratory
                                        tests, drugs, devices, all professional fees, etc. If there are no costs to
                                        subjects other than their time to participate, indicate this.">
                                                                <?= wordwrap($data->PD_18_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q19)</strong>
                                                            </small> <?= wordwrap('List all potential risks to the participants if they
                                        enroll in this study.', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_19) && $data->PD_19 != '' ? wordwrap($data->PD_19, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_19"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="List all potential risks to the participants if they
                                        enroll in this study.">
                                                                <?= wordwrap($data->PD_19_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q20)</strong>
                                                            </small> <?= wordwrap('State all measures that you are taking to mitigate these
                                        risks', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_20) && $data->PD_20 != '' ? wordwrap($data->PD_20, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_20"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="State all measures that you are taking to mitigate these
                                        risks">
                                                                <?= wordwrap($data->PD_20_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q21)</strong>
                                                            </small> <?= wordwrap(' Describe procedures for maintaining confidentiality of
                                        the data you will collect or will receive.', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_21) && $data->PD_21 != '' ? wordwrap($data->PD_21, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_21"
                                                               data-type="textarea" data-pk="1"
                                                               data-title=" Describe procedures for maintaining confidentiality of
                                        the data you will collect or will receive.">
                                                                <?= wordwrap($data->PD_21_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q22)</strong>
                                                            </small> <?= wordwrap('How will soft and hard data be transmitted among research personnel?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_22) && $data->PD_22 != '' ? wordwrap($data->PD_22, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_22"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="How will soft and hard data be transmitted among research personnel?">
                                                                <?= wordwrap($data->PD_22_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q22A)</strong>
                                                            </small> <?= wordwrap('Others please specify', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_22_other) && $data->PD_22_other != '' ? wordwrap($data->PD_22_other, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_22_other"
                                                               data-type="textarea" data-pk="1"
                                                               data-title=" Others please specify">
                                                                <?= wordwrap($data->PD_22_other_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q23)</strong>
                                                            </small> <?= wordwrap(' With whom will the data be shared outside the immediate
                                        AKU research team? For each, explain confidentiality measures.', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_23) && $data->PD_23 != '' ? wordwrap($data->PD_23, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_23A"
                                                               data-type="textarea" data-pk="1"
                                                               data-title=" With whom will the data be shared outside the immediate
                                        AKU research team? For each, explain confidentiality measures?">
                                                                <?= wordwrap($data->PD_23_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q24)</strong>
                                                            </small> <?= wordwrap('Will data be transferred outside this country?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_24) && $data->PD_24 != '' ? wordwrap($data->PD_24, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_24"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="Will data be transferred outside this country?">
                                                                <?= wordwrap($data->PD_24_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q24A)</strong>
                                                            </small> <?= wordwrap('Are data transfer agreements in place?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_24A) && $data->PD_24A != '' ? wordwrap($data->PD_24A, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_24A"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="Are data transfer agreements in place?">
                                                                <?= wordwrap($data->PD_24A_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q25)</strong>
                                                            </small> <?= wordwrap('Will human biological samples be transferred outside this country?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_25) && $data->PD_25 != '' ? wordwrap($data->PD_25, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_25"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="Will human biological samples be transferred outside this country?">
                                                                <?= wordwrap($data->PD_25_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q25A)</strong>
                                                            </small> <?= wordwrap('Are data transfer agreements in place?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_25A) && $data->PD_25A != '' ? wordwrap($data->PD_25A, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_25A"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="Are data transfer agreements in place?">
                                                                <?= wordwrap($data->PD_25A_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q26)</strong>
                                                            </small> <?= wordwrap('Will subjects  specimens be stored for future research?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->PD_26) && $data->PD_26 != '' ? wordwrap($data->PD_26, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="PD_26"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="Will subjects' specimens be stored for future research?">
                                                                <?= wordwrap($data->PD_26_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="uk-grid uk-margin-medium-top uk-margin-large-bottom"
                                             data-uk-grid-margin>
                                            <div class="uk-width-large-1-1 uk-overflow-container">
                                                <!--Section 5-->
                                                <h5 class="CD">Consent details</h5>
                                                <table id="CD" class="uk-table uk-table-striped  uk-text-nowrap ">
                                                    <thead>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <th>Fields</th>
                                                        <th>Values</th>
                                                        <th>Comments</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3"><h3 class="heading_a">
                                                                <span class="sub-heading CD">Consent details:</span>
                                                            </h3></td>
                                                        <td class="uk-width-1-3"></td>
                                                        <td class="editablediv uk-width-1-3">
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q1)</strong>
                                                            </small> <?= wordwrap('Describe the process of obtaining informed consent from
                                        subjects', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->CD_1) && $data->CD_1 != '' ? wordwrap($data->CD_1, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="CD_1"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="   Describe the process of obtaining informed consent from
                                        subjects">
                                                                <?= wordwrap($data->CD_1_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q2)</strong>
                                                            </small> <?= wordwrap('Are you applying for a waiver of written (i.e., signed) consent?', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->CD_2) && $data->CD_2 != '' ? wordwrap($data->CD_2, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="CD_2"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="Are you applying for a waiver of written (i.e., signed) consent?">
                                                                <?= wordwrap($data->CD_2_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q2A)</strong>
                                                            </small> <?= wordwrap(' The only record linking the subject and the research would be the consent
                                        document and the principal risk would be potential harm resulting from a breach
                                        of confidentiality (e.g., study topic is sensitive so that public knowledge of
                                        participation could be damaging). Participants should be asked whether they want
                                        documentation linking them with the research and the participants’ wishes will
                                        govern whether they sign the form. Note: This justification cannot be used in
                                        FDA-regulated research.', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->CD_2A) && $data->CD_2A != '' ? wordwrap($data->CD_2A, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="CD_2A"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="  The only record linking the subject and the research would be the consent
                                        document and the principal risk would be potential harm resulting from a breach
                                        of confidentiality (e.g., study topic is sensitive so that public knowledge of
                                        participation could be damaging). Participants should be asked whether they want
                                        documentation linking them with the research and the participants’ wishes will
                                        govern whether they sign the form. Note: This justification cannot be used in
                                        FDA-regulated research.">
                                                                <?= wordwrap($data->CD_2A_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q2B)</strong>
                                                            </small> <?= wordwrap('The research presents no more than minimal risk of harm to subjects and involves
                                        no procedures for which written consent is normally required outside of the
                                        research context (e.g., phone survey).', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->CD_2B) && $data->CD_2B != '' ? wordwrap($data->CD_2B, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="CD_2B"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="The research presents no more than minimal risk of harm to subjects and involves
                                        no procedures for which written consent is normally required outside of the
                                        research context (e.g., phone survey).">
                                                                <?= wordwrap($data->CD_2B_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                        <td class="uk-width-1-3">
                                                            <small><strong>Q3)</strong>
                                                            </small> <?= wordwrap('Describe procedures that will ensure privacy of the subjects in this study.
                                        Examples include the setting for interviews, phone conversations, or physical
                                        examinations; communication methods or mailed materials (e.g., mailings should
                                        not indicate disease status or focus of study on the envelope).', 50, "<br />") ?>
                                                        </td>
                                                        <td class="uk-width-1-3">
                                                            <?= (isset($data->CD_3) && $data->CD_3 != '' ? wordwrap($data->CD_3, 50, "<br />") : '---') ?>

                                                        </td>
                                                        <td class="editablediv uk-width-1-3">
                                                            <a href="javascript:void(0)"
                                                               class="<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?> field"
                                                               id="CD_3"
                                                               data-type="textarea" data-pk="1"
                                                               data-title="Describe procedures that will ensure privacy of the subjects in this study.
                                        Examples include the setting for interviews, phone conversations, or physical
                                        examinations; communication methods or mailed materials (e.g., mailings should
                                        not indicate disease status or focus of study on the envelope).">
                                                                <?= wordwrap($data->CD_3_comment, 50, "<br />") ?></a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                                <li>
                                    <div class="uk-grid uk-margin-medium-top uk-margin-large-bottom"
                                         data-uk-grid-margin>
                                        <div class="uk-width-large-1-1 uk-overflow-container">
                                            <!--Section 5-->
                                            <h5 class="Documents">Documents</h5>
                                            <p>
                                                <a target="_blank"
                                                   href=" <?= (isset($data->attach_files) && $data->attach_files != '' ?
                                                       base_url('assets/uploads/') . $data->idApplication . '/' . $data->attach_files : '') ?>">
                                                    <?= (isset($data->attach_files) && $data->attach_files != '' ?
                                                        $data->attach_files : '---') ?>
                                                </a>
                                            </p>
                                        </div>
                                        <div class="uk-width-large-1-1 uk-overflow-container">
                                            <h5 class="Documents">Commented Document</h5>
                                            <?php if ($_SESSION['login']['idGroup'] == '1AA4943C-B01F-61DF-A582-04A3E8150048') { ?>
                                                <p>
                                                    <a target="_blank"
                                                       href=" <?= (isset($getData[0]->attach_files_comment) && $getData[0]->attach_files_comment != '' ?
                                                           base_url('assets/uploads/') . $data->idApplication . '/' . $getData[0]->attach_files_comment : '') ?>">
                                                        <?= (isset($getData[0]->attach_files_comment) && $getData[0]->attach_files_comment != '' ?
                                                            $getData[0]->attach_files_comment : '---') ?>
                                                    </a>
                                                </p>
                                            <?php } else { ?>
                                                <div class="md-card">
                                                    <form method="post" onsubmit="return false" id="commentForm"
                                                          enctype="multipart/form-data">
                                                        <input type="hidden" id="idApplicationForm"
                                                               name="idApplicationForm"
                                                               value="<?= $data->idApplication ?>">
                                                        <input type="hidden" id="idApplicationComment"
                                                               name="idApplicationComment"
                                                               value="<?= $data->idApplicationComment ?>">
                                                        <input type="hidden" id="ReviewNo" name="ReviewNo"
                                                               value="<?= $data->ReviewNo ?>">
                                                        <div class="md-card-content">
                                                            <?= (isset($getData[0]->attach_files_comment) && $getData[0]->attach_files_comment != '' ? '
<h4>File already uploaded <a target="_blank" href="' . base_url('assets/uploads/' . $data->idApplication . '/' . $getData[0]->attach_files_comment) . '" >' . $getData[0]->attach_files_comment . '</a></h4>' : '') ?>
                                                            <input type="file" id="attach_files_comment"
                                                                   onchange="updateCommentFile()" multiple
                                                                   name="attach_files_comment[]" class="dropify"
                                                                   data-max-file-size="10000K"/>
                                                        </div>
                                                    </form>
                                                    <div id="file_upload-progressbar" class="uk-progress uk-hidden">
                                                        <div class="uk-progress-bar" style="width:0">0%</div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>


                        <?php if (isset($_SESSION['login']['idGroup']) && $_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048') { ?>
                            <div class="md-content" style="float: right;margin: -25px 185px;">
                                <div>
                                    <a class="md-btn md-btn-success md-btn-wave-light waves-effect waves-button waves-light"
                                       href="javascript:void(0)"
                                       onclick="approveApp(1, 'isComment', <?= $getData[0]->idApplicationComment ?>)"
                                       data-idComment="">Approve</a>
                                </div>
                            </div>
                            <div class="md-content" style="float: right;margin: -25px 0px;">
                                <div>
                                    <a class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light"
                                       onclick="submitComment(1, 'isComment', <?= $getData[0]->idApplicationComment ?>)"
                                       href="javascript:void(0)"
                                       data-idComment="">Submit Comments</a>
                                </div>
                            </div>
                        <?php } ?>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- page specific plugins -->
<!-- mockAjax -->
<script src="<?= base_url() ?>assets/bower_components/jquery-mockjax/dist/jquery.mockjax.min.js"></script>
<!-- jqueryUI -->
<script src="<?= base_url() ?>assets/bower_components/x-editable/dist/jquery-editable/jquery-ui-datepicker/js/jquery-ui-1.10.3.custom.min.js"></script>
<!-- poshytip -->
<script src="<?= base_url() ?>assets/js/custom/xeditable/jquery.poshytip.min.js"></script>
<!-- select2 -->
<script src="<?= base_url() ?>assets/js/custom/xeditable/select2/select2.min.js"></script>
<!-- xeditable -->
<script src="<?= base_url() ?>assets/bower_components/x-editable/dist/jquery-editable/js/jquery-editable-poshytip.js"></script>

<!--  xeditable functions -->
<script src="<?= base_url() ?>assets/js/pages/plugins_xeditable.min.js"></script>


<!--  dropify -->
<link rel="stylesheet" href="<?= base_url() ?>assets/skins/dropify/css/dropify.css">
<script src="<?= base_url() ?>assets/bower_components/dropify/dist/js/dropify.min.js"></script>
<!--  form file input functions -->
<script src="<?= base_url() ?>assets/js/pages/forms_file_input.min.js"></script>
<script src="<?= base_url() ?>assets/js/pages/forms_file_upload.min.js"></script>


<script>
    function updateCommentFile() {
        var formData = new FormData($("#commentForm")[0]);
        $("#page_content").css('opacity', 0.5);
        altair_helpers.content_preloader_show('md');
        CallAjax('<?= base_url()?>Form/updateCommentFile', formData, 'POST', function (result) {
            $("#page_content").css('opacity', 1);
            altair_helpers.content_preloader_hide();
            if (result != '' && JSON.parse(result).length > 0) {
                var response = JSON.parse(result);
                try {
                    console.log(response);
                    notificatonShow(response[0], response[1]);
                    if (response[1] === 'success') {
                        setTimeout(function () {
                            //var link = '<?//= base_url()?>///form_drafts';
                            // window.location.href = link;
                        }, 500)
                    }
                } catch (e) {
                }
            }
        }, true);
    }

    $.each($('.<?= ($_SESSION['login']['idGroup'] != '1AA4943C-B01F-61DF-A582-04A3E8150048' ? 'textareafield ' : '') ?>'), function (i, v) {
        var a = $(v).html().replace(/(^\s+|\s+$)/g, '');
        $(v).html(a);
    });

    function submitComment(value, id, idComment) {
        var data = {};
        data['idApplication'] = $('#idApplication_hid').val();
        data['createdBy'] = $('#createdBy').val();
        data['id'] = id;
        data['value'] = value;
        data['idComment'] = idComment;
        CallAjax('<?= base_url('form/insert_update_comment')?>', data, 'POST', function (result) {
            $("#page_content").css('opacity', 1);
            altair_helpers.content_preloader_hide();
            if (result != '' && JSON.parse(result).length > 0) {
                var response = JSON.parse(result);
                try {
                    notificatonShow(response[0], response[1]);
                } catch (e) {
                }
            }
        });
    }
</script>
