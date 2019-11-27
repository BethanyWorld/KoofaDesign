<script type="text/javascript">
    $(document).ready(function () {
        /* Update User Info */
        $("#updateProfile").click(function () {
            $inputFullName = $.trim($("#inputFullName").val());
            $inputPhone = $.trim($("#inputPhone").val());
            $inputEmail = $.trim($("#inputEmail").val());
            $inputPassword = $.trim($("#inputPassword").val());
            $inputConfirmPassword = $.trim($("#inputConfirmPassword").val());
            /* Validation */
            if (!isNumber($inputPhone)) {
                notify('شماره همراه نامعتبر است', 'red');
                return false;
            }
            if (!isEmail($inputEmail)) {
                notify('ایمیل نامعتبر است', 'red');
                return false;
            }
            if(!isEmpty($inputPassword) && $inputPassword != $inputConfirmPassword){
                notify('رمز عبور ها یکسان نیست', 'red');
                return false;
            }
            /* End Validation */
            $sendData = {
                'inputFullName': $inputFullName,
                'inputPhone': $inputPhone,
                'inputEmail': $inputEmail,
                'inputPassword': $inputPassword
            }
            toggleLoader();
            $.ajax({
                type: 'post',
                url: base_url + 'Profile/doUpdateProfile',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'] , $result['type']);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify($result['content'] , $result['type']);
                    toggleLoader();
                }
            });
        });
        /* End Update User Info */

    });
</script>