<!DOCTYPE html>
<html>
<head>
	<title>Projeto Ricardo</title>
</head>
<body>
	<?php 
		$cursoId = $_GET['cod'];

		require_once("../autoloader.php");
		use Ricardo\RegraNegocio\CursoPresencialBuilder;
		use Ricardo\Persistencia\Entidades\CursoEntidade;
		$cursoBuilder = new CursoPresencialBuilder();
		$curso = $cursoBuilder->getCursoPorId($cursoId);
		$curso = $curso[0];
 	?>
 	
	<form action="confirmaAlteracao.php" method="post">
		<input type="hidden" name="id" value="<?= $curso->getId();?>">
		<input type="hidden" name="nomeCurso" value="<?= $curso->getNomeCurso();?>">
		<input type="text" name="nome" placeholder="nome do curso" value="<?= $curso->getNome();?>">
		<select name="tipo">
			<option value="Presencial" <?php echo $curso->getTipo() == 'Presencial' ? 'selected' : '' ?>>Presencial</option>
			<option value="Online" <?php echo $curso->getTipo() == 'Online' ? 'selected' : '' ?>>Online</option>
		</select>
		<input type="text" name="numeroAlunos" placeholder="nª de alunos" value="<?= $curso->getNumeroAlunos();?>">
		<button type="submit">Salvar</button>
	</form>
</body>
</html>