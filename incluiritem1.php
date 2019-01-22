<?php
require_once("abreconexao.php");
?>

<html>
<head>
	<title>Henrique de Souza Olivo Tardivo 1581309</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
  <h5>VocÊ preencheu todos os campos. <a href='javascript:history.back(1);'><img src="icones/Arrow_left.png" border=0></a></h5>
<?php
{
   $SqlSit2 = "INSERT into item_nota";
   $SqlSit2 = $SqlSit2 . "(cod_item, produto, quantidade, cod_nota)";
   echo $SqlSit2 = $SqlSit2 . " values ('$_POST[cod_item]','$_POST[produto]','$_POST[quantidade]','$_POST[cod_nota]') ";
   $rsSit2 = mysql_query($SqlSit2, $conexao) or die (mysql_error());
   echo ("<br><br><hr><br><br><h5><img src='imagens/sucesso.gif' border=0>Cadastrado com sucesso.<br><br>Aguarde um momento</h5><br><br><hr>");
   //echo ("<META HTTP-EQUIV='REFRESH' CONTENT='1; URL=formulario.php'>");
    }   
   mysql_close($conexao);
?>
</body>
</html> 
