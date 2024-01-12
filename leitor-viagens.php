<?php

$arquivo = fopen('viagens.txt', 'r');

while ($curso = fgets($arquivo)) {
    echo $curso;
}

fclose($arquivo);
