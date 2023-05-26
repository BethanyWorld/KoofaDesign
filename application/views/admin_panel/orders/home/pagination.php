<?php
$counter = 0;
if ((isset($data) && !$data) || $data == NULL) { ?>
   <tr><td colspan='10' class=\"fit\">موردی یافت نشد</td></tr>
<?php } else {
    foreach ($data as $item) {
        if(isset($item['items'][0])){
            $detail = $item['items'][0];
        }
        ?>
        <tr>
            <td class="fit"><?php echo $counter += 1; ?></td>
            <td class="fit"><?php echo $item['UserFirstName']." ".$item['UserLastName']; ?></td>
            <td class="fit"><?php echo $item['OrderId']; ?></td>
            <td class="fit"><?php echo $detail['ProductTitle']; ?></td>
            <td class="fit"><?php echo productTypePipe($detail['ProductType']); ?></td>
            <td class="fit"><?php echo $detail['ProductCount']; ?></td>
            <td class="fit"><?php echo $item['UserPhone']; ?></td>
            <td class="fit"><?php echo number_format($item['OrderTotalPrice']); ?></td>
            <td class="fit"><?php echo orderStatusPipe($item['OrderStatus']); ?></td>
            <td class="fit">
                <a href="<?php echo base_url('Admin/Dashboard/Orders/detail/') . $item['OrderId']; ?>">
                    <button type="button"
                            class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">edit</i>
                    </button>
                </a>
            </td>
        </tr>
    <?php }
} ?>