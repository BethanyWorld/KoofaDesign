<?php
$_URL = base_url();
$_DIR = base_url('assets/ui/');
?>
<link rel="stylesheet" href="<?php echo $_DIR; ?>css/index.css">
<div id="main">
    <div class="row">
        <!-- BreadCrumbs -->
        <div class="breadcrumb-container">
            <div class="container">
                <ol class="breadcrumb">
                    <li>
                        <a href="<?php echo categoryUrl($breadCrumb['root']['CategoryId'], $breadCrumb['root']['CategoryTitle']); ?>">
                            <?php echo $breadCrumb['root']['CategoryTitle']; ?>
                        </a>
                    </li>
                    <?php if (isset($breadCrumb['parents'])) {
                        foreach ($breadCrumb['parents'] as $parent) { ?>
                            <li>
                                <a href="<?php echo categoryUrl($parent['CategoryId'], $parent['CategoryTitle']); ?>">
                                    <?php echo $parent['CategoryTitle']; ?>
                                </a>
                            </li>
                        <?php }
                    } ?>
                    <li class="active">
                        <?php echo $breadCrumb['current']['CategoryTitle']; ?>
                    </li>
                </ol>
            </div>
        </div>
        <div class="container" style="position: relative;">
            <div class="col-xs-12" style="padding: 0;">
                <div class="col-md-2 col-xs-12 pull-right category-lists p-0">
                    <h2>دسته بندی محصولات</h2>
                    <ul class="list-group p-0">
                        <?php foreach ($childCategories as $rootCategory) { ?>
                            <li class="list-group-item <?php if ($rootCategory['CategoryId'] == $breadCrumb['current']['CategoryId']) echo "active"; ?>">
                                <a href="<?php echo categoryUrl($rootCategory['CategoryId'], $rootCategory['CategoryTitle']); ?>">
                                    <?php echo $rootCategory['CategoryTitle']; ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-md-10 col-xs-12 category-list-box">
                    <?php foreach ($childCategories as $rootCategory) { ?>
                        <div class="col-md-6 col-xs-6 cat-item">
                            <a href="<?php echo categoryUrl($rootCategory['CategoryId'], $rootCategory['CategoryTitle']); ?>">
                                <div class="col-xs-12 item"
                                     style="background: url('<?php echo $rootCategory['CategoryPoster']; ?>');background-position: center;background-size: cover;">
                                    <div class="overlay"></div>
                                    <div class="content">
                                        <p class="text-center">
                                            <img src="<?php echo $rootCategory['CategoryImage']; ?>" />
                                        </p>
                                        <h2 class="text-center"><?php echo $rootCategory['CategoryTitle']; ?></h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row product-slider min" style="margin-bottom: 0 !important; ">
            <div class="container">
                <div class="col-xs-12 section">
                    <h2 class="text-center">تازه&#8202;ترین&#8202;ها</h2>
                    <div class="col-xs-12 pull-left list min">
                        <div class="owl-carousel">
                            <?php foreach ($latestProduct as $product) { ?>
                                <a href="<?php echo productUrl($product['ProductId'], $product['ProductTitle']); ?>">
                                    <div class="item-slide"
                                         style="background: url('<?php echo $product['ProductMockUpImage']; ?>');">

                                    </div>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-xs-12 text-center">
                        <a class="more" href="<?php echo categoryUrl($latestProduct[0]['CategoryId'], ''); ?>">مشاهده و
                            خرید</a>
                    </div>
                </div>
            </div>
        </div>



        <div class="row product-slider min" style="margin-top: 0 !important; ">
            <div class="container">
                <div class="col-xs-12 section">
                    <h2 class="text-center">محبوب&#8202;ترین&#8202;ها</h2>
                    <div class="col-xs-12 pull-left list min">
                        <div class="owl-carousel">
                            <?php foreach ($latestProduct as $product) { ?>
                                <a href="<?php echo productUrl($product['ProductId'], $product['ProductTitle']); ?>">
                                    <div class="item-slide"
                                         style="background: url('<?php echo $product['ProductMockUpImage']; ?>');">

                                    </div>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-xs-12 text-center">
                        <a class="more" href="<?php echo categoryUrl($latestProduct[0]['CategoryId'], ''); ?>">مشاهده و
                            خرید</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>