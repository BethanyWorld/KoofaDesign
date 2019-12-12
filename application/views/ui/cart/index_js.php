<script type="text/javascript">
    $(document).ready(function () {
        $(".cart-product-decrease").click(function(){
            $count = $(this).next('input').val();
            $count = parseInt($count) -1;
            if($count <=0){
                notify('تعداد نامعتبر است', 'red' , 10000000000000);
                $(this).next('input').val(1);
            }
            else{
                $(this).next('input').val($count);
            }
        });
        $(".cart-product-increase").click(function(){
            $count = $(this).prev('input').val();
            $count = parseInt($count) +1;
            $(this).prev('input').val($count);
        });
        $(".update-shopping-cart").click(function(){
            $productId = $(this).data('product-id');
            $parentId = $(this).data('parent-id');
            $newCount = $("#"+$parentId).find("input[type='number']").val();
            toggleLoader();
            $inputProductId= $(this).data('product-id');
            $sendData = {
                'inputNewCount': $newCount,
                'inputProductId': $inputProductId
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Cart/updateCount',
                data: $sendData,
                success: function (data) {
                    location.reload();
                },
                error: function (jqXHR, textStatus, errorThrown) {}
            });
        });
        $(".remove-shopping-cart").click(function(){
            $productId = $(this).data('product-id');
            toggleLoader();
            $inputProductId= $(this).data('product-id');
            $.ajax({
                type: 'get',
                url: base_url + 'Cart/remove/'+$inputProductId,
                success: function (data) {
                    location.reload();
                },
                error: function (jqXHR, textStatus, errorThrown) {}
            });
        });
    });
</script>