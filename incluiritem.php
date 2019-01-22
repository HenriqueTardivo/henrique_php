<?php
//CONECTA COM O BANCO DE DADOS
require_once("abreconexao.php");
?>
<html>
<head>
	<title>Henrique de Souza Olivo Tardivo 1581309</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

<table border="0">
<form name="form" action="incluiritem1.php" method="post">
	 <tr>
		<td class="table">Codigo Item:</td>
		<td><input type="text" name="cod_item" size="20" maxlength="10" required class="formulario"></td><br>
	 </tr>
     <tr>
		<td class="table">Produto:</td> 
		<td><input type="text" name="produto" size="50" required class="formulario"></td><br>
	 </tr>
     <tr>
		<td class="table">Quantidade</td> 
		<td><input type="text" name="quantidade" size="50" required class="formulario"></td><br>
     <tr>
	<td class="table">Nota&nbsp;</td>
    <td height="left"><select name="cod_nota"  size="1" maxlength="100" class="formulario">
	<?php
		$sql= "select *  from nota order by nome";
		$rs =mysql_query($sql,$conexao) or die ("Consulta nao realizada");
		echo("<option>Escolha a Nota</option>");
		while ($linha =mysql_fetch_array($rs)){
			echo $nome=$linha["nome"];
			echo $cod_nota=$linha["cod_nota"];
			echo "<option value=$cod_nota>$cod_nota - $nome</option>";
		}
		echo("</select>");
	?>
	</td>
</tr> 

     <tr>	
		<td class="table"></td>
		<td class="table"><input type="reset" class="botao" value="Limpar">
						<input type="submit" value="Enviar" class="botao">
		</td>
	 </tr>
	 
</form>
</table>
</body>
</html>