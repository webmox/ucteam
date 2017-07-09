<div class="sidebar projects"> 
	<div class="sidebar_projects">
		<h2 class="title_widget_project"><?php echo get_cat_name(19); ?></h2>
		<?php $proj = new WP_Query(array('post_type'=>'post', 'cat'=>19, 'posts_per_page'=>2)); ?>

		<?php if($proj->have_posts()) : while($proj->have_posts()) : $proj->the_post(); ?>
		<div class="item_sidebar_project">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('img_sidebar_projects'); ?></a>
			<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			<div class="descript_project">
				<?php echo limit_words(get_the_excerpt(), 15); ?>
			</div>
		</div>
		<?php endwhile ?>
		<?php endif ?>
	</div><!--end sidebar_projects-->
</div>