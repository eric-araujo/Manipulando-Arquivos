<?php

$arquivo = new SplFileObject('viagens.csv');

while (!$arquivo->eof()) {
    $linha = $arquivo->fgetcsv(';');

    echo $linha[0] . PHP_EOL;
}

$date = new DateTime();
$date->setTimestamp($arquivo->getCTime());

echo $date->format('d/m/Y');
