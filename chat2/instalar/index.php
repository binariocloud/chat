<html>
<head>
<title> :: WWC - Versão beta 1 - Instalar :: </title>
<style>

a {
	color: #000066;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	text-decoration: none;
}

a:hover {
	text-decoration: underline;
}

body, td {
	color: #000000;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	text-decoration: none;
}

button, input {
	border: 1px solid #000000;
	font-size: 12px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}

</style>
</head>
<body style="margin: 0px;">
<center>
<img src="../topo.gif" width="780" height="131"><br><br>
<?php 

//if(file_exists("../sql_vars.php")) die("O WWC já está instalado");

?>
<table cellspacing="1" cellpadding="3" bgcolor="#FFFFFF" style="border: 1px solid #000000;">
	<tr>
		<td colspan="2" bgcolor="#E0F5FD" style="background-image: url('../imgs/degrade.gif'); background-repeat: repeat-x;">
			<span style="letter-spacing: 2px; color: #FFFFFF; font-weight: bold; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px;">Preencha os campos abaixo</span>
		</td>
	</tr>
	<tr>
		<td colspan="2" bgcolor="#72CFF1"><b>Dados do MySQL</b></td>
	</tr>
	<form action="index2.php" method="post">
	<tr>
		<td bgcolor="#E0F5FD"><b>Host:</b> </td>
		<td bgcolor="#E0F5FD"> <input type="text" name="sqlHost" value="localhost"></td>
	</tr>
	<tr>
		<td bgcolor="#E0F5FD"><b>Usuário:</b> </td>
		<td bgcolor="#E0F5FD"> <input type="text" name="sqlUser"></td>
	</tr>
	<tr>
		<td bgcolor="#E0F5FD"><b>Senha:</b> </td>
		<td bgcolor="#E0F5FD"> <input type="text" name="sqlPass"></td>
	</tr>
	<tr>
		<td bgcolor="#E0F5FD"><b>Database:</b> </td>
		<td bgcolor="#E0F5FD"> <input type="text" name="sqlDB"></td>
	</tr>
	<tr>
		<td colspan="2" bgcolor="#72CFF1"><b>Gerenciamento de Salas</b></td>
	</tr>
	<tr>
		<td bgcolor="#E0F5FD"><b>Senha de Acesso:</b> </td>
		<td bgcolor="#E0F5FD"> <input type="text" name="salasSenha"></td>
	</tr>
	<tr>
		<td colspan="2" bgcolor="#72CFF1"><b>Sala Inicial</b></td>
	</tr>
	<tr>
		<td bgcolor="#E0F5FD"><b>Nome da Sala:</b> </td>
		<td bgcolor="#E0F5FD"> <input type="text" name="salaNome"></td>
	</tr>
	<tr>
		<td bgcolor="#E0F5FD"><b>Senha de Admin:</b> </td>
		<td bgcolor="#E0F5FD"> <input type="text" name="salaAdmin"></td>
	</tr>
	<tr>
		<td colspan="2" align="center" bgcolor="#E0F5FD"><button type="submit">Enviar</button></td>
	</tr>
	<tr>
		<td colspan="2" bgcolor="#72CFF1" height="16"><span></span></td>
	</tr>
	</form>
</table>
<br><br>
<table width="780" cellspacing="0" cellpadding="1">
<tr><td align="right"><span style="font-size: 10px;">Script criado por Wilker Lúcio da Silva, todos os direitos reservados</span></td></tr>
</table>
</center>
</body>
</html>
<span style="display: none;">