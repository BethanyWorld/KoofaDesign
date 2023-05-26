<script type="text/javascript">
    $(document).ready(function () {
        /* Update User Info */
        $("#addCategory").click(function () {
            $inputCategoryTitle = $.trim($("#inputCategoryTitle").val());
            $inputCategoryParentId = $.trim($("#inputCategoryParentId").val());
            $inputCategoryImage = $.trim($("#inputCategoryImage").val());
            $inputCategoryPoster = $.trim($("#inputCategoryPoster").val());
            $inputCategorySpecialPoster = $.trim($("#inputCategorySpecialPoster").val());
            $inputCategoryDescription = $.trim($("#inputCategoryDescription").val());
            $inputCategoryProductDescription = $.trim($("#inputCategoryProductDescription").val());
            $inputCategoryDeliveryTime = $.trim($("#inputCategoryDeliveryTime").val());
            $inputCategoryInstallPrice  = $.trim($("#inputCategoryInstallPrice").val());

            /* Validation */
            if (!isNumber($inputCategoryParentId)) {
                notify('دسته مادر نامعتبر است', 'red');
                return false;
            }
            /* End Validation */
            $sendData = {
                'inputCategoryTitle': $inputCategoryTitle,
                'inputCategoryParentId': $inputCategoryParentId,
                'inputCategoryImage': $inputCategoryImage,
                'inputCategoryPoster': $inputCategoryPoster,
                'inputCategorySpecialPoster': $inputCategorySpecialPoster,
                'inputCategoryDescription': $inputCategoryDescription,
                'inputCategoryProductDescription': $inputCategoryProductDescription,
                'inputCategoryDeliveryTime': $inputCategoryDeliveryTime,
                'inputCategoryInstallPrice': $inputCategoryInstallPrice
            }
            toggleLoader();
            $.ajax({
                type: 'post',
                url: base_url + 'Category/doAddCategory',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'] , $result['type']);
                    reloadPage(1000);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify($result['content'] , $result['type']);
                    toggleLoader();
                    reloadPage(1000);
                }
            });
        });
        /* End Update User Info */

    });
</script>