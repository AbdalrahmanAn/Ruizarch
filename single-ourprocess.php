<?php get_header(); 
while(have_posts()){
    the_post(); ?>

<section class="mil-soft-bg mil-team-member-wrapper">
    <div class="container mil-p-0-120">
        <div class="mil-team-member-frame">
            <div class="mil-p-30-30">
                <h3 class="mil-upper mil-up mil-mb-30"><?php the_title(); ?></h3>
                <div class="mil-divider-lg mil-up mil-mb-30"></div>
                <p class="mil-up mil-text-sm mil-up mil-mb-30"><?php the_content(); ?></p>
            </div>
        </div>
    </div>
</section>


<?php } 
get_footer(); ?>