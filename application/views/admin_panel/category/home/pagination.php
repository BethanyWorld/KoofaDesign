<?php
$counter = 0;
foreach ($data as $item) { ?>
    <tr>
        <td class="fit"><?php echo $counter +=1; ?></td>
        <td><?php echo $item['CategoryTitle']; ?></td>
        <td class="fit favorite-category"
            style="cursor: pointer;"
            data-category-id="<?php echo $item['CategoryId']; ?>">
            <?php echo pipeCategoryIsFavorite($item['CategoryIsFavorite']); ?>
        </td>
        <td class="fit ltr"><?php echo $item['CreateDateTime']; ?></td>
        <td class="fit">
            <a href="<?php echo base_url('Admin/Dashboard/Category/Edit/').$item['CategoryId']; ?>">
                <button type="button"
                        class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                    <i class="material-icons">edit</i>
                </button>
            </a>
        </td>
        <td class="fit">
                <button
                        data-category-id="<?php echo $item['CategoryId']; ?>"
                        type="button"
                        class="remove-category btn btn-danger btn-circle waves-effect waves-circle waves-float">
                    <i class="material-icons">delete</i>
                </button>
        </td>
    </tr>
<?php } ?>