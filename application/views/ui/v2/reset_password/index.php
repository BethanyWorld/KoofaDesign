<?php $_URL = base_url(); $_DIR = base_url('assets/ui/');  ?>
<link rel="stylesheet" href="<?php echo $_DIR; ?>v2/assets/css/forms.css" />
<div id="main">
    <div class="container">
        <div class="row">

            <div class="body-white-form col-md-4 col-md-offset-4">
                <div class="col-md-12 col-xs-12 form-title">
                    <h1>بازیابی رمز عبور</h1>
                </div>
                <div class="col-md-12 col-xs-12 box">
                    <div class="col-sm-12 col-xs-12 form-box form-register">
                        <div class="col-md-12 col-xs-12 form-holder login-form-holder">
                            <form role="form">
                                <div class="form-group">
                                    <label>تلفن همراه</label>
                                    <input type="text" class="form-control" id="inputPhone" name="inputPhone" required>
                                </div>
                                <div class="form-group">
                                    <i class="reCaptcha fa fa-refresh"
                                       style="cursor: pointer;"
                                       id="reCaptcha"></i>
                                    <img class="captcha-img" src="<?php echo base_url('GetCaptcha'); ?>"/>
                                    <div class="text-center col-sm-6 col-xs-12 p-0">
                                        <input type="text" name="inputCaptcha" id="inputCaptcha" class="form-control"
                                               placeholder="کد امنیتی">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <button type="button" id="buttonResetPassword" class="btn form-submit-btn pull-left">
                                    ارسال رمز عبور
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12 login-to-site">
                        <p>عضو کوفا نشده اید ؟
                            <a href="<?php echo base_url('Account/register'); ?>">ثبت نام در کوفا</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>