<?php

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


if(is_category(3)){
	include(TEMPLATEPATH.'/category-services.php');
}else if($parentId == 3){
	include(TEMPLATEPATH.'/category-service-post.php');
}else if(is_category(2)){
	include(TEMPLATEPATH.'/category-news.php');
}else if(is_category(19)){
	include(TEMPLATEPATH.'/category-projects.php');
}else{
	include(TEMPLATEPATH.'/category-default.php');
}


?>