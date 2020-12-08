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

        	$sql = "SELECT * FROM pessoa";
        	$sql = $con->query($sql);

        	foreach ($sql->fetchAll() as $pessoa) {
        	?>
        	<tr>
	        	<td><?php echo $pessoa['email'];?></td>
	        	<td><?php echo $pessoa['senha'];?></td>
	        	<td><a href="editar.php?id=<? echo $pessoa['idpessoa']; ?>">Editar</a> - <a href="excluir.php?id=<? echo $pessoa['idpessoa']; ?>">Excluir</a></td>
        	</tr>
        <?php }?>
        </table>


    </body>
</html>