<?php $_URL = base_url();
$_DIR = base_url('assets/ui/'); ?>

<div id="main" style="min-height: 100vh;">
    <div class="row">
        <div class="container">
            <div class="col-md-12 col-xs-12">
                <ul class="breadcrumb">
                    <li><a href="#">کاغذ دیواری</a></li>
                    <li><a href="#">اتاق کودک</a></li>
                    <li><a href="#">طرح لبخند</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-xs-12">
                <div class="col-md-12 col-xs-12 padding-right all-div-style-image-row">
                    <div class="col-md-2 col-xs-12 RightFloat height100 image-product-div">
                        <a href="<?php echo categoryUrl($categoryInfo['CategoryId'], $categoryInfo['CategoryTitle']); ?>">
                            <img src="<?php echo $categoryInfo['CategoryImage']; ?>" alt="" title=""/>
                        </a>
                    </div>
                    <div class="col-md-10 col-xs-12 image-main-div-detail">
                        <div class="col-md-12 col-xs-12 image-title-div padding-0">
                            <h5><?php echo $categoryInfo['CategoryTitle']; ?></h5>
                        </div>
                        <div class="col-md-12 col-xs-12 image-desc-div padding-0">
                            <?php echo $categoryInfo['CategoryDescription']; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xs-12 padding-t-3">
                <div class="col-md-4 col-xs-12 Ordering-main-div">
                    <label for="orderingProduct">مرتب سازی بر اساس :</label>
                    <select name="orderingProduct" id="orderingProduct">
                        <option>قیمت از کم به زیاد</option>
                        <option>قیمت از کم به زیاد</option>
                        <option>قیمت از کم به زیاد</option>
                    </select>
                </div>
                <div class="col-md-4 col-xs-12 grouping-rangeSlider-main-div LeftFloat">
                    <div class="center">
                        <div id="slider1"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xs-12 padding-t-3">
                <div class="col-md-12 col-xs-12 grouping-filtering-main-div">
                    <div class="multiselect">
                        <div class="selectBox">
                            <select class="ttt">
                                <option> گروه محصول</option>
                            </select>
                            <select class="ttt">
                                <option>مناسب برای</option>
                            </select>
                            <select class="ttt">
                                <option>جنس</option>
                            </select>
                        </div>
                        <div class="checkboxes">
                            <label class="checkbox-container">1
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox-container">1-1
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox-container">1-1-1
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox-container">1-1-1-1
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkboxes">
                            <label class="checkbox-container">2
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox-container">2-2
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox-container">2-2-2
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox-container">2-2-2-2
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkboxes">
                            <label class="checkbox-container">2
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox-container">3-2
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox-container">2-2-2
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox-container">2-2-2-2
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xs-12 padding-0">
                <div class="col-md-12 col-xs-12 grouping-ul-style margin-t-30">
                    <?php foreach ($products as $item) { ?>
                        <div class="col-md-4 col-sm-6 col-xs-12 grouping-li-style">
                            <div class="col-xs-12 one-product-detail">
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
                                <div class="col-md-12 col-xs-12 price-box">
                                        <span class="regular-price">
                                            <span class="item_price">&lrm;26,000<span class="unit">تومان</span>
                                        </span>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="col-md-12 col-xs-12 padding-0 pagination" style="height: 100px;">
                <nav aria-label="Page navigation" id="div1">
                    <ul class="pager grouping-pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                            </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">»</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>