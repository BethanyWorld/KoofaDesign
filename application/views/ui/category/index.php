<?php $_URL = base_url();
$_DIR = base_url('assets/ui/'); ?>

<div id="main">
    <div class="row">
        <div class="container z-p">

            <!-- BreadCrumbs -->
            <div class="col-md-12 col-xs-12">
                <ul class="breadcrumb">
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
                        <a href="<?php echo categoryUrl($breadCrumb['current']['CategoryId'], $breadCrumb['current']['CategoryTitle']); ?>">
                            <?php echo $breadCrumb['current']['CategoryTitle']; ?>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Category Description -->
            <div class="col-xs-12 col-xs-12 z-p">
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
            <!-- Ordering -->
            <div class="col-md-12 col-xs-12 z-p padding-t-15">
                <div class="col-xs-12 Ordering-main-div">
                    <label for="orderingProduct">مرتب سازی بر اساس :</label>
                    <select name="orderingProduct" id="orderingProduct">
                        <option value="Asc">قیمت از کم به زیاد</option>
                        <option value="Desc">قیمت از کم به زیاد</option>
                    </select>
                </div>
            </div>

            <div class="col-md-12 col-xs-12 z-p padding-t-15">
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


            <div class="col-md-12 col-xs-12 z-p">
                <div class="col-md-12 col-xs-12 grouping-ul-style" id="product-container">
                </div>
            </div>

            <div class="col-md-12 col-xs-12 z-p pagination">
                <nav style="direction: ltr" id="pagination"
                     class="pagination-list text-center Page navigation"></nav>
            </div>
        </div>
    </div>
</div>