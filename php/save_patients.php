<?php

include 'connect_db.php';

$nome = "";
$cpf = "";
$cel = "";
$rua = "";
$num = "";

if (isset($_POST['salvar'])) {

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $cel = $_POST['celular'];
    $rua = $_POST['rua'];
    $num = $_POST['numero'];

    $stmt = $dbh->prepare("INSERT INTO pacientes (nome, cpf, celular, rua, numero) VALUES (?,?,?,?,?)");

    $stmt->execute([$nome, $cpf, $cel, $rua, $num]);

    if ($stmt->rowCount() > 0) {

        sleep(3);
        header('Location: ../index.php');
    } else {
        echo 'erro';
    }
}

if (isset($_POST['editar'])) {

    $id = $_POST['id'];

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $cel = $_POST['celular'];
    $rua = $_POST['rua'];
    $num = $_POST['numero'];

    $stmt = $dbh->prepare(" UPDATE pacientes SET nome=?, cpf=?, celular=?, rua=?, numero=? WHERE id=?");

    $stmt->execute([$nome, $cpf, $cel, $rua, $num, $id]);

    if ($stmt->rowCount() > 0) {
        sleep(2);
        header('Location: ../index.php');
    } else {
        echo 'erro';
    }
}

// include 'index.php'
