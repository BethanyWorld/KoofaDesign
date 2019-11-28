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
        /**/
        setPrice();
        $('.product-detail-number').html($html);
        $("#priceDropDown").change(function () {
            setPrice();
        });
        function setPrice() {
            $price = parseInt($("#priceDropDown").find(":selected").data('price'));
            console.log($price);
            $html = "<p>" + ($price) + " تومان </p>";
            $('.product-detail-number').hide().fadeIn().html($html);
        }
        /**/
        $("#addToCart").click(function () {

            $id = $(this).data('product-id');
            $inputSizeId = $("#priceDropDown option:selected").data('size-id');
            $inputMaterialId = $("#priceDropDown option:selected").data('material-id');
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