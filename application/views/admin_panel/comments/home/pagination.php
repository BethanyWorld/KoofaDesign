<?php
$counter = 0;
if ((isset($data) && !$data) || $data == NULL) { ?>
   <tr><td colspan='10' class=\"fit\">موردی یافت نشد</td></tr>
<?php } else {
    foreach ($data as $item) { ?>
        <tr>
            <td class="fit"><?php echo $counter += 1; ?></td>
            <td><?php echo $item['ProductTitle']; ?></td>
            <td class="fit"><?php echo $item['CommentUserFullName']; ?></td>
            <td class="fit"><?php echo $item['CommentEmail']; ?></td>
            <td class="fit"><?php echo $item['CommentRate']; ?></td>
            <td class="fit"><?php echo orderCommentStatusPipe($item['CommentStatus']); ?></td>
            <td class="fit"><?php echo convertDate($item['cdt']); ?></td>
            <td class="fit">
                <a href="<?php echo base_url('Admin/Dashboard/Comments/edit/') . $item['CommentId']; ?>">
                    <button type="button"
                            class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">edit</i>
                    </button>
                </a>
            </td>
            <td class="fit">
                <button
                        data-title="<?php echo $item['ProductTitle']; ?>"
                        data-comment-id="<?php echo $item['CommentId']; ?>"
                        type="button"
                        class="remove btn btn-danger btn-circle waves-effect waves-circle waves-float">
                    <i class="material-icons">delete</i>
                </button>
            </td>
        </tr>
    <?php }
} ?>