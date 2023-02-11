<script type="text/javascript">
    $(document).ready(function () {
        $defaultPageSize = <?php echo $this->config->item('defaultPageSize'); ?>;
        $numRows = <?php echo $numRows; ?>;
        if ($numRows > 0) {
            $('#pagination').bootpag({
                total: Math.ceil($numRows / $defaultPageSize),
                maxVisible: 5
            });
        } else {
            $('#pagination').empty();
        }
    });
</script>
<?php
if ($data) {
    foreach ($data as $item) { ?>
        <div class="col-md-4 col-xs-6 p-0 pull-right p-item">
            <a target="_blank" href="<?php echo productUrl($item['ProductId'], $item['ProductTitle']); ?>">
                <div class="col-xs-12 product-item">
                    <div class="product-image" style="background: url('<?php echo $item['ProductMockUpImage']; ?>');"></div>
                    <div class="product-info">
                        <h4 class="text-center">
                            <strong><?php echo $item['ProductTitle']; ?></strong>
                            <i class="fa fa-heart-o"></i>
                        </h4>
                        <span class="price-begin">
                            <?php
                            if (isset($item['price'][0])) {
                                showProductPrice($item['price'], $item['ProductType']);
                            }
                            ?>
                        </span>
                    </div>
                </div>
            </a>
        </div>
    <?php }
} else {
    ?>
    <div class="text-center grouping-li-style">
        <img src="<?php echo base_url('assets/ui/images/pnf.png') ?>" width="100%"/>
        <h2 class="text-center">محصولی یافت نشد</h2>
    </div>
<?php } ?>
