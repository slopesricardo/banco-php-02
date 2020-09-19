<?php
require_once 'funcoes.php';

$clientes = [
    "COD123" => [
        "titular" => "Angela",
        "saldo" => 5000.50
    ],
    "CODE124" => [
        "titular" => "Ricardo",
        "saldo" => 10350
    ],
    "COD125" => [
        "titular" => "Aniete",
        "saldo" => 15800
    ]
];

$clientes['COD123'] = saca($clientes['COD123'], 500.50);
$clientes['COD125'] = deposita($clientes['COD125'], 200);

