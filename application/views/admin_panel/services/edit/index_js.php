<script type="text/javascript">
    $(document).ready(function () {
        /* Update User Info */
        $("#edit").click(function () {
            $inputRowId = $.trim($("#inputRowId").val());
            $inputServiceTitle = $.trim($("#inputServiceTitle").val());
            if (isEmpty($inputServiceTitle)) {
                notify('لطفا تمامی موارد را کامل کنید', 'red');
            }
            else {
                $categories = [];
                $("[name='inputProductCategory']").each(function(){
                    if($(this).is(':checked')){
                        $categories.push($(this).val());
                    }
                });
                $sendData = {
                    'inputRowId': $inputRowId,
                    'inputServiceTitle': $inputServiceTitle,
                    'inputServiceCategories': $categories
                };
                toggleLoader();
                $.ajax({
                    type: 'post',
                    url: base_url + 'Services/doEditServices',
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