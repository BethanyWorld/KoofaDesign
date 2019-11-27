<script type="text/javascript">
    $(document).ready(function () {

        $("#buttonRegister").click(function () {
            toggleLoader();
            $inputFirstName = $("#inputFirstName").val();
            $inputLastName = $("#inputLastName").val();
            $inputPhone = $("#inputPhone").val();
            $inputPassword = $("#inputPassword").val();
            $inputConfirmPassword = $("#inputConfirmPassword").val();
            $inputCaptcha = $("#inputCaptcha").val();
            $inputTermsCondition = $("#inputTermsCondition").prop('checked');

            if ($inputPassword != $inputConfirmPassword) {
                toggleLoader();
                notify('رمز عبور با تکرار آن یکی نیست', 'yellow');
                return;
            }

            if ($inputFirstName != "" && $inputLastName != "" && $inputPassword != "" && $inputPhone != "" && $inputCaptcha != "" && $inputTermsCondition) {
                $sendData = {
                    'inputFirstName': $inputFirstName,
                    'inputLastName': $inputLastName,
                    'inputPhone': $inputPhone,
                    'inputPassword': $inputPassword,
                    'inputCaptcha': $inputCaptcha
                }
                $.ajax({
                    type: 'post',
                    url: base_url + 'Account/doRegister',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = jQuery.parseJSON(data);
                        notify($result['content'], $result['type']);
                        if ($result['success']) {
                            $(".register-page-form").hide();
                            $(".register-page-active-form").fadeIn();
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                    }
                });
            }
            else {
                toggleLoader();
                notify('لطفا تمامی مقادیر را کامل کنید', 'yellow');
            }
        });
        $("#buttonActiveCode").click(function () {
            toggleLoader();
            $inputActivationCode = $("#inputActivationCode").val();
            if ($inputActivationCode) {
                $sendData = {
                    'inputActivationCode': $inputActivationCode,
                }
                $.ajax({
                    type: 'post',
                    url: base_url + 'Account/doVerify',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = jQuery.parseJSON(data);
                        notify($result['content'], $result['type']);
                        if ($result['success']) {
                            setTimeout(function () {
                                window.location.href = base_url + 'User/Home';
                            }, 2000);
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                    }
                });
            }
            else {
                toggleLoader();
                notify('لطفا تمامی مقادیر را کامل کنید', 'yellow');
            }
        });

    });
</script>