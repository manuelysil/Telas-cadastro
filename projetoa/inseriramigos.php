<?php
if($_POST["cxamigos"] != ""){
    include_once 'factory/conexao.php';
    $amigo = $_POST["cxamigos"];
    $email = $_POST["cxemail"];
    $telefone =  $_POST["cxtelefone"];
    $whast = $_POST["cxwhast"];
    $datanasc =  $_POST["cxdatanasc"];
    $sql = "insert into tbamigos(amigo,email,telefone,whast,datanasc) 
    values('$amigo','$email','$telefone','$whast','$datanasc')";
    $query = mysqli_query($conn,$sql);
    echo "Dados cadastrado com sucesso!";  
}
else {
    echo"Dados nao cadastrado!";
}
?>