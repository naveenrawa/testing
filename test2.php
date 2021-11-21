<?php
// example of how to use advanced selector features
include('simple_html_dom.php');



$dom = file_get_html('https://search.gome.com.cn/search?question=%E7%A7%BB%E5%8A%A8&searchType=goods&pos=1&sq=&search_mode=history&reWrite=true&instock=1'); 

echo $dom; die;
$result_lis = $dom->find("div.product-box ul");
		
        foreach ($result_lis as $result_li) {
			
			$sku = "";
			if ($sku_element = $result_li->find('.product-item', 0)) {
                $sku = $sku_element->{'skuid'};
				
            }
			
            if ($title_element = $result_li->find('p.item-name', 0)) {
                echo $title = $title_element->plaintext; 
            }
			
		   /*  $price = "";
            if ($price_element = $result_li->find('p.item-price', 0)) {
                $price = $this->filterPrice($price_element->plaintext); 
            }
			
			$imageUrl = "";
            if ($image_element = $result_li->find('p.item-pic a img', 0)) {
             
               $imageUrl = $image_element->{'gome-src'}; 
			    if (strpos($imageUrl,'210.jpg') !== false){
				    $imageUrl = str_replace('_210.jpg','.jpg',$imageUrl); 
					
			    }
			   
            } */
			
		}





?>