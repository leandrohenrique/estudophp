<?php
	require 'config.php';

	if (isset($_POST['email']) && !empty($_POST['email'])){
		
		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));

		$sql = "INSERT INTO usuario (email, senha) values ('$email','$senha')";
		$con->query($sql);

		header('Location: index.php');
    }
?>
<html>
<head>
	<title>Inserir</title>
</head>
<body>
	<form method="POST">
		<label>Email: </label>
		<input type="text" name="email"></br></br>
		<label>Senha: </label>
		<input type="text" name="senha"></br></br>
		<input type="submit" value="Salvar">
	</form>
</body>
</html>