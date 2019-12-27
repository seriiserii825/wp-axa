<section id="ts-testimonial-static" class="section ts-testimonial-static no-padding">
    <div class="container">
        <div class="testimonial-items-wrapper">
            <div class="row">
				<?php $reviews = new WP_Query( [
					'post_type'      => 'reviews',
					'posts_per_page' => 3
				] ); ?>
				<?php if ( $reviews->have_posts() ): ?>
					<?php while ( $reviews->have_posts() ): ?>
						<?php $reviews->the_post(); ?>
                        <div class="col-lg-4 col-md-12">
                            <div class="testimonial-item-single">
                                <div class="quote-item-static-footer clearfix">
                                    <img class="img-fluid"
                                         src="<?php echo kama_thumb_src( 'w=100 &h=100' ); ?>"
                                         alt="Jonas Blue">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author"><?php the_title(); ?></h3>
                                        <span class="quote-subtext"><?php echo carbon_get_the_post_meta( 'crb_reviews_profession' . get_lang() ); ?></span>
                                    </div>
                                </div> <!-- Item End -->
								<?php the_content(); ?>
                            </div> <!-- Testimonial Single End -->
                        </div> <!-- Col End -->

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>

            </div> <!-- Row End -->
        </div> <!-- Testimonial Wrapper End -->
    </div>
</section>

