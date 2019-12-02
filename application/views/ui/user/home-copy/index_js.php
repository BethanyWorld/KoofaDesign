<script type="text/javascript">
    $(document).ready(function () {
        $("#buttonResendCode").click(function () {
            toggleLoader();
            $inputPhone = $("#inputPhone").val();
            $inputCaptcha = $("#inputCaptcha").val();
            if ($inputPhone != "" && $inputCaptcha != "") {
                $sendData = {
                    'inputPhone': $inputPhone,
                    'inputCaptcha': $inputCaptcha
                }
                $.ajax({
                    type: 'post',
                    url: base_url + 'Account/doResendCode',
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
                $sendData = {'inputActivationCode': $inputActivationCode}
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