<?php
$nome=$_POST['nome'];
$pass=$_POST['pass'];
$arq=fopen("produtos.txt","a");
fwrite($arq,$nome);     
fwrite($arq,"\t");
fwrite($arq,$pass);
fwrite($arq,"\n");           
fclose($arq);   
header("location: listar.php");           
?>