<?php
include '../assets/simplehtmldom.php';
// Create DOM from URL or file
if(isset($_GET['url'])){$url = $_GET['url'];}else{$url = "https://www.youtube.com/channel/UCFPFrVOaeG3q1PEzpeh7hCg";}

$html = file_get_html($url);


echo $title = $html->find('title',0)->plaintext;
print_r($title = $html->find('meta[property="og:image"]',0)) ;
print_r('ff'); 



foreach($html->find('meta') as $element)
       echo $element->src . '<br>';


/*
// Find all images
foreach($html->find('img') as $element)
       echo $element->src . '<br>';

// Find all links
foreach($html->find('a') as $element)
       echo $element->href . '<br>';
*/

?>