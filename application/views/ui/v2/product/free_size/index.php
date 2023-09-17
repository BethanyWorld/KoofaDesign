<?php $_URL = base_url();
$_DIR = base_url('assets/ui/'); ?>
<link rel="stylesheet" href="<?php echo $_DIR; ?>css/index.css">
<link rel="stylesheet" href="<?php echo $_DIR; ?>css/product-detail.css"/>
<link rel="stylesheet" href="<?php echo $_DIR; ?>css/main.css"/>
<link rel="stylesheet" href="<?php echo $_DIR; ?>css/cropper.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.min.js"
        integrity="sha512-m5kAjE5cCBN5pwlVFi4ABsZgnLuKPEx0fOnzaH5v64Zi3wKnhesNUYq4yKmHQyTa3gmkR6YeSKW1S+siMvgWtQ==" crossorigin="anonymous"></script>
<style>
    .owl-carousel .owl-stage {
        display: flex;
        align-items: unset;
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
                <input id="inputInstallPrice" type="hidden" value="<?php echo $installPrice; ?>"/>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="container product-container">
                <div class="col-md-7 col-xs-12 padding-0">
                    <div class="col-xs-12 slider-active-buttons padding-0 text-left">
                        <span class="fa fa-image carousel"></span>
                        <span class="fa fa-crop cropper"></span>
                        <span data-product-id="<?php echo $data['ProductId']; ?>"
                              class="fa fa-heart-o add-like-div"></span>
                    </div>
                    <div class="col-md-12 col-xs-12 product-slider  padding-0" id="carousel-div">
                        <?php echo $slider; ?>
                    </div>
                    <!-- for cropper-->
                    <div id="cropper-div" class="col-xs-12  cropper-image padding-0">
                        <div class="img-container img-container-large">
                            <img class="image" style="max-width: 100%;"  src="<?php echo $data['ProductPrimaryImage']; ?>" id="cropperImage">
                        </div>
                    </div>



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
                            <b style="direction: ltr;display: inline-block"><?php echo $data['ProductMaxWidth']; ?>
                                X <?php echo $data['ProductMaxHeight']; ?></b>
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

                    <div class="col-xs-12  product-detail-price padding-0">
                        <a target="_blank" href="<?php echo base_url('assets/ui/v2/assets/img/guide-1.jpg') ?>">
                        <p style="font-size: 14px;color:#4949ff;">راهنمای ارتفاع و عرض</p>
                            <img style="width:150px;" src="<?php echo base_url('assets/ui/v2/assets/img/guide-1.jpg') ?>" />
                        </a>
                        <br><br>
                    </div>


                    <div class="col-xs-12 pull-right product-size services padding-0 <?php if (empty($services)) { echo 'hidden'; } ?>">
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
                        <span class="product-detail-number"></span>
                    </div>
                    <div class="col-xs-12 padding-0">
                        <h4 style="font-size: 14px;margin-top: 16px;color: #6c6c6c;">
                            <?php echo $productCategories[sizeof($productCategories) - 1]['CategoryDeliveryTime']; ?>
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
                <?php echo $product_description; ?>
            </div>
        </div>
        <div id="related" class="row col-xs-12 related-product product-slider min grey-bg">
            <div class="container">
                <?php echo $related_products; ?>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo $_DIR; ?>js/cropper.js"></script>
<script src="<?php echo $_DIR; ?>js/jquery-cropper.js"></script>