<?php

//
$appId = "554";
$appKey1 = "8NdU5pG5R2spGHGhyO99HN1OhD8IQJBn";
$appKey2 = "uUfsWgfLkRLzq6W2uNXTCxrfxs51auny";

//create merchant create order request

function ZPMACGenerate($data)
{
    
}

function ZPCreateOrderRequest($data)
{
    $zpOrderCreateUrl = "https://sb-openapi.zalopay.vn/v2/create";

    $ch = curl_init($zpOrderCreateUrl);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data))
    );
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    //execute post
    $result = curl_exec($ch);
    //close connection
    curl_close($ch);
    return $result;
}

$zpOrderData = array(
    'app_id' => $appId,
    'app_user' => "DemoShop",
    'app_trans_id' => 
)