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
                            </h2>

                        </div>
                        <a class="md-fab md-fab-small md-fab-accent hidden-print"
                           href="<?= base_url('form_edit/' . $getData[0]->idApplication) ?>">
                            <i class="material-icons">&#xE150;</i>
                        </a>
                    </div>


                    <div class="user_content">
                        <ul id="user_profile_tabs" class="uk-tab"
                            data-uk-tab="{connect:'#user_profile_tabs_content', animation:'slide-horizontal'}"
                            data-uk-sticky="{ top: 48, media: 960 }">
                            <?php foreach ($getData as $key => $data) { ?>
                                <li class="<?= ($key == 0 ? 'uk-active' : '') ?>"><a href="javascript:void(0)">Review
                                        No <?= $getData[$key]->ReviewNo ?></a></li>
                            <?php } ?>
                        </ul>
                        <ul id="user_profile_tabs_content" class="uk-switcher uk-margin">
                            <?php foreach ($getData as $key => $data) { ?>
                                <li>
                                    <div class="uk-grid uk-margin-medium-top uk-margin-large-bottom"
                                         data-uk-grid-margin>
                                        <div class="uk-width-large-1-1 uk-overflow-container">
                                            <!--
                                                 <tr data-idComment="">
                                                    <td class="uk-width-1-3">Simple text field</td>
                                                    <td class="uk-width-1-3"><a href="javascript:void(0)" class="textareafield field"
                                                                                id="username" data-type="textarea"
                                                                                data-pk="1" data-title="Enter username">superuser</a>
                                                    </td>
                                                     <td class="editablediv uk-width-1-3">
                                                    </td>
                                                </tr>
                                                 <tr data-idComment="">
                                                    <td> asdas
                                                    </td>
                                                    <td class="uk-width-large-1-3"><a href="javascript:void(0)"
                                                                                      class="textareafield field" id="firstname"
                                                                                      data-type="textarea" data-pk="1"
                                                                                      data-placement="right"
                                                                                      data-placeholder="Required"
                                                                                      data-title="Enter your firstname"></a>
                                                    </td>
                                                     <td class="editablediv uk-width-1-3">
                                                    </td>
                                                </tr>
                                                 <tr data-idComment="">
                                                    <td>Select, local array, custom display</td>
                                                    <td><a href="javascript:void(0)" class=" " id="sex"
                                                           data-type="select" data-pk="1" data-value=""
                                                           data-title="Select sex"></a></td>
                                                     <td class="editablediv uk-width-1-3">
                                                    </td>
                                                </tr>-->

                                            <h3>General Information</h3>
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
                                                        <a href="javascript:void(0)" class="textareafield field"
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
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>

                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Title</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PID_title"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Title">
                                                            <?= wordwrap($data->PID_title, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_title_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">First Name</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PID_first_name" data-type="textarea" data-pk="1"
                                                           data-title="First Name">
                                                            <?= wordwrap($data->PID_first_name, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_first_name_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Surname</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PID_surname"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Surname">
                                                            <?= wordwrap($data->PID_surname, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_surname_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Department</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PID_department" data-type="textarea" data-pk="1"
                                                           data-title="Department">
                                                            <?= wordwrap($data->PID_department, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3"> <?= wordwrap($data->PID_department_comment, 50, "<br />") ?></td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Designation</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PID_designation" data-type="textarea" data-pk="1"
                                                           data-title="Designation">
                                                            <?= wordwrap($data->PID_designation, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3"> <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?></td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Campus</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PID_campus"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Campus">
                                                            <?= wordwrap($data->PID_campus, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_campus_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Country</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PID_country"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Country">
                                                            <?= wordwrap($data->PID_country, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_country_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Telephone</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PID_telephone" data-type="textarea" data-pk="1"
                                                           data-title="Telephone">
                                                            <?= wordwrap($data->PID_telephone, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->Telephone_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Ext</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PID_ext"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Ext">
                                                            <?= wordwrap($data->PID_ext, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_ext_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Expiry date of Certification</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PID_certificate_expiry_date" data-type="textarea"
                                                           data-pk="1"
                                                           data-title="Expiry date of Certification">
                                                            <?= wordwrap($data->PID_certificate_expiry_date, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_certificate_expiry_date_comment, 50, "<br />") ?>
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
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="DCD_title"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Title">
                                                            <?= wordwrap($data->DCD_title, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->DCD_title_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">First Name</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="DCD_first_name" data-type="textarea" data-pk="1"
                                                           data-title="First Name">
                                                            <?= wordwrap($data->DCD_first_name, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->DCD_first_name_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Surname</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="DCD_surname"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Surname">
                                                            <?= wordwrap($data->DCD_surname, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->DCD_surname_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Department</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="DCD_department" data-type="textarea" data-pk="1"
                                                           data-title="Department">
                                                            <?= wordwrap($data->DCD_department, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->DCD_department_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Designation</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="DCD_designation" data-type="textarea" data-pk="1"
                                                           data-title="Designation">
                                                            <?= wordwrap($data->DCD_designation, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->DCD_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Campus</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="DCD_campus"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Campus">
                                                            <?= wordwrap($data->DCD_campus, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->DCD_campus_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Country</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="DCD_country"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Country">
                                                            <?= wordwrap($data->DCD_country, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->DCD_country_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Telephone</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="DCD_telephone" data-type="textarea" data-pk="1"
                                                           data-title="Telephone">
                                                            <?= wordwrap($data->DCD_telephone, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->DCD_telephone_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Ext</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="DCD_ext"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Ext">
                                                            <?= wordwrap($data->DCD_ext, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->DCD_ext_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Expiry date of Certification</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="DCD_certificate_expiry_date" data-type="textarea"
                                                           data-pk="1"
                                                           data-title="Expiry date of Certification">
                                                            <?= wordwrap($data->DCD_certificate_expiry_date, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->DCD_certificate_expiry_date_comment, 50, "<br />") ?>
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
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="TMD_title"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Title">
                                                            <?= wordwrap($data->TMD_title, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->TMD_title_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">First Name</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="TMD_first_name" data-type="textarea" data-pk="1"
                                                           data-title="First Name">
                                                            <?= wordwrap($data->TMD_first_name, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->TMD_first_name_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Surname</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="TMD_surname"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Surname">
                                                            <?= wordwrap($data->TMD_surname, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->TMD_surname_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Department</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="TMD_department" data-type="textarea" data-pk="1"
                                                           data-title="Department">
                                                            <?= wordwrap($data->TMD_department, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->TMD_department_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Designation</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="TMD_designation" data-type="textarea" data-pk="1"
                                                           data-title="Designation">
                                                            <?= wordwrap($data->TMD_designation, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->TMD_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Campus</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="TMD_campus"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Campus">
                                                            <?= wordwrap($data->TMD_campus, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->TMD_campus_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Country</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="TMD_country"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Country">
                                                            <?= wordwrap($data->TMD_country, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->TMD_country_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Telephone</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="TMD_telephone" data-type="textarea" data-pk="1"
                                                           data-title="Telephone">
                                                            <?= wordwrap($data->TMD_telephone, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->TMD_telephone_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Ext</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="TMD_ext"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Ext">
                                                            <?= wordwrap($data->TMD_ext, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->TMD_ext_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Expiry date of Certification</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="TMD_certificate_expiry_date" data-type="textarea"
                                                           data-pk="1"
                                                           data-title="Expiry date of Certification">
                                                            <?= wordwrap($data->TMD_certificate_expiry_date, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->TMD_certificate_expiry_date_comment, 50, "<br />") ?>
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
                                                        students/resident
                                                        synopsis
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="study_part_yes" data-type="textarea" data-pk="1"
                                                           data-title="Is this study a part of students/resident
                                                        synopsis">
                                                            <?= wordwrap($data->study_part_yes, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->study_part_yes_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">If yes, Program
                                                        (Exclude resident, fellow and faculty research from)
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="study_part_options" data-type="textarea" data-pk="1"
                                                           data-title="If yes, Program
                                        (Exclude resident, fellow and faculty research from)">
                                                            <?= wordwrap($data->study_part_options, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->study_part_options_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Others (Please Specify)</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="study_part_other" data-type="textarea" data-pk="1"
                                                           data-title="Others (Please Specify)">
                                                            <?= wordwrap($data->study_part_other, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->study_part_other_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Is the study</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="study_fund"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Is the study">
                                                            <?= wordwrap($data->study_fund, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->study_fund_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">If Funded or Sponsored</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="study_fund_payment" data-type="textarea" data-pk="1"
                                                           data-title="If Funded or Sponsored">
                                                            <?= wordwrap($data->study_fund_payment, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->study_fund_payment_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">Others (Please Specify)</td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="study_fund_other" data-type="textarea" data-pk="1"
                                                           data-title="Others (Please Specify)">
                                                            <?= wordwrap($data->study_fund_other, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->study_fund_other_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>

                                            <!--Section 2-->
                                            <h3>Conflict Of Interest</h3>
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
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="COI_1A"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="A personal financial interest in or personal financial relationship (including gifts of cash or in-kind) with the sponsor of this study?">
                                                            <?= wordwrap($data->COI_1A, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q1B)</strong></small> <?= wordwrap(' A personal financial interest in or personal financial relationship (including
                                        gifts of cash or in-kind) with an entity that owns or has the right to
                                        commercialize a product, process or technology studied in this project?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="COI_1B"
                                                           data-type="textarea" data-pk="1"
                                                           data-title=" A personal financial interest in or personal financial relationship (including
                                        gifts of cash or in-kind) with an entity that owns or has the right to
                                        commercialize a product, process or technology studied in this project?">
                                                            <?= wordwrap($data->COI_1B, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q1C)</strong></small> <?= wordwrap(' A personal financial interest in or personal financial relationship (including
                                        gifts of cash or in-kind) with an entity engaged in the performance of this
                                        project as a subcontractor, sub-recipient or vendor?', 50, "<br />") ?></td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="COI_1C"
                                                           data-type="textarea" data-pk="1"
                                                           data-title=" A personal financial interest in or personal financial relationship (including
                                        gifts of cash or in-kind) with an entity engaged in the performance of this
                                        project as a subcontractor, sub-recipient or vendor?">
                                                            <?= wordwrap($data->COI_1C, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
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
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="COI_1D"
                                                           data-type="textarea" data-pk="1"
                                                           data-title=" A board membership of any kind or an executive position (paid or unpaid) with
                                        the sponsor of this study or with an entity that owns or has the right to
                                        commercialize a product, process or technology studied in this project?">
                                                            <?= wordwrap($data->COI_1D, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
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
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="COI_2"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Has the University or has a University-related foundation received a cash or
                                        in-kind gift from the sponsor of this study for the use or benefit of any member
                                        of the research team?">
                                                            <?= wordwrap($data->COI_2, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
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
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="COI_3"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Has the University or has a University-related foundation received a cash or
                                        in-kind gift for the use or benefit of any member of the research team from an
                                        entity that owns or has the right to commercialize a product, process or
                                        technology studied in this project?">
                                                            <?= wordwrap($data->COI_3, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>


                                            <!--Section 3-->
                                            <h3>Type of ERC Approval</h3>
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
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q1)</strong>
                                                        </small> <?= wordwrap(' Please indicate whether you are applying for ERC exemption or full committee
                                        review or your study has already been approved by the previous ERC?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="ERC_1"
                                                           data-type="textarea" data-pk="1"
                                                           data-title=" Please indicate whether you are applying for ERC exemption or full committee
                                        review or your study has already been approved by the previous ERC?">
                                                            <?= wordwrap($data->ERC_1, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q1A)</strong>
                                                        </small> <?= wordwrap('If check Exemption', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="ERC_1A"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="If check Exemption">
                                                            <?= wordwrap($data->ERC_1A, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">  <?= wordwrap('Others (Please Specify)', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="ERC_1A_other" data-type="textarea" data-pk="1"
                                                           data-title="Others (Please Specify)">
                                                            <?= wordwrap($data->ERC_1A_other, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q2)</strong>
                                                        </small> <?= wordwrap('Is the activity a systematic investigation designed to contribute to
                                        generalizable knowledge?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="ERC_1A"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Is the activity a systematic investigation designed to contribute to
                                        generalizable knowledge?">
                                                            <?= wordwrap($data->ERC_2, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q1A)</strong>
                                                        </small> <?= wordwrap('Does the research involve obtaining information about living individuals?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="ERC_3"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Does the research involve obtaining information about living individuals?">
                                                            <?= wordwrap($data->ERC_3, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q4)</strong>
                                                        </small> <?= wordwrap(' Does the research involve intervention or interaction with the individuals?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="ERC_4"
                                                           data-type="textarea" data-pk="1"
                                                           data-title=" Does the research involve intervention or interaction with the individuals?">
                                                            <?= wordwrap($data->ERC_4, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q5)</strong>
                                                        </small> <?= wordwrap('  Is the information individually identifiable?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="ERC_5"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="  Is the information individually identifiable?">
                                                            <?= wordwrap($data->ERC_5, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q6)</strong>
                                                        </small> <?= wordwrap('  Is the information private?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="ERC_6"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="  Is the information private?">
                                                            <?= wordwrap($data->ERC_6, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
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
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="ERC_7"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Does the research involve collection or study of
                                        existing data, documents, records,
                                        or pathological or diagnostic specimens?">
                                                            <?= wordwrap($data->ERC_7, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q7A)</strong>
                                                        </small> <?= wordwrap('Are these sources publicly available?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="ERC_7A"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Are these sources publicly available?">
                                                            <?= wordwrap($data->ERC_7A, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q8)</strong>
                                                        </small> <?= wordwrap(' Does this research involve the use of educational tests, survey procedures,
                                        interview procedures, or observation of public behavior?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="ERC_8"
                                                           data-type="textarea" data-pk="1"
                                                           data-title=" Does this research involve the use of educational tests, survey procedures,
                                        interview procedures, or observation of public behavior?">
                                                            <?= wordwrap($data->ERC_8, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q9)</strong>
                                                        </small> <?= wordwrap('Does the research involve children?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="ERC_9"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Does the research involve children?">
                                                            <?= wordwrap($data->ERC_9, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q10)</strong>
                                                        </small> <?= wordwrap('Is the information obtained recorded in such a manner that human subjects
                                        can be identified, directly or through identifiers linked to the subjects?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="ERC_10"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Is the information obtained recorded in such a manner that human subjects
                                        can be identified, directly or through identifiers linked to the subjects?">
                                                            <?= wordwrap($data->ERC_10, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q11)</strong>
                                                        </small> <?= wordwrap('   Does the research involve studying, evaluating, or examining public benefit or
                                        service programs?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="ERC_11"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="   Does the research involve studying, evaluating, or examining public benefit or
                                        service programs?">
                                                            <?= wordwrap($data->ERC_11, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q11A)</strong>
                                                        </small> <?= wordwrap('Is the research or demonstration project conducted or approved by the
                                        Government Department or Agency Head?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="ERC_11A"
                                                           data-type="textarea" data-pk="1"
                                                           data-title=" (a) Is the research or demonstration project conducted or approved by the
                                        Government Department or Agency Head?">
                                                            <?= wordwrap($data->ERC_11A, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q12)</strong>
                                                        </small> <?= wordwrap('What records, data or human biological specimens will you be using?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="ERC_12"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="What records, data or human biological specimens will you be using?">
                                                            <?= wordwrap($data->ERC_12, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q13)</strong>
                                                        </small> <?= wordwrap('For each of the data sources describe the methods to uphold confidentiality.', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="ERC_13"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="For each of the data sources describe the methods to uphold confidentiality.">
                                                            <?= wordwrap($data->ERC_13, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>

                                            <!--Section 4-->
                                            <h3 class="PD">Project Details</h3>
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
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q1)</strong>
                                                        </small> <?= wordwrap('  Why are you doing this study (study rationale)?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_1"
                                                           data-type="textarea" data-pk="1"
                                                           data-title=" Why are you doing this study (study rationale)?">
                                                            <?= wordwrap($data->PD_1, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q2)</strong>
                                                        </small> <?= wordwrap(' What are your study objectives?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_2"
                                                           data-type="textarea" data-pk="1"
                                                           data-title=" What are your study objectives?">
                                                            <?= wordwrap($data->PD_2, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q3)</strong>
                                                        </small> <?= wordwrap('Brief Summary of Proposal including methodology (<100 words)', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_3"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Brief Summary of Proposal including methodology (<100 words)">
                                                            <?= wordwrap($data->PD_3, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q4)</strong>
                                                        </small> <?= wordwrap('  Start date of study', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_4_start_date" data-type="textarea" data-pk="1"
                                                           data-title=" Start date of study">
                                                            <?= wordwrap($data->PD_4_start_date, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q4A)</strong>
                                                        </small> <?= wordwrap(' End date of study', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_4_end_date" data-type="textarea" data-pk="1"
                                                           data-title=" End date of study">
                                                            <?= wordwrap($data->PD_4_end_date, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q4B)</strong>
                                                        </small> <?= wordwrap('Total Duration (in days, weeks, months and
                                        year)', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_4_total_time" data-type="textarea" data-pk="1"
                                                           data-title="Total Duration (in days, weeks, months and
                                        year)">
                                                            <?= wordwrap($data->PD_4_total_time, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q5)</strong>
                                                        </small> <?= wordwrap('What is the sample size?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_5"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="What is the sample size?">
                                                            <?= wordwrap($data->PD_5, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q6)</strong>
                                                        </small> <?= wordwrap('What is the source population?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_6"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="What is the source population?">
                                                            <?= wordwrap($data->PD_6, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q8)</strong>
                                                        </small> <?= wordwrap('What is the sampling strategy and enrolment method', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_8"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="What is the sampling strategy and enrolment method">
                                                            <?= wordwrap($data->PD_8, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
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
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_9"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="  Is permission needed from any higher authorities for the
                                        study?">
                                                            <?= wordwrap($data->PD_9, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q10)</strong>
                                                        </small> <?= wordwrap('What is the study design?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_10"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="What is the study design?">
                                                            <?= wordwrap($data->PD_10, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q11)</strong>
                                                        </small> <?= wordwrap('What interventions / interaction will the research
                                        subject undergo if they enroll in this study? Please state in detail.', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_11"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="What interventions / interaction will the research
                                        subject undergo if they enroll in this study? Please state in detail.">
                                                            <?= wordwrap($data->PD_11, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
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
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_12"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="What is the duration of an individual subject's
                                        participation,
                                        including follow-up evaluation if applicable? Please include the number
                                        interactions with each participant.">
                                                            <?= wordwrap($data->PD_12, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
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
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_13"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Where will the interaction / intervention with the
                                        research participants take place? (Describe locations where subjects will be studied, both on and off the
                                            AKU/AKUH campus)">
                                                            <?= wordwrap($data->PD_13, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q14)</strong>
                                                        </small> <?= wordwrap('  What benefits, if any, are expected for the society from
                                        this study?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_14"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="  What benefits, if any, are expected for the society from
                                        this study?">
                                                            <?= wordwrap($data->PD_14, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q15)</strong>
                                                        </small> <?= wordwrap(' What benefits, if any are expected for the research
                                        subjects upon participation in this study?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_15"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="What benefits, if any are expected for the research
                                        subjects upon participation in this study?">
                                                            <?= wordwrap($data->PD_15, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q16)</strong>
                                                        </small> <?= wordwrap('What benefits, if any are expected for the University
                                        upon approval of this study?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_16"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="What benefits, if any are expected for the University
                                        upon approval of this study?">
                                                            <?= wordwrap($data->PD_16, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
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
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_17"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Inducements for participation. Describe all inducements
                                        to participate, monetary or non-monetary. If monetary, specify the amount and
                                        schedule for payments and if/how this will be prorated if the subject withdraws
                                        (or is withdrawn) from the study prior to completing it. For compensation in
                                        foreign currency, provide a US$ equivalent. Provide evidence that the amount is
                                        not coercive.">
                                                            <?= wordwrap($data->PD_17, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
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
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_18"
                                                           data-type="textarea" data-pk="1"
                                                           data-title=" Direct or Indirect costs to be borne by subjects.
                                        Includes child care, travel, parking, clinic fees, diagnostic and laboratory
                                        tests, drugs, devices, all professional fees, etc. If there are no costs to
                                        subjects other than their time to participate, indicate this.">
                                                            <?= wordwrap($data->PD_18, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q19)</strong>
                                                        </small> <?= wordwrap('List all potential risks to the participants if they
                                        enroll in this study.', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_19"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="List all potential risks to the participants if they
                                        enroll in this study.">
                                                            <?= wordwrap($data->PD_19, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q20)</strong>
                                                        </small> <?= wordwrap('State all measures that you are taking to mitigate these
                                        risks', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_20"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="State all measures that you are taking to mitigate these
                                        risks">
                                                            <?= wordwrap($data->PD_20, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q21)</strong>
                                                        </small> <?= wordwrap(' Describe procedures for maintaining confidentiality of
                                        the data you will collect or will receive.', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_21"
                                                           data-type="textarea" data-pk="1"
                                                           data-title=" Describe procedures for maintaining confidentiality of
                                        the data you will collect or will receive.">
                                                            <?= wordwrap($data->PD_21, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q22)</strong>
                                                        </small> <?= wordwrap('How will soft and hard data be transmitted among research personnel?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_22"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="How will soft and hard data be transmitted among research personnel?">
                                                            <?= wordwrap($data->PD_22, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q22A)</strong>
                                                        </small> <?= wordwrap('Others please specify', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_22_other"
                                                           data-type="textarea" data-pk="1"
                                                           data-title=" Others please specify">
                                                            <?= wordwrap($data->PD_22_other, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q23A)</strong>
                                                        </small> <?= wordwrap(' With whom will the data be shared outside the immediate
                                        AKU research team? For each, explain confidentiality measures.', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_23A"
                                                           data-type="textarea" data-pk="1"
                                                           data-title=" With whom will the data be shared outside the immediate
                                        AKU research team? For each, explain confidentiality measures?">
                                                            <?= wordwrap($data->PD_23A, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q24)</strong>
                                                        </small> <?= wordwrap('Will data be transferred outside this country?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_24"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Will data be transferred outside this country?">
                                                            <?= wordwrap($data->PD_24, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q24A)</strong>
                                                        </small> <?= wordwrap('Are data transfer agreements in place?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_24A"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Are data transfer agreements in place?">
                                                            <?= wordwrap($data->PD_24A, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q25)</strong>
                                                        </small> <?= wordwrap('Will human biological samples be transferred outside this country?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_25"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Will human biological samples be transferred outside this country?">
                                                            <?= wordwrap($data->PD_25, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q25A)</strong>
                                                        </small> <?= wordwrap('Are data transfer agreements in place?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_25A"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Are data transfer agreements in place?">
                                                            <?= wordwrap($data->PD_25A, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q26)</strong>
                                                        </small> <?= wordwrap('Will subjects  specimens be stored for future research?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="PD_26"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Will subjects' specimens be stored for future research?">
                                                            <?= wordwrap($data->PD_26, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>

                                            <!--Section 5-->
                                            <h3 class="CD">Consent details</h3>
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
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q1)</strong>
                                                        </small> <?= wordwrap('Describe the process of obtaining informed consent from
                                        subjects', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="CD_1"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="   Describe the process of obtaining informed consent from
                                        subjects">
                                                            <?= wordwrap($data->CD_1, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                <tr data-idComment="<?= $data->idApplicationComment ?>">
                                                    <td class="uk-width-1-3">
                                                        <small><strong>Q2)</strong>
                                                        </small> <?= wordwrap('Are you applying for a waiver of written (i.e., signed) consent?', 50, "<br />") ?>
                                                    </td>
                                                    <td class="uk-width-1-3">
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="CD_2"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Are you applying for a waiver of written (i.e., signed) consent?">
                                                            <?= wordwrap($data->CD_2, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
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
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="CD_2A"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="  The only record linking the subject and the research would be the consent
                                        document and the principal risk would be potential harm resulting from a breach
                                        of confidentiality (e.g., study topic is sensitive so that public knowledge of
                                        participation could be damaging). Participants should be asked whether they want
                                        documentation linking them with the research and the participants’ wishes will
                                        govern whether they sign the form. Note: This justification cannot be used in
                                        FDA-regulated research.">
                                                            <?= wordwrap($data->CD_2A, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
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
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="CD_2B"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="The research presents no more than minimal risk of harm to subjects and involves
                                        no procedures for which written consent is normally required outside of the
                                        research context (e.g., phone survey).">
                                                            <?= wordwrap($data->CD_2B, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
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
                                                        <a href="javascript:void(0)" class="textareafield field"
                                                           id="CD_3"
                                                           data-type="textarea" data-pk="1"
                                                           data-title="Describe procedures that will ensure privacy of the subjects in this study.
                                        Examples include the setting for interviews, phone conversations, or physical
                                        examinations; communication methods or mailed materials (e.g., mailings should
                                        not indicate disease status or focus of study on the envelope).">
                                                            <?= wordwrap($data->CD_3, 50, "<br />") ?></a>
                                                    </td>
                                                    <td class="editablediv uk-width-1-3">
                                                        <?= wordwrap($data->PID_designation_comment, 50, "<br />") ?>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
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

<script>
    $.each($('.textareafield'), function (i, v) {
        var a = $(v).html().replace(/(^\s+|\s+$)/g, '');
        $(v).html(a);
    });

    function submitComment(value, id, idComment) {
        var data = {};
        data['id'] = id;
        data['value'] = value;
        data['idComment'] = idComment;
        CallAjax('<?= base_url('form/insert_update_comment')?>', data, 'POST', function (result) {

        });
    }
</script>
