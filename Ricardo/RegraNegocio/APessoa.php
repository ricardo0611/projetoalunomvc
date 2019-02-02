<?php

namespace Ricardo\RegraNegocio;

use Ricardo\Persistencia\Interfaces\IPessoa;
use Ricardo\Persistencia\Entidades\PessoaEntidade;
use Ricardo\Persistencia\DataAccess\PessoaDAO;

abstract class APessoa implements IPessoa
{
	protected $pessoaDAO;

	public function __construct(){
		$this->pessoaDAO = new PessoaDAO();
	}

	abstract public function cadastrar($nome);

	abstract public function atualizarCadastro(PessoaEntidade $pessoa);

	public function excluirCadastro($id){
		return $this->pessoaDAO->excluirPessoa($id);
	}

	public function getById($id){
		return $this->pessoaDAO->getPessoaPorId($id);
	}
	
}