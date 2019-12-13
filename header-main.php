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
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/html5shiv.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
</head>

<body>

<div class="body-inner">

    <div id="top-bar" class="top-bar">
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
						<?php if ( ! dynamic_sidebar( 'language' ) ): ?>
                            <h2>Language widget</h2>
						<?php endif; ?>
                    </div>

					<?php $socials = carbon_get_theme_option( 'crb_socials' ); ?>
					<?php if ( $socials ): ?>
                        <ul class="top-social">
                            <li>
								<?php foreach ( $socials as $social ): ?>
                                    <a href="<?php echo $social['link']; ?>">
                                        <span class="social-icon"><i class="fab fa-<?php echo $social['icon']; ?>"></i></span>
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
    <header id="header" class="header">
        <div class="container">
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
