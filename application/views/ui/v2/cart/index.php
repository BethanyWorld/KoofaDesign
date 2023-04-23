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
                        <button id="addDiscountCode" class="cart-product-factor-button height100">ثبت کد تخفیف</button>
                    </div>
                </div>
                <?php } else{ ?>
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
                            <div id="discount-form" class="col-md-12 col-md-offset-0 col-xs-10 col-xs-offset-1 cart-product-factor-main-div">
                                ورود به حساب کاربری
                            </div>
                        </a>
                    </div>
                <?php }  ?>
            </div>
        </div>
    </div>
    <div class="row cart-shopping-product-div">
        <div class="container">
            <div class="col-md-12 col-xs-12 padding-0">
                <div class="<?php if (empty($this->session->userdata('cart'))){ echo 'col-md-12'; } else{ echo 'col-md-9'; }  ?> col-xs-12 RightFloat padding-0" style="padding: 0">
                    <?php if (empty($this->session->userdata('cart'))) { ?>
                        <div style="text-align: center; padding: 30px 10px !important;font-size: 16px;"
                             class="col-md-12 col-md-offset-0 col-xs-8 col-xs-offset-2 padding-0 cart-product-main-div">
                            <p>سبد خرید خالی است.</p>
                            <a href="<?php echo base_url('Category/detail/1/محصولات') ?>">افزودن محصول به سبد خرید</a>
                        </div>
                    <?php } else{
                    $totalPrice = 0;
                    $items = $this->session->userdata('cart');
                    foreach ($items as $item) {
                        $uniqueId = rand(1000, 9999);
                        $totalPrice += $item['productPrice'] * $item['productCount'];
                        ?>
                        <div id="<?php echo $uniqueId; ?>"
                             class="col-md-12 col-md-offset-0 col-xs-8 col-xs-offset-2 padding-0 cart-product-main-div">
                            <div class="col-md-9 col-xs-12 cart-product-detail">
                                <div class="col-md-3 col-xs-12 cart-product-image RightFloat height100 p-0">
                                    <?php if ($item['productUploadImage'] !== null && $item['productUploadImage'] != '') { ?>
                                        <img src="<?php echo $item['productUploadImage']; ?>" />
                                    <?php } else { ?>
                                        <img src="<?php echo $item['productImage']; ?>" />
                                    <?php } ?>
                                </div>
                                <div class="col-md-9 col-xs-12 padding-0 cart-product-title-div"
                                     style="padding-top: 10px;line-height: 25px;">
                                    <div class="col-md-12 col-xs-12 cart-product-title">
                                            <p><?php echo $item['productTitle']; ?></p>
                                    </div>
                                    <div class="col-md-12 col-xs-12 cart-product-desc">
                                        <?php if ($item['productType'] !== 'DesignFreeSize') { ?>
                                            <p><?php echo $item['productSubTitle']; ?></p>
                                        <?php } else { ?>
                                            <p><?php echo $item['productOldWidth'] . "cm x " . $item['productOldHeight']; ?> cm</p>
                                        <?php } ?>
                                        <?php if ($item['productSizeId'] !== '') {
                                            foreach ($allSizes as $size) {
                                                if($size['SizeId'] == $item['productSizeId']){
                                                    echo "<p>سایز:".$size['SizeTitle']."</p>";
                                                }
                                            }
                                        } ?>
                                        <?php if ($item['productMaterialId'] !== '') {
                                            foreach ($allMaterials as $size) {
                                                if($size['MaterialId'] == $item['productMaterialId']){
                                                    echo "<p>جنس:".$size['MaterialTitle']."</p>";
                                                }
                                            }
                                        } ?>
                                    </div>
                                    <div class="col-xs-12" style="margin-top: 10px;">
                                    <span data-product-id="<?php echo $item['productId']; ?>"
                                          class="col-md-4 col-xs-12 cart-shopping-button-div remove-shopping-cart">
                                        <button class="btn cart-shopping-button-remove padding-right">
                                            <span class="fa fa-times pull-right cart-shopping-basket"></span>
                                            حذف
                                        </button>
                                    </span>
                                        <span class="cart-product-main-div-IncrAndDecr">
                                        <button
                                                data-parent-id="<?php echo $uniqueId; ?>"
                                                data-product-id="<?php echo $item['productId']; ?>"
                                                class="cart-product-decrease-increase cart-product-decrease">
                                            <span class="fa fa-minus"></span>
                                        </button>
                                        <input value="<?php echo $item['productCount']; ?>"
                                               type="number" class="text-center cart-product-buy-number"/>
                                        <button
                                                data-parent-id="<?php echo $uniqueId; ?>"
                                                data-product-id="<?php echo $item['productId']; ?>"
                                                class="cart-product-decrease-increase  cart-product-increase">
                                            <span class="fa fa-plus"></span>
                                        </button>
                                    </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-12 cart-product-detail">
                                <div class="col-md-12 col-xs-12 cart-product-number-detail">
                                    <div class="col-md-12 col-xs-12 cart-product-price">
                                    <span class="cart-discount-price" style="padding-top: 4px !important;display: inline-block;">
                                        <span class="cart-toman-price pull-left">
                                            هزینه نصب:
                                            <?php echo number_format($item['productInstallationPrice']); ?> تومان
                                        </span>
                                        <span class="cart-toman-price pull-left">ارسال از ۴ روز کاری آینده</span>
                                        <span class="cart-toman-price-text pull-left">
                                            <?php echo number_format($item['productPrice']); ?>
                                            تومان
                                        </span>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php } ?>
                </div>


                <?php if (!empty($this->session->userdata('cart'))) { ?>
                <div class="col-md-3 col-xs-12" style="direction: rtl">
                    <div class="col-md-12 col-xs-12 cart-product-right-panel">
                        <div class="col-md-12 col-xs-12 cart-product-discount-border-b-div">
                            <div class="col-lg-7 col-md-7 col-xs-12 RightFloat p-0 cart-product-discount-desc">
                                <p class="cart-first-title">جمع کل خرید شما :</p>
                                <div class="clearfix"></div>
                                <p>تخفیف :</p>
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
                            <a href="<?php echo base_url('Cart/payment'); ?>">
                                <button class="btn cart-shopping-button">
                                    خرید خود را نهایی کنید
                                    <span class="fa fa-shopping-basket pull-left"></span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 row product-slider min orange-bg">
            <div class="container">
                <div class="col-xs-12 section">
                    <h2 class="text-center">پیشنهاد برای شما</h2>
                    <div class="col-xs-12 pull-left product-slider list min">
                        <div class="owl-carousel">
                            <?php foreach ($latestProduct as $product) { ?>
                                <a href="<?php echo productUrl($product['ProductId'], $product['ProductTitle']); ?>">
                                    <div class="item-slide" style="background: url('<?php echo $product['ProductMockUpImage']; ?>');"></div>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
