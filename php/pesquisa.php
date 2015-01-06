<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML; 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include 'conexao.php';

$list = array();
$busca = mysql_query("Select * From teste order by nome")
	or die("Erro ao realizar busca de contatos cadastrados");
while ($escrever = mysql_fetch_array($busca)) {
    $list[] = $escrever;
}

mysql_close($link);
?>
<html>
    <head>
	<title>Pesquisa</title>
	<link type="text/css" rel="stylesheet" href="../css/tabela.css" />
	<link type="text/css" rel="stylesheet" href="../css/index.css" />
    </head>
    <body>
	<div id="conteiner">
	    <div id="cebecalho"><div id="com_cabecalho"></div></div>
	    <div id="barralateral_esq"><input type="button" value="Voltar" onclick="location.href = '../html/index.html'"></div>
	    <div id="barralateral_dir"></div>
	    <div id="corpo">
		<center>
		    <table>
			<tr><th>Nome</th> <th>Endereço</th> <th colspan="2">Comandos</th></tr>
			<?php
			foreach ($list as $escrever) {
			    ?>
    			<tr>
    			    <td bgcolor="ffffff">
				    <?php echo $escrever['nome']; ?> 
    			    </td>
    			    <td bgcolor="ffffff">
				    <?php echo $escrever['endereco']; ?> 
    			    </td>
    			    <td width="75" bgcolor="ffffff">
				    <?php $id = $escrever['id']; ?>
			<center><input type="button" value="Apagar" onclick="location.href = 'deletar.php?id=<?php echo $id ?>'"></center> 
    			    </>
			    <td width="75" bgcolor="ffffff">
    				<center><input type="button" value="Alterar" onclick="location.href = 'alterar.php?id=<?php echo $id ?>'"></center>
    			    </td>
    			</tr>
			    <?php
			}
			?>
		    </table>

		    <br><br>
		    <?php
		    $total = mysql_num_rows($busca);
		    If ($total == "0") {
			echo 'Não existem mais registros na tabela!!!';
		    }
		    ?>
		</center>
	    </div>
	    <div id="rodape"><div id="logo"> </div></div>

	</div>
    </body>
</html>