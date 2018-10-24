<?php

/* PHP Request with Referer */

require 'vendor/autoload.php';

$endpoint = 'http://www.api.com/endpoint'; //API endpoint

$headers = ['Referer' => 'http://mysite.com/'];

$guzzle = new \GuzzleHttp\Client([
    'headers' => $headers
]);

$result = $guzzle->get($endpoint);

//var_dump($result);

echo "Status Code: ".$result->getStatusCode();
echo "\n";

echo "Reason Phrase: ".$result->getReasonPhrase(); 
echo "\n";

echo "Body:\n";
echo $result->getBody();