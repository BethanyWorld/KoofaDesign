<script type="text/javascript">
    $(document).ready(function () {
        $addressId = 0;
        $(".address").click(function(){
            $(".address").removeClass('active');
            $(this).addClass('active');
            $(this).find('input[type="radio"]').prop('checked','checked');
        });
        $("#select-address").click(function(){
            $addressId = $(".step-payment-div-main-big input[type='radio']:checked").val();
            toggleLoader();
            $.ajax({
                type: 'get',
                url: base_url + 'Cart/updateAddressId/'+$addressId,
                success: function () {
                    location.href = base_url+'Cart/sendMethod'
                },
                error: function (jqXHR, textStatus, errorThrown) {}
            });
        });
    });
</script>