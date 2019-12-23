
<div class="col-md-12 col-xs-12 blog-detail-div">
    <?php if(have_posts()){ while (have_posts()){ the_post();
        $title = get_the_title();
        $excerpt = get_the_excerpt();
        $author_id = get_the_author_meta('ID');
        $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'full');
        $thumbnail = _image($url, array(350, 200));
        $permalink = get_permalink(get_the_ID());
        $date = _jDate(get_the_date('Y-m-d' , get_the_ID()));
        ?>
        <div class="col-md-12 col-xs-12 blog-post">
            <div class="col-md-12 col-xs-12 blog-outer">
                <div class="row blog-wrapper">
                    <div class="col-md-6 col-xs-12 pull-right">
                        <div class="blog-post-image">
                            <div class="blog-post-image-inner">
                                <img src="<?= $thumbnail; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="col-md-12 col-xs-12 blog-post-content">
                            <div class="blog-combine">
<!--                                <a href="--><?//= $permalink; ?><!--" target="_blank" class="blog-cat-link">-->
<!--                                    --><?php //echo get_the_category(get_the_ID())[0]->name; ?>
<!--                                </a>-->
                                <h2 style="font-size: 16px;font-weight: 900;text-align: right;">
                                    <a href="<?= $permalink; ?>" target="_blank"><?= $title; ?></a>
                                </h2>
                                <span class="blog-post-meta">
                                            <i class="fa fa-calendar"></i>
                                            <a href="javascript:void(0);"><?= $date; ?> </a>
                                        </span>
                            </div>
                            <p class="blog-post-content-p">
                                <?= $excerpt ?>
                            </p>
                            <div class="text-center blog-more-link-button">
                                <a href="<?= $permalink; ?>" class="btn btn-default">بیشتر</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } } else{ ?>
        <div class="col-xs-12 alert alert-danger text-center">
            موردی یافت نشد
        </div>
    <?php } ?>
</div>