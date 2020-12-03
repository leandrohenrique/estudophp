<?php

$dsn = "pgsql:host=localhost;port=5432;dbname=postgres;";
$dbuser = "postgres";
$dbpassword = "root";

try{
	$con = new PDO($dsn, $dbuser, $dbpassword);
}catch(PDOExeption $e){
	echo "Falha na conexão: ". $e->getMessege();
}