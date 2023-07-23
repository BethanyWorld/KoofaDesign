<script type="text/javascript">
    $(document).ready(function () {

        $("#addAddressButton").click(function () {
            toggleLoader();
            $inputAddressFullName = $("#inputAddressFullName").val();
            $inputAddressEmail = $("#inputAddressEmail").val();
            $inputAddressPhone = $("#inputAddressPhone").val();
            $inputAddressHomePhone = $("#inputAddressHomePhone").val();
            $inputAddressPostalCode = $("#inputAddressPostalCode").val();
            $inputAddressStateId = $("#inputAddressStateId").val();
            $inputAddressCityId = $("#inputAddressCityId").val();
            $inputAddress = $("#inputAddress").val();
            $sendData = {
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
                url: base_url + 'User/Home/doAddAddress',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                        location.reload();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                }
            });
        });

    });
</script>