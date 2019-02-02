<?php
	session_start();
	print_r("Usuario: ". $_SESSION['usuarioNome']);	
?>

<br>
<a href="sair.php">Sair</a>