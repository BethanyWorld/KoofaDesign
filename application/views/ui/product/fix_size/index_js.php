<script type="text/javascript">
    $(document).ready(function () {
        var bigimage = $("#big");
        var thumbs = $("#thumbs");
        //var totalslides = 10;
        var syncedSecondary = true;
        bigimage.owlCarousel({
            items: 1,
            slideSpeed: 2000,
            nav: true,
            autoplay: true,
            dots: false,
            animateOut: 'fadeOut',
            loop: true,
            responsiveRefreshRate: 200,
            navText: [
                '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                '<i class="fa fa-angle-right" aria-hidden="true"></i>'
            ]
        }).on("changed.owl.carousel", syncPosition);
        thumbs.on("initialized.owl.carousel", function () {
            thumbs.find(".owl-item").eq(0).addClass("current");
        })
        .owlCarousel({
            items: 8,
            dots: true,
            nav: true,
            mouseDrag: false,
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
                    $html = "<p>" + ($price) + " تومان </p>";
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


            var file_data = $('#inputAttachment').prop('files')[0];
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
                        $.ajax({
                            type: 'post',
                            url: base_url + 'Cart/addDesignFixSize',
                            data: {
                                'inputProductId': $id,
                                'inputSizeId': $inputSizeId,
                                'inputMaterialId': $inputMaterialId,
                                'inputProductUploadImage': $result['fileSrc'],
                                'inputProductHasInstallation': 0
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
        $(".add-like-div").click(function () {
            //toggleLoader();
            $id = $(this).data('product-id');
            $.ajax({
                type: 'post',
                url: base_url + 'Product/doAddWishList',
                data: {
                    'inputProductId': $id
                },
                success: function (data) {
                    $result = JSON.parse(data);
                    notify($result['content'] , $result['type']);
                    //location.href = base_url + 'Cart'
                },
                error: function () {
                }
            });
        });
        var boxes = document.querySelectorAll('.box');
        for (let i = 0; i < boxes.length; i++) {
            let box = boxes[i];
            initImageUpload(box);
        }
        function initImageUpload(box) {
            let uploadField = box.querySelector('.image-upload');
            uploadField.addEventListener('change', getFile);
            function getFile(e) {
                let file = e.currentTarget.files[0];
                previewImage(file);
            }
            function previewImage(file) {
                let reader = new FileReader();
                reader.onload = function () {
                    $(".upload-image-container").fadeIn();
                    $("#upload-image").fadeIn().attr('src', reader.result);
                    //reader.result
                }
                reader.readAsDataURL(file);
            }

        }
        $("#remove-upload-file").click(function () {
            $(".upload-image-container").fadeOut();
            $("#upload-image").fadeOut().attr('src', '');
        });
    });
</script>