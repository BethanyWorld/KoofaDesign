<?php
get_header();
global $_URL, $_DIR;
wpb_set_post_views(get_the_ID());
$news_comments = get_comments(
    array(
        'status' => 'approve',
        'post_id' => get_the_ID(),
        'orderby' => 'comment_date',
        'order' => 'ASC'
    )
);
?>

<div class="page-caption">
    <?= the_title(); ?>
</div>
<div class="col-xs-12">
    <?php if (isset($_GET['unapproved']) && is_numeric($_GET['unapproved'])) { ?>
        <div class="alert alert-success text-center">
            پیام شما با موفقیت دریافت شد و به محض تایید در سایت منتشر می شود
        </div>
    <?php } ?>
</div>
<div class="container container-wrapper" style="direction: rtl;text-align: justify;">
    <div class="col-md-9 col-xs-12 padding-left-style pull-left main-single-container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-md-12 col-xs-12 blog-detail-page-desc-main-div">
                <div class="col-md-12 col-xs-12 padding-0">
                    <?php $src = get_the_post_thumbnail_url(); ?>
                    <div class="col-md-12 col-xs-12 blog-detail-page-image text-center">
                        <img src="<?= $src; ?>" style="width: 250px;height: auto;">
                    </div>
                </div>
                <div class="col-md-12 col-xs-12 blog-detail-desc-main-div">
                    <?php /*
                                <!--                    <p class="blog-categorized-text text-center">-->
                                <!--                        <a href="--><?//= get_category_link(get_the_category(get_the_ID())[0]->term_id); ?><!--">-->
                                <!--                            --><?//= get_the_category(get_the_ID())[0]->name; ?>
                                <!--                        </a>-->
                                <!--                    </p>-->
                    */ ?>
                    <a href="<?php the_permalink(); ?>" target="_blank">
                        <h1 class="blog-detail-title text-center"><?= the_title(); ?></h1>
                    </a>
                    <div class="row col-xs-12  text-center">
                            <span class="blog-post-meta">
                            <i class="fa fa-calendar"></i>
                            <a href="javascript:void(0);">
                                <?php echo _jDate(get_the_date('Y-m-d', get_the_ID())); ?>
                            </a>
                        </span>
                    </div>
                    <div class="col-xs-12 col-md-12 blog-contents-div">
                        <?php the_content(); ?>
                    </div>
                    <div class="col-xs-12 col-md-12 copy-link">
                        <span>لینک کوتاه:</span>
                        <input class="copy" readonly type="text" value="<?= $_URL . '?p=' . get_the_ID(); ?>"
                               id="myInput">
                        <button class="copy"><i class="fa fa-link"></i></button>
                        <span class="success-copy">لینک صفحه کپی شد</span>
                    </div>
                    <div class="col-md-12 col-xs-12 blog-comment-div z-p">
                        <h2><i class="fa fa-comment"></i>نظرات خود را ارسال کنید</h2>
                        <form method="post" id="commentform" action="<?= $_URL ?>wp-comments-post.php">
                            <div class="row center-block">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-right">
                                    <div class="form-group" align="right">
                                        <label for="fullname">نام و نام خانوداگی:</label>
                                        <span style="color:red">&nbsp;*&nbsp;</span>
                                        <input type="text" class="form-control" id="fullname" name="author">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group" align="right">
                                        <label for="email">ایمیل:</label>
                                        <input type="text" class="form-control" id="email" dir="ltr" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row center-block">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group" align="right">
                                        <label for="message">متن پیام:</label>
                                        <span style="color:red">&nbsp;*&nbsp;</span>
                                        <textarea maxlength="65525"
                                                  class="form-control"
                                                  rows="5" id="message"
                                                  name="comment"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row center-block">
                                <div class="col-xs-12">
                                    <button
                                            style="border: 0;padding: 15px 20px;border-radius: 0;"
                                            type="submit"
                                            class="btn btn-success btn-sm  pull-left">ارسال نظر
                                    </button>
                                </div>
                            </div>
                            <input name="comment_post_ID" value="<?= get_the_ID(); ?>" type="hidden">
                            <input name="comment_parent" value="0" type="hidden">
                            <input name="url" value="" type="hidden">
                        </form>

                        <?php foreach ($news_comments as $news_comment) { ?>
                            <div class="media">
                                <div class="media-body">
                                    <img class="media-object"
                                         src="http://s-hasht.ir/wp-content/uploads/2019/08/user.png">
                                    <p class="media-heading"><?= $news_comment->comment_author ?></p>
                                    <div class="media-content">
                                        <?= nl2br($news_comment->comment_content) ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php endwhile; endif; ?>
    </div>
    <?php include 'sidebar.php'; ?>
</div>
<?php get_footer(); ?>
<script>
    $(document).ready(function () {
        $(".copy").click(function () {
            var copyText = $("#myInput");
            copyText.select();
            document.execCommand("copy");
            $(".success-copy").hide().fadeIn();
        });
        $("table").css('width', '100% !important').addClass('table table-bordered table-hover table-condensed').wrap('<div class="table-responsive"></div>');
    });
</script>
