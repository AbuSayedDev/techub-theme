<?php 
//  Top header 
 $techub_top_header_switch = get_theme_mod('techub_top_header_switch', false);
 $techub_top_header_address = get_theme_mod( 'techub_top_header_address', __('Manchester 21, Zurich, CH', 'techub'));
 $techub_top_header_address_url = get_theme_mod( 'techub_top_header_address_url', __('#', 'techub'));
 $techub_top_header_emailID = get_theme_mod( 'techub_top_header_emailID', __('techubinfo@mail.com', 'techub'));

//  Main header 
$search_switch = get_theme_mod('search_switch', false);
 $button_switch = get_theme_mod('button_switch', false);
 $button_text = get_theme_mod('button_text', __('Get a Quete', 'techub'));
 $button_url = get_theme_mod('button_url', __('#', 'techub'));
?>


    <!-- Search Popup Section -->
    <?php echo get_template_part('template-parts/header/header-search'); ?>
    
    <!-- offcanvus area -->
    <?php echo get_template_part( 'template-parts/header/offcanvus' );?>

    <!-- header area start -->
    <header class="tp-header-height">
        <!-- HEADER TOP -->
        <?php if(!empty($techub_top_header_switch)) : ?>
        <div class="tp-header-top tp-header-5-top pt-10 pb-10 pl-110 pr-110 d-none d-xl-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="tp-header-top-address tp-header-5-top-address">

                            <?php if(!empty($techub_top_header_address)) : ?>
                                <span><i class="fa-thin fa-location-dot"></i><a <?php 
                                    if(!empty($techub_top_header_address_url)) : ?> href="<?php echo esc_url( $techub_top_header_address_url ); ?>" <?php endif ?> target="_blink"> <?php echo esc_html( $techub_top_header_address ); ?></a></span>
                            <?php endif ?>

                            <?php if(!empty($techub_top_header_emailID)) : ?>
                            <span><i class="fa-light fa-envelope"></i> <a href="mailto:<?php echo esc_attr( $techub_top_header_emailID ); ?>"><?php echo esc_html($techub_top_header_emailID); ?></a></span>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="tp-header-top-right d-flex justify-content-end">
                            <div class="tp-header-top-menu">
                                <ul>
                                    <li><a href="faq.html">Faq <span>/</span></a></li>
                                    <li><a href="service.html">Service <span>/</span></a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                            <div class="tp-header-top-social">
                                <?php echo techub_social(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif ?>
        
        <!-- Header -->
        <div id="header-sticky" class="tp-header-bottom">
            <div class="tp-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-4 col-md-4 col-6">
                            <div class="logo">
                                <?php echo techub_site_logo(); ?>
                            </div>
                        </div>
                        <div class="col-xl-6 d-none d-xl-block">
                            <div class="main-menu main-menu-5">
                                <nav class="tp-main-menu-content">
                                    <ul>
                                        <li class="has-dropdown"><a class="color-active" href="index.html">Home</a></li>
                                        <li class="has-dropdown"><a href="#">Pages</a>
                                            <ul class="submenu tp-submenu">
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="team.html">Our Team</a></li>
                                                <li><a href="team-details.html">Team Details</a></li>
                                                <li><a href="portfolio.html">Our Portfolio</a></li>
                                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                                <li><a href="error.html">Error</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="portfolio.html">Portfolio</a></li>
                                        <li class="has-dropdown"><a href="service.html">Services</a>
                                            <ul class="submenu tp-submenu">
                                                <li><a href="service.html">Our Service</a></li>
                                                <li><a href="service-details.html">Service Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown"><a href="blog.html">Blog</a>
                                            <ul class="submenu tp-submenu">
                                                <li><a href="blog-sideber.html">Blog Sidebar</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-8 col-md-8 col-6">
                            <div class="tp-header-right d-flex justify-content-end align-items-center">

                            <?php if(!empty($search_switch)) : ?>
                                <!-- header search button -->
                                <div class="tp-header-search search-box-outer d-none d-md-block">
                                    <button><i class="flaticon-search"></i></button>
                                </div>
                            <?php endif ?>

                            <?php if(!empty($button_switch)) : ?>
                                <!-- header button -->
                                <?php if(!empty($button_text)) : ?>
                                    <div class="tp-header-button d-none d-lg-block">
                                        <a class="tp-header-btn" rel="noreferrer" href="<?php echo esc_url( $button_url ); ?>" target="_blank"><span><?php echo esc_html( $button_text ); ?></span></a>
                                    </div>
                                <?php endif ?>
                            <?php endif ?>

                                <!-- header mobile menu ber -->
                                <div class="tp-header-menu-ber">
                                    <button class="d-xl-none tp-header-5-bar tp-menu-bar"><i class="fa-solid fa-bars"></i></button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->