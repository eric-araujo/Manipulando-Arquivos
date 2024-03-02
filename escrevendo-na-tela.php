<?php
// STDOUT = fopen('php://stdout', 'w');
fwrite(STDOUT, 'Olá Mundo!');

// STDERR = fopen('php://stderr', 'w');
fwrite(STDERR, 'Olá Mundo!');

$arquivo = fopen('zip://arquivos.zip#viagens.txt', 'r');
stream_copy_to_stream($arquivo, STDOUT);
