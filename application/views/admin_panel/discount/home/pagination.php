<?php
$counter = 0;
if ((isset($data) && !$data) || $data == NULL) { ?>
    <tr>
        <td colspan='10' class=\"fit\">موردی یافت نشد</td>
    </tr>
<?php } else {
foreach ($data['data'] as $item) { ?>
    <tr>
        <td class="fit"><?php echo $counter +=1; ?></td>
        <td><?php echo $item['DiscountCode']; ?></td>
        <td class="fit"><?php pipeDiscountCodeType($item['DiscountType']); ?></td>
        <td class="fit"><?php echo $item['DiscountPercent']; ?></td>
        <td class="fit"><?php echo $item['DiscountPrice']; ?></td>
        <td class="fit">
            <a href="<?php echo base_url('Admin/Dashboard/DiscountCode/Edit/').$item['DiscountCode']; ?>">
                <button type="button"
                        class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                    <i class="material-icons">edit</i>
                </button>
            </a>
        </td>
        <td class="fit">
                <button
                        data-title="<?php echo $item['DiscountCode']; ?>"
                        data-discount-code="<?php echo $item['DiscountCode']; ?>"
                        type="button"
                        class="remove-discount-code btn btn-danger btn-circle waves-effect waves-circle waves-float">
                    <i class="material-icons">delete</i>
                </button>
        </td>
    </tr>
<?php } } ?>