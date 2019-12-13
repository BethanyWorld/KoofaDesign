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
                            <li class="active" role="presentation">
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
                                                        <?php
                                                        $totalPrice = 0;
                                                        $items = $this->session->userdata('cart');
                                                        foreach ($items as $item) {
                                                            $totalPrice += $item['productPrice'] * $item['productCount'];
                                                            ?>
                                                            <tr class="active">
                                                                <td colspan="5"><?php echo $item['productTitle']; ?></td>
                                                                <td><?php echo number_format($item['productPrice']); ?></td>
                                                                <td><?php echo $item['productCount']; ?></td>
                                                                <td><?php echo number_format($item['productPrice']*$item['productCount']); ?></td>
                                                            </tr>
                                                        <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-responsive" id="sailorTableArea">
                                                    <table id="sailorTable" class="table table-bordered" width="100%">
                                                        <thead>
                                                        <tr>
                                                            <th>آدرس</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        foreach ($userAddress as $item) { if($item['AddressId'] == $this->session->userdata('addressId')){ ?>
                                                            <tr class="active">
                                                                <td><?php echo $item['Address']; ?></td>
                                                            </tr>
                                                        <?php  } } ?>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="table-responsive" id="sailorTableArea">
                                                    <table id="sailorTable" class="table table-bordered" width="100%">
                                                        <thead>
                                                        <tr>
                                                            <th>روش ارسال</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        foreach ($sendMethods as $item) {

                                                            if($item['OrderSendMethodId'] == $this->session->userdata('sendMethodId')){
                                                                $array = array(
                                                                    'sendMethodPrice' => $item['OrderSendMethodPrice']
                                                                );
                                                                $this->session->set_userdata($array);
                                                                $totalPrice += $item['OrderSendMethodPrice'];
                                                                ?>
                                                            <tr class="active">
                                                                <td><?php echo $item['OrderSendMethodTitle']; ?> - <?php echo number_format($item['OrderSendMethodPrice']); ?></td>
                                                            </tr>
                                                        <?php  } } ?>
                                                        </tbody>
                                                    </table>
                                                </div>



                                                <div class="col-md-6 col-xs-12 responsive-payment-div">
                                                    <button class="btn total-payment-price">
                                                        <?php
                                                        $array = array(
                                                            'totalPrice' => $totalPrice
                                                        );
                                                        $this->session->set_userdata($array);
                                                        echo number_format($totalPrice);
                                                        ?>
                                                        <br>
                                                        <span>تومان</span>
                                                    </button>
                                                    <button class="total-payment ">جمع کل پرداخت</button>
                                                </div>
                                                <div class="col-md-6 col-xs-12 step-forgot-something">
                                                    <p style="text-align: right;padding: 0 7px;">
                                                        موردی را فراموش کرده اید ؟
                                                        <a href="<?php echo base_url('Cart'); ?>">بازگشت به لیست خرید و ویرایش</a>
                                                    </p>
                                                </div>
                                                <div class="col-xs-12 text-center step-form-button margin-t-30">
                                                    <div class="col-md-12 col-xs-12">
                                                        <a href="<?php echo base_url('Cart/startPayment'); ?>">
                                                            <button class="btn pull-left step-button-continue margin-t-0 step-six-final-register-button">
                                                                پرداخت
                                                            </button>
                                                        </a>
                                                            <button onclick="window.history.back()" class="btn pull-right step-button-continue step-button-margin-top-2 back-button-background">
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