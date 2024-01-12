<?php

$nomeArquivo = 'viagens.txt';

// Lê todo o arquivo
$arquivo = fopen($nomeArquivo, 'r');

$tamanhoDoArquivo = filesize($nomeArquivo);
$cursos = fread($arquivo, $tamanhoDoArquivo);

echo $cursos;

fclose($arquivo);

// Lê todo o arquivo
echo file_get_contents($nomeArquivo);

// Exibe cada linha do arquivo como um array
var_dump(file($nomeArquivo));
