<script type="text/javascript">
    $(document).ready(function () {

        /* Update User Info */
        $("#editUser").click(function () {
            $inputUserId = $.trim($("#inputUserId").val());
            $inputUserFirstName = $.trim($("#inputUserFirstName").val());
            $inputUserLastName = $.trim($("#inputUserLastName").val());
            $inputUserPhone = $.trim($("#inputUserPhone").val());
            $inputUserHomePhone = $.trim($("#inputUserHomePhone").val());
            $inputUserEmail = $.trim($("#inputUserEmail").val());
            $inputUserBirthDate = $.trim($("#inputUserBirthDate").val());
            $inputUserStateId = $.trim($("#inputUserStateId").val());
            $inputUserCityId = $.trim($("#inputUserCityId").val());
            $inputUserPostalCode = $.trim($("#inputUserPostalCode").val());
            $inputUserSecondPhone = $.trim($("#inputUserSecondPhone").val());
            $inputUserAddress = $.trim($("#inputUserAddress").val());
            $inputUserPassword = $.trim($("#inputUserPassword").val());




            if (isEmpty($inputUserId) || isEmpty($inputUserFirstName) ||
                isEmpty($inputUserLastName) ||
                isEmpty($inputUserPhone) || isEmpty($inputUserHomePhone) ||
                isEmpty($inputUserEmail) || isEmpty($inputUserBirthDate) ||
                isEmpty($inputUserStateId) || isEmpty($inputUserCityId) ||
                isEmpty($inputUserPostalCode) || isEmpty($inputUserSecondPhone) ||
                isEmpty($inputUserAddress) ) {
                notify('لطفا تمامی موارد را کامل کنید' , 'red');
            }
            else {
                $sendData = {
                    'inputUserId': $inputUserId,
                    'inputUserFirstName': $inputUserFirstName,
                    'inputUserLastName': $inputUserLastName,
                    'inputUserPhone': $inputUserPhone,
                    'inputUserHomePhone': $inputUserHomePhone,
                    'inputUserEmail': $inputUserEmail,
                    'inputUserBirthDate': $inputUserBirthDate,
                    'inputUserAddressStateId': $inputUserStateId,
                    'inputUserAddressCityId': $inputUserCityId,
                    'inputUserPostalCode': $inputUserPostalCode,
                    'inputUserSecondPhone': $inputUserSecondPhone,
                    'inputUserAddress': $inputUserAddress,
                    'inputUserPassword': $inputUserPassword
                }
                toggleLoader();
                $.ajax({
                    type: 'post',
                    url: base_url + 'User/doUpdateUser',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = jQuery.parseJSON(data);
                        notify($result['content'], $result['type']);
                        reloadPage(1000);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        notify($result['content'], $result['type']);
                        toggleLoader();
                        reloadPage(1000);
                    }
                });
            }

        });
        /* End Update User Info */
        $('#inputUserStateId').change(function(){
            toggleLoader();
            $("#inputUserCityId").html('');
            $stateId = $(this).val();
            $.ajax({
                type: 'post',
                url: base_url + 'User/getCityByStateId/'+$stateId,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    for(let i=0;i<$result.length;i++){
                        $("#inputUserCityId").append('<option value="'+$result[i].CityId+'">'+$result[i].CityName+'</option>');
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    iziToast.show({
                        title: 'خطای ارتباط با سرور.دقایقی دیگر تلاش کنید',
                        color: 'red',
                        zindex: 9060,
                        position: 'topLeft'
                    });
                    toggleLoader();
                }
            });
        });

    });
</script>