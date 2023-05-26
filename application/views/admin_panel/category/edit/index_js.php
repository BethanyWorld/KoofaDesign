<script type="text/javascript">
    $(document).ready(function () {
        /* Update User Info */
        $("#addCategory").click(function () {
            $inputCategoryTitle = $.trim($("#inputCategoryTitle").val());
            $inputCategoryParentId = $.trim($("#inputCategoryParentId").val());
            $inputCategoryIsActive = $.trim($("#inputCategoryIsActive").val());
            $inputCategoryImage = $.trim($("#inputCategoryImage").val());
            $inputCategoryPoster = $.trim($("#inputCategoryPoster").val());
            $inputCategorySpecialPoster = $.trim($("#inputCategorySpecialPoster").val());
            $inputCategoryDescription = $.trim($("#inputCategoryDescription").val());
            $inputCategoryProductDescription = $.trim($("#inputCategoryProductDescription").val());
            $inputCategoryId = $.trim($("#inputCategoryId").val());
            $inputCategoryDeliveryTime = $.trim($("#inputCategoryDeliveryTime").val());
            $inputCategoryInstallPrice  = $.trim($("#inputCategoryInstallPrice").val());

            /* Validation */
            if (!isNumber($inputCategoryParentId)) {
                notify('دسته مادر نامعتبر است', 'red');
                return false;
            }
            /* End Validation */
            $sendData = {
                'inputCategoryId': $inputCategoryId,
                'inputCategoryTitle': $inputCategoryTitle,
                'inputCategoryIsActive': $inputCategoryIsActive,
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
                url: base_url + 'Category/doUpdateCategory',
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
        $("#inputCategoryParentId option").each(function(){
            if($(this).val() == <?php echo $data['CategoryParentId'] ?>){
                $(this).attr('selected' , '');
                return;
            }
        });

    });
</script>