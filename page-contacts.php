<?php
get_header();
/**
 * Template Name: Contacts
 */
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
                    <div class="col-lg-12">
                        <div class="contact-wrapper  ">
                            <div class="contact-box form-box">
                                <div id="general-form" class="form-container active">
                                    <!-- START copy section: General Contact Form -->
                                    <form class="contactMe small" action="contact.html#" method="POST" enctype="multipart/form-data">
                                        <section>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <input type="text" name="name" data-displayname="Name" class="field" placeholder="Full Name*" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="email" name="email" data-displayname="Email" class="field" placeholder="Email Address*" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <input type="text" name="subject" data-displayname="subject" class="field" placeholder="Subject" required="">
                                                </div>
                                                <div class="col-md-12">
                                                    <textarea name="message" data-displayname="Message" class="field" placeholder="Message" required=""></textarea>
                                                </div>
                                            </div>

                                            <button class="btn btn-primary float-lg-right float-md-none" type="submit" data-sending="Sending...">Send Message</button>
                                        </section>
                                    </form>
                                    <!-- END copy section: General Contact Form -->
                                </div>
                            </div> <!-- Contact Box End -->
                            <div class="contact-box info-box">
                                <div class="contact-info-left">
                                    <h3 class="column-title">
                                        <?php echo esc_html__( 'Contactele noastre', 'bs-axa' ); ?>
                                    </h3>
                                    <div class="ts-contact-info"><span class="ts-contact-icon float-left"><i class="icon icon-map-marker2"></i></span>
                                        <div class="ts-contact-content">
                                            <h3 class="ts-contact-title"><?php echo esc_html__( 'Adresa', 'bs-axa' ); ?></h3>
                                            <p><?php echo carbon_get_theme_option('crb_address'.get_lang()); ?></p>
                                        </div> <!-- Contact content end-->
                                    </div> <!-- Contact Info End -->
                                    <div class="ts-contact-info"><span class="ts-contact-icon float-left"><i class="icon icon-phone3"></i></span>
                                        <div class="ts-contact-content">
                                            <h3 class="ts-contact-title"><?php echo esc_html__( 'Sunati-ne', 'bs-axa' ); ?></h3>
                                            <p><a href="tel:<?php echo clear_phone(carbon_get_theme_option('crb_phone')); ?>"><?php echo carbon_get_theme_option('crb_phone') ?></a></p>
                                        </div> <!-- Contact content end-->
                                    </div> <!-- Contact Info End -->
                                    <div class="ts-contact-info last"><span class="ts-contact-icon float-left"><i class="icon icon-envelope"></i></span>
                                        <div class="ts-contact-content">
                                            <h3 class="ts-contact-title">Email</h3>
                                            <p><a href="mailto:<?php echo carbon_get_theme_option('crb_email'); ?>"><?php echo carbon_get_theme_option('crb_email'); ?></a></p>
                                        </div><!-- Contact content end-->
                                    </div> <!-- Contact Info End -->
                                </div> <!-- Info End -->
                            </div> <!-- Contact Box End -->
                        </div> <!-- Wrapper End -->
                    </div> <!-- Col End -->
                </div>
            </div> <!-- Container End -->
        </div> <!-- Pricing End -->
    </section><!-- Main container end -->

<?php
get_footer();
