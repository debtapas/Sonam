    <footer class="footer-consulting footer-dark bg-extra-dark-gray position-relative">
        <div class="footer-top position-relative footer-padding">
            <div class="footer-logo-m">
            <?php
                if(get_field('footer_logo', 'option')){?>
                    <img src="<?php the_field('footer_logo', 'option')?>" alt="Sonam Quartz" title="Sonam Quartz" />

                <?php }else{ ?>
                    <img src="<?php echo get_template_directory_uri(). '/images/logo.png'?>" alt="Sonam Quartz" title="Sonam Quartz" />
            <?php } ?> 
                
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-3 col-sm-6 order-sm-1 order-lg-0 last-paragraph-no-margin md-margin-40px-bottom xs-margin-25px-bottom text-center wow animate__flipInY"
                        data-wow-delay="0.1s">
                        <p class="footer-contact-info">
                            <i class="fa-solid fa-phone-volume"></i><br />
                            LET'S TALK<br />
                            <a href="tel:+919978052717"><span>+91 99780 52717</span></a>
                        </p>
                        <p class="footer-contact-info">
                            <i class="fa-regular fa-envelope"></i><br />
                            EMAIL<br />
                            <a href="mailto:info@sonamquartz.com"><span>info@sonamquartz.com</span></a>
                        </p>
                    </div>
                    <div class="col-12 col-lg-2 offset-sm-1 col-sm-5 order-sm-2 order-lg-0 md-margin-40px-bottom xs-margin-25px-bottom wow animate__flipInY"
                        data-wow-delay="0.1s">
                        <span
                            class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">QUICK LINKS</span>
                    <?php
                        wp_nav_menu( array(
                            'menu_class' => 'footer-link',
                            'menu'       => 'Quick Links'
                            )
                        );
                    ?>
                        <!-- <ul class="footer-link">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="corporate-gifing.html">Corporate Gifting</a></li>
                            <li><a href="investor.html">Investors</a></li>
                            <li><a href="news-event.html">News & Events</a></li>
                            <li><a href="career.html">Career</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul> -->
                    </div>
                    <div class="col-12 col-lg-2 col-sm-5 offset-sm-1 offset-lg-0 order-sm-4 order-lg-0 xs-margin-25px-bottom wow animate__flipInY"
                        data-wow-delay="0.1s">
                        <span
                            class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">PRODUCTS</span>
                    <?php
                        wp_nav_menu( array(
                            'menu_class' => 'footer-link',
                            'menu'       => 'products'
                            )
                        );
                    ?>
                        <!-- <ul class="footer-link">
                            <li><a href="products.html">Alaram Time Piece</a></li>
                            <li><a href="products.html">Classy Picture & God Dial Clock</a></li>
                            <li><a href="products.html">Designer Clock</a></li>
                            <li><a href="products.html">LED Digital Clock</a></li>
                            <li><a href="products.html">Musical Clock</a></li>
                            <li><a href="products.html">Office Clock</a></li>
                            <li><a href="products.html">Pendulum Clock</a></li>
                            <li><a href="products.html">Regular Clock</a></li>
                            <li><a href="products.html">VIEW ALL</a></li>
                        </ul> -->
                    </div>
                    <div class="col-12 col-xl-3 offset-xl-1 col-lg-4 col-sm-6 order-sm-3 order-lg-0 wow animate__flipInY"
                        data-wow-delay="0.1s">
                        <span
                            class="text-uppercase alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Subscribe
                            to newsletter
                        </span>
                        <p class="footer-color">Enter your email address for receiving valuable newsletters.</p>
                        <form action="https://lithohtml.themezaa.com/email-templates/subscribe-newsletter.php"
                            method="post">
                            <div class="newsletter-style-03 position-relative">
                                <input class="small-input border-color-medium-gray rounded m-0 required" name="email"
                                    placeholder="Enter your email address" type="email">
                                <input type="hidden" name="redirect" value="">
                                <button class="btn btn-primary" type="submit"><i
                                        class="feather icon-feather-mail icon-extra-small m-0"></i></button>
                                <div class="form-results rounded position-absolute d-none"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom padding-15px-tb border-top border-width-1px border-color-white-transparent">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-5 col-md-12 text-center text-lg-start sm-margin-20px-bottom">
                        <p class="mb-0 mt-1">© 2023 Sonam Clock Limited. | <a href="privacy-policy.html">Privacy Policy</a>
                        </p>
                    </div>
                    <div class="col-12 col-lg-3 col-md-12 text-center last-paragraph-no-margin sm-margin-20px-bottom">
                        <div class="social-icon-style-12">
                   
                            <?php if( have_rows('social_links', 'option') ): ?>
                                <ul class="extra-small-icon light">
                                <?php while( have_rows('social_links', 'option') ): the_row(); 
                                    $social_m = get_sub_field('social_m', 'option');
                                    $urls = get_sub_field('urls', 'option');
                                    ?>
                                    <li><a class="facebook" href="<?php echo $urls;?>" target="_blank"><i
                                    class="fa-brands fa-<?php echo $social_m;?>"></i></a></li>
                                    
                                <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>


                    <!-- <ul class="extra-small-icon light">
                        <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i
                                    class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/" target="_blank"><i
                                    class="fab fa-instagram"></i></a></li>
                        <li><a href="http://www.youtube.com/" target="_blank"><i
                                    class="fa-brands fa-youtube"></i></a>
                        </li>
                    </ul> -->
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-12 d-inline-block text-center text-lg-end">
                        <a href="<?php the_field('link', 'option'); ?>" target="_blank">
                            <p class="mb-0 mt-1"><img src="<?php echo get_template_directory_uri(). '/images/wm.jpg'?>" class="me-2" />
                                <?php the_field('copyright', 'option'); ?></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>

	<?php wp_footer(); ?>
	</body>
</html>