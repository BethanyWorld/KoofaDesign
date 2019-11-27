<?php
$_URL = base_url();
$_DIR = base_url('assets/ui/');
?>
<link rel="stylesheet" href="<?php echo $_DIR . 'css/page.css'; ?>"/>

<div class="col-xs-12" id="main-page-container-wrapper">
    <div class="container">
        <div id="loginForm" class="col-xs-12 col-xs-12 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-4 ">
            <div class="login-wrap">
                <h2>ورود به حساب کاربری</h2>
                <div class="form">
                    <div class="row col-xs-12 rtl">
                        <label>شماره همراه</label>
                        <input type="text" name="inputPhone" id="inputPhone" placeholder="شماره همراه" autofocus/>
                    </div>
                    <div class="row col-xs-12 rtl">
                        <label>رمز عبور</label>
                        <input type="password" name="inputPassword" id="inputPassword" placeholder="رمز عبور"/>
                    </div>

                    <div class="row form-group col-xs-12" style="padding-right: 20px !important;margin-bottom: 15px !important;">
                        <div class="row text-right col-xs-12 pull-left">
                            <label>کد امنیتی</label>
                        </div>
                        <div class="row text-right col-sm-6 col-xs-12 pull-left">
                            <i class="fa fa-refresh recaptcha"
                               style="cursor: pointer;position: relative;top: -20px;right:-4px;"
                               id="recaptcha"></i>
                            <img class="captcha_img"  src="<?php echo base_url('GetCaptcha'); ?>"/>
                        </div>
                        <div class="row text-center col-sm-6 col-xs-12 pull-right">
                            <input type="text" name="inputCaptcha" id="inputCaptcha" class="form-control" placeholder="کد امنیتی" autofocus>
                        </div>

                    </div>
                    <div class="row col-xs-12 rtl">
                        <button id="buttonLogin">ورود</button>
                    </div>
                </div>
            </div>
        </div>
     </div>
</div>
