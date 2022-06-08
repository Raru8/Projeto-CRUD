<?php 

include 'connect_db.php';



if(isset($_GET['id'])){

    $id=$_GET['id'];
    $stmt = $dbh->prepare("DELETE FROM pacientes WHERE id=?");
    $stmt->execute([$id]);

     header('Location: ../index.php');   

    // echo $id;
    
}else{
    echo 'Erro  de operação';
}


// echo $stmt;


?>