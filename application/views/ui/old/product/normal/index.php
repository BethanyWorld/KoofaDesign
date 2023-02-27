<?php $_URL = base_url();
$_DIR = base_url('assets/ui/'); ?>

<link rel="stylesheet" href="<?php echo $_DIR; ?>css/product-detail.css"/>
<div id="main" style="min-height: 100vh;">
    <div class="row">
        <div class="container first-container-m-b">
            <div class="col-md-12 col-xs-12 padding-0">
                <div class="col-md-12 col-xs-12  padding-0">
                    <?php echo $breadCrumb; ?>
                </div>
                <div class="col-md-5 col-xs-12 rightFloat padding-0 right-side-border-top">
                    <?php echo $productTitles; ?>

                    <div class="col-md-12 col-xs-12 padding-0 product-detail-pn">
                        <div class="col-md-6 col-xs-12 rightFloat product-detail-price">
                            <p>قیمت کل :</p>
                        </div>
                        <div class="col-md-6 col-xs-12 product-detail-number">
                            <p>
                                <?php echo number_format($productPrice[0]['PriceValue']); ?>
                                تومان
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12 padding-0 shopping-add-basket">
                        <div class="col-md-5 col-xs-12 rightFloat padding-0 basket HoverBtn">
                            <div class="col-md-3 col-xs-2 rightFloat shopping-basket">
                                <span class="fa fa-shopping-basket"></span>
                            </div>
                                <div class="col-md-9 col-xs-10 basket-added">
                                    <a href="<?php echo base_url('Cart/addNormal/'.$data['ProductId']); ?>"
                                       class="color-white">
                                        <p>افزودن به سبد خرید</p>
                                    </a>
                                </div>
                        </div>

                        <div class="col-md-1 col-xs-12 rightFloat"></div>
                        <div class="col-md-6 col-xs-12 rightFloat padding-0 add-like-div HoverBtn HoverBtnRed" data-product-id="<?php echo $data['ProductId']; ?>">
                            <div class="col-md-3 col-xs-2 rightFloat add-like-heart">
                                <span class="fa fa-heart-o"></span>
                            </div>
                            <div class="col-md-9 col-xs-10 like-added">
                                <p>افزودن به علاقه مندی ها</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-xs-12 left-slide-image-div">
                    <div class="col-md-12 col-xs-12 product-slider">
                        <div class="col-md-12 col-sm-12 col-xs-12 padding-0" id="product-slider">
                            <div class="outer">
                                <div id="big" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <img src="<?php echo $data['ProductPrimaryImage']; ?>" height="100%"
                                             width="100%"/>
                                    </div>
                                    <?php foreach ($productSecondaryImages as $productSecondaryImage) { ?>
                                        <div class="item">
                                            <img src="<?php echo $productSecondaryImage['MediaUrl']; ?>" height="100%"
                                                 width="100%"/>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div id="thumbs" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <img src="<?php echo $data['ProductPrimaryImage']; ?>"/>
                                    </div>
                                    <?php foreach ($productSecondaryImages as $productSecondaryImage) { ?>
                                        <div class="item">
                                            <img src="<?php echo $productSecondaryImage['MediaUrl']; ?>"/>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xs-12 padding-0 second-container-m-b" style="min-height: 300px;background-color: #fff;border-top: 1px solid gray;">
            <div class="col-md-12 col-xs-12 p-b-15">
                <div class="container">

                    <div class="col-md-12 col-xs-12 product-description">
		                <?php echo $data['ProductDescription']; ?>
                    </div>

                    <div class="col-md-12 col-xs-12">
                        <div class="col-md-12 col-xs-12">
                            <h2 class="product-title-h2">محصولات مشابه :</h2>
                        </div>
                        <?php foreach ($relatedProducts as $item) { ?>
                            <div class="col-md-3 col-xs-12 one-product-detail">
                                <div class="col-md-12 col-xs-12 product-keeper">
                                    <div class="product-tool">
                                        <?php setTypeBadge($item['ProductType']); ?>
                                    </div>
                                    <a href="<?php echo productUrl($item['ProductId'], $item['ProductTitle']); ?>">
                                        <img src="<?php echo $item['ProductPrimaryImage']; ?>" height="100%"
                                             width="100%"/>
                                    </a>
                                    <?php setSpecialBadge($item['ProductIsSpecial']); ?>
                                </div>
                                <div class="col-md-12 col-xs-12  padding-response">
                                    <a href="<?php echo productUrl($item['ProductId'], $item['ProductTitle']); ?>">
                                        <h3 class="product-info"><?php echo $item['ProductTitle']; ?></h3>
                                    </a>
                                </div>
                                <div class="col-md-12 col-xs-12 price-box hidden">
                                        <span class="regular-price">
                                            <span class="item_price">&lrm;26,000<span class="unit">تومان</span>
                                        </span>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>