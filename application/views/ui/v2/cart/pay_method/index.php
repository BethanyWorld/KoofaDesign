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
                            <li class="active" role="presentation">
                                <a href="#discover" aria-controls="discover" role="tab" data-toggle="tab">
                                    <i class="" aria-hidden="true"></i>
                                    <p>ورود</p>
                                </a>
                            </li>
                            <li class="active" role="presentation">
                                <a href="#optimization" aria-controls="optimization" role="tab" data-toggle="tab">
                                    <i class="" aria-hidden="true">
                                        <span class="step-by-step-inner-circle"></span>
                                    </i>
                                    <p>اطلاعات ارسال</p>
                                </a>
                            </li>
                            <li class="active" role="presentation">
                                <a href="#content" aria-controls="content" role="tab" data-toggle="tab">
                                    <i class="" aria-hidden="true">
                                        <span class="step-by-step-inner-circle"></span>
                                    </i>
                                    <p>نحوه ارسال</p>
                                </a>
                            </li>
                            <li class="active" role="presentation">
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
                            <div clsass="panel">
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
                                                <div class="col-md-2 col-md-offset-5 col-xs-4 col-xs-offset-4">
                                                    <img width="100%" src="https://api.nuget.org/v3-flatcontainer/zarinpal/2.0.4/icon" />
                                                </div>
                                                <div class="col-md-6 col-md-offset-3 col-xs-12 text-center step-form-button margin-t-20">
                                                    <a href="<?php echo base_url('Cart/finalCheck'); ?>">
                                                        <button class="btn step-button-continue margin-t-0">
                                                            ادامه
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
                </div>
            </div>
        </div>
    </div>
</div>