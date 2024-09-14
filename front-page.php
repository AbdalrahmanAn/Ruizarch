<?php get_header(); ?>

<body>

    <!-- wrapper -->
    <div class="mil-wrapper">
        <!-- content -->
        <div id="content">

            <!-- banner -->
            <section class="mil-banner">
                <div class="swiper-container mil-banner-slider mil-scale" data-value-1=".4" data-value-2="1.4">
                    <div class="swiper-wrapper">
                        <!-- Start loop -->
                        <?php $banners = new wp_query(array(
                            'post_type' => 'banner',
                        ));
                        while($banners->have_posts()){
                            $banners->the_post() ?>
                        <div class="swiper-slide">

                            <img src="<?php the_post_thumbnail_url(''); ?>" class="mil-bg-img" alt="image"
                                style="object-position: top" data-swiper-parallax-x="300"
                                data-swiper-parallax-scale="1.3">

                        </div>
                        <!-- End loop -->
                        <?php } wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <div class="mil-overlay"></div>
                <div class="container">
                    <div class="mil-background-grid mil-top-space"></div>
                    <div class="mil-banner-content">
                        <div class="row justify-content-between align-items-end">
                            <div class="col-xl-7">
                                <?php $bannerText = new wp_query(array(
                            'post_type' => 'banner',
                            'posts_per_page' => 1,
                        ));
                        while($bannerText->have_posts()){
                            $bannerText->the_post() ?>
                                <div class="mil-mb-90">
                                    <div class="mil-light-soft mil-mb-60"><?php the_content(); ?></div>
                                    <h1 class="mil-upper mil-light mil-mb-60"><?php the_title(); ?></h1>
                                    <a href="<?php get_field('link_banner') ?>"
                                        class="mil-link mil-light mil-upper"><?php get_field('title_link_banner') ?>
                                        <span class="mil-arrow"><img
                                                src="<?php echo get_theme_file_uri(get_field('icon_link_banner')) ?>"
                                                alt="arrow"></span></a>
                                </div>
                                <?php } wp_reset_postdata(); ?>
                            </div>
                            <div class="col-xl-4">

                                <div class="mil-banner-slider-panel mil-mb-60">
                                    <div class="mil-banner-pagination mil-mb-30"></div>
                                    <div class="mil-nav-buttons mil-light mil-mb-30">
                                        <div class="mil-slider-button mil-banner-prev">Prev</div>
                                        <div class="mil-slider-button mil-banner-next">Next</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner end -->

            <!-- partners -->
            <div class="mil-partners">
                <div class="container mil-p-120-120">
                    <div class="mil-background-grid mil-softened"></div>
                    <div class="swiper-container mil-infinite-show mil-up">
                        <div class="swiper-wrapper">
                            <?php 
                            $partnerPost = new wp_query(array(
                                'post_type' => 'partners',
                                'posts_per_page' => 6
                            ));
                            while($partnerPost->have_posts()){
                                $partnerPost->the_post(); ?>
                            <div class="swiper-slide">
                                <a href="#." class="mil-partner-frame"><img src="<?php the_post_thumbnail_url(''); ?>"
                                        alt="logo"></a>
                            </div>
                            <?php } wp_reset_postdata();
                            ?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- partners end -->

            <!-- about -->
            <section>
                <div class="container mil-p-0-30">
                    <div class="mil-background-grid mil-softened"></div>
                    <div class="row justify-content-between align-items-center flex-sm-row-reverse">
                        <?php if(get_field('about_main_title') or get_field('about_video_link')) {?>
                        <div class="col-lg-5">
                            <div class="mil-mb-90">
                                <?php if(get_field('about_main_title')) {?>
                                <span
                                    class="mil-suptitle mil-upper mil-up mil-mb-30"><?php echo get_field('about_subtitle'); ?></span>
                                <h2 class="mil-upper mil-up mil-mb-30"><?php echo get_field('about_main_title'); ?></h2>
                                <p class="mil-up mil-mb-40"><?php echo get_field('about_content'); ?></p>
                                <?php } ?>
                                <?php if(get_field('about_video_link')) {?>
                                <a href="<?php echo get_field('about_video_link'); ?>"
                                    class="mil-link mil-upper mil-up has-popup-video"><?php echo get_field('about_video_title'); ?><span
                                        class="mil-arrow"><img
                                            src="<?php echo get_theme_file_uri(get_field('about_video_icon')); ?>"
                                            alt="arrow"></span></a>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="col-lg-6">

                            <div class="mil-illustration mil-up mil-mb-90">
                                <div class="mil-image-frame">
                                    <img src="<?php echo get_field('about_image'); ?>" alt="image" class="mil-scale"
                                        data-value-1="1" data-value-2="1.3">
                                </div>
                                <div class="mil-about-counter">
                                    <h1 class="mil-counter mil-right mil-mb-10"
                                        data-number="<?php echo get_field('about_number_image'); ?>">0</h1>
                                    <h5 class="mil-upper mil-right"><?php echo get_field('about_subtitle_image'); ?>
                                    </h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- about end -->

            <!-- ideas -->
            <?php if(get_field('main_title_ideas_section') or get_field('link_ideas_section')) {?>
            <section>
                <div class="container mil-p-0-90">
                    <div class="mil-background-grid mil-softened"></div>
                    <div class="row justify-content-between">
                        <div class="col-lg-6">

                            <div>
                                <span
                                    class="mil-suptitle mil-upper mil-up mil-mb-30"><?php echo get_field('subtitle_ideas_section'); ?></span>
                                <h2 class="mil-upper mil-up mil-mb-40">
                                    <?php echo get_field('main_title_ideas_section'); ?></h2>
                                <?php if(get_field('link_ideas_section')) { ?>
                                <a href="<?php echo get_field('link_ideas_section'); ?>"
                                    class="mil-link mil-upper mil-up"><?php echo get_field('title_link_ideas_section'); ?>
                                    <span class="mil-arrow"><img
                                            src="<?php echo get_theme_file_uri(get_field('icon_link_ideas_section')); ?>"
                                            alt="arrow"></span></a>
                                <?php } ?>
                            </div>

                        </div>
                        <div class="col-lg-5 mil-mt-suptitle-offset">

                            <p class="mil-up mil-mb-60"><?php echo get_field('content_ideas_section'); ?></p>

                            <div class="row">
                                <?php $servicesPosts = new wp_query(array(
                                    'post_type' => 'services',
                                    'posts_per_page' => 3,
                                ));
                                while($servicesPosts->have_posts()){
                                    $servicesPosts->the_post()?>
                                <div class="col-sm-4">

                                    <a href="<?php the_permalink(); ?>" class="mil-icon-box mil-sm-center mil-mb-30">
                                        <div class="mil-icon mil-icon-accent-bg mil-up mil-mb-30">
                                            <?php if(get_field('service_icon')) {?>
                                            <img src="<?php echo get_theme_file_uri(get_field('service_icon')) ?>"
                                                alt="icon">
                                            <?php } ?>
                                        </div>
                                        <h6 class="mil-upper mil-up"><?php the_title(); ?></h6>
                                    </a>

                                </div>
                                <?php } 
                                wp_reset_postdata();
                                ?>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <?php } ?>
            <!-- ideas end -->

            <!-- services -->
            <section class="mil-soft-bg mil-relative">
                <img src="<?php echo get_theme_file_uri('img/other/bg.svg') ?>" class="mil-bg-img" alt="image">
                <div class="container mil-p-120-90">
                    <div class="mil-background-grid mil-softened"></div>

                    <div class="row">
                        <div class="col-12">

                            <div class="mil-center mil-mb-90">
                                <span
                                    class="mil-suptitle mil-upper mil-up mil-mb-30"><?php echo get_field('services_subtitle') ?></span>
                                <h2 class="mil-upper mil-up"><?php echo get_field('services_main_title') ?></h2>
                            </div>

                        </div>
                        <?php $servicePost = new wp_query(array(
                            'post_type' => 'services',
                            'posts_per_page' => 3
                        ));
                        while($servicePost->have_posts()) {
                            $servicePost->the_post(); ?>
                        <div class="col-lg-4">

                            <a href="<?php the_permalink(); ?>" class="mil-service-card mil-up mil-mb-30">
                                <div class="mil-center">
                                    <div class="mil-icon mil-icon-lg mil-mb-30">
                                        <?php if(get_field('service_icon')) { ?>
                                        <img src="<?php echo get_theme_file_uri(get_field('service_icon')) ?>"
                                            alt="icon">
                                        <?php } ?>
                                    </div>
                                    <h4 class="mil-upper mil-mb-20"><?php the_title(); ?></h4>
                                    <div class="mil-divider-sm mil-mb-20"></div>
                                    <p class="mil-service-text"><?php echo wp_trim_words(get_the_content(), 15) ?></p>
                                    <div class="mil-go-buton mil-icon mil-icon-lg mil-icon-accent-bg">
                                        <img src="<?php echo get_theme_file_uri(get_field('service_link_icon')) ?>"
                                            alt="icon">
                                    </div>
                                </div>
                            </a>

                        </div>
                        <?php }; wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </section>
            <!-- services end -->

            <!-- advantages -->
            <section>
                <div class="container mil-p-120-60">
                    <div class="mil-background-grid mil-softened"></div>
                    <?php if(get_field('first_advantage_title') or get_field('second_advantage_title') or get_field('third_advantage_title') or get_field('fourth_advantage_title')) {?>
                    <div class="row">
                        <div class="col-12">
                            <div class="mil-center mil-mb-90">
                                <span
                                    class="mil-suptitle mil-upper mil-up mil-mb-30"><?php echo get_field('subtitle_advantages') ?></span>
                                <h2 class="mil-upper mil-up mil-mb-30"><?php echo get_field('main_title_advantages') ?>
                                </h2>
                                <p class="mil-up"><?php echo get_field('description_advantages') ?></p>
                            </div>
                        </div>

                        <?php if(get_field('first_advantage_title')) {?>
                        <div class="col-md-6 col-lg-3">
                            <div class="mil-advantage mil-icon-box mil-center mil-up mil-mb-60">
                                <h4 class="mil-upper mil-mb-30"><?php echo get_field('first_advantage_title'); ?></h4>
                                <div class="mil-icon mil-icon-border mil-mb-30">
                                    <img src="<?php echo get_theme_file_uri(get_field('first_advantage_icon')); ?>"
                                        alt="icon">
                                </div>
                                <p><?php echo get_field('first_advantage_content'); ?></p>
                            </div>
                        </div>
                        <?php } ?>


                        <?php if(get_field('second_advantage_title')) {?>
                        <div class="col-md-6 col-lg-3">
                            <div class="mil-advantage mil-icon-box mil-center mil-up mil-mb-60">
                                <h4 class="mil-upper mil-mb-30"><?php echo get_field('second_advantage_title'); ?></h4>
                                <div class="mil-icon mil-icon-border mil-mb-30">
                                    <img src="<?php echo get_theme_file_uri(get_field('second_advantage_icon')); ?>"
                                        alt="icon">
                                </div>
                                <p><?php echo get_field('second_advantage_content'); ?></p>
                            </div>
                        </div>
                        <?php } ?>


                        <?php if(get_field('third_advantage_title')) {?>
                        <div class="col-md-6 col-lg-3">
                            <div class="mil-advantage mil-icon-box mil-center mil-up mil-mb-60">
                                <h4 class="mil-upper mil-mb-30"><?php echo get_field('third_advantage_title'); ?></h4>
                                <div class="mil-icon mil-icon-border mil-mb-30">
                                    <img src="<?php echo get_theme_file_uri(get_field('third_advantage_icon')); ?>"
                                        alt="icon">
                                </div>
                                <p><?php echo get_field('third_advantage_content'); ?></p>
                            </div>
                        </div>
                        <?php } ?>


                        <?php if(get_field('fourth_advantage_title')) {?>
                        <div class="col-md-6 col-lg-3">
                            <div class="mil-advantage mil-icon-box mil-center mil-up mil-mb-60">
                                <h4 class="mil-upper mil-mb-30"><?php echo get_field('fourth_advantage_title'); ?></h4>
                                <div class="mil-icon mil-icon-border mil-mb-30">
                                    <img src="<?php echo get_theme_file_uri(get_field('fourth_advantage_icon')); ?>"
                                        alt="icon">
                                </div>
                                <p><?php echo get_field('fourth_advantage_content'); ?></p>
                            </div>
                        </div>
                        <?php } ?>


                    </div>
                    <?php } ?>
                </div>
            </section>
            <!-- advantages end -->

            <!-- portfolio -->
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <?php $projectPosts = new wp_query(array(
                            'post_type' => 'project'
                        ));
                    while($projectPosts->have_posts()){
                        $projectPosts->the_post(); ?>
                        <div class="col-md-6 col-lg-3">

                            <a href="<?php the_permalink(); ?>"
                                class="mil-portfolio-item mil-square-item mil-up mil-mb-30">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="cover">
                                <div class="mil-project-descr">
                                    <h4 class="mil-upper mil-mb-20"><?php the_title(); ?></h4>
                                    <div class="mil-divider-sm mil-mb-20"></div>
                                    <p><?php echo wp_trim_words(get_the_content(), 10) ?>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <?php } wp_reset_postdata();
                    ?>
                    </div>
                </div>
            </section>
            <!-- portfolio end -->

            <!-- how we work -->
            <section>
                <div class="container mil-p-90-60">
                    <div class="mil-background-grid mil-softened"></div>

                    <div class="row">
                        <div class="col-12">

                            <div class="mil-center mil-mb-90">
                                <span
                                    class="mil-suptitle mil-upper mil-up mil-mb-30"><?php echo get_field('subtitle_work'); ?></span>
                                <h2 class="mil-upper mil-up"><?php echo get_field('main_title_work'); ?></h2>
                            </div>

                        </div>
                        <div class="col-lg-4">

                            <div class="mil-hww mil-icon-box mil-up mil-mb-60">
                                <div class="mil-icon mil-icon-border mil-mb-30">
                                    <img src="<?php echo get_theme_file_uri(get_field('work_icon')); ?>" alt="icon">
                                </div>
                                <h4 class="mil-upper mil-mb-20"><?php echo get_field('work_title'); ?></h4>
                                <div class="mil-divider-sm mil-mb-20"></div>
                                <p><?php echo get_field('work_content'); ?></p>
                            </div>

                        </div>
                        <div class="col-lg-4">

                            <div class="mil-hww mil-icon-box mil-up mil-mb-60">
                                <div class="mil-icon mil-icon-border mil-mb-30">
                                    <img src="<?php echo get_theme_file_uri(get_field('second_work_icon')); ?>"
                                        alt="icon">
                                </div>
                                <h4 class="mil-upper mil-mb-20"><?php echo get_field('second_work_title'); ?></h4>
                                <div class="mil-divider-sm mil-mb-20"></div>
                                <p><?php echo get_field('second_work_content'); ?></p>
                            </div>

                        </div>
                        <div class="col-lg-4">

                            <div class="mil-hww mil-icon-box mil-up mil-mb-60">
                                <div class="mil-icon mil-icon-border mil-mb-30">
                                    <img src="<?php echo get_theme_file_uri(get_field('third_work_icon')); ?>"
                                        alt="icon">
                                </div>
                                <h4 class="mil-upper mil-mb-20"><?php echo get_field('third_work_title'); ?></h4>
                                <div class="mil-divider-sm mil-mb-20"></div>
                                <p><?php echo get_field('third_work_content'); ?></p>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- how we work end -->

            <!-- blog -->
            <section>
                <div class="container mil-p-0-60">
                    <div class="mil-background-grid mil-softened"></div>

                    <div class="row">
                        <div class="col-12">

                            <div class="mil-center mil-mb-90">
                                <span
                                    class="mil-suptitle mil-upper mil-up mil-mb-30"><?php echo get_field('isights_subtitle') ?></span>
                                <h2 class="mil-upper mil-up mil-mb-30"><?php echo get_field('insights_main_title') ?>
                                </h2>
                                <a href="<?php echo site_url('blog') ?>" class="mil-link mil-upper mil-up">See All <span
                                        class="mil-arrow"><img
                                            src="<?php echo get_theme_file_uri('/img/icons/1.svg') ?>"
                                            alt="arrow"></span></a>
                            </div>

                        </div>
                        <?php 
                        $blogPosts = new wp_query(array(
                            'post_type' => 'post',
                            'posts_per_page' => 2
                        ));
                        while($blogPosts->have_posts()){
                            $blogPosts->the_post(); ?>
                        <div class="col-lg-6">

                            <a href="<?php the_permalink(); ?>" class="mil-blog-card mil-mb-60">
                                <div class="mil-cover mil-up mil-long">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="cover">
                                    <div class="mil-date"><?php the_time('d.m.Y'); ?></div>
                                </div>
                                <div class="mil-description">
                                    <span class="mil-suptitle mil-upper mil-up mil-mb-30">Urban</span>
                                    <h4 class="mil-upper mil-up mil-mb-30"><?php the_title(); ?></h4>
                                    <p class="mil-up"><?php echo wp_trim_words(get_the_content(), 15) ?></p>
                                </div>
                            </a>

                        </div>
                        <?php } wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </section>
            <!-- blog end -->

            <!-- core -->
            <section class="mil-dark-bg mil-relative mil-o-hidden">
                <img src="img/photo/3.jpg" class="mil-bg-img mil-scale" alt="image" style="object-position: top;"
                    data-value-1="1" data-value-2="1.2">
                <div class="mil-overlay"></div>
                <div class="container mil-p-120-90">
                    <div class="mil-background-grid"></div>
                    <div class="row justify-content-between">
                        <div class="col-lg-5">
                            <?php if(get_field('main_title_help_center') or get_field('content_help_center')) ?>
                            <div class="mil-mb-90">
                                <span
                                    class="mil-suptitle mil-upper mil-light mil-up mil-mb-30"><?php echo get_field('subtitle_help_center'); ?></span>
                                <h2 class="mil-upper mil-light mil-up mil-mb-30">
                                    <?php echo get_field('main_title_help_center'); ?></h2>
                                <p class="mil-light-soft mil-up mil-mb-40">
                                    <?php echo get_field('content_help_center'); ?></p>
                                <a href="<?php echo get_post_type_archive_link('helpcenter') ?>"
                                    class="mil-link mil-light mil-upper mil-up">Read More <span class="mil-arrow"><img
                                            src="<?php echo get_theme_file_uri(get_field('icon_help_center')); ?>"
                                            alt="arrow"></span></a>
                            </div>

                        </div>
                        <div class="col-lg-6 mil-mt-suptitle-offset">
                            <?php 
                            $helpCnter = new wp_query(array(
                                'post_type' => 'helpcenter',
                                'posts_per_page' => 5,
                            ));
                            while($helpCnter->have_posts()){
                                $helpCnter->the_post(); ?>
                            <div class="mil-accordion-group mil-up">
                                <div class="mil-accordion-menu">

                                    <div class="mil-symbol mil-light mil-thin mil-h3">
                                        <div class="mil-plus">+</div>
                                        <div class="mil-minus">-</div>
                                    </div>

                                    <h6 class="mil-upper mil-light"><?php the_title(); ?></h6>

                                </div>
                                <div class="mil-accordion-content">
                                    <p class="mil-light-soft mil-mb-30"><?php the_content(); ?></p>
                                </div>
                            </div>

                            <?php } 
                            wp_reset_postdata(); 
                            ?>
                        </div>
                    </div>
                </div>
            </section>


            <?php get_footer(); ?>