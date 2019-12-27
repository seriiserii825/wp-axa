
<!-- Footer start -->
<footer id="footer" class="footer-light">
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 footer-widget">
                    <h3 class="widget-title"><?php echo esc_html__( 'Menu', 'bs-galadent' ); ?></h3>
                    <?php wp_nav_menu( [
                    	'theme_location'  => 'menu-main',
                    	'menu'            => '',
                    	'container'       => '',
                    	'container_class' => '',
                    	'container_id'    => '',
                    	'menu_class'      => 'unstyled footer-menu',
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

                </div><!-- Our Company end -->

                <div class="col-lg-6 map footer-widget">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2719.8747374477525!2d28.819407315462893!3d47.02306373609824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97dcd7165caed%3A0x1d7c3c4d480b3c1a!2zU3RyYWRhIE1hcmlhIENlYm90YXJpIDExLCBDaGnImWluxIN1LCDQnNC-0LvQtNCw0LLQuNGP!5e0!3m2!1sru!2s!4v1576489775628!5m2!1sru!2s" width="100%" height="280" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div><!-- Support end -->

                <div class="col-lg-3 col-md-12 footer-widget">

                    <h3 class="widget-title"><?php echo esc_html__( 'Contactati-ne', 'bs-galadent' ); ?></h3>
                    <div class="row">
                        <div class="col-md-12">
                            <h4><?php echo esc_html__( 'Locatia', 'bs-galadent' ); ?></h4>
                            <p><?php echo carbon_get_theme_option('crb_address'.get_lang()); ?></p>

                            <h4><?php echo esc_html__( 'Telefoane', 'bs-galadent' ); ?></h4>
                            <ul>
                                <li>
                                    <a href="tel:<?php echo clear_phone(carbon_get_theme_option('crb_phone')) ?>"><?php echo carbon_get_theme_option('crb_phone'); ?></a>
                                </li>
                            </ul>

                            <h4><?php echo esc_html__( 'Posta', 'bs-galadent' ); ?></h4>
                            <ul>
                                <li>
                                    <a href="mailto:<?php echo carbon_get_theme_option('crb_email'); ?>"><?php echo carbon_get_theme_option('crb_email'); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div><!--Inner row 1 end -->
                </div><!-- Col end -->

            </div><!--/ Content row end -->
        </div><!--/ Container end -->
    </div><!-- Footer Main -->


    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-3">
                    <div class="footer-logo">
                        <a href="<?php echo home_url() ?>">
                            <img src="<?php echo carbon_get_theme_option('crb_logo'); ?>" width="160" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6">
                    <p><?php echo carbon_get_theme_option('crb_description'.get_lang()) ?></p>
                </div>

                <div class="col-md-12 col-lg-3 text-center">
                    <div class="footer-social social-color">
	                    <?php $socials = carbon_get_theme_option( 'crb_socials' ); ?>
	                    <?php if ( $socials ): ?>
                            <ul>
                                <li>
				                    <?php foreach ( $socials as $social ): ?>
                                        <a href="<?php echo $social['link']; ?>">
                                            <span class="social-icon"><i class="fab fa-<?php echo $social['icon']; ?>"></i></span>
                                        </a>
				                    <?php endforeach; ?>
                                </li>
                            </ul>
	                    <?php endif; ?>
                    </div><!-- Footer social end -->
                    <div class="copyright-info">
                        <span><?php echo carbon_get_theme_option('crb_copyright'.get_lang()); ?></span>
                    </div>
                </div>
            </div><!-- Row end -->

            <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
                <button class="btn btn-primary" title="Back to Top">
                    <i class="fa fa-angle-double-up"></i>
                </button>
            </div>

        </div><!-- Container end -->
    </div><!-- Copyright end -->
</footer><!-- Footer end -->

</div><!-- Body inner end -->
<?php wp_footer(); ?>
</body>
</html>
