<script type="text/javascript">
    $(document).ready(function () {
        function loadData(num = 1) {
            toggleLoader();
            $orderingProduct = $.trim($("#orderingProduct").val());
            $sendData = {
                'pageIndex': num,
                'inputOrderingProduct': $orderingProduct,
                'inputCategoryId': <?php echo $categoryId ?>
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Category/search',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $("#product-container").html(data);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    toggleLoader();
                    iziToast.show({
                        title: 'خطای ارتباط با سرور',
                        color: 'red',
                        zindex: 2030,
                        position: 'topLeft'
                    });
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
        });
    });
</script>