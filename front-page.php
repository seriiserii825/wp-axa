<?php
/**
 * Template Name: Principala
 */
?>

<?php get_header(); ?>

<?php
$slider = new WP_Query( [
	'post_type'      => 'slider',
	'posts_per_page' => - 1
] );
?>

<?php if ( $slider->have_posts() ): ?>
    <!-- Carousel -->
    <div id="main-slide" class="carousel slide main-slider" data-ride="carousel">

        <!-- Carousel inner -->
        <div class="carousel-inner">
			<?php $i = 0;
			while ( $slider->have_posts() ): ?>
				<?php $slider->the_post(); ?>
                <div class="carousel-item <?php if ( $i == 0 ) {
					echo ' active';
				} ?>" style="background-image:url(<?php echo kama_thumb_src( 'w=1600 &h=400' ); ?>">
                    <div class="container">
                        <div class="slider-content text-left">
                            <div class="col-md-12">
                                <h2 class="slide-title-classic animated6"><?php the_title(); ?></h2>
                                <div class="slider-description lead animated3"><?php the_content(); ?></div>
                                <p class="animated6">
                                    <a href="<?php echo get_page_link( 2 ); ?>"
                                       class="slider btn btn-primary"><?php echo get_the_title( 2 ); ?></a>
                                    <a href="<?php echo get_page_link( 14 ); ?>"
                                       class="slider btn btn-border"><?php echo get_the_title( 14 ); ?></a>
                                </p>
                            </div><!-- Col end -->
                        </div><!-- Slider content end -->
                    </div><!--Container end -->
                </div><!--/ Carousel item 1 end -->

				<?php $i ++; endwhile; ?>
			<?php wp_reset_postdata(); ?>
        </div>
        <a class="left carousel-control carousel-item-left" href="#">
            <span><i class="fa fa-angle-left"></i></span>
        </a>

        <a class="right carousel-control carousel-item-right" href="#">
            <span><i class="fa fa-angle-right"></i></span>
        </a>
    </div>
<?php endif; ?>


<section id="about-feature-classic" class="section section-border about-feature-classic">
    <div class="about-feature-classic__header">
        <h2 class="about-feature-classic__title"><?php echo esc_html__( 'Online', 'bs-axa' ); ?></h2>
        <p class="about-feature-classic__text">
            <i class="fa fa-car" aria-hidden="true"></i>
            <span><?php echo esc_html__( 'Livrare gratuita', 'bs-axa' ); ?></span>
        </p>
    </div>

    <div class="container">
        <div class="row">
			<?php $online = new WP_Query( [
				'post_type'      => 'online',
				'posts_per_page' => - 1
			] ); ?>
			<?php if ( $online->have_posts() ): ?>
				<?php while ( $online->have_posts() ): ?>
					<?php $online->the_post(); ?>
                    <div class="col-lg-3 col-md-12 text-center">
                        <div class="about-classic-box-single">
                            <div class="about-content-box ">
                                <div class="about-classic-icon">
                                    <i class="fa fa-<?php echo carbon_get_the_post_meta( 'crb_online_icon' ); ?>"
                                       aria-hidden="true"></i>
                                </div><!-- Feature Img end -->
                                <div class="about-classic-content">
                                    <h3><?php the_title(); ?></h3>
                                    <a class="btn btn-primary"
                                       href="<?php the_permalink(); ?>"><?php echo esc_html__( 'Comanda', 'bs-galadent' ); ?></a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Col end -->
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
        </div> <!-- Row End -->
    </div> <!-- Container end -->
</section> <!-- About classic end -->

<section id="ts-services" class="section section-border ts-services solid-bg">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h2 data-title="<?php echo get_the_title( 8 ); ?>" class="section-title-dash">
					<?php echo get_the_title( 8 ); ?>
                    <span>&nbsp;</span>
                </h2>
            </div><!-- Col end -->
        </div><!--/ Title row end -->
        <div class="ts-services-wrap">
			<?php $juridic = new WP_Query( [
				'post_type'      => 'juridic',
				'posts_per_page' => - 1
			] ); ?>
			<?php if ( $juridic->have_posts() ): ?>
				<?php while ( $juridic->have_posts() ): ?>
					<?php $juridic->the_post(); ?>
                    <div class="ts-service-overlay">
                        <div class="ts-image-wrapper">
                            <img class="img-fluid" src="<?php echo kama_thumb_src( 'w=350 &h=310' ); ?>" alt="">
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">
                                <i class="fa fa-<?php echo carbon_get_the_post_meta( 'crb_online_icon' ); ?>"></i>
                                <span class="service-content__title"><?php echo esc_html( get_the_title() ); ?></span>
                            </h3>
                            <div class="ts-services__text"><?php the_content(); ?></div>
                            <p>
                                <a class="btn btn-primary icon-bg"
                                   href="<?php the_permalink(); ?>"><?php echo esc_html__( 'Mai mult', 'bs-galadent' ); ?>
                                    <i class="icon icon-arrow-right"></i>
                                </a>
                            </p>
                        </div>
                    </div><!-- Service1 end -->
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
        </div><!-- Main row end -->
    </div><!-- Conatiner end -->
</section><!-- Main container end -->

<section id="ts-services" class="section section-border ts-services solid-bg">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h2 data-title="<?php echo get_the_title( 2 ); ?>" class="section-title-dash">
					<?php echo get_the_title( 2 ); ?>
                    <span>&nbsp;</span>
                </h2>
            </div><!-- Col end -->
        </div><!--/ Title row end -->
        <div class="ts-services-wrap">
			<?php $fizic = new WP_Query( [
				'post_type'      => 'online',
				'posts_per_page' => - 1
			] ); ?>
			<?php if ( $fizic->have_posts() ): ?>
				<?php while ( $fizic->have_posts() ): ?>
					<?php $fizic->the_post(); ?>
                    <div class="ts-service-overlay">
                        <div class="ts-image-wrapper">
                            <img class="img-fluid" src="<?php echo kama_thumb_src( 'w=350 &h=310' ); ?>" alt="">
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">
                                <i class="fa fa-<?php echo carbon_get_the_post_meta( 'crb_online_icon' ); ?>"></i>
                                <span><?php echo esc_html( get_the_title() ); ?></span>
                            </h3>
                            <div class="ts-services__text"><?php the_content(); ?></div>
                            <p>
                                <a class="btn btn-primary icon-bg"
                                   href="<?php the_permalink(); ?>"><?php echo esc_html__( 'Mai mult', 'bs-galadent' ); ?>
                                    <i class="icon icon-arrow-right"></i>
                                </a>
                            </p>
                        </div>
                    </div><!-- Service1 end -->
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
        </div><!-- Main row end -->
    </div><!-- Conatiner end -->
</section><!-- Main container end -->


<section id="ts-choose-us" class="section ts-choose-us">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 data-title="<?php echo esc_html__( 'De ce noi', 'bs-galadent' ); ?>"
                    class="section-title-dash"> <?php echo esc_html__( 'De ce noi', 'bs-galadent' ); ?>
                    <span class="dashborder">&nbsp;</span>
                </h2>
            </div> <!-- Col End -->
        </div> <!-- Row End -->
        <div class="ts-choose-us-wrap">
			<?php $choose = carbon_get_post_meta( 25, 'crb_why_choose_us' ); ?>
			<?php foreach ( $choose as $item ): ?>
                <div class="ts-feature-classic">
                    <div class="ts-feature-info icon-left icon-round">
                     <span class="feature-icon">
                        <i class="<?php echo $item['icon']; ?>"></i>
                     </span>
                        <div class="feature-content">
                            <h3 class="ts-feature-title"><?php echo $item[ 'title' . get_lang() ]; ?></h3>
                            <p><?php echo $item[ 'text' . get_lang() ]; ?></p>
                        </div> <!-- Feature content end -->
                    </div> <!-- Feature Info End -->
                </div> <!-- Features end -->
			<?php endforeach; ?>
        </div> <!-- Row End -->
    </div> <!-- Container end -->
</section><!-- section end -->

<section id="ts-facts-area" class="ts-facts-area padtb-0">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 funfacts-bg">
                <div class="facts-content">
                    <!-- Generator: Adobe Illustrator 19.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 488.779 488.779" style="enable-background:new 0 0 488.779 488.779;"
                         xml:space="preserve">
                        <g>
                            <g>
                                <path d="M434.539,221.226l-6-8.2c-6.6-9-6.7-21.2-0.2-30.3l5.9-8.3c9-12.7,4.8-30.5-8.9-37.9l-9-4.8c-9.8-5.3-15.2-16.2-13.3-27.2
                                    l1.7-10.1c2.6-15.4-8.9-29.6-24.5-30.2l-10.2-0.4c-11.1-0.5-20.7-8-23.8-18.7l-2.8-9.8c-4.3-15-20.8-22.8-35.2-16.6l-9.4,4
                                    c-10.2,4.4-22.1,1.8-29.6-6.5l-6.8-7.6c-10.4-11.6-28.7-11.5-38.9,0.3l-6.7,7.7c-7.3,8.4-19.2,11.2-29.5,7l-9.4-3.9
                                    c-14.4-6-30.8,2.1-34.9,17.1l-2.7,9.8c-2.9,10.7-12.4,18.4-23.5,19.1l-10.2,0.6c-15.6,0.9-26.9,15.3-24,30.6l1.8,10
                                    c2,11-3.2,22-12.9,27.4l-8.9,5c-13.7,7.6-17.6,25.4-8.4,38l6,8.2c6.6,9,6.7,21.2,0.2,30.3l-5.9,8.3c-9,12.7-4.8,30.5,8.9,37.9
                                    l9,4.8c9.8,5.3,15.2,16.2,13.3,27.2l-1.7,10.1c-2.6,15.4,8.9,29.6,24.5,30.2l10.2,0.4c11.1,0.5,20.7,8,23.8,18.7l2.8,9.8
                                    c4.3,15,20.8,22.8,35.2,16.6l9.4-4c10.2-4.4,22.1-1.8,29.6,6.5l6.8,7.6c10.4,11.6,28.7,11.5,38.9-0.3l6.7-7.7
                                    c7.3-8.4,19.2-11.2,29.5-7l9.4,3.9c14.4,6,30.8-2.1,34.9-17.1l2.7-9.8c2.9-10.7,12.4-18.4,23.5-19.1l10.2-0.6
                                    c15.6-0.9,26.9-15.3,24-30.6l-1.8-10c-2-11,3.2-22,12.9-27.4l8.9-5C439.839,251.726,443.739,233.826,434.539,221.226z
                                     M244.239,329.226c-71.7,0-130-58.3-130-130s58.3-130,130-130s130,58.3,130,130S315.939,329.226,244.239,329.226z"/>
                                <path d="M380.039,361.126l-4.5,0.3l-2.2,8c-6.5,23.7-28.2,40.2-52.7,40.2c-7.2,0-14.2-1.4-20.8-4.1l-7.6-3.2l-2.4,2.8l37.1,67.5
                                    c2.2,3.9,6,6.7,10.4,7.5l44.7,8.3c7,1.3,14-2.5,16.7-9.2l16.9-42.2c1.7-4.2,1.4-8.9-0.8-12.8L380.039,361.126z"/>
                                <path d="M191.739,406.226c-6.9,3-14.1,4.5-21.6,4.5c-24.2,0-45.8-16.2-52.5-39.4l-2.3-7.9l-8-0.3l-33.6,61.2
                                    c-2.2,3.9-2.5,8.6-0.8,12.8l16.9,42.2c2.7,6.7,9.7,10.5,16.7,9.2l44.7-8.3c4.4-0.8,8.2-3.6,10.4-7.5l38.1-69.3l-0.3-0.3
                                    L191.739,406.226z"/>
                                <path d="M319.139,191.926c0,0,7.5-11.7-2.2-20.6c-12.1-11.1-45-3.7-45-3.7l0,0c-2.3,0.4-4.7,0.9-7.3,1.5c0,0-11.4,5.3,0-29.2
                                    s-7.6-39.9-15.6-39.9s-5.3,17.1-5.3,17.1s-17.1,47.1-33.4,59.6c-4.3,4.6-6.7,9.7-7.9,13.3c-2.6-2.2-5.9-3.5-9.5-3.5h-21.9
                                    c-8.1,0-14.6,6.6-14.6,14.6v58.4c0,8.1,6.6,14.6,14.6,14.6h21.9c3,0,5.8-0.9,8.1-2.5c0.5-0.5,3.4-3.4,3.4-11.5v-36.3
                                    c0,1.4,0.2,45,25.3,47.7c9,0.6,20.1,1.1,31.2,0.9c10.1,0.8,20.9,0.9,29.4-0.9c29-6.2,21.8-26.4,21.8-26.4
                                    c15.7-11.8,6.8-26.5,6.8-26.5C332.739,204.126,319.139,191.926,319.139,191.926z"/>
                            </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
</svg>
                    <div class="heading">
                        <div class="column-title">
                            <h3><?php echo carbon_get_theme_option( 'crb_numbers_title' . get_lang() ); ?></h3>
                        </div>
                        <p><?php echo carbon_get_theme_option( 'crb_numbers_text' . get_lang() ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partners start -->
<section id="clients-area" class="clients-area">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h2 class="section-title-dash">
					<?php echo esc_html__( 'Partenerii nostrii', 'bs-axa' ); ?>
                    <span></span>
                </h2>
            </div><!-- Col end -->
        </div><!-- Title row end -->

        <div class="row">
			<?php $partners = carbon_get_theme_option( 'crb_parners' ); ?>
            <div class="partners-wrap col-sm-12 ">
                <a class="partners-button partners-button--prev" href="#">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                </a>
                <a class="partners-button partners-button--next" href="#">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </a>

                <div id="partners-carousel" class="owl-carousel owl-theme text-center partners">
					<?php foreach ( $partners as $partner ): ?>
                        <div class="item">
                            <a class="partner-logo__link" target="_blank" href="<?php echo $partner['link']; ?>">
                                <img width="150" src="<?php echo $partner['image']; ?>" alt=""/>
                            </a>
                        </div>
					<?php endforeach; ?>
                </div><!--/ Owl carousel end -->

            </div>

        </div><!--/ Content row end -->
    </div><!--/ Container end -->
</section><!--/ Partners end -->
<?php get_footer(); ?>
