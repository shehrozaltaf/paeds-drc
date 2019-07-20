<!doctype html>
<!--[if lte IE 9]>
<html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/img/favicon.ico"/>
    <link rel="icon" type="image/ico" href="<?= base_url() ?>assets/img/favicon.ico"/>


    <title>Paeds - DRC</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>

    <!-- uikit -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/uikit/css/uikit.almost-flat.min.css"/>
    <!-- altair admin login page -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/login_page.min.css"/>
    <style>
        .error {
            border-color: #e53935 !important;
        }
    </style>
</head>
<body class="login_page">
<div class="login_page_wrapper">
    <div class="md-card" id="login_card">
        <div class="md-card-content large-padding" id="login_form">
            <div class="login_heading">
                <div class="user_avatar"></div>
                <h2>Paeds - DRC</h2>
            </div>
            <form>
                <div id="msg" style="display: none;" class="uk-alert" data-uk-alert>
                    <a href="javascript:void(0)" class="uk-alert-close uk-close"></a>
                    <p id="msgText"></p>
                </div>
                <div class="uk-form-row">
                    <label for="login_username">Email</label>
                    <input class="md-input" type="text" id="login_username" name="login_username"/>
                </div>
                <div class="uk-form-row">
                    <label for="login_password">Password</label>
                    <input class="md-input" type="password" id="login_password" name="login_password"/>
                </div>
                <div class="uk-margin-medium-top">
                    <a href="javascript:void(0)" class="md-btn md-btn-primary md-btn-block md-btn-large"
                       onclick="login()">Sign In</a>
                </div>
                <!-- <div class="uk-grid uk-grid-width-1-3 uk-grid-small uk-margin-top">
                     <div><a href="#" class="md-btn md-btn-block md-btn-facebook" data-uk-tooltip="{pos:'bottom'}"
                             title="Sign in with Facebook"><i class="uk-icon-facebook uk-margin-remove"></i></a></div>
                     <div><a href="#" class="md-btn md-btn-block md-btn-twitter" data-uk-tooltip="{pos:'bottom'}"
                             title="Sign in with Twitter"><i class="uk-icon-twitter uk-margin-remove"></i></a></div>
                     <div><a href="#" class="md-btn md-btn-block md-btn-gplus" data-uk-tooltip="{pos:'bottom'}"
                             title="Sign in with Google+"><i class="uk-icon-google-plus uk-margin-remove"></i></a></div>
                 </div>-->
                <div class="uk-margin-top">
                    <a href="#" id="login_help_show" class="uk-float-right">Need help?</a>
                    <span class="icheck-inline">
                            <input type="checkbox" name="login_page_stay_signed" id="login_page_stay_signed"
                                   data-md-icheck/>
                            <label for="login_page_stay_signed" class="inline-label">Stay signed in</label>
                        </span>
                </div>
            </form>
        </div>
        <div class="md-card-content large-padding uk-position-relative" id="login_help" style="display: none">
            <button type="button"
                    class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
            <h2 class="heading_b uk-text-success">Can't log in?</h2>
            <p>Here’s the info to get you back in to your account as quickly as possible.</p>
            <p>First, try the easiest thing: if you remember your password but it isn’t working, make sure that Caps
                Lock is turned off, and that your username is spelled correctly, and then try again.</p>
            <p>If your password still isn’t working, it’s time to <a href="#" id="password_reset_show">reset your
                    password</a>.</p>
        </div>
        <div class="md-card-content large-padding" id="login_password_reset" style="display: none">
            <button type="button"
                    class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
            <h2 class="heading_a uk-margin-large-bottom">Reset password</h2>
            <form>
                <div class="uk-form-row">
                    <label for="login_email_reset">Your email address</label>
                    <input class="md-input" type="text" id="login_email_reset" name="login_email_reset"/>
                </div>
                <div class="uk-margin-medium-top">
                    <a href="javascript:void(0)" class="md-btn md-btn-primary md-btn-block">Reset password</a>
                </div>
            </form>
        </div>
        <div class="md-card-content large-padding" id="register_form" style="display: none">
            <button type="button"
                    class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
            <h2 class="heading_a uk-margin-medium-bottom">Create an account</h2>
            <form>
                <div id="msgSignup" style="display: none;" class="uk-alert" data-uk-alert>
                    <a href="javascript:void(0)" class="uk-alert-close uk-close"></a>
                    <p id="msgTextSignup"></p>
                </div>
                <div class="uk-form-row">
                    <label for="full_name">Full Name</label>
                    <input class="md-input" type="text" id="full_name" name="full_name"/>
                </div>
                <div class="uk-form-row">
                    <label for="username">Email</label>
                    <input class="md-input" type="text" id="username" name="username"/>
                </div>
                <div class="uk-form-row">
                    <label for="password">Password</label>
                    <input class="md-input" type="password" id="password"
                           name="register_password_repeat"/>
                </div>
                <div class="uk-form-row">
                    <label for="designation">Designation</label>
                    <input class="md-input" type="text" id="designation" name="designation"/>
                </div>
                <div class="uk-margin-medium-top">
                    <a href="javascript:void(0)" onclick="signUp()"
                       class="md-btn md-btn-primary md-btn-block md-btn-large">Sign Up</a>
                </div>
            </form>
        </div>
    </div>
    <div class="uk-margin-top uk-text-center">
        <a href="#" id="signup_form_show">Create an account</a>
    </div>
