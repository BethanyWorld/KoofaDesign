<?php
$counter = 0;
if (count($data['data']) <= 0) {
    echo "<tr><td colspan='7' class=\"fit\">موردی یافت نشد</td></tr>";
} else {
    foreach ($data as $item) { ?>
        <tr>
            <td class="fit"><?php echo $counter += 1; ?></td>
            <td><?php echo $item['OrderSendMethodTitle']; ?></td>
            <td class="fit"><?php echo number_format($item['OrderSendMethodPrice']); ?>
            <td class="fit"><?php echo pipeSendMethodState($item['OrderSendMethodActive']); ?></td>

            <td class="fit ltr"><?php echo $item['CreateDateTime']; ?></td>
            <td class="fit">
                <a href="<?php echo base_url('Admin/Dashboard/OrderSendMethod/Edit/') . $item['OrderSendMethodId']; ?>">
                    <button type="button"
                            class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">edit</i>
                    </button>
                </a>
            </td>
            <td class="fit">
                <button
                        data-title="<?php echo $item['OrderSendMethodTitle']; ?>"
                        data-send-method-id="<?php echo $item['OrderSendMethodId']; ?>"
                        type="button"
                        class="remove-send-method btn btn-danger btn-circle waves-effect waves-circle waves-float">
                    <i class="material-icons">delete</i>
                </button>
            </td>
        </tr>
    <?php }
} ?>