<?php

include('simple_html_dom.php');
//$html = str_get_html($str);

// Create DOM from URL or file
$html = file_get_html('https://www.mrporter.com/en-in/mens/search/shirt');
echo $html;
// Find all images
/* foreach($html->find('img') as $element)
       echo $element->src . '<br>';
 */

?>