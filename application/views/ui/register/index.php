<?php $_URL = base_url(); $_DIR = base_url('assets/ui/');  ?>


<div id="main">
    <div class="container">
        <div class="row">
            <div class="body-white-form">
                <div class="col-md-12 col-xs-12 form-title">
                    <h1>عضویت در کوفا</h1>
                </div>
                <div class="col-md-12 col-xs-12 box">
                    <div class="col-md-6 col-sm-12 col-xs-12 form-box form-register">
                        <div class="col-md-12 col-xs-12 form-holder">
                            <div role="form" class="register-page-form">
                                <div class="form-group">
                                    <label>نام </label>
                                    <input type="text" class="form-control" id="inputFirstName" name="inputFirstName" required>
                                </div>
                                <div class="form-group">
                                    <label>نام خانوادگی</label>
                                    <input type="text" class="form-control" id="inputLastName" name="inputLastName" required>
                                </div>
                                <div class="form-group">
                                    <label>تلفن همراه</label>
                                    <input type="text" class="form-control" id="inputPhone" name="inputPhone" required>
                                </div>
                                <div class="form-group">
                                    <label>رمز عبور</label>
                                    <input type="password" class="form-control" id="inputPassword" name="inputPassword" required>
                                </div>
                                <div class="form-group">
                                    <label>تایید رمز عبور</label>
                                    <input type="password" class="form-control" id="inputConfirmPassword" name="inputConfirmPassword" required>
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
                                <div class="margin-t-10">
                                    <input type="checkbox" id="inputTermsCondition" />
                                    <label for="inputTermsCondition" class="register-lable">
                                        <span class="label-span">ضوابط و قوانین </span>
                                        استفاده از سایت کوفا را مطالعه کرده و می بذیرم
                                    </label>
                                </div>
                                <button type="button"
                                        id="buttonRegister"
                                        class="btn form-submit-btn pull-left">
                                    ثبت نام
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
                    <div class="col-md-3 col-sm-12 col-xs-12 form-box forms-boxes rightFloat">
                        <div class="col-md-12 col-xs-12 form-holder">
                            <div class="col-md-12 col-xs-12 form-white-image text-center">
                                <img src="<?php echo $_DIR; ?>images/item_1.png" height="123" width="128"/>
                            </div>
                            <div class="col-md-12 col-xs-12 form-white-title text-center margin-t-20">
                                <p>برخی مزایای عضویت در کوفا
                                    <br>
                                    (زمین دوست ماست)</p>
                                <br>
                                <P>10 درصد تخفیف اولین خرید</P>
                            </div>
                            <div class="col-md-12 col-xs-12 form-white-desc text-center">
                                <p>
                                    خرید آسان تر
                                    <br>
                                    دریافت بنفا (امتیاز خرید ریگان)
                                    <br>
                                    ساخت لیست علاقهمندی ها
                                    <br>
                                    مشاهده سوابق خرید
                                    <br>
                                    ثبت نظرات
                                    <br>
                                    و ...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12 form-box forms-boxes">
                        <div class="col-md-12 col-xs-12 form-holder">
                            <div class="col-md-12 col-xs-12 form-white-image text-center">
                                <img src="<?php echo $_DIR; ?>images/item_2.png" height="125" width="125"/></div>
                            <div class="col-md-12 col-xs-12 form-white-title text-center margin-t-20">
                                <p>برخی مزایای عضویت در کوفا
                                    <br>
                                    (زمین دوست ماست)</p>
                                <br>
                                <P>10 درصد تخفیف اولین خرید</P>
                            </div>
                            <div class="col-md-12 col-xs-12 form-white-desc text-center">
                                <p>
                                    خرید آسان تر
                                    <br>
                                    دریافت بنفا (امتیاز خرید ریگان)
                                    <br>
                                    ساخت لیست علاقهمندی ها
                                    <br>
                                    مشاهده سوابق خرید
                                    <br>
                                    ثبت نظرات
                                    <br>
                                    و ...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12 login-to-site">
                        <p>عضو کوفا هستید ؟
                            <a href="<?php echo base_url('Account/login'); ?>">ورود به حساب کاربری</a>
                        </p>
                        <p>
                            <a href="<?php echo base_url('Account/resendCode'); ?>">ارسال مجدد کد فعال سازی حساب کاربری</a>
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
                        <ul  class="body-guarantee">
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

