<script type="text/javascript">
    $(document).ready(function () {
        /* Update User Info */
        $("#addSendMethod").click(function () {
            $inputOrderSendMethodTitle = $.trim($("#inputOrderSendMethodTitle").val());
            $inputOrderSendMethodPrice = $.trim($("#inputOrderSendMethodPrice").val());
            if (isEmpty($inputOrderSendMethodTitle) || isEmpty($inputOrderSendMethodPrice)) {
                notify('لطفا تمامی موارد را کامل کنید', 'red');
            }
            else {
                $sendData = {
                    'inputOrderSendMethodTitle': $inputOrderSendMethodTitle,
                    'inputOrderSendMethodPrice': $inputOrderSendMethodPrice
                }
                toggleLoader();
                $.ajax({
                    type: 'post',
                    url: base_url + 'OrderSendMethod/doAddSendMethod',
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