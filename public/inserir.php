
<html>
<head>
	<title>Inserir</title>
</head>
<body>
	<?php
		require 'config.php';

		if (isset($_POST['nome']) && !empty($_POST['nome'])){
			
			$nome = addslashes($_POST['nome']);
			$email = addslashes($_POST['email']);

			$sql = "INSERT INTO pessoa (nome,email) values ($nome,$email)";
			$con->query($sql);

			header("Location: index.php");
	    }
	?>
	<form method="POST">
		<label>Nome: </label>
		<input type="text" name="nome"></br></br>
		<label>Email: </label>
		<input type="text" name="email"></br></br>
		<input type="submit" value="Salvar">
	</form>

	

</body>
</html>