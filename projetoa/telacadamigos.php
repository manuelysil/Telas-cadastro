<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    <title>Document</title>
</head>
<body>
<nav id="tela">
<nav id="texto">
<h1>Cadastro Amigos</h1>
</nav>
<nav id="amigos">
<form action="inseriramigos.php" method="POST">
            Amigos:
            <input type="text" name="cxamigos">
            <br/>
            E-mail:
            <input type="email" name="cxemail">
            <br/>
            Telefone:
            <input type="text" name="cxtelefone">
            <br/>
            Whast's:
            <input type="text" name="cxwhast">
            <br/>
            Data de nascimento:
            <input type="date" name="cxdatanasc">
            <br/>
            <input type="submit" value="Gravar">
</form>   
</nav> 
<hr size="5" color="#0f0" width="500">
<form >
        Digite o nome completo: <br/>
         <input type="text" name="cxpesquisanome"/>
         <input type="submit" value="Buscar"/>
</form>

</body>
</nav>
</html>