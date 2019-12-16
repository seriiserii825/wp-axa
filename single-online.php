<?php
get_header();
$object = get_queried_object();
$post_id = $object->ID;
?>
<?php if(have_posts()): ?>
	 <?php the_post(); ?>
    <div id="banner-area" class="banner-area bg-overlay" style="background-image:url(<?php echo carbon_get_the_post_meta('crb_online_image');?>">
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
        <div class="online-form-page">
            <div class="container">
                <div class="online-form__header">
                    <ul class="breadcrumb-list">
                        <li><a href="<?php echo home_url(); ?>"><?php echo get_the_title( 25 ); ?></a></li>
                        <li><?php the_title(); ?></li>
                    </ul>
                    <div class="online-form__header-item">
                        <?php $page_id = carbon_get_the_post_meta('crb_online_link_to_page'); ?>
                        <h4><?php echo esc_html__( 'Află mai multe despre ', 'bs-galadent' ); ?></h4>
                        <a href="<?php echo get_the_permalink($page_id); ?>"><?php echo get_the_title($page_id); ?></a>
                    </div>
                </div>
                <div class="online-form__content">
                    <?php if($post_id == 50): ?>
                        <?php require_once __DIR__.'/template-parts/content-50.php';?>
                    <?php elseif($post_id == 42): ?>
	                    <?php require_once __DIR__.'/template-parts/content-42.php';?>
                    <?php elseif($post_id == 46): ?>
	                    <?php require_once __DIR__.'/template-parts/content-46.php';?>
                    <?php elseif($post_id == 48): ?>
	                    <?php require_once __DIR__.'/template-parts/content-48.php';?>
                    <?php else: ?>
	                    <?php require_once __DIR__.'/template-parts/content-none.php';?>
                    <?php endif; ?>
                </div>
            </div> <!-- Container End -->
        </div>
    </section><!-- Main container end -->

<?php endif; ?>

<?php
get_footer();
