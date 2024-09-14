<footer class="mil-relative">
    <img src="img/photo/4.jpg" class="mil-bg-img mil-parallax" alt="image" style="object-position: top;"
        data-value-1="-25%" data-value-2="23%">
    <div class="mil-overlay"></div>
    <div class="container mil-p-120-90">
        <div class="mil-background-grid"></div>
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">

                        <div class="mil-footer-navigation mil-up mil-mb-90">
                            <nav>
                                <ul>
                                    <li <?php if(is_page('about-us')) echo 'class="mil-active"' ?>>
                                        <a href="<?php echo site_url('/about-us'); ?>">About</a>
                                    </li>
                                    <li <?php if(get_post_type() == 'services') echo 'class="mil-active"' ?>>
                                        <a href="<?php echo get_post_type_archive_link('services') ?>">Services</a>
                                    </li>
                                    <li <?php if(get_post_type() == 'project') echo 'class="mil-active"' ?>>
                                        <a href="<?php echo get_post_type_archive_link('project') ?>">Projects</a>
                                    </li>
                                    <li <?php if(get_post_type() == 'post') echo 'class="mil-active"' ?>>
                                        <a href="<?php echo site_url('/blog'); ?>">Blog</a>
                                    </li>
                                    <li <?php if(is_page('contact-us')) echo 'class="mil-active"' ?>>
                                        <a href="<?php echo site_url('/contact-us') ?>">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">

                        <span class="mil-suptitle mil-light mil-upper mil-up mil-mb-30">Wills Point</span>
                        <p class="mil-text-sm mil-up mil-light-soft mil-mb-30">8619 S Wolcott Avenue <br>Floor 202
                            <br>Chicago, IL 60620 <br>(773) 238 - 7162
                        </p>

                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">

                        <span class="mil-suptitle mil-light mil-upper mil-up mil-mb-30">Chicago</span>
                        <p class="mil-text-sm mil-up mil-light-soft mil-mb-30">10233 Gaillard Lake Est <br>Suite 420
                            <br>Houston, TX 75169 <br>(903) 560 - 9830
                        </p>

                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">

                        <span class="mil-suptitle mil-light mil-upper mil-up mil-mb-30">Harriman</span>
                        <p class="mil-text-sm mil-up mil-light-soft mil-mb-30">5 Harriman Woods Dr <br>Suite 702 <br>New
                            York, NY 10926 <br>(570) 253 - 2853</p>

                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">

                        <span class="mil-suptitle mil-light mil-upper mil-up mil-mb-30">Largo</span>
                        <p class="mil-text-sm mil-up mil-light-soft mil-mb-30">1071 Donegan Rd <br>Suite 1300
                            <br>Florida, FL 33771 <br>(727) 223 - 5371
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">

                <a href="<?php echo site_url('') ?>" class="mil-footer-logo mil-up mil-mb-30">
                    <img src="<?php echo get_theme_file_uri('/img/logo/logo-light.png') ?>" alt="Logo"
                        style="width: 130px">
                </a>

            </div>

        </div>
    </div>
    <div class="container-fluid">

        <div class="mil-footer-bottom">
            <p class="mil-light-soft mil-mb-15">© 2023. All rights reserved.</p>
            <ul class="mil-light-soft mil-mb-15">
                <li><a href="#.">Facebook</a></li>
                <li><a href="#.">Twitter</a></li>
                <li><a href="#.">Instagram</a></li>
                <li><a href="#.">Youtube</a></li>
            </ul>
            <ul class="mil-light-soft mil-mb-15">
                <li><a href="#.">Our App</a></li>
                <li><a href="#.">Sitemap</a></li>
            </ul>
        </div>

    </div>
</footer>


<?php wp_footer();?>
</body>

</html>