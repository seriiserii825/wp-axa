<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bs-axa
 */

get_header();
?>

	<div id="banner-area" class="banner-area bg-overlay" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/banner/banner-2.jpg)">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="banner-heading">
						<h1 class="banner-title">404</h1>
					</div>
				</div><!-- Col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</div><!-- Banner area end -->

	<section id="main-container" class="main-container padtb-0">
		<div class="container">
			<div class="row">
				<div class="col-6 text-center align-self-center">
					<div class="error-page text-center">
						<div class="error-code">
							<strong>404</strong>
						</div>
						<div class="error-message">
							<h3>Oops... <?php echo esc_html__( 'Pagina nu a fost gasita', 'bs-galadent' ); ?>!</h3>
						</div>
						<div class="error-body">
							<?php echo esc_html__( 'Apasa pe buttton, pentru a trece pe pagina principala', 'bs-galadent' ); ?> <br>
							<a href="<?php echo home_url(); ?>" class="btn btn-primary solid blank"><i class="fa fa-arrow-circle-left">&nbsp;</i> <?php echo esc_html__( 'Acasa', 'bs-galadent' );
							 ?></a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 text-right">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/404.png" alt="">
				</div>
			</div>
		</div><!-- Container end -->
	</section><!-- Main container end -->
<?php
get_footer();
