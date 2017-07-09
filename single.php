<?php

if(in_category(2)){
	include(TEMPLATEPATH.'/single-news.php');
}else if(in_category(19)){
	include(TEMPLATEPATH.'/single-project.php');
}else{
	include(TEMPLATEPATH.'/single-default.php');
}


 ?>