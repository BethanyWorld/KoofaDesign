<?php $_URL = base_url();
$_DIR = base_url('assets/ui/'); ?>
<div id="main">
    <div class="row">
        <div class="container">
            <?php if($success){  ?>
            <div class="col-md-12 col-xs-12 payment-cong">
                <div class="col-md-10 col-md-offset-1">
                    <div class="col-md-12 col-xs-12 padding-0 payment-cong-text1">
                        <p>از خرید شما سپاسگزاریم </p>
                    </div>
                    <div class="col-md-12 col-xs-12 payment-cong-text2">
                        <p>سفارش شما با موفقیت در کوفا ثبت شد </p>
                    </div>
                    <div class="col-md-12 col-xs-12 padding-0 margin-t-10">
                        <div class="col-md-6 col-xs-12 discount-boxes-div rightFloat">
                            <div class="col-md-12 col-xs-12 discount-oneBox2 padding-0">
                                <div class="col-md-12 col-xs-12 discount-box1-div">
                                    <div class="col-md-12 col-xs-12 height100">
                                        <div class="col-md-12 col-xs-12 height100 discount-factor-text">
                                            <p>فاکتور خرید شما :</p>
                                            <span><?php echo $result['RefId']; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xs-12 discount-box2-div">
                                    <div class="col-md-12 col-xs-12">
                                        <p class="discount-tell-wait">منتظر تماس ما برای هماهنگی تحویل سفارش باشید</p>
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <p class="discount-login-to-profile-text">
                                            با ورود به
                                            <a href="" target="_blank"> پروفایل </a>
                                            سفارش خود را پیگیری کنید</p>
                                    </div>
                                    <div class="col-md-12 col-xs-12 padding-0 discount-question-text">
                                        <p> اگر سوالی دارید میتوانید پاسخ آن را در بخش
                                            <a href="" target="_blank">سوالات سایت</a>
                                            و یبا از طریق شماره 0215455455 و یا ایمیل
                                            <a href="" target="_blank">inf0@koofa.ir</a>
                                            با ما در تماس باشید
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 discount-boxes-div">
                            <div class="col-md-12 col-xs-12 discount-oneBox1">
                                <div class="col-md-12 col-xs-12 discount-box-div-image">
                                    <img src="<?php echo $_DIR; ?>images/delivery1.png" height="121" width="100"/>
                                </div>
                                <div class="col-md-12 col-xs-12 discount-guarantee-text">
                                    <p>7 روز ضمانت بازگشت</p>
                                </div>
                                <div class="col-md-12 col-xs-12 discount-guarantee-desc padding-0">
                                    <p>
                                        سفارش شما با موفقیت در کوفا ثبت شد
                                        سفارش شما با موفقیت در کوفا ثبت شد
                                        سفارش شما با موفقیت در کوفا ثبت شد سفارش شما با موفقیت در <a href=""
                                                                                                     target="_blank">
                                            اینجا </a>کوفا ثبت شد
                                        سفارش شما با موفقیت در کوفا ثبت شد
                                        سفارش شما با موفقیت در کوفا ثبت شدسفارش شما با موفقیت در کوفا ثبت شد
                                        ثبت شدسفارش شما
                                    </p>
                                </div>
                            </div>

                        </div>


                        <div class="col-md-12 co-xs-12">
                            <div class="col-md-12 col-xs-12 discount-login-profile-title">
                                <p>پس از 10 ثانیه به صورت اتوماتیک وارد پروفایلتان خواهید شد </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php } else{  ?>
            <div class="col-md-12 col-xs-12 payment-cong payment-cong3 ">
                <div class="col-md-12 col-xs-12">
                    <div class="col-md-12 col-xs-12 padding-0 discount-error-text">
                        <p>خطا در تست نهایی سفارش </p>
                    </div>
                    <div class="col-md-12 col-xs-12 payment-cong-text2 text-center">
                        <p>سفارش شما در سیستم ثبت نشده است </p>
                        <div class="clearfix"></div>
                        <p>لطفا مجددا اقدام نمایید</p>
                    </div>
                    <div class="col-md-12 col-xs-12 padding-0 margin-t-10">
                        <div class="col-md-4 col-md-offset-4 padding-0 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
                           <a href="<?php echo base_url('Cart'); ?>">
                               <button class="btn discount-button">بازگشت به سبد خرید</button>
                           </a>
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12 discount-boxes-div4 rightFloat margin-t-10">
                        <div class="col-md-4 col-md-offset-4 col-xs-12 discount-oneBox2 padding-0">
<!--                            <div class="col-md-12 col-xs-12 discount-box1-div">-->
<!--                                <div class="col-md-12 col-xs-12 height100">-->
<!--                                    <div class="col-md-12 col-xs-12 height100 discount-factor-text discount-button-border-radius">-->
<!--                                        <p>شماره رسید : </p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->

<!--                            <div class="col-md-12 col-xs-12 discount-box4-div">-->
<!--                                <div class="col-md-12 col-xs-12 padding-0 discount-question-text">-->
<!--                                    <p> اگر سوالی دارید میتوانید پاسخ آن را در بخش-->
<!--                                        <a href="" target="_blank">سوالات سایت</a>-->
<!--                                        و یبا از طریق شماره 0215455455 و یا ایمیل-->
<!--                                        <a href="" target="_blank">inf0@koofa.ir</a>-->
<!--                                        با ما در تماس باشید-->
<!--                                    </p>-->
<!--                                </div>-->
<!--                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
            <?php }  ?>
            <!--common style-->
            <div class="col-md-12 col-xs-12 payment-cong payment-cong4">
                <div class="col-md-12 col-xs-12 ">
                    <div class="col-md-2 col-xs-2 common-box-style">
                        <div class="col-md-12 col-xs-12">
                            <img src="<?php echo $_DIR; ?>images/delivery2.png" height="60" width="60"/>
                        </div>
                        <div class="col-md-8 col-md-offset-2 col-xs-12 padding-0">
                            <p>مناسبهایتان را با کوفا شگفت انگیز کنید</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-2  common-box-style">
                        <div class="col-md-12 col-xs-12">
                            <img src="<?php echo $_DIR; ?>images/delivery3.png" height="60" width="60"/>
                        </div>
                        <div class="col-md-8 col-md-offset-2 col-xs-12 padding-0">
                            <p>مناسبهایتان را با کوفا شگفت انگیز کنید</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-2  common-box-style">
                        <div class="col-md-12 col-xs-12">
                            <img src="<?php echo $_DIR; ?>images/delivery1.png" height="60" width="60"/>
                        </div>
                        <div class="col-md-8 col-md-offset-2 col-xs-12 padding-0">
                            <p>مناسبهایتان را با کوفا شگفت انگیز کنید</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-2  common-box-style">
                        <div class="col-md-12 col-xs-12">
                            <img src="<?php echo $_DIR; ?>images/delivery5.png" height="60" width="60"/>
                        </div>
                        <div class="col-md-8 col-md-offset-2 col-xs-12 padding-0">
                            <p>مناسبهایتان را با کوفا شگفت انگیز کنید</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-2  common-box-style">
                        <div class="col-md-12 col-xs-12">
                            <img src="<?php echo $_DIR; ?>images/delivery5.png" height="60" width="60"/>
                        </div>
                        <div class="col-md-8 col-md-offset-2 col-xs-12 padding-0">
                            <p>مناسبهایتان را با کوفا شگفت انگیز کنید</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-12 col-xs-12 body-guarantee-div RightFloat">
                <div class="col-md-12 col-xs-12 padding-0">
                    <ul class="body-guarantee">
                        <li class="col-md-3 col-xs-3">
                            <div class="col-md-12 col-xs-12 padding-responsive">
                                <div class="col-md-12 col-xs-12 padding-responsive">
                                    <div class="col-md-12 col-xs-12 padding-left padding-responsive">
                                        <div class="col-md-12 col-xs-12 padding-left padding-responsive">
                                            <div class="col-md-12 ol-xs-12 padding-left padding-responsive">
                                                <img src="<?php echo $_DIR; ?>images/delivery1.png"/>
                                                <a href="">ضمانت بازگشت</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
            <!--common style-->
        </div>
    </div>
</div>