<script type="text/javascript">
    $(document).ready(function () {
        /* Update User Info */
        $("#addMaterial").click(function () {
            $inputMaterialTitle = $.trim($("#inputMaterialTitle").val());
            $inputMaterialWeight  = $.trim($("#inputMaterialWeight").val());
            if (isEmpty($inputMaterialTitle)) {
                notify('لطفا تمامی موارد را کامل کنید', 'red');
            }
            else {
                $sendData = {
                    'inputMaterialTitle': $inputMaterialTitle,
                    'inputMaterialWeight': $inputMaterialWeight,
                    'inputShipment': $("#inputShipment").val(),
                }
                toggleLoader();
                $.ajax({
                    type: 'post',
                    url: base_url + 'Material/doAddMaterial',
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