<?php get_header(); ?>

<section class="mil-banner mil-banner-sm">
    <img src="<?php echo get_theme_file_uri('/img/photo/12.jpg') ?>" class="mil-bg-img mil-scale" data-value-1=".4"
        data-value-2="1.4" alt="image" style="object-position: top">
    <div class="mil-overlay"></div>
    <div class="container">
        <div class="mil-background-grid mil-top-space"></div>
        <div class="mil-banner-content mil-center">
            <div class="mil-mb-90">
                <h1 class="mil-light mil-upper mil-mb-30">Help Center</h1>
                <ul class="mil-breadcrumbs mil-center">
                    <li><a href="<?php echo site_url(); ?>">Home</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container mil-p-120-60">
        <div class="mil-background-grid mil-softened"></div>

        <span class="mil-suptitle mil-upper mil-dark mil-up mil-mb-30">Have Some Questions?</span>
        <h2 class="mil-upper mil-up mil-mb-60">We Can Help!</h2>
        <div class="mil-mb-60">
            <?php while(have_posts()){
                        the_post(); ?>
            <div class="mil-accordion-group mil-dark mil-up">
                <div class="mil-accordion-menu">
                    <div class="mil-symbol mil-dark mil-thin mil-h3">
                        <div class="mil-plus">+</div>
                        <div class="mil-minus">-</div>
                    </div>
                    <h6 class="mil-upper"><?php the_title(); ?></h6>
                </div>
                <div class="mil-accordion-content">
                    <p class="mil-dark-soft mil-mb-30"><a href="<?php the_permalink(); ?>"><?php the_content(); ?></a>
                    </p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>