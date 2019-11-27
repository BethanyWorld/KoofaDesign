<script type="text/javascript">
    $(document).ready(function () {

        $("#buttonLogin").click(function () {
            toggleLoader();
            $inputPhone = $("#inputPhone").val();
            $inputPassword = $("#inputPassword").val();
            $inputCaptcha = $("#inputCaptcha").val();
            if ($inputPassword != "" && $inputPhone != "" && $inputCaptcha != "") {
                $sendData = {
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
                        iziToast.show({
                            title: $result['content'],
                            color: $result['type'],
                            zindex: 2030,
                            position: 'topLeft'
                        });
                        if($result['redirect'] != undefined){
                            if($result['success']){
                                setTimeout(function(){
                                    window.location = $result['redirect'];
                                } , 2000);
                            }
                        }
                        else{
                            if($result['success']){
                                setTimeout(function(){
                                    window.location.href = "<?php echo base_url('Admin/Dashboard/');  ?>";
                                } , 2000);
                            }
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {}
                });
            }
            else {
                toggleLoader();
                iziToast.show({
                    title: 'لطفا تمامی مقادیر را کامل کنید',
                    color: 'yellow', // blue, red, green, yellow
                    zindex: 2030000,
                    position: 'topLeft'
                });
            }
        });

    });
</script>