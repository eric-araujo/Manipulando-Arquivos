<?php

$viagens = file('viagens.txt');
$outrasViagens = file('viagem-mg.txt');

$arquivoCSV = fopen('viagens.csv', 'w');

gerarCSV($viagens, true, $arquivoCSV);
gerarCSV($outrasViagens, false, $arquivoCSV);

function gerarCSV(array $viagens, bool $jaFui, $arquivoCSV)
{
    foreach ($viagens as $viagem) {
        $jaFuiNaViagem = $jaFui ? "Sim" : "Não";
        $linha = [trim($viagem), $jaFuiNaViagem];

        fputcsv($arquivoCSV, $linha, ';');
    }
}

fclose($arquivoCSV);
