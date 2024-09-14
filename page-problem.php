<?php get_header(); ?>

<div id="content">

    <!-- banner -->
    <section class="mil-banner mil-relative">
        <img src="<?php the_post_thumbnail_url(); ?>" class="mil-bg-img mil-scale" data-value-1=".4" data-value-2="1.4"
            alt="image">
        <div class="mil-overlay"></div>
        <div class="container">
            <div class="mil-background-grid mil-top-space"></div>
            <div class="mil-banner-content">
                <div class="row align-items-end justify-content-between">
                    <div class="col-xl-5">

                        <div class="mil-sm-center mil-mb-90">
                            <span class="mil-suptitle mil-light mil-upper mil-mb-60">Page Not Found</span>
                            <h1 class="mil-upper mil-light mil-mb-60">Error <span class="mil-marker mil-dark">404</span>
                            </h1>
                            <p class="mil-light-soft mil-mb-60">The page you are looking for does not exist, it may have
                                been moved or removed altogether.</p>
                            <a href="<?php echo site_url(''); ?>" class="mil-button">Back to Home</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->

</div>

<?php get_footer(); ?>