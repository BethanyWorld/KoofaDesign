<?php $_URL = base_url(); $_DIR = base_url('assets/ui/');  ?>
<div id="main ">
    <div class="container">
        <div class="row">
            <div class="body-white-form col-md-6 col-md-offset-3">
                <div class="col-md-12 col-xs-12 form-title">
                    <h1>ورود به حساب کاربری</h1>
                </div>
                <div class="col-md-12 col-xs-12 box">
                    <div class="col-xs-12 form-box form-register">
                        <div class="col-md-12 col-xs-12 form-holder login-form-holder">
                            <?php if(isset($_GET['error'])){ ?>
                                <div class="alert alert-danger">
                                    اطلاعات ورود نامعتبر است
                                </div>
                            <?php } ?>
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label>تلفن همراه</label>
                                    <input type="text" class="form-control" id="inputPhone" name="inputPhone" required>
                                </div>
                                <div class="form-group">
                                    <label>رمز عبور</label>
                                    <input type="password" class="form-control" id="inputPassword" name="inputPassword" required>
                                </div>
                                <div class="form-group">
                                    <i class="reCaptcha fa fa-refresh" style="cursor: pointer;" id="reCaptcha"></i>
                                    <img class="captcha-img" src="<?php echo base_url('GetCaptcha'); ?>"/>
                                    <div class="text-center col-sm-6 col-xs-12 p-0">
                                        <input type="text" name="inputCaptcha" id="inputCaptcha" class="form-control"
                                               placeholder="کد امنیتی">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-xs-12 text-center">
                                    <button type="button" id="buttonLogin" class="btn form-submit-btn">
                                        ورود
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12 login-to-site">
                        <p>عضو کوفا نشده اید ؟
                            <a href="<?php echo base_url('Account/register'); ?>">ثبت نام در کوفا</a>
                        </p>
                        <p>
                            <a href="<?php echo base_url('Account/resetPassword') ?>">رمز خود را فراموش کرده ام</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
