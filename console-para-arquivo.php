<?php

// STDIN = fopen('php://stdin', 'r');
$novoCurso = trim(fgets(STDIN));

file_put_contents('cursos-php.txt', "{$novoCurso}\n", FILE_APPEND);
