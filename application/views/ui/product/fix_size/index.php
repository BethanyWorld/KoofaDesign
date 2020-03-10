<?php $_URL = base_url();
$_DIR = base_url('assets/ui/'); ?>

<link rel="stylesheet" href="<?php echo $_DIR; ?>css/product-detail.css"/>
<div id="main" style="min-height: 100vh;">
    <div class="row">
        <div class="container first-container-m-b">
            <div class="col-md-12 col-xs-12 padding-0">
                <div class="col-md-12 col-xs-12  padding-0">
                    <ul class="breadcrumb">
                        <?php foreach ($productCategories as $row) { ?>
                            <li>
                                <a href="<?php echo categoryUrl($row['CategoryId'], $row['CategoryTitle']); ?>">
                                    <?php echo $row['CategoryTitle']; ?>
                                </a>
                            </li>
                        <?php } ?>
                        <li class="active">
                            <?php echo $data['ProductTitle']; ?>
                        </li>
                    </ul>
                </div>
                <div class="col-md-5 col-xs-12 rightFloat right-side-border-top">
<!--                    <div class="col-md-12 col-xs-12 product-detail-text padding-right">-->
<!--                        <p>ارسال رایگان برای خرید های بیشتر از 90 هزار تومان</p>-->
<!--                    </div>-->
                    <div class="col-md-12 col-xs-12 padding-right product-detail-title">
                        <h1><?php echo $data['ProductTitle']; ?></h1>
                    </div>
                    <div class="col-md-12 col-xs-12 product-detail-print padding-right">
                        <?php echo $data['ProductSubTitle']; ?>
                    </div>
                    <div class="col-md-12 col-xs-12 product-detail-print padding-right product-sub-title">
                        <p><?php echo $data['ProductBrief']; ?></p>
                    </div>
                    <div class="col-md-6 col-xs-12 padding-0 product-detail-Flax margin-b-10 pull-right">
                        <div class="col-xs-12 rightFloat product-size  padding-0">
                            <label>انتخاب جنس</label>
                        </div>
                        <div class="col-xs-12  padding-0">
                            <select class="width100" id="priceMaterialDropDown">
                                <?php foreach ($productPrice as $item) { ?>
                                    <option data-size-id="<?php echo $item['SizeId']; ?>"
                                            data-material-id="<?php echo $item['MaterialId']; ?>"
                                            data-price="<?php echo $item['PriceValue']; ?>">
                                        <?php echo $item['MaterialTitle']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 padding-0 product-detail-Flax margin-b-10">
                        <div class="col-xs-12 rightFloat product-size">
                            <label>انتخاب سایز</label>
                        </div>
                        <div class="col-xs-12">
                            <select class="width100" id="priceSizeDropDown">
                                <?php foreach ($productPrice as $item) { ?>
                                    <option data-size-id="<?php echo $item['SizeId']; ?>"
                                            data-material-id="<?php echo $item['MaterialId']; ?>"
                                            data-price="<?php echo $item['PriceValue']; ?>">
                                        <?php echo $item['SizeTitle']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <select class="hidden" id="priceDropDown">
                        <?php foreach ($productPrice as $item) { ?>
                            <option data-size-id="<?php echo $item['SizeId']; ?>"
                                    data-material-id="<?php echo $item['MaterialId']; ?>"
                                    data-price="<?php echo $item['PriceValue']; ?>">
                                <?php echo $item['SizeTitle']; ?>
                            </option>
                        <?php } ?>
                    </select>




                    <?php if ($data['ProductHasInstallation']) { ?>
                        <!--                    <div class="col-md-12 col-xs-12 padding-0 product-detail-Installation margin-b-10">-->
                        <!--                        <div class="col-lg-1 col-md-12 col-sm-12 col-xs-12 rightFloat padding-0 product-size">-->
                        <!--                            <label>نصب</label>-->
                        <!--                        </div>-->
                        <!--                        <div class="col-md-11 col-xs-12 padding-0">-->
                        <!--                            <select class="width100" id="wantInstallation">-->
                        <!--                                <option value="0" selected>-- انتخاب کنید --</option>-->
                        <!--                                <option value="--><?php //echo $data['ProductInstallationPrice']; ?><!--">میخواهم</option>-->
                        <!--                                <option value="0">نمیخوام</option>-->
                        <!--                            </select>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                    <?php } ?>
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
                                <a id="addToCart" data-product-id="<?php echo $data['ProductId']; ?>"
                                   href="javascript:void(0)"
                                   class="color-white">
                                    <p>افزودن به سبد خرید</p>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-1 col-xs-12 rightFloat"></div>

                        <div class="col-md-6 col-xs-12 rightFloat padding-0 add-like-div HoverBtn HoverBtnRed"
                             data-product-id="<?php echo $data['ProductId']; ?>">
                            <div class="col-md-3 col-xs-2 rightFloat add-like-heart">
                                <span class="fa fa-heart-o"></span>
                            </div>
                            <div class="col-md-9 col-xs-10 like-added">
                                <p>افزودن به علاقه مندی ها</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <br>
                                <div class="col-xs-12 alert alert-info">
                                    در صورت نیاز ابتدا طرح دلخواه مورد نظر را انتخاب کرده سپس محصول را به سبد خرید اضافه
                                    کنید
                                </div>

                                <div class="col-xs-12 upload-image-container">
                                    <i id="remove-upload-file" class="fa fa-times"></i>
                                    <img id="upload-image" src=""/>
                                </div>
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
                    <div class="col-xs-12 col-md-4 padding-0">
                        <div class="box">
                            <div class="upload-options">
                                <label>
                                    <span>آپلود طرح دلخواه</span>
                                    <span class="fa fa-upload"></span>
                                    <input type="file" class="image-upload" id="inputAttachment"/>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xs-12 padding-0 second-container-m-b"
             style="min-height: 300px;background-color: #fff;border-top: 1px solid gray;">
            <div class="col-md-12 col-xs-12 p-b-15">
                <div class="container">
                    <div class="col-md-12 col-xs-12 product-description">
                        <?php echo $data['ProductDescription']; ?>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <div class="col-md-12 col-xs-12">
                            <h2 class="product-title-h2">مناسب سلیقه ی شما :</h2>
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