<script type="text/javascript">
    $(document).ready(function () {
        function loadData(num = 1) {
            toggleLoader();
            $inputOrderingProductPrice = $.trim($("#inputOrderingProductPrice").val());
            $inputPropertyOptions = [];
            $("input[type='checkbox'].property-option").each(function(){
                if($(this).is(':checked')){
                    $inputPropertyOptions.push($(this).val());
                }
            });
            $sendData = {
                'pageIndex': num,
                'inputOrderingProductPrice': $inputOrderingProductPrice,
                'inputPropertyOptions': $inputPropertyOptions,
                'inputCategoryId': <?php echo $categoryId ?>
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Category/search',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $("#product-container").html(data);
                    $("html, body").animate({ scrollTop: 100 }, "slow");
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    toggleLoader();
                }
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
        $("#inputOrderingProductPrice").change(function() {
            loadData();
            $('#pagination').bootpag({
                total: Math.ceil($numRows / $defaultPageSize),
                page: 1,
                maxVisible: 5
            });
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