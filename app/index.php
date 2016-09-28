<?php
date_default_timezone_set('America/Bogota');

$seed = date('c');
$tranKey = '024h1IlD';

echo $seed."<br/>";


$str = $seed.$tranKey;

$hashString = sha1($str, false);

echo $hashString;die;

$soapClient = new \SoapClient('https://test.placetopay.com/soap/pse/?wsdl', []);

$data = $soapClient->getBankList([
    'auth' => [
        'login' => '6dd490faf9cb87a9862245da41170ff2',
        'tranKey' => $hashString,
        'seed' => $seed,
        'additional' => []
    ]
]);

print_r($data);die;