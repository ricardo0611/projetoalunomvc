<!DOCTYPE html>
<html>
<head>
	<title>Projeto Ricardo</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/arquivo_css.css">
	<style type="text/css">
		.excluirDisciplina, .cadastraDisciplina, .editarDisciplina
		{
			margin-top: 3%;
			margin-bottom: 2%;
		}

		nav-item a 
		{
			color: #1abc9c;
		}

		.nav-item a
		{
			color: ##3498db;
		}

		.nav-item a:hover 
		{
			color: #3498db;
		}

		.nav-tabs ul
		{
			color: #c0392b;
		}
	</style>
</head>
<body>

    <!-- Image and text -->
	<nav class="navbar navbar-light bg-light">
	  <a class="navbar-brand" href="#">
	    <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
	    Cadastro de Cursos da Universidade
	  </a>
	</nav>
		

	<div class="container">

		<a style="margin-bottom: 10px;" class="btn btn-outline-primary" href="#" role="button">
			<i class="fas fa-arrow-alt-circle-left"></i>&nbsp;Voltar
		</a>
		
		<ul class="nav nav-tabs center-block active" id="myTab" role="tablist">
		  <li class="nav-item">
		    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-plus-circle"></i>&nbsp;Cadastrar Disciplina</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="far fa-trash-alt"></i>&nbsp;Excluir Disciplina</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="far fa-edit"></i>&nbsp;Editar Disciplina</a>
		  </li>
		</ul>

		<div class="tab-content" id="myTabContent">
		  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
		  	<form class="cadastraDisciplina" action="cadastraDisciplina.php" method="post">
				<div class="form-group">
				    <label for="">Nome da Disciplina</label>
				    <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
				    <small id="" class="form-text text-muted"></small>
				</div>

				<div class="form-group">
				    <label for="">Carga horária</label>
				    <input type="text" name="cargaHoraria" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
				    <small id="" class="form-text text-muted"></small>
				</div>

				<div class="form-group">
				     <label for="">Quantidade de Créditos</label>
				    <input type="text" name="quantidadeCreditos" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
				    <small id="" class="form-text text-muted"></small>
				</div>

				<!-- <input type="text" name="nome" placeholder="nome do curso"> -->
				<div class="form-group">
				    <label for="exampleFormControlSelect1">Escolha o tipo da Disciplina</label>
				    <select name="tipo" class="form-control" id="exampleFormControlSelect1">
				    	<option value="Presencial" selected>Presencial</option>
					    <option value="Online">Online</option>
				    </select>
				</div>
				<div class="form-group">
				    <label for="">Quantidade de Vagas</label>
				    <input type="text" name="numeroAlunos" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
				    <small id="" class="form-text text-muted"></small>
				</div>
				
				<button class="btn btn-outline-success" type="submit"><i class="far fa-save"></i>&nbsp;Salvar</button>
		    </form>
		  </div>  <!--Funciona 100%-->
		 
		  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
		  	<form class="excluirDisciplina" action="confirmaExclusao.php" method="post">
				<div class="form-group">
				    <!-- <label for="" style="font-size: 20px; color: #20202f; font-weight: bold; margin-bottom: -10px;">Pesquisar Disciplinas</label><hr> -->
				    <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome da Disciplina">
				    <small id="" class="form-text text-muted"></small>
				</div>

				<form action="" method="POST">
					<div class="input-group mb-3">

					  <div class="input-group-prepend">
					    <label class="input-group-text" for="inputGroupSelect01">Selecione o tipo da Disciplina:</label>
					  </div>
					  <select class="custom-select" id="inputGroupSelect01">
					    <option value="1">Presencial</option>
					    <option value="2">Online</option>
					  </select>

					  <div class="input-group-prepend">
					    <label class="input-group-text" for="inputGroupSelect01">Turno</label>
					  </div>
					  <select class="custom-select" id="inputGroupSelect01">
					    <option value="1">Matutino</option>
					    <option value="2">Vespertino</option>
					    <option value="3">Noturno</option>
					  </select>

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
					<button type="submit" class="btn btn-outline-success"><i class="fas fa-search"></i>&nbsp;Buscar Disciplinas</button>
				</form>


				<hr>

				<table class="table">
					  <thead class="thead bg-light">
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Nome Disciplina</th>
					      <th scope="col">Tipo</th>
					      <th scope="col">Horário</th>
					      <th scope="col">Quant. Créditos</th>
					      <th scope="col">Carga Horária</th>
					      <th scope="col">Turma</th>
					      <th scope="col">Ação</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">1</th>
					      <td>Mark</td>
					      <td>Otto</td>
					      <td>@mdo</td>
					      <td>@mdo</td>
					      <td>Otto</td>
					      <td>@mdo</td>
					      <td>
					      	<button type="" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i>&nbsp;Excluir</button>
					      </td>
					    </tr>
					    <tr>
					      <th scope="row">2</th>
					      <td>Jacob</td>
					      <td>Thornton</td>
					      <td>@mdo</td>
					      <td>@fat</td>
					      <td>Otto</td>
					      <td>@mdo</td>
					      <td>
					      	<button type="" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i>&nbsp;Excluir</button>
					      </td>
					    </tr>
					    <tr>
					      <th scope="row">3</th>
					      <td>Larry</td>
					      <td>@mdo</td>
					      <td>the Bird</td>
					      <td>@twitter</td>
					      <td>Otto</td>
					      <td>@mdo</td>
					      <td>
					      	<button type="" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i>&nbsp;Excluir</button>
					      </td>
					    </tr>
					  </tbody>
					</table>
		    </form>
		  </div>
		  
		  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
		  	<form class="editarDisciplina" action="confirmaEdicao.php" method="post">
				<div class="form-group">
				    <label for="">Nome da Disciplina</label>
				    <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
				    <small id="" class="form-text text-muted"></small>
				</div>

				<div class="form-group">
				    <label for="">Carga horária</label>
				    <input type="text" name="cargaHoraria" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
				    <small id="" class="form-text text-muted"></small>
				</div>

				<div class="form-group">
				     <label for="">Quantidade de Créditos</label>
				    <input type="text" name="quantidadeCreditos" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
				    <small id="" class="form-text text-muted"></small>
				</div>

				<!-- <input type="text" name="nome" placeholder="nome do curso"> -->
				<div class="form-group">
				    <label for="exampleFormControlSelect1">Escolha o tipo da Disciplina</label>
				    <select name="tipo" class="form-control" id="exampleFormControlSelect1">
				    	<option value="Presencial" selected>Presencial</option>
					    <option value="Online">Online</option>
				    </select>
				</div>
				<div class="form-group">
				    <label for="">Quantidade de Vagas</label>
				    <input type="text" name="numeroAlunos" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
				    <small id="" class="form-text text-muted"></small>
				</div>
				
				<button class="btn btn-outline-success" type="submit"><i class="far fa-save"></i>&nbsp;Salvar Alteração</button>
		    </form>
		  </div>
		</div>


		




		<!-- <a style="margin-bottom: 10px; margin-top: 2%;" class="btn btn-primary right" href="cadastraCurso.php" role="button"><i class="far fa-clipboard"></i>&nbsp;Cadastrar Nova Disciplina</a> -->
	</div>
</body>
</html>