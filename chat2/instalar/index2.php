<html>
<head>
<title> :: WWC - Versão Beta 1 :: </title>
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


$sqlHost = $_POST[sqlHost];
$sqlUser = $_POST[sqlUser];
$sqlPass = $_POST[sqlPass];
$sqlDB = $_POST[sqlDB];
$senha = $_POST[salasSenha];
$salaNome = $_POST[salaNome];
$salaAdmin = $_POST[salaAdmin];

if(@mysql_connect($sqlHost, $sqlUser, $sqlPass)) {
	if(@mysql_select_db($sqlDB)) {		
		$sql = fopen("webchat.sql", "r");
		$sqlD = fread($sql, filesize("webchat.sql"));
		
		$sqlD = explode("\r\n", $sqlD);
		
		reset($sqlD);
		
		while($row = each($sqlD)) {
			if($row[1]) {
				mysql_query($row[1]) or die("Erro:<br>" . mysql_error());
			}
		}
		
		mysql_query("insert into extra_values (nome, valor_txt) values ('senha_gerenc', '{$senha}')");
		mysql_query("insert into secoes (nome, adm_senha) values ('{$salaNome}','{$salaAdmin}');");
		
		$arquivo = fopen("../sql_vars.php", "w");
		
		$dados .= "<?php\r\n";
		$dados .= "\$host = \"{$sqlHost}\";\r\n";
		$dados .= "\$user = \"{$sqlUser}\";\r\n";
		$dados .= "\$password = \"{$sqlPass}\";\r\n";
		$dados .= "\$bd = \"{$sqlDB}\";\r\n";
		$dados .= "?>";
		
		fwrite($arquivo, $dados);
		
		echo "Instalação concluida com sucesso<br><br>Clique <a href='../admin/'>aqui</a> para gerenciar as salas";
	} else {
		echo "A database <i>{$sqlDB}</i> não existe, volte e selecione uma database existente";
	}
} else {
	echo "Não foi possivel efetuar a conexão com o banco de dados, volte, verifique os dados e tente novamente";
}

?>
</body>
</html>
<span style="display: none;">