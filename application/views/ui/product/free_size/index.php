<?php $_URL = base_url();
$_DIR = base_url('assets/ui/'); ?>

<link rel="stylesheet" href="<?php echo $_DIR; ?>css/product-detail.css"/>
<link rel="stylesheet" href="<?php echo $_DIR; ?>css/main.css"/>
<link rel="stylesheet" href="<?php echo $_DIR; ?>css/cropper.css"/>


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
                <div class="col-md-5 col-xs-12 padding-0 rightFloat right-side-border-top">
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
                    <div class="col-xs-12 padding-0 product-detail-Flax margin-b-10">
                        <div class="col-xs-12 col-md-4 pull-right padding-right-for-pc">
                            <div class="col-xs-12 rightFloat padding-0 product-size">
                                <label>انتخاب جنس</label>
                            </div>
                            <select class="width100" id="priceDropDown">
                                <?php foreach ($productPrice as $item) { ?>
                                    <option
                                            data-material-id="<?php echo $item['MaterialId']; ?>"
                                            data-price="<?php echo $item['PriceValue']; ?>">
                                        جنس&nbsp;
                                        <?php echo $item['MaterialTitle']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="product-size col-xs-12 col-md-4 pull-right padding-right-for-pc">
                            <div class="col-xs-12 rightFloat padding-0 product-size">
                                <label>
                                    ارتفاع
                                    -
                                    حداکثر
                                    <?php echo $data['ProductMaxHeight']; ?>
                                    cm
                                </label>
                            </div>
                            <input id="inputProductHeight"
                                   class="metrics"
                                   type="number" value="0" min="0"
                                   max="<?php echo $data['ProductMaxHeight']; ?>"/>
                        </div>
                        <!--                        <span class="pull-right"> &nbsp;&nbsp; &nbsp;&nbsp;</span>-->
                        <div class="product-size col-xs-12 col-md-4 pull-right padding-right-for-pc">
                            <div class="col-xs-12 rightFloat padding-0 product-size">
                                <label>
                                    عرض
                                    -
                                    حداکثر
                                    <?php echo $data['ProductMaxWidth']; ?>
                                    cm
                                </label>
                            </div>
                            <input id="inputProductWidth"
                                   class="metrics"
                                   type="number" value="0" min="0"
                                   max="<?php echo $data['ProductMaxWidth']; ?>"/>
                        </div>
                    </div>



                    <div class="col-md-12 col-xs-12"></div>

                    <div class="col-md-12 col-xs-12 padding-0 product-detail-pn">
                        <div class="col-md-6 col-xs-12 rightFloat product-detail-price">
                            <p>قیمت کل :</p>
                        </div>
                        <div class="col-md-6 col-xs-12 product-detail-number">
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-xs-12 left-slide-image-div"> 
                    <div class="col-md-12 col-xs-12 product-slider" id="carousel-div">
                        <div class="col-md-12 col-sm-12 col-xs-12 padding-0" id="product-slider">
                            <div class="outer">
                                <div id="big" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <img src="<?php echo $data['ProductPrimaryImage']; ?>"
                                             style="object-fit: contain;"
                                             height="100%"
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

                    <!-- for cropper-->
                    <div class="col-md-12 col-xs-12 product-slider cropper-image">
                        <div class="col-md-12 col-sm-12 col-xs-12 padding-0 height100">
                            <div class="outer height100">
                                <div id="big" class="height100">
                                    <div class="item">
                                        <img src="<?php echo $data['ProductPrimaryImage']; ?>" height="100%"
                                             width="100%" class="image"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xs-12 col-md-4 padding-0">
                        <div class="box">
                            <!-- طرح دلخواه-->
                            <label class="upload-options btn btn-upload" for="inputImage"
                                   title="Upload image file">
                                <input type="file" class="sr-only" id="inputImage" name="file"
                                       accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                                <span class="docs-tooltip" data-animation="false"
                                      title="طرح دلخواه">
                                    آپلود طرح دلخواه
              <span class="fa fa-upload"></span>
            </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xs-12 padding-0 second-container-m-b"
             style="min-height: 300px;background-color: #fff;border-top: 1px solid gray;">
            <div class="col-md-12 col-xs-12 p-b-15">
                <div class="container">
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


<script src="<?php echo $_DIR; ?>js/cropper.js"></script>
<script src="<?php echo $_DIR; ?>js/jquery-cropper.js"></script>
