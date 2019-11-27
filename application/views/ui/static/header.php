<?php $_URL = base_url();
$_DIR = base_url('assets/ui/'); ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo $_DIR; ?>images/icon.png">
    <link rel="stylesheet" type="text/css" href="<?php echo $_DIR; ?>css/font-awesome-css.min.css">
    <link rel="stylesheet" href="<?php echo $_DIR; ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $_DIR; ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo $_DIR; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_DIR; ?>css/iziToast.min.css">
    <link rel="stylesheet" href="<?php echo $_DIR; ?>css/common.css">
    <script src="<?php echo $_DIR; ?>js/jquery-2.1.4.min.js"></script>
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
                <div class="col-lg-6 col-md-7 col-xs-12" style="height: 100%;">
                    <div class="row">
                        <div class="shopping-basket">
                            <a href="<?php echo base_url('Cart'); ?>">
                                <button class="shopping">
                                    <div class="col-lg-3 col-md-3 rightFloat">
                                        <span class="fa fa-shopping-basket"></span>
                                    </div>
                                    <span class="shop-text">سبد خرید</span>
                                    <span class="badge">
                                    <?php echo count($this->session->userdata('cart')); ?>
                                </span>
                                </button>
                            </a>
                        </div>
                        <div class="col-lg-7 col-md-8 col-xs-12 shopping-user">
                            <ul>
                                <?php if ($this->session->userdata('UserIsLogged')) { ?>
                                    <li class="col-md-6 text-center rightFloat">
                                        <a href="<?php echo base_url('User/Home'); ?>">
                                            <i class="fa fa-user"></i>
                                            <span class="span-div span-login">
                                                <?php
                                                $userInfo = $this->session->userdata('UserLoginInfo')[0];

                                                echo $userInfo['UserFirstName'] . " " . $userInfo['UserLastName']; ?>
                                            </span>
                                        </a>
                                    </li>
                                <?php } else { ?>
                                    <li class="col-md-6 text-center rightFloat login-div">
                                        <a href="<?php echo base_url('Account/login'); ?>">
                                            <i class="fa fa-user"></i>
                                            <span class="span-div span-login">ورود</span>
                                        </a>
                                    </li>
                                <?php } ?>

                                <li class="col-md-6 text-center rightFloat like-div">
                                    <a href="<?php echo base_url('Account/WishList'); ?>">
                                        <i class="fa fa-heart"></i>
                                        <span class="span-div">علاقه مندی ها</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-xs-12" style="height: 100%;">
                    <div class="col search">
                        <input type="search" placeholder="محصول - دسته - سازنده و ...">
                        <span class="fa fa-search spansearch"></span>
                    </div>
                </div>
            </div>
            <figure id="logo">
                <a href="<?php echo base_url(); ?>">
                    <img
                            style="width: 105px;height: auto;margin: 8px 2px;"
                            src="<?php echo $_DIR; ?>images/top_logo.png" height="85" width="110" alt="" title=""/>
                </a>
            </figure>
        </div>
        <div class="col-md-12 col-xs-12 mobile-div">
            <div class="col-md-12 col-xs-12 pull-right mobile-login">
                <a href="<?php echo base_url('Account/login'); ?>">
                    <i class="fa fa-lock"></i>
                    <span>ورود</span>
                </a>
                <span> | </span>
                <a href="<?php echo base_url('Account/register'); ?>">
                    <i class="fa fa-user"></i>
                    ثبت نام
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
                        <div class="col-xs-2 mobile-bars">
                            <i class="fa fa-bars mobile-bars-toggle"></i>
                        </div>

                        <!-- search toggle-->
                        <div class="col-xs-10 col-xs-offset-1 col search mobile-col-search">
                            <div class="col-md-12 col-xs-10 col-xs-offset-1">
                                <input class="col-sm-10 col-xs-9" type="search"
                                       placeholder="محصول - دسته - سازنده و ...">
                                <span class="fa fa-search spansearch"></span>
                            </div>
                        </div>

                        <!-- menu toggle-->
                        <div class="row mobile-menu">
                            <nav class="mobile-nav">
                                <ul class="mobile-nav-ul">
                                    <li class="mobile-nav-li">
                                        <a class="mobile-nav-a">
                                            صنایع دستی و هنری
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="col-md-12 col-xs-12 additional-login-div">
    <div class="container">
        <div class="row">
            <div class="additional-login-holder">
                <div class="col-md-6 item item-login">
                    <h2 class="additional-login-title">ورود</h2>
                    <form action="<?php echo base_url('Account/doSubmitTypeLogin') ?>" method="post" class="mini-additional-login form-horizontal">
                        <div class="form-group">
                            <label for="username" class="control-label">تلفن همراه :</label>
                            <input class="form-control" placeholder="09121234567" type="text" name="inputPhone" id="inputPhone">
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">گذرواژه :</label>
                            <input class="form-control" placeholder="" type="password" name="inputPassword" id="inputPassword">
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
<!-- mega menu -->
<div class="menubar">
    <nav>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="?movie">زیور آلات</a>
                <div class="sub-nav">
                    <div class="col-md-3 rightFloat padding-0 height100">
                        <ul class="sub-nav-group">
                            <li><a href="">گردنبند</a></li>
                            <li><a href="">النگو</a></li>
                            <li><a href="">دستبند</a></li>
                            <li><a href="">ساعت مچی</a></li>
                            <li><a href="">ساعت دیواری</a></li>
                            <li><a href="">زیور آلات مو</a></li>
                            <li><a href="">زیور آلات </a></li>
                            <li>&#8230;</li>
                        </ul>
                    </div>
                    <div class="col-md-7 text-center rightFloat height100">
                        <p>سلام</p>
                    </div>
                    <div class="col-md-2 mega-menu-images leftFloat height100">
                        <img src="<?php echo $_DIR; ?>images/image-4.jpg" height="100px" width="100%"/>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a href="?movie">خانه و زندگی</a>
                <div class="sub-nav">
                    <div class="col-md-3 rightFloat padding-0 height100">
                        <ul class="sub-nav-group">
                            <li><a href="">گردنبند</a></li>
                            <li><a href="">النگو</a></li>
                            <li><a href="">دستبند</a></li>
                            <li><a href="">ساعت مچی</a></li>
                            <li><a href="">ساعت دیواری</a></li>
                            <li><a href="">زیور آلات مو</a></li>
                            <li><a href="">زیور آلات </a></li>
                            <li>&#8230;</li>
                        </ul>
                    </div>
                    <div class="col-md-7 text-center rightFloat height100">
                        <p>سلام</p>
                    </div>
                    <div class="col-md-2 mega-menu-images leftFloat height100">
                        <img src="<?php echo $_DIR; ?>images/image-3.jpg" height="100px" width="100%"/>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a href="?movie">صنایع دستی محلی</a>
                <div class="sub-nav">
                    <div class="col-md-3 rightFloat padding-0 height100">
                        <ul class="sub-nav-group">
                            <li><a href="">گردنبند</a></li>
                            <li><a href="">النگو</a></li>
                            <li><a href="">دستبند</a></li>
                            <li><a href="">ساعت مچی</a></li>
                            <li><a href="">ساعت دیواری</a></li>
                            <li><a href="">زیور آلات مو</a></li>
                            <li><a href="">زیور آلات </a></li>
                            <li>&#8230;</li>
                        </ul>
                    </div>
                    <div class="col-md-7 text-center rightFloat height100">
                        <p>سلام</p>
                    </div>
                    <div class="col-md-2 mega-menu-images leftFloat height100">
                        <img src="<?php echo $_DIR; ?>images/image-3.jpg" height="100px" width="100%"/>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a href="?movie">جمعه بازار</a>
                <div class="sub-nav">
                    <div class="col-md-3 rightFloat padding-0 height100">
                        <ul class="sub-nav-group">
                            <li><a href="">گردنبند</a></li>
                            <li><a href="">النگو</a></li>
                            <li><a href="">دستبند</a></li>
                            <li><a href="">ساعت مچی</a></li>
                            <li><a href="">ساعت دیواری</a></li>
                            <li><a href="">زیور آلات مو</a></li>
                            <li><a href="">زیور آلات </a></li>
                            <li>&#8230;</li>
                        </ul>
                    </div>
                    <div class="col-md-7 text-center rightFloat height100">
                        <p>سلام</p>
                    </div>
                    <div class="col-md-2 mega-menu-images leftFloat height100">
                        <img src="<?php echo $_DIR; ?>images/image-3.jpg" height="100px" width="100%"/>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a href="?movie">فرهنگی هنری</a>
                <div class="sub-nav">
                    <div class="col-md-3 rightFloat padding-0 height100">
                        <ul class="sub-nav-group">
                            <li><a href="">گردنبند</a></li>
                            <li><a href="">النگو</a></li>
                            <li><a href="">دستبند</a></li>
                            <li><a href="">ساعت مچی</a></li>
                            <li><a href="">ساعت دیواری</a></li>
                            <li><a href="">زیور آلات مو</a></li>
                            <li><a href="">زیور آلات </a></li>
                            <li>&#8230;</li>
                        </ul>
                    </div>
                    <div class="col-md-7 text-center rightFloat height100">
                        <p>سلام</p>
                    </div>
                    <div class="col-md-2 mega-menu-images leftFloat height100">
                        <img src="<?php echo $_DIR; ?>images/image-3.jpg" height="100px" width="100%"/>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a href="?movie">زمین دوستانه</a>
                <div class="sub-nav">
                    <div class="col-md-3 rightFloat padding-0 height100">
                        <ul class="sub-nav-group">
                            <li><a href="">گردنبند</a></li>
                            <li><a href="">النگو</a></li>
                            <li><a href="">دستبند</a></li>
                            <li><a href="">ساعت مچی</a></li>
                            <li><a href="">ساعت دیواری</a></li>
                            <li><a href="">زیور آلات مو</a></li>
                            <li><a href="">زیور آلات </a></li>
                            <li>&#8230;</li>
                        </ul>
                    </div>
                    <div class="col-md-7 text-center rightFloat height100">
                        <p>سلام</p>
                    </div>
                    <div class="col-md-2 mega-menu-images leftFloat height100">
                        <img src="<?php echo $_DIR; ?>images/image-3.jpg" height="100px" width="100%"/>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a href="?movie">پوشاک</a>
                <div class="sub-nav">
                    <div class="col-md-3 rightFloat padding-0 height100">
                        <ul class="sub-nav-group">
                            <li><a href="">گردنبند</a></li>
                            <li><a href="">النگو</a></li>
                            <li><a href="">دستبند</a></li>
                            <li><a href="">ساعت مچی</a></li>
                            <li><a href="">ساعت دیواری</a></li>
                            <li><a href="">زیور آلات مو</a></li>
                            <li><a href="">زیور آلات </a></li>
                            <li>&#8230;</li>
                        </ul>
                    </div>
                    <div class="col-md-7 text-center rightFloat height100">
                        <p>سلام</p>
                    </div>
                    <div class="col-md-2 mega-menu-images leftFloat height100">
                        <img src="<?php echo $_DIR; ?>images/image-3.jpg" height="100px" width="100%"/>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a href="?movie">جشن ها</a>
                <div class="sub-nav">
                    <div class="col-md-3 rightFloat padding-0 height100">
                        <ul class="sub-nav-group">
                            <li><a href="">گردنبند</a></li>
                            <li><a href="">النگو</a></li>
                            <li><a href="">دستبند</a></li>
                            <li><a href="">ساعت مچی</a></li>
                            <li><a href="">ساعت دیواری</a></li>
                            <li><a href="">زیور آلات مو</a></li>
                            <li><a href="">زیور آلات </a></li>
                            <li>&#8230;</li>
                        </ul>
                    </div>
                    <div class="col-md-7 text-center rightFloat height100">
                        <p>سلام</p>
                    </div>
                    <div class="col-md-2 mega-menu-images leftFloat height100">
                        <img src="<?php echo $_DIR; ?>images/image-3.jpg" height="100px" width="100%"/>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a href="?movie">کادو پیچ ها</a>
                <div class="sub-nav">
                    <div class="col-md-3 rightFloat padding-0 height100">
                        <ul class="sub-nav-group">
                            <li><a href="">گردنبند</a></li>
                            <li><a href="">النگو</a></li>
                            <li><a href="">دستبند</a></li>
                            <li><a href="">ساعت مچی</a></li>
                            <li><a href="">ساعت دیواری</a></li>
                            <li><a href="">زیور آلات مو</a></li>
                            <li><a href="">زیور آلات </a></li>
                            <li>&#8230;</li>
                        </ul>
                    </div>
                    <div class="col-md-7 text-center rightFloat height100">
                        <p>سلام</p>
                    </div>
                    <div class="col-md-2 mega-menu-images leftFloat height100">
                        <img src="<?php echo $_DIR; ?>images/image-3.jpg" height="100px" width="100%"/>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
</div>
<!-- end mega menu -->
