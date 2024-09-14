<?php get_header(); ?>

<section class="mil-banner mil-banner-sm">
    <img src="<?php the_post_thumbnail_url(); ?>" class="mil-bg-img mil-scale" data-value-1=".4" data-value-2="1.4"
        alt="image" style="object-position: top">
    <div class="mil-overlay"></div>
    <div class="container">
        <div class="mil-background-grid mil-top-space"></div>
        <div class="mil-banner-content mil-center">
            <div class="mil-mb-90">
                <h1 class="mil-light mil-upper mil-mb-30"><?php echo get_field('main_title_banner_contact') ?></h1>
                <ul class="mil-breadcrumbs mil-center">
                    <li><a href="<?php echo site_url(''); ?>">Home</a></li>
                    <li><?php the_title(); ?></li>
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
            <div class="col-lg-6">

                <div class="mil-mb-90">
                    <h2 class="mil-upper mil-up mil-mb-30"><?php the_title(); ?></h2>
                    <p class="mil-up mil-mb-40"><?php the_content(); ?></p>
                </div>

            </div>
            <?php if(get_field('headquarters') or get_field('phone_contact_us') or get_field('email_contact') or get_field('image_info_contact_us')) { ?>
            <div class="col-lg-4 mil-relative">
                <div class="mil-contact-sidebar">
                    <?php if(get_field('image_info_contact_us')) {?>
                    <img src="<?php echo get_field('image_info_contact_us'); ?>" alt="img"
                        style="width: 100%; height: 200px; object-fit: cover; object-position: 0 -60px"
                        class="mil-mb-30">
                    <?php } ?>
                    <div class="mil-sidebar-info">
                        <?php if(get_field('headquarters')) { ?>
                        <h6 class="mil-upper mil-up mil-mb-30"><?php echo get_field('headquarters'); ?></h6>
                        <ul class="mil-list mil-dark mil-up mil-mb-30">
                            <?php if(get_field('first_place')) { ?>
                            <li><?php echo get_field('first_place'); ?></li>
                            <?php } ?>
                            <?php if(get_field('second_place')) { ?>
                            <li><?php echo get_field('second_place'); ?></li>
                            <?php } ?>
                            <?php if(get_field('third_place')) { ?>
                            <li><?php echo get_field('third_place'); ?></li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                        <?php if(get_field('phone_contact_us')) { ?>
                        <h6 class="mil-upper mil-up mil-mb-30"><?php echo get_field('phone_contact_us'); ?></h6>
                        <ul class="mil-list mil-dark mil-up mil-mb-30">
                            <?php if(get_field('first_number_contact')) { ?>
                            <li><?php echo get_field('first_number_contact'); ?></li>
                            <?php } ?>
                            <?php if(get_field('second_number_contact')) { ?>
                            <li><?php echo get_field('second_number_contact'); ?></li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                        <?php if(get_field('email_contact')) { ?>
                        <h6 class="mil-upper mil-up mil-mb-30"><?php echo get_field('email_contact'); ?></h6>
                        <ul class="mil-list mil-dark mil-up">
                            <?php if(get_field('first_email_contact')) { ?>
                            <li><?php echo get_field('first_email_contact'); ?></li>
                            <?php } ?>
                            <?php if(get_field('second_email_contact')) { ?>
                            <li><?php echo get_field('second_email_contact'); ?></li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php } ?>

            <div class="col-lg-7">
                <div class="row">
                    <?php if(get_field('first_area')) {?>
                    <div class="col-lg-4">
                        <div class="mil-up mil-mb-60">
                            <span
                                class="mil-suptitle mil-upper mil-up mil-mb-30"><?php echo get_field('first_area'); ?></span>
                            <p class="mil-up">
                                <?php if(get_field('first_area_name')) { ?>
                                <?php echo get_field('first_area_name') ?><br>
                                <?php } ?>
                                <?php if(get_field('first_area_suite_number')) { ?>
                                <?php echo get_field('first_area_suite_number') ?><br>
                                <?php } ?>
                                <?php if(get_field('first_area_street_name')) { ?>
                                <?php echo get_field('first_area_street_name') ?><br>
                                <?php } ?>
                                <?php if(get_field('first_area_phone_number')) { ?>
                                <?php echo get_field('first_area_phone_number') ?>
                                <?php } ?>
                            </p>
                        </div>
                    </div>
                    <?php } ?>

                    <div class="col-lg-4">
                        <div class="mil-up mil-mb-60">
                            <span
                                class="mil-suptitle mil-upper mil-up mil-mb-30"><?php echo get_field('second_area'); ?></span>
                            <p class="mil-up">
                                <?php if(get_field('second_area_name')) { ?>
                                <?php echo get_field('second_area_name') ?><br>
                                <?php } ?>
                                <?php if(get_field('second_area_suite_number')) { ?>
                                <?php echo get_field('second_area_suite_number') ?><br>
                                <?php } ?>
                                <?php if(get_field('second_area_street_name')) { ?>
                                <?php echo get_field('second_area_street_name') ?><br>
                                <?php } ?>
                                <?php if(get_field('second_area_phone_number')) { ?>
                                <?php echo get_field('second_area_phone_number') ?>
                                <?php } ?>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mil-up mil-mb-60">
                            <span
                                class="mil-suptitle mil-upper mil-up mil-mb-30"><?php echo get_field('third_area'); ?></span>
                            <p class="mil-up">
                                <?php if(get_field('third_area_name')) { ?>
                                <?php echo get_field('third_area_name') ?><br>
                                <?php } ?>
                                <?php if(get_field('third_area_suite_number')) { ?>
                                <?php echo get_field('third_area_suite_number') ?><br>
                                <?php } ?>
                                <?php if(get_field('third_area_street_name')) { ?>
                                <?php echo get_field('third_area_street_name') ?><br>
                                <?php } ?>
                                <?php if(get_field('third_area_phone_number')) { ?>
                                <?php echo get_field('third_area_phone_number') ?>
                                <?php } ?>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- about end -->

<!-- map -->
<div class="mil-map-frame mil-up">
    <div class="mil-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1396.5769090312324!2d-73.6519672!3d45.5673453!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91f8abc30e0ff%3A0xfc6d9cbb49022e9c!2sManoir%20Saint-Joseph!5e0!3m2!1sen!2sua!4v1685485811069!5m2!1sen!2sua"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<!-- map end -->

<!-- contact -->
<section class="mil-relative">
    <div class="container mil-p-120-30">
        <div class="mil-background-grid mil-softened"></div>
        <div class="row justify-content-between">
            <div class="col-lg-4">

                <div class="mil-mb-90">
                    <h2 class="mil-upper mil-up mil-mb-30"><?php echo get_field('main_title_banner_contact') ?></h2>
                    <p class="mil-up mil-mb-30"><?php the_content(); ?></p>
                    <div class="mil-divider-lg mil-up mil-mb-30"></div>
                    <div class="mil-up">
                        <a href="<?php the_permalink(); ?>" class="mil-link mil-upper">Join Us <span
                                class="mil-arrow"><img src="<?php echo get_theme_file_uri('/img/icons/1.svg') ?>"
                                    alt="arrow"></span></a>
                    </div>
                </div>

            </div>
            <div class="col-lg-7">

                <form id="cform" class="mil-mb-90 cform">
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
                                <label class="mil-upper"><span>Phone</span><span class="mil-required">*</span></label>
                                <input type="tel" name="tel" placeholder="Enter Your Phone Here">
                            </div>

                        </div>
                        <div class="col-lg-6">

                            <div class="mil-input-frame mil-dark-input mil-up mil-mb-30">
                                <label class="mil-upper"><span>Budget</span><span class="mil-required">*</span></label>
                                <input type="text" name="budget" placeholder="Enter Your Name Here">
                            </div>

                        </div>
                        <div class="col-lg-12">

                            <div class="mil-input-frame mil-dark-input mil-up mil-mb-30">
                                <label class="mil-upper"><span>Message</span><span class="mil-required">*</span></label>
                                <textarea name="message" placeholder="Enter Your Name Here"></textarea>
                            </div>

                        </div>
                        <div class="col-lg-12">

                            <div class="mil-checbox-frame mil-dark-input mil-up mil-mb-30">
                                <input checked class="mil-checkbox" id="checkbox-1" type="checkbox" value="value">
                                <label for="checkbox-1" class="mil-text-sm">Accept the terms and conditions of personal
                                    data.</label>
                            </div>

                        </div>
                        <div class="col-lg-12">

                            <a href="#" onclick="$('#cform').submit(); return false;" class="mil-button mil-up">Send
                                Now</a>

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

<?php get_footer(); ?>