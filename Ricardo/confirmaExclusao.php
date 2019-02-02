<?php

require_once('../autoloader.php');

use Ricardo\FabricaCursosDirector;
use Ricardo\RegraNegocio\CursoPresencialBuilder;
use Ricardo\RegraNegocio\CursoOnlineBuilder;

if($_POST['id']){
	$cursoPresencial = new CursoPresencialBuilder();
	$cursoPresencial->excluirCurso($_POST['id']); //chamada a função excluir curso presencial
	header('location: index.php');
}

if($_POST['id']){
	$cursoOnline = new CursoOnlineBuilder();
	$cursoOnline->excluirCurso($_POST['id']); //chamada a função excluir curso online
	header('location: index.php');
}

