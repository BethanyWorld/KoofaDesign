<?php
$counter = 0;
if ((isset($data) && !$data) || $data == NULL) { ?>
   <tr><td colspan='10' class=\"fit\">موردی یافت نشد</td></tr>
<?php } else {
    foreach ($data as $item) { ?>
        <tr>
            <td class="fit"><?php echo $counter += 1; ?></td>
            <td><?php echo $item['MaterialTitle']; ?></td>
            <td class="fit">
                <a href="<?php echo base_url('Admin/Dashboard/Material/edit/') . $item['MaterialId']; ?>">
                    <button type="button"
                            class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">edit</i>
                    </button>
                </a>
            </td>
            <td class="fit">
                <button
                        data-title="<?php echo $item['MaterialTitle']; ?>"
                        data-material-id="<?php echo $item['MaterialId']; ?>"
                        type="button"
                        class="remove-material btn btn-danger btn-circle waves-effect waves-circle waves-float">
                    <i class="material-icons">delete</i>
                </button>
            </td>
        </tr>
    <?php }
} ?>