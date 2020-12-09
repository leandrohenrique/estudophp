<?php
require 'config.php';

$id = $_GET['id'];

if(isset($id) && !empty($id)){

	$sql = "DELETE From usuario where idusuario = $id";
	$con->query($sql);

	header("Location: index.php");
}