</div>

<!-- common functions -->
<script src="<?= base_url() ?>assets/js/common.min.js"></script>
<!-- uikit functions -->
<script src="<?= base_url() ?>assets/js/uikit_custom.min.js"></script>
<!-- altair core functions -->
<script src="<?= base_url() ?>assets/js/altair_admin_common.min.js"></script>
<!-- altair login page functions -->
<script src="<?= base_url() ?>assets/js/pages/login.min.js"></script>
<script src="<?= base_url() ?>assets/js/core.js"></script>
<script>
    function signUp() {
        $('#msgSignup').removeClass('uk-alert-danger').removeClass('uk-alert-success');
        $('#full_name').removeClass('md-input-danger');
        $('#username').removeClass('md-input-danger');
        $('#password').removeClass('md-input-danger');
        var flag = 0;
        var data = {};
        var Group = [];
        data['full_name'] = $('#full_name').val();
        data['username'] = $('#username').val();
        data['password'] = $('#password').val();
        data['designation'] = $('#designation').val();
        data['idGroup'] = '1AA4943C-B01F-61DF-A582-04A3E8150048';
        data['signUp'] = '1';
        if (data['full_name'] == '' || data['full_name'] == undefined || data['full_name'] < 1) {
            $('#full_name').addClass('md-input-danger');
            flag = 1;
            returnMsg('msgTextSignup', 'Invalid Full Name', 'uk-alert-danger', 'msgSignup');
            return false;
        }
        if (data['username'] == '' || data['username'] == undefined || data['username'].length < 1) {
            $('#username').addClass('md-input-danger');
            flag = 1;
            returnMsg('msgTextSignup', 'Invalid User Name', 'uk-alert-danger', 'msgSignup');
            return false;
        }
        if (data['password'] == '' || data['password'] == undefined || data['password'].length < 3) {
            $('#password').addClass('md-input-danger');
            returnMsg('msgTextSignup', 'Invalid Password', 'uk-alert-danger', 'msgSignup');
            flag = 1;
            return false;
        }
        if (flag === 0) {
            altair_helpers.content_preloader_show();
            CallAjax('<?= base_url('Login/addData')?>', data, 'POST', function (res) {
                if (res != '' && JSON.parse(res).length > 0) {
                    var response = JSON.parse(res);
                    try {
                        notificatonShow(response[0], response[1]);
                        if (response[1] === 'success') {
                            returnMsg('msgTextSignup', 'Success', 'uk-alert-success', 'msgSignup');
                            window.location.href = "<?=base_url('dashboard')?>";
                        } else if (response[0] == 'User Name already exist') {
                            returnMsg('msgTextSignup', 'User Name already exist', 'uk-alert-danger', 'msgSignup');
                        } else {
                            returnMsg('msgTextSignup', 'Something went wrong', 'uk-alert-danger', 'msgSignup');
                        }
                    } catch (e) {
                    }
                }
            });
        }
    }

    function login() {
        $('#msg').removeClass('uk-alert-danger').removeClass('uk-alert-success');
        var errorFlag = 0;
        $('#login_username').removeClass('error');
        $('#login_password').removeClass('error');
        var data = {};
        data['UserName'] = $('#login_username').val();
        data['Password'] = $('#login_password').val();
        if (data['UserName'] == '' || data['UserName'] == undefined) {
            $('#login_username').addClass('error');
            errorFlag = 1;
            returnMsg('msgText', 'Invalid User Name', 'uk-alert-danger', 'msg');
            return false;
        }
        if (data['Password'] == '' || data['Password'] == undefined) {
            $('#login_password').addClass('error');
            returnMsg('msgText', 'Invalid Password', 'uk-alert-danger', 'msg');
            errorFlag = 1;
            return false;
        }
        if (errorFlag === 0) {
            CallAjax('<?= base_url('index.php/Login/getLogin')?>', data, 'POST', function (res) {
                if (res == 1) {
                    setTimeout(function () {
                        window.location.href = "<?php echo base_url() . 'dashboard' ?>";
                    }, 2000);
                    returnMsg('msgText', 'Success', 'uk-alert-success', 'msg');
                } else if (res == 2) {
                    $('#login_password').addClass('error');
                    returnMsg('msgText', 'Invalid Password', 'uk-alert-danger', 'msg');
                } else {
                    $('#login_username').addClass('error');
                    $('#login_password').addClass('error');
                    returnMsg('msgText', 'Invalid Username/Password', 'uk-alert-danger', 'msg');
                }
            });
        }
    }
</script>
</html>