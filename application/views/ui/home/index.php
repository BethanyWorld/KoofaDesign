<?php $_URL = base_url();
$_DIR = base_url('assets/ui/'); ?>

<link rel="stylesheet" href="<?php echo $_DIR; ?>css/index.css">

<div id="main">
    <div class="row index-slider-div section-padding">
        <div class="container">
            <div class="row index-holder index-holder-slider1">
                <section class="index-sidebar-top">
                    <div class="index-sidebar-home">
                        <div class="col-md-12 col-xs-12 product-slider">
                            <div class="col-md-12 col-sm-12 col-xs-12 padding-0 height100" id="product-slider">
                                <div class="outer height100">
                                    <div id="big" class="owl-carousel owl-theme">
                                        <?php foreach ($slides as $slide) { ?>
                                            <div class="item">
                                                <a href="<?php echo $slide['SlideUrl']; ?>">
                                                    <img src="<?php echo $slide['SlideImage']; ?>" height="100%"
                                                         width="100%"/>
                                                </a>
                                                <a class="btn-buy"><?php echo $slide['SlideButtonTitle']; ?></a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div id="thumbs" class="owl-carousel owl-theme">
                                        <?php foreach ($slides as $slide) { ?>
                                            <div class="item">
                                                <a href="#"><?php echo $slide['SlideTitle']; ?></a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="index-tools-top">
                        <div class="index-enamad">
                            <img src="<?php echo $_DIR; ?>images/bannerrr1.jpg" id="image-guarantee"
                                 alt="نماد الکترونیک"/>
                        </div>
                        <div class="index-banner">
                            <a href="http://www.koofa.ir/hand_in_hand_with_earth">
                                <img src="<?php echo $_DIR; ?>images/bannerr22.jpg"/>
                            </a>
                        </div>
                    </div>
                    <div class="index-product-extra">
                        <div class="item item_1">
                            <a href="">
                                <span>7روز ضمانت بازگشت</span>
                            </a>
                        </div>
                        <div class="item item_2">
                            <a href="">
                                <span>تحویل اکسپرس</span>
                            </a>
                        </div>
                        <div class="item item_3">
                            <a href="">
                                <span>منحصربه فردخرید کنید</span>
                            </a>
                        </div>
                        <div class="item item_2">
                            <a href="">
                                <span>تضمین اصالت مالا</span>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-xs-12 body-guarantee-div section-padding">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <ul class="body-guarantee">
                    <li class="col-md-3 col-xs-3">
                        <img src="<?php echo $_DIR; ?>images/product_extra_1.png" height="20" width="20"/>
                        <a href="">ضمانت بازگشت</a>
                    </li>
                    <li class="col-md-3 col-xs-3">
                        <img src="<?php echo $_DIR; ?>images/delivery2.png" height="20" width="20"/>
                        <a href="">تحویل اکسبرس</a>
                    </li>
                    <li class="col-md-3 col-xs-3">
                        <img src="<?php echo $_DIR; ?>images/delivery3.png" height="20" width="20"/>
                        <a href="">پرداخـت در محل</a>
                    </li>
                    <li class="col-md-3 col-xs-3">
                        <img src="<?php echo $_DIR; ?>images/product_extra_3.png" height="20" width="20"/>
                        <a href="">تضمین ضمانت</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Categories -->
    <div class="row index-product section-padding">
        <div class="container">
            <div class="row index-product-holder">
                <section class="col-md-12 col-xs-12 index-category-products">
                    <?php foreach ($categories as $category) { ?>
                        <div class="col-md-4 col-xs-12 col-sm-12 height100 rightFloat m-b-40">
                            <h3>
                                <a class="index-feature-title"
                                   href="<?php echo categoryUrl($category['CategoryId'], $category['CategoryTitle']); ?>">
                                    <?php echo $category['CategoryTitle']; ?>
                                </a>
                            </h3>
                            <div class="col-md-12 col-xs-12  height100  z-p">
                                <div class="col-md-12 col-xs-12 index-keeper height100">
                                    <div class="col-md-12 col-xs-9">
                                        <a href="<?php echo categoryUrl($category['CategoryId'], $category['CategoryTitle']); ?>"
                                           target="_blank">
                                            <img src="<?php echo $category['CategoryImage']; ?>" width="100%"
                                                 height="100%"
                                                 class="index-height-image-div"/>
                                            <div class="col-md-12 col-xs-12 padding-0 hidden">
                                                <div class="col-md-9 col-xs-9 col-sm-9 rightFloat padding-0">
                                                    <h4 class="index-item-title"><?php echo $category['CategoryTitle']; ?></h4>
                                                </div>
                                                <div class="col-md-3 col-xs-3 col-sm-3 padding-0">
                                                <span class="index-price">
                                                    40,500
                                                </span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="index-product-tool hidden">
                                            <a href="">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xs-3 padding-0 index-gallery">
                                        <?php foreach ($category['products'] as $item) { ?>
                                            <div class="col-md-4 index-gallery-item">
                                                <div class="col-md-12 col-xs-12 padding-0 height100">
                                                    <a href="<?php echo productUrl($item['ProductId'], $item['ProductTitle']); ?>"
                                                       target="_blank">
                                                        <img src="<?php echo $item['ProductPrimaryImage']; ?>"
                                                             height="100%" width="100%"/>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <div class="col-md-4 col-xs-12 index-gallery-item index-gallery-other-item">
                                            <div class="col-md-12 col-xs-12 height100 index-gallery-other">
                                                <a href="<?php echo categoryUrl($category['CategoryId'], $category['CategoryTitle']); ?>"
                                                   class="index-other-link">
                                                    <h2 class="index-gallery-number">
                                                        +<?php echo $category['productCount']; ?>
                                                    </h2>
                                                    <span>اثر دیگر</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </section>
            </div>
        </div>
    </div>

    <div class="row index-slider-div index-slider-div2 section-padding">
        <div class="container">
            <div class="col-md-9 col-xs-9 index-holder">
                <section class="index-sidebar-top index-sidebar-top2">
                    <div class="index-sidebar-home index-sidebar-home2 index-sidebar-home2">
                        <div class="col-md-12 col-xs-12 product-slider">
                            <div class="col-md-12 col-sm-12 col-xs-12 padding-0 height100" id="slider-border">
                                <div class="outer height100">
                                    <div id="big2" class="owl-carousel owl-theme">
                                        <div class="item">
                                            <img src="<?php echo $_DIR; ?>images/image-5.jpg" height="100%"
                                                 width="100%"/>
                                        </div>
                                        <div class="item">
                                            <img src="<?php echo $_DIR; ?>images/image-6.jpg" height="100%"
                                                 width="100%"/>
                                        </div>
                                        <div class="item">
                                            <img src="<?php echo $_DIR; ?>images/image-2.jpg" height="100%"
                                                 width="100%"/>
                                        </div>
                                        <div class="item">
                                            <img src="<?php echo $_DIR; ?>images/image-3.jpg" height="100%"
                                                 width="100%"/>
                                        </div>
                                        <div class="item">
                                            <img src="<?php echo $_DIR; ?>images/image-1.jpg" height="100%"
                                                 width="100%"/>
                                        </div>
                                    </div>
                                    <div class="div-on-slider2">
                                        <div class="col-md-12 col-xs-12">
                                            <a href="" target="_blank">
                                                <h2>گوشواره چوبی</h2>
                                            </a>
                                        </div>
                                        <div class="col-md-12 col-xs-12">
                                            <p class="slider2-desc">
                                                دستبند چرمی ساخت کارگاه بنفشه
                                            </p>
                                        </div>
                                        <div class="col-md-12 col-xs-12 slider2-discountPrice">
                                            <p>4300</p>
                                        </div>
                                        <div class="col-md-12 col-xs-12 slider2-mainPrice">
                                            <p>3000
                                                <span>تومان</span>
                                            </p>
                                        </div>
                                        <div class="col-md-12 col-xs-12 slider2-hour-div">
                                            <div class="col-md-7 col-sm-7 slider2-hour">
                                                <p class="remaining-time-text">زمان باقی مانده حراجی</p>
<!--                                                <div class="html welcome visible">-->
<!--                                                    <div class="datetime">-->
<!--                                                        <div class="time lightSpeedIn animated">08:00</div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
                                                <p id="demo"></p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-11 col-xs-12 slider2-text">
                                            <p>دستبند الماسی معکوس</p>
                                            <div class="clearfix"></div>
                                            <p>جایزه 2-1-1-1</p>
                                            <div class="clearfix"></div>
                                            <p>اتمام گزینه شده از الماس های غنی شده</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-3 col-xs-3 index-holder">
                <div id="thumbs2" class="owl-carousel owl-theme">
                    <div class="item">
                        <a href="">
                            <p>دستبند چرمی ساخت کارگاه بنفشه</p>
                            <p class="slier2-rightPanel-Price-div">
                                4000
                                <span class="slier2-rightPanel-mainPrice">تومان</span>
                                <span class="slider2-rightPanel-discountPrice">6000</span>
                            </p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <p>دستبند چرمی ساخت کارگاه بنفشه</p>
                            <p class="slier2-rightPanel-Price-div">
                                4000
                                <span class="slier2-rightPanel-mainPrice">تومان</span>
                                <span class="slider2-rightPanel-discountPrice">6000</span>
                            </p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <p>دستبند چرمی ساخت کارگاه بنفشه</p>
                            <p class="slier2-rightPanel-Price-div">
                                4000
                                <span class="slier2-rightPanel-mainPrice">تومان</span>
                                <span class="slider2-rightPanel-discountPrice">6000</span>
                            </p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <p>دستبند چرمی ساخت کارگاه بنفشه</p>
                            <p class="slier2-rightPanel-Price-div">
                                4000
                                <span class="slier2-rightPanel-mainPrice">تومان</span>
                                <span class="slider2-rightPanel-discountPrice">6000</span>
                            </p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <p>دستبند چرمی ساخت کارگاه بنفشه</p>
                            <p class="slier2-rightPanel-Price-div">
                                4000
                                <span class="slier2-rightPanel-mainPrice">تومان</span>
                                <span class="slider2-rightPanel-discountPrice">6000</span>
                            </p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <!-- for red line-->
        <div class="col-md-1 visible-lg visible-md red-line"></div>
        <!-- for red line-->
    </div>
    <div class="row index-product-new section-padding">
        <div class="container">
            <div class="row">
                <section>
                    <div class="col-md-12 col-xs-12">
                        <h3 class="index-new-product-title text-center">تازه ترین آثار</h3>
                    </div>
                    <div class="col-md-12 col-xs-12 index-new-product-desc">
                        <h4>تازه ترین آثار از دید مخاطبان</h4>
                    </div>
                    <div class="col-md-12 col-xs-12 ">
                        <?php foreach ($latestProduct as $item) { ?>
                            <div class="col-md-3 col-xs-12 one-product-detail">
                                <div class="col-md-12 col-xs-12 product-keeper">
                                    <div class="product-tool">
                                        <a href="<?php echo productUrl($item['ProductId'], $item['ProductTitle']); ?>">
                                            <i class="fa fa-search"></i>
                                        </a>
                                        <a href="">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </div>
                                    <a href="<?php echo productUrl($item['ProductId'], $item['ProductTitle']); ?>">
                                        <img src="<?php echo $item['ProductPrimaryImage']; ?>" height="100%"
                                             width="100%"/>
                                    </a>
                                </div>
                                <div class="col-md-12 col-xs-12  padding-response">
                                    <a href="<?php echo productUrl($item['ProductId'], $item['ProductTitle']); ?>">
                                        <h3 class="product-info"><?php echo $item['ProductTitle']; ?></h3>
                                    </a>
                                </div>
                                <div class="col-md-12 col-xs-12 price-box">
                                    <p class="regular-price">
                                        <span class="item_price">
                                            <?php showProductPrice($item['price'], $item['ProductType']); ?>
                                            <b class="unit">تومان</b>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="row index-product-Popular section-padding">
        <div class="container">
            <div class="row">
                <section>
                    <div class="col-md-12 col-xs-12">
                        <h3 class="index-new-product-title text-center">محبوب ترین آثار</h3>
                    </div>
                    <div class="col-md-12 col-xs-12 index-new-product-desc">
                        <h4>پربیننده ترین آثار از دید مخاطبان</h4>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <?php foreach ($favoriteProduct as $item) { ?>
                            <div class="col-md-3 col-xs-12 one-product-detail">
                                <div class="col-md-12 col-xs-12 product-keeper">
                                    <div class="product-tool">
                                        <a href="<?php echo productUrl($item['ProductId'], $item['ProductTitle']); ?>">
                                            <i class="fa fa-search"></i>
                                        </a>
                                        <a href="">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </div>
                                    <a href="<?php echo productUrl($item['ProductId'], $item['ProductTitle']); ?>">
                                        <img src="<?php echo $item['ProductPrimaryImage']; ?>" height="100%"
                                             width="100%"/>
                                    </a>
                                </div>
                                <div class="col-md-12 col-xs-12  padding-response">
                                    <a href="<?php echo productUrl($item['ProductId'], $item['ProductTitle']); ?>">
                                        <h3 class="product-info"><?php echo $item['ProductTitle']; ?></h3>
                                    </a>
                                </div>
                                <div class="col-md-12 col-xs-12 price-box">
                                    <p class="regular-price">
                                        <span class="item_price">
                                            <?php showProductPrice($item['price'], $item['ProductType']); ?>
                                            <b class="unit">تومان</b>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>






<script>
    var countDownDate = new Date("Jan 5, 2021 2:37:25").getTime();

    var x = setInterval(function() {

        var now = new Date().getTime();

        var distance = countDownDate - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("demo").innerHTML = hours + ":"
            + minutes + ":" + seconds + "";

        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>