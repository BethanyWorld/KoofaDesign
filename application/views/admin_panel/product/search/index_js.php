<?php $ci =& get_instance(); ?>
<script type="text/javascript">
    $(document).ready(function () {


        $("#searchButton").click(function () {
            toggleLoader();
            $sendData = {
                'inputProductTitle': $("#inputProductTitle").val(),
                'inputProductCategoryId': $("#inputProductCategoryDropDown ").val(),
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Product/doSearch',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $(".table-rows").html(data);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('خطای ارتباط با سرور.دقایقی دیگر تلاش کنید' , 'red');
                    toggleLoader();
                }
            });
        });

        /*setTimeout(function(){
            $("#searchButton").click();
        },1000);*/

        $(document).on('click', '.remove-product', function () {
            $this = $(this);
            $title = "<strong class='col-pink'> " + $this.data('title') + " </strong>";
            $.confirm({
                title: '',
                content: 'آیا از حذف محصول '+ $title +' مطمئن هستید؟',
                buttons: {
                    specialKey: {
                        text: 'تایید',
                        btnClass: 'btn-blue',
                        action: function () {
                            toggleLoader();
                            $sendData = {
                                'inputProductId': $this.data('product-id')
                            }
                            $.ajax({
                                type: 'post',
                                url: base_url + 'Product/doDeleteProduct',
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