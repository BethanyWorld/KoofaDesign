<?php $_URL = base_url(); $_DIR = base_url('assets/ui/'); ?>
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
                                <li role="presentation">
                                    <a href="#optimization" aria-controls="optimization" role="tab" data-toggle="tab">
                                        <i class="" aria-hidden="true">
                                            <span class="step-by-step-inner-circle"></span>
                                        </i>
                                        <p>اطلاعات ارسال</p>
                                    </a>
                                </li>
                            <?php } else { ?>
                                <li  class="active" role="presentation">
                                    <a href="#discover" aria-controls="discover" role="tab" data-toggle="tab">
                                        <i class="" aria-hidden="true"></i>
                                        <p>ورود</p>
                                    </a>
                                </li>
                                <li  class="active" role="presentation">
                                    <a href="#optimization" aria-controls="optimization" role="tab" data-toggle="tab">
                                        <i class="" aria-hidden="true">
                                            <span class="step-by-step-inner-circle"></span>
                                        </i>
                                        <p>اطلاعات ارسال</p>
                                    </a>
                                </li>
                            <?php } ?>
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
                                            <div class="col-md-12 col-xs-12"
                                                 style="height: 45px;background-color: #286246">
                                                <div class="step-inner-circle">
                                                    <span>1</span>
                                                </div>
                                                <div class="col-md-12 col-xs-12  height100">
                                                    <div class="col-md-12 col-xs-12 height100">
                                                        <div class="col-md-12 col-xs-12 height100 step-text-p">
                                                            <p>پرداخت با عضویت</p>
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
                                                    <div class="col-md-6 col-md-offset-3 col-xs-12">
                                                        <form action="<?php echo base_url('Account/doSubmitTypeLogin') ?>" method="post" class="mini-additional-login form-horizontal">
                                                            <div class="form-group">
                                                                <label for="username" class="control-label">تلفن همراه
                                                                    :</label>
                                                                <input class="form-control" placeholder="09121234567"
                                                                       type="text" name="inputPhone"
                                                                       id="inputPhone">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="password" class="control-label">گذرواژه
                                                                    :</label>
                                                                <input class="form-control" placeholder=""
                                                                       type="password"
                                                                       name="inputPassword"
                                                                       id="inputPassword">
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit"
                                                                        class="btn step-button-continue pull-left">
                                                                    ورود و ادامه
                                                                </button>
                                                            </div>
                                                        </form>
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
                                                        <p>در این صورت از مزایای اعضا کوفا برای خرید 10 درصد تخفیف اولین
                                                            خرید تخفیف های حراجی خرید ساده تر دریافت بنفا (امتیاز خرید
                                                            رایگان) پیگیری سفارشات و بسیاری مزایای دیگر بی نسیب خواهید
                                                            ماند</p>
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
                            <?php } else{ ?>

                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="col-md-12 col-xs-12 padding-0 margin-b-10">
                                            <div class="col-md-12 col-xs-12" style="height: 45px;background-color: #286246">
                                                <div class="step-inner-circle">
                                                    <span>2</span>
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
                                                    <!-- for address detail-->
                                                    <div class="col-md-12 col-xs-12 margin-t-10">
                                                        <?php foreach ($userAddress as $item) { ?>
                                                            <div class="col-md-12 col-xs-12 profile-client-other-detail-div address">
                                                                <div class="col-md-12 col-xs-12 rightFloat profile-padding-important-style">
                                                                    <div class="col-md-12 col-xs-12 profile-client-name padding-right">
                                                                        <p><?php echo $item['AddressFullName']; ?></p>
                                                                    </div>
                                                                    <div class="col-md-12 col-xs-12 padding-0 profile-client-address">
                                                                        <p>
                                                                            <?php echo $item['Address']; ?>
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-12 col-xs-12 profile-client-phone padding-right">
                                                                        <div class="col-md-4 col-xs-12 padding-right rightFloat">
                                                                            <p>کد پستی: <?php echo $item['AddressPostalCode']; ?></p>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 padding-right rightFloat">
                                                                            <p>شماره تلفن اضطراری: <?php echo $item['AddressPhone']; ?></p>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 padding-right rightFloat text-left">
                                                                            <p>شماره تلفن ثابت:<?php echo $item['AddressHomePhone']; ?></p>
                                                                        </div>
                                                                    </div>
                                                                    <label class="">
                                                                        <input value="<?php echo $item['AddressId']; ?>"
                                                                               type="radio" name="radio">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- for address detail-->
                                                    <div class="col-md-6 col-md-offset-3 col-xs-12 text-center step-form-button">
                                                        <div class="col-md-12 col-xs-12">
                                                            <div class="col-md-12 col-xs-12">
                                                                <button id="select-address" class="btn pull-left step-button-continue margin-t-0">
                                                                    ادامه
                                                                </button>
                                                                <a href="<?php echo base_url('Cart'); ?>">
                                                                    <button class="btn pull-right step-button-continue step-button-margin-top-2 back-button-background">
                                                                        بازگشت
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }  ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>