<?php
$access_token = '5s3beWIw+vG+G1W0C4svPIUEN//gmACmJKSTVhI9N2ieM9bqMNYdVKY2bLWumtoofFFcHdU7c9L4bVlXZmZuqlF8H9RQQLwIHn3J+rrdwIqjY8b/LyBg98tLI5PpcICcmwYknf+LaxUVGTOTPfyphgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
