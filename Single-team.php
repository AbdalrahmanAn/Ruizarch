<?php
get_header();
while(have_posts()){
    the_post(); ?>

<section class="mil-soft-bg mil-team-member-wrapper">
    <div class="container mil-p-0-120">
        <div class="mil-team-member-frame">
            <div class="mil-left-side">
                <div class="mil-member-portrait">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="portrait">
                </div>
            </div>
            <div class="mil-right-side">

                <div class="mil-p-30-30">
                    <?php if(get_field('agent_subtitle')) { ?>
                    <span
                        class="mil-suptitle mil-upper mil-up mil-mb-30"><?php echo get_field('agent_subtitle'); ?></span>
                    <?php } ?>
                    <h3 class="mil-upper mil-up mil-mb-30"><?php the_title(); ?></h3>
                    <?php if(get_field('location') or get_field('experience') or get_field('phone_number')) { ?>
                    <ul class="mil-list mil-dark mil-up mil-mb-30">
                        <?php if(get_field('location')) { ?>
                        <li><?php echo get_field('location'); ?></li>
                        <?php } ?>
                        <?php if(get_field('experience')) { ?>
                        <li><?php echo get_field('experience'); ?></li>
                        <?php } ?>
                        <?php if(get_field('phone_number')) { ?>
                        <li><?php echo get_field('phone_number'); ?></li>
                        <?php } ?>
                    </ul>
                    <?php } ?>

                    <?php if(get_field('title_agent_facebook') or get_field('title_agent_twitter') or get_field('title_agent_instagram') or get_field('title_agent_youtube')) { ?>
                    <ul class="mil-hori-list mil-dark mil-up mil-mb-30">
                        <?php if(get_field('title_agent_facebook')) { ?>
                        <li><a
                                href="<?php echo get_field('agent_facebook') ?>"><?php echo get_field('title_agent_facebook') ?></a>
                        </li>
                        <?php } ?>
                        <?php if(get_field('title_agent_twitter')) { ?>
                        <li><a
                                href="<?php echo get_field('agent_twitter') ?>"><?php echo get_field('title_agent_twitter') ?></a>
                        </li>
                        <?php } ?>
                        <?php if(get_field('title_agent_instagram')) { ?>
                        <li><a
                                href="<?php echo get_field('agent_instagram') ?>"><?php echo get_field('title_agent_instagram') ?></a>
                        </li>
                        <?php } ?>
                        <?php if(get_field('title_agent_youtube')) { ?>
                        <li><a
                                href="<?php echo get_field('agent_youtube') ?>"><?php echo get_field('title_agent_youtube') ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                    <div class="mil-divider-lg mil-up mil-mb-30"></div>
                    <p class="mil-up mil-text-sm mil-up mil-mb-30"><?php the_content(); ?></p>
                    <?php if(get_field('agent_signature')) { ?>
                    <h2 class="mil-font-2 mil-thin mil-up"><?php echo get_field('agent_signature'); ?></h2>
                    <?php } ?>
                </div>

            </div>
        </div>

    </div>
</section>

<?php }
get_footer();
?>