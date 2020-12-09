<?php
 	require "config.php";

 	$id = $_GET['id'];

 	if (isset($id) && !empty($id)) {
 		//$email = addslashes($_POST['email']);
 		//$senha = md5(addslashes($_POST['senha']));

 		$sql = "SELECT * FROM usuario WHERE idusuario = ". $id;
 		$sql = $con->query($sql);

 		foreach ($sql as $user) {
			$email = $user['email'];
			$senha = md5($user['senha']);
 		}

 		if(isset($_POST['email']) && !empty($_POST['email'])){
 			$email = addslashes($_POST['email']);
			$sql = "UPDATE usuario SET email = '$email', senha = '$senha' WHERE idusuario = $id";
			$con->query($sql);
			header('Location: index.php');
		} 
 	}
?>
<html>
<head>
	<title>Editar</title>
</head>
<body>
	<form method="POST">
		<label>Email: </label>
		<input type="text" name="email" value="<?php echo $email;?>"></br></br>
		<label>Senha: </label>
		<input type="text" name="senha" value=""></br></br>
		<input type="submit" value="Salvar">
	</form>
</body>
</html>