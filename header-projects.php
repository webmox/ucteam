<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title>
	<link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>
<body>
<div class="layout">
	<div class="header header-projects">

		<div class="top_header">
			<div class="container">
				<ul class="social_btns pull-left">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				</ul>

				<div class="right_block pull-right">
					<a href="#consultant" class="link_form_header consultation_btn">Узнать стоимость продукта</a>
				</div>

			</div>
		</div><!--end top_header-->

		<div class="middle_header clearfix">
			<div class="container">
				<a href="<?php bloginfo('url'); ?>" class="logo"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name') ?>"></a>

				<div class="descript_site">
					<p>UK TEAM это  компания, представляет полный комплекс услуг в области устройства современных офисных интерьеров в рамках FIT-OU</p>
				</div>

				<div class="pull-right">
					<p class="block_phones">
						<i class="fa fa-phone"></i>
						<span class="phone">+38096 465 67 67</span>
						<span class="phone">+38096 465 67 67</span>
					</p>
				</div>
			</div>
		</div><!--end middle_header-->

		<div class="wrap_header_menu clearfix">
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="block_menu">
							<?php
								$args = array(
										  'theme_location'  => 'header-top-menu',
										  'menu_class'      => 'header-menu',
										  'container'       => '',
										  'before'          => '',
										  'after'           => '',
										  'link_before'     => '',
										  'link_after'      => ''
										);
								wp_nav_menu( $args );
							?>
						</div><!--end block_menu-->
					</div>
					<div class="col-sm-3">
						<div class="block_search">
							<form id="searchform" action="<?php echo home_url( '/' ) ?>" method="GET" >
								<input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Пошук" />
								<input id="searchsubmit" type="submit" value="поиск">	
							</form>
						</div><!--end block_search-->
					</div>
				</div>
			</div>
		</div><!--end wrap_header_menu-->

		

</div><!--end header-->