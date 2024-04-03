<?php

require_once "Pessoa.php";
require_once "Cliente.php";
require_once "ClienteVip.php";

function p($variavel){
    echo "Resultado:",$variavel. "<br>";
}

$cl = new Cliente();
$clv = new ClienteVip();

$cl -> nome = "Nome do Cliente";
p($cl1 -> nome);

$clv -> nome = "Nome do Cliente Vip";
p($clv -> nome);
