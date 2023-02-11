<script type="text/javascript">
    $(document).ready(function () {
        /* Update User Info */
        $("#addPlan").click(function () {
            $inputPlanTitle = $.trim($("#inputPlanTitle").val());
            $inputPlanImage = $.trim($("#inputPlanImage").val());
            $inputPlanUrl = $.trim($("#inputPlanUrl").val());
            $sendData = {
                'inputPlanTitle': $inputPlanTitle,
                'inputPlanImage': $inputPlanImage,
                'inputPlanUrl': $inputPlanUrl
            };
            toggleLoader();
            $.ajax({
                type: 'post',
                url: base_url + 'Plans/doAddPlan',
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
        });
        /* End Update User Info */

    });
</script>