<?php get_header();
global $_URL, $_DIR; ?>
    <div class="page-caption">
        جستجو برای
        " <?php echo urldecode_deep($_GET['s']); ?> "
    </div>
    <div class="container container-wrapper">
        <div class="col-md-9 col-xs-12 padding-left-style response-style-for-left-div">
            <div class="col-md-12 col-xs-12 blog-left-panel-main-div">
                <?php include 'loop.inc.php'; ?>
            </div>
        </div>
        <?php include 'sidebar.php'; ?>
    </div>
<?php get_footer(); ?>