<?php
$_URL = base_url();
$_DIR = base_url('assets/ui/');
$CI = &get_instance();
function get_menu_tree($parent_id){
    global $CI;
    $CI->db->select("*");
    $CI->db->from("product_category");
    $CI->db->where("CategoryParentId", $parent_id);
    $CI->db->where("CategoryIsActive", 1);
    $menuArray = $CI->db->get()->result_array();
    $menu = "";
    foreach ($menuArray as $row) {
        $menu .="<li><a href='".categoryUrl($row['CategoryId'] , $row['CategoryTitle'])."'>".$row['CategoryTitle']."</a>";
        $menu .= "<ul class='sub-menu'>".get_menu_tree($row['CategoryId'])."</ul>";
        $menu .= "</li>";
    }
    return $menu;
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        <?php
        if (isset($pageTitle))
            echo $pageTitle;
        else
            echo "کوفادیزاین";
        ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo $_DIR; ?>images/icon.png">
    <link rel="stylesheet" type="text/css" href="<?php echo $_DIR; ?>css/font-awesome-css.min.css">
    <link rel="stylesheet" href="<?php echo $_DIR; ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $_DIR; ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo $_DIR; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_DIR; ?>css/iziToast.min.css">
    <link rel="stylesheet" href="<?php echo $_DIR; ?>css/common.css">
    <link rel="stylesheet" href="<?php echo $_DIR; ?>css/menu.css">
    <script src="<?php echo $_DIR; ?>js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo $_DIR; ?>js/bootpage.min.js"></script>
    <script src="<?php echo $_DIR; ?>js/iziToast.min.js"></script>
    <script src="<?php echo $_DIR; ?>js/owl.carousel.min.js"></script>
    <script src="<?php echo $_DIR; ?>js/helper.js"></script>
    <script>var base_url = "<?php echo base_url(); ?>";</script>
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
                            <a href="<?php echo base_url('Cart'); ?>">
                                <button class="shopping">
                                    <div class="col-lg-3 col-md-3 rightFloat">
                                        <span class="fa fa-shopping-basket"></span>
                                    </div>
                                    <span class="shop-text">سبد خرید</span>
                                    <span class="badge">
                                    <?php if ($this->session->userdata('cart')) echo count($this->session->userdata('cart')); else echo "0"; ?>
                                </span>
                                </button>
                            </a>
                        </div>
                        <div class="col-lg-7 col-md-8 col-xs-12 shopping-user">
                            <ul>
                                <?php
                                if ($this->session->userdata('UserIsLogged')) { ?>
                                    <li class="col-md-6 text-center rightFloat">
                                        <a class="login-div" href="<?php echo base_url('User/Home'); ?>">
                                            <i class="fa fa-user"></i>
                                            <span class="span-div span-login">
                                                <?php
                                                $userInfo = $this->session->userdata('UserLoginInfo')[0];
                                                echo $userInfo['UserFirstName'] . " " . $userInfo['UserLastName'];
                                                ?>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="col-md-6 text-center rightFloat like-div">
                                        <a href="<?php echo base_url('User/Home/wishList'); ?>">
                                            <i class="fa fa-heart"></i>
                                            <span class="span-div">علاقه مندی ها</span>
                                        </a>
                                    </li>
                                <?php } else { ?>
                                    <li class="col-md-12 text-center rightFloat">
                                        <a class="login-div" href="<?php echo base_url('Account/login'); ?>">
                                            <i class="fa fa-user"></i>
                                            <span class="span-div span-login">ورود</span>
                                        </a>
                                        &nbsp;&nbsp;&nbsp;
                                        <a href="<?php echo base_url('Account/register'); ?>">
                                            <i class="fa fa-lock"></i>
                                            <span class="span-div span-login">ثبت نام</span>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-xs-12">
                    <div class="col search">
                        <input class="search-product-input" type="search" placeholder="محصول - دسته - سازنده و ...">
                        <span class="fa fa-search spansearch"></span>
                    </div>
                    <style>
                        .search-result {
                            position: absolute;
                            height: auto;
                            background: #fff;
                            z-index: 10000000000;
                            border: 1px solid #ccc;
                            top: 75px;
                            right: 140px;
                            font-size: 15px;
                            max-width: 100%;
                            padding: 0;
                            width: 100%;
                        }

                        .search-result .item-result {

                        }

                        .search-result span {
                            font-size: 12px;
                            font-weight: 900;
                        }

                        .search-result .item-result h6 {
                            margin: 0;
                        }

                        .mobile-col-search .search-result {
                            position: absolute;
                            height: auto;
                            background: #fff;
                            z-index: 10000000000;
                            border: 1px solid #ccc;
                            top: 58px;
                            right: 0;
                            font-size: 14px;
                            max-width: 100%;
                            padding: 0;
                            width: 100%;
                        }

                        .mobile-col-search .search-result a {
                            color: blue;
                        }
                    </style>
                    <ul class="list-group search-result"></ul>
                </div>
            </div>
            <figure id="logo">
                <a href="<?php echo base_url(); ?>">
                    <img style="width: 105px;height: auto;margin: 8px 2px;"
                         src="<?php echo $_DIR; ?>images/top_logo.png" height="85" width="110" alt="" title=""/>
                </a>
            </figure>
        </div>
        <div class="col-md-12 col-xs-12 mobile-div">
            <div class="col-md-12 col-xs-12 pull-right mobile-login">
                <a class="pull-right" href="<?php echo base_url('Account/login'); ?>">
                    <i class="fa fa-lock"></i>
                    <span>ورود</span>
                </a>
                <span class="pull-right"> | </span>
                <a class="pull-right" href="<?php echo base_url('Account/register'); ?>">
                    <i class="fa fa-user"></i>
                    ثبت نام
                </a>
                <a href="<?php echo base_url('Cart'); ?>">
                    <i class="fa fa-shopping-basket"></i>
                    سبد خرید
                </a>
            </div>
            <div class="col-md-12 col-xs-12 mobile-header">
                <div class="col-xs-12 col-md-12">
                    <div class="row">
                        <div class="col-xs-2 mobile-search">
                            <i class="fa fa-search search-toggle"></i>
                        </div>
                        <div class="col-xs-8 text-center">
                            <a href="<?php echo base_url(); ?>">
                                <img src="<?php echo $_DIR; ?>images/top_logo.png" height="85" width="110" alt=""
                                     title=""/>
                            </a>
                            <br>
                        </div>
                        <div class="col-xs-2 mobile-bars visible-xs">
                            <i class="fa fa-bars mobile-bars-toggle"></i>
                        </div>

                        <!-- search toggle-->
                        <div class="col-xs-12 col search mobile-col-search">
                            <div class="col-xs-12 col search mobile-col-search">
                                <input class="form-control search-product-input"
                                       type="search"
                                       placeholder="محصول - دسته - سازنده و ...">
                            </div>
                            <ul class="list-group search-result">

                            </ul>
                        </div>
                        <!-- menu toggle-->
                        <div class="row">
                            <nav class="mobile-menu-container">
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>">خانه</a></li>
                                    <?php echo get_menu_tree(1); ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<?php if ($this->session->userdata('UserIsLogged')) { ?>
    <div class="col-md-12 col-xs-12 additional-login-div extra-div-when-login">
        <div class="container">
            <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12 padding-0">
                <div class="col-md-2 col-xs-12 extra-login-ul-li-div">
                    <ul>
                        <li>
                            <a href="<?php echo base_url('User/Home'); ?>">
                                تغییر رمز عبور
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="col-md-12 col-xs-12 extra-login-padding-style">
                        <div class="discount-login-image-div">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="col-md-3 col-xs-12 profile-public-desc-left-text">
                            <a href="<?php echo base_url('User/Home'); ?>">
                                <p>ورود به پروفایل</p>
                            </a>
                        </div>
                        <div class="discount-login-image-div-heart">
                            <i class="fa fa-heart"></i>
                        </div>
                        <div class="col-md-3 col-xs-12 profile-public-desc-left-text-heart">
                            <a href="<?php echo base_url('User/Home/wishList'); ?>">
                                <p>علاقه مندی ها</p>
                            </a>

                        </div>

                        <div class="discount-login-image-div-close">
                            <i class="fa fa-close"></i>
                        </div>
                        <div class="col-md-2 col-xs-12 profile-public-desc-left-text-heart">
                            <a href="<?php echo base_url('User/Home/doLogOut'); ?>">
                                <p>خروج</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 padding-0" style="height: 90px">
                    <div class="col-md-12 col-xs-12 login-extra-div">
                        <p>
                            سلام ,
                            <?php
                            $userInfo = $this->session->userdata('UserLoginInfo')[0];
                            echo $userInfo['UserFirstName'] . " " . $userInfo['UserLastName'];
                            ?>
                        </p>
                        <p>
                            <?php echo $userInfo['UserEmail']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div class="col-md-12 col-xs-12 additional-login-div">
        <div class="container">
            <div class="row">
                <div class="additional-login-holder">
                    <div class="col-md-6 item item-login">
                        <h2 class="additional-login-title">&nbsp;</h2>
                        <form action="<?php echo base_url('Account/doSubmitTypeLogin') ?>" method="post"
                              class="mini-additional-login form-horizontal">
                            <div class="form-group">
                                <label for="username" class="control-label">تلفن همراه :</label>
                                <input class="form-control" placeholder="09121234567" type="text" name="inputPhone"
                                       id="inputPhone">
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label">گذرواژه :</label>
                                <input class="form-control" placeholder="" type="password" name="inputPassword"
                                       id="inputPassword">
                            </div>
                            <div class="action">
                                <button type="submit"
                                        class="button button-additional btn btn-default">
                                <span>
                                    <span>ورود</span>
                                </span>
                                </button>
                            </div>
                            <a class="forget-pass" href="<?php echo base_url('Account/resetPassword'); ?>">
                                گذرواژه تان را فراموش کرده اید ؟
                            </a>
                        </form>
                    </div>
                    <div class="col-md-6 item">
                        <div class="pull-right register-block">
                            <h2 class="register-title">هنوز عضو کوفا نشده اید ؟</h2>
                            <a href="<?php echo base_url('Account/register'); ?>" class="btn btn-default register-btn">
                                <i class="fa fa-user"></i>
                                ثبت نام در کوفا
                            </a>
                        </div>
                        <div class="pull-right register-detail">
                            <ul>
                                <li>
                                    <b href="" class="highlight-li">
                                        10درصد تخفیف اولین خرید
                                    </b>
                                </li>
                                <li>
                                <span>
                                    ساخت لیست علاقمندی ها  /  مشاهده سوابق خرید
                                </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<div class="col-md-12 col-xs-12 extra-cart-main-div">
    <div class="container padding-0">
        <div class="col-md-4 extra-cart-div">
            <ul class="col-md-12 col-xs-12 extra-cart-div-one-item-div">
                <li>
                    <div class="col-md-7 col-xs-12 height100 extra-cart-detail-product-main-div">
                        <div class="col-md-12 col-xs-12 padding-0 extra-cart-product-title">
                            <p>گوشواره آریانا</p>
                        </div>
                        <div class="col-md-12 col-xs-12 padding-0 extra-cart-product-number">
                            <p>تعداد
                                <span>1</span>
                                عدد
                            </p>
                        </div>
                        <div class="col-md-12 col-xs-12 padding-0 extra-cart-product-price">
                            <p>قیمت :
                                <span class="extra-cart-price-number">4800</span>
                                <span class="">تومان</span>
                            </p>
                        </div>
                        <div class="col-md-12 col-xs-12 cart-product-detail-delete">
                            <button class="btn">حذف</button>
                            <button class="btn">ویرایش</button>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12 height100 extra-cart-div-image">
                        <img src="images/image-2.jpg" height="100%" width="100%"/>
                    </div>
                </li>
                <li>
                    <div class="col-md-7 col-xs-12 height100 extra-cart-detail-product-main-div">
                        <div class="col-md-12 col-xs-12 padding-0 extra-cart-product-title">
                            <p>گوشواره آریانا</p>
                        </div>
                        <div class="col-md-12 col-xs-12 padding-0 extra-cart-product-number">
                            <p>تعداد
                                <span>1</span>
                                عدد
                            </p>
                        </div>
                        <div class="col-md-12 col-xs-12 padding-0 extra-cart-product-price">
                            <p>قیمت :
                                <span class="extra-cart-price-number">4800</span>
                                <span class="">تومان</span>
                            </p>
                        </div>
                        <div class="col-md-12 col-xs-12 cart-product-detail-delete">
                            <button class="btn">حذف</button>
                            <button class="btn">ویرایش</button>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12 height100 extra-cart-div-image">
                        <img src="images/image-2.jpg" height="100%" width="100%"/>
                    </div>
                </li>
                <div class="col-md-12 col-xs-12 cart-number-main-div">
                    <div class="col-md-6 col-xs-12 left-text-align">
                        <span class="all-cart-number-div">14,400</span>
                        <span class="all-cart-number-toman-text">تومان</span>
                    </div>
                    <div class="col-md-6 col-xs-12 left-text-align all-cart-number">
                        <p>کل سبد خرید :</p>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12">
                    <button class="btn cart-finalize-order-button">نهایی کردن سفارش</button>
                    <button class="btn cart-show-cart-button">نمایش سبد خرید</button>
                </div>
            </ul>
        </div>
    </div>
</div>
<!-- mega menu -->
<div class="ruby-menu-demo-header hidden-xs">
    <div class="container z-p">
        <div class="ruby-wrapper">
            <ul class="ruby-menu">
                <li><a href="<?php echo base_url(); ?>">خانه</a></li>
                <?php echo get_menu_tree(1); ?>
            </ul>
        </div>
    </div>
</div>
<!-- end mega menu -->
