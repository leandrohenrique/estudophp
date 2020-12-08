
<html>
<head>
	<title>Inserir</title>
</head>
<body>
	<?php
		require 'config.php';

		if (isset($_POST['email']) && !empty($_POST['email'])){
			
			$email = addslashes($_POST['email']);
			$senha = addslashes($_POST['senha']);

			$sql = "INSERT INTO usuario (email,senha) values ($email,$senha)";
			$con->query($sql);

			header("Location: index.php");
	    }
	?>
	<form method="POST">
		<label>Nome: </label>
		<input type="text" name="email"></br></br>
		<label>Email: </label>
		<input type="text" name="senha"></br></br>
		<input type="submit" value="Salvar">
	</form>

	

</body>
</html>