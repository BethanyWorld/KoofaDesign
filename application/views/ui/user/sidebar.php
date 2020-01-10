
<div class="col-md-3 col-xs-12 rightFloat profile-public-desc-right-div">
    <div class="col-md-12 col-xs-12 profile-desc-ul-div">
        <?php

        function endsWith($haystack, $needle) {
            return substr_compare($haystack, $needle, -strlen($needle)) === 0;
        }

        $url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        ?>
        <ul>
            <li class=<?php if (endsWith($url,'User/Home') !== false) echo "active"; ?>>
                <a href="<?php echo base_url('User/Home'); ?>">مشخصات عمومی</a>
            </li>
            <li class=<?php if (strpos($url,'address') !== false) echo "active"; ?>>
                <a href="<?php echo base_url('User/Home/address'); ?>">دفترچه آدرس</a>
            </li>
            <li class=<?php if (strpos($url,'wishList') !== false) echo "active"; ?>>
                <a href="<?php echo base_url('User/Home/wishList'); ?>">محصولات مورد علاقه</a>
            </li>
            <li class=<?php if (strpos($url,'orders') !== false) echo "active"; ?>>
                <a href="<?php echo base_url('User/Home/orders'); ?>">سفارش ها</a>
            </li>
        </ul>
    </div>
</div>