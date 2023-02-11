<?php
$_URL = base_url();
$_DIR = base_url('assets/ui/v2/');
?>
<div class="row">
    <div class="main-slider owl-carousel">
        <?php foreach ($slides as $slide) { ?>
            <a title="<?php echo $slide['SlideTitle']; ?>" href="<?php echo $slide['SlideUrl']; ?>">
                <div class="item-slide">
                    <img title="<?php echo $slide['SlideTitle']; ?>" src="<?php echo $slide['SlideImage']; ?>"/>
                </div>
            </a>
        <?php } ?>
    </div>
    <div class="row slogans  white-bg hidden">
            <span>
                <b>تضمین اصالت محصول</b>
                <img src="<?php echo $_DIR; ?>assets/img/svg/tick.svg"/>
            </span>
        <span>
                <b>تحویل اکسپرس</b>
                <img src="<?php echo $_DIR; ?>assets/img/svg/book.svg"/>
            </span>
        <span>
                <b>ارسال رایگان بالای 200 هزار تومان</b>
                <img src="<?php echo $_DIR; ?>assets/img/svg/truck.svg"/>
            </span>
        <span>
                <b>7 روز ضمانت بازگشت</b>
                <img src="<?php echo $_DIR; ?>assets/img/svg/calendar.svg"/>
            </span>
    </div>
</div>


