<?php
if ($data) {
    foreach ($data as $item) { ?>
        <li class="list-group-item">
            <span>
                <a class="item-result" href="<?php echo productUrl($item['ProductId'], $item['ProductTitle']); ?>">
                    <img style="width: 85px;    height: 60px;float: right;margin-left: 15px;border-radius: 4px;" src="<?php echo $item['ProductMockUpImage']; ?>" />
                    <?php echo $item['ProductTitle']; ?>
                </a>
            </span>
            <span>در دسته بندی</span>
            <span>
                <a class="item-result" href="<?php echo categoryUrl($item['CategoryId'], $item['CategoryTitle']); ?>">
                    <?php echo $item['CategoryTitle']; ?>
                </a>
            </span>
        </li>
    <?php }
} else {
    ?>
    <div class="col-xs-12 alert alert-danger text-center">
        موردی یافت نشد
    </div>
<?php } ?>
