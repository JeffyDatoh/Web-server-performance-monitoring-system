<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://notify-api.line.me/api/notify',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => 'message=Hello%20OOOOOOOOOOOOOO',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/x-www-form-urlencoded',
    'Authorization: Bearer 7iZD4VDa5Fyh7aJmKTq5VAsQYUDHtSyHFhCuIdtEshG'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>