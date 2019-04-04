<?php 

$data_string = '{"jsonrpc":"2.0","id":"test","method":"getlastblockheader","params":" "}';

$ch = curl_init('http://127.0.0.1:17935/json_rpc');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);

$result = curl_exec($ch);

// print_r($result);

// Decode the response
$responseData = json_decode($result, TRUE);

// Print the date from the response
// print_r($responseData);

$hash = $responseData['result']['block_header']['hash'];

print_r($hash);
curl_close($ch);

?>