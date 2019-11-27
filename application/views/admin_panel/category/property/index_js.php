<script type="text/javascript">
    $(document).ready(function () {
        /* Update User Info */
        $("#addCategory").click(function () {
            $inputPropertyCategoryId= $.trim($("#inputCategoryId").val());
            $inputPropertyTitle = $.trim($("#inputPropertyTitle").val());
            $inputPropertyOptions = $("#inputPropertyOptions").tagsinput('items');
            $sendData = {
                'inputCategoryId': $inputPropertyCategoryId,
                'inputPropertyTitle': $inputPropertyTitle,
                'inputPropertyOptions': JSON.stringify($inputPropertyOptions)
            }
            toggleLoader();
            $.ajax({
                type: 'post',
                url: base_url + 'Category/doAddProperty',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'] , $result['type']);
                    reloadPage(1000);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify($result['content'] , $result['type']);
                    toggleLoader();
                    reloadPage(1000);
                }
            });
        });
        /* End Update User Info */


        $(document).on('click', '.remove-category-property', function () {
            $this = $(this);
            $title = "<strong class='col-pink'> " + $this.data('title') + " </strong>";
            $.confirm({
                title: '',
                content: 'آیا از حذف ویژگی '+ $title +' مطمئن هستید؟',
                buttons: {
                    specialKey: {
                        text: 'تایید',
                        btnClass: 'btn-blue',
                        action: function () {
                            toggleLoader();
                            $sendData = {
                                'inputPropertyId': $this.data('category-property-id')
                            }
                            $.ajax({
                                type: 'post',
                                url: base_url + 'Category/doDeleteProperty',
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
                        }
                    }
                }
            });
        })

    });
</script>