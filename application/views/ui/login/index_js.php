<script type="text/javascript">
    $(document).ready(function () {

        $("#buttonLogin").click(function () {
            toggleLoader();
            $inputRegisterType = $(".form-register input[name='registerType']:checked").val() || "";
            $inputPhone = $(".form-register #inputPhone").val();
            $inputPassword = $(".form-register #inputPassword").val();
            $inputCaptcha = $(".form-register #inputCaptcha").val();
            if ($inputPassword != "" && $inputPhone != "" && $inputCaptcha != "") {
                $sendData = {
                    'inputRegisterUserType': $inputRegisterType,
                    'inputPhone': $inputPhone,
                    'inputPassword': $inputPassword,
                    'inputCaptcha': $inputCaptcha
                }
                $.ajax({
                    type: 'post',
                    url: base_url + 'Account/doLogin',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = jQuery.parseJSON(data);
                        notify($result['content'], $result['type']);
                        if ($result['success']) {
                            window.location = $result['redirect'];
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {}
                });
            }
            else {
                toggleLoader();
                notify('لطفا تمامی مقادیر را کامل کنید', 'yellow');
            }
        });

    });
</script>