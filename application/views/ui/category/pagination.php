<script type="text/javascript">
    $(document).ready(function () {
        $defaultPageSize = <?php echo $this->config->item('defaultPageSize'); ?>;
        $numRows = <?php echo $numRows; ?>;
        if ($numRows > 0) {
            $('#pagination').bootpag({
                total: Math.ceil($numRows / $defaultPageSize),
                maxVisible: 5
            });
        }
        else {
            $('#pagination').empty();
        }
    });
</script>
<?php
if ($data) {
    foreach ($data as $item) { ?>
        <div class="col-md-4 col-sm-6 col-xs-12 grouping-li-style">
            <div class="col-xs-12 one-product-detail">
                <div class="col-md-12 col-xs-12 product-keeper">
                    <div class="product-tool">
                        <?php setTypeBadge($item['ProductType']); ?>
                    </div>
                    <a href="<?php echo productUrl($item['ProductId'], $item['ProductTitle']); ?>">
                        <img src="<?php echo $item['ProductMockUpImage']; ?>" height="100%"
                             width="100%"/>
                    </a>
                    <?php setSpecialBadge($item['ProductIsSpecial']); ?>
                </div>
                <div class="col-md-12 col-xs-12  padding-response">
                    <a href="<?php echo productUrl($item['ProductId'], $item['ProductTitle']); ?>">
                        <h3 class="product-info"><?php echo $item['ProductTitle']; ?></h3>
                    </a>
                </div>
                <div class="col-md-12 col-xs-12 price-box">
                    <p class="regular-price">
                        <span class="item_price">
                            <?php showProductPrice($item['price'],$item['ProductType']); ?>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    <?php }
} else {
    ?>
    <div class="col-xs-12 alert alert-danger text-center">
        موردی یافت نشد
    </div>
<?php } ?>
