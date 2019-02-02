<?php

require_once('../autoloader.php');

use Ricardo\RegraNegocio\Diretor;
use Ricardo\RegraNegocio\Aluno;
use Ricardo\RegraNegocio\Professor;

if($_POST['tipo'] == 'diretor'){
	$diretor = new Diretor();
	$pessoaId = $diretor->cadastrar($_POST['nome']);

	$diretor->cadastrarLogin($pessoaId, $_POST['usuario'], $_POST['senha']);
	
	echo '<p>Cadastro efetuado com sucesso.</p>';
	echo "<a href='javascript: history.go(-2);'>Voltar</a>";
	return;
}

if($_POST['tipo'] == 'aluno'){
	$aluno = new Aluno();
	$pessoaId = $aluno->cadastrar($_POST['nome']);

	$aluno->cadastrarLogin($pessoaId, $_POST['usuario'], $_POST['senha']);
	
	echo '<p>Cadastro efetuado com sucesso.</p>';
	echo "<a href='javascript: history.go(-2);'>Voltar</a>";
	return;
}

if($_POST['tipo'] == 'professor'){
	$professor = new Professor();
	$pessoaId = $professor->cadastrar($_POST['nome']);

	$professor->cadastrarLogin($pessoaId, $_POST['usuario'], $_POST['senha']);
	
	echo '<p>Cadastro efetuado com sucesso.</p>';
	echo "<a href='javascript: history.go(-2);'>Voltar</a>";
	return;
}


