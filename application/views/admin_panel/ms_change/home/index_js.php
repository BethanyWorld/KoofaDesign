<script type="text/javascript">
    $(document).ready(function () {
        $.fn.selectpicker.Constructor.BootstrapVersion = '3';
        $('select').each(function(){
            $(this).selectpicker();
        });
        $("#changeCategoryMaterial").click(function () {
            toggleLoader();
            $inputCostMaterialId = $("#CategoryMaterialPrice").find('[name="material"]').val();
            $inputCostCategoryId = $("#CategoryMaterialPrice").find('[name="category"]').val();
            $sendData = {
                'inputCostMaterialId': $inputCostMaterialId,
                'inputCostCategoryId': $inputCostCategoryId,
            }
            $.ajax({
                type: 'post',
                url: base_url + 'MSChange/doChangeCategoryMaterial',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify($result['content'], $result['type']);
                    toggleLoader();
                }
            });
        });

        $("#changeCategorySize").click(function () {
            toggleLoader();
            $inputCostSizeId = $("#CategorySizePrice").find('[name="size"]').val();
            $inputCostCategoryId = $("#CategorySizePrice").find('[name="category"]').val();
            $inputProductShape= $("#CategorySizePrice").find('[name="inputProductShape"]').val();
            $sendData = {
                'inputCostSizeId': $inputCostSizeId,
                'inputCostCategoryId': $inputCostCategoryId,
                'inputProductShape': $inputProductShape
            }
            $.ajax({
                type: 'post',
                url: base_url + 'MSChange/doChangeCategorySize',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify($result['content'], $result['type']);
                    toggleLoader();
                }
            });
        });
        $("#changeCategoryMaterialSize").click(function () {
            toggleLoader();
            $inputCostSizeId = $("#CategoryMaterialSizePrice").find('[name="size"]').val();
            $inputCostMaterialId = $("#CategoryMaterialSizePrice").find('[name="material"]').val();
            $inputCostCategoryId = $("#CategoryMaterialSizePrice").find('[name="category"]').val();
            $inputProductShape= $("#CategoryMaterialSizePrice").find('[name="inputProductShape"]').val();
            $sendData = {
                'inputCostSizeId': $inputCostSizeId,
                'inputCostMaterialId': $inputCostMaterialId,
                'inputCostCategoryId': $inputCostCategoryId,
                'inputProductShape': $inputProductShape
            }
            $.ajax({
                type: 'post',
                url: base_url + 'MSChange/doChangeCategoryMaterialSize',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify($result['content'], $result['type']);
                    toggleLoader();
                }
            });
        });


        $("#deleteCategoryMaterial").click(function () {
            toggleLoader();
            $inputCostMaterialId = $("#CategoryMaterialPrice").find('[name="material"]').val();
            $inputCostCategoryId = $("#CategoryMaterialPrice").find('[name="category"]').val();
            $sendData = {
                'inputCostMaterialId': $inputCostMaterialId,
                'inputCostCategoryId': $inputCostCategoryId,
            }
            $.ajax({
                type: 'post',
                url: base_url + 'MSChange/doDeleteCategoryMaterial',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify($result['content'], $result['type']);
                    toggleLoader();
                }
            });
        });
        $("#deleteCategorySize").click(function () {
            toggleLoader();
            $inputCostSizeId = $("#CategorySizePrice").find('[name="size"]').val();
            $inputCostCategoryId = $("#CategorySizePrice").find('[name="category"]').val();
            $inputProductShape= $("#CategorySizePrice").find('[name="inputProductShape"]').val();
            $sendData = {
                'inputCostSizeId': $inputCostSizeId,
                'inputCostCategoryId': $inputCostCategoryId,
                'inputProductShape': $inputProductShape
            }
            $.ajax({
                type: 'post',
                url: base_url + 'MSChange/doDeleteCategorySize',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify($result['content'], $result['type']);
                    toggleLoader();
                }
            });
        });
        $("#deleteCategoryMaterialSize").click(function () {
            toggleLoader();
            $inputCostSizeId = $("#CategoryMaterialSizePrice").find('[name="size"]').val();
            $inputCostMaterialId = $("#CategoryMaterialSizePrice").find('[name="material"]').val();
            $inputCostCategoryId = $("#CategoryMaterialSizePrice").find('[name="category"]').val();
            $inputProductShape= $("#CategoryMaterialSizePrice").find('[name="inputProductShape"]').val();
            $sendData = {
                'inputCostSizeId': $inputCostSizeId,
                'inputCostMaterialId': $inputCostMaterialId,
                'inputCostCategoryId': $inputCostCategoryId,
                'inputProductShape': $inputProductShape
            }
            $.ajax({
                type: 'post',
                url: base_url + 'MSChange/doDeleteCategoryMaterialSize',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify($result['content'], $result['type']);
                    toggleLoader();
                }
            });
        });

    });
</script>