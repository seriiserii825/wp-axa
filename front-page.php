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
                <div class="carousel-item patb-100 <?php if ( $i == 0 ) {
					echo ' active';
				} ?>" style="background-image:url(<?php echo kama_thumb_src( 'w=1600 &h=700' ); ?>">
                    <div class="container">
                        <div class="slider-content text-left">
                            <div class="col-md-12">
                                <h2 class="slide-title-classic animated6"><?php the_title(); ?></h2>
                                <div class="slider-description lead animated3"><?php the_content(); ?></div>
                                <p class="animated6">
                                    <a href="index-3.html#" class="slider btn btn-primary">Our Services</a>
                                    <a href="index-3.html#" class="slider btn btn-border">Contact Us</a>
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
    <h2 class="section-title-dash">Online</h2>
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
                            <img class="img-fluid" src="<?php echo kama_thumb_src('w=350 &h=310'); ?>" alt="">
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
                <h2 data-title="<?php echo esc_html__( 'De ce noi', 'bs-galadent' ); ?>" class="section-title-dash"> <?php echo esc_html__( 'De ce noi', 'bs-galadent' ); ?>
                    <span class="dashborder">&nbsp;</span>
                </h2>
            </div> <!-- Col End -->
        </div> <!-- Row End -->
        <div class="ts-choose-us-wrap">
            <?php $choose = carbon_get_post_meta(25, 'crb_why_choose_us'); ?>
            <?php foreach($choose as $item): ?>
                <div class="ts-feature-classic">
                    <div class="ts-feature-info icon-left icon-round">
                     <span class="feature-icon">
                        <i class="<?php echo $item['icon']; ?>"></i>
                     </span>
                        <div class="feature-content">
                            <h3 class="ts-feature-title"><?php echo $item['title'.get_lang()]; ?></h3>
                            <p><?php echo $item['text'.get_lang()]; ?></p>
                        </div> <!-- Feature content end -->
                    </div> <!-- Feature Info End -->
                </div> <!-- Features end -->
            <?php endforeach; ?>
        </div> <!-- Row End -->
    </div> <!-- Container end -->
</section><!-- section end -->

<section id="ts-testimonial-static" class="section ts-testimonial-static no-padding">
    <div class="container">
        <div class="testimonial-items-wrapper">
            <div class="row">
                <?php $reviews = new WP_Query([
                    'post_type' => 'reviews',
                    'posts_per_page' => 3
                ]); ?>
                <?php if($reviews->have_posts()): ?>
                	<?php while($reviews->have_posts()): ?>
                		<?php $reviews->the_post(); ?>
                        <div class="col-lg-4 col-md-12">
                            <div class="testimonial-item-single">
                                <div class="quote-item-static-footer clearfix">
                                    <img class="img-fluid"
                                         src="<?php echo kama_thumb_src('w=100 &h=100'); ?>"
                                         alt="Jonas Blue">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author"><?php the_title(); ?></h3>
                                        <span class="quote-subtext"><?php echo carbon_get_the_post_meta('crb_reviews_profession'.get_lang()); ?></span>
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

<section id="contact-tab" class="contact-tab no-padding solid-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="col heading text-white">
                    <h2 class="column-title">
                        <span>Get quote</span>
                        Get Insurance
                        Quote
                    </h2>
                    <p>For travellers who do need emergency Canada and United States.</p>
                </div> <!-- Col End -->
                <div class="contact-img">
                    <img class="img-fluid"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-bg.png" alt="">
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="insurance-tab">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="travel-tab" data-toggle="tab" href="index-3.html#travel"
                               role="tab" aria-controls="home" aria-selected="true">
                                <span> <i class="icon icon-travel"></i> </span>
                                Travel Insurance
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="home-tab" data-toggle="tab" href="index-3.html#home" role="tab"
                               aria-controls="profile" aria-selected="false">
                                <span> <i class="icon icon-house-1"></i> </span>
                                Home Insurance
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="car-tab" data-toggle="tab" href="index-3.html#car" role="tab"
                               aria-controls="contact" aria-selected="false">
                                <span> <i class="icon icon-car2"></i> </span>
                                Car Insurance
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="life-tab" data-toggle="tab" href="index-3.html#life" role="tab"
                               aria-controls="contact" aria-selected="false">
                                <span> <i class="icon icon-heart"></i> </span>
                                Life Insurance
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="travel" role="tabpanel" aria-labelledby="travel-tab">
                        <div id="general-form" class="form-container active">
                            <!-- START copy section: General Contact Form -->
                            <form class="contactMe small"
                                  action="http://demo.themewinter.com/html/insurex/contactme/home-form.php"
                                  method="POST" enctype="multipart/form-data">
                                <section>
                                    <h3>Travel Insurance Quote</h3>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="title">Your name</div>
                                            <input type="text" name="name" data-displayname="Name" class="field"
                                                   placeholder="Name*" required>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="title">Your e-mail</div>
                                            <input type="email" name="email" data-displayname="Email" class="field"
                                                   placeholder="Email*" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="title">Phone</div>
                                            <input type="tel" name="phone" data-displayname="Phone" class="field"
                                                   placeholder="Phone" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="title">Total Person</div>
                                            <input type="number" name="personNumber" data-displayname="Person"
                                                   class="field" placeholder="Total Person*" required="">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="title">Destination*</div>
                                            <input type="text" name="destination" data-displayname="Destination"
                                                   class="field" placeholder="Destination*" required>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="title">Days to Stay*</div>
                                            <input type="number" name="dayToStay" data-displayname="Days to Stay"
                                                   class="field" placeholder="Days to Stay*" required>
                                        </div>
                                    </div>

                                    <!-- Google reCAPTCHA -->
                                    <!-- Create a site key for your website: https://www.google.com/recaptcha -->
                                    <!-- Replace YOUR_SITE_KEY_HERE with your site key -->
                                    <!-- To enable Google reCAPTCHA V2, uncomment the next line -->
                                    <!-- <div class="re-captcha" data-sitekey="YOUR_SITE_KEY_HERE"></div> -->
                                    <!-- To enable Google Invisible reCAPTCHA, uncomment the next line -->
                                    <!-- <div class="re-captcha invisible" data-sitekey="YOUR_SITE_KEY_HERE"></div> -->

                                    <div class="msg"></div>

                                    <button class="btn btn-primary float-lg-right float-md-none" type="submit"
                                            data-sending="Sending...">Submit
                                    </button>
                                </section>
                            </form>
                            <!-- END copy section: General Contact Form -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div id="general-form1" class="form-container active">
                            <!-- START copy section: General Contact Form -->
                            <form class="contactMe small"
                                  action="http://demo.themewinter.com/html/insurex/contactme/travel-form.php"
                                  method="POST" enctype="multipart/form-data">
                                <section>
                                    <h3>Home Insurance quote</h3>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="title">Property Type</div>
                                            <select name="propertyType" data-displayname="Property Type" class="field"
                                                    placeholder="Property Type" required>
                                                <option default></option>
                                                <option value="information">Information</option>
                                                <option value="support">Support request</option>
                                                <option value="other">Other ...</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="title">Year of build</div>
                                            <input type="text" name="yearOfBuild" data-displayname="Year Of Build"
                                                   class="field cm-date" autocomplete="off" placeholder="Year of build*"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="title">Full Address</div>
                                            <input type="text" name="fullAddress" data-displayname="Full Address"
                                                   class="field" placeholder="Full Address" required>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="title">Property Used for</div>
                                            <select name="propertyUsedFor" data-displayname="Property Used For"
                                                    class="field" placeholder="Property Used for" required>
                                                <option default></option>
                                                <option value="information">Information</option>
                                                <option value="support">Support request</option>
                                                <option value="other">Other ...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <h3>Your Details</h3>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="title">Your name</div>
                                            <input type="text" name="name" data-displayname="Name" class="field"
                                                   placeholder="Your name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="title">Your e-mail</div>
                                            <input type="email" name="email" data-displayname="Email" class="field"
                                                   placeholder="Email*" required>
                                        </div>
                                    </div>

                                    <!-- Google reCAPTCHA -->
                                    <!-- Create a site key for your website: https://www.google.com/recaptcha -->
                                    <!-- Replace YOUR_SITE_KEY_HERE with your site key -->
                                    <!-- To enable Google reCAPTCHA V2, uncomment the next line -->
                                    <!-- <div class="re-captcha" data-sitekey="YOUR_SITE_KEY_HERE"></div> -->
                                    <!-- To enable Google Invisible reCAPTCHA, uncomment the next line -->
                                    <!-- <div class="re-captcha invisible" data-sitekey="YOUR_SITE_KEY_HERE"></div> -->

                                    <div class="msg"></div>

                                    <button class="btn btn-primary float-lg-right float-md-none" type="submit"
                                            data-sending="Sending...">Submit
                                    </button>
                                </section>
                            </form>
                            <!-- END copy section: General Contact Form -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="car" role="tabpanel" aria-labelledby="car-tab">
                        <div id="general-form2" class="form-container active">
                            <!-- START copy section: General Contact Form -->
                            <form class="contactMe small"
                                  action="http://demo.themewinter.com/html/insurex/contactme/home-form.php"
                                  method="POST" enctype="multipart/form-data">
                                <section>
                                    <h3>Travel Insurance Quote</h3>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="title">Your name</div>
                                            <input type="text" name="name" data-displayname="Name" class="field"
                                                   placeholder="Name*" required>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="title">Your e-mail</div>
                                            <input type="email" name="email" data-displayname="Email" class="field"
                                                   placeholder="Email*" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="title">Phone</div>
                                            <input type="tel" name="phone" data-displayname="Phone" class="field"
                                                   placeholder="Phone" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="title">Total Person</div>
                                            <input type="number" name="personNumber" data-displayname="Person"
                                                   class="field" placeholder="Total Person*" required="">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="title">Destination*</div>
                                            <input type="text" name="destination" data-displayname="Destination"
                                                   class="field" placeholder="Destination*" required>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="title">Days to Stay*</div>
                                            <input type="number" name="dayToStay" data-displayname="Days to Stay"
                                                   class="field" placeholder="Days to Stay*" required>
                                        </div>
                                    </div>

                                    <!-- Google reCAPTCHA -->
                                    <!-- Create a site key for your website: https://www.google.com/recaptcha -->
                                    <!-- Replace YOUR_SITE_KEY_HERE with your site key -->
                                    <!-- To enable Google reCAPTCHA V2, uncomment the next line -->
                                    <!-- <div class="re-captcha" data-sitekey="YOUR_SITE_KEY_HERE"></div> -->
                                    <!-- To enable Google Invisible reCAPTCHA, uncomment the next line -->
                                    <!-- <div class="re-captcha invisible" data-sitekey="YOUR_SITE_KEY_HERE"></div> -->

                                    <div class="msg"></div>

                                    <button class="btn btn-primary float-lg-right float-md-none" type="submit"
                                            data-sending="Sending...">Submit
                                    </button>
                                </section>
                            </form>
                            <!-- END copy section: General Contact Form -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="life" role="tabpanel" aria-labelledby="life-tab">
                        <div id="general-form3" class="form-container active">
                            <!-- START copy section: General Contact Form -->
                            <form class="contactMe small"
                                  action="http://demo.themewinter.com/html/insurex/contactme/travel-form.php"
                                  method="POST" enctype="multipart/form-data">
                                <section>
                                    <h3>Home Insurance quote</h3>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="title">Property Type</div>
                                            <select name="propertyType" data-displayname="Property Type" class="field"
                                                    placeholder="Property Type" required>
                                                <option default></option>
                                                <option value="information">Information</option>
                                                <option value="support">Support request</option>
                                                <option value="other">Other ...</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="title">Year of build</div>
                                            <input type="text" name="yearOfBuild" data-displayname="Year Of Build"
                                                   class="field cm-date" autocomplete="off" placeholder="Year of build*"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="title">Full Address</div>
                                            <input type="text" name="fullAddress" data-displayname="Full Address"
                                                   class="field" placeholder="Full Address" required>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="title">Property Used for</div>
                                            <select name="propertyUsedFor" data-displayname="Property Used For"
                                                    class="field" placeholder="Property Used for" required>
                                                <option default></option>
                                                <option value="information">Information</option>
                                                <option value="support">Support request</option>
                                                <option value="other">Other ...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <h3>Your Details</h3>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="title">Your name</div>
                                            <input type="text" name="name" data-displayname="Name" class="field"
                                                   placeholder="Your name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="title">Your e-mail</div>
                                            <input type="email" name="email" data-displayname="Email" class="field"
                                                   placeholder="Email*" required>
                                        </div>
                                    </div>

                                    <!-- Google reCAPTCHA -->
                                    <!-- Create a site key for your website: https://www.google.com/recaptcha -->
                                    <!-- Replace YOUR_SITE_KEY_HERE with your site key -->
                                    <!-- To enable Google reCAPTCHA V2, uncomment the next line -->
                                    <!-- <div class="re-captcha" data-sitekey="YOUR_SITE_KEY_HERE"></div> -->
                                    <!-- To enable Google Invisible reCAPTCHA, uncomment the next line -->
                                    <!-- <div class="re-captcha invisible" data-sitekey="YOUR_SITE_KEY_HERE"></div> -->

                                    <div class="msg"></div>

                                    <button class="btn btn-primary float-lg-right float-md-none" type="submit"
                                            data-sending="Sending...">Submit
                                    </button>
                                </section>
                            </form>
                            <!-- END copy section: General Contact Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="ts-news" class="ts-news">
    <div class="container">
        <div class="row text-center">
            <div class="col text-center">
                <h2 data-title="Latest News" class="section-title-dash"> Latest News
                    <span class="dashborder">&nbsp;</span>
                </h2>
            </div> <!-- Col End -->
        </div><!--/ Title row end -->

        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="latest-post post-large">
                    <div class="latest-post-media">
                        <a href="index-3.html#" class="latest-post-img">
                            <img class="img-fluid"
                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/news/news1.jpg"
                                 alt="img">
                        </a>
                        <div class="post-date-time">
                            <span class="post-item-day">08</span>
                            <span class="post-item-month">may</span>
                        </div>
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="index-3.html#">Planning Retirement: Financial Areas for Empty Nesters</a>
                            </h4>
                            <p>When children leave home, parents can reduce expenses to improve the oddy of a more secure retirement.</p>
                            <a class="btn btn-primary" href="index-3.html#">Read More</a>
                        </div><!-- Post body end -->
                    </div><!-- Post media end -->
                </div><!-- Latest post end -->
            </div><!-- Col big news end -->

            <div class="col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="latest-post latest-post-right">
                            <div class="latest-post-media">
                                <a href="index-3.html#" class="latest-post-img">
                                    <img class="img-fluid"
                                         src="<?php echo get_template_directory_uri(); ?>/assets/images/news/news2.jpg"
                                         alt="img">
                                </a>
                            </div>
                            <div class="post-date-time">
                                <span class="post-item-day">08</span>
                                <span class="post-item-month">may</span>
                            </div>
                            <div class="post-body">
                                <h4 class="post-title">
                                    <a href="index-3.html#">10 key considerations for your business insurance</a>
                                </h4>
                                <div class="post-text">
                                    <p>We cover trips up to 12 months long. With the option to extend your.</p>
                                </div>
                            </div>
                        </div><!-- Latest post end -->
                    </div><!--Col end -->
                    <div class="col-md-12">
                        <div class="latest-post latest-post-right">
                            <div class="latest-post-media">
                                <a href="index-3.html#" class="latest-post-img">
                                    <img class="img-fluid"
                                         src="<?php echo get_template_directory_uri(); ?>/assets/images/news/news3.jpg"
                                         alt="img">
                                </a>
                            </div>
                            <div class="post-date-time">
                                <span class="post-item-day">10</span>
                                <span class="post-item-month">may</span>
                            </div>
                            <div class="post-body">
                                <h4 class="post-title">
                                    <a href="index-3.html#">Access great customer offers make a claim</a>
                                </h4>
                                <div class="post-text">
                                    <p>We cover trips up to 12 months long. With the option to extend your.</p>
                                </div>
                            </div>
                        </div><!-- Latest post end -->
                    </div><!--Col end -->
                    <div class="col-md-12">
                        <div class="latest-post latest-post-right last">
                            <div class="latest-post-media">
                                <a href="index-3.html#" class="latest-post-img">
                                    <img class="img-fluid"
                                         src="<?php echo get_template_directory_uri(); ?>/assets/images/news/news4.jpg"
                                         alt="img">
                                </a>
                            </div>
                            <div class="post-date-time">
                                <span class="post-item-day">15</span>
                                <span class="post-item-month">may</span>
                            </div>
                            <div class="post-body">
                                <h4 class="post-title">
                                    <a href="index-3.html#">10 key considerations for your business insurance</a>
                                </h4>
                                <div class="post-text">
                                    <p>We cover trips up to 12 months long. With the option to extend your.</p>
                                </div>
                            </div>
                        </div><!-- Latest post end -->
                    </div><!--Col end -->
                </div><!-- row end -->
            </div><!-- Col small news end -->
        </div><!--/ Content row end -->

        <div class="row">
            <div class="col-12 text-center">
                <a href="index-3.html#" class="btn btn-primary news-btn">View All</a>
            </div>
        </div>
    </div><!--/ Container end -->
</section><!--/ News end -->


<section id="ts-facts-area" class="ts-facts-area padtb-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-md-12 funfacts-bg no-padding">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facts/facts-bg.png" alt="">
                <div class="heading">
                    <div class="column-title">
                        <h3>Insurance company 2017</h3>
                    </div>
                    <p>We cover trips up to 12 month long with the option to next year have five children in colleghig.</p>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 facts-overlay">
                <div class="facts-wrapper">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="ts-facts">
                                <span class="facts-icon"><i class="fa fa-briefcase"></i></span>
                                <div class="ts-facts-num">
                                    <h3 class="funfact">
                                        <span class="counterUp">370</span>
                                    </h3>
                                </div>
                                <p>Cases Completed</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ts-facts">
                                <span class="facts-icon"><i class="icon icon-users"></i></span>
                                <div class="ts-facts-num">
                                    <h3 class="funfact">
                                        <span class="counterUp">900</span>
                                    </h3>
                                </div>
                                <p>Active member</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="ts-facts">
                                <span class="facts-icon"><i class="fa fa-trophy"></i></span>
                                <div class="ts-facts-num">
                                    <h3 class="funfact">
                                        <span class="counterUp">85</span>
                                    </h3>
                                </div>
                                <p>Awards winning</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ts-facts">
                                <span class="facts-icon"><i class="icon icon-graphic-2"></i></span>
                                <div class="ts-facts-num">
                                    <h3 class="funfact">
                                        <span class="counterUp">50</span>
                                    </h3>
                                </div>
                                <p>Running Projects</p>
                            </div>
                        </div>
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
                    Our Partners
                    <span></span>
                </h2>
            </div><!-- Col end -->
        </div><!-- Title row end -->

        <div class="row">
            <div id="partners-carousel" class="col-sm-12 owl-carousel owl-theme text-center partners">
                <figure class="item partner-logo">
                    <a href="index-3.html#">
                        <img class="img-fluid"
                             src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/client1.png"
                             alt=""/>
                    </a>
                </figure>

                <figure class="item partner-logo">
                    <a href="index-3.html#">
                        <img class="img-fluid"
                             src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/client2.png"
                             alt=""/>
                    </a>
                </figure>

                <figure class="item partner-logo">
                    <a href="index-3.html#">
                        <img class="img-fluid"
                             src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/client3.png"
                             alt=""/>
                    </a>
                </figure>

                <figure class="item partner-logo">
                    <a href="index-3.html#">
                        <img class="img-fluid"
                             src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/client4.png"
                             alt=""/>
                    </a>
                </figure>

                <figure class="item partner-logo">
                    <a href="index-3.html#">
                        <img class="img-fluid"
                             src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/client5.png"
                             alt=""/>
                    </a>
                </figure>

                <figure class="item partner-logo last">
                    <a href="index-3.html#">
                        <img class="img-fluid"
                             src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/client6.png"
                             alt=""/>
                    </a>
                </figure>

                <figure class="item partner-logo last">
                    <a href="index-3.html#">
                        <img class="img-fluid"
                             src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/client7.png"
                             alt=""/>
                    </a>
                </figure>

            </div><!--/ Owl carousel end -->

        </div><!--/ Content row end -->
    </div><!--/ Container end -->
</section><!--/ Partners end -->
<?php get_footer(); ?>
