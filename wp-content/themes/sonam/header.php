<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sonam Quartz</title>
    <meta name="author" content="Sonam Quartz">
    <meta name="description" content="Sonam Quartz">
    <link rel="shortcut icon" href="images/favicon.png">
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> data-mobile-nav-style="classic">
<?php wp_body_open(); ?>
    <header>
        <nav
            class="navbar header-bg-main navbar-expand-lg navbar-dark bg-transparent header-light fixed-top navbar-boxed header-reverse-scroll">
            <div class="container-fluid nav-header-container">
                <div class="col-4 col-lg-2 ps-lg-0 me-auto me-lg-0">
                    <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
                        <?php
                        //Default Logo ~~~~
                            if(get_field('default-logo', 'option')){ ?>
                                <img src="<?php the_field('default-logo', 'option');?>" alt="Sonam Quartz" title="Sonam Quartz" class="default-logo">                                
                            <?php }else{ ?>
                                <img src="<?php echo get_template_directory_uri(). '/images/logo-white.png'?>" alt="Sonam Quartz" title="Sonam Quartz" class="default-logo">
                           <?php }

                            // Alternative Logo ~~~~
                            if(get_field('alt-logo', 'option')){ ?>
                                <img src="<?php the_field('alt-logo', 'option');?>" alt="Sonam Quartz" title="Sonam Quartz" class="alt-logo">                                
                            <?php }else{ ?>
                                <img src="<?php echo get_template_directory_uri(). '/images/logo.png'?>" alt="Sonam Quartz" title="Sonam Quartz" class="alt-logo">
                           <?php }

                           // Mobile Logo ~~~~
                            if(get_field('mobile-logo', 'option')){ ?>
                                <img src="<?php the_field('mobile-logo', 'option');?>" alt="Sonam Quartz" title="Sonam Quartz" class="mobile-logo">                                
                            <?php }else{ ?>
                                <img src="<?php echo get_template_directory_uri(). '/images/logo.png'?>" alt="Sonam Quartz" title="Sonam Quartz" class="mobile-logo">
                           <?php } ?>
                    </a>
                </div>
                <div class="col-auto col-lg-8 md-position-initial md-no-padding">
                    <?php 
                        // wp_nav_menu( array(
                        //     'menu_class' => 'nav-menu',
                        //     'theme_location' => 'primary-menu',
                        //     'menu_id'        => 'primary-menu',
                        //     'menu'           => 'Main Menu'
                        //     )
                        // );

                        // wp_megamenu(array(
                        //     'theme_location' => 'primary',
                        //     'menu'           => 'Main Menu'
                        // ));
                    ?>

                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav alt-font">

                            <li class="nav-item dropdown simple-dropdown">
                                <a href="#" class="nav-link text-uppercase">Corporate</a>
                                <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-hidden="true"></i>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown">
                                        <a href="about-us.html">About Us</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="history.html">History</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="vision-mission.html">Vision & Values</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="management.html">Management</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="quality.html">Quality</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="infrastructure.html">Infrastructure</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown megamenu open">
                                <a href="javascript:void(0);" class="nav-link">PRODUCTS</a>
                                <i class="fa fa-angle-down dropdown-toggle"  data-bs-toggle="dropdown"
                                    aria-hidden="true"></i>




                                <div class="menu-back-div dropdown-menu megamenu-content" role="menu">
                                    <div id="parentVerticalTab">
                                        <ul class="resp-tabs-list hor_1">
                                            <li>Wall Clock <i class="fa fa-angle-right float-end"></i></li>
                                            <li>Calculator <i class="fa fa-angle-right float-end"></i></li>
                                            <li>Home Appliances <i class="fa fa-angle-right float-end"></i></li>
                                        </ul>
                                        <div class="resp-tabs-container hor_1">
                                            <div>
                                                <div class="d-lg-flex justify-content-center">
                                                    <div class="col-md-4 mb-0">
                                                        <ul class="d-lg-inline-block megamenu-padding">
                                                            <li><a href="products.html"><i class="ti-angle-right"></i>Alaram Time Piece</a>
                                                            </li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>LCD Clock</a></li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>Dual Movement Clock</a>
                                                            </li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>Regular Clock</a></li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>Regular Clock</a></li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>Regular Clock</a></li>
            
                                                        </ul>
                                                    </div>
            
                                                    <div class="col-md-4 mb-0">
                                                        <ul class="d-lg-inline-block megamenu-padding">
                                                            <li><a href="#"><i class="ti-angle-right"></i>Classy Picture & Gold
                                                                    Dial Clock</a></li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>LED Digital Clock</a>
                                                            </li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>Pendulum Clock</a></li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>Ratating Clock</a></li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>Ratating Clock</a></li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>Ratating Clock</a></li>
                                                        </ul>
                                                    </div>
            
                                                    <div class="col-md-4 mb-0">
                                                        <ul class="d-lg-inline-block megamenu-padding">
                                                            <li><a href="#"><i class="ti-angle-right"></i>Designer Clock</a></li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>Office Clock</a></li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>Pendulum Clock</a></li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>RT PD Musical</a></li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>RT PD Musical</a></li>
                                                            <li><a href="category.html" class="text-danger font-weight-700"><i class="ti-angle-right"></i>VIEW ALL</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="d-lg-flex">
                                                    <div class="col-md-4 mb-0">
                                                        <ul class="d-lg-inline-block megamenu-padding">
                                                            <li><a href="products.html"><i class="ti-angle-right"></i>Alaram Time Piece</a>
                                                            </li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>LCD Clock</a></li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>Dual Movement Clock</a>
                                                            </li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>Regular Clock</a></li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>Regular Clock</a></li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>Regular Clock</a></li>
            
                                                        </ul>
                                                    </div>
            
                                                    
            
                                                    <div class="col-md-4 mb-0">
                                                        <ul class="d-lg-inline-block megamenu-padding">
                                                            <li><a href="#"><i class="ti-angle-right"></i>Designer Clock</a></li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>Office Clock</a></li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>Pendulum Clock</a></li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>RT PD Musical</a></li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>RT PD Musical</a></li>
                                                            <li><a href="category.html" class="text-danger font-weight-700"><i class="ti-angle-right"></i>VIEW ALL</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="d-lg-flex justify-content-center">
                                                    <div class="col-md-4 mb-0">
                                                        <ul class="d-lg-inline-block megamenu-padding">
                                                            <li><a href="products.html"><i class="ti-angle-right"></i>Alaram Time Piece</a>
                                                            </li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>LCD Clock</a></li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>Dual Movement Clock</a>
                                                            </li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>Regular Clock</a></li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>Regular Clock</a></li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>Regular Clock</a></li>
            
                                                        </ul>
                                                    </div>
            
                                                    <div class="col-md-4 mb-0">
                                                        <ul class="d-lg-inline-block megamenu-padding">
                                                            <li><a href="#"><i class="ti-angle-right"></i>Classy Picture & Gold
                                                                    Dial Clock</a></li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>LED Digital Clock</a>
                                                            </li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>Pendulum Clock</a></li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>Ratating Clock</a></li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>Ratating Clock</a></li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>Ratating Clock</a></li>
                                                        </ul>
                                                    </div>
            
                                                    <div class="col-md-4 mb-0">
                                                        <ul class="d-lg-inline-block megamenu-padding">
                                                            <li><a href="#"><i class="ti-angle-right"></i>Designer Clock</a></li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>Office Clock</a></li>
                                                            <li><a href="#"><i class="ti-angle-right"></i>Pendulum Clock</a></li>
                                                            <li><a href="category.html" class="text-danger font-weight-700"><i class="ti-angle-right"></i>VIEW ALL</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            </li>

                            <li class="nav-item">
                                <a href="corporate-gifing.html"
                                    class="nav-link text-uppercase">Corporate Gifting</a>
                            </li>

                            <li class="nav-item">
                                <a href="investor.html" class="nav-link text-uppercase">Investors</a>
                            </li>

                            <li class="nav-item dropdown simple-dropdown">
                                <a href="#" class="nav-link text-uppercase">News & Media</a>
                                <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-hidden="true"></i>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown">
                                        <a href="news-event.html">News & Events</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="press.html">Press</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="videos.html">Videos</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="downloads.html">Downloads</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown simple-dropdown">
                                <a href="#" class="nav-link text-uppercase">Contact</a>
                                <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-hidden="true"></i>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown">
                                        <a href="contact.html">Get in Touch</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="career.html">Career</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="partner-with-us.html">Partner with Us</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="d-block d-lg-none d-md-none">
                                <p class="header-contact-info text-center mb-0 pb-0">
                                    <i class="fa-solid fa-phone-volume"></i><br />
                                    <span>LET'S TALK</span><br />
                                    <a href="#">+91 99780 52717</a>
                                </p>
                                
                            </li>
                            <li class="d-block d-lg-none d-md-none">
                                <p class="header-contact-info text-center mb-0">
                                    <i class="fa-regular fa-envelope"></i><br />
                                    EMAIL<br />
                                    <a href="#">info@sonamquartz.com</a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto col-lg-2 text-end hidden-xs px-lg-0">
                    <?php if( have_rows('social_links', 'option') ): ?>
                        <div class="header-social-icon d-inline-block">
                        <?php while( have_rows('social_links', 'option') ): the_row(); 
                            $social_m = get_sub_field('social_m', 'option');
                            $urls = get_sub_field('urls', 'option');
                            ?>
                            <a href="<?php echo $urls;?>" target="_blank"><i class="fa-brands fa-<?php echo $social_m;?>"></i></i></a>                            
                        <?php endwhile; ?>
                        </div>
                    <?php endif; ?>


                    <!-- <div class="header-social-icon d-inline-block">
                        <a href="http://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></i></a>
                        <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="http://www.youtube.com/" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                    </div> -->
                    <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                </div>
            </div>
        </nav>
    </header>