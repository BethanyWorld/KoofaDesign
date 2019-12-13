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
                                                <?php foreach ($sendMethods as $sendMethod) { ?>
                                                    <div class="col-md-12 col-xs-12 margin-t-10">
                                                        <div class="col-md-12 col-xs-12 profile-client-other-detail-div">
                                                            <div class="col-md-12 col-xs-12 rightFloat profile-padding-important-style">
                                                                <div class="col-md-12 col-xs-12 padding-0 profile-client-address">
                                                                    <p>
                                                                        <?php echo $sendMethod['OrderSendMethodTitle']; ?>
                                                                        <span class="pull-left step-product-toman-text">تومان</span>
                                                                        <span class="pull-left step-product-price">
                                                                            <?php echo number_format($sendMethod['OrderSendMethodPrice']); ?>
                                                                        </span>
                                                                    </p>

                                                                </div>
                                                                <label class="">
                                                                    <input value="<?php echo $sendMethod['OrderSendMethodId']; ?>" type="radio"  name="radio">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <!-- for address detail-->

                                                <div class="col-md-6 col-md-offset-3 col-xs-12 text-center step-form-button">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="col-md-12 col-xs-12">
                                                            <button id="select-send-method" class="btn pull-left step-button-continue margin-t-0">
                                                                ادامه
                                                            </button>
                                                            <button
                                                                    onclick="window.history.back()"
                                                                    class="btn pull-right step-button-continue step-button-margin-top-2 back-button-background">
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