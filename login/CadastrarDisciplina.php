<?php

	require_once('../autoloader.php');
	

	use Ricardo\RegraNegocio\CursoPresencialBuilder;
	use Ricardo\Persistencia\Entidades\CursoEntidade;

	$cursoBuilder = new CursoPresencialBuilder();

	$cursos = $cursoBuilder->getCursos();
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Busca de Disciplinas :: Aluno</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./painel.css">
    <style type="text/css">
    	.container, table
    	{
    		margin-top: 5%;
    	}
    </style>
</head>
<body>

<header>
	<nav class="navbar navbar-dark bg-dark">
  		<a class="navbar-brand" href="#">Sistema de Apoio ao Aluno</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Sobre</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Meu Curriculo</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		  </div>
	</nav>
</header>

<div class="container">
		<h5>Busca de Disciplinas para o período 2019/1</h5>

		<form action="" method="POST">  <!--Formulário de Busca de diwsciplinas-->
			<div class="input-group mb-3">

			  <div class="input-group-prepend">
			    <label class="input-group-text" for="inputGroupSelect01">Selecione o tipo da Disciplina:</label>
			  </div>
			  <select class="custom-select" id="inputGroupSelect01">
			    <option value="1">Presencial</option>
			    <option value="2">Á Distância</option>
			  </select>

			  <div class="input-group-prepend">
			    <label class="input-group-text" for="inputGroupSelect01">Turno</label>
			  </div>
			  <select class="custom-select" id="inputGroupSelect01">
			    <option value="1">Matutino</option>
			    <option value="2">Vespertino</option>
			    <option value="3">Noturno</option>
			  </select>

			  <div class="input-group-prepend">
			    <label class="input-group-text" for="inputGroupSelect01">Nome da Disciplina:</label>
			  </div>
			  <input type="text" name="nome_disciplina">
			</div>
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <label class="input-group-text" for="inputGroupSelect01">Código:</label>
			    <input type="text" name="codigo_disciplina">
			  </div>

			  <div class="input-group-prepend">
			    <label class="input-group-text" for="inputGroupSelect01">Departamento:</label>
			  </div>
			  <select class="custom-select" id="inputGroupSelect01">
			    <option selected>Todas opções</option>
			    <option value="1">ENG - Engenharia da Computação</option>
			    <option value="2">CMP - Ciência da Computação</option>
			    <option value="3">ARQ - Escola de Arquitetura e Urbanismo</option>
			    <option value="4">TEO - Teologia</option>
			  </select>
			</div>
			<div class="row">
					<div class="col-sm col-lg-10">
					   <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i>&nbsp;Buscar Disciplinas</button>
					</div>
					<div class="col-sm col-lg-2">
					    <button type="button" class="btn btn-primary"><i class="fas fa-user-graduate"></i>&nbsp;Ver Grade</button>
					</div>
			</div>
		</form>


		<div class="table-responsive-lg">
			<table class="table text-center">	
			  <h4 style="margin-top: 5%;">Disciplinas para 2019/1</h4>
			  <thead class="thead-light text-center">
			    <tr>
			      <th scope="col">Código</th>
			      <th scope="col">Nome da Disciplina</th>
			      <th scope="col">Tipo</th>
			      <th scope="col">Turno/Horário</th>
			      <th scope="col">Quantidade de Vagas</th>
			      <th scope="col">Ação</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	foreach ($cursos as $curso) {	?>
			    <tr>
			      <th scope="row"><?=$curso->getId();?></th>
			      <td><?=$curso->getNome();?></td>
			      <td><?=$curso->getTipo();?></td>
			      <td>Matutino - 10:00 ás 12:15</td>
			      <td><?=$curso->getNumeroAlunos();?></td>
			      <td>
			      	<!--<button type="button" class="btn btn-primary"></button>-->
			      	<button type="button" class="btn btn-success">Matricular</button>
			      	<button type="button" class="btn btn-danger">Remover</button>
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>

		</div>
	</div>
</body>
</html>