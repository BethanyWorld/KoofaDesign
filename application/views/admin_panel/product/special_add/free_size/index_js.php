<script type="text/javascript">
    $(document).ready(function () {
        /* Update User Info */
        $("#editDesignFreeSize").click(function () {
            $inputProductId = $.trim($("#inputProductId").val());
            $inputProductTitle = $.trim($("#inputProductTitle").val());
            $inputProductSubTitle = $.trim($("#inputProductSubTitle").val());
            $inputProductCatalogUrl = $.trim($("#inputProductCatalogUrl").val());
            $inputProductType = $.trim($("#inputProductType").val());
            $inputProductBrief = $.trim($("#inputProductBrief").val());
            $inputProductDescription = CKEDITOR.instances.inputProductDescription.getData();
            $inputProductPrimaryImage = $.trim($("#inputProductPrimaryImage").val());
            $inputProductSecondaryImage = $("[name=inputProductSecondaryImage]").map(function () {
                return $(this).val();
            }).get();
            $inputProductTag = $("[name=inputProductTag]").map(function () {
                return $(this).val();
            }).get();

            $inputProductCategory = $("[name=inputProductCategory]:checked").map(function () {
                return $(this).val();
            }).get();
            $inputProductMaxHeight = $.trim($("#inputProductMaxHeight").val());
            $inputProductMaxWidth = $.trim($("#inputProductMaxWidth").val());
            /*$inputProductCategoryProperty = [];
            $("[name=inputProductCategoryProperty]").each(function () {
                $propertyId = $(this).data('id');
                $propertyOptionId = $(this).val();
                $inputProductCategoryProperty.push({
                    'propertyId': $propertyId,
                    'propertyOptionId': $propertyOptionId
                });
            });*/

            if ($("[name='inputProductHasInstallation']").is(':checked')){
                $inputProductHasInstallation = true;
            }
            else{
                $inputProductHasInstallation = false;
            }
            $inputProductInstallationPrice = $("#inputProductInstallationPrice").val();



            $inputProductMaterial = [];
            $inputProductSize = [];
            $inputProductPrice = [];
            $(".inputProductTempMaterial").each(function () {
                $inputProductMaterial.push( $(this).val());
            });
            $(".inputProductTempPrice").each(function () {
                $inputProductPrice.push( $(this).val());
            });
            if (isEmpty($inputProductTitle) ||
                isEmpty($inputProductMaxHeight) ||
                isEmpty($inputProductMaxWidth) ||
                isEmpty($inputProductType) ||
                isEmpty($inputProductDescription) ||
                isEmpty($inputProductPrimaryImage) ||
                isEmpty($inputProductCategory)) {
                notify('لطفا تمامی موارد را کامل کنید' , 'red');
            }
            else {
                $sendData = {
                    'inputProductId': $inputProductId,
                    'inputProductTitle': $inputProductTitle,
                    'inputProductSubTitle': $inputProductSubTitle,
                    'inputProductCatalogUrl': $inputProductCatalogUrl,
                    'inputProductType': $inputProductType,
                    'inputProductBrief': $inputProductBrief,
                    'inputProductDescription': $inputProductDescription,
                    'inputProductPrimaryImage': $inputProductPrimaryImage,
                    'inputProductSecondaryImage': $inputProductSecondaryImage,
                    'inputProductCategory': $inputProductCategory,
                    'inputProductMaxHeight': $inputProductMaxHeight,
                    'inputProductMaxWidth': $inputProductMaxWidth,
                    'inputProductMaterial': $inputProductMaterial,
                    'inputProductPrice': $inputProductPrice,
                    'inputProductTag': $inputProductTag,
                    'inputProductHasInstallation': $inputProductHasInstallation,
                    'inputProductInstallationPrice': $inputProductInstallationPrice,
                }
                toggleLoader();
                $.ajax({
                    type: 'post',
                    url: base_url + 'Product/doEditDesignFreeSizeProduct',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = jQuery.parseJSON(data);
                        notify($result['content'], $result['type']);
                        reloadPage(1000);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        notify($result['content'], $result['type']);
                        toggleLoader();
                        reloadPage(1000);
                    }
                });
            }

        });
        /* End Update User Info */


        /* Update User Info */
        $("#CopyDesignFreeSize").click(function () {
            $inputProductTitle = $.trim($("#inputProductTitle").val());
            $inputProductSubTitle = $.trim($("#inputProductSubTitle").val());
            $inputProductCatalogUrl = $.trim($("#inputProductCatalogUrl").val());
            $inputProductType = $.trim($("#inputProductType").val());
            $inputProductBrief = $.trim($("#inputProductBrief").val());

            $inputProductMaxHeight = $.trim($("#inputProductMaxHeight").val());
            $inputProductMaxWidth = $.trim($("#inputProductMaxWidth").val());

            $inputProductDescription = CKEDITOR.instances.inputProductDescription.getData();
            $inputProductPrimaryImage = $.trim($("#inputProductPrimaryImage").val());
            $inputProductSecondaryImage = $("[name=inputProductSecondaryImage]").map(function () {
                return $(this).val();
            }).get();
            $inputProductTag = $("[name=inputProductTag]").map(function () {
                return $(this).val();
            }).get();

            $inputProductCategory = $("[name=inputProductCategory]:checked").map(function () {
                return $(this).val();
            }).get();
            /*$inputProductCategoryProperty = [];
            $("[name=inputProductCategoryProperty]").each(function () {
                $propertyId = $(this).data('id');
                $propertyOptionId = $(this).val();
                $inputProductCategoryProperty.push({
                    'propertyId': $propertyId,
                    'propertyOptionId': $propertyOptionId
                });
            });*/

            if ($("[name='inputProductHasInstallation']").is(':checked')){
                $inputProductHasInstallation = true;
            }
            else{
                $inputProductHasInstallation = false;
            }
            $inputProductInstallationPrice = $("#inputProductInstallationPrice").val();

            $inputProductMaterial = [];
            $inputProductPrice = [];
            $(".inputProductTempMaterial").each(function () {
                $inputProductMaterial.push( $(this).val());
            });
            $(".inputProductTempPrice").each(function () {
                $inputProductPrice.push( $(this).val());
            });

            if (isEmpty($inputProductTitle) ||
                isEmpty($inputProductMaxHeight) ||
                isEmpty($inputProductMaxWidth) ||
                isEmpty($inputProductType) ||
                isEmpty($inputProductDescription) ||
                isEmpty($inputProductPrimaryImage) ||
                isEmpty($inputProductCategory)) {
                notify('لطفا تمامی موارد را کامل کنید' , 'red');
            }
            else {
                $sendData = {
                    'inputProductTitle': $inputProductTitle,
                    'inputProductSubTitle': $inputProductSubTitle,
                    'inputProductCatalogUrl': $inputProductCatalogUrl,
                    'inputProductType': $inputProductType,
                    'inputProductBrief': $inputProductBrief,
                    'inputProductDescription': $inputProductDescription,
                    'inputProductPrimaryImage': $inputProductPrimaryImage,
                    'inputProductSecondaryImage': $inputProductSecondaryImage,
                    'inputProductCategory': $inputProductCategory,
                    'inputProductMaterial': $inputProductMaterial,
                    'inputProductPrice': $inputProductPrice,
                    'inputProductMaxHeight': $inputProductMaxHeight,
                    'inputProductMaxWidth': $inputProductMaxWidth,
                    'inputProductTag': $inputProductTag,
                    'inputProductHasInstallation': $inputProductHasInstallation,
                    'inputProductInstallationPrice': $inputProductInstallationPrice,
                }
                toggleLoader();
                $.ajax({
                    type: 'post',
                    url: base_url + 'Product/doAddDesignFreeSizeProduct',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = jQuery.parseJSON(data);
                        notify($result['content'], $result['type']);
                        reloadPage(1000);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        notify($result['content'], $result['type']);
                        toggleLoader();
                        reloadPage(1000);
                    }
                });
            }

        });
        /* End Update User Info */


        $("#addMoreProductImage").click(function () {
            $id = UUID();
            $addProductImageTemplate = '<div  id="parent-' + $id + '" class="col-xs-12"><div class="form-group"><div class="form-line"><input type="text" class="form-control" id="' + $id + '" name="inputProductSecondaryImage" /></div> <a data-target-id="' + $id + '" data-toggle="modal" href="#" data-target="#myModal" class="btn fileManagerHandler" type="button"> <span>انتخاب تصویر</span> </a> <button type="button" data-remove-id="' + $id + '" class="btn btn-xs btn-danger waves-effect waves-float remove-secondary-image"> <i class="material-icons">clear</i> </button></div></div>';
            $("#productImages").append($addProductImageTemplate);
        });
        $(document).on('click', '.remove-secondary-image', function () {
            $("#parent-" + $(this).data('remove-id')).remove();
        });
        $("#addMoreProductTag").click(function () {
            $id = UUID();
            $addProductTagTemplate = '<div  id="parent-' + $id + '" class="col-xs-12 col-md-3"><div class="form-group"><div class="form-line"><input type="text" class="form-control" id="' + $id + '" name="inputProductTag" /></div> <button type="button" data-remove-id="' + $id + '" class="btn btn-xs btn-danger waves-effect waves-float remove-tag"> <i class="material-icons">clear</i> </button></div></div>';
            $("#productTags").append($addProductTagTemplate);
        });
        $(document).on('click', '.remove-tag', function () {
            $("#parent-" + $(this).data('remove-id')).remove();
        });
        $(document).on('change', '#inputProductCategoryDropDown', function () {

            toggleLoader();
            $categoryId = $(this).val();
            $.ajax({
                type: 'post',
                url: base_url + 'Product/getProductPropertyByCategoryId/' + $categoryId,
                success: function (data) {
                    if ($.trim(data) == "") {
                        notify('لطفا دسته بندی هایی را انتخاب کنید که والد آنها محصولات است', 'red', 10000);
                    }
                    $(".category-property-container").html(data);
                    toggleLoader();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify($result['content'], $result['type']);
                    toggleLoader();
                    reloadPage(1000);
                }
            })
            ;

        });
        $("#addPrice").click(function () {
            $id = UUID();
            $inputProductMaterial = $("#inputProductMaterial").val();
            $inputProductMaterialText = $("#inputProductMaterial option:selected").text();
            $inputProductSize = $("#inputProductSize").val();
            $inputProductSizeText = $("#inputProductSize option:selected").text();
            $inputProductPrice = $("#inputProductPrice").val();

            $template = $("#clone-price-container").clone();
            $template = $template.removeClass('hidden').attr('id' , $id);
            $template.find(".inputProductTempMaterial option").eq(0).val($inputProductMaterial).text($inputProductMaterialText);
             $template.find(".inputProductTempPrice").eq(0).val($inputProductPrice);
            $template.find(".remove-price").eq(0).attr('data-remove-id' , $id);
            $("#price-container").append($template);
        });
        $(document).on('click', '.remove-price', function () {
            $("#" + $(this).data('remove-id')).remove();
        });
    });
</script>