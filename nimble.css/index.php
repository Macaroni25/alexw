<?php

$url = "https://raw.githubusercontent.com/Macaroni25/nimble.css/master/index.html"; //write your raw.github.com URL
$gethtml = file_get_contents($url);
echo $gethtml; //output the content in the page
?>