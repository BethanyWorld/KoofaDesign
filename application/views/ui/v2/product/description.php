<div class="col-md-12 col-xs-12 product-tabs">
    <ul>
        <li class="active" data-class="product-description-content">توضیحات</li>
        <li data-class="product-description-table">مشخصات</li>
        <li data-class="product-description-comment">نظرات</li>
    </ul>
</div>


<div class="col-md-12 col-xs-12 tab-content product-description product-description-content">
    <?php echo $productCategories[sizeof($productCategories) - 1]['CategoryDescription']; ?>
    <?php echo $data['ProductDescription']; ?>
</div>
<div class="col-md-12 col-xs-12 tab-content product-description product-description-table">
    <?php echo $data['ProductDescriptionTable']; ?>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $(".product-tabs li").click(function(){
            $(".product-tabs li").removeClass('active');
            $(this).addClass('active');

            $class = $(this).data('class');
            $(".tab-content").hide();
            $("."+$class).show();
        });
        $(".product-tabs li").eq(0).click();
    });
</script>