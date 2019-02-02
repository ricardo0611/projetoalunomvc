<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <!--<link rel="icon" href="imagens/favicon.ico">-->

    <title>Sistema do Aluno - Login</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

 
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">SAF<br>
            <h3 style="font-size: 16px; text-align: center;">Sistema de Acesso a Faculdade</h3>
        </h2>
        <label for="" class="sr-only">Usuário</label>
        <input type="text" name="usuario" id="inputEmail" class="form-control" placeholder="Usuário/Matrícula " required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
        <label style="margin-top: 10px; "><a style="text-align: center; text-decoration: none;" href="">Esqueceu sua senha?</a></label>
        <label style="margin-top: 10px; "><a style="text-align: center; text-decoration: none;" href="../Ricardo/cadastraPessoa.html">&nbsp; | &nbsp;&nbsp;Cadastre-se</a></label>
        
       

       <?php
			require_once('../autoloader.php');

			use Ricardo\Persistencia\DataAccess\UsuarioDAO;

			if(isset($_POST['usuario'])){
			    $usuarioDAO = new UsuarioDAO();

			    $usuarioEntidade = $usuarioDAO->getPorLogin($_POST['usuario'], $_POST['senha']);
			    //$variavel = classe -> método();

			    if($usuarioEntidade){
			        ?> <!--Fecha PHP-->

			        <?php 
			        //Seleciona a Pagina e Redireciona para a pagina cadastrada no banco
			        $pagina = $usuarioEntidade->getPagina();
			        header('Location:'.$pagina);

			    }else{
			        ?> 
				        <div style="margin-top: 15%;" class="alert alert-danger alert-dismissible fade show" role="alert">
				            <strong class="text-center" style="font-size: 14px; text-align: center;">Usuário ou senha incorretos!</strong>
				               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                 <span aria-hidden="true">&times;</span>
				              </button>
				            </div>
			            </form>
			           </div> <!-- /container -->
			        <?php 
			    }
			}
	  	?>
        
    


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=".../js/ie10-viewport-bug-workaround.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
