<?php $_URL = base_url();
$_DIR = base_url('assets/ui/'); ?>
<link rel="stylesheet" href="<?php echo $_DIR; ?>css/index.css">
<link rel="stylesheet" href="<?php echo $_DIR; ?>css/product-detail.css"/>
<link rel="stylesheet" href="<?php echo $_DIR; ?>css/main.css"/>
<link rel="stylesheet" href="<?php echo $_DIR; ?>css/cropper.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.min.js" integrity="sha512-m5kAjE5cCBN5pwlVFi4ABsZgnLuKPEx0fOnzaH5v64Zi3wKnhesNUYq4yKmHQyTa3gmkR6YeSKW1S+siMvgWtQ==" crossorigin="anonymous"></script>
<style>
    .owl-carousel .owl-stage {
        display: flex;
        align-items: center;
    }

    .owl-carousel .caption {
        text-align: center;
    }
    /*.owl-carousel .owl-item img {
        display: inline-block;
        width: 100%;
        max-height: 410px;
        width: auto;
    }*/
</style>
<div id="main">
    <div class="row">
        <div class="col-xs-12">
            <div class="col-md-12 col-xs-12  padding-0">
                <?php echo $breadCrumb; ?>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="container product-container">
                <div class="col-md-7 col-xs-12 padding-0">
                    <div class="col-xs-12 slider-active-buttons padding-0 text-left">
                        <span class="fa fa-image carousel"></span>
                        <span class="fa fa-crop cropper"></span>
                        <span data-product-id="<?php echo $data['ProductId']; ?>" class="fa fa-heart-o add-like-div"></span>
                    </div>
                    <div class="col-md-12 col-xs-12 product-slider  padding-0" id="carousel-div">
                        <div class="col-md-12 col-sm-12 col-xs-12 padding-0" id="product-slider">
                            <div class="outer">
                                <div id="big" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <img src="<?php echo $data['ProductPrimaryImage']; ?>"
                                             style="object-fit: contain;"
                                             height="460px"
                                             width="100%"/>
                                    </div>
                                    <?php foreach ($productSecondaryImages as $productSecondaryImage) { ?>
                                        <div class="item">
                                            <img src="<?php echo $productSecondaryImage['MediaUrl']; ?>"
                                                 style="object-fit: contain;"
                                                 height="460px"
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
                    <div id="cropper-div" class="col-xs-12 product-slider cropper-image padding-0">
<!--                        <img src="--><?php //echo $data['ProductPrimaryImage']; ?><!--"-->
<!--                             style="max-width: 100%";-->
<!--                             height="400px" width="100%" class="image"/>-->

                        <style>
                            .img-container-small{
                                min-width: 70vw; /*your responsive value here*/
                                min-height: 40vh; /*your responsive value here*/
                            }
                            .img-container-small img{
                                height: 320px;
                            }
                            #cropperImage{
                                max-width: 100%; /* prevent the overflow blip when the modal loads */
                            }
                        </style>

                        <div class="img-container img-container-large">
                            <img class="image" height="400px" src="<?php echo $data['ProductPrimaryImage']; ?>" id="cropperImage">
                        </div>
                        <div class="img-container img-container-small">
                            <img class="image" width="100%" src="<?php echo $data['ProductPrimaryImage']; ?>" id="cropperImage">
                        </div>

                    </div>
                    <!--                    <div class="col-xs-12 col-md-4 padding-0">-->
                    <!--                        <div class="box">-->
                    <!--                            <label class="upload-options btn btn-upload" for="inputImage"-->
                    <!--                                   title="Upload image file">-->
                    <!--                                <input type="file" class="sr-only" id="inputImage" name="file"-->
                    <!--                                       accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">-->
                    <!--                                <span class="docs-tooltip" data-animation="false"-->
                    <!--                                      title="طرح دلخواه">-->
                    <!--                                    آپلود طرح دلخواه-->
                    <!--              <span class="fa fa-upload"></span>-->
                    <!--            </span>-->
                    <!--                            </label>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                </div>
                <div class="col-md-5 col-xs-12">
                    <?php echo $productTitles; ?>
                    <div class="col-xs-12 pull-right product-size padding-0">
                        <label>انتخاب جنس</label>
                        <select id="priceDropDown">
                            <?php foreach ($productPrice as $item) { ?>
                                <option
                                        data-material-id="<?php echo $item['MaterialId']; ?>"
                                        data-price="<?php echo $item['PriceValue']; ?>">
                                    <?php echo $item['MaterialTitle']; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-xs-12 pull-right product-size padding-0">
                        <p style=" color: #9a9a9a;font-size: 14px;margin: 0;">
                            <b>بزرگترین سایز چاپ این تصویر</b>
                            <b style="direction: ltr;display: inline-block"><?php echo $data['ProductMaxWidth']; ?> X <?php echo $data['ProductMaxHeight']; ?></b>
                            <b>سانتی متر می باشد.</b>
                        </p>
                    </div>
                    <div class="col-xs-12 pull-right product-size padding-0">
                        <label>سایز دلخواه</label>

                        <input id="inputProductWidth"
                               class="metrics"
                               type="number"
                               min="0"
                               placeholder="عرض دلخواه"
                               max="<?php echo $data['ProductMaxWidth']; ?>"
                            <?php
                            if ($data['ProductIsFullWidth']) {
                                echo ' value ="' . $data['ProductMaxWidth'] . '"';
                                echo ' readonly = "readonly"';
                            }
                            ?> />
                        <input id="inputProductHeight"
                               class="metrics"
                               type="number"
                               min="0"
                               placeholder="ارتفاع دلخواه"
                               max="<?php echo $data['ProductMaxHeight']; ?>"
                            <?php
                            if ($data['ProductIsFullHeight']) {
                                echo ' value ="' . $data['ProductMaxHeight'] . '"';
                                echo ' readonly = "readonly"';
                            }
                            ?> />
                    </div>
                    <div class="col-xs-12 pull-right product-size services padding-0 <?php if(empty($services)){ echo 'hidden'; } ?>">
                        <label>خدمات:</label>
                        <?php
                        foreach ($services as $item) { ?>
                            <select name="inputProductServices"
                                    data-service-id="<?php echo $item['ServiceId']; ?>">
                                <?php foreach ($item['items']['data'] as $option) { ?>
                                    <option value="<?php echo $option['ServiceItemId']; ?>"
                                            data-service-item-price="<?php echo $option['ServiceItemPrice']; ?>">
                                        <?php echo $option['ServiceItemTitle']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        <?php } ?>
                    </div>
                    <div class="col-xs-12  product-detail-price padding-0">
                        <span>قیمت کل :</span>
                        <span class="product-detail-number">قیمت کل :</span>
                    </div>
                    <div class="col-xs-12 padding-0">
                        <h4 style="font-size: 14px;margin-top: 16px;color: #6c6c6c;">
                            <?php echo $productCategories[sizeof($productCategories)-1]['CategoryDeliveryTime']; ?>
                        </h4>
                    </div>
                    <div class="col-xs-12 padding-0 shopping-add-basket">
                        <a id="addToCart" data-product-id="<?php echo $data['ProductId']; ?>" href="javascript:void(0)">
                            افزودن به سبد خرید
                        </a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-md-12 col-xs-12 product-description">
                    <?php echo $data['ProductDescription']; ?>
                </div>
            </div>
        </div>
        <div id="related" class="row col-xs-12 related-product product-slider min grey-bg">
            <div class="container">
                <div class="col-xs-12 section">
                    <h2 class="text-center">محصولات مشابه</h2>
                    <div class="col-xs-12 pull-left list min">
                        <div class="owl-carousel">
                            <?php foreach ($relatedProducts as $item) { ?>
                                <div class="item">
                                    <a href="<?php echo productUrl($item['ProductId'], $item['ProductTitle']); ?>">
                                        <img src="<?php echo $item['ProductMockUpImage']; ?>" height="100%" width="100%"/>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo $_DIR; ?>js/cropper.js"></script>
<script src="<?php echo $_DIR; ?>js/jquery-cropper.js"></script>