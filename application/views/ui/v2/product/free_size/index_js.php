

<script type="text/javascript">

    !function(t){"use strict";var a=t.HTMLCanvasElement&&t.HTMLCanvasElement.prototype,l=t.Blob&&function(){try{return Boolean(new Blob)}catch(t){return!1}}(),u=l&&t.Uint8Array&&function(){try{return 100===new Blob([new Uint8Array(100)]).size}catch(t){return!1}}(),c=t.BlobBuilder||t.WebKitBlobBuilder||t.MozBlobBuilder||t.MSBlobBuilder,b=/^data:((.*?)(;charset=.*?)?)(;base64)?,/,r=(l||c)&&t.atob&&t.ArrayBuffer&&t.Uint8Array&&function(t){var e,o,n,a,r,i=t.match(b);if(!i)throw new Error("invalid data URI");for(e=i[2]?i[1]:"text/plain"+(i[3]||";charset=US-ASCII"),n=!!i[4],i=t.slice(i[0].length),o=(n?atob:decodeURIComponent)(i),n=new ArrayBuffer(o.length),a=new Uint8Array(n),r=0;r<o.length;r+=1)a[r]=o.charCodeAt(r);return l?new Blob([u?a:n],{type:e}):((i=new c).append(n),i.getBlob(e))};t.HTMLCanvasElement&&!a.toBlob&&(a.mozGetAsFile?a.toBlob=function(t,e,o){var n=this;setTimeout(function(){o&&a.toDataURL&&r?t(r(n.toDataURL(e,o))):t(n.mozGetAsFile("blob",e))})}:a.toDataURL&&r&&(a.msToBlob?a.toBlob=function(t,e,o){var n=this;setTimeout(function(){(e&&"image/png"!==e||o)&&a.toDataURL&&r?t(r(n.toDataURL(e,o))):t(n.msToBlob(e))})}:a.toBlob=function(t,e,o){var n=this;setTimeout(function(){t(r(n.toDataURL(e,o)))})})),"function"==typeof define&&define.amd?define(function(){return r}):"object"==typeof module&&module.exports?module.exports=r:t.dataURLtoBlob=r}(window);
    //# sourceMappingURL=canvas-to-blob.min.js.map



    $(document).ready(function () {
        setTimeout(function () {
            $('#product-slider #big img')
                .wrap('<span style="display:inline-block"></span>')
                .css('display', 'block')
                .parent()
                .zoom({magnify: 2});
        }, 300);
        $(".slider-active-buttons span").click(function () {
            $(".slider-active-buttons span").removeClass('active');
            $(this).addClass('active');
        });
        $inputInstallPrice = $("#inputInstallPrice").val();
        $mainPrice = 0;
        var bigimage = $("#big");
        var thumbs = $("#thumbs");
        var related = $("#related .owl-carousel");
        var syncedSecondary = true;
        bigimage.owlCarousel({
            items: 1,
            slideSpeed: 4000,
            nav: true,
            autoplay: false,
            center: true,
            dots: false,
            animateOut: 'fadeOut',
            loop: true,
            navText: [
                '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                '<i class="fa fa-angle-right" aria-hidden="true"></i>'
            ]
        }).on("changed.owl.carousel", syncPosition);
        thumbs.on("initialized.owl.carousel", function () {
            thumbs.find(".owl-item").eq(0).addClass("current");
        }).owlCarousel({
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
            items: 5,
            slideSpeed: 4000,
            nav: true,
            autoplay: true,
            margin: 0,
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
        $("#priceDropDown").change(function () {
            $(".metrics").trigger('input');
        });
        /*function setPrice() {
            $height = $("#inputProductHeight").val();
            $width = $("#inputProductWidth").val();
            $price = parseInt($("#priceDropDown").find(":selected").data('price'));
            if (Math.ceil(($width / 100)) != ($width / 100)) {
                $width = Math.ceil(($width / 100)) * 100;
            }
            $mainPrice = ($price * $width * $height);
            $mainInstallPrice = ($inputInstallPrice * $width * $height);
            $("[name='inputProductServices']").each(function(){
                if($(this).val() !== ""){
                    $mainPrice += $(this).find('option:selected').data('service-item-price');
                }
            });
            $html = "<p>" + (parseInt($mainPrice) + parseInt($mainInstallPrice )) + " تومان </p>";
            $('.product-detail-number').hide().fadeIn().html($html);
        }*/

        /*if(findBootstrapEnvironment() == 'lg' || findBootstrapEnvironment() == 'md') {
            $(".img-container-small").remove();
        }
        else{
            $(".img-container-large").remove();
        }*/

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
            viewMode: 2,
            toggleDragModeOnDblclick: false,
            aspectRatio: 'NAN',
            autoCropArea: 0,
            rotatable: false,
            scalable: false,
            zoomable: true,
            movable: false,
            zoomOnTouch: false,
            zoomOnWheel: false,
            wheelZoomRatio: false,
            cropBoxResizable: false,
            dragMode: 'move',
            preview: '.img-preview',
            crop: function (e) {
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
        var uploadedImageType = 'image/jpeg';
        var uploadedImageURL;
        // Tooltip
        $('[data-toggle="tooltip"]').tooltip();

        // Cropper
        /*if(findBootstrapEnvironment() == 'lg' || findBootstrapEnvironment() == 'md') {
            $image.cropper(options);
        }
        else{
            $image.cropper(options);
        }*/
        $image.cropper(options);
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
        } else {
            $inputImage.prop('disabled', true).parent().addClass('disabled');
        }
        $(".metrics").on('input', function () {
            if ($(this).val() > parseInt($(this).attr('max'))) {
                $(this).val(parseInt($(this).attr('max')));
            }
            $height = $("#inputProductHeight").val();
            $width = $("#inputProductWidth").val();

            $maxWidth = $("#inputProductWidth").attr('max');
            $maxHeight = $("#inputProductHeight").attr('max');

            $divideHeight = $maxHeight / $height;
            $divideWidth = $maxWidth / $width;
            var cropper = $image.data('cropper');

            console.log("Image max widht", $image.data('cropper').initialCropBoxData.maxWidth);
            console.log("Image max height", $image.data('cropper').initialCropBoxData.maxHeight);

            $imageWidth = cropper.getImageData().width;
            $imageHeight = cropper.getImageData().height;

            //check image oriention
            $imageOriention = '';
            if (($maxWidth / $maxHeight) < 1) {
                $imageOriention = 'AMOODI'; //VERTICAL
            } else if (($maxWidth / $maxHeight) > 1) {
                $imageOriention = 'OFOGHI'; //HORIZONTAL
            } else {
                $imageOriention = 'MORABAE'; //SQUARE
            }


            $isPaddle = false;
            if ($divideHeight == $divideWidth) {
                $isPaddle = true;
            }
            /* if numbers are puddle then crop is full */
            if ($isPaddle) {
                cropper.setCropBoxData({
                    left: 0,
                    top: 0,
                    width: $imageWidth,
                    height: $imageHeight,
                    maxWidth: $image.data('cropper').initialCropBoxData.maxWidth,
                    maxHeight: $image.data('cropper').initialCropBoxData.maxHeight,
                    imageSmoothingQuality: 'high',
                });
            } else {
                var cropper = $image.data('cropper');
                switch ($imageOriention) {
                    case 'MORABAE':
                    case 'AMOODI':
                    case 'OFOGHI':
                        $x = $maxWidth / $maxHeight;
                        $y = $width / $height;
                        $percentageOfMaxWidth = (100 * $width) / $maxWidth;
                        $percentageOfMaxHeight = (100 * $height) / $maxHeight;
                        if ($x > $y) {
                            $tempWidth = ($maxHeight / $height) * $width;
                            $percentageOfMaxWidth = (100 * $tempWidth) / $maxWidth;
                            $tempWidth = ($percentageOfMaxWidth * $imageWidth) / 100;
                            cropper.setCropBoxData({
                                left: 0,
                                top: 0,
                                width: $tempWidth,
                                height: $imageHeight,
                                maxWidth: $image.data('cropper').initialCropBoxData.maxWidth,
                                maxHeight: $image.data('cropper').initialCropBoxData.maxHeight,
                                imageSmoothingQuality: 'high',
                            });
                        }
                        if ($y > $x) {
                            $tempHeight = ($maxWidth / $width) * $height;
                            $percentageOfMaxHeigh = (100 * $tempHeight) / $maxHeight;
                            $tempHeight = ($percentageOfMaxHeigh * $imageHeight) / 100;
                            cropper.setCropBoxData({
                                left: 0,
                                top: 0,
                                width: $imageWidth,
                                height: $tempHeight,
                                maxWidth: $image.data('cropper').initialCropBoxData.maxWidth,
                                maxHeight: $image.data('cropper').initialCropBoxData.maxHeight,
                                imageSmoothingQuality: 'high',
                            });
                        }
                        if ($x === $y) {
                        }
                        break;
                }
            }
            $mainInstallPrice = ($inputInstallPrice * $width * $height);
            $price = parseInt($("#priceDropDown").find(":selected").data('price'));
            console.log($width * $height);
            $html = "<p>" + (parseInt($price * $width * $height) + parseInt($mainInstallPrice)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + " تومان </p>";
            $mainPrice = $price;
            $('.product-detail-number').hide().fadeIn().html($html);

        });
        //setPrice();

        $("#addToCart").click(function () {
            if ($("#inputProductWidth").val() == '' || $("#inputProductHeight").val() == '') {
                notify('لطفا ارتفاع و عرض دلخواه را وارد کنید', 'red');
                return false;
            }
            $id = $(this).data('product-id');
            var cropper = $image.data('cropper');
            console.log(cropper.getCroppedCanvas({
                minWidth: 1,
                minHeight: 1,
                maxWidth: 4024,
                maxHeight: 4024,
            }));


            cropper.getCroppedCanvas({
                minWidth: 1,
                minHeight: 1,
                maxWidth: 1024,
                maxHeight: 1024,
            }).toBlob(function (blob) {
                const formData = new FormData();
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
                            $inputServices = [];
                            $("[name='inputProductServices']").each(function () {
                                $inputServices.push($(this).val());
                            });
                            $inputMaterialId = $("#priceDropDown option:selected").data('material-id');
                            $.ajax({
                                type: 'post',
                                url: base_url + 'Cart/addDesignFreeSize',
                                data: {
                                    'inputProductId': $id,
                                    'inputMaterialId': $inputMaterialId,
                                    'inputProductWidth': $("#inputProductWidth").val(),
                                    'inputProductUploadImage': $result['fileSrc'],
                                    'inputProductHeight': $("#inputProductHeight").val(),
                                    'inputServices': JSON.stringify($inputServices)
                                },
                                success: function () {
                                    location.href = base_url + 'Cart'
                                },
                                error: function () {
                                }
                            });
                        } else {
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



        });


        $(".slider-active-buttons span.carousel").click(function () {
            $(".slider-active-buttons span").removeClass('active');
            $(this).addClass('active');
            $("#carousel-div").fadeIn();
            $("#cropper-div").hide();
        });
        $(".slider-active-buttons span.cropper").click(function () {
            $(".slider-active-buttons span").removeClass('active');
            $(this).addClass('active');
            $("#carousel-div").hide();
            $("#cropper-div").fadeIn();

            try {
                window.dispatchEvent(new Event('resize'));
            } catch ($e) {
                var evt = window.document.createEvent('UIEvents');
                evt.initUIEvent('resize', true, false, window, 0);
                window.dispatchEvent(evt);
            }


        });
        $("[name='inputProductServices']").change(function () {
            setPrice();
        });
        $(".slider-active-buttons span.carousel").click();
        $(".metrics").on('focus', function () {
            $(".slider-active-buttons span.cropper").click();
        });
    });
</script>