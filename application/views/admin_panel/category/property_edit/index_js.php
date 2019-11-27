<script type="text/javascript">
    $(document).ready(function () {
        $("#editPropertyTitle").click(function () {
            $inputPropertyId = $.trim($("#inputPropertyId").val());
            $inputPropertyTitle = $.trim($("#inputPropertyTitle").val());
            //$inputPropertyOptions = $("#inputPropertyOptions").tagsinput('items');
            $sendData = {
                'inputPropertyId': $inputPropertyId,
                'inputPropertyTitle': $inputPropertyTitle
                /*, 'inputPropertyOptions': JSON.stringify($inputPropertyOptions)*/
            }
            toggleLoader();
            $.ajax({
                type: 'post',
                url: base_url + 'Category/doUpdatePropertyTitle',
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

        $("#editPropertyOptions").click(function () {
            $inputPropertyId = $.trim($("#inputPropertyId").val());
            $inputPropertyOptions = $("#inputPropertyOptions").tagsinput('items');
            $sendData = {
                'inputPropertyId': $inputPropertyId,
                'inputPropertyOptions': JSON.stringify($inputPropertyOptions)
            }
            toggleLoader();
            $.ajax({
                type: 'post',
                url: base_url + 'Category/doAddPropertyOption',
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

        $(document).on('click', '.remove-category-property-option', function () {
            $this = $(this);
            $title = "<strong class='col-pink'> " + $this.data('title') + " </strong>";
            $.confirm({
                title: '',
                content: 'آیا از حذف مقدار '+ $title +' مطمئن هستید؟',
                buttons: {
                    specialKey: {
                        text: 'تایید',
                        btnClass: 'btn-blue',
                        action: function () {
                            toggleLoader();
                            $sendData = {
                                'inputCategoryPropertyOptionId': $this.data('category-property-option-id')
                            }
                            $.ajax({
                                type: 'post',
                                url: base_url + 'Category/doDeletePropertyOption',
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

        $(document).on('click', '.edit-category-property-option', function () {
            $this = $(this);
            $title = "<strong class='col-pink'> " + $this.parent().prev('td').text() + " </strong>";
            $.confirm({
                title: '',
                content: 'آیا از بروزرسانی مقدار '+ $title +' مطمئن هستید؟',
                buttons: {
                    specialKey: {
                        text: 'تایید',
                        btnClass: 'btn-blue',
                        action: function () {
                            toggleLoader();
                            $sendData = {
                                'inputCategoryPropertyOptionId': $this.data('category-property-option-id'),
                                'inputCategoryPropertyOptionTitle': $this.parent().prev('td').text()
                            }
                            $.ajax({
                                type: 'post',
                                url: base_url + 'Category/doUpdatePropertyOption',
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