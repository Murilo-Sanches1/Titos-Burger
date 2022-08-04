<?php

$documentos = [
    'CPF',
    'RG',
];

for ($i = 0; $i <= count($documentos); $i++) {
    echo ($documentos[$i]);
};

$i = 0;
while ($i <= count($documentos) - 1) {
     echo $documentos[$i];
     $i++;
};

?>