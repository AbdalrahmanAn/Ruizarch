<?php get_header();
while(have_posts()){
    the_post();
} ?>

<div id="content">

    <!-- banner -->
    <section class="mil-banner mil-banner-sm">
        <img src="<?php the_post_thumbnail_url(''); ?>" class="mil-bg-img mil-scale" data-value-1=".4"
            data-value-2="1.4" alt="image" style="object-position: top">
        <div class="mil-overlay"></div>
        <div class="container">
            <div class="mil-background-grid mil-top-space"></div>
            <div class="mil-banner-content">
                <div class="mil-mb-90">
                    <h1 class="mil-light mil-upper mil-up mil-mb-30"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->

    <!-- description -->
    <section>
        <div class="container mil-p-120-90">
            <div class="mil-background-grid mil-softened"></div>
            <div class="row justify-content-between">
                <?php if(get_field('main_title_agent') or the_content()) {?>
                <div class="col-lg-4">
                    <div class="mil-mb-60">
                        <span class="mil-suptitle mil-upper mil-up mil-mb-30"><?php echo get_field('overview') ?></span>
                        <h2 class="mil-upper mil-up mil-mb-30"><?php echo get_field('main_title_agent') ?></h2>
                    </div>
                </div>
                <div class="col-lg-7 mil-mt-suptitle-offset">
                    <p class="mil-up "><?php the_content(); ?></p>
                    <?php } ?>

                    <div class="row">
                        <?php if(get_field('agent_name')) { ?>
                        <div class="col-lg-4">
                            <div class="mil-item-frame mil-up mil-mb-30">
                                <div class="mil-about-counter mil-center">
                                    <div class="mil-avatar mil-mb-30">
                                        <img src="<?php echo get_field('agent_image'); ?> " alt="face">
                                    </div>
                                    <h5 class="mil-upper mil-mb-10"><?php echo get_field('agent_name') ?></h5>
                                    <p class="mil-text-sm mil-dark-soft"><?php echo get_field('subtitle_agent') ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <p class="mil-up mil-mb-30"><?php echo get_field('content_agent') ?></p>
                        </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- description end -->



    <!-- info -->
    <?php 
if(get_field('project_location') or get_field('project_square_feet') or get_field('project_date') or get_field('project_component')){ ?>
    <div class="container">
        <div class="mil-divider-lg"></div>
    </div>
    <section>
        <div class="container mil-p-120-60">
            <div class="mil-background-grid mil-softened"></div>
            <div class="mil-mb-90">
                <h2 class="mil-upper mil-up"><?php echo get_field('main_title_project_info') ?></h2>
            </div>
            <div class="row mil-mb-30">

                <?php if(get_field('project_location')) { ?>
                <div class="col-lg-3">
                    <h6 class="mil-upper mil-up mil-mb-30"><?php echo get_field('main_title_location') ?></h6>
                    <ul class="mil-list mil-dar(k mil-up mil-mb-60">
                        <li><?php 
                        echo get_field('project_location') ; ?>
                        </li>
                    </ul>
                </div> <?php } ?>

                <?php if(get_field('project_square_feet')) { ?>
                <div class="col-lg-3">
                    <h6 class="mil-upper mil-up mil-mb-30"><?php echo get_field('main_title_square_feet') ?></h6>
                    <ul class="mil-list mil-dark mil-up mil-mb-60">
                        <li><?php echo get_field('project_square_feet') ; ?>
                        </li>
                    </ul>
                </div> <?php } ?>

                <?php if(get_field('project_date')) { ?>
                <div class="col-lg-3">
                    <h6 class="mil-upper mil-up mil-mb-30"><?php echo get_field('main_title_completion_date') ?></h6>
                    <ul class="mil-list mil-dar(k mil-up mil-mb-60">
                        <li><?php 
                        echo get_field('project_date') ; ?>
                        </li>
                    </ul>
                </div> <?php } ?>

                <?php if(get_field('project_component')) { ?>
                <div class="col-lg-3">
                    <h6 class="mil-upper mil-up mil-mb-30"><?php echo get_field('main_title_component') ?></h6>
                    <ul class="mil-list mil-dar(k mil-up mil-mb-60">
                        <li><?php 
                        echo get_field('project_component') ; ?>
                        </li>
                    </ul>
                </div> <?php } ?>

            </div>
        </div>
    </section>
    <?php } ?>
    <!-- info end -->

    <!-- portfolio -->
    <?php if(get_field('first_project_image') or get_field('second_project_image') or get_field('third_project_image')) { ?>
    <div class="mil-illustration-slider-frame mil-up">
        <div class="swiper-container mil-illustration-slider">
            <div class="swiper-wrapper">
                <?php if(get_field('first_project_image')) { ?>
                <div class="swiper-slide">
                    <div class="mil-illustration mil-fw-item" data-swiper-parallax-x="50"
                        data-swiper-parallax-scale="1.3">
                        <div class="mil-image-frame">
                            <img src="<?php echo get_field('first_project_image'); ?>" alt="image"
                                style="object-position: bottom">
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php if(get_field('second_project_image')) { ?>
                <div class="swiper-slide">
                    <div class="mil-illustration mil-fw-item" data-swiper-parallax-x="50"
                        data-swiper-parallax-scale="1.3">
                        <div class="mil-image-frame">
                            <img src="<?php echo get_field('second_project_image'); ?>" alt="image">
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php if(get_field('third_project_image')) { ?>
                <div class="swiper-slide">
                    <div class="mil-illustration mil-fw-item" data-swiper-parallax-x="50"
                        data-swiper-parallax-scale="1.3">
                        <div class="mil-image-frame">
                            <img src="<?php echo get_field('third_project_image'); ?>" alt="image">
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="container">
            <div class="mil-illustration-slider-nav mil-up">
                <div class="mil-nav-buttons">
                    <div class="mil-slider-button mil-illustration-prev">Prev</div>
                    <div class="mil-slider-button mil-illustration-next">Next</div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- portfolio end -->

    <!-- about -->
    <?php   if(get_field('title_project_fundamental') or get_field('content_project_fundamental') or get_field('project_icon') or get_field('title_project_fundamental_two') or get_field('content_project_fundamental_two') or get_field('project_icon_two') or get_field('title_project_fundamental_three') or get_field('content_project_fundamental_three') or get_field('project_icon_three') or get_field('title_project_fundamental_four') or get_field('content_project_fundamental_four') or get_field('project_icon_four')){ ?>
    <section>
        <div class="container mil-p-120-90">
            <div class="mil-background-grid mil-softened"></div>
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-4">
                    <div class="mil-mb-90">
                        <span
                            class="mil-suptitle mil-upper mil-up mil-mb-30"><?php echo get_field('subtitle_fundamental') ?></span>
                        <h2 class="mil-upper mil-up mil-mb-30"><?php echo get_field('main_title_fundamental') ?></h2>
                        <p class="mil-up"><?php echo get_field('content_fundamenta')?></p>
                    </div>
                </div>

                <div class="col-xl-7">
                    <div class="row">
                        <?php if(get_field('title_project_fundamental') or get_field('content_project_fundamental') or get_field('project_icon')){
                    ?>
                        <div class="col-md-6 col-lg-6">
                            <a href="<?php the_permalink(); ?>" class="mil-service-card mil-up mil-mb-30">
                                <div class="mil-center">
                                    <div class="mil-icon mil-icon-lg mil-mb-30">
                                        <img src="<?php echo get_theme_file_uri(get_field('project_icon')) ?>"
                                            alt="icon">
                                    </div>
                                    <h4 class="mil-upper mil-mb-20">
                                        <?php echo get_field('title_project_fundamental'); ?>
                                    </h4>
                                    <div class="mil-divider-sm mil-mb-20"></div>
                                    <p class="mil-service-text"><?php echo get_field('content_project_fundamental'); ?>
                                    </p>
                                    <div class="mil-go-buton mil-icon mil-icon-lg mil-icon-accent-bg">
                                        <img src="<?php echo get_theme_file_uri('/img/icons/1.svg') ?>" alt="icon">
                                    </div>
                                </div>
                            </a>

                        </div> <?php } ?>
                        <?php if(get_field('title_project_fundamental_two') or get_field('content_project_fundamental_two') or get_field('project_icon_two')){ ?>
                        <div class="col-md-6 col-lg-6">
                            <a href="<?php the_permalink(); ?>" class="mil-service-card mil-up mil-mb-30">
                                <div class="mil-center">
                                    <div class="mil-icon mil-icon-lg mil-mb-30">
                                        <img src="<?php echo get_theme_file_uri(get_field('project_icon_two')) ?>"
                                            alt="icon">
                                    </div>
                                    <h4 class="mil-upper mil-mb-20">
                                        <?php echo get_field('title_project_fundamental_two'); ?></h4>
                                    <div class="mil-divider-sm mil-mb-20"></div>
                                    <p class="mil-service-text">
                                        <?php echo get_field('content_project_fundamental_two'); ?>
                                    </p>
                                    <div class="mil-go-buton mil-icon mil-icon-lg mil-icon-accent-bg">
                                        <img src="<?php echo get_theme_file_uri('/img/icons/1.svg') ?>" alt="icon">
                                    </div>
                                </div>
                            </a>

                        </div> <?php } ?>
                        <?php if(get_field('title_project_fundamental_three') or get_field('content_project_fundamental_three') or get_field('project_icon_three')){ ?>
                        <div class="col-md-6 col-lg-6">
                            <a href="<?php the_permalink(); ?>" class="mil-service-card mil-up mil-mb-30">
                                <div class="mil-center">
                                    <div class="mil-icon mil-icon-lg mil-mb-30">
                                        <img src="<?php  echo get_theme_file_uri(get_field('project_icon_three')) ?>"
                                            alt="icon">
                                    </div>
                                    <h4 class="mil-upper mil-mb-20">
                                        <?php echo get_field('title_project_fundamental_three'); ?></h4>
                                    <div class="mil-divider-sm mil-mb-20"></div>
                                    <p class="mil-service-text">
                                        <?php echo get_field('content_project_fundamental_three'); ?></p>
                                    <div class="mil-go-buton mil-icon mil-icon-lg mil-icon-accent-bg">
                                        <img src="<?php echo get_theme_file_uri('/img/icons/1.svg') ?>" alt="icon">
                                    </div>
                                </div>
                            </a>
                        </div> <?php } ?>

                        <?php if(get_field('title_project_fundamental_four') or get_field('content_project_fundamental_four') or get_field('project_icon_four')){ ?>
                        <div class="col-md-6 col-lg-6">
                            <a href="<?php the_permalink(); ?>" class="mil-service-card mil-up mil-mb-30">
                                <div class="mil-center">
                                    <div class="mil-icon mil-icon-lg mil-mb-30">
                                        <img src="<?php  echo get_theme_file_uri(get_field('project_icon_four')) ?>"
                                            alt="icon">
                                    </div>
                                    <h4 class="mil-upper mil-mb-20">
                                        <?php echo get_field('title_project_fundamental_four'); ?></h4>
                                    <div class="mil-divider-sm mil-mb-20"></div>
                                    <p class="mil-service-text">
                                        <?php echo get_field('content_project_fundamental_four'); ?>
                                    </p>
                                    <div class="mil-go-buton mil-icon mil-icon-lg mil-icon-accent-bg">
                                        <img src="<?php echo get_theme_file_uri('/img/icons/1.svg') ?>" alt="icon">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="mil-divider-lg"></div>
    </div>
    <?php } ?>
    <!-- about end -->



    <!-- resume -->
    <section>
        <div class="container mil-p-120-90">
            <div class="row justify-content-between">
                <?php if(get_field('main_title') or get_field('first_description') or get_field('second_description')) { ?>
                <div class="col-lg-6">
                    <?php
                if(get_field('main_title') or get_field('first_description') or get_field('second_description') or get_field('ceo_name') or get_field('ceo_subtitle') or get_field('ceo_signature')) { ?>
                    <h2 class="mil-upper  mil-up mil-mb-30"><?php echo get_field('main_title'); ?></h2>
                    <p class="mil-up  mil-mb-30"><?php echo get_field('first_description'); ?></p>
                    <p class="mil-up mil-mb-60"><?php echo get_field('second_description'); ?></p>
                    <div class="row align-items-center mil-up">
                        <div class="col-lg-4 mil-mb-30">
                            <h5 class="mil-upper mil-mb-10"><?php echo get_field('ceo_name'); ?></h5>
                            <p><?php echo get_field('ceo_subtitle'); ?></p>
                        </div>
                        <div class="col-lg-6 mil-mb-30">
                            <h2 class="mil-font-2 mil-thin"><?php echo get_field('ceo_signature'); ?></h2>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>

                <?php if(get_field('note_content')) { ?>
                <div class="col-lg-5 mil-mt-suptitle-offset">
                    <?php if(get_field('note_icon') or get_field('note_content') or get_field('note_writer')) ?>
                    <div class="mil-review-frame mil-mb-30" data-swiper-parallax-x="-200"
                        data-swiper-parallax-opacity="0">
                        <div class="mil-reviev-head mil-up">
                            <div class="mil-left">
                                <div class="mil-quote">
                                    <img src="<?php echo get_theme_file_uri(get_field('note_icon')) ?>" alt="icon">
                                </div>
                            </div>
                        </div>
                        <div class="mil-up">
                            <div class="mil-review-text">
                                <h3 class="mil-font-2 mil-mb-30"><?php echo get_field('note_content') ?></h3>
                                <p class="mil-text-sm"><?php echo get_field('note_writer') ?></p>
                            </div>

                        </div>
                    </div>

                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- resume end -->

    <div class="container">
        <div class="mil-divider-lg"></div>
    </div>

    <!-- next/prev project -->
    <section>
        <div class="container mil-p-120-60">
            <div class="row">
                <div class="col-md-6 col-lg-6">

                    <div class="mil-prev-project mil-mb-60">
                        <h4 class="mil-upper mil-up mil-mb-30">Previous project</h4>
                        <a href="" class="mil-link mil-left-link mil-upper mil-up">Previous work
                            <span class="mil-arrow"><img src="<?php echo get_theme_file_uri('/img/icons/1.svg') ?>"
                                    alt="arrow"></span></a>
                    </div>

                </div>
                <div class="col-md-6 col-lg-6">

                    <div class="mil-next-project mil-mb-60">
                        <h4 class="mil-upper mil-up mil-mb-30">Next project</h4>
                        <a href="project.html" class="mil-link mil-upper mil-up">Next work <span class="mil-arrow"><img
                                    src="<?php echo get_theme_file_uri('/img/icons/1.svg') ?>" alt="arrow"></span></a>
                    </div>

                </div>
            </div>
        </div>
    </section>

</div>
<?php
get_footer();
?>