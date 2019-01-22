<?php
//CONECTA COM O BANCO DE DADOS
require_once("abreconexao.php");
?>
<html>
<body>
Exclusão de Nota
<head>
	<title>Henrique de Souza Olivo Tardivo 1581309</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">	
<META HTTP-EQUIV="REFRESH" CONTENT="2; URL=excluirnota.php">
</head>
<?php
	echo $dados="delete from nota where cod_nota='$_REQUEST[cod_nota]'";
 	$query=mysql_query($dados, $conexao) or die (mysql_error());
	echo ("<h5>Os dados do cliente foram excluídos com sucesso!<br><br>Aguarde um momento</h5>");
	mysql_close($conexao);
?>
</body>
</html> 

