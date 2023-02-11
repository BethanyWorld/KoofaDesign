<script type="text/javascript">
    $(document).ready(function () {
        $addressId = 0;
        $("#select-send-method").click(function(){
            $Id = $("input[type='radio']:checked").val();
            toggleLoader();
            $.ajax({
                type: 'get',
                url: base_url + 'Cart/updateSendMethodId/'+$Id,
                success: function () {
                    location.href = base_url+'Cart/finalCheck'
                },
                error: function (jqXHR, textStatus, errorThrown) {}
            });
        });
    });
</script>