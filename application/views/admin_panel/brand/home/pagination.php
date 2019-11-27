<?php
$counter = 0;
foreach ($dataTable['data'] as $item) { ?>
    <tr>
        <td class="fit"><?php echo $counter +=1; ?></td>
        <td><?php echo $item['BrandTitle']; ?></td>
        <td class="fit ltr"><?php echo $item['CreateDateTime']; ?></td>
        <td class="fit">
            <a href="<?php echo base_url('Admin/Dashboard/Brand/Edit/').$item['BrandId']; ?>">
                <button type="button"
                        class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                    <i class="material-icons">edit</i>
                </button>
            </a>
        </td>
        <td class="fit">
                <button
                        data-title="<?php echo $item['BrandTitle']; ?>"
                        data-brand-id="<?php echo $item['BrandId']; ?>"
                        type="button"
                        class="remove-brand btn btn-danger btn-circle waves-effect waves-circle waves-float">
                    <i class="material-icons">delete</i>
                </button>
        </td>
    </tr>
<?php } ?>