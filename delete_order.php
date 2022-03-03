<?php

$API_KEY = 'API key';
$PASSWORD = 'access token';
$SHOP_URL = 'storename.shopify.com';
$SHOPIFY_API = "https://[your api key]:[access-token]@storename.shopify.com/admin/api/2021-10/orders/{orderid}.json";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $SHOPIFY_API);

curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_VERBOSE, 0);
curl_setopt($curl, CURLOPT_HEADER, 1);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_HEADER, false);
$response = curl_exec ($curl);
curl_close ($curl);

echo $response;

?>