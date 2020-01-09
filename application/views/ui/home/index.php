<?php $_URL = base_url();
$_DIR = base_url('assets/ui/'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"
        integrity="sha256-Ikk5myJowmDQaYVCUD0Wr+vIDkN8hGI58SGWdE671A8=" crossorigin="anonymous"></script>
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
                                        <?php foreach ($specialProduct as $item) { ?>
                                            <div class="item">
                                                <img src="<?php echo $item['ProductPrimaryImage']; ?>" height="100%"
                                                     width="100%"/>

                                                <div class="div-on-slider2">
                                                    <div class="col-md-12 col-xs-12 slider2-discountPrice">
                                                        <p>
                                                            <?php echo number_format($item['price'][0]['PriceValue']); ?>
                                                            <span>تومان</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-12 col-xs-12 slider2-hour-div">
                                                        <div class="col-md-7 col-sm-7 slider2-hour">
                                                            <p class="remaining-time-text">زمان باقی مانده حراجی</p>
                                                            <?php $remainDate = jDateTime::toGregorian(explode("/",$item['ProductSpecialEndDate'])[0],explode("/",$item['ProductSpecialEndDate'])[1],explode("/",$item['ProductSpecialEndDate'])[2]); ?>
                                                            <p data-current-date="<?php echo $currentDate; ?>"
                                                               data-remain-time="<?php echo $remainDate[0].'/'.$remainDate[1].'/'.$remainDate[2]; ?>"
                                                               class="demo"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-3 col-xs-3 index-holder">
                <div id="thumbs2" class="owl-carousel owl-theme">
                    <?php foreach ($specialProduct as $item) { ?>
                        <div class="item">
                            <a href="">
                                <p><?php echo $item['ProductTitle']; ?></p>
                            </a>
                        </div>
                    <?php } ?>
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
                        <h3 class="index-new-product-title text-center">
                            <span id="clock"></span>
                            تازه ترین آثار
                        </h3>
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


<script src="<?php echo $_DIR; ?>js/jquery.nicescroll.min.js"></script>
<script src="<?php echo $_DIR; ?>js/persianDatepicker.min.js"></script>
<script>
    $(document).ready(function () {
        $("#thumbs2 .owl-stage-outer").niceScroll({cursorcolor: "#d5b55e"});
        $('p.demo').each(function () {
            $currentDate = $(this).data('current-date');
            $remainDate = $(this).data('remain-time');
            $splitDate = $currentDate.split(" ");
            $currenDateSplit = $splitDate[0];

            var date1 = new Date($currenDateSplit);
            var date2 = new Date($remainDate);
            var Diff = date2.getTime() - date1.getTime();

           if(Diff <= 0){
               $(this).html('زمان شما به پایان رسیده است').addClass('finish-time');
           }
           else {
               $(this).countdown($remainDate, function (event) {
                   $(this).html(event.strftime('%H:%M:%S'));
               }).on('finish.countdown', function () {
                   $(this).html('زمان شما به پایان رسیده است').addClass('finish-time');;
               });
           }

        });


    });
</script>



