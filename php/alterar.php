<?php
include 'conexao.php';

$id = $_GET['id'];

if (isset($_POST['atualizar'])) {

    $novo_nome = $_POST['nome'];
    $novo_endereco = $_POST['endereco'];

    $update = mysql_query("UPDATE teste SET nome = '$novo_nome', endereco = '$novo_endereco' WHERE id = '$id'");

    if ($update == '') {
	echo "Ocorreu erro ao atualizar os dados!";
    } else {
	echo "Dados atualizados com sucesso!";
    }
}

$select = mysql_query("SELECT * FROM teste WHERE id = '$id'");
while ($res_select = mysql_fetch_array($select)) {

    $nome = $res_select['nome'];
    $endereco = $res_select['endereco'];
    ?>
    <?php
}
?>
<html>
    <head>
        <title>Alterando dados</title>
    </head>
    <body>
    <center>
	<h1>EDITAR DADOS</h1>
	<form method="post" >
	    <table border="2" width="25%">
		<tr>
		    <td bgcolor="#FFFF00"><b>Nome:</br>   </td><td>  <input type="text" name="nome" size="50" value="<?php echo $nome; ?>"></td>
		</tr>
		<tr>
		    <td bgcolor="#FFFF00"><b>Endereço:</b> </td><td><input type="text" name="endereco" size="50" value="<?php echo $endereco; ?>"></td>
		</tr>
	    </table>
	    <BR>
	    <input type="submit" name="atualizar" value="Atualizar">
	    <input type="button" value="Voltar" onclick="location.href = '/testefernando/php/pesquisa.php'">

	</form>
    </center>
</body>
</html>

