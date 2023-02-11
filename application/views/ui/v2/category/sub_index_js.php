<script type="text/javascript">
    $(document).ready(function () {
        $top = 0;
        $productTop = $(".product-slider.min").eq(0).position().top;
        $(document).on('scroll' , function(){
            $top = $("html").scrollTop();
            if($top > 220 && $top < $productTop-330){
                $(".category-lists").addClass('sticky').css('top', ($("html").scrollTop()-200) +'px');
            }
            else{
                $(".category-lists").removeClass('sticky').css('top', '0px');
            }
        });
    });
</script>