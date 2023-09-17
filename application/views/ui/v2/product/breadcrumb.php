<style>
    /*breadcrumb*/
    .breadcrumb-container{
        direction: rtl;
        background: rgba(0,0,0,0);
    }
    .breadcrumb-container .breadcrumb{
        margin: 15px 0;
        padding: 0;
        background: rgba(0,0,0,0);
    }
    .breadcrumb-container .breadcrumb li{
        color: #b5b5b5;
        font-size: 10px;
    }
    .breadcrumb-container .breadcrumb li a{
        color: #b5b5b5;
    }
    .breadcrumb-container .breadcrumb li.active{
    }
    .breadcrumb>li+li:before {
        padding: 0 0px;
    }
    /*End breadCrumb*/
</style>
<div class="breadcrumb-container">
    <div class="container">
        <ol class="breadcrumb">
            <?php unset($productCategories[0]); foreach ($productCategories as $row) { ?>
                <li>
                    <a href="<?php echo categoryUrl($row['CategoryId'], $row['CategoryTitle']); ?>">
                        <?php echo $row['CategoryTitle']; ?>
                    </a>
                </li>
            <?php } ?>
            <li class="active">
                <?php echo $data['ProductTitle']; ?>
            </li>
        </ol>
    </div>
</div>