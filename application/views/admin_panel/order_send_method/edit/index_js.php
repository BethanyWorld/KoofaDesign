<script type="text/javascript">
    $(document).ready(function () {
        /* Update User Info */
        $("#updateSendMethod").click(function () {
            $inputOrderSendMethodId = $.trim($("#inputOrderSendMethodId").val());
            $inputOrderSendMethodTitle = $.trim($("#inputOrderSendMethodTitle").val());
            $inputOrderSendMethodPrice  = $.trim($("#inputOrderSendMethodPrice").val());
            $inputOrderSendMethodActive = $.trim($("#inputOrderSendMethodActive").val());
            if (isEmpty($inputOrderSendMethodTitle) || isEmpty($inputOrderSendMethodPrice) || isEmpty($inputOrderSendMethodId)) {
                notify('لطفا تمامی موارد را کامل کنید', 'red');
            }
            else {
                $sendData = {
                    'inputOrderSendMethodId': $inputOrderSendMethodId,
                    'inputOrderSendMethodTitle': $inputOrderSendMethodTitle,
                    'inputOrderSendMethodPrice': $inputOrderSendMethodPrice,
                    'inputOrderSendMethodActive': $inputOrderSendMethodActive
                }
                toggleLoader();
                $.ajax({
                    type: 'post',
                    url: base_url + 'OrderSendMethod/doUpdateOrderSendMethod',
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