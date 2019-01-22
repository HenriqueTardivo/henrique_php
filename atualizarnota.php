<?php
//CONECTA COM O BANCO DE DADOS
require_once("abreconexao.php");
?>
<html>
<head>
<head>
<title>Alteração de Participantes</title>
</head>
<body>
<H4>Alteração de Participantes</H4>
<?php
$sql="select * from nota where cod_nota='$_REQUEST[cod_nota]'";
$rs=mysql_query($sql, $conexao) or die ("Consulta nao realizada");
$linha=mysql_fetch_array($rs);
    $cod_nota=$linha["cod_nota"];
    $nome=$linha["nome"];
    $telefone=$linha["telefone"];
    $email=$linha["email"];
?>
<form name="frm_clientes" method="post" action="atualizarnota1.php">
   <table width="80%" border="0" cellspacing="2" cellpadding="2">
   <tr>
     <td>Codigo Nota</td>
     <td><input type="text" name="cod_nota" value="<?php echo $cod_nota; ?>" size="5" READONLY></td>
    </tr>
   <tr>
     <td>Nome:</td>
     <td><input type="text" name="nome" value="<?php echo $nome; ?>" size="35"></td>
    </tr>
	<tr>
     <td>telefone</td>
     <td><input type="text" name="telefone" value="<?php echo $telefone; ?>" size="35"></td>
    </tr>
	<tr>
     <td>Email:</td>
     <td><input type="text" name="email" value="<?php echo $email; ?>" size="35"></td>
    </tr>
      <td colspan=2>   <input type="submit" name="atualizar" value="Atualizar nota"></td>
    </tr>
    <tr>
   </table>
</form>
</body>
</html>
