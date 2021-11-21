<?php
//step1
$cSession = curl_init(); 
//step2
curl_setopt($cSession,CURLOPT_URL,"https://www.mrporter.com/en-in/");
curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
curl_setopt($cSession,CURLOPT_HEADER, false); 
//step3
$result=curl_exec($cSession);
//step4
curl_close($cSession);
//step5
echo $result;

//echo $output = file_get_contents("https://www.mrporter.com");




curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'X-Apple-Tz: 0',
    'X-Apple-Store-Front: 143444,12'
));


?>