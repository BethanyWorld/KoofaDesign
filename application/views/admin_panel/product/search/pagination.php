<?php
if (!isset($dataTable['data']) || $dataTable['data'] == NULL) { ?>
    <tr class="warning">
        <td colspan="6">موردی یافت نشد</td>
    </tr>
<?php } else {
$counter = 0;
foreach ($dataTable['data'] as $item) { ?>
    <tr>
        <td class="fit"><?php echo $counter +=1; ?></td>
        <td><?php echo $item['ProductTitle']; ?></td>
        <td class="fit ltr"><?php echo $item['CreateDateTime']; ?></td>
        <td class="fit ltr"><?php echo number_format($item['ProductNormalPrice']); ?></td>
        <td class="fit">
            <a href="<?php echo base_url('Admin/Dashboard/Product/Edit/').$item['ProductId']; ?>">
                <button type="button"
                        class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                    <i class="material-icons">edit</i>
                </button>
            </a>
        </td>
        <td class="fit">
                <button
                        data-title="<?php echo $item['ProductTitle']; ?>"
                        data-product-id="<?php echo $item['ProductId']; ?>"
                        type="button"
                        class="remove-product btn btn-danger btn-circle waves-effect waves-circle waves-float">
                    <i class="material-icons">delete</i>
                </button>
        </td>
    </tr>
<?php }
} ?>