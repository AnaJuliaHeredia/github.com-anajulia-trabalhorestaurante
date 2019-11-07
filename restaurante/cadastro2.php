<html lang = "pt-br">
<head>
	<title>Cadastro de Usuário</title>
	<meta charset="UTF=8"/>
	<link rel="stylesheet" type="text/css" href="estilo\style.css"/>
	</head>
<body>
<?php	
	//Criação das variáveis que armazenarão os dados cadastrados na página cadastro.html
	$N = $_POST["nome"];
	$ME = $_POST["mesa"];
	

	//Comando de cadastro na tabela contado do banco de dados agenda
	$Comando = "INSERT INTO pedidos(nome,mesa) VALUES('$N','$ME');";
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "purosabor";

	//Conectar ao MYSQL
	$cone = mysqli_connect($host,$user,$password, $db) or die ("impossivel se conectar ao MYSQL");
	
	//Executar a query para cadastrar
	$ins = mysqli_query($cone, $Comando);
	
	if($ins){
		echo("<script>alert('Cadastro realizado com sucesso');
			window.location.href='cardapio.html';</script>");
		include ("cardapio.html");
	}else{
		echo("Impossivel cadastrar!");
		include ("cardapio.html");
	}
?>
</div>
</body>
</html>	