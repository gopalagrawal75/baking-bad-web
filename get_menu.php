<?php 
$url = "http://lannister-api.elasticbeanstalk.com/tyrion/menu?vendor_id=1";
$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);

// Will dump a beauty json :3
$array = json_decode($result, true);

for ($i =0 ; $i < count($array['data']['menu']);$i++)
	print_r($array['data']['menu'][$i]['category']);

?>