<?php
if($_POST["cxcomercio"] != ""){
    include_once 'factory/conexao.php';
    $nome = $_POST["cxnome"];
    $comercio = $_POST["cxcomercio"];
    $telefone =  $_POST["cxtelefone"];
    $whast = $_POST["cxwhast"];
    $sql = "insert into tbcomercial(nome,comercio,telefone,whast) values('$nome','$comercio','$telefone','$whast')";
    $query = mysqli_query($conn,$sql);
    echo "Dados cadastrado com sucesso!";  
}
else {
    echo"Dados nao cadastrado!";
}
?>