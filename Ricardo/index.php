<!DOCTYPE html>
<html>
<head>

	<title>SAF - Lista de Cursos Cadastrados</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/arquivo_css.css">
	
</head>
<body>

	<?php
	require_once("../autoloader.php");
	use Ricardo\RegraNegocio\CursoPresencialBuilder;
	use Ricardo\Persistencia\Entidades\CursoEntidade;
	$cursoBuilder = new CursoPresencialBuilder();
	$cursos = $cursoBuilder->getCursos();
	?>

	<!-- Image and text -->
	<nav class="navbar navbar-light bg-light">
	  <a class="navbar-brand" href="#">
	    <img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
	    Sistema Online do Aluno
	  </a>
	</nav>
	<div class="container">
			<div class="row" style="background-color: #20202f;border-radius: 40px;">
				<div class="col-sm-12 col-md-12 col-lg-3">
					<a style="margin-bottom: 10px; margin-top: 2%;" class="btn btn-outline-primary left" href="../http:/localhost/projetoalunomvc" role="button"><i class="fas fa-arrow-alt-circle-left"></i>&nbsp;Voltar</a>
				</div>

				<div class="col-sm-12 col-md-12 col-lg-6">		
					<h3 style="font-size: 22px; color: #fff; margin-left: -2px; margin-top: 10px;">Cadastro de Cursos</h3>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-3">
					<a style="margin-bottom: 10px; margin-top: 2%;" class="btn btn-primary right" href="cadastraCurso.php" role="button"><i class="far fa-clipboard"></i>&nbsp;Cadastrar Nova Disciplina</a>
				</div>
			</div>
	</div>
	<div class="container">
			<table class="table table-responsive table-striped">
				<thead class="thead-light" style="text-align: center;">
					<tr class="center">
						<th scope="row">#</th>
						<th scope="row">Nome do Curso</th>
						<th scope="row">Nome da Disciplina</th>
						<th scope="row">Tipo</th>
						<th scope="row">Quantidade de Vagas</th>
						<th scope="row">Ações</th>
					</tr>
				</thead>

				<tbody style="text-align: center;">
					<?php foreach ($cursos as $curso) { ?>
						<tr data-id="<?=$curso->getId();?>">
							<td><?=$curso->getId();?></td>
							<td><?=$curso->getNome();?></td> <!--Campo nome da disciplina-->
							<td><?=$curso->getTipo();?></td>
							<td></td>
							<td><?=$curso->getNumeroAlunos(); ?></td>
							<td>
								<a class="btn btn-success right" onclick="abrirModal(this, 'e')" data-toggle="modal" href="atualizarCurso.php?cod=<?=$curso->getId();?>"><i class="far fa-edit"></i>&nbsp;Editar</a>

								<a class="btn btn-danger right" 
								data-toggle="modal" 
								onclick="abrirModal(this, 'x')"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>

		<!-- Modal Editar/Alterar dados da disciplina-->
		<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Editar Curso</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form method="POST" action=""> <!--Falta fazer-->
			        	<div class="form-group">
				            <label for="recipient-name" class="col-form-label">Nome do Curso:</label>
				            <input type="text" class="form-control" id="recipient-name">
				        </div>
			        	<div class="form-group">
				            <label for="recipient-name" class="col-form-label">Nome da Disciplina:</label>
				            <input type="text" class="form-control" id="recipient-name">
				        </div>
				        <div class="form-group">
				        	<label for="recipient-name" class="col-form-label">Tipo:</label>
							  <select class="custom-select" id="inputGroupSelect01">
							    <option selected>Selecione o tipo de curso...</option>
							    <option value="Presencial">Presencial</option>
							    <option value="Online">Online</option> 
							  </select>
				        </div>
				        <div class="form-group">
				            <label for="recipient-name" class="col-form-label">Quantidade de Vagas:</label>
				            <input type="text" class="form-control" id="recipient-name">
					    </div>	
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
			        <button type="button" class="btn btn-primary">Salvar Alteração</button>
			      </div>
			    </div>
			  </div>
		</div>

		<!-- Modal deseja excluir? -->
		<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		    	<form action="confirmaExclusao.php" method="POST" >
		    		
	    			<input type="hidden" name="id" id="idCurso">

					<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Excluir Disciplina</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
					</div>
		      		<div class="modal-body">
		        		Deseja mesmo excluir esta disciplina? </br> Dados da disciplina: <br>

		        		Identificador: &nbsp;

		      		</div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
			        <button type="submit" id="btn-excluir" class="btn btn-danger"><i class="far fa-trash-alt"></i>&nbsp;Excluir</button>
			      </div>
		      </form>
		    </div>
		  </div>
		</div>
	</div>
	<script type="text/javascript">
		function abrirModal(el ,type){
			$($('input[name=id]')[0]).val($(el).closest("tr").attr('data-id'));
			
			if (type=='e'){
			$("#exampleModal1").modal('show');
			//$("#idCurso").val(idCurso);
			//console.log(idCurso);
			}
			if (type=='x'){
			$("#exampleModal2").modal('show');
			//$("#idCurso").val(idCurso);
			//console.log(idCurso);
			}
		}
		$("#btn-excluir").on('click', function(){
           $("#form").submit();
		});
	</script>

</body>
</html>