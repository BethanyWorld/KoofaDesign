<script type="text/javascript">
    $(document).ready(function () {
        $("#editManager").click(function () {
            $inputManagerId = $.trim($("#inputManagerId").val());
            $inputManagerFullName = $.trim($("#inputManagerFullName").val());
            $inputManagerPhone = $.trim($("#inputManagerPhone").val());
            $inputManagerEmail = $.trim($("#inputManagerEmail").val());
            $inputManagerPassword = $.trim($("#inputManagerPassword").val());
            $inputRole = $.trim($("#inputRole").val());
            $sendData = {
                'inputManagerId': $inputManagerId,
                'inputManagerFullName': $inputManagerFullName,
                'inputManagerPhone': $inputManagerPhone,
                'inputManagerEmail': $inputManagerEmail,
                'inputManagerPassword': $inputManagerPassword,
                'inputRole': $inputRole
            }
            toggleLoader();
            $.ajax({
                type: 'post',
                url: base_url + 'Managers/doUpdateManager',
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
        });
    });
</script>