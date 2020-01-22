<?php global $_URL, $_DIR, $Main_URL; ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        <?php
        if (is_category()) {
            echo single_cat_title();
        } elseif (is_tag()) {
            echo single_tag_title();
        } elseif (is_archive()) {
            wp_title('');
        } elseif (is_search()) {
            echo ' جستجو برای ' . esc_html($s) . ' | ' . bloginfo('name');
        } elseif (is_home() || is_front_page()) {
            bloginfo('name');
        } elseif (is_404()) {
            echo 'صفحه مورد نظر پیدا نشد | ' . bloginfo('name');
        } else {
            echo wp_title('');
        } ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo $_DIR; ?>assets/images/icon.png">

    <link rel='stylesheet' id='campaign_options-css' href='<?= $_DIR; ?>content/css/options.css?ver=1.1'/>
    <link rel='stylesheet' id='campaign_style-css' href='<?= $_DIR; ?>content/css/theme.css?ver=1.1'/>
    <link rel='stylesheet' id='slick-css' href='<?= $_DIR; ?>content/css/blog.css?ver=1.0'/>


    <link rel="stylesheet" type="text/css" href="<?php echo $_DIR; ?>assets/css/font-awesome-css.min.css">
    <link rel="stylesheet" href="<?php echo $_DIR; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_DIR; ?>assets/css/common.css">
    <link rel="stylesheet" href="<?php echo $_DIR; ?>assets/css/menu.css">
    <script src="<?php echo $_DIR; ?>assets/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo $_DIR; ?>assets/js/helper.js"></script>
    <?php wp_head(); ?>
</head>
<body>
<div class="preloader">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<header>
    <div class="row">
        <div class="container header-container">
            <div class="row pc-div">
                <div class="col-md-7 col-xs-12">
                    <div class="row">
                        <div class="shopping-basket">
                            <a href="<?php echo $Main_URL.'Cart'; ?>">
                                <button class="shopping">
                                    <div class="col-lg-3 col-md-3 rightFloat">
                                        <span class="fa fa-shopping-basket"></span>
                                    </div>
                                    <span class="shop-text">سبد خرید</span>
                                </button>
                            </a>
                        </div>
                        <div class="col-lg-7 col-md-8 col-xs-12 shopping-user">
                            <ul>
                                <li class="col-md-12 text-center rightFloat">
                                    <a class="login-div" href="<?php echo $Main_URL.'Account/login'; ?>">
                                        <i class="fa fa-user"></i>
                                        <span class="span-div span-login">ورود</span>
                                    </a>
                                    &nbsp;&nbsp;&nbsp;
                                    <a href="<?php echo $Main_URL.'Account/register'; ?>">
                                        <i class="fa fa-lock"></i>
                                        <span class="span-div span-login">ثبت نام</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="col search">
                        <input type="search" placeholder="محصول - دسته - سازنده و ...">
                        <span class="fa fa-search spansearch"></span>
                    </div>
                </div>
            </div>
            <figure id="logo">
                <a href="<?php echo $Main_URL; ?>">
                    <img style="width: 105px;height: auto;margin: 8px 2px;"
                         src="<?php echo $_DIR; ?>assets/images/top_logo.png" height="85" width="110" alt="" title=""/>
                </a>
            </figure>
        </div>
        <div class="col-md-12 col-xs-12 mobile-div">
            <div class="col-md-12 col-xs-12 pull-right mobile-login">
                <a class="pull-right" href="<?php echo $Main_URL.'Account/login'; ?>">
                    <i class="fa fa-lock"></i>
                    <span>ورود</span>
                </a>
                <span class="pull-right"> | </span>
                <a class="pull-right" href="<?php echo $Main_URL.'Account/register'; ?>">
                    <i class="fa fa-user"></i>
                    ثبت نام
                </a>
                <a href="<?php echo $Main_URL.'Cart'; ?>">
                    <i class="fa fa-shopping-basket"></i>
                    سبد خرید
                </a>
            </div>
            <div class="col-md-12 col-xs-12 mobile-header">
                <div class="col-xs-12 col-md-12">
                    <div class="row">
                        <div class="col-xs-10 text-left">
                            <a href="<?php echo $Main_URL; ?>">
                                <img src="<?php echo $_DIR; ?>assets/images/top_logo.png" height="85" width="110" alt=""
                                     title=""/>
                            </a>
                            <br>
                        </div>
                        <div class="col-xs-2 mobile-bars visible-xs">
                            <i class="fa fa-bars mobile-bars-toggle"></i>
                        </div>
                        <!-- menu toggle-->
                        <div class="row">
                            <nav class="mobile-menu-container">
                                <?php
                                $args = array(
                                    'theme_location' => 'topTreeMenu'
                                );
                                wp_nav_menu($args);
                                ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- mega menu -->
<div class="ruby-menu-demo-header hidden-xs">
    <div class="container z-p">
        <div class="ruby-wrapper">
                <?php
                $args = array(
                    'theme_location' => 'topTreeMenu'
                );
                wp_nav_menu($args);
                ?>
        </div>
    </div>
</div>
<!-- end mega menu -->
