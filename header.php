<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="utf-8">

    <!-- Mobile Specific Metas
	================================================== -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">



    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
</head>

<body>

<div <?php body_class('body-inner'); ?>>

    <div id="top-bar" class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 text-lg-left text-md-center">
                    <ul class="top-menu unstyled ">
                        <li><a href="index-2.html#">Why Us</a></li>
                        <li><a href="index-2.html#">Locations</a></li>
                        <li><a href="index-2.html#">Services</a></li>
                        <li><a href="index-2.html#">Solution Center</a></li>
                    </ul>
                </div><!--/ Top info end -->

                <div class="col-lg-5 col-md-12 text-lg-right text-md-center">
                    <ul class="top-social">
                        <li>
                            <a title="Facebook" href="index-2.html#">
                                <span class="social-icon"><i class="fa fa-facebook"></i></span>
                            </a>
                            <a title="Twitter" href="index-2.html#">
                                <span class="social-icon"><i class="fa fa-twitter"></i></span>
                            </a>
                            <a title="Google+" href="index-2.html#">
                                <span class="social-icon"><i class="fa fa-google-plus"></i></span>
                            </a>
                            <a title="Linkdin" href="index-2.html#">
                                <span class="social-icon"><i class="fa fa-linkedin"></i></span>
                            </a>
                            <a title="Skype" href="index-2.html#">
                                <span class="social-icon"><i class="fa fa-instagram"></i></span>
                            </a>
                        </li>
                    </ul>
                </div><!--/ Top social end -->
            </div><!--/ Content row end -->
        </div><!--/ Container end -->
    </div><!--/ Topbar end -->

    <!-- Header start -->
    <header id="header" class="header navdown-boxed">
        <div class="container">
            <div class="row">
                <div class="logo-area clearfix">
                    <div class="col-lg-2 col-md-12 logo">
                        <a href="index.html">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
                        </a>
                    </div><!-- logo end -->

                    <div class="col-lg-9 col-md-12 pull-right ml-lg-auto">
                        <ul class="top-info unstyled">
                            <li>
                                <span class="info-icon"><i class="icon icon-phone3"></i></span>
                                <div class="info-wrapper">
                                    <p class="info-title">1+(91) 458 654 528</p>
                                    <p class="info-subtitle">Phone Number</p>
                                </div>
                            </li>
                            <li>
                                <span class="info-icon"><i class="icon icon-envelope"></i></span>
                                <div class="info-wrapper">
                                    <p class="info-title">info@example.com</p>
                                    <p class="info-subtitle">Email Address</p>
                                </div>
                            </li>
                            <li class="last">
                                <span class="info-icon"><i class="icon icon-map-marker2"></i></span>
                                <div class="info-wrapper">
                                    <p class="info-title">1105 Roosevelt Street, CA</p>
                                    <p class="info-subtitle">Location</p>
                                </div>
                            </li>
                            <li class="header-get-a-quote">
                                <a class="btn btn-primary" href="index-2.html#">Get A Quote</a>
                            </li>
                        </ul><!-- Ul end -->
                    </div><!-- header right end -->
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
                                <ul class="nav navbar-nav">
                                    <li class="dropdown active">
                                        <a href="index-2.html#" class="dropdown-toggle" data-toggle="dropdown">Home <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="index.html">Home One</a></li>
                                            <li class="active"><a href="index-2.html">Home Two</a></li>
                                            <li><a href="index-3.html">Home Three</a></li>
                                            <li><a href="index-4.html">Home Four</a></li>
                                            <li><a href="index-5.html">Home Five</a></li>
                                            <li><a href="index-6.html">Home Six</a></li>
                                            <li><a href="index-7.html">Home Seven</a></li>
                                            <li><a href="index-8.html">Home Eight</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown">
                                        <a href="index-2.html#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="team.html">Our People</a></li>
                                            <li><a href="testimonials.html">Testimonials</a></li>
                                            <li><a href="faq.html">Faq</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown">
                                        <a href="index-2.html#" class="dropdown-toggle" data-toggle="dropdown">Cases <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="case.html">Case All</a></li>
                                            <li><a href="case-details.html">Case Single</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown">
                                        <a href="index-2.html#" class="dropdown-toggle" data-toggle="dropdown">Services <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="service-details1.html">Life Insurance</a></li>
                                            <li><a href="service-details2.html">Travel Insurance</a></li>
                                            <li><a href="service-details3.html">Home Insurance</a></li>
                                            <li><a href="service-details4.html">Car Insurance</a></li>
                                            <li><a href="service-details5.html">Business Insurance</a></li>
                                            <li><a href="service-details6.html">Health Insurance</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown">
                                        <a href="index-2.html#" class="dropdown-toggle" data-toggle="dropdown">Features <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="typography.html">Typography</a></li>
                                            <li><a href="404.html">404</a></li>
                                            <li class="dropdown-submenu">
                                                <a href="index-2.html#.">Parent Menu</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="index-2.html#">Child Menu 1</a></li>
                                                    <li><a href="index-2.html#">Child Menu 2</a></li>
                                                    <li><a href="index-2.html#">Child Menu 3</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="dropdown">
                                        <a href="index-2.html#" class="dropdown-toggle" data-toggle="dropdown">News <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="news-left-sidebar.html">News Left Sidebar</a></li>
                                            <li><a href="news-right-sidebar.html">News Right Sidebar</a></li>
                                            <li><a href="news-single.html">News Single</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="contact.html">Contact</a></li>

                                </ul><!--/ Nav ul end -->
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

