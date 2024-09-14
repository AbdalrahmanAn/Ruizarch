<?php get_header(); ?>

<div id="content">

    <!-- banner -->
    <section class="mil-banner mil-relative">
        <img src="img/photo/15.jpg" class="mil-bg-img mil-scale" data-value-1=".4" data-value-2="1.4" alt="image">
        <div class="mil-overlay"></div>
        <div class="container">
            <div class="mil-background-grid mil-top-space"></div>
            <div class="mil-banner-content">
                <div class="row align-items-end justify-content-between">
                    <div class="col-xl-5">

                        <div class="mil-sm-center mil-mb-90">
                            <span class="mil-suptitle mil-light mil-upper mil-mb-60"><span class="mil-accent">New</span>
                                Experience</span>
                            <h1 class="mil-upper mil-light mil-mb-60"><?php the_title(); ?></h1>
                            <p class="mil-light-soft"><?php the_content(); ?></p>
                        </div>

                    </div>
                    <div class="col-xl-5">

                        <p class="mil-light-soft mil-timer-text mil-mb-30">We’re Getting Ready to Launch in:</p>

                        <div id="timer" class="mil-timer mil-mb-90">
                            <div class="mil-timer-item">
                                <span id="days" class="mil-timer-number">00</span>
                                <h6 class="mil-text-xs mil-upper mil-light">days</h6>
                            </div>
                            <div class="mil-timer-item">
                                <span id="hours" class="mil-timer-number">00</span>
                                <h6 class="mil-text-xs mil-upper mil-light">hours</h6>
                            </div>
                            <div class="mil-timer-item">
                                <span id="minutes" class="mil-timer-number">00</span>
                                <h6 class="mil-text-xs mil-upper mil-light">minutes</h6>
                            </div>
                            <div class="mil-timer-item">
                                <span id="seconds" class="mil-timer-number">00</span>
                                <h6 class="mil-text-xs mil-upper mil-light">seconds</h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->

</div>

<?php get_footer(); ?>