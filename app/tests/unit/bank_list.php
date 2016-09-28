<?php
$bankListArray = [
    ['bankCode' => 1987, 'bankName' => 'Banco 200'],
    ['bankCode' => 1040, 'bankName' => 'BANCO AGRARIO'],
    ['bankCode' => 1032, 'bankName' => 'BANCO CAJA SOCIAL DESARROLLO'],
    ['bankCode' => 1019, 'bankName' => 'BANCO COLPATRIA DESARROLLO'],
    ['bankCode' => 1078, 'bankName' => 'BANCO COLPATRIA UAT'],
    ['bankCode' => 1052, 'bankName' => 'BANCO COMERCIAL AVVILLAS S.A.'],
    ['bankCode' => 1061, 'bankName' => 'Banco Coomeva S.A., Bancoomeva'],
    ['bankCode' => 1016, 'bankName' => 'BANCO COOPERATIVO COOPCENTRAL'],
    ['bankCode' => 1006, 'bankName' => 'Banco Corpbanca'],
    ['bankCode' => 1099, 'bankName' => 'Banco Corpbanca (Migracion)'],
    ['bankCode' => 1051, 'bankName' => 'BANCO DAVIVIENDA'],
    ['bankCode' => 10512, 'bankName' => 'BANCO DAVIVIENDA Desarrollo'],
    ['bankCode' => 8888, 'bankName' => 'BANCO DE BOGOTA 3.0'],
    ['bankCode' => 1001, 'bankName' => 'BANCO DE BOGOTA DESARROLLO 2013'],
    ['bankCode' => 1037, 'bankName' => 'BANCO DE BOGOTA PRUEBAS 3.0'],
    ['bankCode' => 3333, 'bankName' => 'BANCO DE BOGOTA PRUEBAS 3.0'],
    ['bankCode' => 1023, 'bankName' => 'BANCO DE OCCIDENTE'],
    ['bankCode' => 1062, 'bankName' => 'Banco Falabella'],
    ['bankCode' => 1010, 'bankName' => 'BANCO GNB COLOMBIA (ANTES HSBC)'],
    ['bankCode' => 1012, 'bankName' => 'Banco GNB Sudameris'],
    ['bankCode' => 1031, 'bankName' => 'Banco M A P G'],
    ['bankCode' => 1077, 'bankName' => 'Banco Mis Ahorritos'],
    ['bankCode' => 10500, 'bankName' => 'BANCO NVO_WLSD'],
    ['bankCode' => 1060, 'bankName' => 'Banco Pichincha S.A'],
    ['bankCode' => 1002, 'bankName' => 'BANCO POPULAR'],
    ['bankCode' => 1058, 'bankName' => 'Banco Procredit Colombia'],
    ['bankCode' => 1101, 'bankName' => 'Banco PSE'],
    ['bankCode' => 1035, 'bankName' => 'Banco Tequendama'],
    ['bankCode' => 1022, 'bankName' => 'Banco Union Colombiano'],
    ['bankCode' => 1055, 'bankName' => 'Banco Web Service ACH WSE 3.0'],
    ['bankCode' => 10072, 'bankName' => 'BANCOLOMBIA DATAPOWER'],
    ['bankCode' => 10071, 'bankName' => 'BANCOLOMBIA DESARROLLO'],
    ['bankCode' => 1007, 'bankName' => 'BANCOLOMBIA QA'],
    ['bankCode' => 1013, 'bankName' => 'BBVA COLOMBIA S.A.'],
    ['bankCode' => 1009, 'bankName' => 'Citibank Colombia S.A.'],
    ['bankCode' => 1014, 'bankName' => 'HELM BANK S.A. WSE 3.0'],
    ['bankCode' => 1098, 'bankName' => 'HELM BANK S.A...']
];
$bankList = new stdClass();

foreach ($bankListArray as $item) {
    $bank = new stdClass();
    $bank->bankCode = $item['bankCode'];
    $bank->bankName = $item['bankName'];
    $bankList->getBankListResult->item[] = $bank;
}
return $bankList;