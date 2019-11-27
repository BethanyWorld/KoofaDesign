<script type="text/javascript">
    $(document).ready(function () {
        /* Update User Info */
        $("#addSize").click(function () {
            $inputSlideTitle = $.trim($("#inputSlideTitle").val());
            $inputSlideImage = $.trim($("#inputSlideImage").val());
            $inputSlideUrl = $.trim($("#inputSlideUrl").val());
            $inputSlideButtonTitle = $.trim($("#inputSlideButtonTitle").val());
            if (isEmpty($inputSlideTitle) || isEmpty($inputSlideImage) ||
                isEmpty($inputSlideUrl) || isEmpty($inputSlideButtonTitle)) {
                notify('لطفا تمامی موارد را کامل کنید', 'red');
            }
            else {
                $sendData = {
                    'inputSlideTitle': $inputSlideTitle,
                    'inputSlideImage': $inputSlideImage,
                    'inputSlideUrl': $inputSlideUrl,
                    'inputSlideButtonTitle': $inputSlideButtonTitle,
                }
                toggleLoader();
                $.ajax({
                    type: 'post',
                    url: base_url + 'Slide/doAddSlide',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = jQuery.parseJSON(data);
                        notify($result['content'], $result['type']);
                        reloadPage(1000);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        notify('مقدار سایز تکراری ست', 'red');
                    }
                });
            }
        });
        /* End Update User Info */

    });
</script>