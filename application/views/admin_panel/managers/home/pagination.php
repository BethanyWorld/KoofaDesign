<?php
$counter = 0;
if (!$dataTable) { ?>
    <tr>
        <td colspan="7">موردی یافت نشد</td>
    </tr>
<?php }
else {
    foreach ($dataTable['data'] as $item) { ?>
        <tr>
            <td class="fit"><?php echo $counter += 1; ?></td>
            <td><?php echo $item['ManagerFullName']; ?></td>
            <td class="fit ltr"><?php echo $item['ManagerPhone']; ?></td>
            <td class="fit ltr"><?php echo $item['ManagerEmail']; ?></td>
            <td class="fit">
                <a href="<?php echo base_url('Admin/Dashboard/Managers/Edit/') . $item['ManagerId']; ?>">
                    <button type="button"
                            class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">edit</i>
                    </button>
                </a>
            </td>
        </tr>
    <?php }
} ?>