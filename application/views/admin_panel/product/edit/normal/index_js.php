<script type="text/javascript">
    $(document).ready(function () {
        /* Update User Info */
        $("#editNormalProduct").click(function () {
            $inputProductId = $.trim($("#inputProductId").val());
            $inputProductTitle = $.trim($("#inputProductTitle").val());
            $inputProductSubTitle = $.trim($("#inputProductSubTitle").val());
            $inputProductQuantity = $.trim($("#inputProductQuantity").val());
            $inputProductCatalogUrl = $.trim($("#inputProductCatalogUrl").val());
            $inputProductType = $.trim($("#inputProductType").val());
            $inputProductBrief = $.trim($("#inputProductBrief").val());
            $inputProductDescription = CKEDITOR.instances.inputProductDescription.getData();
            $inputProductPrimaryImage = $.trim($("#inputProductPrimaryImage").val());
            $inputProductMockUpImage = $.trim($("#inputProductMockUpImage").val());
            $inputProductSecondaryImage = $("[name=inputProductSecondaryImage]").map(function () {
                return $(this).val();
            }).get();
            $inputProductTag = $("[name=inputProductTag]").map(function () {
                return $(this).val();
            }).get();
            inputProductPrice = $.trim($("#inputProductPrice").val());
            $inputProductCategory = $("[name=inputProductCategory]:checked").map(function () {
                return $(this).val();
            }).get();



            if ($("[name='inputProductIsSpecial']").is(':checked')){
                $inputProductIsSpecial = true;
            }
            else{
                $inputProductIsSpecial = false;
            }
            $inputProductSpecialVirtualMaxPrice = $("#inputProductSpecialVirtualMaxPrice").val();
            $inputProductCategoryProperty = [];
            $("[name=inputProductCategoryProperty]").each(function () {
                $propertyId = $(this).data('id');
                $propertyOptionId = $(this).val();
                $inputProductCategoryProperty.push({
                    'propertyId': $propertyId,
                    'propertyOptionId': $propertyOptionId
                });
            });
            if (isEmpty($inputProductTitle) ||
                isEmpty($inputProductType) || isEmpty(inputProductPrice) ||
                isEmpty($inputProductQuantity) || isEmpty($inputProductDescription) ||
                isEmpty($inputProductPrimaryImage) || isEmpty($inputProductCategory)) {
                notify('لطفا تمامی موارد را کامل کنید' , 'red');
            }
            else {
                $sendData = {
                    'inputProductId': $inputProductId,
                    'inputProductTitle': $inputProductTitle,
                    'inputProductSubTitle': $inputProductSubTitle,
                    'inputProductQuantity': $inputProductQuantity,
                    'inputProductCatalogUrl': $inputProductCatalogUrl,
                    'inputProductType': $inputProductType,
                    'inputProductBrief': $inputProductBrief,
                    'inputProductDescription': $inputProductDescription,
                    'inputProductPrimaryImage': $inputProductPrimaryImage,
                    'inputProductMockUpImage': $inputProductMockUpImage,
                    'inputProductSecondaryImage': $inputProductSecondaryImage,
                    'inputProductPrice': inputProductPrice,
                    'inputProductCategory': $inputProductCategory,
                    'inputProductCategoryProperty': $inputProductCategoryProperty,
                    'inputProductTag':$inputProductTag,
                    'inputProductIsSpecial':$inputProductIsSpecial,
                    'inputProductSpecialVirtualMaxPrice':$inputProductSpecialVirtualMaxPrice
                }
                toggleLoader();
                $.ajax({
                    type: 'post',
                    url: base_url + 'Product/doEditNormalProduct',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = jQuery.parseJSON(data);
                        notify($result['content'], $result['type']);
                        //reloadPage(1000);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        notify($result['content'], $result['type']);
                        toggleLoader();
                    }
                });
            }
        });
        /* End Update User Info */
        /* Update User Info */
        $("#CopyNormalProduct").click(function () {
            $inputProductTitle = $.trim($("#inputProductTitle").val());
            $inputProductSubTitle = $.trim($("#inputProductSubTitle").val());
            $inputProductQuantity = $.trim($("#inputProductQuantity").val());
            $inputProductCatalogUrl = $.trim($("#inputProductCatalogUrl").val());
            $inputProductType = $.trim($("#inputProductType").val());
            $inputProductBrief = $.trim($("#inputProductBrief").val());
            $inputProductDescription = CKEDITOR.instances.inputProductDescription.getData();
            $inputProductPrimaryImage = $.trim($("#inputProductPrimaryImage").val());
            $inputProductMockUpImage = $.trim($("#inputProductMockUpImage").val());
            $inputProductSecondaryImage = $("[name=inputProductSecondaryImage]").map(function () {
                return $(this).val();
            }).get();
            $inputProductTag = $("[name=inputProductTag]").map(function () {
                return $(this).val();
            }).get();
            inputProductPrice = $.trim($("#inputProductPrice").val());
            $inputProductCategory = $("[name=inputProductCategory]:checked").map(function () {
                return $(this).val();
            }).get();
            $inputProductCategoryProperty = [];
            $("[name=inputProductCategoryProperty]").each(function () {
                $propertyId = $(this).data('id');
                $propertyOptionId = $(this).val();
                $inputProductCategoryProperty.push({
                    'propertyId': $propertyId,
                    'propertyOptionId': $propertyOptionId
                });
            });
            if (isEmpty($inputProductTitle) ||
                isEmpty($inputProductType) || isEmpty(inputProductPrice) ||
                isEmpty($inputProductQuantity) || isEmpty($inputProductDescription) ||
                isEmpty($inputProductPrimaryImage) || isEmpty($inputProductCategory)) {
                notify('لطفا تمامی موارد را کامل کنید' , 'red');
            }
            else {
                $sendData = {
                    'inputProductTitle': $inputProductTitle,
                    'inputProductSubTitle': $inputProductSubTitle,
                    'inputProductQuantity': $inputProductQuantity,
                    'inputProductCatalogUrl': $inputProductCatalogUrl,
                    'inputProductType': $inputProductType,
                    'inputProductBrief': $inputProductBrief,
                    'inputProductDescription': $inputProductDescription,
                    'inputProductPrimaryImage': $inputProductPrimaryImage,
                    'inputProductMockUpImage': $inputProductMockUpImage,
                    'inputProductSecondaryImage': $inputProductSecondaryImage,
                    'inputProductCategoryProperty': $inputProductCategoryProperty,
                    'inputProductPrice': inputProductPrice,
                    'inputProductCategory': $inputProductCategory,
                    'inputProductTag':$inputProductTag
                }
                toggleLoader();
                $.ajax({
                    type: 'post',
                    url: base_url + 'Product/doAddNormalProduct',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = jQuery.parseJSON(data);
                        notify($result['content'], $result['type']);
                        //reloadPage(1000);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        notify($result['content'], $result['type']);
                        toggleLoader();
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
                        notify('ویژگی برای این دسته بندی تعریف نشده است', 'red', 10000);
                    }
                    $(".category-property-container").html(data);
                    toggleLoader();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify($result['content'], $result['type']);
                    toggleLoader();
                    //reloadPage(1000);
                }
            })
            ;

        });
    });
</script>