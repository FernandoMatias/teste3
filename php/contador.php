<?php

include 'conexao.php';
$nome = $_POST["nome"];
$busca = mysql_query("Select * From teste order by endereco")
	or die("Erro ao realizar busca de contatos cadastrados");
$busca2 = mysql_query("select * from teste where endereco='sanga da areia'")
	or die("Erro ao realizar busca de contatos cadastrados");
$busca3 = mysql_query("select * from teste where idade >= 20 and idade <= 30")
	or die("Erro ao realizar busca de contatos cadastrados");

$idade = $_POST['idade'];

$total = mysql_num_rows($busca);
$quantidade1 = mysql_num_rows($busca2);
$quantidade2 = mysql_num_rows($busca3);


$porcentagem_total = $quantidade1 * (100 / $total);
$porcentagem_idade = $quantidade2 * (100 / $total);

echo number_format($porcentagem_total, 2, ',', '') . "% de pessoas do meu registro vive na sanga da areia!!<br />";
echo number_format($porcentagem_idade, 2, ',', '') . "% de pessoas do meu registro tem idade entre 20 e 30 anos!!<br />";
echo $quantidade2 . "<br />";
?>