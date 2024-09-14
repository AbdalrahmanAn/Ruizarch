<?php get_header(); ?>

<div id="content">

    <!-- banner -->
    <section class="mil-banner mil-banner-sm">
        <img src="<?php echo get_theme_file_uri('/img/photo/12.jpg') ?>" class="mil-bg-img mil-scale" data-value-1=".4"
            data-value-2="1.4" alt="image" style="object-position: top">
        <div class="mil-overlay"></div>
        <div class="container">
            <div class="mil-background-grid mil-top-space"></div>
            <div class="mil-banner-content mil-center">
                <div class="mil-mb-90">
                    <h1 class="mil-light mil-upper mil-mb-30">Our Services</h1>
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
        <div class="container mil-p-120-90">
            <div class="mil-background-grid mil-softened"></div>
            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <div class="mil-center mil-mb-120">
                        <span class="mil-suptitle mil-upper mil-up mil-mb-30">Modern concept</span>
                        <p class="mil-text-lg mil-up">Ruizarch we are a leader in architecture and design with a
                            user-centric approach and deep technical expertise. We are consistently ranked as one of the
                            top 10 architecture firms in the world, and our core disciplines are supported by a wide
                            range of complementary services, all of which have a singular goal: to build environments
                            where our clients thrive.</p>
                    </div>

                </div>
            </div>

            <div class="mil-center mil-mb-90">
                <span class="mil-suptitle mil-upper mil-up mil-mb-30">On This We Work</span>
                <h2 class="mil-upper mil-up">Exclusive Services</h2>
            </div>

            <div class="row">
                <?php while(have_posts()){
                    the_post(); ?>
                <div class="col-lg-4 mil-up">

                    <a href="<?php the_permalink(); ?>" class="mil-service-card mil-mb-30">
                        <div class="mil-center">
                            <?php if(get_field('service_icon')) {?>
                            <div class="mil-icon mil-icon-lg mil-mb-30">
                                <img src="<?php echo get_theme_file_uri(get_field('service_icon')) ?>" alt="icon">
                            </div> <?php }?>
                            <h4 class="mil-upper mil-mb-20"><?php the_title(); ?></h4>
                            <div class="mil-divider-sm mil-mb-20"></div>
                            <p class="mil-service-text"><?php echo wp_trim_words(get_the_content(), 15) ?></p>
                            <div class="mil-go-buton mil-icon mil-icon-lg mil-icon-accent-bg">
                                <img src="<?php echo get_theme_file_uri(get_field('service_link_icon'));?>" alt="icon">
                            </div>
                        </div>
                    </a>

                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- services end -->

    <!-- vision -->
    <section>
        <div class="container mil-p-0-120">
            <div class="mil-background-grid mil-softened"></div>
            <div class="mil-center mil-mb-120">
                <span class="mil-suptitle mil-upper mil-up mil-mb-30">Good Vision</span>
                <h2 class="mil-upper mil-up">Our Soul</h2>
            </div>
            <div class="row mil-mb-30">
                <?php $blogPosts = new wp_query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 3
                ));
                while($blogPosts->have_posts()){
                    $blogPosts->the_post(); ?>
                <div class="col-lg-4 mil-up">

                    <div class="mil-icon-box mil-center mil-mb-60">
                        <div class="mil-icon mil-icon-xl mil-icon-border mil-mb-30">
                            <img src="<?php echo get_theme_file_uri(get_field('posts_icons')) ?>" alt="icon">
                        </div>
                        <h4 class="mil-upper mil-mb-30"><?php the_title() ?></h4>
                        <p><?php the_content(); ?></p>
                    </div>

                </div>
                <?php }
                wp_reset_postdata();
                ?>
            </div>
            <div class="row justify-content-center mil-center">
                <div class="mil-center mil-up">
                    <a href="<?php echo site_url('blog') ?>" class="mil-link mil-upper">See All <span
                            class="mil-arrow"><img
                                src="<?php echo get_theme_file_uri(get_field('service_link_icon')) ?>"
                                alt="arrow"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- vision end -->

    <!-- features -->
    <section class="mil-soft-bg mil-relative">
        <img src="<?php echo get_theme_file_uri('/img/other/bg.svg') ?>" class="mil-bg-img" alt="image">
        <div class="container mil-p-120-60">
            <div class="mil-background-grid mil-softened"></div>
            <div class="row">
                <div class="col-lg-4">

                    <div class="div mil-mb-60">
                        <h3 class="mil-upper mil-up mil-mb-30">Perfect <br>Planning</h3>
                        <div class="mil-divider-sm mil-up mil-mb-30"></div>
                        <p class="mil-shortened mil-up mil-mb-30">Lorem ipsum dolor sit amet, adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <ul class="mil-icon-list mil-mb-60">
                            <li class="mil-up"><img src="<?php echo get_theme_file_uri('/img/icons/11.svg') ?>"
                                    alt="icon">3D Modeling</li>
                            <li class="mil-up"><img src="<?php echo get_theme_file_uri('/img/icons/11.svg') ?>"
                                    alt="icon">Programs to Map Territory</li>
                            <li class="mil-up"><img src="<?php echo get_theme_file_uri('/img/icons/11.svg') ?>"
                                    alt="icon">Robotics and AI Technology</li>
                            <li class="mil-up"><img src="<?php echo get_theme_file_uri('/img/icons/11.svg') ?>"
                                    alt="icon">Morphological Thinking</li>
                            <li class="mil-up"><img src="<?php echo get_theme_file_uri('/img/icons/11.svg') ?>"
                                    alt="icon">Material Simulation</li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-4">

                    <div class="div mil-mb-60">
                        <h3 class="mil-upper mil-up mil-mb-30">Professional <br>Design</h3>
                        <div class="mil-divider-sm mil-up mil-mb-30"></div>
                        <p class="mil-shortened mil-up mil-mb-30">Lorem ipsum dolor sit amet, consectetur elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <ul class="mil-icon-list mil-mb-60">
                            <li class="mil-up"><img src="<?php echo get_theme_file_uri('/img/icons/11.svg') ?>"
                                    alt="icon">3D Modeling</li>
                            <li class="mil-up"><img src="<?php echo get_theme_file_uri('/img/icons/11.svg') ?>"
                                    alt="icon">Programs to Map Territory</li>
                            <li class="mil-up"><img src="<?php echo get_theme_file_uri('/img/icons/11.svg') ?>"
                                    alt="icon">Robotics and AI Technology</li>
                            <li class="mil-up"><img src="<?php echo get_theme_file_uri('/img/icons/11.svg') ?>"
                                    alt="icon">Morphological Thinking</li>
                            <li class="mil-up"><img src="<?php echo get_theme_file_uri('/img/icons/11.svg') ?>"
                                    alt="icon">Material Simulation</li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-4">

                    <div class="div mil-mb-60">
                        <h3 class="mil-upper mil-up mil-mb-30">Best Experts <br>Team</h3>
                        <div class="mil-divider-sm mil-up mil-mb-30"></div>
                        <p class="mil-shortened mil-up mil-mb-30">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed tempor incididunt ut labore et dolore magna aliqua.</p>
                        <ul class="mil-icon-list mil-mb-60">
                            <li class="mil-up"><img src="<?php echo get_theme_file_uri('/img/icons/11.svg') ?>"
                                    alt="icon">3D Modeling</li>
                            <li class="mil-up"><img src="<?php echo get_theme_file_uri('/img/icons/11.svg') ?>"
                                    alt="icon">Programs to Map Territory</li>
                            <li class="mil-up"><img src="<?php echo get_theme_file_uri('/img/icons/11.svg') ?>"
                                    alt="icon">Robotics and AI Technology</li>
                            <li class="mil-up"><img src="<?php echo get_theme_file_uri('/img/icons/11.svg') ?>"
                                    alt="icon">Morphological Thinking</li>
                            <li class="mil-up"><img src="<?php echo get_theme_file_uri('/img/icons/11.svg') ?>"
                                    alt="icon">Material Simulation</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- features end -->

    <!-- about -->
    <section>
        <div class="container mil-p-120-30">
            <div class="mil-background-grid mil-softened"></div>
            <div class="row justify-content-between align-items-center flex-sm-row-reverse">
                <div class="col-lg-5">

                    <div class="mil-mb-90">
                        <span class="mil-suptitle mil-upper mil-up mil-mb-30">Our Experts</span>
                        <h2 class="mil-upper mil-up mil-mb-30">years of experience</h2>
                        <p class="mil-up mil-mb-40">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse ultrices
                            gravida.</p>
                        <ul class="mil-icon-list mil-mb-60">
                            <li class="mil-up"><img src="<?php echo get_theme_file_uri('/img/icons/11.svg') ?>"
                                    alt="icon">1250 Projects Carried out Only in
                                the EE.UU.</li>
                            <li class="mil-up"><img src="<?php echo get_theme_file_uri('/img/icons/11.svg') ?>"
                                    alt="icon">A Great Work Team Globally</li>
                            <li class="mil-up"><img src="<?php echo get_theme_file_uri('/img/icons/11.svg') ?>"
                                    alt="icon">+ 940 Projects Carried Out in the
                                World</li>
                            <li class="mil-up"><img src="<?php echo get_theme_file_uri('/img/icons/11.svg') ?>"
                                    alt="icon">+ 100 Billion Invested in Projects
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-6">

                    <div class="mil-illustration mil-up mil-mb-90">
                        <div class="mil-image-frame">
                            <img src="<?php echo get_theme_file_uri('/img/photo/14.jpg') ?>" alt="image"
                                class="mil-scale" data-value-1="1" data-value-2="1.3">
                        </div>
                        <div class="mil-about-counter mil-center">
                            <div class="mil-avatar mil-mb-30">
                                <img src="<?php echo get_theme_file_uri('/img/faces/1.jpg') ?>" alt="face">
                            </div>
                            <h5 class="mil-upper mil-mb-10">Joe French</h5>
                            <p class="mil-text-sm mil-dark-soft">Project Agent</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- about end -->

    <!-- call to action -->
    <section>
        <div class="container mil-p-0-120">
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <span class="mil-suptitle mil-upper mil-up mil-mb-30">Your Idea</span>
                    <h2 class="mil-upper mil-up">Interested in Our <span class="mil-marker">Work?</span></h2>
                </div>
                <div class="col-lg-4 mil-mt-suptitle-offset">
                    <p class="mil-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="col-lg-3 mil-mt-suptitle-offset">
                    <div class="mil-adaptive-right mil-up">
                        <a href="contact.html" class="mil-button">Let's Talk Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- call to action end -->

</div>

<?php get_footer(); ?>