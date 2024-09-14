<?php get_header(); 
while(have_posts()){
the_post();
}
?>

<section class="mil-banner mil-banner-sm">
    <img src="<?php if(get_field('image_banner')) { echo get_field('image_banner'); }else{ the_post_thumbnail_url(''); } ?>"
        class="mil-bg-img mil-scale" data-value-1=".4" data-value-2="1.4" alt="image" style="object-position: top">
    <div class="mil-overlay"></div>
    <div class="container">
        <div class="mil-background-grid mil-top-space"></div>
        <div class="mil-banner-content">
            <div class="mil-mb-90">
                <?php if(get_field('banner_subtitle')) { ?>
                <span
                    class="mil-suptitle mil-light mil-upper mil-mb-30"><?php echo get_field('banner_subtitle') ?></span>
                <?php } ?>
                <h1 class="mil-light mil-upper mil-mb-30"><?php the_title(); ?></h1>
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

                <div class="mil-publication">
                    <p class="mil-up mil-mb-40"><?php the_content(); ?></p>
                    <br>
                    <?php if(get_field('first_note') or get_field('second_note') or get_field('third_note') or get_field('fourth_note')) {?>
                    <ul class="mil-list mil-dark mil-up mil-mb-40">
                        <?php if(get_field('first_note')) { ?>
                        <li><?php echo get_field('first_note'); ?></li>
                        <?php } ?>
                        <?php if(get_field('second_note')) { ?>
                        <li><?php echo get_field('second_note'); ?></li>
                        <?php } ?>
                        <?php if(get_field('third_note')) { ?>
                        <li><?php echo get_field('third_note'); ?></li>
                        <?php } ?>
                        <?php if(get_field('fourth_note')) { ?>
                        <li><?php echo get_field('fourth_note'); ?></li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                    <p class="mil-up mil-mb-40"><?php echo get_field('image_content') ?></p>
                    <?php if(get_field('internal_image')) { ?>
                    <img src="<?php echo get_field('internal_image'); ?>" alt="photo" style="width: 100%"
                        class="mil-up mil-mb-40">
                    <?php } ?>

                    <p class="mil-mb-40"><?php echo get_field('image_content'); ?></p>
                    <?php if(get_field('quote_content') or get_field('quote_writer')) { ?>
                    <blockquote class="mil-mb-40">
                        <?php if(get_field('quote_icon')) { ?>
                        <div class="mil-quote">
                            <img src="<?php echo get_theme_file_uri(get_field('quote_icon')); ?>" alt="icon">
                        </div>
                        <?php } ?>
                        <div class="mil-quote-text">
                            <p class="mil-mb-30"><?php echo get_field('quote_content'); ?></p>
                            <h6 class="mil-upper"><?php echo get_field('quote_writer'); ?></h6>
                        </div>
                    </blockquote>
                    <?php } ?>

                    <div class="mil-divider-lg mil-mb-40"></div>

                    <div class="row">
                        <div class="col-lg-6">
                            <?php
                                    if(get_field('first_tag') or get_field('second_tag') or get_field('third_tag') or get_field('fourth_tag')){ ?>
                            <div class="row">
                                <div class="col-lg-4">
                                    <h6 class="mil-upper mil-up mil-mb-30"><?php echo get_field('title_tags'); ?></h6>
                                </div>
                                <div class="col-lg-8">
                                    <ul class="mil-list mil-dark mil-up mil-mb-30">
                                        <?php if(get_field('first_tag')) {?>
                                        <li class="mil-text-sm"><a href="#"></a><?php echo get_field('first_tag'); ?>
                                        </li>
                                        <?php } ?>
                                        <?php if(get_field('second_tag')) {?>
                                        <li class="mil-text-sm"><a href="#"><?php echo get_field('second_tag'); ?></a>
                                        </li>
                                        <?php } ?>
                                        <?php if(get_field('third_tag')) {?>
                                        <li class="mil-text-sm"><a href="#"><?php echo get_field('third_tag'); ?></a>
                                        </li>
                                        <?php } ?>
                                        <?php if(get_field('fourth_tag')) {?>
                                        <li class="mil-text-sm"><a href="#"><?php echo get_field('fourth_tag'); ?></a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="col-lg-6">
                            <?php 
                            if(get_field(get_field('first_app_name')) or get_field('second_app_name') or get_field('third_app_name') or get_field('fourth_app_name')){ ?>
                            <div class="row">
                                <div class="col-lg-4">
                                    <h6 class="mil-upper mil-up mil-mb-30"><?php echo get_field('title_share'); ?></h6>
                                </div>
                                <div class="col-lg-8">
                                    <ul class="mil-list mil-dark mil-up mil-mb-30">
                                        <?php if(get_field('first_app_name')) { ?>
                                        <li class="mil-text-sm"><a
                                                href="<?php echo get_field('first_app'); ?>"><?php echo get_field('first_app_name'); ?></a>
                                        </li>
                                        <?php } ?>
                                        <?php if(get_field('second_app_name')) { ?>
                                        <li class="mil-text-sm"><a
                                                href="<?php echo get_field('second_app'); ?>"><?php echo get_field('second_app_name'); ?></a>
                                        </li>
                                        <?php } ?>
                                        <?php if(get_field('third_app_name')) { ?>
                                        <li class="mil-text-sm"><a
                                                href="<?php echo get_field('third_app'); ?>"><?php echo get_field('third_app_name'); ?></a>
                                        </li>
                                        <?php } ?>
                                        <?php if(get_field('fourth_app_name')) { ?>
                                        <li class="mil-text-sm"><a
                                                href="<?php echo get_field('fourth_app'); ?>"><?php echo get_field('fourth_app_name'); ?></a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>


                </div>

            </div>
            <div class="col-lg-5">

                <div class="mil-sidebar-frame">
                    <?php if(get_field('first_media') or get_field('second_media')) {?>
                    <h6 class="mil-upper mil-up mil-mb-30"><?php echo get_field('media_info_blog_post'); ?></h6>
                    <ul class="mil-list mil-dark mil-up mil-mb-30">
                        <?php if(get_field('first_media')) { ?>
                        <li class="mil-text-sm"><?php echo get_field('first_media'); ?></li>
                        <?php } ?>
                        <?php if(get_field('second_media')) { ?>
                        <li class="mil-text-sm"><?php echo get_field('second_media'); ?></li>
                        <?php } ?>
                    </ul>
                    <div class="mil-divider-lg mil-up mil-mb-30"></div>
                    <?php } ?>

                    <div class="mil-sidebar-search mil-up mil-mb-30">
                        <input type="text" placeholder="Search in blog ...">
                        <button><img src="<?php echo get_theme_file_uri('/img/icons/13.svg') ?>" alt="search"></button>
                    </div>

                    <div class="mil-divider-lg mil-up mil-mb-30"></div>

                    <h6 class="mil-upper mil-up mil-mb-30">Recent Posts</h6>
                    <ul class="mil-list mil-list-type-2 mil-dark mil-up mil-mb-30">
                        <?php 
                        while(have_posts()) {
                            the_post(); ?>
                        <li>
                            <span class="mil-text-sm mil-mb-10"><?php the_title(); ?></span>
                            <span
                                class="mil-additional-text mil-text-xs mil-upper mil-mb-15"><?php the_time('d.m.Y'); ?></span>
                        </li>
                        <?php } ?>
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

                    <?php if(get_field('first_applcation_title') or get_field('second_applcation_title') or get_field('third_applcation_title')) {?>
                    <div class="mil-divider-lg mil-up mil-mb-30"></div>
                    <h6 class="mil-upper mil-up mil-mb-30"><?php echo get_field('social_media_blog_post'); ?></h6>
                    <ul class="mil-list mil-dark mil-up">
                        <?php if(get_field('first_applcation_title')) { ?>
                        <li class="mil-text-sm"><?php echo get_field('first_applcation_title'); ?></li>
                        <?php } ?>
                        <?php if(get_field('second_applcation_title')) { ?>
                        <li class="mil-text-sm"><?php echo get_field('second_applcation_title'); ?></li>
                        <?php } ?>
                        <?php if(get_field('third_applcation_title')) { ?>
                        <li class="mil-text-sm"><?php echo get_field('third_applcation_title'); ?></li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- blog end -->

<!-- reply form -->
<section class="mil-soft-bg mil-relative">
    <img src="img/other/bg.svg" class="mil-bg-img" alt="image">
    <div class="container mil-p-120-90">
        <div class="mil-background-grid mil-softened"></div>
        <form>
            <div class="row justify-content-between">
                <div class="col-lg-6">

                    <div class="mil-mb-60">
                        <h3 class="mil-upper mil-up mil-mb-30">Leave a Reply</h3>

                        <div class="mil-input-frame mil-dark-input mil-up mil-mb-30">
                            <label class="mil-upper"><span>Write a comment</span><span
                                    class="mil-required">*</span></label>
                            <textarea cols="30" rows="10"></textarea>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">

                    <div class="row align-items-end mil-mt-suptitle-offset">
                        <div class="col-lg-6">

                            <div class="mil-input-frame mil-dark-input mil-up mil-mb-30">
                                <label class="mil-upper"><span>Full name</span><span
                                        class="mil-required">*</span></label>
                                <input type="text" placeholder="">
                            </div>

                        </div>
                        <div class="col-lg-6">

                            <div class="mil-input-frame mil-dark-input mil-up mil-mb-30">
                                <label class="mil-upper"><span>Email address</span><span
                                        class="mil-required">*</span></label>
                                <input type="text" placeholder="email@mydomain.com">
                            </div>

                        </div>
                        <div class="col-lg-6">

                            <div class="mil-input-frame mil-dark-input mil-up mil-mb-30">
                                <label class="mil-upper"><span>Website</span><span class="mil-required">*</span></label>
                                <input type="text" placeholder="">
                            </div>

                        </div>
                        <div class="col-lg-6">

                            <div class="mil-up mil-mb-30">
                                <button type="submit" class="mil-button mil-fw">Submit Comment</button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
</section>
<!-- reply form end -->

<!-- comments -->
<section>
    <div class="container mil-p-120-90">
        <div class="mil-background-grid mil-softened"></div>
        <div class="row">
            <div class="col-lg-7">

                <h3 class="mil-upper mil-mb-60">Comments - <span class="mil-marker">03</span></h3>

                <ul class="mil-comments">
                    <li>
                        <div class="mil-comment">
                            <div class="mil-comment-head">
                                <div class="mil-user-info">
                                    <img src="img/faces/1.jpg" alt="portrait" class="mil-user-avatar">
                                    <div>
                                        <h6 class="mil-upper mil-mb-5">Ponnappa Priya</h6>
                                        <span class="mil-text-sm mil-dark-soft">September 23, 2023</span>
                                    </div>
                                </div>
                                <a href="#." class="mil-mini-button">Reply</a>
                            </div>
                            <p>We realised we really wanted to catch a glimpse of what went on behind the scenes of the
                                companies we looked up to.</p>
                        </div>
                        <ul class="mil-comments">
                            <li>
                                <div class="mil-comment">
                                    <div class="mil-comment-head">
                                        <div class="mil-user-info">
                                            <img src="img/faces/2.jpg" alt="portrait" class="mil-user-avatar">
                                            <div>
                                                <h6 class="mil-upper mil-mb-5">Tamzyn French</h6>
                                                <span class="mil-text-sm mil-dark-soft">September 23, 2023</span>
                                            </div>
                                        </div>
                                        <a href="#." class="mil-mini-button">Reply</a>
                                    </div>
                                    <p>We realised we really wanted to catch a glimpse of what went on behind the scenes
                                        of the companies we looked up to.</p>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="mil-comment">
                            <div class="mil-comment-head">
                                <div class="mil-user-info">
                                    <img src="img/faces/3.jpg" alt="portrait" class="mil-user-avatar">
                                    <div>
                                        <h6 class="mil-upper mil-mb-5">Oscar Newman</h6>
                                        <span class="mil-text-sm mil-dark-soft">September 23, 2023</span>
                                    </div>
                                </div>
                                <a href="#." class="mil-mini-button">Reply</a>
                            </div>
                            <p>We realised we really wanted to catch a glimpse of what went on behind the scenes of the
                                companies we looked up to.</p>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</section>


<?php
get_footer();
?>