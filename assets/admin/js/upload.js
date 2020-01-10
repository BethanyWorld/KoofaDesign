
    $(document).ready(function () {
        $mainPrice = 0;
        var bigimage = $("#big");
        var thumbs = $("#thumbs");
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
        thumbs.on("click", ".owl-item", function (e) {
            e.preventDefault();
            var number = $(this).index();
            bigimage.data("owl.carousel").to(number, 300, true);
        });
        /**/
        $("#priceDropDown").change(function () {
            setPrice();
        });
        function setPrice() {
            $height = $("#inputProductHeight").val();
            $width = $("#inputProductWidth").val();
            $price = parseInt($("#priceDropDown").find(":selected").data('price'));
            if (Math.ceil(($width / 100)) != ($width / 100)) {
                $width = Math.ceil(($width / 100))*100;
            }
            $html = "<p>" + ($price*$width*$height) + " تومان </p>";
            $mainPrice = $price;
            $('.product-detail-number').hide().fadeIn().html($html);
        }
        var URL = window.URL || window.webkitURL;
        var $image = $('.image');
        var $download = $('#download');
        var $dataX = $('.dataX');
        var $dataY = $('.dataY');
        var $dataHeight = $('#dataHeight');
        var $dataWidth = $('#dataWidth');
        var $dataRotate = $('#dataRotate');
        var $dataScaleX = $('#dataScaleX');
        var $dataScaleY = $('#dataScaleY');
        var options = {
            aspectRatio: '',
            background: false,
            autoCropArea: 1,
            rotatable: false,
            scalable: false,
            zoomable: false,
            movable: false,
            zoomOnTouch: false,
            zoomOnWheel: false,
            wheelZoomRatio: false,
            cropBoxResizable: false,
            dragMode: 'move',
            preview: '.img-preview',
            crop: function (e) {
                console.log(e.detail.x);
                $dataX.val(Math.round(e.detail.x));
                $dataY.val(Math.round(e.detail.y));
                $dataHeight.val(Math.round(e.detail.height));
                $dataWidth.val(Math.round(e.detail.width));
                $dataRotate.val(e.detail.rotate);
                $dataScaleX.val(e.detail.scaleX);
                $dataScaleY.val(e.detail.scaleY);
            }
        };
        var originalImageURL = $image.attr('src');
        var uploadedImageName = 'cropped.jpg';
        var uploadedImageType = 'image/jpeg';
        var uploadedImageURL;
        // Tooltip
        $('[data-toggle="tooltip"]').tooltip();
        // Cropper
        $image.on({
            ready: function (e) {
                //console.log(e.type);
            },
            cropstart: function (e) {
                //console.log(e.type);
            },
            cropmove: function (e) {
                //console.log(e.type);
            },
            cropend: function (e) {
                //console.log(e.type);
            },
            crop: function (e) {
                //console.log(e.type);
            },
            zoom: function (e) {
                //console.log(e.type);
            }
        }).cropper(options);
        // Buttons
        if (!$.isFunction(document.createElement('canvas').getContext)) {
            $('button[data-method="getCroppedCanvas"]').prop('disabled', true);
        }
        if (typeof document.createElement('cropper').style.transition === 'undefined') {
            $('button[data-method="rotate"]').prop('disabled', true);
            $('button[data-method="scale"]').prop('disabled', true);
        }
        // Methods
        // Import image
        var $inputImage = $('#inputImage');
        if (URL) {
            $inputImage.change(function () {
                var files = this.files;
                var file;
                if (!$image.data('cropper')) {
                    return;
                }
                if (files && files.length) {
                    file = files[0];
                    if (/^image\/\w+$/.test(file.type)) {
                        uploadedImageName = file.name;
                        uploadedImageType = file.type;
                        if (uploadedImageURL) {
                            URL.revokeObjectURL(uploadedImageURL);
                        }
                        uploadedImageURL = URL.createObjectURL(file);
                        $image.cropper('destroy').attr('src', uploadedImageURL).cropper(options);
                        $inputImage.val('');
                    } else {
                        window.alert('لطفا یک تصویر انتخاب کنید');
                    }
                }
            });
        }
        else {
            $inputImage.prop('disabled', true).parent().addClass('disabled');
        }
        $(".metrics").on('keyup', function () {
            $height = $("#inputProductHeight").val();
            $width = $("#inputProductWidth").val();
            if (Math.ceil(($width / 100)) != ($width / 100)) {
                $width = Math.ceil(($width / 100))*100;
            }
            var cropper = $image.data('cropper');
            var ratio = cropper.imageData.width /  cropper.imageData.naturalWidth;
            cropper.setCropBoxData({width: $width*ratio, height: $height*ratio});

            $price = parseInt($("#priceDropDown").find(":selected").data('price'));
            $html = "<p>" + ($price*$width*$height) + " تومان </p>";
            $mainPrice = $price;
            $('.product-detail-number').hide().fadeIn().html($html);
        });
        /**/
        $("#addToCart").click(function () {
            $id = $(this).data('product-id');
            var cropper = $image.data('cropper');
            cropper.getCroppedCanvas().toBlob((blob) => {
                const formData = new FormData();
                // Pass the image file name as the third parameter if necessary.
                formData.append('file', blob, 'example.png');
                $.ajax({
                    url: base_url + "Cart/uploadFile",
                    dataType: 'text',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formData,
                    type: 'post',
                    success: function (data) {
                        $result = jQuery.parseJSON(data);
                        if ($result['success']) {
                            $inputMaterialId = $("#priceDropDown option:selected").data('material-id');
                            $.ajax({
                                type: 'post',
                                url: base_url + 'Cart/addDesignFreeSize',
                                data: {
                                    'inputProductId': $id,
                                    'inputMaterialId': $inputMaterialId,
                                    'inputProductWidth': $("#inputProductWidth").val(),
                                    'inputProductUploadImage': $result['fileSrc'],
                                    'inputProductHeight': $("#inputProductHeight").val()
                                },
                                success: function () {
                                    location.href = base_url + 'Cart'
                                },
                                error: function () {
                                }
                            });
                        }
                        else {
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
            }/*, 'image/png' */);
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
                    notify($result['content'], $result['type']);
                    location.href = base_url + 'Cart'
                },
                error: function () {
                }
            });
        });
    });