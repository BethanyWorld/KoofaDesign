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
                <?php if (empty($this->session->userdata('cart'))) {  ?>
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
                } ?> col-xs-12 RightFloat p-0" style="background: #fff;">
                    <?php foreach ($userAddress as $item) { ?>
                        <div class="col-md-12 col-xs-12" style="direction: rtl;padding: 10px 0;">
                            <div class="col-md-12 col-xs-12">
                                <div class="col-md-12 col-xs-12 p-0">
                                    <strong style="font-weight: 900;font-size: 16px;text-shadow: 0px 0px 1px #000;margin: 10px 0 !important;display: block;">
                                        آدرس تحویل مشتری
                                    </strong>
                                </div>
                                <div class="col-md-12 col-xs-12 p-0">
                                    <p style="color: #6f6f6f;"><?php echo $item['Address']; ?></p>
                                </div>
                                <div class="col-md-12 col-xs-12 p-0">
                                    <p style="color: #6f6f6f;">
                                        <i class="fa fa-user"></i>
                                        <?php echo $item['AddressFullName']; ?>
                                    </p>
                                </div>
                                <div class="col-md-12 col-xs-12 p-0  hidden">
                                    <div class="col-md-4 col-xs-12 p-0">
                                        <p>کد پستی: <?php echo $item['AddressPostalCode']; ?></p>
                                    </div>
                                    <div class="col-md-4 col-xs-12 p-0">
                                        <p>شماره تلفن اضطراری: <?php echo $item['AddressPhone']; ?></p>
                                    </div>
                                    <div class="col-md-4 col-xs-12 p-0">
                                        <p>شماره تلفن ثابت:<?php echo $item['AddressHomePhone']; ?></p>
                                    </div>
                                </div>
                                <label class="address-label" for="address-<?php echo $item['AddressId']; ?>" style="position: absolute;left: 0;top: 0;bottom: 0;margin:
                                 auto;padding: 40px 32px;cursor: pointer;border: 2px solid #35bfa3;">
                                    <input  id="address-<?php echo $item['AddressId']; ?>" value="<?php echo $item['AddressId']; ?>" type="radio" name="address">
                                </label>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="col-xs-12 padding-0" style="border-bottom: 2px solid #ccc; margin: 10px 15px;padding: 10px 0px !important;width: calc(100% - 30px);">
                        <a href="<?php echo base_url('User/Home/address'); ?>" style="width: max-content;height: 100%;background-color: #fd4a1a !important;color: #fff;line-height: 30px;border-radius: 3px; border: none;outline: 0;font-size: 13px;padding: 2px 6px;">
                            افزودن آدرس جدید
                        </a>
                    </div>


                    <!-- for address detail-->
                    <?php foreach ($shipments as $sendMethod) { ?>
                        <div class="col-md-3 col-xs-12 pull-right" style="background: #fff;padding: 20px 20px;direction: rtl;margin-bottom: 10px;">
                            <label for="method-<?php echo $sendMethod['Shipment']; ?>">
                                <p>
                                    <?php echo pipeEnum('shipment' , $sendMethod['Shipment']); ?>
                                </p>
                                <input id="method-<?php echo $sendMethod['Shipment']; ?>" value="<?php echo $sendMethod['Shipment']; ?>" type="radio" name="send-method">
                            </label>
                        </div>
                    <?php } ?>
                    <!-- for address detail-->


                </div>

                <?php
                if (!empty($this->session->userdata('cart'))) { ?>
                    <?php
                    $totalPrice = 0;
                    $items = $this->session->userdata('cart');
                    foreach ($items as $item) {
                        $uniqueId = rand(1000, 9999);
                        $totalPrice += $item['productPrice'] * $item['productCount'];
                    }

                    $discount = $this->session->userdata('CartDiscount');

                    if(!empty($discount)){
                        if($discount['DiscountPercent'] != null && $discount['DiscountPercent'] > 0){
                            $discoutnPrice  =  $totalPrice * ($discount['DiscountPercent']/100) ;
                        }
                        if($discount['DiscountPrice'] != null && $discount['DiscountPrice'] > 0){
                            $discoutnPrice  = $discount['DiscountPrice'];
                        }
                    }
                    ?>
                    <div class="col-md-3 col-xs-12" style="direction: rtl;">
                        <div class="col-md-12 col-xs-12 cart-product-right-panel">
                            <div class="col-md-12 col-xs-12 padding-0 cart-product-discount-border-b-div">
                                <div class="col-lg-7 col-md-7 col-xs-12 RightFloat p-0 cart-product-discount-desc">
                                    <p class="cart-first-title">جمع کل خرید شما :</p>
                                    <div class="clearfix"></div>
                                    <p>تخفیف :</p>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-xs-12 p-0 cart-product-discount-desc cart-product-discount-price">
                                    <p class="cart-first-title">
                                        <span class="total-price"><?php echo number_format($totalPrice); ?></span>
                                        <span>تومان</span>
                                    </p>
                                    <div class="clearfix"></div>
                                    <p>
                                        <span class="total-price"><?php echo number_format($discoutnPrice); ?></span>
                                        <span>تومان</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12 cart-product-amount-payable-text">
                                <p>مبلغ قابل پرداخت :</p>
                            </div>
                            <div class="col-md-12 col-xs-12 cart-product-amount-payable-price">
                                <p>
                                    <span class="total-price"><?php echo number_format($totalPrice - $discoutnPrice); ?></span>
                                    <span>تومان</span>
                                </p>
                            </div>
                            <div class="col-md-12 col-xs-12 cart-left-panel-button">
                                <button id="select-address" class="btn cart-shopping-button">
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
