<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML; 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
$login_digitado= $_POST ["login"];
$senha_digitada= $_POST ["senha"];
	


$link=  mysql_connect("localhost", "root", "")
	or die ("não foi possivel conectar!!" .  mysql_error());

$banco= mysql_select_db("test", $link)
	or die ("não foi possivel realizar a busca1!!" . mysql_error());

$busca= mysql_query("SELECT login, senha FROM usuario WHERE login='$login_digitado'")
	or die ("não foi possivel realizar busca!!" .  mysql_error());

while ($reg= mysql_fetch_assoc($busca)){
    $login_db= $reg["login"];
    $senha_db= $reg["senha"];
}
if ($login_digitado=="" || $senha_digitada==""){
    echo 'Existem campos em branco';
}else {
    if ($login_db==$login_digitado && $senha_db==$senha_digitada){
	echo 'login e senha aceitos com sucesso';
	echo '<a href="../html/index.html"> clique aqui</a>';
    }else{
	echo '<html>logoff não pode ser realizado';
	echo '<a href="../html/acesso_usuario.html>clique aqui</a>';
    }
}
mysql_free_result($busca);
mysql_close($link);

?>