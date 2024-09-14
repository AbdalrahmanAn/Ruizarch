<?php get_header(); ?>

<section class="mil-banner mil-banner-sm">
    <img src="<?php echo get_theme_file_uri('/img/photo/12.jpg') ?>" class="mil-bg-img mil-scale" data-value-1=".4"
        data-value-2="1.4" alt="image" style="object-position: top">
    <div class="mil-overlay"></div>
    <div class="container">
        <div class="mil-background-grid mil-top-space"></div>
        <div class="mil-banner-content mil-center">
            <div class="mil-mb-90">
                <h1 class="mil-light mil-upper mil-mb-30"><?php the_archive_title(); ?></h1>
                <ul class="mil-breadcrumbs mil-center">
                    <li><a href="<?php echo site_url() ?>">Home</a></li>
                    <li><a href="about.html">Team</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- banner end -->

<!-- portfolio -->
<section>
    <div class="container mil-p-120-120">

        <div class="mil-background-grid mil-softened"></div>
        <div class="mil-center">
            <p class="mil-text-lg mil-up mil-mb-90">Our Projects harness design and technology to create places where
                <br> people live, work, and heal.
            </p>
        </div>
        <!-- filter -->
        <div class="mil-filter mil-up mil-mb-90">
            <div class="mil-filter-links">
                <?php
                $terms = get_terms( array(
                    'taxonomy'   => 'project_categories',
                    'hide_empty' => false,
                ) );
                ?>
                <a href="#" data-filter="*" class="mil-current">All</a>
                <?php foreach($terms as $term) { ?>
                <a href="#" data-filter=".term_<?php echo $term->term_id ?>" class=""><?php echo $term->name ?></a>
                <?php } ?>

            </div>
        </div>
        <!-- filter end -->
        <div class="row">
            <div class="col-lg-12">

                <div class="mil-portfolio-grid mil-up">

                    <div class="grid-sizer"></div>
                    <?php
                $terms = get_terms( array('taxonomy'   => 'project_categories','hide_empty' => false,) );?>
                    <?php foreach($terms as $term) { ?>
                    <?php 
                    $args = array(
                        'post_type' => 'project',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'project_categories',
                                'field'    => 'slug',
                                'terms'    => [$term->slug ]
                            )
                        )
                    );
                    $postslist = get_posts($args); ?>
                    <?php foreach($postslist as $post) { ?>
                    <div class="mil-grid-item term_<?php echo $term->term_id ?>">

                        <a href="<?php the_permalink(); ?>" class="mil-portfolio-item-2 mil-long-item mil-mb-30">
                            <img src="<?php echo the_post_thumbnail_url($post->ID); ?>" alt="cover">
                            <div class="mil-project-descr">
                                <h3 class="mil-upper mil-mb-30"><?php echo $post->post_title ?></h3>
                                <div class="mil-link mil-upper">Start A Project <div class="mil-arrow mil-light"><img
                                            src="<?php echo get_theme_file_uri('/img/icons/1.svg') ?>" alt="arrow">
                                    </div>
                                </div>
                            </div>
                            <div class="mil-category"><?php echo get_the_category_list(', '); ?></div>
                        </a>

                    </div>
                    <?php } ?>
                    <?php } ?>
                </div>

            </div>
        </div>

    </div>
</section>


<?php get_footer(); ?>