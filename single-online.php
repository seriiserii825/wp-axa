<?php
get_header( 'main' );
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
                    <div class="online-form">
                        <input type="text" name="idno" placeholder="IDNO">
                        <input type="text" name="certificate" placeholder="Numărul certificatului de înmatriculare">
                        <input type="text" name="number" placeholder="Număr de înmatriculare">
                        <input type="tel" name="phone" placeholder="Numărul de telefon">
                        <input type="email" name="email" placeholder="E-mail">
                        <div class="online-form__checkbox">
                            <input type="checkbox" name="termen" id="checkbox-termen">
                            <label for="checkbox-termen"><a href="#">Accept Termenii şi Condiţiile</a></label>
                        </div>
                        <div class="online-form__checkbox">
                            <input type="checkbox" name="prelucrare" id="checkbox-prelucrare">
                            <label for="checkbox-prelucrare"><a href="#">Accept Prelucrarea datelor cu caracter personal.</a></label>
                        </div>
                        <input class="btn btn-info" type="submit" value="Trimite">
                    </div>
                    <span><?php echo esc_html__( 'După plasarea comenzii, operatorul va prelua discuţia în JivoChat sau veţi fi apelat în scurt timp.', 'bs-galadent' ); ?></span>
                </div>

            </div> <!-- Container End -->
        </div>
    </section><!-- Main container end -->

<?php endif; ?>

<?php
get_footer();
