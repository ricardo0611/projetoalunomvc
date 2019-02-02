<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Professores da Univeridade</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>


<!-- As a link -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Cadastro de Professores da Universidade</a>
</nav>
	<div style="margin-top: 5%;" class="container">
		
		<div class="input-group mb-3">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-graduate"></i></span>
		  </div>
		  <input name="nome" type="text" class="form-control" placeholder="Nome do Professor" aria-label="Username" aria-describedby="basic-addon1">
		</div>

		<div class="input-group mb-3">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
		  </div>
		  <input name="usuario" type="text" class="form-control" placeholder="Usuário" aria-label="Username" aria-describedby="basic-addon1">
		</div>

		<div class="input-group mb-3">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
		  </div>
		  <input name="senha" type="text" class="form-control" placeholder="Senha" aria-label="Username" aria-describedby="basic-addon1">
		</div>

		<!-- 
		<div class="input-group mb-3">
		  <div class="input-group-prepend">
		    <label class="input-group-text" for="inputGroupSelect01">Options</label>
		  </div>
		  <select class="custom-select" id="inputGroupSelect01">
		    <option selected>Choose...</option>
		    <option value="1">One</option>
		    <option value="2">Two</option>
		    <option value="3">Three</option>
		  </select>
		</div> -->

		<div class="input-group-append">
	    	<button class="btn btn-outline-success" type="button"><i class="far fa-save"></i>&nbsp;Salvar</button>
	  	</div>
	</div>
</body>
</html>