<?php
//CONECTA COM O BANCO DE DADOS
require_once("abreconexao.php");
?>
<html>
<body>
<head>
<title>Alteração de Clientes</title>
<META HTTP-EQUIV="REFRESH" CONTENT="2; URL=alteranota.php">
</head>
<?php
echo $dados="update nota set nome='$_POST[nome]', telefone='$_POST[telefone]', email='$_POST[email]'
  where cod_nota='$_POST[cod_nota]'";

$query=mysql_query($dados, $conexao) or die (mysql_error());
echo ("<h5>Os dados do cliente foram alterados com sucesso!<br><br>Aguarde um momento</h5>");
mysql_close($conexao);
?>
</body>
</html> 

