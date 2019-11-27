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
            <td><?php echo $item['UserFirstName']." ".$item['UserLastName']; ?></td>
            <td class="fit ltr"><?php echo $item['UserPhone']; ?></td>
            <td class="fit ltr"><?php echo $item['UserEmail']; ?></td>
            <td class="fit ltr"><?php echo $item['CreateDateTime']; ?></td>
            <td class="fit">
                <a href="<?php echo base_url('Admin/Dashboard/User/Edit/') . $item['UserId']; ?>">
                    <button type="button"
                            class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">edit</i>
                    </button>
                </a>
            </td>
<!--            <td class="fit">-->
<!--                <button-->
<!--                        data-title="--><?php //echo $item['UserFirstName']." ".$item['UserLastName']; ?><!--"-->
<!--                        data-user-id="--><?php //echo $item['UserId']; ?><!--"-->
<!--                        type="button"-->
<!--                        class="remove-product btn btn-danger btn-circle waves-effect waves-circle waves-float">-->
<!--                    <i class="material-icons">delete</i>-->
<!--                </button>-->
<!--            </td>-->
        </tr>
    <?php }
} ?>