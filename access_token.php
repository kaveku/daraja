<?php
$consumer_key= 'QGqxE78NCfWYCfGatHWrl2FZ89qx2pwA';
$consumer_secret='GAMVtZgE5RHh1mgx';
$header=['Content-Type:application/json; charset=utf8'];
$url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
$curl=curl_init($url);
curl_setopt($curl,CURLOPT_HTTPHEADER,$header);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($curl,CURLOPT_HEADER,FALSE);
curl_setopt($curl,CURLOPT_USERPWD,$consumer_key.':'.$consumer_secret);
$result=curl_exec($curl);
$status=curl_getinfo($curl,CURLINFO_HTTP_CODE);
$result=json_decode($result);
$access_token=$result->access_token;
echo $access_token;
curl_close($curl);
?>