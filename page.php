<?php
get_header();
?>
    <div id="banner-area" class="banner-area bg-overlay"
         style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/banner/banner-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="banner-heading">
                        <h1 class="banner-title"><?php the_title(); ?></h1>
                    </div>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Banner area end -->


    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
					<?php if ( have_posts() ): ?>
						<?php the_post(); ?>
						<?php the_content(); ?>
					<?php endif; ?>
                    <div class="partners-gallery">
						<?php $partners = carbon_get_theme_option( 'crb_parners' ); ?>
						<?php foreach ( $partners as $partner ): ?>
                            <div class="item">
                                <a class="partner-logo__link" target="_blank" href="<?php echo $partner['link']; ?>">
                                    <img width="150" src="<?php echo $partner['image']; ?>" alt=""/>
                                </a>
                            </div>
						<?php endforeach; ?>
                    </div>
                </div><!-- Content Col end -->

                <div class="col-lg-4 col-md-12">
					<?php require_once __DIR__ . '/template-parts/content-sidebar-info.php'; ?>
                </div>
            </div><!-- Main row end -->

        </div><!-- Container end -->
    </section><!-- Main container end -->


<?php
get_footer();
