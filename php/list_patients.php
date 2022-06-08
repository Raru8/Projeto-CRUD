<?php

include 'connect_db.php';

if (!empty($_GET['search'])) {

    $search = $_GET['search'];
    $list = $dbh->prepare("SELECT * FROM pacientes WHERE nome LIKE '%$search%' or cpf LIKE '%$search%'");
    $list->execute();

} 
else {
    $list = $dbh->prepare("SELECT * FROM pacientes");
    $list->execute();
}

$ls = '';

while ($row = $list->fetch(PDO::FETCH_ASSOC)) {

    $id = $row['id'];
    $nome = $row['nome'];
    $cpf = $row['cpf'];
    $celular = $row['celular'];
    $endereco = $row['rua'];

    $ls .= "
    <tr class='font-light'>
    <td class='h-10 pl-3'>$nome</td>
    <td class='bg-zinc-400'>$cpf</td>
    <td>$celular</td>
    <td>$endereco</td>
    <td class='flex'><a href='#' onclick='Delete(`{$id}`,`{$nome}`)'><img src='icons/trash.svg'></a>
        &nbsp;
        &nbsp;
    <button id='editar' name='Eid' value='$id'><img src='icons/edit-2.svg'></button>
    </td></tr>";
}

// php/delete_patients?id=$id
// onclick='confirmDelete(`{$id}`, `{$nome}`)'
