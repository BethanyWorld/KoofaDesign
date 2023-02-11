<?php
$_URL = base_url();
$_DIR = base_url('assets/ui/v2/');
?>
<div id="main">
    <div class="row index-slider-div">
        <div class="container">
            <div class="col-md-12 col-xs-12 padding-0">
                <div class="col-md-9 col-xs-12 body-guarantee-div RightFloat">
                    <div class="row slogans white-bg">
                        <span>
                            <b>سبد خرید</b>
                            <img src="<?php echo $_DIR; ?>assets/img/svg/tick.svg"/>
                        </span>
                        <span>
                            <b>اطلاعات ارسال</b>
                            <img src="<?php echo $_DIR; ?>assets/img/svg/book.svg"/>
                        </span>
                        <span>
                            <b>پرداخت</b>
                            <img src="<?php echo $_DIR; ?>assets/img/svg/truck.svg"/>
                        </span>
                        <span>
                            <b>پایان خرید</b>
                            <img src="<?php echo $_DIR; ?>assets/img/svg/calendar.svg"/>
                        </span>
                    </div>
                </div>
                <?php if (!empty($this->session->userdata('cart'))) { ?>
                    <div class="col-md-3 col-xs-12 finalize-shopping">
                        <div id="discount-form"
                             class="col-md-12 col-md-offset-0 col-xs-10 col-xs-offset-1 cart-product-factor-main-div">
                            <input type="text" id="inputDiscountCode" name="inputDiscountCode" class="discount-input">
                            <button id="addDiscountCode" class="cart-product-factor-button height100">ثبت کد تخفیف
                            </button>
                        </div>
                    </div>
                <?php } else { ?>
                    <style>
                        .cart-product-factor-main-div {
                            background: #35bfa3;
                            padding: 22px 0 !important;
                            margin: 15px 0;
                            border-radius: 5px;
                            height: 65px;
                            text-align: center;
                            color: #fff;

                        }
                    </style>
                    <div class="col-md-3 col-xs-12 finalize-shopping">
                        <a href="<?php echo base_url('Account/login'); ?>">
                            <div id="discount-form"
                                 class="col-md-12 col-md-offset-0 col-xs-10 col-xs-offset-1 cart-product-factor-main-div">
                                ورود به حساب کاربری
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="row cart-shopping-product-div">
        <div class="container">
            <div class="col-md-12 col-xs-12 padding-0">
                <div class="<?php if (empty($this->session->userdata('cart'))) {
                    echo 'col-md-12';
                } else {
                    echo 'col-md-9';
                } ?> col-xs-12 RightFloat p-0">

                    <!-- for address detail-->
                    <?php foreach ($sendMethods as $sendMethod) { ?>
                        <div class="col-md-12 col-xs-12" style="background: #fff;padding: 20px 20px;direction: rtl;margin-bottom: 10px;">
                            <p>
                                <?php echo $sendMethod['OrderSendMethodTitle']; ?>
                                <span class="step-product-toman-text">تومان</span>
                                <span class="step-product-price">
                                        <?php echo number_format($sendMethod['OrderSendMethodPrice']); ?>
                                    </span>
                            </p>
                            <label style="position: absolute;left: 0;top: 0;bottom: 0;margin: auto;padding: 20px 32px;cursor: pointer;border: 2px solid #35bfa3;">
                                <input value="<?php echo $sendMethod['OrderSendMethodId']; ?>" type="radio" name="radio">
                            </label>
                        </div>
                    <?php } ?>
                    <!-- for address detail-->
                </div>

                <?php if (!empty($this->session->userdata('cart'))) { ?>
                    <?php
                    $totalPrice = 0;
                    $items = $this->session->userdata('cart');
                    foreach ($items as $item) {
                        $uniqueId = rand(1000, 9999);
                        $totalPrice += $item['productPrice'] * $item['productCount'];
                    }
                    ?>
                    <div class="col-md-3 col-xs-12" style="direction: rtl;">
                        <div class="col-md-12 col-xs-12 cart-product-right-panel">

                            <div class="col-md-12 col-xs-12 padding-0 cart-product-discount-border-b-div">
                                <div class="col-lg-7 col-md-7 col-xs-12 RightFloat p-0 cart-product-discount-desc">
                                    <p class="cart-first-title">جمع کل خرید شما :</p>
                                    <div class="clearfix"></div>
                                    <p>تخفیف حراجی کوفا :</p>
                                    <div class="clearfix"></div>
                                    <p>تخفیف اعتباری کوفا :</p>
                                    <div class="clearfix"></div>
                                    <p>اعمال کارت تخفیف :</p>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-xs-12 p-0 cart-product-discount-desc cart-product-discount-price">
                                    <p class="cart-first-title">
                                        <span class="total-price"><?php echo number_format($totalPrice); ?></span>
                                        <span>تومان</span>
                                    </p>
                                    <div class="clearfix"></div>
                                    <p>0
                                        <span>تومان</span>
                                    </p>
                                    <div class="clearfix"></div>
                                    <p>
                                        0
                                        <span>تومان</span>
                                    </p>
                                    <div class="clearfix"></div>
                                    <p>
                                        0
                                        <span>تومان</span>
                                    </p>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12 cart-product-amount-payable-text">
                                <p>مبلغ قابل پرداخت :</p>
                            </div>
                            <div class="col-md-12 col-xs-12 cart-product-amount-payable-price">
                                <p>
                                    <span class="total-price"><?php echo number_format($totalPrice); ?></span>
                                    <span>تومان</span>
                                </p>
                            </div>
                            <div class="col-md-12 col-xs-12 cart-left-panel-button">
                                <button id="select-send-method" class="btn cart-shopping-button">
                                    ادامه خرید
                                    <span class="fa fa-shopping-basket pull-left"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
