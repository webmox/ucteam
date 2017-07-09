<?php get_header('page'); ?>
	<div class="main_content">

		<div class="wrap_breadcumbs">
			<div class="container">
				<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
			</div>
		</div><!--end wrap_breadcumbs-->

		<?php $cat_ID = get_query_var('cat'); ?> 

		<div class="container">
			<div class="section">
				<div class="row">
					<div class="col-md-9">
						<div class="content">
							<h1 class="title_page"><?php echo get_cat_name($cat_ID); ?></h1>
							<div class="text">
								<?php echo category_description(); ?>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="sidebar">
							<?php get_sidebar('services'); ?>
						</div>
					</div>
				</div>

				<div class="clearfix"></div>
				<?php include(TEMPLATEPATH.'/section_button.php') ?>

			</div><!--end section-->
		</div>

		

		<div class="container">
			<?php include(TEMPLATEPATH.'/section_sertificat.php'); ?>
		</div>
		
	</div><!--end main-content-->

<?php get_footer(); ?>