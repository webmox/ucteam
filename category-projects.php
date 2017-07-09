<?php get_header('projects'); ?>
	<div class="main_content">

		<div class="wrap_breadcumbs projects_page">
			<div class="container">
				<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
			</div>
		</div><!--end wrap_breadcumbs-->

		<?php $cat_ID = get_query_var('cat'); ?> 

		<div class="section">
			<div class="container">
				<div class="row">
					<div class="wrapper-projects-block">
						<div class="content">
						<h1 class="title_page"><?php echo get_cat_name($cat_ID); ?></h1>
						<div class="text">
							<?php echo category_description(); ?>
						</div>

						<!--/////////////////////////////////////////////////////////-->
						<div class="wrap_projects">
							<div class="wrap_grid">
								<div class="grid">
									<?php $project = new WP_Query(array('post_type'=>'post', 'cat'=>$cat_ID, 'posts_per_page'=>-1));

									$counter = 1;

									$all_post = $project->found_posts;
									$count_post = 0; 

									?>
								  <?php if($project->have_posts()) : while($project->have_posts()) : $project->the_post(); ?>
									  <?php if(has_post_thumbnail()){ ?>

										  <div class="grid-item  grid-item-width-<?php echo $counter; ?>" style="background:url(<?php the_post_thumbnail_url('full'); ?>) no-repeat; background-size:cover;">
										  		<a href="<?php the_permalink(); ?>">
										  			<div class="item_project"><div class="hov"><h3 class="title_project"><?php the_title(); ?></h3></div></div>
										  		</a>
										  		<?php  $counter++; ?> 
										  </div>
									  <?php } ?>

									<?php $count_post++; ?>
										<?php if($count_post%12==0) {
											if($count_post == $all_post){
												echo "</div>";
											}else{ 
												echo "</div><div class='grid'>";
											}
									}?>

									<?php endwhile ?>
									<?php endif ?>
								<!--</div> end grid-->
							</div>
						</div><!--end wrap_projects-->




					</div>
				</div>

				<div class="clearfix"></div>
				<?php include(TEMPLATEPATH.'/section_button.php') ?>
					</div>
			</div><!--end section-->
		</div>

		

		<div class="container">
			<?php include(TEMPLATEPATH.'/section_sertificat.php'); ?>
		</div>
		
	</div><!--end main-content-->

<?php get_footer(); ?>