<?php
$_URL = base_url();
$_DIR = base_url('assets/ui/');

?>

<style>
    body{
        direction: rtl;
        text-align: justify;
    }
</style>
<h2>اطلاعات محصول</h2>
<ul class="list-group" style="direction: rtl;">
    <li class="list-group-item">نام محصول:<?php echo $data['ProductTitle'] ?></li>
    <li class="list-group-item">زیر عنوان:<?php echo $data['ProductSubTitle'] ?></li>
    <li class="list-group-item">تعداد:<?php echo $data['ProductQuantity'] ?></li>
    <li class="list-group-item">آدرس کاتالوگ:<?php echo $data['ProductCatalogUrl'] ?></li>
    <li class="list-group-item">تصویر اصلی:<?php echo $data['ProductPrimaryImage'] ?></li>
    <li class="list-group-item">خلاصه محصول:<?php echo $data['ProductBrief'] ?></li>
    <li class="list-group-item">توصیحات محصول:<?php echo $data['ProductDescription'] ?></li>
    <li class="list-group-item">نوع محصول:<?php echo productTypePipe($data['ProductType']); ?></li>
    <li class="list-group-item">حداکثر ارتفاع:<?php echo $data['ProductMaxHeight'] ?></li>
    <li class="list-group-item">حداکثر عرض:<?php echo $data['ProductMaxWidth'] ?></li>
    <li class="list-group-item">آیا نصب دارد:<?php echo $data['ProductHasInstallation'] ?></li>
    <li class="list-group-item">هزینه نصب:<?php echo $data['ProductInstallationPrice'] ?></li>
    <li class="list-group-item">تاریخ ثبت:<?php echo $data['CreateDateTime'] ?></li>
</ul>
<h2>دسته بندی محصول</h2>
<ul class="list-group" style="direction: rtl;">
    <?php foreach ($productCategories as $productCategory) { ?>
        <li class="list-group-item">نام دسته بندی:<?php echo $productCategory['CategoryTitle'] ?></li>
    <?php } ?>
</ul>
<h2>ویژگی ها</h2>
<ul class="list-group" style="direction: rtl;">
    <li class="list-group-item">
        دسته بندی ویژگی:
        <?php echo $productRootCategoryProperties[0]['CategoryTitle'] ?>
    </li>
    <?php foreach ($productSelectedProperties as $item) { ?>
        <li class="list-group-item">
            شناسه ویژگی:<?php echo $item['PropertyOptionId'] ?>
            شناسه مقدار ویژگی:<?php echo $item['PropertyId'] ?>
        </li>
    <?php } ?>
</ul>
<h2>برچسب ها</h2>
<ul class="list-group" style="direction: rtl;">
    <?php foreach ($productTags as $item) { ?>
        <li class="list-group-item"><?php echo $item['TagTitle'] ?>
        </li>
    <?php } ?>
</ul>
