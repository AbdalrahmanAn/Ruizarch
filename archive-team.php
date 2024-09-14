<?php get_header(); ?>

<section class="mil-banner mil-banner-sm">
    <img src="img/photo/12.jpg" class="mil-bg-img mil-scale" data-value-1=".4" data-value-2="1.4" alt="image"
        style="object-position: top">
    <div class="mil-overlay"></div>
    <div class="container">
        <div class="mil-background-grid mil-top-space"></div>
        <div class="mil-banner-content mil-center">
            <div class="mil-mb-90">
                <h1 class="mil-light mil-upper mil-mb-30"><?php  the_archive_title(); ?></h1>
                <ul class="mil-breadcrumbs mil-center">
                    <li><a href="<?php echo site_url(''); ?>">Home</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- banner end -->

<!-- team -->
<section>
    <div class="container mil-p-120-60">
        <div class="mil-background-grid mil-softened"></div>
        <div class="mil-center">
            <p class="mil-text-lg mil-up mil-mb-90">It is a long established fact that a reader will be distracted
                <br>by the readable content.
            </p>
        </div>
        <div class="row">
            <?php while(have_posts()){
            the_post(); ?>
            <div class="col-sm-6 col-lg-3 mil-up">
                <a href="<?php the_permalink(); ?>" class="mil-team-member">
                    <div class="mil-avatar mil-mb-30">
                        <img src="<?php the_post_thumbnail_url() ?>" alt="Team Member">
                    </div>
                    <h6 class="mil-upper mil-mb-10"><?php the_title(); ?></h6>
                    <p class="mil-dark-soft"><?php echo get_field('agent_subtitle') ?></p>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- team end -->

<!-- pagination -->
<div class="container">
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
<!-- pagination end -->

<!-- recruit -->
<section>
    <div class="container mil-p-120-30">
        <div class="mil-background-grid mil-softened"></div>
        <div class="row justify-content-between align-items-center flex-sm-row-reverse">
            <div class="col-lg-5">

                <div class="mil-mb-90">
                    <span class="mil-suptitle mil-upper mil-up mil-mb-30">Your Future</span>
                    <h2 class="mil-upper mil-up mil-mb-30">Interested in Working Together?</h2>
                    <p class="mil-up mil-mb-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse ultrices gravida.</p>
                    <a href="contact.html" class="mil-button mil-upper mil-up">Sign up now</a>
                </div>

            </div>

            <?php 
            $agentPost = new wp_query(array(
                'post_type' => 'team',
                'posts_per_page' => 1,
            ));
            while($agentPost->have_posts()){
                $agentPost->the_post(); ?>
            <div class="col-lg-6">

                <div class="mil-illustration mil-up mil-mb-90">
                    <div class="mil-image-frame">
                        <img src="<?php the_post_thumbnail_url() ?>" alt="image" class="mil-scale" data-value-1="1"
                            data-value-2="1.3">
                    </div>
                    <div class="mil-about-counter mil-center">
                        <div class="mil-avatar mil-mb-30">
                            <img src="<?php the_post_thumbnail_url() ?>" alt="face">
                        </div>
                        <h5 class="mil-upper mil-mb-10"><?php the_title(); ?></h5>
                        <p class="mil-text-sm mil-dark-soft"><?php echo get_field('agent_subtitle') ?></p>
                    </div>
                </div>

            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>