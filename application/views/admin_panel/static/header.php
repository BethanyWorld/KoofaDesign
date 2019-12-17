<?php $_DIR = base_url('assets/admin/'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <base href="/" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Google Fonts -->
    <title><?php echo $pageTitle; ?></title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo $_DIR; ?>favicon.ico" type="image/x-icon">
    <link href="<?php echo $_DIR; ?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_DIR; ?>plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet">
    <link href="<?php echo $_DIR; ?>plugins/node-waves/waves.css" rel="stylesheet"/>
    <link href="<?php echo $_DIR; ?>plugins/animate-css/animate.css" rel="stylesheet"/>
    <link href="<?php echo $_DIR; ?>plugins/iziToast/css/iziToast.min.css" rel="stylesheet"/>
    <link href="<?php echo $_DIR; ?>plugins/confirm/confirm.css" rel="stylesheet"/>
    <link href="<?php echo $_DIR; ?>plugins/simplePagination/simplePagination.css" rel="stylesheet"/>
    <link href="<?php echo $_DIR; ?>plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="<?php echo $_DIR; ?>css/materialize.css" rel="stylesheet"/>
    <link href="<?php echo $_DIR; ?>css/style.css" rel="stylesheet">
    <link href="<?php echo $_DIR; ?>css/themes/all-themes.css" rel="stylesheet"/>
    <!-- =============================================================================================== -->
    <script src="<?php echo $_DIR; ?>plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo $_DIR; ?>plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo $_DIR; ?>plugins/ckeditor/ckeditor.js"></script>
    <script src="<?php echo $_DIR; ?>plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="<?php echo $_DIR; ?>plugins/node-waves/waves.js"></script>
    <script src="<?php echo $_DIR; ?>plugins/iziToast/js/iziToast.min.js"></script>
    <script src="<?php echo $_DIR; ?>plugins/tags-input/bootstrap-tagsinput.min.js"></script>
    <script src="<?php echo $_DIR; ?>plugins/confirm/confirm.js"></script>
    <script src="<?php echo $_DIR; ?>plugins/simplePagination/simplePagination.js"></script>
    <script src="<?php echo $_DIR; ?>js/admin.js"></script>
    <script src="<?php echo $_DIR; ?>js/pages/index.js"></script>
    <script src="<?php echo $_DIR; ?>js/demo.js"></script>
    <script>
        const base_url = "<?php echo base_url('Admin/Dashboard/') ?>";
    </script>
</head>

<body class="theme-red">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>لطفا منتظر بمانید...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
               data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="javascript:void(0)">
                <?php echo $pageTitle; ?>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Notifications -->
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="material-icons">notifications</i>
                        <span class="label-count">7</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">اعلان ها</li>
                        <li class="body">
                            <ul class="menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-light-green">
                                            <i class="material-icons">person_add</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>12 درخواست جدید</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 14 دقیقه قبل
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-red">
                                            <i class="material-icons">delete_forever</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>محمدرضا اسماعیلی</b> انصراف داد</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 3 ساعت قبل
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-blue-grey">
                                            <i class="material-icons">comment</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>نعیمی به پیام شما پاسخ داد</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 4 ساعت قبل
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="javascript:void(0);">مشاهده تمامی اعلان ها</a>
                        </li>
                    </ul>
                </li>
                <!-- #END# Notifications -->
                <!-- Tasks -->
                <!--                <li class="dropdown">-->
                <!--                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">-->
                <!--                        <i class="material-icons">flag</i>-->
                <!--                        <span class="label-count">9</span>-->
                <!--                    </a>-->
                <!--                    <ul class="dropdown-menu">-->
                <!--                        <li class="header">TASKS</li>-->
                <!--                        <li class="body">-->
                <!--                            <ul class="menu tasks">-->
                <!--                                <li>-->
                <!--                                    <a href="javascript:void(0);">-->
                <!--                                        <h4>-->
                <!--                                            Footer display issue-->
                <!--                                            <small>32%</small>-->
                <!--                                        </h4>-->
                <!--                                        <div class="progress">-->
                <!--                                            <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">-->
                <!--                                            </div>-->
                <!--                                        </div>-->
                <!--                                    </a>-->
                <!--                                </li>-->
                <!--                                <li>-->
                <!--                                    <a href="javascript:void(0);">-->
                <!--                                        <h4>-->
                <!--                                            Make new buttons-->
                <!--                                            <small>45%</small>-->
                <!--                                        </h4>-->
                <!--                                        <div class="progress">-->
                <!--                                            <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">-->
                <!--                                            </div>-->
                <!--                                        </div>-->
                <!--                                    </a>-->
                <!--                                </li>-->
                <!--                                <li>-->
                <!--                                    <a href="javascript:void(0);">-->
                <!--                                        <h4>-->
                <!--                                            Create new dashboard-->
                <!--                                            <small>54%</small>-->
                <!--                                        </h4>-->
                <!--                                        <div class="progress">-->
                <!--                                            <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">-->
                <!--                                            </div>-->
                <!--                                        </div>-->
                <!--                                    </a>-->
                <!--                                </li>-->
                <!--                                <li>-->
                <!--                                    <a href="javascript:void(0);">-->
                <!--                                        <h4>-->
                <!--                                            Solve transition issue-->
                <!--                                            <small>65%</small>-->
                <!--                                        </h4>-->
                <!--                                        <div class="progress">-->
                <!--                                            <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">-->
                <!--                                            </div>-->
                <!--                                        </div>-->
                <!--                                    </a>-->
                <!--                                </li>-->
                <!--                                <li>-->
                <!--                                    <a href="javascript:void(0);">-->
                <!--                                        <h4>-->
                <!--                                            Answer GitHub questions-->
                <!--                                            <small>92%</small>-->
                <!--                                        </h4>-->
                <!--                                        <div class="progress">-->
                <!--                                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">-->
                <!--                                            </div>-->
                <!--                                        </div>-->
                <!--                                    </a>-->
                <!--                                </li>-->
                <!--                            </ul>-->
                <!--                        </li>-->
                <!--                        <li class="footer">-->
                <!--                            <a href="javascript:void(0);">View All Tasks</a>-->
                <!--                        </li>-->
                <!--                    </ul>-->
                <!--                </li>-->
                <!-- #END# Tasks -->
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="<?php echo $_DIR; ?>images/user.png" width="48" height="48" alt="User"/>
            </div>
            <div class="info-container">
                <?php
                $CI =& get_instance();
                $employerInfo = $CI->session->userdata('AdminLoginInfo')[0];
                ?>
                <div class="name" data-toggle="dropdown" aria-haspopup="true"
                     aria-expanded="false"><?php echo $employerInfo['ManagerFullName']; ?></div>
                <div class="email"><?php echo $employerInfo['ManagerEmail']; ?></div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a target="_blank" href="<?php echo base_url(); ?>">
                                <i class="material-icons">web</i>مشاهده سایت
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('Admin/Dashboard/Profile'); ?>">
                                <i class="material-icons">person</i>پروفایل
                            </a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">group</i>دنبال کننده ها</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>درخواست ها</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">money</i>مالی</a></li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="<?php echo base_url('Admin/Account/doLogOut'); ?>">
                                <i class="material-icons">input</i>خروج
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li <?php echo $CI->uri->segment(3) == 'Home' ? 'class="active"' : '' ?> >
                    <a href="<?php echo base_url('Admin/Dashboard/Home'); ?>">
                        <i class="material-icons">home</i>
                        <span>پیشخوان</span>
                    </a>
                </li>



                <li <?php echo $CI->uri->segment(3) == 'Orders' ? 'class="active"' : '' ?> >
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">donut_small</i>
                        <span>خریدها</span>
                    </a>
                    <ul class="ml-menu">
                        <li <?php if(strpos($CI->uri->uri_string , 'Orders/index') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Dashboard/Orders/index'); ?>" class="waves-effect waves-block">فهرست</a>
                        </li>
                    </ul>
                </li>

                <li <?php echo $CI->uri->segment(3) == 'Category' ? 'class="active"' : '' ?> >
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">bookmark</i>
                        <span>دسته بندی محصولات</span>
                    </a>
                    <ul class="ml-menu">
                        <li <?php if(strpos($CI->uri->uri_string , 'Category/index') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Dashboard/Category/index'); ?>" class="waves-effect waves-block">فهرست</a>
                        </li>
                        <li <?php if(strpos($CI->uri->uri_string , 'Category/add') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Dashboard/Category/add'); ?>" class=" waves-effect waves-block">افزودن</a>
                        </li>
                    </ul>
                </li>
                <li class="hidden" <?php echo $CI->uri->segment(3) == 'Brand' ? 'class="active"' : '' ?> >
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">bookmark</i>
                        <span>مدیریت برند ها</span>
                    </a>
                    <ul class="ml-menu">
                        <li <?php if(strpos($CI->uri->uri_string , 'Brand/index') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Dashboard/Brand/index'); ?>" class="waves-effect waves-block">فهرست</a>
                        </li>
                        <li <?php if(strpos($CI->uri->uri_string , 'Brand/add') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Dashboard/Brand/add'); ?>" class=" waves-effect waves-block">افزودن</a>
                        </li>
                    </ul>
                </li>
                <li <?php echo $CI->uri->segment(3) == 'Product' ? 'class="active"' : '' ?> >
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">donut_small</i>
                        <span>محصولات</span>
                    </a>
                    <ul class="ml-menu">
                        <li <?php if(strpos($CI->uri->uri_string , 'Product/index') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Dashboard/Product/index'); ?>" class="waves-effect waves-block">فهرست</a>
                        </li>
                        <li <?php if(strpos($CI->uri->uri_string , 'Product/addNormal') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Dashboard/Product/addNormal'); ?>" class=" waves-effect waves-block">افزودن محصول عادی</a>
                        </li>
                        <li <?php if(strpos($CI->uri->uri_string , 'Product/addNormalUpload') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Dashboard/Product/addNormalUpload'); ?>" class=" waves-effect waves-block">افزودن محصول عادی/آپلود دلخواه</a>
                        </li>
                        <li <?php if(strpos($CI->uri->uri_string , 'Product/addDesignFixSize') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Dashboard/Product/addDesignFixSize'); ?>" class=" waves-effect waves-block">افزودن محصول طراحی با سایز ثابت</a>
                        </li>
                        <li <?php if(strpos($CI->uri->uri_string , 'Product/addDesignFreeSize') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Dashboard/Product/addDesignFreeSize'); ?>" class=" waves-effect waves-block">افزودن محصول طراحی با سایز دلخواه</a>
                        </li>
                        <li <?php if(strpos($CI->uri->uri_string , 'Product/special') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Dashboard/Product/special'); ?>" class="waves-effect waves-block">ویژه ها</a>
                        </li>
                    </ul>
                </li>
                <li <?php echo $CI->uri->segment(3) == 'Material' ? 'class="active"' : '' ?> >
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">donut_small</i>
                        <span>جنس محصولات</span>
                    </a>
                    <ul class="ml-menu">
                        <li <?php if(strpos($CI->uri->uri_string , 'Material/index') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Dashboard/Material/index'); ?>" class="waves-effect waves-block">فهرست</a>
                        </li>
                        <li <?php if(strpos($CI->uri->uri_string , 'Material/add') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Dashboard/Material/add'); ?>" class=" waves-effect waves-block">افزودن</a>
                        </li>
                    </ul>
                </li>
                <li <?php echo $CI->uri->segment(3) == 'Sizes' ? 'class="active"' : '' ?> >
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">donut_small</i>
                        <span>سایز محصولات</span>
                    </a>
                    <ul class="ml-menu">
                        <li <?php if(strpos($CI->uri->uri_string , 'Sizes/index') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Dashboard/Sizes/index'); ?>" class="waves-effect waves-block">فهرست</a>
                        </li>
                        <li <?php if(strpos($CI->uri->uri_string , 'Sizes/add') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Dashboard/Sizes/add'); ?>" class=" waves-effect waves-block">افزودن</a>
                        </li>
                    </ul>
                </li>
                <li <?php echo $CI->uri->segment(3) == 'DiscountCode' ? 'class="active"' : '' ?> >
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">donut_small</i>
                        <span>کد های تخفیف</span>
                    </a>
                    <ul class="ml-menu">
                        <li <?php if(strpos($CI->uri->uri_string , 'DiscountCode/index') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Dashboard/DiscountCode/index'); ?>" class="waves-effect waves-block">فهرست</a>
                        </li>
                        <li <?php if(strpos($CI->uri->uri_string , 'DiscountCode/add') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Dashboard/DiscountCode/add'); ?>" class="waves-effect waves-block">افزودن</a>
                        </li>
                    </ul>
                </li>
                <li <?php echo $CI->uri->segment(3) == 'OrderSendMethod' ? 'class="active"' : '' ?> >
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">donut_small</i>
                        <span>روش های ارسال</span>
                    </a>
                    <ul class="ml-menu">
                        <li <?php if(strpos($CI->uri->uri_string , 'OrderSendMethod/index') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Dashboard/OrderSendMethod/index'); ?>" class="waves-effect waves-block">فهرست</a>
                        </li>
                        <li <?php if(strpos($CI->uri->uri_string , 'OrderSendMethod/add') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Dashboard/OrderSendMethod/add'); ?>" class=" waves-effect waves-block">افزودن</a>
                        </li>
                    </ul>
                </li>
                <li <?php echo $CI->uri->segment(3) == 'Slide' ? 'class="active"' : '' ?> >
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">donut_small</i>
                        <span>اسلاید صفحه اصلی</span>
                    </a>
                    <ul class="ml-menu">
                        <li <?php if(strpos($CI->uri->uri_string , 'Slide/index') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Dashboard/Slide/index'); ?>" class="waves-effect waves-block">فهرست</a>
                        </li>
                        <li <?php if(strpos($CI->uri->uri_string , 'Slide/add') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Dashboard/Slide/add'); ?>" class="waves-effect waves-block">افزودن</a>
                        </li>
                    </ul>
                </li>
                <li <?php echo $CI->uri->segment(3) == 'User' ? 'class="active"' : '' ?> >
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">people</i>
                        <span>کاربران</span>
                    </a>
                    <ul class="ml-menu">
                        <li <?php if(strpos($CI->uri->uri_string , 'User/index') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Dashboard/User/index'); ?>" class="waves-effect waves-block">فهرست</a>
                        </li>
                        <li <?php if(strpos($CI->uri->uri_string , 'User/add') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Dashboard/User/add'); ?>" class=" waves-effect waves-block">افزودن</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>