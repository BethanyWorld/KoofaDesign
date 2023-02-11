<script type="text/javascript">
    $(document).ready(function () {

        $("#select-address").click(function(){
            $addressId = $(".cart-shopping-product-div input[name='address']:checked").val();
            $sendMethodId = $(".cart-shopping-product-div input[name='send-method']:checked").val();
            if($addressId === undefined && $sendMethodId === undefined){
                notify('لطفا آدرس و روش ارسال را انتخاب کنید' , 'yellow');
            }
            else{
                $.ajax({
                    type: 'get',
                    url: base_url + 'Cart/updateAddressId/'+$addressId,
                    success: function () {


                        toggleLoader();
                        $.ajax({
                            type: 'get',
                            url: base_url + 'Cart/updateSendMethodId/'+$sendMethodId,
                            success: function () {
                                location.href = base_url+'Cart/finalCheck'
                            },
                            error: function (jqXHR, textStatus, errorThrown) {}
                        });



                    },
                    error: function (jqXHR, textStatus, errorThrown) {}
                });
            }





        });
    });
</script>