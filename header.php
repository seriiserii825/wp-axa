<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>

    <!-- Basic Page Needs
	================================================== -->
    <meta charset="utf-8">
    <!-- Mobile Specific Metas
	================================================== -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'body-inner' ); ?>>

<div>

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
                <div class="logo-area">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo carbon_get_theme_option('crb_logo'); ?>" width="160" alt="">
                    </a>
                </div>

                <ul class="top-info unstyled">
                    <li>
                        <span class="info-icon"><i class="icon icon-phone3"></i></span>
                        <div class="info-wrapper">
							<?php
							$phone       = carbon_get_theme_option( 'crb_phone' );
							$phone_home       = carbon_get_theme_option( 'crb_phone_home' );
							$phone_clear = clear_phone( $phone );
							$phone_home_clear = clear_phone($phone_home);

							?>
                            <a href="tel:<?php echo $phone_home_clear; ?>" class="info-title"><?php echo $phone_home; ?></a>
                            <p class="info-subtitle"><?php echo esc_html__( 'Numarul de telefon', 'bs-axa' ); ?></p>
                        </div>
                    </li>
                    <li>
                        <span class="info-icon"><i class="icon icon-envelope"></i></span>
                        <div class="info-wrapper">
                            <p class="info-title">
                                <a href="mailto:<?php echo carbon_get_theme_option( 'crb_email' ); ?>"><?php echo carbon_get_theme_option( 'crb_email' ); ?></a>
                            </p>
                            <p class="info-subtitle"><?php echo esc_html__( 'Adresa email', 'bs-axa' ); ?></p>
                        </div>
                    </li>
                    <li class="last">
                        <span class="info-icon"><i class="icon icon-map-marker2"></i></span>
                        <div class="info-wrapper">
                            <p class="info-title"><?php echo carbon_get_theme_option( 'crb_address' . get_lang() ); ?></p>
                            <p class="info-subtitle"><?php echo esc_html__( 'Locatia', 'bs-axa' ); ?></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <nav class="site-navigation navdown navbar navbar-expand-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="site-nav-inner pull-left">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div id="navbarSupportedContent"
                                 class="collapse navbar-collapse navbar-responsive-collapse">
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
                    <span id="search">
                        <i class="icon icon-search"></i>
                    </span>
                </div><!-- Search end -->


                <div class="search-block" style="display: none;">
<!--					--><?php //if ( ! dynamic_sidebar( 'search' ) ): ?>
<!--                        <h2>search widget</h2>-->
<!--					--><?php //endif; ?>
                    	                <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                    <span class="search-close">&times;</span>
                </div><!-- Site search end -->
            </div><!--/ Container end -->

        </nav><!--/ Navigation end -->
    </header><!--/ Header end -->
