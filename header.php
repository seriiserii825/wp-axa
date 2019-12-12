<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>

    <!-- Basic Page Needs
	================================================== -->
    <meta charset="utf-8">
    <title>Insurex - Insurance Agency HTML5 Template</title>

    <!-- Mobile Specific Metas
	================================================== -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">



    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/html5shiv.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
</head>

<body>

<div <?php body_class('body-inner'); ?>>
    <div id="top-bar" class="topbar-transparent border-down">
        <div class="container">
            <div class="header-top">
                <div class="header-top__item">
                    <?php wp_nav_menu( [
                    	'theme_location'  => 'menu-top',
                    	'menu'            => '',
                    	'container'       => '',
                    	'container_class' => '',
                    	'container_id'    => '',
                    	'menu_class'      => 'top-menu unstyled ',
                    	'menu_id'         => '',
                    	'echo'            => true,
                    	'fallback_cb'     => 'wp_page_menu',
                    	'before'          => '',
                    	'after'           => '',
                    	'link_before'     => '',
                    	'link_after'      => '',
                    	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    	'depth'           => 0,
                    	'walker'          => '',
                    ] ); ?>
                </div><!--/ Top info end -->

                <div class="header-top__item">
                    <div class="language-widget">
                        <?php if(!dynamic_sidebar('language')): ?>
                        <h2>Language widget</h2>
                        <?php endif; ?>
                    </div>

                    <?php $socials = carbon_get_theme_option('crb_socials'); ?>
                    <?php if($socials): ?>
                        <ul class="top-social">
                            <li>
	                            <?php foreach($socials as $social): ?>
                                    <a href="<?php echo $social['link']; ?>">
                                        <span class="social-icon"><i class="fa fa-<?php echo $social['icon']; ?>"></i></span>
                                    </a>
	                            <?php endforeach; ?>
                            </li>
                        </ul>
                    <?php endif; ?>

                </div><!--/ Top social end -->
            </div><!--/ Content row end -->
        </div><!--/ Container end -->
    </div><!--/ Topbar end -->

    <!-- Header start -->
    <header id="header" class="header navdown-boxed-transparent">
        <div class="container">
            <div class="row">
                <div class="logo-area">
                        <?php the_custom_logo(); ?>

                        <ul class="top-info unstyled">
                            <li>
                                <span class="info-icon"><i class="icon icon-phone3"></i></span>
                                <div class="info-wrapper">
                                    <?php
                                    $phone = carbon_get_theme_option('crb_phone');
                                    $phone_clear = clear_phone($phone);
                                    ?>
                                    <a href="tel:<?php echo $phone_clear; ?>" class="info-title"><?php echo $phone; ?></a>
                                    <p class="info-subtitle"><?php echo esc_html__( 'Numarul de telefon', 'bs-axa' ); ?></p>
                                </div>
                            </li>
                            <li>
                                <span class="info-icon"><i class="icon icon-envelope"></i></span>
                                <div class="info-wrapper">
                                    <p class="info-title"><?php echo carbon_get_theme_option('crb_email'); ?></p>
                                    <p class="info-subtitle"><?php echo esc_html__( 'Adresa email', 'bs-axa' ); ?></p>
                                </div>
                            </li>
                            <li class="last">
                                <span class="info-icon"><i class="icon icon-map-marker2"></i></span>
                                <div class="info-wrapper">
                                    <p class="info-title"><?php echo carbon_get_theme_option('crb_address'.get_lang()); ?></p>
                                    <p class="info-subtitle"><?php echo esc_html__( 'Locatia', 'bs-axa' ); ?></p>
                                </div>
                            </li>
                        </ul><!-- Ul end -->
                </div><!-- logo area end -->

            </div><!-- Row end -->
        </div><!-- Container end -->

        <nav class="site-navigation navdown navbar navbar-expand-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="site-nav-inner pull-left">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
	                            <?php wp_nav_menu( [
		                            'theme_location'  => 'menu-main',
		                            'menu'            => '',
		                            'container'       => '',
		                            'container_class' => '',
		                            'container_id'    => '',
		                            'menu_class'      => 'nav navbar-nav',
		                            'menu_id'         => '',
		                            'echo'            => true,
		                            'fallback_cb'     => 'wp_page_menu',
		                            'before'          => '',
		                            'after'           => '',
		                            'link_before'     => '',
		                            'link_after'      => '',
		                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		                            'depth'           => 0,
		                            'walker'          => '',
	                            ] ); ?>
                                <!--<ul class="nav navbar-nav">-->

                                    <!--<li class="dropdown active">-->
                                    <!--    <a href="index-3.html#" class="dropdown-toggle" data-toggle="dropdown">Home <i class="fa fa-angle-down"></i></a>-->
                                    <!--    <ul class="dropdown-menu" role="menu">-->
                                    <!--        <li><a href="index.html">Home One</a></li>-->
                                    <!--        <li><a href="index-2.html">Home Two</a></li>-->
                                    <!--        <li class="active"><a href="index-3.html">Home Three</a></li>-->
                                    <!--        <li><a href="index-4.html">Home Four</a></li>-->
                                    <!--        <li><a href="index-5.html">Home Five</a></li>-->
                                    <!--        <li><a href="index-6.html">Home Six</a></li>-->
                                    <!--        <li><a href="index-7.html">Home Seven</a></li>-->
                                    <!--        <li><a href="index-8.html">Home Eight</a></li>-->
                                    <!--    </ul>-->
                                    <!--</li>-->
                                    <!---->
                                    <!--<li class="dropdown">-->
                                    <!--    <a href="index-3.html#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>-->
                                    <!--    <ul class="dropdown-menu" role="menu">-->
                                    <!--        <li><a href="about.html">About Us</a></li>-->
                                    <!--        <li><a href="team.html">Our People</a></li>-->
                                    <!--        <li><a href="testimonials.html">Testimonials</a></li>-->
                                    <!--        <li><a href="faq.html">Faq</a></li>-->
                                    <!--        <li><a href="pricing.html">Pricing</a></li>-->
                                    <!--    </ul>-->
                                    <!--</li>-->
                                    <!---->
                                    <!--<li class="dropdown">-->
                                    <!--    <a href="index-3.html#" class="dropdown-toggle" data-toggle="dropdown">Cases <i class="fa fa-angle-down"></i></a>-->
                                    <!--    <ul class="dropdown-menu" role="menu">-->
                                    <!--        <li><a href="case.html">Case All</a></li>-->
                                    <!--        <li><a href="case-details.html">Case Single</a></li>-->
                                    <!--    </ul>-->
                                    <!--</li>-->
                                    <!---->
                                    <!--<li class="dropdown">-->
                                    <!--    <a href="index-3.html#" class="dropdown-toggle" data-toggle="dropdown">Services <i class="fa fa-angle-down"></i></a>-->
                                    <!--    <ul class="dropdown-menu" role="menu">-->
                                    <!--        <li><a href="service-details1.html">Life Insurance</a></li>-->
                                    <!--        <li><a href="service-details2.html">Travel Insurance</a></li>-->
                                    <!--        <li><a href="service-details3.html">Home Insurance</a></li>-->
                                    <!--        <li><a href="service-details4.html">Car Insurance</a></li>-->
                                    <!--        <li><a href="service-details5.html">Business Insurance</a></li>-->
                                    <!--        <li><a href="service-details6.html">Health Insurance</a></li>-->
                                    <!--    </ul>-->
                                    <!--</li>-->
                                    <!---->
                                    <!--<li class="dropdown">-->
                                    <!--    <a href="index-3.html#" class="dropdown-toggle" data-toggle="dropdown">Features <i class="fa fa-angle-down"></i></a>-->
                                    <!--    <ul class="dropdown-menu" role="menu">-->
                                    <!--        <li><a href="typography.html">Typography</a></li>-->
                                    <!--        <li><a href="404.html">404</a></li>-->
                                    <!--        <li class="dropdown-submenu">-->
                                    <!--            <a href="index-3.html#.">Parent Menu</a>-->
                                    <!--            <ul class="dropdown-menu">-->
                                    <!--                <li><a href="index-3.html#">Child Menu 1</a></li>-->
                                    <!--                <li><a href="index-3.html#">Child Menu 2</a></li>-->
                                    <!--                <li><a href="index-3.html#">Child Menu 3</a></li>-->
                                    <!--            </ul>-->
                                    <!--        </li>-->
                                    <!--    </ul>-->
                                    <!--</li>-->
                                    <!---->
                                    <!--<li class="dropdown">-->
                                    <!--    <a href="index-3.html#" class="dropdown-toggle" data-toggle="dropdown">News <i class="fa fa-angle-down"></i></a>-->
                                    <!--    <ul class="dropdown-menu" role="menu">-->
                                    <!--        <li><a href="news-left-sidebar.html">News Left Sidebar</a></li>-->
                                    <!--        <li><a href="news-right-sidebar.html">News Right Sidebar</a></li>-->
                                    <!--        <li><a href="news-single.html">News Single</a></li>-->
                                    <!--    </ul>-->
                                    <!--</li>-->
                                    <!---->
                                    <!--<li><a href="contact.html">Contact</a></li>-->

                                <!--</ul>/ Nav ul end -->
                            </div><!--/ Collapse end -->

                        </div><!-- Site Navbar inner end -->

                    </div><!--/ Col end -->
                </div><!--/ Row end -->

                <div class="nav-search">
                    <span id="search"><i class="icon icon-search"></i></span>
                </div><!-- Search end -->

                <div class="search-block" style="display: none;">
                    <input type="text" class="form-control" placeholder="Type what you want and enter">
                    <span class="search-close">&times;</span>
                </div><!-- Site search end -->
            </div><!--/ Container end -->

        </nav><!--/ Navigation end -->
    </header><!--/ Header end -->
