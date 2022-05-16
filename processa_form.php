<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
<?php

$produto = filter_input(INPUT_POST,"produto",FILTER_SANITIZE_SPECIAL_CHARS);
$fabricantes = $_POST["fabricante"];
$preco = filter_input(INPUT_POST, "preco",FILTER_VALIDATE_FLOAT);
$quantidade = filter_input(INPUT_POST, "quantidade",FILTER_VALIDATE_INT); 
$descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_SPECIAL_CHARS);
?>

<h1>Dados de cadastro:</h1>

<ul>
    <li>Produto: <?=$produto?></li>
    <li> Fabricante: <?=$fabricantes?> </li>
    <li>Preço: R$ <?=$preco?></li>
    <li>Quantidade: <?=$quantidade?></li>
    <li>Descrição: <?=$descricao?></li>
</ul>
</body>
</html>