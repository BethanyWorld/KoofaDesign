<?php $ci =& get_instance(); ?>
<script type="text/javascript">
    $items = <?php echo $ci->config->item('defaultPageSize'); ?>;
    $itemsOnPage = <?php echo $ci->config->item('defaultPageSize'); ?>;
    $selectedPage = 1;
    $totalResultCount = 0;
    $hasPagination = false;
    function loadData(selectedPage = $selectedPage){
        setTimeout(toggleLoader(),200);
        hideLoader();
        $sendData = {
            'inputOrderId': $("#inputOrderId").val(),
            'inputPhone': $("#inputPhone").val(),
            'inputLastName': $("#inputLastName").val(),
            'pageIndex': selectedPage
        }
        $.ajax({
            type: 'post',
            url: base_url + 'Orders/doPagination',
            data: $sendData,
            success: function (data) {
                hideLoader();
                $result = JSON.parse(data);
                $(".table-rows").html($result['htmlResult']);
                $totalResultCount = $result['count'];
                if($hasPagination){
                    $(".simple-pagination").pagination('updateItems', $totalResultCount);
                }
                else{
                    $hasPagination = true;
                    $(".simple-pagination").pagination({
                        items: $totalResultCount,
                        itemsOnPage: $itemsOnPage,
                        cssStyle: 'compact-theme',
                        prevText: 'قبلی',
                        nextText: 'بعدی',
                        onPageClick: function (pageNum, e) {
                            e.preventDefault();
                            loadData(pageNum);
                        }
                    });
                }
            }
        });
    }
    $(document).ready(function(){
        loadData();
        $("#searchButton").click(function () {
            loadData();
        });



        $(document).on('click', '.remove-size', function () {
            $this = $(this);
            $title = "<label class='label label-default'>"+$this.data('title')+"</label>";
            $.confirm({
                title: '',
                content: 'آیا از حذف'+$title+' مطمئن هستید؟',
                buttons: {
                    specialKey: {
                        text: 'تایید',
                        btnClass: 'btn-blue',
                        action: function () {
                            toggleLoader();
                            $sendData = {
                                'inputSizeId': $this.data('size-id')
                            }
                            $.ajax({
                                type: 'post',
                                url: base_url + 'Sizes/doDeleteSize',
                                data: $sendData,
                                success: function (data) {
                                    toggleLoader();
                                    $result = jQuery.parseJSON(data);
                                    notify($result['content'] , $result['type']);
                                    if ($result['success']) {
                                        reloadPage(1000);
                                    }
                                },
                                error: function (jqXHR, textStatus, errorThrown) {
                                    notify('خطای ارتباط با سرور.دقایقی دیگر تلاش کنید' , 'red');
                                    toggleLoader();
                                }
                            });
                        }
                    },
                    alphabet: {
                        text: 'انصراف',
                        action: function () {
                            //$.alert('A or B was pressed');
                        }
                    }
                }
            });
        })



    });
</script>