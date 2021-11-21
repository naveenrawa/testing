<?php
// example of how to use advanced selector features
include('simple_html_dom.php');


// Create DOM from URL or file


$dom = file_get_html('https://www.mrporter.com/en-in/mens/product/moncler/clothing/plain-t-shirts/logo-appliqued-cotton-jersey-t-shirt/14097096493692341'); 

echo $dom; die;
$result_as = $dom->find("div.ProductDetailsPage77__productDetailsGrid")->plaintext;

echo $result_as; die;



$output = file_get_contents("pageHtml.txt");
$dom = str_get_html($output);

$result_as = $dom->find("div.ProductListingPage43__layoutGrid .ProductGrid43 a");

	foreach ($result_as as $result_a) {
		$sku = "";
		//print_r($result_a) ; die;
		if ($sku_element = $result_a->find('span.ProductItem23__details', 0)) {
			//echo $sku = $sku_element->{'data-product-id'},"<br>";
			
		}		
		$title = "";
		if ($title_element = $result_a->find('.ProductItem23__skeletonContainer .ProductItem23__name', 0)) {
			$title = $title_element->plaintext; 
		}
		$price = "";
		if ($price_element = $result_a->find('.ProductItem23__skeletonContainer .PriceWithSchema9__value span', 0)) {
			$price = $price_element->plaintext; 
		}
		
		$imageUrl = "";
            if ($image_element = $result_a->find('.ProductItem23__imageContainer .Image17__imageContainer img', 0)) {
                $imageUrl = $image_element->src;
				//echo  $imageUrl ; die;
                /* $temp = explode('.', $imageUrl);
                $temp[3] = "_AC_US218_";
                $imageUrl = implode('.', $temp); */
            }
		
	}

$pagination_elements = $dom->find(".ProductListingPage43__refine .ProductListingPage43__totalProducts", 0);
        if (!empty($pagination_elements)) {
            echo $pagination_element = $pagination_elements->plaintext;
        }







?>