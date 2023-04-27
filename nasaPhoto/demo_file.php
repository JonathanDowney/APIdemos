<?php

$handle = curl_init();
 
$url = "https://api.nasa.gov/planetary/apod?api_key=tZSupfRv0evd9jQBaEv9CgIoyVO0izCcxM8XxAue";
 
// Set the url
curl_setopt($handle, CURLOPT_URL, $url);
// Set the result output to be a string.
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
 
$output = curl_exec($handle);
 
curl_close($handle);

// $myJSON = json_encode($output);

echo $output;
?>
