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


    <section id="main-container" class="main-container padt-90">
        <div id="ts-contact-us" class=" ts-contact-us">
            <div class="container">
                <div class="row">
                    <?php if(have_posts()): ?>
                    	<?php while(have_posts()): ?>
                    		<?php the_post(); ?>
                        <?php the_title(); ?>
                        <?php the_content(); ?>

                    	<?php endwhile; ?>
                    	<?php wp_reset_postdata(); ?>
                    <?php endif; ?>

                </div>
            </div> <!-- Container End -->
        </div> <!-- Pricing End -->
    </section><!-- Main container end -->

<?php
get_footer();
