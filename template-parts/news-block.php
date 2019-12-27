<section id="ts-news" class="section ts-news">
    <div class="container">
        <div class="row text-center">
            <div class="col text-center">
                <h2 data-title="<?php echo esc_html__( 'Ultimele Noutati', 'bs-galadent' ); ?>"
                    class="section-title-dash"> <?php echo esc_html__( 'Ultimele Noutati', 'bs-galadent' ); ?>
                    <span class="dashborder">&nbsp;</span>
                </h2>
            </div> <!-- Col End -->
        </div><!--/ Title row end -->
		<?php $news_one = new WP_Query( [
			'category_name'  => 'noutati',
			'posts_per_page' => 1
		] ); ?>

        <div class="row">
            <div class="col-lg-6 col-md-12">
				<?php if ( $news_one->have_posts() ): ?>
					<?php $i = 0;
					while ( $news_one->have_posts() ): ?>
						<?php $news_one->the_post(); ?>
						<?php if ( $i > 0 ): ?>
							<?php break; ?>
						<?php else: ?>
                            <div class="latest-post post-large">
                                <div class="latest-post-media">
                                    <a href="<?php the_permalink(); ?>" class="latest-post-img">
                                        <img class="img-fluid" src="<?php echo kama_thumb_src( 'w=540' ); ?>" alt="img">
                                    </a>
									<?php
									$date_day   = get_the_date( 'd' );
									$date_month = get_the_date( 'M' );
									?>
                                    <div class="post-date-time">
                                        <span class="post-item-day"><?php echo $date_day; ?></span>
                                        <span class="post-item-month"><?php echo $date_month; ?></span>
                                    </div>
                                    <div class="post-body">
                                        <h4 class="post-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h4>
                                        <p><?php echo carbon_get_the_post_meta( 'crb_news_short_text' . get_lang() ); ?></p>
                                        <a class="btn btn-primary"
                                           href="<?php the_permalink(); ?>"><?php echo esc_html__( 'Mai multe', 'bs-galadent' ); ?></a>
                                    </div><!-- Post body end -->
                                </div><!-- Post media end -->
                            </div><!-- Latest post end -->
						<?php endif; ?>
						<?php $i ++; endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>

            </div><!-- Col big news end -->

            <div class="col-lg-6 col-md-12">
                <div class="row">
					<?php $news = new WP_Query( [
						'category_name'  => 'noutati',
						'posts_per_page' => 4
					] ); ?>
					<?php if ( $news->have_posts() ): ?>
						<?php $i = 0;
						while ( $news->have_posts() ): ?>
							<?php $news->the_post(); ?>
							<?php if ( $i !== 0 ): ?>
                                <div class="col-md-12">
                                    <div class="latest-post latest-post-right last">
                                        <div class="latest-post-media">
                                            <a href="<?php the_permalink(); ?>" class="latest-post-img">
                                                <img class="img-fluid"
                                                     src="<?php echo kama_thumb_src( 'w=200 &h=110' ); ?>" alt="img">
                                            </a>

											<?php
											$date_day   = get_the_date( 'd' );
											$date_month = get_the_date( 'M' );
											?>
                                            <div class="post-date-time">
                                                <span class="post-item-day"><?php echo $date_day; ?></span>
                                                <span class="post-item-month"><?php echo $date_month; ?></span>
                                            </div>
                                        </div>
                                        <div class="post-body">
                                            <h4 class="post-title">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h4>
                                            <div class="post-text">
                                                <p><?php echo carbon_get_the_post_meta( 'crb_news_short_text' . get_lang() ); ?></p>
                                            </div>
                                        </div>
                                    </div><!-- Latest post end -->
                                </div><!--Col end -->
							<?php endif; ?>
							<?php $i ++; endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>

                </div><!-- row end -->
            </div><!-- Col small news end -->
        </div><!--/ Content row end -->

        <div class="row">
            <div class="col-12 text-center">
                <a href="<?php echo get_category_link( 1 ); ?>"
                   class="btn btn-primary news-btn"><?php echo esc_html__( 'Vezi toate', 'bs-galadent' ); ?></a>
            </div>
        </div>
    </div><!--/ Container end -->
</section><!--/ News end -->

