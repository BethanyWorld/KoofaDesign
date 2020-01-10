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
                    <div class="col-md-12 col-xs-12 product-detail-text padding-right">
                        <p>ارسال رایگان برای خرید های بیشتر از 90 هزار تومان</p>
                    </div>
                    <div class="col-md-1س2 col-xs-12 padding-right product-detail-title">
                        <h1><?php echo $data['ProductTitle']; ?></h1>
                    </div>
                    <div class="col-md-12 col-xs-12 product-detail-print padding-right">
                        <?php echo $data['ProductSubTitle']; ?>
                    </div>
                    <div class="col-md-12 col-xs-12 product-detail-print padding-right product-sub-title">
                        <p><?php echo $data['ProductBrief']; ?></p>
                    </div>
                    <div class="col-xs-12 padding-0 product-detail-Flax margin-b-10">
                        <div class="col-xs-12 col-md-4 pull-right">
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
                        <div class="product-size col-xs-12 col-md-4 pull-right">
                            <label>ارتفاع</label>
                            <input id="inputProductHeight" class="metrics" type="number" value="0" min="0"
                                   max="<?php echo $data['ProductMaxHeight']; ?>"/>
                        </div>
                        <!--                        <span class="pull-right"> &nbsp;&nbsp; &nbsp;&nbsp;</span>-->
                        <div class="product-size col-xs-12 col-md-4 pull-right">
                            <label>عرض</label>
                            <input id="inputProductWidth"  class="metrics" type="number" value="0" min="0"
                                   max="<?php echo $data['ProductMaxWidth']; ?>"/>
                        </div>

<!--                        <div class="col-xs-12 docs-buttons">-->
<!--                            <div class="col-md-12 col-xs-12 btn-group btn-group-crop">-->
<!--                                <button type="button" class="btn btn-success">-->
<!--                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="برش عکس">برش</span>-->
<!--                                </button>-->
<!--                            </div>-->
<!--                            <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true"-->
<!--                                 aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">-->
<!--                                <div class="modal-dialog">-->
<!--                                    <div class="modal-content">-->
<!--                                        <div class="modal-header">-->
<!--                                            <h5 class="modal-title" id="getCroppedCanvasTitle">عکس برش خورده در سایز-->
<!--                                                دلخواه</h5>-->
<!--                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                                                <span aria-hidden="true">&times;</span>-->
<!--                                            </button>-->
<!--                                        </div>-->
<!--                                        <div class="modal-body"></div>-->
<!--                                        <div class="modal-footer">-->
<!--                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن-->
<!--                                            </button>-->
<!--                                            <a class="btn btn-primary" id="download" href="javascript:void(0);"-->
<!--                                               download="cropped.jpg">دانلود</a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>
<!--                        </div>-->
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

                        <div class="col-md-5 col-xs-12 rightFloat padding-0 basket">
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

                        <div class="col-md-6 col-xs-12 rightFloat padding-0 add-like-div"
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
                                <div class="col-xs-12 padding-0">
                                    <div class="box">

                                        <!-- طرح دلخواه-->
                                        <label class="upload-options btn btn-primary btn-upload" for="inputImage"
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
                </div>
                <div class="col-md-7 col-xs-12 left-slide-image-div">
                    <div class="col-md-12 col-xs-12 product-detail-social-div">
                        <div class="col-xs-12 rightFloat product-detail-social">
                            <h3 class="social-info">
                                <span>به دوستانتان اطلاع دهید</span>
                            </h3>
                            <ul>
                                <li class="telegram">
                                    <a aria-label="telegram" title="telegram" href="" target="_blank">
                                        <i class="fa fa-send"></i>
                                    </a>
                                </li>
                                <li class="facebook">
                                    <a aria-label="facebook" title="facebook" href="" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="linkedin">
                                    <a aria-label="linkedin" title="linkedin" href="" target="_blank">
                                        <i class="fa fa-linkedin-square"></i>
                                    </a>
                                </li>
                                <li class="google-plus">
                                    <a aria-label="google-plus" title="google-plus" href="" target="_blank">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="pinterest">
                                    <a aria-label="pinterest" title="pinterest" href="">
                                        <i class="fa fa-pinterest-p"></i>
                                    </a>
                                </li>
                                <li class="canEmailToFriend">
                                    <a aria-label="canEmailToFriend" title="canEmailToFriend" href="">
                                        <i class="fa fa-envelope-o"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--                        <h2 class="product-code">CODE: KFB3587</h2>-->
                    </div>
                    <!-- for owl-->
                    <div class="col-md-12 col-xs-12 product-slider" id="carousel-div">
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


                </div>
            </div>
        </div>
        <div class="col-md-12 col-xs-12 padding-0 second-container-m-b"
             style="min-height: 300px;background-color: #fff;border-top: 1px solid gray;">
            <div class="col-md-12 col-xs-12 p-b-15">
                <div class="container">

                    <!--                    <div class="col-md-12 col-xs-12 product-description">-->
                    <!--                        --><?php //echo $data['ProductDescription']; ?>
                    <!--                    </div>-->

                    <div class="col-md-12 col-xs-12">
                        <div class="col-md-12 col-xs-12">
                            <h2 class="product-title-h2">مناسب سلیقه ی شما :</h2>
                        </div>

                        <?php foreach ($relatedProducts as $item) { ?>
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
