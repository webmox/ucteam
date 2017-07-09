<?php get_header('page'); ?>
			<div class="main-content">
			<!--Social buttons-->
			
				<script type="text/javascript">(function(w,doc) {
				if (!w.__utlWdgt ) {
					w.__utlWdgt = true;
					var d = doc, s = d.createElement('script'), g = 'getElementsByTagName';
					s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
					s.src = ('https:' == w.location.protocol ? 'https' : 'http')  + '://w.uptolike.com/widgets/v1/uptolike.js';
					var h=d[g]('body')[0];
					h.appendChild(s);
				}})(window,document);
				</script>
				<div data-background-alpha="0.0" data-buttons-color="#FFFFFF" data-counter-background-color="#ffffff" data-share-counter-size="12" 
				data-top-button="false" data-share-counter-type="disable" data-share-style="1" data-mode="share" data-like-text-enable="false" 
				data-mobile-view="true" data-icon-color="#ffffff" data-orientation="fixed-left" data-text-color="#000000" data-share-shape="round-rectangle" 
				data-sn-ids="fb.vk.tw.ok.gp." data-share-size="30" data-background-color="#ffffff" data-preview-mobile="false" data-mobile-sn-ids="fb.vk.tw.wh.ok.gp." 
				data-pid="1426946" data-counter-background-alpha="1.0" data-following-enable="false" data-exclude-show-more="false" data-selection-enable="true" 
				class="uptolike-buttons" >
				</div>
			<!--End Social buttons-->	

			<div class="center">
				<div class="content">
					
						<div class="wrap-breadcrumgs">
							<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
						</div>
						<div class="content-text">
							
								<h1 class="error_msg">Error 404</h1>
								<p class="text_msg">The page you requested can not be found!</p>
								
						</div><!--end content-text-->
				

				</div><!--end content-->
	</div>

				<div class="wrap-reviews-block">
					<div class="center">
						<span class="title-section-trust"><?php echo get_cat_name(10); ?></span>
						<?php $reviews = new WP_Query(array('post_type'=>'post', 'cat'=>10)) ?>
						<ul class="reviews-carousel">
						<?php if($reviews->have_posts()) : while($reviews->have_posts()) : $reviews->the_post()?>
							<li class="review-item">
								<div class="text-reviews">
									<h2 class="reviews-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<div class="city"><?= get_field('сity'); ?></div>
									<!--<div class="date"><?php the_time('d.m.Y'); ?></div>-->
									<p><?php the_excerpt(); ?></p>
								</div>
								<div class="info-humen">
									<div class="reviews-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('img-reviews'); ?></a></div>
									<!--<div class="info-block">
										<h3><a href="<?php //the_permalink(); ?>"><?php //echo  get_field('text_name'); ?></a></h3>
										<span class="profes"><?php //echo get_field('profes'); ?></span>
									</div>-->
								</div>
							</li>
						<?php endwhile ?>
						<?php endif ?>
						</ul>
					</div>
				</div>


			</div><!--end main-content-->
		</div>
	</div><!--end container-->
	<?php get_footer(); ?>