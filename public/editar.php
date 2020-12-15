<?php
 	require "config.php";

 	$id = 0;

 	if (isset($_GET['id']) && !empty($_GET['id'])) {
 		$id = addslashes($_GET['id']);
 	}

	if(isset($_POST['email']) && !empty($_POST['email'])){
		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));
		$sql = "UPDATE usuario SET email = '$email', senha = '$senha' WHERE idusuario = $id";
		$con->query($sql);
		header('Location: index.php');
	}

	$sql = "SELECT * FROM usuario WHERE idusuario = ".$id;
	$sql = $con->query($sql);

	$dado = $sql->fetch();
 		 

?>
<html>
<head>
	<title>Editar</title>
</head>
<body>
	<form method="POST">
		<label>Email: </label>
		<input type="text" name="email" value="<?php echo $dado['email'];?>"></br></br>
		<label>Senha: </label>
		<input type="text" name="senha" value=""></br></br>
		<input type="submit" value="Salvar">
	</form>
</body>
</html>