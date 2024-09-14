<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div class="mil-progress-track">
            <div class="mil-progress"></div>
        </div>

        <div class="mil-top-panel">
            <div class="container-fluid">
                <div class="mil-top-panel-content">
                    <a href="<?php echo site_url(); ?>" class="mil-logo">
                        <img src="<?php echo get_theme_file_uri('/img/logo/logo-light.png') ?>" alt="Logo"
                            style="width: 130px;">
                    </a>
                    <div class="mil-navigation">
                        <nav>
                            <ul>
                                <li class="mil-has-children <?php if(is_page('home')) echo 'mil-active' ?>">
                                    <a href="<?php echo site_url(); ?>">Home</a>
                                </li>
                                <li
                                    class="mil-has-children <?php if(get_post_type() == 'services') echo 'mil-active' ?>">
                                    <a href="<?php echo get_post_type_archive_link('services') ?>">Services</a>
                                </li>
                                <li
                                    class="mil-has-children <?php if(get_post_type() == 'project') echo 'mil-active' ?>">
                                    <a href="<?php echo get_post_type_archive_link('project') ?>">Projects</a>
                                </li>
                                <li class="mil-has-children <?php if(get_post_type() == 'post') echo 'mil-active' ?>">
                                    <a href="<?php echo site_url('/blog'); ?>">Blog</a>
                                </li>
                                <li <?php if(is_page('contact-us')) echo "class='mil-active'" ?>><a
                                        href="<?php echo site_url('/contact-us') ?>">Contact Us</a></li>
                                <li
                                    class="mil-has-children <?php if(is_page('about-us') or get_post_type() == 'team' or is_page('coming-soon') or is_page('problem')) echo 'mil-active' ?> ">
                                    <a href="#.">Other</a>
                                    <ul>
                                        <li><a href="<?php echo site_url('/about-us'); ?>">About</a></li>
                                        <li><a href="<?php echo get_post_type_archive_link('team') ?>">Team</a></li>
                                        <li><a href="<?php  echo site_url('/coming-soon'); ?>">Coming Soon</a></li>
                                        <li><a href="<?php  echo site_url('/problem'); ?>">404</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!-- right buttons -->
                    <div class="mil-top-panel-buttons">
                        <a href="<?php echo site_url('/contact-us') ?>" class="mil-button mil-sm">Start A Project</a>
                        <div class="mil-menu-btn">
                            <span></span>
                        </div>
                    </div>
                    <!-- right buttons end -->

                </div>

            </div>
        </div>