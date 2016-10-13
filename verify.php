<?php

$access_token = 'kyyiBSKSSrCjxYLXuDcWedVwVnJejknjhh5CoXXfO2oAZCYF0nGo38624B/aBf73SflieiUmkDxtCArW2zB1AINn50FQ9u/ZyXM//e6DCfh5pUJMZIVJ11/PEHNDPIoC7VG8iMAyHsxsiqUW13/DywdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
