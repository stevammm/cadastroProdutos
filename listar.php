<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<table border='1' class='table table-hover'>
<thead>
    <tr>
        <th>#</th>
        <th>Produto</th>
        <th>Preço</th>
    </tr>
</thead>
<?php
$arq=fopen("produtos.txt","r");
$linha=fgets($arq);
$conta=1;
while($linha){
    $produtoPreco=explode("\t",$linha);
    echo "<tr><td>";
    echo $conta++;
    echo "</td><td>";
    echo $produtoPreco[0];
    echo "</td><td>";
    echo $produtoPreco[1];
    echo "</td></tr>";
    $linha=fgets($arq);
}
?>
</table>

<button href="form.html" class="btn btn-success"><a href="form.html">Cadastro</a></button>
</body>
</html>