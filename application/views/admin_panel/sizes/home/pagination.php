<?php
$counter = 0;
if ((isset($data) && !$data) || $data == NULL) { ?>
   <tr><td colspan='10' class=\"fit\">موردی یافت نشد</td></tr>
<?php } else {
    foreach ($data as $item) { ?>
        <tr>
            <td class="fit"><?php echo $counter += 1; ?></td>
            <td><?php echo $item['SizeTitle']; ?></td>
            <td class="fit">
                <a href="<?php echo base_url('Admin/Dashboard/Sizes/edit/') . $item['SizeId']; ?>">
                    <button type="button"
                            class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">edit</i>
                    </button>
                </a>
            </td>
            <td class="fit">
                <button
                        data-title="<?php echo $item['SizeTitle']; ?>"
                        data-size-id="<?php echo $item['SizeId']; ?>"
                        type="button"
                        class="remove-size btn btn-danger btn-circle waves-effect waves-circle waves-float">
                    <i class="material-icons">delete</i>
                </button>
            </td>
        </tr>
    <?php }
} ?>