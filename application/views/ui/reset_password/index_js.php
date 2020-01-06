<script type="text/javascript">
    $(document).ready(function () {

        $("#buttonResetPassword").click(function () {
            toggleLoader();
            $inputRegisterType = $("input[name='registerType']:checked").val() || "";
            $inputPhone = $(".login-form-holder #inputPhone").val();
            $inputCaptcha = $(".login-form-holder #inputCaptcha").val();
            if ($inputPhone != "" && $inputCaptcha != "") {
                $sendData = {
                    'inputPhone': $inputPhone,
                    'inputCaptcha': $inputCaptcha
                }
                $.ajax({
                    type: 'post',
                    url: base_url + 'Account/doResetPassword',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = jQuery.parseJSON(data);
                        notify($result['content'], $result['type']);
                        if($result['success']){
                            setTimeout(function(){
                                window.location.href = "<?php echo base_url('Account/login');  ?>";
                            } , 1000);
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