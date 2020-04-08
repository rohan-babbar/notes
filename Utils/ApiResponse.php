<?php
$apiResponse  = new stdClass();
$apiResponse->success = false;
$apiResponse->error = null;
$apiResponse->message = null;
$apiResponse->data = null;

function successMessage($message){
    header('Content-Type: application/json');
    global $apiResponse;
    $apiResponse->success = true;
    $apiResponse->message = $message;
    return json_encode($apiResponse);
}
function successData($message,$data){
    header('Content-Type: application/json');
    global $apiResponse;
    $apiResponse->success = true;
    $apiResponse->message = $message;
    $apiResponse->data = $data;
    return json_encode($apiResponse);
}

function negativeMessage($message){
    header('Content-Type: application/json');
    global $apiResponse;
    $apiResponse->success = false;
    $apiResponse->error = $message;
    return json_encode($apiResponse);
}
