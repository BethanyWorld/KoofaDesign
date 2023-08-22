<?php $_URL = base_url(); $_DIR = base_url('assets/ui/');  ?>
<link rel="stylesheet" href="<?php echo $_DIR; ?>css/index.css">
<link rel="stylesheet" href="<?php echo $_DIR; ?>css/product-detail.css"/>
<link rel="stylesheet" href="<?php echo $_DIR; ?>css/main.css"/>
<link rel="stylesheet" href="<?php echo $_DIR; ?>css/cropper.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.min.js" integrity="sha512-m5kAjE5cCBN5pwlVFi4ABsZgnLuKPEx0fOnzaH5v64Zi3wKnhesNUYq4yKmHQyTa3gmkR6YeSKW1S+siMvgWtQ==" crossorigin="anonymous"></script>
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
            </div>
        </div>
        <div class="col-xs-12">
            <div class="container product-container">
                <div class="col-md-7 col-xs-12 padding-0">
                    <div class="col-xs-12 slider-active-buttons padding-0 text-left">
                        <span data-product-id="<?php echo $data['ProductId']; ?>" class="fa fa-heart-o add-like-div"></span>
                    </div>
                    <div class="col-md-12 col-xs-12 product-slider  padding-0" id="carousel-div">
                        <?php echo $slider; ?>
                    </div>
                    <!--                    <div class="col-xs-12 col-md-4 padding-0">-->
                    <!--                        <div class="box">-->
                    <!--                            <div class="upload-options">-->
                    <!--                                <label>-->
                    <!--                                    <span>آپلود طرح دلخواه</span>-->
                    <!--                                    <span class="fa fa-upload"></span>-->
                    <!--                                    <input type="file" class="image-upload" id="inputAttachment"/>-->
                    <!--                                </label>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                </div>
                <div class="col-md-5 col-xs-12">
                    <?php echo $productTitles; ?>
                    <div class="col-xs-12 pull-right product-size padding-0">
                        <label>انتخاب جنس</label>
                        <select id="priceMaterialDropDown">
                            <?php foreach ($productPrice as $item) { ?>
                                <option data-size-id="<?php echo $item['SizeId']; ?>"
                                        data-material-id="<?php echo $item['MaterialId']; ?>"
                                        data-price="<?php echo $item['PriceValue']; ?>">
                                    <?php echo $item['MaterialTitle']; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-xs-12 pull-right product-size padding-0">
                        <label>انتخاب سایز</label>
                        <select id="priceSizeDropDown">
                            <?php foreach ($productPrice as $item) { ?>
                                <option data-size-id="<?php echo $item['SizeId']; ?>"
                                        data-material-id="<?php echo $item['MaterialId']; ?>"
                                        data-price="<?php echo $item['PriceValue']; ?>">
                                    <?php echo $item['SizeUserTitle']; ?>
                                </option>
                            <?php } ?>
                        </select>
                        <select id="priceDropDown" class="hidden">
                            <?php foreach ($productPrice as $item) { ?>
                                <option data-size-id="<?php echo $item['SizeId']; ?>"
                                        data-material-id="<?php echo $item['MaterialId']; ?>"
                                        data-price="<?php echo $item['PriceValue']; ?>">
                                    <?php echo $item['SizeTitle']; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-xs-12 pull-right product-size services padding-0 <?php if (empty($services)) { echo 'hidden'; } ?>">
                        <div class="col-xs-12 pull-right product-size services padding-0">
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
                    </div>
                    <div class="col-xs-12  product-detail-price product-detail-number padding-0">
                        <?php echo number_format($productPrice[0]['PriceValue']); ?>
                        تومان
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
            <div class="col-xs-12 padding-0">
                <div class="container">
                    <?php echo $product_description; ?>
                </div>
            </div>
        </div>
        <div id="related" class="row col-xs-12 related-product product-slider min grey-bg">
            <div class="container">
                <?php echo $related_products; ?>
            </div>
        </div>
    </div>
</div>