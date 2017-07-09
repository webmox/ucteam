<?php get_header('projects'); ?>
	<div class="main_content">

		<div class="wrap_breadcumbs projects_page">
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
								<?php 
									$company_name = get_field('company_name');
									$all_area = get_field('all_area');
									$info_projects = get_field('info_project');

								?>
								<?php if($company_name or $all_area or $info_projects){ ?>
									<div class="info_project">
										<?php if($company_name){ ?>
										<div class="item_info">
											<span class="title_option">Заказчик: </span>
											<span class="value_option"><?php echo $company_name; ?></span>
										</div>
										<?php } ?>

										<?php if($all_area){ ?>
										<div class="item_info">
											<span class="title_option">Общая площадь: </span>
											<span class="value_option"><?php echo $all_area; ?></span>
										</div>
										<?php } ?>

										<?php if($info_projects){ ?>

											<?php foreach($info_projects as $info_project){ ?>
												
												<div class="item_info">
													<span class="title_option"><?php echo $info_project['title_option'] ?> : </span>
													<span class="value_option"><?php echo $info_project['value_option'] ?></span>
												</div>

											<?php } ?>

										<?php } ?>

									</div>
								<?php } ?>
								<?php the_content(); ?>
							</div>

							<?php endwhile ?>
							<?php endif ?>
						</div>
					</div>
					<div class="col-md-3">
						<?php get_sidebar('projects'); ?>
					</div>
				</div>


				<div class="clearfix"></div>
				<?php include(TEMPLATEPATH.'/section_button.php') ?>

			</div><!--end section-->


			<?php include(TEMPLATEPATH.'/section_sertificat.php'); ?>

		</div>
	</div><!--end main-content-->

<?php get_footer(); ?>