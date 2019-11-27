<?php $_URL = base_url(); $_DIR = base_url('assets/ui/');  ?>

<div id="main" style="min-height: 100vh;">
    <div class="row index-slider-div">
        <div class="container">
            <div class="col-md-12 col-xs-12 padding-0">
                <div class="col-md-9 col-xs-12 body-guarantee-div RightFloat">
                    <div class="col-md-12 col-xs-12 padding-0">
                        <ul class="body-guarantee">
                            <li class="col-md-3 col-xs-3">
                                <img src="<?php echo $_DIR; ?>images/delivery1.png"/>
                                <a href="">ضمانت بازگشت</a>
                            </li>
                            <li class="col-md-3 col-xs-3">
                                <img src="<?php echo $_DIR; ?>images/delivery2.png"/>
                                <a href="">تحویل اکسبرس</a>
                            </li>
                            <li class="col-md-3 col-xs-3">
                                <img src="<?php echo $_DIR; ?>images/delivery3.png"/>
                                <a href="">پرداخـت در محل</a>
                            </li>
                            <li class="col-md-3 col-xs-3">
                                <img src="<?php echo $_DIR; ?>images/delivery1.png"/>
                                <a href="">تضمین ضمانت</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 finalize-shopping">
                    <button class="btn cart-shopping-button">
                        خرید خود را نهایی کنید
                        <span class="fa fa-shopping-basket pull-left"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row cart-shopping-product-div">
        <div class="container">
            <div class="col-md-12 col-xs-12 padding-0">
                <div class="col-md-9 col-xs-12 RightFloat padding-0">

                    <?php foreach ($this->session->userdata('cart') as $item) { ?>
                        <div class="col-md-12 col-md-offset-0 col-xs-8 col-xs-offset-2 padding-0 cart-product-main-div">
                            <div class="col-md-5 col-xs-12 cart-product-detail">
                                <div class="col-md-4 col-xs-12 cart-product-image RightFloat height100 padding-0">
                                    <a href="" target="_blank">
                                        <img src="<?php echo $item['productImage']; ?>" height="100%" width="100%"/>
                                    </a>
                                </div>
                                <div class="col-md-8 col-xs-12 padding-0 cart-product-title-div">
                                    <div class="col-md-12 col-xs-12 cart-product-title">
                                        <a href="" target="_blank">
                                            <p><?php echo $item['productTitle']; ?></p>
                                        </a>
                                    </div>
                                    <div class="col-md-12 col-xs-12 cart-product-desc">
                                        <p>محصول <?php echo productTypePipe($item['productType']); ?></p>
                                        <div class="clearfix"></div>
                                        <p><?php echo $item['productTitle']; ?>34</p>
                                        <div class="clearfix"></div>
                                        <p><?php echo $item['productTitle']; ?></p>
                                    </div>
                                    <div class="col-md-12 col-xs-12 cart-product-price">
                                        <div>قیمت :
                                            <span class="cart-discount-price">
                                            <span class="cart-toman-price pull-left">تومان</span>
                                            <span class="pull-left"><?php echo number_format($item['productPrice']); ?></span>
                                            <span class="cart-main-price pull-left"><?php echo number_format($item['productPrice']); ?></span>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12 cart-product-detail">
                                <div class="col-md-12 col-xs-12 cart-second-title">
                                    <p>خدمات ویژه کوفا :</p>
                                </div>
                                <div class="col-md-12 col-xs-12 cart-second-desc">
                                    <p>7 روز ضمانت تعویض کالا</p>
                                    <div class="clearfix"></div>
                                    <p>ضمانت اصالت کالا</p>
                                    <div class="clearfix"></div>
                                    <p>دو بن (هر بن امتیاز 500 تومان)</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-12 cart-product-detail">
                                <div class="col-md-12 col-xs-12 cart-product-number-detail">
                                    <p class="cart-product-number-text">
                                        تعداد :
                                    </p>
                                    <div class="col-lg-11 col-lg-offset-2 col-md-11 col-md-offset-0 col-xs-12  cart-product-main-div-IncrAndDecr">
                                        <button class="cart-product-decrease-increase cart-product-decrease">
                                            <span class="fa fa-minus"></span>
                                        </button>
                                        <input
                                                value="<?php echo $item['productCount']; ?>"
                                                type="number" class="text-center cart-product-buy-number"/>
                                        <button class="cart-product-decrease-increase  cart-product-increase">
                                            <span class="fa fa-plus"></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xs-12 cart-shopping-button-div">
                                    <button class="btn cart-shopping-button padding-right">
                                        خرید خود را نهایی کنید
                                        <span class="fa fa-shopping-basket pull-left cart-shopping-basket"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <!-- برای قسمت سمت راست-->
                <div class="col-md-3 col-xs-12 ">
                    <div class="col-md-12 col-xs-12 cart-product-right-panel">
                        <div class="col-md-12 col-xs-12 cart-product-right-panel-border-b">
                            <div class="col-md-12 col-xs-12 cart-product-discount-card">
                                <p>کارت تخفیف کوفا را دریافت کرده اید ؟</p>
                                <span class="fa fa-question cart-product-question-span"></span>
                            </div>
                            <div class="col-md-12 col-md-offset-0 col-xs-10 col-xs-offset-1 cart-product-factor-main-div">
                                <div class="col-md-6 col-xs-12 padding-0 height100">
                                    <button class="cart-product-factor-button height100">استفاده در این فاکتور</button>
                                </div>
                                <div class="col-md-6 col-xs-12 height100 padding-0 cart-product-factor-text">
                                    <input type="text" name="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12 padding-0 cart-product-discount-border-b-div">
                            <div class="col-lg-7 col-md-7 col-xs-12 RightFloat cart-product-discount-desc">
                                <p class="cart-first-title">جمع کل خرید شما :</p>
                                <div class="clearfix"></div>
                                <p>تخفیف حراجی کوفا :</p>
                                <div class="clearfix"></div>
                                <p>تخفیف اعتباری کوفا :</p>
                                <div class="clearfix"></div>
                                <p>اعمال کارت تخفیف :</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-xs-12 cart-product-discount-desc cart-product-discount-price">
                                <p class="cart-first-title">78,500
                                    <span>تومان</span>
                                </p>
                                <div class="clearfix"></div>
                                <p>13,000
                                    <span>تومان</span>
                                </p>
                                <div class="clearfix"></div>
                                <p>2,000
                                    <span>تومان</span>
                                </p>
                                <div class="clearfix"></div>
                                <p>5,000
                                    <span>تومان</span>
                                </p>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12 cart-product-amount-payable-text">
                            <p>مبلغ قابل پرداخت :</p>
                        </div>
                        <div class="col-md-12 col-xs-12 cart-product-amount-payable-price">
                            <p>58,500
                                <span>تومان</span>
                            </p>
                        </div>
                        <div class="col-md-12 col-xs-12 cart-left-panel-button">
                            <button class="btn cart-shopping-button">
                                خرید خود را نهایی کنید
                                <span class="fa fa-shopping-basket pull-left"></span>
                            </button>
                        </div>
                        <div class="col-md-12 col-xs-12 cart-text-shipping-cost">
                            <p>براساس محل و پیگیری ارسال و تحویل سفارش امکان افزوده شدن هزینه ارسال وجود دارد.</p>
                        </div>
                    </div>
                </div>
                <!-- برای قسمت سمت راست-->
            </div>
        </div>
    </div>
</div>