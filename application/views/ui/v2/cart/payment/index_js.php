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
        $(".address-label").click(function(){
            $(".address-label").removeClass('active');
            $(this).addClass('active');
        });
        $(".address-label").eq(0).click();

        $("#addDiscountCode").click(function(){
            toggleLoader();
            $inputDiscountCode = $("#inputDiscountCode").val();
            $sendData = {
                'inputDiscountCode': $inputDiscountCode
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Cart/updateDiscountCode',
                data: $sendData,
                success: function (data) {
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                    toggleLoader();
                    if($result['success']){
                        $(".discount-message").text($result['content']);
                        $("#discount-form").slideToggle();
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    toggleLoader();
                }
            });
        });

    });
</script>