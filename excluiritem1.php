<?php
//CONECTA COM O BANCO DE DADOS
require_once("abreconexao.php");
?>
<html>
<body>
<head>
<title>Exclusão de Clientes</title>
<META HTTP-EQUIV="REFRESH" CONTENT="2; URL=excluiritem.php">
</head>
<?php
	echo $dados="delete from item_nota where cod_item='$_REQUEST[cod_item]'";
 	$query=mysql_query($dados, $conexao) or die (mysql_error());
	echo ("<h5>Os dados do cliente foram excluídos com sucesso!<br><br>Aguarde um momento</h5>");
	mysql_close($conexao);
?>
</body>
</html> 

