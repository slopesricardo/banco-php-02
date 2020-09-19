<?php

function exibe(string $mensagem) 
{
    echo "$mensagem " . PHP_EOL;
}

function saca(array $conta, float $valor) : array
{
    if ($valor <= $conta['saldo']){
        $conta['saldo'] -= $valor;
    } else {
        exibe("Não foi possível efetuar o saque.");
    }

    return $conta;
}

function deposita(array $conta, float $valor) : array
{
    if ($valor > 0){
        $conta['saldo'] += $valor;
    } else {
        exibe("Não foi possível efetuar o deposito.");
    }

    return $conta;
}
