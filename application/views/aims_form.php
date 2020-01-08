<div id="page_content">
    <div id="page_content_inner">
        <h2 class="heading_b uk-margin-bottom">AIMS PROJECT</h2>
        <div class="md-card uk-margin-large-bottom">
            <div class="md-card-content">
                <div class="uk-width-medium-1-1">
                    <?php if (isset($getData[0]->edit) && $getData[0]->edit == 'Yes') {
                        $reviewNo = $getData[0]->ReviewNo;
                    } else {
                        if (isset($getData[0]->ReviewNo) && $getData[0]->ReviewNo != '') {
                            $reviewNo = $getData[0]->ReviewNo + 1;
                        } else {
                            $reviewNo = 1;
                        }
                    } ?>
                    <?= (isset($getData[0]->title_of_study) && $getData[0]->title_of_study != '' ? '<h4>Project: ' . $getData[0]->title_of_study . '</h4>' : '') ?>
                    <?= (isset($getData[0]->idApplication) && $getData[0]->idApplication != '' ? '<h4>Project ID: ' . $getData[0]->idApplication . '</h4>' : '') ?>
                    <div style=" float: right;    margin: 10px 10px;">
                        <a class="md-btn md-btn-success md-btn-wave-light waves-effect waves-button waves-light"
                           href="javascript:void(0)" onclick="saveDraft()">Save
                            Draft</a>

                        <a class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light"
                           href="javascript:void(0)" onclick="submitForm()">Submit</a>
                    </div>


                </div>
                <form class="uk-form-stacked" id="wizard_advanced_form" method="post" onsubmit="return false"
                      enctype="multipart/form-data">
                    <div id="wizard_advanced">

                        <!-- first section -->
                        <h3 class="GI"> General Information</h3>
                        <section>
                            <!-- <h2 class="heading_a">
                                 General Information
                                 <span class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                             </h2>
                             <hr class="md-hr"/>-->

                            <div class="uk-grid">
                                <div class="uk-width-medium-1-1 parsley-row">
                                    <input type="hidden" name="idApplicationGuid" id="idApplicationGuid"
                                           value="<?= (isset($getData[0]->idApplicationGuid) && $getData[0]->idApplicationGuid != '' ? $getData[0]->idApplicationGuid : '') ?>"/>

                                    <input type="hidden" name="idApplication" id="idApplication"
                                           value="<?= (isset($getData[0]->idApplication) && $getData[0]->idApplication != '' ? $getData[0]->idApplication : '') ?>"/>

                                    <input type="hidden" name="isEdit" id="isEdit"
                                           value="<?= (isset($getData[0]->edit) && $getData[0]->edit != '' ? $getData[0]->edit : 'No') ?>"/>

                                    <input type="hidden" name="ReviewNo" id="ReviewNo"
                                           value="<?= $reviewNo ?>"/>
                                    <input type="hidden" name="assignTo" id="assignTo"
                                           value="<?= (isset($getData[0]->assignTo) && $getData[0]->assignTo != '' ? $getData[0]->assignTo : '') ?>"/>

                                    <input type="hidden" name="AimsProject" id="AimsProject"
                                           value="Yes"/>

                                    <label for="title_of_study">Title of Study<span class="req">*</span></label>
                                    <input type="text" name="title_of_study" id="title_of_study"
                                           value="<?= (isset($getData[0]->title_of_study) && $getData[0]->title_of_study != '' ? $getData[0]->title_of_study : '') ?>"
                                           class="md-input"/>


                                </div>
                            </div>

                            <hr class="md-hr"/>
                            <h3 class="heading_a">
                                <span class="sub-heading PID">Principal Investigator Details:</span>
                            </h3>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <select id="PID_title" name="PID_title"
                                            data-md-selectize-delayed>
                                        <option value="">Title</option>
                                        <option value="Mr" <?= (isset($getData[0]->PID_title) && $getData[0]->PID_title == 'Mr' ? 'selected' : '') ?>>
                                            Mr
                                        </option>
                                        <option value="Mrs" <?= (isset($getData[0]->PID_title) && $getData[0]->PID_title == 'Mrs' ? 'selected' : '') ?>>
                                            Mrs
                                        </option>
                                        <option value="Miss" <?= (isset($getData[0]->PID_title) && $getData[0]->PID_title == 'Miss' ? 'selected' : '') ?>>
                                            Miss
                                        </option>
                                        <option value="Dr" <?= (isset($getData[0]->PID_title) && $getData[0]->PID_title == 'Dr' ? 'selected' : '') ?>>
                                            Dr
                                        </option>
                                    </select>
                                </div>
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <label for="PID_first_name">First Name<span class="req">*</span></label>
                                    <input type="text" name="PID_first_name" id="PID_first_name"
                                           value="<?= (isset($getData[0]->PID_first_name) && $getData[0]->PID_first_name != '' ? $getData[0]->PID_first_name : '') ?>"
                                           class="md-input"/>
                                </div>
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <label for="PID_surname">Surname<span class="req">*</span></label>
                                    <input type="text" name="PID_surname" id="PID_surname"
                                           value="<?= (isset($getData[0]->PID_surname) && $getData[0]->PID_surname != '' ? $getData[0]->PID_surname : '') ?>"
                                           class="md-input"/>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <label for="PID_department">Department<span class="req">*</span></label>
                                    <input type="text" name="PID_department" id="PID_department"
                                           value="<?= (isset($getData[0]->PID_department) && $getData[0]->PID_department != '' ? $getData[0]->PID_department : '') ?>"
                                           class="md-input"/>
                                </div>
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <label for="PID_designation">Designation<span class="req">*</span></label>
                                    <input type="text" name="PID_designation" id="PID_designation"
                                           value="<?= (isset($getData[0]->PID_designation) && $getData[0]->PID_designation != '' ? $getData[0]->PID_designation : '') ?>"
                                           class="md-input"/>
                                </div>
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <label for="PID_campus">Campus<span class="req">*</span></label>
                                    <input type="text" name="PID_campus" id="PID_campus"
                                           value="<?= (isset($getData[0]->PID_campus) && $getData[0]->PID_campus != '' ? $getData[0]->PID_campus : '') ?>"
                                           class="md-input"/>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-4 parsley-row">
                                    <label for="PID_country">Country<span class="req">*</span></label>
                                    <input type="text" name="PID_country" id="PID_country"
                                           value="<?= (isset($getData[0]->PID_country) && $getData[0]->PID_country != '' ? $getData[0]->PID_country : '') ?>"
                                           class="md-input"/>
                                </div>
                                <div class="uk-width-medium-1-4 parsley-row">
                                    <label for="PID_telephone">Telephone<span class="req">*</span></label>
                                    <input type="text" name="PID_telephone" id="PID_telephone"
                                           value="<?= (isset($getData[0]->PID_telephone) && $getData[0]->PID_telephone != '' ? $getData[0]->PID_telephone : '') ?>"
                                           class="md-input"/>
                                </div>
                                <div class="uk-width-medium-1-4 parsley-row">
                                    <label for="PID_ext">Ext.<span class="req">*</span></label>
                                    <input type="text" name="PID_ext" id="PID_ext"
                                           value="<?= (isset($getData[0]->PID_ext) && $getData[0]->PID_ext != '' ? $getData[0]->PID_ext : '') ?>"
                                           class="md-input"/>
                                </div>
                                <div class="uk-width-medium-1-4 parsley-row">
                                    <label for="PID_certificate_expiry_date">Expiry date of Certification<span
                                                class="req">*</span></label>
                                    <input type="text" name="PID_certificate_expiry_date"
                                           id="PID_certificate_expiry_date"
                                           value="<?= (isset($getData[0]->PID_certificate_expiry_date) && $getData[0]->PID_certificate_expiry_date != '' ? $getData[0]->PID_certificate_expiry_date : '') ?>"
                                           class="md-input"
                                           data-parsley-date
                                           data-parsley-date-message="This value should be a valid date"
                                           data-uk-datepicker="{format:'MM.DD.YYYY'}"/>
                                </div>
                            </div>

                            <hr class="md-hr"/>
                            <h3 class="heading_a">
                                <span class="sub-heading DCD">Departmental Coordinator/Representative Details:</span>
                            </h3>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <select id="DCD_title" name="DCD_title"
                                            data-md-selectize-delayed>
                                        <option value="">Title</option>
                                        <option value="Mr" <?= (isset($getData[0]->DCD_title) && $getData[0]->DCD_title == 'Mr' ? 'selected' : '') ?>>
                                            Mr
                                        </option>
                                        <option value="Mrs" <?= (isset($getData[0]->DCD_title) && $getData[0]->DCD_title == 'Mrs' ? 'selected' : '') ?>>
                                            Mrs
                                        </option>
                                        <option value="Miss" <?= (isset($getData[0]->DCD_title) && $getData[0]->DCD_title == 'Miss' ? 'selected' : '') ?>>
                                            Miss
                                        </option>
                                        <option value="Dr" <?= (isset($getData[0]->DCD_title) && $getData[0]->DCD_title == 'Dr' ? 'selected' : '') ?>>
                                            Dr
                                        </option>
                                    </select>
                                </div>
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <label for="DCD_first_name">First Name<span class="req">*</span></label>
                                    <input type="text" name="DCD_first_name" id="DCD_first_name"
                                           value="<?= (isset($getData[0]->DCD_first_name) && $getData[0]->DCD_first_name != '' ? $getData[0]->DCD_first_name : '') ?>"
                                           class="md-input"/>
                                </div>
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <label for="DCD_surname">Surname<span class="req">*</span></label>
                                    <input type="text" name="DCD_surname" id="DCD_surname"
                                           value="<?= (isset($getData[0]->DCD_surname) && $getData[0]->DCD_surname != '' ? $getData[0]->DCD_surname : '') ?>"
                                           class="md-input"/>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <label for="DCD_department">Department<span class="req">*</span></label>
                                    <input type="text" name="DCD_department" id="DCD_department"
                                           value="<?= (isset($getData[0]->DCD_department) && $getData[0]->DCD_department != '' ? $getData[0]->DCD_department : '') ?>"
                                           class="md-input"/>
                                </div>
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <label for="DCD_designation">Designation<span class="req">*</span></label>
                                    <input type="text" name="DCD_designation" id="DCD_designation"
                                           value="<?= (isset($getData[0]->DCD_designation) && $getData[0]->DCD_designation != '' ? $getData[0]->DCD_designation : '') ?>"
                                           class="md-input"/>
                                </div>
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <label for="DCD_campus">Campus<span class="req">*</span></label>
                                    <input type="text" name="DCD_campus" id="DCD_campus"
                                           value="<?= (isset($getData[0]->DCD_campus) && $getData[0]->DCD_campus != '' ? $getData[0]->DCD_campus : '') ?>"
                                           class="md-input"/>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-4 parsley-row">
                                    <label for="DCD_country">Country<span class="req">*</span></label>
                                    <input type="text" name="DCD_country" id="DCD_country"
                                           value="<?= (isset($getData[0]->DCD_country) && $getData[0]->DCD_country != '' ? $getData[0]->DCD_country : '') ?>"
                                           class="md-input"/>
                                </div>
                                <div class="uk-width-medium-1-4 parsley-row">
                                    <label for="DCD_telephone">Telephone<span class="req">*</span></label>
                                    <input type="text" name="DCD_telephone" id="DCD_telephone"
                                           value="<?= (isset($getData[0]->DCD_telephone) && $getData[0]->DCD_telephone != '' ? $getData[0]->DCD_telephone : '') ?>"
                                           class="md-input"/>
                                </div>
                                <div class="uk-width-medium-1-4 parsley-row">
                                    <label for="DCD_ext">Ext.<span class="req">*</span></label>
                                    <input type="text" name="DCD_ext" id="DCD_ext"
                                           value="<?= (isset($getData[0]->DCD_ext) && $getData[0]->DCD_ext != '' ? $getData[0]->DCD_ext : '') ?>"
                                           class="md-input"/>
                                </div>
                                <div class="uk-width-medium-1-4 parsley-row">
                                    <label for="DCD_certificate_expiry_date">Expiry date of Certification<span
                                                class="req">*</span></label>
                                    <input type="text" name="DCD_certificate_expiry_date"
                                           id="DCD_certificate_expiry_date"
                                           value="<?= (isset($getData[0]->DCD_certificate_expiry_date) &&
                                           $getData[0]->DCD_certificate_expiry_date != '' ? $getData[0]->DCD_certificate_expiry_date : '') ?>"
                                           class="md-input"
                                           data-parsley-date
                                           data-parsley-date-message="This value should be a valid date"
                                           data-uk-datepicker="{format:'MM.DD.YYYY'}"/>
                                </div>
                            </div>

                            <hr class="md-hr"/>
                            <h3 class="heading_a">
                                <span class="sub-heading TMD">Team Member Details:</span>
                            </h3>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <select id="TMD_title" name="TMD_title"
                                            data-md-selectize-delayed>
                                        <option value="">Title</option>
                                        <option value="Mr" <?= (isset($getData[0]->TMD_title) && $getData[0]->TMD_title == 'Mr' ? 'selected' : '') ?>>
                                            Mr
                                        </option>
                                        <option value="Mrs" <?= (isset($getData[0]->TMD_title) && $getData[0]->TMD_title == 'Mrs' ? 'selected' : '') ?>>
                                            Mrs
                                        </option>
                                        <option value="Miss" <?= (isset($getData[0]->TMD_title) && $getData[0]->TMD_title == 'Miss' ? 'selected' : '') ?>>
                                            Miss
                                        </option>
                                        <option value="Dr" <?= (isset($getData[0]->TMD_title) && $getData[0]->TMD_title == 'Dr' ? 'selected' : '') ?>>
                                            Dr
                                        </option>
                                    </select>
                                </div>
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <label for="TMD_first_name">First Name<span class="req">*</span></label>
                                    <input type="text" name="TMD_first_name" id="TMD_first_name"
                                           value="<?= (isset($getData[0]->TMD_first_name) && $getData[0]->TMD_first_name != '' ? $getData[0]->TMD_first_name : '') ?>"
                                           class="md-input"/>
                                </div>
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <label for="TMD_surname">Surname<span class="req">*</span></label>
                                    <input type="text" name="TMD_surname" id="TMD_surname"
                                           value="<?= (isset($getData[0]->TMD_surname) && $getData[0]->TMD_surname != '' ? $getData[0]->TMD_surname : '') ?>"
                                           class="md-input"/>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <label for="TMD_department">Department<span class="req">*</span></label>
                                    <input type="text" name="TMD_department" id="TMD_department"
                                           value="<?= (isset($getData[0]->TMD_department) && $getData[0]->TMD_department != '' ? $getData[0]->TMD_department : '') ?>"
                                           class="md-input"/>
                                </div>
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <label for="TMD_designation">Designation<span class="req">*</span></label>
                                    <input type="text" name="TMD_designation" id="TMD_designation"
                                           value="<?= (isset($getData[0]->TMD_designation) && $getData[0]->TMD_designation != '' ? $getData[0]->TMD_designation : '') ?>"
                                           class="md-input"/>
                                </div>
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <label for="TMD_campus">Campus<span class="req">*</span></label>
                                    <input type="text" name="TMD_campus" id="TMD_campus"
                                           value="<?= (isset($getData[0]->TMD_campus) && $getData[0]->TMD_campus != '' ? $getData[0]->TMD_campus : '') ?>"
                                           class="md-input"/>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-4 parsley-row">
                                    <label for="TMD_country">Country<span class="req">*</span></label>
                                    <input type="text" name="TMD_country" id="TMD_country"
                                           value="<?= (isset($getData[0]->TMD_country) && $getData[0]->TMD_country != '' ? $getData[0]->TMD_country : '') ?>"
                                           class="md-input"/>
                                </div>
                                <div class="uk-width-medium-1-4 parsley-row">
                                    <label for="TMD_telephone">Telephone<span class="req">*</span></label>
                                    <input type="text" name="TMD_telephone" id="TMD_telephone"
                                           value="<?= (isset($getData[0]->TMD_telephone) && $getData[0]->TMD_telephone != '' ? $getData[0]->TMD_telephone : '') ?>"
                                           class="md-input"/>
                                </div>
                                <div class="uk-width-medium-1-4 parsley-row">
                                    <label for="TMD_ext">Ext.<span class="req">*</span></label>
                                    <input type="text" name="TMD_ext" id="TMD_ext"
                                           value="<?= (isset($getData[0]->TMD_ext) && $getData[0]->TMD_ext != '' ? $getData[0]->TMD_ext : '') ?>"
                                           class="md-input"/>
                                </div>
                                <div class="uk-width-medium-1-4 parsley-row">
                                    <label for="TMD_certificate_expiry_date">Expiry date of Certification<span
                                                class="req">*</span></label>
                                    <input type="text" name="TMD_certificate_expiry_date"
                                           id="TMD_certificate_expiry_date"
                                           value="<?= (isset($getData[0]->TMD_certificate_expiry_date) &&
                                           $getData[0]->TMD_certificate_expiry_date != '' ? $getData[0]->TMD_certificate_expiry_date : '') ?>"
                                           class="md-input"
                                           data-parsley-date
                                           data-parsley-date-message="This value should be a valid date"
                                           data-uk-datepicker="{format:'MM.DD.YYYY'}"/>
                                </div>
                            </div>

                            <hr class="md-hr"/>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <label class="uk-form-label">Is this study a part of students/resident
                                        synopsis?<span class="req">*</span></label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="study_part" id="study_part_yes"
                                                   class="wizard-icheck  "
                                                   value="Yes" <?= (isset($getData[0]->study_part) && $getData[0]->study_part == 'Yes' ? 'checked' : '') ?>>
                                            <label for="study_part_yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="study_part" id="study_part_no"
                                                   class="wizard-icheck  " value="No"
                                            <?= (isset($getData[0]->study_part) && $getData[0]->study_part == 'No' ? 'checked' : '') ?>/>
                                            <label for="study_part_no" class="inline-label">No</label>
                                        </span>
                                </div>
                                <script>
                                    /*  $("input[name='study_part']").change(function(){
                                          alert(this.val());
                                          if(this.val()==='Yes'){
                                              $('.study_part_options_div').removeClass('hide').addClass('show');
                                          }else{
                                              $('.study_part_options_div').removeClass('show').addClass('hide');
                                          }
                                      });*/
                                    function showInputDiv(clickDivValue, ShowDiv, Condition) {
                                        if (clickDivValue === Condition) {
                                            $(ShowDiv).removeClass('hide').addClass('show');
                                        } else {
                                            $(ShowDiv).removeClass('show').addClass('hide');
                                        }
                                    }
                                </script>
                                <div class="uk-width-medium-1-3 parsley-row study_part_options_div hide">
                                    <label class="uk-form-label" for="study_part_options">If yes, Program
                                        (Exclude resident, fellow and faculty research from)</label>
                                    <select id="study_part_options" name="study_part_options"
                                            onchange="showInputDiv($('#study_part_options').val(), '.study_part_other_div','Others')"
                                            data-md-selectize-delayed>
                                        <option value="">Please Select</option>
                                        <option value="Fellow">Fellow</option>
                                        <option value="PhD">PhD.</option>
                                        <option value="MScN">MScN</option>
                                        <option value="Med">Med</option>
                                        <option value="MHPE">MHPE</option>
                                        <option value="MPhil">MPhil</option>
                                        <option value="MMED">MMED</option>
                                        <option value="MA">MA</option>
                                        <option value="Others">Others (Please Specify)</option>
                                    </select>
                                </div>
                                <div class="uk-width-medium-1-3 parsley-row hide study_part_other_div">
                                    <label for="study_part_other">Others (Please Specify)<span
                                                class="req">*</span></label>
                                    <input type="text" name="study_part_other" id="study_part_other"
                                           value="<?= (isset($getData[0]->study_part_other) && $getData[0]->study_part_other != '' ? $getData[0]->study_part_other : '') ?>"
                                           class="md-input"/>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <label class="uk-form-label" for="study_fund">Is the study yet funded</label>
                                    <select id="study_fund" name="study_fund"
                                            data-md-selectize-delayed>
                                        <option value="">Please Select</option>

                                        <option value="Funded or Sponsored">Funded or sponsored</option>
                                        <option value="URC">URC</option>
                                        <option value="Seed Money ">Seed Money</option>
                                        <option value="HEC">HEC</option>
                                        <option value="Department Fund">Department Fund</option>
                                        <option value="External ">External</option>
                                        <option value="Others">Others (Please Specify)</option>
                                    </select>
                                </div>
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <label class="uk-form-label" for="study_fund_payment">If Funded or Sponsored</label>
                                    <select id="study_fund_payment" name="study_fund_payment"
                                            data-md-selectize-delayed>
                                        <option value="">Please Select</option>
                                        <option value="Received">Received</option>
                                        <option value="In Process">In Process</option>
                                    </select>
                                </div>
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <label for="study_fund_other">Others (Please Specify)<span
                                                class="req">*</span></label>
                                    <input type="text" name="study_fund_other" id="study_fund_other"
                                           value="<?= (isset($getData[0]->study_fund_other) && $getData[0]->study_fund_other != '' ? $getData[0]->study_fund_other : '') ?>"
                                           class="md-input"/>
                                </div>
                            </div>
                        </section>

                        <!-- second section -->
                        <h3 class="documents">Documents</h3>

                        <section>
                            <p>Document already uploaded:
                                <?= (isset($getData[0]->attach_files) && $getData[0]->attach_files != '' ? '<a href="base_url(\'assets/uploads/\'.$getData[0]->attach_files)">' . $getData[0]->attach_files . '</a>' : '') ?></p>
                            <div class="uk-grid" data-uk-grid-margin>
                                <div class="uk-width-medium-1-1">
                                    <div class="md-card">
                                        <div class="md-card-content">
                                            <h3 class="heading_a uk-margin-small-bottom">
                                                Document 1 (10000 KB || 10 MB)
                                            </h3>
                                            <input type="file" id="input-file-e" name="attachment[]" class="dropify"
                                                   data-max-file-size="10000K"
                                                   value="<?= (isset($getData[0]->attach_files) && $getData[0]->attach_files != '' ? $getData[0]->attach_files : '') ?>"
                                                   multiple/>
                                        </div>
                                        <div id="file_upload-progressbar" class="uk-progress uk-hidden">
                                            <div class="uk-progress-bar" style="width:0">0%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-medium-1-1">
                                    <div class="md-card">
                                        <div class="md-card-content">
                                            <h3 class="heading_a uk-margin-small-bottom">
                                                Document 2 (10000 KB || 10 MB)
                                            </h3>
                                            <input type="file" id="input-file-e" name="attachment2" class="dropify"
                                                   data-max-file-size="10000K"/>
                                        </div>
                                        <div id="file_upload-progressbar" class="uk-progress uk-hidden">
                                            <div class="uk-progress-bar" style="width:0">0%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-medium-1-1">
                                    <div class="md-card">
                                        <div class="md-card-content">
                                            <h3 class="heading_a uk-margin-small-bottom">
                                                Document 3 (10000 KB || 10 MB)
                                            </h3>
                                            <input type="file" id="input-file-e" name="attachment3" class="dropify"
                                                   data-max-file-size="10000K"/>
                                        </div>
                                        <div id="file_upload-progressbar" class="uk-progress uk-hidden">
                                            <div class="uk-progress-bar" style="width:0">0%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-medium-1-1">
                                    <div class="md-card">
                                        <div class="md-card-content">
                                            <h3 class="heading_a uk-margin-small-bottom">
                                                Document 4 (10000 KB || 10 MB)
                                            </h3>
                                            <input type="file" id="input-file-e" name="attachment4" class="dropify"
                                                   data-max-file-size="10000K"/>
                                        </div>
                                        <div id="file_upload-progressbar" class="uk-progress uk-hidden">
                                            <div class="uk-progress-bar" style="width:0">0%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- jquery steps -->
