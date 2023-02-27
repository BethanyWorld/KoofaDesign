<script type="text/javascript">
    $(document).ready(function () {
        $(".remove-wish-list").click(function () {
            toggleLoader();
            $inputProductId= $(this).data('product-id');
            $sendData = {
                'inputProductId': $inputProductId
            }
            $.ajax({
                type: 'post',
                url: base_url + 'User/Home/doDeleteWishList',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                    setTimeout(function () {
                        location.reload();
                    } , 2000);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                }
            });
        });

        if($(".profile-login-image-div4").length  % 2 == 0){
            $(".profile-login-image-div4").last().addClass('no-border');
            $(".profile-login-image-div4").last().prev().addClass('no-border');
        } else{
            $(".profile-login-image-div4").last().addClass('no-border');
        }
    });
</script>