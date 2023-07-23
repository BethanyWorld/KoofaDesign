<script type="text/javascript">
    $(document).ready(function () {

        $("#editAddressButton").click(function () {
            toggleLoader();
            $inputAddressId = $("#inputAddressId").val();
            $inputAddressFullName = $("#inputAddressFullName").val();
            $inputAddressEmail = $("#inputAddressEmail").val();
            $inputAddressPhone = $("#inputAddressPhone").val();
            $inputAddressHomePhone = $("#inputAddressHomePhone").val();
            $inputAddressPostalCode = $("#inputAddressPostalCode").val();
            $inputAddressStateId = $("#inputAddressStateId").val();
            $inputAddressCityId = $("#inputAddressCityId").val();
            $inputAddress = $("#inputAddress").val();
            $sendData = {
                'inputAddressId': $inputAddressId,
                'inputAddressFullName': $inputAddressFullName,
                'inputAddressEmail': $inputAddressEmail,
                'inputAddressPhone': $inputAddressPhone,
                'inputAddressHomePhone': $inputAddressHomePhone,
                'inputAddressPostalCode': $inputAddressPostalCode,
                'inputAddressStateId': $inputAddressStateId,
                'inputAddressCityId': $inputAddressCityId,
                'inputAddress': $inputAddress
            }
            $.ajax({
                type: 'post',
                url: base_url + 'User/Home/doEditAddress',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                        window.history.back();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                }
            });
        });

    });
</script>