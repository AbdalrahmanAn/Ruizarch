<?php 
get_header();
while(have_posts()) {
    the_post(); ?>

<div id="content">

    <!-- banner -->
    <section class="mil-banner mil-banner-sm">
        <img src="<?php the_post_thumbnail_url('') ?>" class="mil-bg-img mil-scale" data-value-1=".4" data-value-2="1.4"
            alt="image" style="object-position: top">
        <div class="mil-overlay"></div>
        <div class="container">
            <div class="mil-background-grid mil-top-space"></div>
            <div class="mil-banner-content mil-center">
                <div class="mil-mb-90">
                    <h1 class="mil-light mil-upper mil-mb-30"><?php the_title(); ?></h1>
                    <ul class="mil-breadcrumbs mil-center">
                        <li><a href="<?php echo site_url('') ?>">Home</a></li>
                        <li><a href="<?php echo get_post_type_archive_link('services'); ?>">Services</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->

    <!-- about -->
    <section>
        <div class="container mil-p-120-60">
            <div class="mil-background-grid mil-softened"></div>
            <div class="row justify-content-between">
                <div class="col-lg-7">


                    <h2 class="mil-upper mil-up mil-mb-60">Description</h2>
                    <p class="mil-up mil-mb-30"><?php the_content() ?></p>

                    <div class="mil-divider-lg mil-up mil-mb-60"></div>
                    <?php if(get_field('main_title_benefits')) { ?>
                    <h2 class="mil-upper mil-up mil-mb-60"><?php echo get_field('main_title_benefits') ?></h2>

                    <div class="row justify-content-between">
                        <div class="col-lg-6">
                            <p class="mil-up mil-mb-30"><?php echo get_field('benefits_content') ?></p>
                        </div>

                        <div class="col-lg-5">
                            <ul class="mil-icon-list mil-mb-60">
                                <?php if(get_field('first_benefit')) { ?>
                                <li class="mil-hover mil-up"><a href="#."><img
                                            src="<?php echo get_theme_file_uri(get_field('first_benefit_icon')); ?>"
                                            alt="icon"><?php echo get_field('first_benefit'); ?></a></li>
                                <?php } ?>
                                <?php if(get_field('second_benefit')) { ?>
                                <li class="mil-hover mil-up"><a href="#."><img
                                            src="<?php echo get_theme_file_uri(get_field('second_benefit_icon')); ?>"
                                            alt="icon"><?php echo get_field('second_benefit'); ?></a></li>
                                <?php } ?>
                                <?php if(get_field('third_benefit')) { ?>
                                <li class="mil-hover mil-up"><a href="#."><img
                                            src="<?php echo get_theme_file_uri(get_field('third_benefit_icon')); ?>"
                                            alt="icon"><?php echo get_field('third_benefit'); ?></a></li>
                                <?php } ?>
                                <?php if(get_field('fourth_benefit')) { ?>
                                <li class="mil-hover mil-up"><a href="#."><img
                                            src="<?php echo get_theme_file_uri(get_field('fourth_benefit_icon')); ?>"
                                            alt="icon"><?php echo get_field('fourth_benefit'); ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>

                    </div>
                    <?php } ?>


                </div>
                <div class="col-lg-5">

                    <div class="mil-sidebar-frame mil-mb-60">
                        <?php if(get_field('main_title_info')) { ?>
                        <h2 class="mil-upper mil-up mil-mb-60"><?php echo get_field('main_title_info') ?></h2>
                        <?php if(get_field('first_title')) { ?>
                        <h6 class="mil-upper mil-up mil-mb-30"><?php echo get_field('first_title') ?></h6>
                        <ul class="mil-list mil-dark mil-up mil-mb-30">
                            <li><?php echo get_field('first_plan') ?></li>
                            <li><?php echo get_field('second_plan') ?></li>
                            <li><?php echo get_field('third_plan') ?></li>
                        </ul>

                        <div class="mil-divider-lg mil-up mil-mb-30"></div>
                        <?php } ?>
                        <?php if(get_field('second_title')) { ?>
                        <h6 class="mil-upper mil-up mil-mb-30"><?php echo get_field('second_title') ?></h6>
                        <ul class="mil-list mil-dark mil-up mil-mb-30">
                            <li><?php echo get_field('first_area') ?></li>
                            <li><?php echo get_field('second_area') ?></li>
                            <li><?php echo get_field('third_area') ?></li>
                        </ul>
                        <?php } ?>
                        <div class="mil-divider-lg mil-up mil-mb-30"></div>
                        <?php } ?>

                        <?php if(get_field('excperience_years_title') or get_field('invested_title')) { ?>
                        <div class="row">

                            <?php if(get_field('excperience_years_title')) {?>
                            <div class="col-6">
                                <div class="mil-counter-frame mil-up mil-mb-30">
                                    <h5 class="mil-mb-5"><span class="mil-counter"
                                            data-number="<?php echo get_field('excperience_years'); ?>">0</span>+</h5>
                                    <p class="mil-dark"><?php echo get_field('excperience_years_title'); ?></p>
                                </div>
                            </div>
                            <?php } ?>

                            <?php if(get_field('invested_title')) {?>
                            <div class="col-6">
                                <div class="mil-counter-frame mil-up mil-mb-30">
                                    <h5 class="mil-mb-5"><span class="mil-counter"
                                            data-number="<?php echo get_field('invested_number'); ?>">0</span>k+</h5>
                                    <p class="mil-dark"><?php echo get_field('invested_title'); ?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <?php } ?>

                        <?php if(get_field('main_title_service_agent')) { ?>
                        <div class="mil-divider-lg mil-up mil-mb-30"></div>
                        <h6 class="mil-upper mil-up mil-mb-30"><?php echo get_field('main_title_service_agent') ?></h6>
                        <?php if(get_field('service_agent') or get_field('agent_mail') or get_field('agent_number')) { ?>
                        <ul class="mil-list mil-dark mil-up">
                            <li><?php echo get_field('service_agent') ?></li>
                            <li><?php echo get_field('agent_mail') ?></li>
                            <li><?php echo get_field('agent_number') ?></li>
                            <?php } ?>
                        </ul>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about end -->

    <!-- portfolio -->
    <?php if(get_field('first_image') or get_field('second_image') or get_field('third_image')) {?>
    <div class="mil-illustration-slider-frame mil-up">
        <div class="swiper-container mil-illustration-slider">
            <div class="swiper-wrapper">

                <?php if(get_field('first_image')) { ?>
                <div class="swiper-slide">
                    <div class="mil-illustration mil-fw-item" data-swiper-parallax-x="50"
                        data-swiper-parallax-scale="1.3">
                        <div class="mil-image-frame">
                            <img src="<?php echo get_field('first_image') ?>" alt="image">
                        </div>
                    </div>
                </div>
                <?php } ?>

                <?php if(get_field('second_image')) { ?>
                <div class="swiper-slide">
                    <div class="mil-illustration mil-fw-item" data-swiper-parallax-x="50"
                        data-swiper-parallax-scale="1.3">
                        <div class="mil-image-frame">
                            <img src="<?php echo get_field('second_image') ?>" alt="image">
                        </div>
                    </div>
                </div>
                <?php } ?>

                <?php if(get_field('third_image')) { ?>
                <div class="swiper-slide">
                    <div class="mil-illustration mil-fw-item" data-swiper-parallax-x="50"
                        data-swiper-parallax-scale="1.3">
                        <div class="mil-image-frame">
                            <img src="<?php echo get_field('third_image') ?>" alt="image">
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
    <section>
        <div class="container mil-p-120-60">
            <div class="mil-background-grid mil-softened"></div>
            <div class="row justify-content-between">
                <div class="col-lg-7">
                    <?php if(get_field('planning_title') or get_field('planning_approach_title')) { ?>
                    <?php if(get_field('planning_title')) { ?>
                    <h2 class="mil-upper mil-up mil-mb-60"><?php echo get_field('planning_title'); ?></h2>
                    <p class="mil-up mil-mb-60"><?php  echo get_field('planning_content'); ?></p>
                    <?php } ?>
                    <?php if(get_field('planning_approach_title')) { ?>
                    <h2 class="mil-upper mil-up mil-mb-60"><?php  echo get_field('planning_approach_title'); ?></h2>
                    <p class="mil-up mil-mb-60"><?php echo get_field('planning_approach_content'); ?></p>
                    <?php } ?>
                    <div class="mil-divider-lg mil-up mil-mb-60"></div>
                    <?php } ?>

                    <span class="mil-suptitle mil-upper mil-dark mil-up mil-mb-30">Have Some Questions?</span>
                    <h2 class="mil-upper mil-up mil-mb-60">We Can Help!</h2>

                    <div class="mil-mb-60">
                        <?php 
                        $helpCnter = new wp_query(array(
                            'post_type' => 'helpcenter',
                            'posts_per_page' => 4,
                        ));
                        while($helpCnter->have_posts()){
                            $helpCnter->the_post(); ?>
                        <div class="mil-accordion-group mil-dark mil-up">
                            <div class="mil-accordion-menu">

                                <div class="mil-symbol mil-dark mil-thin mil-h3">
                                    <div class="mil-plus">+</div>
                                    <div class="mil-minus">-</div>
                                </div>

                                <h6 class="mil-upper"><?php the_title(); ?></h6>

                            </div>
                            <div class="mil-accordion-content">
                                <p class="mil-dark-soft mil-mb-30"><?php the_content() ?></p>
                            </div>
                        </div>
                        <?php } wp_reset_postdata();
                        ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="mil-button mil-up mil-mb-60">More Questions?</a>

                </div>
                <?php if(get_field('title_capabilities') or get_field('work_process_title')) { ?>
                <div class="col-lg-5">
                    <div class="mil-sidebar-frame mil-mb-60">
                        <?php if(get_field('title_capabilities')) { ?>
                        <h6 class="mil-upper mil-up mil-mb-30"><?php echo get_field('title_capabilities') ?></h6>
                        <ul class="mil-list mil-dark mil-up mil-mb-30">
                            <?php if(get_field('first_capacity')) { ?>
                            <li><?php echo get_field('first_capacity') ?></li>
                            <?php } ?>
                            <?php if(get_field('second_capacity')) { ?>
                            <li><?php echo get_field('second_capacity') ?></li>
                            <?php } ?>
                            <?php if(get_field('third_capacity')) { ?>
                            <li><?php echo get_field('third_capacity') ?></li>
                            <?php } ?>
                            <?php if(get_field('fourth_capacity')) { ?>
                            <li><?php echo get_field('fourth_capacity') ?></li>
                            <?php } ?>
                            <?php if(get_field('fifth_capacity')) { ?>
                            <li><?php echo get_field('fifth_capacity') ?></li>
                            <?php } ?>
                        </ul>
                        <div class="mil-divider-lg mil-up mil-mb-30"></div>
                        <?php } ?>
                        <?php if(get_field('work_process_title')) { ?>
                        <h6 class="mil-upper mil-up mil-mb-30"><?php echo get_field('work_process_title') ?></h6>
                        <ul class="mil-list mil-dark mil-up">
                            <?php if(get_field('first_work')) { ?>
                            <li><?php echo get_field('first_work') ?></li>
                            <?php } ?>
                            <?php if(get_field('second_work')) { ?>
                            <li><?php echo get_field('second_work') ?></li>
                            <?php } ?>
                            <?php if(get_field('third_work')) { ?>
                            <li><?php echo get_field('third_work') ?></li>
                            <?php } ?>
                            <?php if(get_field('fourth_work')) { ?>
                            <li><?php echo get_field('fourth_work') ?></li>
                            <?php } ?>
                            <?php if(get_field('fifth_work')) { ?>
                            <li><?php echo get_field('fifth_work') ?></li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </div>

                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- about end -->

    <!-- contact -->
    <section class="mil-soft-bg mil-relative">
        <img src="<?php echo get_theme_file_uri('/img/other/bg.svg') ?>" class="mil-bg-img" alt="image">
        <div class="container mil-p-120-30">
            <div class="mil-background-grid mil-softened"></div>
            <div class="row justify-content-between">
                <div class="col-lg-4">

                    <div class="mil-mb-60">
                        <span class="mil-suptitle mil-upper mil-up mil-mb-30">Have project in mind?</span>
                        <h2 class="mil-upper mil-up mil-mb-30">Let's discuss</h2>
                        <div class="mil-divider-lg mil-up mil-mb-30"></div>
                        <ul class="mil-list mil-dark mil-up mil-mb-30">
                            <li>+7 (200) 600-30-30</li>
                            <li>+7 (200) 200 - 80 - 02</li>
                        </ul>
                        <ul class="mil-list mil-dark mil-up mil-mb-30">
                            <li>info@ruizarch.com</li>
                            <li>hello@ruizarch.com</li>
                        </ul>
                        <ul class="mil-list mil-dark mil-up">
                            <li>USA</li>
                            <li>New York - 1800 Wazee Street</li>
                            <li>Suite 300 NY, NY 80202</li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-7">

                    <form id="cform" class="mil-mt-suptitle-offset mil-mb-90 cform">
                        <div class="row">
                            <div class="col-lg-6">

                                <div class="mil-input-frame mil-dark-input mil-up mil-mb-30">
                                    <label class="mil-upper"><span>Full Name</span><span
                                            class="mil-required">*</span></label>
                                    <input type="text" name="name" placeholder="Enter Your Name Here">
                                </div>

                            </div>
                            <div class="col-lg-6">

                                <div class="mil-input-frame mil-dark-input mil-up mil-mb-30">
                                    <label class="mil-upper"><span>Email address</span><span
                                            class="mil-required">*</span></label>
                                    <input type="email" name="email" placeholder="Enter Your Email Here">
                                </div>

                            </div>
                            <div class="col-lg-6">

                                <div class="mil-input-frame mil-dark-input mil-up mil-mb-30">
                                    <label class="mil-upper"><span>Phone</span><span
                                            class="mil-required">*</span></label>
                                    <input type="tel" name="tel" placeholder="Enter Your Phone Here">
                                </div>

                            </div>
                            <div class="col-lg-6">

                                <div class="mil-input-frame mil-dark-input mil-up mil-mb-30">
                                    <label class="mil-upper"><span>Budget</span><span
                                            class="mil-required">*</span></label>
                                    <input type="text" name="budget" placeholder="Enter Your Name Here">
                                </div>

                            </div>
                            <div class="col-lg-12">

                                <div class="mil-input-frame mil-dark-input mil-up mil-mb-30">
                                    <label class="mil-upper"><span>Message</span><span
                                            class="mil-required">*</span></label>
                                    <textarea name="message" placeholder="Enter Your Name Here"></textarea>
                                </div>

                            </div>
                            <div class="col-lg-12">

                                <div class="mil-checbox-frame mil-dark-input mil-up mil-mb-30">
                                    <input checked class="mil-checkbox" id="checkbox-1" type="checkbox" value="value">
                                    <label for="checkbox-1" class="mil-text-sm">Accept the terms and conditions of
                                        personal data.</label>
                                </div>

                            </div>
                            <div class="col-lg-12">

                                <a href="#." onclick="$('#cform').submit(); return false;"
                                    class="mil-button mil-up">Send Now</a>

                            </div>
                        </div>
                    </form>
                    <div class="alert-success mil-mb-90" style="display: none;">
                        <h5>Thanks, your message is sent successfully.</h5>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- contact end -->
</div>


<?php }
get_footer();
?>