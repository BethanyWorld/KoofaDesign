<?php
$counter = 0;
if ((isset($data) && !$data) || $data == NULL) { ?>
    <tr>
        <td colspan='10' class=\"fit\">موردی یافت نشد</td>
    </tr>
<?php } else {
    foreach ($data as $item) { ?>
        <tr>
            <td class="fit"><?php echo $counter += 1; ?></td>
            <td><?php echo $item['ProductTitle']; ?></td>
            <td class="fit"><label class="label label-default"><?php productTypePipe($item['ProductType']); ?></label>
            </td>
            <td class="fit ltr"><?php echo convertDate($item['CreateDateTime']); ?><br><?php echo convertTime($item['CreateDateTime']); ?></td>
            <td class="fit">
                <a
                        target="_blank"
                        href="<?php echo base_url('Product/detail/') . $item['ProductId']."/".seoUrl($item['ProductTitle']); ?>">
                    <button type="button"
                            class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">edit</i>
                    </button>
                </a>
            </td>
            <td class="fit">
                <button type="button"
                        data-link="<?php echo base_url('Product/detail/') . $item['ProductId']."/".seoUrl($item['ProductTitle']); ?>"
                        class="btn btn-success btn-circle waves-effect waves-circle waves-float content_copy">
                    <i class="material-icons">content_copy</i>

                </button>
            </td>
            <td class="fit">
                <?php
                $url = "";
                switch ($item['ProductType']) {
                    case 'Normal':
                        $url = "editNormal";
                        break;
                    case 'NormalUpload':
                        $url = "editNormalUpload";
                        break;
                    case 'DesignFreeSize':
                        $url = "editDesignFreeSize";
                        break;
                    case 'DesignFixSize':
                        $url = "editDesignFixSize";
                        break;
                }
                ?>
                <a href="<?php echo base_url('Admin/Dashboard/Product/' . $url . "/") . $item['ProductId']; ?>">
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