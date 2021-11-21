<?php

include('simple_html_dom.php');
//$html = str_get_html($str);

$str= file_get_html('https://www.google.com/shopping/customerreviews/merchantreviews?q=ubuy.co.in
')->plaintext;
//$html = str_get_html($str);
//$html = str_get_html($str);




?>