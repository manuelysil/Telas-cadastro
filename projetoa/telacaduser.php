<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    <title>Document</title>
</head>
<nav id="telau">
<nav id="texto">
<h1>Cadastro Usuário</h1>
</nav>
<body>
<nav id="user">
    <form action="inseriruser.php" method="POST">
        Nome:
            <input type="text" name="cxnome"><br/>
        E-mail:
            <input type="e-mail" name="cxemail"/><br/>
        Senha:
            <input type="password" name="cxpassword"/><br/>
            <input type="submit" value="gravar">
    </form>
</nav>
<hr size="5" color="#0f0" width="500">
     <form >
        Digite o nome completo: <br/>
         <input type="text" name="cxpesquisanome"/>
         <input type="submit" value="Buscar"/>
     </form>
</nav>
</body>
</html>