<script src="<?= base_url() ?>assets/js/custom/wizard_steps.min.js"></script>
<!-- handlebars.js -->
<script src="<?= base_url() ?>assets/bower_components/handlebars/handlebars.min.js"></script>
<script src="<?= base_url() ?>assets/js/custom/handlebars_helpers.min.js"></script>

<!--  forms wizard functions -->
<script src="<?= base_url() ?>assets/js/pages/forms_wizard.min.js"></script>

<!--  dropify -->
<link rel="stylesheet" href="<?= base_url() ?>assets/skins/dropify/css/dropify.css">
<script src="<?= base_url() ?>assets/bower_components/dropify/dist/js/dropify.min.js"></script>
<!--  form file input functions -->
<script src="<?= base_url() ?>assets/js/pages/forms_file_input.min.js"></script>
<script src="<?= base_url() ?>assets/js/pages/forms_file_upload.min.js"></script>
<script>
    function saveDraft() {
        var formData = new FormData($("#wizard_advanced_form")[0]);
        formData.append('isSubmit', 0);
        $("#page_content").css('opacity', 0.5);
        altair_helpers.content_preloader_show('md');
        CallAjax('<?= base_url()?>Form/sendEmail', formData, 'POST', function (result) {
            $("#page_content").css('opacity', 1);
            altair_helpers.content_preloader_hide();
            if (result != '' && JSON.parse(result).length > 0) {
                var response = JSON.parse(result);
                try {
                    console.log(response);
                    notificatonShow(response[0], response[1]);
                    if (response[1] === 'success') {
                        setTimeout(function () {
                            var link = '<?= base_url()?>/form_drafts';
                            window.location.href = link;
                        }, 500)
                    }
                } catch (e) {
                }
            }
        }, true);
    }

    function submitForm() {
        var formData = new FormData($("#wizard_advanced_form")[0]);
        formData.append('isSubmit', 1);
        $("#page_content").css('opacity', 0.5);
        altair_helpers.content_preloader_show('md');
        CallAjax('<?= base_url()?>Form/sendEmail', formData, 'POST', function (result) {
            $("#page_content").css('opacity', 1);
            altair_helpers.content_preloader_hide();
            if (result != '' && JSON.parse(result).length > 0) {
                var response = JSON.parse(result);
                try {
                    console.log(response);
                    notificatonShow(response[0], response[1]);
                    if (response[1] === 'success') {
                        setTimeout(function () {
                            var link = '<?= base_url()?>/form_view';
                            window.location.href = link;
                        }, 500)
                    }
                } catch (e) {
                }
            }
        }, true);
    }
</script>