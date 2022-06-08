<?php

$dsn = 'mysql:host=localhost;dbname=system';
$user = 'root';
$pass = '';

try {
    $dbh = new PDO($dsn, $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo 'Conexão bem-sucedida';
} 

catch (PDOException $e) {
    echo 'Conexão falhou: ' . $e->getMessage();
}
