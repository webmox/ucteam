<?php 

if(is_page()){
	include(TEMPLATEPATH.'/page-about.php');
}else{
	include(TEMPLATEPATH.'/page-default.php');
}


?>