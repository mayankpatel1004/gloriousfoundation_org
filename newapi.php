<?php
$url = "https://gloriousjournal.com/membership-api.html?data=Faculty";

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "User-Agent: Mozilla/5.0",
    "Accept: application/json",
    "Referer: https://gloriousjournal.com/"
]);

$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);

print_r($data);
?>