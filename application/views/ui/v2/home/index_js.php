<script type="text/javascript">
    $(document).ready(function () {
        $("#submitNewsLetter").click(function () {
            toggleLoader();
            $inputNewLetter = $("#inputNewLetter").val();
            if ($inputNewLetter != "") {
                $sendData = { 'inputNewLetter': $inputNewLetter };
                $.ajax({
                    type: 'post',
                    url: base_url + 'Account/doSubmitNewsLetter',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = jQuery.parseJSON(data);
                        notify($result['content'], $result['type']);
                        if ($result['success']) {
                            location.reload();
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