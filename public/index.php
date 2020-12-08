<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Exercicio</title>
        <meta charset="utf-8">
    </head>
    <body>
        <a href="inserir.php">Cadastrar</a></br></br>
        <table border="1" width="100%">
        	<tr>
	        	<th>Email</th>
	        	<th>Senha</th>
	        	<th>Acão</th>
        	</tr>
        <?php 
            require "config.php";

        	$sql = "SELECT * FROM usuario";
        	$sql = $con->query($sql);

        	foreach ($sql->fetchAll() as $usuario) {
        	?>
        	<tr>
	        	<td><?php echo $usuario['email'];?></td>
	        	<td><?php echo $usuario['senha'];?></td>
	        	<td><a href="editar.php?id=<? echo $usuario['id']; ?>">Editar</a> - <a href="excluir.php?id=<? echo $usuario['id']; ?>">Excluir</a></td>
        	</tr>
        <?php }?>
        </table>


    </body>
</html>