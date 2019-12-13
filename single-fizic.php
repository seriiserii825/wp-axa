<?php
get_header( 'main' );
$object  = get_queried_object();
$post_id = $object->ID;
?>
<?php if ( have_posts() ): ?>
	<?php the_post(); ?>


    <div id="banner-area" class="banner-area bg-overlay"
         style="background-image:url(<?php echo carbon_get_the_post_meta( 'crb_online_image' ); ?>">
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

        <section id="ts-service-single-content" class="ts-service-single-content">
            <div class="container">
                <div class="row">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>

    </section><!-- Main container end -->
<?php endif; ?>

<?php
get_footer();
