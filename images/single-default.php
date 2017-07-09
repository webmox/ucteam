<?php get_header(); ?>
		<div class="services page">
		<div class="container">
			<div class="row">
				<?php  if(have_posts()) : while(have_posts()) : the_post(); ?>

				<?php get_sidebar(''); ?>

				<?php 
				$images = get_field('services_img'); 
				?>
				<div class="about_news about_page col-md-9">
					<div class="row">
						<?php if($images){ ?>
						<h2 class="title"><?php the_title(); ?></h2>
							
							<div class="row">
								<div class="services_text col-md-5">
									<?php the_content(); ?>
									
								</div>
								<div class="services_img col-md-7">
									<div class="owl-carousel-services">
										<?php foreach ($images as $img) { ?>
											<div class="gallery"><?php echo wp_get_attachment_image( $img['new_img']['id'], 'services_img');  ?></div>
											<?php 
										}  ?>
									</div>
								</div>

							</div>
							<?php }else { ?>
								<h2 class="title"><?php the_title(); ?></h2>
							<div class="row">
								<div class="col-md-12">
									<div class="services_text">
										<?php the_content(); ?>
									</div>
								</div>
							</div>


							<?php } ?>
							<?php endwhile ?>
							<?php endif ?>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
<?php get_footer(); ?>