<script type="text/javascript">
    $(document).ready(function () {
        /* Update User Info */
        $("#edit").click(function () {

                $sendData = {
                    'inputCommentId':  $.trim($("#inputCommentId").val()),
                    'inputStatus':  $.trim($("#inputStatus").val()),
                    'inputCommentContent':  $.trim($("#inputCommentContent").val())
                }
                toggleLoader();
                $.ajax({
                    type: 'post',
                    url: base_url + 'Comments/doEditComment',
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

        });
        /* End Update User Info */

    });
</script>