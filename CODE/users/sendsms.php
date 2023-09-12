<?php
	// Account details
	$apiKey = urlencode('9ZMtejuEiHk-jdDt9zoBUXy8sfC8p0oATFmOGe1gOE');
	
	// Message details
	//$numbers = urlencode('8668683615');
	$sender = urlencode('TXTLCL');
	$message = rawurlencode($msg);
 
	// Prepare data for POST request
	$data = 'apikey=' . $apiKey . '&numbers=' . $numbers . "&sender=" . $sender . "&message=" . $message;
 
	// Send the GET request with cURL
	$ch = curl_init('https://api.textlocal.in/send/?' . $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	echo $response;
?>