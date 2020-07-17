<?php
header("Content-Type:application/json");
$response='{
    "ResultCode":0
    "ResultDesc":"Confirmation Received successfully"
}';
//Data
$mpesaResponse=file_get_contents('php://input');
//log the response
$logfile="M_PESAResponse.txt";
$jsonMpesaResponse=json_decode($mpesaResponse,true);
//Write to file
$log=fopen($logfile,"a");
fwrite($log,$MpesaResponse);
fclose($log);
echo $mpesaResponse;
?>