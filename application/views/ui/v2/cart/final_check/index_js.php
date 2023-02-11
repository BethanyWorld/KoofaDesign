<script type="text/javascript">
    $(document).ready(function () {
        $addressId = 0;
        $(".profile-client-other-detail-div").click(function(){
            $(".profile-client-other-detail-div").removeClass('active');
            $(this).addClass('active');
            $(this).find('input[type="radio"]').prop('checked','checked');
        });
        $("#select-send-method").click(function(){
            $Id = $(".profile-client-other-detail-div input[type='radio']:checked").val();
            toggleLoader();
            $.ajax({
                type: 'get',
                url: base_url + 'Cart/updateSendMethodId/'+$addressId,
                success: function () {
                    location.href = base_url+'Cart/payMethod'
                },
                error: function (jqXHR, textStatus, errorThrown) {}
            });
        });
    });
</script>