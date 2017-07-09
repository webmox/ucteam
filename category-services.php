<?php get_header('page'); ?>
	<div class="main_content">

		<div class="section services">
				
			<?php 


				$cat_ID = get_query_var('cat'); 

				/*Выбираем все дочерние категории текущей*/
				$args = array(
					'child_of'                 => 0,
					'parent'                   => $cat_ID, /**/
					'orderby'                  => 'name',
					'order'                    => 'ASC',
					'hide_empty'               => false,
					'hierarchical'             => 1,
					'exclude'                  => '',
					'include'                  => '',
					'number'                   => 0,
					'taxonomy'                 => 'category',
					'pad_counts'               => false
			    );


			    $child_cats = get_categories($args);

			    //print_array($child_cats);

			?>


			<h2 class="title_section"><?php echo get_cat_name($cat_ID); ?></h2>
			
			<div class="container">
				<div class="description_category">
					<?php echo category_description(); ?>
				</div>
			</div>
			
			<div class="wrap_list_services clearfix">
				<?php if($child_cats){ ?>
					<?php $counter = 0; ?>

					<div class="list_services list_services_main clearfix">
						<?php foreach($child_cats as $child_cat){ ?>
						<div class="service_block">

							<?php

								/*Выбираем все дочерние категории текущей*/
								$args_child = array(
									'child_of'                 => 0,
									'parent'                   => $child_cat->term_id, /**/
									'orderby'                  => 'name',
									'order'                    => 'ASC',
									'hide_empty'               => false,
									'hierarchical'             => 1,
									'exclude'                  => '',
									'include'                  => '',
									'number'                   => 0,
									'taxonomy'                 => 'category',
									'pad_counts'               => false
							    );

							     $sub_products = get_categories($args_child);

							?>


							<div class="item_service<?php if(!$sub_products){ echo ' no_has_child'; } ?>">

								<?php 
									$img_info = get_the_category_data($child_cat->term_id); 
	   					            $img = wp_get_attachment_image($img_info->id, 'img_cat');
	   					            echo $img;

	   					            if($sub_products){ ?>

										<ul class="sub_products">
											<?php foreach($sub_products as $sub_product){ ?>
												<li class="item_sub_product"><a href="<?php echo get_category_link($sub_product->term_id); ?>"><?php echo get_cat_name($sub_product->term_id); ?></a></li>
											<?php } ?>
										</ul>

	   					         	<?php  }

	   					            $counter++;
								 ?>
							 	<h3 class="title_service"><a href="<?php echo get_category_link($child_cat->term_id); ?>"><?php echo get_cat_name($child_cat->term_id); ?></a></h3>
							</div><!--end item_service-->

							<?php $cat_descript = get_field('excerpt_cat', 'category_'.$child_cat->term_id); ?>

							<?php if($cat_descript){ ?>
								<div class="cat_descript_serv">
									<?php echo  limit_words($cat_descript, 25); ?>
								</div><!--end cat_descript_serv-->
							<?php } ?>
						</div><!--end service_block-->
						<?php } ?>
					</div><!--end list_services-->
				<?php } ?>
			</div><!--end wrap_list_services-->

			<?php include(TEMPLATEPATH.'/section_button.php') ?>


		</div><!--end section services-->

	</div><!--end main-content-->

<?php get_footer(); ?>