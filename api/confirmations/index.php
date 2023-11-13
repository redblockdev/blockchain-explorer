<?php 

$data_string = '{"jsonrpc":"2.0","method":"f_transaction_json","params":{"hash":"'.$_GET["blockhash"].'"}}';

$ch = curl_init('http://127.0.0.1:8211/json_rpc');
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

$tHeight = $responseData['result']['block']['height'];

// print_r($tHeight);
curl_close($ch);

$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch2, CURLOPT_URL, 'http://127.0.0.1:8211/getinfo');
$result = curl_exec($ch2);
$obj = json_decode($result, TRUE);
curl_close($ch2);

$nHeight = ($obj['network_height']);

$confirmations    = $nHeight - $tHeight;

print_r($confirmations);

curl_close($ch2);
?>