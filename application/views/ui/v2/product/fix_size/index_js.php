<script type="text/javascript">
    $(document).ready(function () {

        setTimeout(function(){
            $('#product-slider #big img')
                .wrap('<span style="display:inline-block"></span>')
                .css('display', 'block')
                .parent()
                .zoom({magnify:2});
        } , 3000);
        $(".slider-active-buttons span").click(function(){
            $(".slider-active-buttons span").removeClass('active');
            $(this).addClass('active');
        });

        $mainPrice = 0;
        var bigimage = $("#big");
        var thumbs = $("#thumbs");
        var related = $("#related .owl-carousel");
        var syncedSecondary = true;
        bigimage.owlCarousel({
            items: 1,
            nav: true,
            dots: false,
            animateOut: 'fadeOut',
            loop: true,
            responsiveRefreshRate: 200,
            navText: [
                '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                '<i class="fa fa-angle-right" aria-hidden="true"></i>'
            ]
        }).on("changed.owl.carousel", syncPosition);
        thumbs.on("initialized.owl.carousel", function () { thumbs.find(".owl-item").eq(0).addClass("current");}).owlCarousel({
            items: 4,
            dots: true,
            mouseDrag: false,
            nav: true,
            navText: [
                '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
                '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
            ],
            smartSpeed: 200,
            slideSpeed: 500,
            slideBy: 4,
            responsiveRefreshRate: 100
        }).on("changed.owl.carousel", syncPosition2);
        function syncPosition(el) {
            //if loop is set to false, then you have to uncomment the next line
            var current = el.item.index;
            //to disable loop, comment this block
            var count = el.item.count - 1;
            var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

            if (current < 0) {
                current = count;
            }
            if (current > count) {
                current = 0;
            }
            //to this
            thumbs
                .find(".owl-item")
                .removeClass("current")
                .eq(current)
                .addClass("current");
            var onscreen = thumbs.find(".owl-item.active").length - 1;
            var start = thumbs
                .find(".owl-item.active")
                .first()
                .index();
            var end = thumbs
                .find(".owl-item.active")
                .last()
                .index();

            if (current > end) {
                thumbs.data("owl.carousel").to(current, 100, true);
            }
            if (current < start) {
                thumbs.data("owl.carousel").to(current - onscreen, 100, true);
            }
        }
        function syncPosition2(el) {
            if (syncedSecondary) {
                var number = el.item.index;
                bigimage.data("owl.carousel").to(number, 100, true);
            }
        }
        related.owlCarousel({
            items: 4,
            slideSpeed: 4000,
            nav: true,
            autoplay: true,
            responsiveRefreshRate: 200,
            navText: [
                '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                '<i class="fa fa-angle-right" aria-hidden="true"></i>'
            ]
        });
        thumbs.on("click", ".owl-item", function (e) {
            e.preventDefault();
            var number = $(this).index();
            bigimage.data("owl.carousel").to(number, 300, true);
        });

        //remove duplicate values from material drop down
        var map = {};
        $('#priceMaterialDropDown option').each(function () {
            $materialId = $(this).data('material-id');
            if (map[$materialId]) {
                $(this).remove()
            }
            map[$materialId] = true;
        });
        //select first option selected in both drop downs
        $("#priceMaterialDropDown").find('option').eq(0).attr('selected','selected');
        $("#priceSizeDropDown").find('option').eq(0).attr('selected','selected');
        $("#priceMaterialDropDown").change(function () {
            $("#priceSizeDropDown").html('');
            setTimeout(function() {
                $("#priceSizeDropDown").html($("#priceDropDown").html());
                $materialId = $("#priceMaterialDropDown").find(":selected").data('material-id');
                $("#priceSizeDropDown").find('option').each(function(){
                    if($(this).data('material-id') !== $materialId){
                        $(this).remove();
                    }
                });
                $("#priceSizeDropDown").find('option').eq(0).attr('selected','selected');
                setPrice();
            }, 500);
        });
        $("#priceSizeDropDown").change(function () {
            setPrice();
        });
        function setPrice() {
            $materialId = $("#priceMaterialDropDown").find(":selected").data('material-id');
            $sizeId = $("#priceSizeDropDown").find(":selected").data('size-id');
            $("#priceDropDown").find('option').each(function(){

                if($(this).data('material-id') === $materialId && $(this).data('size-id') === $sizeId){
                    $price = parseInt($(this).data('price'));
                    /*$("[name='inputProductServices']").each(function(){
                        if($(this).val() !== ""){
                            $price += $(this).find('option:selected').data('service-item-price');
                        }
                    });*/
                    $html = "<p>" + ($price).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + " تومان </p>";
                    $('.product-detail-number').hide().fadeIn().html($html);
                }
            });
        }
        $("#priceMaterialDropDown").change();
        setPrice();
        $("#addToCart").click(function () {

            $id = $(this).data('product-id');
            $inputSizeId = $("#priceSizeDropDown option:selected").data('size-id');
            $inputMaterialId = $("#priceMaterialDropDown option:selected").data('material-id');
            $inputHastInstallation = $("#wantInstallation").val();

            var file_data = null;
            var form_data = new FormData();
            form_data.append('file', file_data);
            $id = $(this).data('product-id');
            $.ajax({
                url: base_url + "Cart/uploadFile",
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function (data) {
                    $result = jQuery.parseJSON(data);
                    if($result['success']){
                        $inputServices = [];
                        $("[name='inputProductServices']").each(function(){
                            $inputServices.push($(this).val());
                        });
                        $.ajax({
                            type: 'post',
                            url: base_url + 'Cart/addDesignFixSize',
                            data: {
                                'inputProductId': $id,
                                'inputSizeId': $inputSizeId,
                                'inputMaterialId': $inputMaterialId,
                                'inputProductUploadImage': $result['fileSrc'],
                                'inputProductHasInstallation': 0,
                                'inputServices': JSON.stringify($inputServices)
                                /* This type of product has not upload file */
                            },
                            success: function () {
                                location.href = base_url + 'Cart'
                            },
                            error: function () {
                            }
                        });
                    }
                    else{
                        toggleLoader();
                        $result = jQuery.parseJSON(data);
                        notify($result['content'], $result['type']);
                    }
                },
                error: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                }
            });

        });
        $("[name='inputProductServices']").change(function () {
            setPrice();
        });
    });
</script>