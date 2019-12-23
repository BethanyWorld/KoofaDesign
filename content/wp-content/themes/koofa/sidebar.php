<div class="col-md-3 col-xs-12 padding-right-style pull-right blog-right-panel-main-div">
    <div class="col-md-12 col-xs-12 blog-sidebar-col">
        <div class="blog-widget">
            <div class="blog-widget-search blog-widget">
                <form role="search" class="search-form" action="<?php echo $_URL; ?>">
                    <label>
                        <span class="blog-text-search">جستجو</span>
                        <input type="search" class="blog-search-field" name="s" id="s" placeholder="جستجو ...">
                    </label>
                    <input type="submit" class="blog-search-submit" value="جستجو">
                </form>
            </div>
            <div class="blog-sidebar-box">
                <h2 class="blog-widget-title"> آخرین پست ها </h2>
                <div class="blog-display-style">
                    <?php
                    $args = array('posts_per_page' => 5, 'orderby' => 'date', 'order' => 'DESC', 'post_status' => 'publish');
                    $posts = get_posts($args);
                    foreach ($posts as $post) {
                        $title = $post->post_title;
                        $permalink = get_permalink($post->ID);
                        ?>
                        <div class="blog-popular-div">
                            <div class="blog-popular-div-body">
                                <h4 class="blog-popular-title">
                                    <a href="<?= $permalink; ?>">
                                        <?= $title; ?>
                                    </a>
                                </h4>
                                <span class="popular-date-div">
                                    <?= _jDate($post->date); ?>
                                </span>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="blog-sidebar-box">
                <h2 class="blog-widget-title">
                    پست های محبوب
                </h2>
                <div class="blog-display-style">
                    <?php
                    $popularpost = new WP_Query(array(
                            'posts_per_page' => 4,
                            'meta_key' => 'wpb_post_views_count',
                            'orderby' => 'meta_value_num',
                            'order' => 'DESC')
                    );
                    while ($popularpost->have_posts()) : $popularpost->the_post(); ?>
                        <div class="blog-popular-div">
                            <div class="blog-popular-div-body">
                                <h4 class="blog-popular-title">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h4>
                                <span class="popular-date-div">
                                    <?= _jDate(get_the_date()); ?>
                                </span>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="blog-sidebar-box blog-recent-post">
                <h2 class="blog-widget-title">
                    سایر اخبار
                </h2>
                <div class="blog-display-style">
                    <?php
                    $args = array(
                        'posts_per_page' => 5,
                        'order' => 'DESC',
                        'orderby' => 'rand',
                        'post_status' => 'publish');
                    $posts = get_posts($args);
                    foreach ($posts as $post) {
                        $title = $post->post_title;
                        $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full');
                        $thumbnail = _image($url, array(0, 150));
                        $permalink = get_permalink($post->ID);
                        $date = _jDate($post->post_date);
                        ?>
                        <div class="blog-popular-div">
                            <div class="blog-popular-div-left">
                                <a href="<?= $permalink; ?>">
                                    <img src="<?= $thumbnail; ?>"/>
                                </a>
                            </div>
                            <div class="blog-popular-div-body">
                                <h4 class="blog-popular-title">
                                    <a href="<?= $permalink; ?>"> <?= $title; ?></a>
                                </h4>
                                <span class="popular-date-div">
                                            <?= $date; ?>
                                        </span>
                                <?php /*wpb_get_post_views(get_the_ID());*/ ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="blog-sidebar-box blog-recent-post">
                <h2 class="blog-widget-title">
                    هشتگ ها
                </h2>
                <div class="blog-display-style">
                    <style>
                        ul.tags {
                            float: right;
                        }

                        ul.tags li {
                            float: right !important;
                            display: inline-block !important;
                            margin: 5px !important;
                            text-transform: uppercase !important;
                            border: 0;
                            padding: 0;
                        }

                        ul.tags a {
                            color: #7CA1CC;
                            border: 1px dashed #0545a4;
                            padding: 5px;
                            float: right;
                            font-size: 14px;
                        }
                    </style>
                    <ul class="tags">
                        <?php
                        $tags = get_tags();
                        shuffle($tags);
                        $index = 0;
                        foreach ($tags as $tag) {
                            $index += 1; ?>
                            <li>
                                <a href="<?php echo get_tag_link($tag->term_id); ?>">
                                    <?php echo $tag->name; ?>
                                </a>
                            </li>
                            <?php if ($index > 10) break;
                        } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
