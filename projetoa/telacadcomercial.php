<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    <title>Document</title>
</head>
<nav id="telac">
<nav id="texto">
<h1>Cadastro Comércio</h1>
</nav>
<body>
<nav id="comercial">
<form action="inserircomercial.php" method="POST">
            Nome:
            <input type="text" name="cxnome">
            <br/>
            Comercio:
            <input type="text" name="cxcomercio">
            <br/>
            Telefone:
            <input type="text" name="cxtelefone">
            <br/>
            Whast's:
            <input type="text" name="cxwhast">
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
</nav>
</body>
</html>