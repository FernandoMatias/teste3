<?php
$conexao=include 'conexao.php';

$id = $_GET['id'];
$delete = mysql_query("DELETE FROM teste WHERE id = '$id'");
 
if ($delete == ''){
     echo "erro ao apagar cadastro";
 }else{
     echo "Cadastro Apagado com sucesso";
 }
?>

<html>
    <head>
	<title>Apagar</title>
    </head>
    <body>
	<br><br><br><br>
	<input type="button" value="Voltar" onclick="location.href = 'pesquisa.php'">
    </body>
</html>