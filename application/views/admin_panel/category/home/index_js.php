<?php $ci =& get_instance(); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $items = <?php echo $ci->config->item('defaultPageSize'); ?>;
        $itemsOnPage = <?php echo $ci->config->item('defaultPageSize'); ?>;
        $selectedPage = 1;
        $totalResultCount = 0;
        $hasPagination = false;
        function loadData(selectedPage = $selectedPage){
            toggleLoader();
            $sendData = {
                'inputCategoryTitle': $("#inputCategoryTitle").val(),
                'pageIndex': selectedPage
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Category/doPagination',
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
        });
        $(document).on('click', '.remove-category', function () {
            $this = $(this);
            $.confirm({
                title: '',
                content: 'آیا از حذف دسته بندی مطمئن هستید؟',
                buttons: {
                    specialKey: {
                        text: 'تایید',
                        btnClass: 'btn-blue',
                        action: function () {
                            toggleLoader();
                            $sendData = {
                                'inputCategoryId': $this.data('category-id')
                            }
                            $.ajax({
                                type: 'post',
                                url: base_url + 'Category/doDeleteCategory',
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
        });
        $(document).on('click', '.favorite-category', function () {
            $this = $(this);
            $.confirm({
                title: '',
                content: 'آیا از ویژه کردن دسته بندی مطمئن هستید؟',
                buttons: {
                    specialKey: {
                        text: 'تایید',
                        btnClass: 'btn-blue',
                        action: function () {
                            toggleLoader();
                            $sendData = {
                                'inputCategoryId': $this.data('category-id')
                            }
                            $.ajax({
                                type: 'post',
                                url: base_url + 'Category/doFavoriteCategory',
                                data: $sendData,
                                success: function (data) {
                                    toggleLoader();
                                    $result = jQuery.parseJSON(data);
                                    notify($result['content'] , $result['type']);
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
                        }
                    }
                }
            });
        });

        $(document).on('click' , '.content_copy', function(){
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(this).data('link')).select();
            document.execCommand("copy");
            $temp.remove();
            notify('لینک دسته بندی کپی شد' , 'green');
        });
    });
</script>