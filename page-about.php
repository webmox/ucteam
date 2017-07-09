<?php get_header('page'); ?>
	<div class="main_content">

		<div class="wrap_breadcumbs">
			<div class="container">
				<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
			</div>
		</div><!--end wrap_breadcumbs-->


		<div class="container">
			<div class="section">
				<div class="row">
					<div class="col-md-9">
						<div class="content">
							<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
							<h1 class="title_page"><?php the_title(); ?></h1>
							<div class="text">
								<?php the_content(); ?>
							</div>

							<?php endwhile ?>
							<?php endif ?>
						</div>
					</div>
					<div class="col-md-3">
						<div class="sidebar">
							<?php if(!dynamic_sidebar('sidebar_about')){}?>
						</div>
					</div>
				</div>

			</div><!--end section--> 

			<?php include(TEMPLATEPATH.'/section_sertificat.php'); ?>
			
		</div>

	</div><!--end main-content-->

<?php get_footer(); ?>