<?php

include('simple_html_dom.php');


// Create DOM from URL or file
$url = 'https://mmlafleur.com/shop/category/summer-collection';

$dom = file_get_html($url); 
echo $dom; die;

$filtersection = $dom->find("#filterStripe",0);

	if($filtersection){
		$filterDiv=$filtersection->find("#shop-filters .js-filter-type",0);
		echo $filterDiv; die;
	}



