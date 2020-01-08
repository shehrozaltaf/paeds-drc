<div id="page_content">
    <div id="page_content_inner">

        <h2 class="heading_b uk-margin-bottom">Advanced Wizard</h2>
        <div class="md-card uk-margin-large-bottom">
            <div class="md-card-content">
                <div class="uk-width-medium-1-1">
                    <?= (isset($getData[0]->fullname) && $getData[0]->fullname != '' ? '<h4>Project: ' . $getData[0]->fullname . '<h4>' : '') ?>
                    <?= (isset($getData[0]->idForm) && $getData[0]->idForm != '' ? '<h4>Project ID: ' . $getData[0]->idForm . '<h4>' : '') ?>
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
                        <h3> General Information</h3>
                        <section>
                            <!-- <h2 class="heading_a">
                                 General Information
                                 <span class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                             </h2>
                             <hr class="md-hr"/>-->
                            <div class="uk-grid">

                                <div class="uk-width-medium-1-1 parsley-row">
                                    <input type="hidden" name="idForm" id="idForm"
                                           value="<?= (isset($getData[0]->idForm) && $getData[0]->idForm != '' ? $getData[0]->idForm : '') ?>"/>
                                    <input type="hidden" name="isEdit" id="isEdit"
                                           value="<?= (isset($getData[0]->review) && $getData[0]->review != '' ? $getData[0]->review : 'No') ?>"/>

                                    <input type="hidden" name="ReviewNo" id="ReviewNo"
                                           value="<?= (isset($getData[0]->ReviewNo) && $getData[0]->ReviewNo != '' ? $getData[0]->ReviewNo + 1 : 1) ?>"/>

                                    <label for="fullname">Project Name<span class="req">*</span></label>
                                    <input type="text" name="fullname" id="fullname" required
                                           value="<?= (isset($getData[0]->fullname) && $getData[0]->fullname != '' ? $getData[0]->fullname : '') ?>"
                                           class="md-input"/>


                                </div>
                            </div>
                            <div data-dynamic-fields="d_field_wizard" class="uk-grid" data-uk-grid-margin></div>
                            <div class="uk-grid" data-uk-grid-margin>
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <label for="dob">Birth Date<span class="req">*</span></label>
                                    <input type="text" name="dob" id="dob" required class="md-input"
                                           value="<?= (isset($getData[0]->dob) && $getData[0]->dob != '' ? $getData[0]->dob : '') ?>"
                                           data-parsley-date
                                           data-parsley-date-message="This value should be a valid date"
                                           data-uk-datepicker="{format:'MM.DD.YYYY'}"/>
                                </div>
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <select id="place_of_birth" name="wizard_birth_place" required
                                            data-md-selectize-delayed>
                                        <option value="0">Place of Birth</option>
                                        <option value="Karachi" <?= (isset($getData[0]->wizard_birth_place) && $getData[0]->wizard_birth_place == 'Karachi' ? 'selected' : '') ?>>
                                            Karachi
                                        </option>
                                        <option value="Lahore" <?= (isset($getData[0]->wizard_birth_place) && $getData[0]->wizard_birth_place == 'Lahore' ? 'selected' : '') ?>>
                                            Lahore
                                        </option>
                                        <option value="Islamabad" <?= (isset($getData[0]->wizard_birth_place) && $getData[0]->wizard_birth_place == 'Islamabad' ? 'selected' : '') ?>>
                                            Islamabad
                                        </option>
                                    </select>
                                </div>
                                <div class="uk-width-medium-1-3 parsley-row">
                                    <label class="uk-form-label">Gender<span class="req">*</span></label>
                                    <span class="icheck-inline">
                                            <input type="radio" name="gender" id="wizard_status_married" required
                                                   class="wizard-icheck" value="Male"
                                                   <?= (isset($getData[0]->gender) && $getData[0]->gender == 'Male' ? 'checked' : '') ?>/>
                                            <label for="wizard_status_married" class="inline-label">Male</label>
                                        </span>
                                    <span class="icheck-inline">
                                            <input type="radio" name="gender" id="wizard_status_single"
                                                   class="wizard-icheck" value="Female"
                                            <?= (isset($getData[0]->gender) && $getData[0]->gender == 'Female' ? 'checked' : '') ?>/>
                                            <label for="wizard_status_single" class="inline-label">Female</label>
                                        </span>
                                </div>
                            </div>
                            <div class="uk-grid uk-grid-width-medium-1-2 uk-grid-width-large-1-2" data-uk-grid-margin>
                                <div class="uk-input-group">
                                        <span class="uk-input-group-addon">
                                            <i class="material-icons">&#xE0CD;</i>
                                        </span>
                                    <label for="phone_number">Phone Number</label>
                                    <input type="text" class="md-input" name="phone_number" id="phone_number"
                                           value="<?= (isset($getData[0]->phone_number) && $getData[0]->phone_number != '' ? $getData[0]->phone_number : '') ?>"
                                           required/>
                                </div>
                                <div class=" parsley-row">
                                    <div class="uk-input-group">
                                            <span class="uk-input-group-addon">
                                                <i class="material-icons">&#xE0BE;</i>
                                            </span>
                                        <label for="email">Email</label>
                                        <input type="text" class="md-input" name="email" id="email"
                                               value="<?= (isset($getData[0]->email) && $getData[0]->email != '' ? $getData[0]->email : '') ?>"
                                               required/>
                                    </div>
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
                                            <input type="file" id="input-file-e" name="attachment" class="dropify"
                                                   data-max-file-size="10000K"/>
                                        </div>
                                        <div id="file_upload-progressbar" class="uk-progress uk-hidden">
                                            <div class="uk-progress-bar" style="width:0">0%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>

                        <!-- second section -->
                        <h3>Application information</h3>
                        <section>
                            <!--<h2 class="heading_a">
                                Vehicle information
                                <span class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                            </h2>
                            <hr class="md-hr"/>-->
                            <div class="uk-grid uk-grid-width-large-1-2 uk-grid-width-xlarge-1-3" data-uk-grid-margin>
                                <div class="parsley-row">
                                    <label for="application_number">Application Number<span
                                                class="req">*</span></label>
                                    <input type="text" name="application_number"
                                           value="<?= (isset($getData[0]->application_number) && $getData[0]->application_number != '' ? $getData[0]->application_number : '') ?>"
                                           id="application_number" required class="md-input"/>
                                </div>
                                <div class="parsley-row">

                                    <label for="application_starting_date">Application Starting Date<span
                                                class="req">*</span></label>
                                    <input type="text" name="application_starting_date" id="application_starting_date"
                                           required class="md-input" data-parsley-americandate
                                           value="<?= (isset($getData[0]->application_starting_date) && $getData[0]->application_starting_date != '' ? $getData[0]->application_starting_date : '') ?>"
                                           data-parsley-americandate-message="This value should be a valid date (MM.DD.YYYY)"
                                           data-uk-datepicker="{format:'MM.DD.YYYY'}"/>
                                </div>
                                <div class="parsley-row">
                                    <label for="application_end_date">Application End Date<span
                                                class="req">*</span></label>
                                    <input type="text" name="application_end_date" id="application_end_date"
                                           required class="md-input" data-parsley-americandate
                                           value="<?= (isset($getData[0]->application_end_date) && $getData[0]->application_end_date != '' ? $getData[0]->application_end_date : '') ?>"
                                           data-parsley-americandate-message="This value should be a valid date (MM.DD.YYYY)"
                                           data-uk-datepicker="{format:'MM.DD.YYYY'}"/>
                                </div>
                            </div>
                            <div class="uk-grid uk-grid-width-large-1-6 uk-grid-width-xlarge-1-6" data-uk-grid-margin>

                                <div class="parsley-row">
                                    <label for="example_1">Example 1</label>
                                    <input type="text" name="example_1" id="example_1"
                                           value="<?= (isset($getData[0]->example_1) && $getData[0]->example_1 != '' ? $getData[0]->example_1 : '') ?>"
                                           class="md-input"/>
                                </div>
                                <div class="parsley-row">
                                    <label for="example_2">Example 2<span class="req">*</span></label>
                                    <input type="text" name="example_2" id="example_2" required
                                           value="<?= (isset($getData[0]->example_2) && $getData[0]->example_2 != '' ? $getData[0]->example_2 : '') ?>"
                                           class="md-input"/>
                                </div>
                            </div>
                        </section>

                        <!-- third section -->
                        <h3>Other information</h3>
                        <section>
                            <!--<h2 class="heading_a">
                                Additional information
                                <span class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                            </h2>
                            <hr class="md-hr"/>-->
                            <div class="uk-grid uk-margin-large-bottom" data-uk-grid-margin>
                                <div class="uk-width-1-1">
                                    <label class="uk-form-label">Prioity</label>
                                    <div class="uk-grid" data-uk-grid-margin="">
                                        <div class="uk-width-medium-2-10 parsley-row">
                                                <span class="icheck-inline uk-margin-top uk-margin-left">
                                                    <input type="radio" name="status" checked
                                                           id="status_high" class="wizard-icheck"
                                                           value="High"/>
                                                    <label for="status_high"
                                                           class="inline-label">High</label>
                                                </span>
                                        </div>
                                        <div class="uk-width-medium-2-10 parsley-row">
                                                <span class="icheck-inline uk-margin-top uk-margin-left">
                                                    <input type="radio" name="status"
                                                           id="status_medium" class="wizard-icheck"
                                                           value="Medium"/>
                                                    <label for="status_medium" class="inline-label">Medium</label>
                                                </span>
                                        </div>
                                        <div class="uk-width-medium-2-10 parsley-row">
                                                <span class="icheck-inline uk-margin-top uk-margin-left">
                                                    <input type="radio" name="status"
                                                           id="status_low" class="wizard-icheck"
                                                           value="Low"/>
                                                    <label for="status_low" class="inline-label">Low</label>
                                                </span>
                                        </div>
                                        <!--<div class="uk-width-medium-3-10 parsley-row">
                                            <div class="uk-input-group">
                                                    <span class="uk-input-group-addon">
                                                       <input type="radio" name="wizard_additional_location"
                                                              class="wizard-icheck" value="Low"/>
                                                    </span>
                                                <label for="status_low">Low</label>
                                                <input type="text" class="md-input" name="status"
                                                       id="status_low"/>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <!-- <span class="uk-alert uk-alert-info">If you would like your registration renewals sent to an address other than your residence/business address, enter it below.</span>
                             <div class="uk-grid" data-uk-grid-margin>
                                 <div class="uk-width-medium-2-6 parsley-row">
                                     <label for="wizard_vehicle_registration_address">Registration Mailing
                                         Address</label>
                                     <input type="text" name="wizard_vehicle_registration_address"
                                            id="wizard_vehicle_registration_address" required class="md-input"/>
                                 </div>
                                 <div class="uk-width-medium-1-6 parsley-row">
                                     <label for="wizard_vehicle_registration_city">City<span class="req">*</span></label>
                                     <input type="text" name="wizard_vehicle_registration_city"
                                            id="wizard_vehicle_registration_city" required class="md-input"/>
                                 </div>
                                 <div class="uk-width-medium-1-6 parsley-row">
                                     <label for="wizard_vehicle_registration_state">State<span
                                                 class="req">*</span></label>
                                     <input type="text" name="wizard_vehicle_registration_state"
                                            id="wizard_vehicle_registration_state" required class="md-input"/>
                                 </div>
                                 <div class="uk-width-medium-1-6 parsley-row">
                                     <label for="wizard_vehicle_registration_zip">ZIP<span class="req">*</span></label>
                                     <input type="text" name="wizard_vehicle_registration_zip"
                                            id="wizard_vehicle_registration_zip" required class="md-input"/>
                                 </div>
                                 <div class="uk-width-medium-1-6 parsley-row">
                                     <label for="wizard_vehicle_registration_code">Code<span class="req">*</span></label>
                                     <input type="text" name="wizard_vehicle_registration_code"
                                            id="wizard_vehicle_registration_code" required class="md-input"/>
                                 </div>
                             </div>-->
                        </section>
                    </div>

                </form>

            </div>

        </div>

        <script id="d_field_wizard" type="text/x-handlebars-template">
            <div class="uk-width-medium-1-1 parsley-row form_section">
                <div class="uk-input-group">
                    <label for="wizard_address">Address<span class="req">*</span></label>
                    <input type="text" name="wizard_address{{counter}}" id="wizard_address{{counter}}" required
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
        formData.append('draft', 1);
        $("#page_content").css('opacity', 0.5);
        altair_helpers.content_preloader_show('md');
        CallAjax('http://10.1.42.114/akuportal/Form/sendEmail', formData, 'POST', function (result) {
            $("#page_content").css('opacity', 1);
            altair_helpers.content_preloader_hide();
            if (result != '' && JSON.parse(result).length > 0) {
                var response = JSON.parse(result);
                try {
                    console.log(response);
                    notificatonShow(response[0], response[1]);
                    if (response[1] === 'success') {
                        setTimeout(function () {
                            var link = 'http://10.1.42.114/akuportal/form_drafts';
                            // window.location.href = link;
                        }, 500)
                    }
                } catch (e) {
                }
            }
        }, true);
    }

    function submitForm() {
        var data = {};
        var t = $("#wizard_advanced"), i = $("#wizard_advanced_form");
        var formData = new FormData($("#wizard_advanced_form")[0]);
        var t = JSON.stringify(i.serializeObject(), null, 2);
        data['mydata'] = t;
        $("#page_content").css('opacity', 0.5);
        altair_helpers.content_preloader_show('md');
        CallAjax('http://10.1.42.114/akuportal/Form/sendEmail', formData, 'POST', function (result) {
            $("#page_content").css('opacity', 1);
            altair_helpers.content_preloader_hide();
            if (result != '' && JSON.parse(result).length > 0) {
                var response = JSON.parse(result);
                try {
                    console.log(response);
                    notificatonShow(response[0], response[1]);
                    if (response[1] === 'success') {
                        setTimeout(function () {
                            var link = 'http://10.1.42.114/akuportal/form_view';
                            // window.location.href = link;
                        }, 500)
                    }
                } catch (e) {
                }
            }


            /*$("#page_content").css('opacity',1);
            altair_helpers.content_preloader_hide();
            notificatonShow('Successfully Submitted', 'success');
            setTimeout(function () {
                var link = 'http://10.1.42.114/akuportal/form_view';
                // window.location.href = link;
            },500)*/
        }, true);
    }
</script>
