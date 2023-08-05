<?php
$_URL = base_url();
$_DIR = base_url('assets/ui/v2/');
$CI = &get_instance();
function get_menu_tree1($parent_id){
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
function get_menu_tree($parent_id){
    global $CI;
    $CI->db->select("*");
    $CI->db->from("product_category");
    $CI->db->where("CategoryParentId", $parent_id);
    $CI->db->where("CategoryIsActive", 1);
    $menuArray = $CI->db->get()->result_array();
    $menu = "";
    foreach ($menuArray as $row) {
        $menu .="<li class='menu-image-change' data-bg='".$row['CategorySpecialPoster']."'><a href='".categoryUrl($row['CategoryId'] , $row['CategoryTitle'])."'>".$row['CategoryTitle']."</a>";
        $menu .= "<ul>".get_menu_tree($row['CategoryId'])."</ul>";
        $menu .= "</li>";
    }
    return $menu;
}
function get_root_menu_tree(){
    global $CI;
    global $_DIR;
    $CI->db->select("*");
    $CI->db->from("product_category");
    $CI->db->where("CategoryParentId", 1);
    $CI->db->where("CategoryIsActive", 1);
    $menuArray = $CI->db->get()->result_array();
    $menu = "";
    foreach ($menuArray as $row) {  ?>
        <li>
            <a href="<?php echo categoryUrl($row['CategoryId'] , $row['CategoryTitle']); ?>">
                <span><?php echo $row['CategoryTitle']; ?></span>
                <img width="150px" height="150px" src="<?php echo $row['CategoryImage']; ?>"/>
            </a>
            <div class="mega-menu" style="background-image: url(<?php echo $row['CategoryImage'];?>);">
                <div class="mega-menu-item">
                    <div class="wrapper">
                        <ul>
                            <?php echo get_menu_tree($row['CategoryId']) ?>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
    <?php } }
function get_mobile_root_menu_tree(){
    global $CI;
    global $_DIR;
    $CI->db->select("*");
    $CI->db->from("product_category");
    $CI->db->where("CategoryParentId", 1);
    $CI->db->where("CategoryIsActive", 1);
    $menuArray = $CI->db->get()->result_array();
    $menu = "";
    foreach ($menuArray as $row) { ?>
        <li>
            <a href="<?php echo categoryUrl($row['CategoryId'] , $row['CategoryTitle']); ?>">
               <?php echo $row['CategoryTitle']; ?>
                <img width="150px" height="150px" src="<?php echo $row['CategoryImage']; ?>"/>
            </a>
            <ul>
                <?php echo get_menu_tree($row['CategoryId']) ?>
            </ul>
        </li>
    <?php } }
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php  if (isset($pageTitle))  echo $pageTitle;  else echo "مجموعه هنر کوفا";
        ?>
    </title>
    <link rel="stylesheet" href="<?php echo $_DIR; ?>assets/plugins/bootstrap/v3/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo $_DIR; ?>assets/plugins/bootstrap/v3/css/bootstrap-theme.css"/>
    <link rel="stylesheet" href="<?php echo $_DIR; ?>assets/plugins/fontawesome/css/font-awesome-css.min.css"/>
    <link rel="stylesheet" href="<?php echo $_DIR; ?>assets/plugins/animate/animate.min.css"/>
    <link rel="stylesheet" href="<?php echo $_DIR; ?>assets/plugins/owl/owl.carousel.min.css"/>
    <link rel="stylesheet" href="<?php echo $_DIR; ?>assets/plugins/owl/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="<?php echo $_DIR; ?>assets/plugins/rate/star-rating-svg.css"/>
    <link rel="stylesheet" href="<?php echo $_DIR; ?>assets/css/iziToast.min.css"/>
    <link rel="stylesheet" href="<?php echo $_DIR; ?>assets/css/helper-css.css"/>
    <link rel="stylesheet" href="<?php echo $_DIR; ?>assets/css/custom.css?v=<?php echo md5(rand()) ?>"/>
    <link rel="stylesheet" href="<?php echo $_DIR; ?>assets/css/responsive.css?v=<?php echo md5(rand()) ?>"/>
    <script type="text/javascript" src="<?php echo $_DIR; ?>assets/plugins/jquery/jquery.js"></script>
    <script type="text/javascript" src="<?php echo $_DIR; ?>assets/plugins/bootstrap/v3/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo $_DIR; ?>assets/plugins/owl/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo $_DIR; ?>assets/plugins/rate/jquery.star-rating-svg.js"></script>
    <script type="text/javascript" src="<?php echo $_DIR; ?>assets/js/bootpage.min.js"></script>
    <script type="text/javascript" src="<?php echo $_DIR; ?>assets/js/iziToast.min.js"></script>
    <script type="text/javascript" src="<?php echo $_DIR; ?>assets/js/helper.js?v=<?php echo md5(rand()) ?>"></script>
    <script type="text/javascript" src="<?php echo $_DIR; ?>assets/js/custom.js?v=<?php echo md5(rand()) ?>"></script>
    <script type="text/javascript">
        var base_url = '<?php echo base_url(); ?>';
        function toggleLoader() {}
    </script>
</head>
<body class="body-bg">
<div class="container-fluid">
    <header class="row">
        <div class="top-header">
            <div class="container">
                <div class="col-md-6 col-xs-8 pull-left">
                    <ul>
                        <li>
                            <a href="<?php echo base_url('Cart'); ?>">
                                <?php
                                if ($this->session->userdata('cart')) {
                                    echo '<span class="cart-count">'.count($this->session->userdata('cart')).'</span>';
                                }
                                ?>
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     style="enable-background:new 0 0 36 28;" xml:space="preserve">
<style type="text/css">
    .st0{fill:none;stroke:#F04D26;stroke-width:1.4173;stroke-linecap:round;stroke-miterlimit:10;}
</style>
                                    <g>
                                        <g>
                                            <path class="st0" d="M1.53,1.36H6.4c0.9,0,1.69,0.6,1.93,1.47l3.86,14.05c0.24,0.87,1.03,1.47,1.93,1.47h15.13
			c0.89,0,1.67-0.59,1.92-1.44l3.3-11.41H14.35"/>
                                            <circle class="st0" cx="15.94" cy="23.99" r="2.65"/>
                                            <circle class="st0" cx="27.79" cy="23.99" r="2.65"/>
                                        </g>
                                    </g>
</svg>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('User/Home/wishList'); ?>">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    style="enable-background:new 0 0 36 28;" xml:space="preserve"><style type="text/css">
    .st0{fill:none;stroke:#F04D26;stroke-width:1.4173;stroke-miterlimit:10;}
</style>
                                    <g>
                                        <g>
                                            <path class="st0" d="M26.97,3.05c-3.71-1.2-7.7,0.8-8.97,4.49c-1.27-3.69-5.26-5.69-8.97-4.49c-3.75,1.22-5.8,5.26-4.58,9.03
			C5.62,15.67,16.49,25.3,17.88,25.3c1.39,0,12.5-9.61,13.67-13.22C32.77,8.3,30.72,4.26,26.97,3.05L26.97,3.05z"/>
                                        </g>
                                    </g>
</svg>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('User/Home'); ?>">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                            style="enable-background:new 0 0 36 28;" xml:space="preserve">
<style type="text/css">
    .st0{fill:none;stroke:#F04D26;stroke-width:1.4173;stroke-miterlimit:10;}
</style>
                                    <g>
                                        <path class="st0" d="M8.37,24.64c0-5.32,4.31-9.63,9.63-9.63s9.63,4.31,9.63,9.63"/>
                                        <circle class="st0" cx="18" cy="8.96" r="5.6"/>
                                    </g>
</svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-xs-4 pull-right text-right pr-0 p-x-10">
                    <a href="<?php echo base_url(); ?>">
                        <img class="lg-logo pull-right hidden-sm hidden-xs" src="<?php echo $_DIR; ?>assets/img/svg/logo.png"/>
                        <img class="lg-logo pull-right visible-sm visible-xs" src="<?php echo $_DIR; ?>assets/img/logo-mobile.png"/>
                    </a>
                    <form id="search-form" class="pull-right hidden-sm hidden-xs">
                        <input type="text" id="inputSearch" class="input-search search-product-input"
                               placeholder="محصول، دسته، سازنده و ..."/>
                        <button type="submit" class="pull-left">
                            <img src="<?php echo $_DIR; ?>assets/img/svg/search.svg"/>
                        </button>
                        <style>
                            .search-result {
                                position: absolute;
                                height: auto;
                                background: #fff;
                                z-index: 10000000000;
                                border: 1px solid #fd4a1a;
                                top: 40px;
                                right: 0;
                                font-size: 15px;
                                max-width: 100vw;
                                padding: 10px 10px;
                                width: 500px;
                                direction: rtl;
                                text-align: justify;
                                max-width: 90vw;
                                border-radius: 0;
                            }
                            .search-result li {
                                display: inline-block;
                                float: left;
                                margin: 2px 2px !important;
                                position: relative;
                                padding: 4px 4px !important;
                                padding-bottom: 8px !important;
                                border: 0 !important;
                                /* border-bottom: 1px solid #c3c3c3 !important; */
                                width: 100%;
                                line-height: 28px;
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
                    </form>
                </div>
            </div>
        </div>
        <div class="main-menu white-bg hidden-sm hidden-xs">
            <div class="container pos-relative">
                <ul>
                    <li class="home-menu">
                        <a href="<?php echo base_url(); ?>">
                            <img src="<?php echo $_DIR; ?>assets/img/svg/home.svg"/>
                        </a>
                    </li>
                    <?php get_root_menu_tree(); ?>
                </ul>
            </div>
        </div>
        <div class="main-menu mobile-menu white-bg visible-sm visible-xs">
            <button id="menu-toggle">
                <i class="fa fa-bars"></i>
            </button>
            <div class="container pos-relative">
                <ul class="mobile-menu-ul">
                    <?php get_mobile_root_menu_tree(); ?>
                </ul>
            </div>
        </div>
    </header>