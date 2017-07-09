<div class="section sertificat">
				
	<?php $srtificat = new WP_Query(array('post_type'=>'page', 'page_id'=>37)); ?>

	<?php  if($srtificat->have_posts()) : while($srtificat->have_posts()) : $srtificat->the_post(); ?>

	<h2 class="title_section"><a href=""><?php the_title(); ?></a></h2>
	<?php 

		$sert = get_field('sertificats'); 
		//print_array($sert);

	?>
	<?php endwhile ?>
	<?php endif ?>
	
	<?php if($sert){ ?>
	<div class="sertificat_carousel">
		<?php foreach($sert as $img_srt){ ?>
		<?php
			$img = wp_get_attachment_image($img_srt['img_sertificat']['id'], 'img_sertificat');
		 ?>
		<div class="item">
			<div class="item_carousel">
				<?php echo $img; ?>
			</div>
		</div>
		<?php } ?>
	</div><!--end sertificat_carousel-->
	<?php } ?>	
</div>