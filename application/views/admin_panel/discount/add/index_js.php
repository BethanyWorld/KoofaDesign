<script type="text/javascript">
    $(document).ready(function () {
        /* Update User Info */
        $("#addDiscountCode").click(function () {
            $inputDiscountCode = $.trim($("#inputDiscountCode").val());
            $inputDiscountPercent = $.trim($("#inputDiscountPercent").val());
            $inputDiscountPrice = $.trim($("#inputDiscountPrice").val());
            $inputDiscountType = $.trim($("#inputDiscountType").val());
            $inputDiscountCategory = $("[name=inputProductCategory]:checked").map(function () {
                return $(this).val();
            }).get();
            if (isEmpty($inputDiscountCode) || isEmpty($inputDiscountType)) {
                notify('لطفا تمامی موارد را کامل کنید', 'red');
            }
            else {
                $sendData = {
                    'inputDiscountCode': $inputDiscountCode,
                    'inputDiscountPercent': $inputDiscountPercent,
                    'inputDiscountPrice': $inputDiscountPrice,
                    'inputDiscountType': $inputDiscountType,
                    'inputDiscountCategory': $inputDiscountCategory
                }
                toggleLoader();
                $.ajax({
                    type: 'post',
                    url: base_url + 'DiscountCode/doAddDiscountCode',
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

    });
</script>