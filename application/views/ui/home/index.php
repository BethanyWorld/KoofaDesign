<?php $_URL = base_url();
$_DIR = base_url('assets/ui/'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"
        integrity="sha256-Ikk5myJowmDQaYVCUD0Wr+vIDkN8hGI58SGWdE671A8=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo $_DIR; ?>css/index.css">
<div id="main">
    <a id="button"></a>
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
                    <?php foreach ($categories as $category) {
                        if($category['productCount'] >0){
                        ?>
                        <div class="col-md-4 col-xs-12 col-sm-12 height100 rightFloat m-b-15">
                            <h3>
                                <a class="index-feature-title"
                                   href="<?php echo categoryUrl($category['CategoryId'], $category['CategoryTitle']); ?>">
                                    <?php echo $category['CategoryTitle']; ?>
                                </a>
                            </h3>
                            <div class="col-md-12 col-xs-12  height100  z-p">
                                <div class="col-md-12 col-xs-12 index-keeper height100">
                                    <div class="col-md-12 col-xs-9">
                                        <?php foreach ($category['products'] as $item) { ?>
                                            <a href="<?php echo productUrl($item['ProductId'], $item['ProductTitle']); ?>">
                                                <img src="<?php echo $item['ProductMockUpImage']; ?>" width="100%"
                                                     height="100%"
                                                     class="index-height-image-div"/>
                                                <div class="col-md-12 col-xs-12 padding-0 hidden">
                                                    <div class="col-md-9 col-xs-9 col-sm-9 rightFloat padding-0">
                                                        <h4 class="index-item-title"><?php echo $item['ProductMockUpImage']; ?></h4>
                                                    </div>
                                                    <div class="col-md-3 col-xs-3 col-sm-3 padding-0">
                                                    <span class="index-price">
                                                        40,500
                                                    </span>
                                                    </div>
                                                </div>
                                            </a>
                                        <?php break; } ?>
                                    </div>
                                    <div class="col-md-12 col-xs-3 padding-0 index-gallery">
                                        <?php $index = 0; foreach ($category['products'] as $item) {
                                            $index +=1;
                                            if($index > 1){
                                            ?>
                                            <div class="col-md-4 index-gallery-item">
                                                <div class="col-md-12 col-xs-12 padding-0 height100">
                                                    <a href="<?php echo productUrl($item['ProductId'], $item['ProductTitle']); ?>"
                                                       target="_blank">
                                                        <img src="<?php echo $item['ProductMockUpImage']; ?>"
                                                             height="100%" width="100%"/>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php } } ?>
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
                    <?php } } ?>
                </section>
            </div>
        </div>
    </div>
    <!-- Special Offers -->
    <div class="row index-slider-div index-slider-div2  section-padding">
        <div class="container">
            <div class="col-md-9 col-xs-12 index-holder">
                <section class="index-sidebar-top index-sidebar-top2">
                    <div class="index-sidebar-home index-sidebar-home2 index-sidebar-home2">
                        <div class="col-md-12 col-xs-12 product-slider">
                            <div class="col-md-12 col-sm-12 col-xs-12 padding-0 height100" id="slider-border">
                                <div class="outer height100">
                                    <div id="big2" class="owl-carousel owl-theme">
                                        <?php foreach ($specialProduct as $item) { ?>
                                            <a href="<?php echo productUrl($item['ProductId'], $item['ProductTitle']); ?>">
                                                <div class="item">
                                                    <img src="<?php echo $item['ProductMockUpImage']; ?>"
                                                         height="100%"
                                                         width="100%"/>
                                                    <div class="div-on-slider2">
                                                        <div class="col-md-12 col-xs-12">
                                                            <h2><?php echo $item['ProductTitle']; ?></h2>
                                                        </div>
                                                        <div class="col-md-12 col-xs-12 slider2-desc">
                                                            <p class="slider2-p-margin"><?php echo $item['ProductSubTitle']; ?></p>
                                                        </div>
                                                        <div class="col-md-12 col-xs-12 slider2-discountPrice">
                                                            <p>
                                                                <s>
                                                                    <?php echo number_format($item['ProductSpecialVirtualMaxPrice']); ?>
                                                                    <span>تومان</span>
                                                                </s>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-12 col-xs-12 slider2-mainPrice">
                                                            <p>
                                                                <?php echo number_format($item['price'][0]['PriceValue']); ?>
                                                                <span>تومان</span>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-12 col-xs-12 slider2-hour-div">
                                                            <div class="col-md-12 col-sm-11 col-xs-12 slider2-text">
                                                                <?php echo $item['ProductBrief']; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-3 col-xs-3 index-holder hidden-sm hidden-xs">
                <div id="thumbs2" class="owl-carousel owl-theme">
                    <?php foreach ($specialProduct as $item) { ?>
                        <div class="item">
                            <a href="">
                                <p><?php echo $item['ProductTitle']; ?></p>
                                <p class="slier2-rightPanel-Price-div">
                                    <span class="slider2-rightPanel-discountPrice">
                                        <?php echo number_format($item['ProductSpecialVirtualMaxPrice']); ?>
                                    </span>
                                    <span style="float: left;" class="slider2-lefttPanel-Price">
                                        <?php echo number_format($item['price'][0]['PriceValue']); ?>
                                    </span>
                                </p>
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
    <!-- Newest Products -->
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
                            <div class="col-md-3 col-sm-6 col-xs-12 one-product-detail">
                                <div class="col-md-12 col-xs-12 product-keeper">
                                    <div class="product-tool">
                                        <?php setTypeBadge($item['ProductType']); ?>
                                    </div>
                                    <a href="<?php echo productUrl($item['ProductId'], $item['ProductTitle']); ?>">
                                        <img src="<?php echo $item['ProductMockUpImage']; ?>" height="100%"
                                             width="100%"/>
                                    </a>
                                    <?php setSpecialBadge($item['ProductIsSpecial']); ?>
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
    <!-- Popular Products -->
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
                            <div class="col-md-3 col-sm-6 col-xs-12 one-product-detail">
                                <div class="col-md-12 col-xs-12 product-keeper">
                                    <div class="product-tool">
                                        <?php setTypeBadge($item['ProductType']); ?>
                                    </div>
                                    <a href="<?php echo productUrl($item['ProductId'], $item['ProductTitle']); ?>">
                                        <img src="<?php echo $item['ProductMockUpImage']; ?>" height="100%"
                                             width="100%"/>
                                    </a>
                                    <?php setSpecialBadge($item['ProductIsSpecial']); ?>
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
        /*$('p.demo').each(function () {
            $currentDate = $(this).data('current-date');
            $remainDate = $(this).data('remain-time');
            $splitDate = $currentDate.split(" ");
            $currenDateSplit = $splitDate[0];

            var date1 = new Date($currenDateSplit);
            var date2 = new Date($remainDate);
            var Diff = date2.getTime() - date1.getTime();

            if (Diff <= 0) {
                $(this).html('اتمام فروش فوق العاده').addClass('finish-time');
            }
            else {
                $(this).countdown($remainDate, function (event) {
                    $(this).html(event.strftime('%H:%M:%S'));
                }).on('finish.countdown', function () {
                    $(this).html('اتمام فروش فوق العاده').addClass('finish-time');
                });
            }
        });*/
    });
</script>
