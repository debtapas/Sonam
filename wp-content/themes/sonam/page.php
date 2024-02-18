<?php get_header(); ?>

 <section class="p-0 sm-border-bottom border-color-medium-gray mobile-height">
        <div class="container-fluid position-relative">
            <div class="row">
                <div class="swiper-container full-screen p-0 md-landscape-h-600px white-move"
                    data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".swiper-pagination", "clickable": true }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "autoplay": { "delay": 5500, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                    <div class="swiper-wrapper">

                    <?php if( have_rows('slider_images', 'option') ): 
                        while( have_rows('slider_images', 'option') ): the_row(); 
                        $slide_img     = get_sub_field('slide_img', 'option');
                        $slide_heading = get_sub_field('slide_heading', 'option'); ?>
                        <div class="swiper-slide position-relative cover-background"
                            style="background-image:url('<?php echo $slide_img; ?>');">
                            <div class="overlay-slider d-block d-lg-none d-md-block"></div>
                            <div class="container center-slider">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h1 class="slider-text wow animate__fadeInLeft" data-wow-delay="0.2s"><?php echo $slide_heading; ?></h1>
                                        <div class="slider-btn z-index-9 position-relative">
                                            <a href="#" title="DESIGNER CLOCKS"
                                                class="btn btn-primary btn-lg wow animate__flipInX"
                                                data-wow-delay="0.2s">DESIGNER CLOCKS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                 
                    <?php endwhile;
                    endif; ?>

                        <!-- <div class="swiper-slide position-relative cover-background"
                            style="background-image:url('<?php //echo get_template_directory_uri(). '/images/banner1.jpg'?>');">
                            <div class="overlay-slider d-block d-lg-none d-md-block"></div>
                            <div class="container center-slider">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h1 class="slider-text wow animate__fadeInLeft" data-wow-delay="0.2s">Time
                                            flies, but our designer clocks soar in style!</h1>
                                        <div class="slider-btn z-index-9 position-relative">
                                            <a href="#" title="DESIGNER CLOCKS"
                                                class="btn btn-primary btn-lg wow animate__flipInX"
                                                data-wow-delay="0.2s">DESIGNER CLOCKS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide position-relative cover-background"
                            style="background-image:url('<?php //echo get_template_directory_uri(). '/images/banner1.jpg'?>');">
                            <div class="overlay-slider d-block d-lg-none d-md-block"></div>
                            <div class="container center-slider">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h1 class="slider-text wow animate__fadeInLeft" data-wow-delay="0.2s">Time
                                            flies, but our designer clocks soar in style!</h1>
                                        <div class="slider-btn z-index-9 position-relative">
                                            <a href="#" title="DESIGNER CLOCKS"
                                                class="btn btn-primary btn-lg wow animate__flipInX"
                                                data-wow-delay="0.2s">DESIGNER CLOCKS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide position-relative cover-background"
                            style="background-image:url('<?php //echo get_template_directory_uri(). '/images/banner1.jpg'?>');">
                            <div class="overlay-slider d-block d-lg-none d-md-block"></div>
                            <div class="container center-slider">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h1 class="slider-text wow animate__fadeInLeft" data-wow-delay="0.2s">Time
                                            flies, but our designer clocks soar in style!</h1>
                                        <div class="slider-btn z-index-9 position-relative">
                                            <a href="#" title="DESIGNER CLOCKS"
                                                class="btn btn-primary btn-lg wow animate__flipInX"
                                                data-wow-delay="0.2s">DESIGNER CLOCKS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                    </div>
                    <!-- start slider arrow -->
                    <div class="swiper-button-previous-nav swiper-button-prev slider-navigation-style-05"><i
                            class="line-icon-Arrow-OutLeft"></i></div>
                    <div class="swiper-button-next-nav swiper-button-next slider-navigation-style-05"><i
                            class="line-icon-Arrow-OutRight"></i></div>
                    <!-- end slider arrow -->
                    <!-- start slider pagination -->
                    <div class="swiper-pagination swiper-light-pagination swiper-pagination-dot" style="padding-bottom: 30px !important;">
                    </div>
                    <!-- end slider pagination -->
                </div>
            </div>
        </div>
    </section>
<?php

?>
    <section class="overflow-visible cover-background ">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="col-12 col-lg-6 col-md-12 position-relative margin-twenty-five-top lg-margin-30px-top md-margin-9-rem-bottom sm-margin-9-rem-bottom wow animate__fadeInLeft" data-wow-delay="0.2s">
                    <div class="position-absolute left-15px bottom-0px w-65 lg-bottom-minus-50px xs-bottom-minus-80px" data-parallax-layout-ratio="1.1">
                        <?php
                        	if(get_field('left_first_img')){?>
								<img src="<?php the_field('left_first_img')?>" alt="about 1" />
							<?php }else{ ?>
								<img src="<?php echo get_template_directory_uri(). '/images/about-1.jpg'?>" alt="about 1" />
							<?php }
                        ?>
                        
                    </div>
                    <div class="w-50 overflow-hidden position-relative md-w-50 float-end">
                    	<?php
                        	if(get_field('left_second_img')){?>
								<img src="<?php the_field('left_second_img')?>" alt="about 2" />
							<?php }else{ ?>
								<img src="<?php echo get_template_directory_uri(). '/images/about-2.jpg'?>" alt="about 2" />
							<?php }
                        ?>
                    </div>
                </div>

                <div class="col-12 col-lg-5 offset-lg-1 col-md-12 wow animate__fadeInRight" data-wow-delay="0.2s">
                    <div class="alt-font font-weight-500 margin-30px-bottom d-flex"><span
                            class="flex-shrink-0 w-30px h-1px bg-yellow-ochre-light opacity-7 align-self-center margin-20px-right"></span>
                        <div class="flex-grow-1"><span class="text-yellow-ochre-light text-uppercase">
                        <?php
                        	if(get_field('heading_top')){
                        		the_field('heading_top');
                        	}else{
								echo "Welcome to Sonam Clock Limited";
							}
                        ?>
                    </span></div>
                    </div>
                    <h5 class="section-title">
                    	<?php
                        	if(get_field('heading_about')){
                        		the_field('heading_about');
                        	}else{
								echo "India’s one of the largest customized clock producing company";
							}
                        ?>                        
                    </h5>
                    <p class="w-100">
                    	<?php
                        	if(get_field('about')){
                        		the_field('about');
                        	}else{
								echo "Sonam Clock Limited is first Ever company which have registered unpredictable growth in horological industry in the sector of corporate gifting. Company is well equipped with  the world class technology and state-of-the-arts equipment which are strategically utilized by highly professional management team & the workforce";
							}
                        ?>
                    </p>
                    <a class="custom-link" href="#">
                        Know More about us
                        <i class="line-icon-Arrow-OutRight"></i>
                    </a>
                    <div class="row padding-50px-top z-index-9">
                        <div class="offset-1 col-5 offset-md-0 col-md-4">
                        <?php
                            if(get_field('about_logos1')){ ?>
                                <img src="<?php the_field('about_logos1');?>" class="img-fluid" />
                                
                            <?php }else{ ?>
                                <img src="<?php echo get_template_directory_uri(). '/images/abt-logo-1.png'?>" class="img-fluid" />
                        <?php } ?>                            
                        </div>
                        <div class="col-5 col-md-4">
                        <?php
                            if(get_field('about_logos2')){ ?>                                
                                <img src="<?php the_field('about_logos2');?>" class="img-fluid" />
                                
                            <?php }else{ ?>
                                <img src="<?php echo get_template_directory_uri(). '/images/abt-logo-2.png'?>" class="img-fluid" />
                        <?php } ?>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="big-section overflow-visible py-mob-0 cover-background position-relative mob-pb-0">
        <div class="counter-div" style="padding-top: 100px;">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-3 wow animate__fadeInLeft" data-wow-delay="0.1s">
                        <div class="statistics">
                            <h4 class="vertical-counter d-inline-flex" data-to="200000"></h4><span
                                class="text-extra-dark-gray title-extra-small font-weight-700 margin-5px-left">+</span>
                            <!-- <h4 class="vertical-counter d-inline-flex" data-to="200000"></h4> -->
                            <p>Sq. Ft. of production area</p>
                            <img src="<?php echo get_template_directory_uri(). '/images/icon1.png'?>" alt="Sq. Ft. of production area" />
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 wow animate__fadeInUp" data-wow-delay="0.1s">
                        <div class="statistics">
                            <h4 class="vertical-counter d-inline-flex" data-to="25"></h4><span
                                class="text-extra-dark-gray title-extra-small font-weight-700 margin-5px-left">+</span>
                            <p>Countries covered</p>
                            <img src="<?php echo get_template_directory_uri(). '/images/icon2.png'?>" alt="Countries covered" />
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 wow animate__fadeInDown" data-wow-delay="0.1s">
                        <div class="statistics">
                            <h4 class="vertical-counter d-inline-flex" data-to="150"></h4><span
                                class="text-extra-dark-gray title-extra-small font-weight-700 margin-5px-left">+</span>
                            <p>Distributors</p>
                            <img src="<?php echo get_template_directory_uri(). '/images/icon3.png'?>" alt="Distributors" />
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 wow animate__fadeInRight" data-wow-delay="0.1s">
                        <div class="statistics">
                            <h4 class="vertical-counter d-inline-flex" data-to="3500"></h4><span
                                class="text-extra-dark-gray title-extra-small font-weight-700 margin-5px-left">+</span>
                            <p>Retailers</p>
                            <img src="<?php echo get_template_directory_uri(). '/images/icon4.png'?>" alt="Retailers" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="overflow-visible cover-background video-bg text-center">
        <div class="container">
            <a title="play" href="<?php the_field('youtube_url');?>"
                class="popup-youtube wow animate__fadeInRight" data-wow-delay="0.3s">
                <div class="play-btn">
                    <i class="fa fa-play text-center"></i>
                </div>
            </a>
            <div class="alt-font font-weight-500 margin-30px-bottom d-flex text-center position-relative">
                <span class="w-30px h-1px bg-white title-dec-left"></span>
                <div class="flex-grow-1">
                    <span class="text-white text-uppercase"><?php the_field('journey_heading_top'); ?></span>
                </div>
                <span class="w-30px h-1px bg-white title-dec-right"></span>
            </div>
            <h4 class="video-text wow animate__bounceIn" data-wow-delay="0.1s">
                <?php the_field('journey_heading'); ?>
            </h4>
            <div class="text-center wow animate__flipInX" data-wow-delay="0.5s">
                <a href="#" title="View all videos" class="btn btn-primary btn-lg mb-0">VIEW ALL VIDEOS</a>
            </div>
        </div>
    </section>

    <section class="border-top border-color-medium-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 text-center mb-3">
                    <h5 class="section-title wow animate__bounceIn">Clock with Trending Design</h5>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div
                    class="col-12 padding-10-rem-left pe-0 portfolio-colorful lg-padding-8-rem-left md-no-padding-left">
                    <div class="swiper-container white-move swiper-auto-slide"
                        data-slider-options='{ "loop": true, "slidesPerView": "auto", "spaceBetween": 30, "autoplay": { "delay": 5500, "disableOnInteraction": false }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "effect": "slide" }'>
                        <div class="swiper-wrapper">

                            <div class="swiper-slide wow animate__fadeInRight" data-wow-delay="0.1s">
                                <a class="grid-item" href="products.html">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image">
                                            <img src="<?php echo get_template_directory_uri(). '/images/cat1.png'?>" alt="" />
                                            <div class="overlay-portfolio d-block d-lg-none"></div>
                                            <h6 class="prod-name">Designer Clock</h6>
                                            <div
                                                class="portfolio-hover bg-transparent-yellow-ochre-light justify-content-between d-flex flex-row align-items-end padding-3-rem-tb padding-4-rem-lr xl-padding-2-rem-all">
                                                <div class="text-start">
                                                    <h6
                                                        class="font-weight-600 alt-font text-white text-capitalize no-margin-bottom move-bottom-top-self position-relative z-index-9">
                                                        <span>Designer Clock</span>
                                                    </h6>
                                                </div>
                                                <span
                                                    class="position-absolute top-50px right-50px move-right-left lg-top-30px lg-right-30px sm-top-20px sm-right-20px"><i
                                                        class="ti-arrow-top-right icon-small text-white"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide wow animate__fadeInRight" data-wow-delay="0.2s">
                                <a class="grid-item" href="products.html">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image">
                                            <img src="<?php echo get_template_directory_uri(). '/images/cat2.png'?>" alt="" />
                                            <div class="overlay-portfolio d-block d-lg-none"></div>
                                            <h6 class="prod-name">Designer Clock</h6>
                                            <div
                                                class="portfolio-hover bg-transparent-yellow-ochre-light justify-content-between d-flex flex-row align-items-end padding-3-rem-tb padding-4-rem-lr xl-padding-2-rem-all">
                                                <div class="text-start">
                                                    <h6
                                                        class="font-weight-600 alt-font text-white no-margin-bottom move-bottom-top-self">
                                                        <span>Designer Clock</span>
                                                    </h6>
                                                </div>
                                                <span
                                                    class="position-absolute top-50px right-50px move-right-left lg-top-30px lg-right-30px sm-top-20px sm-right-20px"><i
                                                        class="ti-arrow-top-right icon-small text-white"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide wow animate__fadeInRight" data-wow-delay="0.3s">
                                <a class="grid-item" href="products.html">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image">
                                            <img src="<?php echo get_template_directory_uri(). '/images/cat3.png'?>" alt="" />
                                            <div class="overlay-portfolio d-block d-lg-none"></div>
                                            <h6 class="prod-name">Designer Clock</h6>
                                            <div
                                                class="portfolio-hover bg-transparent-yellow-ochre-light justify-content-between d-flex flex-row align-items-end padding-3-rem-tb padding-4-rem-lr xl-padding-2-rem-all">
                                                <div class="text-start">
                                                    <h6
                                                        class="font-weight-600 alt-font text-white no-margin-bottom move-bottom-top-self">
                                                        <span>Designer Clock</span>
                                                    </h6>
                                                </div>
                                                <span
                                                    class="position-absolute top-50px right-50px move-right-left lg-top-30px lg-right-30px sm-top-20px sm-right-20px"><i
                                                        class="ti-arrow-top-right icon-small text-white"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide wow animate__fadeInRight" data-wow-delay="0.4s">
                                <a class="grid-item" href="products.html">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image">
                                            <img src="<?php echo get_template_directory_uri(). '/images/cat4.png'?>" alt="" />
                                            <div class="overlay-portfolio d-block d-lg-none"></div>
                                            <h6 class="prod-name">Designer Clock</h6>
                                            <div
                                                class="portfolio-hover bg-transparent-yellow-ochre-light justify-content-between d-flex flex-row align-items-end padding-3-rem-tb padding-4-rem-lr xl-padding-2-rem-all">
                                                <div class="text-start">
                                                    <h6
                                                        class="font-weight-600 alt-font text-white no-margin-bottom move-bottom-top-self">
                                                        <span>Designer Clock</span>
                                                    </h6>
                                                </div>
                                                <span
                                                    class="position-absolute top-50px right-50px move-right-left lg-top-30px lg-right-30px sm-top-20px sm-right-20px"><i
                                                        class="ti-arrow-top-right icon-small text-white"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a class="grid-item" href="products.html">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image">
                                            <img src="<?php echo get_template_directory_uri(). '/images/cat2.png'?>" alt="" />
                                            <div class="overlay-portfolio d-block d-lg-none"></div>
                                            <h6 class="prod-name">Designer Clock</h6>
                                            <div
                                                class="portfolio-hover bg-transparent-yellow-ochre-light justify-content-between d-flex flex-row align-items-end padding-3-rem-tb padding-4-rem-lr xl-padding-2-rem-all">
                                                <div class="text-start">
                                                    <h6
                                                        class="font-weight-600 alt-font text-white no-margin-bottom move-bottom-top-self">
                                                        <span>Designer Clock</span>
                                                    </h6>
                                                </div>
                                                <span
                                                    class="position-absolute top-50px right-50px move-right-left lg-top-30px lg-right-30px sm-top-20px sm-right-20px"><i
                                                        class="ti-arrow-top-right icon-small text-white"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="port-slider w-100 d-flex m-auto">
                            <div
                                class="port-slider-left swiper-button-previous-nav swiper-button-prev slider-navigation-style-05">
                                <i style="color: #c6080f;" class="line-icon-Arrow-OutLeft"></i>
                            </div>
                            <div
                                class="port-slider-right swiper-button-next-nav swiper-button-next slider-navigation-style-05">
                                <i style="color: #c6080f;" class="line-icon-Arrow-OutRight"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <divv class="col-12 text-center wow animate__flipInX" data-wow-delay="0.3s">
                    <a href="category.html" class="btn btn-primary btn-lg mt-5 mb-5">VIEW ALL CATEGORIES</a>
            </div>
        </div>
    </section>

    <section class="bg-penguin-white position-relative padding-seven-top lg-padding-nine-top">
        <div class="container">
            <div class="row justify-content-lg-center">
                <div
                    class="col-12 opacity-5 overflow-hidden alt-font font-weight-600 text-white text-overlap-style-02 d-none d-xl-block">
                    infrastructure</div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 wow animate__fadeInLeft" data-wow-delay="0.2s">
                <?php
                    if(get_field('infras_heading')){?>
                        <h5 class="section-title-1"><?php the_field('infras_heading')?></h5>
                    <?php }else{ ?>
                        <h5 class="section-title-1">
                            World-class infrastructure, built to meet the highest standards of functionality, efficiency,
                            and quality
                        </h5>
                    <?php }

                    if(get_field('infras_description')){?>
                        <p><?php the_field('infras_description')?></p>
                    <?php }else{ ?>
                        <p>Through market-oriented R&D, we aim to maximize the competitiveness of our current business and create new products that meet market requirements. This optimization process involvs product upgrades, feature enhancements, cost reductions and diversification into new product lines.
                    </p>
                    <?php }
                ?>

                    <a class="custom-link mb-5" href="#">
                        Know More about us
                        <i class="line-icon-Arrow-OutRight"></i>
                    </a>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="row">
                        <div class="col-md-12 wow animate__fadeInRight" data-wow-delay="0.2s">
                <?php
                    if(get_field('infras_image1')){?>
                        <img src="<?php the_field('infras_image1')?>" class="img-fluid mb-4" />

                    <?php }else{ ?>
                        <img src="<?php echo get_template_directory_uri(). '/images/infra1.png'?>" class="img-fluid mb-4" />
                <?php } ?>                            
                        </div>


                <div class="col-md-6 wow animate__fadeInRight" data-wow-delay="0.4s">
                <?php
                    if(get_field(' infras_image2')){?>
                        <img src="<?php the_field('infras_image2')?>" class="img-fluid mb-4" />

                    <?php }else{ ?>
                        <img src="<?php echo get_template_directory_uri(). '/images/infra2.png'?>" class="img-fluid mb-4" />
                <?php } ?>                            
                </div>

                <div class="col-md-6 wow animate__fadeInRight" data-wow-delay="0.4s">
                <?php
                    if(get_field(' infras_image3')){?>
                        <img src="<?php the_field('infras_image3')?>" class="img-fluid mb-4" />

                    <?php }else{ ?>
                        <img src="<?php echo get_template_directory_uri(). '/images/infra3.png'?>" class="img-fluid mb-4" />
                <?php } ?> 
                    
                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="border-top border-color-medium-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 text-center wow animate__fadeIn">
                    <h5 class="section-title wow animate__bounceIn">News & Events</h5>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-12 blog-content justify-content-center">
                    <ul
                        class="blog-grid blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large justify-content-center d-flex">


                        <li class="grid-sizer"></li>
                        <!-- start blog item -->
    <?php
         $arg = array(
            'post_type' => 'events',
            'posts_per_page' => 3,
            'post_status' => 'publish'
        );
        $events = new WP_Query($arg);

        if($events->have_posts()){
            while($events->have_posts()) : $events->the_post(); ?>
                <li class="grid-item wow animate__flipInY" data-wow-delay="0.1s">
                            <div class="blog-post bg-white box-shadow-medium">
                                <div class="blog-post-image bg-dark-red">
                                    <a href="<?php the_permalink(); ?>" title=""><?php echo get_the_post_thumbnail()?></a>
                                                     
                                    <a href="#" class="blog-category alt-font">Creative</a>
                                </div>
                                <div class="news-arrow btn btn-white btn-rounded"><i class="fas fa-arrow-right"></i>
                                </div>
                                <div class="post-details padding-3-rem-lr padding-2-half-rem-tb">
                                    <p class="text-large news-date text-center margin-10px-bottom"><?php echo get_the_date( "j F, Y" ); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="news-title"><?php the_title(); ?></a>
                                </div>
                            </div>
                        </li>
                <?php endwhile; 
                    wp_reset_postdata();
            }else{
                echo esc_html('Sorry, no posts matched your criteria.');
            }
        ?>
                        
                        <!--<li class="grid-item wow animate__flipInY" data-wow-delay="0.1s">
                            <div class="blog-post bg-white box-shadow-medium">
                                <div class="blog-post-image bg-dark-red">
                                    <a href="news-detail.html" title=""><img src="<?php echo get_template_directory_uri().'/images/news1.jpg'?>" alt=""></a>
                                    <a href="blog-masonry.html" class="blog-category alt-font">Creative</a>
                                </div>
                                <div class="news-arrow btn btn-white btn-rounded"><i class="fas fa-arrow-right"></i>
                                </div>
                                <div class="post-details padding-3-rem-lr padding-2-half-rem-tb">
                                    <p class="text-large news-date text-center margin-10px-bottom">18 February 2020</p>
                                    <a href="news-detail.html" class="news-title">Story of India's 2nd largest
                                        clock company</a>
                                </div>
                            </div>
                        </li>
                         <li class="grid-item wow animate__flipInY" data-wow-delay="0.1s">
                            <div class="blog-post border-radius-5px bg-white box-shadow-medium">
                                <div class="blog-post-image bg-dark-red">
                                    <a href="news-detail.html" title=""><img src="<?php echo get_template_directory_uri().'/images/news2.jpg'?>" alt=""></a>
                                    <a href="blog-masonry.html" class="blog-category alt-font">Creative</a>
                                </div>
                                <div class="news-arrow btn btn-white btn-rounded"><i class="fas fa-arrow-right"></i>
                                </div>
                                <div class="post-details padding-3-rem-lr padding-2-half-rem-tb">
                                    <p class="text-large news-date text-center margin-10px-bottom">18 February 2020</p>
                                    <a href="news-detail.html" class="news-title">Story of India's 2nd largest
                                        clock company</a>
                                </div>
                            </div>
                        </li>
                        <li class="grid-item wow animate__flipInY" data-wow-delay="0.1s">
                            <div class="blog-post border-radius-5px bg-white box-shadow-medium">
                                <div class="blog-post-image bg-dark-red">
                                    <a href="news-detail.html" title=""><img src="<?php echo get_template_directory_uri().'/images/news3.jpg'?>" alt=""></a>
                                    <a href="blog-masonry.html" class="blog-category alt-font">Creative</a>
                                </div>
                                <div class="news-arrow btn btn-white btn-rounded"><i class="fas fa-arrow-right"></i>
                                </div>
                                <div class="post-details padding-3-rem-lr padding-2-half-rem-tb">
                                    <p class="text-large news-date text-center margin-10px-bottom">18 February 2020</p>
                                    <a href="news-detail.html" class="news-title">Story of India's 2nd largest
                                        clock company</a>
                                </div>
                            </div>
                        </li> -->
                    </ul>
                </div>

                <div class="col-12 text-center mt-3 wow animate__flipInX" data-wow-delay="0.3s">
                    <a class="custom-link" href="#">
                        Know More about us
                        <i class="line-icon-Arrow-OutRight"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="overflow-visible cover-background contact-bg">
        <div class="container">
            <?php
                if(get_field('interest_heading')){?>
                    <h2 class="section-title-1 text-center wow animate__flipInX" data-wow-delay="0.1s"><?php the_field('interest_heading')?></h2>

                <?php }else{ ?>
                    <h2 class="section-title-1 text-center wow animate__flipInX" data-wow-delay="0.1s"> Interested to know more about our products?</h2>
            <?php } ?>

            <?php
                if(get_field('interest_sub-heading')){?>
                    <p class="text-center wow animate__flipInX" data-wow-delay="0.1s"><?php the_field('interest_sub-heading')?></p>

                <?php }else{ ?>
                    <p class="text-center wow animate__flipInX" data-wow-delay="0.1s"> Please feel free to ask, and I'll do my best to assist you! </p>
            <?php } ?> 
            
            
            <div class="bg-dark-red mx-auto margin-20px-tb h-2px w-10 wow animate__fadeInRight" data-wow-delay="0.1s">
            </div>
            <div class="text-center">
                <a href="#" title="contacts" class="btn btn-primary btn-lg wow animate__flipInX"
                    data-wow-delay="0.3s">CONTACT US</a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>