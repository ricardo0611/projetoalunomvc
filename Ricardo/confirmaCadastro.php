<?php

require_once('../autoloader.php');

use Ricardo\FabricaCursosDirector;
use Ricardo\RegraNegocio\CursoPresencialBuilder;
use Ricardo\RegraNegocio\CursoOnlineBuilder;


if($_POST['tipo'] == 'Presencial'){
	$cursoPresencial = new FabricaCursosDirector(new CursoPresencialBuilder());
	$cursoPresencial->construirCurso($_POST['nome'], $_POST['tipo'], $_POST['numeroAlunos']);
	echo '<p>' . $cursoPresencial->getCurso() . '</p>';
	echo "<a href='javascript: history.go(-1);'>Voltar</a>";
	return;
}

$cursoOnline = new FabricaCursosDirector(new CursoOnlineBuilder());
$cursoOnline->construirCurso($_POST['nome'], $_POST['numeroAlunos']);
echo '<p>' . $cursoOnline->getCurso() .'</p>';

echo "<a href='javascript: history.go(-2);'>Voltar</a>";