<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Interface:Diretor</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<style type="text/css">
		.funcoes_diretoria
		{
			margin-top: 5%;
		}

		.btn-primary
		{
			width: 100%;
		}

		h5{
			font-size: 18px;
		}

		p{
			text-align: center;
		}

		h2
		{
			color: #ff1743;
			font-size: 26px;
			
		}
	</style>
</head>
<body>


	<!-- Image and text -->
	<nav class="navbar navbar-light bg-light">
	  <a class="navbar-brand" href="#">
	    <img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
	    Painel de Acesso Diretoria
	  </a>

	  <div class="dropdown">
	  	
	  	<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		  	Ricardo Oliveira
		  	<i class="far fa-user text-left"></i>
	  	</a> 
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
	</nav>


	<div class="container">
		
			<?php

			require_once('../autoloader.php');
			

			use Ricardo\Persistencia\DataAccess\UsuarioDAO;
			use Ricardo\Persistencia\Entidades\PessoaEntidade;

			
			?>

			<div style="margin-top: 3%;">

			<?php $nome = new PessoaEntidade(); 
			
			echo "<h2> Bem Vindo, Ricardo Oliveira da Cruz!</h2>" .$nome->getNome(); 
			echo "<h6>Matricula: 0000.0000-19</h6>";
		?>
			

		</div>
		<div class="row funcoes_diretoria">
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div style="background-color: #ecf0f1; " class="card" style="width: 18rem;">
				  <img class="card-img-top img-responsive" src="./imagens/professor.png" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title text-center">Cadastrar Professores</h5>
				    <p class="card-text">Acesse esta opção para realizar o cadastro de Professores da faculdade!</p>
				    <a href="../Ricardo/cadastraProfessor.html" class="btn btn-primary">Acessar&nbsp;<i class="far fa-arrow-alt-circle-right"></i></a>
				  </div>
				</div>
			</div>
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div  style="background-color:#ecf0f1; " class="card" style="width: 18rem;">
				  <img class="card-img-top img-responsive" src="./imagens/aluno_img.png" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title text-center">Cadastrar Disciplinas</h5>
				    <p class="card-text">Acesse esta opção para realizar o cadastro de Disciplinas da faculdade!</p>
				    <a href="../Ricardo/cadastraCurso.php" class="btn btn-primary">Acessar&nbsp;<i class="far fa-arrow-alt-circle-right"></i></a>
				  </div>
				</div>
			</div>
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div style="background-color: #ecf0f1;" class="card" style="width: 18rem;">
				  <img class="card-img-top" src="./imagens/aluno.jpg" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title text-center">Desempenho Geral</h5>
				    <p class="card-text">Acesse esta opção para ver o relatório de desempenho dos alunos da faculdade!</p>
				    <a href="#" class="btn btn-primary">Acessar&nbsp;<i class="far fa-arrow-alt-circle-right"></i></a>
				  </div>
				</div>
			</div>
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div style="background-color: #ecf0f1;" class="card" style="width: 18rem;">
				  <img class="card-img-top" src="./imagens/dept.jpg" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title text-center">Gerenciar Departamentos</h5>
				    <p class="card-text">Acesse esta opção para realizar o cadastro de Disciplinas da faculdade!</p>
				    <a href="#" class="btn btn-primary">Acessar&nbsp;<i class="far fa-arrow-alt-circle-right"></i></a>
				  </div>
				</div>
			</div>
		</div>
		<div>
		
		

		</div>

	</div>

	




















	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../login/js/ie10-viewport-bug-workaround.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>






