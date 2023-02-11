<script type="text/javascript">
    $(document).ready(function () {
        $top = 0;
        $productTop = 0;
        $(document).on('scroll' , function(){
            $top = $("html").scrollTop();
            console.log($top);
            console.log($productTop);
            if($top > 220 && $top < $productTop-330){
                $(".category-lists").addClass('sticky').css('top', ($("html").scrollTop()-200) +'px');
            }
            else{
                $(".category-lists").removeClass('sticky').css('top', '0px');
            }
        });

        function loadData(num = 1) {
            $inputOrderingProductPrice = $(".ordering li.active").data('type');
            $inputPropertyOptions = [];
            $("input[type='checkbox'].property-option").each(function(){
                if($(this).is(':checked')){
                    $inputPropertyOptions.push($(this).val());
                }
            });
            $sendData = {
                'pageIndex': num,
                'inputOrdering': $inputOrderingProductPrice,
                'inputPropertyOptions': $inputPropertyOptions,
                'inputCategoryId': <?php echo $categoryId ?>
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Category/search',
                data: $sendData,
                success: function (data) {
                    $("#product-container").html(data);
                    $productTop = $(".back-to-top").eq(0).position().top;
                    $("html, body").animate({ scrollTop: 200 }, "slow");
                },
                error: function (jqXHR, textStatus, errorThrown) {}
            });
        }
        loadData();
        $defaultPageSize = <?php echo $this->config->item('defaultPageSize'); ?>;
        $numRows = <?php echo $productCount; ?>;
        $('#pagination').bootpag({
            total: Math.ceil($numRows / $defaultPageSize),
            maxVisible: 5
        }).on("page", function (event, num) {
            loadData(num);
            return false;
        });
        $(".ordering li").click(function() {
            $(".ordering li").removeClass('active');
            $(this).addClass('active');
            loadData(1);
        });
        $(".select-ordering").change(function(){
            $index = $(this).find('option:selected').index();
            $(".ordering li").removeClass('active');
            $(".ordering li").eq($index).addClass('active');
            loadData(1);
        });
        $("input[type='checkbox'].property-option").click(function() {
            loadData();
            $('#pagination').bootpag({
                total: Math.ceil($numRows / $defaultPageSize),
                page: 1,
                maxVisible: 5
            });
        });
    });
</script>