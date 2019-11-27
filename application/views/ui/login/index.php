<?php $_URL = base_url(); $_DIR = base_url('assets/ui/');  ?>
<div id="main">
    <div class="container">
        <div class="row">
            <div class="body-white-form">
                <div class="col-md-12 col-xs-12 form-title">
                    <h1>ورود به حساب کاربری</h1>
                </div>
                <div class="col-md-12 col-xs-12 box">
                    <div class="col-md-6 col-sm-12 col-xs-12 form-box form-register">
                        <div class="col-md-12 col-xs-12 form-holder login-form-holder">
                            <?php if(isset($_GET['error'])){ ?>
                                <div class="alert alert-danger">
                                    اطلاعات ورود نامعتبر است
                                </div>
                            <?php } ?>
                            <form role="form">
                                <div class="form-group">
                                    <label>تلفن همراه</label>
                                    <input type="text" class="form-control" id="inputPhone" name="inputPhone" required>
                                </div>
                                <div class="form-group">
                                    <label>رمز عبور</label>
                                    <input type="password" class="form-control" id="inputPassword" name="inputPassword" required>
                                </div>

                                <div class="form-group">
                                    <i class="reCaptcha fa fa-refresh"
                                       style="cursor: pointer;"
                                       id="reCaptcha"></i>
                                    <img class="captcha-img" src="<?php echo base_url('GetCaptcha'); ?>"/>
                                    <div class="text-center col-sm-6 col-xs-12">
                                        <input type="text" name="inputCaptcha" id="inputCaptcha" class="form-control"
                                               placeholder="کد امنیتی">
                                    </div>
                                </div>
                                <div class="row col-md-6 col-xs-12 login-remember-pass">
                                    <a href="<?php echo base_url('Account/resetPassword') ?>">رمز خود را فراموش کرده اید ؟</a>
                                </div>
                                <div class="clearfix"></div>
                                <button type="button" id="buttonLogin" class="btn form-submit-btn pull-left">
                                    ورود
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 form-box forms-boxes rightFloat">
                        <div class="col-md-12 col-xs-12 form-holder login-form-holder2 login-form-holder">
                            <div class="col-md-12 col-xs-12 login-title">
                                <h3>هنوز عضو کوفا نشده اید ؟</h3>
                            </div>
                            <div class="col-md-12 col-xs-12">
<!--                                <div class="col-md-7 col-xs-12 rightFloat ">-->
<!--                                    <p class="highlight"> 10 درصد تخفیف اولین خرید</p>-->
<!--                                    <p class="login-des">خرید آسان تر<br>دریافت بنفا ( امتیاز خرید رایگان)<br>ساخت لیست علاقمندی ها<br>مشاهده-->
<!--                                        سوابق خرید<br>ثبت نظرات<br>و ...</p>-->
<!--                                </div>-->
                                <div class="col-md-5 col-xs-12">
                                    <div class="col-md-12 col-xs-12 padding-0 login-image">
                                        <img src="<?php echo $_DIR; ?>images/item_1.png"  width="128"/>
                                    </div>
                                    <div class="col-md-12 col-xs-12 ">
                                        <a href="<?php echo base_url('Account/register'); ?>" class=" btn login-button">عضو کوفا میشوم</a>
                                    </div>
                                </div>
                            </div>
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

<div class="col-md-12 col-xs-12">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12 body-icons body-blocks">
                <div class="row icons">
                    <ul>
                        <li>
                            <div class="block-image">
                                <img src="<?php echo $_DIR; ?>images/icon_1_1.png" width="55"/>
                            </div>
                            <a href="">
                                <h4>مجله هنری کوفا</h4>
                            </a>
                        </li>

                        <li>
                            <div class="block-image">
                                <img src="<?php echo $_DIR; ?>images/icon_2.png" width="55"/></div>
                            <a href="">
                                <h4>مجله هنری کوفا</h4>
                            </a>
                        </li>

                        <li>
                            <div class="block-image">
                                <img src="<?php echo $_DIR; ?>images/icon_3.png" width="55"/></div>
                            <a href="">
                                <h4>مجله هنری کوفا</h4>
                            </a>
                        </li>

                        <li>
                            <div class="block-image">
                                <img src="<?php echo $_DIR; ?>images/icon_4.png" width="55"/></div>
                            <a href="">
                                <h4>مجله هنری کوفا</h4>
                            </a>
                        </li>

                        <li>
                            <div class="block-image">
                                <img src="<?php echo $_DIR; ?>images/icon_5.png" width="55"/></div>
                            <a href="">
                                <h4>مجله هنری کوفا</h4>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12 col-xs-12">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12 body-guarantee-div">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <ul class="body-guarantee">
                            <li class="col-md-3 col-xs-12">
                                <a href="">ضمانت بازگشت</a>
                            </li>
                            <li class="col-md-3 col-xs-12">
                                <a href="">تحویل اکسبرس</a>
                            </li>
                            <li class="col-md-3 col-xs-12">
                                <a href="">پرداخـت در محل</a>
                            </li>
                            <li class="col-md-3 col-xs-12">
                                <a href="">تضمین ضمانت</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>