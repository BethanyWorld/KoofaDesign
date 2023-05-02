<div class="col-md-12 col-sm-12 col-xs-12 padding-0" id="product-slider">
    <div class="outer">
        <div id="big" class="owl-carousel owl-theme">
            <div class="item">
                <img src="<?php echo $data['ProductPrimaryImage']; ?>" height="100%" width="100%"/>
            </div>
            <?php foreach ($productSecondaryImages as $productSecondaryImage) { ?>
                <div class="item">
                    <img src="<?php echo $productSecondaryImage['MediaUrl']; ?>" height="100%" width="100%"/>
                </div>
            <?php } ?>
        </div>
        <div id="thumbs" class="owl-carousel owl-theme">
            <div class="item">
                <img src="<?php echo $data['ProductPrimaryImage']; ?>"/>
            </div>
            <?php foreach ($productSecondaryImages as $productSecondaryImage) { ?>
                <div class="item">
                    <img src="<?php echo $productSecondaryImage['MediaUrl']; ?>"/>
                </div>
            <?php } ?>
        </div>
    </div>
</div>