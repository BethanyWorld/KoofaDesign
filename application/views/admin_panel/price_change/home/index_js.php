<script type="text/javascript">
    $(document).ready(function () {
        $("#changeAllPrice").click(function () {
            toggleLoader();
            $inputCost = $("#AllPrice").find('[name="cost"]').val();
            $inputCostType = $("#AllPrice").find('[name="cost-type"]').val();
            $inputCostIncDec = $("#AllPrice").find('[name="cost-inc-dec"]').val();
            $sendData = {
                'inputCost': $inputCost,
                'inputCostType': $inputCostType,
                'inputCostIncDec': $inputCostIncDec
            }
            $.ajax({
                type: 'post',
                url: base_url + 'PriceChange/doChangeAllPrice',
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
        $("#changeCategoryPrice").click(function () {
            toggleLoader();
            $inputCost = $("#CategoryPrice").find('[name="cost"]').val();
            $inputCostType = $("#CategoryPrice").find('[name="cost-type"]').val();
            $inputCostIncDec = $("#CategoryPrice").find('[name="cost-inc-dec"]').val();
            $inputCostCategoryId = $("#CategoryPrice").find('[name="category"]').val();
            $sendData = {
                'inputCost': $inputCost,
                'inputCostType': $inputCostType,
                'inputCostIncDec': $inputCostIncDec,
                'inputCostCategoryId': $inputCostCategoryId
            }
            $.ajax({
                type: 'post',
                url: base_url + 'PriceChange/doChangeCategoryPrice',
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
        $("#changeSizePrice").click(function () {
            toggleLoader();
            $inputCost = $("#SizePrice").find('[name="cost"]').val();
            $inputCostType = $("#SizePrice").find('[name="cost-type"]').val();
            $inputCostIncDec = $("#SizePrice").find('[name="cost-inc-dec"]').val();
            $inputCostSizeId = $("#SizePrice").find('[name="size"]').val();
            $sendData = {
                'inputCost': $inputCost,
                'inputCostType': $inputCostType,
                'inputCostIncDec': $inputCostIncDec,
                'inputCostSizeId': $inputCostSizeId
            }
            $.ajax({
                type: 'post',
                url: base_url + 'PriceChange/doChangeSizePrice',
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
        $("#changeMaterialPrice").click(function () {
            toggleLoader();
            $inputCost = $("#MaterialPrice").find('[name="cost"]').val();
            $inputCostType = $("#MaterialPrice").find('[name="cost-type"]').val();
            $inputCostIncDec = $("#MaterialPrice").find('[name="cost-inc-dec"]').val();
            $inputCostMaterialId = $("#MaterialPrice").find('[name="material"]').val();
            $sendData = {
                'inputCost': $inputCost,
                'inputCostType': $inputCostType,
                'inputCostIncDec': $inputCostIncDec,
                'inputCostMaterialId': $inputCostMaterialId
            }
            $.ajax({
                type: 'post',
                url: base_url + 'PriceChange/doChangeMaterialPrice',
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
        $("#changeCategoryMaterialPrice").click(function () {
            toggleLoader();
            $inputCost = $("#CategoryMaterialPrice").find('[name="cost"]').val();
            $inputCostType = $("#CategoryMaterialPrice").find('[name="cost-type"]').val();
            $inputCostIncDec = $("#CategoryMaterialPrice").find('[name="cost-inc-dec"]').val();
            $inputCostMaterialId = $("#CategoryMaterialPrice").find('[name="material"]').val();
            $inputCostCategoryId = $("#CategoryMaterialPrice").find('[name="category"]').val();
            $sendData = {
                'inputCost': $inputCost,
                'inputCostType': $inputCostType,
                'inputCostIncDec': $inputCostIncDec,
                'inputCostMaterialId': $inputCostMaterialId,
                'inputCostCategoryId': $inputCostCategoryId,
            }
            $.ajax({
                type: 'post',
                url: base_url + 'PriceChange/doChangeCategoryMaterialPrice',
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
        $("#changeCategorySizePrice").click(function () {
            toggleLoader();
            $inputCost = $("#CategorySizePrice").find('[name="cost"]').val();
            $inputCostType = $("#CategorySizePrice").find('[name="cost-type"]').val();
            $inputCostIncDec = $("#CategorySizePrice").find('[name="cost-inc-dec"]').val();
            $inputCostSizeId = $("#CategorySizePrice").find('[name="size"]').val();
            $inputCostCategoryId = $("#CategorySizePrice").find('[name="category"]').val();
            $sendData = {
                'inputCost': $inputCost,
                'inputCostType': $inputCostType,
                'inputCostIncDec': $inputCostIncDec,
                'inputCostSizeId': $inputCostSizeId,
                'inputCostCategoryId': $inputCostCategoryId,
            }
            $.ajax({
                type: 'post',
                url: base_url + 'PriceChange/doChangeCategorySizePrice',
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