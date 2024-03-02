<?php

$contexto = stream_context_create([
    'zip' => [
        'password' => '123456'
    ]
]);

echo file_get_contents('zip://viagens.zip#viagens.txt', false, $contexto);
