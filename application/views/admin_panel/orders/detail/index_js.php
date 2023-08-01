<script type="text/javascript">
    $(document).ready(function () {
        $("#setOrderStatus").click(function () {
            $inputOrderId = $.trim($("#inputOrderId").val());
            $inputOrderStatus = $.trim($("#inputOrderStatus").val());
            $sendData = {
                    'inputOrderId': $inputOrderId,
                    'inputOrderStatus': $inputOrderStatus
                }
            toggleLoader();
            $.ajax({
                    type: 'post',
                    url: base_url + 'Orders/setOrderStatus',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = jQuery.parseJSON(data);
                        notify($result['content'], $result['type']);
                        reloadPage(1000);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        notify('Error', 'red');
                        toggleLoader();
                        reloadPage(1000);
                    }
                });
        });
    });
</script>