<div class="col-xs-12 section">
    <h2 class="text-center">محصولات مشابه</h2>
    <div class="col-xs-12 pull-left list min">
        <div class="owl-carousel">
            <?php foreach ($relatedProducts as $item) { ?>
                <div class="item">
                    <a href="<?php echo productUrl($item['ProductId'], $item['ProductTitle']); ?>">
                        <img src="<?php echo $item['ProductMockUpImage']; ?>" height="100%" width="100%"/>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>