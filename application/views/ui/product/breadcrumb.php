<ul class="breadcrumb">
    <?php foreach ($productCategories as $row) { ?>
        <li>
            <a href="<?php echo categoryUrl($row['CategoryId'], $row['CategoryTitle']); ?>">
                <?php echo $row['CategoryTitle']; ?>
            </a>
        </li>
    <?php } ?>
    <li class="active">
        <?php echo $data['ProductTitle']; ?>
    </li>
</ul>