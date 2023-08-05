<?php $_URL = base_url();
$_DIR = base_url('assets/ui/'); ?>

<div id="main" style="min-height: 100vh;">

    <div class="row">
        <div class="container margin-t-15">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12 padding-0">
                        <!-- design process steps-->
                        <ul class="nav nav-tabs process-model more-icon-preocess" role="tablist">
                            <?php if (!$this->session->userdata('UserIsLogged')) { ?>
                            <li id="login-step" role="presentation" class="active">
                                <a href="#discover" aria-controls="discover" role="tab" data-toggle="tab">
                                    <i class="" aria-hidden="true"></i>
                                    <p>ورود</p>
                                </a>
                            </li>
                            <li id="login-step"  role="presentation">
                                <a href="#strategy" aria-controls="strategy" role="tab" data-toggle="tab">
                                    <i class="" aria-hidden="true">
                                        <span class="step-by-step-inner-circle"></span>
                                    </i>
                                    <p>اطلاعات سفارش دهنده</p>
                                </a>
                            </li>
                            <?php } else{ ?>
                                <li role="presentation">
                                    <a href="#discover" aria-controls="discover" role="tab" data-toggle="tab">
                                        <i class="" aria-hidden="true"></i>
                                        <p>ورود</p>
                                    </a>
                                </li>
                                <li role="presentation"  class="active">
                                    <a href="#strategy" aria-controls="strategy" role="tab" data-toggle="tab">
                                        <i class="" aria-hidden="true">
                                            <span class="step-by-step-inner-circle"></span>
                                        </i>
                                        <p>اطلاعات سفارش دهنده</p>
                                    </a>
                                </li>
                            <?php }  ?>
                            <li role="presentation">
                                <a href="#optimization" aria-controls="optimization" role="tab" data-toggle="tab">
                                    <i class="" aria-hidden="true">
                                        <span class="step-by-step-inner-circle"></span>
                                    </i>
                                    <p>اطلاعات ارسال</p>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#content" aria-controls="content" role="tab" data-toggle="tab">
                                    <i class="" aria-hidden="true">
                                        <span class="step-by-step-inner-circle"></span>
                                    </i>
                                    <p>نحوه ارسال</p>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#reporting" aria-controls="reporting" role="tab" data-toggle="tab">
                                    <i class="" aria-hidden="true">
                                        <span class="step-by-step-inner-circle"></span>
                                    </i>
                                    <p>نحوه پرداخت</p>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#reporting2" aria-controls="reporting2" role="tab" data-toggle="tab">
                                    <i class="" aria-hidden="true">
                                        <span class="step-by-step-inner-circle"></span>
                                    </i>
                                    <p>بازبینی سفارش</p>
                                </a>
                            </li>
                        </ul>
                        <!-- end design process steps-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12 step-padding-div">
                        <div class="col-md-12 col-xs-12 margin-t-5 step-padding-style-all-div" id="left-side">
                            <?php if (!$this->session->userdata('UserIsLogged')) { ?>
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="col-md-12 col-xs-12 padding-0 margin-b-10">
                                        <div class="col-md-12 col-xs-12" style="height: 45px;background-color: #286246">
                                            <div class="step-inner-circle">
                                                <span>1</span>
                                            </div>
                                            <div class="col-md-12 col-xs-12  height100">
                                                <div class="col-md-12 col-xs-12 height100">
                                                    <div class="col-md-12 col-xs-12 height100 step-text-p">
                                                        <p>پرداخت به صورت مهمان یا با عضویت</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-12 col-xs-12 padding-0 margin-b-10">
                                        <div class="col-md-8 col-xs-12 step-payment-div-main step-payment-div-main-big">
                                            <div class="col-md-12 col-xs-12 step-payment-div ">
                                                <div class="col-md-9 col-xs-12 step-general-specifications">
                                                    <div class="discount-login-image-div step-login-image-div">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <div class="col-md-9 col-xs-12 profile-public-desc-left-text">
                                                        <p>ورود به حساب کاربری</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-xs-12 ">
                                                    <div class="col-md-12 col-xs-12 step-form">
                                                        <div class="form-group">
                                                            <label>پست الترونیک :</label>
                                                            <input class="form-control" type="text">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>رمز عبور :</label>
                                                            <input class="form-control" type="number" min="0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="checkboxes">
                                                    <div class="col-md-6 col-xs-12 ">
                                                        <div class="col-md-12 col-xs-12 step-forget-password">
                                                            <p>رمز عبور را فراموش کرده ام</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-xs-12">
                                                        <div class="col-md-12 col-xs-12">
                                                            <label class="checkbox-container profile-address-checkbox step-remember-me-text">
                                                                مرا به خاطر بسپار
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-xs-12 text-left step-one-login-continue-button step-one-login-continue-button-different-color">
                                                    <button class="btn step-button-continue">
                                                        ورود و ادامه
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 step-payment-div-main">
                                            <div class="col-md-12 col-xs-12 step-payment-div">
                                                <div class="col-md-12 col-xs-12 step-general-specifications">
                                                    <div class="discount-login-image-div">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <div class="col-md-9 col-xs-12 profile-public-desc-left-text">
                                                        <p>پرداخت با عضویت در کوفا</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-xs-12 step-discount-text">
                                                    <p>10 درصد تخفیف اولین خرید</p>
                                                </div>
                                                <div class="col-md-12 col-xs-12 step-discount-des">
                                                    <p>در این صورت از مزایای اعضا کوفا برای خرید 10 درصد تخفیف اولین خرید تخفیف های حراجی خرید ساده تر دریافت بنفا (امتیاز خرید رایگان) پیگیری سفارشات و بسیاری مزایای دیگر بی نسیب خواهید ماند</p>
                                                </div>
                                                <div class="col-md-12 col-xs-12 text-center step-one-login-continue-button">
                                                    <button class="btn step-button-continue step-button-margin-top-2 ">
                                                        عضویت و ادامه
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <div style="display: none;" class="panel">
                                <div class="panel-heading">
                                    <div class="col-md-12 col-xs-12 padding-0 margin-b-10">
                                        <div class="col-md-12 col-xs-12" style="height: 45px;background-color: #286246">
                                            <div class="step-inner-circle">
                                                <span>2</span>
                                            </div>
                                            <div class="col-md-12 col-xs-12  height100">
                                                <div class="col-md-12 col-xs-12 height100">
                                                    <div class="col-md-12 col-xs-12 height100 step-text-p">
                                                        <p>مشخصات سفارش دهنده / عضویت</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-12 col-xs-12 padding-0 margin-b-10">
                                        <div class="col-md-12 col-xs-12 step-payment-div-main step-payment-div-main-big">
                                            <div class="col-md-12 col-xs-12 step-payment-div">

                                                <form class="well form-horizontal contact_form">
                                                    <fieldset>
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">نام :
                                                                <span class="text-danger">
                                                            <b class="text-danger">*</b>
                                                        </span>
                                                            </label>
                                                            <div class="col-md-4 col-xs-12 inputGroupContainer">
                                                                <div class="input-group">
                                                                    <input name="first_name" class="form-control" type="text">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Text input-->

                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">نام خانوادگی :
                                                                <span class="text-danger">
                                                            <b class="text-danger">*</b>
                                                        </span>
                                                            </label>
                                                            <div class="col-md-4 col-xs-12 inputGroupContainer">
                                                                <div class="input-group">
                                                                    <input name="last_name" class="form-control" type="text">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">پست الکترونیک :
                                                                <span class="text-danger">
                                                            <b class="text-danger">*</b>
                                                        </span>
                                                            </label>
                                                            <div class="col-md-4 col-xs-12 inputGroupContainer">
                                                                <div class="input-group">
                                                                    <input name="email" class="form-control" type="text">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Text input-->

                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">نام کاربری :
                                                                <span class="text-danger">
                                                            <b class="text-danger">*</b>
                                                        </span>
                                                            </label>
                                                            <div class="col-md-4 col-xs-12 inputGroupContainer">
                                                                <div class="input-group">
                                                                    <input name="user_name" class="form-control" type="text">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Text input-->

                                                        <!-- Text input-->

                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">رمز عبور :
                                                                <span class="text-danger">
                                                            <b class="text-danger">*</b>
                                                        </span>
                                                            </label>
                                                            <div class="col-md-4 col-xs-12 inputGroupContainer">
                                                                <div class="input-group">
                                                                    <input name="phone" class="form-control" min="0" type="number" placeholder="&#xf06e">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Text input-->

                                                        <!-- Text input-->

                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">شماره تلفن ثابت :
                                                                <span class="text-danger">
                                                            <b class="text-danger">*</b>
                                                        </span>
                                                            </label>
                                                            <div class="col-md-4 col-xs-12 inputGroupContainer">
                                                                <div class="input-group">
                                                                    <input name="phone" class="form-control" min="0" type="number">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Text input-->

                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">شماره تلفن همراه :
                                                                <span class="text-danger">
                                                            <b class="text-danger">*</b>
                                                        </span>
                                                            </label>
                                                            <div class="col-md-4 col-xs-12  inputGroupContainer">
                                                                <div class="input-group">
                                                                    <input name="phone-number" class="form-control" min="0" type="number">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Select Basic -->

                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">تاریخ تولد :
                                                                <span class="text-danger">
                                                            <b class="text-danger">*</b>
                                                        </span>
                                                            </label>
                                                            <div class="col-md-1 col-xs-2 selectContainer rightFloat padding-left">
                                                                <div class="input-group">
                                                                    <select name="state" class="form-control selectpicker">
                                                                        <option value=" ">روز</option>
                                                                        <option>Alabama</option>
                                                                        <option>Alaska</option>
                                                                        <option>Arizona</option>
                                                                        <option>Arkansas</option>
                                                                        <option>California</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-xs-3 selectContainer rightFloat">
                                                                <div class="input-group">
                                                                    <select name="state" class="form-control selectpicker">
                                                                        <option value=" ">ماه</option>
                                                                        <option>Alabama</option>
                                                                        <option>Alaska</option>
                                                                        <option>Arizona</option>
                                                                        <option>Arkansas</option>
                                                                        <option>California</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-1 col-xs-3 selectContainer rightFloat padding-right">
                                                                <div class="input-group">
                                                                    <select name="state" class="form-control selectpicker">
                                                                        <option value=" ">سال</option>
                                                                        <option>Alabama</option>
                                                                        <option>Alaska</option>
                                                                        <option>Arizona</option>
                                                                        <option>Arkansas</option>
                                                                        <option>California</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Text input-->

                                                        <!-- radio checks -->
                                                        <div class="form-group gender-div-style">
                                                            <label class="col-md-4 control-label">جنسیت :
                                                                <span class="text-danger">
                                                            <b class="text-danger">*</b>
                                                        </span>
                                                            </label>
                                                            <div class="col-md-6 col-xs-4">
                                                                <div class="radio">
                                                                    <input type="radio" name="hosting" value="no" />
                                                                    <label>مرد</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-xs-4">
                                                                <div class="radio">
                                                                    <input type="radio" name="hosting" value="yes" />
                                                                    <label>زن</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Text area -->

                                                        <!-- Text area -->
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">محل سکونت
                                                                <span class="text-danger">
                                                            <b class="text-danger">*</b>
                                                        </span>
                                                            </label>
                                                            <div class="col-md-2 col-xs-3 selectContainer rightFloat">
                                                                <div class="input-group">
                                                                    <select name="state" class="form-control selectpicker">
                                                                        <option value=" ">استان</option>
                                                                        <option>Alabama</option>
                                                                        <option>Alaska</option>
                                                                        <option>Arizona</option>
                                                                        <option>Arkansas</option>
                                                                        <option>California</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-xs-3 selectContainer rightFloat">
                                                                <div class="input-group">
                                                                    <select name="state" class="form-control selectpicker">
                                                                        <option value=" ">شهر</option>
                                                                        <option>Alabama</option>
                                                                        <option>Alaska</option>
                                                                        <option>Arizona</option>
                                                                        <option>Arkansas</option>
                                                                        <option>California</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Text area -->

                                                        <!-- Text area -->
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">آدرس :
                                                                <span class="text-danger">
                                                            <b class="text-danger">*</b>
                                                        </span>
                                                            </label>
                                                            <div class="col-md-4 col-xs-12 inputGroupContainer">
                                                                <div class="input-group">
                                                                    <textarea class="form-control" name="comment"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Text area -->

                                                        <!-- Text area -->
                                                        <div class="form-group step-form-checkbox">
                                                            <div class="checkboxes">
                                                                <div class="col-md-12 col-xs-12">
                                                                    <div class="col-md-7 col-xs-9 text-right">
                                                                        <label class="checkbox-container">
                                                                            میخواهم این خرید به همین نشانی ارسال شود
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-2 col-xs-1 text-center padding-left">
                                                                        <label class="checkbox-container">
                                                                            <input type="checkbox">
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Text area -->
                                                    </fieldset>
                                                </form>

                                                <div class="col-md-6 col-md-offset-3 col-xs-12 text-center step-form-button">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="col-md-12 col-xs-12">
                                                            <button class="btn pull-left step-button-continue margin-t-0">
                                                                ادامه
                                                            </button>
                                                            <button class="btn pull-right step-button-continue step-button-margin-top-2 back-button-background">
                                                                بازگشت
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="col-md-12 col-xs-12 padding-0 margin-b-10">
                                        <div class="col-md-12 col-xs-12" style="height: 45px;background-color: #286246">
                                            <div class="step-inner-circle">
                                                <span>3</span>
                                            </div>
                                            <div class="col-md-12 col-xs-12  height100">
                                                <div class="col-md-12 col-xs-12 height100">
                                                    <div class="col-md-12 col-xs-12 height100 step-text-p">
                                                        <p>اطلاعات ارسال سفارش</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-12 col-xs-12 padding-0 margin-b-10">
                                        <div class="col-md-12 col-xs-12 step-payment-div-main step-payment-div-main-big">
                                            <div class="col-md-12 col-xs-12 step-payment-div step-padding-style-part-three">
                                                <div class="col-md-6 col-xs-12 pull-right step-address-selection">
                                                    <p>انتخاب نشانی</p>
                                                </div>
                                                <div class="col-md-6 col-xs-12">
                                                    <div class="col-md-12 col-xs-4 padding-0">
                                                        <button class="btn profile-add-address-button">افزودن آدرس جدید
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- for address detail-->
                                                <div class="col-md-12 col-xs-12 margin-t-10">
                                                    <div class="col-md-12 col-xs-12 profile-client-other-detail-div active">
                                                        <div class="col-md-12 col-xs-12 rightFloat profile-padding-important-style">
                                                            <div class="col-md-12 col-xs-12 profile-client-name padding-right">
                                                                <p>جعفر بیک مرادی</p>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 padding-0 profile-client-address">
                                                                <p>به آدرس : استان تهران- شهر تهران -خیابان شهید بهشتی -خیابان صابونچی-(مهناز سابق)بین هفتم و هویزه-پلاک46 واحد4
                                                                </p>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 profile-client-phone padding-right">
                                                                <div class="col-md-4 col-xs-12 padding-right rightFloat">
                                                                    <p>کد پستی: 1234567890</p>
                                                                </div>
                                                                <div class="col-md-4 col-xs-12 padding-right rightFloat">
                                                                    <p>شماره تلفن اضطراری: 09369874563</p>
                                                                </div>
                                                                <div class="col-md-4 col-xs-12 padding-right rightFloat text-left">
                                                                    <p>شماره تلفن ثابت:77453965</p>
                                                                </div>
                                                            </div>
                                                            <label class="">
                                                                <input type="radio" checked="checked" name="radio">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-xs-12 margin-t-10">
                                                    <div class="col-md-12 col-xs-12 profile-client-other-detail-div">
                                                        <div class="col-md-12 col-xs-12 rightFloat profile-padding-important-style">
                                                            <div class="col-md-12 col-xs-12 profile-client-name padding-right">
                                                                <p>جعفر بیک مرادی</p>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 padding-0 profile-client-address">
                                                                <p>به آدرس : استان تهران- شهر تهران -خیابان شهید بهشتی -خیابان صابونچی-(مهناز سابق)بین هفتم و هویزه-پلاک46 واحد4
                                                                </p>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 profile-client-phone padding-right">
                                                                <div class="col-md-4 col-xs-12 padding-right rightFloat">
                                                                    <p>کد پستی: 1234567890</p>
                                                                </div>
                                                                <div class="col-md-4 col-xs-12 padding-right rightFloat">
                                                                    <p>شماره تلفن اضطراری: 09369874563</p>
                                                                </div>
                                                                <div class="col-md-4 col-xs-12 padding-right rightFloat text-left">
                                                                    <p>شماره تلفن ثابت:77453965</p>
                                                                </div>
                                                            </div>
                                                            <label class="">
                                                                <input type="radio" namse="radio">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-xs-12 margin-t-10 ">

                                                    <div class="col-md-12 col-xs-12 profile-client-other-detail-div">
                                                        <div class="col-md-12 col-xs-12 rightFloat profile-padding-important-style step-new-address-panel-div-padding">
                                                            <div class="col-md-12 col-xs-12 profile-client-name padding-right">
                                                                <p>آدرس جدید</p>
                                                            </div>

                                                            <form class="well form-horizontal contact_form">
                                                                <!-- Text input-->
                                                                <div class="form-group">
                                                                    <label class="col-md-4 control-label">نام :
                                                                        <span class="text-danger">
                                                            <b class="text-danger">*</b>
                                                        </span>
                                                                    </label>
                                                                    <div class="col-md-4 col-xs-12 inputGroupContainer">
                                                                        <div class="input-group">
                                                                            <input name="first_name" class="form-control" type="text">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Text input-->

                                                                <div class="form-group">
                                                                    <label class="col-md-4 control-label">نام خانوادگی :
                                                                        <span class="text-danger">
                                                            <b class="text-danger">*</b>
                                                        </span>
                                                                    </label>
                                                                    <div class="col-md-4 col-xs-12 inputGroupContainer">
                                                                        <div class="input-group">
                                                                            <input name="last_name" class="form-control" type="text">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Text input-->

                                                                <!-- Text input-->

                                                                <div class="form-group">
                                                                    <label class="col-md-4 control-label">شماره تلفن ثابت :
                                                                        <span class="text-danger">
                                                            <b class="text-danger">*</b>
                                                        </span>
                                                                    </label>
                                                                    <div class="col-md-4 col-xs-12 inputGroupContainer">
                                                                        <div class="input-group">
                                                                            <input name="phone" class="form-control" min="0" type="number">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Text input-->

                                                                <div class="form-group">
                                                                    <label class="col-md-4 control-label">شماره تلفن همراه :
                                                                        <span class="text-danger">
                                                            <b class="text-danger">*</b>
                                                        </span>
                                                                    </label>
                                                                    <div class="col-md-4 col-xs-12  inputGroupContainer">
                                                                        <div class="input-group">
                                                                            <input name="phone-number" class="form-control" min="0" type="number">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Text input-->

                                                                <!-- Text input-->

                                                                <div class="form-group">
                                                                    <label class="col-md-4 control-label">کد پستی:
                                                                        <span class="text-danger">
                                                            <b class="text-danger">*</b>
                                                        </span>
                                                                    </label>
                                                                    <div class="col-md-4 col-xs-12  inputGroupContainer">
                                                                        <div class="input-group">
                                                                            <input name="postal-code" class="form-control" min="0" type="number">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Text input-->

                                                                <!-- Text area -->
                                                                <div class="form-group">
                                                                    <label class="col-md-4 control-label">محل سکونت
                                                                        <span class="text-danger">
                                                            <b class="text-danger">*</b>
                                                        </span>
                                                                    </label>
                                                                    <div class="col-md-4 col-xs-3 selectContainer rightFloat">
                                                                        <div class="input-group">
                                                                            <select name="state" class="form-control selectpicker">
                                                                                <option value=" ">استان</option>
                                                                                <option>Alabama</option>
                                                                                <option>Alaska</option>
                                                                                <option>Arizona</option>
                                                                                <option>Arkansas</option>
                                                                                <option>California</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Text area -->

                                                                <!-- Text area -->
                                                                <div class="form-group">
                                                                    <label class="col-md-4 control-label">آدرس :
                                                                        <span class="text-danger">
                                                            <b class="text-danger">*</b>
                                                        </span>
                                                                    </label>
                                                                    <div class="col-md-4 col-xs-12 inputGroupContainer">
                                                                        <div class="input-group">
                                                                            <textarea class="form-control" name="comment"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Text area -->

                                                                <!-- Text area -->
                                                                <div class="form-group step-form-checkbox">
                                                                    <div class="checkboxes">
                                                                        <div class="col-md-12 col-xs-12">
                                                                            <div class="col-md-7 col-xs-9 text-right">
                                                                                <label class="checkbox-container">
                                                                                    ذخیره آدرس
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-2 col-xs-1 text-center padding-left">
                                                                                <label class="checkbox-container">
                                                                                    <input type="checkbox">
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Text area -->
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- for address detail-->
                                                <div class="col-md-6 col-md-offset-3 col-xs-12 text-center step-form-button">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="col-md-12 col-xs-12">
                                                            <button class="btn pull-left step-button-continue margin-t-0">
                                                                ادامه
                                                            </button>
                                                            <button class="btn pull-right step-button-continue step-button-margin-top-2 back-button-background">
                                                                بازگشت
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="col-md-12 col-xs-12 padding-0 margin-b-10">
                                        <div class="col-md-12 col-xs-12" style="height: 45px;background-color: #286246">
                                            <div class="step-inner-circle">
                                                <span>4</span>
                                            </div>
                                            <div class="col-md-12 col-xs-12  height100">
                                                <div class="col-md-12 col-xs-12 height100">
                                                    <div class="col-md-12 col-xs-12 height100 step-text-p">
                                                        <p>نحوه ارسال سفارش</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-12 col-xs-12 padding-0 margin-b-10">
                                        <div class="col-md-12 col-xs-12 step-payment-div-main step-payment-div-main-big">
                                            <div class="col-md-12 col-xs-12 step-payment-div padding-t-15">
                                                <div class="col-md-6 col-xs-12 pull-right step-address-selection">
                                                    <p>نحوه ارسال سفارش خود را انتخاب کنید</p>
                                                </div>
                                                <!-- for address detail-->
                                                <div class="col-md-12 col-xs-12 margin-t-10">
                                                    <div class="col-md-12 col-xs-12 profile-client-other-detail-div active">
                                                        <div class="col-md-12 col-xs-12 rightFloat profile-padding-important-style">
                                                            <div class="col-md-12 col-xs-12 padding-0 profile-client-address">
                                                                <p>به آدرس : استان تهران- شهر تهران -خیابان شهید بهشتی -خیابان صابونچی-(مهناز سابق)بین هفتم و هویزه-پلاک46 واحد4

                                                                    <span class="pull-left step-product-toman-text">تومان</span>
                                                                    <span class="pull-left step-product-price">4,300</span>
                                                                </p>

                                                            </div>
                                                            <label class="">
                                                                <input type="radio" checked="checked" name="radio">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- for address detail-->
                                                <div class="col-md-6 col-xs-12 step-send-date-div">
                                                    <div class="col-md-4 col-xs-12 pull-right padding-0">
                                                        <label>انتخاب ساعت ارسال</label>
                                                    </div>
                                                    <div class="col-md-8 col-xs-12 pull-left padding-left padding-response">
                                                        <input class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xs-12 step-send-date-div">
                                                    <div class="col-md-3 col-xs-12 pull-right padding-0">
                                                        <label>انتخاب روز ارسال</label>
                                                    </div>
                                                    <div class="col-md-8 col-xs-12 pull-right padding-response">
                                                        <input class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-xs-12 pull-right step-address-selection margin-t-30">
                                                    <p>ارسال توسط شرکت تیپاکس</p>
                                                </div>
                                                <!-- for address detail-->
                                                <div class="col-md-12 col-xs-12 margin-t-10">
                                                    <div class="col-md-12 col-xs-12 profile-client-other-detail-div">
                                                        <div class="col-md-12 col-xs-12 rightFloat profile-padding-important-style">
                                                            <div class="col-md-12 col-xs-12 padding-0 profile-client-address">
                                                                <p>به آدرس : استان تهران- شهر تهران -خیابان شهید بهشتی -خیابان صابونچی-(مهناز سابق)بین هفتم و هویزه-پلاک46 واحد4

                                                                    <span class="pull-left step-product-toman-text">تومان</span>
                                                                    <span class="pull-left step-product-price">4,300</span>
                                                                </p>

                                                            </div>
                                                            <label class="">
                                                                <input type="radio" checked="checked" name="radio">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-xs-12 margin-t-10">
                                                    <div class="col-md-12 col-xs-12 profile-client-other-detail-div">
                                                        <div class="col-md-12 col-xs-12 rightFloat profile-padding-important-style">
                                                            <div class="col-md-12 col-xs-12 padding-0 profile-client-address">
                                                                <p>به آدرس : استان تهران- شهر تهران -خیابان شهید بهشتی -خیابان صابونچی-(مهناز سابق)بین هفتم و هویزه-پلاک46 واحد4

                                                                    <span class="pull-left step-product-toman-text">تومان</span>
                                                                    <span class="pull-left step-product-price">4,300</span>
                                                                </p>

                                                            </div>
                                                            <label class="">
                                                                <input type="radio" checked="checked" name="radio">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- for address detail-->

                                                <div class="col-md-6 col-md-offset-3 col-xs-12 text-center step-form-button">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="col-md-12 col-xs-12">
                                                            <button class="btn pull-left step-button-continue margin-t-0">
                                                                ادامه
                                                            </button>
                                                            <button class="btn pull-right step-button-continue step-button-margin-top-2 back-button-background">
                                                                بازگشت
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="col-md-12 col-xs-12 padding-0 margin-b-10">
                                        <div class="col-md-12 col-xs-12" style="height: 45px;background-color: #286246">
                                            <div class="step-inner-circle">
                                                <span>5</span>
                                            </div>
                                            <div class="col-md-12 col-xs-12  height100">
                                                <div class="col-md-12 col-xs-12 height100">
                                                    <div class="col-md-12 col-xs-12 height100 step-text-p">
                                                        <p>نحوه پرداخت</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-12 col-xs-12 padding-0 margin-b-10">
                                        <div class="col-md-12 col-xs-12 step-payment-div-main step-payment-div-main-big">
                                            <div class="col-md-12 col-xs-12 step-payment-div padding-t-15">
                                                <div class="col-md-12 col-xs-12 pull-right step-address-selection">
                                                    <p>نحوه پرداخت را مشخص نمایید</p>
                                                </div>
                                                <div class="col-md-2 col-md-offset-5 col-xs-4 col-xs-offset-4" style="border-radius: 5px; background-color: #D3B155;height: 150px;border: 20px solid transparent"></div>
                                                <div class="col-md-6 col-md-offset-3 col-xs-12 text-center step-form-button margin-t-20">
                                                    <button class="btn step-button-continue margin-t-0">
                                                        ادامه
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="col-md-12 col-xs-12 padding-0 margin-b-10">
                                        <div class="col-md-12 col-xs-12" style="height: 45px;background-color: #286246">
                                            <div class="step-inner-circle">
                                                <span>6</span>
                                            </div>
                                            <div class="col-md-12 col-xs-12  height100">
                                                <div class="col-md-12 col-xs-12 height100">
                                                    <div class="col-md-12 col-xs-12 height100 step-text-p">
                                                        <p>بازبینی خرید شما</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-12 col-xs-12 padding-0 margin-b-10">
                                        <div class="col-md-12 col-xs-12 step-payment-div-main step-payment-div-main-big">
                                            <div class="col-md-12 col-xs-12 step-payment-div padding-t-15">
                                                <div class="table-responsive" id="sailorTableArea">
                                                    <table id="sailorTable" class="table table-bordered" width="100%">
                                                        <thead>
                                                        <tr>
                                                            <th colspan="5">نام اثر</th>
                                                            <th>قیمت واحد</th>
                                                            <th>تعداد</th>
                                                            <th>قیمت کل</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr class="active">
                                                            <td colspan="5">کاسه سفالی دست ساز</td>
                                                            <td>4,800</td>
                                                            <td>1</td>
                                                            <td>4,800</td>
                                                        </tr>
                                                        <tr class="active">
                                                            <td colspan="5">کاسه سفالی دست ساز</td>
                                                            <td>4,800</td>
                                                            <td>1</td>
                                                            <td>4,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="7">تخفیف کلاس مشتری</td>
                                                            <td>4,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="7">تخفیف کلاس مشتری</td>
                                                            <td>4,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="7">تخفیف کلاس مشتری</td>
                                                            <td>4,800</td>
                                                        </tr>
                                                        <tr class="active">
                                                            <td colspan="5">کاسه سفالی دست ساز</td>
                                                            <td>4,800</td>
                                                            <td>1</td>
                                                            <td>4,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="7">تخفیف کلاس مشتری</td>
                                                            <td>4,800</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-6 col-xs-12 responsive-payment-div">
                                                    <button class="btn total-payment-price">3,600
                                                        <br>
                                                        <span>تومان</span>
                                                    </button>
                                                    <button class="total-payment ">جمع کل پرداخت</button>
                                                </div>
                                                <div class="col-md-6 col-xs-12 step-forgot-something">
                                                    <P>موردی را فراموش کرده اید ؟
                                                        <a>بازگشت به لیست خرید و ویرایش</a>
                                                    </P>
                                                </div>
                                                <div class="col-md-8 col-md-offset-1 col-xs-12 text-center step-form-button margin-t-30">
                                                    <div class="col-md-11 col-md-offset-1 col-xs-12 padding-response">
                                                        <div class="col-md-12 col-xs-12">
                                                            <button class="btn pull-left step-button-continue margin-t-0 step-six-final-register-button">
                                                                ثبت نهایی سفارش و ورود به درگاه بانک
                                                            </button>
                                                            <button class="btn pull-right step-button-continue step-button-margin-top-2 back-button-background">
                                                                بازگشت
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>