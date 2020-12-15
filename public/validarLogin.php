<?php
require "config.php";

$email = addslashes($_POST['email']);
$senha = md5(addslashes($_POST['senha']));

if (isset($email) && !empty($email)) {

	$sql = "SELECT * FROM usuario";
	$sql = $con->query($sql);

	foreach ($sql as $value) {
		$campoEmail = $value['email'];
		$campoSenha = md5($value['senha']);
	}

	if($email == $campoEmail) {
		header("Location: index.php");
	}else {
		header('Location: login.php');
	}

}
