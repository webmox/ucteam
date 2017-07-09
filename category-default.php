<?php get_header('page'); ?>
	<div class="main_content">

		<div class="wrap_breadcumbs">
			<div class="container">
				<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
			</div>
		</div><!--end wrap_breadcumbs-->

		<?php $cat_ID = get_query_var('cat'); ?> 

		<div class="container">
			<div class="section news">
				<div class="row">
					<div class="col-md-9">
						<div class="content">
							<h2 class="title_section"><?php echo get_cat_name($cat_ID); ?></h2>

							<div class="list_news clearfix">

								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
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
													<?php echo limit_words(get_the_excerpt(), 15); ?>
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

							<div class="wrap_pagination">
								<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
							</div>

						</div><!--end content-->
					</div>
					<div class="col-md-3">
						<div class="sidebar">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, expedita ipsum quos, 
							aspernatur ut cupiditate enim corporis veniam aperiam, aliquam delectus veritatis. Autem ea culpa, quae placeat illo molestias nobis.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, expedita ipsum quos, 
							aspernatur ut cupiditate enim corporis veniam aperiam, aliquam delectus veritatis. Autem ea culpa, quae placeat illo molestias nobis.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, expedita ipsum quos, 
							aspernatur ut cupiditate enim corporis veniam aperiam, aliquam delectus veritatis. Autem ea culpa, quae placeat illo molestias nobis.</p>
						</div><!--end sidebar-->
					</div>
				</div>
			</div><!--end section-->
		</div>
	</div><!--end main-content-->

<?php get_footer(); ?>