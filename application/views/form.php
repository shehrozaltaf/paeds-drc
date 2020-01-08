<div id="page_content">
    <div id="page_content_inner">

        <h2 class="heading_b uk-margin-bottom">Advanced Wizard</h2>
        <div class="md-card uk-margin-large-bottom">
            <div class="md-card-content">
                <div class="uk-width-medium-1-1">
                    <?php

                    if (isset($getData[0]->edit) && $getData[0]->edit == 'Yes') {
                        $reviewNo = $getData[0]->ReviewNo;
                    } else {
                        if (isset($getData[0]->ReviewNo) && $getData[0]->ReviewNo != '') {
                            $reviewNo = $getData[0]->ReviewNo + 1;
                        } else {
                            $reviewNo = 1;
                        }
                    }
                    ?>
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

                                    <label for="title_of_study">Title of Study<span class="req">*</span></label>
                                    <input type="text" name="title_of_study" id="title_of_study" required
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
                                    <label class="uk-form-label" for="PID_title">Title</label>
                                    <select id="PID_title" name="PID_title"
                                            data-md-selectize-delayed>
                                        <option value="">Title</option>
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Miss">Miss</option>
                                        <option value="Dr">Dr</option>
                                    </select>
                                </div>
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <label for="PID_first_name">First Name<span class="req">*</span></label>
                                    <input type="text" name="PID_first_name" id="PID_first_name" required
                                           value="<?= (isset($getData[0]->PID_first_name) && $getData[0]->PID_first_name != '' ? $getData[0]->PID_first_name : '') ?>"
                                           class="md-input"/>
                                </div>
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <label for="PID_surname">Surname<span class="req">*</span></label>
                                    <input type="text" name="PID_surname" id="PID_surname" required
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
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Miss">Miss</option>
                                        <option value="Dr">Dr</option>
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
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Miss">Miss</option>
                                        <option value="Dr">Dr</option>
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
                                                   class="wizard-icheck  " value="Yes">
                                            <label for="study_part_yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="study_part" id="study_part_no"
                                                   class="wizard-icheck  " value="No"/>
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
                                    <label class="uk-form-label" for="study_fund">Is the study</label>
                                    <select id="study_fund" name="study_fund"
                                            data-md-selectize-delayed>
                                        <option value="">Please Select</option>
                                        <option value="Non-Funded">Non-Funded</option>
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
                        <h3 class="COI">Conflict of Interest</h3>
                        <section>
                            <h3 class="heading_a">
                                <span class="sub-heading COI">Currently or during the term of this research study, does any member of the research team or his/her family member have or expect to have:</span>
                            </h3>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-1 parsley-row">
                                    <label class="uk-form-label">
                                        <small><strong>Q1A)</strong></small>
                                        A personal financial interest in or personal financial
                                        relationship (including gifts of cash or in-kind) with the sponsor of this
                                        study?</label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="COI_1A" id="COI_1A_Yes"
                                                   class="wizard-icheck" value="Yes">
                                            <label for="COI_1A_Yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="COI_1A" id="COI_1A_No"
                                                   class="wizard-icheck  " value="No"/>
                                            <label for="COI_1A_No" class="inline-label">No</label>
                                        </span>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-1 parsley-row">
                                    <label class="uk-form-label">
                                        <small><strong>Q1B)</strong></small>
                                        A personal financial interest in or personal financial relationship (including
                                        gifts of cash or in-kind) with an entity that owns or has the right to
                                        commercialize a product, process or technology studied in this project?
                                    </label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="COI_1B" id="COI_1B_Yes"
                                                   class="wizard-icheck" value="Yes">
                                            <label for="COI_1B_Yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="COI_1B" id="COI_1B_No"
                                                   class="wizard-icheck  " value="No"/>
                                            <label for="COI_1B_No" class="inline-label">No</label>
                                        </span>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-1 parsley-row">
                                    <label class="uk-form-label">
                                        <small><strong>Q1C)</strong></small>
                                        A personal financial interest in or personal financial relationship (including
                                        gifts of cash or in-kind) with an entity engaged in the performance of this
                                        project as a subcontractor, sub-recipient or vendor?
                                    </label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="COI_1C" id="COI_1C_Yes"
                                                   class="wizard-icheck" value="Yes">
                                            <label for="COI_1C_Yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="COI_1C" id="COI_1C_No"
                                                   class="wizard-icheck  " value="No"/>
                                            <label for="COI_1C_No" class="inline-label">No</label>
                                        </span>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-1 parsley-row">
                                    <label class="uk-form-label">
                                        <small><strong>Q1D)</strong></small>
                                        A board membership of any kind or an executive position (paid or unpaid) with
                                        the sponsor of this study or with an entity that owns or has the right to
                                        commercialize a product, process or technology studied in this project?
                                    </label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="COI_1D" id="COI_1D_Yes"
                                                   class="wizard-icheck" value="Yes">
                                            <label for="COI_1D_Yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="COI_1D" id="COI_1D_No"
                                                   class="wizard-icheck  " value="No"/>
                                            <label for="COI_1D_No" class="inline-label">No</label>
                                        </span>
                                </div>
                            </div>

                            <div class="uk-grid">
                                <div class="uk-width-medium-1-1 parsley-row">
                                    <label class="uk-form-label">
                                        <small><strong>Q2)</strong></small>
                                        Has the University or has a University-related foundation received a cash or
                                        in-kind gift from the sponsor of this study for the use or benefit of any member
                                        of the research team?
                                    </label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="COI_2" id="COI_2_Yes"
                                                   class="wizard-icheck" value="Yes">
                                            <label for="COI_2_Yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="COI_2" id="COI_2_No"
                                                   class="wizard-icheck  " value="No"/>
                                            <label for="COI_2_No" class="inline-label">No</label>
                                        </span>
                                </div>
                            </div>

                            <div class="uk-grid">
                                <div class="uk-width-medium-1-1 parsley-row">
                                    <label class="uk-form-label">
                                        <small><strong>Q3)</strong></small>
                                        Has the University or has a University-related foundation received a cash or
                                        in-kind gift for the use or benefit of any member of the research team from an
                                        entity that owns or has the right to commercialize a product, process or
                                        technology studied in this project?
                                    </label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="COI_3" id="COI_3_Yes"
                                                   class="wizard-icheck" value="Yes">
                                            <label for="COI_3_Yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="COI_3" id="COI_3_No"
                                                   class="wizard-icheck  " value="No"/>
                                            <label for="COI_3_No" class="inline-label">No</label>
                                        </span>
                                </div>
                            </div>

                        </section>

                        <!-- third section -->
                        <h3 class="ERC">Type of ERC Approval</h3>
                        <section>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-1 parsley-row">
                                    <label for="ERC_1">
                                        <small><strong>Q1)</strong></small>
                                        Please indicate whether you are applying for ERC exemption or full committee
                                        review or your study has already been approved by the previous ERC?<span
                                                class="req">*</span>
                                    </label>
                                    <select id="ERC_1" name="ERC_1"
                                            data-md-selectize-delayed>
                                        <option value="">Please Select</option>
                                        <option value="Exemption">Exemption</option>
                                        <option value="Approved by Previous ERC">Approved by Previous ERC</option>
                                    </select>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-2 parsley-row">
                                    <label class="uk-form-label" for="ERC_1A">

                                        If check Exemption</label>
                                    <select id="ERC_1A" name="ERC_1A"
                                            data-md-selectize-delayed>
                                        <option value="">Please Select</option>
                                        <option value="Experimental drug(s)">Experimental drug(s)</option>
                                        <option value="Radioactive agents">Radioactive agents</option>
                                        <option value="Non-therapeutic research">Non-therapeutic research</option>
                                        <option value="Non-approved use or non-approved dose for approved drugs">
                                            Non-approved use or non-approved dose for approved drugs
                                        </option>
                                        <option value="Procedures">Procedures</option>
                                        <option value="Fetal research">Fetal research</option>
                                        <option value="Behavioral research">Behavioral research</option>
                                        <option value="Gene molecular cloning">Gene molecular cloning</option>
                                        <option value="Nutritional Research/survey">Nutritional Research/survey</option>
                                        <option value="Observational research">Observational research</option>
                                        <option value="Registry">Registry</option>
                                        <option value="Clinical Trial">Clinical Trial (If Clinical Trial: please upload
                                            the approval from CTU)
                                        </option>
                                        <option value="Other">Other (please specify)</option>
                                    </select>
                                </div>
                                <div class="uk-width-medium-1-2 parsley-row">
                                    <label for="ERC_1A_other">Others (Please Specify)<span
                                                class="req">*</span></label>
                                    <input type="text" name="ERC_1A_other" id="ERC_1A_other"
                                           value="<?= (isset($getData[0]->ERC_1A_other) && $getData[0]->ERC_1A_other != '' ? $getData[0]->ERC_1A_other : '') ?>"
                                           class="md-input"/>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-2 parsley-row">
                                    <label class="uk-form-label">
                                        <small><strong>Q2)</strong></small>
                                        Is the activity a systematic investigation designed to contribute to
                                        generalizable knowledge?
                                    </label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="ERC_2" id="ERC_2_Yes"
                                                   class="wizard-icheck" value="Yes">
                                            <label for="COI_3_Yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="ERC_2" id="ERC_2_No"
                                                   class="wizard-icheck  " value="No"/>
                                            <label for="ERC_2_No" class="inline-label">No</label>
                                        </span>
                                </div>

                                <div class="uk-width-medium-1-2 parsley-row">
                                    <label class="uk-form-label">
                                        <small><strong>Q3)</strong></small>
                                        Does the research involve obtaining information about living individuals?
                                    </label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="ERC_3" id="ERC_3_Yes"
                                                   class="wizard-icheck" value="Yes">
                                            <label for="ERC_3_Yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="ERC_3" id="ERC_3_No"
                                                   class="wizard-icheck  " value="No"/>
                                            <label for="ERC_3_No" class="inline-label">No</label>
                                        </span>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-2 parsley-row">
                                    <label class="uk-form-label">
                                        <small><strong>Q4)</strong></small>
                                        Does the research involve intervention or interaction with the individuals?
                                    </label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="ERC_4" id="ERC_4_Yes"
                                                   class="wizard-icheck" value="Yes">
                                            <label for="ERC_4_Yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="ERC_4" id="ERC_4_No"
                                                   class="wizard-icheck  " value="No"/>
                                            <label for="ERC_4_No" class="inline-label">No</label>
                                        </span>
                                </div>
                                <div class="uk-width-medium-1-2 parsley-row">
                                    <label class="uk-form-label">
                                        <small><strong>Q5)</strong></small>
                                        Is the information individually identifiable?
                                    </label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="ERC_5" id="ERC_5_Yes"
                                                   class="wizard-icheck" value="Yes">
                                            <label for="ERC_5_Yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="ERC_5" id="ERC_5_No"
                                                   class="wizard-icheck  " value="No"/>
                                            <label for="ERC_5_No" class="inline-label">No</label>
                                        </span>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-2 parsley-row">
                                    <label class="uk-form-label">
                                        <small><strong>Q6)</strong></small>
                                        Is the information private?
                                    </label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="ERC_6" id="ERC_6_Yes"
                                                   class="wizard-icheck" value="Yes">
                                            <label for="ERC_6_Yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="ERC_6" id="ERC_6_No"
                                                   class="wizard-icheck  " value="No"/>
                                            <label for="ERC_6_No" class="inline-label">No</label>
                                        </span>
                                </div>
                                <div class="uk-width-medium-1-2 parsley-row">
                                    <label class="uk-form-label">
                                        <small><strong>Q7)</strong></small>
                                        Does the research involve collection or study of
                                        existing data, documents, records,
                                        or pathological or diagnostic specimens?
                                    </label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="ERC_7" id="ERC_7_Yes"
                                                   class="wizard-icheck" value="Yes">
                                            <label for="ERC_7_Yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="ERC_7" id="ERC_7_No"
                                                   class="wizard-icheck  " value="No"/>
                                            <label for="ERC_7_No" class="inline-label">No</label>
                                        </span>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-2 parsley-row">
                                    <label class="uk-form-label">
                                        <small><strong>Q7A)</strong></small>
                                        Are these sources publicly available?
                                    </label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="ERC_7A" id="ERC_7A_Yes"
                                                   class="wizard-icheck" value="Yes">
                                            <label for="ERC_7A_Yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="ERC_7A" id="ERC_7A_No"
                                                   class="wizard-icheck  " value="No"/>
                                            <label for="ERC_7A_No" class="inline-label">No</label>
                                        </span>
                                </div>
                                <div class="uk-width-medium-1-2 parsley-row">
                                    <label class="uk-form-label">
                                        <small><strong>Q8)</strong></small>
                                        Does this research involve the use of educational tests, survey procedures,
                                        interview procedures, or observation of public behavior?
                                    </label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="ERC_8" id="ERC_8_Yes"
                                                   class="wizard-icheck" value="Yes">
                                            <label for="ERC_8_Yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="ERC_8" id="ERC_8_No"
                                                   class="wizard-icheck  " value="No"/>
                                            <label for="ERC_8_No" class="inline-label">No</label>
                                        </span>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-2 parsley-row">
                                    <label class="uk-form-label">
                                        <small><strong>Q9)</strong></small>
                                        Does the research involve children?
                                    </label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="ERC_9" id="ERC_9_Yes"
                                                   class="wizard-icheck" value="Yes">
                                            <label for="ERC_9_Yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="ERC_9" id="ERC_9_No"
                                                   class="wizard-icheck  " value="No"/>
                                            <label for="ERC_9_No" class="inline-label">No</label>
                                        </span>
                                </div>
                                <div class="uk-width-medium-1-2 parsley-row">
                                    <label class="uk-form-label">
                                        <small><strong>Q10)</strong></small>
                                        Is the information obtained recorded in such a manner that human subjects
                                        can be identified, directly or through identifiers linked to the subjects?
                                    </label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="ERC_10" id="ERC_10_Yes"
                                                   class="wizard-icheck" value="Yes">
                                            <label for="ERC_10_Yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="ERC_10" id="ERC_10_No"
                                                   class="wizard-icheck  " value="No"/>
                                            <label for="ERC_10_No" class="inline-label">No</label>
                                        </span>
                                </div>
                            </div>
                            <div class="uk-grid">

                                <div class="uk-width-medium-1-2 parsley-row">
                                    <label class="uk-form-label">
                                        <small><strong>Q11)</strong></small>
                                        Does the research involve studying, evaluating, or examining public benefit or
                                        service programs?
                                    </label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="ERC_11" id="ERC_11_Yes"
                                                   class="wizard-icheck" value="Yes">
                                            <label for="ERC_11_Yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="ERC_11" id="ERC_11_No"
                                                   class="wizard-icheck  " value="No"/>
                                            <label for="ERC_11_No" class="inline-label">No</label>
                                        </span>
                                </div>
                                <div class="uk-width-medium-1-2 parsley-row">
                                    <label class="uk-form-label">
                                        <small><strong>Q11A)</strong></small>
                                        (a) Is the research or demonstration project conducted or approved by the
                                        Government Department or Agency Head?
                                    </label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="ERC_11A" id="ERC_11A_Yes"
                                                   class="wizard-icheck" value="Yes">
                                            <label for="ERC_11A_Yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="ERC_11A" id="ERC_11A_No"
                                                   class="wizard-icheck  " value="No"/>
                                            <label for="ERC_11A_No" class="inline-label">No</label>
                                        </span>
                                </div>
                            </div>
                            <div class="uk-grid">

                                <div class="uk-width-medium-1-2 parsley-row">
                                    <label class="uk-form-label">
                                        <small><strong>Q12)</strong></small>
                                        What records, data or human biological specimens will you be using?
                                    </label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="ERC_12" id="ERC_12_Yes"
                                                   class="wizard-icheck" value="Yes">
                                            <label for="ERC_12_Yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="ERC_12" id="ERC_12_No"
                                                   class="wizard-icheck  " value="No"/>
                                            <label for="ERC_12_No" class="inline-label">No</label>
                                        </span>
                                </div>
                                <div class="uk-width-medium-1-2 parsley-row">
                                    <label class="uk-form-label">
                                        <small><strong>Q13)</strong></small>
                                        For each of the data sources describe the methods to uphold confidentiality.
                                    </label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="ERC_13" id="ERC_13_Yes"
                                                   class="wizard-icheck" value="Yes">
                                            <label for="ERC_13_Yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="ERC_13" id="ERC_13_No"
                                                   class="wizard-icheck  " value="No"/>
                                            <label for="ERC_13_No" class="inline-label">No</label>
                                        </span>
                                </div>
                            </div>
                        </section>

                        <!-- fourth section -->
                        <h3 class="PD">Project Details</h3>
                        <section>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-1">
                                    <div class="uk-form-row">
                                        <label for="PD_1" class="textarea_label">
                                            <small><strong>Q1)</strong></small>
                                            Why are you doing this study (study rationale)?</label>
                                        <textarea cols="10" rows="4" class="md-input label-fixed"
                                                  id="PD_1" name="PD_1"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-2">
                                    <div class="uk-form-row">
                                        <label for="PD_2" class="textarea_label">
                                            <small><strong>Q2)</strong></small>
                                            What are your study objectives?</label>
                                        <textarea cols="10" rows="4" class="md-input label-fixed"
                                                  id="PD_2" name="PD_2"></textarea>
                                    </div>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <div class="uk-form-row">
                                        <label for="PD_3" class="textarea_label">
                                            <small><strong>Q3)</strong></small>
                                            Brief Summary of Proposal including methodology (<100 words)</label>
                                        <textarea cols="10" rows="4" class="md-input label-fixed"
                                                  id="PD_3" name="PD_3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <label for="PD_4_start_date">
                                        <small><strong>Q4)</strong></small>
                                        Start date of study </label>
                                    <input type="text" name="PD_4_start_date"
                                           id="PD_4_start_date"
                                           value="<?= (isset($getData[0]->PD_4_start_date) && $getData[0]->PD_4_start_date != '' ? $getData[0]->PD_4_start_date : '') ?>"
                                           class="md-input"
                                           data-parsley-date
                                           data-parsley-date-message="This value should be a valid date"
                                           data-uk-datepicker="{format:'MM.DD.YYYY'}"/>
                                </div>
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <label for="PD_4_end_date">
                                        End date of study </label>
                                    <input type="text" name="PD_4_end_date"
                                           id="PD_4_end_date"
                                           value="<?= (isset($getData[0]->PD_4_end_date) && $getData[0]->PD_4_end_date != '' ? $getData[0]->PD_4_end_date : '') ?>"
                                           class="md-input"
                                           data-parsley-date
                                           data-parsley-date-message="This value should be a valid date"
                                           data-uk-datepicker="{format:'MM.DD.YYYY'}"/>
                                </div>
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <label for="PD_4_total_time">Total Duration (in days, weeks, months and
                                        year) </label>
                                    <input type="text" name="PD_4_total_time"
                                           id="PD_4_total_time"
                                           value="<?= (isset($getData[0]->PD_4_total_time) && $getData[0]->PD_4_total_time != '' ? $getData[0]->PD_4_total_time : '') ?>"
                                           class="md-input"
                                           data-parsley-date
                                           data-parsley-date-message="This value should be a valid date"
                                           data-uk-datepicker="{format:'MM.DD.YYYY'}"/>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-2">
                                    <label for="PD_5">
                                        <small><strong>Q5)</strong></small>
                                        What is the sample size? </label>
                                    <input type="text" name="PD_5" id="PD_5"
                                           value="<?= (isset($getData[0]->PD_5) && $getData[0]->PD_5 != '' ? $getData[0]->PD_5 : '') ?>"
                                           class="md-input"/>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <label for="PD_6">
                                        <small><strong>Q6)</strong></small>
                                        What is the source population?<span class="req">*</span></label>
                                    <input type="text" name="PD_6" id="PD_6"
                                           value="<?= (isset($getData[0]->PD_6) && $getData[0]->PD_6 != '' ? $getData[0]->PD_6 : '') ?>"
                                           class="md-input"/>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-2">
                                    <label for="PD_7">
                                        <small><strong>Q7)</strong></small>
                                        What is the sampling strategy and enrolment method </label>
                                    <input type="text" name="PD_7" id="PD_7"
                                           value="<?= (isset($getData[0]->PD_7) && $getData[0]->PD_7 != '' ? $getData[0]->PD_7 : '') ?>"
                                           class="md-input"/>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <label for="PD_8">
                                        <small><strong>Q8)</strong></small>
                                        What is the inclusion and exclusion criteria? </label>
                                    <input type="text" name="PD_8" id="PD_8"
                                           value="<?= (isset($getData[0]->PD_8) && $getData[0]->PD_8 != '' ? $getData[0]->PD_8 : '') ?>"
                                           class="md-input"/>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-2">
                                    <label for="PD_9" class="textarea_label">
                                        <small><strong>Q9)</strong></small>
                                        Is permission needed from any higher authorities for the
                                        study?
                                        <small>(school principals, facility directors, hospital or healthcare system
                                            administrators)
                                        </small>
                                        <span class="req">*</span></label>
                                    <textarea cols="10" rows="4" class="md-input label-fixed"
                                              id="PD_9" name="PD_9"></textarea>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <label for="PD_10" class="textarea_label">
                                        <small><strong>Q10)</strong></small>
                                        What is the study design? </label>
                                    <textarea cols="10" rows="4" class="md-input label-fixed"
                                              id="PD_10" name="PD_10"></textarea>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-2">
                                    <label for="PD_11" class="textarea_label">
                                        <small><strong>Q11)</strong></small>
                                        What interventions / interaction will the research
                                        subject undergo if they enroll in this study? Please state in detail. </label>
                                    <textarea cols="10" rows="4" class="md-input label-fixed"
                                              id="PD_11" name="PD_11"></textarea>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <label for="PD_12" class="textarea_label">
                                        <small><strong>Q12)</strong></small>
                                        What is the duration of an individual subject's
                                        participation,
                                        including follow-up evaluation if applicable? Please include the number
                                        interactions with each participant. </label>
                                    <textarea cols="10" rows="4" class="md-input label-fixed" id="PD_12"
                                              name="PD_12"></textarea>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-2">
                                    <label for="PD_13" class="textarea_label">
                                        <small><strong>Q13)</strong></small>
                                        Where will the interaction / intervention with the
                                        research participants take place?
                                        <small> Describe locations where subjects will be studied, both on and off the
                                            AKU/AKUH
                                            campus
                                        </small>
                                    </label>
                                    <textarea cols="10" rows="4" class="md-input label-fixed"
                                              id="PD_13" name="PD_13"></textarea>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <label for="PD_14" class="textarea_label">
                                        <small><strong>Q14)</strong></small>
                                        What benefits, if any, are expected for the society from
                                        this study? </label>
                                    <textarea cols="10" rows="4" class="md-input label-fixed"
                                              id="PD_14" name="PD_14"></textarea>

                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-2">
                                    <label for="PD_15" class="textarea_label">
                                        <small><strong>Q15)</strong></small>
                                        What benefits, if any are expected for the research
                                        subjects upon participation in this study? </label>
                                    <textarea cols="10" rows="4" class="md-input label-fixed"
                                              id="PD_15" name="PD_15"></textarea>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <label for="PD_16" class="textarea_label">
                                        <small><strong>Q16)</strong></small>
                                        What benefits, if any are expected for the University
                                        upon approval of this study?</label>
                                    <textarea cols="10" rows="4" class="md-input label-fixed"
                                              id="PD_16" name="PD_16"></textarea>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-2">
                                    <label for="PD_17" class="textarea_label">
                                        <small><strong>Q17)</strong></small>
                                        Inducements for participation. Describe all inducements
                                        to participate, monetary or non-monetary. If monetary, specify the amount and
                                        schedule for payments and if/how this will be prorated if the subject withdraws
                                        (or is withdrawn) from the study prior to completing it. For compensation in
                                        foreign currency, provide a US$ equivalent. Provide evidence that the amount is
                                        not coercive. </label>
                                    <textarea cols="10" rows="4" class="md-input label-fixed"
                                              id="PD_17" name="PD_17"></textarea>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <label for="PD_18" class="textarea_label">
                                        <small><strong>Q18)</strong></small>
                                        Direct or Indirect costs to be borne by subjects.
                                        Includes child care, travel, parking, clinic fees, diagnostic and laboratory
                                        tests, drugs, devices, all professional fees, etc. If there are no costs to
                                        subjects other than their time to participate, indicate this.</label>
                                    <textarea cols="10" rows="4" class="md-input label-fixed"
                                              id="PD_18" name="PD_18"></textarea>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-2">
                                    <label for="PD_19" class="textarea_label">
                                        <small><strong>Q19)</strong></small>
                                        List all potential risks to the participants if they
                                        enroll in this study. </label>
                                    <textarea cols="10" rows="4" class="md-input label-fixed"
                                              id="PD_19" name="PD_19"></textarea>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <label for="PD_20" class="textarea_label">
                                        <small><strong>Q20)</strong></small>
                                        State all measures that you are taking to mitigate these
                                        risks</label>
                                    <textarea cols="10" rows="4" class="md-input label-fixed"
                                              id="PD_20" name="PD_20"></textarea>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-2">
                                    <label for="PD_21" class="textarea_label">
                                        <small><strong>Q21)</strong></small>
                                        Describe procedures for maintaining confidentiality of
                                        the data you will collect or will receive. </label>
                                    <textarea cols="10" rows="4" class="md-input label-fixed"
                                              id="PD_21" name="PD_21"></textarea>
                                </div>


                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-2 parsley-row">
                                    <label for="PD_22">
                                        <small><strong>Q22)</strong></small>
                                        How will soft and hard data be transmitted among research personnel?</label>
                                    <select id="PD_22" name="PD_22"
                                            data-md-selectize-delayed>
                                        <option value="">Please Select</option>
                                        <option value="Secure network">Secure network</option>
                                        <option value="Password access">Password access</option>
                                        <option value="Data encryption">Data encryption</option>
                                        <option value="Password protected file(s)">Password protected file(s)</option>
                                        <option value="Automatic log-off">Automatic log-off</option>
                                        <option value="Data de-identified by research team">Data de-identified by
                                            research team
                                        </option>
                                        <option value="Locked cabinet">Locked cabinet</option>
                                        <option value="Data coded by research team with a master list secured and kept separately">
                                            Data coded by research team with a master list secured and kept separately
                                        </option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <label for="PD_22_other">Others please specify</label>
                                    <input type="text" name="PD_22_other" id="PD_22_other"
                                           value="<?= (isset($getData[0]->PD_22_other) && $getData[0]->PD_22_other != '' ? $getData[0]->PD_22_other : '') ?>"
                                           class="md-input"/>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <label for="PD_23" class="textarea_label">
                                        <small><strong>Q23)</strong></small>
                                        With whom will the data be shared outside the immediate
                                        AKU research team? For each, explain confidentiality measures.</label>
                                    <textarea cols="10" rows="4" class="md-input label-fixed"
                                              id="PD_23" name="PD_23"></textarea>
                                </div>
                            </div>
                            <div class="uk-grid">

                                <div class="uk-width-medium-1-2 parsley-row">
                                    <label class="uk-form-label">
                                        <small><strong>Q24)</strong></small>
                                        Will data be transferred outside this country?
                                    </label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="PD_24" id="PD_24_Yes"
                                                   class="wizard-icheck" value="Yes">
                                            <label for="PD_24_Yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="PD_24" id="PD_24_No"
                                                   class="wizard-icheck  " value="No"/>
                                            <label for="PD_24_No" class="inline-label">No</label>
                                        </span>
                                </div>
                                <div class="uk-width-medium-1-2 parsley-row">
                                    <label class="uk-form-label">
                                        <small><strong>Q24A)</strong></small>
                                        Are data transfer agreements in place?
                                    </label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="PD_24A" id="PD_24A_Yes"
                                                   class="wizard-icheck" value="Yes">
                                            <label for="PD_24A_Yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="PD_24A" id="PD_24A_No"
                                                   class="wizard-icheck  " value="No"/>
                                            <label for="PD_24A_No" class="inline-label">No</label>
                                        </span>
                                </div>
                            </div>
                            <div class="uk-grid">

                                <div class="uk-width-medium-1-2 parsley-row">
                                    <label class="uk-form-label">
                                        <small><strong>Q25)</strong></small>
                                        Will human biological samples be transferred outside this country?
                                    </label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="PD_25" id="PD_25_Yes"
                                                   class="wizard-icheck" value="Yes">
                                            <label for="PD_25_Yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="PD_25" id="PD_25_No"
                                                   class="wizard-icheck  " value="No"/>
                                            <label for="PD_25_No" class="inline-label">No</label>
                                        </span>
                                </div>
                                <div class="uk-width-medium-1-2 parsley-row">
                                    <label class="uk-form-label">
                                        <small><strong>Q25A)</strong></small>
                                        Are data transfer agreements in place?
                                    </label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="PD_25A" id="PD_25A_Yes"
                                                   class="wizard-icheck" value="Yes">
                                            <label for="PD_25A_Yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="PD_25A" id="PD_25A_No"
                                                   class="wizard-icheck  " value="No"/>
                                            <label for="PD_25A_No" class="inline-label">No</label>
                                        </span>
                                </div>
                            </div>
                            <div class="uk-grid">

                                <div class="uk-width-medium-1-2 parsley-row">
                                    <label class="uk-form-label">
                                        <small><strong>Q26)</strong></small>
                                        Will subjects' specimens be stored for future research?
                                    </label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="PD_26" id="PD_26_Yes"
                                                   class="wizard-icheck" value="Yes">
                                            <label for="PD_26_Yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="PD_26" id="PD_26_No"
                                                   class="wizard-icheck  " value="No"/>
                                            <label for="PD_26_No" class="inline-label">No</label>
                                        </span>
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <label for="PD_26A" class="textarea_label">
                                        <small><strong>Q26A)</strong></small>
                                        Describe your plans for disposition of data or human
                                        biological specimens that are identifiable in any way (directly or via indirect
                                        codes) once the study has ended.</label>
                                    <textarea cols="10" rows="4" class="md-input label-fixed"
                                              id="PD_26A" name="PD_26A"></textarea>
                                </div>
                            </div>
                        </section>

                        <!-- fifth section -->
                        <h3 class="CD">Consent details</h3>
                        <section>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-1">
                                    <label for="CD_1" class="textarea_label">
                                        <small><strong>Q1)</strong></small>
                                        Describe the process of obtaining informed consent from
                                        subjects</label>
                                    <textarea cols="10" rows="4" class="md-input label-fixed"
                                              id="CD_1" name="CD_1"></textarea>
                                </div>

                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-1 parsley-row">
                                    <label class="uk-form-label">
                                        <small><strong>Q2)</strong></small>
                                        Are you applying for a waiver of written (i.e., signed) consent?
                                    </label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="CD_2" id="CD_2_Yes"
                                                   class="wizard-icheck" value="Yes">
                                            <label for="CD_2_Yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="CD_2" id="CD_2_No"
                                                   class="wizard-icheck  " value="No"/>
                                            <label for="CD_2_No" class="inline-label">No</label>
                                        </span>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-1 parsley-row">
                                    <label class="uk-form-label">
                                        <small><strong>Q2A)</strong></small>
                                        The only record linking the subject and the research would be the consent
                                        document and the principal risk would be potential harm resulting from a breach
                                        of confidentiality (e.g., study topic is sensitive so that public knowledge of
                                        participation could be damaging). Participants should be asked whether they want
                                        documentation linking them with the research and the participants’ wishes will
                                        govern whether they sign the form. Note: This justification cannot be used in
                                        FDA-regulated research.
                                    </label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="CD_2A" id="CD_2A_Yes"
                                                   class="wizard-icheck" value="Yes">
                                            <label for="CD_2A_Yes" class="inline-label">Yes</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="CD_2A" id="CD_2A_No"
                                                   class="wizard-icheck  " value="No"/>
                                            <label for="CD_2A_No" class="inline-label">No</label>
                                        </span>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-2">
                                    <label for="CD_2B" class="textarea_label">
                                        <small><strong>Q2B)</strong></small>
                                        The research presents no more than minimal risk of harm to subjects and involves
                                        no procedures for which written consent is normally required outside of the
                                        research context (e.g., phone survey).</label>
                                    <textarea cols="10" rows="4" class="md-input label-fixed" id="CD_2B"
                                              name="CD_2B"></textarea>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium-1-1">
                                    <label for="CD_3" class="textarea_label">
                                        <small><strong>Q3)</strong></small>
                                        Describe procedures that will ensure privacy of the subjects in this study.
                                        Examples include the setting for interviews, phone conversations, or physical
                                        examinations; communication methods or mailed materials (e.g., mailings should
                                        not indicate disease status or focus of study on the envelope).</label>
                                    <textarea cols="10" rows="4" class="md-input label-fixed"
                                              id="CD_3" name="CD_3"></textarea>
                                </div>
                            </div>
                            <div class="uk-grid" data-uk-grid-margin>
                                <div class="uk-width-medium-1-1">
                                    <div class="md-card">
                                        <div class="md-card-content">
                                            <h3 class="heading_a uk-margin-small-bottom">
                                                Max size (10000 KB || 10 MB)
                                            </h3>
                                            <?= (isset($getData[0]->attach_files) && $getData[0]->attach_files != '' ? '<h4>File already uploaded ' . base_url($getData[0]->attach_files) . '</h4>' : '') ?>
                                            <input type="file" id="input-file-e" name="attachment[]" class="dropify"
                                                   data-max-file-size="10000K" multiple/>
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

        <script id="d_field_wizard" type="text/x-handlebars-template">
            <div class="uk-width-medium-1-1 parsley-row form_section">
                <div class="uk-input-group">
                    <label for="wizard_address">Address<span class="req">*</span></label>
                    <input type="text" name="wizard_address{{counter}}" id="wizard_address{{counter}}"
                           value="<?= (isset($getData[0]->wizard_address__0) && $getData[0]->wizard_address__0 != '' ? $getData[0]->wizard_address__0 : '') ?>"
                           class="md-input"/>
                    <span class="uk-input-group-addon">
                            <a href="#" class="btnSectionClone"><i class="material-icons md-24">&#xE146;</i></a>
                        </span>
                </div>
            </div>
        </script>

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
                            var link = '<?= base_url('form_drafts')?>';
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
                            var link = '<?= base_url('form_view')?>';
                            window.location.href = link;
                        }, 500)
                    }
                } catch (e) {
                }
            }
        }, true);
    }
</script>
