<?php
/**
 * Template Name: RCA
 */
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
		<?php if ( have_posts() ): ?>
			<?php the_post(); ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="rca">
							<?php the_content(); ?>
                            <div class="rca-intro">
                                <div class="rca-intro__img">
                                    <img src="<?php echo kama_thumb_src( 'w=200 &h=200', carbon_get_the_post_meta( 'crb_rca_image' ) ); ?>"
                                         alt="">
                                </div>
                                <p>
									<?php echo carbon_get_the_post_meta( 'crb_rca_intro_text' . get_lang() ); ?>
                                </p>
                            </div>

                            <div class="rca-1" id="js-1">
                                <h3 class="section-title-dash">
                                    <?php echo carbon_get_the_post_meta( 'crb_rca_1_title' . get_lang() ); ?>
                                    <span></span>
                                </h3>

                                <div class="block-success"><?php echo carbon_get_the_post_meta( 'crb_rca_1_text' . get_lang() ); ?></div>

                                <blockquote><?php echo carbon_get_the_post_meta( 'crb_rca_1_text_quote' . get_lang() ); ?></blockquote>

                                <div class="condition">
                                    <h3><?php echo carbon_get_the_post_meta( 'crb_rca_1_title_condition' . get_lang() ); ?></h3>

									<?php $conditions = carbon_get_the_post_meta( 'crb_rca_1_condition' ); ?>
                                    <ul class="list2b">
										<?php foreach ( $conditions as $item ): ?>
                                            <li>
                                                <h4><?php echo $item[ 'title' . get_lang() ]; ?></h4>
                                                <p><?php echo $item[ 'text' . get_lang() ]; ?></p>
                                            </li>
										<?php endforeach; ?>
                                    </ul>
                                </div>

                                <div class="block-warning"><?php echo carbon_get_the_post_meta( 'crb_rca_1_warning' . get_lang() ); ?></div>

                                <div class="footer-text">
									<?php echo wpautop( carbon_get_the_post_meta( 'crb_rca_1_footer_text' . get_lang() ) ); ?>
                                </div>
                                <ul class="list6b">
									<?php $list = carbon_get_the_post_meta( 'crb_rca_1_list' ); ?>
									<?php foreach ( $list as $item ): ?>
                                        <li><?php echo $item[ 'title' . get_lang() ] ?></li>
									<?php endforeach; ?>
                                </ul>
                            </div>

                            <div class="rca-2" id="js-2">
                                <h3 class="section-title-dash">
		                            <?php echo carbon_get_the_post_meta( 'crb_rca_2_title' . get_lang() ); ?>
                                    <span></span>
                                </h3>

                                <div>
									<?php echo wpautop( carbon_get_the_post_meta( 'crb_rca_2_intro_text' . get_lang() ) ); ?>
                                </div>
                                <div class="obligation">
									<?php echo wpautop( carbon_get_the_post_meta( 'crb_rca_2_obligation_text' . get_lang() ) ); ?>
                                    <ul class="list2b">
										<?php $obligations = carbon_get_the_post_meta( 'crb_rca_2_list' ); ?>
										<?php foreach ( $obligations as $item ): ?>
                                            <li><?php echo $item[ 'title' . get_lang() ] ?></li>
										<?php endforeach; ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- Content Col end -->

                    <div class="col-lg-4 col-md-12">
						<?php require_once __DIR__ . '/template-parts/content-sidebar-info.php'; ?>
                    </div>
                </div><!-- Main row end -->

            </div><!-- Container end -->

		<?php endif; ?>

    </section><!-- Main container end -->


<?php
get_footer();
