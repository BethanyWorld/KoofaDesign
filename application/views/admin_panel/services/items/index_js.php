<script type="text/javascript">
    $(document).ready(function () {
        $("#addServiceItem").click(function () {
            $inputServiceId = $.trim($("#inputServiceId").val());
            $inputServiceItemTitle = $.trim($("#inputServiceItemTitle").val());
            $inputServiceItemPrice = $.trim($("#inputServiceItemPrice").val());
            if (isEmpty($inputServiceItemTitle)) {
                notify('لطفا تمامی موارد را کامل کنید', 'red');
            }
            else {
                $sendData = {
                    'inputServiceId': $inputServiceId,
                    'inputServiceItemTitle': $inputServiceItemTitle,
                    'inputServiceItemPrice': $inputServiceItemPrice
                };
                toggleLoader();
                $.ajax({
                    type: 'post',
                    url: base_url + 'Services/doAddItems',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = jQuery.parseJSON(data);
                        notify($result['content'], $result['type']);
                        reloadPage(1000);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        notify('مقدار سایز تکراری ست', 'red');
                        toggleLoader();
                        reloadPage(1000);
                    }
                });
            }
        });
        $("table .item-edit").blur(function () {
            $inputServiceItemId = $(this).data('service-item-id');
            $inputServiceItemType = $(this).data('service-item-type');
            $inputServiceItemValue = $.trim($(this).val());
            $sendData = {
                'inputServiceItemId': $inputServiceItemId,
                'inputServiceItemType': $inputServiceItemType,
                'inputServiceItemValue': $inputServiceItemValue
            };
            toggleLoader();
            $.ajax({
                type: 'post',
                url: base_url + 'Services/doEditItems',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                    reloadPage(1000);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('مقدار سایز تکراری ست', 'red');
                    toggleLoader();
                    reloadPage(1000);
                }
            });
        });
        $(document).on('click', '.remove', function () {
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
                                'inputServiceItemId': $this.data('service-item-id')
                            }
                            $.ajax({
                                type: 'post',
                                url: base_url + 'Services/doRemoveItem',
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

    });
</script>