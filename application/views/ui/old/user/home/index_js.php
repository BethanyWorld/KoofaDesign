<script type="text/javascript">
    $(document).ready(function () {
        $(".profile-button-edit").click(function () {
            toggleLoader();
            $inputUserFirstName = $("#inputUserFirstName").val();
            $inputUserLastName = $("#inputUserLastName").val();
            $inputUserPhone = $("#inputUserPhone").val();
            $inputUserEmail = $("#inputUserEmail").val();
            $inputUserHomePhone = $("#inputUserHomePhone").val();
            $sendData = {
                'inputUserFirstName': $inputUserFirstName,
                'inputUserLastName': $inputUserLastName,
                'inputUserPhone': $inputUserPhone,
                'inputUserEmail': $inputUserEmail,
                'inputUserHomePhone': $inputUserHomePhone
            }
            $.ajax({
                type: 'post',
                url: base_url + 'User/Home/doUpdateProfile',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                    setTimeout(function () {
                        location.reload();
                    } , 3000);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                }
            });
        });
        $(".profile-button-edit-password").click(function () {
            toggleLoader();
            $inputCurrentPassword = $("#inputCurrentPassword").val();
            $inputNewPassword = $("#inputNewPassword").val();
            $inputNewConfirmPassword = $("#inputNewConfirmPassword").val();
            $sendData = {
                'inputCurrentPassword': $inputCurrentPassword,
                'inputNewPassword': $inputNewPassword,
                'inputNewConfirmPassword': $inputNewConfirmPassword
            }
            $.ajax({
                type: 'post',
                url: base_url + 'User/Home/doChangePassword',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                    if($result['success']){
                        setTimeout(function () {
                            location.reload();
                        } , 3000);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                }
            });
        });
    });
</script>