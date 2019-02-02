<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Painel principal do aluno</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./painel.css">
    <style type="text/css">
    	body{
    		background-color: #b1cbfa;
    		font-family: 'Roboto';
    	}
    	.border-secondary {
		    border-color: #0f85ee !important;
		}
    	.container
    	{
    		margin-bottom: 5%;
    	}
    	
    	a:hover
    	{
    		color: #fff;
    		text-decoration: none;
    	}
    	h4
    	{
    		float: left;
    	}

    	h4::before
    	{
    		content: '';
    		height: 3px;
    		width: 20%;
    		background: currentColor;
    		display: flex;
    		background-color: #21e6c1;;
    	}

    	.area-button
    	{
    		width: 100%;
    		height: 30px;
    	}

    	.btn-ir
    	{
    		width: 100%;
    		margin-top: 12px;
    		margin-top: 12px;
    		color: #fff;
    		font-family: 'Roboto';
    		border-radius: 50px;
    	}

    	.btn-ir a
    	{
    		font-size: 18px;
    		font-family: Roboto;
    		color: #fff;
    		border: 1px solid #21e6c1;
    		transition: .4s;
    	}

    	.btn:hover
    	{
    		font-size: 18px;
    		font-family: Roboto;
    		border: 1px solid #21e6c1;
    		transition: .4s;
    		background-color: #21e6c1;
    		color: #000;
    	}

    	.border-color
    	{
    		color: #071e3d;
    		border-radius: 50px;
    		padding-bottom: 10px;
    	}

    	.card
    	{
    		border: 1px solid #ff1743;
    		border-radius: 10px;
    		box-shadow: dashed;
    	}

    </style>
</head>
<body>

<header>
	<nav class="navbar navbar-light bg-light">
  		<a class="navbar-brand" href="#"><h2 style="font-size: 18px; font-family: 'Roboto'; color: #fff;">Sistema de Apoio ao Aluno</h2></a>
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
		      <li class="nav-item">
		        <a class="nav-link" href="#">Sair</a>
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
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>

	  	<div class="carousel-inner">
		  	
			<div class="carousel-item active ">
			    <img class="d-block w-100" src="./imagens/banner3.png" alt="First slide">
			</div>
			<div class="carousel-item">
			    <img class="d-block w-100" src="./imagens/banner3.png" alt="Second slide">
			</div>
			<div class="carousel-item">
			    <img class="d-block w-100" src="./imagens/banner3.png" alt="Third slide">
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<div class="row text-center">
		
    </div>

	<div class="row">
	  <div class="border-color col-sm-3">
	    <div class="card border-secondary mb-3" style="max-width: 18rem;">
		  <div class="card-header"><i class="far fa-calendar-alt"></i>&nbsp;Meus Horários</div>
		  <div class="card-body text-secondary">
		    <h5 class="card-title">Secondary card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	  	  </div>
	  	  <div class="area-button col-sm-12">
			<button type="button" class="btn btn-primary btn-ir">
				<a href="#">Ver Horários</a></button>
		  </div>
		</div>
	  </div>

	  <div class="col-sm-3">
	    <div class="card border-secondary mb-3" style="max-width: 18rem;">
		  <div class="card-header"><i class="fas fa-dollar-sign"></i>&nbsp;Minhas Mensalidades</div>
		  <div class="card-body text-secondary">
		    <h5 class="card-title">Secondary card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	  	   </div>
	  	   <div class="area-button col-sm-12">
			<button type="button" class="btn btn-primary btn-ir">
				<a href="#">Ver Mensalidades</a>
			</button>
		   </div>
		</div>
	  </div>

	  <div class="col-sm-3">
	    <div class="card border-secondary mb-3" style="max-width: 18rem;">
		  <div class="card-header"><i class="fas fa-book-open"></i>&nbsp;Plano de Ensino</div>
		  <div class="card-body text-secondary">
		    <h5 class="card-title">Secondary card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	  	   </div>
	  	   <div class="area-button col-sm-12">
			<button type="button" class="btn btn-primary btn-ir">
				<a href="#">Ver Plano de Ensino</a>
			</button>
		   </div>
		</div>

	  </div>
	  <div class="col-sm-3">
	    <div class="card border-secondary mb-3" style="max-width: 18rem;">
		  <div class="card-header"><i class="fas fa-address-book"></i>&nbsp;Notas e Frequências</div>
		  <div class="card-body text-secondary">
		    <h5 class="card-title">Secondary card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	  	   </div>
	  	   <div class="area-button col-sm-12">
			<button type="button" class="btn btn-primary btn-ir">
				<a href="#">Ver Notas/Frequências</a>
			</button>
		   </div>
		</div>
	  </div>
  	</div>
  	

  	<div class="row">
  		<div class="col-sm-3">
	    <div class="card border-secondary mb-3" style="max-width: 18rem;">
		  <div class="card-header"><i class="fas fa-address-book"></i>&nbsp;HISTÓRICO ESCOLAR</div>
		  <div class="card-body text-secondary">
		    <h5 class="card-title">Secondary card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	  	   </div>
	  	   <div class="area-button col-sm-12">
			<button type="button" class="btn btn-primary btn-ir">
				<a href="#">Meu Histórico</a>
			</button>
		   </div>
		</div>
	  </div>
	  <div class="col-sm-3">
	    <div class="card border-secondary mb-3" style="max-width: 18rem;">
		  <div class="card-header" style="font-size: 14px;"><i class="fas fa-plus"></i>&nbsp;INSERIR DISCIPLINAS 2019/1</div>
		  <div class="card-body text-secondary">
		    <h5 class="card-title">Secondary card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	  	   </div>
	  	   <div class="area-button col-sm-12">
			<button type="button" class="btn btn-primary btn-ir">
				<a href="CadastrarDisciplina.php">Inserir Disciplinas</a>
			</button>
		   </div>
		</div>
	  </div>
	  <div class="col-sm-3">
	    <div class="card border-secondary mb-3" style="max-width: 18rem;">
		  <div class="card-header"><i class="fas fa-graduation-cap"></i>&nbsp;VER GRADE 2019/1</div>
		  <div class="card-body text-secondary">
		    <h5 class="card-title">Secondary card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	  	   </div>
	  	   <div class="area-button col-sm-12">
			<button type="button" class="btn btn-primary btn-ir">
				<a href="#">Ver Grade 2019/1</a>
			</button>
		   </div>
		</div>
	  </div>

	  <div class="col-sm-3">
	    <div class="card border-secondary mb-3" style="max-width: 18rem;">
		  <div class="card-header"><i class="fas fa-chart-pie"></i>&nbsp;DESEMPENHO 2018/2</div>
		  <div class="card-body text-secondary">
		    <h5 class="card-title">Secondary card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	  	   </div>
	  	   <div class="area-button col-sm-12">
			<button type="button" class="btn btn-primary btn-ir">
				<a href="#">Ver Desempenho</a>
			</button>
		   </div>
		</div>
	  </div>
  	</div>
</div>





<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>