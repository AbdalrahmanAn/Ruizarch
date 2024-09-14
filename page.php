<?php get_header(); ?>
<div id="content">
    <section class="mil-banner mil-banner-sm">
        <img src="<?php the_post_thumbnail_url(); ?>" class="mil-bg-img mil-scale" data-value-1=".4" data-value-2="1.4"
            alt="image" style="object-position: top">
        <div class="mil-overlay"></div>
        <div class="container">
            <div class="mil-background-grid mil-top-space"></div>
            <div class="mil-banner-content mil-center">
                <div class="mil-mb-90">
                    <h1 class="mil-light mil-upper mil-mb-30"><?php the_title(); ?></h1>
                    <ul class="mil-breadcrumbs mil-center">
                        <li><a href="<?php echo site_url(); ?>">Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->

    <!-- services -->
    <section>
        <div class="container mil-p-120-60">
            <div class="mil-background-grid mil-softened"></div>
            <div class="row">
                <div class="col-12">
                    <?php if(get_field('main_title_services_section')) { ?>
                    <div class="mil-mb-90">
                        <h2 class="mil-upper mil-up mil-mb-30"><?php echo get_field('main_title_services_section'); ?>
                        </h2>
                        <p class="mil-up"><?php echo get_field('subtitle_services_section'); ?></p>
                    </div>
                    <?php } ?>
                </div>
                <?php $servicesPosts = new wp_query(array(
                    'post_type' => 'services',
                    'posts_per_page' => 3
                ));
                while($servicesPosts->have_posts()){
                    $servicesPosts->the_post(); ?>
                <div class="col-lg-4">

                    <div class="mil-up mil-mb-60">
                        <h4 class="mil-upper mil-mb-30"><?php the_title(); ?></h4>
                        <p class="mil-mb-30"><?php echo wp_trim_words(get_the_content(), 15); ?></p>
                        <a href="<?php the_permalink(); ?>" class="mil-link mil-upper">Know More <span
                                class="mil-arrow"><img
                                    src="<?php echo get_theme_file_uri(get_field('service_link_icon'));?>"
                                    alt="arrow"></span></a>
                    </div>

                </div>
                <?php } 
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
    <!-- services end -->

    <!-- contact info -->
    <section>
        <div class="container mil-p-0-120">
            <div class="mil-background-grid mil-softened"></div>
            <div class="mil-contact-frame mil-up">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-4 mil-mb-30">
                        <p class="mil-dark mil-up mil-mb-10"><?php echo get_field('email_main_title'); ?></p>
                        <h4 class="mil-thin mil-up"><?php echo get_field('email_adress'); ?></h4>
                    </div>
                    <div class="col-lg-4 mil-mb-30">
                        <p class="mil-dark mil-up mil-mb-10"><?php echo get_field('consultation_title'); ?></p>
                        <h4 class="mil-thin mil-up"><?php echo get_field('phone_number_consultation'); ?></h4>
                    </div>
                    <div class="col-lg-3 mil-mb-30">
                        <a href="<?php echo site_url('contact-us    ') ?>"
                            class="mil-button mil-up mil-fw"><?php echo get_field('link_contact_title'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact info end -->

    <!-- portfolio -->
    <section>
        <div class="container mil-p-0-30">
            <div class="mil-background-grid mil-softened"></div>
            <div class="row justify-content-between align-items-center flex-sm-row-reverse">
                <div class="col-lg-5">

                    <div class="mil-mb-90">
                        <span
                            class="mil-suptitle mil-upper mil-up mil-mb-30"><?php echo get_field('subtitle_projects_section'); ?></span>
                        <h2 class="mil-upper mil-up mil-mb-30"><?php echo get_field('main_title_projects_section'); ?>
                        </h2>
                        <p class="mil-up mil-mb-40"><?php echo get_field('description_projects_section'); ?></p>
                        <div class="mil-up"><a href="<?php echo get_post_type_archive_link('project') ?>"
                                class="mil-link mil-upper"><?php echo get_field('link_title_project_section'); ?><span
                                    class="mil-arrow"><img
                                        src="<?php echo get_theme_file_uri(get_field('link_icon_project_section')); ?>"
                                        alt="arrow"></span></a></div>
                    </div>

                </div>
                <div class="col-lg-6">

                    <div class="mil-illustration-slider-frame mil-up mil-mb-90">
                        <div class="swiper-container mil-illustration-slider">
                            <div class="swiper-wrapper">
                                <?php 
                            $projectImages = new wp_query(array(
                                'post_type' => 'project',
                                'posts_per_page' => 3
                            ));
                            while($projectImages->have_posts()){
                                $projectImages->the_post(); ?>
                                <div class="swiper-slide">

                                    <div class="mil-illustration" data-swiper-parallax-x="50"
                                        data-swiper-parallax-scale="1.3">
                                        <div class="mil-image-frame">
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="image">
                                        </div>
                                    </div>

                                </div>
                                <?php } 
                                wp_reset_postdata()
                            ?>

                            </div>
                        </div>
                        <div class="mil-illustration-slider-nav mil-up">
                            <div class="mil-nav-buttons">
                                <div class="mil-slider-button mil-illustration-prev">Prev</div>
                                <div class="mil-slider-button mil-illustration-next">Next</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- portfolio end -->

    <!-- process -->
    <?php if(get_field('main_title_process_section')) {?>
    <section class="mil-relative">
        <div class="container mil-p-0-60">
            <div class="mil-background-grid mil-softened"></div>
            <div class="row align-items-end">
                <div class="col-lg-6">

                    <div class="mil-mb-90">
                        <span
                            class="mil-suptitle mil-upper mil-up mil-mb-30"><?php echo get_field('subtitle_process_section'); ?></span>
                        <h2 class="mil-upper mil-up"><?php echo get_field('main_title_process_section'); ?></h2>
                    </div>

                </div>
                <div class="col-lg-6">

                    <div class="mil-adaptive-right mil-up mil-mb-90">
                        <div class="mil-nav-buttons">
                            <div class="mil-slider-button mil-process-prev">Prev</div>
                            <div class="mil-slider-button mil-process-next">Next</div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="swiper-container mil-process-slider">
                <div class="swiper-wrapper">
                    <?php $ourProcess = new wp_query(array(
                        'post_type' => 'ourprocess',
                        'posts_per_page' => -1
                    )); 
                    while($ourProcess->have_posts()){
                        $ourProcess->the_post();?>
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="col-lg-10">

                                <div class="mil-process-box mil-icon-box mil-up mil-mb-60"
                                    data-swiper-parallax-duration="400" data-swiper-parallax="-900"
                                    data-swiper-parallax-scale=".8" data-swiper-parallax-opacity="0">
                                    <div class="mil-icon mil-icon-border mil-mb-30">
                                        <img src="<?php echo get_theme_file_uri( get_field('process_icon')); ?>"
                                            alt="icon">
                                    </div>
                                    <h4 class="mil-upper mil-mb-30"><?php the_title(); ?></h4>
                                    <p><?php the_content(); ?></p>
                                </div>

                            </div>

                        </div>
                    </div>
                    <?php } 
                    wp_reset_postdata();
                    ?>

                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    <!-- process end -->

    <!-- portfolio -->
    <section>
        <div class="container mil-p-0-30">
            <div class="mil-background-grid mil-softened"></div>
            <div class="row justify-content-between align-items-center">
                <?php if(get_field('main_title_port')) {?>
                <div class="col-lg-5">
                    <div class="mil-mb-60">
                        <?php  ?>
                        <span
                            class="mil-suptitle mil-upper mil-up mil-mb-30"><?php echo get_field('subtitle_port'); ?></span>
                        <h2 class="mil-upper mil-up mil-mb-30"><?php echo get_field('main_title_port'); ?></h2>
                        <p class="mil-up mil-mb-40"><?php echo get_field('description_port'); ?></p>
                        <?php } ?>
                        <?php if(get_field('ceo_agent_port')) {?>
                        <div class="row align-items-center mil-up">
                            <div class="col-lg-5 mil-mb-30">
                                <h5 class="mil-upper mil-mb-10"><?php echo get_field('ceo_agent_port'); ?></h5>
                                <p><?php echo get_field('ceo_of_ruizarch'); ?></p>
                            </div>
                            <div class="col-lg-6 mil-mb-30">
                                <h2 class="mil-font-2 mil-thin"><?php echo get_field('signture_port'); ?></h2>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="col-lg-6">

                    <div class="mil-illustration-slider-frame mil-up mil-mb-90">
                        <div class="swiper-container mil-illustration-slider">
                            <div class="swiper-wrapper">
                                <?php
                                $projectImages = new wp_query(array(
                                    'post_type' => 'project',
                                    'posts_per_page' => 3
                                ));
                                while($projectImages->have_posts()){
                                    $projectImages->the_post(); ?>
                                ?>
                                <div class="swiper-slide">

                                    <div class="mil-illustration" data-swiper-parallax-x="50"
                                        data-swiper-parallax-scale="1.3">
                                        <div class="mil-image-frame">
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="image">
                                        </div>
                                    </div>

                                </div>
                                <?php } 
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                        <div class="mil-illustration-slider-nav mil-up">
                            <div class="mil-nav-buttons">
                                <div class="mil-slider-button mil-illustration-prev">Prev</div>
                                <div class="mil-slider-button mil-illustration-next">Next</div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- portfolio end -->

    <!-- partners -->
    <div class="mil-soft-bg mil-relative">
        <img src="<?php echo get_field('image_partners_section'); ?>" class="mil-bg-img" alt="image">
        <div class="container mil-p-120-120">
            <div class="mil-background-grid mil-softened"></div>
            <div class="swiper-container mil-infinite-show mil-up">
                <div class="swiper-wrapper">
                    <?php $ourPartners = new wp_query(array(
                        'post_type' => 'partners',
                    ));
                    while($ourPartners->have_posts()){
                        $ourPartners->the_post();?>
                    <div class="swiper-slide">
                        <a class="mil-partner-frame"><img src="<?php the_post_thumbnail_url(); ?>" alt="logo"></a>
                    </div>
                    <?php } 
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- partners end -->

    <!-- awards -->
    <section>
        <div class="container mil-p-120-90">
            <div class="mil-background-grid mil-softened"></div>
            <div class="row justify-content-between">
                <?php if(get_field('main_title_award')) { ?>
                <div class="col-lg-4">
                    <div class="mil-mb-90">
                        <h2 class="mil-upper mil-up mil-mb-30"><?php echo get_field('main_title_award'); ?></h2>
                        <p class="mil-up mil-mb-30"><?php echo get_field('description_award'); ?></p>
                        <a href="<?php echo site_url('blog') ?>"
                            class="mil-link mil-upper mil-up"><?php echo get_field('title_link_award'); ?><span
                                class="mil-arrow"><img
                                    src="<?php echo  get_theme_file_uri(get_field('icon_link_award')); ?>"
                                    alt="arrow"></span></a>
                    </div>
                </div>
                <?php } ?>
                <div class="col-lg-7">
                    <div class="mil-hover-images mil-up">
                        <ul>
                            <?php if(get_field('frist_award')) { ?>
                            <li class="mil-up">
                                <a class="mil-hover-item" href="javascript:"
                                    data-src="<?php echo get_field('image_first_award'); ?>">
                                    <p><?php echo get_field('year_first_award'); ?></p><span
                                        class="mil-h4"><?php echo get_field('frist_award'); ?></span>
                                </a>
                            </li>
                            <?php } ?>
                            <?php if(get_field('second_award')) { ?>
                            <li class="mil-up">
                                <a class="mil-hover-item" href="javascript:"
                                    data-src="<?php echo get_field('image_second_award'); ?>">
                                    <p><?php echo get_field('year_second_award'); ?></p><span
                                        class="mil-h4"><?php echo get_field('second_award'); ?></span>
                                </a>
                            </li>
                            <?php } ?>
                            <?php if(get_field('third_award')) { ?>
                            <li class="mil-up">
                                <a class="mil-hover-item" href="javascript:"
                                    data-src="<?php echo get_field('image_third_award'); ?>">
                                    <p><?php echo get_field('year_third_award'); ?></p><span
                                        class="mil-h4"><?php echo get_field('third_award'); ?></span>
                                </a>
                            </li>
                            <?php } ?>
                            <?php if(get_field('fourth_award')) { ?>
                            <li class="mil-up">
                                <a class="mil-hover-item" href="javascript:"
                                    data-src="<?php echo get_field('image_fourth_award'); ?>">
                                    <p><?php echo get_field('year_fourth_award'); ?></p><span
                                        class="mil-h4"><?php echo get_field('fourth_award'); ?></span>
                                </a>
                            </li>
                            <?php } ?>

                        </ul>
                        <div class="mil-img-wrapper mil-mb-30">
                            <img src="img/photo/2.jpg" alt="image">
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-- awards end -->

    <!-- reviews -->
    <section class="mil-soft-bg mil-relative">
        <img src="<?php echo get_field('image_partners_section'); ?>" class="mil-bg-img" alt="image">
        <div class="container mil-p-120-120">
            <div class="mil-background-grid mil-softened"></div>

            <div class="row justify-content-between">
                <div class="col-lg-4">

                    <div class="mil-mb-60">
                        <span
                            class="mil-suptitle mil-upper mil-up mil-mb-30"><?php echo get_field('subtitle_review'); ?></span>
                        <h2 class="mil-upper mil-up"><?php echo get_field('main_title_review'); ?></h2>
                    </div>

                </div>
                <div class="col-lg-7 mil-mt-suptitle-offset">

                    <div class="swiper-container mil-reviews-slider mil-mb-30">
                        <div class="swiper-wrapper">
                            <?php $teamPost = new wp_query(array(
                                'post_type' => 'team'
                            )); 
                            while($teamPost->have_posts()){
                                $teamPost->the_post(); ?>
                            <div class="swiper-slide">

                                <div class="mil-review-frame mil-mb-30" data-swiper-parallax-x="-200"
                                    data-swiper-parallax-opacity="0">
                                    <div class="mil-reviev-head mil-up">
                                        <div class="mil-left">
                                            <?php if(get_field('agent_icon')) {?>
                                            <div class="mil-quote">
                                                <img src="<?php echo get_theme_file_uri(get_field('agent_icon')) ?>"
                                                    alt="icon">
                                            </div>
                                            <?php } ?>
                                            <div class="mil-review-avatar">
                                                <img src="<?php the_post_thumbnail_url(); ?>" alt="face">
                                            </div>
                                        </div>
                                        <div class="mil-name">
                                            <h6 class="mil-upper"><?php the_title(); ?></h6>
                                            <p class="mil-text-sm mil-dark-soft">
                                                <?php echo get_field('agent_subtitle') ?></p>
                                        </div>
                                    </div>
                                    <div class="mil-up">
                                        <p class="mil-review-text" data-swiper-parallax="-60"><?php the_content(); ?>
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <?php } 
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>

                    <div class="mil-nav-buttons mil-reviews-nav mil-up">
                        <div class="mil-slider-button mil-process-prev">Prev</div>
                        <div class="mil-slider-button mil-process-next">Next</div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- reviews end -->

    <!-- call to action -->
    <section class="mil-dark-bg mil-relative mil-o-hidden">
        <img src="<?php echo get_field('image_call'); ?>" class="mil-bg-img mil-scale" alt="image"
            style="object-position: top;" data-value-1="1" data-value-2="1.2">
        <div class="mil-overlay"></div>
        <div class="container mil-p-120-120">
            <div class="mil-background-grid"></div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="mil-center">
                        <span
                            class="mil-suptitle mil-upper mil-light mil-up mil-mb-30"><?php echo get_field('subtitle_call'); ?></span>
                        <h2 class="mil-upper mil-light mil-up mil-mb-60"><?php echo get_field('main_title_call'); ?>
                        </h2>
                        <div class="mil-complex-actions">
                            <a href="<?php echo site_url('contact-us') ?>"
                                class="mil-button mil-up"><?php echo get_field('title_link_call'); ?></a>
                            <div class="mil-phone-box">
                                <p class="mil-accent mil-mb-5"><?php echo get_field('new_project'); ?></p>
                                <h4 class="mil-light mil-thin"><?php echo get_field('number_call'); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>