<?php 
$cat_ID = get_query_var('cat');

$mgCurParent = &get_term($cat,'category');

if ($mgCurParent->parent == 0) {
	$mgGlobalParent = $cat;
} else{
	$mgCurCatID = $cat;
	do {
		$mgCurParent = &get_term($mgCurCatID,'category');
		$mgCurCatID = $mgCurParent->parent;
		$mgGlobalParent = $mgCurParent->term_id;
	} while ($mgCurParent->parent > 0);
}

$parentId = $mgCurParent->term_id;

	/*Выбираем все дочерние категории текущей*/
$args = array(
	'child_of'                 => 0,
	'parent'                   => $parentId, /**/
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

<?php if($child_cats){ ?>
<div class="widget-block">
	<ul class="menu">
		<?php foreach($child_cats as $child_cat){ ?>

			<?php 

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

			$child_sub_cats = get_categories($args_child);

?>

			<li class="item<?php if($cat_ID == $child_cat->term_id){ echo ' current_item'; } if($child_sub_cats){ echo ' has_sub_menu'; } ?>" >
				<a href="<?php echo get_category_link($child_cat->term_id); ?>"><?php echo get_cat_name($child_cat->term_id); ?></a>
				<?php if($child_sub_cats){ ?>
				
				<ul class="sub_menu">
					<?php foreach($child_sub_cats as $child_sub_cat){ ?>
						<li><a href="<?php echo get_category_link($child_sub_cat->term_id); ?>"><?php echo get_cat_name($child_sub_cat->term_id); ?></a></li>
					<?php } ?>
				</ul>

				<?php } ?>
			</li>
		<?php } ?>
	</ul>
</div>
<?php } ?>