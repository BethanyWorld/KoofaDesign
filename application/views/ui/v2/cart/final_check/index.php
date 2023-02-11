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

        <div class="container white-bg">
            <?php
            foreach ($userAddress as $item) {
                if($item['AddressId'] == $this->session->userdata('addressId')){
                ?>
                <div class="col-md-12 col-xs-12" style="direction: rtl;padding: 10px 0;">
                    <div class="col-md-12 col-xs-12">
                        <div class="col-md-12 col-xs-12 p-0">
                            <strong style="font-weight: 900;font-size: 16px;text-shadow: 0px 0px 1px #000;margin: 10px 0 !important;display: block;">
                                اطلاعات خریدار
                            </strong>
                        </div>
                        <div class="col-md-12 col-xs-12 p-0">
                            <p style="color: #6f6f6f;">
                                <i class="fa fa-user"></i>
                                <?php echo $item['AddressFullName']; ?>
                            </p>
                        </div>
                        <div class="col-md-12 col-xs-12 p-0">
                            <p style="color: #6f6f6f;"><?php echo $item['Address']; ?></p>
                        </div>
                        <div class="col-md-12 col-xs-12 p-0">
                            <span>کد پستی: <?php echo $item['AddressPostalCode']; ?></span>
                            <span>شماره تلفن اضطراری: <?php echo $item['AddressPhone']; ?></span>
                            <span>شماره تلفن ثابت:<?php echo $item['AddressHomePhone']; ?></span>
                        </div>
                        <div class="col-xs-12 padding-0"
                             style="border-bottom: 2px solid #ccc; margin: 10px 15px;padding: 10px 0px !important;width: calc(100% - 30px);"></div>
                    </div>
                </div>
            <?php } } ?>
            <div class="col-md-12 col-xs-12" style="direction: rtl;padding: 10px 0;">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="text-center">محصول</th>
                        <th class="fit">قیمت واحد</th>
                        <th class="fit">تعداد</th>
                        <th class="fit">قیمت کل</th>
                    </tr>
                    </thead>
                    <tbody>
                    <style>
                        table .fit{
                            width: 1%;
                            white-space: nowrap;
                            text-align: center;
                            vertical-align: middle !important;
                        }
                        .table>thead>tr>th {
                            background: #ccc;
                        }
                        .table>thead>tr>td,
                        .table>thead>tr>th {
                            border: 5px solid #fff;
                        }
                    </style>
                    <?php
                    $totalPrice = 0;
                    $items = $this->session->userdata('cart');
                    foreach ($items as $item) {
                        $uniqueId = rand(1000, 9999);
                        $totalPrice += $item['productPrice'] * $item['productCount'];
                        ?>
                        <tr>
                            <td>
                                <?php if ($item['productUploadImage'] != null && $item['productUploadImage'] != '') { ?>
                                    <img src="<?php echo $item['productUploadImage']; ?>"
                                         style="height: 85px;width: 85px;border: 10px solid #fff;    max-width: 100%;"/>
                                <?php } else { ?>
                                    <img src="<?php echo $item['productImage']; ?>"
                                         style="height: 85px;width: 85px;border: 10px solid #fff;    max-width: 100%;"/>
                                <?php } ?>

                                <?php echo $item['productTitle']; ?>
                            </td>
                            <td class="fit">
                                <?php echo number_format($item['productPrice']); ?> تومان
                            </td>
                            <td class="fit"><?php echo $item['productCount']; ?></td>
                            <td class="fit">
                                <?php echo number_format($item['productPrice'] * $item['productCount']); ?> تومان
                            </td>
                        </tr>
                    <?php }
                    $this->session->set_userdata('totalPrice' , $totalPrice);
                    ?>
                    <tr>
                        <td></td>
                        <td class="fit" colspan="2" style="color: red">مجموع تخفیف</td>
                        <td class="fit">
                            0 تومان
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="fit" colspan="2">جمع قابل پرداخت</td>
                        <td style="padding: 30px 30px !important;background: #5dc0a4;color: #fff;font-size: 18px;" class="fit">
                            <?php echo number_format($totalPrice); ?> تومان
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <div class="container">
            <style>
                .cart-shopping-button {
                    width: max-content !important;
                    height: 100% !important;
                    background-color: #fd4a1a !important;
                    color: #fff !important;
                    line-height: 30px !important;
                    border-radius: 3px !important;
                    border: none !important;
                    outline: 0 !important;
                    font-size: 16px !important;
                    padding: 6px 30px !important;
                }
                .cart-back-button {
                    width: max-content !important;
                    height: 100% !important;
                    background-color: #e0d9db !important;
                    color: #000 !important;
                    line-height: 30px !important;
                    border-radius: 3px !important;
                    border: none !important;
                    outline: 0 !important;
                    font-size: 15px !important;
                    padding: 6px 30px !important;
                }
            </style>
        </div>


        <div class="container">
            <div class="col-xs-12 padding-0" style="margin: 20px 0;">
                <a href="<?php echo base_url('Cart/startPayment'); ?>" class="hidden-sm hidden-xs">
                    <button class="btn pull-left cart-shopping-button final-check-button">
                        پرداخت و پایان خرید
                    </button>
                </a>
                <a href="<?php echo base_url('Cart/startPayment'); ?>" class="visible-sm visible-xs">
                    <button class="btn pull-left final-check-button">
                        پرداخت و پایان خرید
                    </button>
                </a>

                <a onclick="window.history.back();" class="btn cart-back-button pull-right hidden-sm hidden-xs">
                    بازگشت به اطلاعات ارسال
                </a>
                <p class="text-center">
                    <a onclick="window.history.back();" class=" visible-sm visible-xs">
                        بازگشت به اطلاعات ارسال
                    </a>
                </p>
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
                                    <div class="item-slide"
                                         style="background: url('<?php echo $product['ProductMockUpImage']; ?>');"></div>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>