<?php
$index = -1;
foreach ($categories as $category) {
    if ($category['CategoryId'] != '91' && $category['CategoryId'] != '62') {
        $index += 1; ?>
        <div class="row product-slider large <?php if ($index % 2 == 0) echo 'white-bg'; else echo 'grey-bg'; ?>">
            <div class="container">
                <div class="col-xs-12 section">
                    <div class="col-md-2 col-md-offset-1 col-xs-12 pull-right info">
                        <div class="col-xs-6 col-md-12 pull-right">
                            <h2><?php echo $category['CategoryTitle']; ?></h2>
                            <h3>
                                +
                                <?php echo $category['productCount']; ?>
                                محصول
                            </h3>
                        </div>
                        <div class="col-xs-6 col-md-12 pull-left">
                            <a href="<?php echo categoryUrl($category['CategoryId'], $category['CategoryTitle']); ?>">
                                مشاهده همه
                            </a>
                        </div>
                    </div>
                    <div class="col-md-9 col-xs-12 pull-left list" style="padding: 0;">
                        <div class="owl-carousel">
                            <?php foreach ($category['childCategory'] as $child) { ?>
                                <div class="item-slide">
                                    <a href="<?php echo categoryUrl($child['CategoryId'], $child['CategoryTitle']); ?>">
                                        <img title="<?php echo $slide['SlideTitle']; ?>"
                                             src="<?php echo $child['product']['ProductMockUpImage']; ?>"/>
                                        <h3 class="title"><?php echo $child['CategoryTitle']; ?></h3>
                                        <ul>
                                            <li>بیشتر</li>
                                        </ul>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
?>


<div class="row offers white-bg">
    <div class="container">
        <div class="col-xs-12 section">
            <div class="col-md-6 col-xs-6 pull-right box large" style="background: url(<?php echo $plans[0]['PlanImage']; ?>)">
                <a href="<?php echo $plans[0]['PlanUrl']; ?>">
                    <div class="owl-overlay"></div>
                </a>
            </div>
            <div class="col-md-6 col-xs-6">
                <div class="col-xs-12 pull-right box min" style="background: url(<?php echo $plans[1]['PlanImage']; ?>)">
                    <a href="<?php echo $plans[1]['PlanUrl']; ?>">
                        <div class="owl-overlay"></div>
                    </a>
                </div>
                <div class="col-xs-12 pull-right box min" style="background: url(<?php echo $plans[2]['PlanImage']; ?>)">
                    <a href="<?php echo $plans[2]['PlanUrl']; ?>">
                        <div class="owl-overlay"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$index = -1;
foreach ($categories as $category) {
    if ($category['CategoryId'] == '91') {
        $index += 1; ?>
        <div class="row product-slider large grey-bg">
            <div class="container">
                <div class="col-xs-12 section">
                    <div class="col-md-2 col-md-offset-1 col-xs-12 pull-right info">
                        <div class="col-xs-6 col-md-12">
                            <h2><?php echo $category['CategoryTitle']; ?></h2>
                            <h3>
                                +
                                <?php echo $category['productCount']; ?>
                                محصول
                            </h3>
                        </div>
                        <div class="col-xs-6 col-md-12">
                            <a href="<?php echo categoryUrl($category['CategoryId'], $category['CategoryTitle']); ?>">
                                مشاهده همه
                            </a>
                        </div>
                    </div>
                    <div class="col-md-9 col-xs-12 pull-left list">
                        <div class="owl-carousel">
                            <?php foreach ($category['childCategory'] as $child) { ?>
                                <div class="item-slide">
                                    <a href="<?php echo categoryUrl($child['CategoryId'], $child['CategoryTitle']); ?>">
                                        <img title="<?php echo $slide['SlideTitle']; ?>"
                                             src="<?php echo $child['product']['ProductMockUpImage']; ?>"/>
                                        <h3 class="title"><?php echo $child['CategoryTitle']; ?></h3>
                                        <ul>
                                            <li>بیشتر</li>
                                        </ul>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
?>
<?php
$index = -1;
foreach ($categories as $category) {
    if ($category['CategoryId'] == '62') {
        $index += 1; ?>
        <div class="row product-slider large <?php if ($index % 2 == 0) echo 'white-bg'; else echo 'grey-bg'; ?>">
            <div class="container">
                <div class="col-xs-12 section">
                    <div class="col-md-2 col-md-offset-1 col-xs-12 pull-right info">
                        <h2><?php echo $category['CategoryTitle']; ?></h2>
                        <h3>
                            +
                            <?php echo $category['productCount']; ?>
                            محصول
                        </h3>
                        <a href="<?php echo categoryUrl($category['CategoryId'], $category['CategoryTitle']); ?>">
                            مشاهده همه
                        </a>
                    </div>
                    <div class="col-md-9 col-xs-12 pull-left list">
                        <div class="owl-carousel">
                            <?php foreach ($category['childCategory'] as $child) { ?>
                                <div class="item-slide">
                                    <a href="<?php echo categoryUrl($child['CategoryId'], $child['CategoryTitle']); ?>">
                                        <img title="<?php echo $slide['SlideTitle']; ?>"
                                             src="<?php echo $child['product']['ProductMockUpImage']; ?>"/>
                                        <h3 class="title"><?php echo $child['CategoryTitle']; ?></h3>
                                        <ul>
                                            <li>بیشتر</li>
                                        </ul>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
?>

<div class="row product-slider min orange-bg">
    <div class="container">
        <div class="col-xs-12 section">
            <h2 class="text-center">تازه ترین ها</h2>
            <div class="col-xs-12 pull-left list min">
                <div class="owl-carousel">
                    <?php foreach ($latestProduct as $product) { ?>
                        <a href="<?php echo productUrl($product['ProductId'], $product['ProductTitle']); ?>">
                            <div class="item-slide" style="background: url('<?php echo $product['ProductMockUpImage']; ?>');">
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-xs-12 text-center">
                <a class="more" href="<?php echo categoryUrl($latestProduct[0]['CategoryId'], ''); ?>">مشاهده همه</a>
            </div>
        </div>
    </div>
</div>

<div class="row offers white-bg hidden-sm hidden-xs">
    <div class="container">
        <div class="col-xs-12 section">
            <?php foreach ($favoriteCategory as $item) { ?>
                <div class="col-md-6 col-xs-12">
                    <a href="<?php echo categoryUrl($item['CategoryId'], $item['CategoryTitle']); ?>">
                        <div class="col-xs-12 pull-right box min" style="background: url('<?php echo $item['CategoryPoster']; ?>');">
                            <h3 class="hidden"><?php echo $item['CategoryTitle']; ?></h3>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="row product-slider min grey-bg hidden">
    <div class="container">
        <div class="col-xs-12 section">
            <h2 class="text-center">پرفروش&#8202;ها</h2>
            <div class="col-xs-12 pull-left list min">
                <div class="owl-carousel">
                    <div class="item-slide" style="background: url('assets/img/3.jpg');"></div>
                    <div class="item-slide" style="background: url('assets/img/3.jpg');"></div>
                    <div class="item-slide" style="background: url('assets/img/3.jpg');"></div>
                    <div class="item-slide" style="background: url('assets/img/3.jpg');"></div>
                    <div class="item-slide" style="background: url('assets/img/3.jpg');"></div>
                    <div class="item-slide" style="background: url('assets/img/3.jpg');"></div>
                    <div class="item-slide" style="background: url('assets/img/3.jpg');"></div>
                    <div class="item-slide" style="background: url('assets/img/3.jpg');"></div>
                    <div class="item-slide" style="background: url('assets/img/3.jpg');"></div>
                    <div class="item-slide" style="background: url('assets/img/3.jpg');"></div>
                    <div class="item-slide" style="background: url('assets/img/3.jpg');"></div>
                </div>
            </div>
            <div class="col-xs-12 text-center">
                <a href="#">مشاهده همه</a>
            </div>
        </div>
    </div>
</div>


<div class="section white-bg">
    <div class="container section">
        <div class="new-letter">
            <div class="top"></div>
            <div class="col-xs-12">
                <h3 class="text-center">از تخفیف ها و حراجی ها باخبرم کن</h3>
                <form id="#" accept-charset="#">
                    <input type="text" placeholder="Email..."/>
                    <button type="submit">
                        عضو خبرنامه می شوم
                    </button>

                </form>
            </div>
        </div>
    </div>
</div>
