<div class="sidebar sidebar-right">
	<div class="widget recent-posts">
		<h3 class="widget-title"><?php echo esc_html__( 'Posturi recente', 'bs-axa' ); ?> <span class="widget-title-dash"></span></h3>
		<ul class="unstyled clearfix">
            <?php $news = new WP_Query([
                'category_name' => 'noutati',
                'posts_per_page' => 3
            ]); ?>
            <?php if($news->have_posts()): ?>
            	<?php while($news->have_posts()): ?>
            		<?php $news->the_post(); ?>
                    <li class="media">
                        <div class="media-left media-middle">
							<?php echo kama_thumb_img('w=90 &h=65'); ?>
                        </div>
                        <div class="media-body media-middle">
                              <span class="post-date">
                                 <i class="icon icon-calendar-full"></i>
                                 <a href="news-right-sidebar.html#"> <?php echo get_the_date('d M, Y'); ?></a>
                              </span>
                            <h4 class="entry-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                            </h4>
                        </div>
                        <div class="clearfix"></div>
                    </li><!-- 1st post end-->
            	<?php endwhile; ?>
            	<?php wp_reset_postdata(); ?>
            <?php endif; ?>
		</ul>

	</div><!-- Recent post end -->

	<div class="widget">
		<h3 class="widget-title"><?php echo esc_html__( 'Categorii', 'bs-axa' ); ?> <span class="widget-title-dash"></span></h3>
		<ul class="widget-nav-tabs">
            <?php $categories = get_categories(); ?>
            <?php foreach($categories as $category): ?>
                <?php $cat_id = $category->term_id; ?>
                <li><a href="<?php echo get_category_link($cat_id); ?>"><?php echo $category->name; ?></a>
                    <span class="posts-count">(<?php echo $category->count; ?>)</span>
                </li>
            <?php endforeach; ?>
		</ul>
	</div><!-- Categories end -->

	<div class="widget">
		<h3 class="widget-title"><?php echo esc_html__( 'Arhive', 'bs-axa' ); ?> <span class="widget-title-dash"></span></h3>
		<ul class="widget-nav-tabs">
            <?php echo wp_get_archives(); ?>
		</ul>
	</div><!-- Archives end -->

</div><!-- Sidebar end -->

