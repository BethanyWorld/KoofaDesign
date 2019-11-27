<script type="text/javascript">
    $(document).ready(function () {
        /* Update User Info */
        $("#addBrand").click(function () {
            $inputBrandTitle = $.trim($("#inputBrandTitle").val());
            $inputBrandLogo = $.trim($("#inputBrandLogo").val());
            $inputBrandDescription = $.trim($("#inputBrandDescription").val());
            $inputBrandCategory = $("[name=inputProductCategory]:checked").map(function () {
                return $(this).val();
            }).get();
            if (isEmpty($inputBrandTitle) || isEmpty($inputBrandLogo) || isEmpty($inputBrandDescription)) {
                notify('لطفا تمامی موارد را کامل کنید', 'red');
            }
            else {
                $sendData = {
                    'inputBrandTitle': $inputBrandTitle,
                    'inputBrandLogo': $inputBrandLogo,
                    'inputBrandDescription': $inputBrandDescription,
                    'inputBrandCategory': $inputBrandCategory
                }
                toggleLoader();
                $.ajax({
                    type: 'post',
                    url: base_url + 'Brand/doAddBrand',
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