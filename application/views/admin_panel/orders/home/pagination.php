<?php
$counter = 0;
if ((isset($data) && !$data) || $data == NULL) { ?>
   <tr><td colspan='10' class=\"fit\">موردی یافت نشد</td></tr>
<?php } else {
    foreach ($data as $item) { ?>
        <tr>
            <td class="fit"><?php echo $counter += 1; ?></td>
            <td><?php echo $item['UserFirstName']." ".$item['UserLastName']; ?></td>
            <td class="fit"><?php echo $item['OrderId']; ?></td>
            <td class="fit"><?php echo $item['UserPhone']; ?></td>
            <td class="fit"><?php echo number_format($item['OrderTotalPrice']); ?></td>
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