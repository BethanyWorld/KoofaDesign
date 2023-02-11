<?php $_URL = base_url();
$_DIR = base_url('assets/ui/'); ?>
<link rel="stylesheet" href="<?php echo $_DIR; ?>css/index.css">
<div id="main">
    <div class="row">
        <!-- BreadCrumbs -->
        <div class="breadcrumb-container">
            <div class="container">
                <ol class="breadcrumb">
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
                        <?php echo $breadCrumb['current']['CategoryTitle']; ?>
                    </li>
                </ol>
            </div>
        </div>
        <div class="container" style="position: relative;">
            <div class="col-xs-12" style="padding: 0;">
                <div class="col-md-2 col-xs-12 pull-right category-lists p-0">
                    <h2>دسته بندی محصولات</h2>
                    <ul class="list-group p-0">
                        <?php foreach ($rootCategories as $rootCategory) { ?>
                            <li class="list-group-item <?php if($rootCategory['CategoryId'] == $breadCrumb['current']['CategoryId']) echo "active"; ?>">
                                <a href="<?php echo categoryUrl($rootCategory['CategoryId'], $rootCategory['CategoryTitle']); ?>">
                                    <?php echo $rootCategory['CategoryTitle']; ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-md-10 col-xs-12 category-list-box">
                    <div class="col-xs-12 pl-0 p-x-0">
                        <div class="col-xs-12 sort-box hidden-xs hidden-sm">
                            <strong>مرتب سازی بر اساس:</strong>
                            <ul class="ordering" name="inputOrderingProductPrice">
                                <li data-type="Newest"  class="active">جدیدترین</li>
                                <li data-type="Sale">پرفروش ترین</li>
                                <li data-type="View">پربازدیدترین</li>
                                <li data-type="ASC">ارزان ترین</li>
                                <li data-type="DESC">گران ترین</li>
                            </ul>
                        </div>
                        <div class="col-xs-12 sort-box visible-xs vivible-sm">
                            <label for="inputOrderingProductPrice">مرتب سازی بر اساس:</label>
                            <select class="select-ordering" name="inputOrderingProductPrice">
                                <option data-type="Newest">جدیدترین</option>
                                <option data-type="Sale">پرفروش ترین</option>
                                <option data-type="View">پربازدیدترین</option>
                                <option data-type="ASC">ارزان ترین</option>
                                <option data-type="DESC">گران ترین</option>
                            </select>
                        </div>
                    </div>
                    <div class="product-container section-min-xs">
                        <!-- Ordering -->
                        <div class="col-xs-12 p-0">
                            <div class="col-md-12 col-xs-12 grouping-ul-style p-0" id="product-container">
                            </div>
                        </div>
                        <div class="col-xs-12 z-p pagination">
                            <nav style="direction: ltr" id="pagination"
                                 class="pagination-list text-center Page navigation"></nav>
                        </div>
                    </div>
                    <div class="row hidden">
                        <div class="col-xs-12 pl-0">
                            <div class="category-info rtl text-justify">
                                <h1><?php echo $categoryInfo['CategoryTitle']; ?></h1>
                                <p>
                                    <?php echo $categoryInfo['CategoryDescription']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>