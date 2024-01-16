<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Novo usuario</h1>
<form action="novo-usuario.php" method="get">
<label for="nome">Nome: </label>
<input type="text"><br>
<label for="email">Email:</label>
<input type="email" name="" id=""><br>
<label for="senha">Senha: </label>
<input type="password" name="" id=""> <br>


<button type="submit">Criar Usuario </button><br>
</form>

<form action="index.php" method="get">
<button type="submit">Voltar</button>
</form>

<?php

include("config.php");
switch(@$_REQUEST["page"]){
    case"novo":
        include("novo-usuario.php");
        break;
        case "listar";
        include("lista-de-usurios.php");
        break;

        default;

}

?>
</body>
</html>