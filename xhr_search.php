<?php
$url = "http://www.bbc.co.uk/iplayer/ion/searchextended/search_availability/iplayer/service_type/radio/format/json/q/{$_POST['query']}";
	
	$ch = curl_init();
	// Disable SSL verification
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	// Will return the response, if false it print the response
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// Set the url
	curl_setopt($ch, CURLOPT_URL,$url);
	// Execute
	$result=curl_exec($ch);
	
	
	// json_decode($result, true)
	
	$result_array[] = json_decode($result, true);
	
	
	
