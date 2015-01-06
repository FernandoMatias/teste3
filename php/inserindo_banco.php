<html>
    <head>
	<title>Inserindo no banco</title>
    </head>
    <body>

	<?php
	include 'conexao.php';

	$nome = $_POST ['nome'];
	$endereco = $_POST ['endereco'];
	if ($nome == "" || $endereco == "") {
	    echo 'Existe(m) campo(s) em branco!! ';
	} else{
	    
	    
	if ($link) {
	    $sql = "insert into teste(nome, endereco) values ('$nome','$endereco')";
	    $res2 = mysql_db_query("test", $sql, $link);
	} else {
	    echo "erro ao inserir os dados no banco";
	}
	if ($res2) {
	    echo "Os dados foram inseridos no benco com sucesso!";
	} else {
	    echo "erro ao cadastrar clientes";
	}
}
	mysql_close($link);
	?>
	<input type="button" value="Voltar" onclick="location.href = '../html/formulario.html'"> 
    </body>

</html>