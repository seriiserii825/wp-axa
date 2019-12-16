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


    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
					<?php if ( have_posts() ): ?>
						<?php while ( have_posts() ): ?>
							<?php the_post(); ?>
                            <div class="post">
                                <div class="post-media post-image">
                                    <img src="<?php echo kama_thumb_src( 'w=700 &h=340' ); ?>" class="img-fluid" alt="">
                                </div>

                                <div class="post-body clearfix">
                                    <div class="post-meta-left pull-left text-center">
                                    <span class="post-meta-date">
                                       <span class="day"><?php echo get_the_date( 'd' ); ?></span><?php echo get_the_date( 'M' ); ?>
                                    </span>
                                        <span class="post-comment"><i class="icon icon-comment"></i>
									<?php $num_comments = get_comments_number(); ?>
                                        <a href="news-right-sidebar.html#"
                                           class="comments-link"></a><?php echo $num_comments; ?></span>
                                    </div><!-- Post meta left -->

                                    <div class="post-content-right">
                                        <div class="entry-header">
                                            <h2 class="entry-title">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h2>
                                        </div><!-- header end -->

                                        <div class="entry-content">
                                            <p><?php echo carbon_get_the_post_meta( 'crb_news_short_text' . get_lang() ); ?></p>
                                        </div>

                                        <div class="post-footer text-right">
                                            <a href="<?php the_permalink(); ?>"
                                               class="btn btn-primary"><?php echo esc_html__( 'Mai multe', 'bs-galadent' ); ?></a>
                                        </div>
                                    </div><!-- Post content right -->
                                </div><!-- post-body end -->
                            </div><!-- 4th post end -->
						<?php endwhile; ?>
                        <div class="navigation pagination">
							<?php $args = array(
								'show_all'           => true,
								// показаны все страницы участвующие в пагинации
								'end_size'           => 1,
								// количество страниц на концах
								'mid_size'           => 1,
								// количество страниц вокруг текущей
								'prev_next'          => true,
								// выводить ли боковые ссылки "предыдущая/следующая страница".
								'prev_text'          => __( '&laquo;' ),
								'next_text'          => __( '&raquo;' ),
								'add_args'           => false,
								// Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
								'add_fragment'       => '',
								// Текст который добавиться ко всем ссылкам.
								'screen_reader_text' => __( 'Posts navigation' ),
							); ?>
							<?php the_posts_pagination( $args ); ?>
                        </div>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
                </div><!-- Content Col end -->

                <div class="col-lg-4 col-md-12">
                    <div class="sidebar sidebar-right">
                        <div class="widget widget-search">
                            <div id="search" class="input-group">
                                <input class="form-control" placeholder="Search" type="search">
                                <span class="input-group-btn">
                           <i class="fa fa-search"></i>
                        </span>
                            </div>
                        </div>


                        <div class="widget recent-posts">
                            <h3 class="widget-title">Popular Posts <span class="widget-title-dash"></span></h3>
                            <ul class="unstyled clearfix">
                                <li class="media">
                                    <div class="media-left media-middle">
                                        <img alt="img" src="images/news/news1.jpg">
                                    </div>
                                    <div class="media-body media-middle">
                              <span class="post-date">
                                 <i class="icon icon-calendar-full"></i>
                                 <a href="news-right-sidebar.html#"> 19 Jan, 2018</a>
                              </span>
                                        <h4 class="entry-title">
                                            <a href="news-single.html">Uber is selling off its auto-leasing </a>
                                        </h4>
                                    </div>
                                    <div class="clearfix"></div>
                                </li><!-- 1st post end-->

                                <li class="media">
                                    <div class="media-left media-middle">
                                        <img alt="img" src="images/news/news2.jpg">
                                    </div>
                                    <div class="media-body media-middle">
                              <span class="post-date">
                                 <i class="icon icon-calendar-full"></i>
                                 <a href="news-right-sidebar.html#"> 24 Jan, 2018</a>
                              </span>
                                        <h4 class="entry-title">
                                            <a href="news-single.html">Apple reveals its new flagship</a>
                                        </h4>
                                    </div>
                                    <div class="clearfix"></div>
                                </li><!-- 2nd post end-->

                                <li class="media">
                                    <div class="media-left media-middle">
                                        <img alt="img" src="images/news/news3.jpg">
                                    </div>
                                    <div class="media-body media-middle">
                              <span class="post-date">
                                 <i class="icon icon-calendar-full"></i>
                                 <a href="news-right-sidebar.html#"> 27 Jan, 2018</a>
                              </span>
                                        <h4 class="entry-title">
                                            <a href="news-single.html">Help your business grow with help</a>
                                        </h4>
                                    </div>
                                    <div class="clearfix"></div>
                                </li><!-- 3rd post end-->



                            </ul>

                        </div><!-- Recent post end -->

                        <div class="widget">
                            <h3 class="widget-title">Categories <span class="widget-title-dash"></span></h3>
                            <ul class="widget-nav-tabs">
                                <li><a href="news-right-sidebar.html#">Insurance</a>
                                    <span class="posts-count">(05)</span>
                                </li>
                                <li><a href="news-right-sidebar.html#">Home Insurance</a>
                                    <span class="posts-count">(06)</span>
                                </li>
                                <li><a href="news-right-sidebar.html#">Car Insurance</a>
                                    <span class="posts-count">(11)</span>
                                </li>
                                <li><a href="news-right-sidebar.html#">Deposit Insurance</a>
                                    <span class="posts-count">(09)</span>
                                </li>
                                <li><a href="news-right-sidebar.html#">Health Insurance</a>
                                    <span class="posts-count">(13)</span>
                                </li>
                                <li><a href="news-right-sidebar.html#">Insurance Consulting</a>
                                    <span class="posts-count">(13)</span>
                                </li>
                            </ul>
                        </div><!-- Categories end -->

                        <div class="widget">
                            <h3 class="widget-title">Archives <span class="widget-title-dash"></span></h3>
                            <ul class="widget-nav-tabs">
                                <li><a href="news-right-sidebar.html#">Feburay 2016</a></li>
                                <li><a href="news-right-sidebar.html#">January 2016</a></li>
                                <li><a href="news-right-sidebar.html#">December 2015</a></li>
                                <li><a href="news-right-sidebar.html#">November 2015</a></li>
                                <li><a href="news-right-sidebar.html#">October 2015</a></li>
                            </ul>
                        </div><!-- Archives end -->

                        <div class="widget widget-tags">
                            <h3 class="widget-title">Tags <span class="widget-title-dash"></span></h3>

                            <ul class="unstyled clearfix">
                                <li><a href="news-right-sidebar.html#">Insurance</a></li>
                                <li><a href="news-right-sidebar.html#">home</a></li>
                                <li><a href="news-right-sidebar.html#">life</a></li>
                                <li><a href="news-right-sidebar.html#">car</a></li>
                                <li><a href="news-right-sidebar.html#">loan</a></li>
                                <li><a href="news-right-sidebar.html#">Safety</a></li>
                                <li><a href="news-right-sidebar.html#">Contracting</a></li>
                                <li><a href="news-right-sidebar.html#">Planning</a></li>
                            </ul>
                        </div><!-- Tags end -->


                    </div><!-- Sidebar end -->
                </div>
            </div><!-- Main row end -->

        </div><!-- Container end -->
    </section><!-- Main container end -->


<?php
get_footer();
