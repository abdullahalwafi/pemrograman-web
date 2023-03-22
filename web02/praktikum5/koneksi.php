<?php

$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

$dns = new PDO(
    'mysql:
    host=localhost;
    dbname=dbpos',
    'root',
    '', $opt
);
?>
