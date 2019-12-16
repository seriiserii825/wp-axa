<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bs-axa
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
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
					<?php if ( have_posts() ): ?>
					<?php while ( have_posts() ): ?>
					<?php the_post(); ?>
                    <div class="post-content post-single">
                        <div class="post-media post-image">
                            <img src="<?php echo kama_thumb_src( 'w=730 &h=400' ); ?>" class="img-fluid" alt="">
                            <span class="post-meta-date"><span
                                        class="day"><?php echo get_the_date( 'd' ); ?></span><?php echo get_the_date( 'M' ); ?></span>
                        </div>

                        <div class="post-body clearfix">
                            <div class="entry-header">
                                <div class="post-meta">
									<?php $category = get_the_category()[0]; ?>
                                    <span class="post-cat">
                                              <i class="icon icon-folder"></i>
                                            <a href="<?php echo get_category_link( $category->term_id ) ?>"> <?php echo $category->name; ?></a>
                                           </span>
									<?php $num_comments = get_comments_number(); ?>
                                    <span class="post-comment"><i class="icon icon-comment"></i>
                                                <a href="news-single.html#"
                                                   class="comments-link"></a><?php echo $num_comments; ?>
                                    </span>
                                </div>

                                <h2 class="entry-title"><?php the_title(); ?></h2>
                            </div><!-- header end -->

                            <div class="entry-content">
								<?php the_content(); ?>
                            </div>
                        </div><!-- Post content end -->
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						<?php endif; ?>


                    </div><!-- Content Col end -->
                </div><!-- Main row end -->

                <div class="col-lg-4 col-md-12">
		            <?php require_once __DIR__.'/template-parts/content-sidebar.php';?>
                </div>
            </div><!-- Container end -->
    </section><!-- Main container end -->


<?php
get_footer();
