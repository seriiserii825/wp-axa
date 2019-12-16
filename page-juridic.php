<?php
get_header();
/**
 * Template Name: Юридические лица
 */
?>
    <div id="banner-area" class="banner-area bg-overlay"
         style="background-image:url(<?php echo kama_thumb_src('w=1600 &h=515'); ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="banner-heading">
                        <h1 class="banner-title"><?php echo get_the_title( 8 ); ?></h1>
                    </div>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Banner area end -->


    <section id="main-container" class="main-container padt-90">
        <div class="fizic-page">
			<?php $juridic = new WP_Query( [
				'post_type'      => 'juridic',
				'posts_per_page' => - 1
			] ); ?>
            <div class="container">
                <div class="row">
					<?php if ( $juridic->have_posts() ): ?>
						<?php while ( $juridic->have_posts() ): ?>
							<?php $juridic->the_post(); ?>
                            <div class="col-lg-4">
                                <div class="ts-case-box">
                                    <div class="ts-case-image-wrapper">
                                        <img class="img-fluid" src="<?php echo kama_thumb_src( 'w=350 &h=250' ); ?>"
                                             alt="">
                                        <div class="ts-case-content">
                                            <div class="border-left-long">
                                                <span class="border-long"></span>
                                            </div>
                                            <h3 class="case-title">
                                                <a href="<?php the_permalink(); ?>"><small><?php echo get_the_terms(get_the_ID(), 'type')[0]->name; ?></small> <?php the_title(); ?></a>
                                            </h3>
                                            <p><?php echo carbon_get_the_post_meta( 'crb_fizic_short_text' . get_lang() ); ?></p>
                                            <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php echo esc_html__( 'Mai multe', 'bs-axa' ); ?></a>
                                        </div> <!-- Case Content End -->
                                    </div><!-- Case Content end-->
                                </div> <!-- Case Box End -->
                            </div> <!-- Col End -->

						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
                </div> <!-- Row End -->
            </div>
        </div><!-- Container end -->
    </section><!-- Main container end -->

<?php
get_footer();
