<?php get_header();
while(have_posts()){
    the_post(); ?>

<section class="mil-banner mil-banner-sm">
    <img src="<?php the_post_thumbnail_url(''); ?>" class="mil-bg-img mil-scale" data-value-1=".4" data-value-2="1.4"
        alt="image" style="object-position: top">
    <div class="mil-overlay"></div>
    <div class="container">
        <div class="mil-background-grid mil-top-space"></div>
        <div class="mil-banner-content mil-center">
            <div class="mil-mb-90">
                <h1 class="mil-light mil-upper mil-mb-30"><?php the_title(); ?></h1>
                <ul class="mil-breadcrumbs mil-center">
                    <li><a href="<?php echo site_url('') ?>">Home</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('helpcenter'); ?>">Help Center</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container mil-p-120-60">
        <div class="mil-background-grid mil-softened"></div>
        <div class="row justify-content-between">
            <div class="col-lg-8">


                <h2 class="mil-upper mil-up mil-mb-60">Description</h2>
                <p class="mil-up mil-mb-30"><?php the_content() ?></p>

            </div>
        </div>
    </div>
</section>



<?php }
get_footer();
?>