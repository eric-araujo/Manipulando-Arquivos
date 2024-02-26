<?php

require 'FiltroStream.php';

$arquivo = fopen('viagens.txt', 'r');

stream_filter_register('viagem.barra', FiltroStream::class);
stream_filter_append($arquivo, 'viagem.barra');

echo fread($arquivo, filesize('viagens.txt'));
