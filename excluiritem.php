

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
$sql= "select *  from item_nota";
$rs =mysql_query($sql,$conexao) or die ("Consulta nao realizada");
?>
<table border='1' width='70%' class="table" cellspacing=0 cellpadding=0>
<tr>
	<th width="20%">Excluir</th>	
	<th width="20%">Codigo do Item</th>
	<th width="20%">Produto</th>
	<th width="20%">Quantidade</th>
	<th width="20%">Codigo Nota</th>
</tr>
<?php
	while($linha=mysql_fetch_array($rs)){
	$cod_item=$linha["cod_item"];
	$produto=$linha["produto"];
	$quantidade=$linha["quantidade"];
	$cod_nota=$linha["cod_nota"];
	
?>
<tr>
	<td><a href="excluiritem1.php?cod_item=<?php echo $cod_item; ?>"
	onclick="return confirm('Deseja excluir esse registro?')">
	Excluir</a></td>
	<td><?php echo $cod_item;?></td>
	<td><?php echo $produto;?></td>
	<td><?php echo $quantidade;?></td>
	<td><?php echo $cod_nota;?></td>

</tr>
<?php
	} 
?>
</table>
</body>
</html>
 
 