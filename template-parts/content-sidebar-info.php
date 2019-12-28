<div class="sidebar sidebar-right">
    <div class="widget">
        <h3 class="widget-title"><?php echo esc_html__( 'Persoane juridice', 'bs-axa' ); ?>
            <span class="widget-title-dash"></span>
        </h3>
        <?php $fizic = new WP_Query([
            'post_type' => 'fizic',
            'posts_per_page' => -1
        ]); ?>
        <ul class="list5b">
            <?php if($fizic->have_posts()): ?>
            	<?php while($fizic->have_posts()): ?>
            		<?php $fizic->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
            	<?php endwhile; ?>
            	<?php wp_reset_postdata(); ?>
            <?php endif; ?>

        </ul>

    </div><!-- Recent post end -->

    <div class="widget">
        <h3 class="widget-title"><?php echo esc_html__( 'Persoane juridice', 'bs-axa' ); ?>
            <span class="widget-title-dash"></span>
        </h3>
		<?php $juridic = new WP_Query([
			'post_type' => 'juridic',
			'posts_per_page' => -1
		]); ?>
        <ul class="list5b">
			<?php if($juridic->have_posts()): ?>
				<?php while($juridic->have_posts()): ?>
					<?php $juridic->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>

        </ul>

    </div><!-- Recent post end -->


</div><!-- Sidebar end -->

