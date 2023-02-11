<?php $_URL = base_url();
$_DIR = base_url('assets/ui/'); ?>
<link rel="stylesheet" href="<?php echo $_DIR; ?>css/index.css">
<div id="main">
    <div class="row">
        <div class="container z-p">
            <!-- BreadCrumbs -->
            <div class="col-md-12 col-xs-12" style="padding: 0px 8px;">
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
            <div class="col-xs-12 col-xs-12" style="padding: 5px 8px;">
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
            <div class="col-md-12 col-xs-12" style="padding: 5px 8px;">
                <div class="col-xs-12 Ordering-main-div">
                    <label for="inputOrderingProductPrice">مرتب سازی بر اساس :</label>
                    <select name="inputOrderingProductPrice" id="inputOrderingProductPrice">
                        <option value="" selected>-- انتخاب کنید --</option>
                        <option value="ASC">قیمت از کم به زیاد</option>
                        <option value="DESC">قیمت از زیاد به کم</option>
                    </select>
                </div>
            </div>
            <?php if (isset($properties) && is_array($properties)) { ?>
                <div class="col-md-3 col-xs-12 pull-right filter-products">
                    <?php foreach ($properties as $property) { ?>
                        <div class="filter-item">
                            <h4 data-property-id="<?php echo $property['PropertyId']; ?>"><?php echo $property['PropertyTitle']; ?></h4>
                            <ul>
                                <?php foreach ($property['properties'] as $item) { ?>
                                    <li>
                                        <input class="styled-checkbox property-option"
                                               data-property-id="<?php echo $item['CategoryPropertyOptionId']; ?>"
                                               id="property-<?php echo $item['CategoryPropertyOptionId']; ?>"
                                               type="checkbox" value="<?php echo $item['CategoryPropertyOptionId']; ?>">
                                        <label for="property-<?php echo $item['CategoryPropertyOptionId']; ?>">
                                            <?php echo $item['CategoryPropertyOptionTitle']; ?>
                                        </label>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>

            <div class="col-md-9 col-xs-12 z-p">
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