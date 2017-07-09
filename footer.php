	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<div class="footer_section">
						<div class="logo_block">
							<a href="<?php bloginfo('url'); ?>" class="logo_footer"><img src="<?php bloginfo('template_url'); ?>/images/logo_footer.png" alt=""></a>
						</div>
					</div>
				</div>
				<div class="col-md-4">

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

					<?php if($child_cats){ ?>
					<div class="footer_section links_services">
						<ul>
							<?php foreach($child_cats as $child_cat){ ?>
								<li><a href="<?php echo get_category_link($child_cat->term_id); ?>"><?php echo get_cat_name($child_cat->term_id); ?></a></li>
							<?php } ?>
						</ul>
					</div>
					<?php } ?>
				</div>
				<div class="col-md-3">
					<div class="footer_section contacts_footer">
						<h4 class="title_section">Контакты</h4>

						<div class="contacts_blocks">
							<div class="address"><p>Украниа, г. Киев, <br/>ул. Спасская 31 б</p></div>
							<div class="phones">
								<span>Телефон: +90(212) 376 10 00</span>
								<span>Факс: +90(212) 376 19 80</span>
							</div>
							<div class="email"><a href="mailto:ukteam@ukteam.com">ukteam@ukteam.com</a></div>
						</div><!--contacts_blocks-->

						<ul class="social_btns pull-left">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
						
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer_section bnt_footer">
						<a href="#consultant" class="btn_link consultation_btn">Узнать стоимость проекта</a>
					</div>
				</div>
			</div>
		</div>
	</div><!--end footer-->
</div><!--end layout-->

<div id="consultant" class="white-popup-block zoom-anim-dialog  mfp-hide">
	<?php echo do_shortcode('[contact-form-7 id="139" title="Контактная форма 1"]'); ?>
</div>

		<!--/////////////////////////////////////////////////////////////////////
		////////////////////////////////////////////////////////////////////////-->
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


		?>
		<div class="sub-mega-menu"> 
			<div class="container">
				<?php if($child_cats){ ?>
				<div class="sub-block">
					<?php foreach($child_cats as $child_cat){ ?>
					<div class="item_mega">
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

						<div class="block_item_service">
							<div class="hov_mega"></div>
							<?php 
								$img_info = get_the_category_data($child_cat->term_id); 
   					            $img = wp_get_attachment_image($img_info->id, 'img_cat');
   					            echo $img;

   					            if($sub_products){ ?>

									<ul class="sub_products_menu">
										<?php foreach($sub_products as $sub_product){ ?>
											<li class="item_sub_product_menu"><a href="<?php echo get_category_link($sub_product->term_id); ?>"><?php echo get_cat_name($sub_product->term_id); ?></a></li>
										<?php } ?>
									</ul>

   					         	<?php  }

							 ?>
						 	<div class="title_service_serv"><a href="<?php echo get_category_link($child_cat->term_id); ?>"><?php echo get_cat_name($child_cat->term_id); ?></a></div>
						</div>
					</div>
					<?php } //end foreach ?>
				</div>
				<?php }else{ echo 'Нет выбранных элементов!'; } ?>
			</div>
		</div>



<?php wp_footer(); ?>
</body>
</html>