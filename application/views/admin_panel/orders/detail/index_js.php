<script type="text/javascript">
    $(document).ready(function () {
        /* Update User Info */
        $("#editSize").click(function () {
            $inputSizeId = $.trim($("#inputSizeId").val());
            $inputSizeTitle = $.trim($("#inputSizeTitle").val());
            if (isEmpty($inputSizeTitle)) {
                notify('لطفا تمامی موارد را کامل کنید', 'red');
            }
            else {
                $sendData = {
                    'inputSizeId': $inputSizeId,
                    'inputSizeTitle': $inputSizeTitle
                }
                toggleLoader();
                $.ajax({
                    type: 'post',
                    url: base_url + 'Sizes/doEditSize',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = jQuery.parseJSON(data);
                        notify($result['content'], $result['type']);
                        reloadPage(1000);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        notify('مقدار سایز تکراری ست', 'red');
                        toggleLoader();
                        reloadPage(1000);
                    }
                });
            }
        });
        /* End Update User Info */

    });
</script>