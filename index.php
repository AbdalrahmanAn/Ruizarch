<?php get_header(); ?>

<div id="content">

    <!-- banner -->
    <section class="mil-banner mil-banner-sm">
        <img src="<?php the_post_thumbnail_url(); ?>" class="mil-bg-img mil-scale" data-value-1=".4" data-value-2="1.4"
            alt="image" style="object-position: top">
        <div class="mil-overlay"></div>
        <div class="container">
            <div class="mil-background-grid mil-top-space"></div>
            <div class="mil-banner-content mil-center">
                <div class="mil-mb-90">
                    <h1 class="mil-light mil-upper mil-mb-30">Insights</h1>
                    <ul class="mil-breadcrumbs mil-center">
                        <li><a href="<?php echo site_url(); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->

    <!-- blog -->
    <section>
        <div class="container mil-p-120-60">
            <div class="mil-background-grid mil-softened"></div>
            <div class="row justify-content-between">
                <div class="col-lg-7">
                    <?php
                    $onePost = new wp_query('type=post&posts_per_page=1'); ?>
                    <?php 
                    if($onePost->have_posts()) 
                        while($onePost->have_posts()){
                            $onePost->the_post();
                        ?>

                    <a href="<?php the_permalink(); ?>" class="mil-blog-card mil-lg-card mil-mb-60">
                        <div class="mil-cover mil-long mil-up">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="cover">
                            <div class="mil-date"><?php the_time('d.m.Y'); ?></div>
                        </div>
                        <div class="mil-description">
                            <div class="mil-left-side">
                                <span class="mil-suptitle mil-upper mil-up mil-mb-30">Perspectives, Research</span>
                                <h4 class="mil-upper mil-up mil-mb-30"><?php  the_title(); ?></h4>
                            </div>
                            <div class="mil-right-side mil-mt-suptitle-offset">
                                <p class="mil-up mil-mb-30"><?php echo wp_trim_words(get_the_content(), 20) ?></p>
                                <span class="mil-link mil-upper mil-up">Read <span class="mil-arrow"><img
                                            src="<?php echo get_theme_file_uri('/img/icons/1.svg') ?>"
                                            alt="arrow"></span></span>
                            </div>
                        </div>
                    </a>

                    <?php }
                    
                    wp_reset_postdata();
                    ?>

                    <!-- filter -->
                    <div class="mil-filter mil-up mil-mb-90">
                        <div class="mil-filter-links">
                            <a href="#." class="mil-current">All</a>
                        </div>
                    </div>
                    <!-- filter end -->

                    <?php 
                    $blogPostsIn = new wp_query(array(
                        'posts_per_page' => 4,
                    ));
                    while($blogPostsIn->have_posts()) {
                        $blogPostsIn->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="mil-blog-card mil-mb-60">
                        <div class="mil-cover mil-square mil-up">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="cover">
                            <div class="mil-date"><?php the_time('d.m.Y'); ?></div>
                        </div>
                        <div class="mil-description">
                            <span class="mil-suptitle mil-upper mil-up mil-mb-30">Perspectives</span>
                            <h4 class="mil-upper mil-up mil-mb-30"><?php the_title(); ?></h4>
                            <p class="mil-up mil-mb-30"><?php echo wp_trim_words(get_the_content(), 20) ?>.</p>
                            <span class="mil-link mil-upper mil-up">Read <span class="mil-arrow"><img
                                        src="<?php echo get_theme_file_uri('/img/icons/1.svg') ?>"
                                        alt="arrow"></span></span>
                        </div>
                    </a>
                    <?php }
                    wp_reset_postdata();
                    ?>

                </div>
                <div class="col-lg-5">

                    <div class="mil-sidebar-frame">
                        <div class="mil-sidebar-search mil-up mil-mb-30">
                            <input type="text" placeholder="Search in blog ...">
                            <button><img src="img/icons/13.svg" alt="search"></button>
                        </div>

                        <div class="mil-divider-lg mil-up mil-mb-30"></div>

                        <h6 class="mil-upper mil-up mil-mb-30">Recent Posts</h6>
                        <ul class="mil-list mil-list-type-2 mil-dark mil-up mil-mb-30">
                            <?php 
                        while($blogPostsIn->have_posts()) {
                            $blogPostsIn->the_post(); ?>
                            <li>
                                <span class="mil-text-sm mil-mb-10"><?php the_title(); ?></span>
                                <span
                                    class="mil-additional-text mil-text-xs mil-upper mil-mb-15"><?php the_time('d.m.Y'); ?></span>
                            </li>
                            <?php }
                            wp_reset_postdata();
                            ?>
                        </ul>

                        <div class="mil-divider-lg mil-up mil-mb-30"></div>

                        <h6 class="mil-upper mil-up mil-mb-30">Archives</h6>
                        <?php 
                            $args = array(
                                'post_type' => 'post',
                                'type' => 'daily',
                                'format' => 'html',
                            );
                            ?>
                        <ul class="mil-list mil-dark mil-up mil-mb-30">
                            <li class="mil-text-sm"><?php wp_get_archives($args); ?></li>
                        </ul>

                        <div class="mil-divider-lg mil-up mil-mb-30"></div>

                        <h6 class="mil-upper mil-up mil-mb-30">Tags</h6>

                        <?php $post_tags = get_the_tags();?>
                        <ul class="mil-list mil-dark mil-up mil-mb-30">
                            <?php if($post_tags) {
                        foreach($post_tags as $tag) {?>
                            <li class="mil-text-sm"><?php echo $tag->name . ', ' ; ?></li>
                            <?php
                    }
                    } ?>
                        </ul>

                        <div class="mil-divider-lg mil-up mil-mb-30"></div>

                        <h6 class="mil-upper mil-up mil-mb-30">Authors</h6>

                        <?php 
                    $args = array(
                        'orderby'       => 'name',
                        'order'         => 'ASC',
                        'number'        => '',
                        'optioncount'   => false,
                        'exclude_admin' => true,
                        'show_fullname' => false,
                        'hide_empty'    => true,
                        'feed'          => '',
                        'feed_image'    => '',
                        'feed_type'     => '',
                        'echo'          => true,
                        'style'         => 'list',
                        'html'          => true,
                        'exclude'       => '',
                        'include'       => '',
                    );
                    ?>
                        <ul class="mil-list mil-dark mil-mb-30">
                            <li class="mil-text-sm mil-up mil-mb-10"><img src="" alt="author" class="mil-pub-author">
                                <?php wp_list_authors($args); ?></li>
                        </ul>

                        <div class="mil-divider-lg mil-up mil-mb-30"></div>

                        <h6 class="mil-upper mil-up mil-mb-30">Social Media</h6>

                        <ul class="mil-list mil-dark mil-up">
                            <li class="mil-text-sm">Facebook</li>
                            <li class="mil-text-sm">Twitter</li>
                            <li class="mil-text-sm">LinkendIn</li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- blog end -->

    <!-- pagination -->
    <div class="container mil-p-0-120">
        <div class="mil-background-grid mil-softened"></div>
        <div class="mil-pagination mil-up">
            <div class="mil-nav-buttons">
                <div class="mil-slider-button mil-banner-prev">Prev</div>
                <div class="mil-slider-button mil-banner-next">Next</div>
            </div>
            <ul class="mil-page-numbers">
                <li class="mil-active"><a href="#.">01</a></li>
                <li><a href="#.">02</a></li>
                <li><a href="#.">...</a></li>
                <li><a href="#.">06</a></li>
            </ul>
        </div>
    </div>
</div>

<?php get_footer(); ?>