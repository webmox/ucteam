<?php get_header(); ?>
	<div class="main_content">

		<div class="section services">
				
			<?php 

				/*Выбираем все дочерние категории текущей*/
				$args = array(
					'child_of'                 => 0,
					'parent'                   => 3, /**/
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


			<h2 class="title_section">Услуги UC TEAM</h2>
			<div class="wrap_list_services clearfix">
				<?php if($child_cats){ ?>
					<?php $counter = 0; ?>

					<div class="list_services clearfix">
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
						</div><!--end service_block-->
						<?php if($counter==5){ ?>
							<div class="clearfix"></div>
							<div class="block_link_support">
								<div class="container">
									<div class="row">
										<div class="col-sm-9">
											<p>Профессиональная консультация по индивидуальным проектам</p>
										</div>
										<div class="col-sm-3">
											<a href="#consultant" class="btn_link consultation_btn">Связаться</a>
										</div>
									</div>
									
								</div>
							</div>
							<div class="clearfix"></div>
							<?php } ?>
						<?php } ?>
					</div><!--end list_services-->
				<?php } ?>
			</div><!--end wrap_list_services-->
		</div><!--end section services-->


		<div class="container">
			<div class="section">
				<div class="row">
					<div class="col-md-9">
						<div class="content">
							<h2 class="title_section">Последние новости</h2>

							<div class="list_news clearfix">
								<?php $news = new WP_Query(array('post_type'=>'post', 'cat'=>2, 'posts_per_page'=>4)) ?>

								<?php if($news->have_posts()) : while($news->have_posts()) : $news->the_post(); ?>
								<div class="news_item clearfix">
									<?php if(has_post_thumbnail()){ ?>
									<div class="row">
										<div class="col-sm-3">
											<div class="left_news_section">
												<div class="date">
													<span class="day"><?php the_time('d'); ?></span>
													<span class="mount"><?php the_time('M'); ?></span>
													<span class="year"><?php the_time('Y'); ?></span>
												</div>
											</div>
											<div class="thumbnail_block">
												<?php the_post_thumbnail('img_news'); ?>
											</div>
										</div>
										<div class="col-sm-9">
											<div class="right_news_section">
												<div class="title_news_section clearfix">
													<div class="title_news"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></div>
													<div class="read_more_news"><a href="<?php the_permalink(); ?>">подробнее>>></a></div>
												</div>
												<div class="descript_section">
													<?php echo limit_words(get_the_excerpt(), 20); ?>
												</div>
											</div>
										</div>
									</div>
									<?php }else{ ?>

									<div class="row">
										<div class="col-sm-1">
											<div class="left_news_section">
												<div class="date">
													<span class="day"><?php the_time('d'); ?></span>
													<span class="mount"><?php the_time('M'); ?></span>
													<span class="year"><?php the_time('Y'); ?></span>
												</div>
											</div>
										</div> 
										<div class="col-sm-11">
											<div class="right_news_section">
												<div class="title_news_section clearfix">
													<div class="title_news"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></div>
													<div class="read_more_news"><a href="<?php the_permalink(); ?>">подробнее>>></a></div>
												</div>
												<div class="descript_section">
													<?php echo limit_words(get_the_excerpt(), 15); ?>
												</div>
											</div>
										</div>
									</div>

									<?php } ?>
								</div><!--end news_item-->
								<?php endwhile ?>
								<?php endif ?>
							</div>
							<div class="block_btn">
								<a href="<?php echo get_category_link(2); ?>" class="btn_link">Все новости</a>
							</div>

						</div><!--end content-->
					</div>
					<div class="col-md-3">
						<?php get_sidebar('projects'); ?>
					</div>
				</div>
			</div><!--end section-->


			<?php include(TEMPLATEPATH.'/section_sertificat.php'); ?>

		</div>
	</div><!--end main-content-->

<?php get_footer(); ?>