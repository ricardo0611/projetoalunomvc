<?php

namespace Ricardo\RegraNegocio;

use Ricardo\RegraNegocio\APessoa;
use Ricardo\Persistencia\Entidades\PessoaEntidade;
use Ricardo\Persistencia\Entidades\UsuarioEntidade;
use Ricardo\Persistencia\DataAccess\PessoaDAO;

class Diretor extends APessoa
{
	public function cadastrar($nome){
		$entidade = new PessoaEntidade(0, $nome, 'diretor');
		return $this->pessoaDAO->cadastrar($entidade);
	}

	public function cadastrarLogin($pessoaId, $login, $senha){
		$loginEntidade = new UsuarioEntidade(0, $pessoaId, $login, $senha, 'diretor.php');

		$usuarioDAO = new \Ricardo\Persistencia\DataAccess\UsuarioDAO();
		$usuarioDAO->cadastrar($loginEntidade);
	}

	public function atualizarCadastro(PessoaEntidade $pessoa){
		$entidade = new PessoaEntidade(0, $nome, '');
		return $this->pessoaDAO->atualizar($entidade);
	}
}  

//Fazer as mesmas coisas para Aluno e Professor extends de Pessoa