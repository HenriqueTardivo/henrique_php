<?php
require_once("abreconexao.php");
?>
<html>
<head>
<title>Henrique de Souza Olivo Tardivo 1581309</title>
<link rel="stylesheet" type="text/css" href="estilo.css">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
</head>
<body>
<h4> Formulário de Exclusão de Itens </h4>
<?php
//codigo do evento
$sql= "select *  from nota";
$rs =mysql_query($sql,$conexao) or die ("Consulta nao realizada");
?>
<table border='1' width='70%' class="table" cellspacing=0 cellpadding=0>
<tr>
	<th width="20%">Excluir</th>	
	<th width="20%">Codigo</th>
	<th width="20%">Nome</th>
	<th width="20%">Telefone</th>
	<th width="20%">Email</th>
</tr>
<?php
	while($linha=mysql_fetch_array($rs)){
	$cod_nota=$linha["cod_nota"];
	$nome=$linha["nome"];
	$telefone=$linha["telefone"];
	$email=$linha["email"];
	
?>
<tr>
	<td><a href="excluirnota1.php?cod_nota=<?php echo $cod_nota; ?>"
	onclick="return confirm('Deseja excluir esse registro?')">
	Excluir</a></td>
	<td><?php echo $cod_nota;?></td>
	<td><?php echo $nome;?></td>
	<td><?php echo $telefone;?></td>
	<td><?php echo $email;?></td>

</tr>
<?php
	} 
?>
</table>
</body>
</html>
 
 