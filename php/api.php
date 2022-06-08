<?php

header('Content-Type: application/json');

include 'connect_db.php';

$id = $_GET['id'];

$list = $dbh->prepare("SELECT * FROM pacientes WHERE id=?");

$list->execute([$id]);

$row = $list ->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($row);

