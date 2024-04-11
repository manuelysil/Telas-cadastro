<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once "factory/conexao.php";
        $nome = $_POST["cxpesquisanome"];
        $consulta = "select *from tbusuario where nome = '$nome'";
        $executar = mysqli_query($conn,$consulta);
        $linha= mysqli_fetch_array($executar) 
    ?>
    <form>
        Nome: <?php echo $linha["nome"]?><br/>
        Nome: <?php echo $linha["email"]?><br/>
        Nome: <?php echo $linha["senha"]?><br/>
    <form>
</body>
</html>