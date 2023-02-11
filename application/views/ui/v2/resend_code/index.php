<?php $_URL = base_url(); $_DIR = base_url('assets/ui/');  ?>
<div id="main">
    <div class="container">
        <div class="row">
            <div class="body-white-form">
                <div class="col-md-12 col-xs-12 form-title">
                    <h1>عضویت در کوفا</h1>
                </div>
                <div class="col-md-12 col-xs-12 box">
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 form-box form-register">
                        <div class="col-md-12 col-xs-12 form-holder">
                            <div role="form" class="register-page-form">

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
                                <button type="button" id="buttonResendCode" class="btn form-submit-btn pull-left">
                                   ارسال کد فعال سازی
                                </button>
                            </div>
                            <form role="form" class="register-page-active-form">
                                <div class="form-group">
                                    <label>کد تایید حساب کاربری</label>
                                    <input type="text" class="form-control" id="inputActivationCode" name="inputActivationCode" required>
                                </div>
                                <button type="button" id="buttonActiveCode" class="btn form-submit-btn pull-left">
                                   تایید حساب
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12 login-to-site">
                        <p>عضو کوفا هستید ؟
                            <a href="<?php echo base_url('Account/login'); ?>">ورود به حساب کاربری</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>